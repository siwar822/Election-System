<!DOCTYPE HTML>

<html>
	<head>
	<title>landing</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/breakpoints.min.js') }}" defer></script>
    <script src="{{ asset('js/browser.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.scrolly.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/util.js') }}" defer></script>
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html" id="esm">junior entreprise</a></h1>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Election System</h2>
							<p>Welcome To our Election System<br />
							<br />
							created by karim joudi's team.</p>
							<ul class="actions special">
								<li><a href="login/main.html" class="button primary">Log In</a></li>
							</ul>
							<a href="">you don't have an account ?</a>
						</div>
						<a href="#one" class="more scrolly">nominate</a>
					</section>
					<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Nominate<br />
								</h2>
								<p>Please fill all the fields !</p>
							</header>
						</div>
					</section>
					<!-- Two -->
					<section id="two" class="wrapper alt style2"><br>
        <form >
             <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">Name</label>
                    <input type="text"  placeholder="Enter your name" class="form-control" name="name" required>
                </div>
                <div class="col-6">
                    <label  class=" form-control-label">Family Name</label>
                    <input type="text"  placeholder="Enter family's name" class="form-control"  required>
                </div>
            </div>
            <br>
        

            <div class="col-12">
                <div class="form-group ">
                    <label for="postal-code" class=" form-control-label">Description</label>
                    <input type="text" id="postal-code"  class="form-control" style="height: 150px" name="description" required>
                </div>
            </div>
            
            


       
     
            
            
   

        </div>
    
    <div style="text-align: center;">
        <input type="submit" value="Submit" class="btn btn-default">
    </div>
    <br>
</div>

</form> 








							
							
						</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li>powered by karim.</li>
						</ul>
		
					</footer>

			</div>

	</body>
</html>