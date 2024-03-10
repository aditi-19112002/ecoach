  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
<div class="flex bg-black text-white py-3 px-36 gap-4 items-center justify-between w-full">
     <div class="flex items-center">
      <img src="https://tse3.explicit.bing.net/th?id=OIP.exiNXp5_p9qHNCZQW-Ip7gHaEo&pid=Api&P=0&h=180" class="w-16">
    </div> 
    
    <div class=" flex items-center gap-8">
    <a href="" class=" text-white font-bold">
        <span>Login</span>
      </a>
      <a href="" class="block px-4 py-2 bg-white text-black rounded">sing up for free</a>
      <a href="" class="block px-4 py-2 bg-white text-black rounded"><i class="bi bi-github"></i></a>
    </div>
    </div>
    <div class="container mx-auto flex justify-center items-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-80 mt-3">
        <h2 class="text-2xl font-semibold mb-4">Apply for Admission</h2>
        <form method="post" action=""> 
            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-medium">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-600 text-sm font-medium">Address</label>
                <input type="text" id="address" name="address" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="contact" class="block text-gray-600 text-sm font-medium">Contact</label>
                <input type="tel" id="contact" name="contact" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-600 text-sm font-medium">Gender</label>
                <select id="gender" name="gender" class="w-full p-2 border rounded-md" required>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Others</option>
                </select>
            </div>
            <div class="flex items-center justify-center">
                 <button type="submit" name="send" class="bg-black text-white py-2 px-4 rounded-md">Register</button>
                
            </div>
        </form>
    </div>
</div>

    
            <?php
               include_once "config.php";
       if(isset($_POST['send'])){
        $data = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "address" => $_POST['address'],
        "password" => md5($_POST['password']),
        "contact" => $_POST['contact'],
        "gender"  => $_POST['gender']
        ];
        insertData("students",$data);
       }
       ?>
        </div>
    </div>
</body>
</html>
