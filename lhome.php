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
		$(document).on("contextmenu", ".main-content", function(e){
   			window.location = "logout.php";
   			return false;
		});
</script>
<script language="jscript">
jQuery(function($) {
    $('.main-content').click(function() {
        return false;
    }).dblclick(function() {
        window.location = "compose.php";
        return false;
    });
});
</script>
<script language="jscript">
var precision = 300;
var lastClickTime = 0;

$(document).ready(function()
{
    var div = $('#main');

    $(div).bind("contextmenu", function(e)
    {
        return false;
    }); 

    $(div).mousedown(function(event)
    {
        if (event.which == 3)
        {
            var time = new Date().getTime();

            if(time - lastClickTime <= precision)
            {
                 window.location = "inboxtemp.php";				
            }

            lastClickTime = time;
        }
    });
});
</script>
	</head>
	<body class="main" onLoad="welcomemsg2()" id="main">
		
		
		<div class='main-content'>
		
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
								<?php
									session_start();
									$user = $_SESSION['user'];?>
									<h1>Welcome <?php echo $user ?></h1>
									
									<p>
										Voice based Email
									</p>
								
									<div class='intro-btns' >
		
									</div>
									
								</div>
							</div>
							
						</div>
														
					</div>
				
				</section>	
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		
		
	</body>
</html>