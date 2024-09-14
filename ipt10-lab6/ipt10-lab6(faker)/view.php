<?php   
require_once 'FileUtility.php';

$fileUtility = new FileUtility('persons.csv');
$people = $fileUtility->readFromFile();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View People</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <h1>People List</h1>
    <table>
        <thead>
            <tr>
                <th>UUID</th>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Street Address</th>
                <th>Barangay</th>
                <th>Municipality</th>
                <th>Province</th>
                <th>Country</th>
                <th>Phone Number</th>
                <th>Mobile Number</th>
                <th>Company Name</th>
                <th>Company Website</th>
                <th>Job Title</th>
                <th>Favorite Color</th>
                <th>Birthdate</th>
                <th>Email Address</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
                <tr>
                    <?php foreach ($person as $detail): ?>
                        <td><?php echo htmlspecialchars($detail); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
