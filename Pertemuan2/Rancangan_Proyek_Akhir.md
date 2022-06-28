![image](https://user-images.githubusercontent.com/86096057/159870845-b95c7510-9993-4af6-a9c9-11f571dd1271.png)

# Sistem Aplikasi Club Futsal Berbasis Web

# Deskripsi Proyek
Aplikasi ini dibuat untuk memudahkan management club dan penggemar mengelola serta melihat aktivitas club dan pemain, dengan fitur-fitur sebagai berikut :
1. Menampilkan halaman club mencakup informasi club, prestasi club, dan media sosial club
2. Menampilkan halaman data pelatih dan pemain 
3. Menampilkan halaman beita
4. menampilkan halaman register untuk pemain baru yang mau bergabung


# Entitas dan Atribut
### Admin
1. id Admin (PK)
2. User name
3. Password

### Club
1. Id Admin (Fk)
2. Id Club (PK)
3. Informasi club
4. Alamat 
5. Sejarah Club 
6. Prestasi

### Official
1. Id Admin (Fk)
2. Id Official (PK)
3. Nama
4. Jabatan
5. *No Hp 
6. Tempat Tanggal Lahir 
7. Alamat

### Pemain
1. Id Admin (FK)
2. Id Pemain (PK)
3. Nama
4. No Punggung
5. Posisi
6. No Hp
7. Tempat Tanggal Lahir
8. Alamat

### Berita
1. Id Admin (FK)
2. Id Berita (PK)
3. Jenis Berita
4. Isi Berita

### Register 
1. Id Admin (FK)
2. Id Register (PK)
3. Email
4. Password
