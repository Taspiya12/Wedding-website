<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="container">
    <?php @include 'header.php'; ?>
    <section class="gallery">
        <h1 class="heading">gallery</h1>
        <div class="gallery-container">

            <a href="IMAGE/wc-1.jpg"   class="box">
               <div class="image">
               <img src="IMAGE/wc-1.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>

            <a href="IMAGE/wc-2.jpg"   class="box">
            <div class="image">
               <img src="IMAGE/wc-2.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>

            <a href="IMAGE/wc-3.jpg"   class="box">
            <div class="image">
               <img src="IMAGE/wc-3.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>
            <a href="IMAGE/wc-4.jpg"   class="box">
            <div class="image">
               <img src="IMAGE/wc-4.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>

            <a href="IMAGE/wc-5.jpg"   class="box">
            <div class="image">
               <img src="IMAGE/wc-5.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>
            <a href="IMAGE/wc-6.jpg"   class="box">
            <div class="image">
               <img src="IMAGE/wc-6.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>

            <a href="IMAGE/wc-7.jpg"   class="box">
            <div class="image">
               <img src="IMAGE/wc-7.jpg" alt="">
               </div>
                <h3>Wedding ceremony</h3>
            </a>
        </div>
    </section>
      
    <?php @include 'footer.php'; ?>

    </div>
   






   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>


    <script>

        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
    
</body>
</html>