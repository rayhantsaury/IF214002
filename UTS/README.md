# UTS

# soal
1. Basis data relasional dapat langsung dibangun menggunakan perintah SQL di sistem basis data seperti MySQL, dsb tanpa ada perancangan terlebih dahulu. Jelaskan apa keuntungan melakukan perancangan basis data terlebih dahulu (menggunakan ERD ataupun Class Diagram) !
2. Jelaskan bagaimana cara mentransformasikan proses bisnis sebuah organisasi menjadi struktur data di basis data !
3. Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda. 
 - Deskripsikan solusi digital tersebut dalam satu paragraf
 - Buat list fitur-fitur yang ada pada solusi digital tersebut
 - Buat ERD notasi Chen dari struktur data yang mewakili fitur2 di solusi digital tersebut
 - Buat ERD notasi Crow Foot dari struktur data logical yang mewakili fitur2 di solusi digital tersebut, lengkap dengan keys, tipe data, dan normalisasi hingga bentuk ke 3

# Jawaban
1. ERD adalah model atau rancangan untuk membuat database, supaya lebih mudah dalam menggambarkan data yang memiliki hubungan atau relasi dalam bentuk sebuah desain. Dengan adanya ER diagram, maka sistem database yang terbentuk dapat digambarkan dengan lebih terstruktur dan terlihat rapi. Untuk menyusun sistem database yang tepat, maka kita harus menentukan terlebih dahulu mengenai jenis model data yang akan digunakan. Yang mana, hal tersebut akan sangat berpengaruh nantinya pada pengembangan aplikasi sesuai dengan kebutuhan proyek bisnis. Model ER konseptual sangat berguna untuk mendokumentasikan segala bentuk arsitektur data pada sebuah organisasi. Model ini dapat digunakan untuk satu atau lebih jenis model data logis. Tujuan dari pengembangannya adalah untuk membangun struktur metadata untuk data master entitas dan set ER model logis.

  A. Data Logis

  Jenis yang pertama adalah model data logis, dimana untuk proses pembuatannya tidak membutuhkan model data konseptual. Komponen dalam model data logis antara lain, entitas data master, operasional, dan transaksional yang telah terdefinisi sebelumnya. Model ini juga dapat dikembangkan secara independen mulai dari yang lebih spesifik, hingga sistem manajemen basis data yang dapat diimplementasikan langsung.

  B. Data Fisik

  Model data fisik memungkinkan untuk dikembangkan dari model data logis. Model ini yang digunakan sebagai database. Model data fisik dipakai dalam menentukan metadata struktural dalam sistem manajemen database sebagai objek penyimpanan data yang bersifat relasional, contohnya tabel, indeks dan trigger pada database.
  
- Komponen yang Dipakai

  ERD biasanya erat kaitannya dengan Data Flow Diagram (DFD) untuk menampilkan sebuah data store. Tujuannya adalah untuk memvisualisasikan bagaimana proses data dapat saling terhubung dan dapat mengkonstruksi data relasional. Berikut ini kami akan memberikan beberapa penjelasan mengenai istilah dan komponen apa saja yang berada pada ERD.
  
a)	Entitas

   Entitas merupakan kumpulan objek yang dapat teridentifikasi secara unik. Di dalam ERD, entitas dilambangkan dengan bentuk persegi panjang. Kemudian, entitas lemah akan digambarkan dengan bentuk persegi panjang kecil di dalam persegi panjang yang besar. Untuk entitas lemah digunakan untuk melambangkan entitas yang memiliki hubungan dengan entitas lain (tidak unik).

b)	Atribut

   Untuk setiap entitas sendiri mempunyai atribut yang berfungsi untuk mendeskripsikan karakteristik dari entitas tersebut. Untuk penggunaan atribut kunci (key) adalah pembeda dari entitas dan atribut yang mana, diwakili dengan simbol ellips. Berikut merupakan beberapa jenis atribut yang sering digunakan:

o	Atribut Kunci
Merupakan atribut yang digunakan untuk menentukan data yang bersifat unik. Pada umumnya, data dari atribut key berbentuk angka. Contohnya NIM (Nomor Induk Mahasiswa), No. KTP, SIM, NPWP, dan lain sebagainya.

o	Atribut Simpel

  Yaitu atribut yang tidak dapat dipecah lagi atau atomic dan bernilai tunggal. Contohnya adalah alamat rumah, kantor, nama penerbit, tahun terbit jurnal, dan lain – lain.
  
o	Atribut Multinilai
  
  Merupakan atribut yang memiliki sekelompok nilai untuk setiap entitas -nya. Contoh dari atribut multivalue adalah kumpulan nama pengarang dalam sebuah novel.
  
o	Atribut Gabungan
  
  Yaitu atribut yang berasal dari susunan atribut yang lebih kecil dalam artian tertentu. Contohnya adalah data terkait nama lengkap, yang terdiri dari nama depan, tengah, dan belakang.
  
o	Atribut Derivatif

  Merupakan atribut yang berasal dari atribut lain dan tidak bersifat wajib untuk ditulis pada ERD. Contohnya adalah usia, selisih waktu, kelas atau ruang, dan lain sebagainya.

c)	Relasi

   Relasi adalah sebuah hubungan antara beberapa jenis entitas yang berasal dari himpunan entitas yang berbeda. Bentuk relasi ini akan dilambangkan dengan bentuk belah ketupat. Terdapat tiga jenis relasi yang digunakan dalam ERD, diantaranya adalh sebagai berikut:

o	One to One
  
  Yang berarti, setiap entitas hanya boleh memiliki relasi dengan satu entitas yang lain. Contohnya adalah data mahasiswa dengan data NIM.

o	One to Many
  
  Merupakan hubungan antara satu entitas dengan beberapa entitas, dan begitu pula sebaliknya. Contoh implementasinya adalah data terkait guru dengan siswa Sekolah Dasar (SD).

o	Many to Many
  
  Merupakan hubungan antara beberapa entitas yang memiliki lebih dari satu relasi. Contohnya adalah siswa SMP dengan data terkait ekstrakurikuler yang tersedia.

d)	Garis

   Garis berfungsi untuk menghubungkan antar atribut sebagai bentuk hubungan entitas yang model dari diagram ER itu sendiri.

# Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda. 
Sistem Aplikasi Club Futsal Berbasis Web

# Deskripsikan solusi digital
Aplikasi ini dibuat untuk memudahkan management club dan penggemar mengelola serta melihat aktivitas club dan pemain, dengan fitur-fitur sebagai berikut :
1. Menampilkan halaman club mencakup informasi club, prestasi club, dan media sosial club
2. Menampilkan halaman data pelatih dan pemain 
3. Menampilkan halaman beita
4. menampilkan halaman register untuk pemain baru yang mau bergabung

# ERD notasi Chen dari struktur data yang mewakili fitur2 di solusi digital
![image](https://user-images.githubusercontent.com/86096057/159870845-b95c7510-9993-4af6-a9c9-11f571dd1271.png)

# ERD notasi Crow Foot dari struktur data logical yang mewakili fitur2 di solusi digital tersebut, lengkap dengan keys, tipe data, dan normalisasi hingga bentuk ke 3
![image](https://user-images.githubusercontent.com/86096057/162019514-1cf1e7b1-1160-4f56-b3cb-ef8007c4b877.png)

# Tabel Normalisasi

## Admin
|🔑ID_Admin|Username|Password|
|---|-------|------|
|011|ryhnts|ABCcc83m|
|012| rjljldn|Gdjcks29|

## Club
|🔑Nama_Club|Alamat_Club|Sejarah_Club|Prestasi_Club|Media_Sosiasl_Club|
|---|-------|------|--|---|
|FC Omicron|Cigedug-Garut|Didirikan tahun 2022|Juara 2 Trofeo U-15|Ig : @fcomicron|


## Official_Club
|🔑ID_Official|Nama|Jabatan|No_HP|TTL|Alamat|
|---|-------|------|--|---|---|
|011|Rayhan|Pemilik_club|082261178767|Garut, 15 Oktober 1998|Garut|
|021|daus|Manager|087998554127|Garut, 13 Januari 1996|Garut|
|031|Butet|Pelatih_Kiper|089987645572|Garut, 6 Maret 2000|Garut|
|041|Wandi|Tim_Medis|081234765890|Garut, 18 Agustus 1999|Garut|
|051|Alo|Tim_Medis|081234765812|Garut, 10 April 1987|Garut|
|061|yayan|Penasehat|081234761278|Garut, 14 Februari 1990|Garut|

## Pemain_Club
|🔑ID_Pemain|Nama|Posisi|No_Punggung|TTL|Alamat|No_Hp|
|---|---|---|---|---|---|---|
|001|Rayhan Tsaury|Pivot|15|Garut, 15 Oktober 2002|Garut|082261183474|
|002|Rijal Jalaludin|Flank|29|Garut, 21 November 2000|Garut|082261183471|
|003|Robby Herdiana|Anchor|26|Garut, 10 Agustus 2001|Garut|082261183472|
|004|Najril|Flank|11|Garut, 15 Januari 2007|Garut|082261183473|
|005|Emil Hamzah|Anchor|8|Garut, 13 Maret 1998|Garut|082261183475|
|006|Wendi|Anchor|2|Garut, 12 april 2000|Garut|082261183476|
|007|Rijki Maulana|GK|13|Garut, 13 November 2000|Garut|082261183477|
|008|Sansan|Flank|98|Garut, 15 Juni 1998|Garut|082261183478|
|009|Toni Basalamah|Pivot|7|Garut, 7 Agustus 1993|Garut|082261183479|
|010|Pajar Rahayu|GK|30|Garut, 28 Juli Oktober 2004|Garut|082261183410|
|011|Mumammad Rasyid|Anchor|6|Garut, 19 April 2005|Garut|082261183411|
|012|Farhan Farhur|Flank|10|Garut, 15 Oktober 2005|Garut|082261183412|
|013|Ari Rustian|Pivot|17|Garut, 10 Mei 2004|Garut|082261183413|
|014|Willy|GK|1|Garut, 2 September 2008|Garut|082261183414|
|015|Dede LUkman|Flank|4|Garut, 8 Januari 2003|Garut|082261183415|
|016|Rifki|Anchor|19|Garut, 11 Oktober 2006|Garut|082261183416|
|017|Rijky|Pivot|23|Garut, 19 Mei 2006|Garut|082261183417|
|018|Muhammad Levi|Flank|18|Garut, 27 Oktober 2006|Garut|0822611834718|
|019|Kaka Muhaemin|Anchor|5|Garut, 15 Maret 2006|Garut|082261183419|
|020|Irman|Pivot|20|Garut, 25 Juni 2006|Garut|082261183420|
|021|Riswan|flank|12|Garut, 21 Oktober 2007|Garut|082261183421|
|022|Lingga AF|Flank|9|Garut, 19 Juli 2002|Garut|082261183422|
|023|Hajar|Pivot|72|Garut, 16 Maret 2009|Garut|082261183424|

## Tabel Laboratorium
|🔑ID_Berita|Jenis_Berita|Isi_Berita|
|---|-------|------|
|111|Turnamen|Bagja Buah Cup 2022 akan dilaksakan seusai hari raya Idul firti|
|112|Kesehatan|Salah satu pemain FC Omicron mengalami cerdra ringan saat bertanding melawan Naura FC pada lanjutan Liga U-20 Garsel|
