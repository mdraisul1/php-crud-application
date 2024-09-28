<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Additional custom styling */
        body {
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
        }

        .table-container {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0px 20px 25px -5px rgba(0, 0, 0, 0.1), 0px 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .table-container:hover {
            box-shadow: 0px 25px 35px -5px rgba(0, 0, 0, 0.15), 0px 15px 15px -5px rgba(0, 0, 0, 0.08);
        }

        .table-header {
            background-color: #4c51bf;
            color: white;
        }

        .table-row:hover {
            background-color: #edf2f7;
        }

        .action-buttons a {
            transition: all 0.3s ease-in-out;
        }

        .action-buttons a:hover {
            transform: translateY(-2px);
            box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="max-w-[900px] mx-auto mt-10">
        <div class="table-container">
            <h1 class="text-4xl font-bold text-center mb-6 text-indigo-600">User Information</h1>

            <table class="table-auto w-full text-left border-collapse">
                <thead>
                    <tr class="table-header">
                        <th class="px-6 py-4 uppercase tracking-wide font-semibold">First Name</th>
                        <th class="px-6 py-4 uppercase tracking-wide font-semibold">Last Name</th>
                        <th class="px-6 py-4 uppercase tracking-wide font-semibold">Age</th>
                        <th class="px-6 py-4 uppercase tracking-wide font-semibold">Action</th>
                        <th class="px-6 py-4 uppercase tracking-wide font-semibold">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connect.php';
                    $sql = "SELECT * FROM one";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_num_rows($result);

                    if ($data) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr class="table-row">
                                <td class="px-6 py-4 text-gray-700 font-medium"><?php echo $row['first_name']; ?></td>
                                <td class="px-6 py-4 text-gray-700 font-medium"><?php echo $row['last_name']; ?></td>
                                <td class="px-6 py-4 text-gray-700 font-medium"><?php echo $row['age']; ?></td>
                                <td class="px-6 py-4 action-buttons">
                                    <a href="update.php?id=<?php echo $row['id']; ?>" class="bg-indigo-500 text-white font-semibold rounded-md px-4 py-2 hover:bg-indigo-600 transition duration-300">Update</a>
                                </td>
                                <td class="px-6 py-4 action-buttons">
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="bg-red-500 text-white font-semibold rounded-md px-4 py-2 hover:bg-red-600 transition duration-300">Delete</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

            <div class="flex justify-center mt-8">
                <a href="index.php" class="bg-blue-500 text-white font-semibold rounded-md px-6 py-3 hover:bg-blue-600 transition duration-300">
                    Home
                </a>
            </div>
        </div>
    </div>
</body>

</html>
                    