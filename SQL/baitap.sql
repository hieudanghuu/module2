-- câu 1 
SELECT em.employeeNumber,em.lastName,em.firstName,em.email,em.jobTitle,of.city,of.addressLine1
FROM employees AS em
JOIN offices AS of
ON em.officeCode = of.officeCode
-- câu 2
SELECT em.employeeNumber,em.lastName,em.firstName,em.email,em.jobTitle,of.city,of.addressLine1
FROM employees AS em
JOIN offices AS of
ON em.officeCode = of.officeCode
WHERE of.city = 'london'
-- câu 3
SELECT em.employeeNumber,em.lastName,em.firstName,em.jobTitle,cu.contactLastName,cu.contactFirstName,cu.creditLimit
FROM employees as em
JOIN customers as cu
ON cu.salesRepEmployeeNumber = em.employeeNumber
-- câu 4 
SELECT em.employeeNumber,em.lastName,em.firstName,em.jobTitle,cu.contactLastName,cu.contactFirstName,cu.creditLimit
FROM employees as em
JOIN customers as cu
ON cu.salesRepEmployeeNumber = em.employeeNumber
WHERE cu.country = 'usa'
-- câu 5
SELECT em.employeeNumber,em.lastName,em.firstName,em.jobTitle,cu.contactLastName,cu.contactFirstName,cu.creditLimit
FROM employees as em
JOIN customers as cu
ON cu.salesRepEmployeeNumber = em.employeeNumber
WHERE NOT cu.country = 'usa'
-- câu 6
SELECT em.employeeNumber,em.lastName,em.firstName,em.jobTitle,cu.contactLastName,cu.contactFirstName,cu.creditLimit
FROM employees as em
JOIN customers as cu ON cu.salesRepEmployeeNumber = em.employeeNumber
JOIN payments on payments.paymentDate
WHERE NOT cu.country = 'usa'and payments.paymentDate > 2019/1/1
-- câu 7
SELECT orders.status,products.productCode,products.productName,sum(orderdetails.quantityOrdered) AS sumQuanlity
FROM orderdetails
INNER JOIN products ON products.productCode = orderdetails.productCode
INNER JOIN orders ON orders.orderNumber = orderdetails.orderNumber
WHERE orders.status = 'Shipped'
GROUP BY orderdetails.quantityOrdered
ORDER BY sumQuanlity DESC
LIMIT 10
-- câu 8 
LIMIT 10
SELECT firstName
FROM employees
WHERE firstName like '%Mary%';
--  câu 9
SELECT  DISTINCT employees.lastName, employees.firstName, sum(payments.amount) AS totalAmount
FROM customers
INNER JOIN payments ON customers.customerNumber = payments.customerNumber
INNER JOIN employees ON customers.salesRepEmployeeNumber = employees.employeeNumber
GROUP BY employees.firstName, employees.lastName
ORDER BY sumAmount DESC
LIMIT 3;

ALTER TABLE `books` ADD FOREIGN KEY (`bookID`) REFERENCES `category`(`catogory_id`)


SELECT products.productName, sum(orderdetails.quantityOrdered*orderdetails.priceEach) as money
FROM orderdetails inner JOIN  orders ON orderdetails.orderNumber = orders.orderNumber
JOIN products ON orderdetails.productCode = products.productCode
GROUP BY products.productCode


SELECT offices.city COUNT (employees.employeeNumber) AS tatol
FROM employees
INNER JOIN offices
ON employees.officeCode = offices.officeCode
GROUP BY offices.city
HAVING tatol > 4
ORDER BY tatol DESC



SELECT DISTINCT sum(orderdetails.quantityOrdered)
FROM orderdetails
INNER JOIN products
ON products.productCode = orderdetails.productCode
WHERE products.productLine = 'Motorcycles'


SELECT o.orderNumber, o.orderDate, o.requiredDate, cus.customerNumber, cus.customerName, p.productCode, p.productName, o.shippedDate
FROM (((orders AS o
INNER JOIN orderdetails AS dt
ON o.orderNumber = dt.orderNumber)
INNER JOIN products AS p
ON dt.productCode = p.productCode)
INNER JOIN customers AS cus
ON o.customerNumber = cus.customerNumber)
WHERE shippedDate IS NULL
;

INSERT INTO category(id,name,describes) VALUES 
(1,'tinhcam','hot trend'),
(2,'phieuluu','thú vị'),
(3,'giaoduc','dành cho bé'),
(4,'animel','yêu nhật bản'),
(5,'animel','hottrend nhật')


INSERT INTO books (id,name,describes,status,categoryID)VALUES
(1,'mắt biếc','hot trend', 'true','tinhcam'),
(2,'nhà giả kim','thú vị','true','phieuluu'),
(3,'doremon','dành cho bé','true','giaoduc'),
(4,'naruto','yêu nhật bản','true','animel'),
(5,'one piece','hot trend','flase','animel')


INSERT INTO students(id,name,phone,email,address,bookID)VALUES
(1,'tiến',0987654321,'tien@123','1 huế',3),
(2,'đông',1987654321,'dong@123','2 huế',1),
(3,'văn',2987654321,'van@123','3 huế',2),
(4,'Tân',3987654321,'tan@123','4 huế',4),
(5,'Nguyên',4987654321,'nguyen@123','5 huế',5)


INSERT INTO borroworder(bookid,studentid,student_name,borrowdate,paydate)VALUES
(3,1,'tiến','2019/12/1','2019/12/5'),
(1,2,'đông','2019/12/2','2019/12/6'),
(2,3,'văn','2019/12/3','2019/12/7'),
(4,4,'tân','2019/12/4','2019/12/8'),
(5,5,'nguyên','2019/12/5','2019/12/9')