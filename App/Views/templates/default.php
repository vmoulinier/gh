<!DOCTYPE html>
<html lang="en">
<?php require_once 'App/Views/templates/partials/default/header.php'; ?>

<body>
<?php require_once 'App/Views/templates/partials/default/navbar.php'; ?>
<div class="container">
    <?php if($flashBag): ?>
        <?php require_once 'App/Views/templates/partials/default/flashbag.php'; ?>
    <?php endif; ?>
    <?= $content; ?>
</div>
</body>
</html>
