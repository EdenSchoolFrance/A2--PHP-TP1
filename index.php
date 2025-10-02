<?php
function test($word, $age) {
    if($age >= 18) {



        echo "<h2 style='color: green';>Je suis majeur(e)</h2>";


    }else {


        echo "<h2 style='color: red';>Je suis mineur(e)</h2>";


    }
    return "Hello $word tu as $age ans.";
}
echo test("John", 15)
?>