<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Assets/CSS/Style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <title>CODEKART | PRODUCTS</title>
    <link rel="icon" href="./Assets/Images/ICON.png" type="image/icon type">
    < <style>
        ::-webkit-scrollbar {
        width: 12px;
        }

        ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #c60021;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Righteous";
        }

        .product-desc .product-head {
        margin-block: 1em;
        }

        .product-desc .product-cont {
        text-indent: 1em;
        text-align: justify;
        letter-spacing: 1px;
        word-spacing: 5px;
        }

        .product-desc .explore-prod a {
        margin-top: 2em;
        justify-content: right;
        display: flex;
        }

        .product-desc .explore-prod a {
        color: #C60021;
        text-decoration: none;
        }

        .product-img>img {
        width: 100%;
        }

        @media screen and (max-width: 990px) {

        .product-img>img {
        margin-top: 15px;
        }

        .product-body {
        margin-top: 32vh;
        }
        }

        .Product-bar {
        background: url(./Assets/Images/product-bar.png);
        color: white;
        width: 100%;
        position: fixed;
        top: 80px;
        left: 0;
        z-index: -1;
        }

        .Product-bar h2 {
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: white;
        color: transparent;
        font-size: 60px;
        text-align: center;
        padding: 40px;
        }

        .product-body {
        margin-top: 30vh;
        background-color: #fff;
        }
        </style>
</head>

<body>
    <?php
    include './Components/Nav.php';
    ?>
    <section>
        <div class="Product-bar">
            <h2>OUR PRODUCTS</h2>
        </div>
    </section>
    <main class="product-body">
        <div class="" style="background-color: #FFFCFA;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">NIRMALYA</h1>
                        <p class="product-cont">This is our one way of providing puja products. We primarily focus on online priests and provide puja products. India is a country full of festive seasons, different religions and we help every individual by providing puja products. We develop an android app for the availability of online puja products. You might have seen a very rare number of companies who develop an app for puja products.
                        </p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/nirmalya-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- section-2 -->
        <div class="" style="background-color: #DBFAE9;">
            <div class="container">
                <div class="row flex-md-row">
                    <div class=" col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/cms-banner.png" alt="">
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">CMS - <span style="font-size: 25px;">Employee management system</span></h1>
                        <p class="product-cont">CMS(Codekart Management System) is an internal project of Codekart. It is a complete Employee Management related project. Here we have 3 panels i.e. employee panel(team member,project lead,team lead), HR panel(different types of HR) and management panel(managers,CTO,COO, management team),Admin panel... Here some good features like to-do tracker by employee to their corresponding lead, employee progress report in the form of graphical presentation, time tracker for employee working time, leave management by hr, hiring employee intern offer letter generation dynamically, organizational structure for all employee so that they can track leads, etc. available. </p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section 3 -->
        <div class="" style="background-color: #FFFCFA;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class=" col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">ATHARW</h1>
                        <p class="product-cont">Atharw is one of the initiatives of CodeKart. It is the edu-tech platform for providing the finest education based upon both technical as well as non-technical domains. The name Atharw has come from one of our Veda i.e. Atharva Veda in which the procedures of day to day life is clearly mentioned. The core values of Atharw has come from Bhagavad Gita i.e. 'Purity', 'Honesty' & 'Dedication'. Being the members of Atharw, we are proud to follow our core values which always motivate us to spread purity through our contents, honestly treat our students and give our 100% dedication which will reflect on our student's career. When students are going to take any of the courses from any platform one thing comes to their mind is whether that course or training is helpful for their career or not and can they get good opportunities to achieve their goal. In the teenage years or after graduation the state of mind of the students is always variable. They can not decide which career path they have to choose and which path gives them satisfaction. As a result they join any field and after some years they get frustrated. In Atharw we don't tell students to join this training, it will make your career good or choose that training that will give you a high package. We first keep ourselves in their place, try to understand their area of interest, their dedication level and their aim of life and then we show them the possibilities and path to get their ultimate goal. In the initial days we have started from varieties of technical training which can make the students industry ready as per the current scenario. Very soon we are going to help students of non-technical background who are preparing for non-technical jobs, students of schools and colleges. Our main motto is to provide quality education with the help of technology because we believe that "Technology with education is for everyone"</p>
                        <div class="explore-prod">
                            <a href="https://www.atharw.com/" target="_blank">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/atharw-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- section-4 -->
        <div class="" style="background-color: #DBFAE9;">
            <div class="container">
                <div class="row flex-md-row">
                    <div class=" col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/ckare-banner.png" alt="">
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">C-KARE</h1>
                        <p class="product-cont">After working some POCs in Education and IT sector now we are going to start working one of our new product "CKare". This product is based on Healthcare domain and through this product we are trying to solve all the day to day problems that a normal person is facing in hospitals. We are going to make the whole process digitization. In this product we are using all the latest technologies like MERN Stack, AI/ML for analytics and Blockchain for Security. We hope the the 1st version of CKare will come to market by mid of April, 2022</p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section 5 -->
        <div class="" style="background-color: #FFFCFA;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class=" col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">Stand4All</h1>
                        <p class="product-cont">Everyday many people are facing so many difficulties and searching for help, but are not able to get help in time. Many poor people are there who are purely dependent upon the Government to get their problems solved. But every time Govt. is not able to reach them in time. In that particular time some NGOs or other communities are coming forward and trying to help those helpless people. Those NGOs always want to help people as much as they can, but sometimes they are not also able to reach the poor peoples. To decrease the distance between NGOs or other organizations and the needy people Stand4all is providing them a platform. By using this platform all the NGOs and other organizations who really want to help people can register themselves and share their profiles. Also all the poor as well as needy people can register themselves in this platform and can directly seek help as per their requirement. As Stand4all is the platform only made to help the people who will ask for help, it is not taking any monetary benefit from any parties like organizations or the helpless peoples.
                        </p>
                        <div class="explore-prod">
                            <a href="http://stand4all.org/" target="_blank">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/STAND4ALL-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- section-6 -->
        <!-- <div class="" style="background-color: #DBFAE9;">
            <div class="container">
                <div class="row flex-md-row">
                    <div class=" col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/ckare-banner.png" alt="">
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">OTT</h1>
                        <p class="product-cont">OTT stands for Over-the-top platform. It refers to a method of sending content whether it is
                            audio, video, etc. over a high-speed Internet connection. Instead of sharing it in the old-fashioned
                            way via broadcasters and cable operators.
                            Mostly the content delivered over OTT is video content like movies and TV serials or daily soaps.
                            Also, music can be directly streamed to a consumer’s smartphone, laptop, or smart speakers over
                            the internet via music OTT platforms.
                            An over-the-top (OTT) media service is a media service offered directly to viewers via
                            the Internet. OTT bypasses cable, broadcast, and satellite television platforms, the types of
                            companies that traditionally act as controllers or distributors of such content. It has also been
                            used to describe no-carrier cellphones, where all communications are charged as data,
                            avoiding monopolistic competition, or apps for phones that transmit data in this manner,
                            including both those that replace other call methods and those that update software.
                            The term is most synonymous with subscription-based video-on-demand (SVoD) services that
                            offer access to film and television content (including existing series acquired from other
                            producers, as well as original content produced specifically for the service.
                            Over-the-top services are typically accessed via websites on personal computers, as well as
                            via apps on mobile devices (such as smartphones and tablets), digital media
                            players (including video game consoles), or televisions with integrated Smart TV platforms.</p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- section 7 -->
        <!-- <div class="" style="background-color: #FFFCFA;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class=" col-sm-5 col-md-6 col-lg-5 product-desc align-items-center">
                        <h1 class="product-head">Template Generator</h1>
                        <p class="product-cont">Everyday many people are facing so many difficulties and searching for help, but are not able to get help in time. Many poor people are there who are purely dependent upon the Government to get their problems solved. But every time Govt. is not able to reach them in time. In that particular time some NGOs or other communities are coming forward and trying to help those helpless people. Those NGOs always want to help people as much as they can, but sometimes they are not also able to reach the poor peoples. To decrease the distance between NGOs or other organizations and the needy people Stand4all is providing them a platform. By using this platform all the NGOs and other organizations who really want to help people can register themselves and share their profiles. Also all the poor as well as needy people can register themselves in this platform and can directly seek help as per their requirement. As Stand4all is the platform only made to help the people who will ask for help, it is not taking any monetary benefit from any parties like organizations or the helpless peoples.
                        </p>
                        <div class="explore-prod">
                            <a href="#?" onclick="alert('We have not added any link. Please Visit Later! [THANK YOU]')">
                                <h4>Explore Us <i class='fa fa-arrow-right'></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-7 product-img">
                        <img src="./Assets/Images/STAND4ALL-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div> -->
    </main>

    <!-- Dynamic footer -->
    <?php
    include './Components/footer.php'
    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>