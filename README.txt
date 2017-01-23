//Создание красивого списка статей

1. Копируем каталог pattern
cp pattern myName

2. Заходим в каталог
cd myName

3. Редактируем html title,
nano phpHead

4. Редактируем паттерн Url и количество страниц
nano mklist.php 

5. Генерим список страниц
php mklist.php

6. Закачиваем файлы страниц
mv list.txt ./pages/
cd pages
cat list.txt | xargs wget
cd ../

7. Редактируем имя получаемого файла и регулярку для парсинга страниц
nano getPages.php

8. Генерим файлик со списком ссылок
php getPages.php

