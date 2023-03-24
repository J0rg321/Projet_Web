<?php
ob_start();
$title="Accueil";
//$categories='</div>';
echo '<p class="bienvenue">Bienvenue ' .$_SESSION['nom'] .' !!</p>';
?>
<div class="main">

    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="../statics/images/Slide/slider1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../statics/images/Slide/slider2.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../statics/images/Slide/slider3.png" style="width:100%">
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</div>
<?php
$content = ob_get_clean();
require 'gabarit.php'; //appel du gabarit contenant le code pour l'accueil
