<?php
// connect ke ip 172.22.0.3 (didapat dari docker network) dengan username user_trucorp password ItH1nlcIt5Tru3! di database trucorp_db
<<<<<<< HEAD
$conn = mysqli_connect('172.28.0.2', 'user_trucorp', 'ItH1nlcIt5Tru3!', 'trucorp_db');
// $conn = new mysqli('172.27.0.3', 'user_trucorp', 'ItH1nlcIt5Tru3!');
=======
$conn = mysqli_connect('172.25.0.3', 'user_trucorp', 'ItH1nlcIt5Tru3!', 'trucorp_db');
// $conn = new mysqli("172.22.0.3:3306", 'user_trucorp', 'ItH1nlcIt5Tru3!');
>>>>>>> e844c8da399d18aa142e157c7ef5be52f7089f1a

// validasi $conn berjalan atau tidak
//if($conn == false){
//    echo "Error connect to db";
//}
if($conn->connect_error){
	die("Error connect to db");
}

// menjalankan query Select * from user, untuk mengambil semua data
$data = mysqli_query($conn, "select * from user");

// membuat tag table pada html
echo "<table>";

if(!$data){
echo(mysqli_error($data));
}

// looping untuk men-print data yang ada pada $data
while($row = mysqli_fetch_array($data)){
    echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Nama'] . "</td><td>" . $row['Kantor'] . "</td></tr>";
}

// menutup tag table
echo "</table>";
?>
