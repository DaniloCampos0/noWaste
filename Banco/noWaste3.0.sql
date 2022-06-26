create database no_waste;
drop database no_waste;
use no_waste;

create table estabelecimento(
id int primary key auto_increment not null,
nome_est varchar(200) not null,
nome_usuario varchar(30) not null,
senha char(8) not null
);

CREATE TABLE entidade (
    id_ent INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_ent VARCHAR(150) NOT NULL,
    cnpj VARCHAR(14) NOT NULL,
    telefone long NOT NULL, -- Pode trocar por varchar(limite) 
    id_tipo_contato int not null,
    whatsapp long NOT NULL,
    rede_social VARCHAR(30),
    email VARCHAR(100) NOT NULL,    
    numero int not null,
	bairro varchar(150) not null,
	rua varchar(150) not null,
	complemento varchar(200),
	estado varchar(2) not null,
	cidade varchar(100),
	cep int,
    nome_usuario VARCHAR(80) NOT NULL,
    senha CHAR(8) NOT NULL,
    foto_perfil VARCHAR(200) NULL,
    CONSTRAINT fk_tipo_contato FOREIGN KEY (id_tipo_contato)
        REFERENCES tipo_contato (id)
);

CREATE TABLE tipo_contato (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(50) NOT NULL
);

-- CREATE TABLE tipo_contato (
    -- residencial VARCHAR(10) NULL,
    -- comercial VARCHAR(9) NULL,
    -- celular VARCHAR(6)
-- );

CREATE TABLE doacao (
    id_doacao INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    qtde_marmita INT NOT NULL,
    datahora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    validade VARCHAR(30) NOT NULL,
    desc_conteudo VARCHAR(8000) NULL,
    id_ent_doacao INT NOT NULL,
    CONSTRAINT fk_id_ent_doacao FOREIGN KEY (id_ent_doacao)
        REFERENCES entidade (id_ent)
);

create table notificacoes(
 id int primary key auto_increment not null,
 id_doacao int not null,
 confirmado boolean not null default false,
 finalizado boolean not null default false,
 constraint fk_notificacao_doacao foreign key(id_doacao) references doacao(id_doacao)
);

INSERT INTO `no_waste`.`notificacoes`
(` id_doacao`)
VALUES
(1);

-- DOACOES E ENTIDADES
SELECT 
    e.nome_ent, d.desc_conteudo, d.qtde_marmita, d.datahora, c.nome_contato, c.email
FROM
    doacao d
INNER JOIN
    entidade e ON e.id_ent = d.id_ent_doacao
  inner join contato c on c.id = e.id_contato;

-- DOACOES COM NOTIFICACOES EM ABERTO
SELECT 
    d.ent_beneficiada, d.desc_conteudo, d.datahora
FROM
    notificacoes n
        INNER JOIN
    doacao d ON d.id_doacao = n.id_doacao
        INNER JOIN
    entidade e ON e.id_ent = d.id_ent_doacao
WHERE
    d.id_ent_doacao = 1
        AND n.confirmado = FALSE
        AND finalizado = FALSE;

update entidade set id_contato = 1 where id_ent = 1;



insert into tipo_contato (tipo) values 
('CELULAR'),
('COMERCIAL'),
('RESIDENCIAL');

INSERT INTO `no_waste`.`contato`
(
`id_tipocontato`,
`nome_contato`,
`email`,
`telefone`,
`whatsapp`,
`rede_social`)
VALUES
();

INSERT INTO `no_waste`.`doacao`
(
`ent_beneficiada`,
`qtde_marmita`,
`validade`,
`desc_conteudo`,
`id_ent_doacao`)
VALUES
('Teste', 5, '24 h', 'Pizza', 1);






