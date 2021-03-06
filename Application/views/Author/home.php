
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/theme.css">

    <script type="text/javascript" src="<?php echo base_url('Assets/js/theme.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('Assets/js/app.js');?>"></script>

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/Bootstrap/js/bootstrap.min.js')?>">
    <link rel="stylesheet" href="<?php echo base_url('Assets/Bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/app.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/theme.css');?>">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="index.html"><img src="<?php echo base_url('assets/img/logo.png'); ?>"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	<ul class="navbar-nav mr-auto align-items-center">
    		<form class="bd-search hidden-sm-down">
    			<input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search..." autocomplete="off">
    			<div class="dropdown-menu bd-search-results" id="search-results">
    			</div>
    		</form>
    	</ul>
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
    		<a class="nav-link active" href="<?php echo site_url('Pinterest/Home'); ?>">Home</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="<?php echo site_url('Pinterest/Profile'); ?>"><img class="rounded-circle mr-2" src="<?php echo base_url('assets/img/av.png'); ?>" width="30"><span class="align-middle">Author</span></a>
    		</li>
    		<li class="nav-item dropdown">
    		<a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		<svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
    		</a>
    		<div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
    			<h4 class="dropdown-header display-4"><br/></h4>
    			<div class="dropdown-divider">
    			</div>
    			<span class="dropdown-item"><a href="<?php echo site_url('UserController/Logout'); ?>" class="btn btn-primary d-block"></i>Logout</a></span>
    		</div>
    		</li>
    	</ul>
    </div>
    </nav>
    <main role="main">


    <section class="mt-4 mb-5">
    <div class="container mb-4">
    	<h1 class="font-weight-bold title">Explore</h1>
    	<div class="row">
    		<nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
    		<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarsExplore">
    			<ul class="navbar-nav">
    				<li class="nav-item">
    				<a class="nav-link" href="#">Lifestyle</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="#">Food</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="#">Home</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="#">Travel</a>
    				</li>
    				<li class="nav-item dropdown">
    				<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
    				<div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
    					<a class="dropdown-item" href="#">Astronomy</a>
    					<a class="dropdown-item" href="#">Nature</a>
    					<a class="dropdown-item" href="#">Cooking</a>
    					<a class="dropdown-item" href="#">Fashion</a>
    					<a class="dropdown-item" href="#">Wellness</a>
    					<a class="dropdown-item" href="#">Dieting</a>
    				</div>
    				</li>
    			</ul>
    		</div>
    		</nav>
    	</div>
    </div>
    <!-- index -->
    		</div>
    	</div>
    </div>
    </section>

    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/theme.js"></script>

    <footer class="footer pt-5 pb-5 text-center">

    <div class="container">

          <div class="socials-media">

            <ul class="list-unstyled">
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-facebook"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-twitter"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-instagram"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-google-plus"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-behance"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-dribbble"></i></a></li>
            </ul>

          </div>


          <p>©  <span class="credits font-weight-bold">
            <a target="_blank" class="text-dark" href="https://www.pinterest.com/"><u>Pinterest</u> by WEBPRO</a>
          </span>
          </p>


        </div>

    </footer>
</body>

</html>
