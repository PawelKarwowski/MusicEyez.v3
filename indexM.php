<?php 
session_start();

if(isset($_SESSION['logged-in'])&&($_SESSION['logged-in']==true))
	{
		header('Location: signedin.php');
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>MusicEYEZ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link href="addons/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="addons/bootstrap-3.2.0/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="animate.css">
<link rel="stylesheet" href="addons/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="style.css" rel="stylesheet">
<script src="addons/jquery/jquery-3.3.1.js"></script>
<script src="addons/jquery/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>			
</head>
<body>

<!-- Navigation -->


 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="img/TEST/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link active" href="indexM.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Wyszukiwarka</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
          </li>
      </ul>
      <ul class="navbar-nav">
         <li class="nav-link dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="margin-right: 200px; 
             color: #57B846">Login</a>
        <ul id="login-dp" class="dropdown-menu">
        <li>        
        <div class="col-md-12">
          Zaloguj się przez:
        <div class="social-buttons">
          <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
          <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
        </div>
        lub
        <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
        <div class="form-group">
           <label class="text" for="exampleInputlogin"></label>
           <input type="text" name="login" class="form-control" id="exampleInputllogin" placeholder="Nazwa użytkownika" required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Hasło</label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Hasło" required>
        <div class="help-block text-right"><a href="">Zapomniałeś hasło?</a></div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block">Zaloguj się</button>
        </div>
        <div class="checkbox">
          <label>
          <input type="checkbox"> Pozostań zalogowany
           </label>
        </div>
        <div class="row text-center info">
        	<?php 
				if(isset($_SESSION['error']))echo $_SESSION['error']; 
				?>
		</div>
        </form>
        </div>
        <div class="bottom text-center">
        Pierwszy raz tutaj? <a href="reg.php"><b style="color: #57B846">Dołącz!</b></a>
        </div>
         </div>
         <form class="form-inline my-2 my-lg-0">                  
      </form>
  </div>
</div>
</nav>



<!-- Carousel -->

 <div id="slides" class="carousel slide" data-ride="carousel"> 
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/TEST/carousel1.jpg">
		<div class="carousel-caption">
			<h1 class="dispaly-2">MusicEyez</h1>
			<h2>najlepsza darmowa wyszukiwarka Twojej ulubionej muzyki</h2>
			<button type="button" class="btn btn-outline-light btn-lg" style="padding: 15px 32px;">Wyszukaj</button>
			<button type="button" class="btn btn-success btn-lg" style="padding: 15px 32px;">Dołącz!</button>
		</div>	
	</div>
	<div class="carousel-item">
		<img src="img/TEST/carousel2.jpg">
	</div>	
	<div class="carousel-item">
		<img src="img/TEST/carousel3.jpg">
	</div>
</div>
</div>


<!--- Jumbotron -->
<div class="container-fluid">
<div class="row jmbcolor">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10 hero_heading text-center">
		<p>Powiedz, powiedz czemu Świat twój milczy cały blady od wzruszeń Niczym słońce zaćmione przez księżyc Czekające na chwile poruszeń. Powiedz, czemu pragniesz Dojrzeć w oknach świata część odległą Niczym drzewo więdnące bez skargi Czekające na deszcze z nadzieją.</p>
	</div>
	</div>
</div>





<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>
<hr class="my-4"> 
<!--- Cards -->
<div class="container-fluid padding align="center" style="color: white; font-family: 'Poppins', sans-serif;">
<div class="row text-center padding">
	<div class="col-lg-12">
		<h2>Poznaj twórców strony</h2>
	</div>
</div>	
</div>




<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4 center-block">
			<div class="card">
				<img class="card-img-top" src="img/card1.jpg">
				<div class="card-body cardbgcolor">
					<h4 class="card-title text-center"><b>Mikołaj Życzyński</b></h4>
					<p class="card-text">Był renesansowym polihistorem, poza astronomią zajmował się również matematyką, prawem, ekonomią, strategią wojskową, astrologią, był także lekarzem oraz tłumaczem.</p>
					<a href="#" class="btn btn-outline-secondary btn-lg" ><i class="fa fa-at"> Send e-mail</i></a>
				</div>	
			</div>
		</div>
		<div class="col-md-4 center-block">
			<div class="card">
				<img class="card-img-top" src="img/card2.jpg">
				<div class="card-body cardbgcolor">
					<h4 class="card-title text-center"><b>Paweł Karwowski</b></h4>
					<p class="card-text">Polski menedżer, bankowiec i polityk. Od 2017 prezes Rady Ministrów. Prezes zarządu Banku Zachodniego WBK w latach 2007–2015, wiceprezes Rady Ministrów, minister rozwoju, a następnie minister rozwoju i finansów.</p>
					<a href="#" class="btn btn-outline-secondary btn-lg"><i class="fa fa-at"> Send e-mail</i></a>
				</div>	
			</div>
		</div>		
	</div>	
</div> 
<!--- Connect -->
<div class="container-fluid padding align="center" style="color: white; font-family: 'Poppins', sans-serif;">
<div class="row text-center padding">
	<div class="col-lg-12">
		<h2>Kontakt</h2>
	</div>
	<div class="col-12 social padding">
		<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
		<a href="twitter.com"><i class="fa fa-twitter"></i></a>
		<a href="instagram.com"><i class="fa fa-instagram"></i></a>
		<a href="youtube.com"><i class="fa fa-youtube"></i></a>	
	</div>	
</div>	
</div>

<!--- Footer -->
<footer style="font-size: 15px;">
	<div class="container-fluid">
	<div class="row text-center">
		<hr class="light-100">
		<div class="col-md-4">
			
			<h5>Kontakt</h5>
			<hr class="light">
			<ul>
				<li>tel: 7981568</li>				
				<li>e-mail: xxx@gmail.com</li>
				<li>Miasto: Gdańsk</li>
			</ul>
		</div>
		<div class="col-md-4">
			
			<h5>Godziny otwarcia</h5>
			<hr class="light">
			<p>Poniedziałek</p>
			<p>Wtorek</p>
			<p>Środa</p>
			<p>Czwartek</p> 
			<p>Piątek</p> 
		</div>
		<div class="col-md-4">
			
			<h5>Coś tam</h5>
			<hr class="light">
			<p>Jeden</p>
			<p>Dwa</p>
			<p>Trzy</p>
		</div>
		<div class="col-12">
			<hr class="light-100">
			<h5>&copy; musiceyez.com</h5>
	</div>
	</div>	
</footer>

</body>
</html>