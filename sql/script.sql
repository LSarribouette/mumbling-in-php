CREATE TABLE trajets (
                         id INTEGER PRIMARY KEY,
                         date DATE,
                         driver NVARCHAR(100) UNIQUE
);

INSERT INTO trajets (date, driver)
    VALUES ('2023-01-30','Paul'),
           ('2023-01-31','Brigitte'),
           ('2023-02-01','Joao'),
           ('2023-02-02','Karen'),
           ('2023-02-03','Hélène');