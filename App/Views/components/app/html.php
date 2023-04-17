<?php

use App\Helpers\Setting;
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="/Public/">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="description" content="<?= Setting::App()->description ?>.">
    <meta name="keywords" content="<?= Setting::App()->keywords ?>."> 
    <meta name="author" content="<?= Setting::App()->author ?>">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= Setting::App()->logo ?>">
    <!-- Page Title  -->
    <title> <?= $title ?> </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/Public/assets/css/dashlite.css?ver=3.0.0">
    <link id="skin-default" rel="stylesheet" href="/Public/assets/css/theme.css?ver=3.0.0">
    <style>
        .dt-buttons .btn-secondary:before{
            font-size: 1.8rem;
        }
        
    </style>
</head>

<body class="nk-body bg-white npc-default <?= $other == '_noSideBar' ? '' : 'has-aside' ?>">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">