<?php
$conn = mysqli_connect('localhost','root', '','booking_db');
if(isset($_POST['send'])){
    $Name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $plan = $_POST['plan'];
    $date = $_POST['event-dt'];
    $reception = $_POST['time'];
   
    $insert = "INSERT INTO `booking_form`( `Name`, `email`, `number`, `address`, `plan`, `date`, `reception`)
     VALUES ('$Name',' $email',' $number','$address','$plan','$date',' $reception')";
    
    mysqli_query($conn, $insert);

    header('location:booking.php');
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="container">
    <?php @include 'header.php'; ?>


    <section class="booking">
        <h1 class="heading">Fulfil your dream</h1>
        <form action="" method="post">
            <div class="flex">
                <div class="inputbox">
                    <span>your name</span>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>

                <div class="inputbox">
                    <span>E-mail address</span>
                    <input type="text" placeholder="Enter your email" name="email" required>
                </div>

                <div class="inputbox">
                    <span>Phone number</span>
                    <input type="number" placeholder="Enter your number" name="number" required>
                </div>

                <div class="inputbox">
                    <span>The menu choices</span>
                    <select name="plan">
                        <option value="basic"> basic plan </option>
                        <option value="standard"> standard plan </option>
                         <option value="premium"> premium plan </option>
                    </select>
                  
                </div>

                <div class="inputbox">
                    <span>Times of Reception</span>
                    <select name="time">
                        <option value="day"> Daytime only </option>
                        <option value="DandE"> Day & Evening </option>
                         <option value="Evening"> Evening only </option>
                    </select>
                  
                </div>

                <div class="inputbox">
                    <span>Event date & time</span>
                    <input type="datetime-local" placeholder=" " name="event-dt" required>
                </div>

                <div class="inputbox">
                    <span>your address</span>
                   <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                </div>

                
            </div>

            <input type="submit" value="booking now" name="send" class="btn">
        </form>






    </section>









    <?php @include 'footer.php'; ?>

    </div>
   







    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="js/script.js"></script>
    
</body>
</html>