<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSC 293 PROJECT</title>

    <!-- external css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- profile picture-->
    <div class="profilepic"><img src="dp.jpeg" alt="profile picture"></div>

    <!-- form -->
    <form action="back.php" name="myForm" method="post" onsubmit="return(validate())" autocomplete="off">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="your name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="name" placeholder="your email">
        </div>

        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass">
        </div>

        <div class="form-group">
            <label for="phonenum">Phone Number:</label>
            <input type="text" name="phonenum" id="name">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>

            <div>
                Male: <input type="radio" name="gender" id="name" value="male">
                Female: <input type="radio" name="gender" id="name" value="female">
                Other: <input type="radio" name="gender" id="name" value="others">
            </div>
        </div>

        <div class="form-group">
            <label for="lang">Language:</label>
            <select name="lang" id="language">
                <option value="SELECT LANGUAGE">SELECT LANGUAGE</option>
                <?php
                // Connect to database
                $mysqli = new mysqli("localhost", "root", "", "formbackend");

                // Retrieve list of languages
                $result = $mysqli->query("SELECT language FROM languages");
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['language'] . '">' . $row['language'] . '</option>';
                }

                // Close database connection
                $mysqli->close();
                ?>
               
            </select>
        </div>

        <div class="form-group">
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" id="zipcode">
        </div>

        <div class="form-group">
            <label for="about">About:</label>
            <textarea name="about" id="about" cols="30" rows="10" placeholder="Write about yourself..."></textarea>
        </div>

        <div class="form-group">
            <input class="sub" type="submit" value="Register">
        </div>
    </form>

<!-- external script -->
<script src="script.js"></script>
</body>
</html>