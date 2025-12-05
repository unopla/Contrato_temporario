CREATE TRIGGER trg_tb_alunos_ins AFTER INSERT ON tb_alunos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_alunos');

CREATE TRIGGER trg_tb_alunos_up AFTER UPDATE ON tb_alunos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_alunos');

CREATE TRIGGER trg_tb_alunos_del AFTER DELETE ON tb_alunos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_alunos');

CREATE TRIGGER trg_dados_medicos_ins AFTER INSERT ON dados_medicos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('dados_medicos');

CREATE TRIGGER trg_dados_medicos_up AFTER UPDATE ON dados_medicos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('dados_medicos');

CREATE TRIGGER trg_dados_medicos_del AFTER DELETE ON dados_medicos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('dados_medicos');

CREATE TRIGGER trg_tb_infoscursos_ins AFTER INSERT ON tb_infoscursos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_infoscursos');

CREATE TRIGGER trg_tb_infoscursos_up AFTER UPDATE ON tb_infoscursos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_infoscursos');

CREATE TRIGGER trg_tb_infoscursos_del AFTER DELETE ON tb_infoscursos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_infoscursos');

CREATE TRIGGER trg_tb_historico_pessoal_ins AFTER INSERT ON tb_historico_pessoal
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_historico_pessoal');

CREATE TRIGGER trg_tb_historico_pessoal_up AFTER UPDATE ON tb_historico_pessoal
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_historico_pessoal');

CREATE TRIGGER trg_tb_historico_pessoal_del AFTER DELETE ON tb_historico_pessoal
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_historico_pessoal');

CREATE TRIGGER trg_tb_matricula_ins AFTER INSERT ON tb_matricula
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_matricula');

CREATE TRIGGER trg_tb_matricula_up AFTER UPDATE ON tb_matricula
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_matricula');

CREATE TRIGGER trg_tb_matricula_del AFTER DELETE ON tb_matricula
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_matricula');

CREATE TRIGGER trg_tb_pais_ins AFTER INSERT ON tb_pais
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_pais');

CREATE TRIGGER trg_tb_pais_up AFTER UPDATE ON tb_pais
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_pais');

CREATE TRIGGER trg_tb_pais_del AFTER DELETE ON tb_pais
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_pais');

CREATE TRIGGER trg_tb_turmas_ins AFTER INSERT ON tb_turmas
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_turmas');

CREATE TRIGGER trg_tb_turmas_up AFTER UPDATE ON tb_turmas
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_turmas');

CREATE TRIGGER trg_tb_turmas_del AFTER DELETE ON tb_turmas
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_turmas');