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

  <div class="max-w-5xl mx-auto mt-16 p-6 sm:p-10 bg-white rounded-2xl shadow-lg">
    <div class="flex flex-col md:flex-row items-start gap-8">
      <div class="flex-shrink-0">
        <img src="mol.jpg" alt="Profile Photo"
             class="w-40 h-40 rounded-full object-cover shadow-md border-4 border-blue-200" />
      </div>
      <div class="text-left">
        <h1 class="text-3xl font-bold text-blue-700">Mach Mol</h1>
        <p class="text-rose-600 text-sm mt-1">Web Developer</p>
        <p class="text-gray-800 text-sm mt-1">Class: A6 – Room: 202</p>

        <div class="mt-6 text-gray-700 space-y-4">
          <h2 class="text-2xl text-blue-600 font-semibold">Management System Royal University of Phnom Penh </h2>
          <span class="text-sm text-black">PHP CRUD Project</span>
          <p class="text-lg text-rose-500 font-medium">Buil with PHP , HTML , and PostgreSQL</p>
          
          <p>
            This project is a User Management System developed for the Royal University of Phnom Penh (RUPP). It helps university staff manage user information such as students, lecturers, and academic personnel efficiently.
          </p>
          <div>
            <h3 class="text-xl font-semibold text-blue-700 mt-6">🔧 Technologies Used</h3>
            <ul class="list-disc list-inside text-gray-800">
              <li><strong>Frontend:</strong> HTML with Tailwind CSS for a clean and responsive UI</li>
              <li><strong>Backend:</strong> PHP for server-side processing</li>
              <li><strong>Database:</strong> PostgreSQL for secure and scalable data storage</li>
            </ul>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-blue-700 mt-6">⚙️ Core Features</h3>
            <ul class="list-disc list-inside text-gray-800">
              <li><strong>Create User –</strong> Add new users with personal and academic details like name, department, email, and position.</li>
              <li><strong>Read User List –</strong> Display all users in a searchable, sortable table view.</li>
              <li><strong>Update User Info –</strong> Edit existing user records and keep the database accurate.</li>
              <li><strong>Delete User –</strong> Remove unwanted records with confirmation prompts.</li>
            </ul>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-blue-700 mt-6">🎯 Project Goals</h3>
            <p>This project aims to simplify and digitize user data management at RUPP. It is designed to be scalable and adaptable to broader systems, including:</p>
            <ul class="list-disc list-inside text-gray-800 mt-2">
              <li>Student registration systems</li>
              <li>Staff directory management</li>
              <li>Department-based user access</li>
              <li>Secure login with role-based permissions</li>
            </ul>
          </div>

          <p class="mt-4 text-black">Feel free to reach out if you have any questions or would like to collaborate!</p>
        </div>
        <h1 class="text-sky-700 text-xl font-bold mt-7">Contact Me</h1>
            <div class="flex gap-4 mt-4">
  <a href="https://t.me/machmol" target="_blank"
     class="border-2 border-rose-600 text-rose-600 font-semibold px-6 py-2 rounded-md hover:bg-rose-600 hover:text-white transition">
    Telegram
  </a>
  <a href="https://github.com/MachMol27" target="_blank"
     class="border-2 border-indigo-950 text-indigo-950 font-semibold px-6 py-2 rounded-md hover:bg-indigo-950 hover:text-white transition">
    GitHub
  </a>
  <a href="https://www.linkedin.com/in/mach-mol-0956322b4/" target="_blank"
     class="border-2 border-slate-950 text-slate-950 font-semibold px-6 py-2 rounded-md hover:bg-slate-950 hover:text-white transition">
    LinkedIn
  </a>
</div>
      </div>

    </div>
  </div>
</body>
</html>
