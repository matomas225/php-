<?php
$data = [
    "KlaseA" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper ("Matas"),
            "Pavarde" => strtoupper ("Macijauskas"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data2 = [
    "KlaseB" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Jonas"),
            "Pavarde" => strtoupper("Petras"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data3 = [
    "KlaseC" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Deimis"),
            "Pavarde" => strtoupper("Pussyslayer69"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data4 = [
    "KlaseD" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Laimis"),
            "Pavarde" => strtoupper("LIL Lemon"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data5 = [
    "KlaseE" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Jonas"),
            "Pavarde" => strtoupper("TheGamer"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data6 = [
    "KlaseF" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Osva"),
            "Pavarde" => strtoupper("Bulka"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data7 = [
    "KlaseG" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Gabija"),
            "Pavarde" => "BUKAuskaite",
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data8 = [
    "KlaseH" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Lukas"),
            "Pavarde" => strtoupper("RapperMan"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data9 = [
    "KlaseL" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Titas"),
            "Pavarde" => strtoupper("Chill"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
$data10 = [
    "KlaseM" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Vidmantas"),
            "Pavarde" => strtoupper("Animautas"),
            "DarbuVidurkis" =>[
                "MT" => 5,
                "IT" => 9,
                "AK" => 10
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ]
    ]
];
?>
<style>
table.customTable {
  width: 100%;
  background-color: #FF3030;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #F8F8F8;
  border-style: solid;
  color: #FFFFFF;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #F8F8F8;
  border-style: solid;
  padding: 10px;
}

table.customTable thead {
  background-color: #F82061;
}
</style>

<table class="customTable">
  <thead>
    <tr>
      <th>Klase</th>
      <th>Kodas</th>
      <th>Vardas</th>
      <th>Pavarde</th>
      <th>Kontroliniu darbu vidurkis</th>
      <th>Duomenu Formavimo Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($data as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data2 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data3 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data4 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data5 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data6 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data7 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data8 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data9 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
    <tr>
    <?php foreach($data10 as $key => $value):?>
      <td><?=$key;?></td>
      <?php endforeach;?>
      <?php foreach($value as $value2 =>$value3):?>
        <?php endforeach;?>
        <?php foreach($value3 as $value4 =>$value5):?>
      <td><?=$value5;?></td>
      <?php endforeach;?>
    </tr>
  </tbody>
</table>

