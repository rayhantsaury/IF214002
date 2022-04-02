# Sistem Aplikasi Club Futsal Berbasis Web

# Deskripsi Proyek
Aplikasi ini dibuat untuk memudahkan management club dan penggemar mengelola serta melihat aktivitas club dan pemain, dengan fitur-fitur sebagai berikut :
1. Menampilkan halaman club 
2. Menampilkan halaman data pelatih dan pemain 
3. Menampilkan halaman beita
4. Menampilkan halaman media
5. menampilkan halaman register untuk pemain baru yang mau bergabung

![image](https://user-images.githubusercontent.com/86096057/161379151-0ab12ac4-5f23-429b-a2a5-ed9538435e18.png)



## Entitas dan Atribut
Admin
1. *User name
2. *assword

Club
1. Informasi club
2. Alamat 
3. *Sejarah Club 
4. Prestasi

Official
1. *Id
2. Nama
3. Jabatan
4. *No Hp 
5. Tempat Tanggal Lahir 
6. Alamat

Pemain
1. *Id 
2. Nama
3. *No Punggung
4. Posisi
5. *No Hp
6. Tempat Tanggal Lahir
7. Alamat

Berita
1. *Id
2. Jenis Berita
3. Isi Berita

Register 
1. *Email
2. Nama
3. Tempat Tanggal Lahir

## Relasi
1. Admin 1 1 --- 1 1 club
2. Admin 1 1 --- 1-n Official dan pemain
3. Admin 1 1 --- 1-n berita
4. Admin 1 1 --- 0-n Register

