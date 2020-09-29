<?php
$data = [
    "KlaseA" => [
        rand(0, 10000) => [
            "Vardas" =>  strtoupper("Jonas"),
            "Pavarde" => strtoupper("Petras"),
            "ivertinimai"=>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ]
            //"Darbu Vidurkis" => 
            "Duomenu formavimo data" =>  echo date('l jS \of F Y h:i:s A')
    
            ]
        ],

    "Klase B" => [
        "Mokinys" => [
            "Kodas" =>
            "Vardas" =>
            "Pavarde" =>
            "Darbu Vidurkis" =>
            "Duomenu formavimo data" =>
    
        ]
        
    ]

];
array_sum ($data["Ivertinimai"]);
echo"array_sum";
?>
<ul>
    <?php foreach($data as $key => $value):?>
        <li>
            <span><?=$key;?></span>: 
            <ul>
                <?php foreach($value as $item => $student):?>
                    <li><span><?=$item;?>: </span><?=$student;?></li>
                <?php endforeach;?>
            </ul>
        </li>
        <?php endforeach
</ul>
