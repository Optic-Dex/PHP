<?php

$strPageTitle = "Kontakt os";
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
require_once DOCROOT . "/assets/incl/header.php";

// $ModtagerNavn = "Bo Nicolajsen";
// $Afsender = "Tina";
// $Beløb = "21.405,52 kr";
// $Tekst1 = "Til $ModtagerNavn Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. Grundet vi har skiftet platform bedes du oprette din konto på ny med email adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din konto hvor du enten kan bruge dem eller få dem udbetalt. Beløb tilgængeligt opgjort pr. : $Beløb venlig hilsen $Afsender";
// $Tekst2 = "Hel Tina Da jeg er ufattelig rig, og derfor ikke har brug for pengene. Ser jeg gerne at i donere alle pengene til Dyrenes beskyttelse. Under navnet \"GeorgGiraf\".Venlig hilsen Bo";

// // $brev = strtoupper($brev);
// // $brev = strtolower($brev);
// $Tekst1 = str_replace("bo@someplace.dk", "bob@someplace.dk", $Tekst1);
// $Tekst2 = str_replace("rig", "fattig", $Tekst2);
// $Tekst2 = str_replace("ikke", "", $Tekst2);
// $charArray1 = [];
// $charArray2 = [];
// $charArray3 = [];
// // echo $Tekst2;
// // $char = "a";
// // echo strpos($Tekst1, "E");
// // $Tekst1Count = substr_count($Tekst1, $char);
// // $Tekst2Count = substr_count($Tekst2, $char);
// $chars1 = str_split($Tekst1);
// sort($chars1);
// $chars2 = str_split($Tekst2);
// sort($chars2);
// foreach($chars1 as $char){
//     if(!in_array($char, $charArray1)){
//         $chars1 = str_replace($char, "", $Tekst1);
//         array_push($charArray1, $char);
        
//     }
// }
// foreach($chars2 as $char){
//     if(!in_array($char, $charArray2)){
//         $chars2 = str_replace($char, "", $Tekst1);
//         array_push($charArray2, $char);
        
//     }
// }

// foreach($charArray1 as $char1){
//     foreach($charArray2 as $char2){
//         if($char1 == $char2){
//             array_push($charArray3, $char1);
//         }
//     }
// }
// echo implode($charArray3)


// $numbers = array(10,20,10,30,1,10,20,30,40,05,10,20,39,424,21,23,42,24,12,43,56,20,10,23,34,532,32,20,10,20,30,40,50,60,10,20,30,40,50,01,50,10,23,34,50,30,20,30,01,01);
// print_r(array_count_values($numbers));

$multiArray = array(
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),
array("X","O","X","O","X","O","X","O","X","O"),);

?>


<table><tr>
    <th>0</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
  </tr><?php
    $i = 0;

    foreach ($multiArray as $row) 
    { 
       $key = array_rand($multiArray[$i], 9);
        $i += 1;
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>" . $row[$key[0]] . "</td>";
        echo "<td>" . $row[$key[1]] . "</td>";
        echo "<td>" . $row[$key[2]] . "</td>";
        echo "<td>" . $row[$key[3]] . "</td>";
        echo "<td>" . $row[$key[4]] . "</td>";
        echo "<td>" . $row[$key[5]] . "</td>";
        echo "<td>" . $row[$key[6]] . "</td>";
        echo "<td>" . $row[$key[7]] . "</td>";
        echo "<td>" . $row[$key[8]] . "</td>";
        echo "</tr>";
        $i -= 1;
        $i++;
    }?><table>
<?php
require_once DOCROOT . "/assets/incl/footer.php";
