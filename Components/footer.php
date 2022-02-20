<style>
  footer {
    background-color: #111111;

    height: auto;
    width: 100%;
  }

  .footer {
    position: relative;
  }

  .red_circle {
    position: absolute;
    top: 0px;
    right: 0px;
  }

  .footer .circle {
    position: absolute;
    top: 0px;
    left: 0px;
  }

  .grey_circle {
    position: absolute;
    top: 150px;
    right: 70px;
    animation: float 3s infinite;
  }

  @keyframes float {
    0% {
      transform: translateY(-10px);
    }

    50% {
      transform: translateY(0);
    }

    100% {
      transform: translateY(-10px);
    }
  }



  .footer-container {
    padding-top: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 0;
  }

  .footer-container .box {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 50px;
    flex-wrap: wrap;
  }

  .footer-container .box .box1 {
    margin-right: 100px;
  }

  .footer-container .box .box1 .sub_box {
    align-items: center;
    display: flex;
    flex-direction: row;
    margin-bottom: 15px;
  }

  .box .box1 .sub_box .green_box {
    height: 35px;
    width: 35px;
    border-radius: 5px;
    background-color: #e5ffaf;
    margin-right: 10px;
  }

  .box .box1 .sub_box .orange_box {
    background-color: #ffab5d;
    height: 35px;
    width: 35px;
    border-radius: 5px;
    margin-right: 10px;
  }

  .box .box1 .sub_box .pink_box {
    background-color: #ff889c;
    height: 35px;
    width: 35px;
    border-radius: 5px;
    margin-right: 10px;
  }

  .box .box1 .heading {
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    color: #ffffff;
  }

  .box .box1 .description {
    font-weight: 400;
    font-size: 10px;
    line-height: 12px;
    color: #bababa;
  }

  .red_box {
    margin-top: 4%;
    width: 80%;
    background: #c60021;
    box-shadow: -15px -15px 0px #63636340;
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 3% 0 3%;
  }

  .ready {
    color: #ffffff;
  }

  .lets {
    font-size: 15px;

    color: #000000;
  }

  .red_box .btn {
    background-color: #000000 !important;
    height: 48px;
    width: 20%;
  }

  .address {
    font-family: Righteous;
    font-style: normal;
    font-weight: normal;
    font-size: 10px;
    line-height: 12px;
    letter-spacing: 0.1em;

    color: #ffffff;
  }

  .address>span {
    color: #c60021;
    font-size: 15px;

  }

  .footer_list h5 {
    font-family: Righteous;
    font-style: normal;
    font-weight: normal;
    font-size: 17.2391px;
    line-height: 21px;
    /* identical to box height */

    letter-spacing: 0.1em;

    color: #ffffff;
  }

  .footer_list ul {
    padding: 1rem;
  }

  .footer_list ul li {
    font-family: Righteous;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 2rem;
    letter-spacing: 0.1em;

    color: #c5c5c5;
  }

  .footer-container .box2 {
    margin-top: 3%;
    padding-top: 3%;
    border-top: 3px solid red;
    border-image: radial-gradient(rgba(199, 199, 199, 1), rgba(0, 0, 0, 0)) 1;
  }

  .footer .copy {
    background: #303030;
    width: 100%;
    position: absolute;
    bottom: 0px;
  }

  .copyright {
    font-size: 14px;
    letter-spacing: 0.1em;
    text-align: center;
    color: rgba(255, 255, 255, 0.5);
    margin: 1rem;
  }

  .footer_list>ul>li {
    position: relative;
  }

  .footer_list ul li:before {
    content: "";
    position: absolute;
    top: 12px;
    left: -10px;
    display: inline-block;
    height: 10px;
    width: 10px;
    background-size: contain;
    background-image: url("./Asset/image/dimond.png");
  }

  .sos {
    color: #ffffff;
    padding: 10px;
    font-size: 14px;
    height: 35px;
    width: 35px;
    border-radius: 100%;
    text-align: center;
  }

  .sos:hover {
    background-color: #87c700;
    padding: 10px;
    color: #ffffff;
    border-radius: 100px;
  }

  @media only screen and (max-width: 260px) {}

  @media (min-width: 270px) and (max-width: 330px) {
    .red_circle {
      width: 25%;
    }

    .footer .circle {
      width: 35%;
    }

    .red_box {
      width: 80%;
    }

    .ready {
      font-size: 16px;
    }

    .red_box .btn {
      height: 30px;
      width: 40%;
      font-size: 8px !important;
    }

    .footer-container .box2 {
      margin-top: 7%;
    }

    .grey_circle {
      width: 40%;
    }
  }

  @media (min-width: 330px) and (max-width: 380px) {
    .red_circle {
      width: 25%;
    }

    .circle {
      width: 35%;
    }

    .red_box {
      width: 80%;
    }

    .ready {
      font-size: 16px;
    }

    .red_box .btn {
      height: 30px;
      width: 40%;
      font-size: 8px !important;
    }

    .footer-container .box2 {
      margin-top: 7%;
    }

    .grey_circle {
      width: 40%;
    }
  }

  @media (min-width: 380px) and (max-width: 467px) {
    .red_circle {
      width: 20%;
    }

    .footer .circle {
      width: 20%;
    }

    .red_box {
      width: 80%;
    }

    .ready {
      font-size: 16px;
    }

    .red_box .btn {
      height: 30px;
      width: 40%;
      font-size: 8px !important;
    }

    .footer-container .box2 {
      margin-top: 7%;
    }

    .grey_circle {
      width: 40%;
    }
  }

  @media (min-width: 467px) and (max-width: 600px) {
    .red_circle {
      width: 30%;
    }

    .footer .circle {
      width: 30%;
    }

    .red_box {
      width: 80%;
    }

    .ready {
      font-size: 16px;
    }

    .red_box .btn {
      height: 30px;
      width: 40%;
      font-size: 8px !important;
    }

    .footer-container .box2 {
      margin-top: 7%;
    }
  }

  @media (min-width: 768px) and (max-width: 992px) {
    .red_circle {
      width: 30%;
    }

    .footer .circle {
      width: 30%;
    }

    .red_box {
      width: 80%;
    }

    .ready {
      font-size: 16px;
    }

    .red_box .btn {
      height: 30px;
      width: 30%;
      font-size: 12px !important;
    }

    .footer-container .box2 {
      margin-top: 7%;
    }
  }

  @media (min-width: 993px) and (max-width: 1080px) {
    .red_circle {
      width: 20%;
    }

    .footer .circle {
      width: 30%;
    }

    .red_box {
      width: 80%;
    }

    .ready {
      font-size: 16px;
    }

    .red_box .btn {
      height: 30px;
      width: 25%;
      font-size: 12px !important;
    }

    .footer-container .box2 {
      margin-top: 7%;
    }

    /* .grey_circle{
    width: 18%;
  } */
    .logo {
      width: 90%;
    }
  }
</style>

<footer>
  <div class="footer">
    <img class="circle" src="./Assets/Images/footer_circle.png">
    <img class="grey_circle" src="./Assets/Images/footer_circle_grey.png">
    <img class="red_circle" src="./Assets/Images/footer_circle_red.png">
    <div class="footer-container container">
      <div style="width: 100%;">
        <h1 style="color: #ffffff;position: relative;z-index: 5;">The values that hold us true<br>
          <span style="color: #87C700;">to our customer’s.</span>
        </h1>
      </div>
      <div class="box">
        <div class="col-lg-4">
          <div class="box1">
            <div class="sub_box">
              <div class="green_box"></div>
              <h5 class="heading">Purity</h5>
            </div>
            <p class="description">Purity reverses our mental gravity. Purity of mind is the condition of Sattva, i.e., the state of the internal organ being untouched by Rajas and Tamas.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box1">
            <div class="sub_box">
              <div class="orange_box"></div>
              <h5 class="heading">Honesty</h5>
            </div>
            <p class="description">Being honest is the foremost quality of especially those treading on the path of spiritualism. In non-religious context honesty is a much desirable virtue. Honesty is one of the main ingredients of what constitutes knowledge.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box1">
            <div class="sub_box">
              <div class="pink_box"></div>
              <h5 class="heading">Dedication</h5>
            </div>
            <p class="description">The Gita teaches perseverance in the face of impending threats. It calls upon us to dedicate our mind, body, and soul to pure duty and rewrite destiny.
            </p>
          </div>
        </div>
      </div>
      <div class="red_box">
        <div style="margin-top:10px">
          <h5 class="ready">Ready for your next Project ?</h5>
          <p class="lets">Let’s get started.</p>
        </div>
        <button class="btn btn-dark"><a href="./contact.php" target="_blank" style="color: #fff; text-decoration: none; ">Contact Us</a></button>
      </div>

      <div class="col-lg-12 col-sm-12 box2">
        <div class="row">
          <div class="col-lg-2 col-sm-12">
            <img class="logo" src="./Assets/Images/logo.png">
            <br><br>
          </div>

          <div class="col-lg-2 col-sm-12">
            <div>
              <p class="address"><span style="color: #C60021;">Registered Office: </span><br>
                Plot No 504/2382/2701, First Floor, Phase-II, Kanan Vihar, Patia, Bhubaneswar, Odisha 751024</p>

              <p class="address"><span style="color: #C60021;">Corporate Office-1: </span><br>
                <a style="color: #fff; text-decoration: none" href="https://goo.gl/maps/oNRWcrd3e3eEqCJDA" target="_blank">Plot No: HIG-414, K-5, [Bhubaneswar Office], Kalinga Vihar LIG, Kalinganagar, Bhubaneswar, Odisha 751019</a>
              </p>

              <p class="address"><span style="color: #C60021;">Corporate Office-2: </span><br>
                MBR Signity, JP Nagar, 8th Phase, Bengaluru, Karnataka, 560076</p>
            </div>



          </div>

          <div class="col-lg-2 col-sm-12">
            <div class="footer_list">
              <h5>QUICK LINKS</h5>
              <ul>
                <li><a style="color: #c5c5c5; text-decoration: none;" href="./service.php#pricing">Pricing</a></li>
                <!-- <li><a style="color: #c5c5c5; text-decoration: none;" href="./career.php">Careers</a></li> -->
                <li><a style="color: #c5c5c5; text-decoration: none;" href="./team.php">Teams</a></li>
                <li><a style="color: #c5c5c5; text-decoration: none;" href="./service.php">Services</a></li>
                <li><a style="color: #c5c5c5; text-decoration: none;" href="./products.php">Products</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12">
            <div class="footer_list">
              <h5>CONNECT</h5>
              <ul>
                <li><a style="color: #c5c5c5; text-decoration: none;" href="./contact.php">Contact us</a></li>
                <!-- <li>Blogs</li> -->
                <li><a style="color: #c5c5c5; text-decoration: none;" href="tel: +918658164463">+91 8658164463</a></li>
                <li><a style="color: #c5c5c5; text-decoration: none;" href="mailto:info@thecodekart.com">info@thecodekart.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12">
            <div class="footer_list">
              <h5>FURTHER INFORMATION</h5>
              <ul>
                <li>Terms & Conditions</li>
                <li>Privacy Policy</li>
              </ul>
            </div>
            <div class="footer_list">
              <h5>FOLLOW US</h5>
              <div>
                <p class="mx-0">
                  <a href="https://www.facebook.com/TheCodeKart" target="_blank"><i class="fa fa-facebook sos"></i></a>
                  <a href="https://twitter.com/codekart" target="_blank" target="_blank"><i class="fa fa-twitter sos"></i></a>
                  <a href="https://www.linkedin.com/company/codekart/" target="_blank"><i class="fa fa-linkedin sos"></i></a>
                  <a href="https://www.instagram.com/thecodekart/" target="_blank"><i class="fa fa-instagram sos"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <div class="copy">
      <p class="copyright">COPYRIGHT @ 2022 CodeKart Solutions Pvt. Ltd.</p>
    </div>
  </div>
</footer>