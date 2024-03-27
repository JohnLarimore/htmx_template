A template designed for creating database driven websites. 

Begin in the database folder by using create_db.sql to set up an initial MariaDB database and create_users.sql to set up two initial users, an admin and an user. A test database table can be created using fresh_db.sql. From there, skeleton scripts for both Python and R are provided to populate the database. 

Queries to the database are handled through the CMS. The bootstrap is in the src/ folder. In src/classes is the CMS itself, the database handler (Database.php), and an example called Todos.php. 

In the public/ folder, there is the traditional index.php. A header and footer are located in the includes/ folder, while css/ has a skeleton styles worksheet and scripts/ has the HTMX JavaScript code. 
