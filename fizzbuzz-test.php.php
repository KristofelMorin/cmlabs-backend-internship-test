<?php
// Author by Kristofel Melkisedek Morin
/**
 * Buat loop yang mencetak angka 1-100, JIKA kelipatan 3 maka outputnya "Fizz" , 
 * JIKA kelipatan 5 outputnya "Buzz" dan JIKA kelipatan 3 dan 5 keluarkan 'FizzBuzz'
*/
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {  // Kondisi jika kelipatan 3
         echo "<b>Fizz</b><br>";
    }
    elseif ($i % 5 == 0) {  // Kondisi jika kelipatan 5
        echo "Buzz<br>";
    }
    elseif ($i % 3 == 0 && $i % 5 == 0) { // Kondisi jika kelipatan 3 dan 5
        echo "FizzBuzz<br>";
    } else {
        echo $i . "<br>";
    }
}
?>
