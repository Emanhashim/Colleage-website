<!DOCTYPE html>



<html lang="en">
  <head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aware Campus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>stu</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />






<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Mentor</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo mr-auto "><img src="assets/img/logo2.png" height="800px" width="100px" alt="" class="" ></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="events.php">Events</a></li>
         
          </li>
          <li><a href="contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Register</h2>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
  </div>
</div><!-- End Breadcrumbs -->
  </head>


<strong><h1> Regidter here</h1></strong>



















  <?php

$error= "error";

        $db_host = "localhost";
        $db_username = "root";
        $db_pass = "";
        $db_name = "arada";
        $con = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or die($error);


if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $bdate=$_POST['bdate'];
    $sex=$_POST['sex'];
    $applyingfor=$_POST['applyingfor'];


    $department=$_POST['department'];
    $educationlevel	=$_POST['educationlevel	'];
    $selectprogram=$_POST['selectprogram'];
    $academicyear=$_POST['academicyear'];
    $enrolmenttype=$_POST['	enrolmenttype'];

    $certificate=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];

    $transcript=$_FILES['tran']['name'];
    $tmp_name_tran=$_FILES['tran']['tmp_name'];

    $id=$_FILES['ids']['name'];
    $tmp_name_id=$_FILES['myfile']['tmp_name'];


    $email=$_POST['email'];
    $citizen=$_POST['citizen'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $mobileno=$_POST['mobileno'];

     
    
    
    
    
    if(  $firstname &&  $middlename &&  $lastname && $bdate 
    && $sex &&  $applyingfor &&  $department && $educationlevel
    &&$selectprogram &&  $academicyear &&  $enrolmenttype && $certificate
    &&$transcript && $id &&$email &&$citizen && $country&&$city && $mobileno 
    
    ){
        
        $location="doc/$name";
        $locationtran="tran/$transcript";
        $locationid = "idf/$id";
        
         
         
        if($_FILES['myfile']['error']>0){
            echo 'file too large';
        }
      else{
        move_uploaded_file($tmp_name, $location);
        move_uploaded_file($tmp_name_tran, $locationtran);
        move_uploaded_file($tmp_name_id, $locationid);
       
        
$query=  mysqli_query($con,"INSERT INTO student (firstname,middlename,lastname,birthdate,gender,applyingfor,
department,educationlevel,	selectprogram,	academicyear,enrolmenttype,$location,$locationtran,$locationid,
email,	citizen,country,city,mobileno) 


values ('$firstname','$middlename','$lastname','$bdate','$gender','$applyingfor','$department','$educationlevel',
'$selectprogram','$academicyear','$enrolmenttype','$location','$locationtran','$locationid','$email','$citizen',
'$city','$mobileno)");
                

        echo 'Register';
       
       
      
        }
    }
    else{
        die("Please select a file");
    }
}
?>
























<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Arada Manufacturing 
          <br>Aware Campus</h3>
        <p>
          Kebena <br>
          Ethiopia, Kebena Square<br>
          Addis Ababa <br><br>
          <strong>Phone:</strong> +251922420131<br>
          <strong>Email:</strong> emanhashim42@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="courses.html">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="events.html">Events</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="">Garment</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">ICT</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Furniture</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Metal Work</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Construction</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Plumbing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Electricity</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      2021 &copy; Copyright. All Rights Reserved
       <strong><span><a href="index.html" class="logo mr-auto "><img src="assets/img/logo2.png" height="50px" width="50px" alt="" class="" ></a>
      </span></strong>
    </div>
    <div class="credits">
    Designed by <a href="http://emanhashim.com.et">RehobotWebDesign</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>



</html>
