<?php
include '../Dateien/db_connection.php';
$conn = OpenCon();

$id = $_GET['id'];
$option = $_POST['radiob'];
//echo $option;
if($option == 'option1'){
    $a = $conn->query('Select Antwort1 from umfrage.umfrage1 Where ID = '.$id)->fetch()[0]+1;
    $conn->query('Update umfrage.umfrage1 Set Antwort1 = '.$a.' WHERE ID = '.$id);
}
if($option == 'option2'){
    $a = $conn->query('Select Antwort2 from umfrage.umfrage1 Where ID = '.$id)->fetch()[0]+1;
    $conn->query('Update umfrage.umfrage1 Set Antwort2 = '.$a.' WHERE ID = '.$id);
}
if($option == 'option3'){
    $a = $conn->query('Select Antwort3 from umfrage.umfrage1 Where ID = '.$id)->fetch()[0]+1;
    $conn->query('Update umfrage.umfrage1 Set Antwort3 = '.$a.' WHERE ID = '.$id);
}

echo '<a href="UmfrageErgebnis.php?id='.$id.'">Ergebnis</a>';
?>
