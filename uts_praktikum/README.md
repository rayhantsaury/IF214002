Rayhan Tsaury 1207050102

# UTS PRAKTIKUM BASIS DATA

1.	Jelaskan contoh-contoh perintah SQL beserta kegunannya !
2.	Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda.
    -	Berdasarkan ERD yang telah dibuat, buatlah implementasi basis data dari ERD tersebut dalam bentuk tabel basis data lengkap dengan Primary Key, Foreign Key dengan menggunakan perintah CREATE TABLE bahasa SQL. Anda dapat menggunakan vendor basis data yang Anda sukai (MySQL / PostgreSQL / SQL Server / dsb.). Jika belum sempat install basis data di laptop, bisa menggunakan sqliteonline.com untuk mengecek keberhasilan pembuatan tabelnya.

## Jawaban

1. Perintah-perintah SQL

### Data Definition Language (DDL)
Data Definition Languange (DDL) adalah perintah yang digunakan untuk mendefinisikan data seperti membuat tabel database baru, mengubah dataset, dan menghapus data. Kemudian, perintah dasar DDL masih dibedakan lagi ke dalam setidaknya lima jenis perintah yakni bisa kamu lihat di bawah ini.
-	Perintah Create: perintah untuk membuat tabel baru di dalam sebuah database adalah create. Tak cuma untuk tabel baru, tapi juga database maupun kolom baru. Kamu bisa membuat sebuah query dengan contoh ‘CREATE DATABASE nama_database.
-	Perintah Alter: biasa digunakan ketika seseorang ingin mengubah struktur tabel yang sebelumnya sudah ada. Bisa jadi dalam hal ini adalah seperti nama tabel, penambahan kolom, mengubah, maupun menghapus kolom serta menambahkan atribut lainnya.
-	Perintah Rename: dapat kamu gunakan untuk mengubah sebuah nama di sebuah tabel ataupun kolom yang ada. Bila kamu menggunakan perintah ini maka query-nya menjadi ‘RENAME TABLE nama_tabel_lama TO nama_tabel_baru”
-	Perintah Drop: Bisa kamu gunakan dalam menghapus baik itu berupa database, table maupun kolom hingga index.
-	Perintah Show: perintah DDL ini digunakan untuk menampilkan sebuah tabel yang ada.

### Data Manipulation Language (DML)
Pada database SQL, perintah yang digunakan untuk memanipulasi data adalah Data Manipulation Language atau DML. Perintah dalam DML juga terbagi ke dalam empat jenis.
Beberapa di antaranya adalah insert, select, update, dan delete.
-	Perintah Insert: Kamu bisa menggunakan perintah ini untuk memasukkan sebuah record baru di dalam sebuah tabel database.
-	Perintah Select: Select digunakan untuk memanipulasi data dengan tujuan menampilkan maupun mengambil sebuah data pada tabel. Data yang diambil pun tidak hanya terbatas pada satu jenis saja melainkan lebih dari satu tabel dengan memakai relasi.
-	Perintah update: Ini dapat kamu gunakan ketika ingin melakukan pembaruan data di sebuah tabel. Contohnya saja jika ada kesalahan ketika memasukkan sebuah record. Kamu tidak perlu menghapusnya dan bisa diperbaiki menggunakan perintah ini.
-	Perintah Delete: Perintah DML ini dapat digunakan ketika kamu ingin menghapus sebuah record yang ada dalam sebuah tabel.

### Data Control Language (DCL)
Perintah dasar berikutnya adalah Data Control Language atau DCL. Perintah SQL ini digunakan khususnya untuk mengatur hak apa saja yang dimiliki oleh pengguna. Baik itu hak terhadap sebuah database ataupun pada tabel maupun field yang ada.
Melalui perintah ini, seorang admin database bisa menjaga kerahasiaan sebuah database. Terutama untuk yang penting. DCL berdasarkan perintah dasarnya terbagi dalam dua perintah utama yakni:
-	Perintah Grant: Perintah ini biasanya digunakan ketika admin database ingin memberikan hak akses ke user lainnya. Tentu pemberian hak akses ini dapat dibatasi atau diatur. Dalam hal ini admin pun dapat memberikan akses mengenai perintah dalam DML di atas.
-	Perintah Revoke: Kebalikannya dari Grant, Revoke terkadang sering digunakan untuk mencabut maupun menghapus hak akses seorang pengguna yang awalnya diberikan akses oleh admin database melalui perintah Grant sebelumnya.

SELECT adalah satu statement utama dari SQL yang digunakan untuk memilih data dari database.

Syntax:

SELECT nama_kolom1, nama_kolom2
FROM nama_tabel;
UPDATE digunakan dengan WHERE untuk mengupdate data di tabel.

Syntax:

UPDATE nama_tabel
SET nama_kolom1 = 'nilai_pengganti', nama_kolom2= 'nilai_pengganti'
WHERE kondisi;
DELETE digunakan untuk menghapus baris tertentu dari tabel.

Syntax:

DELETE FROM nama_tabel
WHERE kondisi='value_kondisi';
DELETE * FROM nama_tabel;
INSERT INTO digunakan untuk memasukan baris data baru ke tabel.

Syntax:

INSERT INTO nama_tabel (nama_kolom1, nama_kolom2, nama_kolom3)
VALUES ('value1_kolom1', 'value2_kolom2', 'value3_kolom3');
CREATE DATABASE digunakan untuk membuat database baru.

Syntax:

CREATE DATABASE nama_database
DROP DATABASE digunakan untuk menghapus seluruh isi database, termasuk data dan parameternya.

Syntax:

DROP DATABASE db_name;
CREATE TABLE dipakai untuk membuat tabel baru dalam database.

Syntax:

CREATE TABLE nama_tabel (
  nama_kolom1 tipe_data(panjang data),
  nama
)
ALTER TABLE digunakan untuk menambah atau menghapus kolom dari tabel.

Syntax:

ALTER TABLE nama_tabel ADD nama_kolom tipe_data;
ALTER TABLE nama_tabel DROP COLUMN nama_kolom;
DROP TABLE digunakan untuk menghapus seluruh tabel data, lengkap dengan tipe data dan parameter yang telah ditentukan sebelumnya.

Syntax:

DROP TABLE tbl_name;
CREATE INDEX digunakan untuk membuat index baru pada tabel.

Syntax:

CREATE INDEX nama_indeks
ON nama_tabel (nama_kolom)
DROP INDEX dipakai untuk menghapus seluruh index data yang telah Anda pilih.

Syntax:

DROP INDEX nama_indeks ON nama_tabel


