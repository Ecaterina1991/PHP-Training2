<?php
// Parametrii de conexiune la baza de date
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Crearea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificarea conexiunii
if ($conn->connect_error) {
    die("Conexiunea a esuat: " . $conn->connect_error);
}

// Interogare pentru selectarea datelor din tabel
$sql = "SELECT * FROM tabelul_meu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Parcurgerea și afișarea rezultatelor
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nume: " . $row["nume"] . "<br>";
    }
} else {
    echo "Nu s-au găsit înregistrări în tabel.";
}

// Închiderea conexiunii
$conn->close();
?>
