CREATE TABLE IF NOT EXISTS USUARIO (
    id SERIAL PRIMARY KEY,
    sobrenome varchar(200),
    genero varchar(5),
    cpf varchar(20) UNIQUE,
    nascimento date,
    senha varchar(500),
    nome varchar(200),
    email varchar(200),
    FK_PERFIL_id int
);
CREATE TABLE IF NOT EXISTS ENDERECO (
    id SERIAL PRIMARY KEY,
    cep varchar(50),
    desc_logradouro varchar(300),
    num int,
    cidade varchar(200),
    uf varchar(5),
    id_Logradouro int,
    FK_LOGRADOURO_id int
);
CREATE TABLE IF NOT EXISTS LOGRADOURO (
    id SERIAL PRIMARY KEY,
    tp_logradouro varchar(100)
);
CREATE TABLE IF NOT EXISTS TIPO_CONTATO (id SERIAL PRIMARY KEY, tp_contato varchar(100));
CREATE TABLE IF NOT EXISTS TIPO_PLANEJAMENTO (
    id SERIAL PRIMARY KEY,
    tp_planejamento varchar(100)
);
CREATE TABLE IF NOT EXISTS PROFISSAO (id SERIAL PRIMARY KEY, descricao varchar(150));
CREATE TABLE IF NOT EXISTS TIPO_GASTO (
    id SERIAL PRIMARY KEY,
    desc_tpGasto varchar(150)
);
CREATE TABLE IF NOT EXISTS GASTO (id SERIAL PRIMARY KEY, valor float);
CREATE TABLE IF NOT EXISTS PLANEJAMENTO (id SERIAL PRIMARY KEY, porcentagem int);
CREATE TABLE IF NOT EXISTS PERFIL (id SERIAL PRIMARY KEY, perfil varchar(100));
CREATE TABLE IF NOT EXISTS RECOMENDACAO (id SERIAL PRIMARY KEY, descricao varchar(500));
CREATE TABLE IF NOT EXISTS Usuario_Endereco (fk_USUARIO_id int, fk_ENDERECO_id int);
CREATE TABLE IF NOT EXISTS Usuario_TpContato (
    fk_USUARIO_id int,
    fk_TIPO_CONTATO_id int,
    descricao varchar(150)
);
CREATE TABLE IF NOT EXISTS Usuario_Profissao (
    fk_USUARIO_id int,
    fk_PROFISSAO_id int,
    renda float,
    id SERIAL PRIMARY KEY
);
CREATE TABLE IF NOT EXISTS Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO (
    fk_TIPO_GASTO_id int,
    fk_USUARIO_id int,
    fk_GASTO_id int,
    fk_PLANEJAMENTO_id int
);
CREATE TABLE IF NOT EXISTS Perfil_Recomendacao (fk_PERFIL_id int, fk_RECOMENDACAO_id int);
ALTER TABLE USUARIO
ADD CONSTRAINT FK_USUARIO_2 FOREIGN KEY (FK_PERFIL_id) REFERENCES PERFIL (id) ON DELETE
SET NULL;
ALTER TABLE ENDERECO
ADD CONSTRAINT FK_ENDERECO_2 FOREIGN KEY (FK_LOGRADOURO_id) REFERENCES LOGRADOURO (id) ON DELETE CASCADE;
ALTER TABLE Usuario_Endereco
ADD CONSTRAINT FK_Usuario_Endereco_1 FOREIGN KEY (fk_USUARIO_id) REFERENCES USUARIO (id) ON DELETE
SET NULL;
ALTER TABLE Usuario_Endereco
ADD CONSTRAINT FK_Usuario_Endereco_2 FOREIGN KEY (fk_ENDERECO_id) REFERENCES ENDERECO (id) ON DELETE
SET NULL;
ALTER TABLE Usuario_TpContato
ADD CONSTRAINT FK_Usuario_TpContato_1 FOREIGN KEY (fk_USUARIO_id) REFERENCES USUARIO (id) ON DELETE
SET NULL;
ALTER TABLE Usuario_TpContato
ADD CONSTRAINT FK_Usuario_TpContato_2 FOREIGN KEY (fk_TIPO_CONTATO_id) REFERENCES TIPO_CONTATO (id) ON DELETE
SET NULL;
ALTER TABLE Usuario_Profissao
ADD CONSTRAINT FK_Usuario_Profissao_2 FOREIGN KEY (fk_USUARIO_id) REFERENCES USUARIO (id) ON DELETE
SET NULL;
ALTER TABLE Usuario_Profissao
ADD CONSTRAINT FK_Usuario_Profissao_3 FOREIGN KEY (fk_PROFISSAO_id) REFERENCES PROFISSAO (id) ON DELETE
SET NULL;
ALTER TABLE Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO
ADD CONSTRAINT FK_Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO_1 FOREIGN KEY (fk_TIPO_GASTO_id) REFERENCES TIPO_GASTO (id) ON DELETE NO ACTION;
ALTER TABLE Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO
ADD CONSTRAINT FK_Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO_2 FOREIGN KEY (fk_USUARIO_id) REFERENCES USUARIO (id) ON DELETE NO ACTION;
ALTER TABLE Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO
ADD CONSTRAINT FK_Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO_3 FOREIGN KEY (fk_GASTO_id) REFERENCES GASTO (id) ON DELETE NO ACTION;
ALTER TABLE Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO
ADD CONSTRAINT FK_Usuario_TpGasto_TIPO_GASTO_USUARIO_GASTO_PLANEJAMENTO_4 FOREIGN KEY (fk_PLANEJAMENTO_id) REFERENCES PLANEJAMENTO (id) ON DELETE NO ACTION;
ALTER TABLE Perfil_Recomendacao
ADD CONSTRAINT FK_Perfil_Recomendacao_1 FOREIGN KEY (fk_PERFIL_id) REFERENCES PERFIL (id) ON DELETE
SET NULL;
ALTER TABLE Perfil_Recomendacao
ADD CONSTRAINT FK_Perfil_Recomendacao_2 FOREIGN KEY (fk_RECOMENDACAO_id) REFERENCES RECOMENDACAO (id) ON DELETE
SET NULL;
INSERT INTO TIPO_PLANEJAMENTO
VALUES (889, 'fixo'),
    (546, 'variável'),
    (341, 'lazer'),
    (264, 'investimento');
INSERT INTO TIPO_CONTATO
VALUES (45, 'email'),
    (36, 'celular');
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
INSERT INTO perfil
VALUES (11, 'Gastador'),
    (22, 'Moderada'),
    (33, 'Investidor');

    