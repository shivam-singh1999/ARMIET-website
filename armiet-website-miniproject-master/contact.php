<?php
  require_once('connect.php');

  if(isset($_POST) & !empty($_POST)) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Contact form validation using php

  if(!isset($name) || !empty($name)) {
    $error[] = "Name is required";
  }

  if(!isset($email) || !empty($email)) {
    $error[] = "E-mail is required";
  }

  if(!isset($phone) || !empty($phone)) {
    $error[] = "Phone is required";
  }

  if(!isset($subject) || !empty($subject)) {
    $error[] = "Subject is required";
  }

  if(!isset($message) || !empty($message)) {
    $error[] = "Message is required";
  }

  if(!isset($error) || !empty($error)) {

    $sql = "INSERT INTO contact (name, email, phone, subject ,message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if(mysqli_query($connection, $sql)) {
      header("Location: ThankU.html");
    } else {
      echo "<script type='text/javascript'>alert('Failed to send message, Try again')</script>";
    }
  } else {
    echo "Something went, Wrong!";
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>ARMIET – (Run by Koti Vidya Charitable Trust)</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/font-awesome-4.7.0/css/font-awesome.min.css">
  <style>
    .centered_contact {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 60px;
      color: white;
      text-shadow: 2px 2px #808080;
    }
    
    .icon-bar {
    position: fixed;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    }

    .icon-bar a {
    display: block;
    text-align: center;
    padding: 16px;
    transition: all 0.3s ease;
    color: white;
    font-size: 20px;
    }

    .icon-bar a:hover {
    background-color: #000;
    }

    .facebook {
    background: #3B5998;
    color: white;
    margin-bottom: 2px;
    }

    .twitter {
    background: #55ACEE;
    color: white;
    margin-bottom: 2px;
    }

    .google {
    background: #dd4b39;
    color: white;
    margin-bottom: 2px;
    }

    .linkedin {
    background: #007bb5;
    color: white;
    margin-bottom: 2px;
    }

    .youtube {
    background: #bb0000;
    color: white;
    }

    .content {
    margin-left: 75px;
    font-size: 30px;
    }
  </style>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light" data-toggle="affix">
    <div class="mx-auto d-md-flex d-block flex-md-nowrap container">
      <a class="navbar-brand" href="index.html" title="ARMIET – (Run by Koti Vidya Charitable Trust)" rel="home">
        <img src="images/armiet-main-logo.png" class="img-fluid logo" alt="Armiet Logo" width="400" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop1" data-toggle="dropdown">About Us</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="armiet_history.html">Armiet History</a>
              <a class="dropdown-item" href="principal_desk.html">Principal Desk</a>
              <a class="dropdown-item" href="awardspage.html">Awards</a>
              <a class="dropdown-item" href="PolicyMission.html">Policy, Mission and Vision</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop3" data-toggle="dropdown">Infrastructure</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="study.html">Study</a>
              <a class="dropdown-item" href="learn.html">Learn</a>
              <a class="dropdown-item" href="play.html">Play</a>
              <a class="dropdown-item" href="canteen.html">Canteen</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="LifeAtArmiet.html">Life@Armiet</a></li>
          <li class="nav-item"><a class="nav-link" href="training_&_placement.html">Training and Placement</a></li>
          <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="icon-bar">
            <a target="_blank" href="https://www.facebook.com/ARMIETCollege/" class="facebook"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/armietcollege" class="twitter"><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/armiet" class="google"><i class="fa fa-google"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCOHRyc7iCyUzs9tJLUcbPLA" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="https://www.instagram.com/armietcollege/" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>
  </nav>
  <header class="header">

  </header>
  <section class="main-content">

    <div style="background-color:coral;">
      <div class="bg-image">
        <img src="images/clg_img.jpg" alt="college image" style="width:100%;height: auto; opacity: 0.5;">
        <div class="centered_contact">Contact</div>
      </div>
    </div>
    <div class="jumbo_contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7524.430742083951!2d73.368733!3d19.446279000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8648ce8f357e538!2sAlamuri+Ratnamala+Institute+of+Engineering+and+Technology!5e0!3m2!1sen!2sin!4v1539359241132"
              width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <form class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="phone">phone</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" name="phone" placeholder="Enter phone number" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subject">Subject</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="subject" placeholder="Enter your subject" required>
                </div>
              </div>
              <div class="form_group">
                <label class="control-label col-sm-2" for="text">Message:</label>
                <div style="padding-bottom: 1rem;" class="col-sm-10">
                  <textarea class="form-control" name="message" rows="5" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" value="Send">
                  <!-- <button type="submit" class="btn btn-default btn-primary">Send</button> -->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer style="background-color:pink" class="page-footer font-small blue pt-4">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 mt-md-0 mt-3">
            <!-- Content -->
            <h5 style="font-weight: bold;" class="text-uppercase">Armiet Campus Address</h5>
            <small style="color:grey;">ARMIET, A.S. Rao Nagar, Vill-Sapgaon, Tal-Shahpur, Dist-Thane 02527-212221/22</small><br><br>
            <small style="color:grey;">Email: info@armiet.com</small>
          </div>
          <div class="col-md-3 mt-md-0 mt-3">
            <!-- Content -->
            <h5 style="font-weight: bold;" class="text-uppercase">Armiet Head Office</h5>
            <small style="color:grey;">106 & 124,ARMIET, Vardhman Indl.Estate, Gokul Nagar, Thane (w) - +91
              8879648603/04 , 9223515071</small><br><br>
            <small style="color:grey;">Email: info@armiet.com</small>
          </div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 style="font-weight: bold;" class="text-uppercase">Important Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.dtemaharashtra.gov.in"><small>DTE Maharashtra</small></a>
              </li>
              <li>
                <a href="https://www.aicte-india.org/"><small>Govt., AICTE | Mumbai University</small></a>
              </li>
              <li>
                <a href="http://antiragging.in"><small>Anti Ragging Form</small></a>
              </li>
              <li>
                <a href="https://nptel.ac.in/"><small>Nptel</small></a>
              </li>
              <li>
                <a href="#!"><small>Privacy Policy</small></a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 style="font-weight: bold;" class="text-uppercase">Important Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.ugc.ac.in/"><small>Welcome to UGC, New Delhi, India</small></a>
              </li>
              <li>
                <a href="http://www.sspnsamiti.gov.in/"><small>SHIKSHAN SHULKA SAMITI and PRAVESH</small></a>
              </li>
              <li>
                <a href="https://www.youth4work.com/"><small>Online Skill Test</small></a>
              </li>
              <li>
                <a href="http://www.scholarsmerit.com/"><small>Samiksha</small></a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://armiet.in"> ARMIET</a>
      </div>
      <!-- Copyright -->

    </footer>
  </section>
</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>

</html>
