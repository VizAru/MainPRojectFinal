<!DOCTYPE html>
<html>
    <head>
        <title>Inbox</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src='js/responsivevoice.js' ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script language="javascript">
window.onload = function() {
  inbmsg();
};
</script>
        <script language="javascript">
$(document).on("contextmenu", ".main", function(e){
			change();
   			return false;
		});
	

</script>
      <script language="jscript">
jQuery(function($) {
    $('.main').click(function() {
        return false;
    }).dblclick(function() {
window.location = "lhome.php";
        return false;
    });
});
</script>
    </head>
    <body class="main" id="main" style="
    width: -webkit-fill-available;
    height: 600px;
"> 
	
    <input type="hidden" name="fname" id="fname">
   <input type="hidden" name="lname" id="lname">
 <input type="hidden" name="age" id="age"><br><br> 
       <?php
			include("config.php");
			session_start();
if(!$db)
{
	die('Connection failed!'.mysqli_error($db));
}
$name = $_SESSION['user'];
$sql="SELECT * FROM " .$name. "";
$result = mysqli_query($db,$sql);
?>
<center>
 <h1>INBOX</h1>
<table border="2" id="tab" style="
    width: -webkit-fill-available;
">
<tr>
<th>From</th>
<th>Subject</th>
<th>Message</th>
</tr>
<?php
while($array = mysqli_fetch_row($result))
{
	print "<tr align='center'> <td>";
	echo "$array[0]";
	print "</td> <td>";
	echo "$array[1]";
	print "</td> <td>";
	echo "$array[2]";
	print "</td> </tr>";
}
?>
				
</table>	
</center>	
        <script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
        <script src="vis.js"></script>
		<script src='inb.js'></script> 
        
    </body>
</html>