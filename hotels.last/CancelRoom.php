<html><head><title>Cancel Room</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
</script></head>
<body>
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
<?php
$cancel=$_POST["cancel"];
$connection=mysql_connect("localhost","root","root1234");
mysql_select_db("hotel_system");
$select="delete from rooms WHERE phone='$_POST[cancel]'";
$sql=mysql_query($select);

?>
<script type = "text/javascript">
	var sql=<?php echo $sql; ?>;
if(sql){
	alert("The reservation of car canceled successfully");
        }
else
  {alert("deletion failed");
   
  }
  </script>
</body>
</html>