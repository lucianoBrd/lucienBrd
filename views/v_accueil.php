
<?php require_once(PATH_VIEWS.'header.php');?>

<body class="diag">

<!-- LOADER -->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>

    <?php require_once(PATH_VIEWS.'menu.php');?>

        <!--HOME-->
        <section class="home" id="home">
                <div class="home-content">
                    <div class="container">
                        <h1>Lucien Burdet <span class="element" data-text1="Developpeur" data-text2="Designer" data-loop="true" data-backdelay="3000"></span></h1>
                        <div class="social">
                            <a href="https://www.linkedin.com/in/lucien-burdet-b8b76a153"><i class="fa fa-linkedin" aria-hidden="true"></i>  </a>
                            <a href="https://github.com/lucianoBrd"><i class="fa fa-git" aria-hidden="true"></i>  </a>
                        </div>
                        <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            <svg class="diagonal home-left" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L0 10 Z"></path>
            </svg>
            <svg class="diagonal home-right" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L100 10 Z"></path>
            </svg>
        </section>

        <!--ABOUT-->
        <section class="about dgray-bg" id="about">
            <div class="about type-1 padbot_120">
                <div class="container">
                    <!-- about image -->
                    <div class="col-md-4 col-sm-12 about-image top_30 wow fadeInUp"  data-wow-delay="0.4s">
                        <div class="row">
                            <img src="<?=PATH_IMG?>about.jpg" alt="about">
                        </div>
                    </div>
                    <!-- about text -->
                    <div class="col-md-7 col-md-offset-1 col-sm-12 about-text wow fadeInUp"  data-wow-delay="0.6s">
                        <div class="section-title dleft bottom_30">
                          <br>
                            <h2>A propos de moi</h2>
                        </div>
                        <p><?=INTRO?>
                          <br></br>
                          <?=DESCRIPTION?>
                        </p>
                    </div>

                    <!-- work areas -->
                    <div class="owl-carousel work-areas top_120 bottom_120 wow fadeInUp" data-pagination="false" data-autoplay="3000" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"  data-wow-delay="0.4s">
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="&quot;" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Ingénieux</h6>
                                <p></p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="E" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Organisé</h6>
                                <p></p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="N" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Esprit curieux</h6>
                                <p></p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="P" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Perfectionniste</h6>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L70 100 L100 0 Z"></path>
            </svg>
            </div>
        </section>

        <!--PORTFOLIO-->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-title dleft top_120 bottom_90">
                    <h2>Portfolio</h2>
                </div>
                <!--Portfolio Items-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="row">
                          <a href="?page=beeleat" class="single_item col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.4s">
                              <div class="blog-image">
                                  <img src="<?=PATH_IMG?>bl.jpg">
                              </div>
                              <h2 class="blog-title">BeelEAT </h2>
                              <p>Site pour la restauration.  </p>
                              <span class="blog-info"><span>Projet tutoré IUT</span> - 2018 / 2019 </span>
                          </a>
                          <a target="_blank" href="https://emilie-nguyen.com/" class="single_item col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.6s">
                              <div class="blog-image">
                                  <img src="<?=PATH_IMG?>ngy.jpg">
                              </div>
                              <h2 class="blog-title">Emilie Nguyen </h2>
                              <p>Site pour une photographe.  </p>
                              <span class="blog-info"><span>Freelance</span> - 2017 </span>
                          </a>
                          <a target="_blank" href="https://diminuo.lucien-brd.com/" class="single_item col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow hidden-sm fadeInUp" data-wow-delay="0.8s">
                              <div class="blog-image">
                                  <img src="<?=PATH_IMG?>diminuo.jpg">
                              </div>
                              <h2 class="blog-title">Diminuo </h2>
                              <p>Site pour raccourcir les URL.  </p>
                              <span class="blog-info"><span>Personnel</span> - 2018 </span>
                          </a>
                          <a href="<?=PATH_DOC?>CV_BURDET_Lucien_.pdf" class="single_item col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow hidden-sm fadeInUp" data-wow-delay="0.10s">
                              <div class="blog-image">
                                  <img src="<?=PATH_IMG?>cv.jpg">
                              </div>
                              <h2 class="blog-title">Curriculum Vitae </h2>
                          </a>
                      </div>
                    </div>
                    </div>
            </div>
            <svg class="diagonal-white" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L30 100 L100 0 Z"></path>
            </svg>
        </section>
        <!-- CONTACT -->
        <section class="contact" id="contact">
          <div class="container-fluid dgray-bg padbot_200">
            <div class="container">

                <div class="section-title dleft top_120">
                    <h2 class="bottom_30">Coordonnées</h2>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Contact Info -->
                    <ul class="contact-info row">
                        <li>Lyon 69000</li>
                        <li>luciano@lucien-brd.com</li>
                    </ul>
                    <div class="social-icons top_60 row">
                        <a class="tw" href="https://www.linkedin.com/in/lucien-burdet-b8b76a153"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a class="dr" href="https://github.com/lucianoBrd"><i class="fa fa-git" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-2 form top_30 bottom_90 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="page-title sub">
                            <h5>Contactez moi</h5>
                        </div>
                        <form class="contact-form top_60" method="POST" action="../">
                            <div class="row">
                                <!--Name-->
                                <div class="col-md-6">
                                    <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Nom">
                                </div>
                                <!--Email-->
                                <div class="col-md-6">
                                    <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <!--Message-->
                                    <textarea name="con_message" id="con_message" class="requie" placeholder="Que puis je faire pour vous?" rows="8"></textarea>
                                    <button id="con_submit" class="sitebtn top_30 pull-right" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L70 100 L100 0 Z"></path>
            </svg>
          </div>
        </section>

<?php require_once(PATH_VIEWS.'footer.php');?>
