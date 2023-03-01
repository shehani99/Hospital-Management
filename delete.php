<?php
echo "hello";
if (isset($_POST["submit"])) {
    //taking value
    $Patient_ID = $_POST['patID'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "conn success";

    //delete data
    $delete = " delete from patients_details where Patient_ID =$Patient_ID ";

    if (mysqli_query($conn, $delete)) {
        echo " Data successfully deleted";
    } else {
        echo "Data Not Saved" . $delete . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Nothing";
}
