<?php
/**
 * This script handles the submission of student marks for a selected subject.
 */

// Include necessary files
require("include/session.php"); // Include session file
include("include/database.php"); // Include database connection file

// Retrieve students and subjects data from the database
$query = "SELECT * FROM students;";
$execute = mysqli_query($connection, $query);

$q = "SELECT subject_id, subject_name FROM subjects";
$exe = mysqli_query($connection, $q);

// Display the form for submitting marks
echo "<form action='' method='post'>";
echo "<select name='subjects'>";
while ($output = mysqli_fetch_row($exe)) {
    echo "<option value='".htmlspecialchars($output[0])."'>" . htmlspecialchars($output[1]) . "</option>";
}
echo "</select>";
echo "<br><br>";

echo "<table border='1'>
<tr>
<th>Check</th>
<th>student_id</th>
<th>First_name</th>
<th>Surname</th>
<th>Marks</th>
</tr>";

while ($result = mysqli_fetch_array($execute)) {
    $student_id = $result['student_id'];

    echo "<tr>
        <td><input type='checkbox' name='check[]' checked value='$student_id'></td>
        <td>" .htmlspecialchars($result['student_id']) . "</td>
        <td>" .htmlspecialchars($result['first_name']) . "</td>
        <td>" .htmlspecialchars($result['surname'] ). "</td>
        <td><input type='text' name='marks[$student_id]' size='3'></td>
    </tr>";
}
echo "</table>";
echo "<br>";
echo "<input type='submit' name='submit'>";
echo "<br><br>";
echo "</form>";

// Handle form submission
if (isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $subjects = test_input($_POST['subjects']);
    $marks =$_POST['marks'];
    $success = false;

 

    if (is_array($_POST['check'])) {
        foreach ($_POST['check'] as $student_id) {
            // Insert marks into the database
            $sql2 = mysqli_query($connection, "INSERT INTO report(report_id, student_fk_id, subject_fk_id, marks) VALUES(DEFAULT, '$student_id', '$subjects', '".$marks[$student_id]."')");

            // Check if the mark value is valid
            // if (is_numeric($marks) && $marks >= 0 && $marks <= 100) {
            if ($sql2) {
                $success = true; // set the success variable to true if at least one subject was successfully submitted
            } else {
                echo "Error inserting marks for student ID". htmlspecialchars($student_id).": " . mysqli_error($connection) . "<br>";
            }
        // }else{
        //     echo "Invalid mark value for student ID " . htmlspecialchars($student_id) . "<br>";
        // }
        }
           // Display success message if marks were submitted successfully
        if ($success) {
            echo "<div class='alert alert-success'>Subject marks successfully submitted</div>";
        }
    } else {
        echo "No students selected<br>";
    }
}

/**
 * Sanitizes user input by removing leading/ending whitespace and converting special characters to HTML entities.
 * 
 * @param string $data The input data to be sanitized
 * @return string The sanitized data
 */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');//ensures that both single quotes and double quotes are properly encoded.
    return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style type="text/css">

	</style>
</head>
<body>
<a href="home.php">Home</a>
<br>
<script>
     // Display the alert message and hide it after a certain duration
     document.addEventListener('DOMContentLoaded', function() {
            var alertMessage = document.querySelector('.alert');
            if (alertMessage) {
                alertMessage.style.display = 'block';
                setTimeout(function() {
                    alertMessage.style.display = 'none';
                }, 3000); // Change the duration (in milliseconds) as needed
            }
        });
</script>
</body>
</html>