<?php

use App\Helpers\Format;
?>
<div class="card card-bordered">
    <div class="card-inner">
        <div class="card-head">
            <h5 class="card-title"><?= translate("Add Supply Information") ?></h5>
        </div>
        <form method="POST" id="supply-form" class="gy-3">
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label" for="site-name"><?= translate("YJ code") ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="input-group">
                        <input type="text" name="yj_code" class="form-control" placeholder="1124017f2046" value="" required>
                    </div>
                </div>
            </div>
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label"><?= translate("Product Name") ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input disabled readonly type="text" name="product_name_main" class="form-control" required placeholder="Artovatisn Tablet 5 mg oo">
                            <input type="hidden" name="product_name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label"><?= translate("Shipment status") ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <select name="shippment_status" id="" class="form-control">
                                <option value=""><?= translate("Shippment status") ?></option>
                                <?php foreach (Format::shipmentStatus() as $key => $val) : ?>
                                    <option value="<?= $key ?>"><?= translate($val['eng']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label"><?= translate("Correspondence status") ?> </label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <select name="correspondence_status" id="" class="form-control">
                                <option value=""><?= translate("Correspondence status") ?></option>
                                <?php foreach (Format::distributorStatus() as $key => $val) : ?>
                                    <option value="<?= $key ?>"><?= translate($val['eng']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label"><?= translate("Expected time") ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="expected_time" placeholder="<?= date('M Y') ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label"><?= translate("Address") ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="input-group">
                        <input type="url" name="material_val" class="form-control" placeholder="Material if any">
                        <div class="input-group-append">
                            <label for="address-file" class="input-group-text btn btn-primary" id=""><?= translate("Upload") ?></label>
                            <input type="file" accept=".pdf, .csv, .doc,.docs" class="d-none" name="material" id="address-file">
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button id="register-btn" type="submit" class="btn btn-lg btn-primary"><?= translate("Register") ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
