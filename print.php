<?php
//Retrieve form data from the database
$servername = "localhost:3306";
$username = "heinnova_theinnovationclasses";
$password = "theinnovation";
$dbname = "heinnova_admission";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admissions ORDER BY RegistrationID DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No records found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>successfully submited </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            

        }


        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            vertical-align: middle;
        }

        .print-btn {
            text-align: center;
            margin-top: 20px;
        }
        img{
            width: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="img/favicon.ico" alt="">
    <h1 class="text-success">Registration Successful!</h1>
    <p class="text-success text-center">Now print your form and visit the innovation classes.</p>
        <table>
            <?php foreach ($row as $key => $value) { ?>
                <tr>
                    <th><?php echo ucfirst(str_replace('_', ' ', $key)); ?></th>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php } ?>
        </table>

        <div class="print-btn">
            <button class="btn btn-primary" onclick="window.print()">Print</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
