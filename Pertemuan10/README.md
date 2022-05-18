# TUGAS :
1. Buat infografik / cheatsheet dari perintah-perintah MySQL di atas (boleh yang mau pake PostgreSQL)

# QUERYING SINGLE TABLE
## Fetch all columns from the ``country`` table:
```python
SELECT *
FROM country;
```
## Fetch id and name columns from the city table:
```python
SELECT id, name
FROM city;
````
## Fetch city names sorted by the rating column in the default ASCending order:
```python
SELECT name
FROM city
ORDER BY rating [ASC];
```
## Fetch city names sorted by the rating column in the DESCending order:
```python
SELECT name
FROM city
ORDER BY rating DESC;
```
# ALIASES
## COLUMNS
```python
SELECT name AS city_name
FROM city;
```
## TABLES
```python
SELECT co.name, ci.name
FROM city AS ci
JOIN country AS co
  ON ci.country_id = co.id;
```
# FILTERING THE OUTPUT
## COMPARISON OPERATORS
```python
Fetch names of cities that have a rating above 3:
SELECT name
FROM city
WHERE rating > 3;
```
## Fetch names of cities that are neither Berlin nor Madrid:
```python
SELECT name
FROM city
WHERE name != 'Berlin'
  AND name != 'Madrid';
```
## TEXT OPERATORS
### Fetch names of cities that start with a 'P' or end with an 's':
```python
SELECT name
FROM city
WHERE name LIKE 'P%'
  OR name LIKE '%s';
```
## Fetch names of cities that start with any letter followed by 'ublin' (like Dublin in Ireland or Lublin in Poland):
```python
SELECT name
FROM city
WHERE name LIKE '_ublin';
```
## OTHER OPERATORS
### Fetch names of cities that have a population between 500K and 5M:
```python
SELECT name
FROM city
WHERE population BETWEEN 500000 AND 5000000;
```
### Fetch names of cities that don't miss a rating value:
```python
SELECT name
FROM city
WHERE rating IS NOT NULL;
```
### Fetch names of cities that are in countries with IDs 1, 4, 7, or 8:
```python
SELECT name
FROM city
WHERE country_id IN (1, 4, 7, 8);
```
# QUERYING MULTIPLE TABLES
## INNER JOIN
### ``JOIN`` (or explicitly ``INNER JOIN``) returns rows that have matching values in both tables.
```python
SELECT city.name, country.name
FROM city
[INNER] JOIN country
  ON city.country_id = country.id;
```
## LEFT JOIN
### ``LEFT JOIN`` returns all rows from the left table with corresponding rows from the right table. If there's no matching row, ``NULL`` s are returned as values from the second table.
```python
SELECT city.name, country.name
FROM city
LEFT JOIN country
  ON city.country_id = country.id;
```
## RIGHT JOIN
### ``RIGHT JOIN`` returns all rows from the right table with corresponding rows from the left table. If there's no matching row, ``NULL`` s are returned as values from the left table.
```python
SELECT city.name, country.name
FROM city
RIGHT JOIN country
  ON city.country_id = country.id;
```
## FULL JOIN
### ``FULL JOIN`` (or explicitly ``FULL OUTER JOIN``) returns all rows from both tables – if there's no matching row in the second table, ``NULL`` s are returned.
```python
SELECT city.name, country.name
FROM city
FULL [OUTER] JOIN country
  ON city.country_id = country.id;
```
## CROSS JOIN
### ``CROSS JOIN`` returns all possible combinations of rows from both tables. There are two syntaxes available.
```python
SELECT city.name, country.name
FROM city
CROSS JOIN country;

SELECT city.name, country.name
FROM city, country;
```
## NATURAL JOIN
### ``NATURAL JOIN`` will join tables by all columns with the same name.
```python
SELECT city.name, country.name
FROM city
NATURAL JOIN country;
```
### ``NATURAL JOIN`` used these columns to match rows:
``city.id``, ``city.name``, ``country.id``, ``country.name``.
``NATURAL JOIN`` is very rarely used in practice.

# AGGREGATION AND GROUPING
### ``GROUP BY`` *groups* together rows that have the same values in specified columns. It computes summaries (aggregates) for each unique combination of values.

## AGGREGATE FUNCTIONS
- ``avg(expr)`` − average value for rows within the group
- ``count(expr)`` − count of values for rows within the group
- ``max(expr)`` − maximum value within the group
- ``min(expr)`` − minimum value within the group
- ``sum(expr)`` − sum of values within the group

## EXAMPLE QUERIES
### Find out the number of cities:
```python
SELECT COUNT(*)
FROM city;
```
### Find out the number of cities with non-null ratings:
```python
SELECT COUNT(rating)
FROM city;
```
### Find out the number of distinctive country values:
```python
SELECT COUNT(DISTINCT country_id)
FROM city;
```
### Find out the smallest and the greatest country populations:
```python
SELECT MIN(population), MAX(population)
FROM country;
```
### Find out the total population of cities in respective countries:
```python
SELECT country_id, SUM(population)
FROM city
GROUP BY country_id;
```
### Find out the average rating for cities in respective countries if the average is above 3.0:
```python
SELECT country_id, AVG(rating)
FROM city
GROUP BY country_id
HAVING AVG(rating) > 3.0;
```
# SUBQUERIES
### A subquery is a query that is nested inside another query, or inside another subquery. There are different types of subqueries.
## SINGLE VALUE
### The simplest subquery returns exactly one column and exactly one row. It can be used with comparison operators `=`, `<`, `<=`, `>`, or `>=`.

### This query finds cities with the same rating as Paris:
```python
SELECT name
FROM city
WHERE rating = (
  SELECT rating
  FROM city
  WHERE name = 'Paris'
);
```
## MULTIPLE VALUES
### A subquery can also return multiple columns or multiple rows. Such subqueries can be used with operators ``IN``, ``EXISTS``, ``ALL``, or ``ANY``.
### This query finds cities in countries that have a population above 20M:
```python
SELECT name
FROM city
WHERE country_id IN (
  SELECT country_id
  FROM country
  WHERE population > 20000000
);
```
## CORRELATED
### A correlated subquery refers to the tables introduced in the outer query. A correlated subquery depends on the outer query. It cannot be run independently from the outer query.

### This query finds cities with a population greater than the average population in the country:
```python
SELECT *
FROM city main_city
WHERE population > (
  SELECT AVG(population)
  FROM city average_city
  WHERE average_city.country_id = main_city.country_id
);
```
### This query finds countries that have at least one city:
```python
SELECT name
FROM country
WHERE EXISTS (
  SELECT *
  FROM city
  WHERE country_id = country.id
);
```
# SET OPERATIONS
### Set operations are used to combine the results of two or more queries into a single result. The combined queries must return the same number of columns and compatible data types. The names of the corresponding columns can be different
## UNION
### UNION combines the results of two result sets and removes duplicates. UNION ALL doesn't remove duplicate rows.

### This query displays German cyclists together with German skaters:
```python
SELECT name
FROM cycling
WHERE country = 'DE'
UNION / UNION ALL
SELECT name
FROM skating
WHERE country = 'DE';
```
## INTERSECT
### `INTERSECT` returns only rows that appear in both result sets.

This query displays German cyclists who are also German skaters at the same time:
```python
SELECT name
FROM cycling
WHERE country = 'DE'
INTERSECT
SELECT name
FROM skating
WHERE country = 'DE';
```
## EXCEPT
### `EXCEPT` returns only the rows that appear in the first result set but do not appear in the second result set.

### This query displays German cyclists unless they are also German skaters at the same time:
```python
SELECT name
FROM cycling
WHERE country = 'DE'
EXCEPT / MINUS
SELECT name
FROM skating
WHERE country = 'DE';
```
# TUGAS :
2. Buat query untuk mencari penduduk berusia diatas 25 tahun yang berada di kabupaten 3204 dari [data ini](https://github.com/insanalamin/IF214002/blob/main/pertemuan10/penduduk.sql)

### Cari Data umur penduduk di kabupaten 3204
```python
SELECT id, nama_lengkap, kode_kabupaten, nomor_hp, gender, tanggal_lahir, ijazah_terakhir, pekerjaan, penghasilan_bulanan, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM penduduk
WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) > 25 AND kode_kabupaten='3204';
```
### Cari Data umur penduduk di kabupaten 3204 pake SUM()
```python
SELECT id, nama_lengkap, kode_kabupaten, nomor_hp, gender, tanggal_lahir, ijazah_terakhir, pekerjaan, penghasilan_bulanan, SUM(CURRENT_DATE - tanggal_lahir) AS umur FROM penduduk
GROUP BY id
HAVING SUM(tanggal_lahir) < 1997 AND kode_kabupaten='3204';
```
# TUGAS
3. Nilai tambah, untuk yang menambahkan perintah-perintah MySQL lainnya

### Sorting Nama Penduduk

```python
SELECT * FROM penduduk 
ORDER BY nama_lengkap;
```
### sort 2 kolom

```python
SELECT *
 FROM penduduk
 ORDER BY nama_lengkap ASC, gender DESC;
 ```
 
### Sort data umur Penduduk Lebih 25 tahun di ``Data Penduduk``

```python
SELECT id, nama_lengkap, kode_kabupaten, nomor_hp,gender,ijazah_terakhir, pekerjaan, penghasilan_bulanan , SUM(tanggal_lahir) FROM penduduk
GROUP BY nama_lengkap
HAVING SUM(tanggal_lahir)<1997;
```
