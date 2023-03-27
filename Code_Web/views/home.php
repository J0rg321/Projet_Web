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
        <p>Notre site est issu d'un projet scolaire. Le but étant de créer un site de E - Commerce.
        Notre choix s'est porté sur la vente de vêtements de prêt - à - porter.
            Notre site comporte une page d'accueil, une page vêtements, une page pour le panier, et une page pour créer / et se connecter à son compte.
        </p>
    </div>
<?php
$content = ob_get_clean();
require 'gabarit.php'; //appel du gabarit contenant le code pour l'accueil
