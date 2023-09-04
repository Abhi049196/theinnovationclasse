<?php
include "connection.php";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $guardian_name = $_POST['guardian_name'];
    $mother_name = $_POST['mother_name'];
    $occupation_father = $_POST['occupation_father'];
    $occupation_mother = $_POST['occupation_mother'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $nationality = $_POST['nationality'];
    $blood_group = $_POST['blood_group'];
    $currentaddress = $_POST['currentaddress'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar'];
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $marks_obtained = $_POST['marks_obtained'];
    $grade_in_science = $_POST['grade_in_science'];
    $grade_in_math = $_POST['grade_in_math'];
    $exam_board = $_POST['exam_board'];
    $scholarship = $_POST['scholarship'];
    $know_about = $_POST['know_about'];

    // Validate the data
    if (empty($first_name)) {
        echo "Please enter your first name.";
        exit();
    }

    if (empty($last_name)) {
        echo "Please enter your last name.";
        exit();
    }

    if (empty($aadhar)) {
        echo "Please enter your Aadhaar number.";
        exit();
    }

    // Check if the Aadhaar number already exists in the database
    $sql = "SELECT * FROM admissions WHERE aadhar = '$aadhar'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Duplicate record found
        echo "<script>alert('Aadhaar number already exists!'); window.location.href = 'admission.php';</script>";
        exit();
    }

    // Prepare and execute the SQL INSERT query
    $sql = "INSERT INTO admissions (first_name, last_name, guardian_name, mother_name, occupation_father, occupation_mother, dob, gender, category, nationality, blood_group, currentaddress, city, pincode, phone, email, aadhar, school_name, school_address, marks_obtained, grade_in_science, grade_in_math, exam_board, scholarship, know_about) 
            VALUES ('$first_name', '$last_name', '$guardian_name', '$mother_name', '$occupation_father', '$occupation_mother', '$dob', '$gender', '$category', '$nationality', '$blood_group', '$currentaddress', '$city', '$pincode', '$phone', '$email', '$aadhar', '$school_name', '$school_address', '$marks_obtained', '$grade_in_science', '$grade_in_math', '$exam_board', '$scholarship', '$know_about')";

    if ($conn->query($sql) === TRUE) {
        // Display a success message or redirect to another page
        // echo "Registration successful!";
        // You can redirect to another page using the following code:
         echo '<script>window.location.href = "success.php";</script>';
        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
