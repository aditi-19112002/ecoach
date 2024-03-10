

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

    <div class="flex-1 flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-96 mt-4">
            <h2 class="text-2xl font-semibold mb-6">Login</h2>
            <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" placeholder="Email" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-600 text-sm mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md" placeholder="Password" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>
