DROP TABLE IF EXISTS testtable;
CREATE TABLE testtable (
	id SERIAL PRIMARY KEY, 
	category TEXT NOT NULL, 
	value BOOL NOT NULL
);
INSERT INTO testtable VALUES (1, 'Start', 1);
INSERT INTO testtable VALUES (2, 'End', 0);