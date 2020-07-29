<?php 

  $link = mysqli_connect("localhost", "root", "", "Minor");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

	
	$i=0;$j=0;$k=0;
	$currentuser = mysqli_real_escape_string($link, $_REQUEST['currentuser']);
	
	if(isset($_POST['submit']))
	{
	 $q1 = $_POST["radio1"];
     $q2 = $_POST['radio2'];
	 $q3 = $_POST['radio3'];
     $q4 = $_POST["radio4"];
	 $q5 = $_POST["radio5"];
     $q6 = $_POST["radio6"];
	 $q7 = $_POST["radio7"];
	 $q8 = $_POST["radio8"];
     $q9 = $_POST['radio9'];
	 $q10 = $_POST['radio10'];
     $q11 = $_POST["radio11"];
	 $q12 = $_POST["radio12"];
     $q13 = $_POST["radio13"];
	 $q14 = $_POST["radio14"];
	 



 if($q1=='Radio1')
{
	$i=$i+1;
}

if($q1=='Radio2')
	{
		$j=$j+1;
	}
	
		
if($q1=='Radio3')
	{
		$k=$k+1;
	}
	
	if($q2=='Radio4')
{
	$i=$i+1;
}

if($q2=='Radio5')
	{
		$j=$j+1;
	}
	
		
if($q2=='Radio6')
	{
		$k=$k+1;
	}
	
if($q3=='Radio7')
	{
		$k=$k+1;
	}
	
	if($q3=='Radio8')
{
	$i=$i+1;
}

if($q3=='Radio9')
	{
		$j=$j+1;
	}
	
		
if($q4=='Radio10')
	{
		$k=$k+1;
	}
if($q4=='Radio11')
	{
		$k=$k+1;
	}
	
	if($q4=='Radio12')
{
	$i=$i+1;
}

if($q5=='Radio13')
	{
		$j=$j+1;
	}
	
		
if($q5=='Radio14')
	{
		$k=$k+1;
	}if($q5=='Radio15')
	{
		$k=$k+1;
	}
	
	if($q6=='Radio16')
{
	$i=$i+1;
}

if($q6=='Radio17')
	{
		$j=$j+1;
	}
	
		
if($q6=='Radio18')
	{
		$k=$k+1;
	}	

if($q7=='Radio19')
	{
		$k=$k+1;
	}
	
	if($q7=='Radio20')
{
	$i=$i+1;
}

if($q7=='Radio21')
	{
		$j=$j+1;
	}
	
if($q8=='Radio22')
	{
		$k=$k+1;
	}
	
	if($q8=='Radio23')
{
	$i=$i+1;
}

if($q8=='Radio24')
	{
		$j=$j+1;
	}	
if($q9=='Radio25')
	{
		$k=$k+1;
	}
	
	if($q9=='Radio26')
{
	$i=$i+1;
}

if($q9=='Radio27')
	{
		$j=$j+1;
	}
if($q10=='Radio28')
	{
		$k=$k+1;
	}
	
	if($q10=='Radio29')
{
	$i=$i+1;
}

if($q10=='Radio30')
	{
		$j=$j+1;
	}
if($q11=='Radio31')
	{
		$k=$k+1;
	}
	
	if($q11=='Radio32')
{
	$i=$i+1;
}

if($q11=='Radio33')
	{
		$j=$j+1;
	}
if($q12=='Radio34')
	{
		$k=$k+1;
	}
	
	if($q12=='Radio35')
{
	$i=$i+1;
}

if($q12=='Radio36')
	{
		$j=$j+1;
	}
if($q13=='Radio37')
	{
		$k=$k+1;
	}
	
	if($q13=='Radio38')
{
	$i=$i+1;
}

if($q13='Radio39')
	{
		$j=$j+1;
	}	
if($q14=='Radio40')
	{
		$k=$k+1;
	}
	
	if($q14=='Radio41')
{
	$i=$i+1;
}

if($q14=='Radio42')
	{
		$j=$j+1;
	}	
	
	 
}


$sql = "INSERT INTO entry (username, first, second, third) VALUES ('$currentuser', '$i','$j','$k')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

   
	if($i>$j=$j AND $i>=$k)
	{
		$ans='PHYSICS, CHEMISTRY and MATHS';
	    $number=($i/14)*100;
	}
	else if ($j>=$i AND $j>=$k)
	{
		$ans='PHYSICS, CHEMISTRY AND BIOLOGY';
		$number=($j/14)*100;
	}
	else
	{
		$ans='COMMERCE';
		$number=($k/14)*100;
	}
	
	echo "<img src='C:\xampp\htdocs\Minor\images\Capture.png' alt='photo of me' />";
//echo $i,$j,$k;	
	echo "<h1> Our analysis suggests that you have shown interests in the following subject:  " ;
echo $ans. ' with ' .$number. ' % in our guidance';

 echo "<br><h2> We have considered these results, while we evaluated your inherent strengths and analysed them for different career fitments.";

 echo "<br> What we have gained through this assessment is just a “reality check”. The real action begins now with your hard work and focused approach." ;
header( "refresh:20;url=index.html" );
 mysqli_close($link);

?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 ?>