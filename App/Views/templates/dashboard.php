<!DOCTYPE html>
<html lang="en">

<?php require_once 'App/Views/templates/partials/dashboard/header.php'; ?>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= PATH ?>/Public/css/dashboard/img/sidebar-1.jpg">
        <div class="logo">
            <a class="simple-text logo-normal">
                <?= PROJECT_NAME ?>
            </a>
        </div>
        <?php require_once 'App/Views/templates/partials/dashboard/navbar.php'; ?>
    </div>
    <div class="main-panel">
        <?php if($flashBag): ?>
            <?php require_once 'App/Views/templates/partials/dashboard/flashbag.php'; ?>
        <?php endif; ?>
        <?php require_once 'App/Views/templates/partials/dashboard/nav.php'; ?>
        <?= $content; ?>
        <?php require_once 'App/Views/templates/partials/dashboard/footer.php'; ?>
    </div>
</div>
<?php require_once 'App/Views/templates/partials/dashboard/javascript.php'; ?>
</body>
</html>