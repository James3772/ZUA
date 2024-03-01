<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $id_number = isset($_POST['id_number']) ? $_POST['id_number'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $passing_year = isset($_POST['passing_year']) ? $_POST['passing_year'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $awarded = isset($_POST['cert']) ? $_POST['cert'] : '';
    $awarded .= isset($_POST['diploma']) ? ', ' . $_POST['diploma'] : '';
    $awarded .= isset($_POST['degree']) ? ', ' . $_POST['degree'] : '';
    $awarded .= isset($_POST['masters']) ? ', ' . $_POST['masters'] : '';
    $employment = isset($_POST['employment']) ? $_POST['employment'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $county_of_operation = isset($_POST['county_of_operation']) ? $_POST['county_of_operation'] : '';
    $membership_category = isset($_POST['ordinary']) ? $_POST['ordinary'] : '';
    $membership_category .= isset($_POST['life']) ? ', ' . $_POST['life'] : '';
    $membership_category .= isset($_POST['honorary']) ? ', ' . $_POST['honorary'] : '';
    $membership_category .= isset($_POST['corporate']) ? ', ' . $_POST['corporate'] : '';

    // Database connection configuration
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'record';

    // Create a new PDO instance
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Prepare and execute the SQL query
    $query = "INSERT INTO record (fullname, email, tel, id_number, title, passing_year, gender, awarded, employment, position, county_of_operation, membership_category)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->execute([$fullname, $email, $tel, $id_number, $title, $passing_year, $gender, $awarded, $employment, $position, $county_of_operation, $membership_category]);

    // Check if the data is inserted successfully
    if ($statement->rowCount() > 0) {
        echo "<h2 style='color: green;'>Registration Successful!</h2>";
        echo "<p style='color: green;'>Your data has been submitted and saved to the database.</p>";
    } else {
        echo "<h2 style='color: red;'>Registration Failed!</h2>";
        echo "<p style='color: red;'>An error occurred while saving your data. Please try again.</p>";
    }
}
?>
