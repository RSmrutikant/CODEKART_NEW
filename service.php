<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CODEKART | SERVICES</title>
  <link rel="icon" href="./Assets/Images/ICON.png" type="image/icon type">
  <link rel="stylesheet" href="./Assets/CSS/service.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./Assets/CSS/Style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
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
  </style>
</head>

<body>
  <?php
  include './Components/Nav.php';
  ?>

  <main style="margin-top: 5%">
    <!-- Section1 -->
    <section>
      <div class="section1Service">
        <h2>OUR SERVICES</h2>
      </div>
    </section>
    <div id="webDev"></div>
    <div class="scrollview">
      <!-- Section2 -->
      <section class="section2Services">
        <div class="container mainCard">
          <div class="row colRev">
            <div class="col-md-8">
              <h3>Web Developement</h3>
              <p>
                Web development refers in general to the tasks associated with developing websites for hosting via intranet or internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks. In a broader sense, web development encompasses all the actions, updates, and operations required to build, maintain and manage a website to ensure its performance, user experience, and speed are optimal.
              </p>
            </div>
            <div class="col-md-4">
              <img src="./Assets/Images/webdev.png" alt="" class="rightImg" />
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <h4>Technologies we’re using:</h4>
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="./Assets/Images/services/web/HTML.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/CSS.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/JAVASCRIPT.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/REACT.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/EXPRESS'.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/NODE.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/MONGO.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/ANGULAR.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/PHP.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/WORDPRESS.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/MYSQL.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/AWS.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/FIREBASE.png" alt="" />
              </div>
            </div>

            <button id="mobileDev" style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section3 -->
      <section>
        <div class="container mainCard">
          <div class="row">
            <div class="col-md-4">
              <img src="./Assets/Images/mobileDev.png" alt="" class="leftImg" />
            </div>
            <div class="col-md-8">
              <h3>Mobile Developement</h3>
              <p>
                Mobile application development is the set of processes and procedures involved in writing software for small, wireless computing devices, such as smartphones and other hand-held devices. Like web application development, mobile application development has its roots in more traditional software development. One critical difference, however, is that mobile apps are often written specifically to take advantage of the unique features of a particular mobile device.
              </p>
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <h4>Technologies we’re using:</h4>
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="./Assets/Images/services/mobile/REACT NATIVE.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/ANDROID.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/FLUTTER.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/KOTLIN.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/XAMARIN.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/IONIC.png" alt="" />
              </div>
            </div>

            <button id="AR" style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section4 -->
      <section>
        <div class="container mainCard">
          <div class="row colRev">
            <div class="col-md-8">
              <h3>Augmented Reality</h3>
              <p>
                Augmented reality (AR) is the real-time use of information in the form of text, graphics, audio and other virtual enhancements integrated with real-world objects. It is this “real world” element that differentiates AR from virtual reality. AR integrates and adds value to the user’s interaction with the real world, versus a simulation.Augmented reality (AR) is the real-time use of information in the form of text, graphics, audio and other virtual enhancements integrated with real-world objects. It is this “real world” element that differentiates AR from virtual reality. AR integrates and adds value to the user’s interaction with the real world, versus a simulation.
              </p>
            </div>
            <div class="col-md-4">
              <img src="./Assets/Images/augSec.png" alt="" class="rightImg" />
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <h4>Technologies we’re using:</h4>
            <div class="owl-carousel owl-theme">

              <div class="item">
                <img src="./Assets/Images/services/AR/VUFORIA.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/AR/ARcore.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/AR/ARkit.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/AR/WIKITUDE.png" alt="" />
              </div>
            </div>

            <button id="Testing" style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section 5 -->
      <section>
        <div class="container mainCard">
          <div class="row">
            <div class="col-md-4">
              <img src="./Assets/Images/sofTestingSec.png" alt="" class="leftImg" />
            </div>
            <div class="col-md-8">
              <h3>Software Testing</h3>
              <p>
                Software testing is a process, to evaluate the functionality of a software application with an intent to find whether the developed software met the specified requirements or not and to identify the defects to ensure that the product is defect-free in order to produce a quality product.
              </p>
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <!-- <h4>Technologies we’re using:</h4> -->
            <!-- <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
            </div> -->

            <button id="blockChain" style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section 6 -->
      <section>
        <div class="container mainCard">
          <div class="row colRev">
            <div class="col-md-8">
              <h3>Blockchain</h3>
              <p>
                A blockchain is a distributed database that is shared among the nodes of a computer network. As a database, a blockchain stores information electronically in digital format. Blockchains are best known for their crucial role in cryptocurrency systems, such as Bitcoin, for maintaining a secure and decentralized record of transactions. The innovation with a blockchain is that it guarantees the fidelity and security of a record of data and generates trust without the need for a trusted third party.
              </p>
            </div>
            <div class="col-md-4">
              <img src="./Assets/Images/blockChainImg.png" alt="" class="rightImg" />
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <!-- <h4>Technologies we’re using:</h4> -->
            <!-- <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
            </div> -->

            <button id="cyberSecurity" style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section 7 -->
      <section>
        <div class="container mainCard">
          <div class="row">
            <div class="col-md-4">
              <img src="./Assets/Images/cyberSecImg.png" alt="" class="leftImg" />
            </div>
            <div class="col-md-8">
              <h3>Cyber Security</h3>
              <p>
                Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. These cyberattacks are usually aimed at assessing, changing, or destroying sensitive information; extorting money from users; or interrupting normal business processes. Implementing effective cybersecurity measures is particularly challenging today because there are more devices than people, and attackers are becoming more innovative.
              </p>
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <!-- <h4>Technologies we’re using:</h4> -->
            <!-- <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/carousel1.png" alt="" />
              </div>
            </div> -->

            <button id="resourceOutsource" style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section 8 -->
      <section>
        <div class="container mainCard">
          <div class="row colRev">
            <div class="col-md-8">
              <h3>Resource Outsourcing</h3>
              <p>
                Resource Outsourcing is a practice in which an organization hires a third-party organisation to handle its human resources activities. In other words, HR outsourcing is the process of receiving work previously completed by corporate personnel from sources outside the company.
              </p>
            </div>
            <div class="col-md-4">
              <img src="./Assets/Images/resourceOutImg.png" alt="" class="rightImg" />
            </div>
          </div>
          <div class="technologyWeAreUsing">
            <h4>Technologies we’re using:</h4>
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="./Assets/Images/services/web/ANGULAR.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/REACT.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/NODE.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/MONGO.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/FIREBASE.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/ANDROID.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/FLUTTER.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/XAMARIN.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/mobile/REACT NATIVE.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/PHP.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/WORDPRESS.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services//web/EXPRESS'.png" alt="" />
              </div>
              <div class="item">
                <img src="./Assets/Images/services/web/MYSQL.png" alt="" />
              </div>
            </div>

            <button style="visibility: hidden;">ASK FOR QUOTATION</button>
          </div>
        </div>
      </section>

      <!-- Section 9 -->
      <div class="section9 container">
        <div class="top">
          <h1 class="Heading">PRICING</h1>
          <div class="toggle-btn">
            <!-- <span style="margin: 0.8em;">Annually</span> -->
            <label class="switch">
              <input type="checkbox" id="checbox" onclick="check()" ; />
              <span class="slider round"></span>
            </label>
            <!-- <span style="margin: 0.8em;">Monthly</span> -->
          </div>
        </div>

        <div class="package-container">
          <div class="packages">
            <div class="head">
              <h1>Basic</h1>
              <h4>Small size Business</h4>
              <h2 class="text1"><span style="font-size: 0.2em;">₹</span>6.9<span style="font-size: 0.2em;">lacks*</span></h2>
              <h2 class="text2"><span style="font-size: 0.2em;">₹</span>5.9<span style="font-size: 0.2em;">lacks*</span></h2>
            </div>
            <ul class="list">
              <li class="first">2000 Subscribers</li>
              <li>12,000 Emails/month</li>
              <li>Multi-User Accounts</li>
              <li>Email Support</li>
            </ul>
            <a href="./contact.php" class="button button1">SEND REQUIREMENTS</a>
          </div>
          <div class="packages">
            <div class="head">
              <h1>Pluss</h1>
              <h4>Medium size Business</h4>
              <h2 class="text1"><span style="font-size: 0.2em;">₹</span>13.9<span style="font-size: 0.2em;">lacks*</span></h2>
              <h2 class="text2"><span style="font-size: 0.2em;">₹</span>10.9<span style="font-size: 0.2em;">lacks*</span></h2>
            </div>
            <ul class="list">
              <li class="first">Basic +</li>
              <li>Landing Pages</li>
              <li>Pop-up Forms</li>
              <li>Premium Support</li>
            </ul>
            <a href="./contact.php" class="button button2">SEND REQUIREMENTS</a>
          </div>
          <div class="packages">
            <div class="head">
              <h1>Premium</h1>
              <h4>Large size Business</h4>
              <h2 class="text1"><span style="font-size: 0.2em;">₹</span>24.9<span style="font-size: 0.2em;">lacks*</span></h2>
              <h2 class="text2"><span style="font-size: 0.2em;">₹</span>18.9<span style="font-size: 0.2em;">lacks*</span></h2>
            </div>
            <ul class="list">
              <li class="first">Professional +</li>
              <li>Marketing Automation</li>
              <li>Instagram Ads</li>
              <li>Facebook Ads</li>
            </ul>
            <a href="./contact.php" class="button button3">SEND REQUIREMENTS</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Dynamic footer -->
  <?php
  include './Components/footer.php'
  ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./Assets/JS/main.js"></script>

</html>