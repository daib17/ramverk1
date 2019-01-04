--
-- Creating a small Book table.
-- Create a database and a user having access to this database,
-- this must be done by hand, see commented rows on how to do it.
--



--
-- Create a database for test
--
-- CREATE DATABASE IF NOT EXISTS daib17;
USE daib17;



--
-- Create a database user for the test database
--
-- GRANT ALL ON daib17.* TO user@localhost IDENTIFIED BY 'pass';



-- Ensure UTF8 on the database connection
SET NAMES utf8;



--
-- Table Book
--
DROP TABLE IF EXISTS Book;
CREATE TABLE Book (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(80) NOT NULL,
    `author` VARCHAR(80) NOT NULL,
    `image` VARCHAR(256)
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;
