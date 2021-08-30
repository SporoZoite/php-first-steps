1) How many customers do we have?
SELECT COUNT(*) 
FROM customer;
122

2) What is the customer number of Mary Young?
SELECT customerNumber 
FROM customers 
WHERE contactFirstName = "Mary" 
AND contactLastName = "Young";
219

3) What is the customer number of the person living at Magazinweg 7, Frankfurt 60528?
SELECT customerNumber 
FROM customers 
WHERE addressLine1 = "Magazinweg 7";
247

4) If you sort the employees on their last name, what is the email of the first employee?
SELECT email 
FROM employees 
ORDER BY lastName
ASC;
lbondur@classicmodelcars.com

5) If you sort the employees on their last name, what is the email of the last employee?
SELECT email 
FROM employees 
ORDER BY lastName
DESC;

6) What is first the product code of all the products from the line 'Trucks and Buses', sorted first by productscale, then by productname.
SELECT productCode 
FROM products 
WHERE productLine = "Trucks and Buses" 
ORDER BY productScale, productName;
S12_4473

7) What is the email of the first employee, sorted on their last name that starts with a 't'?
SELECT email 
FROM employees 
WHERE lastName LIKE 't%' 
ORDER BY lastName ASC;
lthompson@classicmodelcars.com

8) Which customer (give customer number) payed by check on 2004-01-19 ?
SELECT customerNumber 
FROM payments 
WHERE paymentDate = "2004-01-19";
177

9) How many customers do we have living in the state Nevada or New York?
SELECT COUNT(*) 
FROM customers 
WHERE state = 'NV' OR state = 'NY';
7

10) How many customers do we have living in the state Nevada or New York or outside the united states?
SELECT COUNT(*) 
FROM customers 
WHERE country!= 'USA' OR state = 'NV' OR state = 'NY';

11) How many customers do we have with the following conditions (only 1 query needed): - Living in the state Nevada or New York OR - Living outside the USA or the customers and with a credit limit above 1000 dollar?
SELECT COUNT(*) 
FROM customers 
WHERE (country!= 'USA' AND creditLimit >1000) 
OR state = 'NV' OR state = 'NY';
70

12) How many customers don't have an assigned sales representative?
SELECT COUNT(*) 
FROM customers 
WHERE salesRepEmployeeNumber IS NULL;
22

13) How many orders have a comment?
SELECT COUNT(*) 
FROM orders 
WHERE comments IS NOT NULL;
80

14) How many orders do we have where the comment mentions the word "caution"?
SELECT COUNT(*) 
FROM orders 
WHERE comments LIKE '%caution%';
4

15) What is the average credit limit of our customers from the USA? (rounded)
SELECT AVG(creditLimit) 
FROM customers 
WHERE country = 'USA';
78102.777778

16) What is the most common last name from our customers?
SELECT COUNT(*) 
AS total, contactLastName 
FROM customers 
GROUP BY contactLastName 
ORDER BY total DESC;
Young

17) What are valid statuses of the orders?
SELECT DISTINCT status 
FROM orders;
Shipped

Resolved

Cancelled

On Hold

Disputed

In Process

18) In which countries don't we have any customers?
SELECT DISTINCT country 
FROM customers 
ORDER BY country;
China, Greece, South Korea 

19) How many orders where never shipped?
SELECT COUNT(*) 
FROM orders 
WHERE shippedDate IS NULL;
14

20) How many customers does Steve Patterson have with a credit limit above 100 000 EUR?
SELECT employeeNumber 
FROM employees 
WHERE firstName = "Steve" 
AND lastName = "Patterson";
1216

SELECT COUNT(*) 
FROM customers 
WHERE salesRepEmployeeNumber = 1216 
AND creditLimit > 100000;
3

21) How many orders have been shipped to our customers?
SELECT COUNT(*) 
FROM orders 
WHERE status = "shipped";
303

22) On average, how many products do we have in each product line?
SELECT AVG(innertable.total) 
FROM (SELECT COUNT(*) 
AS total 
FROM products 
GROUP BY productLine) 
AS innertable;
15.7143

23) How many products are low in stock? (below 100 pieces)
SELECT COUNT(*) quantityInStock 
FROM products 
WHERE quantityInStock <100;
2

24) How many products have more the 100 pieces in stock, but are below 500 pieces.
SELECT COUNT(*) quantityInStock 
FROM products 
WHERE quantityInStock >100 
AND quantityInStock <500;
3

25) How many orders did we ship between and including June 2004 & September 2004
SELECT COUNT(*) 
FROM orders 
WHERE shippedDate between CAST('2004-06-01' AS DATE) 
AND CAST('2004-09-31' AS DATE) 
AND status = "shipped";
42

26) How many customers share the same last name as an employee of ours?
SELECT COUNT(*) 
FROM customers 
WHERE contactLastName 
IN (SELECT DISTINCT lastName FROM employees);
9

27) Give the product code for the most expensive product for the consumer?
SELECT * 
FROM products 
ORDER BY MSRP DESC;
S10_1949

28) What product (product code) offers us the largest profit margin (difference between buyPrice & MSRP).
SELECT *, 
round(MSRP - buyPrice) 
AS profit 
FROM products 
ORDER BY profit DESC;
S10_1949

29) How much profit (rounded) can the product with the largest profit margin (difference between buyPrice & MSRP) bring us.
SELECT *, 
round(MSRP - buyPrice) 
AS profit 
FROM products 
ORDER BY profit DESC;
116

30) Given the product number of the products (separated with spaces) that have never been sold?
SELECT productCode 
FROM products 
WHERE productCode 
NOT IN (SELECT DISTINCT productCode FROM orderdetails);
S18_3233

31) How many products give us a profit margin below 30 dollar?
SELECT COUNT(*) 
FROM (SELECT round(MSRP-buyPrice) 
AS profit 
FROM products 
HAVING profit < 30 
ORDER BY profit ASC) AS innerTable;
22

32) What is the product code of our most popular product (in number purchased)?
SELECT productCode, sum(quantityOrdered) 
AS total FROM orderdetails 
GROUP BY productCode 
ORDER BY total DESC;
S18_3232

33) How many of our popular product did we effectively ship?
SELECT productCode, sum(quantityOrdered) 
AS total 
FROM orderdetails 
LEFT JOIN orders on orders.orderNumber = orderdetails.orderNumber 
WHERE orders.status = "shipped" 
GROUP BY productCode 
ORDER BY total DESC;
1720

34) Which check number paid for order 10210. Tip: Pay close attention to the date fields on both tables to solve this.
SELECT * 
FROM payments 
LEFT JOIN orders 
ON orders.customerNumber = payments.customerNumber 
WHERE orders.orderNumber = 10210 
AND paymentDate 
BETWEEN orders.orderDate 
AND orders.shippedDate;
CI381435

35) Which order was paid by check CP804873?
SELECT * 
FROM payments 
LEFT JOIN orders 
ON orders.customerNumber = payments.customerNumber 
WHERE payments.checkNumber = "CP804873" 
AND paymentDate 
BETWEEN orders.orderDate 
AND orders.shippedDate;
385

36) How many payments do we have above 5000 EUR and with a check number with a 'D' somewhere in the check number, ending the check number with the digit 9?
SELECT COUNT(*) 
FROM payments 
WHERE payments.amount > 5000 
AND checkNumber LIKE ("%D%9");
3

37) How many products do we have in product scale 1:18 or 1:24 that are either trains and have a sell price above 100 EUR, or classic cars and a price between 50 and 80, or trucks and buses with a price below 100 EUR?
SELECT COUNT(*) 
FROM products 
WHERE productScale IN('1:18','1:24') 
AND((productLine = 'Classic Cars' AND MSRP BETWEEN 50 AND 80) 
OR (productLine = 'Trucks and Buses' AND MSRP < 100) 
OR (productLine = 'trains' AND MSRP > 100));
8

38) In which country do we have the most customers that we do not have an office in?
SELECT country, 
COUNT(country) 
AS total FROM customers 
WHERE country NOT IN (SELECT DISTINCT country FROM offices) 
GROUP BY country 
ORDER BY total DESC;
Germany

39) What city has our biggest office in terms of employees?
SELECT COUNT(*) 
AS total,offices.country,offices.city 
FROM employees 
LEFT JOIN offices 
ON employees.officeCode = offices.officeCode 
GROUP BY employees.officeCode 
ORDER BY total DESC;
San Francisco

40) How many employees does our largest office have, including leadership?
SELECT COUNT(*) 
AS total,offices.country,offices.city 
FROM employees 
LEFT JOIN offices 
ON employees.officeCode = offices.officeCode 
GROUP BY employees.officeCode 
ORDER BY total DESC;
6

41) How many employees do we have on average per country (rounded)?
SELECT round(AVG(innertable.total)) 
FROM ( SELECT COUNT(*) 
AS total 
FROM employees 
LEFT JOIN offices 
ON employees.officeCode = offices.officeCode 
GROUP BY offices.country 
ORDER BY total DESC) 
AS innertable;
5

42) What is the total value of all shipped & resolved sales ever combined?
SELECT round(sum(quantityOrdered * priceEach)) 
FROM orderdetails 
LEFT JOIN orders ON orderdetails.orderNumber = orders.orderNumber 
WHERE orders.status = "shipped";
8865095

43) What is the total value of all shipped & resolved sales in the year 2005 combined? (based on shipping date)
SELECT round(sum(quantityOrdered * priceEach)) 
FROM orderdetails 
LEFT JOIN orders ON orderdetails.orderNumber = orders.orderNumber 
WHERE orders.status IN ("shipped","Resolved") 
AND year(shippedDate) = 2005;
1427945

44) What was our most profitable year ever (based on shipping date), considering all shipped & resolved orders?
SELECT year(shippedDate) AS year, 
round(sum(quantityOrdered * priceEach)) 
AS total FROM orderdetails 
LEFT JOIN orders ON orderdetails.orderNumber = orders.orderNumber 
WHERE orders.status IN ("shipped","Resolved") 
GROUP BY year 
ORDER BY total DESC;
2004

45) How much revenue did we make on in our most profitable year ever (based on shipping date), considering all shipped & resolved orders?
SELECT year(shippedDate) AS year, 
round(sum(quantityOrdered * priceEach)) 
AS total FROM orderdetails 
LEFT JOIN orders ON orderdetails.orderNumber = orders.orderNumber 
WHERE orders.status IN ("shipped","Resolved") 
GROUP BY year 
ORDER BY total DESC;
4321168

46) What is the name of our biggest customer in the USA of terms of revenue?
SELECT customerName, 
round(sum(quantityOrdered * priceEach)) 
AS total FROM customers 
LEFT JOIN orders ON customers.customerNumber = orders.customerNumber 
LEFT JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber 
WHERE country = "USA" 
GROUP BY customers.customerNumber 
ORDER BY total DESC;
Mini Gifts Distributors Ltd.

47) How much has our largest customer inside the USA ordered with us (total value)?
SELECT customerName, 
round(sum(quantityOrdered * priceEach)) 
AS total FROM customers 
LEFT JOIN orders ON customers.customerNumber = orders.customerNumber 
LEFT JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber 
WHERE country = "USA" 
GROUP BY customers.customerNumber 
ORDER BY total DESC;
591827

48) How many customers do we have that never ordered anything?
SELECT COUNT(*) 
FROM ( SELECT customers.customerName,
COUNT(orders.orderNumber) 
AS total FROM customers 
LEFT JOIN orders 
ON customers.customerNumber = orders.customerNumber 
GROUP BY customers.customerNumber 
HAVING total = 0 ORDER BY total ASC) as innertable;
24

49) What is the last name of our best employee in terms of revenue?
SELECT lastName, employeeNumber, round(sum(quantityOrdered*priceEach)) 
AS total FROM employees 
LEFT JOIN customers ON employees.employeeNumber = customers.salesRepEmployeeNumber 
LEFT JOIN orders ON customers.customerNumber = orders.customerNumber 
LEFT JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber 
GROUP BY employees.employeeNumber 
ORDER BY total DESC;
Hernandez

50) What is the office name of the least profitable office in the year 2004?
SELECT offices.officeCode, round(sum(quantityOrdered*priceEach)) 
AS total FROM offices 
LEFT JOIN employees ON employees.officeCode = offices.officeCode 
LEFT JOIN customers ON employees.employeeNumber = customers.salesRepEmployeeNumber 
LEFT JOIN orders ON customers.customerNumber = orders.customerNumber 
LEFT JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber 
WHERE year(orders.shippedDate) = 2004 
GROUP BY offices.officeCode 
ORDER BY total ASC;
5