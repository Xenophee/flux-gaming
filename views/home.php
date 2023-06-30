<main>
    <div class="container d-flex flex-column align-items-center px-0">

        <!-- GRANDE IMAGE -->
        <img src="<?= $main->img ?>" alt="" class="img-fluid subjectImg">

        <!-- SECTION AVEC LES QUATRES DERNIERS ARTICLES MIS EN AVANT -->
        <section>
            <h1 class="text-center py-5 mt-5 mx-xl-5">Toute l'actu des jeux vidéos !</h1>
            <h2 class="text-center py-3 py-md-0 mt-5"><span class="px-md-5">Les derniers articles</span></h2>
            <div class="row pt-xl-5 mt-5 mx-3">

                <!-- PREMIER ARTICLE -->
                <div class="col-12 col-xl-4">
                    <a href="<?= $firstPart[0]->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="mainLink">
                        <article class="mb-4 mb-xl-0">
                            <img src="<?= $firstPart[0]->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                            <div class="divText d-flex flex-column justify-content-center align-items-center px-3 px-xl-4 py-4">
                                <h3 class="text-center"><?= $firstPart[0]->title ?? '' ?></h3>
                                <small class="d-flex justify-content-center pt-2 mt-3 mb-4"><?= $firstPart[0]->date ?? '' ?></small>
                                <p class="d-none ps-3 mx-4"><?= $firstPart[0]->description ?? '' ?></p>
                            </div>
                        </article>
                    </a>
                </div>

                <!-- LES DEUX ARTICLES SUIVANTS -->
                <div class="col-12 col-xl-4 d-flex flex-column justify-content-around">
                    <?php foreach ($firstPart as $key => $item) {
                        if ($key > 0 && $key < 3) { ?>
                            <a href="<?= $item->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="mediumLink mb-4">
                                <article>
                                    <img src="<?= $item->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                                    <div class="divText d-flex flex-column justify-content-center align-items-center py-4">
                                        <h3 class="text-center"><?= $item->title ?? '' ?></h3>
                                        <small class="d-flex justify-content-center pt-2 mt-3"><?= $item->date ?? '' ?></small>
                                        <p class="d-none ps-3 mx-4"><?= $item->description ?? '' ?></p>
                                    </div>
                                </article>
                            </a>
                    <?php }
                    } ?>
                </div>

                <!-- LE QUATRIEME ARTICLE -->
                <div class="col-12 col-xl-4">
                    <a href="<?= $firstPart[3]->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="mainLink">
                        <article class="mt-4 mt-xl-0">
                            <img src="<?= $firstPart[3]->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                            <div class="divText d-flex flex-column justify-content-center align-items-center px-3 px-xl-4 py-4">
                                <h3 class="text-center"><?= $firstPart[3]->title ?? '' ?></h3>
                                <small class="d-flex justify-content-center pt-2 mt-3 mb-4"><?= $firstPart[3]->date ?? '' ?></small>
                                <p class="d-none ps-3 mx-4"><?= $firstPart[3]->description ?? '' ?></p>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </section>

        <!-- ======================================================================================================================================================= -->
        <hr class="separator my-5">
        <!-- ======================================================================================================================================================= -->

        <!-- SECTION AVEC LA SUITE DES ARTICLES -->
        <section>
            <div class="row mx-3">
                <?php foreach ($secondPart as $key => $item) { ?>
                    <div class="col-12 col-md-6 col-xl-3 mb-5 mb-xl-0">
                        <article class="card">
                            <img src="<?= $item->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                            <div class="d-flex flex-column align-items-center mx-3 my-4">
                                <h3 class="text-center"><?= $item->title ?? '' ?></h3>
                                <small class="d-flex justify-content-center my-3 pb-2"><?= $item->date ?? '' ?></small>
                                <p><?= $item->description ?? '' ?></p>
                            </div>
                            <a href="<?= $item->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="btn littleLink py-2 py-md-2">Lire</a>
                        </article>
                    </div>
                <?php } ?>

                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center mt-4 pt-xl-5 mt-xl-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- ======================================================================================================================================================= -->
        <hr class="separator my-5">
        <!-- ======================================================================================================================================================= -->

        <!-- PARTIE TESTS -->
        <section>
            <h2 class="text-center py-3 py-md-0 mb-5"><span class="px-md-5">Les derniers tests</span></h2>
            <div class="row pt-xl-5 mx-3">

                <?php foreach ($secondSection as $key => $item) { ?>
                    <div class="col-12 mb-4">
                        <article class="d-flex flex-column flex-xl-row align-items-center lastTest p-4">
                            <div class="d-flex flex-column flex-md-row align-items-start align-items-xl-center mainElement">
                                <img src="<?= $item->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                                <div class="mainLastText ms-md-4 pe-4">
                                    <h3 class="mt-4 mt-md-0"><?= $item->title ?? '' ?></h3>
                                    <small class="d-flex justify-content-center pt-2 mt-3 mb-4 mb-md-0"><?= $item->date ?? '' ?></small>
                                </div>
                            </div>
                            <div class="lastTestText d-flex flex-column justify-content-around align-items-end">
                                <p class="mt-md-4 mt-xl-0 px-xl-4 pt-xl-5 pb-xl-2"><?= $item->description ?? '' ?></p>
                                <a href="<?= $item->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="btn lastTestLink py-2 py-md-2">Lire</a>
                            </div>
                        </article>
                    </div>
                <?php } ?>

                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center mt-4 pt-xl-5 mt-xl-3">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </section>

        <!-- ======================================================================================================================================================= -->
        <hr class="separator my-5">
        <!-- ======================================================================================================================================================= -->

        <!-- LES DERNIERES ET PROCHAINES SORTIES DE JEUX -->
        <section>
            <h2 class="text-center py-3 py-md-0 mb-5"><span class="px-md-5">Les prochaines / dernières sorties</span></h2>
            <div class="row justify-content-around py-xl-5 mx-3">

                <?php foreach ($thirdSection as $key => $item) { ?>
                    <div class="col-10 col-md-5 col-xl-3 mb-4">
                        <a href="<?= $item->link ?? '' ?>" target="_blank" rel="noopener noreferrer">
                            <article class="card">
                                <h3 class="text-center my-4 mx-4"><?= $item->title ?? '' ?></h3>
                                <p class="text-center mb-4">Date de sortie : <?= $item->date ?? '' ?></p>
                            </article>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
</main>