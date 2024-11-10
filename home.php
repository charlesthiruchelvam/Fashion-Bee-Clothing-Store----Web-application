<?php
/*---Connect The Components php file to Home php file---*/
include 'components/connect.php';

session_start();
/*---assigns the value to the variable of user---*/
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
/*---Connect The wishlist_cart php file to Home php file---*/
include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!---font link style--->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!---font link style--->
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="css/style.css">



</head>
<body>
<!---Connect The user_header php file to Home php file--->

<?php include 'components/user_header.php'; ?>

<!---Background Image_1 homeH--->

<section class="section section-divider white cta" style="background-image: url('./assets/images/homeH.png')" >
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
              
            </h2>

            <p class="section-text">
              
            </p>
            <!--<a href="menu.php" button class="btn btn-hover"></button>ORDER FOOD</a>-->
            
          </div>

          <figure class="cta-banner">
            

            
          </figure>

        </div>
      </section>




<!---about section--->
<section class="section section-divider gray about" id="about">
        <div class="container">

          <div class="about-banner">
            <img src="./assets/images/girlDD.png" width="509" height="1593" loading="lazy" alt="redgirl"
            >

            
          </div>
          <div class="about-content">

            <h2 class="h2 section-title">
              Here's to chasing your dreams in your
              <span class="span">Favorite Dress!...</span>
            </h2>



            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Subscribe Now!........</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>
                <a href="default.asp"><img src="./assets/images/gold.png" alt="HTML tutorial" style="width:500px;height:150px;"> </a>    
                
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <a href="default.asp"><img src="./assets/images/silver.png" alt="HTML tutorial" style="width:500px;height:150px;"> </a>              
                
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <a href="default.asp"><img src="./assets/images/bronze.png" alt="HTML tutorial" style="width:500px;height:150px;"> </a>              
          
              </li>

            </ul>
            <a href="menu.php" button class="btn btn-hover"></button>SHOP NOW</a>
            
          </div>

        </div>
      </section>

<!---Display the products on home screen--->
<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Rs </span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!--Background Image_2 home-bg-->

<section class="section section-divider white cta" style="background-image: url('./assets/images/home-bg.png')" >

        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
              
            </h2>

            <p class="section-text">
              
            </p>
            <!--<a href="menu.php" button class="btn btn-hover"></button>ORDER FOOD</a>-->
            
          </div>

          <figure class="cta-banner">
            

            
          </figure>

        </div>
      </section>

      <!--Delivery Information section-->

      <section class="section section-divider gray delivery">
        <div class="container">

          <div class="delivery-content">

            <h2 class="h2 section-title">
              A Moments Of Delivered On <span class="span">Right Time</span> & Place
            </h2>

            <p class="section-text">
            "Experience unparalleled convenience with our door-to-door delivery service for our clothing website. 
            Enjoy the ease of shopping from the comfort of your home, with your stylish selections arriving right at your doorstep. 
            Say goodbye to long queues and crowded malls – shop hassle-free and have your fashion finds delivered directly to you."

            <li>
              <span class="span">We promise reliability, speed, and excellence in every delivery.</span>
            </li>
            
            <li>
              <span class="span">We guarantee timely deliveries to ensure your satisfaction.</span>
            </li>
           
            <li>
              <span class="span">We prioritize the safety and convenience of your shipments. </span>
            </li>
           
            <li>
              <span class="span">Trust us to uphold our commitment to delivering your orders promptly and professionally, every time.</span>
            </li>
        
            </p>

            

            <button class="btn btn-hover">Order Now</button>
          </div>

          <figure class="delivery-banner">
            <img src="./assets/images/delivery-banner-bg.png" width="700" height="602" loading="lazy" alt="clouds"
              class="w-100">

            <img src="./assets/images/delivery-boy.png" width="1000" height="880" loading="lazy" alt="delivery boy"
              class="w-100 delivery-img" data-delivery-boy>
          </figure>

        </div>
      </section>
<!--Background Image_3 home-bg1-->

<section class="section section-divider white cta" style="background-image: url('./assets/images/home-bg1.png')" >

        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
              
            </h2>

            <p class="section-text">
              
            </p>
            <!--<a href="menu.php" button class="btn btn-hover"></button>ORDER FOOD</a>-->
            
          </div>

          <figure class="cta-banner">
            

            
          </figure>

        </div>
      </section>
       
<!--BANNER section-->

      <section class="section section-divider gray banner">
        <div class="container">

          <ul class="banner-list">

            <li class="banner-item banner-lg">
              <div class="banner-card">

                <img src="./assets/images/banner-1.jpg" width="550" height="450" loading="lazy"
                  alt="Dress" class="banner-img">

                <div class="banner-item-content">
                  

                  <
                 

                 
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-2.jpg" width="550" height="465" loading="lazy" alt="Dress"
                  class="banner-img">

                <div class="banner-item-content">
             

                 
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-3.jpg" width="550" height="465" loading="lazy" alt="Dress"
                  class="banner-img">

                <div class="banner-item-content">
                  

                  
                </div>

              </div>
            </li>

            <li class="banner-item banner-md">
              <div class="banner-card">

                <img src="./assets/images/banner-4.jpg" width="550" height="220" loading="lazy" alt="Dress"
                  class="banner-img">

                <div class="banner-item-content">
                  

                  
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>








<!---Connect The footer php file to Home php file--->     
<?php include 'components/footer.php'; ?>
<!---Connect The JS file to Home php file---> 
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

/*--- Slider for products in home ---*/
var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>