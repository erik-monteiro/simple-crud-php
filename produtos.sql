create schema if not exists entrevista_emprego;

use entrevista_emprego;

CREATE TABLE IF NOT EXISTS produtos (
    id int(11) NOT NULL AUTO_INCREMENT,
    descricao text NOT NULL,
    quantidade int(11) NOT NULL,
    valor float NOT NULL,
    PRIMARY KEY (id)
);

-- colar no SGBD por gentileza