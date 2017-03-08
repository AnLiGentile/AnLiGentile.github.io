<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://www.scholarlydata.org/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to scholarlydata.org</title>
    <link href="tpl/../css/bootstrap.min.css" rel="stylesheet">
    <link href="tpl/../css/font-awesome.min.css" rel="stylesheet">
    <link href="tpl/../css/prettyPhoto.css" rel="stylesheet">
    <link href="tpl/../css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="tpl/js/html5shiv.js"></script>
    <script src="tpl/js/respond.min.js"></script>
    <![endif]-->
    <!-- link rel="shortcut icon" href="images/ico/favicon.ico" -->
    <link rel="shortcut icon" href="tpl/images/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="tpl/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="tpl/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="tpl/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="tpl/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="."></a>
                </div>
                
            </div>
        </div>
    </header><!--/#header-->

    <section id="about">
        <div class="container">
            <div class="box entitybox">
               	<h3 class="entity">About <?php echo $entity;?></h3>
				<?php echo $content;?> 
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

    <script src="tpl/js/jquery.js"></script>
    <script src="tpl/js/bootstrap.min.js"></script>
    <script src="tpl/js/jquery.isotope.min.js"></script>
    <script src="tpl/js/jquery.prettyPhoto.js"></script>
    <script src="tpl/js/main.js"></script>
</body>
</html>