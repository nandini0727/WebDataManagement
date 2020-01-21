<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo asset('css/portfolio.css')?>">
	<link rel="stylesheet" href="css/portfolio_media.css" media="all" type="text/css"/>
	<script src="https://kit.fontawesome.com/ce19237d22.js" crossorigin="anonymous"></script>
    <meta name="viewport" content-type="width=device-width initial-scale=1">
</head>

<body>
	<div class="wrapper">
		<div class="wrapper1">
			<div class="navBar">

				<div class="logo"> <img src="assets/logo.png"></div>


				<p>
						Utpala K
					</p>
				<ul>
				<li><a href="/homes" class="listelem"> HOME</a></li>
                    <li><a href="/aboutmes" class="listelem"> ABOUT </a></li>
                    <li><a href="/skills" class="listelem"> SKILLS </a></li>
                    <li><a href="/resumes" class="listelem"> RESUMES </a></li>
                    <li><a href="/portfolios" class="listelem"> PORTFOLIO </a></li>
                    <li><a href="/hiremes" class="listelem active"> HIRE ME </a></li>
                    <li><a href="/references" class="listelem"> REFERENCES </a></li>
                    <li><a href="/blogs" class="listelem"> BLOG </a></li>
                    <li><a href="/sendemail" class="listelem"> CONTACT ME </a></li>
                    <li><a href="/login" class="listelem"> LOG IN </a></li>
                    <li><a href="/register" class="listelem"> SIGN UP </a></li>
					<li>
						<footer>
							<div id="p_footer"><i>&copy;
									UtpalaApps ALL RIGHTS<br> RESERVED BY<br><em style="color:blue">Utpala</em></i>
							</div>
						</footer>
					</li>
				</ul>



			</div>


		</div>

		<h5>
			<div id="rectangle">
				<h3>HIRE ME</h3>
			</div>
		</h5>
		

        <?php $i=0; $len=count($hiremes); $iter= $len%3 ==0 ? $len/3: round($len/3)+1; echo $iter;?>
        
        @for($j=0;$j<$iter;$j++)



		<div class="row">
        @if($i < $len)
			<div class="column" style="margin-left: 25%;">
				<div id="cart4">
					<img src="assets/{{$hiremes[$i]['HImage']}}">
				</div>
				<div class="caption1">
					<p style="font-size: 20px">${{$hiremes[$i]['HCost']}}</p>
					<p style="line-height:4em;white-space: pre-wrap;" class="editable" id="hminfo1">{{$hiremes[$i]['HContent']}}</p>
					<hr>
					<button class="button" onclick="location.href = '/sendemail'">Contact Us</button>
				</div>
            </div>
            @endif
            @if($i+1 < $len)
			<div class="column">
				<div id="cart5">
					<img src="assets/{{$hiremes[$i+1]['HImage']}}">
				</div>
				<div class="caption2">
					<p style="font-size: 20px">${{$hiremes[$i+1]['HCost']}}</p>
					<p style="line-height:4em;white-space: pre-wrap;" class="editable" id="hminfo1">{{$hiremes[$i+1]['HContent']}}</p>
					<hr>
					<button class="button" onclick="location.href = '/sendemail'">Contact Us</button>
				</div>
            </div>
            @endif
            @if($i+2 < $len)
			<div class="column">
				<div id="cart6">
					<img src="assets/{{$hiremes[$i+2]['HImage']}}"> </div>
				<div class="caption3">
					<p style="font-size: 20px">${{$hiremes[$i+2]['HCost']}}</p>
					<p style="line-height:4em;white-space: pre-wrap;" class="editable" id="hminfo1">{{$hiremes[$i+2]['HContent']}}</p>
				</div>
				<hr>
				<button class="button" onclick="location.href = '/sendemail'">Contact Us</button>
            </div>
            @endif
        </div>
        <?php $i=$i+3; ?>
        @endfor
		<div class="bottomicon" onclick="location.href = '/homes'"
>
                <i class="fas fa-arrow-up"></i></i></div>
	</div>




	@if( auth()->check() )
    @if(auth()->user()->username == "admin")

    <div class="container_skills" style="
    margin-left: 30%;">

<br />

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif
<a href="/hiremes/create">Create New </a>

<table class="table table-striped">

<thead>

<tr>

<th>ID</th>

<th>Cost</th>

<th>Content</th>
<th>Image</th>

<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($hiremes as $hireme)


<tr>

<td>{{$hireme['id']}}</td>
<td>{{$hireme['HCost']}}</td>

<td>{{$hireme['HContent']}}</td>
<td>{{$hireme['HImage']}}</td>

<td><a href="{{action('HiremeController@edit', $hireme['id'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<form action="{{action('HiremeController@destroy', $hireme['id'])}}" method="post">

{{csrf_field()}}

<input name="_method" type="hidden" value="DELETE">

<button class="btn btn-danger" type="submit">Delete</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>



@endif
@endif



</body>

</html>












