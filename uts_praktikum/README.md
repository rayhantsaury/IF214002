Rayhan Tsaury 1207050102

# UTS PRAKTIKUM BASIS DATA

1.	Jelaskan contoh-contoh perintah SQL beserta kegunannya !
2.	Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda.
    -	Berdasarkan ERD yang telah dibuat, buatlah implementasi basis data dari ERD tersebut dalam bentuk tabel basis data lengkap dengan Primary Key, Foreign Key dengan menggunakan perintah CREATE TABLE bahasa SQL. Anda dapat menggunakan vendor basis data yang Anda sukai (MySQL / PostgreSQL / SQL Server / dsb.). Jika belum sempat install basis data di laptop, bisa menggunakan sqliteonline.com untuk mengecek keberhasilan pembuatan tabelnya.

## Jawaban

# 1. Perintah-perintah SQL

## Perintah SELECT 
Perintah SELECT merupakan perintah dasar SQL yang di gunakan untuk memilih data dari database. Data yang di kembalikan di simpan dalam tabel yang di sebut result-set. SELECT kolom1, kolom2, … FROM nama_tabel;
SELECT * FROM nama_tabel;
## Perintah SELECT DISTINCT
Perintah SELECT DISTINCT merupakan perintah dasar SQL yang di gunakan untuk mengembalikan hanya nilai yang berbeda dari dalam sebuah tabel, dengan kata lain semua record duplikat (record dengan nilai yang sama) yang terdapat pada tabel akan di anggap sebagai satu record/nilai.
SELECT DISTINCT kolom1, kolom2, … FROM nama_tabel;
## Perintah WHERE
Perintah WHERE merupakan perintah dasar SQL yang di gunakan untuk mem-filter hasil SELECT dengan mengekstrak record yang memenuhi persyaratan tertentu.
SELECT kolom1, kolom2, … FROM nama_tabel WHERE kondisi;
## Perintah (operator) AND, OR dan NOT
Operator AND, OR dan NOT merupakan perintah dasar SQL yang biasanya di kombinasikan dengan perintah WHERE. Ketiganya di gunakan untuk mem-filter record berdasarkan suatu kondisi, operator AND akan menampilkan record apabila semua kondisi bernilai TRUE, operator OR akan menampilkan record apabila salah satu kondisi bernilai TRUE, sedangkan operator NOT akan menampilkan record apabila semua kondisi bernilai FALSE.

SELECT kolom1, kolom2, … FROM nama_tabel WHERE kondisi1 AND kondisi2 AND kondisi3;
SELECT kolom1, kolom2, … FROM nama_tabel WHERE kondisi1 OR kondisi2 OR kondisi3 …;

## Perintah ORDER BY
Perintah ORDER BY merupakan perintah dasar SQL yang di gunakan untuk mengurutkan result-set dalam pengurutan ‘ascending’ atau ‘descending’. Secara default perintah ORDER BY menampilkan record dalam pengurutan ‘ascending’ (‘ASC’). Untuk mengurutkan ‘descending’, gunakan kata kunci ‘DESC’.

SELECT kolom1, kolom2, … FROM nama_tabel ORDER BY column DESC;

SELECT nis, nama FROM siswa ORDER BY tahun_lahir DESC;

##  Perintah INSERT INTO
Dalam SQL, perintah INSERT INTO merupakan perintah dasar SQL bagian dari perintah untuk DML (Data Manipulation Language) Saya asumsikan Anda telah faham perbedaan DDL, DCL, dan DML. Perintah INSERT INTO dapat di gunakan untuk menambahkan record baru ke dalam tabel.

INSERT INTO nama_tabel VALUES (nilai1, nilai2, nilai3, …);
INSERT INTO nama_tabel (kolom1, kolom2) VALUES (nilai1, nilai2);
## Perintah UPDATE
Perintah UPDATE merupakan perintah dasar SQL yang di gunakan untuk memperbarui atau mengubah nilai suatu record berdasarkan kriteria tertentu.

UPDATE nama_tabel SET kolom1 = nilai1, kolom2 = nilai2, … WHERE kondisi;
##  Perintah DELETE
Hampir sama dengan perintah UPDATE, perintah DELETE juga merupakan perintah dasar SQL yang di gunakan untuk menghapus nilai suatu record berdasarkan kriteria tertentu.

# 2

# Rancangan Solusi Digital dari Suatu Permasalahan di Sekitar Kita

# ERD
![image](https://user-images.githubusercontent.com/86096057/164746872-fa471d45-edef-449b-b2e7-5c9dbc4f7b59.png)

# Impelemtasi Basis Data
![image](https://user-images.githubusercontent.com/86096057/164752825-7d6003e5-7f75-4e0a-b245-e3f7713a4991.png)
![image](https://user-images.githubusercontent.com/86096057/164755504-acd5a9f4-7319-4b35-bf5b-0119ac7ea354.png)
![image](https://user-images.githubusercontent.com/86096057/164755974-ccf80756-d130-4fd1-bdb3-c4ffa6813935.png)
![image](https://user-images.githubusercontent.com/86096057/164757088-a3a35777-9c07-4049-bb1d-4deb41318edc.png)
![image](https://user-images.githubusercontent.com/86096057/164757463-7ea4d98a-f800-4b70-accf-0c65d64122e5.png)
![image](https://user-images.githubusercontent.com/86096057/164757910-b385adff-47a9-405a-9e36-77c3a6b81c12.png)

```sql
CREATE TABLE
```
```python
CREATE TABLE IF NOT EXISTS public."Admin"
(
    id_admin integer NOT NULL,
    username_admin character varying(50) COLLATE pg_catalog."default" NOT NULL,
    pass_admin character varying(28) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Admin_pkey" PRIMARY KEY (id_admin)
)

TABLESPACE pg_default;

CREATE TABLE IF NOT EXISTS public."Berita"
(
    id_berita integer NOT NULL,
    jenis_berita character varying(50) COLLATE pg_catalog."default" NOT NULL,
    isi_berita character varying(999) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Berita_pkey" PRIMARY KEY (id_berita)
)

TABLESPACE pg_default;

CREATE TABLE IF NOT EXISTS public."Club"
(
    nama_club character varying(50) COLLATE pg_catalog."default" NOT NULL,
    alamat_club character varying(60) COLLATE pg_catalog."default" NOT NULL,
    sejarah_club character varying(80) COLLATE pg_catalog."default" NOT NULL,
    prestas_club character varying(90) COLLATE pg_catalog."default" NOT NULL,
    media_sosial character varying(60) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Club_pkey" PRIMARY KEY (nama_club)
)

TABLESPACE pg_default;

CREATE TABLE IF NOT EXISTS public."Official"
(
    id_official integer NOT NULL,
    nama_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    jabatan_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    ttl_official date NOT NULL,
    telepon_official integer NOT NULL,
    alamat_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Official_pkey" PRIMARY KEY (id_official)
)

TABLESPACE pg_default;

CREATE TABLE IF NOT EXISTS public."Pemain"
(
    id_pemain integer NOT NULL,
    nama_pemain character varying(50) COLLATE pg_catalog."default" NOT NULL,
    no_pemain integer NOT NULL,
    ttl_pemain date NOT NULL,
    alamat_pemain character varying(50) COLLATE pg_catalog."default" NOT NULL,
    telepon_pemain integer NOT NULL,
    CONSTRAINT "Pemain_pkey" PRIMARY KEY (id_pemain)
)

TABLESPACE pg_default;

CREATE TABLE IF NOT EXISTS public."Register"
(
    email character varying(50) COLLATE pg_catalog."default" NOT NULL,
    nama character varying(50) COLLATE pg_catalog."default" NOT NULL,
    ttl date NOT NULL,
    CONSTRAINT "Register_pkey" PRIMARY KEY (email)
)

TABLESPACE pg_default;



