USE test_db;
DROP USER IF EXISTS testtable_user;
DROP USER IF EXISTS testtable_admin;
CREATE USER testtable_admin IDENTIFIED BY 'testtable_admin';
GRANT ALL ON test_db.* TO 'testtable_admin'@'%';
CREATE USER testtable_user IDENTIFIED BY 'testtable_user';
GRANT SELECT ON test_db.* TO 'testtable_user'@'%';