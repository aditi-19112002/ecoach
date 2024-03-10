
<?php

$conn = new mysqli("localhost","root","","ecoach");

session_start();

if($conn->connect_error){
  echo "failed";
}

function redirect($page){
  echo "<script>window.open('$page','_self')</script>";
}
function alert($msg){
  echo "<script>alert('$msg')</script>";
}


function insertData($table,$data){
  global $conn;
  $cols= implode(",",array_keys($data));
  $values = implode("','",array_values($data));

  $query = $conn->query("insert into $table ($cols) values ('$values')");

  return $query;
}

// function for calling
function callingData($table,$cond = NULL){
  global $conn;

  if($cond  == NULL){
    $query = "select * from $table";
  }
  else{
    $query = "select * from $table WHERE $cond";
  }
  $query = $conn->query("select * from $table");

  $data = $query->fetch_all(MYSQLI_ASSOC);

  return $data;
 }
 //delete function
 Function deleteRecord($table,$cond){
  global $conn;
  $query = $conn->query("DELETE from $table WHERE $cond");
  return $query;
 }
 //count function
 function countRecords($table,$cond = NULL){
  global $conn;
 if($cond == NULL){
  $query = "select * from $table";
 }
 else{
  $query = "select * from $table WHERE $cond";
 }
 $result = $conn->query($query);
 $count = $result->num_rows;
return $count;

 }
 //students approve

 function approveStudent($roll){
  global $conn;
  $query = $conn->query("UPDATE students SET status ='1' WHERE  roll='$roll'AND status='0'");

  return $query;
 }

 //check if admin logged on not

 function checkAdmin(){
  if (isset($_SESSION['admin'])){
    redirect('login.php');
  }
 }
 //for disabled
 function disableStudent($roll){
  global $conn;
  $query = $conn->query("UPDATE students SET status ='2' WHERE  roll='$roll'AND status='1'");

  return $query;
 }

 ?> 