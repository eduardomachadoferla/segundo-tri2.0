eduferla@gmail.com
123123
CREATE DATABASE IF NOT EXISTS vendasminhas;

-- Tabela Usuário
CREATE TABLE Usuario (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Senha VARCHAR(255) NOT NULL, -- Recomenda-se armazenar a senha como hash
    Endereco TEXT
);

-- Tabela Produto
CREATE TABLE Produto (
    ProductID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Descricao TEXT,
    Preco DECIMAL(10, 2) NOT NULL,
    Estoque INT NOT NULL DEFAULT 0
);

-- Tabela Pedido
CREATE TABLE Pedido (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    DataPedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Status ENUM('pendente', 'processando', 'entregue', 'cancelado') DEFAULT 'pendente',
    FOREIGN KEY (UserID) REFERENCES Usuario(UserID)
);

-- Tabela Detalhes do Pedido
CREATE TABLE DetalhesPedido (
    OrderID INT,
    ProductID INT,
    Quantidade INT NOT NULL,
    PrecoUnitario DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (OrderID, ProductID),
    FOREIGN KEY (OrderID) REFERENCES Pedido(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Produto(ProductID)
);

-- Tabela Carrinho de Compras
CREATE TABLE CarrinhoCompras (
    CartID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Status ENUM('aberto', 'fechado') DEFAULT 'aberto',
    DataCriacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Usuario(UserID)
);

-- Tabela Métodos de Pagamento
CREATE TABLE MetodosPagamento (
    PaymentMethodID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Tipo VARCHAR(50) NOT NULL,
    Detalhes TEXT,
    FOREIGN KEY (UserID) REFERENCES Usuario(UserID)
);

-- Tabela Avaliações de Produto
CREATE TABLE AvaliacoesProduto (
    ReviewID INT AUTO_INCREMENT PRIMARY KEY,
    ProductID INT,
    UserID INT,
    Avaliacao INT,
    Comentario TEXT,
    DataAvaliacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ProductID) REFERENCES Produto(ProductID),
    FOREIGN KEY (UserID) REFERENCES Usuario(UserID)
);

-- Tabela Histórico de Preços
CREATE TABLE HistoricoPrecos (
    PriceHistoryID INT AUTO_INCREMENT PRIMARY KEY,
    ProductID INT,
    DataMudanca TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PrecoAntigo DECIMAL(10, 2),
    NovoPreco DECIMAL(10, 2),
    FOREIGN KEY (ProductID) REFERENCES Produto(ProductID)
);
