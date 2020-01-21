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

<form enctype="multipart/form-data" method="post" action="{{action('ReferencesController@update', $references->id)}}">
    

{{csrf_field()}}

<input name="_method" type="hidden" value="PATCH">

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="rname">Ref Name:</label>

<input type="text" class="form-control" name="rname" value="{{$references->RName}}">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="rrole">Ref Role:</label>

<input type="text" class="form-control" name="rrole" value="{{$references->RRole}}">

</div>

</div>


<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="rcontent">Ref Content:</label>

<textarea class="form-control" name="rcontent">{{$references->RContent}}</textarea>

</div>

</div>


<div class="row" >
<div class="col-md-4">
    <div class="form-group col-md-4" style="margin-left:115%">
        <label>Ref Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="rimage" name="rimage">
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