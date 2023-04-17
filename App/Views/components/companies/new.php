<div class="card card-bordered">
    <div class="card-inner">
        <div class="card-head">
            <h5 class="card-title"><?= translate('Manager Details') ?></h5>
        </div>
        <form id="register-new" class="gy-3">
            <div class="row g-3 align-center">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label class="form-label" for="site-name"><?= translate('Manufacturer approval code') ?></label>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="input-group">
                        <input type="number" value=""  class="approval_code form-control" placeholder="50" required="" name="approval_code">
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
                            <input type="text" value="" class="company_name form-control" required="" disabled="" name="company_name" placeholder="<?= translate('Pharmaceutical Company Name') ?>">
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
                        <label class="form-label">< ?= translate('Phone') ?></label>
                        <span class="form-note">< ?= translate('Enter Phone Number') ?>.</span>
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
                            <input type="text" name="login" class="form-control username" placeholder="Bruiz">
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
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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
                            <input type="password" class="form-control" id="c-password" placeholder="Re-Enter Password">
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
                            <div class="custom-control custom-radio checked">
                                <input type="radio" class="authority custom-control-input" checked="" value="pharmaceutical_company" name="authority" id="reg-enable">
                                <label class="custom-control-label" for="reg-enable"><?= translate('Pharmaceutical Company') ?></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="authority custom-control-input" name="authority" value="pharmaceutical_company_manager" id="reg-disable">
                                <label class="custom-control-label" for="reg-disable"><?= translate('Pharmaceutical Company Manager') ?></label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="form-group mt-2">
                            <button id="register-btn" type="submit" class="btn btn-lg btn-primary"><?= translate('Register') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
