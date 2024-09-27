<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Application</title>

    <!-- tailwind css  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="max-w-[750px] mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">
        PHP Crud Application
    </h1>
    <form action="" method="post">
        <div class="grid grid-cols-2 gap-6 mb-4">
            <!-- First Name Field -->
            <div>
                <label for="fname" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                <input type="text" name="fname" id="fname" class="w-full border border-gray-300 rounded-md p-3 focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <!-- Last Name Field -->
            <div>
                <label for="lname" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                <input type="text" name="lname" id="lname" class="w-full border border-gray-300 rounded-md p-3 focus:ring-indigo-500 focus:border-indigo-500">
            </div>
        </div>
        
        <!-- Age Field -->
        <div class="mb-6">
            <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Age</label>
            <input type="number" name="age" id="age" class="w-full border border-gray-300 rounded-md p-3 focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        

    </form>
</div>

</body>
</html>