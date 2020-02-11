<div class="content">
    <div class="container-fluid">
        <h1>Marques</h1>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Ajouter une marque</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Nom</label>
                                        <input type="text" class="form-control" required name="name">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" name="save" class="btn btn-primary pull-right">Sauvegarder</button>
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
                                    <th>
                                        Action
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