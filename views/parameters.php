<main>
    <div class="container px-0">
        <section class="pt-5 mx-md-5">
            <h1 class="text-center py-5 mb-5">Paramètres</h1>

            <div class="row justify-content-center mx-1 mx-md-0">
                <div class="col-12 col-xl-11">
                    <form method="POST" id="parameters">

                        <!-- CHOIX DU THÈME -->
                        <fieldset class="my-4">
                            <legend class="text-center my-5">Choix du thème :</legend>
                            <div class="d-flex flex-column flex-md-row justify-content-evenly pb-5 ps-3">
                                <div class="d-inline d-flex align-items-center mb-4 mb-lg-0">
                                    <input type="radio" name="themeChoice" value="1" id="light" class="form-check-input themeChoice me-2" <?= ((isset($themeChoice)) && ($themeChoice == 1) || (isset($_COOKIE['theme'])) && ($_COOKIE['theme'] == 1)) ? 'checked' : ''; ?> required>
                                    <label class="form-check-label" for="light">Clair</label>
                                </div>
                                <div class="d-inline d-flex align-items-center mb-4 mb-lg-0">
                                    <input type="radio" name="themeChoice" value="2" id="dark" class="form-check-input themeChoice me-2" <?= ((isset($themeChoice)) && ($themeChoice == 2) || (isset($_COOKIE['theme'])) && ($_COOKIE['theme'] == 2)) ? 'checked' : ''; ?> required>
                                    <label class="form-check-label" for="dark">Sombre</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <small class="text-center text-danger" id="themeMessage"><?= $error['theme'] ?? '' ?></small>
                            </div>
                        </fieldset>

                        <!-- ======================================================================================================================================================= -->

                        <!-- CHOIX DES SUJETS -->
                        <fieldset class="my-4">
                            <legend class="text-center my-5">Choisissez trois sujets parmi les suivants :<br>
                                <small class="info">(disponible dans la barre de navigation)</small>
                            </legend>
                            <div class="d-flex flex-column flex-md-row justify-content-around pb-5 ps-3">
                                <?php foreach (SUBJECTS as $key => $value) { ?>
                                    <div class="form-check d-flex align-items-center mb-4 mb-lg-0">
                                        <input class="form-check-input subjectCheckbox" type="checkbox" name="subjects[]" value="<?= $key ?>" id="<?= $value->title ?>" <?= (isset($subjectsChoice) && in_array($key, $subjectsChoice) || isset($_COOKIE['subjects']) && in_array($key, unserialize($_COOKIE['subjects']))) ? 'checked' : ''; ?>>
                                        <label class="form-check-label ms-3" for="<?= $value->title ?>"><?= $value->title ?></label>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="d-flex justify-content-center">
                                <small class="text-center text-danger" id="subjectsMessage"><?= $error['subject'] ?? '' ?></small>
                            </div>
                        </fieldset>

                        <!-- ======================================================================================================================================================= -->

                        <!-- CHOIX DU NOMBRE D'ARTICLES -->
                        <fieldset class="my-4">
                            <legend class="text-center my-5">Combien d'articles souhaitez-vous par
                                sujet ?</legend>
                            <div class="d-flex flex-column flex-md-row justify-content-around pb-5 ps-3">
                                <?php foreach (ARTICLES as $value) { ?>
                                    <div class="d-inline d-flex align-items-center mb-4 mb-lg-0">
                                        <input type="radio" name="articlesNumber" value="<?= $value ?>" id="articlesNumber<?= $value ?>" class="form-check-input articlesNumber me-2" <?= ((isset($articlesNumber)) && ($articlesNumber == $value) || (isset($_COOKIE['articlesNumber'])) && ($_COOKIE['articlesNumber'] == $value)) ? 'checked' : ''; ?> required>
                                        <label class="form-check-label" for="articlesNumber<?= $value ?>"><?= $value ?></label>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="d-flex justify-content-center">
                                <small class="text-center text-danger" id="articlesNumberMessage"><?= $error['articlesNumber'] ?? '' ?></small>
                            </div>
                        </fieldset>

                        <!-- ======================================================================================================================================================= -->

                        <!-- BOUTON ENVOYER -->
                        <div class="d-flex justify-content-center my-5">
                            <button type="submit" class="btn py-2 px-5" id="save">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>