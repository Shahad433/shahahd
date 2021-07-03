<html>
<head>
<title>Even hotel website</title>
<link  rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" >
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" >
</script>
<script type = "text/javascript">
function check(){

	if( document.form1.name.value == false ) {
            alert( "Please enter the name" );
            document.form1.name.focus() ;
            return false; }
if(( document.form1.phone.value == false ) ||( isNaN( document.form1.phone.value ))) {
            alert( "Please enter phone number" );
            document.form1.phone.focus() ; 
     return false;   }

if( document.form1.email.value == false )  {
            alert( "Please enter email" );
            document.form1.email.focus() ; 
     return false;   }
return( true );
}


</script>
</head>
<body>
<!----navigationbar----->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">ABOUT US</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">BOOKING</a>
</li>
</ul>
</div>
</nav>
</section>
   <!------images------>
    <div id="slider">
<div id="headerslider" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#headerslider" data-slide-to="0" class="active"></li>
<li data-target="#headerslider" data-slide-to="1"></li>
<li data-target="#headerslider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block img-fluid" src="IMG_6329.jpg" >

    </div>
<div class="carousel-item">
<img class="d-block img-fluid" src="IMG_6326.jpg" >
</div>
<div class="carousel-item">
<img class="d-block img-fluid" src="IMG_6328.jpg" >
</div>
</div>
<a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span></a>
<a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    
</a>
</div>
</div>
    <!------services------->
    <section id="services">
    <div class="container">
<h1>Our Services</h1>
        <div class="row services">
        <div class="col-md-3 text-center">
           <div class="icon">
            <i class="fas fa-concierge-bell"></i>
            </div>
            <h3>Resturant</h3>
            <p>Whether it’s an intimate, family dinner or a large, social gathering, Even hotels offers a variety of unique</p></div>
            <div class="col-md-3 text-center">
           <div class="icon">
           <i class="fas fa-spa"></i>
           </div>
            <h3>Spa</h3>
                <p>Day Spa,Stay Spa,Health Spa or Health Farm,Destination Spa,Resort,Holistic ,Health Hydro and Pamper Spa.</p></div>
                <div class="col-md-3 text-center">
           <div class="icon">
            <i class="fas fa-swimming-pool"></i>
            </div>
            <h3>Swimming Pool</h3>
                    <p>The swimming pools are 50 meter pools and are of course called the long swimming pool and Other  one It is 25 meters long and is known as the short swimming pools.</p></div>
            <div class="col-md-3 text-center">
           <div class="icon">
            <i class="fas fa-dumbbell"></i>
            </div>
            <h3>Fitness center</h3>
            <p>A fully equipped business center is available at your disposal</p>
            </div>
            </div>
        </div> </section>
    <!------get in teuch------->
<section id="contact">
<div class="container">
<h1>Get In Touch</h1>
<div class="row">
<div class="col-md-6">
<form name=form1 class="contact-form" action="thanx.php" method="POST" onsubmit = "return(check());">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="your name"></div>
<div class="form-group">
<input type="text" name="phone" class="form-control" placeholder="your Phone Number"></div>
<div class="form-group">
<input type="text" name="email" class="form-control" placeholder="your Email"></div>
<div class="form-group">
<textarea  name="message" class="form-control" rows="4" placeholder="Your Message"></textarea></div>
<button type="submit" class="btn btn-primary" value="save and send" >Send Message</button>
</form>  
</div>
   
    
<div class="col-md-6 contact-info">
    <div class="follow"><b>Address</b><a href="https://www.google.com.sa/maps/place/Carib+International+Consultancy/@25.1961355,55.2735476,15z/data=!4m8!1m2!2m1!1sgoogle+map+hotels+dubai!3m4!1s0x3e5f69d22f2769fd:0xbee439c3dcf1f85e!8m2!3d25.1858744!4d55.2643472"><i class="fa fa-map-marker-alt"></i></a>Dubai</div>
    <div class="follow"><b>Phone</b><a href="012177322"><i class="fa fa-phone"></i></a>012177322</div>
    <div class="follow"><b>Email</b><a href="Even.hotel@hotmail.com"><i class="far fa-envelope"></i></a>Even.hotel@hotmail.com</div>
 
<div class="follow"><label><b>Social media: </b></label>
    <a href="https://ar-ar.facebook.com"><i class="fab fa-facebook-f"></i></a> 
    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
    <a href="https://plus.google.com/discover"><i class="fab fa-google-plus"></i></a>
    <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
    </div>
</div>
</div>
</div>      
</section>

    
    
    
   
</body>
</html>
      

