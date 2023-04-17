<div class="card card-bordered">
    <div class="card-inner">
        <div class="card-head">
            <h5 class="card-title"><?= translate('Products Information') ?></h5>
        </div>

        <div class="nk-block">
            <div class="profile-ud-list">
                <?php if (count((array) $data) > 0) : ?>
                    <?php foreach ($data as $key => $value) : ?>
                        <div class="profile-ud-item">
                            <div class="profile-ud wider">
                                <span class="profile-ud-label"><?= translate(ucwords(str_replace('_', ' ', $key))) ?></span>
                                <span class="profile-ud-value"><?= $value ?? '__ __' ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div><!-- .profile-ud-list -->
        </div>
    </div>
</div>