<?php

use App\Helpers\Menu;

$menus = [];
?>
<div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
    <div class="nk-sidebar-menu" data-simplebar><!-- .nk-menu -->
        <ul class="nk-menu">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt"><?= translate('dashboard') ?></h6>
            </li><!-- .nk-menu-heading -->

                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class=""></em></span>
                        <span class="nk-menu-text">Home Page</span>
                    </a>
                </li>
            <!-- .nk-menu-item -->
        </ul><!-- .nk-menu -->
    </div><!-- .nk-sidebar-menu -->
    <div class="nk-aside-close">
        <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
    </div><!-- .nk-aside-close -->
</div><!-- .nk-aside -->