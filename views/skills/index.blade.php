<!doctype html>
<html>

<head>
    <title> SKILLS </title>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce19237d22.js" crossorigin="anonymous"></script>
    <meta name="viewport" content-type="width=device-width initial-scale=1">
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
                    <li><a href="/skills" class="listelem active"> SKILLS </a></li>
                    <li><a href="/resumes" class="listelem"> RESUMES </a></li>
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
                <h3>SKILLS</h3>
            </div>
        </h5>




        <div class=mainbox>

            <div class="left">
                <p class="skillheading"> MARKETABLE SKILLS</p>
                @foreach($skills as $skill)
                @if($skill['SkillType']=="marketable")


                <div class="skillBox">

                    <div class="skill">
                        <div class="skill_level" style="width: {{$skill['SkillPercent']}}%; background-color: #65AC68">
                            <i class="fas fa-desktop"></i>
                            <p style="float: left;
                            left: 5px;">{{$skill['SkillName']}}</p>
                        </div>
                        <p class="percentage">{{$skill['SkillPercent']}}%</p>
                    </div>
                </div>
                @endif
                @endforeach

                
             
            </div>



            <div class="right">
                <p class="skillheading">TRANSFERABLE SKILLS</p>

                @foreach($skills as $skill)
                @if($skill['SkillType']=="transferable")

                <div class="skillBox">

                    <div class="skill">
                        <div class="skill_level" style="width: {{$skill['SkillPercent']}}%; background-color: #65AC68">
                            <i class="fas fa-comments"></i>
                            <p style="float: left;
                            left: 5px;">{{$skill['SkillName']}}</p>
                        </div>
                        <p class="percentage">{{$skill['SkillPercent']}}%</p>
                    </div>
                </div>

                @endif
                @endforeach


        </div>



        <div class="bottom">
            <p class="skillheading" style="left: 80px;
    position: relative;">LANGUAGE SKILLS & KNOWLEDGE</p>
            <div class="progressbox">

                <div class="set-size charts-container" id="circleprogress">
                @foreach($skills as $skill)
                @if($skill['SkillType']=="language")
                <div class="pie-wrapper progress-95 style-2">
                        <span class="label">{{$skill['SkillPercent']}}<span class="smaller">%</span></span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                        <p class="langtext">{{$skill['SkillName']}}</p>
                    </div>

                    @endif
                @endforeach

                </div>
            </div>
        </div>
        <div class="bottomicon" onclick="location.href = '/homes';">
                <i class="fas fa-arrow-up"></i></i></div>
    </div>



    @if( auth()->check() )
    @if(auth()->user()->username == "admin")

    <div class="container_skills" style="margin-top: 500px;
    margin-left: 50%;">

<br />

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif

<a href="/skills/create">Create New </a>

<table class="table table-striped">

<thead>

<tr>

<th>ID</th>

<th>SkillName</th>

<th>SkillPercent</th>

<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($skills as $skill)

<tr>

<td>{{$skill['SkillID']}}</td>
<td>{{$skill['SkillName']}}</td>

<td>{{$skill['SkillPercent']}}</td>
<td>{{$skill['SkillType']}}</td>

<td><a href="{{action('SkillsController@edit', $skill['SkillID'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<form action="{{action('SkillsController@destroy', $skill['SkillID'])}}" method="post">

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














<!--<head>

<meta charset="utf-8">

<title>Index Page</title>

<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

<div class="container">

<br />

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif

<table class="table table-striped">

<thead>

<tr>

<th>ID</th>

<th>SkillName</th>

<th>SkillPercent</th>

<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($skills as $skill)

<tr>

<td>{{$skill['SkillID']}}</td>
<td>{{$skill['SkillName']}}</td>

<td>{{$skill['SkillPercent']}}</td>
<td>{{$skill['SkillType']}}</td>

<td><a href="{{action('SkillsController@edit', $skill['SkillID'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<form action="{{action('SkillsController@destroy', $skill['SkillID'])}}" method="post">

{{csrf_field()}}

<input name="_method" type="hidden" value="DELETE">

<button class="btn btn-danger" type="submit">Delete</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div> -->

