<div class="content">
    <div class="container-fluid">
        <h1>Voitures</h1>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Ajouter une voiture</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Immatriculation</label>
                                        <input type="text" class="form-control" required name="registrationNumber">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Département</label>
                                        <input type="number" min="01" max="99"  class="form-control" required name="department">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <select class="custom-select" required name="model">
                                            <option value="" disabled selected>Modèle</option>
                                            <?php foreach ($models as $model): ?>
                                            <option value="<?= $model->getId() ?>"><?= $model->getName() ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary pull-right" name="save">Sauvegarder</button>
                                </div>
                            </div>
                        </form>
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
                                    <th>
                                        Action
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
                                        <td>

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
    </div>
</div>