<?php

include "./db.php";

$sql = "SELECT * FROM User_T";

$result = $conn->query($sql);
// {   id:[1,2,3],
// name:["a","b","c"]
// .....
// }

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>User_T</h2>

        <table class="table">

    <thead>

    <tr>
        <th>User_id</th>

        <th>F_Name</th>

        <th>L_Name</th>

        <th>Phone</th>

        <th>Area</th>

        <th>City</th>

        <th>Email</th>

        <th>Password</th>

        <th>Action</th>
    </tr>

            </thead>
            <tbody>

                <?php

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>

                    <td><?php echo $row['User_id']; ?></td>

                    <td><?php echo $row['F_name']; ?></td>

                    <td><?php echo $row['L_name']; ?></td>

                    <td><?php echo $row['Email']; ?></td>

                    <td><?php echo $row['']; ?></td>

                    <td><?php echo $row['password']; ?></td>

                            <td>
                                <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>

                        </tr>

                <?php   }
                }
                $conn->close();
                ?>

            </tbody>

        </table>
        <a style="color:black;" class="btn btn-warning" href="form.php"><b>Create User</b></a>
    </div>

</body>

</html>