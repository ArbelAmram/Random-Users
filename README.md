# random_users

This is a Random Users Full stack application.

Built with WAMP stack: Windows, Apache, MySQL, and PHP

Project management:
frontend client - HTML & CSS </br>
backend server - PHP </br>
Database Mysql </br>

Instructions - how to run the project:
1. Initialize XAMP / MAMP.
2. Create a folder on htdocs, load the project to it and open it on your IDE for code modifications.
3. Make sure the connection to mysql is compatible with your DB preferences/
    * the current connection is set to default.
4. Create a table on your DB named "users". 
    Database structure is as follows:
    id - unique, auto increment, primary key
    name - varchar(50)
    age - int(3), indexed
    country - varchar(30), indexed
    email - varchar(50)
    profile_pic - varchar(150).

"http://localhost/THE_NAME_OF_YOUR_FOLDER" - client view.
"http://localhost/phpmyadmin" - DB view.

