# YouDev - Share your accomplishments with the world and get hired by the best companies around

YouDev is a platform that allows you to share your completed projects with other developers and companies and get hired by the best companies around.

## Table of Contents

- [YouDev - Share your accomplishments with the world and get hired by the best companies around](#youdev---share-your-accomplishments-with-the-world-and-get-hired-by-the-best-companies-around)
  - [Table of Contents](#table-of-contents)
  - [Pages](#pages)
  - [Definitions](#definitions)
  - [Project Modelization](#project-modelization)
    - [Use case diagram](#use-case-diagram)
    - [Class diagram](#class-diagram)
  - [SQL Queries](#sql-queries)

## Pages

- [ ] Authentication page
  - [ ] Users Auth
  - [ ] Companies Auth
- [ ] Projects page
- [ ] Jobs page

## Definitions

- **Laravel** [https://laravel.com/](https://laravel.com/): is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony.
- **PHP Artisan** [https://laravel.com/docs/9.x/artisan](https://laravel.com/docs/9.x/artisan): is a command line interface for the [Laravel Framework](https://laravel.com/) that makes it easy to execute tasks and perform various developer tasks.
- **Composer** [https://getcomposer.org/](https://getcomposer.org/): is a package manager for PHP that allows you to install and manage dependencies of your PHP application.
- **ORM** [https://laravel.com/docs/9.x/eloquent](https://laravel.com/docs/9.x/eloquent): is a database query builder and **Eloquent** is an ORM for the [Laravel Framework](https://laravel.com/) that provides a simple, expressive API for defining relationships between your models, accessing the underlying database, and performing basic data validation.
- **Migration** [https://laravel.com/docs/9.x/migrations](https://laravel.com/docs/9.x/migrations): is a database migration tool for the [Laravel Framework](https://laravel.com/) that allows you to create, modify, and delete tables and columns in your database using a simple, expressive language.
- **Blade** [https://laravel.com/docs/9.x/blade](https://laravel.com/docs/9.x/blade): is a template language for the [Laravel Framework](https://laravel.com/) that makes it easy to generate HTML views using PHP.

## Project Modelization

Original Enterprise Architect project model: [YouDev.eapx](modelization/YouDev.eapx)

### Use case diagram

![PNG version](modelization/Use%20Case%20Diagram.png)

[PDF version](modelization/Use%20Case%20Diagram.pdf)

### Class diagram

![PNG version](modelization/Class%20Diagram.png)

[PDF version](modelization/Class%20Diagram.pdf)

## SQL Queries

1. Creating Database:

    ```sql
    CREATE DATABASE IF NOT EXISTS `youdev`;
    ```

2. Using Database:

    ```sql
    USE `youdev`;
    ```

3. Creating Tables:
    1. Users:

        ```sql
        CREATE TABLE IF NOT EXISTS `users` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `first_name` varchar(255) NOT NULL,
            `last_name` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL UNIQUE,
            `password` varchar(255) NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ```

    2. Projects:

        ```sql
        CREATE TABLE IF NOT EXISTS `projects` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `user_id` int(11) NOT NULL,
            `title` varchar(255) NOT NULL,
            `description` text NOT NULL,
            `github_link` varchar(255) NOT NULL,
            `design_link` varchar(255) NOT NULL,
            `image_link` varchar(255) NOT NULL,
            `tags` varchar(255) NOT NULL,
            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ```

    3. Companies:

        ```sql
        CREATE TABLE IF NOT EXISTS `companies` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(255) NOT NULL UNIQUE,
            `password` text NOT NULL,
            `website_link` varchar(255) NOT NULL,
            `logo_link` varchar(255) NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ```

    4. Offers:

        ```sql
        CREATE TABLE IF NOT EXISTS `offers` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `company_id` int(11) NOT NULL,
            `title` varchar(255) NOT NULL,
            `description` text NOT NULL,
            `tags` varchar(255) NOT NULL,
            `application_link` varchar(255) NOT NULL,
            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (`company_id`) REFERENCES `companies`(`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ```

4. Adding data:

    1. Users:

        ```sql
        INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES
        ('John', 'Doe', 'jd@gmail.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'),
        ('Jane', 'Doe', 'jane@gmail.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm');
        ```

    2. Companies:

        ```sql
        INSERT INTO `companies` (`name`, `password`, `website_link`, `logo_link`) VALUES
        ('Google', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'https://www.google.com', 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'),
        ('Facebook', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'https://www.facebook.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/1200px-F_icon.svg.png');
        ```

    3. Projects:

        ```sql
        INSERT INTO `projects` (`user_id`, `title`, `description`, `github_link`, `design_link`, `image_link`, `tags`) VALUES
        (1, 'YouDev', 'A web application for developers', 'github.com/youdev', 'https://youdev.com', 'https://youdev.com/images/youdev.png', 'javascript, html, css, php, mysql, laravel, blade, bem'),
        (2, 'Todo list', 'A todo list web application', 'github.com/todolist', 'https://todolist.com', 'https://youdev.com/images/todolist.png', 'javascript, html, css, php, mysql, laravel, blade, bem');
        ```

    4. Offers:

        ```sql
        INSERT INTO `offers` (`company_id`, `title`, `description`, `tags`, `application_link`) VALUES
        (1, 'Full-stack developer', 'We are looking for a full-stack developer to join our team', 'We are looking for a full-stack developer to join our team', 'https://youdev.com/jobs'),
        (2, 'Full-stack developer', 'We are looking for a full-stack developer to join our team', 'We are looking for a full-stack developer to join our team', 'https://youdev.com/jobs');
        ```
