@extends('layouts.app')

@section('content')
							<!-- One -->
                            <section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Nominate<br />
								</h2>
								<p>Please fill all the fields !</p>
							</header>
						</div>
                        @if (session('AddBooking'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddBooking') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
					</section>
					<!-- Two -->
					<section id="two" class="wrapper alt style2">

                    <br>
					<form action="{{ route('demande.store') }}" method="post" enctype="multipart/form-data">
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
    <option value="0">Male</option>
    <option value="1">Female</option>
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