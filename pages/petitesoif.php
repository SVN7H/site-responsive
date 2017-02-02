<!DOCTYPE html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>Coconut Tour VaïVaï</title>
    <link rel="stylesheet" href="../styles/foundation.min.css">
    <link rel="stylesheet" href="../styles/slick.css">
    <link rel="stylesheet" href="../styles/slick-theme.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Neucha|Dosis|Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
 <!--Menu-->
    <section class="navigation">
        <div class="row">
            <div class="brand">
                <a href="../index.html" title="Retour événement"><img src="../images/vaivai.png" alt="logo" /></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="../index.html" title="index">Accueil</a>
                    </li>
                    <li>
                        <a href="petitesoif.php" title="reseaux" style="text-decoration:underline">Petite soif ?</a>
                    </li>
                    <li>
                        <a href="culturecoco.html" title="culturecoco">Culture Coco</a>
                    </li>
                    <li>
                        <a href="https://www.vaivai.fr/fr/acheter/" title="vaivaiproduit">Produits</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/vaivaiconnexion" titre="Lien twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                <a href="https://www.facebook.com/vaivaifrance/" titre="Lien facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li>
                <a href="https://fr.pinterest.com/vaivai/" titre="Lien pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                <li>
                <a href="https://www.instagram.com/vaivaiconnexion/" titre="Lien instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                <a href="https://www.youtube.com/user/Vaivaiconnexion" titre="Lien youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li>
                    <li>
                <a href="https://www.linkedin.com/company/va-va-/ " titre="Lien linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
<!--header-->
    <div id="petitsoifheader"><p id="textecentre"><?php echo htmlspecialchars($_POST[nom]) ?></p></div>
    <form method="post" action="petitesoif.php">
  <div class="row">
    <div class="medium-12 columns">
        <h1 style="text-align:center">VaïVaï vous aime,</h1>
        <input type="text" name="nom" placeholder="Votre nom">
      </div>
        </div>
        <div class="row">
    <div class="medium-12 columns">
        <input type="text" name="email" placeholder="Votre email">
      </div>
        </div>
        <div class="row">
    <div class="medium-2 medium-centered small-2 small-centered columns">
        <input type="submit" class="button success" style="font-family: 'Neucha', cursive;font-size: 2em;" placeholder="Participer">
      </div>
        </div>
<!--texte promo-->
<div class="row" id="reseauxtitre">
  <div class="medium-12 medium-centered columns">Ne repartez pas les mains vides !</div>
</div>
<div class="row" id="reseauxtexte">
<div class="medium-12 medium-centered columns"> <br/>


  <div class="row">
        <div class="medium-6 columns">
          <div class="box">
            <div class="box-icon">
              <span class="iconPetiteSoif"><i class="fa fa-twitter" aria-hidden="true"></i></span>
            </div>
            <div class="info">
              <h4 class="text-center">Tweet it!</h4>
              <p>Prenez vous en photo sur le stand et publier votre plus beau cliché sur un réseau social avec le hashtag : #cocoaddict.</p>
            </div>
          </div>
        </div>
        <div class="medium-6 columns">
          <div class="box">
            <div class="box-icon1">
                <span class="iconPetiteSoif"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></span>
            </div>
            <div class="info">
              <h4 class="text-center">Snap it !</h4>
              <p>Prenez vous en photo avec notre filtre snapchat completement coco et rejoignez notre story "cocoaddict" ! Plutôt simple non ?</p>
            </div>
          </div>
        </div>
      </div>

</div></div>
<!--texte en dessous-->
      <div class="row" id="soyezacteurs">
      <div class="small-12 medium-12 large-12 columns">
        <h1>Soyez acteur du mouvement !</h1>
      </div>
      </div>
<!--slider-->
<div class="row monSliderreseau ">
       <div class="maSlidereseau">
         <img data-lazy="../images/insta1.png"/>
       </div>
       <div class="maSlidereseau">
         <img data-lazy="../images/insta2.png"/>
       </div>
       <div class="maSlidereseau">
         <img data-lazy="../images/insta3.png"/>
       </div>
    <div class="maSlidereseau">
         <img data-lazy="../images/insta4.png"/>
       </div>
    </div>
<!--footer-->
   <footer class="footer">
  <div class="row">
    <div class="small-12 columns">

      <p class="links">
        <a href="http://www.welcometothejungle.co/companies/vaivai"><i class="fa fa-coffee" aria-hidden="true"></i> Carrière</a>
        <a href="https://drive.google.com/open?id=0B4Nje0qNbVTea2k0Smd2bGdaQ2M"><i class="fa fa-folder-open" aria-hidden="true"></i> Médias</a>
        <a href="http://vaivaipresse.tumblr.com/"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Presse</a>
        <a href="https://www.vaivai.fr/fr/contact/"><i class="fa fa-truck" aria-hidden="true"></i> Distributeurs</a>
      </p>
      <p class="copywrite">
        <a href="#top">© 2017 Vaivai SAS</a>
        <a href="https://www.vaivai.fr/fr/conditions-utilisation/">Conditions d’utilisation</a>
        <a href="https://www.vaivai.fr/fr/mentions-legales/">Mentions légales</a>
        <a href="https://www.vaivai.fr/fr/vie-privee/"> Vie privée</a>
      </p>
      <p class="slogan"><img src="../images/vaivai.png" alt="logo"/></p>
    </div>
  </div>
</footer>

 <script src="../scripts/vendor/jquery.js"></script>
    <script src="../scripts/vendor/what-input.js"></script>
    <script src="../scripts/vendor/foundation.min.js"></script>
    <script src="../scripts/vendor/slick.min.js"></script>
    <script>
 $(document).foundation();

$('.monSliderreseau').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 3,
  slidesToScroll: 1,
    autoplay : true,
    autoplaySpeed : 4000,
});

        (function($) { // Begin jQuery
            $(function() { // DOM ready
                // If a link has a dropdown, add sub menu toggle.
                $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.nav-dropdown').toggle();
                    // Close one dropdown when selecting another
                    $('.nav-dropdown').not($(this).siblings()).hide();
                    e.stopPropagation();
                });
                // Clicking away from dropdown will remove the dropdown class
                $('html').click(function() {
                    $('.nav-dropdown').hide();
                });
                // Toggle open and close nav styles on click
                $('#nav-toggle').click(function() {
                    $('nav ul').slideToggle();
                });
                // Hamburger to X toggle
                $('#nav-toggle').on('click', function() {
                    this.classList.toggle('active');
                });
            }); // end DOM ready
        })(jQuery); // end jQuery
          </script>
  </body>
</html>
