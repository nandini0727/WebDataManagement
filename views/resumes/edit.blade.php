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

<form  enctype="multipart/form-data" method="post" action="{{action('ResumeController@update', $resumes->id)}}">

{{csrf_field()}}

<input name="_method" type="hidden" value="PATCH">

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="year">Year:</label>

<input type="text" class="form-control" name="year" value="{{$resumes->Year}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="company">Company:</label>

<input type="text" class="form-control" name="company" value="{{$resumes->Company}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="content">Content:</label>

<textarea class="form-control" name="content">{{$resumes->Content}}</textarea>

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