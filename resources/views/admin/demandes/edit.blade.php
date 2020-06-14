
@extends('layouts.navbar')
@section('title')
Requests
@endsection
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
@section('content')
<div>
    <fieldset>

        <legend>Edit The request</legend>

        <form action="{{ route('demande.update', $demande->id) }}" method="post"enctype="multipart/form-data">

            @csrf

            @method('PATCH')

             <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">Name</label>
                    <input type="text"  placeholder="Enter your name" class="form-control" name="name"value="{{ old('name') ?? $demande->name}}" >
					@error('name')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Birth date</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date') ?? $demande->birth_date->format('Y-m-d') }}" placeholder="Enter your birth date" >
                      @error('birth_date')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
			</div>
			<br>
			<div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">C.i.n</label>
                    <input type="text"  placeholder="Enter your C.i.n" value="{{ old('cin') ?? $demande->cin}}" class="form-control" name="cin" >
					@error('cin')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Sexe</label>
				<select class="form-control" name="sexe" value="{{ old('sexe') ?? $demande->sexe}}">
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
			<br>
                </div>
            </div>
			</div>
            <div class="col-12">
                <div class="form-group ">
                    <label class=" form-control-label">Email</label>
                    <input type="text"  placeholder="Enter your email" class="form-control" value="{{ old('email') ?? $demande->email}}" name="email" >
					@error('email')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
              
            </div>
	
            <br>
            <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <label class=" form-control-label">Department</label>
                    <input type="text"  placeholder="Enter your department"value="{{ old('department') ?? $demande->department }}" class="form-control" name="department">
					@error('department')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-6">
				<label class=" form-control-label">Class</label>
                <input type="text" name="class"  id="class" class="form-control"value="{{ old('class') ?? $demande->class}}" placeholder="Enter your class" >
                      @error('class')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
			</div>
            <br>
        

            <div class="col-12">
                <div class="form-group ">
                    <label for="postal-code" class=" form-control-label">Description</label>
                    <input type="text" id="postal-code" name="description" class="form-control"value="{{ old('description') ?? $demande->description}}" style="height: 150px" name="description" >
					@error('description')<div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            
            


       
     
            <div style="text-align: center;">
        <input type="submit" value="Submit" class="btn btn-block btn-outline-primary">
    </div>
            
   

  
    <br>
</div>

</form> 

    </fieldset>

@endsection