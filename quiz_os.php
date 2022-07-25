<!DOCTYPE html>
<html>
<head>
	<title>Quiz OS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel = "icon" href =
"https://cdn.iconscout.com/icon/premium/png-512-thumb/quiz-18-831952.png"
        type = "image/x-icon">


</head>
<?php include 'components/head.html' ?>
<style media="screen">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap');


body{
margin: 0;
font-size: 16px;
background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
background-size: 500% 500%;
 font-family: "Montserrat", sans-serif;
font-weight: 400;
}

*{
box-sizing: border-box;
padding: 0;
margin: 0;
outline: none;
}

.custome-box{
max-width: 700px;
background-color: #ffffff ;
margin:40px auto;
padding: 30px;
border-radius: 10px;
animation: fadeInRight 1s ease;
}
@keyframes fadeInRight{
0%{
  transform: translateX(40px);
  opacity: 0;
}
100%{
  transform: translateX(0px);
  opacity: 1;
}
}

.custome-box::before,
.custome-box::after
{
content: '';
clear: both;
display: table;
}
.custome-box.hide{
display: none;
}

.home-box h2{
font-size: 18px;
font-color: #000000;
font-weight: 500;
margin-bottom: 15px;
line-height: 25px;
}
.home-box p{
font-size: 16px;
margin-bottom: 10px;
line-height: 22px;
color: #000000;
font-weight: 400;
}

.home-box p span{
font-weight: 500;
}

.home-box btn{
margin-top: 20px;
}

.btn{
padding: 15px 45px;
background-color: #009688;
color: #ffffff;
border: none;
border-radius: 5px;
font-family: 'Montserrat', sans-serif;
font-size: 16px;
cursor: pointer;
display: inline-block;
}

.quiz-box .question-no,
.quiz-box .question-text,
.quiz-box .opt-container,
.quiz-box .next-question-btn,
.quiz-box .ans-indicator{
width: 100%;
float: left;

}


.quiz-box .question-no{
font-size:	18px;
font-weight: 600;
border-bottom: 1px solid #cccccc;
padding-bottom:  10px;
color: #009688;
line-height: 25px;
margin: 0;
}

.quiz-box .question-text{
font-size: 22px;
color: #000000;
line-height: 28px;
font-weight: bold 400;
padding: 20px 0;
}

.quiz-box .opt-container{
cursor: pointer;
}

.quiz-box .opt-container .option{
background-color:  #cccccc;
padding:13px 15px;
font-size: 16px;
line-height: 22px;
color: #000000;
border-radius: 5px;
margin-bottom: 10px;
text-transform: capitalize;
opacity: 0;
animation: fadeIn 0.3s ease forwards;
position: relative;
overflow: hidden;
}
.quiz-box .opt-container .option.already-answered{
pointer-events: none;
}

@keyframes fadeIn{
0%{
  opacity: 0;
}
100%{
  opacity: 1;
}
}
.quiz-box .opt-container .option.correct::before{
content: '';
position: absolute;
left: 0;
top: 0;
height: 100%;
width: 100%;
background-color: green;
z-index: -1;
animation: slideInLeft .5s ease forwards
}
@keyframes slideInLeft{
0%{
  transform: translateX(-100%);
}
100%{
  transform: translateX(0%);
}
}
.quiz-box .opt-container .option.wrong::before{
content: '';
position: absolute;
left: 0;
top: 0;
height: 100%;
width: 100%;
background-color: red;
z-index: -1;
animation: slideInLeft .5s ease forwards
}

.quiz-box .opt-container .option.correct{
color: white;
}
.quiz-box .opt-container .option.wrong{
color: white;
}

.quiz-box .btn{
margin: 15px 0;
}

.quiz-box .ans-indicator{
 border-top: 1px solid #cccccc;
}
.quiz-box .ans-indicator div{
height: 40px;
width: 40px;
display: inline-block;
background: #cccccc;
border-radius: 50%;
margin-right: 3px;
margin-top: 15px;
}
.quiz-box .ans-indicator div.correct{
background-color: green;
background-image: url("../img/correct.png");
background-size: 50%;
background-repeat: no-repeat;
background-position: center;
}
.quiz-box .ans-indicator div.wrong{
background-color: red;
background-image: url("../img/wrong.png");
background-size: 50%;
background-repeat: no-repeat;
background-position: center;
}



.result-box{
text-align: center;
}
.result-box.hide{
display: none;
}
.result-box h1{
font-size: 36px;
line-height: 42px;
color: #009688;
}
.result-box table{
width: 100%;
border-collapse: collapse;
margin: 30px 0;
}
.result-box table td{
border: 1px solid #cccccc;
padding: 8px 15px;
font-weight: 500;
color: #000000;
width: 50%;
text-align: left;
font-size: 18px;
}

.result-box .btn{
margin-right: 20px;
}

@media (max-width: 767px){
.result-box .btn{
  margin-bottom: 15%;
}
body{
  padding: 15%;
  }
}
</style>
<body>
  <div class="container-fluid" id="headings">
      <h1><strong>Ikigai Tutorials</strong></h1>
      <h3 style="color: #1e1f1f;">Let's make the learning methods fun!</h3>
  </div>
	<div class="home-box custome-box ">
		<h1 align="center">Welcome To The World of<br/> Operating systems!</h1>
		<br/>
		<h2><b>Instructions:</b></h2>
		<p>Total number of questions: <span class="total-question">10</span></p>

		<br/>
		<button type="button" class="btn" onclick="startQuiz()">Start Quiz</button>
	</div>

	<div class="quiz-box custome-box hide">
		<div class="question-no">

		</div>
		<div class="question-text">

		</div>
		<div class="opt-container">

		</div>
		<div class="next-question-btn">
			<button type="button" class="btn" onclick=""><a href="quiz_os.php" style="color: white;">Back</a></button>
			<button type="button" class="btn" onclick="next()">Next</button>
		</div>
		<div class="ans-indicator">


		</div>

	</div>

	<div class="result-box custome-box hide">
		<h1>Quiz Result</h1>
		<table>
			<tr>
				<td>Total Question</td>
				<td><span class="tot-question"></span></td>
			</tr>
			<tr>
				<td>Attempt</td>
				<td><span class="tot-attempt"></span></td>
			</tr>
			<tr>
				<td>Correct</td>
				<td><span class="tot-correct"></span></td>
			</tr>
			<tr>
				<td>Wrong</td>
				<td><span class="tot-wrong"></span></td>
			</tr>
			<tr>
				<td>Percentage</td>
				<td><span class="tot-percentage"></span></td>
			</tr>
			<tr>
				<td>Your Total Score</td>
				<td><span class="tot-score"></span></td>
			</tr>

		</table>
		<button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
		<a href="c_courses.php"<button type="button" class="btn">Go To Home</button></a>
	</div>


	<script type="text/javascript" src="js/question_os.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
