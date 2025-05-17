<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Me - Mach Mol</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen font-sans text-gray-800">
  <?php include 'sidebar.php'; ?>

  <div class="max-w-4xl mx-auto mt-16 p-6 sm:p-10 bg-white rounded-2xl shadow-lg">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
      
      <div class="flex-shrink-0">
        <img src="mol.jpg" alt="Profile Photo"
             class="w-40 h-40 rounded-full object-cover shadow-md border-4 border-blue-200" />
      </div>
      
      <div class="text-center md:text-left">
        <h1 class="text-3xl font-bold text-blue-700">Mach Mol</h1>
        <p class="text-rose-600 text-sm mt-1">Web Developer</p>
        <p class="text-gray-800 text-sm mt-1">Class : A6-Room : 202</p>

        <div class="mt-4 text-gray-700 space-y-4">
          <h1 class="text-2xl text-blue-600">Management System Royal University of phnom Penh </h1> 
           <p  class="text-2xl text-rose-500"> PHP CRUD Project</p>
          <p>This project is a User Management System developed for the Royal University of Phnom Penh (RUPP). It is built using HTML, PHP, and a PostgreSQL database to perform essential CRUD operations—Create, Read, Update, and Delete.</p>
           <p>The system is designed to help university administrators manage user information such as students, lecturers, and staff more effectively.</p>
          <p>Feel free to reach out if you have any questions or would like to connect!</p>
        </div>
        <div class="mt-6 flex justify-center md:justify-start gap-4">
          <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Contact Me</a>
          <a href="#" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition">Portfolio</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
