<?php
namespace App\Controllers\Search;

use App\Controllers\Search\SearchPipe;
use Core\Http\Req;
use Core\Http\Res;
// use Core\Controller;
use Core\Pipes\Pipes;
use Core\View;

class Search extends SearchPipe
{
    /**
     * Search Controller
     * Home page of application, render the search form 
     * to search for patents
     * @return void
     */
    public function index()
    {
      if(!isset($_SESSION['loggedIn'])) $this->redirect('/');

      View::draw('home/index', [
        '_other' => '_noSideBar'
      ]);
    }

    /**
     * Ajax Search Controller
     * Search Patents based on search options
     */
    public function ajax(Pipes $data)
    {
      $data = [
        'dateRangeData' => $data->dateRangeData,
        "recordStartNumber" => (int) $data->start,
        "recordTotalQuantity" => (int) $data->recordTotalQuantity
      ];

      $request = Req::slim($data, ['Content-Type: application/json'])->post("https://developer.uspto.gov/ipmarketplace-api/search/filters")->Call();

      $results = $request->results;
      $i = 0;
      foreach($results as $result):
        $results[$i] = [
         '<p style="white-space:normal;max-width:90%">'.$result->inventionTitle ?? '--' . '</p>',
          $result->patentNumber ?? '--',
          date('y-m-d', strtotime($result->grantDate)),
          $result->licenseeContactEmailAddressText ?? '--',
          $result->licenseeContactPhoneNumber ?? '--',
          $result->firstInventorName ?? '--',
          is_array($result->inventorNameText) ? implode(', ', $result->inventorNameText) : ($result->inventorNameText === '' ? '' : $result->inventorNameText),
          $result->licenseeContactWebAddressURI ?? '--',
        ];
        $i++;
      endforeach;

      Res::json([
        'recordsTotal' => count($results),
        'recordsFiltered' => $request->recordTotalQuantity,
        'data' => $results,
      ]);
    }


}