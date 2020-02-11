<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item <?= $this->twig->isActiveNav('home/index');  ?>">
            <a class="nav-link" href="<?= PATH ?>/home/index">
                <i class="material-icons">dashboard</i>
                <p>Tableau de bord</p>
            </a>
        </li>
        <li class="nav-item <?= $this->twig->isActiveNav('home/brand') ?>">
            <a class="nav-link" href="<?= PATH ?>/home/brand">
                <i class="material-icons">content_paste</i>
                <p>Marque</p>
            </a>
        </li>
        <li class="nav-item <?= $this->twig->isActiveNav('home/model') ?>">
            <a class="nav-link" href="<?= PATH ?>/home/model">
                <i class="material-icons">content_paste</i>
                <p>Modèle</p>
            </a>
        </li>
        <li class="nav-item <?= $this->twig->isActiveNav('home/cars') ?>">
            <a class="nav-link" href="<?= PATH ?>/home/cars">
                <i class="material-icons">content_paste</i>
                <p>Voitures</p>
            </a>
        </li>
        <li class="nav-item <?= $this->twig->isActiveNav('home/revision') ?>">
            <a class="nav-link" href="<?= PATH ?>/home/revision">
                <i class="material-icons">content_paste</i>
                <p>Révisions</p>
            </a>
        </li>
    </ul>
</div>
