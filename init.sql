CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);

INSERT INTO produtos (nome, categoria, preco) VALUES
('Caderno Universitário', 'Papelaria', 19.90),
('Caneta Azul', 'Papelaria', 2.50),
('Lápis Preto', 'Papelaria', 1.20),
('Borracha Branca', 'Papelaria', 0.99),
('Mochila Escolar', 'Acessórios', 89.90),
('Mouse Óptico', 'Informática', 49.90),
('Teclado Mecânico', 'Informática', 199.90),
('Monitor 24"', 'Informática', 799.00),
('Cabo HDMI', 'Informática', 15.00),
('Fone de Ouvido', 'Eletrônicos', 59.90),
('Carregador USB', 'Eletrônicos', 29.90),
('Smartphone X', 'Eletrônicos', 1299.00),
('Capa para Celular', 'Acessórios', 25.00),
('Livro de PHP', 'Livros', 59.90),
('Livro de MySQL', 'Livros', 69.90),
('Agenda 2025', 'Papelaria', 14.90),
('Pen Drive 32GB', 'Informática', 39.90),
('HD Externo 1TB', 'Informática', 349.90),
('Cadeira Gamer', 'Móveis', 899.00),
('Mesa para Computador', 'Móveis', 499.00);
