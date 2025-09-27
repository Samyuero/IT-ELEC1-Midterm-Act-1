<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1e1e1e, #2b2b2b, #3a3a3a);
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
            width: 450px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: left;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        p {
            margin: 10px 0;
            font-size: 15px;
        }

        strong {
            color: #fff;
        }

        .intro {
            font-style: italic;
            color: #aaa;
        }

        .bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
</head>
<body>
    <img src="cat.jpg" class="bg">
    <div class="container">
        <h1>USER INFORMATION</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = htmlspecialchars($_POST["fname"]);
            $lname = htmlspecialchars($_POST["lname"]);
            $studentid = htmlspecialchars($_POST["studentid"]);
            $course = htmlspecialchars($_POST["course"]);
            $email = htmlspecialchars($_POST["email"]);
            $month = htmlspecialchars($_POST["month"]);
            $day = htmlspecialchars($_POST["day"]);
            $year = htmlspecialchars($_POST["year"]);
            $gender = htmlspecialchars($_POST["gender"]);

            $data = "Name: $fname $lname | Student ID: $studentid | Course: $course | Email: $email | DOB: $month $day, $year | Gender: $gender\n";
            file_put_contents("students.txt", $data, FILE_APPEND);

            echo "<p class='intro'>Hello, $fname $lname!</p>";
            echo "<p><strong>Student ID:</strong> $studentid</p>";
            echo "<p><strong>Course:</strong> $course</p>";
            echo "<p><strong>Date of Birth:</strong> $month $day, $year</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        }
        ?>
    </div>
</body>
</html>
