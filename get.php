<?php
$user_id=1;
if(isset($_POST['data'])){
	$conn=new mysqli("localhost","root","","captcha");
	$sql="select * from noti where user_id='$user_id' and status='unseen'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		echo $res->num_rows;
	}else{
		echo 0;
	}
}
if(isset($_POST['update'])){
	$conn=new mysqli("localhost","root","","captcha");
	$sql="update noti set status='seen' where user_id='$user_id' and status='unseen'";
	$conn->query($sql);
}
?>