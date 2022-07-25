<!DOCTYPE html>
<html>
<head>
 <title>Cards</title>
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
      <h3 style="color: #1e1f1f;">Let's make the learning methods fun!</h3>


  </div>
  <a href="logout.php"><button class="btn btn-dark" style="margin-left:92%">Logout</button></a>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="img/c.png" width="250" height="200"/>
</div>
<div class="title">
 <h1>C programming</h1>
</div>
<div class="des">
 <p>Skills you will gain: Software development process, Algorithms, C programming, Problem solving, Compiler, Debugging</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/cpp.jpg" width="250" height="200">
</div>
<div class="title">
 <h1>
C++</h1>
</div>
<div class="des">
 <p>Skills you will gain: Software development, C++ programming, Problem solving, Compiler, Debugging, Graph algorithms</p>
<a href="c_courses.php"><button>Explore</button></a>

 </script>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/java.jpg" width="250" height="200">
</div>
<div class="title">
 <h1>
Java</h1>
</div>
<div class="des">
 <p>Skills you will gain: Java programming, Object oriented programming, Problem solving, Algorithms, Hash tables, Real time applications</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="img/python.jpg" width="250" height="200">
</div>
<div class="title">
 <h1>
Python</h1>
</div>
<div class="des">
 <p>Skills you will gain: Python programming, Database(DBMS), Python syntax and semantics, Web scraping, Sqlite</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>
<!--cards -->
<div class="card">

<div class="image">
   <img src="img/dsa.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Data Structures and algorithms</h1>
</div>
<div class="des">
 <p>Skills you will gain: Arrays, Stacks, Queues, Linked lists, Algorithms, Hash tables, Trees, Graphs</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="img/web.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Web development</h1>
</div>
<div class="des">
 <p>Skills you will gain: Html, Javascript, jquery, Cascading style sheets, CSS frameworks, ReactJS, MongoDB, RestAPI</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>



<div class="card">

<div class="image">
   <img src="img/os.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Operation systems</h1>
</div>
<div class="des">
 <p>Skills you will gain: Powershells, Linux file Systems, Linux, Command-line interface, Configuring devices, Traffic devices</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>

<div class="card">

<div class="image">
   <img src="img/dbms.jpg" width="250" height="200"/>
</div>
<div class="title">
 <h1>Database Management System</h1>
</div>
<div class="des">
 <p>Skills you will gain: Database design, Relational database, MYSQL, Normalization</p>
<a href="c_courses.php"><button>Explore</button></a>
</div>
</div>





<?php include 'components/footer.html'  ?>
</body>
</html>
