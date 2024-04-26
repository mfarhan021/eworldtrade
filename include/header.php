<?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/header-topbar.php"); ?>
<header class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo $siteurl ?>" class="logo">
                    <img src="<?php echo $siteurl ?>/assets/images/logo.svg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/searchbar.php"); ?>
            </div>
            <div class="col-md-4">
                <?php include($_SERVER['DOCUMENT_ROOT']."/eworldtrade/include/header-post.php"); ?>
            </div>
        </div>
    </div>
</header>