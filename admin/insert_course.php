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
            <a href="" class="block px-4 py-2 bg-red-500 text-white rounded mb-2">New course</a>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="block text-black">course_title</label>
                    <input type="text" id="title" name="title" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-black">Price</label>
                    <input type="text" id="price" name="price" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-black">Discount_price</label>
                    <input type="text" id="discount_price" name="discount_price" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
                </div>
                <div class="mb-3">
                    <label for="" class="block text-black">Instructor</label>
                    <input type="text" id="instructor" name="instructor" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-black">Language</label>
                    <input type="text" id="lang" name="lang" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-black">cover Image</label>
                    <input type="file" id="image" name="image" class=" form-control w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-3">
             <label for="" class="block text-black">Category_id</label>
             <select id="" name="category_id" class="form-control">
        <option value="">select your category</option>
        <?php 
        $callingCat = callingData("categories");
        foreach($callingCat as $cat):
            $id = $cat['cat_id'];
            $title = $cat['cat_title'];
            echo "<option value='$id'>$title</option>";
        endforeach;
            ?>
    </select>
</div> 
                <div class="mb-3">
                    <label for="" class="block text-black">Description</label>
                    <textarea rows ="3" name="description" id="description" class="form-control w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                
                <div class="mb-3">
            <input type="submit" name="insert_course" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-blue-600" value="Insert course">
          </div>
</form>
<?php
if(isset($_POST['insert_course'])){
    // image work
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_image,"images/courses/$image");
    
        $data = [
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'discount_price' => $_POST['discount_price'],
        'instructor' => $_POST['instructor'],
        'lang' => $_POST['lang'],
        'image' => $image,
        'category_id' => $_POST['category_id'],
        'description' => $_POST['description'],
        'category_id' => $_POST['category_id']

        ];
        if(insertData("course",$data)){
            redirect("manage_course.php");
        }
        else{
            alert("failed");
            redirect("manage_course.php");
        }
       }
       ?>
</div>
</div>
</div>
</div>