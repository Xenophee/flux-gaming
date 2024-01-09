<main>
    <div class="container px-0">

        <!-- GRANDE IMAGE -->
        <img src="<?= $subjects[$flux]->img ?>" class="img-fluflux subjectImg" aria-hidden="true">

        <section>
            <h1 class="text-center py-5 my-5 mx-xl-5">L'actu des jeux <?= $subjects[$flux]->title ?></h1>


            <!-- DERNIER ARTICLE -->
            <div class="row justify-content-center py-xl-5 mx-3 mx-xl-5">
                <div class="col-12 col-md-9 col-xl-12">
                    <article class="d-flex flex-column flex-xl-row firstArticle py-4">
                        <img src="<?= $items[0]->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                        <div class="d-flex flex-column align-items-center align-items-xl-start ps-xl-5">
                            <h2 class="px-3 px-md-5 py-3 mt-3 mt-xl-0"><?= $items[0]->title ?? '' ?></h2>
                            <small class="date d-flex justify-content-center justify-content-xl-start py-2"><?= $items[0]->date ?? '' ?></small>
                            <p class="my-4"><?= $items[0]->description ?? '' ?></p>
                            <div class="d-flex justify-content-center justify-content-xl-end firstLink">
                                <a href="<?= $items[0]->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="btn py-2">Lire</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- ======================================================================================================================================================= -->

            <!-- RESTE DES ARTICLES -->
            <div class="row justify-content-around py-5 mx-3 mx-xl-4">
                <?php foreach ($items as $key => $item) { 
                    if ($key > 0) { ?>
                    <div class="col-12 col-md-6 col-xl-4 mb-5">
                    <article class="card mx-xl-3">
                        <img src="<?= $item->enclosure['url'] ?? '' ?>" alt="Illustration de l'article" class="img-fluid">
                        <div class="d-flex flex-column align-items-center mx-3 my-4">
                            <h3 class="text-center"><?= $item->title ?? '' ?></h3>
                            <small class="d-flex justify-content-center my-3 pb-2"><?= $item->date ?? '' ?></small>
                            <p><?= $item->description ?? '' ?></p>
                        </div>
                        <a href="<?= $item->link ?? '' ?>" target="_blank" rel="noopener noreferrer" class="btn littleLink py-2">Lire</a>
                    </article>
                </div>
                <?php } } ?>
            </div>
        </section>
    </div>
</main>