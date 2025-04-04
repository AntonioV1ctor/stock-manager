USE centralstore;

INSERT INTO Categoria (nome) VALUES
    ('Eletrônicos'),
    ('Eletrodomésticos'),
    ('Roupas e Acessórios'),
    ('Beleza e Cuidados Pessoais'),
    ('Saúde e Bem-estar'),
    ('Alimentos e Bebidas'),
    ('Casa e Decoração'),
    ('Esportes e Lazer'),
    ('Automotivo'),
    ('Brinquedos e Jogos'),
    ('Papelaria e Escritório'),
    ('Livros e Mídia'),
    ('Música e Instrumentos Musicais'),
    ('Pet Shop'),
    ('Ferramentas e Construção'),
    ('Relógios e Óculos'),
    ('Energia Solar e Sustentabilidade'),
    ('Segurança e Monitoramento'),
    ('Viagem e Turismo'),
    ('Serviços Digitais');

INSERT INTO Produto (nome, categoria_id, descricao, preco) VALUES
    ('iPhone 15', (SELECT id_categoria FROM Categoria WHERE nome='Eletrônicos'), 'Smartphone com tela OLED de 6,1 polegadas e chip A17.', 5999.00),
    ('Geladeira Samsung 520L', (SELECT id_categoria FROM Categoria WHERE nome='Eletrodomésticos'), 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.', 3499.00),
    ('Tênis Nike Air Max', (SELECT id_categoria FROM Categoria WHERE nome='Roupas e Acessórios'), 'Tênis de corrida com amortecimento Air Max e design moderno.', 499.90),
    ('Base Líquida Loreal', (SELECT id_categoria FROM Categoria WHERE nome='Beleza e Cuidados Pessoais'), 'Base líquida de alta cobertura com efeito matte e longa duração.', 89.90),
    ('Multivitamínico One a Day', (SELECT id_categoria FROM Categoria WHERE nome='Saúde e Bem-estar'), 'Suplemento diário para melhorar a saúde geral e aumentar a imunidade.', 69.90),
    ('Cerveja Artesanal IPA', (SELECT id_categoria FROM Categoria WHERE nome='Alimentos e Bebidas'), 'Cerveja artesanal com sabor intenso e amargor característico.', 19.90),
    ('Sofá Retrátil 3 Lugares', (SELECT id_categoria FROM Categoria WHERE nome='Casa e Decoração'), 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.', 1599.00),
    ('Bicicleta MTB Aro 29', (SELECT id_categoria FROM Categoria WHERE nome='Esportes e Lazer'), 'Bicicleta de mountain bike com suspensão dianteira e aro 29.', 1899.00),
    ('Kit de Faróis LED para Carro', (SELECT id_categoria FROM Categoria WHERE nome='Automotivo'), 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', 299.00),
    ('Jogo de Tabuleiro Catan', (SELECT id_categoria FROM Categoria WHERE nome='Brinquedos e Jogos'), 'Jogo de estratégia onde os jogadores constroem e negociam recursos.', 249.90);

INSERT INTO Usuario (nome, email, telefone, data_nascimento, cpf) VALUES
    ('João Silva', 'joao.silva@email.com', '11999990001', '1990-01-15', '123.456.789-01'),
    ('Maria Oliveira', 'maria.oliveira@email.com', '11999990002', '1985-02-20', '123.456.789-02'),
    ('Carlos Souza', 'carlos.souza@email.com', '11999990003', '1992-03-25', '123.456.789-03'),
    ('Ana Lima', 'ana.lima@email.com', '11999990004', '1995-04-10', '123.456.789-04'),
    ('Pedro Santos', 'pedro.santos@email.com', '11999990005', '1988-05-30', '123.456.789-05'),
    ('Juliana Costa', 'juliana.costa@email.com', '11999990006', '1991-06-12', '123.456.789-06'),
    ('Lucas Almeida', 'lucas.almeida@email.com', '11999990007', '1994-07-05', '123.456.789-07'),
    ('Fernanda Rocha', 'fernanda.rocha@email.com', '11999990008', '1990-08-21', '123.456.789-08'),
    ('Ricardo Mendes', 'ricardo.mendes@email.com', '11999990009', '1987-09-09', '123.456.789-09'),
    ('Camila Nogueira', 'camila.nogueira@email.com', '11999990010', '1993-10-14', '123.456.789-10');
