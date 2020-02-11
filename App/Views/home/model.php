<div class="content">
    <div class="container-fluid">
        <h1>Modèles</h1>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Ajouter un modèle</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Nom</label>
                                        <input type="text" class="form-control" required name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <select class="custom-select" required name="brand">
                                            <option value="" disabled selected>Marque</option>
                                            <?php foreach ($brands as $brand): ?>
                                            <option value="<?= $brand->getId() ?>"><?= $brand->getName() ?></option>
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
                                    <th>
                                        Action
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