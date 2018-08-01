<?php
  if(!empty($_POST)) {
      include "database/db.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	$bodtext=$_POST['editor'.$_POST['recordid']];
    $sql = "UPDATE `home_nav` SET `heading` = '".$_POST["heading"]."' ,`body_text`='".$bodtext."' WHERE `home_nav`.`id` ={$_POST['recordid']}";
    //echo $sql;die;
    $msg['flag']="E";
    if($result =$conn->query($sql)=== TRUE)
    {
        $msg['flag']="S";
    }
    echo json_encode($msg);die;

  }
?>
