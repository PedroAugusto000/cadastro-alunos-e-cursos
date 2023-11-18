CREATE USER 'aplicacao_curso'@'localhost' IDENTIFIED  BY 'curso123';

grant select, insert, update, delete on curso.* to 'aplicacao_curso'@'localhost' ;
