<?php
/*--------------------------------------------------------------------connection to the database-----------------------------------------------*/
include 'components/connect.php';

session_start();
/*-------------------------------------------------------assign value for user-------------------------------------------------------------------*/
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="./assets/css/style.css">


</head>
<body>
<!-----------------------------------------------------------------------connect the header section of the webpage----------------------------->
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>About Us!</h3>
         <p>"Discover your style at our online dress shop! From casual chic to elegant evening wear, find the perfect outfit for any occasion with just a click. Browse our curated collection of trendy dresses and shop hassle-free from the comfort of your own home. Elevate your wardrobe effortlessly with our latest arrivals!"</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<!--------------------------------------------------------section class reviews----------------------------------------------------------------------------->
   

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"Absolutely enchanted by my recent purchase from this online shop! The dress is even lovelier in person, and the fit is just perfect. Can't wait to flaunt it at my next event!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Leo Das</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>"Impressed doesn't even begin to cover it! The dress I ordered arrived promptly and exceeded all my expectations. It's elegant, well-made, and oh-so-stylish. Highly recommend!" </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Harold Das</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"A dreamy shopping experience from start to finish! The dress I bought is a real showstopper. The quality is top-notch, and I felt like a million bucks wearing it. Will definitely be shopping here again!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Antony Das</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Absolutely enchanted by my recent purchase from this online shop! The dress is even lovelier in person, and the fit is just perfect. Can't wait to flaunt it at my next event!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Elisa Das</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"In love with my new dress! It's chic, sophisticated, and incredibly flattering. The online shop's selection is curated to perfection, making it easy to find exactly what you're looking for. A definite must-visit for fashionistas!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rolex</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"Simply divine! This online shop has become my go-to for all things fashion. The dress I purchased is sheer perfection – from the design to the fabric quality. It's clear that they have a keen eye for style. Bravo!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dilli</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>






<!-------------------------------------------------------------------connect footer---------------------------------------------------------------------------->

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>