<?php
include 'php\koneksi.php';

// Assuming you have the Pemandu's ID from the URL parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM pemandu WHERE id = $id;";
    $sql = mysqli_query($koneksi, $query);

    // Check if the query is successful
    if ($sql) {
        $row = mysqli_fetch_assoc($sql);
        $no = 0;
    } else {
        // Handle the case where the query fails
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Handle the case where the Pemandu ID is not provided
    echo "Pemandu ID is not specified.";
    exit();
}
?>