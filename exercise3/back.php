 <?php
 
$user= $_POST["user"];
$pass = $_POST["pass"];
$item1 = $_POST["i1"];
$item2 = $_POST["i2"];
$item3 = $_POST["i3"];
$ship = $_POST["ship"];

$total = 0;

$total += $item1;
$total += ($item2 * 2);
$total += ($item3 * 3);
echo " <link rel='stylesheet' href='style.css'>
    <p> Welcome " . $user . "</p> </br>
    <p> Your Password is " . $pass . "</p></br>
    <table border='1'><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>
    <tr><th>Item 1</th><td> " . $item1 . "</td> <td>$1</td> <td> $" . $item1 . "</td></tr>
     <tr><th>Item 2</th><td> " . $item2 . "</td> <td>$2</td> <td> $" . $item2 * 2 ."</td></tr>
      <tr><th>Item 3</th><td> " . $item3 . "</td> <td>$3</td> <td> $" . $item3 * 3 . "</td></tr>
       <tr><th>Shipping</th>";
       
       if ($ship == "f"){
       echo "<td colspan='2'>Free</td><td>$0</td></tr>";
       }
       else if ($ship == "t"){
       echo "<td colspan='2'>Three Day</td><td>$5</td></tr>";
        $total += 5;
       }
       else{
       echo "<td colspan='2'>Overnight</td><td>$50</td></tr>";
       $total += 50;
       }       
       echo "<th colspan='3'>Total Cost</th> <th> $". $total . "</th> </table>";
?>
