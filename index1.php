<?php
ob_start();
session_start();
if(isset($_SESSION['mob']))
{
  header("location:Users/userhome.php");

}else{
?>

<!DOCTYPE html>
<html>
<head>
<title>Real Estate::Home</title>
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
media=all :Used for all media type devices.-->
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
<!--header-->
<header>
  <div class="top">
    <a><i class="fas fa-phone-alt"></i> 8867111632</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><i class="fas fa-envelope"></i> paradise.re.gmail.com</a>
    </div>
  
  <a href="#" class="logo"><img src="IMAGES/logo1.png"/></a>
  <div class="header-right">
    <nav class="navbar">
      <a class="active1" href="index.html">Home</a>
      <a href="aboutus.html">About us</a>
      <a href="contactus.html">Contact us</a>
      <a href="properties.html">Properties</a>
      <a href="agents.html">Agents</a>
      
      <div class="dropdown">
        <button class="dropbtn">Signup
         
        </button>
        <div class="dropdown-content">
          <a class="start-btn" >Agent signup</a>
          <a onclick="userfun()" >User signup</a>
        </div>
      </div>
    <div class="dropdown">
        <button class="dropbtn">Signin
         
        </button>
        <div class="dropdown-content">
          <a class="tsigninstart-btn">Agent signin</a>
          <a class="asigninstart-btn">Admin signin</a>
          <a class="usigninstart-btn">User signin </a>
        </div>
      </div>  
    </nav>
  
  </div>
</header>

<div class="drop" >
 <!-- <div class="search1"></div>
  <div class="search2" style="background: transparent;">
    <input type="text" placeholder="Search...">
    <button type="submit"><i class="far fa-search"></i></button>--> 
  </div>




</div>
<!-- end of header-->

<!-- start of slider css -->
<!--<div class="slideshow-container">
  
  
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="IMAGES/23.jfif" style="width:100%">
     <div class="text">Paradise</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="IMAGES/26.jfif" style="width:100%">
    <div class="text">Dream Home</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="IMAGES/12.jfif" style="width:100%">
    <div class="text">Alishan Bunglow</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="IMAGES/28.jfif" style="width:100%">
    <div class="text">Residential</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">5 / 5 </div>
    <img src="IMAGES/24.jfif" style="width:100%">
    <div class="text">Raj Mahal</div>
  </div>
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <script type="text/javascript" src="JS/slider.js"></script>
  
  
  Start of Products --> 
  



  <h2 style="text-align:center">Property Details</h2>
  
  
  <table>
  <tr>
  <td>
    <div class="card">
    <img src="IMAGES/25.jfif" alt="Mahal" style="width:100%">
    <h1>Mahal</h1>
    <p class="price">RS.2Cr</p>
    <p> 2500sqft , 6BHK </p>
    <p> It is our most important asset.</p>
    <p><button>Book Now</button></p>
    </div>
   </td>
   <td>
    <div class="card">
    <img src="IMAGES/download1.jpg" alt="Cottage" style="width:100%">
    <h1>Cottage</h1>
    <p class="price">RS.3.2Cr</p>
    <p>14000Spft,8BHK</p>
    <p>All type of facilities are available in this Bungalow</p>
    <p><button>Book Now</button></p>
    </div>
   </td>
   <td>
    <div class="card">
    <img src="IMAGES/4.jpg" alt="Villa" style="width:100%">
    <h1 class="pname">Villa</h1>
    <p class="price">RS.2.5Cr</p>
    <p>8000Spft,4BHK</p>
    <p>Home is the starting place of love,hope and dreams.</p>
    <p><button>Book Now</button></p>
    </div>
   </td>
  <td>
    <div class="card"> 
    <img src="IMAGES/3.png" alt="Home" style="width:100%">
    <h1>Home</h1>
    <p class="price">RS.3Cr</p>
    <p>8000Spft,4BHK</p>
    <p>The Luxury world.</p>
    <p><button>Book Now</button></p>
    </div>
  </td>
  </tr>
  </table>
  <!--end of Products --> 
  <!--Start of Products --> 
  <h2 style="text-align:center">Property Details</h2>
  
  
  <table>
  <tr>
  <td>
    <div class="card">
    <img src="IMAGES/11.jfif" alt="Villa" style="width:100%">
    <h1>Villa</h1>
    <p class="price">RS.1Cr</p>
    <p>8000Spft,4BHK</p>
   
    <p>Beautifull home with the big pool.</p>
    <p> </p>
    <p><button>Book Now</button></p>
    </div>
   </td>
   <td>
    <div class="card">
    <img src="IMAGES/5.jpg" alt="Duplex" style="width:100%">
    <h1>Duplex</h1>
    <p class="price">RS.5Cr</p>
    <p>10000Spft,5BHK</p>
    <p> We bring you the largest space to your family.</p>
    <p></p>
    <p><button>Book Now</button></p>
    </div>
   </td>
   <td>
    <div class="card">
    <img src="IMAGES/14.jpg" alt="Commercial" style="width:100%">
    <h1>Commercial</h1>
    <p class="price">RS.2.5Cr</p>
    <p>80000Spft,8BHK</p>
    <p>Get more for your money with a great real estate professional.</p>
    <p><button>Book Now</button></p>
    </div>
   </td>
  <td>
    <div class="card"> 
    <img src="IMAGES/15.jpg" alt="" style="width:100%">
    <h1>Duplex</h1>
    <p class="price">RS.1.5Cr</p>
    <p>16000Spft,6BHK</p>
    <p>Before the family enters,it was just a house..but now it is our new home.</p>
    <p><button>Book Now</button></p>
    </div>
  </td>
  </tr>
  </table>
<!--end of Products --> 
<!--start of about us --> 
<section style="background-image:url('IMAGES/bg.png'); background-repeat: no-repeat;">
  <h1 style="color: rgb(0, 0, 0);">About Out Page</h1>
  <p style="color: rgb(5, 5, 31); font:bold;">Real Estate Service provide a Service with respect to the purchase, sale, lease, rental of real property.</p>
 <p style="color: rgb(5, 5, 31);font:bold;">Real estate is form of business that involves buying ,renting and selling proprties such as land,<br>buildings and offices.The responsibility of RE agencies also include renting out or selling<br> Properties,buildings,retail locations,apartments,houses,bungalows etc.
 Many people look for Property for a variety of purpose like Residential,offices,schools and other uses.</p>
</section>
<!--end of about us -->
<!--start of footer -->
<footer>
  <p>&copy; 2023 Project Title Demo. All rights reserved | Designed by Priyanka.H and Mukta.K (mob-8867111632).</p>
</footer> 
<!--end of footer --> 


<!-- start of user signup real-->
<div class="usersignup1">
  <div class="Changepasswordheader">
  <h1>USER SIGNUP</h1>
  <span onclick="closeusersignup()">&times;</span>
  </div>
  <form name="form" action="#" method="post">
  <div class="cpcontainer">
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Full Name</label>
  <input type="text"  name="fname" style="width: 90%;" >
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Email Address</label>
    <input type="text" name="email" style="width: 90%;" >
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Password</label>
    <input type="password" name="pwd" style="width: 90%;"><br>
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Confirm Password</label>
    <input type="password" style="width: 90%;">
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Phone</label>
    <input type="text" name="mob" style="width: 90%;">
   
    <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Gender</label>
    <select name="gender" style="width: 90%;">
        <option value="male" style="color:black ;font-size: 16px;">Male</option>
        <option value="female" style="color:black ;font-size: 16px;">Famale</option>
        <option value="others" style="color:black;font-size: 16px;">others</option>
    </select>
   
  <input type="submit" name="usignup" value="Send" class="btn"/>
  <input type="reset" value="Clear" class="btn"/>
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

    $alreadyaccount="select *from user where mob='$mob'";
    $result=mysqli_query($connect,$alreadyaccount) or die("could not execute already acc. query");
    if(mysqli_num_rows($result)>=1)
    {
      echo'<script>';
      echo'swal("Sorry","your account is already present ,plz signin","error")';
      echo'</script>';
    }
    else{
    $insertquery="insert into user values('$fname','$email','$pwd','$mob','$gender')";
   
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
<div class="center modal-box " style="background-color: rgb(53, 158, 232);">
  <center><img src="IMAGES/user2.jpg" style="border-radius: 50%; height: 35px; width: 35px;"/> </center>
  <center><h1 style="color:rgb(0, 0, 0)">AGENT SIGNUP</center><hr>
  <div class="fas fa-times asignupfa-times" style="position: absolute;
  top: 0;
  right: 0;
  background: rgb(255, 255, 255);
  height: 40px;
  width: 40px;
  line-height: 40px;
  margin: 10px;

  color:rgb(40, 178, 236);
  font-size: 18px;
  border-radius: 100%;
  text-align: center;
  cursor: pointer;"></div>

   <div class="form_container" style="background-color: rgb(255, 255, 255);">
      <form name="form" action="#" method="post">
     <div class="form_wrap form_grp">
     <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Full Name</label>
       <input type="text" name="fname">
    </div>
   
   
</div>
<div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Email Address</label>
       <input type="text" name="email">

   </div>
</div>
<div class="form_wrap form_grp">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Password</label>
       <input type="password" name="pwd">

   </div>
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Confirm Password</label>
       <input type="password">

   </div>
</div>
<div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Gender</label>
       <select name="gender" style="width: 90%;">
        <option value="male" style="color:black ;font-size: 16px;">Male</option>
        <option value="female" style="color:black ;font-size: 16px;">Famale</option>
        <option value="others" style="color:black;font-size: 16px;">others</option>
       </select>
   </div>
</div>
<div class="form_wrap">
   <div class="form_item">
       <label style="color:rgb(0, 0, 0) ;font-size: 16px;">Phone</label>
       <input type="text" name="mob">
       <div class="error" id="phone"></div>
   </div>
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
 
  <div class="usignupclose uclose">
  <a class="usigninpopup uclose" style="color:rgb(20, 97, 173) ;font-size: 20px;cursor: pointer; margin-left: 100px; ">Already have an account?</a>
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

    $alreadyaccount="select *from agent where mob='$mob'";
    $result=mysqli_query($connect,$alreadyaccount) or die("could not execute already acc. query");
    if(mysqli_num_rows($result)>=1)
    {
      echo'<script>';
      echo'swal("Sorry","your account is already present ,plz signin","error")';
      echo'</script>';
    }
    else{

    $insertquery1="insert into agent values('$fname','$email','$pwd','$mob','$gender')";
   
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




<!-- end of user sign up pop-up window-->

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
     </div>   
   </div>
   <div class="usiginbtns" style="align:center">
     <div class="cbtn1" >
       <input type="submit" name="usersignin" value="signin"/>
     </div>
     <div class="cbtn1"  >
       <input type="reset" value="clear"/>
     </div>
   </div>
         <br>
   <div class="closesignin" >
     <a  class="start-btn" style="margin-left:160px;color:rgb(4, 68, 121);cursor:pointer;">New User?Resister here</a>
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


 <!--end of user sign in-->

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
     <input type="submit" name="adsignin" value="signin"/>
   </div>
   <div class="cbtn1">
     <input type="reset" value="clear"/>
   </div>
 </div>
       <br>
       <div class="closesignin">
        <a  class="start-btn" style="margin-left:190px;color:rgb(4, 68, 121);cursor:pointer;">New User?Resister here</a>
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
        <a  class="start-btn" style="margin-left:190px;color:rgb(4, 68, 121);cursor:pointer;">New User?Resister here</a>
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
      header("location:Agents/agenthome.php");
    }else{
      echo'<script>';
      echo'swal("Sorry","Please!check your mob no and password","error")';
      echo'</script>';
    }
    
  }
}



 
?>


</body>
</html>
<?php
}
?>