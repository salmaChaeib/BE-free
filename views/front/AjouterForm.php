<?php 


 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }

?>
<!DOCTYPE html>
<html>
<head>
<title>Ajouter publication</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
  
<body>
<!-- header -->
  <div class="header">
      <div class="header-grid">
          <div class="container">
        <div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
          <ul>
         
            <li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">be.free@gmail.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" ></i>+216 99 000</li>
            
          </ul>
        </div>
        <div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
        <div class="header-right1 ">
          <ul>
    
              <li><i class="glyphicon glyphicon-log-in" ></i><a href="../Logout.php">Logout</a></li>
          </ul>
        </div>
        
            <div class="clearfix"> </div>
          </div>  
        </div>
        <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      </div>
      <div class="container">
      <div class="logo-nav">
        
          <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img style="
    width: 90px;
"src="images/logo1.png" alt="">
              <!--<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Classic<span>Style</span></a></h1>-->
            </div>

          </div> 
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
              <li ><a href="index.html" class="act">Home</a></li> 
              <!-- Mega Menu -->
              
                 <li ><a href="AfficherForms.php">les pubs</a></li>
                         <li ><a href="AffichermesForms.php">mes pubs</a></li>
            </ul>
          </div>
          </nav>
        </div>
        
    </div>
  </div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
  <div class="container">
    <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Ajouter publication</h2>
    
    <div class="clearfix"> </div>
  </div>
</div>
  <!--content-->
    <div class="product">


<div class=" col-md-si">
        <form onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterFormC.php" >
          <div class="row">
                         <div class="row align-items-stretch mb-5" >
                        <div class="col-md-6" >
                             <div class="form-group" style="
    margin-left: 118px;
">
                                <input class="form-control"  id="titre" name="titre" type="text" placeholder="Titre"   />
                  
  
                      </div>
                  
                             
                            <div class="form-group form-group-textarea mb-md-0" style="
    margin-left: 118px;
">
                                <textarea class="form-control" name="contenu"  id="contenu" placeholder="Contenu"  ></textarea>
       
                            </div>
                            <br>
                          
                        
                          
                                <div class="form-group" style="
    margin-left: 118px;
">
                                
 <input class="form-control"  id="image" name="image" type="file" placeholder="image"   />
                            </div>
                                <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                    </div>
                        </div>

                       
                    </div>

          </div>
        </form>
                        <script>

function validateForm() {
      var titre = document.forms["myForm"]["titre"].value;
  
    var contenu = document.forms["myForm"]["contenu"].value;
      
    var image = document.forms["myForm"]["image"].value;

var now = new Date();
  if (titre == "") {
    alert("titre vide");
    return false;
  }

    if (contenu == "") {
    alert("contenu vide");
    return false;
  }

 
   
      if (image == "") {

    alert("image vide");
    return false;
  }

 
    
}
</script>
            


        
            <div class="clearfix"> </div>
    </div>
      </div class="clearfix"></div>
      </div>      
    </div>
        <!--//products-->
<div class="social animated wow fadeInUp" data-wow-delay=".1s">
  <div class="container">
    <div class="col-sm-3 social-ic">
      <a href="#">FACEBOOK</a>
    </div>
    <div class="col-sm-3 social-ic">
      <a href="#">TWITTER</a>
    </div>
    <div class="col-sm-3 social-ic">
      <a href="#">GOOGLE+</a>
    </div>
    <div class="col-sm-3 social-ic">
      <a href="#">PINTEREST</a>
    </div>
  <div class="clearfix"></div>
  </div>
</div>

<!-- footer -->
  <div class="footer">
    <div class="container">
    <div class="footer-top">
    <div class="col-md-9 footer-top1">
    
    <div class="clearfix"> </div>
    </div>
      <div class="footer-grids">
        <div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
          <h3>About Us</h3>
          <p>Ce projet est fondé par 5 jeunes étudiants âgés de 20 ans, <span>prêts à tout pour aider des millier de personnes à explorer le monde</span></p>
        </div>
        <div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
          <h3>Contact Info</h3>
          <ul>
            
            <li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">be.free@gmail.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" ></i>+216 99 000</li>
          </ul>
        </div>
        <div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".7s">
        <h3>Sign up for newsletter </h3>
        <form>
          <input type="text" placeholder="Email"  required="">
          <input type="submit" value="Submit">
        </form>
      
        </div>
      
        <div class="clearfix"> </div>
      </div>
      
      <div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
        <p>&copy 2020 Classic Style. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>
    </div>
  </div>
<!-- //footer -->
<script src="js/imagezoom.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>


</body>
</html>