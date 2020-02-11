<div class="content">
    <div class="container-fluid">
        <h1>Révisions</h1>
        <br />
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Programmer une révision</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <input type="date" class="form-control" required name="date" min="<?= date('Y-m-d'); ?>>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <select class="custom-select" required name="car">
                                            <option value="" disabled selected>Voiture</option>
                                            <?php foreach ($cars as $car): ?>
                                            <option value="<?= $car->getId() ?>"><?= $car->getRegistration()->getRegistrationNumber() ?></option>
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
                <h3 class="card-title">Liste des révisions à venir</h3>
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
                                        Date
                                    </th>
                                    <th>
                                        Voiture
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($comingRevisions as $revision): ?>
                                    <tr>
                                        <td>
                                            <?= $revision->getId() ?>
                                        </td>
                                        <td>
                                            <?= $revision->getDateRevision()->format('Y-m-d'); ?>
                                        </td>
                                        <td>
                                            <?= $revision->getCar()->getRegistration()->getRegistrationNumber() ?>
                                        </td>
                                        <td>
                                            <?php if($revision->getRevisionFile()): ?>
                                                <a class="btn-link" target="_blank" href="<?= PATH ?>/Public/images/upload/<?= $revision->getRevisionFile()->getPath() ?>">Pièce jointe</a>
                                            <?php else: ?>
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="form-group form-file-upload form-file-multiple">
                                                        <input type="file" multiple="" class="inputFileHidden" name="pdf">
                                                        <input type="hidden" name="revision" value="<?= $revision->getId() ?>">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inputFileVisible" placeholder="Fichier révision">
                                                            <span class="input-group-btn">
                                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                                <i class="material-icons">attach_file</i>
                                                            </button>
                                                        </span>
                                                            <button type="submit" class="btn btn-primary pull-right" name="saveFile">Ajouter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            <?php endif; ?>
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
                <h3 class="card-title">Liste des révisions passée</h3>
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
                                        Date
                                    </th>
                                    <th>
                                        Voiture
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($revisionsFinished as $revision): ?>
                                    <tr>
                                        <td>
                                            <?= $revision->getId() ?>
                                        </td>
                                        <td>
                                            <?= $revision->getDateRevision()->format('Y-m-d'); ?>
                                        </td>
                                        <td>
                                            <?= $revision->getCar()->getRegistration()->getRegistrationNumber() ?>
                                        </td>
                                        <td>
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <input type="file" multiple="" class="inputFileHidden" name="pdf">
                                                    <input type="hidden" name="revision" value="<?= $revision->getId() ?>">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control inputFileVisible" placeholder="Fichier révision">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                                <i class="material-icons">attach_file</i>
                                                            </button>
                                                        </span>
                                                        <button type="submit" class="btn btn-primary pull-right" name="saveFile">Ajouter</button>
                                                    </div>
                                                </div>

                                            </form>
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