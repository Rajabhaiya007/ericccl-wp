<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
      <title>BarCode :: Home</title>
      <link rel="icon" href="include/images/favicon.png" sizes="32x32" />
      <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
      <link href="include/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="include/css/jquery.smartmenus.bootstrap-4.css" rel="stylesheet">
      <link href="include/css/animate.css" rel="stylesheet" type="text/css">
      <link href="include/css/slick.css" rel="stylesheet" type="text/css">
      <link href="include/css/style.css" rel="stylesheet" type="text/css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
   <!--============================== Header Start ==============================-->
   <header id="myMenu">
      <div class="header-lower">
         <nav class="navbar navbar-expand-xl">
            <div class="container">
               <a class="navbar-brand" href="index.php">
                  <img src="include/images/logo.png" alt="" />
               </a>
               <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="icon-bar"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
                  <!-- Left nav -->
                  <ul class="nav navbar-nav" id="main-nav">
                     <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                     <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Reserve</a>
                       <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#" title="">Bottle Service</a></li>
                           <li><a class="dropdown-item" href="#" title="">Guest List</a></li>
                       </ul>
                     </li>
                     <li class="nav-item"><a class="nav-link" href="#">Special Events</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Photo Gallery</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </header>
   <!--============================== Header End ==============================-->


   <!--=========================== Hero Slider Start ===========================-->
   <div class="hero-slider">
      <div class="hero-slider-bg set-bg" style="background: url(include/images/hero-slider.jpg);">
         <video class="slide-video" autoplay="" loop="" muted="" id="video-background" style="min-width: 100%; min-height: 100%;">
            <source src="include/images/video.mp4" type="video/mp4">
         </video>
         <div class="hero-slider-inner">
            <div class="hero-slider-content">
               <div class="container">
                  <div class="row">
                     <div class="offset-md-1 col-md-10">
                        <div class="hero-content text-center">
                           <div class="pattern-slider mar-30 text-center">
                              <i class="icon icon-title"></i>
                           </div>
                           <h1 class="mar-50">David Guetta performed at 1040 night club</h1>
                           <a href="#" class="btn btn-default">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--=========================== Hero Slider End =============================-->


   <!-- ================= Tabs Start ================= -->
   <!-- <div class="content-container" style="background: #eee;">
      <div class="container">
        <h2>Toggleable Tabs</h2>
        <br>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link tt active" data-toggle="tab" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tt" data-toggle="tab" href="#menu1">Menu 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tt" data-toggle="tab" href="#menu2">Menu 2</a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="home" class="container tab-pane active"><br>
            <h3>HOME</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div id="menu1" class="container tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div id="menu2" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          </div>
        </div>
      </div>
   </div> -->
   <style type="text/css">
      .nav li{padding: 10px 20px;background: #ccc;cursor: pointer;margin: 0 5px;}
   </style>

   <div class="container">
     <h3>Tabs</h3>
     <ul class="nav nav-tabs">
       <li class="active tt"><a data-target="#a" data-toggle="tab">Home</a></li>
       <li class='tt'><a data-target="#b" data-toggle="tab">Menu 1</a></li>
       <li class='tt'><a data-target="#c" data-toggle="tab">Menu 2</a></li>
     </ul>
     <div class="tab-content">
       <div class="tab-pane active" id="a">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
       <div class="tab-pane" id="b">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
       <div class="tab-pane" id="c">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
     </div>
   </div>
   <!-- ================= Tabs End ================= -->


   <!--============= PodCast Start ==================-->
   <div class="podcast-block content-container">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="podcast-list">
                  <div class="podcast-left mar-30">
                     <img src="include/images/test.webp" alt=""/>
                  </div>
                  <div class="podcast-right">
                     <h3>The Toughest Mission: Surviving Leukemia...</h3>
                     <p>Justin Legg is a retired Navy SEAL Officer. He graduated from the U.S. Naval Academy in 2000 with a B.S.</p>
                     <div class="mp3-audio">
                        <audio controls><source src="include/images/pod-cast.mp3" type="audio/ogg"></audio>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="podcast-list">
                  <div class="podcast-left mar-30">
                     <img src="include/images/test.webp" alt=""/>
                  </div>
                  <div class="podcast-right">
                     <h3>The Toughest Mission: Surviving Leukemia...</h3>
                     <p>Justin Legg is a retired Navy SEAL Officer. He graduated from the U.S. Naval Academy in 2000 with a B.S.</p>
                     <div class="mp3-audio">
                        <audio controls><source src="include/images/pod-cast.mp3" type="audio/ogg"></audio>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--============= PodCast End ==================-->
   <script src="include/js/jquery-2.2.2.min.js"></script>
   <script src="include/js/bootstrap.min.js"></script>
   <script src="include/js/jquery.smartmenus.js"></script>
   <script src="include/js/jquery.smartmenus.bootstrap-4.js"></script>
   <script src="include/js/slick.min.js"></script>
   <script src="include/js/custom.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
        $(".tt").click(function() {
          $(".tab-content").find('.tab-pane').not(':eq('+$(this).index()+')').hide('slow');
          $(".tab-content").find('.tab-pane').eq($(this).index()).slideToggle({ direction: "up" }, 5000);
        });
      });
   </script>
</body>
</html>