<!-- main header @e -->
<?php

use App\Helpers\Setting;

?>
<div class="nk-header nk-header-fixed is-light">
    <div class="container-lg wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-header-brand">
                <a href="/" class="logo-link">
                    <strong><?= Setting::App()->name  ?></strong>
                    <!-- <img class="logo-light logo-img" src="/Public/images/logo.png" srcset="/Public/images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="/Public/images/logo-dark.png" srcset="/Public/images/logo-dark2x.png 2x" alt="logo-dark"> -->
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu">
                <ul class="nk-menu nk-menu-main">
                    <li class="nk-menu-item">
                        <a href="/confirmation" class="nk-menu-link">
                            <span class="nk-menu-text"><?= translate('supply status confirmation') ?><span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-text">Search Patents</span>
                        </a>
                    </li>

                </ul><!-- .nk-menu -->
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                        <a class="dark-switch" href="#"><em class="icon ni ni-moon"></em></a>
                    </li><!-- .dropdown -->
                    <li>
                        <a href="/logout" class="dropdown-toggle me-lg-n1">
                            <!-- <div class="user-toggle"> -->
                            <div class="user-avatar sm">
                                <em class="icon ni ni-signout"></em>
                                <!-- </div> -->
                            </div>
                        </a>
                    </li>
                    <li class="d-lg-none">
                        <a href="#" class="toggle nk-quick-nav-icon me-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                    </li>
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->