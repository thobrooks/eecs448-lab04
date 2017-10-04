<?php
/*access the global array called $_POST to get the values from the text fields
$ = $_POST["name"];
$email = $_POST["email"];

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
*/

$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];
$answer4 = $_POST["q4"];
$answer5 = $_POST["q5"];
$total = 0;
echo "Question 1: What is the answer? </br>
You answered: " . $answer1 . "</br>
Correct answer: 8027ed7cabae6e960103b9dd3818bcde0c32cfa02940d5f2aa610ce483ed6208</br>";

echo "Question 2: ?rewsna eht si tahW </br>
You answered: " . $answer2 . "</br>
Correct answer: rewsna eht si siht </br>";

echo "Question 3: 01010111 01101000 01100001 01110100 00100000 01101001 01110011 00100000 01110100 01101000 01100101 00100000 01100001 01101110 01110011 01110111 01100101 01110010 00111111 </br>
You answered: " . $answer3 . "</br>
Correct answer: 01110100 01101000 01101001 01110011 00100000 01101001 01110011 00100000 01110100 01101000 01100101 00100000 01100001 01101110 01110011 01110111 01100101 01110010</br>";

echo "Question 4:  9 + 10? </br>
You answered: " . $answer4 . "</br>
Correct answer: 19</br>";

echo "Question 5: ? </br>
You answered:" . $answer5 . "</br>
Correct answer: ?</br>";
if ($answer1 == "8027ed7cabae6e960103b9dd3818bcde0c32cfa02940d5f2aa610ce483ed6208"){
    $total += 1;
}
if ($answer2 == "rewsna eht si siht"){
    $total  += 1;
}
if ($answer3 == "01110100 01101000 01101001 01110011 00100000 01101001 01110011 00100000 01110100 01101000 01100101 00100000 01100001 01101110 01110011 01110111 01100101 01110010"){
    $total += 1;
}
if ($answer4 == "19"){
    $total += 1;
}
if ($answer5 == "?"){
    $total += 1;
}
$percent = ($total/5) * 100;
echo "Total Correct: " . $total . "</br>
    Percentage: " . $percent . "%</br>";
?>
