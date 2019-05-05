<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Voice Based Email</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		<script src='js/script2.js' ></script>
		<script src='js/responsivevoice.js' ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script language="javascript">
		$(document).on("contextmenu", ".inb", function(e){
  			inboxr();
   return false;
});


jQuery(function($) {
    $('.inb').click(function() {
        return false;
    }).dblclick(function() {
        window.location = "lhome.php";
        return false;
    });
});
</script>
	</head>
	<body onLoad="welcomemsg5()">
		
		
		
		
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			<div align="center" class='inb'>
					<h1>INBOX</h1>
			
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
<table border="2">
<tr>
<th>From</th>
<th>Subject</th>
<th>Message</th>
</tr>
<?php
while($array = mysqli_fetch_row($result))
{
	print "<tr align='center'> <td>";
	echo "<input type='text' id='frm' value='$array[0]'/>";
	print "</td> <td>";
	echo "<input type='text' id='sub' value='$array[1]'/>";
	print "</td> <td>";
	echo "<input type='text' id='msg' value='$array[2]'/>";
	print "</td> </tr>";
}
?>
				
</table>			
					
							
	</div>	
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		<script src='inboxread.js'></script> 
		
	</body>
</html>