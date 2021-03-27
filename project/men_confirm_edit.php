<?php
header('Content-type: text/plain; charset=utf-8');
$servername = "localhost";
$username = "layrockman";
$password = "015596627z";
$dbname = "menPJ";
// Create connection
$conn = new mysqli();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$index_number = $_GET['number'];
$header =   $_POST['header'];
$content = $_POST['content'];


$sql = "UPDATE mynote_data SET note_header='$header',note_detail='$content' WHERE number=$index_number ";

if ($conn->query($sql) === TRUE) {
  header( "refresh: 1; url=index.php" );
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>