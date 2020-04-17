<?php
session_start();
$output=null;
include('dbcon.php');
if ($_POST['choice']==0) {
	$table="movie_data";
}
else
{
	$table="movie_data1";
}
//echo $table;
// movie_data table conatin bollywood movies from 2010 to 2019 
// movie_data1 table conatin bollywood movies from 2009 to 1990 
$query="SELECT * FROM $table ORDER BY RAND()";
$result=mysqli_query($con,$query) or die("error");
$go=mysqli_fetch_assoc($result);
$movie=strtoupper($go['movie']);

$_SESSION['poster']=$go['poster_path'];
$_SESSION['wiki']=$go['description'];
//echo $_SESSION['poster'];
 //echo $movie;
   $_SESSION['movie']=$movie;
//echo "<br>";
$movieArray=str_split($movie);
//echo "\n";

//echo "<br>";
$consonants=array('B','Q','W','R','T','Y','P','S','D','F','G','H','J','K','L','Z','X','C','V','N','M');

$underscore="_";
$space='<span style="color: white;" > | </span>';
// $underscore='<span style="color: red;"> _ </span>';

// // $newMovie=null;
// // echo "<br>";
// $space='<span style="color: white;" > | </span>';
// $space='<span style="color: white;" > &nbsp&nbsp </span>';
$Movie1 = str_replace(' ',$space,$movieArray);
$Movie1= implode("", $Movie1);
// echo $Movie1;

$newMovie = str_replace($consonants,$underscore,$Movie1);
 //echo gettype($newMovie);
  // echo $newMovie[1];
  // for ($i=0; $i <strlen($newMovie) ; $i++) { 
  //   echo $newMovie[$i]," ";
  // }
   $_SESSION['givenHint']=$newMovie;

$output .='<br><div class="jumbotron col-13" >
    <h1 class="showmovie">'.$newMovie.'</h1>
  </div>';
 echo $output;
// foreach($movieArray as $character){
//     if ($character == 'A' || $character == 'E' ||$character == 'I' ||$character == 'O' ||$character == 'U') {
//     	$newMovie=str_replace($character,$character,$movie);
//     	echo $newMovie;
//     	echo "<br>";
//     }
//     else{
//     	$newMovie=str_replace($character,$underscore,$movie);
//     	echo $newMovie;
//     	echo "<br>";
//     }
// }

?>