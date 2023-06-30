<?php

require_once(__DIR__ . '/../models/Subject.php');


// Initialisation des sujets du site avec la classe Subject.




// ==========================================================
// INITIALISATION DES SUJETS SUR LA PAGE D'ACCUEIL

$main = new Subject;
$main->title = 'Accueil';
$main->img = '/../public/assets/img/subjects/main.jpg';
$main->meta_description = 'Découvrez toute l\'actualité des jeux vidéo du moment ! Les prochaines sorties, les derniers tests et plus encore !';
$main->link = ['https://www.jeuxactu.com/rss/ja.rss', 'https://www.jeuxactu.com/rss/tests.rss', 'https://www.jeuxactu.com/rss/sorties.rss'];




// ==========================================================
// INITIALISATION DES SUJETS POSSIBLES DANS LA BARRE DE NAVIGATION

$pc = new Subject;
$pc->title = 'PC';
$pc->img = '/../public/assets/img/subjects/pc.jpg';
$pc->meta_description = 'Découvrez toute l\'actualité des jeux PC du moment !';
$pc->link = 'https://www.jeuxactu.com/rss/pc.rss';

// ==========================================================

$xbox = new Subject;
$xbox->title = 'XBOX';
$xbox->img = '/../public/assets/img/subjects/xbox.jpg';
$xbox->meta_description = 'Découvrez toute l\'actualité des jeux XBOX du moment !';
$xbox->link = 'https://www.jeuxactu.com/rss/xbox-series-x.rss';

// ==========================================================

$ps5 = new Subject;
$ps5->title = 'PS5';
$ps5->img = '/../public/assets/img/subjects/ps5.jpg';
$ps5->meta_description = 'Découvrez toute l\'actualité des jeux PS5 du moment !';
$ps5->link = 'https://www.jeuxactu.com/rss/ps5.rss';

// ==========================================================

$switch = new Subject;
$switch->title = 'Switch';
$switch->img = '/../public/assets/img/subjects/switch.webp';
$switch->meta_description = 'Découvrez toute l\'actualité des jeux Switch du moment !';
$switch->link = 'https://www.jeuxactu.com/rss/switch.rss';

// ==========================================================

$mobile = new Subject;
$mobile->title = 'Mobile';
$mobile->img = '/../public/assets/img/subjects/mobile.jpg';
$mobile->meta_description = 'Découvrez toute l\'actualité des jeux sur Mobile du moment !';
$mobile->link = 'https://www.jeuxactu.com/rss/mobile.rss';

// ==========================================================

