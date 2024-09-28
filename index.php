<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    // Corrected SQL query with quotes for string values
    $sql = "INSERT INTO one (first_name, last_name, age) VALUES ('$fname', '$lname', $age)";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check for successful insertion
    if ($result) {
        echo "<script>alert('Record inserted successfully.')</script>";
        header("Location: view.php");
    } else {
        // Output any SQL errors for debugging
        echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #f9fafb;
        }

        .form-container {
            background: linear-gradient(135deg, #6b5b95 0%, #b8a9c9 100%);
        }

        .input-field:focus {
            box-shadow: 0 0 10px rgba(102, 51, 153, 0.2);
        }

        .form-title {
            background: linear-gradient(90deg, #6b5b95, #b8a9c9);
            -webkit-background-clip: text;
            color: transparent;
        }

        .btn-submit:hover {
            background-color: #9f7aea;
        }
    </style>
</head>

<body>

    <div class="flex items-center justify-center min-h-screen">
        <div class="form-container max-w-[600px] mx-auto bg-white shadow-lg rounded-lg p-8">
            <h1 class="form-title text-5xl font-extrabold text-center mb-8">PHP CRUD Application</h1>

            <form action="" method="post" class="space-y-6">
                <!-- First Name Field -->
                <div class="flex flex-col">
                    <label for="fname" class="block text-lg font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" name="fname" id="fname" class="input-field w-full border border-gray-300 rounded-lg p-4 focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Last Name Field -->
                <div class="flex flex-col">
                    <label for="lname" class="block text-lg font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" name="lname" id="lname" class="input-field w-full border border-gray-300 rounded-lg p-4 focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Age Field -->
                <div class="flex flex-col">
                    <label for="age" class="block text-lg font-medium text-gray-700 mb-2">Age</label>
                    <input type="number" name="age" id="age" class="input-field w-full border border-gray-300 rounded-lg p-4 focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-between items-center">
                    <button type="submit" name="submit" class="btn-submit bg-purple-600 text-white font-bold rounded-lg px-8 py-4 hover:bg-purple-700 transition-all">Submit</button>
                    <a href="view.php" class="bg-purple-500 text-white font-bold rounded-lg px-8 py-4 hover:bg-purple-600 transition-all">View</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
