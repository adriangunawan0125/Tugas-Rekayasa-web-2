<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;    
}

$send = curl("http://localhost/tugas2_rekayasaweb/getwisata.php");
$data = json_decode($send, true);

echo "<table border='1' cellspacing='0' cellpadding='8'>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".strtoupper($row["kota"])."</td>";
    echo "<td>".strtoupper($row["landmark"])."</td>";
    echo "<td>".strtoupper($row["tarif"])."</td>";
    echo "</tr>";
}

echo "</table>";
?>
