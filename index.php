<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header Links -->
    <?php
    include "./Components/head-links.php";
    ?>
    <link rel="stylesheet" href="./Assets/CSS/home.css">
    <title>CODEKART | HOME</title>

    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #c60021;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <?php
    include './Components/Nav.php';
    ?>
    <!-- CAROUSEL PAGE------------------------------------------------------------------------ -->
    <div class="home-slider">
        <div class="owl-carousel owl-theme">
            <div class="slide slide-1">
                <img src="./Assets/Images/banner1.png" alt="">
            </div>
            <div class="slide slide-2">
                <img src="./Assets/Images/banner3.png" alt="">
            </div>
            <div class=" slide slide-3">
                <img src="./Assets/Images/banner3.png" alt="">
            </div>
        </div>
        <div class="frame">
            <img src="./Assets/Images/slider-frame.png" alt="">
        </div>
    </div>
    <!-- OUR MISSON PAGE------------------------------------------------------------------------ -->
    <div class="container1">
        <img class="dot-group" src="./Assets/Images/dott-group.png" alt="">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="box">
                        <div class="icon section-2-icon1"></div>
                        <div class="content">
                            <h4>Our vision</h4>
                            <p>As a software company Codekart’s vision is to distribute the simplicity of technology among all. Our plan is to get the best out of technology and solve the day to day problems of a common person in the simplest way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="box">
                        <div class="icon section-2-icon2"></div>
                        <div class="content">
                            <h4>Our Mission</h4>
                            <p>Our mission is to define the power of technology in a good way to save humanity and connect people all over the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="box">
                        <div class="icon section-2-icon3"></div>
                        <div class="content">
                            <h4>Our value</h4>
                            <p>Codekart always believes on three core values of Bhagavad Gita i.e. Purity, Honesty and Dedication. It is always determined to provide the pure service as well as product which is helpful for the clients to make them unique from others.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- statitics PAGE------------------------------------------------------------------------ -->
    <section id="statistics">
        <div class="container">
            <h1>PROJECT <span style="color: red;">S</span>TATISICS</h1>
            <div class="row circle-group">
                <div class="col-sm-3" align="center">
                    <div class="circledata">
                        <div class="counter" data-target="120">0</div>
                    </div>
                    <div>
                        <p>COMPLETE PROJECT</p>
                    </div>
                </div>
                <div class="col-sm-3" align="center">
                    <div class="circledata">
                        <div class="counter" data-target="95">0</div>
                    </div>
                    <div>
                        <p>HAPPY CLIENTS</p>
                    </div>
                </div>
                <div class="col-sm-3" align="center">
                    <div class="circledata">
                        <div class="counter" data-target="230">0</div>
                    </div>
                    <div>
                        <p>CORPORATE TRANNING</p>
                    </div>
                </div>
                <div class="col-sm-3" align="center">
                    <div class="circledata">
                        <div class="counter" data-target="40">0</div>
                    </div>
                    <div>
                        <p>OUR EMPLOYEE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- SERVICE PAGE------------------------------------------------------------------------ -->
    <div class="service">
        <div class="eclips">
            <img src="./Assets/Images/eclips5.png" alt="">
        </div>
        <h1>OUR <span style="color: red;">S</span>ERVICES</h1>
        <div class="owl-carousel car2 owl-theme service-card-group">
            <a href="./service.php#webDev">
                <div class="service-card">
                    <img src="./Assets/Images/web-dev.png" alt="">
                    <div class="box-content">
                        <h1>WEB<br>DEVELOPEMENT</h1>
                    </div>
                </div>
            </a>
            <a href="./service.php#mobileDev">
                <div class="service-card">
                    <img src="./Assets/Images/mobileDev.png" alt="">
                    <div class="box-content">
                        <h1>MOBILE<br>DEVELOPEMENT</h1>
                    </div>
                </div>
            </a>
            <a href="./service.php#AR">
                <div class="service-card">
                    <img src="./Assets/Images/AR.png" alt="">
                    <div class="box-content">
                        <h1>AUGMENTED<br>REALITY</h1>
                    </div>
                </div>
            </a>
            <a href="./service.php#Testing">
                <div class="service-card">
                    <img src="./Assets/Images/testing.png" alt="">
                    <div class="box-content">
                        <h1>SOFTWARE<br>TESTING</h1>
                    </div>
                </div>
            </a>
            <a href="./service.php#blockChain">
                <div class="service-card">
                    <img src="./Assets/Images/blockchain.png" alt="">
                    <div class="box-content">
                        <h1>BLOCKCHAIN</h1>
                    </div>
                </div>
            </a>
            <a href="./service.php#cyberSecurity">
                <div class="service-card">
                    <img src="./Assets/Images/cyberSec.png" alt="">
                    <div class="box-content">
                        <h1>CYBER<br>SECURITY</h1>
                    </div>
                </div>
            </a>
            <a href="./service.php#resourceOutsource">
                <div class="service-card">
                    <img src="./Assets/Images/outSource.png" alt="">
                    <div class="box-content">
                        <h1>RESOURCE<br>OUTSOURCING</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- PRODUCTION PAGE------------------------------------------------------------------------ -->
    <div class="products">
        <h1>OUR <span style="color: red;">P</span>RODUCTS</h1>
        <div class="owl-carousel car2 owl-theme product-card-group">
            <a href="./products.php#Nirmalya">
                <div class="product-card">
                    <img class="wooden-bg" src="./Assets/Images/wooden.png" alt="">
                    <div class="content">
                        <img src="./Assets/Images/NirmalyaProdLogo.png" alt="">
                    </div>
                </div>
            </a>
            <a href="./products.php#CMS">
                <div class="product-card">
                    <img class="wooden-bg" src="./Assets/Images/wooden.png" alt="">
                    <div class="content">
                        <img src="./Assets/Images/CMSProdLogo.png" alt="">
                    </div>
                </div>
            </a>
            <a href="./products.php#Atharw">
                <div class="product-card">
                    <img class="wooden-bg" src="./Assets/Images/wooden.png" alt="">
                    <div class="content">
                        <img src="./Assets/Images/atharwProdLogo.png" alt="">
                    </div>
                </div>
            </a>
            <a href="./products.php#Ckare">
                <div class="product-card">
                    <img class="wooden-bg" src="./Assets/Images/wooden.png" alt="">
                    <div class="content">
                        <img src="./Assets/Images/ckareProdLogo.png" alt="">
                    </div>
                </div>
            </a>
            <a href="./products.php#Stand4all">
                <div class="product-card">
                    <img class="wooden-bg" src="./Assets/Images/wooden.png" alt="">
                    <div class="content">
                        <img src="./Assets/Images/stand4allProdLogo.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- ASSOCIATE PAGE------------------------------------------------------------------------ -->
    <div class="associate-partners">
        <h1 class="ass-partner">OUR ASSOCIATE PARTNER'S</h1>
        <div class="partner-group owl-carousel partners owl-theme">
            <div class="associate">
                <img src="./Assets/Images/partners/Aarka.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Oracle.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/BiteNinja.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Sysway.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/DXC_Technology.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Inergio.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Modulator.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/QSET.png" alt="">
            </div>
        </div>
        <div class="partner-group owl-carousel partners owl-theme">
            <div class="associate">
                <img src="./Assets/Images/partners/Hungrytin.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Solarix.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Solution_mediatech.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/starlly-solutions.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Synverse.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/Winjit.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/palpx.png" alt="">
            </div>
            <div class="associate">
                <img src="./Assets/Images/partners/gel.png" alt="">
            </div>
        </div>
    </div>

    <!-- CLENT PAGE------------------------------------------------------------------------ -->
    <div class="client">
        <h1>OUR <span style="color: red;">H</span>APPY CLIENTS</h1>
        <div class="owl-carousel car5 owl-theme">
            <!-- QUOTATION  ===================================================-->
            <div class="container4">
                <div class="box">
                    <div class="quoteimg">
                    </div>
                    <div class="para">
                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, modi reprehenderit provident
                            qui ut, eius id est dolorum odit alias ipsam saepe facilis eaque molestiae ipsa
                            voluptas.I adipisicing elit. Beatae, quaerat.</q>
                    </div>
                    <!-- PROFILE  --------------------------------------------------->
                    <div class="profile row d-flex">
                        <div class="col-sm-3 circle">
                            <img src="./Assets/Images/user.png" alt="">
                        </div>
                        <div class="col-sm-9 details">
                            <h5>John Doe</h5>
                            <h6>Business Person</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="box">
                    <div class="quoteimg">
                    </div>
                    <div class="para">
                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, modi reprehenderit provident
                            qui ut, eius id est dolorum odit alias ipsam saepe facilis eaque molestiae ipsa
                            voluptas.I adipisicing elit. Beatae, quaerat.</q>
                    </div>
                    <!-- PROFILE  --------------------------------------------------->
                    <div class="profile row d-flex">
                        <div class="col-sm-3 circle">
                            <img src="./Assets/Images/user.png" alt="">
                        </div>
                        <div class="col-sm-9 details">
                            <h5>John Doe</h5>
                            <h6>Business Person</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="box">
                    <div class="quoteimg">
                    </div>
                    <div class="para">
                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, modi reprehenderit provident
                            qui ut, eius id est dolorum odit alias ipsam saepe facilis eaque molestiae ipsa
                            voluptas.I adipisicing elit. Beatae, quaerat.</q>
                    </div>
                    <!-- PROFILE  --------------------------------------------------->
                    <div class="profile row d-flex">
                        <div class="col-sm-3 circle">
                            <img src="./Assets/Images/user.png" alt="">
                        </div>
                        <div class="col-sm-9 details">
                            <h5>John Doe</h5>
                            <h6>Business Person</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="box">
                    <div class="quoteimg">
                    </div>
                    <div class="para">
                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, modi reprehenderit provident
                            qui ut, eius id est dolorum odit alias ipsam saepe facilis eaque molestiae ipsa
                            voluptas.I adipisicing elit. Beatae, quaerat.</q>
                    </div>
                    <!-- PROFILE  --------------------------------------------------->
                    <div class="profile row d-flex">
                        <div class="col-sm-3 circle">
                            <img src="./Assets/Images/user.png" alt="">
                        </div>
                        <div class="col-sm-9 details">
                            <h5>John Doe</h5>
                            <h6>Business Person</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="box">
                    <div class="quoteimg">
                    </div>
                    <div class="para">
                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, modi reprehenderit provident
                            qui ut, eius id est dolorum odit alias ipsam saepe facilis eaque molestiae ipsa
                            voluptas.I adipisicing elit. Beatae, quaerat.</q>
                    </div>
                    <!-- PROFILE  --------------------------------------------------->
                    <div class="profile row d-flex">
                        <div class="col-sm-3 circle">
                            <img src="./Assets/Images/user.png" alt="">
                        </div>
                        <div class="col-sm-9 details">
                            <h5>John Doe</h5>
                            <h6>Business Person</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="box">
                    <div class="quoteimg">
                    </div>
                    <div class="para">
                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, modi reprehenderit provident
                            qui ut, eius id est dolorum odit alias ipsam saepe facilis eaque molestiae ipsa
                            voluptas.I adipisicing elit. Beatae, quaerat.</q>
                    </div>
                    <!-- PROFILE  --------------------------------------------------->
                    <div class="profile row d-flex">
                        <div class="col-sm-3 circle">
                            <img src="./Assets/Images/user.png" alt="">
                        </div>
                        <div class="col-sm-9 details">
                            <h5>John Doe</h5>
                            <h6>Business Person</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" style="text-align: center;">
            <button type="button" class="review-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Write a Review</button>
            <div style="text-align: left;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add a Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" method="post" action="./dbProcess/reviewProcess.php" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">FullName</label>
                                    <input type="text" name="fname" class="form-control" id="inputPassword4" minlength="3" pattern="[A-Za-z]{3,30}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Who you are?</label>
                                    <select name="whoYou" id="inputState" class="form-select">
                                        <option value="BuisnessMan" selected>Buisness Man</option>
                                        <option value="OurClient">Our Client</option>
                                        <option value="Student">Student</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="inputPassword4">
                                </div> -->
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Your Review</label>
                                    <textarea class="form-control" name="review" placeholder="Message" id="message" name="message" required minlength="15" rows="3"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="reviewBtn" class="btn review-btn">Submit</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Dynamic footer -->
    <?php
    include './Components/footer.php'
    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./Assets/JS/jquery.min.js"></script>
    <script src="./Assets/JS/owl.carousel.min.js"></script>
    <!-- carousel PAGE -->
    <script>
        $(document).ready(function() {

            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 1000,
                smartSpeed: 1500,
                autoplayHoverSpeed: true
            })
        });
    </script>
    <!-- carousel animation -->
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml12');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml12 .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1200,
                delay: (el, i) => 500 + 30 * i
            }).add({
                targets: '.ml12 .letter',
                translateX: [0, -30],
                opacity: [1, 0],
                easing: "easeInExpo",
                duration: 1100,
                delay: (el, i) => 100 + 30 * i
            });

        var textWrapper = document.querySelector('.ml13');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml13 .letter',
                translateY: [100, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1400,
                delay: (el, i) => 300 + 30 * i
            }).add({
                targets: '.ml13 .letter',
                translateY: [0, -100],
                opacity: [1, 0],
                easing: "easeInExpo",
                duration: 1200,
                delay: (el, i) => 100 + 30 * i
            });

        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml6 .letter',
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i
            }).add({
                targets: '.ml6',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 3500
            });

        var textWrapper = document.querySelector('.ml9 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml9 .letter',
                scale: [0, 1],
                duration: 1500,
                elasticity: 600,
                delay: (el, i) => 45 * (i + 1)
            }).add({
                targets: '.ml9',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 4500
            });
    </script>
    <!-- counter page -->
    <script>
        const counters = document.querySelectorAll('.counter');
        // Main function
        for (let n of counters) {
            const updateCount = () => {
                const target = +n.getAttribute('data-target');
                const count = +n.innerText;
                const speed = 15000; // change animation speed here
                const inc = target / speed;
                if (count < target) {
                    n.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    n.innerText = target;
                }
            }
            updateCount();
        }
    </script>
    <!-- service slider -->
    <script>
        $('.car2').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: false,
            stagePadding: 100,
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                    stagePadding: 40,
                    dots: false,
                },
                600: {
                    items: 2,
                    margin: 20,
                    stagePadding: 50,
                    dots: false,
                },
                1000: {
                    items: 2,
                    margin: 20,
                    stagePadding: 50,
                    dots: false,
                },
                1200: {
                    items: 4,
                }
            }
        })
        $('.partners').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: false,
            autoplay: true,
            stagePadding: 100,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 30,
                    stagePadding: 40,
                    dots: false,
                },
                600: {
                    items: 3,
                    margin: 20,
                    stagePadding: 50,
                    dots: false,
                },
                1000: {
                    items: 4,
                    margin: 20,
                    stagePadding: 50,
                    dots: false,
                },
                1200: {
                    items: 6,
                }
            }
        })
    </script>

    <!-- client slider ----------------------------------------->
    <script>
        $('.car5').owlCarousel({
            loop: true,
            margin: 30,
            dots: true,
            nav: false,
            autoplay: true,
            stagePadding: 100,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                    stagePadding: 40,
                    dots: false,
                },
                600: {
                    items: 3,
                    margin: 20,
                    stagePadding: 50,
                    dots: false,
                },
                1000: {
                    items: 3,
                    margin: 20,
                    stagePadding: 50,
                    dots: false,
                },
                1200: {
                    items: 3,
                }
            }


        })
    </script>
</body>

</html>