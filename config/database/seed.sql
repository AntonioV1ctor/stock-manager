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
