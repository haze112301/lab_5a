<!DOCTYPE html>

<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    // Define variables
    $name = "Hanie Amirah binti Zariman";
    $matricNumber = "DI220069";
    $course = "Bachelor of Computer Science (Software Engineering) with Honours";
    $yearOfStudy = "Year 3";
    $address = "Batu Pahat, Parit Raja";
    ?>
    <!-- Display the details in an HTML table -->
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Detail</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>