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

<form method="post" action="{{action('SkillsController@update', $skills->SkillID)}}">

{{csrf_field()}}

<input name="_method" type="hidden" value="PATCH">

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="skillname">Skill Name:</label>

<input type="text" class="form-control" name="skillname" value="{{$skills->SkillName}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="skillpercent">Skills Percent:</label>

<input type="text" class="form-control" name="skillpercent" value="{{$skills->SkillPercent}}">

</div>

</div>

</div>



<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4" style="margin-left:38px">

<label>Level</label>

<select name="skilltype">

<option value="marketable"

@if($skills->SkillType=="marketable") selected

@endif>Marketable Skills</option>

<option value="transferable"

@if($skills->SkillType=="transferable")

selected @endif>Transferable Skills</option>

<option value="language" @if($skills->SkillType=="language") selected 

@endif>Language Skills and Knowledge</option>

</select>

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