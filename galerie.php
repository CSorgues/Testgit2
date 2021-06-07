<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lab Template</title>
   <link rel="stylesheet" href="style.css">
   <!--icone-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="icon" type="image/png" href="/images/Camera -button.png">
   <!--police-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,700;1,100;1,300;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>

   <?php include("header.php"); ?>

   <main>
      <section id="canon">

         <div class="slideshow-container">

            <div class="mySlides fade">

               <img src="./images/1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">

               <img src="./images/slider/appareil photo 1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">

               <img src="./images/slider/appareil photo 2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">

               <img src="./images/slider/appareil photo 3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">

               <img src="./images/slider/appareil photo 4.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">

               <img src="./images/slider/appareil photo 5.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

         </div>

      </section>

      <section id="gallery">

         <h2>galerie</h2>

         <div id="album">

            <img src="./images/galerie/etoile.jpg" class="myImg" alt="voie lactée" onclick="zoom(this)">
            <img src="./images/galerie/femme.jpg" class="myImg" alt="femme à lunettes" onclick="zoom(this)">
            <img src="./images/galerie/jungle.jpg" class="myImg" alt="photo jungle" onclick="zoom(this)">
            <img src="./images/galerie/lune.jpg" class="myImg" alt="crépuscule" onclick="zoom(this)">
            <img src="./images/galerie/etoile.jpg" class="myImg" alt="voie lactée" onclick="zoom(this)">
            <img src="./images/galerie/femme.jpg" class="myImg" alt="femme à lunettes" onclick="zoom(this)">
            <img src="./images/galerie/jungle.jpg" class="myImg" alt="photo jungle" onclick="zoom(this)">
            <img src="./images/galerie/lune.jpg" class="myImg" alt="crépuscule" onclick="zoom(this)">
         </div>

         <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
         </div>


      </section>





   </main>

   <?php include("footer.php"); ?>

   <script src="script.js"></script>
</body>

</html>