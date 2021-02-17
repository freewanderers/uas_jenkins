<?php
// connect ke ip 172.24.0.2 (didapat dari docker network) dengan username user_trucorp password ItH1nlcIt5Tru3! di database trucorp_db
$conn = mysqli_connect('172.23.0.3', 'user_trucorp', 'ItH1nlcIt5Tru3!', 'trucorp_db');

// validasi $conn berjalan atau tidak
if($conn == false){
    echo "Error connect to db";
}

// menjalankan query Select * from user, untuk mengambil semua data
$data = mysqli_query($conn, "Select * from user");

// membuat tag table pada html
echo "<table>";

// looping untuk men-print data yang ada pada $data
while($row = mysqli_fetch_array($data)){
    echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Nama'] . "</td><td>" . $row['Kantor'] . "</td></tr>";
}

// menutup tag table
echo "</table>";
?>
