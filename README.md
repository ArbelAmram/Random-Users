# random_users

This Random Users application receives data from api, saves it to DB, and displays it.</br>

Built with WAMP stack: Windows, Apache, MySQL, and PHP.</br>

Project management: </br>
frontend - HTML & CSS. </br>
backend - PHP. </br>
Database - Mysql. </br>

Content from free api: https://randomuser.me/api (return JSON)

Instructions - how to run the project:</br>
1. Initialize XAMP / MAMP.</br>
2. Create a folder on htdocs, load the project into it and open your IDE for code modifications.</br>

http://localhost/THE_NAME_OF_YOUR_FOLDER/index.php - client view.</br>

3. Make sure the connection to mysql is compatible with your DB preferences.</br>
    * the current connection is set to default.</br>
4. Create a table on your DB named "users". </br>
    The database structure is as follows:</br>
    id - unique, auto increment, primary key</br>
    name - varchar(50)</br>
    age - int(3), indexed</br>
    country - varchar(30), indexed</br>
    email - varchar(50)</br>
    profile_pic - varchar(150).</br>

http://localhost/phpmyadmin - DB view.</br>

Final Solution: <br/>
![sample](https://user-images.githubusercontent.com/51449659/181442563-09315189-d489-447a-b1b4-9128a770e339.jpg)



