<div class="nk-block-head">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title"><?= translate('Products Information') ?></h3>
            <!-- <div class="nk-block-des text-soft">
                <p>You have total <span id="total-desc-count">0 user</span></p>
            </div> -->
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li><button class="btn btn-warning upload-button" disabled><em class="icon ni ni-upload-cloud"></em><span><?= translate('upload') ?></span></button></li>
                        <li><label for="import-products" class="btn btn-white btn-outline-light"><em class="icon ni ni-update"></em><span><?= translate('Import') ?></span></label></li>
                        <!-- <li><a href="/api/approved/new" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li> -->
                        <form id="upload-form">
                            <input type="file" name="file" class="d-none" id="import-products" accept=".csv">
                        </form>
                        <li>

                            <div class="nk-block-head-content">
                                <a href="<?= $_SERVER['HTTP_REFERER'] ?? '/' ?>" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span><?= translate('Back') ?></span></a>
                                <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .toggle-wrap -->
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->