<?php
$student_name = "_______________";
$course_name = "____________";
$date = date("F d, Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Certificate</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .certificate {
            border: 10px solid gold;
            padding: 30px;
            width: 70%;
            margin: auto;
        }
        h1 {
            font-size: 40px;
            color: #333;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="certificate">
    <h1>Certificate of Completion</h1>
    <p>This is to certify that</p>
    <h2><?php echo $student_name; ?></h2>
    <p>has successfully completed the</p>
    <h3><?php echo $course_name; ?></h3>
    <p>on <?php echo $date; ?></p>
    <p><strong>Congratulations!</strong></p>
</div>

</body>
</html>
