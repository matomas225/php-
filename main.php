<?php
$data = [
    "KlaseA" => [
        "Mokinys1" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper ("Matas"),
            "Pavarde" => strtoupper ("Macijauskas"),
            "DarbuVidurkis" => [
              "MT" => rand(1,10),
              "LT" => rand(1,10),
              "AK" => rand(1,10)
            ],
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys2" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Jonas"),
            "Pavarde" => strtoupper("Petras"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys3" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Deimis"),
            "Pavarde" => strtoupper("Pussyslayer69"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys4" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Laimis"),
            "Pavarde" => strtoupper("LIL Lemon"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys5" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Jonas"),
            "Pavarde" => strtoupper("TheGamer"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
    ],
    "KlaseB" => [
        "Mokinys6" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Osva"),
            "Pavarde" => strtoupper("Bulka"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys7" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Gabija"),
            "Pavarde" => "BUKAuskaite",
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys8" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Lukas"),
            "Pavarde" => strtoupper("RapperMan"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys9" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Titas"),
            "Pavarde" => strtoupper("Chill"),
            "DarbuVidurkis" => 5,
            "DuomenuFormavimoData" => date("Y/m/d - H:i:s")
        ],
        "Mokinys10" => [
            "Kodas" => rand(0, 10000),
            "Vardas" => strtoupper("Vidmantas"),
            "Pavarde" => strtoupper("Animautas"),
            "DarbuVidurkis" => 5,
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
      <?php foreach($data as $key => $value):?>
      <?php foreach($value as $value2 => $value3):?>
        <tr>
      <td><?=$key?></td>
      <?php foreach($value3 as $value4 => $value5):?>
      <td><?=$value5?></td>
      <?php endforeach;?>
      </tr>
      <?php endforeach;?>
      <?php endforeach;?>
  </tbody>
</table>


