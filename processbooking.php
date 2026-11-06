
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$species = $_POST['species'];
$food = $_POST['food'];
$bookday = $_POST['bookday'];
$partysize = $_POST['partysize'];

echo "<p>Welcome $firstname $lastname!</p>";

echo "<p>You are now booked on the ";

if (isset($_POST['accom']))
    echo "Accommodation ";

if (isset($_POST['4day']))
    echo "Four-day tour ";

if (isset($_POST['10day']))
    echo "Ten-day tour ";

echo "<br>Species: ";

if ($species == "M")
    echo "Human";
else if ($species == "D")
    echo "Dwarf";
else if ($species == "E")
    echo "Elf";
else
    echo "Hobbit";

echo "<br>Age: $age";
echo "<br>Meal Preference: $food";
echo "<br>Date: $bookday";
echo "<br>Number of travellers: $partysize</p>";

?>

</body>
</html>
