<!DOCTYPE html>
 <html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>house</title>
    <meta name="description">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body>
 
<div class="bg-gray-100 flex justify-center items-center h-screen">
 
<div class="w-1/2 h-screen hidden lg:block">
  <img src="images/pexels-terry-magallanes-2635038.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>

<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <div class="text-slate-100 items-center">
    <img src="images/lg.png" alt="" class="h-15 w-16 mx-auto pb-3">
   <div class="text-center pb-3 text-black text-2xl font-bold ">DreamHouse</div>
</div>
  <h1 class="text-2xl font-semibold mb-4">Login</h1>
  <form action="/login" method="POST">
    @csrf
    <div class="mb-4">
      <label for="email" class="block text-gray-600">Username</label>
      <input type="email" id="email" name="logemail" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>

    <div class="mb-4">
      <label for="password" class="block text-gray-600">Password</label>
      <input type="password" id="password" name="logpassword" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
   
   
    <div class="mb-6 text-blue-500">
      <a href="#" class="hover:underline">Forgot Password?</a>
    </div>

    <button type="submit" class="bg-black hover:bg-black-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
  </form>

  <div class="mt-6 text-blue-500 text-center">
    <a href="/register" class="hover:underline">Sign up Here</a>
  </div>
</div>
</div>
</body>
</html>