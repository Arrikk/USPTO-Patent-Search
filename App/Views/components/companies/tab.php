<?php

use Core\View;
?>

<div class="nk-block nk-block-lg">
    <div class="card">
        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em class="icon ni ni-user-circle-fill"></em><span><?= translate('Pharmaceutical Companies') ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile-overview"><em class="icon ni ni-user-add-fill"></em><span> <?= translate('Add New') ?></span></a>
            </li>
            <li class="nav-item nav-item-trigger">
                <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
            </li>
        </ul>
        <div class="card-inner">
            <div class="tab-content">
                <div class="tab-pane active" id="personal-info">
                    <div class="nk-block">
                        <?php 
                            View::component('companies/list');
                        ?>
                    </div><!-- .nk-block -->
                </div><!-- tab pane -->
                <div class="tab-pane" id="profile-overview">
                    <?php
                        View::component('companies/new');
                    ?>
                    <!--tab content-->
                </div>
                <!--card inner-->
            </div>
            <!--card-->
        </div>