<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="container">
    <?php @include 'header.php'; ?>
    <section class="pricing"> 
            <h1 class="heading">Our pricing</h1>
            <div class="box-container"> 
                <div class="box">
                    <h3>Basic Plan</h3>
                    <div class="price">$250/-</div>
                    <div class="list">
                        <p><i class=" fas fa-check"></i>venue</p>
                        <p><i class=" fas fa-check"></i>photography</p>
                        <p><i class=" fas fa-check"></i>make-up</p>
                    </div>
                    <a href="booking.php" class="btn">choose plan</a>

                </div>

                <div class="box">
                    <h3>Standard Plan</h3>
                    <div class="price">$650/-</div>
                    <div class="list">
                        <p><i class=" fas fa-check"></i>venue</p>
                        <p><i class=" fas fa-check"></i>photography</p>
                        <p><i class=" fas fa-check"></i>make-up</p>
                        <p><i class=" fas fa-check"></i>wedding-cake</p>
                    </div>
                    <a href="booking.php" class="btn">choose plan</a>

                </div>

                <div class="box">
                    <h3>Premium Plan</h3>
                    <div class="price">$950/-</div>
                    <div class="list">
                        <p><i class=" fas fa-check"></i>venue</p>
                        <p><i class=" fas fa-check"></i>photography</p>
                        <p><i class=" fas fa-check"></i>make-up</p>
                        <p><i class=" fas fa-check"></i>wedding-cake</p>
                        <p><i class=" fas fa-check"></i>Mehdi</p>
                        <p><i class=" fas fa-check"></i>Menu</p>
                    </div>
                    <a href="booking.php" class="btn">choose plan</a>

                </div>

            </div>


    </section>

    <section class="reviews">
        <h1 class="heading">Customer Review's</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="IMAGE/client.jpg" alt="">
                    <h3>oprah win</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                </div>

                    <div class="swiper-slide slide">
                    <img src="IMAGE/client.jpg" alt="">
                    <h3>oprah win</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="IMAGE/client.jpg" alt="">
                    <h3>oprah win</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="IMAGE/client.jpg" alt="">
                    <h3>oprah win</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="IMAGE/client.jpg" alt="">
                    <h3>oprah win</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="IMAGE/client.jpg" alt="">
                    <h3>oprah win</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

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