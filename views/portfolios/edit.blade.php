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

<form method="post" enctype="multipart/form-data" action="{{action('PortfolioController@update', $portfolios->id)}}">

{{csrf_field()}}

<input name="_method" type="hidden" value="PATCH">




<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4" style="margin-left:38px">

<label>Portfolio Type:</label>

<select name="ptype">

<option value="website"

@if($portfolios->PType=="website") selected

@endif>Website</option>

<option value="apps"

@if($portfolios->PType=="apps")

selected @endif>Apps</option>

<option value="design" @if($portfolios->PType=="design") selected 

@endif>Design</option>
<option value="photography"

@if($portfolios->PType=="photography")

selected @endif>Photography</option>

</select>

</div>

</div>


<div class="row" >
<div class="col-md-4">
    <div class="form-group col-md-4" style="margin-left:115%">
        <label>Portfolio Image</label>
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