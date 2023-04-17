<div class="card card-bordered">
    <div class="card-inner">
        <div class="card-head">
            <h5 class="card-title"><?= translate('Create Approval') ?></h5>
        </div>
        <form id="approve-new" class="gy-3">
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label" for="site-name"><?= translate('Manufacturer approval code') ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="input-group">
                        <input type="number" value="" class="code form-control" placeholder="50" required="" name="code">
                    </div>
                </div>
            </div>
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label"><?= translate('Company Name') ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" value="" class="name form-control" required="" name="name" placeholder="<?= translate('Pharmaceutical Company Name') ?>">
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group">
                            <button id="approval-btn" type="submit" class="btn btn-lg btn-primary"><?= translate('Confirm') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
