@extends('layout.layout')

@section('title', 'Profile')

@section('content')
@if(session()->has('error'))

<div class="alert alert-danger" role="alert">
{{session('error')}}
<button type="button" class="close" data-dismiss="alert">&times;
</div>
@endif


<div class="w-10 ml-5 mt-4">
    <div class="card text-center">
        <div class="text-center mt-4">
            <img src="./image/avatar/{{$userData[1]->image}}" alt="profile" width='500'>
            
        </div>
        
        <div style="padding-left:25%;">
        <form action="{{ route('profileUpload')}}" method="POST" enctype="multipart/form-data">
					<label>Select image to upload:</label>
				    <input type="file" name="file" id="file">
				    <input type="submit" value="Upload" name="submit">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
		</form>
        </div> 
        <div class="card-body">     
            <h4>Name:<span class="text-info">{{$userData[0][0]->name}}</span></h4>
            <h4>Username:<span class="text-info"> {{$userData[0][0]->username}}</span></h4>
            <h4>Email:<span class="text-info">{{$userData[0][0]->email}}</span></h4>
            <h4>Gender:<span class="text-info"> {{$userData[0][0]->gender}}</span></h4>
            <h4>Password:<span class="text-info">{{$userData[0][0]->password}}</span></h4>
            <button>edit profile Information</button>
        </div>
        
    </div>
</div>
@endsection('content')