<!-- <div class="nk-content-wrap"> -->
    <?php $user = $other ?>
<div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title"><?= translate('User') ?> / <strong class="text-primary small"><?=  strtoupper($user->username) ?></strong></h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li><?= translate('User ID') ?>: <span class="text-base">UD<?= $user->id ?? '' ?></span></li>
                        <!-- <li>Last Login: <span class="text-base">15 Feb, 2019 01:02 PM</span></li> -->
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content">
                <a href="<?= $_SERVER['HTTP_REFERER'] ?? '/' ?>" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span><?= translate('Back') ?></span></a>
                <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
            </div>
        </div>
    </div><!-- .nk-block-head -->
<!-- </div> -->