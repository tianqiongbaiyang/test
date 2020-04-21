（1）SELECT a.id, a.city, b.province FROM city as a LEFT JOIN province as b ON a.province_id = b.id;
(2) SELECT b.id, b.province, count(b.id) FROM city as a RIGHT JOIN province as b ON a.province_id = b.id;
(3)SELECT b.id, b.province FROM city as a RIGHT JOIN province as b ON a.province_id = b.id where count(b.id) < 15;
