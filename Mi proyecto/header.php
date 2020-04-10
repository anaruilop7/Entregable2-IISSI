<div class="title-block">
  <h1 id="title"> scatto <i class="fa fa-camera-retro fa-1g" aria-hidden="true"></i></h1>
  <h3 id="subtitle">it's just a click away!</h3>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href=""><i class="fa fa-camera-retro" aria-hidden="true"></i>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuario.php">Profile</a>
        </li>
        <li class="nav-item">
          <ul class="nav navbar-nav navbar-right ml-auto">			
				  <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				  <ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Sign in with your social media account</p>
							<div class="form-group social-btn clearfix">
								<a href=https://es-es.facebook.com/ class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="https://twitter.com/home" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
							</div>
							<div class="or-seperator"><b>or</b></div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Login">
							<div class="form-footer">
								<a href="#">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
      </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDesplegableId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trending
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="usuarios_trending.php">Trending users</a>
            <a class="dropdown-item" href="trending-photos.php">Trending photos</a>
            <a class="dropdown-item" href="tags_trending.php">Trending tags</a>
          </div>
        </li>
        <form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>

    </div>
  </nav>
</div>

<hr>
