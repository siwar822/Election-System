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
					<section id="two" class="wrapper alt style2">
                    <script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
  </script>
                    <br>
					<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
					@csrf
             <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">Name</label>
                    <input type="text"  placeholder="Enter your name" class="form-control" name="name" required>
					@error('name')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Birth date</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="Enter your birth date" >
                      @error('birth_date')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
			</div>
			<br>
			<div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">C.i.n</label>
                    <input type="text"  placeholder="Enter your C.i.n" class="form-control" name="cin" required>
					@error('cin')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Sexe</label>
				<select class="form-control" name="sexe">
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
			
                </div>
            </div>
			</div>
			<div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">Email</label>
                    <input type="text"  placeholder="Enter your email" class="form-control" name="email" required>
					@error('email')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Photo</label>
                <input type="file" name="photo" value="{{ old('photo') }}" id="phone" class="form-control" placeholder="Enter your phone" >
                      @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
			</div>
            <br>
            <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">Department</label>
                    <input type="text"  placeholder="Enter your department"value="{{ old('department') }}" class="form-control" name="department" required>
					@error('department')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Class</label>
                <input type="text" name="class" value="{{ old('class') }}" id="class" class="form-control" placeholder="Enter your class" >
                      @error('class')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
			</div>
            <br>
        

            <div class="col-12">
                <div class="form-group ">
                    <label for="postal-code" class=" form-control-label">Description</label>
                    <input type="text" id="postal-code" name="description" class="form-control" style="height: 150px" name="description" required>
					@error('description')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            
            


       
     
            
            
   

        </div>
    
    <div style="text-align: center;">
        <input type="submit" value="Submit" class="btn btn-block btn-outline-primary">
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