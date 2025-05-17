<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-gray-100 to-blue-50 min-h-screen font-sans">
    <?php include 'sidebar.php'; ?>

    <div class="max-w-3xl mx-auto mt-12 bg-white p-10 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">➕ Add New User</h2>
        <p class="text-gray-500 mb-6">Please fill in the form below to create a new user.</p>

        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="mb-6 p-4 bg-green-100 text-green-700 border border-green-300 rounded-lg">
                ✅ User added successfully!
            </div>
        <?php endif; ?>

        <form action="/add" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="first_name" class="block text-sm text-gray-600 mb-1">First Name</label>
                <input type="text" id="first_name" name="first_name" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>
            <div>
                <label for="last_name" class="block text-sm text-gray-600 mb-1">Last Name</label>
                <input type="text" id="last_name" name="last_name" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div class="md:col-span-2">
                <label for="email" class="block text-sm text-gray-600 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div>
                <label for="hire_date" class="block text-sm text-gray-600 mb-1">Hire Date</label>
                <input type="date" id="hire_date" name="hire_date" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>
            <div>
                <label for="job_title" class="block text-sm text-gray-600 mb-1">Job Title</label>
                <input type="text" id="job_title" name="job_title" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div>
                <label for="salary" class="block text-sm text-gray-600 mb-1">Salary ($)</label>
                <input type="number" id="salary" name="salary" required step="0.01"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div>
                <label for="department_name" class="block text-sm text-gray-600 mb-1">Department</label>
                <input type="text" id="department_name" name="department_name" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div class="md:col-span-2 text-right">
                <button type="submit"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-700 transition duration-200">
                    ➕ Add User
                </button>
            </div>
        </form>
    </div>
</body>
</html>
