A template designed for creating database driven websites. 

Begin in the database folder by using fresh_db.sql to set up an initial MariaDB database and create_users.sql to set up two initial users, an admin and an user. From there, skeleton scripts for both Python and R are provided to populate the database. 

Queries to the database are handled through the CMS. The bootstrap is in the src/ folder. In src/classes is the CMS itself, the database handler (Database.php), and an example called Todos.php. 
