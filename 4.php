
<?php

function count_frasa($string, $frasa)
{
    if (strlen($string) > strlen($frasa)) {
        $jumlah_frasa = 0;
        $temp_string = str_split($string);
        $temp_storage = [];
        $ending_repeat = 0;
        $repeated_loop = 0;
        $temp_store = [];
        $i = 0;
        $j = 0;
        // ascending check
        while ($i < count($temp_string)) {
            array_push($temp_storage, $temp_string[$i]);
            // echo $i;
            if (count($temp_storage) == 4) {
                array_push($temp_store, implode("", $temp_storage));
                if (implode("", $temp_storage) == $frasa) {
                    $jumlah_frasa += 1;
                }
                $temp_storage = [];
                $j++;
                $i = $j;
                // echo "|";
                // echo "I : ".$i;
                // echo "|";
                // echo "J : ".$j;
                // echo '<br>';
            } else {
                $i++;
            }
            if ($i == (count($temp_string) - 1)) {
                $ending_repeat++;
            }
            // if end of array repeated 2 times, trigger descending check
            if ($ending_repeat == 2 && $i == (count($temp_string) - 1)) {
                // array_push($temp_store, "Descending...");
                $i = 0;
                $j = 0;
                $temp_string = array_reverse($temp_string);
                $temp_storage = [];
            }
        }

        // echo "<br>";
        echo "Ditemukan : " . $jumlah_frasa . " kali.";
        // echo "<hr>";
        // var_dump($temp_store);
    } else {
        echo "Frasa tidak boleh lebih panjang dari string";
    }
}

count_frasa("banananana", "nana");
