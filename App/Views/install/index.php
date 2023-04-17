<?php $error = false; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/install/style.css">
    <link rel="stylesheet" href="./Public/install/fa/css/font-awesome.min.css">
    <title>Install CodeHart</title>
</head>
<body>
    <div>
        <header>
            <!-- <button id="toggle" class="toggle">
                <i class="fa fa-bars fa-2x"></i>
            </button> -->
            <h1><span  data-text="~CodeHart~">~CodeHart~</span> installaion</h1>
            <p>Begin CodeHart Installation SetUp.</p>
            <!-- <button class="cta-btn" id="toggle2">Try Demo</button> -->
            <!-- <button class="cta-btn" id="open">Demo</button> -->
        </header>
    </div>
    <div class="container">
    <?php if($queryString === false): ?>
        <h2>Requirements</h2>
        <p>Installation Requirements (Required)</p>
        <div class="eli">
            <ul>
                <li>
                    PDO Extension
                    <?php if(!extension_loaded('pdo')): $error = true ?>
                        <button class="btn-disabled">Disabled</button>
                    <?php else: ?>
                        <button class="">Enabled</button>
                    <?php endif; ?>
                </li>

                <li>
                    CURL Extension
                    <?php if(!extension_loaded('curl')): $error = true ?>
                        <button class="btn-disabled">Not Enabled</button>
                    <?php else: ?>
                        <button class="">Enabled</button>
                    <?php endif; ?>
                </li>

                <li>
                    MBString Extension
                    <?php if(!extension_loaded('mbstring')): $error = true ?>
                        <button class="btn-disabled">Not Enabled</button>
                    <?php else: ?>
                        <button class="">Enabled</button>
                    <?php endif; ?>
                </li>

                <li>
                    MYSQLI Extension
                    <?php if(!extension_loaded('mysqli')): $error = true ?>
                        <button class="btn-disabled">Not Enabled</button>
                    <?php else: ?>
                        <button class="">Enabled</button>
                    <?php endif; ?>
                </li>

                <li>
                    PHP Version (Current <?= phpversion() ?> )
                    <?php if(phpversion() < "7.4.8"): $error = true ?>
                        <button class="btn-disabled">PHP V<?= phpversion() ?></button>
                    <?php else: ?>
                        <button class="">PHP V<?= phpversion() ?></button>
                    <?php endif; ?>
                </li>
            </ul>
            <?php if(isset($error) && $error !== true): ?>
                <button class="btn continue" id="" data-step="<?= $step ?>">Continue</button>
            <?php else: ?>
                <button class="btn btn-disabled">Cannot Continue</button>
                <input type="hidden" id="install">
            <?php endif; ?>
        </div>
    <?php endif; ?>

    
    <?php if($queryString !== false && $step == 1): ?>
        <!-- <div class="modal-container" id="modal"> -->
            <h2>Database Setup</h2>
            <p>Provide Database details: Create Db Name before proceeding.</p>
            <div class="eli">
                <form method="POST" id="db-setup">
                <ul>
                    <li>
                        DB Host
                        <input type="text" name="db-host" placeholder="localhost" required>
                    </li>
                    <li>
                        DB Name
                        <input type="text" name="db-name" placeholder="codeHart" required>
                    </li>
                    <li>
                        DB User
                        <input type="text" name="db-user" placeholder="root" required>
                    </li>
                    <li>
                        DB Password
                        <input type="password" name="db-pass" id="" placeholder="password">
                    </li>
                </ul>
                
            <h2>Config Setup</h2>
            <p>Provide Database details: Create Db Name before proceeding.</p>

            <ul>
                <li>
                    Show Errors
                    <a class="btn-disabled">Disabled</a>
                </li>
                <li>
                    Show Flash Messages
                    <a>Enabled</a>
                </li>
                <li>
                    Website Url
                    <input type="text" value="<?= $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'] ?>" name="" placeholder="Website Link: http://localhost">
                    <a>Allowed</a>
                </li>
                <li>
                    Secret Key
                    <input type="text" id="secretKey" placeholder="Click Generate button" disabled>
                    <input type="hidden" id="hiddenSecret" name="secretKey" required>
                    <a id="secret-key">Generate</a>
                </li>
            </ul>
            
            <input type="submit" class="btn" value="Continue">
            </form>
            </div>
    <!-- </div> -->
    <?php endif; ?>
        <?php
            $db = isset($_SESSION['stp1']) ? $_SESSION['stp1'] : false;
            $url = $_SERVER['HTTP_HOST'].'/&step=1';
        ?>
    <?php if($queryString !== false && $step == 2):?>
        <?php if( $db == true):?>
            <h1>Demo</h1>
            <p>Install CodeHart(Bruiz) Data</p>
            <ul>
                <li>No live Demo data is available</li>
            </ul>
            <button class="btn install" id="">Install</button>
        <?php else: ?>
            <h1>Demo</h1>
            <p>Install CodeHart(Bruiz) Data</p>
            <ul>
                <li>No live Demo data is available</li>
            </ul>
            <button class="btn btn-disabled" id="">Go back and Complete step 1</button>
        <?php endif; ?>
    <?php endif; ?>
    </div>
    <div class="installOverlay">
        <h1 id="installPercent" class="loading"></h1>
    </div>

    <script src="./Public/install/js/jquery.js"></script>
    <script src="./Public/install/js/jquery.validate.min.js"></script>
    <script src="./Public/install/js/showhide.js"></script>
    <script src="./Public/install/js/script.js"></script>
</body>
</html>