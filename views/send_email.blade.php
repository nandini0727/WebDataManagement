
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <link rel="stylesheet" href="css/portfolio_media.css" media="all" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce19237d22.js" crossorigin="anonymous"></script>
    <meta name="viewport" content-type="width=device-width initial-scale=1">
    <style type="text/css">
 
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>

<script type="text/javascript">
function validation(){
var fname =document.getElementById("fname").value;
var emailc =document.getElementById("emailc").value;
var phonec =document.getElementById("phonec").value;
var subject =document.getElementById("subject").value;
var error_message =document.getElementById("error_message")  ;
var text;

if(fname.length<5){
text="Please enter valid First name(more than 5 characters)";
error_message.innerHTML=text;
return false;
}
if(emailc.indexOf("@")==-1||emailc.length<6){
text="Please Enter valid Email";
error_message.innerHTML=text;
return false;
}
if(isNaN(phonec)||phonec.length!=10)
{
text="Please Enter valid Phone number(10 numbers)";
error_message.innerHTML=text;
return false;
}
if(subject.length<10){
text="Please enter atleast 10 characters for message";
error_message.innerHTML=text;
return false;
}

//return onsubmit="mailto:nandukuv@gmail.com";
}

</script>
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
                <h3>CONTACT ME</h3>
            </div>
        </h5>

        <div class="rowcontact">





            <div class="column1contact">

            <div class="container box">
   
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
</div>



<div id="error_message"></div>






                <form action="{{url('sendemail/send')}}" method="post" onsubmit="return validation()">
                {{ csrf_field() }}
                    <p class="contactheading"> LET'S HAVE A FUN</p>

                    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                    <input type="text" id="emailc" name="Email" placeholder="Email" required>

                    <input type="text" id="phonec" name="phoneNo" placeholder="Phone" required>


                    <textarea id="subject" name="subject" placeholder="Your Message" style="height:170px" required></textarea>
                    <input type="submit" id="sendnow" value="Send Now">
                </form>

            </div>



           






            <div class="column1contact">
                <p class="contactheading">CONTACT ADDRESS</p>
                <div class="contactaddr">
                    <div class="contacticon">
                        <i class="fas fa-map-marker-alt"></i></div>
                    <p class="contactdetmain">Address:</p>
                    <p class="contactdet">{{$aboutmes[0]['Address']}}</p>
                </div>



                <div class="contactaddr">
                    <div class="contacticon">
                        <i class="fas fa-phone-alt"></i></div>
                    <p class="contactdetmain">Phone: </p>
                    <p class="contactdet">{{$aboutmes[0]['Phone']}}</p>
                </div>


                <div class="contactaddr">
                    <div class="contacticon">
                        <i class="fab fa-whatsapp"></i></div>
                    <p class="contactdetmain">Whatsapp: </p>
                    <p class="contactdet">{{$aboutmes[0]['Phone']}}</p>
                </div>


                <div class="contactaddr">
                    <div class="contacticon">
                        <i class="fab fa-skype "></i></div>
                    <p class="contactdetmain">Skype:</p>
                    <p class="contactdet">{{$aboutmes[0]['Skype']}}</p>
                </div>



                <div class="contactaddr">
                    <div class="contacticon">
                        <i class="far fa-envelope"></i></div>
                    <p class="contactdetmain">Email:</p>
                    <p class="contactdet">{{$aboutmes[0]['Email']}}</p>
                </div>



                <div class="contactaddr">
                    <div class="contacticon">
                        <i class="fa fa-home"></i></div>
                    <p class="contactdetmain">Website: </p>
                    <p class="contactdet">{{$aboutmes[0]['Website']}}</p>
                </div>
            </div>

            <div class="contactsocial">

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


        </div>
        <div class="bottomicon" onclick="location.href = '/homes'">
                <i class="fas fa-arrow-up"></i></i></div>
    </div>
</body>

</html>