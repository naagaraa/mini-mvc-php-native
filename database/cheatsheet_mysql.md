<!-- MYSQL  -->
# CHEATSHEET DATABASE
<p>cheat saya sertakan pada project agar tidak sulit dalam belajar melakukan interaksi dengan database source dan cheat diambil dari devhits.io I hope this can help other from developer by developer </p>


## Author Mini MVC PHP NATIVE
Miyuki nagara as Eka Jaya Nagara Studen Informatics Enggineering in Jakarta Indonesia
<br><br>

## MYSQL
<p>berikut adalah cheat sheet mysql yang saya sertakan dalam project</p>
<br>

### Select 
<p>berikut adalah perintah untuk select</p>

```
SELECT * FROM table;
SELECT * FROM table1, table2;
SELECT field1, field2 FROM table1, table2;
SELECT ... FROM ... WHERE condition
SELECT ... FROM ... WHERE condition GROUPBY field;
SELECT ... FROM ... WHERE condition GROUPBY field HAVING condition2;
SELECT ... FROM ... WHERE condition ORDER BY field1, field2;
SELECT ... FROM ... WHERE condition ORDER BY field1, field2 DESC;
SELECT ... FROM ... WHERE condition LIMIT 10;
SELECT DISTINCT field1 FROM ...
SELECT DISTINCT field1, field2 FROM ...

```


### Select - Join
<p>berikut adalah perintah untuk select - join </p>

```
SELECT ... FROM t1 JOIN t2 ON t1.id1 = t2.id2 WHERE condition;
SELECT ... FROM t1 LEFT JOIN t2 ON t1.id1 = t2.id2 WHERE condition;
SELECT ... FROM t1 JOIN (t2 JOIN t3 ON ...) ON ...

```


### Condition
<p>berikut adalah perintah untuk select - join </p>

```
field1 = value1
field1 <> value1
field1 LIKE 'value _ %'
field1 IS NULL
field1 IS NOT NULL
field1 IS IN (value1, value2)
field1 IS NOT IN (value1, value2)
condition1 AND condition2
condition1 OR condition2

```


### Backup Database to SQL file
<p>berikut adalah perintah backup Databae </p>

```
mysqldump -u Username -p dbNameYouWant > databasename_backup.sql

```


### Restore From backup SQL File
<p>berikut adalah perintah Restore Databae </p>

```
mysql - u Username -p dbNameYouWant < databasename_backup.sql;

```


### Insert
<p>berikut adalah perintah insert data ke database </p>

```
INSERT INTO table1 (field1, field2) VALUES (value1, value2);

```


### Delete
<p>berikut adalah perintah delete data pada database </p>

```
DELETE FROM table1 / TRUNCATE table1
DELETE FROM table1 WHERE condition
DELETE FROM table1, table2 FROM table1, table2 WHERE table1.id1 =
  table2.id2 AND condition

```


### Brosing
<p>berikut adalah perintah browsing pada mysql </p>

```
SHOW DATABASES;
SHOW TABLES;
SHOW FIELDS FROM table / DESCRIBE table;
SHOW CREATE TABLE table;
SHOW PROCESSLIST;
KILL process_number;

```




<!-- PDO -->