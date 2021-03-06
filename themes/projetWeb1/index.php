<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>iai-togo</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="footerStyle.css">

</head>

<body>
<?php 
	include('header.php');
?>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/IAITOGO.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Institue Africain d'Informatique</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">IAI-TOGO
              En application de la d??cision du Conseil d???Administration de d??localiser l???IAI, la Repr??sentation du TOGO (IAI-TOGO) a ouvert ses portes le 24 octobre 2002. 
              L???accord d?????tablissement entre la R??publique Togolaise et l???Institut Africain d???Informatique a ??t?? sign??e le 12 mai 2006.
              </p>
            <a href="information.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Lire la suite</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Institue Africain d'Informatique</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
              IAI-TOGO
              En application de la d??cision du Conseil d???Administration de d??localiser l???IAI, la Repr??sentation du TOGO (IAI-TOGO) a ouvert ses portes le 24 octobre 2002. 
              L???accord d?????tablissement entre la R??publique Togolaise et l???Institut Africain d???Informatique a ??t?? sign??e le 12 mai 2006.
             </p>
            <a href="information.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">lire la suite</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Institue Africain d'Informatique</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">
              IAI-TOGO
              En application de la d??cision du Conseil d???Administration de d??localiser l???IAI, la Repr??sentation du TOGO (IAI-TOGO) a ouvert ses portes le 24 octobre 2002. 
              L???accord d?????tablissement entre la R??publique Togolaise et l???Institut Africain d???Informatique a ??t?? sign??e le 12 mai 2006.
              </p>
            <a href="information.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">lire la suite </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature 
<section class="bg-gray overflow-md-hidden">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/banner/banner-feature.png" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Scholorship News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Notice Board</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Achievements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Admission Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title"id="communique">CONCOURS D'ENTREE A L'IAI-TOGO</h2>
        <p>Le Ministre de la Planification du D??veloppement porte ?? la connaissance du public qu???il est ouvert chaque ann??e un concours d???entr??e en 1??re ann??e du Cycle ?? Ing??nieur des Travaux Informatiques (Licence Professionnelle) ?? options G??nie Logiciel (GL), Syst??mes et R??seaux (SR) de l???Institut Africain d???Informatique, Repr??sentation du Togo (IAI-TOGO). </p>
        <p>Le concours se d??roulera dans les centres d?????crit suivants :<br>
        Centre National d???Etudes et de Traitements Informatiques (CENETI) ?? Lom??,
        Lyc??e de Kara 1 (Kara) ?? Lama Kara (Pr??fecture de la Kozah).</p>
        <p>
          Le concours comportera les ??preuves ??crites suivantes :

          Pour les deux (2) options:<br>

          Techniques d???expression fran??aise, dur??e 2 heures, coefficient 2,<br>
          Anglais, dur??e 2 heures, coefficient 3,<br>
          Math??matiques, dur??e 4 heures, coefficient 6,<br>
          Les dossiers de candidature sont ?? d??poser dans les centres d'??crit au plus tard le jeudi 30 septembre 2021 ?? 17 heures la date du concours est prevue sur le mardi 05 octobre 2021 ?? 07 heures 00.
        </p>

        <a href="inscription.php" class="btn btn-primary-outline">S'inscrire au concours</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/iai-togo.png" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Les formation de l'IAI-TOGO</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <!--<a href="courses.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>-->
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/gl.jpg" alt="course thumb">
      <div class="card-body">
        <!--<ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="course-single.html">
          <h4 class="card-title">Genie Logiciel</h4>
        </a>
        <p class="card-text mb-4"> 

          La fili??re G??nie Logiciel forme des informaticiens capables de concevoir et de maintenir des logiciels en s???appuyant sur des m??thodes et des outils tr??s ??volu??s. les principaux acquis apr??s une formation en G??nie Logiciel sont la ma??trise des syst??mes d???information, des outils d???analyse et de mod??lisation, de programmation dans les langages de pointe ainsi que l???administration des bases de donn??es. A cet effet, l???IAI-TOGO met ?? la disposition de ses ??tudiants des centres de calcul ??quip??s de micro-ordinateurs le tout dans un r??seau local pour le partage des ressources. La formation est th??orique et pratique renforc??e par des stages d???entreprise. </p>
        <!--<a href="information1.html" class="btn btn-primary btn-sm">Lire plus</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/sr.jpg" alt="course thumb">
      <div class="card-body">
        <!--<ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="course-single.html">
          <h4 class="card-title">syt??me r??seaux</h4>
        </a>
        <p class="card-text mb-4">La fili??re Syst??mes et R??seaux, cr????e il y a deux ans forme des informaticiens capables de concevoir, implanter, interconnecter et administrer des r??seaux informatiques et d???assurer ??galement la maintenance de tout mat??riel informatique. L???accent est donc mis sur l?????tude des r??seaux sous la norme CISCO CCNA, les syst??mes d???exploitation, l?????lectricit??, l?????lectronique et la maintenance.</p>
        <p class="card-text mb-4">A cet effet, l???IAI-TOGO met ?? la disposition de ses ??tudiants des salles de r??seaux ??quip??es de micro-ordinateurs le tout dans un r??seau local pour le partage des ressources.
        La formation est tr??s pratique. La premi??re promotion de sept (7) ??tudiants ont re??u leur dipl??me en 2010.</p>
        <!--<a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>-->
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/mtwi.jpg" alt="course thumb">
      <div class="card-body">
        <!--<ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="course-single.html">
          <h4 class="card-title">Multim??dia</h4>
        </a>
        <p class="card-text mb-4"> La licence Multim??dia, Technologie Web et Infographie (M-TWI), vise ?? apporter aux ??tudiants les comp??tences n??cessaires pour r??ussir leur projet, qu???il soit de cr??ation, d???administration ou d???industrialisation des produits de communication audiovisuelle.
        L???identit?? de la formation est li??e ?? la nature pluridisciplinaire des enseignements (connaissance technologiques, informatique, gestion de projet, cr??ation audiovisuelle, infographie) et ?? l???opportunit?? d???affirmer une bonne communication via des documents multim??dias. Il s???agit aussi d???int??grer une culture de management de projets multim??dia et infographie. </p>
        
       <!-- <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>-->
      </div>
    </div>
  </div>
 
	<?php
		include('footer.php');
	?>
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>