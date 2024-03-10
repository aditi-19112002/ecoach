<?php include "../config.php";
checkAdmin();

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage category</title>
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
         <h2 class="text-white font-semibold text-2xl">Admin / Manage categories</h2>
         <a href="insert_category.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Insert new category</a>
      </div>
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="px-6 py-3 text-left">cat id</th>
        <th class="px-6 py-3 text-left">Title</th>
        <th class="px-6 py-3 text-left">Description</th>
        <th class="px-6 py-3 text-left">Action</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <?php 
      $callingData = callingData("categories");
      foreach($callingData as $value):
      ?>
      <tr>
        <td><?= $value['cat_id'];?></td>
        <td><?= $value['cat_title'];?></td>
        <td><?= $value['cat_description'];?></td>
        <td> 
        <a href="?cat_delete=<?= $value['cat_id'];?>" class=" p-2 bg-yellow-500 text-white rounded">Delete</a>
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

if (isset($_GET['cat_delete'])){
  $id = $_GET['cat_delete'];

  if(deleteRecord('categories',"cat_id='$id'")){
         redirect("manage_categories.php");
  }
  else{
    alert("fail to delete");
  }
}
?>