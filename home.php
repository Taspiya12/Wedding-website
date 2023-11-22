<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="container">

    <?php @include 'header.php'; ?>

  
    <section class="home">
        <div class=" swiper home-slider">
            <div class="swiper-wrapper">
             <div class="swiper-slide slide" style="background: url('IMAGE/home-1.jpg');">
             

                <div class="content">
                    
                    <h3>plan your wedding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Nam ducimus autem commodi minus assumenda aliquam neque.</p>
                         <a href="about.php" class="btn">discover more</a>
                </div>
            
            </div>

            <div class=" swiper-slide slide" style="background: url('IMAGE/home-2.jpg') ; ">
                <div class="content">
                    <h3>plan your wedding </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Nam ducimus autem commodi minus assumenda aliquam neque.</p>
                         <a href="about.php" class="btn">discover more</a>
                </div>
            
            </div>

            <div class="swiper-slide slide" style="background: url('IMAGE/home-3.jpg') ;">
                <div class="content">
                    <h3>plan your wedding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Nam ducimus autem commodi minus assumenda aliquam neque.</p>
                         <a href="about.php" class="btn">discover more</a>
                </div>
            
            </div>

            <div class="swiper-slide slide" style="background: url('IMAGE/home-4.jpg') ;">
                <div class="content">
                    <h3>plan your wedding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Nam ducimus autem commodi minus assumenda aliquam neque.</p>
                         <a href="about.php" class="btn">discover more</a>
                </div>
            
            </div>

        </div>
        <div class="swiper-pagination">

        </div>
        </div>

    </section>


    <section class="services">
        <h1 class="heading">Our services</h1>

        <div class="swiper service-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="IMAGE/venue.jpg" alt="">
                    <div class="content">
                        <h3>venue</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere!</p>
                        <a href="about.php" class="btn">About more</a>
                    </div>

                </div>

                <div class="swiper-slide slide">
                    <img src="IMAGE/menu.jpg" alt="">
                    <div class="content">
                        <h3>Menu </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere!</p>
                        <a href="about.php" class="btn">About more</a>
                    </div>

                </div>

                <div class="swiper-slide slide">
                    <img src="IMAGE/photography.jpg" alt="">
                    <div class="content">
                        <h3>photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere!</p>
                        <a href="about.php" class="btn">About more</a>
                    </div>

                </div>

                <div class="swiper-slide slide">
                    <img src="IMAGE/music.jpg" alt="">
                    <div class="content">
                        <h3>music</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere!</p>
                        <a href="about.php" class="btn">About more</a>
                    </div>

                </div>

                <div class="swiper-slide slide">
                    <img src="IMAGE/mehdi.jpg" alt="">
                    <div class="content">
                        <h3>Mehdi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere!</p>
                        <a href="about.php" class="btn">About more</a>
                    </div>

                </div>

                <div class="swiper-slide slide">
                    <img src="IMAGE/wedding-cake.jpg" alt="">
                    <div class="content">
                        <h3>wedding cake</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere!</p>
                        <a href="about.php" class="btn">About more</a>
                    </div>

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>


    
    <?php @include 'footer.php'; ?>


    </div>
   







<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
    
</body>
</html>