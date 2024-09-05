-- Cria o banco de dados
CREATE DATABASE smartwidget_db;

-- Usa o banco de dados
USE smartwidget_db;

-- Cria a tabela para armazenar os e-mails dos leads
CREATE TABLE leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM leads;
