
<?php require_once(PATH_VIEWS.'header.php');?>

<body class="diag">


    <?php require_once(PATH_VIEWS.'menu.php');?>

    <div class="container content">
        <div class="row">
            <div class="blog-single col-md-8 col-md-offset-2">
                <div class="blog-image">
                    <img src="<?=PATH_IMG?>bl.jpg" alt="beeleat">
                </div>
                <h1>BeelEAT</h1>
                <div class="blog-detail"><span>Projet tutoré IUT</span> - 2018 / 2019 </div>

                <div class="blog-content">

                 <p>BeelEAT permet de gérer tout un restaurant. D'une part un côté administrateur/cuisine permet : </p>
                 <ul class="list-style">
                     <li> D'automatiser certaines tâches comme la gestion des stocks.</li>
                     <li> De gérer les commandes via l'envoi automatique de notifications aux clients sur le statut de leur commande.</li>
                     <li> De gérer les menus, produits, ingrédients...</li>
                 </ul>
                 <p>D'autre part, le côté client du site permet de passer des commandes en ligne.</p>
                <blockquote>BeelEAT est pour l'instant utilisé par le bureau des élèves de l'IUT génie civil de l'université Lyon 1 pour leur cafétéria. Ce site a su conquérir leur cœur grâce à son interface simple et efficace. De plus, l'envoi de notifications aux clients est un réel avantage.</blockquote>



                <ul class="list-style">
                    <li><a target="_blank" href="https://beeleat.lucien-brd.com/"> Accéder au site. <i data-icon="H" class="icon"></i></a></li>
                    <li><a target="_blank" href="https://github.com/lucianoBrd/BeelEAT"> Accéder au git. <i data-icon="H" class="icon"></i></a></li>
                </ul>


                <!-- Lightbox images -->
                <div class="post-lightbox row">
                    <!-- image 1 -->
                    <a href="<?=PATH_IMG?>bl.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                        <img src="<?=PATH_IMG?>bl.jpg" alt="beeleat">
                    </a>
                     <!-- image 1 -->
                    <a href="<?=PATH_IMG?>bl1.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                        <img src="<?=PATH_IMG?>bl1.jpg" alt="beeleat1">
                    </a>
                     <!-- image 1 -->
                    <a href="<?=PATH_IMG?>bl2.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                        <img src="<?=PATH_IMG?>bl2.jpg" alt="beeleat2">
                    </a>
                    <!-- image 1 -->
                   <a href="<?=PATH_IMG?>bl3.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                       <img src="<?=PATH_IMG?>bl3.jpg" alt="beeleat3">
                   </a>
                   <!-- image 1 -->
                  <a href="<?=PATH_IMG?>bl4.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                      <img src="<?=PATH_IMG?>bl4.jpg" alt="beeleat4">
                  </a>
                  <!-- video 1 -->
                  <a target="_blank" href="https://youtu.be/WCHk5rYsEsQ" class="popup-youtube col-md-4 col-sm-4 col-xs-6 lightbox-image">
                      <i class="fa fa-play" aria-hidden="true"></i>
                      <img src="<?=PATH_IMG?>bly.jpg" alt="beeleatVideo">
                  </a>
                </div>
            </div>
        </div>
    </div>
  </div>

<?php require_once(PATH_VIEWS.'footer.php');?>
