CREATE TABLE books (id INT AUTO_INCREMENT, author VARCHAR(100), name VARCHAR(100) NOT NULL, status VARCHAR(10), person_mail VARCHAR(100) NOT NULL, code VARCHAR(5), INDEX status_idx (status), INDEX person_mail_idx (person_mail), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE bookstypes (booktype VARCHAR(10), PRIMARY KEY(booktype)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE person (code VARCHAR(5), name VARCHAR(100), people_group VARCHAR(3), adress VARCHAR(200), email VARCHAR(100), PRIMARY KEY(email)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
ALTER TABLE books ADD CONSTRAINT books_status_bookstypes_booktype FOREIGN KEY (status) REFERENCES bookstypes(booktype);
ALTER TABLE books ADD CONSTRAINT books_person_mail_person_email FOREIGN KEY (person_mail) REFERENCES person(email);
