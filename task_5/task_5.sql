
	
	CREATE TABLE Department (
    ID SERIAL PRIMARY KEY,
    NAME VARCHAR(50) NOT NULL
	);
	
	CREATE TABLE Users (
    ID SERIAL PRIMARY KEY,
    SURNAME VARCHAR(50) NOT NULL,
    DEPARTMENT_ID INT NOT NULL,
    SALARY DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (DEPARTMENT_ID) REFERENCES Department(ID)
	);
	
	INSERT INTO Department (NAME)
	VALUES
    ('Backend'),
    ('DevOps'),
    ('Android'),
    ('iOS');
	
	INSERT INTO Users (SURNAME, DEPARTMENT_ID, SALARY)
	VALUES
    ('Алексеев', 3, 50000.00),
    ('Петрухин', 3, 60000.00),
    ('Есенин', 2, 70000.00),
    ('Маяковский', 1, 80000.00),
    ('Нортон', 4, 90000.00),
    ('Антропов', 1, 100000.00),
    ('Андреев', 4, 110000.00),
    ('Силантьев', 1, 120000.00);
	
	

	SELECT ID, NAME
	FROM Department;
	
	SELECT ID, SURNAME, DEPARTMENT_ID, SALARY
	FROM Users;


