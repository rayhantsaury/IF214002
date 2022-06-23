

### Tes webservice
![image](https://user-images.githubusercontent.com/86096057/175335022-42e8ce7b-d27c-4b10-87c1-52efc8dde33a.png)


```python
select count(date_part('year',tanggal_lahir)) as jumlah_pemain, date_part('year',tanggal_lahir) as tahun from tbpemain group by date_part('year',tanggal_lahir) order by tahun;
```
