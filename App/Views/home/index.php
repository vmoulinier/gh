<div class="content">
    <div class="container-fluid">
        <h1>Tableau de bord</h1>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Liste des marques</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nom
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($brands as $brand): ?>
                                    <tr>
                                        <td>
                                            <?= $brand->getId() ?>
                                        </td>
                                        <td>
                                            <?= $brand->getName() ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Liste des modèles</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nom
                                    </th>
                                    <th>
                                        Marque
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($models as $model): ?>
                                    <tr>
                                        <td>
                                            <?= $model->getId() ?>
                                        </td>
                                        <td>
                                            <?= $model->getName() ?>
                                        </td>
                                        <td>
                                            <?= $model->getBrand()->getName() ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Liste des voitures</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Immatriculation
                                    </th>
                                    <th>
                                        Modèle
                                    </th>
                                    <th>
                                        Marque
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($cars as $car): ?>
                                    <tr>
                                        <td>
                                            <?= $car->getId() ?>
                                        </td>
                                        <td>
                                            <?= $car->getRegistration()->getRegistrationNumber() ?> <?= $car->getRegistration()->getDepartment() ?>
                                        </td>
                                        <td>
                                            <?= $car->getModel()->getName() ?>
                                        </td>
                                        <td>
                                            <?= $car->getModel()->getBrand()->getName() ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
</div>