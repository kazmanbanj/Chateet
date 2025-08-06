This is a project made with laravel, tailwindcss, MySQL. Chateet is a platform where users can interact with one another, follow each other and read latest posts from friends.

Run the following commands for cloning on your local machine:
1. git clone <repo-url>
2. cd project-name
3. composer install
4. cp .env.example .env
5. php artisan key:generate
6. set up your .env file:
   DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
7. create the database:
    mysql -u root -p
    CREATE DATABASE your_db_name;
8. php artisan migrate
9. php artisan db:seed
10. php artisan serve
