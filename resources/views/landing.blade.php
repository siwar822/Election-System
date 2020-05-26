@extends('layouts.app')
@section('content')
<h2 >Election System</h2>
<p>Welcome To our Election System<br />
							<br />
							created by karim joudi's team.</p>
							<ul class="actions special">
								<li><a href="{{ route('login') }}" class="button primary">Log In</a></li>
							</ul>
							<a href="{{ route('register') }}">you don't have an account ?</a>
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








							
				
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li>powered by karim.</li>
						</ul>
		
					</footer>

@endsection