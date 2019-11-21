<?php
session_start();
include('includes/header.php');
include('includes/database.php');

// Check if the user is already logged in
// If they aren't, redirect to login.php
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit; 
}
$query = 'SELECT * FROM USER_CASTANEDA';

$result = mysqli_query($connection, $query);


if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

} else {
    // Output an error
    echo 'failed';
}



?>


<main class="container">

    <h1>You Logged In! Hello <?php echo $_SESSION['first_name'] ?></h1>

    <h2>Here's a list of other users</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through and output all users -->
             <?php
        foreach($rows as $row){
            echo '<tr>
                <td>' .$row['first_name']. '</td>
                <td>' .$row['last_name']. '</td>
                <td>' .$row['email']. '</td>
                </tr>';
        }

            ?>
        </tbody>
    </table>

</main>

<?php include('includes/footer.php'); ?>