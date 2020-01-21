
    <!DOCTYPE html>
<html >
<head>
<script type="text/javascript">


function validation(){
var username_login =document.getElementById("username").value;
var psw_login =document.getElementById("password").value;
var error_message_login =document.getElementById("error_message_login")  ;
var text;

if(username_login.length<5){
text="Please enter valid User name more than 5 characters";
error_message_login.innerHTML=text;
return false;
}
if(psw_login.length<5){
text="Password should be minimum of 5 characters";
error_message_login.innerHTML=text;
return false;
}
return true;
}
function validation_signup(){
var fname =document.getElementById("fname").value;
var lname =document.getElementById("lname").value;
var emails =document.getElementById("emails").value;
var user =document.getElementById("user").value;
var psw =document.getElementById("psw").value;
var rpsw =document.getElementById("rpsw").value;
var error_message =document.getElementById("error_message")  ;
var text;

if(fname.length<5){
text="Please enter valid First name";
error_message.innerHTML=text;
return false;
}
if(lname.length<5){
text="Please enter valid Last name";
error_message.innerHTML=text;
return false;
}
if(emails.indexOf("@")==-1||emails.length<6){
text="Please Enter valid Email";
error_message.innerHTML=text;
return false;
}
if(user.length<5){
text="Please enter valid user name";
error_message.innerHTML=text;
return false;
}
if(psw.length<5){
text="Please enter valid password";
error_message.innerHTML=text;
return false;
}
if (psw != rpsw) {

 
            alert("Passwords do not match.");
            return false;
			}
alert("Form Submitted Successfully!")
return true;
}
</script>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/portfolio.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/portfolio_media.css" media="all" type="text/css"/>

	<script src="https://kit.fontawesome.com/ce19237d22.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .bg-modal{
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.7);
    position:absolute;
    top:0;
    display:flex;
    display:none;
    
    }
.modal-content{
width:500px;
height:550px;
background-color:white;
margin-top:2%;
margin-left:30%;
border-radius:4px;
}

.bg-modal-login{
width:100%;
height:100%;
background-color:rgba(0,0,0,0.7);
position:absolute;
top:0;
display:flex;
display:none;

}
.modal-content-login{
width:300px;

background-color:white;
margin-top:2%;
margin-left:40%;
border-radius:4px;
height: 320px;

}

</style>

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
                    <li><a href="/sendemail" class="listelem"> CONTACT ME </a></li>
                    <li><a href="#" id="navbar12" class="listelem active"> LOG IN </a></li>
                    <li><a href="#" id="navbar13"  class="listelem"> SIGN UP </a></li>
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
    <div class="background_img">
            <div class="first_text">
                <p id="p1">HELLO I'M</p>
                <p id="p2">UTPALA VASANTHA KORRAPOLU</p>
                <p id="p1">FULL STACK DEVELOPER|</p>
                <div id="button_first">
                    <a href="assets/Utpala Resume.pdf" download>
                    <button id="button" value="Download">

                        Download My CV<i class="fas fa-download"></i>
                    </button></a>
                </div>

            </div>
        </div>
        <div id="mouse"><p>.</p></div>
        
       
    </div>
				
<div class="bg-modal">
<div class="modal-content">

  <form action="#" id="signup_form" class="form-container"  method="post" onsubmit="return validation_signup()">
    <p class="login_text">check in<i class="fas fa-times" id="form_close"></i></p>
    <hr>

     <div class="signup_form"><p class="textbox_text"><b>Name:</b></p></div>
    <input type="text" id="fname" name="fname"required >
   
    <div class="signup_form"><p class="textbox_text"><b>Last name:</b></p></div>
    <input type="text" id="lname"name="lname" required>
    
   <div class="signup_form"><p class="textbox_text"><b>Email:</b></p></div>
    <input type="text" id="emails" name="emails" required>

   <div class="signup_form"><p class="textbox_text"><b>User:</b></p></div>
    <input type="text" id="user" name="user" required>

    <div class="signup_form"><p class="textbox_text"><b>Password:</b></p></div>
    <input type="password" id="psw" name="psw" required>

     <div class="signup_form"><p class="textbox_text"><b>Repeat password:</b></p></div>
    <input type="password"  id="rpsw" name="rpsw" required>
    <hr>

    <button type="button" class="btn1">Close</button>
    <input type="submit" class="btn2 cancel" name="save1" value="Save"  >
  </form>

  <div id="error_message"></div>
</div>

</div>



<div class="bg-modal-login">
<div class="modal-content-login" style="width:300px;">
<i><strong><div id="error_message_login" style="color:red; background-color:black;"></div></strong></i>
  <form action="/login" id="login-form" class="form-container" onsubmit="return validation()" method="post">
  {{ csrf_field() }}


    <p class="login_text">Log-in <i class="fas fa-times" id="form_close_login" style="margin-left:85%;"></i></p>
    <hr>

    <p class="user"><b>User:</p>
    <input type="text"id="username" name="username" required>
   

    <p class="user">Password:</p>
    <input type="password" id="password" name="password" required>

	<hr>

    <button type="button" class="btn1_login" style="margin-left:20%;">Close</button>
    <button type="submit" class="btn2 cancel_login" name="login" >Get In</button>

    <a href="/register" > Signup </a>
  </form>

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

</div>
</div>


</div>



  
</div>

<script>
document.getElementById('navbar13').addEventListener('click',
function Signup()
{
document.querySelector('.bg-modal').style.display="flex";
});

document.getElementById('form_close').addEventListener('click',
function()
{
document.querySelector('.bg-modal-login').style.display="flex";
});

document.getElementById('form_close_login').addEventListener('click',
function()
{
document.querySelector('.bg-modal-login').style.display="none";
});

document.getElementById('navbar12').addEventListener('click',
window.onload = function()
{
document.querySelector('.bg-modal-login').style.display="flex";
});


</script>


</body>
</html>


 
