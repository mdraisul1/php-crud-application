<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>

    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-[750px] mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">User Information</h1>
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-gray-700 uppercase tracking-wide font-semibold">First Name</th>
                    <th class="px-4 py-2 text-gray-700 uppercase tracking-wide font-semibold">Last Name</th>
                    <th class="px-4 py-2 text-gray-700 uppercase tracking-wide font-semibold">Age</th>
                    <th class="px-4 py-2 text-gray-700 uppercase tracking-wide font-semibold">Action</th>
                    <th class="px-4 py-2 text-gray-700 uppercase tracking-wide font-semibold"> Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connect.php';
                    $sql = "SELECT * FROM one";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_num_rows($result);

                    if($data){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr class="bg-white hover:bg-gray-100 border-b transition duration-300 ease-in-out">
                                <td class="px-4 py-3 text-gray-700"><?php echo $row['first_name']; ?></td>                              
                                <td class="px-4 py-3 text-gray-700"><?php echo $row['last_name']; ?></td>
                                <td class="px-4 py-3 text-gray-700"><?php echo $row['age']; ?></td>
                                <td class="px-4 py-3">
                                    <a href="update.php?id=<?php echo $row['id']; ?>" class="bg-indigo-500 text-white font-semibold rounded-md px-4 py-2 hover:bg-indigo-600 transition duration-300">
                                        Update
                                    </a>
                                </td>
                                <td>
                                    <!-- delete -->
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="bg-red-500 text-white font-semibold rounded-md px-4 py-2 hover:bg-red-600 transition duration-300">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        <div class="flex justify-center mt-8">
            <a href="index.php" class="bg-blue-500 text-white font-semibold rounded-md px-6 py-3 hover:bg-blue-600 transition duration-300">Home</a>
        </div>
    </div>
</body>
</html>
