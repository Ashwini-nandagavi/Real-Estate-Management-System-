<?php
ob_start();
session_start();
if(isset($_SESSION['mob']))
{
  header("location:./Users/userhome.php");

}else{
?>

<!DOCTYPE html>
<html>
<head>
<title>Real Estate::aboutus</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/fevicon.ico" type="image/x-icon">
<!-- 
viewport to make your website look good on all devices.
width=device-width:Depending on width of the device it takes width.
initial-scale=1.0:sets the initial zoom level when the page is first loaded by the browser.
-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 
Linking Externall css file and 
media=all :Used for all media type devices.
-->
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="JS/sweetalert2.all.min.js"></script>
  <script src="JS/validation.js"></script>
</head>
<body>
<!--header-->
<header>
  <div class="top">
   
  <div class="dropdown" style="float:left" >
    <br>&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt"></i>  8867111632</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><i class="fas fa-envelope"></i> paradise.re.gmail.com</a>
   
</div>
    
     
      <div class="dropdown" style="margin-right:65px;" >
          <button class="dropbtn"><i class="fas fa-user"></i>
          
          </button>
          <div class="dropdown-content" >
            <a class="tsigninstart-btn">Agent signin</a>
            <a class="asigninstart-btn">Admin signin</a>
            <a class="usigninstart-btn">User signin </a>
          </div>
        </div>  
        <div class="dropdown" >
          <button class="dropbtn"> <i class="fas fa-user-plus"></i>
          
          </button>
          <div class="dropdown-content">
            <a class="start-btn" >Agent signup</a>
            <a onclick="userfun()" >User signup</a>
          </div>
        </div>
    </div>
    
  
  
  <a href="#" class="logo"><img src="IMAGES/logo1.png"/></a>
  <div class="header-right">
    <nav class="navbar">
      <a  href="index.php">Home</a>
      <a class="active1" href="aboutus.php">About us</a>
      <a href="contactus.php">Contact us</a>
      <a href="properties.php">Properties</a>
      <a href="agents.php">Agents</a>
      
    </nav>
  
  </div>
</header>
<!-- end of header-->
<!-- start of about us page-->
<div class="aboutuspagesection" style="background-image: url(IMAGES/36.jfif);background-repeat: no-repeat;background-size: 100% 100%;height:600px;"><br><br><br><br>

<h1>About Us</h1>
<p style="padding: 5px;">Real estate is form of business that involves buying ,renting and selling proprties such as land,<br>buildings and offices.The responsibility of RE agencies also include renting out or selling<br>Properties,buildings,retail locations,apartments,houses,bungalows etc.
        <br>Many people look for Property for a variety of purpose like Residential,offices,schools and <br>other uses.
 <br><br>Every Person wants the best facilities and the best location.The traditional real estate<br>
business has a lengthy and hectic process.To varify the specifics of the propertyand to explore <br>the area,people must personally meet the agent . The search for the ideal location and<br> kind of property takes a while .thus,we have proposed a Real Estate Management System to <br>overcome this difficulty.
The online property Management System can assist you in finding <br>the best property while your just sitting at home or elsewhere.<br>
  People can Book their perferred property online with just  a few clicks.In this System , agents can<br> list properties for sale or rent ,and users can buy or reserve a rental property.
  
</p>
    </div>
    <h2 style="text-align:center;font-family:Verdana, Geneva, Tahoma, sans-serif;text-decoration:underline;">Our team</h2>
<!--team code-->
    <div class="aboutusrow">
        <div class = "aboutuspagecolumn">
            <div class="aboutuspagecard">
                <img src="IMAGES/photo (2).jpg "    alt="Priyanka H" style="width:100%;border-radius:55%;" >
            <div class="aboutuspagecontainer">
            <h2>&emsp;&emsp;Priyanka H<sub class="aboutpagetitle">(Founder)</sub></h2>
            <span class="aboutpagetitle"></span>
            <p >Founderof the Real Estate </p>
            <p>priyankahanje10@gmail.com</p>
            <p>Mob No:123456789</p>
            <ul class="aboutuspagesocial">
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram" style="color:white"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" style="color:white"></i></a></li>
            </ul>

            </div>
            </div>
        </div>
        <div class = "aboutuspagecolumn">
            <div class="aboutuspagecard">
                <img src="IMAGES/photo2.jfif "    alt="Mukta k" style="width:100%;border-radius: 55%;" >
            <div class="aboutuspagecontainer">
            <h2>&emsp;&emsp;Mukta K<sub class="aboutpagetitle">(CEO)</sub></h2>
            <span class="aboutpagetitle"></span>
            <p >CEO of the Real Estate</p>
            <p>muktak7422@gmail.com</p>
            <p>Mob No:987654321</p>
            <ul class="aboutuspagesocial">
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram" style="color:white"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" style="color:white"></i></a></li>
                </ul>
            </ul>

            </div>
            </div>
        </div>
        </div>
        

<!--end of about us --> 
<br/><br/><br/>
<!--start of footer -->
<footer>
  <p>&copy; 2023 Project Title Demo. All rights reserved | Designed by Priyanka.H and Mukta.K (mob-8867111632).</p>
</footer> 
<!--end of footer -->


<!-- start of user signup real-->
<div class="usersignup1" style="height:900">
  <div class="Changepasswordheader" >
  <center><img src="IMAGES/user2.jpg" style="border-radius: 50%; height: 35px; width: 35px;"/> </center>
  <h1>USER SIGNUP</h1>
  
  <span onclick="closeusersignup()">&times;</span>
  </div>
  <form name="form" action="#" method="post">
  <div class="cpcontainer">
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Full Name</label>
  <input type="text"  name="fname" style="width: 95%; height:15px; border-radius:12px; border:2px solid black;">

    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Email Address</label>
    <input type="text" name="email"  style="width: 95%; height:15px; border-radius:12px; border:2px solid black;" >

    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Password</label>
    <input type="password" name="pwd"style="width: 95%; height:15px; border-radius:12px; border-color: black;border:2px solid black;"><br>

    <label style="color:rgb(0, 0, 0) ;font-size: 16px; ">Confirm Password</label>
    <input type="password" name="cpwd"  style="width: 95%; height:15px;border-radius:12px;border:2px solid black;">

    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Phone</label>
    <input type="text" name="mob"  style="width: 95%; height:15px; border-radius:12px;border:2px solid black;">
   <div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Gender</label>
       <select name="gender" style="width:453px; border:2px solid black;  border-radius:12px;" >
       <option value="select" style="color:black ;font-size: 16px;">select</option>
        <option value="male" style="color:black ;font-size: 16px;">Male</option>
        <option value="female" style="color:black ;font-size: 16px;">Famale</option>
        <option value="others" style="color:black;font-size: 16px;">others</option>
       </select>
   </div>
</div>

    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Hint</label>

    <input type="text" name="hint" placeholder="enter your pet name"style="width: 95%; height:15px; border-radius:12px;border:2px solid black;;">
   
  

  <input type="submit" name="usignup" value="Signup" class="btn"/>
  <input type="reset" value="Clear" class="btn"/>

  <div class="">
  <a class="usigninstart-btn" style="color:rgb(20, 97, 173) ;font-size: 20px;cursor: pointer; margin-left: 100px; ">Already have an account?</a>
 </div>
</form>
  </div>
  
  </div>
  <!-- end  html-->
  
  <!--script of givefeedcak call-->
  <script>
  function userfun()
  {
  document.querySelector(".usersignup1").classList.add("showusersignup");
  
  }
  function closeusersignup(){
  document.querySelector(".usersignup1").classList.remove("showusersignup");
  }
  </script>

  
  <?php
if(isset($_POST['usignup']))
{
  $connect=mysqli_connect("localhost","root","","paradise");
  if(!$connect)
  {
    die("not connected mysql db...".mysqli_error());
  }
  else{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    
    $mob=$_POST['mob'];
    $gender=$_POST['gender'];
    $hint=$_POST['hint'];
    $alreadyaccount="select *from user where mob='$mob'";
    $result=mysqli_query($connect,$alreadyaccount) or die("could not execute already acc. query");
    if(mysqli_num_rows($result)>=1)
    {
      echo'<script>';
      echo'swal("Sorry","your account is already present ,plz signin","error")';
      echo'</script>';
    }
    else{
    $insertquery="insert into user values('$fname','$email','$pwd','$mob','$gender','$hint')";
   
   $result=mysqli_query($connect,$insertquery) or die('error in insertquery');
   if($result==1)
   {
    echo'<script>';
    echo'swal("successfull","your account is created","success")';
    echo'</script>';
   }else{
    {
      echo'<script>';
      echo'swal("Sorry","your account is not created","error")';
      echo'</script>';
    }
   }
   }
  }
}

?>
<!-- end of user signup real -->
<!-- start of agent sign up pop-up window-->
<div class="center modal-box " style="background-color: rgb(53, 158, 232);top:120px;height:700;z-index:2;">
  <center><img src="IMAGES/user2.jpg" style="border-radius: 50%; height: 35px; width: 35px;"/> </center>
  <center><h1 style="color:rgb(0, 0, 0)">AGENT SIGNUP</center><hr>
  <div class="fas fa-times asignupfa-times"></div>

   <div class="form_container" style="background-color: rgb(255, 255, 255);">
      <form action="#"  method="POST" name="myForm" onsubmit="return formValidate()">
     <div class="form_wrap form_grp">
     <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Full Name</label>
       <input type="text" name="fname" id="fname"  style="width:440px;border:2px solid black;">
    </div>
   
   
</div>
<div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Email Address</label>
       <input type="text" name="email"  id="email"  style="width:440px;border:2px solid black;">

   </div>
</div>
<div class="form_wrap form_grp">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Password</label>
       <input type="password" name="pwd"  id="pwd" style="border:2px solid black;">

   </div>
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Confirm Password</label>
       <input type="password" name="cpwd"  id="cpwd" style="width:200px;border:2px solid black;"  >

   </div>
</div>
<div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Gender</label>
       <select name="gender"  id="gender" style="width:453px;border:2px solid black;" >
       <option value="select Gender" style="color:black ;font-size: 16px;">select Gender</option>
        <option value="male" style="color:black ;font-size: 16px;">Male</option>
        <option value="female" style="color:black ;font-size: 16px;">Famale</option>
        <option value="others" style="color:black;font-size: 16px;">others</option>
       </select>
   </div>
</div>
<div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Phone</label>
       <input type="text" name="mob" id="mob" style="width:440px;border:2px solid black;">
       <div class="error" id="phone"></div>
   </div>

   <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Hint</label>
    <input type="text" name="hint" placeholder="enter your pet name"style="height:10px; border-radius:5px;width:424px;border:2px solid black;"">
</div>
<div class="btn2">
<div class="btn1">
 <input type="submit" name="asignup" value="signup">
</div>
<br>
<div class="btn1">
  
  <input type="reset" value="clear">
 </div>
</div>
<br>
 
  <div class="asignupclose uclose">
  <a class="tsigninstart-btn" style="color:rgb(20, 97, 173) ;font-size: 20px;cursor: pointer; margin-left: 100px; ">Already have an account?</a>
 </div>
</form>
</div>
</div>





<script>
  $(document).ready(function(){
    $('.start-btn').click(function(){
      $('.modal-box').toggleClass("show-modal");
      $('.start-btn').toggleClass("show-modal");
    });
    $('.asignupfa-times').click(function(){
      $('.modal-box').toggleClass("show-modal");
      $('.start-btn').toggleClass("show-modal");
    });
    $('.uclose').click(function(){
      $('.modal-box').toggleClass("show-modal");
      $('.start-btn').toggleClass("show-modal");
    });
  
  });
</script>

<?php
if(isset($_POST['asignup']))
{
  $connect=mysqli_connect("localhost","root","","paradise");
  if(!$connect)
  {
    die("not connected mysql db...".mysqli_error());
  }
  else{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $mob=$_POST['mob'];
    $gender=$_POST['gender'];
    $hint=$_POST['hint'];

    $alreadyaccount="select *from agent where mob='$mob'";
    $result=mysqli_query($connect,$alreadyaccount) or die("could not execute already acc. query");
    if(mysqli_num_rows($result)>=1)
    {
      echo'<script>';
      echo'swal("Sorry","your account is already present ,plz signin","error")';
      echo'</script>';
    }
    else{

    $insertquery1="insert into agent values('$fname','$email','$pwd','$mob','$gender','$hint')";
   
   $result=mysqli_query($connect,$insertquery1) or die('error in insertquery1');
   if($result==1)
   {
    echo'<script>';
    echo'swal("successfull","your account is created","success")';
    echo'</script>';
   }else{
    {
      echo'<script>';
      echo'swal("Sorry","your account is not created","error")';
      echo'</script>';
     }
    }
   }
  }
}

?>
<!-- end of agent sign up pop-up window-->

<!-- start user sign in pop window-->
<div class="usignincenter usigninmodal-box" style="background-color: rgb(53, 158, 232); width:500px;">
    <center><img src="IMAGES/user2.jpg" style="border-radius: 50%;height: 35px; width: 35px;"/></center>
    <center><h1 style="color:rgb(0, 0, 0);font-size:25px;">USER SIGNIN</h1></center>
    
    <div class="fas fa-times usigninfa-times"></div>

   <div class="usigninform_container" style="background-color: rgb(255, 255, 255);">
       <form name="form" action="#" method="post">
        <div class="usigninform_wrap">
     <div class="usigninform_item">
      <label style="font-size: 17px; color: rgb(0, 0, 0);">Mobile No:</label>
       <input type="text" name="mob">
     </div>
   </div>
   <div class="usigninform_wrap">
     <div class="usigninform_item">
      <label style="font-size: 17px; color: rgb(0, 0, 0);">Password:</label>
       <input type="password" name="pwd">
     <div class="closesignin" >
    <a onclick="showchangepassword()" class="forgortpasswordbtn" style="margin-left:20px;color:rgb(4, 68, 121);cursor:pointer;">Forgot Password?</a>
   </div>
   </div>   
   </div>
   <div class="usiginbtns" style="align:center">
     <div class="cbtn1" >
       <input type="submit" name="usersignin" value="signin" style="margin-left:50px;"/>
     </div>
     <div class="cbtn1">
       <input type="reset" value="clear" />
     </div>
   </div>
         <br>
   <div class="closesignin" >
  <center>   <a  onclick="userfun()"  style="margin-left:40px;color:rgb(4, 68, 121);cursor:pointer;">New User?Resister here</a></center>
   </div>
  
 </form>

</div>
</div>

 <script>
 $(document).ready(function(){
   $('.usigninstart-btn').click(function(){
   $('.usigninmodal-box').toggleClass("show-modal");
   $('.usigninstart-btn').toggleClass("show-modal");
 });
 $('.usigninfa-times').click(function(){
   $('.usigninmodal-box').toggleClass("show-modal");

   $('.usigninstart-btn').toggleClass("show-modal");
 });
 $('.closesignin').click(function(){
   $('.usigninmodal-box').toggleClass("show-modal");
   $('.usigninstart-btn').toggleClass("show-modal");
 });
 });
 </script>

 
<?php 
if(isset($_POST['usersignin']))
{
  $connect=mysqli_connect("localhost","root","","paradise");
  if(!$connect)
  {
    die ("could not connect the mysql database".mysqli_error());
  }else{
    $mob=$_POST['mob'];
    $pwd=$_POST['pwd'];

    $selectquery="select * from user where mob='$mob' and pwd='$pwd'";
    $result=mysqli_query($connect,$selectquery);
    if(mysqli_num_rows($result)==1)
    {
      $_SESSION['mob']=$mob;
      header("location:Users/userhome.php");
    }else{
      echo'<script>';
      echo'swal("Sorry","Please!check your mob no and password","error")';
      echo'</script>';
    }
    
  }
}

?>

<!--start of forgotpassword-->
<div class="changepassword">
<div class="passwordheader">
<h1>User Forgot Password</h1>
<span onclick="closechangepassword()">&times;</span>
</div>
<form action="#" method="post">
<div class="cpcontainer">
<label> Mobile no:</label>
<input type="text" name="mob" placeholder="Enter Mobile no" />

<label> Hint:</label>
<input type="password" name="hint" placeholder="Enter Hint" />



<input type="submit" name="ForgotPassword" value="ForgotPassword" class="btn"/>

<input type="reset" value="clear" class="btn"/>
</form>
</div>
</div>
<!--end give feedback-->
<!-- start script  forgot pass-->
<script>
function showchangepassword()
{
document.querySelector(".changepassword").classList.add("showchangepassword");
}
function closechangepassword(){
document.querySelector(".changepassword").classList.remove("showchangepassword");
}
</script>
<?php
if(isset($_POST['ForgotPassword'])){
	$connect=mysqli_connect("localhost","root","","paradise");
	if(!$connect)
	{
		die("could not connect mysql Databse".mysqli_error());
	}else{
		$mob=$_POST['mob'];
		$hint=$_POST['hint'];
		
		
		$cpquery="select *from  user where mob='$mob' and hint='$hint'";
		$result=mysqli_query($connect,$cpquery)or die("could not execute query");
		$row2=mysqli_fetch_array($result);
		$dppwd=$row2['pwd'];
		if(mysqli_num_rows($result)==1)
				{
			   echo "<script>";
                echo"swal('ohh','your password is $dppwd','success')";
			    echo "</script>";
				}else{
				echo "<script>";
                echo"swal('Sorry!','password is not changed please check the details!','error')";
			    echo "</script>";
				}
			
	}
}

?>
<!-- end script forgot pass-->
<!-- start of Admin signin popup window-->
<div class="asignincenter asigninmodal-box" style="background-color: rgb(53, 158, 232);">
  <center><img src="IMAGES/user2.jpg" style="border-radius: 50%;height: 35px; width: 35px;"/></center>
  <center><h1 style="color:rgb(0, 0, 0);font-size:25px;">ADMIN SIGNIN</h1></center>
  
  <div class="fas fa-times asigninfa-times" ></div>

 <div class="asigninform_container"  style="background-color: rgb(255, 255, 255);">
     <form name="form" action="#" method="post">
      <div class="asigninform_wrap">
   <div class="asigninform_item">
    <label style="font-size: 17px; color: rgb(0, 0, 0);">Mobile No:</label>
     <input type="text" name="mob">
   </div>
 </div>
 <div class="asigninform_wrap">
   <div class="asigninform_item">
    <label style="font-size: 17px; color: rgb(0, 0, 0);">Password:</label>
     <input type="password" name="pwd">
   </div>   
 </div>
 <div class="asiginbtns">
   <div class="cbtn1">
     <input type="submit" name="adsignin" value="signin" style="height:38px; margin-left:70px;padding:10px;"/>
   </div>
   <div class="cbtn1">
     <input type="reset" value="clear" style="padding:10px; height:38px;"/>
   </div>
 </div>
       <br>
       <div class="closesignin">
      </div>
</form>
</div>
</div>

<script>
$(document).ready(function(){
 $('.asigninstart-btn').click(function(){
 $('.asigninmodal-box').toggleClass("show-modal");
 $('.asigninstart-btn').toggleClass("show-modal");
});
$('.asigninfa-times').click(function(){
 $('.asigninmodal-box').toggleClass("show-modal");
 $('.asigninstart-btn').toggleClass("show-modal");
});

});
</script>

<?php 
if(isset($_POST['adsignin']))
{
  $connect=mysqli_connect("localhost","root","","paradise");
  if(!$connect)
  {
    die ("could not connect the mysql database".mysqli_error());
  }else{
    $mob=$_POST['mob'];
    $pwd=$_POST['pwd'];

    $selectquery="select * from admin where mob='$mob' and pwd='$pwd'";
    $result=mysqli_query($connect,$selectquery);
    if(mysqli_num_rows($result)==1)
    {
      $_SESSION['mob']=$mob;
      header("location:admin/adminhome.php");
    }else{
      echo'<script>';
      echo'swal("Sorry","Please!check your mob no and password","error")';
      echo'</script>';
    }
    
  }
}



 
?>





<!-- end  Admin  sign in pop window-->
<!-- start  AGENT sign in pop window-->


<div class="tsignincenter tsigninmodal-box" style="background-color: rgb(53, 158, 232);">
  <center><img src="IMAGES/user2.jpg" style="border-radius: 50%;height: 35px; width: 35px;"/></center>
  <center><h1 style="color:rgb(0, 0, 0);font-size:25px;">AGENT SIGNIN</h1></center>
  
  <div class="fas fa-times tsigninfa-times"></div>

 <div class="tsigninform_container"  style="background-color: rgb(255, 255, 255);">
     <form name="form" action="#" method="post">
      <div class="tsigninform_wrap">
   <div class="tsigninform_item">
     <label style="font-size: 17px; color: rgb(0, 0, 0);">Mobile No:</label>
     <input type="text" name="mob">
   </div>
 </div>
 <div class="tsigninform_wrap">
   <div class="tsigninform_item">
     <label style="font-size: 17px; color: rgb(14, 13, 13);" >Password:</label>
     <input type="password" name="pwd">
   </div>   
 </div>
 <div class="closesignin" >
    <a onclick="showchangepassword1()" class="forgortpasswordbtn" style="margin-left:20px;color:rgb(4, 68, 121);cursor:pointer;">Forgot Password?</a>
   </div>
 <div class="tsiginbtns">
   <div class="cbtn1">
     <input type="submit" name="asignin" value="signin"/>
   </div>
   <div class="cbtn1">
     <input type="reset" value="clear"/>
   </div>
 </div>
       <br>
       <div class="closesignin">
        <a  class="start-btn" style="margin-left:120px;color:rgb(4, 68, 121);cursor:pointer;">New User?Resister here</a>
      </div>
 
</form>
</div>
</div>

<script>
$(document).ready(function(){
 $('.tsigninstart-btn').click(function(){
 $('.tsigninmodal-box').toggleClass("show-modal");
 $('.tsigninstart-btn').toggleClass("show-modal");
});
$('.tsigninfa-times').click(function(){
 $('.tsigninmodal-box').toggleClass("show-modal");
 $('.tsigninstart-btn').toggleClass("show-modal");
});

});
</script>

<?php 
if(isset($_POST['asignin']))
{
  $connect=mysqli_connect("localhost","root","","paradise");
  if(!$connect)
  {
    die ("could not connect the mysql database".mysqli_error());
  }else{
    $mob=$_POST['mob'];
    $pwd=$_POST['pwd'];

    $selectquery="select * from agent where mob='$mob' and pwd='$pwd'";
    $result=mysqli_query($connect,$selectquery);
    if(mysqli_num_rows($result)==1)
    {
      $_SESSION['mob']=$mob;
      header("location:./Agents/agenthome.php");
    }else{
      echo'<script>';
      echo'swal("Sorry","Please!check your mob no and password","error")';
      echo'</script>';
    }
    
  }
}



 
?>

<!--start of forgotpassword-->
<div class="changepassword1">
<div class="passwordheader1">
<h1>Agent Forgot Password</h1>
<span onclick="closechangepassword1()">&times;</span>
</div>
<form action="#" method="post">
<div class="cpcontainer">
<label> Mobile no:</label>
<input type="text" name="mob" placeholder="Enter Mobile no" />

<label> Hint:</label>
<input type="password" name="hint" placeholder="Enter Hint" />



<input type="submit" name="ForgotPassword1" value="ForgotPassword" class="btn"/>

<input type="reset" value="clear" class="btn"/>
</form>
</div>
</div>
<!--end give feedback-->
<!-- start script  give feedback call-->
<script>
function showchangepassword1()
{
document.querySelector(".changepassword1").classList.add("showchangepassword1");
}
function closechangepassword(){
document.querySelector(".changepassword1").classList.remove("showchangepassword1");
}
</script>
<?php
if(isset($_POST['ForgotPassword1'])){
	$connect=mysqli_connect("localhost","root","","paradise");
	if(!$connect)
	{
		die("could not connect mysql Databse".mysqli_error());
	}else{
		$mob=$_POST['mob'];
		$hint=$_POST['hint'];
		
		
		$cpquery="select *from  agent where mob='$mob' and hint='$hint'";
		$result=mysqli_query($connect,$cpquery)or die("could not execute query");
		$row2=mysqli_fetch_array($result);
		$dppwd=$row2['pwd'];
		if(mysqli_num_rows($result)==1)
				{
			   echo "<script>";
                echo"swal('ohh','your password is $dppwd','success')";
			    echo "</script>";
				}else{
				echo "<script>";
                echo"swal('Sorry!','password is not changed please check the details!','error')";
			    echo "</script>";
				}
			
	}
}

?>
<!-- end script give feedback call-->
<!--end of changepassword-->
</body>
</html>
<?php
}
?>
