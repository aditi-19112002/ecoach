<?php include "../config.php";
checkAdmin();
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panael-Ecoach</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<body class="bg-gray-700">
<?php include_once "admin_header.php";?> 
<div class="flex">
   <?php include_once "sidebar.php";?>

<div class="flex-1 bg-gray-700">

  <div class="flex space-x-4 mt-6 ml-6 mr-6">
  <div class="w-1/4 bg-blue-500 p-10 text-white">
    <h2><?= countRecords('students',"status='0'"); ?></h2>
    <h2>Total Admission</h2>
  </div>
  <div class="w-1/4 bg-green-500 p-10 text-white">
  <h2><?= countRecords('students',"status='1'"); ?></h2>
    <h2>Total Students</h2>
  </div>
  <div class="w-1/4 bg-yellow-500 p-10 text-white">
  <h2><?= countRecords('course');?></h2>
     <h2>Total courses</h2>
  </div>
  <div class="w-1/4 bg-pink-400 p-10 text-white">
  <h2><?= countRecords('categories');?></h2>
     <h2>Total categories</h2>
  </div>
</div>
</div>
</div>

</body>
</html>