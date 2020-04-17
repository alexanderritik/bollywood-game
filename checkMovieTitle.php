<?php 
$output=null;

session_start();
$movie=$_SESSION['movie'];
$hintmovie=$_SESSION['givenHint'];
//echo $movie;
//echo "<br>";
//echo $hintmovie;
$movie= str_split($movie);
//echo "<br>";
$letter=$_POST['letter'];
//echo $letter;
//echo "<br>";
$i=0;

$data['color']=0;

// for ($i=0; $i <strlen($hintmovie); $i++) { 
// 	echo $hintmovie[$i]," ";

// }
foreach($movie as $character){
	
  //for counting the space as span is used and it all tags counted a s tsring so to avoid that braekage of  charachter 
  if($character==" "){
  	 $i=$i+38;
  	 }
  // if($character=='A' ||$character=='E' ||$character=='I' ||$character=='O' ||$character=='U' )	 
  // {
  // 	$i=$i+1;
  // }
  
   if($character==$letter){
    $data['color']=1;
   	//echo $i;
   	//echo "<br>";

   	$hintmovie[$i]=$letter;
   	
   	//echo $hintmovie;
   //	echo "<br>";
   }
   	$i++;
  
}
//for matching the pattern
$match='_';
// $_SESSION['result']=0;
for ($l=0; $l < strlen($hintmovie) ; $l++) { 
	$data['check']=0;
	if ($hintmovie[$l]==$match) {

		$data['check']=1;
		
		break;
	}	
}
if($data['check']==0)
{
	$data['poster']='<img src="'.$_SESSION['poster'].'" alt="..." class="img-thumbnail rounded mx-auto d-block" >';
	$data['wiki']='<a href="'.$_SESSION['wiki'].'" target="_blank" ><button type="button" class="btn btn-primary">WIKIPEDIA LINK</button></a>';
	$data['result']="<h3>Hurray You Win</h3>";
}
else
{
  $data['poster']='<img src="'.$_SESSION['poster'].'" alt="..." class="img-thumbnail rounded mx-auto d-block" >';
  $data['wiki']='<a href="'.$_SESSION['wiki'].'" target="_blank" ><button type="button" class="btn btn-primary">WIKIPEDIA LINK</button></a>';
	$data['result']='<h3>Oops! You Loose <br> The correct movie is</h3>';
}



  $_SESSION['givenHint']=$hintmovie;

  $data['output'] =' <br> <div class="jumbotron col-13" >
    <h1 class="showmovie" >'.$hintmovie.'</h1>
    </div>';

echo json_encode($data);

?>