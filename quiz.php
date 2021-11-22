<?php
//access the global array called $_POST to get the values from the text fields 
$q1 = $_POST["congo"];
$q2 = $_POST["amazon"];
$q3 = $_POST["hispaniola"];
$q4 = $_POST["gobi"];
$q5 = $_POST["italy"];


echo "Question1: The Republic of the Congo is located in _____________ Africa<br>$q1<br>Correct answer: Central<br><br>
The Amazon River runs through<br>$q2<br>Correct answer: Brazil<br><br>
Which of the following are found on the island of Hispaniola?<br>$q3<br>Correct answer: Dominican Republic and Haiti<br><br>
The Gobi Desert is primarily in<br>$q4<br>Correct answer: China<br><br>
You are sailing from Italy to North Africa. Through which body of water do you cross?<br>$q5<br>Correct answer: The Mediterranean Sea<br><br>";

$x = 0;
if($q1 == "Correct."){
    $x++;
}
if($q2 == "Correct."){
    $x++;
}
if($q3 == "Correct."){
    $x++;
}
if($q4 == "Correct."){
    $x++;
}
if($q5 == "Correct."){
    $x++;
}
$y = $x/5*100;
echo "Questions correct: $x<br>$y%";

