<?php

echo "<style>
    table, th, td {
      border:1px solid black;
    }
    </style>";
$username = $_POST["email"];
$password = $_POST["password"];
$pickles = $_POST["pickles"];
$mochi = $_POST["mochi"];
$drink = $_POST["drink"];
$shipping = $_POST["shipping"];

echo "<div> Welcome $username<br>";
echo "your password is: $password<br>";

if($shipping == 0){
    $s = "Free 7 day";
}
else if ($shipping == 5) {
    $s = "\$5 three day";
}
else{
    $s = "\$50 overnight";
}
$x = 4.00 * $pickles;

$y = $x +$s;
echo "<table>
<tr>
    <th></th>
    <th>Quantity</th>
    <th>Cost Per Item</th>
    <th>Sub Total</th>
</tr>
<tr>
    <th>Pickles</th>
    <th>$pickles</th>
    <th>$4.00</th>
    <th>\$$x</th>
</tr>
<tr>
    <th>Mochi</th>
    <th>$mochi</th>
    <th>Free</th>
    <th>$0.00</th>
</tr>";
$x = 2 * $drink;
$y += $x;
echo "<tr>
    <th>Drink</th>
    <th>$drink</th>
    <th>$2.00</th>
    <th>\$$x</th>
</tr>
<tr>
    <th>Shipping</th>
    <th>$s</th>
    <th></th>
    <th>\$$shipping</th>
</tr>
<tr>
    <th>Total Cost      </th>
    <th></th>
    <th></th>s
    <th>\$$y</th>
</tr>

</table>";
