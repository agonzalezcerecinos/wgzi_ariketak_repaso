<?php

$pokemons = array();

function pokemonGehitu($izena, $mota, $maila, $eboluzionatuta)
{
    global $pokemons;

    $pokemons[$izena] = array(
        "mota" => $mota,
        "maila" => $maila,
        "eboluzionatuta" => $eboluzionatuta
    );
}

function pokemonErakutsi($item, $balioa)
{
    global $pokemons;

    $filtratuta = array();
    /*     $filtratuta = array_filter($pokemons, function ($pokemon) use ($item, $balioa) {
        return $pokemon[$item] == $balioa;
    }); */

    foreach ($pokemons as $pokemon => $pokemonDatuak) {
        if ($pokemonDatuak[$item] == $balioa) {
            $filtratuta = $pokemons[];
        }
    }

    print_r($filtratuta);
}

pokemonGehitu("Pikachu", "Elektrikoa", 25, true);
pokemonGehitu("Raichu", "Elektrikoa", 35, true);
pokemonGehitu("Charmander", "Sua", 18, false);
pokemonGehitu("Charizard", "Sua/Hegaldaria", 42, true);
pokemonGehitu("Squirtle", "Ura", 16, true);
pokemonGehitu("Blastoise", "Ura", 40, true);
pokemonGehitu("Bulbasur", "Belarra/Pozoia", 15, false);
pokemonGehitu("Venusaur", "Belarra/Pozoia", 38, true);

pokemonErakutsi("maila", 18);




/* 
$pokemons = array(
    "Pikachu" => array(
        "mota" => "Elektrikoa",
        "maila" => 25,
        "eboluzionatuta" => true
    ),
    "Raichu" => array(
        "mota" => "Elektrikoa",
        "maila" => 35,
        "eboluzionatuta" => true
    ),
    "Charmander" => array(
        "mota" => "Sua",
        "maila" => 18,
        "eboluzionatuta" => false
    ),
    "Charizard" => array(
        "mota" =>  "Sua/Hegaldaria",
        "maila" => 42,
        "eboluzionatuta" => true
    ),
    "Squirtle" => array(
        "mota" => "Ura",
        "maila" => 16,
        "eboluzionatuta" => true
    ),
    "Blastoise" => array(
        "mota" => "Ura",
        "maila" => 40,
        "eboluzionatuta" => true
    ),
    "Bulbasur" => array(
        "mota" => "Belarra/Pozoia",
        "maila" => 15,
        "eboluzionatuta" => false
    ),
    "Venusaur" => array(
        "mota" => "Belarra/Pozoia",
        "maila" => 38,
        "eboluzionatuta" => true
    )

)
 */
