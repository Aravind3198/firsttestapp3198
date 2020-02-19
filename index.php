<?php 
session_start();
if(isset($_GET['mail'])){
  $acknowledge = "We've received your requirement. We'll get in touch soon. Thank you";
}
else{
  $acknowledge = "";
}  
?>

<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="gn2jQVTBBXU5JQ5KMU87BFhBicBJZZgB8PXqZG3D_Gg" >
    <title>Build a home, Home, Construction, Civil contractor - buildAhome</title>
    <meta name="author" content="BuildAhome">
    <meta name="description" content="No compromise on quality and luxury. No one wants to pay more than necessary when building a home, independent home.">
    <meta name="keywords" content="Build a home, Home, Construction, Building construction, Home plans, Homes, Builders, Contractor, New house , Home designs, Design, Home design, Interior design, Architecture design, Architect, Civil Contractor, Independent homes" >
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW, ARCHIVE" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Favicons -->
  <link href="http://buildahome.in/img/favicon.png" rel="icon">
  <link href="http://buildahome.in/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="css/jquery.jConveyorTicker.min.css" rel="stylesheet">
  
 
 <style>
::-webkit-scrollbar {
    width: 0px;
    background: transparent; /* make scrollbar transparent */
}
body{
font-family: 'Varela'!important;

}
.fade {
    opacity: 0;
    -webkit-transition: opacity 1.2s linear !important;
    transition: opacity 1.5s linear;
}

.container-fluid, #header{
  opacity: 1;
  padding-top:0 !important;
  background: transparent ;
  color: whitesmoke;
}
#news-ticker{
  width: 90%;
  float: right;
  height:30px;
  background: transparent;
  z-index: 11999 !important;
  overflow: hidden;
  white-space: nowrap;
  animation: marquee 8s linear infinite;
}

#outline{
  margin:auto !important;
  color:white !important;
}

#process .section-header p{
        text-align: left !important;
        margin-left: 0 !important;
        font-size: 30px !important;
        font-weight: 500;
    }
  
</style>
</head>  
<body>
  <!--==========================
    Header
  ============================-->
  <header id="header" >
    <div id="news-ticker">
        <div class="js-conveyor-1 ">
            <ul>
              <li >
                  <span>•	Architecture
              •	Structural Designing 
              •	Plan Sanction & Government Liason
              •	Construction
              •	Electrical
              •	Plumbing
              •	Interiors
              •	Landscaping
              •	One stop solution for home construction @1350* per Sqft
            </span>
            </li>
            </ul>
          </div>
      
          <script>
              
              $(function() {
              $('.js-conveyor-1').jConveyorTicker({
                anim_duration: 300
              });
              });
              $(function() {
              $("#cta").slideDown();
              });
              $( document ).ready(function() {
                <?php
                if(isset($_GET['mail'])) {?>
                  document.getElementById('confirm').click();
                  $('#modalform').style.display='none';
                <?php }?>    
              });
              
            </script>
            
      <p id = 'ticker' behavior="scroll" direction="left" style="padding-top:5px;">
      
     </p>
  </div>
  
  <div class="container-fluid">
        
      <div id="logo" class="pull-left " style="background-color: transparent;">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"><img src="http://buildahome.in/img/LOGO WHITE.png" alt="" style="height: 60px;width:80px;margin-left:-5%;margin-right: 5%; margin-top: 0px;" title="" /></a>
      </div>
      <center>
      <nav id="nav-menu-container" class="pull-center">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#process">Process</a></li>
          <li><a href="#designs">Designs</a></li>
          <li><a href="#services">Homes</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          <!----li><a href="#cost_calc" id="cost_calc" data-toggle="modal" style="text-decoration:none;" data-target="#exampleModal">Cost calculator</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li-->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      </div></center><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <div id="mob-video" style="padding-bottom: 40px;background: linear-gradient(rgba(14, 15, 15, .3), rgb(2, 2, 2)), url(http://buildahome.in/img/home.jpg); background-size: 100% 100%;  color: black !important;">
      <center>
      <img src="http://buildahome.in/img/LOGO WHITE.png" class="mob-logo">
        <h3>
          <a href="#" data-toggle="modal" style="text-decoration:none;" data-target="#exampleModal">
            <div id="ctamob" class="pull-center wow fadeInUp" data-toggle="popover">
                Home construction at 1350/sqft.
            </div>
          </a>
        </h3>
      </center>
  </div>
  
  <!--==========================
    Intro Section
  ============================-->
  <!-- Button trigger modal -->
  <!-- Modal -->

  <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Key to building your dream home!</h3>
      </div>
      <div class="modal-body">
        <form id="modalform" action="mail_from_modal.php" method="post" role="form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" required="required" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="phone" required="required" class="form-control" name="phone" id="phone" placeholder="Phone number"  data-msg="Please enter a valid phone number" />
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required="required" name="requirement" id="requirement" placeholder="Your requirement" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
            <p style='color:white; margin-top:5px' id='submitMsg'></p>
          </div>
          <button onclick="return validate();" type="submit" class=" wow fadeInUp btn btn-info" style="width:100%;">Submit</button>
          <script>
            function validate(){
              var name = $('#name')[0].value.toString();
              var phone = $('#phone')[0].value.toString();
              var req = $('#requirement')[0].value.toString();
              if(name.trim()=="" || phone.trim()=="" || req.trim()==""){
                submitMsg.innerHTML = "Fields are empty";
                return false;
              }
              else if(!/^[A-Za-z0-9., ]+$/.test(name) || !/^[A-Za-z0-9., ]+$/.test(phone) || !/^[A-Za-z0-9., ]+$/.test(req)){
                submitMsg.innerHTML = "Please enter valid data";
                return false;
              }
              else{
                return true;
              }
            }
          </script>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmation"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Thanks for reaching out. we'll get in touch soon!</h3>
      </div>
    </div>
  </div>
</div>

<a href="#" data-toggle="modal" id="confirm" data-target="#confirmation" hidden></a>


  <section id="intro" class="hide-on-med-and-small">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active ">
            <div class="carousel-background"></div>
            <video autoplay muted loop id="myVideo" >
              <source src="./cover.mp4" type="video/mp4">
            </video>
            <div class="carousel-container">
              <div class="carousel-content">
              <a href="#" data-toggle="modal" style="text-decoration:none;" data-target="#exampleModal">
                  <header class="section-header">
                      <p>          
                        <div id="cta" class="pull-center wow fadeInDown" data-toggle="popover">
                          <label class="wow fadeInUp" data-wow-duration="1.6s">Home construction at 1350/sqft.</label>
                          <p class="wow fadeIn" data-wow-delay="1.6s">The truest one stop solution for Home Construction</p>
                        </div>
                      </p>
                    </header>
                  
              </a>
              

              <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p-->
                <!--a href="#featured-services" id="cta" class="btn-get-started scrollto">Get Started</a-->
              </div>
            </div>
          </div>

          <!---div class="carousel-item">
            <div class="carousel-background"><img src="http://buildahome.in/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="http://buildahome.in/img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="http://buildahome.in/img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="http://buildahome.in/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Magnam aliquam quaerat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div-->
    </div>
  </section><!-- #intro -->

  <main id="main">
        
    <!--==========================
      Featured Services Section
    ============================-->
    
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="my_container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>buildAhome is a one stop solution for all your home construction needs, providing the most comprehensive turnkey solutions. The following is a quick guide to buildAhome, and all the features mentioned below are included in our unbelievable 1350/- per Sqft pricing
          <a href=""></a></p>
        </header>
        <section id="featured-services">
            <div class="my_container" style='width:97.5%;'>
              <div class="row">
      
                <div class="col-lg-4 box col-md-4" style="background: linear-gradient(rgba(14, 15, 15, 0.5), rgb(2, 2, 2)), url(http://buildahome.in/img/about/fact.jpg); background-size: 100% 100%;  color: black !important;">
                  <i ><img src="http://buildahome.in/img/icons/Architecture_White.png"></i>
                  <h4 class="title"><a href="">Architecture & Designing </a></h4>
                  <p class="description">With qualified architects & Vastu complaint design, we provide customised designs to suit each & every one of your requirement</p>
                </div>
                <div class="col-sm-4 box box-bg col-md-4" style="background: linear-gradient(rgba(14, 15, 15, 0.5), rgb(2, 2, 2)), url(http://buildahome.in/img/about/Time.jpg); background-size: 100% 100%;  color: black !important;">
                  <i class="ion-ios-stopwatch-outline"></i>
                  <h4 class="title"><a href="">Timely Delivery</a></h4>
                  <p class="description">A micro schedule is given before kick-off of the construction, which shows the timeline of all activities including the final handing over date. If there is any delay in handover, we pay a penalty for every day we delay.</p>
                </div>
      
                <div class="col-lg-4 box col-md-4" style="background: linear-gradient(rgba(14, 15, 15, 0.5), rgb(2, 2, 2)), url(http://buildahome.in/img/about/guarantee.jpg); background-size: 150% 100%;  color: black !important;">
                  <i class="fa fa-shield"></i>
                  <h4 class="title"><a href="">Guarantee</a></h4>
                  <p class="description">We offer a 12 month complete guarantee on all works that we execute & an additional 10 year waterproofing warranty on cracks & leaks. </p>
                </div>
                <div class="col-sm-3 box col-md-4" style="background: linear-gradient(rgba(14, 15, 15, 0.5), rgb(2, 2, 2)), url(http://buildahome.in/img/about/Hidden.jpg); background-size: 140% 105%;  color: black !important;">
                  <i ><img src="http://buildahome.in/img/icons/Hidden Fees_White.png"></i>
                  <h4 class="title"><a href="">No Hidden Charges</a></h4>
                  <p class="description">At buildAhome we do not keep scope for any hidden or extra charges. We also do not charge on a per Sqft area, but on a lump sum basis. The cost finalised during the agreement time will remain firm even during house warming</p>
                </div>
                
                <div class="col-sm-4 box  col-md-4" style="background: linear-gradient(rgba(14, 15, 15, 0.5), rgb(2, 2, 2)), url(http://buildahome.in/img/about/engineer.jpg); background-size: 100% 105%;  color: black !important;">
                  <i ><img src="http://buildahome.in/img/icons/engineer_White.png"></i>
                    <h4 class="title"><a href="">Engineer-At –Site</a></h4>
                    <p class="description">All our sites have a qualified engineer who ensures quality & timely progress. Along with the Engineer, a Senior Project Co-ordinator, Quality Engineer, Structural Designer, MEP Engineer & an Architect visit frequently.</p>
                  </div>
        
                  <div class="col-sm-4 box box-bg col-md-4" style="background: linear-gradient(rgba(14, 15, 15, 0.1), rgb(2, 2, 2)), url(http://buildahome.in/img/about/subcontracting.jpg); background-size: 100% 105%;  color: black !important;">
                    <i ><img src="http://buildahome.in/img/icons/Sub Contract_White.png"></i>
                    <h4 class="title"><a href="">No Subcontracting</a></h4>
                    <p class="description">We do not subcontract any work to a third party vendor or freelancer. We execute all of the works in our contract, this ensures buildAhome is liable for all works that happen at site, and there is no shift the blame at site.  </p>
                  </div>
                  <!---  
                  <div class="col-sm-3 box col-md-4">
                    <i class="fa fa-rupee"></i>
                    <h4 class="title"><a href="">No Hidden Charges</a></h4>
                    <p class="description">At buildAhome we do not keep scope for any hidden or extra charges. We also do not charge on a per Sqft area, but on a lump sum basis. The cost finalised during the agreement time will remain firm even during house warming</p>
                  </div>
                  
                  <div class="col-sm-3 box box-bg col-md-3">
                    <i class="ion-ios-heart"></i>
                    <h4 class="title"><a href="">Value Engineering</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                  </div-->
              </div>
            </div>
          </section><!-- #featured-services -->
      
      </div>
    </section><!-- #about -->

    
    <section id="process">
        <div id="about-container" class="my_container">

        <header class="section-header">
            <h3>Process</h3>
        </header>
        <section id="featured-services">
        <a href="#" data-toggle="modal" style="text-decoration:none;" data-target="#exampleModal">      
                <div class="my_container" style='width:100%;'>
                
                <div class="row">
        
                  <div class="col-lg-2 box col-md-2">
                    <i class="	fa fa-share-square-o " id="outline"></i>
                    <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModal">Submit your requirement</a></h4>
                    <p class="description"></p>
                  </div>
                  
                  <div class="col-lg-2 box box-bg col-md-2">
                    <i class="fa fa-phone-square " id="outline"></i>
                    <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModal"> Get on a call with our architect</a></h4>
                    <p class="description"></p>
                  </div>
        
                  <div class="col-lg-2 box col-md-2">
                    <i class="fa fa-bar-chart " id="outline"></i>
                    <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModal">Receive a Quote</a></h4>
                    <p class="description"></p>
                  </div>
                  <div class="col-sm-2 box box-bg col-md-2">
                    <i class="fa fa-money " id="outline"></i>
                    <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModal">Finalise plans, 3D & cost </a></h4>
                    <p class="description"></p>
                  </div>
                  <div class="col-sm-2 box  col-md-2">
                        <i class="fa fa-pencil-square-o " id="outline"></i>
                        <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModal">Sign the agreement</a></h4>
                        <p class="description"></p>
                  </div>
                  <div class="col-sm-2 box box-bg  col-md-2">
                        <i class="fa fa-child " id="outline"></i>
                        <h4 class="title"><a href="" data-toggle="modal" data-target="#exampleModal"> Watch your dream come true</a></h4>
                        <p class="description"></p>
                  </div>
          </div>
          </a>
        </div>
            </section><!-- #featured-services -->
        
        </div>
      </section><!-- #about -->
       
    <!---div style="border:1px solid black;width:100%;height:450px;overflow-y: hidden;overflow-x:scroll;">
      <p style="width:1250 %; ">
        <img src="http://buildahome.in/img/intro-carousel/1.jpg" alt="">
        <img src="http://buildahome.in/img/intro-carousel/2.jpg" alt="">
        <img src="http://buildahome.in/img/intro-carousel/3.jpg" alt="">
          By using overflow-x, we can create scroll bars when the contents of this div are wider than the container. By setting this paragraph to 250 percent, it is 250 percent wider than the parent container - forcing an overflow. 
      </p>
    </div-->
    
    
    <!--==========================
      About Us Section
    ============================-->
    <section id="designs">
    <a href="#" data-toggle="modal" style="text-decoration:none;" data-target="#exampleModal">      
        <div class="design-container" data-toggle="modal" data-target="#exampleModal">
          <a href="" >
          <header  class="section-header">
            <h3>Designs</h3>
            <a href=""></a></p>
          </header>
          </a>
          <div class="design-box">
            <img src="http://buildahome.in/img/Designs/60 X 40.jpg"/>
            <h5>60 x 40</h5>
          </div>
          <div class="design-box">
            <img src="http://buildahome.in/img/Designs/Compact Homes.jpg"/>
            <h5>Compact Homes</h5>
          </div>
          <div class="design-box">
            <img src='http://buildahome.in/img/Designs/Dream Home.jpg'/>
            <h5>Dream Homes</h5>
          </div>
          <div class="design-box">
            <img src='http://buildahome.in/img/Designs/Green Home.jpg'/>
            <h5>Green Homes</h5>
          </div>
          <div class="design-box">
            <img src='http://buildahome.in/img/Designs/The classic 30 X 40.jpg'/>
            <h5>Classic 30 x 40</h5>
          </div>
        </div></a>
    </section><!-- #about -->
  
    
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container pro_container">

        <header class="section-header wow fadeInUp">
          <h3>Our homes</h3>
          <p>Here is what most of our work goes into.</p>
        </header>
        <div class="container" style="width:100%;">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              
              <div class="item active">
                <img src="http://buildahome.in/img/Site Elevations/TGN_Shetty_Night_Shot.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Inchara, Nagarbhavi </h3>
                  <p>A tailor made, built to suit home which is modern yet quaint. Spread across 4000 Sqft with and an additional 1000 Sqft space for landscaping, the home also has rainwater harvesting & grey water harvesting.</p>
                </div>
              </div>
             
              <div class="item">
                <img src="http://buildahome.in/img/Site Elevations/Basavaraj_670x450.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Basava Belaku, Bagalkote</h3>
                  <p>In the heart of Navanagar, which is made for rebuilding the city, the home is built on a 1200 Sqft plot. This home has a rental space, as well as space for individual residence.</p>
                </div>
              </div>
        
              <div class="item">
                <img src="http://buildahome.in/img/Site Elevations/Janet_670x450.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Urvi, Mangaluru</h3>
                  <p>Our first Self Sustainable home, features Solar generated electricity & complete water recycling system. With Porotherm block & recycled wood, this home is an epitome of sustainability.</p>
                </div>
              </div>
            
              <div class="item">
                <img src="http://buildahome.in/img/Site Elevations/John_Davis_670x450.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Olive Cottage, Electronic City</h3>
                  <p> A 3000 Sqft home, with 4 bedrooms is cosy for every nuclear family. Basement car park, mezzanine floors & open terraces suit the clients requirement to the dot. </p>
                </div>
              </div>
              
              <div class="item">
                <img src="http://buildahome.in/img/Site Elevations/Sharath_670x450.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Bhoomi, Yelahanka</h3>
                  <p>Built on a 1600 Sqft plot, the home is a testament to lifelong friendship. Built across 4 floors, the home is divided into two portion for the friends.</p>
                </div>
              </div>
              
              <div class="item">
                <img src="http://buildahome.in/img/Site Elevations/Shivakumar_Site_930x625.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Samruddhi, Rajajinagar </h3>
                  <p>A stilt, a Dupleix & a home theatre. Space planning being the primordial necessity of the home, the design was the key to the end product.</p>
                </div>
              </div>
              
              <div class="item">
                <img src="http://buildahome.in/img/Site Elevations/Siddaramiah1_670x450.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Anugraha, Mysore</h3>
                  <p>The quintessential 30 X 40 home with 3 bedroom spread across two floors. Parking, lawn & balconies make it the most simple, yet elegant Dupleix design that there is. </p>
                </div>
              </div>
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    
        <!----div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div-->

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!--section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section--><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!---section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section-->

    
    <!--==========================
      Portfolio Section
    ============================-->
    <!--section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="http://buildahome.in/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="http://buildahome.in/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section--><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <!---section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="http://buildahome.in/img/clients/client-1.png" alt="">
          <img src="http://buildahome.in/img/clients/client-2.png" alt="">
          <img src="http://buildahome.in/img/clients/client-3.png" alt="">
          <img src="http://buildahome.in/img/clients/client-4.png" alt="">
          <img src="http://buildahome.in/img/clients/client-5.png" alt="">
          <img src="http://buildahome.in/img/clients/client-6.png" alt="">
          <img src="http://buildahome.in/img/clients/client-7.png" alt="">
          <img src="http://buildahome.in/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section--><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
          
          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/TGN_Shetty.jpeg" class="testimonial-img" style="width:200; height:200;" alt="">
            <h3>Mr. TGN Shetty</h3>
            <h4></h4>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              I am happy with everything buildAhome have given me. All buildAhome staff were there to help me when needed. I look forward to stay in my new home from buildAhome
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Poornashree_Edited.jpg" class="testimonial-img" style="width:200; height:200;" alt="">
            <h3>Mrs.Poornashree</h3>
            <h4></h4>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              buildAhome was very supportive & handed over the project well within the deadline as per Schedul
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Nagesh_Edited.jpg" class="testimonial-img" alt="">
            <h3>Nagesh</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              buildAhome is customer centric and very supportive at any given point of time
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Shivakumar_Gowda_Edited.jpg" class="testimonial-img" alt="">
            <h3>Shivakumar Gowda</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Organized company who are down to earth yet professional and have a very strong work ethics
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Siddaramiah_Edited.jpg" class="testimonial-img" alt="">
            <h3>Siddaramiah</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              The entire home was built within my cost. I am thankful to Kiran & Abhijith for making my dream come true.
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Girija_Prasad_Panigrahi_Edited.jpg" class="testimonial-img" alt="" style="width:200; height:200;">
            <h3>Girija Prasad</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="" style="width:200; height:200;">
              Though I am from north India, and some people are scared to build a home in Bangalore, I urge everyone to get in touch with buildAhome. Thank you buildAhome
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Basavaraj_Edited.jpg" class="testimonial-img" alt="" style="width:200; height:200;">
            <h3>Basavaraj</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              I was in Kolkata & my parents in Bagalkote. I did not have to visit the site for anything during construction. buildAhome took care of everything
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          
          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Raghavendra_edited.jpg" class="testimonial-img" alt="">
            <h3>Raghavendra</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Pay easily after reaching mile stones and get any dream home as destination without stress
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://buildahome.in/img/Testimonials/Ravikanth_Edited.jpg" class="testimonial-img" alt="">
            <h3>Ravikanth</h3>
            <p>
              <img src="http://buildahome.in/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Team is filled with savvy knowledge of residential construction
              <img src="http://buildahome.in/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>



        </div>
          
      </div>
    </section><!-- #testimonials -->
<!--==========================
      Facts Section
    ============================-->
    <!----section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2,10</span>
            <p>Thousand Sq ft delivered</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2,100</span>
            <p> Thousand Man hours of experience</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12,000  </span>
            <p>Hours without an accident </p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Cities’ Presence</p>
  				</div>

  			</div>

        <-div class="facts-img">
          <img src="http://buildahome.in/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section>< #facts -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <img src="http://buildahome.in/img/B&W/Kiran - Project Head.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Kiran A</h4>
                    <p>Head - Projects</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <img src="img\B&W/Karthik - Design Head.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Kartheek H S</h4>
                    <p>Head - Design</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <img src="http://buildahome.in/img/B&W/Hemanth - Engineer.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hemanth</h4>
                  <p>Project Coordinator</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <img src="http://buildahome.in/img/B&W/Manjunath - Senior Procurement Officer.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Manjunath S</h4>
                  <p>Head - Procurement</p>
                </div>
              </div>
            </div>
            
        <a style="float:right; margin-left:10px;" id="fullteam" href="team.php">See full team</a>    
      </div>
    </section--><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address><a href="https://www.google.com/maps/dir/13.0237973,77.5963265/buildahome/@13.0310185,77.5625122,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3bae17e378ea5f21:0x1067839d22db62e4!2m2!1d77.5646979!2d13.0398686">552, 7th Main Road, AGS Layout, Dollars Colony, R.M.V. 2nd Stage, Bengaluru, Karnataka 560094</a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 70900 05600">+91 70900 05600  </a></p>
              <p><a href="tel:+9180 2351 5582">+9180 2351 5582  </a></p>
              
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:contact@buildahome.in">contact@buildahome.in</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="mail_from_modal.php"  method="post" id="contactform" role="form" class="contactForm" style="width:97%;">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="Phone" class="form-control" name="phone" id="phone" placeholder="Your Phone number" data-msg="Please enter a valid phone number" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="requirement" rows="5" data-rule="required" data-msg="Your requirement" placeholder="Your requirement"></textarea>
              <div class="validation"></div>
            </div>
            <script>
              allow = 0;  
              var correctCaptcha = function(response) {
                  alert("Thank you")
                  allow = 1;
                };
              
            function check_captcha(){
              console.log(allow)
              if(allow==1){
                console.log("ONE")
                document.getElementById("contactform").submit();
              }
              else{
                alert("Please tick captcha")
                console.log("ZERO")
                document.getElementById("errormessage").innerHTML = "Please tick capcha";
                return false;
              }
            }
            </script>
            <div class="g-recaptcha" data-sitekey="6LcaUq0UAAAAAL6JWtrAkVwZO2zJQGChT5FiXT1U" data-callback="correctCaptcha"></div><br>
            <div class="text-center"><button onclick=" return check_captcha(); return false" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
              <a href="#intro"><img src="http://buildahome.in/img/LOGO WHITE.png" alt="" style="height:180px; width:220px;"/></a>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="./careers.php">Careers</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              552, 7th Main Road<br> 
              AGS Layout, Dollars Colony<br> 
              R.M.V. 2nd Stage<br>
              Bengaluru, Karnataka 560094<br>
              <strong>Phone:</strong> +91 70900 05600,<br>+9180 2351 5582<br>
              <strong>Email:</strong> contact@buildahome.in<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/buildahome.in/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/buildahome_official/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p style="padding: 10px;"><a href="https://www.thebetterindia.com/169900/sustainable-green-cheap-home-construction-mangaluru/">Better india</a>  
            </p>
            
            <p style="padding: 10px;"><a href="https://www.business-standard.com/article/beyond-business/house-that-nature-built-from-collecting-rainwater-to-recycling-used-water-119020200755_1.html">Business standard</a>  
            </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>buildAhome</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=buildAhome
        -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="js/jquery.jConveyorTicker.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
