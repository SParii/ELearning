<?php
session_start();
if(!isset($_SESSION['sess_id']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Courses</title>
</head>
<?php include 'components/head.html' ?>
<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
background-image: url('img/bimg.jpg');
 background-size:auto;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px;
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;



 }

.title{

  text-align: center;
  padding: 10px;

 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;

  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  color:black;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<body>


  <div class="container-fluid" id="headings">
      <h1 style="font-size:50px;"><strong>Ikigai Tutorials</strong></h1>
      <h3 style="color: #1e1f1f;">Let's make the learning methods fun! </h3>


  </div>
<a href="logout.php"><button class="btn btn-dark" style="margin-left:92%">Logout</button></a>
<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="img/cse.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Computer Science</h1>
</div>
<div class="des">
 <p>Improve your coding skills now!<br>Click the button below to explore different concepts!</p>
<a href="computer.php"><button>Read More...</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/ece.jfif" width="250" height="200">
</div>
<div class="title">
 <h1>
Electronics</h1>
</div>
<div class="des">
 <p>Making the toughest concepts easy! Click the button below to explore different concepts!</p>
<a href="electronics.php"><button>Read More...</button></a>

 </script>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/lang.jpeg" width="250" height="200">
</div>
<div class="title">
 <h1>
Languages</h1>
</div>
<div class="des">
 <p>Fan of different cultures? Anime fan? BTS fan? Don't worry! We'll help you learn their languages!</p>
<a href="languages.php"><button>Read More...</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/music.jpg" width="250" height="200">
</div>
<div class="title">
 <h1>Musical Instruments</h1>
</div>
<div class="des">
 <p>Music is the medicine of the mind and it can change the world. Master such art in here! Check it out!</p>
<a href="music.php"><button>Read More...</button></a>
</div>
</div>
<!--cards -->



</div>

<?php include 'components/footer.html'  ?>
</body>
</html>
