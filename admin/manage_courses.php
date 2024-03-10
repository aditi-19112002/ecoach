<?php include "../config.php";
checkAdmin();

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<body class="bg-gray-700">
<?php include_once "admin_header.php";?> 
<div class="flex">
   <?php include_once "sidebar.php";?>

<div class="flex-1 bg-gray-700 p-4">
<div class="w-full flex justify-between items-center mb-4">
         <h2 class="text-white font-semibold text-2xl">Admin / Manage courses</h2>
         <a href="insert_course.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Insert new courses</a>
      </div>
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="px-6 py-3 text-left">ID</th>
        <th class="px-6 py-3 text-left">Title</th>
        <th class="px-6 py-3 text-left">category</th>
        <th class="px-6 py-3 text-left">Instructor</th>
        <th class="px-6 py-3 text-left">Price</th>
        <th class="px-6 py-3 text-left">Image</th>
        <th class="px-6 py-3 text-left">Lang</th>
        <th class="px-6 py-3 text-left">Action</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <?php 
      $callingData = callingData("course JOIN categories on course.category_id = categories.cat_id");
      foreach($callingData as $value):
      ?>
      <tr>
        <td><?= $value['course_id'];?></td>
        <td><?= $value['title'];?></td>
        <td><?= $value['cat_title'];?></td>
        <td><?= $value['instructor'];?></td>
        <td><del><?= $value['price'];?></del> <span><?= $value['discount_price'];?></span></td>
        <td>
          <img  width="60px" height="auto"src="images/courses/<?= $value['image'];?>" alt="">
      </td>
        <td><?= $value['lang'];?></td>
        <td> 
        <a href="?course_delete=<?= $value['course_id'];?>" class=" p-2 bg-yellow-500 text-white rounded">Delete</a>
        <a href="" class=" p-2 bg-green-500 text-white rounded">Edit</a>
        </td>
      </tr>

<?php endforeach;?>
</tbody>

</div>
</div>
</div>
<style>
  table {
    width:100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #333;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

</body>
</html>

<?php

if (isset($_GET['course_delete'])){
  $id = $_GET['course_delete'];

  if(deleteRecord('course',"course_id='$id'")){
         redirect("manage_courses.php");
  }
  else{
    alert("fail to delete");
  }
}
?>