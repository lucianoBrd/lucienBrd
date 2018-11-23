
<?php require_once(PATH_VIEWS.'header.php');?>

<body class="diag">


    <?php require_once(PATH_VIEWS.'menu.php');?>

    <div class="container content">
        <div class="row">
            <div class="blog-single col-md-8 col-md-offset-2">
                <div class="blog-image">
                    <img src="<?=PATH_IMG?>BeelEAT.jpg" alt="beeleat">
                </div>
                <h1>BeelEAT</h1>
                <div class="blog-detail"><span>Projet tutoré IUT</span> - 2018 / 2019 </div>

                <div class="blog-content">

                 <p>BeelEAT permet de gérer tout un restaurant. En effet, avec d'une part un côté administrateur/cuisine qui va permettre d'automatiser certaines taches comme la gestion des stocks, l'envoie de notification au client sur le statut de sa commande... De plus, cela permet aussi de :</p>
                 <ul class="list-style">
                     <li> Gérer les commandes.</li>
                     <li> Gérer les menus, produits, ingredients...</li>
                 </ul>
                 <p>D'autre part, le côté client du site permet de passer des commandes en ligne.</p>
                <blockquote>BeelEAT est pour l'instant utilisé par le bureau des élèves de l'IUT génie civil de notre université pour leur cafeteria. Ce site a su conquérir leur coeur grace à son interface simple et efficace et l'envoie de notification au client qui est un réel avantage.</blockquote>



                <ul class="list-style">
                    <li><a target="_blank" href="https://beeleat.lucien-brd.com/"> Accéder au site. <i data-icon="H" class="icon"></i></a></li>
                    <li><a target="_blank" href="https://github.com/lucianoBrd/BeelEAT"> Accéder au git. <i data-icon="H" class="icon"></i></a></li>
                </ul>


                <!-- Lightbox images -->
                <div class="post-lightbox row">
                    <!-- image 1 -->
                    <a href="<?=PATH_IMG?>BeelEAT.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                        <img src="<?=PATH_IMG?>BeelEAT.jpg" alt="beeleat">
                    </a>
                     <!-- image 1 -->
                    <a href="<?=PATH_IMG?>BeelEAT1.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                        <img src="<?=PATH_IMG?>BeelEAT1.jpg" alt="beeleat1">
                    </a>
                     <!-- image 1 -->
                    <a href="<?=PATH_IMG?>BeelEAT2.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                        <img src="<?=PATH_IMG?>BeelEAT2.jpg" alt="beeleat2">
                    </a>
                    <!-- image 1 -->
                   <a href="<?=PATH_IMG?>BeelEAT3.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                       <img src="<?=PATH_IMG?>BeelEAT3.jpg" alt="beeleat3">
                   </a>
                   <!-- image 1 -->
                  <a href="<?=PATH_IMG?>BeelEAT4.jpg" class="col-md-4 col-sm-4 col-xs-6 lightbox-image link">
                      <img src="<?=PATH_IMG?>BeelEAT4.jpg" alt="beeleat4">
                  </a>
                </div>
            </div>
        </div>
    </div>
  </div>

<?php require_once(PATH_VIEWS.'footer.php');?>
