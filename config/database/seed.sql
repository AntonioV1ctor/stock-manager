USE centralstore;

INSERT INTO Categoria (id_categoria, nome) VALUES
    (1, 'Eletrônicos'),
    (2, 'Eletrodomésticos'),
    (3, 'Roupas e Acessórios'),
    (4, 'Beleza e Cuidados Pessoais'),
    (5, 'Saúde e Bem-estar'),
    (6, 'Alimentos e Bebidas'),
    (7, 'Casa e Decoração'),
    (8, 'Esportes e Lazer'),
    (9, 'Automotivo'),
    (10, 'Brinquedos e Jogos'),
    (11, 'Papelaria e Escritório'),
    (12, 'Livros e Mídia'),
    (13, 'Música e Instrumentos Musicais'),
    (14, 'Pet Shop'),
    (15, 'Ferramentas e Construção'),
    (16, 'Relógios e Óculos'),
    (17, 'Energia Solar e Sustentabilidade'),
    (18, 'Segurança e Monitoramento'),
    (19, 'Viagem e Turismo'),
    (20, 'Serviços Digitais');

INSERT INTO Produto (nome, categoria_id, descricao, preco) VALUES
    ('iPhone 15', 1, 'Smartphone com tela OLED de 6,1 polegadas e chip A17.', 5999.00),
    ('Geladeira Samsung 520L', 2, 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.', 3499.00),
    ('Tênis Nike Air Max', 3, 'Tênis de corrida com amortecimento Air Max e design moderno.', 499.90),
    ('Base Líquida Loreal', 4, 'Base líquida de alta cobertura com efeito matte e longa duração.', 89.90),
    ('Multivitamínico One a Day', 5, 'Suplemento diário para melhorar a saúde geral e aumentar a imunidade.', 69.90),
    ('Cerveja Artesanal IPA', 6, 'Cerveja artesanal com sabor intenso e amargor característico.', 19.90),
    ('Sofá Retrátil 3 Lugares', 7, 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.', 1599.00),
    ('Bicicleta MTB Aro 29', 8, 'Bicicleta de mountain bike com suspensão dianteira e aro 29.', 1899.00),
    ('Kit de Faróis LED para Carro', 9, 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', 299.00),
    ('Jogo de Tabuleiro Catan', 10, 'Jogo de estratégia onde os jogadores constroem e negociam recursos.', 249.90);

INSERT INTO Usuario (nome, email, senha, telefone, data_nascimento, cpf, genero, foto_perfil) VALUES
    ('João Silva', 'joao.silva@email.com', 'hash_da_senha', '11999990001', '1990-01-15', '12345678901', 'Masculino', 'joao.jpg'),
    ('Maria Oliveira', 'maria.oliveira@email.com', 'hash_da_senha', '11999990002', '1985-02-20', '12345678902', 'Feminino', 'maria.jpg'),
    ('Carlos Souza', 'carlos.souza@email.com', 'hash_da_senha', '11999990003', '1992-03-25', '12345678903', 'Masculino', 'carlos.jpg'),
    ('Ana Lima', 'ana.lima@email.com', 'hash_da_senha', '11999990004', '1995-04-10', '12345678904', 'Feminino', 'ana.jpg'),
    ('Pedro Santos', 'pedro.santos@email.com', 'hash_da_senha', '11999990005', '1988-05-30', '12345678905', 'Masculino', 'pedro.jpg'),
    ('Juliana Costa', 'juliana.costa@email.com', 'hash_da_senha', '11999990006', '1991-06-12', '12345678906', 'Feminino', 'juliana.jpg'),
    ('Lucas Almeida', 'lucas.almeida@email.com', 'hash_da_senha', '11999990007', '1994-07-05', '12345678907', 'Masculino', 'lucas.jpg'),
    ('Fernanda Rocha', 'fernanda.rocha@email.com', 'hash_da_senha', '11999990008', '1990-08-21', '12345678908', 'Feminino', 'fernanda.jpg'),
    ('Ricardo Mendes', 'ricardo.mendes@email.com', 'hash_da_senha', '11999990009', '1987-09-09', '12345678909', 'Masculino', 'ricardo.jpg'),
    ('Camila Nogueira', 'camila.nogueira@email.com', 'hash_da_senha', '11999990010', '1993-10-14', '12345678910', 'Feminino', 'camila.jpg');