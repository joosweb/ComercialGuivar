<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comercial Guivar</title>
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">    	
       	  $(document).ready(function() {
		  $('li.active').removeClass('active');
		  $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 
		});  
    </script>
</head>
<body>
    <div class="container-fluid">
		<div class="row">
			<div class="info">
				<div class="text">
				<i class="fa fa-map-marker" aria-hidden="true"></i> Manuel A. Matta 1116, Coelemu VIII Región Bio Bio, Chile - <i class="fa fa-phone-square"></i> <b>+56-42-511267</b>
				</div>
			</div>
			<div class="logo">
				<div class="imgLogo">
					<img src="http://comercialguivar.cl/imagenes/encabezado.gif" alt="">
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse" role="navigation">
 	 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li class="divider-vertical"><a href="/">HOME</a></li>
        <li class="divider-vertical"><a href="/empresa">EMPRESA</a></li>
        <li class="divider-vertical"><a href="/quienes-somos">QUIENES SOMOS</a></li>
        <li class="divider-vertical"><a href="/productos">PRODUCTOS</a></li>
        <li class="divider-vertical"><a href="/productos">UBICACIÓN</a></li>
        <li class="divider-vertical"><a href="/sustentabilidad">SUSTENTABILIDAD</a></li>
        <li class="divider-vertical"><a href="/contactenos">CONTACTENOS</a></li>
        <li class="social pull-right"><a href="#"></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@yield('content')
<footer id="footer">
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-4">
					<span class="footer_copy_text">Copyright &copy; 2017 Powered By <a href="#">Comercial Guivar</a> - All Rights Reserved</span>
				</div>
				<div class="col-md-8 clearfix">
					<ul class="footer_menu clearfix">
						<li><a href="#home_section"><span>Home</span></a></li>
						<li>/</li>
						<li><a href="#about_section"><span>Empresa</span></a></li>
						<li>/</li>
						<li><a href="#team_section"><span>Quienes Somos</span></a></li>
						<li>/</li>
						<li><a href="#services_section"><span>Productos</span></a></li>
						<li>/</li>
						<li><a href="#contact_section"><span>Sustentabilidad</span></a></li>
						<li>/</li>
						<li><a href="#contact_section"><span>Contactenos</span></a></li>

					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>