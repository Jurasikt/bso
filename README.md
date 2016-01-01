Установка:  
<br>
- Измените настройки `Application\config\general.yml` 
```
database: 
    hostname: localhost
    username: root
    password: pass
    database: name

site: /
url:  http://examle.com/
timezone: Europe/Minsk
```
<br>
- Создайте бд `install\sql.sql` или:
```
php -i install.php
```
<br>
- Удалите `install.php`:
```
rm -r install/* install.php 
```
## Licenses
MIT License
