<?php
$cancel=$_POST["cancel"];
$connection=mysql_connect("localhost","root","root1234");
mysql_select_db("hotel_system");
$select="delete from cars WHERE phone='$_POST[cancel]'";
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
