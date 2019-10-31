<?php
include ('database.php');
// Add the database connection
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
}
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER_CASTANEDA
';
// Run your query
$result = mysqli_query($connection, $query);

// Check if the database returned anything
if($result) {
    while($rows = mysqli_fetch_array($result)){

        // Output the results
        // print_r($rows);
    }
} else {
    // Output an error
    echo 'failed';
}
?>

<!doctype html>
<html>
<head>

    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php
        for each($row as $rows){
            echo '<tr>
                <td>' .$row[1]. '</td>
                <td>' .$row[2]. '</td>
                <td>' .$row[3]. '</td>
                <td>' .$row[4]. '</td>

            </tr>';
        }

            ?>
        </tbody>
    </table>
</body>
</html>