
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/portfolio.css" type="text/css">
    <link rel="stylesheet" href="css/portfolio_media.css" media="all" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/ce19237d22.js" crossorigin="anonymous"></script>
    <script type="text/javascript">

function openMenu(menu,menuName)
{
var i,row,tablinks;
row=document.getElementsByClassName("rowport");
for (i=0;i<row.length;i++){
row[i].style.display="none";
}
tablinks = document.getElementsByClassName("tablinks");
 for (i = 0; i < tablinks.length; i++) {
   tablinks[i].className = tablinks[i].className.replace(" active", "");
 }
 document.getElementById(menuName).style.display = "block";
 menu.currentTarget.className += " active";
}


</script>
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
                    <li><a href="/portfolios" class="listelem active"> PORTFOLIO </a></li>
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
                <h3>PORTFOLIO</h3>
            </div>
        </h5>



        <div class="tab">
            <button class="tablinks" onclick="openMenu(event, 'All')">All</button>
            <button class="tablinks" onclick="openMenu(event, 'Website')">Websites</button>
            <button class="tablinks" onclick="openMenu(event, 'Apps')">Apps</button>
            <button class="tablinks" onclick="openMenu(event, 'Design')">Design</button>
            <button class="tablinks" onclick="openMenu(event, 'Photography')">Photography</button>
        </div>


        <?php $i = 0;
$len = count($portfolios);
$iter = $len % 3 == 0 ? $len / 3 : round($len / 3) + 1;
?>

        <div id="All" class="rowport">
@for($j=0;$j<$iter;$j++)
<div class="row_portfolio" >
        @if($i < $len)
        <div class="column_portfolio" style="margin-left: 30%;">
                <div class="column1_port">
                    <div id="img5">
                        <img src="assets/{{$portfolios[$i]['PImage']}}" style="width:80%;height:60%;"> </div>


                </div>
            </div>
            @endif
            @if($i+1 < $len)

            <div class="column_portfolio">
                <div class="column2_port">
                    <div id="img3">
                        <img src="assets/{{$portfolios[$i+1]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
            @if($i+2 < $len)

            <div class="column_portfolio" style="       margin-left: 80%;
    margin-top: -280px;">
                <div class="column3_port">
                    <div id="img1">
                    <img src="assets/{{$portfolios[$i+2]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
        </div>
        <?php $i = $i + 3;?>
        @endfor
</div>


        <?php
$website = array();
for ($k = 0; $k < count($portfolios); $k++) {
    if ($portfolios[$k]['PType'] == "website") {
        array_push($website, $portfolios[$k]);
    }

}
?>
        <?php $i = 0;
$len = count($website);
$iter = $len % 3 == 0 ? $len / 3 : round($len / 3) + 1;
?>




<div id="Website" style="display:none;" class="rowport">
@for($j=0;$j<$iter;$j++)
<div class="row_portfolio" >

@if($i < $len)
        <div class="column_portfolio" style="margin-left: 30%;">
                <div class="column1_port">
                    <div id="img5">
                        <img src="assets/{{$website[$i]['PImage']}}" style="width:80%;height:60%;"> </div>


                </div>
            </div>
            @endif
            @if($i+1 < $len)

            <div class="column_portfolio">
                <div class="column2_port">
                    <div id="img3">
                        <img src="assets/{{$website[$i+1]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
            @if($i+2 < $len)

            <div class="column_portfolio" style="       margin-left: 80%;
    margin-top: -280px;">
                <div class="column3_port">
                    <div id="img1">
                    <img src="assets/{{$website[$i+2]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
        </div>
        <?php $i = $i + 3;?>
        @endfor
</div>



        <?php
$apps = array();
for ($k = 0; $k < count($portfolios); $k++) {
    if ($portfolios[$k]['PType'] == "apps") {
        array_push($apps, $portfolios[$k]);
    }

}

?>
        <?php $i = 0;
$len = count($apps);
$iter = $len % 3 == 0 ? $len / 3 : round($len / 3) + 1;
?>




<div id="Apps" style="display:none;" class="rowport">
@for($j=0;$j<$iter;$j++)
<div class="row_portfolio" >

@if($i < $len)
        <div class="column_portfolio" style="margin-left: 30%;">
                <div class="column1_port">
                    <div id="img5">
                        <img src="assets/{{$apps[$i]['PImage']}}" style="width:80%;height:60%;"> </div>


                </div>
            </div>
            @endif
            @if($i+1 < $len)

            <div class="column_portfolio">
                <div class="column2_port">
                    <div id="img3">
                        <img src="assets/{{$apps[$i+1]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
            @if($i+2 < $len)

            <div class="column_portfolio" style="       margin-left: 80%;
    margin-top: -280px;">
                <div class="column3_port">
                    <div id="img1">
                    <img src="assets/{{$apps[$i+2]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
        </div>
        <?php $i = $i + 3;?>
        @endfor
</div>

        <?php
$design = array();
for ($k = 0; $k < count($portfolios); $k++) {
    if ($portfolios[$k]['PType'] == "design") {
        array_push($design, $portfolios[$k]);
    }

}


?>
        <?php $i = 0;
$len = count($design);
$iter = $len % 3 == 0 ? $len / 3 : round($len / 3) + 1;
?>




<div id="Design" style="display:none;" class="rowport">
@for($j=0;$j<$iter;$j++)
<div class="row_portfolio" >

@if($i < $len)
        <div class="column_portfolio" style="margin-left: 30%;">
                <div class="column1_port">
                    <div id="img5">
                        <img src="assets/{{$design[$i]['PImage']}}" style="width:80%;height:60%;"> </div>


                </div>
            </div>
            @endif
            @if($i+1 < $len)

            <div class="column_portfolio">
                <div class="column2_port">
                    <div id="img3">
                        <img src="assets/{{$design[$i+1]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
            @if($i+2 < $len)

            <div class="column_portfolio" style="       margin-left: 80%;
    margin-top: -280px;">
                <div class="column3_port">
                    <div id="img1">
                    <img src="assets/{{$design[$i+2]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
        </div>
        <?php $i = $i + 3;?>
        @endfor
</div>




        <?php
$photography = array();
for ($k = 0; $k < count($portfolios); $k++) {
    if ($portfolios[$k]['PType'] == "photography") {
        array_push($photography, $portfolios[$k]);
    }

}
?>
        <?php $i = 0;
$len = count($photography);
$iter = $len % 3 == 0 ? $len / 3 : round($len / 3) + 1;
?>




<div id="Photography" style="display:none;" class="rowport">
@for($j=0;$j<$iter;$j++)
<div class="row_portfolio" >

@if($i < $len)
        <div class="column_portfolio" style="margin-left: 30%;">
                <div class="column1_port">
                    <div id="img5">
                        <img src="assets/{{$photography[$i]['PImage']}}" style="width:80%;height:60%;"> </div>


                </div>
            </div>
            @endif
            @if($i+1 < $len)

            <div class="column_portfolio">
                <div class="column2_port">
                    <div id="img3">
                        <img src="assets/{{$photography[$i+1]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
            @if($i+2 < $len)

            <div class="column_portfolio" style="       margin-left: 80%;
    margin-top: -280px;">
                <div class="column3_port">
                    <div id="img1">
                    <img src="assets/{{$photography[$i+2]['PImage']}}" style="width:80%;height:60%;"></div>
                </div>
            </div>
            @endif
        </div>
        <?php $i = $i + 3;?>
        @endfor
</div>
        <div class="bottomicon" onclick="location.href = '/homes'"
>
                <i class="fas fa-arrow-up"></i></i></div>
    </div>

</body>

</html>



@if( auth()->check() )
    @if(auth()->user()->username == "admin")


    <div class="container_skills" style="
    margin-left: 50%;">

<br />

@if (\Session::has('success'))

<div class="alert alert-success">

<p>{{ \Session::get('success') }}</p>

</div><br />

@endif
<a href="/portfolios/create"> Create New </a>

<table class="table table-striped">

<thead>

<tr>

<th>ID</th>

<th>Portfolio Image</th>

<th>Portfolio Type</th>

<th colspan="2">Action</th>

</tr>

</thead>

<tbody>

@foreach($portfolios as $portfolio)

<tr>

<td>{{$portfolio['id']}}</td>


<td>{{$portfolio['PImage']}}</td>
<td>{{$portfolio['PType']}}</td>

<td><a href="{{action('PortfolioController@edit', $portfolio['id'])}}" class="btn btn-w

arning">Edit</a></td>

<td>

<form action="{{action('PortfolioController@destroy', $portfolio['id'])}}" method="post">

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













