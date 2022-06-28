## Data Definition Language (DDL)
### Create Table
#### Admin
```python
CREATE TABLE IF NOT EXISTS public.admin
(
    id_admin integer NOT NULL,
    username_admin character varying(255) COLLATE pg_catalog."default" NOT NULL,
    pass_admin character varying(16) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT admin_pkey PRIMARY KEY (id_admin)
)

TABLESPACE pg_default;

```
#### Berita
```python
CREATE TABLE IF NOT EXISTS public.berita
(
    id_berita integer NOT NULL,
    jenis_berita character varying(30) COLLATE pg_catalog."default" NOT NULL,
    isi_berita character varying(255) COLLATE pg_catalog."default" NOT NULL,
    id_admin integer,
    CONSTRAINT berita_pkey PRIMARY KEY (id_berita),
    CONSTRAINT id_admin FOREIGN KEY (id_admin)
        REFERENCES public.admin (id_admin) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;
```
#### Club
```python
CREATE TABLE IF NOT EXISTS public.club
(
    id_club integer NOT NULL,
    nama_club character varying(255) COLLATE pg_catalog."default" NOT NULL,
    alamat_club character varying(255) COLLATE pg_catalog."default" NOT NULL,
    sejarah_club character varying(255) COLLATE pg_catalog."default" NOT NULL,
    prestasi_club character varying COLLATE pg_catalog."default" NOT NULL,
    medsos character varying(255) COLLATE pg_catalog."default" NOT NULL,
    id_admin integer,
    CONSTRAINT club_pkey PRIMARY KEY (id_club),
    CONSTRAINT id_admin FOREIGN KEY (id_admin)
        REFERENCES public.admin (id_admin) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;
```
#### Official
```python
CREATE TABLE IF NOT EXISTS public.official
(
    id_official integer NOT NULL,
    nama_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    jabatan_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    alamat_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    telepon_official character varying(12) COLLATE pg_catalog."default" NOT NULL,
    ttl_official character varying(255) COLLATE pg_catalog."default" NOT NULL,
    id_admin integer,
    CONSTRAINT official_pkey PRIMARY KEY (id_official),
    CONSTRAINT id_admin FOREIGN KEY (id_admin)
        REFERENCES public.admin (id_admin) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;
```
#### Pemain
```python
CREATE TABLE IF NOT EXISTS public.tbpemain
(
    id_pemain integer NOT NULL,
    nama_pemain character varying(30) COLLATE pg_catalog."default" NOT NULL,
    nomor_pemain character varying(2) COLLATE pg_catalog."default" NOT NULL,
    tempat_lahir character varying(30) COLLATE pg_catalog."default" NOT NULL,
    tanggal_lahir date NOT NULL,
    telepon_pemain character varying(12) COLLATE pg_catalog."default" NOT NULL,
    alamat_pemain character varying(255) COLLATE pg_catalog."default" NOT NULL,
    id_admin integer,
    CONSTRAINT tbpemain_pkey PRIMARY KEY (id_pemain),
    CONSTRAINT id_admin FOREIGN KEY (id_admin)
        REFERENCES public.admin (id_admin) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;
```
#### Register
```python
CREATE TABLE IF NOT EXISTS public.register
(
    id_register integer NOT NULL,
    email character varying(30) COLLATE pg_catalog."default" NOT NULL,
    password character varying(30) COLLATE pg_catalog."default" NOT NULL,
    id_admin integer,
    CONSTRAINT register_pkey PRIMARY KEY (id_register),
    CONSTRAINT id_admin FOREIGN KEY (id_admin)
        REFERENCES public.admin (id_admin) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;
```


### Data Manipulation Language (DML)
### Insert Data
#### Admin
![admin](https://user-images.githubusercontent.com/86096057/170278815-a39ab735-ad23-4c37-b66b-0925d6f3669f.png)
```python
INSERT INTO public."admin" (id_admin,username_admin,pass_admin) VALUES
	 (1,'rybts05','ryn000'); 
```
#### Berita
![berita](https://user-images.githubusercontent.com/86096057/170278742-13bac5b4-7a46-43fd-b754-599ed8d743a7.png)
```python
INSERT INTO public.berita (id_berita,jenis_berita,isi_berita,id_admin) VALUES
	 (1,'Jadwal Latihan','Hari Senin',NULL);
```
#### Club
![club](https://user-images.githubusercontent.com/86096057/170278682-c738ebaf-2fe4-484c-9517-6685889f85fb.png)
```python
INSERT INTO public.club (id_club,nama_club,alamat_club,sejarah_club,prestasi_club,medsos,id_admin) VALUES
	 (1,'FC Omicron','Cigedug-Garut','Didirikan Tahun 2021','Juara antar kota Piala gubernur','fcomicron',NULL);
```
#### Official
![official](https://user-images.githubusercontent.com/86096057/170278623-5eb7dbda-ed03-4929-80d8-ac4f38717889.png)
```python
INSERT INTO public.official (id_official,nama_official,jabatan_official,alamat_official,telepon_official,ttl_official,id_admin) VALUES
	 (1,'Rizal Jalaludin','Pelatih Kepala','Cigedug-Garut','081234567891','Garut, 19 Januari 2000',NULL),
	 (2,'Rizki Maulana','Pelatih Kiper','Cigedug-Garut','081334567892','Garut, 29 Juli 2000',NULL),
	 (3,'Emil Hamzah','Penasihat','Cigedug-Garut','081434567893','Garut, 2 Maret 1997',NULL),
	 (4,'Firdaus Ramadhan','Dokumentasi Club','Cigedug-Garut','081534567894','Garut, 4 April 1998',NULL),
	 (5,'Wandi Abdurrohim','Sekretaris Club','Cigedug-Garut','081634567895','Garut, 17 Oktober 1999',NULL),
	 (6,'Robby Herdiana','Bendahara Club','Cigedug-Garut','081734567896','Garut, 10 Agustus 2001',NULL);
```
#### Pemain
![pemain](https://user-images.githubusercontent.com/86096057/170278594-6f09be63-af33-49b5-98f1-81747bea0359.png)
```python
INSERT INTO public.tbpemain (id_pemain,nama_pemain,nomor_pemain,tempat_lahir,tanggal_lahir,telepon_pemain,alamat_pemain,id_admin) VALUES
	 (1,'Rayhan Tsaury','15','Garut','2002-10-15','082261183474','Cikajang-Garut',NULL),
	 (2,'Rizal Jalaludin','29','Garut','2000-01-19','081234561891','Cigedug-Garut',NULL),
	 (3,'Sansan Zensonia','98','Garut','1998-07-15','081234562892','Cigedug-Garut',NULL),
	 (4,'Wendi Setiawan','2','Garut','2000-09-02','081234467893','Cigedug-Garut',NULL),
	 (5,'Emil Hamzah','8','Garut','1997-11-08','081234567594','Cigedug-Garut',NULL),
	 (6,'Rizki Maulana','13','Garut','2000-12-07','081234667895','Cigedug-Garut',NULL),
	 (7,'Ari Rustian','17','Garut','1996-02-16','081734567896','Cigedug-Garut',NULL),
	 (8,'Lingga Abduh Faruq','9','Garut','2002-04-19','088234567897','Cikajang-Garut',NULL),
	 (9,'Robby Herdiana','26','Garut','2001-08-10','089234567898','Cigedug-Garut',NULL),
	 (10,'Bambang','30','Garut','2004-03-18','081234569899','Cigedug-Garut',NULL);
INSERT INTO public.tbpemain (id_pemain,nama_pemain,nomor_pemain,tempat_lahir,tanggal_lahir,telepon_pemain,alamat_pemain,id_admin) VALUES
	 (11,'Toni Basalamah','14','Garut','1991-09-16','081234567892','Cigedug-Garut',NULL),
	 (12,'Muhammad Rasyid','10','Garut','2003-02-19','081234547893','Cigedug-Garut',NULL),
	 (13,'Kaka Muhaemin','11','Garut','2005-08-11','081534577894','Cigedug-Garut',NULL),
	 (14,'Rizki Ompong','6','Garut','2006-03-12','08123456485','Cigedug-Garut',NULL),
	 (15,'Muhammad Najril','7','Garut','2006-01-29','081234567396','Cigedug-Garut',NULL);
```
#### Register
![register](https://user-images.githubusercontent.com/86096057/170278545-ee594e01-ace8-4732-9973-3e9c1ffd5cb1.png)
```python
INSERT INTO public.register (id_register,email,"password",id_admin) VALUES
	 (1,'bbs12@gmail.com','bismillah',NULL);
```

### Data Queri Language (DQL)
```python
select count(date_part('year',tanggal_lahir)) as jumlah_pemain, date_part('year',tanggal_lahir) as tahun from tbpemain group by date_part('year',tanggal_lahir) order by tahun;
```
