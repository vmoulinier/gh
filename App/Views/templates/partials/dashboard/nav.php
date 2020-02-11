<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <?php if($this->twig->logged()): ?>
                            <a class="dropdown-item" href="<?= PATH ?>/user/profil">Profile</a>
                            <div class="dropdown-divider"></div>
                        <?php endif ?>
                        <?php if($this->twig->logged()): ?>
                            <a class="dropdown-item" href="<?= PATH ?>/user/logout">Déconnexion</a>
                        <?php else: ?>
                            <a class="dropdown-item" href="<?= PATH ?>/user/login">Connexion</a>
                            <a class="dropdown-item" href="<?= PATH ?>/user/register">Inscription</a>
                        <?php endif ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>