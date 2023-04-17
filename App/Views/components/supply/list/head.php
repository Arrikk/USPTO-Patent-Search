<div class="nk-block-head">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title"><?= translate('Supplies') ?></h3>
            <!-- <div class="nk-block-des text-soft">
                <p>You have total <span id="total-desc-count">0 user</span></p>
            </div> -->
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li><a class="btn btn-white btn-outline-light" id="update-selection"><em class="icon ni ni-update"></em><span><?= translate('Update') ?></span></a></li>
                        <li><button class="btn btn-warning upload-button" disabled><em class="icon ni ni-upload-cloud"></em><span><?= translate('Upload') ?></span></button></li>
                        <li class="nk-block-tools-opt">

                            <a class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="/supply/"><span><?= translate('Add Supply') ?></span></a></li>
                                    <li>
                                        <a>
                                            <label for="import-supplies"><span><?= translate('Import Supplies') ?></span></label>
                                        </a>
                                    </li>
                                    <form id="upload-form">
                                        <input type="file" name="file" class="d-none" id="import-supplies" accept=".csv">
                                    </form>
                                </ul>
                            </div>
                        </li>
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