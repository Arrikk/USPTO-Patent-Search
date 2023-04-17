<?php
$user = extract((array) $user)
?>
<div class="tab-pane" id="profile-overview">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title"><?= translate('Add New Manager') ?></h5>
            </div>
            <form method="POST" id="register-form" class="gy-3">
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label" for="site-name"><?= translate('Manufacturer approval code') ?></label>
                            <span class="form-note"><?= translate('Manufacturer company approved code') ?>.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="input-group">
                            <input type="number" value="<?= $approvalCode ?? '' ?>" class="form-control" placeholder="<?= translate('Account Login') ?>" required disabled>
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
                                <input type="text" value="<?= $companyName ?? '' ?>" class="form-control" required disabled placeholder="Pharmaceutical Company Name">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">< ?= translate('Email') ?></label>
                            <span class="form-note">< ?= translate('Enter Email') ?>.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="email" id="email" name="email" class="form-control email" placeholder="bruiz@bz.dev">
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label">Phone</label>
                            <span class="form-note">Enter Phone Number.</span>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="number" id="phone" name="phone" class="form-control phone" placeholder="+91 323 86">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label"><?= translate('Login Id') ?></label>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="loginId" placeholder="Bruiz">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label"><?= translate('Password') ?></label>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="password" class="form-control" id="password" placeholder="<?= translate('New Password') ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label"><?= translate('Confirm Password') ?></label>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="password" class="form-control" id="c-password" placeholder="<?= translate('Re-Enter Password') ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 align-center">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-label"><?= translate('Classification') ?></label>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="custom-control-group g-3 align-center flex-wrap">
                            <li>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="authority custom-control-input" disabled value="<?= COMPANY ?>" name="authority" id="reg-enable">
                                    <label class="custom-control-label" for="reg-enable"><?= translate('Pharmaceutical Company') ?></label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-radio checked">
                                    <input type="radio" class="authority custom-control-input" checked name="authority" value="<?= MANAGER ?>" id="reg-disable">
                                    <label class="custom-control-label" for="reg-disable"><?= translate('Pharmaceutical Company Manager') ?></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="form-group mt-2">
                                <button id="register" type="submit" class="btn btn-lg btn-primary"><?= translate('Register') ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
