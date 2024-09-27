<?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM one WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Project</title>

    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-[750px] mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Update Record</h1>
        
        <form action="" method="post" class="flex items-center space-x-6">
            <!-- First Name Field -->
            <div class="w-1/3">
                <label for="fname" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $row['first_name'] ?>" class="w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Last Name Field -->
            <div class="w-1/3">
                <label for="lname" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $row['last_name'] ?>" class="w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Age Field -->
            <div class="w-1/3">
                <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                <input type="number" name="age" id="age" value="<?php echo $row['age'] ?>" class="w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>
        </form>

        <!-- Submit Button (Centered below the form) -->
        <div class="flex justify-center mt-6">
            <button type="submit" name="update" class="bg-indigo-500 text-white font-semibold rounded-md px-6 py-3 hover:bg-indigo-600 transition duration-300">
                Submit
            </button>
        </div>
    </div>
</body>
</html>
