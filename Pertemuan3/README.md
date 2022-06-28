# Sistem Aplikasi Club Futsal Berbasis Web

# Deskripsi Proyek
Aplikasi ini dibuat untuk memudahkan management club dan penggemar mengelola serta melihat aktivitas club dan pemain, dengan fitur-fitur sebagai berikut :
1. Menampilkan halaman club mencakup informasi club, prestasi dan media sosial club
2. Menampilkan halaman data pelatih dan pemain 
3. Menampilkan halaman berita
4. menampilkan halaman register untuk pemain baru yang mau bergabung

![omicron](https://user-images.githubusercontent.com/86096057/176130512-e39df2f5-f5e4-4f50-92ef-e0b393c4b710.png)

## Entitas dan Atribut
Admin
1. id Admin (PK)
2. User name
3. Password

Club
1. Id Admin (Fk)
2. Id Club (PK)
3. Informasi club
4. Alamat 
5. Sejarah Club 
6. Prestasi

Official
1. Id Admin (Fk)
2. Id Official (PK)
3. Nama
4. Jabatan
5. *No Hp 
6. Tempat Tanggal Lahir 
7. Alamat

Pemain
1. Id Admin (FK)
2. Id Pemain (PK)
3. Nama
4. No Punggung
5. Posisi
6. No Hp
7. Tempat Tanggal Lahir
8. Alamat

Berita
1. Id Admin (FK)
2. Id Berita (PK)
3. Jenis Berita
4. Isi Berita

Register 
1. Id Admin (FK)
2. Id Register (PK)
3. Email
4. Password

## Relasi
1. Admin 1 1 --- 0-n club
2. Admin 1 1 --- 0-n Official
3. Admin 1 1 --- 0-n pemain
4. Admin 1 1 --- 0-n berita
5. Admin 1 1 --- 0-n Register

