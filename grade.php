<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>


</head>
<?php include 'components/head.html' ?>
<style type="text/css">
*
{ margin: 0; padding: 0; }
body
{
background-image: url(img/bimg.jpg);
background-size: cover;
	font: 14px Georgia, serif; }

#page-wrap
 { width: 500px; margin: 0 auto; }

.h1
{ margin: 25px 0; font: 14px Georgia, Serif; text-transform: uppercase; letter-spacing: 3px; }

#quiz input {
    vertical-align: middle;
}

#quiz ol {
   margin: 0 0 10px 20px;
}

#quiz ol li {
   margin: 0 0 20px 0;
}

#quiz ol li div {
   padding: 4px 0;
}

#quiz h3 {
   font-size: 17px; margin: 0 0 1px 0; color: #666;
}

#results {
    font: 44px Georgia, Serif;
}
.pad{
	margin:25px;
}
</style>
<body>
	<div class="container-fluid" id="headings">
			<h1 style="font-size:50px;"><strong>Ikigai Tutorials</strong></h1>
			<h3 style="color: #1e1f1f;">Let's make the learning methods fun! </h3>
</div>

	<div id="page-wrap">

		<h1 class="h1">Final Quiz for Lip building</h1>


        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }

            echo "<div id='results'>$totalCorrect / 5 correct</div>";

        ?>
<a href="c_courses.php"><button class="btn btn-dark pad" class="button" style="margin-top:10%">Go Back Home</button></a>
	</div>


	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

	

</body>

</html>
