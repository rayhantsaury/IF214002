QUERYING SINGLE TABLE
-----

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

ALIASES
-----

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

FILTERING THE OUTPUT
-----
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

QUERYING MULTIPLE TABLES
-----
## INNER JOIN
### ``JOIN`` (or explicitly ``INNER JOIN``) returns rows that have matching values in both tables.
```python
SELECT city.name, country.name
FROM city
[INNER] JOIN country
  ON city.country_id = country.id;
```
