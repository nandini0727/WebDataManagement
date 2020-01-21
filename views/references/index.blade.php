<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
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
                    <li><a href="/references" class="listelem active"> REFERENCES </a></li>
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
                <h3>REFERENCES</h3>
            </div>
        </h5>

        <?php $i=0; $len=count($references); $iter= $len%3 ==0 ? $len/3: round($len/3)+1; echo $iter;?>
        
        @for($j=0;$j<$iter;$j++)

        <div class="rowref">
        @if($i < $len)
            <div class="columnref">
                <fieldset>
                    <legend align="center"><img class="refimg" src="assets/{{$references[$i]['RImage']}}" /></legend>
                    <div class="reftext">
                        <p><strong>{{$references[$i]['RName']}}</strong></p>
                        <p>{{$references[$i]['RRole']}}</p>
                        <p class="desc" style="line-height: 1.2em;">{{$references[$i]['RContent']}} </p>
                    </div>

                </fieldset>
            </div>
            @endif
            @if($i+1 < $len)
            <div class="columnref">
                <fieldset>
                    <legend align="center"><img class="refimg" src="assets/{{$references[$i+1]['RImage']}}" /></legend>
                    <div class="reftext">
                        <p><strong>{{$references[$i+1]['RName']}}</strong></p>
                        <p>{{$references[$i+1]['RRole']}}</p>
                        <p class="desc" style="line-height: 1.2em;">{{$references[$i+1]['RContent']}} </p>
                    </div>
                </fieldset>
            </div>
            @endif
            @if($i+2 < $len)
            <div class="columnref">
                <fieldset>
                    <legend align="center"><img class="refimg" src="assets/{{$references[$i+2]['RImage']}}" /></legend>
                    <div class="reftext">
                        <p><strong>{{$references[$i+2]['RName']}}</strong></p>
                        <p>{{$references[$i+2]['RRole']}}</p>
                        <p class="desc" style="line-height: 1.2em;">{{$references[$i+2]['RContent']}} </p>
                    </div>


                </fieldset>

            </div>
            @endif
        </div>

        <?php $i=$i+3; ?>
        @endfor


       
        <div class="bottomicon" onclick="location.href = '/homes'">
                <i class="fas fa-arrow-up"></i></i></div>
    </div>




    @if( auth()->check() )
    @if(auth()->user()->username == "admin")

    <div class="container_skills" style="
    margin-left: 30%; ">

<br />

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif

<a href="/references/create">Create New </a>

<table class="table table-striped" style="margin-right:10%;">

<thead>

<tr>

<!-- <th>ID</th> -->

<th>Ref Name</th>

<th>Ref Role</th>
<th>Ref Content</th>
<th>Ref Image</th>

<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($references as $reference)

<tr>

<!-- <td>{{$reference['id']}}</td> -->
<td>{{$reference['RName']}}</td>
<td>{{$reference['RRole']}}</td>
<td>{{$reference['RContent']}}</td>
<td>{{$reference['RImage']}}</td>

<td><a href="{{action('ReferencesController@edit', $reference['id'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<form action="{{action('ReferencesController@destroy', $reference['id'])}}" method="post">

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















