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

<div class="flex-1 bg-slate-700 p-16">
     <div class="flex space-x-6">
    <div class="w-1/2 bg-white text-black shadow-md p-4 mb-8">
        <div class="w-64 mt-4">
            <a href="" class="block px-4 py-2 bg-red-500 text-white rounded mb-2">Insert New category</a>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="cat_title" class="block text-black">Title</label>
                    <input type="text" id="title" name=" cat_title" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
               
                <div class="mb-3">
                    <label for="cat_description" class="block text-black">Description</label>
                    <textarea rows ="3" name="cat_description" id="cat_description" class="form-control w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                
                <div class="mb-3">
            <input type="submit" name="insert_cat" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-blue-600" value="Insert category">
          </div>
</form>
<?php
if(isset($_POST['insert_cat'])){
        $data = [
        'cat_title' => $_POST['cat_title'],
        'cat_description' => $_POST['cat_description'],
        ];
        if(insertData("categories",$data)){
            redirect("manage_categories.php");
        }
        else{
            alert("failed");
            redirect("manage_categories.php");
        }
       }
       ?>
</div>
</div>
</div>
</div>