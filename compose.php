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
$(document).on("contextmenu", ".main", function(e){
			compred();
   			return false;
		});
	

</script>
<script language="jscript">
jQuery(function($) {
    $('.main').click(function() {
        return false;
    }).dblclick(function() {
       comp();
        return false;
    });
});
</script>
	</head>
	<?php 		
	session_start();		
	$name = $_SESSION['user'];
	?>
			<body class='main'>
<h1>Compose</h1>
<form id="comp" method="get" action="mail2.php">
<label>To</label>
<input type="text" name="to" id="to" placeholder="Speak" />
<br />
<br/>
<label>Subject</label>
<input type="text" name="sub" id="sub" placeholder="Speak" />
<br />
<br />
<label>Body</label>
<input type="text" name="bdy" id="bdy" placeholder="Speak" />
</form>
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		<script src='tempcomp.js'></script>
		<script src='tempcomp2.js'></script>
		<script src='temp3.js'></script>
		<script src='temp31.js'></script>
		<script src='temp32.js'></script>
		
		
	</body>
</html>