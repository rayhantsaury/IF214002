![image](https://user-images.githubusercontent.com/86096057/176484834-902efa42-5414-4a16-ac34-2ce4c2c319eb.png)

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
