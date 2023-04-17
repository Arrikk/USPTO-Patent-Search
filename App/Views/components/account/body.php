<?php

use App\Helpers\Menu;

$menus = [];
if ($authority == MANAGER) $menus = Menu::manager();
if ($authority == COMPANY) $menus = Menu::company();
if ($authority == ADMINISTRATOR) $menus = Menu::admin();

?>

<div class="nk-block">
    <div class="row g-gs">
        <?php foreach($menus as $key => $title): extract((array) $title) ?>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="project">
                            <div class="project-head">
                                <a href="<?= $link ?? '' ?>" class="project-title">
                                    <div class="user-avatar sq" style="background:#<?= rand(222222, 999999) ?>"><span> <i class="<?= $icon ?>"></i> </span></div>
                                    <div class="project-info">
                                        <h6 class="title"><?= $key ?></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="project-details">
                                <p><?= $desc ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
