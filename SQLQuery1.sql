/*CREATE DATABASE test_1okt2022;

CREATE TABLE Customer (
	Code_Cust char(5) PRIMARY KEY NOT NULL,
	Cust_Name varchar(50) NOT NULL,
	"Address" varchar(50) NOT NULL,
	Join_Date date NOT NULL,
	Order_Type VARCHAR(10) NOT NULL CHECK (Order_Type IN('Import', 'Export'))
);

CREATE TABLE Forwarder (
	Code_fwd CHAR(5) PRIMARY KEY NOT NULL,
	Fwd_Name VARCHAR(50) NOT NULL,
	"Address" VARCHAR(50) NOT NULL,
	Code_Cust CHAR(5) foreign key (Code_Cust) references Customer (Code_Cust)
);

CREATE TABLE "Order" (
	Order_id INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
	Code_Cust CHAR(5) FOREIGN KEY (Code_Cust) REFERENCES Customer (Code_Cust),
	Container_no VARCHAR(50) NOT NULL,
	"Type" VARCHAR(10) NOT NULL CHECK ("Type" IN('Dry', 'Refeer')),
	Amount DECIMAL(10,0) NOT NULL
);


INSERT INTO Customer (Code_Cust, Cust_Name, "Address", Join_Date, Order_Type)
VALUES 
('C0001', 'PT A', 'Jakarta', '2019-10-10', 'Import'),
('C0002', 'PT B', 'Surabaya', '2019-11-15', 'Import'),
('B0003', 'PT C', 'Cikarang', '2020-01-01', 'Export'),
('B0004', 'PT D', 'Bekasi', '2020-01-15', 'Export');

INSERT INTO Forwarder (Code_fwd, Fwd_Name, "Address", Code_Cust)
VALUES 
('F0001', 'PT AA', 'Jakarta', 'C0001'),
('F0002', 'PT BB', 'Bekasi', 'C0001'),
('F0003', 'PT CC', 'Bekasi', 'B0003'),
('F0004', 'PT DD', 'Jakarta', 'B0004');

INSERT INTO "Order" (Code_Cust, Container_no, "Type", Amount)
VALUES 
('C0002', 'TCNU7660378', 'Dry', '700000'),
('C0001', 'BMOU4353883', 'Dry',  '700000'),
('B0004', 'MSKU9917038', 'Dry',  '700000'),
('B0003', 'MRKU2306056', 'Refeer',  '800000');


SELECT a.Code_Cust, a.Cust_Name, b.Fwd_Name, a.Order_Type, FORMAT (a.Join_Date, 'dd/MM/yyyy ') AS Join_Date
FROM Forwarder b
LEFT JOIN Customer a on a.Code_Cust = b.Code_Cust
WHERE a.Join_Date >= '2019-10-01' AND a.Join_Date <= '2020-01-02';

SELECT 
"Type" = ISNULL("Type", 'Total'),
Total_Type = COUNT("Type"),
Grand_Total = FORMAT(SUM(Amount),'N0','id_ID')
FROM "Order" GROUP BY ROLLUP("Type");


CREATE TABLE Gate_In (
	id INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
	Container_no VARCHAR(50) NOT NULL,
	Size INT NOT NULL,
	"Type" VARCHAR(10) NOT NULL CHECK ("Type" IN('Dry', 'Refeer')),
	Gate_In DATETIME NOT NULL
);
*/

INSERT INTO Gate_In (Container_no, Size, "Type", Gate_In)
VALUES 
('MEAU1234567', '40', 'Refeer',  '2021-10-02 17:00');


