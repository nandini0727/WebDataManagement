<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/portfolio.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce19237d22.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/portfolio_media.css" media="all" type="text/css"/>
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
                    <li><a href="/resumes" class="listelem active"> RESUMES </a></li>
                    <li><a href="/portfolios" class="listelem"> PORTFOLIO </a></li>
                    <li><a href="/hiremes" class="listelem"> HIRE ME </a></li>
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
                <h3>RESUMES</h3>
            </div>
		</h5>


		
        <div class="wrap">
		@if(count($resumes) > 0)

            <div class="box">
				<div class="border"></div>
                <p class="figure">{{$resumes[0]['Year']}}</p>
                <div class="line"> </div>
			</div>
		@endif

		@if(count($resumes) >1)
            <div class="box">
                <div class="border"></div>
                <p class="figure">{{$resumes[1]['Year']}}</p>
                <div class="line"> </div>
			</div>
			@endif

			@if(count($resumes) >2)
            <div class="box">
                <div class="border"></div>
                <p class="figure">{{$resumes[2]['Year']}}</p>
                <div class="line"> </div>
			</div>
			@endif
			@if(count($resumes) >0)
            <div class="box">
                <div class="border"></div>
			</div>
			@endif
        </div>

		@if(count($resumes) >0)
        <div class="block1">

            <div class="arrowbox">{{$resumes[0]['Company']}}</div>
            <div class="arrowbox2">{{$resumes[0]['Content']}}</div>
		</div>
		@endif
		@if(count($resumes) >2)
        <div class="block2">
            <div class="arrowbox3">{{$resumes[2]['Company']}}</div>
            <div class="arrowbox4">{{$resumes[2]['Content']}}</div>
		</div>
		@endif
		@if(count($resumes) >1)
        <div class="block3">
            <div class="arrowbox5">{{$resumes[1]['Company']}}</div>
            <div class="arrowbox6">{{$resumes[1]['Content']}}</div>
		</div>
		@endif




        <div class="bottomicon" onclick="location.href = '/homes'">
                <i class="fas fa-arrow-up"></i></i></div>

    </div>




    @if( auth()->check() )
    @if(auth()->user()->username == "admin")

    <div class="container_skills" style="
    margin-left: 40%;">

<br />

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif

<a href="/resumes/create">Create New </a>

<table class="table table-striped">

<thead>

<tr>

<th>ID</th>

<th>Year</th>
<th>Company</th>
<th>Content</th>


<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($resumes as $resume)


<tr>

<td>{{$resume['id']}}</td>
<td>{{$resume['Year']}}</td>

<td>{{$resume['Company']}}</td>
<td>{{$resume['Content']}}</td>

<td><a href="{{action('ResumeController@edit', $resume['id'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<form action="{{action('ResumeController@destroy', $resume['id'])}}" method="post">

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












