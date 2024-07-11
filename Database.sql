-- Table for patients
CREATE TABLE patient (
    userId INT PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    userPass VARCHAR(255)
);

-- Table for doctors
CREATE TABLE doctor (
    userId INT PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    userPass VARCHAR(255)
);
