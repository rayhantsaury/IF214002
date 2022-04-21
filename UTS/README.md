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
1.	ERD adalah model atau rancangan untuk membuat database, supaya lebih mudah dalam menggambarkan data yang memiliki hubungan atau relasi dalam bentuk sebuah desain. Dengan adanya ER diagram, maka sistem database yang terbentuk dapat digambarkan dengan lebih terstruktur dan terlihat rapi.
•	Jenis Model Data
Untuk menyusun sistem database yang tepat, maka kita harus menentukan terlebih dahulu mengenai jenis model data yang akan digunakan. Yang mana, hal tersebut akan sangat berpengaruh nantinya pada pengembangan aplikasi sesuai dengan kebutuhan proyek bisnis.
Model ER konseptual sangat berguna untuk mendokumentasikan segala bentuk arsitektur data pada sebuah organisasi. Model ini dapat digunakan untuk satu atau lebih jenis model data logis. Tujuan dari pengembangannya adalah untuk membangun struktur metadata untuk data master entitas dan set ER model logis.
1)	Data Logis
Jenis yang pertama adalah model data logis, dimana untuk proses pembuatannya tidak membutuhkan model data konseptual. Komponen dalam model data logis antara lain, entitas data master, operasional, dan transaksional yang telah terdefinisi sebelumnya. Model ini juga dapat dikembangkan secara independen mulai dari yang lebih spesifik, hingga sistem manajemen basis data yang dapat diimplementasikan langsung.

2)	Data Fisik
Model data fisik memungkinkan untuk dikembangkan dari model data logis. Model ini yang digunakan sebagai database. Model data fisik dipakai dalam menentukan metadata struktural dalam sistem manajemen database sebagai objek penyimpanan data yang bersifat relasional, contohnya tabel, indeks dan trigger pada database.
•	Komponen yag Dipakai
ERD biasanya erat kaitannya dengan Data Flow Diagram (DFD) untuk menampilkan sebuah data store. Tujuannya adalah untuk memvisualisasikan bagaimana proses data dapat saling terhubung dan dapat mengkonstruksi data relasional. Berikut ini kami akan memberikan beberapa penjelasan mengenai istilah dan komponen apa saja yang berada pada ERD.
1)	Entitas
Entitas merupakan kumpulan objek yang dapat teridentifikasi secara unik. Di dalam ERD, entitas dilambangkan dengan bentuk persegi panjang. Kemudian, entitas lemah akan digambarkan dengan bentuk persegi panjang kecil di dalam persegi panjang yang besar. Untuk entitas lemah digunakan untuk melambangkan entitas yang memiliki hubungan dengan entitas lain (tidak unik).
2)	Atribut
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
3)	Relasi
Relasi adalah sebuah hubungan antara beberapa jenis entitas yang berasal dari himpunan entitas yang berbeda. Bentuk relasi ini akan dilambangkan dengan bentuk belah ketupat. Terdapat tiga jenis relasi yang digunakan dalam ERD, diantaranya adalh sebagai berikut:
o	One to One
Yang berarti, setiap entitas hanya boleh memiliki relasi dengan satu entitas yang lain. Contohnya adalah data mahasiswa dengan data NIM.
o	One to Many
Merupakan hubungan antara satu entitas dengan beberapa entitas, dan begitu pula sebaliknya. Contoh implementasinya adalah data terkait guru dengan siswa Sekolah Dasar (SD).
o	Many to Many
Merupakan hubungan antara beberapa entitas yang memiliki lebih dari satu relasi. Contohnya adalah siswa SMP dengan data terkait ekstrakurikuler yang tersedia.
4)	Garis
Garis berfungsi untuk menghubungkan antar atribut sebagai bentuk hubungan entitas yang model dari diagram ER itu sendiri.
