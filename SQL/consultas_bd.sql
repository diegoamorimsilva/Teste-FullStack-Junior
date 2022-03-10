SELECT matricula
FROM tb_historico_academico
WHERE nota < 90
  AND codigo_turma = 'BD12015-1';


SELECT matricula
FROM tb_historico_academico
WHERE codigo_turma = 'POO2015-1';


SELECT avg(nota)
FROM tb_historico_academico
WHERE codigo_turma = 'POO2015-1';


SELECT codigo_professor
FROM tb_turma
WHERE codigo_turma='WEB2015-1';


SELECT matricula,
       tb_turma.codigo_turma,
       codigo_disciplina,
       codigo_professor,
       frequencia,
       nota
FROM tb_historico_academico
INNER JOIN tb_turma ON tb_historico_academico.codigo_turma=tb_turma.codigo_turma
WHERE tb_historico_academico.matricula='2015010106';