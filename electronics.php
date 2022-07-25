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
      <h3 style="color: #1e1f1f;">Let's make the learning methods fun!<a href="logout.php"><button class="btn btn-dark" style="margin-left:92%">Logout</button></a> </h3>


  </div>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="img/mes.png" width="250" height="200"/>
</div>
<div class="title">
 <h1>Microcontrollers and Embedded systems</h1>
</div>
<div class="des">
 <p>Skills you will gain: Microcontrollers vs Microprocessors, Data processing instructions, Looping constructs, Embedded systems</p>
<a href="e_courses.php"><button>Explore</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/sns.jpg" width="250" height="200">
</div>
<div class="title">
 <h1>
Signals and <br>Systems</h1>
</div>
<div class="des">
 <p>Skills you will gain: Introduction to signals, Laplace transform, Z transform, Fourier transform, Fourier series,  Systems, Sampling theorem</p>
<a href="e_courses.php"><button>Explore</button></a>

 </script>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/dc.jpeg" width="250" height="200">
</div>
<div class="title">
 <h1>
Digital <br>Communication</h1>
</div>
<div class="des">
 <p>Skills you will gain: Digital baseband systems, Passband digital modulation schemes, Noncoherent Modulation, Channel coding, Spatial modulation</p>
<a href="e_courses.php"><button>Explore</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/dsp.jpg" width="250" height="200">
</div>
<div class="title">
 <h1>
Digital signal processing</h1>
</div>
<div class="des">
 <p>Skills you will gain: Signal statistiics and noise, Quantization and sampling theorem, Linear systems and superposition, Convolution, Fourier transforms</p>
<a href="e_courses.php"><button>Explore</button></a>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="img/emc.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Embedded <br> C</h1>
</div>
<div class="des">
 <p>Skills you will gain: Basics 101, Real time clock driver, Analogues, Communication protocols, Non volatile flash memory, PWM</p>
<a href="e_courses.php"><button>Explore</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="img/itc.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Information theory and coding</h1>
</div>
<div class="des">
 <p>Skills you will gain: Source coding, Channel capacity, Linear complexity, Code construction, Existence and analysis, LDPC codes</p>
<a href="e_courses.php"><button>Explore</button></a>
</div>
</div>






<?php include 'components/footer.html'  ?>
</body>
</html>
