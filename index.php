<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
     <!-- fonts -->
     <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css"
        integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js"
        integrity="sha512-1M9vud0lqoXACA9QaA8IY8k1VR2dMJ2Qmqzt9pN2AH7eQHWpNsxBpaayV0kKkUsF7FLVQ2sA2SSc8w5VOm7/mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/solid.min.js"
        integrity="sha512-BR7kmAOY+DL7VrNcDauAY0nOqLp58prNOuwMmes8bd5ET13AAorhPqzbCtH8BsGGG0/TTs9W4Tokbj4tMhFUFw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Home</title>
</head>

<body>
    <!-- navigation bar -->
    <div class="header">
        <div class="nav">
            <div class="logo">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/logo_v3_new_font.png' ); ?>" alt="">
            </div>
            <div class="menu" onclick="openmenu()">
                <div class="m1"></div>
                <div class="m2"></div>
                <div class="m3"></div>
            </div>
            <div class="navigation hidemenu">
                <a href="">Home</a>
                <a href="#pricing">Pricing</a>
                <a href="#ourteam">Our team</a>
                <a href="#aboutus">About us</a>
                <a href="#contactus">Contancts us</a>
            </div>
        </div>
    </div>
    <!--End navigation bar -->

    <!-- call to action -->
    <div class="cta">
        <div class="bg">
            <div class="bg_img">
                <!-- Slider main container -->
                <div class="swiper" style="z-index: -1;transition:300ms;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/148.jpg' ); ?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/best-snorkeling-in-florida.jpg' ); ?>" alt="">
                        </div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/44407222_l-2048x1365-3103749812.jpg' ); ?>"
                                alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/P1440254.jpg' ); ?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/PLUS-SIZE-KAYAKING-banner-1.jpg' ); ?>" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/Snorkeling-Silfra-Thingvellir-Iceland-small.jpg' ); ?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/spain-kayaking-in-galicia.jpg' ); ?>" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/Snorkeling-Silfra-Thingvellir-Iceland-small.jpg' ); ?>" alt=""></div>
                    </div>
                </div>

            </div>
            <div class="bg_filter"></div>
        </div>

        <div class="content">
            <div class="container">
                <div class="text">
                    <h1>LET'S GO KAYAKING AND SNORKELING!</h1>
                    <h3>Dive into the ultimate experience.</h3>
                    <button onclick="openForm()">Book now</button>
                </div>
                <!-- <div class="form-booking">
                    <div class="form">
                        <div class="head-section">
                            <span onclick="closeForm()">&#9747;</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--End call to action -->

    <!-- about us -->
    <div class="aboutus" id="aboutus">
        <div class="content">
            <div class="title">
                <h2>About us</h2>
            </div>
            <div class="container">
                <div class="img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/slider_img/148.jpg' ); ?>" alt="">
                </div>
                <div class="text">
                    <p>
                        Le kayak est un excellent sport pour profiter de la nature et faire des activités nautiques.
                        Nous commençons notre voyage en kayak à Los Cristianos, nous regardons des vues splendides sur
                        les falaises de Palm Mar qui se dressent sur le littoral comme un immense mur. Il y a une forte
                        probabilité que nous rencontrions des tortues de mer et d'autres animaux marins sur notre
                        chemin. Cette excursion en kayak dure 2 heures et ne comprend pas de plongée en apnée. Une
                        excursion en kayak est un bon moyen de passer une journée active, seul ou en famille.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="text">
                    <p>
                        Chacun de nos instructeurs est certifié et entièrement qualifié pour accompagner les excursions
                        en kayak. Ils vous apprendront à manier la rame, vous aideront à monter sur le kayak, vous
                        montreront les meilleurs endroits pour nager ou faire du snorkeling avec les tortues, et
                        rechercheront les dauphins avec vous. Tout au long de l'excursion en kayak, vous vous sentirez
                        en sécurité et à l'aise sous la supervision de notre guide.
                    </p>
                    <h4>Les langues que nous parlons</h4>
                    <ul>
                        <li>Français</li>
                        <li>Anglais</li>
                        <li>Espagnol</li>
                        <li>Allemand</li>
                        <li>Polonais</li>
                        <li>Russe</li>
                    </ul>
                    <p>L'excursion en kayak dure 3 heures en tout. D'abord nous vous donnons le briefing, préparons
                        l'équipement et ensuite nous passons 2 heures dans l'eau. Une fois l'excursion terminée, nous
                        essaierons d'organiser immédiatement le transport de retour à votre hôtel. Si ce n'est pas
                        possible, nous vous informerons de l'heure de retour et pendant votre temps libre, vous pourrez
                        vous promener dans les environs. Nous sommes au milieu de la belle zone touristique de Los
                        Cristianos.</p>
                    <h4>Équipement inclus</h4>
                    <p>Pour chaque excursion en kayak, nous vous fournissons tout le kit d'équipement : gilets de
                        sauvetage, bottes, masques et tubas.</p>

                </div>
                <div class="img">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/kayaking-valencia_sem-resort-hero-1302410243.jpg' ); ?>" alt="">
                </div>
            </div>
        </div>

    </div>
    <!-- End about us -->

    <!-- Pricing -->
    <div class="pricing" id="pricing">
        <div class="content">
            <div class="title">
                <h2>Pricing</h2>
            </div>

            <div class="container">

                <!-- half day -->
                <div class="card-body">
                    <div class="card-content">
                        <div class="choice">
                            <h2>Solo</h2>
                        </div>
                        <div class="infos">
                            <div class="info">
                                <div class="info-icon">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/icon/Vector.png' ); ?>" alt="">
                                </div>
                                <div class="info-text">
                                    <p>1 person</p>
                                </div>
                            </div>
                            <div class="info">
                                <div class="info-icon">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/icon/time.png' ); ?>" alt="">
                                </div>
                                <div class="info-text">
                                    <p>3 hour</p>
                                </div>
                            </div>
                            <div class="info">
                                <div class="info-icon">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/icon/pay icon.png' ); ?>" alt="">
                                </div>
                                <div class="info-text">
                                    <p>35&#8364;</p>
                                </div>
                            </div>
                        </div>
                        <div class="booking_btn">
                            <button onclick="openForm()">Book now</button>
                        </div>
                    </div>
                </div>
                <!-- End half day -->

                <!-- duo day -->
                <div class="card-body">
                    <div class="card-content">
                        <div class="choice">
                            <h2>Duo</h2>
                        </div>
                        <div class="infos">
                            <div class="info">
                                <div class="info-icon">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/icon/Vector.png' ); ?>" alt="">
                                </div>
                                <div class="info-text">
                                    <p>2 person</p>
                                </div>
                            </div>
                            <div class="info">
                                <div class="info-icon">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/icon/time.png' ); ?>" alt="">
                                </div>
                                <div class="info-text">
                                    <p>3 hour</p>
                                </div>
                            </div>
                            <div class="info">
                                <div class="info-icon">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/icon/pay icon.png' ); ?>" alt="">
                                </div>
                                <div class="info-text">
                                    <p>45&#8364;</p>
                                </div>
                            </div>
                        </div>
                        <div class="booking_btn">
                            <button onclick="openForm()">Book now</button>
                        </div>
                    </div>
                </div>
                <!-- End duo day -->
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- booking form -->
    <div class="bookingForm" id="bookingForm">
        <div class="container">
            <div class="content">
                <div class="form">
                    <h2>Booking form</h2>
                    <form action="" method="post">
                        <div class="username">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="email">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="dateTime">
                            <input type="date">
                        </div>
                        <div class="phone">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="submitBtn">
                            <button>Check availibility</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end booking form -->

    <!-- our team -->
    <div class="ourteam" id="ourteam">
        <div class="content">
            <div class="title">
                <h2>Our team</h2>
            </div>
            <div class="container">
                <div class="text">
                    <p>At Loro Chulo , our passionate team is dedicated to delivering exceptional kayaking experiences.
                    </p>
                </div>
                <div class="team">
                    <div class="card-body">
                        <div class="card-content">
                            <div class="img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/2744126-3118867453.jpg' ); ?>" alt="">
                            </div>
                            <div class="name">Menber name</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/2744126-3118867453.jpg' ); ?>" alt="">
                            </div>
                            <div class="name">Member name</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/2744126-3118867453.jpg' ); ?>" alt="">
                            </div>
                            <div class="name">Member name</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-content">
                            <div class="img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/2744126-3118867453.jpg' ); ?>" alt="">
                            </div>
                            <div class="name">Member name</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="img">
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/2744126-3118867453.jpg' ); ?>" alt="">
                            </div>
                            <div class="name">Member name</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End our team -->

    <!-- contact us -->
    <div class="contactus" id="contactus">
        <div class="plus"></div>

        <div class="content">
            <div class="container">
                <div class="contact">
                    <h2>Contact us</h2>
                    <div class="links">
                        <div class="link">
                            <div class="icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                            <a href="tel:+34638779700">+34 638 779 700</a>
                        </div>
                        <div class="link">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <a href="">Our location</a>
                        </div>
                        <div class="link">
                            <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                            <a href="mailto:Rashclient@gmail.com">Rashclient@gmail.com</a>
                        </div>
                    </div>
                    <div class="newLetter">
                        <h2>News letter</h2>
                        <div class="emailinput">
                            <form action="" method="post">
                                <input type="email" name="email" placeholder="Your email">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="messageForm">
                    <form action="" method="post">
                        <div class="formBody">
                            <div class="usernameinput">
                                <input type="text" name="firstname" placeholder="First name">
                                <input type="text" name="lastname" placeholder="Last name">
                            </div>
                            <div class="emailinput">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="phone">
                                <input type="text" name="phone" placeholder="Phone number">
                            </div>
                            <div class="message">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="submitBtn">
                                <button>Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End contact us -->

    <!-- footer -->
    <footer>
        <p>
            Loro Chulo@Copyright. All rights are reseverd
        </p>
    </footer>
    <!-- End footer -->
</body>
</html>