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
