<h1>Laboratorium z programowania w chmurze obliczeniowej</h1>
<h4>Próba połączenia z baza MySQL:</h4>
<?php 
$host = 'mysql';
$user = 'root';
$pass = 'password';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Połączenie z bazą MySQL nie powiodło się " . $conn->connect_error);
} 
echo "Połączenie z bazą MySQL powiodło się!\n";

echo "Informacje o serwisie php:";

phpinfo(); 
?>


