<?php 
session_start();
 // echo $_SESSION['movie'];
 // echo $_POST['titleIs'];

 if($_SESSION['movie']== $_POST['titleIs'])
 {

  $data['check']=0;
  $data['poster']='<img src="'.$_SESSION['poster'].'" alt="..." class="img-thumbnail">';

  $data['wiki']='<a href="'.$_SESSION['wiki'].'"  target="_blank" ><button type="button" class="btn btn-primary">WIKIPEDIA LINK</button></a>';
  $data['result']="<h3>You win</h3>";
 }
 else
 {
 	$data['result']='<h3>You loose</h3>';
 }

 echo json_encode($data);
?>