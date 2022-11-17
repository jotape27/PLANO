CREATE TABLE gasto (
    id serial4 NOT NULL,
    valor float8 NULL,
    gasto varchar(500) NULL,
    "data" date NULL,
    CONSTRAINT gasto_pkey PRIMARY KEY (id)
);
CREATE TABLE logradouro (
    id serial4 NOT NULL,
    tp_logradouro varchar(100) NULL,
    CONSTRAINT logradouro_pkey PRIMARY KEY (id)
);
CREATE TABLE perfil (
    id serial4 NOT NULL,
    perfil varchar(100) NULL,
    CONSTRAINT perfil_pkey PRIMARY KEY (id)
);
CREATE TABLE profissao (
    id serial4 NOT NULL,
    descricao varchar(150) NULL,
    CONSTRAINT profissao_pkey PRIMARY KEY (id)
);
CREATE TABLE recomendacao (
    id serial4 NOT NULL,
    descricao varchar(500) NULL,
    CONSTRAINT recomendacao_pkey PRIMARY KEY (id)
);
CREATE TABLE tipo_gasto (
    id serial4 NOT NULL,
    desc_tpgasto varchar(150) NULL,
    CONSTRAINT tipo_gasto_pkey PRIMARY KEY (id)
);
CREATE TABLE tipo_planejamento (
    id serial4 NOT NULL,
    tp_planejamento varchar(100) NULL,
    CONSTRAINT tipo_planejamento_pkey PRIMARY KEY (id)
);
CREATE TABLE endereco (
    id serial4 NOT NULL,
    cep varchar(50) NULL,
    desc_logradouro varchar(300) NULL,
    num int4 NULL,
    cidade varchar(200) NULL,
    uf varchar(5) NULL,
    fk_logradouro_id int4 NULL,
    CONSTRAINT endereco_pkey PRIMARY KEY (id),
    CONSTRAINT fk_endereco_2 FOREIGN KEY (fk_logradouro_id) REFERENCES logradouro(id) ON
DELETE CASCADE
);
CREATE TABLE perfil_recomendacao (
    fk_perfil_id int4 NULL,
    fk_recomendacao_id int4 NULL,
    CONSTRAINT fk_perfil_recomendacao_1 FOREIGN KEY (fk_perfil_id) REFERENCES perfil(id) ON DELETE
    SET NULL,
        CONSTRAINT fk_perfil_recomendacao_2 FOREIGN KEY (fk_recomendacao_id) REFERENCES recomendacao(id) ON DELETE
    SET NULL
);
CREATE TABLE planejamento (
    id serial4 NOT NULL,
    "data" date NULL,
    porcentagem_fixo int4 NULL,
    porcentagem_variavel int4 NULL,
    porcentagem_lazer int4 NULL,
    porcentagem_investimento int4 NULL,
    CONSTRAINT planejamento_pkey PRIMARY KEY (id)
);
CREATE TABLE usuario (
    id serial4 NOT NULL,
    nome varchar(200) NULL,
    sobrenome varchar(200) NULL,
    cpf varchar(50) NULL,
    genero varchar(10) NULL,
    nascimento date NULL,
    senha varchar(500) NULL,
    fk_perfil_id int4 NULL,
    foto text NULL,
    CONSTRAINT usuario_cpf_key UNIQUE (cpf),
    CONSTRAINT usuario_pkey PRIMARY KEY (id),
    CONSTRAINT fk_usuario_2 FOREIGN KEY (fk_perfil_id) REFERENCES perfil(id) ON DELETE
    SET NULL
);
CREATE TABLE usuario_endereco (
    fk_usuario_id int4 NULL,
    fk_endereco_id int4 NULL,
    CONSTRAINT fk_usuario_endereco_1 FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id) ON DELETE
    SET NULL,
        CONSTRAINT fk_usuario_endereco_2 FOREIGN KEY (fk_endereco_id) REFERENCES endereco(id) ON DELETE
    SET NULL
);
CREATE TABLE usuario_profissao (
    fk_usuario_id int4 NULL,
    fk_profissao_id int4 NULL,
    renda float8 NULL,
    id serial4 NOT NULL,
    CONSTRAINT usuario_profissao_pkey PRIMARY KEY (id),
    CONSTRAINT fk_usuario_profissao_2 FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id) ON DELETE
    SET NULL,
        CONSTRAINT fk_usuario_profissao_3 FOREIGN KEY (fk_profissao_id) REFERENCES profissao(id) ON DELETE
    SET NULL
);
CREATE TABLE usuario_tpcontato (
    fk_usuario_id int4 NULL,
    email varchar(100) NULL,
    celular varchar(100) NULL,
    CONSTRAINT fk_usuario_tpcontato_1 FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id) ON DELETE
    SET NULL
);
CREATE TABLE usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento (
    fk_tipo_gasto_id int4 NULL,
    fk_usuario_id int4 NULL,
    fk_gasto_id int4 NULL,
    fk_planejamento_id int4 NULL,
    CONSTRAINT fk_usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento_1 FOREIGN KEY (fk_tipo_gasto_id) REFERENCES tipo_gasto(id),
    CONSTRAINT fk_usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento_2 FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id),
    CONSTRAINT fk_usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento_3 FOREIGN KEY (fk_gasto_id) REFERENCES gasto(id),
    CONSTRAINT fk_usuario_tpgasto_tipo_gasto_usuario_gasto_planejamento_4 FOREIGN KEY (fk_planejamento_id) REFERENCES planejamento(id)
);
INSERT INTO TIPO_PLANEJAMENTO
VALUES (889, 'fixo'),
    (546, 'variável'),
    (341, 'lazer'),
    (264, 'investimento');
INSERT INTO LOGRADOURO
VALUES (111, 'Avenida'),
    (222, 'Beco'),
    (333, 'Chácara'),
    (444, 'Condomínio'),
    (555, 'Distrito'),
    (666, 'Escadaria'),
    (777, 'Estação'),
    (888, 'Estrada'),
    (999, 'Favela'),
    (122, 'Fazenda'),
    (133, 'Ladeira'),
    (144, 'Morro'),
    (155, 'Parque'),
    (166, 'Residencial'),
    (177, 'Rodovia'),
    (188, 'Rua'),
    (199, 'Trevo'),
    (200, 'Vale'),
    (211, 'Via'),
    (233, 'Viaduto'),
    (244, 'Viela'),
    (255, 'Vila');
INSERT INTO TIPO_GASTO
VALUES (111, 'fixo'),
    (222, 'variável'),
    (333, 'investimento'),
    (444, 'lazer');
INSERT INTO PROFISSAO
VALUES (1110, 'Administrador(a)'),
    (1111, 'Advogado(a)'),
    (1112, 'Agente Ambiental'),
    (1113, 'Agricultor(a)'),
    (1114, 'Agrônomo(a)'),
    (1115, 'Agropecuarista'),
    (1116, 'Ajudante'),
    (1117, 'Almoxarife'),
    (1118, 'Analista'),
    (1119, 'Apicultor(a)'),
    (1120, 'Aposentado(a)'),
    (1121, 'Arquiteto(a)'),
    (1122, 'Artesão(ã)'),
    (1123, 'Assistente'),
    (1124, 'Atendente'),
    (1125, 'Ator/Atriz'),
    (1126, 'Auditor(a)'),
    (1127, 'Autônomo(a)'),
    (1128, 'Auxiliar'),
    (1129, 'Avicultor(a)'),
    (1130, 'Bailarina(o)'),
    (1131, 'Bancário(a)'),
    (1132, 'Biólogo(a)'),
    (1133, 'Biomédico(a)'),
    (1134, 'Cabeleireiro(a)'),
    (1135, 'Caminhoneiro(a)'),
    (1136, 'Carregador'),
    (1137, 'Catador(a)'),
    (1138, 'Catraqueiro'),
    (1139, 'Cirurgião(ã)'),
    (1140, 'Citricultor(a)'),
    (1141, 'Comerciante'),
    (1142, 'Construtor'),
    (1143, 'Consultor(a)'),
    (1144, 'Contador(a)'),
    (1145, 'Coordenador(a)'),
    (1146, 'Coreógrafo'),
    (1147, 'Corretor(a)'),
    (1148, 'Costureiro(a)'),
    (1149, 'Cozinheiro(a)'),
    (1150, 'Cronoanalista'),
    (1151, 'Cuidador(a)'),
    (1152, 'Dançarina'),
    (1153, 'Delegado'),
    (1154, 'Dentista'),
    (1155, 'Desenvolvedor'),
    (1156, 'Despachante'),
    (1157, 'Desempregado'),
    (1158, 'Diretor(a)'),
    (1159, 'Economista'),
    (1160, 'Eletricista'),
    (1161, 'Embalador(a)'),
    (1162, 'Empregada Doméstica'),
    (1163, 'Empresário(a)'),
    (1164, 'Encarregado(a)'),
    (1165, 'Enfermeiro(a)'),
    (1166, 'Engenheiro(a)'),
    (1167, 'Especialista em Banco de Dados'),
    (1168, 'Estudante'),
    (1169, 'Farmacêutica(o)'),
    (1170, 'Faturista'),
    (1171, 'Faxineira(o)'),
    (1172, 'Ferramenteiro'),
    (1173, 'Ferroviário'),
    (1174, 'Fisioterapeuta'),
    (1175, 'Floricultor(a)'),
    (1176, 'Fotógrafo(a)'),
    (1177, 'Funcionário(a) Público(a)'),
    (1178, 'Funileiro'),
    (1179, 'Geógrafo(a)'),
    (1180, 'Geólogo(a)'),
    (1181, 'Gerente'),
    (1182, 'Gestor(a)'),
    (1183, 'Impressor'),
    (1184, 'Industriário(a)'),
    (1185, 'Inspetor de Qualidade'),
    (1186, 'Instrumentista'),
    (1187, 'Intérprete'),
    (1188, 'Jardineiro'),
    (1189, 'Jornalista'),
    (1190, 'Lavrador(a)'),
    (1191, 'Marceneiro'),
    (1192, 'Matemático(a)'),
    (1193, 'Mecânico'),
    (1194, 'Medico(a)'),
    (1195, 'Metalúrgico'),
    (1196, 'Militar'),
    (1197, 'Motorista'),
    (1198, 'Nutricionista'),
    (1199, 'Odontólogo(a)'),
    (1210, 'Oleiro(a)'),
    (1211, 'Operador(a)'),
    (1212, 'Orientador(a)'),
    (1213, 'Outros...'),
    (1214, 'Pecuarista'),
    (1215, 'Pedagogo(a)'),
    (1216, 'Pedreiro'),
    (1217, 'Policial'),
    (1218, 'Policial Rodoviário'),
    (1219, 'Porteiro(a)'),
    (1220, 'Produtor(a)'),
    (1221, 'Professor(a)'),
    (1222, 'Programador(a)'),
    (1223, 'Psicólogo(a)'),
    (1224, 'Publicitário(a)'),
    (1225, 'Químico(a)'),
    (1226, 'Reciclador(a)'),
    (1227, 'Secretária(o)'),
    (1228, 'Segurança'),
    (1229, 'Serralherio'),
    (1230, 'Servidor(a) Público(a)'),
    (1231, 'Sociólogo'),
    (1232, 'Supervisor(a)'),
    (1233, 'Tabelião'),
    (1234, 'Taxista'),
    (1235, 'Tecelão'),
    (1236, 'Técnico(a) em ...'),
    (1237, 'Tecnólogo(a)'),
    (1238, 'Telefonista'),
    (1239, 'Tintureiro'),
    (1240, 'Torneiro Mecânico'),
    (1241, 'Tradutor(a)'),
    (1242, 'Urdidor'),
    (1243, 'Vendedor(a)'),
    (1244, 'Vidreiro(a)'),
    (1245, 'Vigilante'),
    (1246, 'Web Designer'),
    (1247, 'Zootécnico(a)');
INSERT INTO PERFIL
VALUES (11, 'Gastador'),
    (22, 'Moderada'),
    (33, 'Investidor');
INSERT INTO RECOMENDACAO
VALUES (
        142,
        'Vi que você é gastador! Utilize este site para economizar mais.'
    ),
    (
        376,
        'Vi que você é investidor! Utilize este site para estudar o mercado de ações.'
    ),
    (
        590,
        'Vi que você é moderado! Utilize este site para manter este autocontrole.'
    ),
    (
        756,
        'Reparei que você tem gastado mais do que pretendia com o gasto X.'
    ),
    (
        988,
        'Reparei que você tem investido pouco, menos do que pretendia, siga nossas próximas recomendações.'
    );
INSERT INTO perfil_recomendacao
VALUES (11, 142),
    (33, 376),
    (22, 590),
    (11, 756),
    (22, 756),
    (33, 756),
    (33, 988);
INSERT INTO usuario (id, nome, cpf, genero, senha)
VALUES (
        0,
        'admin',
        '000.000.000-00',
        'o',
        '$2y$10$TxNy8McBrbtgovcjG9Ccf.JaQwDbzUP2sgMplxlzHwverQUrf2g4y'
    );
