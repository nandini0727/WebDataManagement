<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">

<title>Laravel 5 CRUD Tutorial With Example From Scratch </title>

<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

<div class="container">

<h2>Create A Form</h2><br

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

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif

<form enctype="multipart/form-data" method="post" action="{{url('hiremes')}}">

{{csrf_field()}}

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">

<label for="hcost">Hire Cost:</label>

<input type="text" class="form-control" name="hcost">

</div>

</div>

<div class="row">

<div class="col-md-4"></div>

<div class="form-group col-md-4">
<label for="hcontent">Hire Content:</label>

<textarea type="text" class="form-control" name="hcontent"></textarea>

</div>

</div>

</div>

<div class="row" >
<div class="col-md-4">
    <div class="form-group col-md-4" style="margin-left:115%">
        <label>HireMe Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="himage" name="himage">
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

<button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>

</div>

</div>

</form>

</div>

</body>

</html>