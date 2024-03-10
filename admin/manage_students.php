
<?php include "../config.php";
checkAdmin();

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage stusdent</title>
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
         <h2 class="text-white font-semibold text-2xl">Admin / Manage students</h2>
      </div>
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="px-6 py-3 text-left">ID</th>
        <th class="px-6 py-3 text-left">Name</th>
        <th class="px-6 py-3 text-left">Contact</th>
        <th class="px-6 py-3 text-left">Email</th>
        <th class="px-6 py-3 text-left">Gender</th>
        <th class="px-6 py-3 text-left">status</th>
        <th class="px-6 py-3 text-left">Action</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <?php 
      $callingData = callingData("students","status>0");
      foreach($callingData as $value):
      ?>
      <tr>
        <td><?= $value['roll'];?></td>
        <td><?= $value['name'];?></td>
        <td><?= $value['contact'];?></td>
        <td><?= $value['email'];?></td>
        <td><?= $value['gender'];?></td>
        <td><?php
        if($value['status'] == 2){
         echo "Disable";
        }
        else if($value['status'] == 1){
          echo "Active";
        }
        ?> </td>
        <td>
        <a href="" class=" p-2 bg-red-500 text-white rounded">view</a>
        <?php
        if ($value['status'] == 1):?>
        <a href="?disable=<?= $value['roll'];?>" class=" p-2 bg-yellow-500 text-white rounded">Disabled</a>
        <?php endif;?>
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

if(isset($_GET['disable'])){
  $roll = $_GET['disable'];
  if(disableStudent($roll)){
      redirect('manage_students.php');
  }
}
?>