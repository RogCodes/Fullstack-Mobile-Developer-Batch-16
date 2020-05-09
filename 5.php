<?php

function createTriangle($start, $end)
{
    if ($end >= $start) {
        // cari angka genap antara angka $start sampai angka $end
        $temp = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                array_push($temp, $i);
            }
        }
        // echo 'Before reversed ';
        // var_dump($temp);

        // $temp = array_reverse($temp);
        // echo 'After reversed ';
        // var_dump($temp);
        // echo "<br>";

        // create a new array keys
        $newArrayKeys = [];
        $tempArrayKey = 0;
        for ($i = 0; $i < count($temp); $i++) {
            for ($j = 0; $j < count($temp); $j++) {
                if ($i + $j >= count($temp) - 1) {
                    if ($tempArrayKey != ($i + $j)) {
                        $tempArrayKey = ($i + $j);
                        if (!in_array(($i + $j), $newArrayKeys)) {
                            array_push($newArrayKeys, $tempArrayKey);
                        }
                    }
                }
            }
        }

        // var_dump($newArrayKeys);
        // echo "<br>";

        // set new array with the new keys was created
        $newArrayWithNewKeys = [];
        for ($i = 0; $i < count($temp); $i++) {
            if (count($temp) > 1) {
                $newArrayWithNewKeys[$newArrayKeys[$i]] = $temp[$i];
            } else {
                // if $temp only have one element
                $newArrayWithNewKeys[] = $temp[$i];
            }
        }
        // var_dump($newArrayWithNewKeys);
        // echo "<br>";
        // echo "<br>";

        $columns = 0;
        $setcolumns = 0;
        for ($i = 0; $i < count($temp); $i++) {
            for ($j = 0; $j < count($temp); $j++) {
                if ($i + $j < count($temp) - 1) {
                    echo "   ";
                } else {
                    if (count($temp) > 1) {
                        echo strlen($newArrayWithNewKeys[($i + $j)]) < 2 ? '  ' . $newArrayWithNewKeys[($i + $j)] : ' ' . $newArrayWithNewKeys[($i + $j)];
                    } else {
                        // if $temp only have one element
                        echo $newArrayWithNewKeys[($i + $j)];
                    }
                }
            }
            echo "<br>";
        }
    } else {
        echo "Angka pertama harus lebih kecil dari atau sama dengan angka kedua";
    }
}

echo "<pre>";
createTriangle(2, 10);
echo "</pre>";
