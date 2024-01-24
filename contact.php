<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ExcelSquare</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xrARmPSHzOPP8PvTDOe7b5Cv/PPsf+J7Kxj4gKL0DtSH7XQVF9OwXKEwbggiv0I6GlFR5MMYt7WgpMVONCnV9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<style>
  form {
    max-width: 900px;
    margin: auto;
    border: 2px solid #ccc;
    /* Added border */
    padding: 20px;
    /* Added padding */
    border-radius: 8px;
    /* Added border-radius */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 40px;
  }

  label {
    display: block;
    margin-bottom: 8px;
  }

  input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border-radius: 10px;
  }

  .description {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border-radius: 20px;
  }


  button {
    display: block;
    /* Ensure the button takes full width */
    margin: 0 auto;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
  }

  button:hover {
    background-color: #45a049;
  }

  textarea {
    width: 100%;
    /* Set the width to 100% */
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border-radius: 10px;
  }

  .card {
    border: 2px solid #ccc;
    ;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;

  }

  .card-body {
    padding: 0;
  }

  /* p,
        li {
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 15px;
        } */

  .google-map {
    width: 100%;
    height: 400px;

    padding: 8px;
  }
</style>


<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include 'menu.php';
    ?>
    <!-- end header section -->
  </div>

  <div class="slider-area2" style="background-image: url('images/123.png'); background-size: cover; background-position: center; height: 250px; display: flex; align-items: center; justify-content: center;">
    <div class="slider-height2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap hero-cap2 text-center pt-70">
              <h2 class="text-white">Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding" style="padding-bottom:0px;">

    <div class="container-fluid">
      <div class="row g-0">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" data-aos="zoom-in">
          <div class="card">
            <div class="card-body">
              <div class="position-relative h-100">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.9110982620127!2d121.03231422465687!3d14.547076278385768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8e2407af507%3A0x8fd96a1f3ba795e4!2sSan%20Antonio%20Plaza%20Arcade!5e0!3m2!1sen!2sin!4v1702616104891!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <section class="contact_section" style="padding-bottom:0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title text-center" style="padding-top:40px;padding-bottom:40px;">Get in Touch</h2>
        </div>
        <div class="col-lg-8" data-aos="flip-up">

          <form action="" method="post">

            <div class="row">

              <div class="col-md-6">
                <label for="firstName">First Name*:</label>
                <input type="text" id="firstName" name="firstName" required>
              </div>
              <div class="col-md-6">
                <label for="lastName">Last Name*:</label>
                <input type="text" id="lastName" name="lastName" required>
              </div>
            </div>

            <div class="row">

              <div class="col-md-6">
                <label for="phoneNumber">Phone Number*:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>
              </div>
              <div class="col-md-6">
                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" required>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12">
                <label for="description">Description</label>
                <textarea id="description" name="description" required class="description"></textarea>
              </div>
            </div>



            <button type="submit">SUBMIT</button>
          </form>
        </div>
        <div class="col-lg-3 offset-lg-1" data-aos="zoom-in-up">
          <div class="card p-4">
            <div class="card-body">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <p class="contact-info__title"> For Product Support</p>
                  <p><i class="fa fa-envelope"></i> <a href="mailto:support@excelsquare.com">support@excelsquare.com</a></p>
                  <p class="contact-info__title"> For General Enquiries</p>
                  <p><i class="fa fa-envelope"></i> <a href="mailto:excel@excelsquare.com">excel@excelsquare.com</a></p>
                  <p class="contact-info__title"> For Special Offers on Pricing</p>
                  <p><i class="fa fa-envelope"></i> <a href="mailto:sales@excelsquare.com">sales@excelsquare.com</a></p>

                </div>
              </div>
              <!-- <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                  <p class="contact-info__title">+1 253 565 2365</p>
                  <p>Mon to Fri 9am to 6pm</p>
                </div>
              </div> -->
              <!-- <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <p class="contact-info__title">support@colorlib.com</p>
                  <p>Send us your query anytime!</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- footer section -->
  <?php
  include 'footer.php';
  ?>

  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>