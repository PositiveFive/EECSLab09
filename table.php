<?php
echo "<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
    <table style=\"width:100%\">";
    for($i = 0; $i <= 100; $i++){
        echo "<tr>";
        for($j = 0; $j <= 100; $j++) {
            echo "<th>";
            if($i == 0 && $j ==0) {
                echo " ";
            }
            else if($i == 0){
                echo "$j";
            }
            else if ($j == 0) {
                echo "$i";
            }
            else{
                $z = $i * $j;
                echo "$z";
            }
            echo "</th>";
        }
    }
    echo "</table>";
