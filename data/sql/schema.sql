CREATE TABLE book (id BIGINT AUTO_INCREMENT, name VARCHAR(250) NOT NULL, code VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE people (id BIGINT AUTO_INCREMENT, name VARCHAR(250) NOT NULL, email VARCHAR(250) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE people_book (id BIGINT AUTO_INCREMENT, people_id BIGINT NOT NULL, book_id BIGINT NOT NULL, INDEX people_id_idx (people_id), INDEX book_id_idx (book_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
ALTER TABLE people_book ADD CONSTRAINT people_book_people_id_people_id FOREIGN KEY (people_id) REFERENCES people(id);
ALTER TABLE people_book ADD CONSTRAINT people_book_book_id_book_id FOREIGN KEY (book_id) REFERENCES book(id);