<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $fname = isset($_POST['fname']) ? $_POST['fname'] : 'Not provided';
 $lname = isset($_POST['lname']) ? $_POST['lname'] : 'Not provided';
 $mail = isset($_POST['mail']) ? $_POST['mail'] : 'Not provided';
 $gender = isset($_POST['gend']) ? $_POST['gend'] : 'Not provided';
 $age = isset($_POST['age']) ? $_POST['age'] : 'Not provided';
 $location = isset($_POST['location']) ? $_POST['location'] : 'Not provided';
 $skuls = isset($_POST['skuls']) ? $_POST['skuls'] : 'Not provided'; 
 $hear = isset($_POST['hear']) ?  implode(", ", $_POST['hear']) : 'Not selected';
 $actv =  isset($_POST['actv']) ? $_POST['actv'] : 'Not provided'; 
 $hobby =  isset($_POST['hobby']) ? $_POST['hobby'] : 'Not provided'; 
}
echo "<b>" . "Personal information" . "<b>";
echo "<table border='1' cellspacing='0'>";
echo "<tr><td>". " First name " . "</td>". "<td>". "Last Name" . "</td>" . "<td>". "Email" . "</td>" . "<td>" . "Gender" . "</td>". "<td>" . "Age" ."</td>" . "<td>" . "School" ."</td>" .  "<td>" . "Current location" ."</td>" .  "<td>" . "Information gathering" ."</td></tr>" .
 "<tr><td>" . $fname . "</td>" . "<td>" . $lname . "</td>". "<td>" . $mail . "</td>". "<td>" . $gender . "</td>". "<td>" . $age . "</td>" . "<td>" . $skuls . "</td>" .  "<td>" . $location . "</td>" . "<td>" . $hear . "</td></tr>";
echo "</table>";
echo "<table border='1' cellspacing='0'>";
echo "<br>" . "Essay part" . "<br>" . "<tr><td>". " Extracurricular activities " . "</td>". "<td>". "Hobbies" ."</td></tr>" .
 "<tr><td>" . $actv . "</td>" . "<td>" . $hobby . "</td></tr>";
echo "</table>";
?> 
