<header class="bg-info text-white">
    <div class="container text-center" style="margin-top:-90px">
        <h1>Recherche</h1>
        <p class="lead">Parce qu'on ne se souviens pas de tout !</p>
    </div>
</header>

<div class="container">
    <section>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>Rechercher un manga</h2>
                <hr />
                <form method="GET">
                    <div class="form-group row">
                        <label  class="col-2 col-form-label">Titre du manga</label>
                        <div class="col-9">
                            <input class="form-control" type="text" name="search" required>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary" title="Lancer la recherche"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <?php if ( isset($result) ) : ?>
                <hr />
                <h2>Résultat de la recherche</h2>
                <hr />
                <?php endif; ?>

                <?php if ( isset($result) && empty($result) ) { ?>
                <div class="alert alert-warning" role="alert">
                    <u><b>Aucun manga trouvé, réessayez avec d'autres mots-clés...</b></u><br />
                </div>
                <?php } elseif ( isset($result) && !empty($result) ) { ?>
                <table id="manga_table" class="table table-responsive-lg table-striped text-center table-bordered">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de publication</th>
                            <th>Status</th>
                            <th>Tomes publiés</th>
                            <th>Tomes possédés</th>
                            <th>Tomes manquant</th>
                            <th>Tomes à acheter</th>
                            <th>Prix public</th>
                            <th>&Eacute;diteur</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $manga) { ?>
                        <tr class="table">
                            <td><?php echo $manga['title'] ?></td>
                            <td><?php echo $manga['date'] ?></td>
                            <td><?php echo $manga['status'] ?></td>
                            <td><?php echo $manga['published'] ?></td>
                            <td><?php echo $manga['owned'] ?></td>
                            <td><?php echo $manga['missing'] ?></td>
                            <td><?php echo $manga['buying'] ?></td>
                            <td><?php echo $manga['price'] ?></td>
                            <td><?php echo $manga['editor'] ?></td>
                            <td><?php echo $manga['type'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Titre</th>
                            <th>Date de publication</th>
                            <th>Status</th>
                            <th>Tomes publiés</th>
                            <th>Tomes possédés</th>
                            <th>Tomes manquant</th>
                            <th>Tomes à acheter</th>
                            <th>Prix public</th>
                            <th>&Eacute;diteur</th>
                            <th>Type</th>
                        </tr>
                    </tfoot>
                </table>
                <?php } ?>
            </div>
        </div>
    </section>
</div>