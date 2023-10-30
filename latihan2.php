<!DOCTYPE html>
<html>
<head>
    <title>latihan2_php</title>
</head>
<body>
    <h1>Kalkulator</h1>
    
    <form method="post" action="latihan3.php">
        <label for="InputAngka1">Masukkan Angka : </label>
        <input type="number" id="InputAngka1" name="InputAngka" required><br><br>
	<form method="post" action="latihan3.php">
        <label for="InputAngka2">Masukkan Angka : </label>
        <input type="number" id="InputAngka2" name="InputAngka" required><br><br>
        <label for="Dropdown">Pengoperasian: </label>
        <select id="Dropdown" name="Dropdown">
            <option value="pilihan1">Opsi 1</option>
            <option value="pilihan2">Opsi 2</option>
            <option value="pilihan3">Opsi 3</option>
        </select><br><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>
</html>
