![Diagram ERD drawio](https://user-images.githubusercontent.com/86096057/176486023-7ad11487-214f-4c70-b48a-c076df338bed.png)

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
3. Nama Club
4. Alamat Club
5. Sejarah Club 
6. Prestasi Club
7. Media Sosial

### Official
1. Id Admin (Fk)
2. Id Official (PK)
3. Nama
4. Jabatan
5. Alamat
6. Telepon
7. Tempat Tanggal Lahir 

### Pemain
1. Id Admin (FK)
2. Id Pemain (PK)
3. Nama
4. Nomor
5. Tempat Lahir
6. Tanggal Lahir
7. Alamat
8. Telepon

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
