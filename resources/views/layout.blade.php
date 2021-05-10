
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mardan Express Goods</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css
">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="/Footer-Clean.css">
    <link rel="stylesheet" href="/Navigation-Clean.css">
    <link rel="stylesheet" href="/css/styles.css">
    -->
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md navbar-inverse navbar-fixed-top navigation-clean" style="background-color:black">
        <div class="container"><a style=" font-size:30px; font-weight:bold;" class="navbar-brand" href="#">Mardan Express Goods</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="padding:10px;">
                    <li style=" font-size:20px;" class="nav-item" role="Home"><a  style="padding:10px;" class="nav-link active" href="index">Home</a></li>
                    <li style=" font-size:20px;" class="nav-item" role="about"><a  style="padding:10px;" class="nav-link" href="about">About</a></li>
                    <li style=" font-size:20px;" class="nav-item" role="contact"><a  style="padding:10px;" class="nav-link" href="contact">Conatct</a></li>&nbsp &nbsp &nbsp
                    <li style="font-size:20px; padding:15px 20px;" class="nav-item" role="login"><a style="text-decoration: none;" class="text-white"  class="nav-link" href="login"><b>Login</b></a></li>
                    <li style=" font-size:20px; padding:15px 20px; " class="nav-item" role="signup"><a style="text-decoration: none;" class="text-white" class="nav-link" href="signup"><b>SignUp</b></a></li>
                   <!-- <li style="margin: 10px 0px 0px 50px;"  class="nav-item dropdown">
                        <div  class="btn-group">    
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Register
                            </button>
                                <div class="dropdown-menu ">
                                    <button class="dropdown-item" type="button"><a href="login" class="btn  btn-md btn-block" role="button" aria-pressed="true">Login</a></button>
                                    <button class="dropdown-item" type="button"><a href="signup" class="btn  btn-md btn-block" role="button" aria-pressed="true">Sign up</a> </button>       
                                   
                                </div>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    

    @yield('content')

    



    <div class="footer-clean" >
        <footer class="static-bottom bg-dark text-white" >
            <div class="container text-white" >
                <div class="row justify-content-center text-white">
                    <div class="col-sm-4 col-md-3 item ">
                        <h3>Services</h3>
                        <ul >
                            <li><a class=" text-white" href="/">Home</a></li>
                            <li><a class=" text-white" href="about">About</a></li>
                            <li><a class=" text-white"  href="contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>&nbsp About</h3>
                        <ul>
                            <li><a class=" text-white"  href="#">Company</a></li>
                            <li><a class=" text-white"  href="#">Team</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>&nbsp Careers</h3>
                        <ul>
                            <li><a class=" text-white"  href="#">Drivers</a></li>
                            <li><a class=" text-white"  href="#">Truck Owner</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        
                        <a><h3 class="copyright">Mardan Goods Transport</h3></a>
                        <a class=" text-white"  href="#"><i  class="fa fa-facebook"></i></a>
                        <a class=" text-white"  href="#"><i class="fa fa-twitter"></i></a>
                        <a  class=" text-white" href="#"><i class="icon ion-social-snapchat"></i></a>
                        <a class=" text-white"  href="#"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key="enter-your-key"&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="js/main.js"></script>




</body>

</html>