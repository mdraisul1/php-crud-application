<?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM one WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];

        $update = "UPDATE one SET first_name = '$fname', last_name = '$lname', age = '$age' WHERE id = '$id'";
        $result = mysqli_query($conn, $update);

        if($result){
            echo "<script>alert('Record updated successfully.')</script>";
        }else{
            echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Project</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Additional styling for the form */
        .form-container {
            box-shadow: 0px 20px 25px -5px rgba(0, 0, 0, 0.1), 0px 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-50 to-indigo-50 min-h-screen flex items-center justify-center">

    <div class="max-w-[900px] w-full mx-auto bg-white shadow-lg rounded-lg p-8 form-container">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Update User Information</h1>

        <form action="" method="post" class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- First Name Field -->
            <div class="w-full">
                <label for="fname" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $row['first_name'] ?>" class="w-full border border-gray-300 rounded-md p-3 focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <!-- Last Name Field -->
            <div class="w-full">
                <label for="lname" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $row['last_name'] ?>" class="w-full border border-gray-300 rounded-md p-3 focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <!-- Age Field -->
            <div class="w-full">
                <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Age</label>
                <input type="number" name="age" id="age" value="<?php echo $row['age'] ?>" class="w-full border border-gray-300 rounded-md p-3 focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <!-- Buttons (Spanning full width) -->
            <div class="col-span-3 flex justify-center space-x-6 mt-6">
                <button type="submit" name="update" class="bg-indigo-500 text-white font-semibold rounded-md px-8 py-3 hover:bg-indigo-600 transition duration-300">
                    Update
                </button>
                <a href="view.php" class="bg-gray-500 text-white font-semibold rounded-md px-8 py-3 hover:bg-gray-600 transition duration-300">
                    Back
                </a>
            </div>
        </form>
    </div>

</body>
</html>
