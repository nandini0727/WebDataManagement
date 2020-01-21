<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/portfolio.css">
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
                    <li><a href="/skills" class="listelem"> SKILLS </a></li>
                    <li><a href="/resumes" class="listelem"> RESUMES </a></li>
                    <li><a href="/portfolios" class="listelem"> PORTFOLIO </a></li>
                    <li><a href="/hiremes" class="listelem"> HIRE ME </a></li>
                    <li><a href="/references" class="listelem"> REFERENCES </a></li>
                    <li><a href="/blogs" class="listelem"> BLOG </a></li>
                    <li><a href="/sendemail" class="listelem active"> CONTACT ME </a></li>
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
                <h3>ABOUT ME</h3>
            </div>
        </h5>

        <div class="row_about">
            <div class="column1">
                <div id="profilepic"><img style="width:80%; height:60%;" src="assets/{{$aboutmes[0]['ProfileImage']}}" />
                    <p id="roletext">{{$aboutmes[0]['Role']}}</p>
                </div>


            </div>
            <div class="column2">
                <div class="column2a">
                    <div class="icon1">
                        <i class="fas fa-user"> </i></div>

                    <div id="name">
                        <p> Name </p>
                        <p>{{$aboutmes[0]['Name']}}<p>
                    </div>

                    <div class="icon2">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div id="phone">
                        <p> Phone </p>
                        <p>{{$aboutmes[0]['Phone']}}<p>
                    </div>


                    <div class="icon3">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div id="address">
                        <p> Address </p>
                        <p>{{$aboutmes[0]['Address']}}<p>
                    </div>

                </div>






                <div class="column2b">
                    <div class="icon4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div id="email">
                        <p> Email </p>
                        <p>{{$aboutmes[0]['Email']}}<p>
                    </div>

                    <div class="icon5">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div id="dob">
                        <p> Date Of Birthday </p>
                        <p>{{$aboutmes[0]['DOB']}}<p>
                    </div>
                    <div class="icon6">
                        <i class="fas fa-flag"></i>
                    </div>
                    <div id="nat">
                        <p> Nationality </p>
                        <p>{{$aboutmes[0]['Nationality']}}<p>
                    </div>

                </div>
            </div>
        </div>

        <div class="social">
            <div class="socialtext">Social Profiles</div>



            <div class="sicon1">
                <i class="fab fa-facebook-f"></i></div>

            <div class="sicon2">
                <i class="fab fa-twitter"></i></div>

            <div class="sicon3">
                <i class="fab fa-linkedin-in"></i></div>


            <div class="sicon4">
                <i class="fab fa-pinterest-p"></i></div>



            <div class="sicon5">
                <i class="fab fa-google-plus-g"></i></div>






        </div>

        <div class="details">
            <p>Engineering as a discipline has always fascinated me. 
                Right from nano particles in a detergent to engines flying the jumbo jets, 
                there is a little bit of engineering in everybody life. 
                Currently pursuing Masters in Computer Science with a focus on <strong>Artificial Intelligence and Data Analytics.</strong> 
                Have <strong>3 years experience</strong> as a Full Stack Developer.
                <br><br>
                Also in systems programming in web environment managing languages such as Html, Css, Javascript and Framework like Bootstrap, 
                Code Igniter and Laravel
                <br><br>
                <strong>My Objectives</strong> are increasing my knowledge in computer science fields and new technologies
                especially Artificial Intelligence and Data Bases field. Always looking forward to learn new technologies and
                be a part of a huge change in the world.
            </p>
        </div>

        <div class="signature">
            <p id="signaturetext">
                Yours Sincerely,
            </p>
            <img style="width: 40%" src="assets/{{$aboutmes[0]['Signature']}}" />
        </div>

        <div class="bottomicon">
                <i class="fas fa-arrow-up"></i></i></div>
        

    </div>







    <div class="container_skills" style="margin-top: 560px;
    margin-left: 30%;">

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

<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th>Email</th>
<th>DOB</th>
<th>Nationality</th>
<th>Role</th>
<th>Content</th>
<th>Profile Image</th>
<th>Signature Image</th>

<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($aboutmes as $aboutme)


<tr>

<td>{{$aboutme['id']}}</td>
<td>{{$aboutme['Name']}}</td>

<td>{{$aboutme['Phone']}}</td>
<td>{{$aboutme['Address']}}</td>

<td>{{$aboutme['Email']}}</td>
<td>{{$aboutme['DOB']}}</td>
<td>{{$aboutme['Nationality']}}</td>
<td>{{$aboutme['Role']}}</td>
<td>{{$aboutme['Content']}}</td>
<td>{{$aboutme['ProfileImage']}}</td>
<td>{{$aboutme['Signature']}}</td>

<td><a href="{{action('AboutMeController@edit', $aboutme['id'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<!-- <form action="{{action('AboutMeController@destroy', $aboutme['id'])}}" method="post">

{{csrf_field()}}

<input name="_method" type="hidden" value="DELETE">

<button class="btn btn-danger" type="submit">Delete</button>

</form> -->

</td>

</tr>

@endforeach

</tbody>

</table>

</div>







</body>

</html>












