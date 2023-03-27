<?php
ob_start();
$title = "Accueil";
?>
    <div class="main">
	  <?php echo '<h1 class="bienvenue">Bienvenue ' . $_SESSION['nom'] . ' !!</h1>'; ?>
        <br/>
        <div class="slideshow-container">
		  <?php for ($i = 1; $i <= 6; $i++) { ?>
              <div class="mySlides fade">
				<?= "<img src='../statics/images/Slide/slider$i.jpg' style='width:100%'>" ?>
              </div>
		  <?php } ?>

        </div>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

        <h1><strong>Plus d'informations sure le site : </strong></h1>
        <p>Le client est très important merci, le client sera suivi par le client. Énée n'a pas de justice, pas de
            résultat, pas de ligula, et la vallée veut la sauce. Morbi mais qui veut vendre une couche de contenu triste
            d'internet. Être ivre maintenant, mais ne pas être ivre maintenant, mon urne est d'une grande beauté, mais
            elle n'est pas aussi bien faite que dans un livre. Mécène dans la vallée de l'orc, dans l'élément même.
            Certaines des exigences faciles du budget, qu'il soit beaucoup de temps pour dignissim et. Je ne m'en fais
            pas chez moi, ça va être moche dans le vestibule. Mais aussi des protéines de Pour avant la fin de la
            semaine, qui connaît le poison, le résultat.</p>
    </div>
<?php
$content = ob_get_clean();
require 'gabarit.php'; //appel du gabarit contenant le code pour l'accueil
