CREATE TABLE flower (id BIGINT AUTO_INCREMENT, type BIGINT, name VARCHAR(100), description TEXT, user_id BIGINT, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE petal (id BIGINT AUTO_INCREMENT, flower1_id BIGINT, flower2_id BIGINT, connection_id BIGINT, colour VARCHAR(10), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, name VARCHAR(255), email VARCHAR(100), facebook_id VARCHAR(30), facebook_token VARCHAR(100), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE flower ADD CONSTRAINT flower_user_id_user_id FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE SET NULL;
