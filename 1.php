<?php

function biodata($name, $age)
{
    $address = "Dusun Meloan Rt 1/ Rt2 Desa Sidorejo Kecamatan Jabung Kabupaten Malang";
    $hobbies = ["Travel", "Reading", "Swimming", "Film"];
    $is_married = false;
    $list_school = [
        "elementary_school" => [
            "year_in" => "2001",
            "year_out" => "2007",
            "major" => null
        ],
        "middle_school" => [
            "year_in" => "2007",
            "year_out" => "2010",
            "major" => null
        ],
        "Vocational_high_school" => [
            "year_in" => "2010",
            "year_out" => "2013",
            "major" => "TKJ"
        ]
    ];
    $skills = [
        "html" => "beginner",
        "css" => "beginner",
        "JavaScript" => "beginner",
        "php" => "beginner",
        "mysql" => "beginner"
    ];
    $interest_in_coding = true;

    return json_encode([
        "name" => $name,
        "age" => $age,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "list_school" => $list_school,
        "skills" => $skills,
        "interest_in_coding" => $interest_in_coding
    ], JSON_PRETTY_PRINT);
}

$name = "Randi Maulana Akbar";
$age = 25;
echo biodata($name, $age);
