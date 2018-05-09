<?php
if ($_GET["filas"]!="" && $_GET["columnas"]!=""){
    $f = $_GET["filas"];
    $c = $_GET["columnas"];
    echo "<table border='2'>";
    echo "<th> Tabla * </th>";
    for ($i=1;$i<=$c;$i++){
        echo "<th> X".$i."</th>";   
    }
    for($i=1;$i<=$f;$i++){
            echo "<tr>";    
            echo "<td>";
            echo "<b>Tabla del ".$i."</b>";
            echo "</td>";
            for($j=1;$j<=$c;$j++){
                echo "<td>";
                echo $j*$i;
                echo "</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
}
?>