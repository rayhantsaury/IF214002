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
1. Admin (user_name, password)
2. Club (informasi_club, alamat, sejarah_club, prestasi)
3. Official (id, nama, jabatan, no_hp, tempat_tanggal_lahir, alamat)
4. Pemain (id, nama, no_punggung, posisi, no_hp, tempat_tanggal_lahir, alamat)
5. Berita (jenis_berita, isi_berita)
6. Register (email, nama, tempat_tanggal_lahir)


## Relasi
1. Admin 1 1 --- 1 1 club
2. Admin 1 1 --- 1-n Official dan pemain
3. Admin 1 1 --- 1-n berita
4. Admin 1 1 --- 0-n Register

