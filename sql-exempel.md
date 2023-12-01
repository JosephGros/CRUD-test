## SQL exempel 1

Frågespråket SQL exempel:
```sql
CREATE TABLE kund
(nummer integer,
namn char(50),
adress char(50));

-- Insert customer 1
INSERT INTO kund (nummer, namn, adress)
VALUES (1, 'Kund1', 'Address1');

-- Insert customer 2
INSERT INTO kund (nummer, namn, adress)
VALUES (2, 'Customer2', 'Address2');

-- Insert customer 3
INSERT INTO kund (nummer, namn, adress)
VALUES (3, 'Customer3', 'Address3');

```



## SQL exempel 2

Frågespråket SQL exempel 2:
```sql
SELECT * FROM kund 
WHERE namn LIKE 'S%' ORDER BY adress;

SELECT * FROM kund 
WHERE namn LIKE 'C%' ORDER BY adress;

```


## SQL exempel 3

Frågespråket SQL exempel 3:
```sql
SELECT namn FROM kund 
WHERE adress = 'Vägen 8' AND namn LIKE 'C%';

ALTER TABLE kund 
ADD telefon char(10);
```


## bokbutiken exempel:
```sql
-- Skapa tabellen "bok"
CREATE TABLE bok (
    bokId INT PRIMARY KEY,
    bokTitel VARCHAR(100),
    bokForfattare VARCHAR(100),
    bokPris DECIMAL(10, 2)
);

-- Lägg till 10 svenska böcker
INSERT INTO bok (bokId, bokTitel, bokForfattare, bokPris)
VALUES 
    (1, 'Män som hatar kvinnor', 'Stieg Larsson', 149.99),
    (2, 'Hundraåringen som klev ut genom fönstret och försvann', 'Jonas Jonasson', 129.95),
    (3, 'Pippi Långstrump', 'Astrid Lindgren', 79.90),
    (4, 'Ondskan', 'Jan Guillou', 109.50),
    (5, 'En man som heter Ove', 'Fredrik Backman', 139.00),
    (6, 'Brodeck', 'Philippe Claudel', 159.99),
    (7, 'Populärmusik från Vittula', 'Mikael Niemi', 89.75),
    (8, 'Berts dagbok', 'Anders Jacobsson och Sören Olsson', 59.80),
    (9, 'Det förlorade barnet', 'Elena Ferrante', 179.50),
    (10, 'Den svavelgula himlen', 'Kjell Westö', 129.00);

```