<?php

$fondoKolorea = $_POST["kolorea"];

if(!empty($fondoKolorea)){

    echo '<div style="background-color: '.$fondoKolorea.'; padding: 10px;"> 
    
    <h1> Aukeratutako kolorea '. $fondoKolorea .' izan da </h1>
    <a href="ariketa4.php">Beste kolore bat autatu</a>
    </div>';

}else{
    echo '<h1>Ez da kolorea jaso </h1>
    <a href="ariketa4.php">Beste kolore bat autatu</a>';
}

?> 
