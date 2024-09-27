<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>

    <!-- tailwind css cdn-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-[750px] mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-gray-200">
                <tr class="text-left">
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">Age</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include 'connect.php';
                    // Corrected SQL query with quotes for string values
                    $sql = "SELECT * FROM one";

                    // Execute the query
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_num_rows($result);

                    if($data){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-2"><?php echo $row['first_name']; ?></td>                              
                                <td class="px-4 py-2"><?php echo $row['last_name']; ?></td>
                                <td class="px-4 py-2"><?php echo $row['age']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>