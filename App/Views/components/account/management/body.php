<?php $user = extract((array) $other) ?>
<div class="nk-block nk-block-lg">
    <div class="card">
        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em class="icon ni ni-user-circle-fill"></em><span><?= translate('Account information') ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile-overview"><em class="icon ni ni-account-setting-fill"></em><span><?= translate('Update') ?></span></a>
            </li>
            <li class="nav-item nav-item-trigger">
                <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
            </li>
        </ul>
        <div class="card-inner">
            <div class="tab-content">
                <div class="tab-pane active" id="personal-info">
                    <div class="nk-block">
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Manufacturing and marketing approval code') ?></span>
                                    <span class="profile-ud-value"><?= $approvalCode ?? '' ?></span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Pharmaceutical company name') ?></span>
                                    <span class="profile-ud-value"><?= $companyName ?? '' ?></span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Login Id') ?></span>
                                    <span class="profile-ud-value"> <?= strtolower($username ?? '') ?> </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Password') ?></span>
                                    <span class="profile-ud-value">********</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Classification') ?></span>
                                    <span class="profile-ud-value">
                                        <?php
                                            if ($isAdmin) echo ucwords(str_replace('_', ' ',ADMINISTRATOR));
                                            if ($isManager) echo ucwords(str_replace('_', ' ', MANAGER));
                                            if ($isCompany) echo ucwords(str_replace('_', ' ', COMPANY));
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <!-- <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">< ?= translate('Email Address') ?></span>
                                    <span class="profile-ud-value">< ?= $email ?? '' ?></span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">< ?= translate('Phone Number') ?></span>
                                    <span class="profile-ud-value">< ?= $phone ?? '' ?></span>
                                </div>
                            </div> -->
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Registered Date') ?></span>
                                        <span class="profile-ud-value"><?= date('Y-m-d H:i:s', strtotime($createdAt ?? 'Today')) ?? '' ?></span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label"><?= translate('Last updated on') ?></span>
                                    <span class="profile-ud-value"><?=  date('Y-m-d H:i:s', strtotime($updatedAt ?? 'Today')) ?? '' ?></span>
                                </div>
                            </div>
                        </div><!-- .profile-ud-list -->
                    </div><!-- .nk-block -->
                </div><!-- tab pane -->
                <div class="tab-pane" id="profile-overview">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title"><?= translate('Login Setting') ?></h5>
                            </div>
                            <div class="gy-3">
                                <input type="hidden" value="<?= $id ?? '' ?>" id="__login">
                                <div class="row g-3 align-center">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="site-name"><?= translate('Login Id') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="input-group">
                                            <input type="text" value="<?= $username ?? '' ?>" class="form-control" placeholder="<?= translate('Account Login') ?>" required id="login-id">
                                            <div class="input-group-append">
                                                <span class="input-group-text btn btn-primary" id="update-login"><?= translate('Update') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-head mt-3">
                                    <h5 class="card-title"><?= translate('Password Management') ?></h5>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label"><?= translate('Old Password') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" id="old-password" placeholder="****">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label"><?= translate('New Password') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="password" class="form-control" id="new-password" placeholder="<?= translate('New Password') ?>">
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
                                                <input type="password" class="form-control" id="confirm-password" placeholder="<?= translate('Re-Enter Password') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button id="update-password" type="submit" class="btn btn-lg btn-primary"><?= translate('Update') ?></button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab content-->
                </div>
                <!--card inner-->
            </div>
            <!--card-->
        </div>
