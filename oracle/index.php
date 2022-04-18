<?php 

$conn = oci_connect('system', 'Dibal1dibal', 'localhost:1521/XEPDB1');
$query = "SELECT * FROM MITABLA";
$stid = oci_parse($conn, $query);
oci_execute($stid, OCI_DEFAULT);

echo "<table>";
while ($row = oci_fetch_array($stid, OCI_ASSOC)) { 
    echo "<tr>";
    foreach ($row as $item) { 
        echo "<td> " . $item . " </td>";
    } 
    echo "</tr>";
}
echo "</table>";

oci_free_statement($stid);
oci_close($conn);
?>
