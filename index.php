<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    
</html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BODY FITNESS WEBSITE</title>

    <!-- swiper CSS cdn link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- custom CSS file link  -->
    <link rel="stylesheet" href="http://localhost/login%20system/hakathon/style.php/">

    <!-- Font awesome cdn link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
</head>
<body>
    
    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">BE <span>FITT</span></a>

        <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#text">ABOUT</a>
            <a href="#services">SERVICES</a>
            <a href="#news">TUTORIALS</a>
            <a href="#icons">CONTACT</a>
        </nav>

        <button class="chatbot-toggler">
            
            <a href="C:\Users\kloke\Downloads\hakathon\index4.html">CHAT!!</a>
        </button>
        


        <div class="icons">
            <a href="http://localhost/login%20system/login_form.php/" class="btn">LOGIN</a>
        
            <a href="http://localhost/login%20system/register_form.php/register_form.php" class="btn">REGISTER</a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <!-- header section ends  -->

    <!-- home section starts  -->

    <section class="home" id ="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box" style="background:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url('C:\\Users\\kloke\\Downloads\\images-20230912T142201Z-001\\images\\home-1.jpeg');">
                    <div class="content" >
                        <h3>JOIN BEFITT AND BE FIT </h3>
                        <p>"Take care of your body. It's the only place you have to live."</p>
                        <div class="button">
                            <a href="#" class="btn btn-1">get started</a>
                
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url('C:\\Users\\kloke\\Downloads\\images-20230912T142201Z-001\\images\\home-2.jpeg');">
                    <div class="content">
                        <h3>health is wealth</h3>
                        <p>"Health is a crown that the healthy wear, but only the sick can see."




                        </p>
                        <div class="button">
                            <a href="#" class="btn btn-1">get started</a>
                            <a href="#" class="btn">download</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- home section ends  -->

    <!-- featured section starts  -->

    <section class="feature">

        <h1 class="heading"> Featured <span>Classes</span></h1>

        <div class="swiper feature-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\Feature-classes.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$39.99</div>
                        <h3>REVA FITNESS</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\Feature-classes-2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$39.99</div>
                        <h3>LOKI FITNESS</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\Feature-classes-3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$39.99</div>
                        <h3>BODA FITNESS</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\Feature-classes-4.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$39.99</div>
                        <h3>SAYSHA FITNESS</h3>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\Feature-classes-5.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">FREE</div>
                        <h3>GULLE FITNESS</h3>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- featured section ends  -->

    <!-- Schedule section starts  -->

    <section class="schedule" id="news">

        <h1 class="heading"><span>our</span> schedule</h1>

        <div class="box-container">

            <div class="box">
                <div class="content">
                    <h3>GULLE FITNESS</h3>
                    <p>IN THIS FITNESS THEY  WILL SAY HOW TO BE HEATHY BY DOING EXECIES</p>
                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i> 5:30 PM</span>
                    <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                </div>
                <a href="#" class="btn">Join Form FREE</a>
            </div>
            
            <div class="box">
                <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\pic-1.jpeg" alt="">
            </div>

            <div class="box">
                <div class="content">
                    <h3>BODA</h3>
                    <p>THIS IS THE MOST EFFICTIVE FITNESS PLACE THEY WILL TEACH EXERCISES</p>
                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i> 5:30 PM</span>
                    <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                </div>
                <a href="#" class="btn">Join Form $15</a>
            </div>

            <div class="box">
                <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\pic-2.jpeg" alt="">
            </div>

            <div class="box">
                <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\pic-3.jpeg" alt="">
            </div>

            <div class="box">
                <div class="content">
                    <h3>SAYSHA FITNESS</h3>
                    <p>THEY TEACHES HOW TO LOVE </p>
                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i> 5:30 PM</span>
                    <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                </div>
                <a href="#" class="btn">Join Form $15</a>
            </div>

            <div class="box">
                <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\pic-4.jpeg" alt="">
            </div>

            <div class="box">
                <div class="content">
                    <h3>LOKI</h3>
                    <p>THIS IS THE NUMBER 1 FITNESS IN INDIA </p>
                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i> 5:30 PM</span>
                    <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                </div>
                <a href="#" class="btn">Join Form $15</a>
            </div>

        </div>

    </section>

    <!-- Schedule section ends  -->

    <!-- trainer section starts  -->

    <section class="trainers">

        <h1 class="heading">Expert <span>trainers</span></h1>

        <div class="swiper trainer-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\trainer-1.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>LOKI</h1>
                        <p>gym trainer</p>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\trainer-4.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>BODA</h1>
                        <p>gym trainer</p>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\trainer.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>SAYSHA</h1>
                        <p>gym trainer</p>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\trainer-2.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>PRAVALLIKA</h1>
                        <p>gym trainer</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- trainer section ends  -->

    <!-- testimonial section starts  -->

    <section class="testimonial">

        <h1 class="heading">testimonial</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\t-2.jpeg" alt="">
                </div>
                <div class="name">
                    <h1>SHYAM</h1>
                    <p>CEO. <span>LOVE company</span> </p>
                </div>
                <p>"Love is not about how many days, months, or years you have been together. Love is about how much you love each other every single day."</p>
            </div>

            <div class="box">
                <div class="image">
                    <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\t-3.jpeg" alt="">
                </div>
                <div class="name">
                    <h1>BODA</h1>
                    <p>CEO. <span>GOOGLE</span> </p>
                </div>
                <p>HE IS THE NUMBER 1 CEO OG GOOGLE BEFORE SUNDER PICHHAI MEANLINE SUNDER PICCHAI WAS A ASSISTENT TO HIM </p>
            </div>

            <div class="box">
                <div class="image">
                    <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\t-4.jpeg" alt="">
                </div>
                <div class="name">
                    <h1>Mike rechardson</h1>
                    <p>CEO. <span>xyz company</span> </p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ex aspernatur illum ducimus atque hic dolor animi consectetur minus a sint, quisquam id iste voluptate possimus neque unde natus. Porro.</p>
            </div>


        </div>

    </section>

    <!-- testimonial section ends  -->

    <!-- blogs section starts  -->

    <section class="blogs">

        <h1 class="heading">our <span>blogs</span></h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\blog-1.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Fitness class name here</h3>
                        <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorem qui asperiores quas, molestiae aspernatur.</p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>

                
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\blog-2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Fitness class name here</h3>
                        <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorem qui asperiores quas, molestiae aspernatur.</p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>

              
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\blog-3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Fitness class name here</h3>
                        <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorem qui asperiores quas, molestiae aspernatur.</p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="C:\Users\kloke\Downloads\images-20230912T142201Z-001\images\blog-4.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Fitness class name here</h3>
                        <span><i class="fad fa-calendar-alt"></i>april 22, 2021</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorem qui asperiores quas, molestiae aspernatur.</p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- blogs section ends  -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h1>about</h1>
                <div class="text" id="text">
                    <p><b>We believe in delivering the best fitness techniques for each individual because we trust the phrase health is wealth . Come and join us to explore more about the facilities, diet schedule, online services , our training experts and our delivery services.</b></p>
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="box">
                <h1>contact info</h1>
                <div class=icons id="icons">
                    <a href="#"><i class="fas fa-map-marker-alt"></i><b>REVA COLLEGE, BANGALORE, INDIA</b></a>
                    
                    
                    <a href="#"><i class="fas fa-phone-alt"></i><b>9353033011</b></a>
                    
                    
                    <a href="#"><i class="fas fa-envelope"></i><b>klokeshj5@gmail.com</b></a>
                    
                    
                </div>
            </div>

            <div class="box">
                <h1>Quick links</h1>
                <div class="icons">
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">services</a>
                    <a href="#">news</a>
                    <a href="#">contact</a>
                </div>
            </div>

        </div>

        <div class="credit">created by <span>PLPSS GROUP</span> | all right reserved</div>

    </section>

    <!-- footer section ends  -->








    <!-- swiper JS cdn link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> 


    <!-- Custom JS file link  -->
    <script src="http://localhost/login%20system/hakathon/script.php/"></script>
</body>
</html>













