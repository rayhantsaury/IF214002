## Data Definition Language (DDL)
### Create Table

#### Admin
```python
CREATE TABLE IF NOT EXISTS public."Admin"
(
    id_admin integer NOT NULL,
    username_admin character varying(50) COLLATE pg_catalog."default" NOT NULL,
    pass_admin character varying(28) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Admin_pkey" PRIMARY KEY (id_admin)
)

TABLESPACE pg_default;

```

#### Berita
```python
CREATE TABLE IF NOT EXISTS public."Berita"
(
    id_berita integer NOT NULL,
    jenis_berita character varying(50) COLLATE pg_catalog."default" NOT NULL,
    isi_berita character varying(999) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Berita_pkey" PRIMARY KEY (id_berita)
)

TABLESPACE pg_default;
```

#### Club
```python
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
```

#### Official
```python
CREATE TABLE IF NOT EXISTS public."Official"
(
    id_official integer NOT NULL,
    nama_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    jabatan_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    alamat_official character varying(50) COLLATE pg_catalog."default" NOT NULL,
    telepon_official character(12) COLLATE pg_catalog."default" NOT NULL,
    ttl_official character varying(30) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Official_pkey" PRIMARY KEY (id_official)
)

TABLESPACE pg_default;
```

#### Pemain
```python
CREATE TABLE IF NOT EXISTS public."Pemain"
(
    id_pemain integer NOT NULL,
    nama_pemain character varying(50) COLLATE pg_catalog."default" NOT NULL,
    no_pemain integer NOT NULL,
    alamat_pemain character varying(50) COLLATE pg_catalog."default" NOT NULL,
    ttl_pemain character varying(30) COLLATE pg_catalog."default" NOT NULL,
    telepon_pemain character(12) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Pemain_pkey" PRIMARY KEY (id_pemain)
)

TABLESPACE pg_default;
```

#### Register
```python
CREATE TABLE IF NOT EXISTS public."Register"
(
    email character varying(50) COLLATE pg_catalog."default" NOT NULL,
    nama character varying(50) COLLATE pg_catalog."default" NOT NULL,
    ttl character varying(30) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Register_pkey" PRIMARY KEY (email)
)

TABLESPACE pg_default;
```

### Data Manipulation Language (DML)
### Insert Data

#### Admin
```python
INSBeritaERT INTO "Admin" (id_admin,username_admin,pass_admin) VALUES (
  '111',
  'naruto1',
  'uzumaki1'
); 
```

#### Berita
```python
INSERT INTO "Berita" (id_berita,jenis_berita,isi_berita) VALUES (
  '111',
  'jadwal_latihan',
  'Senin'
);
```

#### Club
```python
INSERT INTO "Club" (nama_club,alamat_club,sejarah_club,prestas_club,media_sosial) VALUES (
  'FC Omicron',
  'Cigedug, Garut, Jawa Barat',
  'Dibentuk Tahun 2022',
  '(Juara 2 Trofeo U-15), (Juara 1 Turnamen Futsal U-12 ), (Juara 3 Turnamen Futsal U-15)',
  'IG: @fcomicron'
); 
```

#### Official
```python
INSERT INTO "Official" (id_official,nama_official,jabatan_official,alamat_official,telepon_official,ttl_official) VALUES (
  '1',
  'Rizal Jalaludin',
  'Pelatih',
  'Cigedug, Garut, Jawa Barat',
  '081198348912',
  'Garut, 19 Januari 2000'
); 
```

#### Pemain
```python
INSERT INTO "Pemain" (id_pemain,nama_pemain,no_pemain,alamat_pemain,ttl_pemain,telepon_pemain) VALUES (
  '1',
  'Rayhan Tsaury',
  '15',
  'Cikajang, Garut, Jawa Barat',
  'Garut, 15 Oktober 2002',
  '082261183474'
); 
```

#### Register
```python
INSERT INTO "Register" (email,nama,ttl) VALUES (
  'bbs12@gmail.com',
  'Bambang Bayu Saptaji',
  'Jakarta, 18 Maret 1997'
);  Register
```
