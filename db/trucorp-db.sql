-- membuat tabel user dengan isi ID, Nama dan Kantor
CREATE TABLE user(
    ID Int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nama Varchar(50) NOT NULL,
    Kantor Varchar(10) NOT NULL
);

-- memasukkan data ke dalam tabel user
INSERT INTO user(Nama, Kantor) VALUES('Robert', 'Pusat');
INSERT INTO user(Nama, Kantor) VALUES('Kevin', 'Cabang');
INSERT INTO user(Nama, Kantor) VALUES('Robby', 'Cabang');
INSERT INTO user(Nama, Kantor) VALUES('Michael', 'Cabang');
INSERT INTO user(Nama, Kantor) VALUES('Anton', 'Pusat');
INSERT INTO user(Nama, Kantor) VALUES('Rudy', 'Pusat');
INSERT INTO user(Nama, Kantor) VALUES('Budi', 'Cabang');
INSERT INTO user(Nama, Kantor) VALUES('Santi', 'Pusat');
INSERT INTO user(Nama, Kantor) VALUES('Angel', 'Cabang');
INSERT INTO user(Nama, Kantor) VALUES('Cindy', 'Cabang');