CREATE DATABASE IF NOT EXISTS terminal;

USE links;

CREATE TABLE links (
   	keyword VARCHAR(25) PRIMARY KEY,
	link VARCHAR(100) NOT NULL
);

INSERT INTO links (keyword, link) VALUES
("tmf", "http://tmfmusic.com"),
("github", "https://github.com/TimFlaherty"),
("logbook", "http://timflaherty.tk/logbook/views/logbook.php"),
("reddit", "https://reddit.com");