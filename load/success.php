<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://www.scholarlydata.org/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to scholarlydata.org</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- link rel="shortcut icon" href="images/ico/favicon.ico" -->
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
		<div class="container">
			<div id="navbar" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="."></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#main-slider"><i
								class="fa fa-home"></i></a></li>
						<li><a href="#about">About</a></li>
						<li class="active"><a href="#resources">Resources</a></li>
						<li><a href="../#publications">Publications</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!--/#header-->
	

    <section id="resources">
        <div class="container">
            <div class="box lead" style="margin-top: 80px; padding-bottom: 100px;">
            	<ol class="breadcrumb" style="font-size: ">
					<li><a href="#resources">Resources</a></li>
					<li class="item-active">Upload</li>
				</ol>
            	<div class="center">
	               	<h2 class="entity">Your scholarly linked data have been sent.</h2>
				</div>
            </div> 
        </div>
    </section><!--/#pricing-->

    <footer id="footer">
        <div class="container">
            <div class="row center">
                <div class="col-sm-12">
                    &copy; 2016 ScholarlyData.org. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    
    <?php
		header('Content-type: text/html');
		$status = array(
			'type'=>'success',
			'message'=>'Email sent!'
		);
	
	    $name = @trim(stripslashes($_POST['usr'])); 
	    $email = @trim(stripslashes($_POST['email'])); 
	    $event = @trim(stripslashes($_POST['event']));
	    $subject = "Data received successfully";
	    
	    $email_to = $email;
	    $email_from = 'info@scholarlydata.org';
	
	    $body = 'Dear ' . $name . ",\n\n" 
	    		. 'we have successfully received data you submitted for the schoalry event ' . event . ".\n\n"
	    		. "Best regards,\n"
	    		. "The scholarlydata.org team";
	
	    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
	    
	    die; 
	?>
</body>
</html>