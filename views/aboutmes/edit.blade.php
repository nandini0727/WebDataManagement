<!-- edit.blade.php -->






<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Laravel 5 CRUD Tutorial With Example From Scratch </title>

<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

<div class="container">

<h2>Edit A Skill</h2><br

/>

@if ($errors->any())

<div class="alert alert-danger">

<ul>
@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div><br />


@endif

<form  enctype="multipart/form-data" method="post" action="{{action('AboutMeController@update', $aboutmes->id)}}">

{{csrf_field()}}

<input name="_method" type="hidden" value="PATCH">

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="name">Name:</label>

<input type="text" class="form-control" name="name" value="{{$aboutmes->Name}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="phone">Phone:</label>

<input type="text" class="form-control" name="phone" value="{{$aboutmes->Phone}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="address">Address:</label>

<input type="text" class="form-control" name="address" value="{{$aboutmes->Address}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="email">Email:</label>

<input type="text" class="form-control" name="email" value="{{$aboutmes->Email}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="dob">DOB:</label>

<input type="text" class="form-control" name="dob" value="{{$aboutmes->DOB}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="nationality">Nationality:</label>

<input type="text" class="form-control" name="nationality" value="{{$aboutmes->Nationality}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="role">Role:</label>

<input type="text" class="form-control" name="role" value="{{$aboutmes->Role}}">

</div>

</div>
<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="skype">Skype:</label>

<input type="text" class="form-control" name="skype" value="{{$aboutmes->Skype}}">

</div>

</div>
<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="website">Website:</label>

<input type="text" class="form-control" name="website" value="{{$aboutmes->Website}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="content">Content:</label>

<textarea class="form-control" name="content"> {{$aboutmes->Content}}</textarea>

</div>

</div>


<div class="row" >
<div class="col-md-4">
    <div class="form-group col-md-4" style="margin-left:115%">
        <label>Profile Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="pimage" name="pimage">
                </span>
            </span>
            <!-- <input type="text" class="form-control" readonly> -->
        </div>
        <img id='img-upload'/>
    </div>
</div>
</div>


<div class="row" >
<div class="col-md-4">
    <div class="form-group col-md-4" style="margin-left:115%">
        <label>Signature Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="signature" name="signature">
                </span>
            </span>
            <!-- <input type="text" class="form-control" readonly> -->
        </div>
        <img id='img-upload'/>
    </div>
</div>
</div>

</div>



<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>

</div>

</div>

</form>

</div>

</body>

</html>