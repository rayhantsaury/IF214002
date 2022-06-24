

### Tes webservice
![image](https://user-images.githubusercontent.com/86096057/175335022-42e8ce7b-d27c-4b10-87c1-52efc8dde33a.png)

### Visualisasi Data Futsal
![image](https://user-images.githubusercontent.com/86096057/175524685-175f9394-a48b-484f-b97b-4f534fe3127f.png)
```python
select count(date_part('year',tanggal_lahir)) as jumlah_pemain, date_part('year',tanggal_lahir) as tahun from tbpemain group by date_part('year',tanggal_lahir) order by tahun;
```




