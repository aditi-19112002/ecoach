
<?php include "../config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
<?php include_once "admin_header.php";
  
   $data = [
    'email' => 'aditikeshri21@gmail.com',
    'password' => md5('123456789')
   ];
   insertData("admin",$data);


?> 

    <div class="flex-1 flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-96 mt-4">
            <h2 class="text-2xl font-semibold mb-6">Login</h2>
            <form method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" placeholder="Email" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-600 text-sm mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md" placeholder="Password" required>
            </div>
            <button type="submit" name="admin_login" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Log In</button>
            </form>

            <?php 
             if(isset($_POST['admin_login'])){
                
                $email = $_POST['email'];
                 $password = md5($_POST['password']);
                 $query = $conn->query("select * from admin where email='$email' AND password='$password'");

                 $count =  $query->num_rows;
                 if($count > 0){
                    $_SESSION['admin'] = $email;
                    redirect('index.php');
                 }
                 else{
                    alert("email or password may incorrect try again");
                     redirect("login.php");
                 }
             }
            ?>
        </div>
    </div>
</body>
</html>
