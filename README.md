# Macca Computer Login System - Qspace version

<img src="https://maccacomputer.altervista.org/images/MCLOGO.svg" height="250px">

## Installation

Go to `php/database.php` and set the DB credentials.
Example:
```php
$config = [
    'db_engine' => 'mysql',
    'db_host' => 'localhost',
    'db_name' => 'mysite',
    'db_user' => 'root',
    'db_password' => '',
];
```

Then dump in phpMyAdmin the sql file for users table:
```sql
CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=1;
```

### Feedback
For any problems, tell me in the ISSUE tab.
