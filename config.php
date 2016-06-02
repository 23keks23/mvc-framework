<?php
// Задаем константы:
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS) . DS;
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'host1471558');
define('DB_PASS', '6O7ta2xNQ1rEqRoW');
define('DB_NAME', 'host1471558_bytslugba');