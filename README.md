# REST API with CodeIgniter 4 Framework

## Important for Testing

Before starting, first create your database, then configure it in the `.env` file.

Next, run the migrations and seeders for dummy data.

After that, your application will be ready to use.

### Example

> Creating database

```sql
CREATE DATABASE db_auth_ci4;
```

> Adjust environment variable

* Uncomment line 33-39

```sh
# database.default.hostname = localhost
# database.default.database = ci4
# database.default.username = root
# database.default.password = root
# database.default.DBDriver = MySQLi
# database.default.DBPrefix =
# database.default.port = 3306
```

* Like this

```sh
database.default.hostname = localhost
database.default.database = db_auth_ci4
database.default.username = root
database.default.password = '' # If your account without password
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

> Execute migration table

```sh
php spark migrate
```

> Seeding the dummy

```sh
php spark db:seed
```

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## LICENSE
This project is licensed under the [MIT License](LICENSE).
