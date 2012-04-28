CREATE TABLE books (id INT AUTO_INCREMENT, author VARCHAR(100) NOT NULL, name VARCHAR(100) NOT NULL, status VARCHAR(10) NOT NULL, person_id INT NOT NULL, code VARCHAR(5), date_of DATE NOT NULL, INDEX status_idx (status), INDEX person_id_idx (person_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE bookstypes (booktype VARCHAR(10), PRIMARY KEY(booktype)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE person (id INT AUTO_INCREMENT, code VARCHAR(5), name VARCHAR(100), people_group VARCHAR(3), adress VARCHAR(200), email VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
ALTER TABLE books ADD CONSTRAINT books_status_bookstypes_booktype FOREIGN KEY (status) REFERENCES bookstypes(booktype);
ALTER TABLE books ADD CONSTRAINT books_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
