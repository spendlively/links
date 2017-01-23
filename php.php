<?php header('Content-Type: text/html; charset=utf-8', true); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>PHP</title>
	<style>
.rounded {
counter-reset: li; 
list-style: none; 
font: 14px "Trebuchet MS", "Lucida Sans";
padding: 0;
text-shadow: 0 1px 0 rgba(255,255,255,.5);
}
.rounded a {
position: relative;
display: block;
padding: .4em .4em .4em 5em;
margin: .5em 0;
background: #DAD2CA;
color: #444;
text-decoration: none;
border-radius: .3em;
transition: .3s ease-out;
}
.rounded a:hover {
background: #E9E4E0;
}
.rounded a:hover:before {
transform: rotate(360deg);
}
.rounded a:before {
content: counter(li);
counter-increment: li;
position: absolute;
left: -.3em;
top: 50%;
margin-top: -1.3em;
background: #8FD4C1;
height: 2em;
width: 4em;
line-height: 2em;
border: .3em solid white;
text-align: center;
font-weight: bold;
border-radius: 2em;
transition: all .3s ease-out;
}		
	</style>
</head>
<body><ol class="rounded"><li class="linkCls"><a href="https://habrahabr.ru/post/320172/" target="_blank">JSON API Мой Склад, самообучение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/320124/" target="_blank">Обзор современных систем веб-рабочих столов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/320046/" target="_blank">Авторизация в Laravel, через социальные сети (Ulogin). Просто, гибко и эффективно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/319934/" target="_blank">Мониторинг приложений с помощью Pinba</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ffcms/blog/319788/" target="_blank">Релиз FFCMS 3.0.0 — новая переработанная система</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/319580/" target="_blank">PHP-Дайджест № 100 – интересные новости, материалы и инструменты (1 – 15 января 2017)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319454/" target="_blank">Дружба OkayCMS и модуля для SMTP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317726/" target="_blank">Разделение текста на предложения с помощью Томита-парсера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/echelon/blog/319218/" target="_blank">Обнаружение в коде дефекта «разыменование нулевого указателя»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318836/" target="_blank">Хранение php-сессий в Redis с блокировками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318778/" target="_blank">PHPixie Cache: PSR-6, PSR-16 и несколько интересных фич</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318792/" target="_blank">ФБР, ЦРУ и Обама против скрипта на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318724/" target="_blank">Платформа для быстрого создания RESTful API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318704/" target="_blank">Laravel Dusk уже близко</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318698/" target="_blank">Уязвимости выполнения произвольного кода в PHPMailer и SwiftMailer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hh/blog/318450/" target="_blank">Самые востребованные языки программирования 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318424/" target="_blank">Пакет-географ: готов к работе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/318410/" target="_blank">PHP-Дайджест № 99 – итоги 2016 года и подборка интересных ссылок (11 – 25 декабря 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/318008/" target="_blank">Улучшение производительности PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smi2/blog/317682/" target="_blank">Масштабирование ClickHouse, управление миграциями и отправка запросов из PHP в кластер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310708/" target="_blank">Отладка php в Visual Studio Code (Xdebug, Windows)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310694/" target="_blank">Системные скрипты на php для linux, пишем скриншотер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jetinfosystems/blog/310490/" target="_blank">Использование EntryPoints в SuiteCRM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/310366/" target="_blank">Как мы сделали ровную балансировку нагрузки на фронтенд-кластере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/310340/" target="_blank">Hermitage — решение ваших проблем с хранением и обработкой изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309962/" target="_blank">Функции высших порядков и монады для PHP`шников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310254/" target="_blank">Разработка сервера на php и системных скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/310054/" target="_blank">Обзор расширения OPCache для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310068/" target="_blank">PHP: фрактал нецелевого использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309942/" target="_blank">Шаблон Presenter в Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/lamoda/blog/199096/" target="_blank">Расширение возможностей массива в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199268/" target="_blank">Как я делал мультиязычность на Codeigniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eset/blog/199000/" target="_blank">php.net скомпрометирован</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198970/" target="_blank">Работа ресурса php.net восстановлена</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198954/" target="_blank">Создание виджета «Счет Live» использую PHP Web Sockets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198886/" target="_blank">Поддержка интерактивной консоли PHP под Debian Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198816/" target="_blank">Chrome и Firefox забанили php.net</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198668/" target="_blank">QIWI и новый протокол REST в примерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/198510/" target="_blank">Новый PhpStorm 7: за пределами языка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198544/" target="_blank">PHP RUtils — небольшая библиотека для обработки русского текста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198514/" target="_blank">WAMP: перед установкой нового выпуска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198458/" target="_blank">Переход на Selenium 2 + PhantomJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198450/" target="_blank">Active Record против Data Mapper-а для сохранения данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197332/" target="_blank">Публичные свойства, геттеры и сеттеры или магические методы?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/198318/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели № 28 (6—20 октября 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198312/" target="_blank">PHP JSON был удален из PHP 5.5?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198100/" target="_blank">ActiveRecord и откат транзакций в Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197970/" target="_blank">Стали доступны свежие результаты тестирования производительности фреймворков от Techempower</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197670/" target="_blank">Drupal 8 — революционные изменения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197666/" target="_blank">Кэшинг пакетов для Composer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197624/" target="_blank">Деобфускация бэкдора без единого буквенно-цифрового символа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197524/" target="_blank">Symfony CMF. Часть 1, хранение данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197454/" target="_blank">Laravel. Установка, настройка, создание и деплой приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197254/" target="_blank">Phalcon PHP фрейморк. Работа с аннотациями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197200/" target="_blank">Поддержка PHP в Google App Engine!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196604/" target="_blank">Regenix: Новый нестандартный MVC фреймворк для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/196538/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели № 27 (22 сентября — 6 октября 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jelastic/blog/196260/" target="_blank">Задай вопрос гуру IT-индустрии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/195946/" target="_blank">Интеграция БД TecDoc с интернет-магазином автозапчастей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195806/" target="_blank">Генератор utf-8 json на php с поддержкой unicode 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195690/" target="_blank">Создаём сайт, используя Laravel и Recurly. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cackle/blog/195136/" target="_blank">Интеграция веб-сервисов в популярные cms</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195160/" target="_blank">Формирование документов на основе ODT шаблонов. ODT to PDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194470/" target="_blank">Как работает PHPixie — Жизнь одного запроса, контейнер и парадигма</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194972/" target="_blank">Хэширование паролей в PHP 5.5 с использованием нового API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194838/" target="_blank">Расширение для PHP или все будет в Zephir'e</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/194728/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели № 26 (8—22 сентября 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194212/" target="_blank">Каким может быть расписание ВУЗа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193986/" target="_blank">PHP-шелл без единого буквенно-цифрового символа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193942/" target="_blank">Пример использования Couchbase в связке с PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192448/" target="_blank">Как я считал время прибытия методом Монте-Карло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193398/" target="_blank">Плагин для Smarty — Combine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193270/" target="_blank">PHP IPC — Межпроцессное взаимодействие в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193166/" target="_blank">Хранение деревьев в базе данных. Часть первая, теоретическая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193168/" target="_blank">Обзор и классификация CMS по категориям (2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/192976/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №25 (25.08.2013 — 08.09.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192726/" target="_blank">Пример разработки блога на Zend Framework 2. Часть 3. Работа с пользователями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192608/" target="_blank">Пример разработки блога на Zend Framework 2. Часть 2. Модуль MyBlog</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192276/" target="_blank">Электронные библиотеки на работе и дома</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192004/" target="_blank">Следим за голосованием на «Россия 10»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190474/" target="_blank">Структуры данных, PHP. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191436/" target="_blank">Автоматическая генерация кода в Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/191320/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №24 (11.08.2013 — 25.08.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191210/" target="_blank">Yii, непрерывная интеграция — как не сломать все</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191176/" target="_blank">Кодирование и декодирование PHP кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191168/" target="_blank">Как начать использовать DI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191142/" target="_blank">Raxan, или веб-программирование в одиночку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190566/" target="_blank">HHVM: тестирование производительности и совместимости с Joomla, Битрикс и Wordpress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190682/" target="_blank">Деобфускация одного зловредного кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190868/" target="_blank">Интеграция phpBB в Yii framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190364/" target="_blank">Конвертируем HTML в PDF при помощи Dompdf</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190440/" target="_blank">Используете ли вы оператор нестрогого сравнения (&quot;==&quot;) в PHP?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190176/" target="_blank">Структуры данных, PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190260/" target="_blank">Как я нашел уязвимость на phpclub.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190156/" target="_blank">Не совсем стандартный подход к организации доступа к WiFi сети (Cisco WLC -&gt; FreeRadius -&gt; PHP -&gt; страничка в сети )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190034/" target="_blank">«Новости по теме» с помощью PHP, phpmorphy и MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189960/" target="_blank">HipHop VM: разведка боем под Debian 7 + Nginx + Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189796/" target="_blank">Генераторы в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/189734/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №23 (29.07.2013 — 11.08.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189504/" target="_blank">Простое создание миниатюр и хранение их на Amazon S3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189360/" target="_blank">Sylph: Глубокие Stub-ы для тестов от создателей PHPixie, или как конвертировать массив в класс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189352/" target="_blank">Взаимодействие php-soap на linux с авторизацией по сертификатам с использованием алгоритмов ГОСТ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189068/" target="_blank">Пример сегментации изображений средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188968/" target="_blank">EazyPhoto: уютный фотохостинг для своего сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188878/" target="_blank">Как узнать, что ваш PHP сайт был взломан</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188666/" target="_blank">Бенчмарк графических библиотек для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188650/" target="_blank">Bootstrap CSS Sprite: синтаксический сахар для &lt;img /&gt;</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188370/" target="_blank">Подбор мнемонических цитат для автомобильных и телефонных номеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188342/" target="_blank">Простой инструмент для тестирования PHP приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/188156/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №22 (15.07.2013 — 28.07.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188056/" target="_blank">Facebook ускорил PHP в девять раз благодаря HipHop VM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188032/" target="_blank">Mamba Hiring: статистика своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187622/" target="_blank">AspectMock — тестируем любой PHP код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187390/" target="_blank">Пишем SOAP клиент-серверное приложение на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187360/" target="_blank">Расширение yii для работы с сервисом sms.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187214/" target="_blank">KPHP от ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187118/" target="_blank">Чем забита ваша память или анализируем содержимое кеша XCache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186718/" target="_blank">Получаем доступ к приватным свойствам объектов в PHP без рефлексии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/186704/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №21 (01.07.2013 — 15.07.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186656/" target="_blank">Cинтаксический сахар для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186570/" target="_blank">Использование ncurses в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/186458/" target="_blank">Структура конфигов на сайтах Алавар</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jelastic/blog/186256/" target="_blank">Статистика использования баз данных, серверов, версий Java и PHP в облаке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/186196/" target="_blank">Динамические примеси в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186194/" target="_blank">EllisLab ищет нового владельца для CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186178/" target="_blank">Так ли быстр ваш Framework или хватит тестировать производительность Нello World</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186132/" target="_blank">Несколько простых запросов вместо одного большого для загрузки связей в ORM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186084/" target="_blank">Ресайз анимированных GIF картинок с помощью PHP + GD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186080/" target="_blank">PHPStorm + XDebug + Bitbucket: разработка на удаленном сервере в небольшой команде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185896/" target="_blank">Автоматический «текучий интерфейс» и ArrayIterator в PHP-моделях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309858/" target="_blank">PHP 7.1: Обзор новых возможностей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/309710/" target="_blank">PHP-Дайджест № 92 – интересные новости, материалы и инструменты (29 августа – 11 сентября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/309328/" target="_blank">Основы индексирования и возможности EXPLAIN в MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/309326/" target="_blank">Как устроена MySQL-репликация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309176/" target="_blank">PHPixie против Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/309098/" target="_blank">[СПб, Анонс] Встреча CodeFreeze с разработчиком PHP Дмитрием Стоговым про внутреннее устройство виртуальной машины PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308948/" target="_blank">Как использовать UrlManager для настройки роутинга и создания «дружелюбных» URL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308896/" target="_blank">Приключения ножниц в цифровом мире (пара строк о DevelStudio)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308882/" target="_blank">SRL — Simple Regex Language</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/308788/" target="_blank">PHP: неправильный путь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169525/" target="_blank">Fenom — yet another PHP template engine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185320/" target="_blank">Ещё один пример использования замыканий в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/185142/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №20 (18.06.2013 — 30.06.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184874/" target="_blank">Автоматизация слежения за разделами на ebay средствами PHP: история одной покупки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184514/" target="_blank">У php.net новый дизайн (в бете). Краткая новость и опрос</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184484/" target="_blank">Расширяем Symfony 2 Forms</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179075/" target="_blank">Обработка pcntl-сигналов в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184302/" target="_blank">Http запросы — мы все это делаем неправильно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184264/" target="_blank">Автодополнение SQL кода прямо в редакторе PHPStorm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184220/" target="_blank">PHP 5.5 «API хэширования паролей»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184186/" target="_blank">Привязка телефона к аккаунту и авторизация сканированием QR кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184150/" target="_blank">Моё маленькое расследование или История одного взлома</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184142/" target="_blank">Вышел финальный релиз PHP 5.5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183658/" target="_blank">Проблема инициализации объектов в ООП приложениях на PHP. Поиск решения при помощи шаблонов Registry, Factory Method, Service Locator и Dependency Injection</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183668/" target="_blank">Двуликий REQUEST_URI или в поисках корректного HTTP/1.1 сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/183642/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №19 (03.06.2013 — 17.06.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183290/" target="_blank">Какой PHP-фреймворк вы используете?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183104/" target="_blank">Pinboard — прокачиваем Pinba для мониторинга PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183010/" target="_blank">PHPUnit: простой синтаксис для создания mock-объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182612/" target="_blank">Silicone Skeleton — настроенный Silex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182424/" target="_blank">Экранирование (или что нужно знать для работы с текстом в тексте)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182352/" target="_blank">Подводные камни использования сессий в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182252/" target="_blank">Нормальная поддержка PHP в Ctags</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/182148/" target="_blank">DevConf 2013 14 июня — опубликована программа секции PHP, автор PHP расскажет про ускорение PHP в 6 раз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182010/" target="_blank">Пишем музыку с помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182008/" target="_blank">Symfony 2.3.0! Первый релиз с долгосрочной поддержкой!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/181980/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №18 (22.05.2013 — 03.06.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181898/" target="_blank">Простое решение для обработки изображений на лету с кешированием результата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181832/" target="_blank">Kohana 3.2: организация мультиязычности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/181488/" target="_blank">Оптимальная параллелизация юнит-тестов или 17000 тестов за 4 минуты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181420/" target="_blank">Сохранение данных Google Reader. PHP версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181328/" target="_blank">Вышел Laravel 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169301/" target="_blank">Статические члены класса. Не дай им загубить твой код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180939/" target="_blank">Декораторы в PHP. Реализация расширения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181009/" target="_blank">AngularJS + PHP. Заставляем $http-сервис веcти себя как jQuery.ajax()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180827/" target="_blank">Декораторы в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180659/" target="_blank">Пример круговой диаграммы в SVG средствами Raphael и PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/180379/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №17 (06.05.2013 — 21.05.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180333/" target="_blank">Типажи и анонимные функции в PHP. Кря-кря!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179863/" target="_blank">В Google App Engine появилась поддержка PHP в тестовом режиме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179585/" target="_blank">WebSocket (Sec-WebSocket-Version: 13) — тонкости реализации, в частности на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179441/" target="_blank">Хак синтаксиса PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179665/" target="_blank">Создание базы данных на основе API 37signals</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179645/" target="_blank">Песочница для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179433/" target="_blank">NoName Framework или Как я велосипед изобретал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179399/" target="_blank">PHP создан, чтобы умирать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179395/" target="_blank">Изучая Rails (ну, и Ruby)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179243/" target="_blank">jQuery EasyUI Datagrid + Yii Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113298/" target="_blank">Из говнокода в Highload. Используем ТАРАНtool. 5 рецептов повышения производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179155/" target="_blank">Еще немного о миграциях. Версия для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179145/" target="_blank">Boris — небольшой, но надежный REPL для php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178899/" target="_blank">Создаем видеобиблиотеку с PHPixie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/178677/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №16 (22.04.2013 — 06.05.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178917/" target="_blank">Yii2. Знакомство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178797/" target="_blank">Development Environment при помощи Vagrant и Chef</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178833/" target="_blank">Как я выбирал легкий PHP фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178749/" target="_blank">Встраивание своей классовой структуры в проект на CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178737/" target="_blank">Создание простого CRUD-приложения с помощью Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178733/" target="_blank">Модифицируем Chrome Logger — пост как стимул к изучению расширений Google Chrome и написанию своих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178681/" target="_blank">Доступно публичное превью Yii 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178303/" target="_blank">Контекстно-зависимая форма в Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178089/" target="_blank">Из Excel в MySQL. Небольшая функция на PHP (fixed)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177805/" target="_blank">Создание графической капчи с выбором лишнего варианта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177709/" target="_blank">Chrome Logger — серверсайд логи в консоли хрома</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177641/" target="_blank">Получение и подсчет количества репостов VK.COM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/177555/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №15 (08.04.2013 — 22.04.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177457/" target="_blank">Неочевидные особенности настройки Genemu TinyMCE для Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177257/" target="_blank">Работа с датами Doctrine 2. Навигация в Symfony 2. И, надеюсь, прочие полезности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/177181/" target="_blank">Использование ActiveRecord от Yii в игре тайм менеджере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177113/" target="_blank">Гормональный holywar Админа и Разраба PHP или REMOTE_ADDR vs HTTP_X_FORWARDED_FOR</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176725/" target="_blank">Работа в PHP с Tokenizer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176689/" target="_blank">DVelum — платформа разработки на PHP + ExtJS4 Выпуск версии 0.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176635/" target="_blank">PHP HTML DOM парсер с jQuery подобными селекторами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176147/" target="_blank">Одновременная работа php 5.2 и php 5.3 на Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176117/" target="_blank">Особенности логического сравнения в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175935/" target="_blank">Особенности при перехватах вызовов методов с помощью __call() и __callStatic() в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/175931/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №14 (26.03.2013 — 08.04.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175705/" target="_blank">Самопальная ORM для Битрикс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175651/" target="_blank">Проблемы «долгих» скриптов PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175483/" target="_blank">Codeacademy анонсировала курс по изучению PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175053/" target="_blank">Управление картинками и другим бинарным содержимым вашего веб-проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175347/" target="_blank">Веб-консоль на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/175085/" target="_blank">Judy-массивы в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174963/" target="_blank">Каким бы я хотел видеть свой первый проект на Symfony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174979/" target="_blank">Yii2 мигрирует с PHP на Ruby (первоапрельская шутка)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/174577/" target="_blank">DevConf 2013 — 14 июня — приглашаем докладчиков, скидка 43% на участие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/174187/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №13 (12.03.2013 — 25.03.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173553/" target="_blank">Консольные команды на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170019/" target="_blank">Шаблон программирования «Текучий интерфейс» в PHP. Свежий взгляд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173955/" target="_blank">Прикручиваем Doctrine 2 ORM к Silex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173943/" target="_blank">В PHP 5.5 будет функция array_column</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173693/" target="_blank">Dater — определяет часовой пояс, локализует и форматирует время в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173153/" target="_blank">Простой редактор конфигурационных файлов для Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172875/" target="_blank">Динамический шаблон Wordpress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172855/" target="_blank">Начало работы с смс-шлюзом Kannel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/172759/" target="_blank">Новый PhpStorm 6.0 облегчает работу с Composer и другими инструментами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172737/" target="_blank">Простенькая страница настроек для Yii-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172699/" target="_blank">Новое расширение PHP под старым названием: event</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172683/" target="_blank">Что нового в PhpStorm 6.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172647/" target="_blank">О тонкостях работы foreach в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308646/" target="_blank">CRUD и связанные операции в CleverStyle Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/308702/" target="_blank">PHP-Дайджест № 91 – интересные новости, материалы и инструменты (15 – 28 августа 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/308644/" target="_blank">О фреймворках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308654/" target="_blank">Инструмент анализа скорости PHP-функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/308242/" target="_blank">Ломаем сбор мусора и десериализацию в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308298/" target="_blank">Валидировали, валидировали… и вывалидировали! Сравниваем валидаторы данных в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/308240/" target="_blank">Массивы в РНР 7: хэш-таблицы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308204/" target="_blank">Работа с БД в CleverStyle Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308166/" target="_blank">Не используйте Illuminate Support</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307640/" target="_blank">Тестирование рекурсии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169909/" target="_blank">Пошаговое создание виджета для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/172297/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №12 (25.02.2013 — 11.03.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172269/" target="_blank">Письма в html-формате с вложенными изображениями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172223/" target="_blank">Немного о Steam Web Api</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172119/" target="_blank">SimplePHPEasyPlus: Складываем числа на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171915/" target="_blank">Первая бета Phalcon 1.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171365/" target="_blank">Сравнение количества кода популярных фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171251/" target="_blank">Symfony 2.2 — Уже Здесь!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171243/" target="_blank">Вышел Symfony 2.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171239/" target="_blank">Получение статистики и скриншотов видеоролика посредством php5-ffmpeg</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171151/" target="_blank">Неожиданное поведение Garbage Collector'а сессий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170901/" target="_blank">Как сделать свой сервер для приема, обработки и передачи смс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170771/" target="_blank">Laravel 4. Отличия и сравнения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170755/" target="_blank">Экспорт избранного Хабра в FB2 — скоростная PHP-версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170705/" target="_blank">Фильтр Блума на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170021/" target="_blank">Знакомимся с аспектно-ориентированным программированием в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170671/" target="_blank">Вышла последняя RC-версия Symfony 2.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/170669/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №11 (12.02.2013 — 25.02.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170327/" target="_blank">Шаблоны в шаблонизаторе и как шаблоны Django до PHP дошли (в очередной раз)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170289/" target="_blank">Разработка с помощью Laravel 4. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169777/" target="_blank">Пример удобной организация split (A/B) тестирование на серверной стороне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168829/" target="_blank">Файловый менеджер (Silex + Kendo UI) — Tutorial</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169537/" target="_blank">HOWTO: Одна из возможных реализация Модели (MVC) в Zend Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169447/" target="_blank">Zend Optimizer+ наконец выложен на гитхаб</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169311/" target="_blank">Проверка работоспособности кода на множестве версий PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169187/" target="_blank">Внедрение зависимости c Inversion</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/169031/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №10 (26.01.2013 — 11.02.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166855/" target="_blank">Об одной малоизвестной уязвимости в веб сайтах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168935/" target="_blank">AzaMath — Cистемы счисления (включая кастомные) + арифметика произвольной точности на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167469/" target="_blank">SXB: инкрементальный бэкап MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167431/" target="_blank">Новое расширение PHP позволяет добавлять произвольные методы к скалярам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/167337/" target="_blank">Автоматизированный рефакторинг в большом проекте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167181/" target="_blank">Функциональное программирование на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167153/" target="_blank">Типажи в PHP: хорошо это или плохо?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/167127/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №9 (12.01.2013 — 25.01.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166647/" target="_blank">Добавление своего функционала в UMI.CMS при помощи обработчиков событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166641/" target="_blank">Храним ID в Cookie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166633/" target="_blank">Сравнение производительности: curl, php curl, php socket, python pycurl</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166631/" target="_blank">Zend Framework: XSL и самостоятельная сериализация Views</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166583/" target="_blank">Можно так просто взять и скрыть информацию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166411/" target="_blank">Раскрываем магию MySQL или о строгости и мягкости MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165991/" target="_blank">Magmi – лучший способ импортировать продукты в Magento</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165947/" target="_blank">Разрабатываем новый формат файла для бэкапа сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165959/" target="_blank">Применение D-Bus в веб-системах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165715/" target="_blank">Реализация морфологического поиска на Kohana (библиотека phpMorphy)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165707/" target="_blank">SoapServer на PHP. Пусть array всегда будет Map</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165699/" target="_blank">Онлайн IDE ShiftEdit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165629/" target="_blank">ООП-билдер «массивных» параметров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/165513/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №8 (29.12.2012 — 11.01.2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165329/" target="_blank">Избавляемся от дублирования сквозного кода в PHP: рефакторинг кода с АОП</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165237/" target="_blank">Руководство по использованию Dependency Injection в Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165223/" target="_blank">Как же работают транзакции в Redis</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165069/" target="_blank">PHP класс для удобной и безопасной работы с MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165107/" target="_blank">Индексный доступ к Multibyte-строкам на PHP или изучение ООП на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165013/" target="_blank">Дело было вечером, echo «было нечего»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164911/" target="_blank">Разбираемся с REST API Prestashop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164903/" target="_blank">Мой первый скрипт по разгадыванию капчи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/164295/" target="_blank">Лучшее в мире PHP за 2012 и дайджест интересных материалов за последние две недели №7 (15.12.2012 — 28.12.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164243/" target="_blank">Генерация аватарок средствами PHP, глаза</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164173/" target="_blank">Coroutines в PHP и работа с неблокирующими функциями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159483/" target="_blank">Опережающие и ретроспективные проверки в регулярных выражениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162685/" target="_blank">Как устроены массивы в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163623/" target="_blank">Используем «Яндекс.Чистый Веб» для защиты от спама</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162713/" target="_blank">Как устроены переменные в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/162661/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №6 (01.12.2012 — 14.12.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162651/" target="_blank">Веб-контроль Raspberry Pi GPIO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162473/" target="_blank">Конвертация Word-документов на php используя COM (windows+apache)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162535/" target="_blank">Пишем на php… статично</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161629/" target="_blank">Сколько памяти потребляют объекты в PHP и стоит ли использовать 64-битную версию?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162313/" target="_blank">Создаем модуль «Новая почта» для Magento (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162185/" target="_blank">Библиотека для работы с QIWI через SOAP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161987/" target="_blank">Standard PHP Library (SPL) — Часть 1: Структуры данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161877/" target="_blank">Создание плагина разрешения ссылок для PhpStorm (IntelliJ IDEA)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161483/" target="_blank">Ошибки PHP: классификация, примеры, обработка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161467/" target="_blank">Создаём сложный лабиринт в фоне веб-страницы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161469/" target="_blank">API PHP в JavaScript. Краткий обзор PHP.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161305/" target="_blank">Google Cloud Messaging – пишем backend на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161181/" target="_blank">Yii 1.1.13 RC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/160929/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №5 (17.11.2012 — 30.11.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160841/" target="_blank">Нативный MVC для Silex PHP Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160681/" target="_blank">Создаем пользователя AD через веб-интерфейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160313/" target="_blank">Собственный модуль для админки на Webasyst</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160311/" target="_blank">Phalcon: Давайте учиться на примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160189/" target="_blank">Настройка Nginx + LAMP сервера в домашних условиях Часть 2: Настройка backend: PHP + MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159941/" target="_blank">ZF2 ActiveRecord Module</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159695/" target="_blank">Нужна ли вам документация Symfony2 на русском?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159649/" target="_blank">Сервис push-уведомлений Pushover для Android и iOS в связке с PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159209/" target="_blank">Наложение текста и картинок на изображение с помощью библиотек MagickWand и GD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159217/" target="_blank">Phalcon — скомпилированный PHP MVC Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159155/" target="_blank">Пишем CLI модуль для Zend Framework 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159129/" target="_blank">Грамотное определение языка пользователя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159023/" target="_blank">Встраиваем Sypex Dumper в свою админку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/158977/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №4 (03.11.2012 — 16.11.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158729/" target="_blank">Построение нейронных сетей в php используя FANN, пример реализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/158615/" target="_blank">Надежный код при высоких нагрузках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158469/" target="_blank">Мониторинг активности групп VK. Обрабатываем данные на VKScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158213/" target="_blank">Разработка архитектуры приложения с использованием инверсии зависимости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158417/" target="_blank">Анатомия атаки: Как я взломал StackOverflow</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wapstart/blog/158311/" target="_blank">Обзор систем кеширования в onPHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158229/" target="_blank">Опыт разработки плагина для Yasca</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307762/" target="_blank">Рефакторинг — мощь сокрытая в качественном коде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307726/" target="_blank">Создаем мультиязычный блог с помощью OctoberCMS — Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/307718/" target="_blank">PHP-Дайджест № 90 – интересные новости, материалы и инструменты (1 – 14 августа 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307690/" target="_blank">Маршрутизация в CleverStyle Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307626/" target="_blank">Изменения в CleverStyle Framework 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307568/" target="_blank">Поиск недействительных паспортов или учимся готовить бинарные файлы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307464/" target="_blank">Простая система демонов для Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307340/" target="_blank">Управляем компьютером через браузер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306902/" target="_blank">Контрабанда «Гамлета» при помощи кота</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/306828/" target="_blank">PHP-Дайджест № 89 – интересные новости, материалы и инструменты (17 – 31 июля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158059/" target="_blank">Поиск всех возможных решений в игре «Водопровод»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151241/" target="_blank">Использование xslt-шаблонов в реальных проектах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157647/" target="_blank">Создаем модуль «Новая почта» для Magento (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157255/" target="_blank">Библиотека для авторизации через Хабрахабр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157409/" target="_blank">Продуктивное использование PHPStorm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/157203/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №3 (20.10.2012 — 02.11.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156633/" target="_blank">MongoDb for developers. Неделя 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156273/" target="_blank">Модификация в БД табличных или множественных полей документов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155957/" target="_blank">Мобильные приложения для iOS и Android на php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155853/" target="_blank">Использование преимуществ встроенного PHP сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155377/" target="_blank">Асинхронные запросы к MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155675/" target="_blank">Переводим книги с помощью Яндекс.API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/155425/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №2 (06.10.2012 — 19.10.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154865/" target="_blank">Избавление Kohana ORM от лишних запросов к БД</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155021/" target="_blank">Удобное встраивание RESTful API в проект</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155111/" target="_blank">Расширяем возможности Asterisk, используя PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154663/" target="_blank">mysqlnd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/153997/" target="_blank">DEV {web} — конференция о Highload веб-разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/153769/" target="_blank">Дайджест интересных новостей и материалов из мира PHP за последние две недели №1 (21.09.2012 — 05.10.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153731/" target="_blank">Реализация пошаговой работы PHP-скрипта с помощью AJAX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153689/" target="_blank">Недокументированные изменения или PHP 5.4 и перегрузка функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153525/" target="_blank">Обход областей видимости или неожиданное поведение функции EACH</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153445/" target="_blank">Слежение за изменениями данных в MySQL при помощи PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153261/" target="_blank">MODX Revolution — пара костылей для необычных ситуаций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152683/" target="_blank">LZW-сжатие строк на javascript и распаковка средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152389/" target="_blank">Определение части речи слова на PHP одной функцией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152079/" target="_blank">Графовая база данных Neo4j в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jelastic/blog/151843/" target="_blank">Облачный PHP хостинг в один клик!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151795/" target="_blank">Отдаем файлы эффективно с помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151783/" target="_blank">Потоковая загрузка и обработка видео посредством node.js + php и ffmpeg — часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/151773/" target="_blank">Создание облачного сайта на PHP с SQL Database и его развертывание с помощью Git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151647/" target="_blank">Отладка непонятных ошибок в Magento</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151558/" target="_blank">Colada — удобная работа с коллекциями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151564/" target="_blank">Полезные ссылки для PHP разработчика с MageConf 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/151382/" target="_blank">Вышел PhpStorm 5 — еще больше умных полезных штук</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151303/" target="_blank">&lt;?=date(z)-255?:'С днём программиста';</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150984/" target="_blank">Вышел в свет Zend Framework 2 stable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150942/" target="_blank">Заметки о MODX Revo от новичка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150855/" target="_blank">Сравнительный анализ CMS: охота на оптимальную систему для создания корпоративных сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150884/" target="_blank">Радикальное решение от GoDaddy для борьбы с консерваторами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149444/" target="_blank">Архитектура форм в Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150842/" target="_blank">Сериализация объектов в json формат для реализации REST API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150872/" target="_blank">Интеграция пользователей сайта и форума на phpbb 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148203/" target="_blank">PHPExcel и большие файлы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150803/" target="_blank">JSON-RPC 2.0 и PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150793/" target="_blank">Генератор масок из интервалов DEF кодов для Asterisk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/150774/" target="_blank">Создание облачного сайта на PHP и MySQL и его развертывание с помощью Git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150762/" target="_blank">Zend Framework, субъективные впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150724/" target="_blank">Удобные классы для получения статусов IM на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150617/" target="_blank">Спящий режим и использование InternetSharing на Macbook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150629/" target="_blank">Сериализация в php: serialize, json, bson</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150542/" target="_blank">Host и Request_Uri в списке сессий Oracle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150342/" target="_blank">Впечатления работы с платформой приложений Mamba.Ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150267/" target="_blank">Реализация MVC паттерна на примере создания сайта-визитки на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150224/" target="_blank">Как я делал нотную капчу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/150163/" target="_blank">Создание форумов phpBB в облаке за несколько минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150039/" target="_blank">AMatch, часть 2. Коды ошибок, собственные ошибки, новый формат callback</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150023/" target="_blank">RedBeanPHP — CodeFirst PHP фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zpayment/blog/150015/" target="_blank">Гео-модуль для PHP приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149853/" target="_blank">DVelum – платформа разработки на PHP + ExtJS4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149850/" target="_blank">Доступ к Skype API используя PHP на *nix системах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149748/" target="_blank">Работа с Gmail используя PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149739/" target="_blank">Приведение к типам в Yii::app()-&gt;request</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/149695/" target="_blank">Мониторинг производительности PHP-кода с помощью Pinba</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149678/" target="_blank">Использование Composer для генерации автозагрузчика, поддерживающего legacy-код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148756/" target="_blank">Как работает парсер Mediawiki</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149613/" target="_blank">Отчёт о попытке получить заявленную эффективность от prepared statements</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149570/" target="_blank">Реализация паттерна Компоновщик (Composite pattern) на php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149558/" target="_blank">Информационные «виджеты» на PHP в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149435/" target="_blank">Создание модульной структуры с применением инверсии управления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149319/" target="_blank">Использование Сomposer в Git репозитории</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149314/" target="_blank">В PHP 5.5 возможно появится Finally</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149275/" target="_blank">Вышел Codeception 1.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149243/" target="_blank">Авторизация на сайтах через Z-Payment (OAuth 2.0)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149239/" target="_blank">Автоматическая проверка кода для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149187/" target="_blank">HybridAuth — интеграция сайта с социальными сетями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149181/" target="_blank">Анти-спам модуль для Kohana</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149102/" target="_blank">Использование аннотаций в PHP 5.4 для АОП и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149114/" target="_blank">AMatch — проверка входных параметров в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148701/" target="_blank">Защита от SQL-инъекций в PHP и MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148999/" target="_blank">Ваш сайт тоже позволяет заливать всё подряд?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148951/" target="_blank">Реализация REST API на Symfony2: правильный путь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148939/" target="_blank">Хабрастатс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148899/" target="_blank">Объектно-ориентированное функциональное метапрограммирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148843/" target="_blank">Миграция базы данных в Zend Framework: Akrabat_Db_Schema_Manager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wapstart/blog/142975/" target="_blank">Профилирование PHP скриптов на живом сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148773/" target="_blank">Самоисполняемый phar как способ распространения веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/imagecms/blog/148733/" target="_blank">Поддержка пространства имен в PHP 5.3. Примеры работы на ImageCMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148688/" target="_blank">Написание программ на PHP с использованием fork()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148596/" target="_blank">PHP process manager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148574/" target="_blank">Конвертирование Zend конфига из ini в yaml. Подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148527/" target="_blank">Боремся с race condition в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148478/" target="_blank">Создание графиков с помощью pChart. Данные из MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148462/" target="_blank">HyperActive Record – недо-ORM на CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148235/" target="_blank">Используете php 5.4 в коммерческой разработке?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147870/" target="_blank">Запуск внешних приложений из Notepad++. NppExec: ускоряем поиск в Интернете и не только…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148010/" target="_blank">Весь PHP в двух строчках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147919/" target="_blank">Управление GIT-ом через веб-консоль на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147885/" target="_blank">Если бы в PHP были выделения списков и генераторы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147848/" target="_blank">LINQ для PHP. Часть 2. Если гора не идёт к Магомету, Магомет идёт к горе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306564/" target="_blank">Экосистема Ruby (on Rails) с горьким привкусом, или «Как мы любим пошпынять PHP»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306452/" target="_blank">Держите данные под контролем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306408/" target="_blank">О том, как мы на PHP запускали настоящий MS Excel и что из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/306338/" target="_blank">Stripe: сервис вашей мечты для автоматизации денежных переводов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306146/" target="_blank">Уведомления в браузере и пример того, как их можно использовать с пользой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/305906/" target="_blank">Инкремент в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306006/" target="_blank">Композитный сайт: технология Битрикс в каждую CMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305802/" target="_blank">Создаем мультиязычный блог с помощью OctoberCMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/305808/" target="_blank">PHP-Дайджест № 88 – интересные новости, материалы и инструменты (13 июня – 17 июля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/305708/" target="_blank">Впечатления от лучших докладов на International PHP Conference</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147844/" target="_blank">Простой сервер задач с очередью в MySQL (без проблем с блокировками)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147699/" target="_blank">Wordpress Plugin длиной в одну страницу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147674/" target="_blank">Как может выглядеть PHP 5.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147620/" target="_blank">Применение замыканий в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147612/" target="_blank">LINQ для PHP. Часть 1. Я его слепила из того, что было, а потом, что было, то и полюбила</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147592/" target="_blank">Google Cloud Messaging: Библиотека для Codeigniter и пара отличий Google Cloud Messaging и Apple Push Notifications</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147573/" target="_blank">Немного о командной работе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147535/" target="_blank">Используем PHP правильно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147518/" target="_blank">FuelPHP год после 1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147438/" target="_blank">Другой взгляд на эволюцию гадкого утёнка или рефакторинг спагетти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147424/" target="_blank">Фотоальбом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147275/" target="_blank">Немного опыта по работе с FatFree Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147257/" target="_blank">PHP гораздо лучше, чем вы думаете</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146777/" target="_blank">Первое приложение для Flickr. Авторизация oAuth 2.0, получения списка фотографий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146707/" target="_blank">Оптимизация использования моделей от Active Record, и немного массивов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146662/" target="_blank">Скринкаст: Знакомство с Codeception</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/146616/" target="_blank">Speakers Corner: Знакомимся с Symfony2 в Киеве и Одессе вместе с гуру Lukas Kahwe Smith</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146597/" target="_blank">Sypex Geo — быстрое определение города по IP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146589/" target="_blank">Yii: Динамическое изменение правил валидации (сценариев)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146547/" target="_blank">Удаленная отладка с использованием xdebug port forwarding</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146473/" target="_blank">Разделение конфигураций в Yii по взрослому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146408/" target="_blank">История одного файлового менеджера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146231/" target="_blank">Соглашение внутри команды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146112/" target="_blank">Использование Symfony2 для создания e-commerce портала с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146107/" target="_blank">Рисуем тайлы с данными для GoogleMap на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/146002/" target="_blank">Фотоотчет с конференции DevConf 2012 + автограф-сессия с «папой» PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145895/" target="_blank">Профилирование и отладка php-приложений с помощью xhprof & FirePHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145946/" target="_blank">Composer — менеджер зависимостей для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145836/" target="_blank">Что интересного я узнал на DevConf 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145820/" target="_blank">Радужные таблицы в домашних условиях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145683/" target="_blank">Статический анализ PHP-кода с помощью HipHop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145603/" target="_blank">SASS PHP extension</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145621/" target="_blank">Алгоритм шифрования Anubis на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145575/" target="_blank">Коллекции объектов в PHP. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145578/" target="_blank">Простая замена phpMyAdmin для гиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145560/" target="_blank">Немного о красоте T-фракталов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145337/" target="_blank">PHP for Android project</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145317/" target="_blank">Наглядный пример использования замыканий в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144868/" target="_blank">Простейший сервис Вопрос/Ответ, используя Formspring</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145212/" target="_blank">Laravel — PHP Framework для ремесленников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145136/" target="_blank">Класс для реализации UNIX-демонов на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144959/" target="_blank">Проблема модификации даты через strtotime</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144802/" target="_blank">Doctrine ORM behaviors, или как эффективно использовать трейты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/144693/" target="_blank">Основатель PHP, Расмус Лердорф выступит с мастер-классом на DevConf 2012 10 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144670/" target="_blank">Создание гибких анкет в Drupal 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144406/" target="_blank">Защита ajax-приложения от Cross Site Request атак (CSRF)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144582/" target="_blank">Разрабатываем модуль PHP на C++. Часть 1: экскурс в мир Zend Engine 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144424/" target="_blank">Пакетные операции, как это делается в Drupal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/144389/" target="_blank">DevConf 2012 — сформирована альфа-версия программы конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144160/" target="_blank">Еще раз о каррировании и частичном применении в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/softline/blog/144190/" target="_blank">Рассылки по сегментам на основе MailChimp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144182/" target="_blank">Коллекции объектов в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144168/" target="_blank">Inline-тесты для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144111/" target="_blank">Стоит ли смотреть в сторону PHP тому, кто решился только со второй попытки научиться прилично программировать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143957/" target="_blank">Карринг и Частичное применение функции в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/143882/" target="_blank">DEVCONF 2012 — 9-10 июня в Москве. Началось голосование за доклады</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143739/" target="_blank">Простой сканер внедрения кода на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143658/" target="_blank">Aleph PHP Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143621/" target="_blank">Что нам стоит фильм «построить»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143567/" target="_blank">Codeception — новости проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143497/" target="_blank">Реализация шаблона Identity Map в Yii Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wizartech/blog/143379/" target="_blank">Фото, видео и презентации докладов с ZFConf 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143375/" target="_blank">Борьба с WordPress-червём GetMama</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143331/" target="_blank">Уязвимость PHP в режиме CGI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143277/" target="_blank">Точное определение региона по GPS координатам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143064/" target="_blank">CMS DLE + uLogin. Ошибки модуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142996/" target="_blank">«Сервис свободных аккаунтов» за день с Next Code</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142954/" target="_blank">Эмулятор PEAR DB средствами PDO с некоторым расширением функционала или простая надстройка над PDO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142874/" target="_blank">Вышли PHP 5.4.1 и PHP 5.3.11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142823/" target="_blank">Использование дополнительных инструкций CPU в одной из задач на PHP для ускорения производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142541/" target="_blank">Symfony 2: Полезные библиотеки и бандлы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/142742/" target="_blank">PhpStorm 4: результат с первой попытки!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142504/" target="_blank">Клуб анонимных PHP'ешников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142414/" target="_blank">NetBeans tips & tricks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142373/" target="_blank">phpBBex — добавляем автозагрузку классов и обработчики AJAX запросов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142342/" target="_blank">Почему многие выбирают PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142298/" target="_blank">Видеокурс Fundamentals of Magento development</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wizartech/blog/142238/" target="_blank">ZFConf 2010: Как это было (видео докладов)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142210/" target="_blank">Gearman — сервер очередей: использование в проектах на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142195/" target="_blank">PHP — отстой! Но я люблю его!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142159/" target="_blank">Семантическая сеть, ARC2 и PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142140/" target="_blank">PHP: фрактал плохого дизайна</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141938/" target="_blank">Очистка заражённых файлов сайта от вредоносного кода. Продолжение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141710/" target="_blank">Очистка заражённых файлов сайта от вредоносного кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138521/" target="_blank">Несколько незамеченных подробностей о HipHop PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141448/" target="_blank">CodeIgniter Command Line library — небольшой ассистент для работы с CLI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141447/" target="_blank">Проверка соблюдения стандартов кодирования РHP через git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141404/" target="_blank">Резервное копирование файлов и баз данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141290/" target="_blank">PHP. Собеседование в вопросах и ответах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140954/" target="_blank">Справочник email адресов компании или репликация данных в нестабильной сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141127/" target="_blank">MySQLi раскладываем все по полочкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141093/" target="_blank">Насколько большие массивы (и значения) в PHP? (Подсказка: ОЧЕНЬ БОЛЬШИЕ)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141103/" target="_blank">Делаем домашний VirusTotal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141068/" target="_blank">Пишем веб-эмулятор терминала на Go, используя Websocket</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140352/" target="_blank">Разбираем xlsx в PHP без готовых библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140943/" target="_blank">Поиск неточных совпадений, поиск с учетом ошибок ввода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140847/" target="_blank">По колено в PDF. PHP парсер с плюшками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140712/" target="_blank">Краткая инструкция по интеграции шаблонизатора Twig и Slim Micro Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140701/" target="_blank">Авторизация на сайте через Mail.ru (oAuth 2.0)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140704/" target="_blank">Создаём Instagram фильтры с помощью PHP и ImageMagick</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/305688/" target="_blank">Выпущен PhpStorm 2016.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305432/" target="_blank">Yii 2.0.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305382/" target="_blank">Bitrix — UrlRewrite (feat. Juggernaut)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304908/" target="_blank">Как начать разработку крупного, нетипичного проекта. Практическое пособие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304988/" target="_blank">Сигналы и слоты в PHP. Такие же как в Qt. Ну почти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/flyelephant/blog/304848/" target="_blank">Приглашаем в Одессу на WebCamp 2016! Море, отдых и любимые технологии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/304666/" target="_blank">Книга «Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5. 4-е изд.»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304618/" target="_blank">Стабильный релиз OctoberCMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304604/" target="_blank">Концепция производительности и масштабируемости Spryker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304098/" target="_blank">Пакет-географ – первая рабочая версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140616/" target="_blank">Доступ к статическим данным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140445/" target="_blank">PHPDocumentor объединился с Docblox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140369/" target="_blank">PHP warning/notice сообщения в JS консоль + секретная кнопка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140351/" target="_blank">«Автопереключение раскладки» в php-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140279/" target="_blank">Разработчики PHP перешли на Git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140234/" target="_blank">Заготовка для сайта (Kohana+Bootstrap+HTML5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140216/" target="_blank">Переопределение функций в PHP 5.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140217/" target="_blank">PHPUnit: Mock объекты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140066/" target="_blank">php и nodejs, разница на пальцах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140012/" target="_blank">Честная генерация DOCX файлов на PHP. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139974/" target="_blank">Немного о хэшах и безопасном хранении паролей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139900/" target="_blank">Мотивационный автопостинг с помощью Twitter API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139878/" target="_blank">Пишем простенький веб-эмулятор терминала на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139739/" target="_blank">Рисуем код из «Матрицы» на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139727/" target="_blank">PHP Unit. Опыт тестирования классов, работающих с Базой Данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139649/" target="_blank">Возможности PHP Reflection</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139479/" target="_blank">Nette PHP Framework: первое знакомство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139239/" target="_blank">Наконец-то вышел php 5.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139115/" target="_blank">The MicroPHP Manifesto</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138933/" target="_blank">Кастомизация Magento с использованием Event/Observer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138666/" target="_blank">Честная генерация DOCX на PHP. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138920/" target="_blank">Автозагрузка в PHP: начали за здравие, а кончили за упокой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138878/" target="_blank">Расширяем возможности PHPMailer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138862/" target="_blank">Много текста про практику работы с PHPUnit/DbUnit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138858/" target="_blank">Скриншоты в облаках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138834/" target="_blank">Вышел первый публичный билд PhpStorm 4.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138771/" target="_blank">Отладка iframe приложения непосредственно в среде vk.com с использованием php + xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138619/" target="_blank">MVC Application: Mail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138563/" target="_blank">Yandex Translate API: PHP и небольшое исследование сервиса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138512/" target="_blank">Файловый менеджер на PHP, с правами, контролем версий и AJAX-ом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138504/" target="_blank">Разбираем HTTP Range по стандарту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138443/" target="_blank">Неочевидное поведение assert</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138350/" target="_blank">Unit-тестирование от начинающего начинающим</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138297/" target="_blank">Определение вхождения IP адреса в диапазон</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138269/" target="_blank">PHP 6 не будет, не осилили</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138223/" target="_blank">Легкий способ начать тестировать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138245/" target="_blank">Создание «API-Centric» Web Application на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138215/" target="_blank">Бэкдор в PHP-фреймворке Horde</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138179/" target="_blank">Расширяем класс Imagick</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138122/" target="_blank">Панель инструментов Xdebug для отладки PHP в Opera</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138102/" target="_blank">Как получить доступ ко всем свойствам объекта, не используя «отражение»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138067/" target="_blank">Определение страны по IP: тестируем скорость алгоритмов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137860/" target="_blank">Массивы моделей в MVC — вкусно и тяжело?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137664/" target="_blank">Почему стоит пользоваться PDO для работы с базой данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137536/" target="_blank">Пишем обработчик ошибок для phpredis</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137459/" target="_blank">Деобфускация PHP кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137296/" target="_blank">Улучшения в htmlspecialchars() в версии 5.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137240/" target="_blank">Автоматическое оповещение читателей о новостях с помощью ВКонтакте. Часть 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137190/" target="_blank">Компоновщик стратегий или объединение Composite+Strategy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137097/" target="_blank">Unit-тестирование в Codeception</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136999/" target="_blank">Не очень честная генерация DOC файлов на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136974/" target="_blank">Upload progress средствами PHP 5.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136835/" target="_blank">Подводный камень в foreach($items as &$item)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136149/" target="_blank">Яндекс.ТвояПогода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136800/" target="_blank">Что нового в PHP 5.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136761/" target="_blank">Автозагрузка классов в PHP с использованием SPL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136606/" target="_blank">Используете ли Вы первый символ подчеркивания для именования private/protected свойств/методов?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136540/" target="_blank">Универсальное чтение ячеек в PHPExcel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136516/" target="_blank">Шаблонизация в PHP при помощи лямбда-функций и замыканий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136477/" target="_blank">Codeception — тестирование по-новому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136371/" target="_blank">DesignPatterns, шаблон Interpreter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135998/" target="_blank">Вышел PHP 5.3.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135798/" target="_blank">Backup Time Machine своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135654/" target="_blank">Эмулируем PEAR DB при работе с MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135619/" target="_blank">Пишем свой блог с фреймворком Fat-Free Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135421/" target="_blank">Красивый вывод изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134916/" target="_blank">Автодокументация PHP в NetBeans 7.01 с использованием phpDocumentor, рассказываем, настраиваем, исправляем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135256/" target="_blank">Вышел PHP 5.4 RC4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135200/" target="_blank">«Правильный» system() для PHP-CLI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134870/" target="_blank">Используем $_COOKIE как $_SESSION</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134833/" target="_blank">Легкая публикация PEAR-пакетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134784/" target="_blank">Работа с памятью (и всё же она есть)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134740/" target="_blank">PHP MongoDB ORM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134717/" target="_blank">Тестирование скорости алгоритмов шифрования в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134683/" target="_blank">Phalanger — Пишем на PHP, компилируем в .Net. Рост производительности?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134620/" target="_blank">Демоны на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134557/" target="_blank">Битовые операции в PHP на примерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134501/" target="_blank">AzaThread — многопоточность для PHP с блэкджеком</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134478/" target="_blank">Автоматическое оповещение читателей о новостях с помощью ВКонтакте. Часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134499/" target="_blank">Обработка критических ошибок в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133990/" target="_blank">COM-автоматизация OpenOffice: Чтение содержимого буфера обмена</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134421/" target="_blank">Наследование шаблонов в PHP без использования сторонних библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134406/" target="_blank">Быстрый роутинг на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134391/" target="_blank">Каким IDE Вы пользуетесь для разработки PHP приложений?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134221/" target="_blank">Синглтоны версии 5.3 в 5.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133910/" target="_blank">Борьба с одновременным перестроением кеша с помощью RED</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133634/" target="_blank">Вышел PhpStorm 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133343/" target="_blank">Авторизация посредством xAuth в Tumblr</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132379/" target="_blank">Решение проблемы авторизации на форумах phpBB 3.0.X через Loginza</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133233/" target="_blank">Простой способ передачи табличных данных из PHP в Excel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133191/" target="_blank">Интеграция JavaScript cookies в CURL-запросы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133093/" target="_blank">Самый простой способ генерации xls в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133072/" target="_blank">Странный $_FILES или «проблема использования синтаксиса массива в полях формы типа файл»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133083/" target="_blank">Ищем неиспользуемые расширения PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133018/" target="_blank">Волшебный кэширующий декоратор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132976/" target="_blank">Функция конвертации stdClass в SimpleXml</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132777/" target="_blank">Внедряем namespace в существующий php-код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132736/" target="_blank">PHP Namespace</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132594/" target="_blank">Ввод в программу иерархического списка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132499/" target="_blank">Русский перевод официальной документации PHP снова стал доступным!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304572/" target="_blank">SuggestBundle или выпадающие ajax списки в Symfony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304536/" target="_blank">Управление действиями процессов. Не превышение лимита RPS (QPS) API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271687/" target="_blank">Httplug — абстрагирование от клиента HTTP для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304354/" target="_blank">PHP-инструменты для японского языка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303348/" target="_blank">Внедрение code style в разработку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/303780/" target="_blank">В чем секрет скорости NodeJS?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304162/" target="_blank">Опрос. Новый тег &lt;?~ $value ?&gt; для HTML-экранирования данных в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/303936/" target="_blank">Как создать свой VPS-хостинг с нуля и начать на нем зарабатывать? Простой биллинг с WooCommerce</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303938/" target="_blank">Работа с OZON (Merchants) API средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/303868/" target="_blank">Отчёт с Symfony Moscow Meetup 2 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132353/" target="_blank">Создание веб-сервиса на базе WSF/PHP с UsernameToken авторизацией и HTTPS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132299/" target="_blank">Что плохого в вашем PHP-коде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132291/" target="_blank">Отладка PHP приложений на удаленном хосте при помощи XDebug и vim в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132137/" target="_blank">Что нового нас ждет в PHPStorm/Webstorm 3.x?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132124/" target="_blank">Пишем модуль uLogin для Kohana 3.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132115/" target="_blank">PHP: Расширенный текучий интерфейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132084/" target="_blank">IoC на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131994/" target="_blank">PHP и Аспектно-ориентированное программирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132004/" target="_blank">RedBeanPHP — еще одна ORM библиотека</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131920/" target="_blank">Защита от спама в phpBB 3 без капчи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131610/" target="_blank">JetBrains снова радует скидками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131082/" target="_blank">Расширение PHP для асинхронного ввода-вывода POSIX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130000/" target="_blank">Traits в php 5.4. Разбираем детали реализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130873/" target="_blank">Интерполяция: рисуем гладкие графики средствами PHP и GD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130831/" target="_blank">CodeSniffer и PhpEd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130597/" target="_blank">Исключение != ошибка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130496/" target="_blank">GTK+ приложение на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130196/" target="_blank">Некоторые функции, которые я использую в своих проектах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129990/" target="_blank">phpBBex — расширенная версия phpBB 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129982/" target="_blank">PHP под С-шным дебаггером: копаемся внутри Zend Engine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129665/" target="_blank">NetBeans 7.1 beta — новое для PHP разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128083/" target="_blank">Smarty vs. Twig: производительность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129489/" target="_blank">Тестирование торговой системы на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129042/" target="_blank">Pinba — мониторим php в реальном времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128182/" target="_blank">Docblox — некоторые нововведения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128275/" target="_blank">Lock-free memcache API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128396/" target="_blank">Параллельные вычисления, класс-обёртка для pcntl_fork()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128271/" target="_blank">YAF — самый быстрый php фреймворк*</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128198/" target="_blank">Знакомимся с PayPal API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127804/" target="_blank">Docblox — система документирования, совместимая с PHP 5.3+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127711/" target="_blank">Iterator, ArrayAccess, Countable: Объект как массив</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127658/" target="_blank">Определение кодировки текста в PHP, часть 2 — биграммы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127569/" target="_blank">Мгновенный поиск в 75 гигабайтах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127529/" target="_blank">JavaScript: обработка include_once/import на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127288/" target="_blank">Визуализация связей внутри класса с помощью GraphViz</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127016/" target="_blank">Pagodabox — облачный хостинг PHP проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126941/" target="_blank">Вышел PHP 5.3.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126857/" target="_blank">PHP 5.3.7 released, но обновление содержит критическую ошибку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126664/" target="_blank">Сертификация PHP 5.3 от Zend</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126737/" target="_blank">Если бы PHP был британским</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126448/" target="_blank">Обработка входящей почты на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126418/" target="_blank">Как избежать коллизий при записи в Memcache из PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126412/" target="_blank">Синхронизация статуса учетной записи LanBilling и RTU class 4&5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126400/" target="_blank">Тестирование приложений методом Fuzzing</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126250/" target="_blank">Практика прохождения собеседований или как я переехал в столицу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125665/" target="_blank">Массивы или Объекты? Хочу коллекции в пхп!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125597/" target="_blank">Пишем PHP extension</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125341/" target="_blank">Новый инструмент перевода документации PHP: edit.php.net</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125348/" target="_blank">Команде переводчиков документации PHP требуется помощь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124933/" target="_blank">Пространства имён + PHPUnit = 100% покрытие тестами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124915/" target="_blank">Runkit + PHPUnit = 100% покрытие тестами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124875/" target="_blank">ООП-обертка для PHP lib_curl</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124654/" target="_blank">Вам нравится писать на PHP?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119294/" target="_blank">MySQLi — примеры, обертка и основные особенности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124245/" target="_blank">Прекращение поддержки расширения MySQL в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124212/" target="_blank">Сравнение MemCache и MongoDb для сетевого кэша</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123967/" target="_blank">Система генерации договоров на PHP с интергацией 1С</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123844/" target="_blank">Импорт сообщений из Твиттера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123560/" target="_blank">HBase + Thrift + PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123022/" target="_blank">PHP 5.4 alpha1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122407/" target="_blank">Обход цикличных ссылок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121921/" target="_blank">Генерация приглашений, похожих на инвайты сайта habrahabr</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122081/" target="_blank">Ребус captcha</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121976/" target="_blank">Лямбда-функции и замыкания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121885/" target="_blank">Используем php-cgi в своих приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121809/" target="_blank">Phing — сборка PHP проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120975/" target="_blank">Visual PHP для Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121029/" target="_blank">Кана-капча на PHP — это просто!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120661/" target="_blank">PDO: сериализация, поздняя инициализация и PHPUnit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120646/" target="_blank">Матановая капча на PHP — это просто!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120615/" target="_blank">Разработка CAPTCHA своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119839/" target="_blank">Моделируем полёт PHP на крыльях Erlang</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120174/" target="_blank">Класс для перевода текста используя сервис Google Translate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119551/" target="_blank">PHP + Word</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119906/" target="_blank">Update JetBrains PhpStorm 2.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119719/" target="_blank">PHP / JSON база данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119590/" target="_blank">Разработка приложений на AMFPHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118269/" target="_blank">.phar — исполняемые PHP-архивы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118237/" target="_blank">Мини-фреймворк своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117688/" target="_blank">Zend PHP 5 Certification Practice Test</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116916/" target="_blank">Тонкости (странности?) работы с интефейсами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116713/" target="_blank">Плагинизация классов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116686/" target="_blank">Задача при собеседовании на работу в один крупный шведский сайт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116607/" target="_blank">MarkHtml</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116586/" target="_blank">Update JetBrains PhpStorm 2.0.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116474/" target="_blank">Установка расширений OCI8 и PDO_OCI для PHP5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116116/" target="_blank">yuki-html, простой html помощник</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116038/" target="_blank">ICQ баг-информер на PHP + ActiveMQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116030/" target="_blank">Какой PHP фреймворк вы используете? И почему?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115983/" target="_blank">DoS сервера при хранении сессий в Memcached простым запросом с Cookie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115815/" target="_blank">wiki.php.net скомпрометирован</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115665/" target="_blank">Релиз PHP 5.3.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115394/" target="_blank">Применение алгоритмов нечеткого поиска в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115300/" target="_blank">Локализация интерфейса сайта с использованием PHP, Smarty и Gettext</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115219/" target="_blank">Бесплатная Zend Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115159/" target="_blank">Netbeans IDE 7.0 Beta 2 for PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115037/" target="_blank">Отправляем SMS со своего номера Мегафон без GSM-аппарата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114899/" target="_blank">Порядок выполнения тернарного оператора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114666/" target="_blank">Заметки об архитектуре или Интерпретатор Forth на PHP 5.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114385/" target="_blank">Автоматическая фильтрация комментариев в Livejournal при помощи XML-RPC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303484/" target="_blank">Как мы написали helpdesk (часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303678/" target="_blank">Макросы Zend обхода циклов (HashTable Iteration)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303572/" target="_blank">Пишем расширение под PHP (7.0.7) без знаний о С/C++ и как это вообще работает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303578/" target="_blank">Создание блога на Symfony 2.8 lts [ Часть 6]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/posthawk/blog/303098/" target="_blank">Создание блога на Symfony 2.8 lts [ Часть 5.1]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303524/" target="_blank">Опыт перехода с Sublime на Vim</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303406/" target="_blank">Несколько полезных приемов для разработки на Yii 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303426/" target="_blank">Отладка php функций с помощью phpdbg, как альтернатива Xdebug через IDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303366/" target="_blank">REST API на Symfony, FOSRestBundle + GlavwebDatagridBundle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cleantalk/blog/302870/" target="_blank">Разработка чат-ботов для Telegram и Slack c помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114374/" target="_blank">Oбучающий пакет PHP on Windows and SQL Server Training Kit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114354/" target="_blank">PHP на вершине списка в категории «Работа» на Freelancer.com за 2010 год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113872/" target="_blank">Автоматическое тестирование и базы данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113715/" target="_blank">UTF-8 в PHP. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113503/" target="_blank">Первые шаги в разработке Flash игры. Делаем Backend на AMFPHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113253/" target="_blank">Шпаргалка для PHP: FALSE, NULL и значения, с ними связанные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113220/" target="_blank">Графический информер Яндекс.Деньги для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112770/" target="_blank">eBay API: Первые шаги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112914/" target="_blank">Прячем текст в MP3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112809/" target="_blank">Генерация изображения с waveform из mp3 файлов с помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112637/" target="_blank">По следам статьи «Сборник советов и фактов по оптимизации PHP-скриптов»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112474/" target="_blank">Сборник советов и фактов по оптимизации PHP-скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112402/" target="_blank">Самые быстрые настройки для PHP-скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112146/" target="_blank">Программирование в PHP для командной строки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111977/" target="_blank">Автоматизированная проверка PHP кода при комитах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111979/" target="_blank">HTML в PDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111402/" target="_blank">Бикубическая интерполяция, теория и практическая реализация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111254/" target="_blank">Релиз PHP 5.2.17 и 5.3.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111300/" target="_blank">FuelPHP — фреймворк с полным баком</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111213/" target="_blank">Уязвимость в php 5.3.* 32bit — float</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111132/" target="_blank">Автоматизация разработки API сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111006/" target="_blank">Путь обучения: развертывание PHP приложений на IIS (материалы на русском)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110767/" target="_blank">Жрецы программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110727/" target="_blank">PHP, JavaScript, RPC и другие страшные слова</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110422/" target="_blank">PHP + BDD = Behat, или сказ о чудо-библиотеке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110178/" target="_blank">Вышел PHP 5.2.16 и конец поддержки 5.2.x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110112/" target="_blank">Нокогири: парсинг HTML в одну строку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109761/" target="_blank">Вышли PHP 5.3.4 и PHP 5.2.15</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109713/" target="_blank">Сделай сам ACL. История разработки и написания несложной системы контроля доступов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109475/" target="_blank">Входите! Аутентификация без логина и пароля, «запомнить меня»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109454/" target="_blank">Входите! Аутентификация без логина и пароля, v2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109421/" target="_blank">Входите! Вход без логина и пароля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109116/" target="_blank">Тупая интеграция phpbb3 с любым сайтом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108475/" target="_blank">Фильтры: смерть регуляркам и правильная валидация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108469/" target="_blank">Вышел Netbeans 7.0 beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108274/" target="_blank">Memcached и PHP ликбез</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108190/" target="_blank">Вышел Smarty 3 Final. Что нового?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108096/" target="_blank">PHPText — простая локализация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108006/" target="_blank">ООП практикум в PHP5: Анализ ошибок, преимуществ и недостатков двух различных реализаций примесей в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107945/" target="_blank">Определение кодировки текста в PHP — обзор существующих решений плюс еще один велосипед</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107685/" target="_blank">Алгоритм популярности пользователя на сайте — «Нестандартный подход к стандартным вещам»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107810/" target="_blank">Как подружить PHP с консолью Google Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107682/" target="_blank">ООП Практикум PHP5: эмуляция примесей (mixin) в языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107261/" target="_blank">Немного о прелестях NetBeans + php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106426/" target="_blank">Реализация паттерна Observer средствами PHP 5.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106075/" target="_blank">Build Your First PHP for Android Application</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105826/" target="_blank">Как я спасал сайт apachedev.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105887/" target="_blank">Подход к оптимизации приложения на примере популярной CMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105895/" target="_blank">Непрерывная интеграция и TeamCity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105610/" target="_blank">runkit 1.0.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105041/" target="_blank">jQuickForm = генератор форм на PHP (большое обновление)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104811/" target="_blank">phpDaemon и runkit: новый уровень</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104724/" target="_blank">Генерирование баннеров-заглушек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103823/" target="_blank">Новый Redis 2.0 и Rediska 0.5.0!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104106/" target="_blank">Фреймворк Limb, версия 2010.1 RC2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104069/" target="_blank">Производительность функции unserialize</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104094/" target="_blank">База изображений в любых форматах и разрешениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103834/" target="_blank">Вложенные массивы и Magic Methods</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103699/" target="_blank">Getting Started with MongoDB and PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103465/" target="_blank">Функции наносят ответный удар</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102598/" target="_blank">Несколько других советов для PHP-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102444/" target="_blank">Несколько советов для PHP-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102401/" target="_blank">QuickAdm — быстрые универсальные админки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102352/" target="_blank">Форматирование телефонных номеров на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102220/" target="_blank">Facing refucktoring</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102189/" target="_blank">Smarty против&nbsp;XSLT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101229/" target="_blank">Scalar type hints в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100750/" target="_blank">Отправляем SMS.ru с удобством</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100726/" target="_blank">Php + Cache + Tags = phpCacheTag</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100137/" target="_blank">Правильная работа с исключениями в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99858/" target="_blank">Релиз PHP 5.3.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99431/" target="_blank">Правильная обработка ошибок в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98185/" target="_blank">OCaml и PHP — эзотерика для вашего удобства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98862/" target="_blank">Создание расширений PHP: Введение в PHP и Zend</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98832/" target="_blank">Непрерывная интеграция: Hudson + PHPUnit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98837/" target="_blank">Проверка счета Киевстар модема в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98752/" target="_blank">Фильтруй базар: пишем простой и функциональный фильтр данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98642/" target="_blank">13 антисоветов разработчику, желающему написать хороший веб-сайт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98496/" target="_blank">Возможно, баг в PHP, возможно фича…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98327/" target="_blank">Лабы по физике на php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97634/" target="_blank">Сторожевой пёс следит за вами (мониторинг хостинга)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96726/" target="_blank">Трансляция конференции по PHP фреймворку Symfony в Минске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96568/" target="_blank">Creating Scalable Vector Graphs with PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96291/" target="_blank">Интерактивная консоль PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95984/" target="_blank">Медленные и/или ресурсоёмкие задачи в коде: отложенные задания, очереди, задачи с ручной обработкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95656/" target="_blank">Ловля бага #52001 в PHP 5.3: указатели и неициализированные переменные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95595/" target="_blank">Интересный баг PHP 5.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95499/" target="_blank">Десктопные клиент-серверные приложения на PHP – SiteFusion</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95335/" target="_blank">Передача аргументов функции по имени в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94972/" target="_blank">Аутичный onPHP: обзор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94908/" target="_blank">Добавление поддержки PHP 5.2 в XAMPP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94714/" target="_blank">PHP type hinting — строгое или мягкое?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91014/" target="_blank">phpDaemon: хорошие новости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81831/" target="_blank">О midi-файлах и о PHP, как инструменте повседневного программирования на живом примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92518/" target="_blank">Авторизация через ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92008/" target="_blank">Удобное кэширование в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91777/" target="_blank">Обеспечение качества программного продукта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90487/" target="_blank">Параллельный импорт данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90052/" target="_blank">Версионирование структуры БД в MySQL: MySQL Migration with PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88966/" target="_blank">Пасхальные яйца в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/303292/" target="_blank">В эту пятницу пройдет 7-я конференция сообществ DevConf 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303172/" target="_blank">Разберем, что такое Source-Query</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/303130/" target="_blank">PHP-Дайджест № 87 – интересные новости, материалы и инструменты (29 мая – 12 июня 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303116/" target="_blank">Подготовка к собеседованиям по PHP с использованием тестов (phpt) из исходников PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303114/" target="_blank">Создание блога на Symfony 2.8 lts [ Часть 5]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303108/" target="_blank">PHPixie Social — простая интеграция с соцсетями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302942/" target="_blank">Руководство по PHP7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302944/" target="_blank">Релиз CleverStyle Framework 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302954/" target="_blank">Уменьшаем боль в навигации приложения на Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302902/" target="_blank">Пара слов о REST API на Symfony в связке FOSRestBundle + JMSSerializerBundle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89742/" target="_blank">Старичок PHPClasses.org сделал подтяжку лица</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89581/" target="_blank">PHPUnit. Часть 04 Тестовые окружения (Fixtures)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89298/" target="_blank">СУБД на PHP — реально! Представляем MooSQL!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89240/" target="_blank">Пишете ли вы Unit-тесты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89175/" target="_blank">PHPUnit. Часть 03 Написание тестов для PHPUnit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88666/" target="_blank">Библиотека классов для работы со службой «API Яндекс.Фотки»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87922/" target="_blank">PHPUnit. Автоматические тесты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87815/" target="_blank">Pear Channel @ ( Google Code || SourceForge )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87093/" target="_blank">Одноврéменно || Одновремéнно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86940/" target="_blank">Last.fm Scrobbling</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85948/" target="_blank">Красивые и правильные даты на любом языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85852/" target="_blank">Singleton и Late static binding</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85556/" target="_blank">Zend Framework 2.0 branched</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85092/" target="_blank">Сборка и запуск HipHop-PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84640/" target="_blank">JetBrains PhpStorm (AKA WebIDE) — публичная сборка 94.335</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83849/" target="_blank">«Improve your… Google?»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83506/" target="_blank">Организация уникальных процессов — ScriptAlone спешит на помощь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82716/" target="_blank">Facebook создаёт компилятор PHP?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82181/" target="_blank">Кириллица в именах переменных и функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82075/" target="_blank">Рекомендации друзей для социальных сетей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82005/" target="_blank">Импорт записей из RSS в ЖЖ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81979/" target="_blank">Новый PHP-мануал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81783/" target="_blank">Горячая замена кода (code hot swapping) в РНР</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81514/" target="_blank">Делаем фильтр от спама для почты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80431/" target="_blank">DumPHPer — Advanced PHP var dumper или замена var_dump</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81007/" target="_blank">Рисуем координаты на карте с помощью PHP + GDLib</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80955/" target="_blank">Алгоритм коллаборативной фильтрации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79377/" target="_blank">phpDaemon — фреймворк асинхронных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80110/" target="_blank">Подробнее об анализаторе исходного кода PHP Depend</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80108/" target="_blank">Создание модуля для Magento — часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79690/" target="_blank">JetBrains WebIDE — Предложения и пожелания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79560/" target="_blank">Пишем свой рейтинг популярных записей русскоязычных блогов на базе Яндекс.API, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79021/" target="_blank">Релиз PHP 5.2.12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78774/" target="_blank">Пишем свою реализацию сессий для обработки мертвой сессии перед зачисткой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78210/" target="_blank">Профилирование PHP-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78003/" target="_blank">Magento. Пишем свой модуль. Добавляем CAPTCHA и дополнительные поля в регистрацию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78068/" target="_blank">phpUnderControl 0.5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78050/" target="_blank">SignalsyMQ — простая и быстрая очередь сообщений на PHP+Redis (и немножко Zend Framework)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77902/" target="_blank">Какой дебаггер для PHP вы используете и почему?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77542/" target="_blank">Notice: Undefined variable. Допустимо?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77481/" target="_blank">Отвёртка для выражений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77282/" target="_blank">PHP closures и передача аргументов по ссылке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76890/" target="_blank">Иной — PHPTAL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76759/" target="_blank">Вышел SmartyPDT 0.9.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76731/" target="_blank">Текст любой ценой: PPT. Дубль второй</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76622/" target="_blank">прикручиваем плагины от Idea к WebIde</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76311/" target="_blank">Поиск по сайту на основе Yandex.XML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76033/" target="_blank">Текст любой ценой: PPT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76021/" target="_blank">Перевод: Шаблонизаторы в PHP — подведение итогов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75901/" target="_blank">Перевод: Шаблонизаторы в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75817/" target="_blank">Вышел долгожданный PHP 5.3.1 стабильный релиз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75776/" target="_blank">PHP, MS SQL Server и UTF-8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75696/" target="_blank">PHP Extension: тонкости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75445/" target="_blank">PHP модуль — это всё ещё просто. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75454/" target="_blank">Почти настоящая многопоточность средствами php 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75388/" target="_blank">PHP модуль — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75310/" target="_blank">Вот он какой, Doctrine 2.0 (Приурочено к релизу Doctrine 2.0 Alpha 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75166/" target="_blank">Инструменты для визуализации логов профайлера xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75014/" target="_blank">Object-oriented PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74643/" target="_blank">История одного бага или почему следует знать не только РНР</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74573/" target="_blank">Работаем с Google Protocol Buffer в РНР</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74176/" target="_blank">JetBrains WebIDE — публичная сборка #701 / немного о ZendCon'09 / кое что о неочевидных возможностях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74162/" target="_blank">Lagger — обработка ошибок и отладка в PHP с закрытыми глазами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73969/" target="_blank">Aptana 2.0 Released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73945/" target="_blank">RAR: создание store-архива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73665/" target="_blank">PHP: Реализация формальных грамматик</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73637/" target="_blank">RAR: получение списка файлов без PECL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73589/" target="_blank">Как обрабатывать Fatal Error в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73336/" target="_blank">Вращение объектов в 3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72745/" target="_blank">Текст любой ценой: WCBFF и DOC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72731/" target="_blank">DaBase — не очередная ORM для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72241/" target="_blank">Динамический CSS?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72144/" target="_blank">TwittReader – твитты на вашем сайте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72175/" target="_blank">VS wizard: PHP extension</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72150/" target="_blank">Как использовать пространства имён в PHP, Часть 3: Ключевые слова и автозагрузка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72097/" target="_blank">Как использовать пространства имён в PHP, Часть 2: импортирование, псевдонимы и правила разбора имён</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72033/" target="_blank">Как использовать пространства имен в PHP, Часть 1: Основы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71998/" target="_blank">JetBrains WebIDE — публичная сборка #500</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71097/" target="_blank">JetBrains WebIDE — четвертая публичная сборка (#470)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71076/" target="_blank">Перевод даты в неименованный часовой пояс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70808/" target="_blank">Список полезных PHP классов и библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70558/" target="_blank">PHP 5.3: DoS — это не баг, а фича</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70147/" target="_blank">Хранение файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70119/" target="_blank">Текст любой ценой: RTF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70046/" target="_blank">PHPUnit+Netbeans</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70026/" target="_blank">JetBrains WebIDE — третья публичная сборка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69954/" target="_blank">Затмение, лисичка и xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69744/" target="_blank">DooPHP — молодой и очень высокопроизводительный PHP фреймворк!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69616/" target="_blank">Простейшая генерация odt файла из существующего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69568/" target="_blank">Текст любой ценой: PDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69417/" target="_blank">Текст любой ценой: DOCX и ODT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69175/" target="_blank">Сравнительный обзор Microsoft SQL Driver for PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68571/" target="_blank">Continuous integration для php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68569/" target="_blank">Список полезных инструментов для php разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68263/" target="_blank">Использование шаблонов SMARTY с PEAR HTML_QuickForm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68093/" target="_blank">Пишем свой Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67963/" target="_blank">Собеседование. Сегодня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67832/" target="_blank">Yii: устройство ActiveRecord и Шардинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67797/" target="_blank">Сравнение Yii с CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67490/" target="_blank">PHPConf 2009 приглашает докладчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302844/" target="_blank">Готовим простой блог на микросервисах, пишем свой микрофреймворк на php и запускаем все на Docker с примерами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/easla/blog/302786/" target="_blank">Прикручивание диаграммы Гантта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302602/" target="_blank">Создание блога на Symfony 2.8 lts [ Часть 4]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302590/" target="_blank">Запускаем очереди и планировщик Laravel в среде Elastic Beanstalk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302442/" target="_blank">Deployer — удобный и гибкий деплой приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302438/" target="_blank">Создание блога на Symfony 2.8 lts [ Часть 3 ]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302390/" target="_blank">PHP 7.1: Грядущие изменения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302150/" target="_blank">Что делать если Instagram не дал доступ к API?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/302104/" target="_blank">PHP-Дайджест № 86 – интересные новости, материалы и инструменты (15 – 29 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302056/" target="_blank">Telegram Site Helper 2.0 — чат помощник для сайта на основе Telegram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67366/" target="_blank">PHP Manual с комментариями пользователей в chm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67365/" target="_blank">Получаем информацию по продуктам от Амазона через API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67307/" target="_blank">Похапе мануал обновился</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67111/" target="_blank">Автоматическая загрузка файлов на Яндекс.Диск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67180/" target="_blank">Работа с http через неблокируемые сокеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67117/" target="_blank">Сущностей много — код один</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67043/" target="_blank">Множественная загрузка файлов из архива с поддержкой RANGE запросов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67092/" target="_blank">Работаем с банковскими (рабочими) днями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66887/" target="_blank">JetBrains открыла программу EAP для Web IDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66623/" target="_blank">Скрипт для быстрого обзора информации о жёстких дисках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66160/" target="_blank">Установить время выполнения консольной команды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65573/" target="_blank">Переход хостеров на php 5.3, статистика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65570/" target="_blank">XML-шлюз своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64938/" target="_blank">phpFastCGI: настоящий FastCGI для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64840/" target="_blank">Полноценные коллекции в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64272/" target="_blank">Как сделать свой сервис временной почты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64101/" target="_blank">Небольшая программа на PHP-GTK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64078/" target="_blank">Phemto и Паттерн Dependency Injection. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64061/" target="_blank">Phemto и Паттерн Dependency Injection. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63926/" target="_blank">Переход к PHP 5.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63585/" target="_blank">Контроль версий структуры базы данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63118/" target="_blank">C#-like cобытия для PHP. Reflection, closures…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62974/" target="_blank">Вышел PDT 2.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62965/" target="_blank">Делаем скриншоты сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62863/" target="_blank">GOTO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62550/" target="_blank">Действительно умные сессии и авторизация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62475/" target="_blank">Визуальный PHP-рефлектор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62452/" target="_blank">Вышел PHP 5.2.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62412/" target="_blank">Умные сессии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61961/" target="_blank">Zend Studio for Eclipse 7.0 EA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61842/" target="_blank">Превентивная защита ваших и не ваших скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61710/" target="_blank">PHPUnit и его Database Extension. Беглый взгляд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61646/" target="_blank">С днем рождения, PHP!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61429/" target="_blank">allow_url_fopen на виртуальном хостинге: добро или зло?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61309/" target="_blank">Обратимое шифрование текста — метод «Двойной квадрат»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61215/" target="_blank">Как стать Zend PHP 5 Certified Engineer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61008/" target="_blank">Нюансы сериализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60561/" target="_blank">Smarty в управляемой представлениями модели</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60443/" target="_blank">PHP мануал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59982/" target="_blank">phpThread: нити в PHP? Запросто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59876/" target="_blank">PHP 5.3: обзор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59812/" target="_blank">SOAP, генерация прокси класса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59254/" target="_blank">Объединяем twitter.com и vkontakte.ru (php — версия)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59248/" target="_blank">Загрузка картинок на стену ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58815/" target="_blank">Информация о встроенных классах и функциях из командной строки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58702/" target="_blank">Исключения. Где я их использую</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58687/" target="_blank">Как правильно использовать исключения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58560/" target="_blank">Тест PHP-функции preg_match</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57984/" target="_blank">IMemcacheClient: нереляционность как религия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57142/" target="_blank">Dklab_Cache: тэги в memcached, namespaces, статистика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57000/" target="_blank">Студент отстранен от занятий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56588/" target="_blank">Прописываем dpi в PNG с помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56445/" target="_blank">новый Дебагер для Smarty: теперь доступен дебагер от Quicky</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56289/" target="_blank">Юнит-тестирование в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56240/" target="_blank">Оптимизация загрузки статических данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48723/" target="_blank">Клиентские и CGI программы на PHP с едиными переменными окружения в bash_profile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55926/" target="_blank">Простое сравнение изображений с помощью php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55846/" target="_blank">PHP_Exceptionizer: преобразование E_NOTICE в исключения (Exception)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55207/" target="_blank">Ещё один php шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55291/" target="_blank">NetBeans 6.5: бесплатное и быстрое IDE для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54882/" target="_blank">Моделируете ли вы классы (UML), прежде, чем приступить к разработке? (только PHP пожалуйста!)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54785/" target="_blank">ShortXSLT: упрощенный синтаксис для XSLT с операторами вставки, if, else и т. д.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54631/" target="_blank">Небольшая разминка мозгов (или quine на php)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53925/" target="_blank">Превью и Resize картинок в html</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53249/" target="_blank">Серия 50+ советов по оптимизации PHP кода. «За» и «против» такой оптимизации. Первые 10 советов.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53210/" target="_blank">PHP — получение суммы прописью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53126/" target="_blank">5.2.9 Release</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52350/" target="_blank">Zend выпустила бета-версию собственной серверной сборки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52153/" target="_blank">Загрузка последнего сообщения из Twitter-блога определенного пользователя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51907/" target="_blank">расширение zip, небольшой хинт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51887/" target="_blank">Русский без роботизма, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51485/" target="_blank">Загрузка файлов и open_basedir: почему надо пользоваться стандартными функциями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51442/" target="_blank">Ограничение скорости скачивания файлов средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51438/" target="_blank">Вертикальный текст</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51072/" target="_blank">Статья по мотивам моего выступления на PHPConf. Общий обзор Flex-а и связки PHP&Flex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50846/" target="_blank">Проверка файла на наличие / существование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50341/" target="_blank">Сравнение PHP-фреймворков: CakePHP, CodeIgniter и Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50487/" target="_blank">PHP Шаблонизатор Quicky версия 0.5.x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50288/" target="_blank">Пишем Referrer tracker: мал да удал, с хранимыми процедурами MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50216/" target="_blank">PHP + Twitter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50095/" target="_blank">Отправка комментариев пользователей сайта вам на Jabbеr</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49553/" target="_blank">Определение периодов времени по текущей дате</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49320/" target="_blank">Проверка минимальной версии PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48726/" target="_blank">Отправить POST через file_get_contents()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48655/" target="_blank">Dwoo как альтернатива Smarty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48086/" target="_blank">Осторожность с датой не помешает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48070/" target="_blank">Сравнение PHP IDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48052/" target="_blank">Вышел Eclipse PDT 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47982/" target="_blank">Исследование совместимости Zend Framework и Quercus PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47785/" target="_blank">PHP и магия ООП</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47471/" target="_blank">Quicky обзавелся своим «домом»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47212/" target="_blank">Smarty обновился до версии 2.6.22</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46783/" target="_blank">В защиту PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46553/" target="_blank">Yii Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46504/" target="_blank">Удобное профилирование в Kcachegrind</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46489/" target="_blank">PHP 5.2.8 Released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46444/" target="_blank">Прекращено распространение PHP 5.2.7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46374/" target="_blank">Веб-сервисы в теории и на практике для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46353/" target="_blank">Контроль скалярных типов в PHP 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317950/" target="_blank">Yii2: Делаем модуль для управления модулями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317894/" target="_blank">Alameda, Bower и NPM интеграция в CleverStyle Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314966/" target="_blank">Symfony — комбинируем GridFS файлы с ORM сущностями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/317700/" target="_blank">Как мы уже 4 года выживаем в условиях двух релизов в день</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317564/" target="_blank">Синтаксический анализ текстов с помощью SyntaxNet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316836/" target="_blank">Как не нужно использовать паттерн Repository</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317458/" target="_blank">Создание web приложения на PHP с иcпользованием Firebird и Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317562/" target="_blank">Пример создания практичной Debug панели в Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317498/" target="_blank">Копилка знаний для PHPixie — Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317504/" target="_blank">Очередная статья про Docker для новичка [nginx + php-fpm + postgresql + mongodb]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302032/" target="_blank">Создание блога на Symfony 2.8 lts [ Часть 2 ]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302000/" target="_blank">Настройка Laravel relationships — подсчет комментариев (вольный перевод)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/301828/" target="_blank">DevConf:: Хакатон по Yii в ТАСС 18-19 июня 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301822/" target="_blank">Websocket в продакшене</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/301806/" target="_blank">DevConf::PHP 2016 — заканчивается финальное голосование по докладам секции, успей отдать свой голос до 31 мая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301760/" target="_blank">Создание блога на Symfony 2.8 lts</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/301744/" target="_blank">Приглашаем на Symfony Moscow Meetup 2 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301648/" target="_blank">Dependency Injection контейнер от PHPixie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301478/" target="_blank">PHP, статические переменные внутри методов класса и история одного бага</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/301004/" target="_blank">Неизменяемые объекты в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46032/" target="_blank">RESTful PHP — 5 простых советов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45910/" target="_blank">PHP, PREG и UTF-8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45865/" target="_blank">Узнаем оператора и регион мобильного телефона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45651/" target="_blank">Споры о шаблонизаторах: троллинг или умные мысли?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45482/" target="_blank">HTTP_StaticMerger — автоматическая «склейка» CSS- и JS-файлов для быстрой загрузки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45418/" target="_blank">Используете ли вы автогенерацию кода на основе UML-диаграмм?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45375/" target="_blank">разбираем файлы MS-office</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45337/" target="_blank">Обзор шаблонизатора Quicky: Производительность и Гибкость</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45311/" target="_blank">MACRO — гибкий PHP шаблонизатор, с человеческим «лицом»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45292/" target="_blank">PhpMathPublisher — математические формулы в HTML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45259/" target="_blank">Нативный шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45258/" target="_blank">приемы работы с шаблонизатором</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45016/" target="_blank">Функция echo в PHP может выполняться более 1 секунды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45041/" target="_blank">Работа с ANSI консолью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44906/" target="_blank">Кеширование обычными средствами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44615/" target="_blank">Безопасная загрузка изображений на сервер. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44610/" target="_blank">Безопасная загрузка изображений на сервер. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44298/" target="_blank">Функции для работы с объектами работают и с классами (PHP 5.2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44295/" target="_blank">symfony — первое знакомство, рассуждения и впечатления.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43744/" target="_blank">Пишем на картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43728/" target="_blank">Отладка скриптов в Zend Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43637/" target="_blank">распараллеливаем выполнение задач с помощью stream_select()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43511/" target="_blank">Делаем вебдванольные превьюшки с ImageMagick</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43489/" target="_blank">Отрицательная сторона передачи значений по ссылкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43231/" target="_blank">Разделитель в пространствах имен в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42810/" target="_blank">Вышел alpha-релиз Smarty 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42613/" target="_blank">Анализатор логов PHP-на-Apache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42158/" target="_blank">Закачка ролика на ruTube с использованием cURL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41812/" target="_blank">О стиле программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41722/" target="_blank">Компоненты Zend Framework отдельно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41702/" target="_blank">Cakephp Sphinx behavior</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41212/" target="_blank">php|architect снижает цены на подписку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40921/" target="_blank">Zend Studio for Eclipse V6.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40491/" target="_blank">Индустрия it-велосипедов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40545/" target="_blank">Еще одна реализация многопоточности на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40432/" target="_blank">Многопроцессовые демоны на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40336/" target="_blank">Smarty-плагин для Gravatar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40270/" target="_blank">Delphi for PHP 2.0 — радость и разочарование.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40245/" target="_blank">Эмуляция многопоточности в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40020/" target="_blank">phpMyAdmin 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39969/" target="_blank">Один из лучших классов для загрузки файлов на сервер. (PHP)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39739/" target="_blank">Контроллеры, основанные на механизмах рефлексии.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39338/" target="_blank">Getters/Setters getting real</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39326/" target="_blank">Еще немного интересных возможностей.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39034/" target="_blank">Интересные возможности языка PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38754/" target="_blank">Конкатенация строк — два способа.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38739/" target="_blank">От инфо-окна к БД: сохраняем информацию, введенную пользователем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38675/" target="_blank">CakePHP 1.2 Containable Behavior</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38416/" target="_blank">Мои плагины для Smarty. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38639/" target="_blank">Использование выражений в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38592/" target="_blank">Делаем PHP строго типизированным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38584/" target="_blank">Перечисления в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38525/" target="_blank">GenericObject</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38444/" target="_blank">Советы для разработчиков CMS и фреймворков на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38448/" target="_blank">Использование PHP и MySQL для создания KML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38370/" target="_blank">Работа с веб-серверами на php посредством SOAP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38359/" target="_blank">Что PHP может узнать о браузере посетителя?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38283/" target="_blank">Мои плагины для Smarty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38261/" target="_blank">Особенности хранения сессий PHP в memcached</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38318/" target="_blank">Стили кодирования и рекомендации по написанию чистого кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38290/" target="_blank">Использование связки из PHP и MySQL совместно с Google Maps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38214/" target="_blank">Стандарты кодирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38105/" target="_blank">Выдаем тикеты при кешировании</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38097/" target="_blank">О пользе namespace'ов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37962/" target="_blank">Наследование шаблонов в Smarty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38007/" target="_blank">Ошибки начинающих PHP разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37913/" target="_blank">Парсим выдачу Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37833/" target="_blank">Ваш стиль программирования (разумно собрать статистику)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37831/" target="_blank">Ваш стиль программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37753/" target="_blank">Расширение файла средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37610/" target="_blank">Что такое полиморфизм на самом деле. В PHP он тоже существует.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37576/" target="_blank">Полиморфизм для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37402/" target="_blank">PHP класс для работы с Яндекс.XML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37265/" target="_blank">Хватит изобретать велосипеды!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37246/" target="_blank">PHP-5.3, phar extension — нужен ли он по дефолту?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37206/" target="_blank">session_write_close() может стать твоим другом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/36932/" target="_blank">Яндекс поиск на вашем сайте.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/36796/" target="_blank">ElePHPant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/36784/" target="_blank">Zend Studio for Eclipse 6.0.1.1rc1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30829/" target="_blank">Когда критическая ошибка приносит радость…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30803/" target="_blank">Видео с PHPConf 2008 — ~20 часов видео</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30789/" target="_blank">Выпущен последний релиз PHP 4 — PHP 4.4.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30675/" target="_blank">Шаблонизаторы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30659/" target="_blank">Абстракция БД</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30513/" target="_blank">smarty перестал дружить с php.net?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30426/" target="_blank">PHP 5.3 alpha</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30399/" target="_blank">Обработка ошибок и исключений в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30353/" target="_blank">Пишем свой XML-парсер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30234/" target="_blank">Производительность кодирования и декодирования serialize и json — часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30210/" target="_blank">Производительность кодирования и декодирования serialize и json</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30126/" target="_blank">Лямбда вычисления и замыкание</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29345/" target="_blank">Обязанности PHP-программистов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29301/" target="_blank">Защита PHP скриптов от копирования — это возможно?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29208/" target="_blank">Работа с датой. PHP5.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29020/" target="_blank">Конвертация базы из Windows1251 в UTF8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28752/" target="_blank">Фонетический поиск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28614/" target="_blank">PHP + Ajax = Web explorer?!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28537/" target="_blank">Отладка PHP средствами Firebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28464/" target="_blank">Интерфейс Javascript &lt; == &gt; PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28418/" target="_blank">Время жизни сессии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/301114/" target="_blank">DevConf 2016: Интервью с одним из разработчиков Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301152/" target="_blank">Гибкая конфигурация c PHPixie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/300952/" target="_blank">Многопоточные вычисления в PHP: pthreads</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/300832/" target="_blank">PHP-Дайджест № 85 – интересные новости, материалы и инструменты (24 апреля – 15 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283136/" target="_blank">Пакет-географ или библиотека, которая прекрасно знает географию и говорит на разных языках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/283468/" target="_blank">DevConf-2016: программа мастер-классов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/283340/" target="_blank">DevConf-2016: программа конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283302/" target="_blank">Обновление PHP до 7.0.6 может «сломать» ваш код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283222/" target="_blank">Доступ к базе данных Firebird из YII2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282844/" target="_blank">Entity “фреймворк” для PHP из одного класса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28151/" target="_blank">Каптча 3d</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28019/" target="_blank">Моя реализация локализации интерфейса в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27999/" target="_blank">Вся правда о шаблонизаторах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31617/" target="_blank">Intrusion Detection For PHP Applications With PHPIDS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27853/" target="_blank">Сравнение скорости PDO, ADOdb, MDB2, Zend_Db, ADOdb Lite и DbSimple</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27791/" target="_blank">Пространство имён в php 5.3 и php 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27437/" target="_blank">Вышел релиз eZ Components 2008.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27378/" target="_blank">Автоматическое определение языка произвольного текста на РНР — библиотека PHPLangautodetect</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26581/" target="_blank">Безопасность в PHP — Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26580/" target="_blank">Что нового я узнал на PHPconf 2008</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26577/" target="_blank">Особенности условных конструкции со строками в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26518/" target="_blank">PHP mail под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35495/" target="_blank">Какой PHP-фреймворк Вы используете в своих проектах?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25742/" target="_blank">Новая версия редактора Rapid PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25486/" target="_blank">IP География</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25296/" target="_blank">Установка memcached под Windows за 5 минут (php5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25295/" target="_blank">Установка memcached под Windows за 5 минут (php5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25059/" target="_blank">Первая альфа-версия ezComponents 2008.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24159/" target="_blank">Нужен ли в PHP полноценный type hinting?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24148/" target="_blank">Вопросы авторам PHP на PHPConf 2008 29-30мая в Москве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24038/" target="_blank">Eval или include?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23619/" target="_blank">PHP — ООП или процедурный подход</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35388/" target="_blank">Как много Вы зарабатываете в месяц?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23268/" target="_blank">А так ли нужен static?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31505/" target="_blank">Debugging PHP applications with xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23119/" target="_blank">Позднее статическое связывание в PHP (Часть II: Практика)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23066/" target="_blank">Позднее статическое связывание в PHP (Часть I)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22951/" target="_blank">Эхо или печать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22881/" target="_blank">Страшные сказки про PHP5, рассказанные на ночь…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22799/" target="_blank">40 советов по оптимизации вашего PHP-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35366/" target="_blank">Используете ли вы интерфейсы (… implements...) в PHP5 (Навеяно предыдущим опросом)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22750/" target="_blank">Делаем свой webfile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35363/" target="_blank">Используете ли вы множественное наследование интерфейсов в PHP?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22583/" target="_blank">frontier — фреймворк для php 5.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22497/" target="_blank">Фрагментарное кэширование в MVC веб-фреймворках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22389/" target="_blank">PHP 5.3. Что нас ожидает?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22343/" target="_blank">CakePHP: Добавляем «каменты» в блог.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22335/" target="_blank">Принципы создания портала с легкой встройкой дизайна на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21955/" target="_blank">Несколько полезных сайтов-каталогов со скриптами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21951/" target="_blank">Посоветуйте систему полнотекстового поиска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21918/" target="_blank">Сессии — всегда ли они нужны?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35343/" target="_blank">Сессии – что лучше?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31468/" target="_blank">Profiling PHP Applications With xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21854/" target="_blank">Zend Framework 1.5.0 уже не beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21812/" target="_blank">Тестовое задание для PHP разработчика на испытательном сроке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21681/" target="_blank">Собеседования на должность PHP разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31463/" target="_blank">Tracing PHP Applications with xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21376/" target="_blank">try… catch VS if…else. Что, когда и почему?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21357/" target="_blank">Методы доступа. Наиболее популярные ситуации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21353/" target="_blank">PHP и ООП. Совмещаем \«несовмещаемое\»…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21329/" target="_blank">Использование Mapper для разбора рекордсетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31452/" target="_blank">Introducing xdebug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31446/" target="_blank">PHP Performance Series: Caching Techniques</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20784/" target="_blank">Копирование из потока — сравнение различных способов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20738/" target="_blank">Стираю языковые барьеры. Бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31438/" target="_blank">Generating PDF files with PHP and FPDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20496/" target="_blank">Rails for PHP Developers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20479/" target="_blank">How to become a ZCE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20461/" target="_blank">Поговорим о погоде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35290/" target="_blank">какие готовые php-классы вы используете для mysql-запросов в своих проектах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31424/" target="_blank">Geocoding with PHP and the Google Maps API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31422/" target="_blank">Рекурсивный обход массива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20169/" target="_blank">PHP пошел по следам Мюнхаузена: 26 октября у него 25 часов в сутках!!!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20097/" target="_blank">От лапши к компонентам или Слушайтесь родителей!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19838/" target="_blank">Работа с временными зонами в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19809/" target="_blank">Прошу помощи ссылками по ООП в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19221/" target="_blank">Что нас ждет в PHP 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19181/" target="_blank">Новый Zend Studio for Eclipse!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35251/" target="_blank">В чем хабралюди пишут PHP-код?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31375/" target="_blank">PHP Patterns: Singleton</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18468/" target="_blank">PHP библиотека для jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17256/" target="_blank">Redirect or not to redirect…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16320/" target="_blank">Несколько сайтов на одном движке CakePHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31299/" target="_blank">Qcodo: генерация кода против метапрограммирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31296/" target="_blank">Qcodo — еще один каркас программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15663/" target="_blank">Приведение ссылок к абсолютному URI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15612/" target="_blank">Множественные числа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14882/" target="_blank">Zend Studio Neon beta (Eclipse based)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31270/" target="_blank">Создание простой MVC-системы на PHP 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14635/" target="_blank">Пространства имён уже в PHP 5.3?!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14398/" target="_blank">Родной FastCGI для IIS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14133/" target="_blank">Zend Studio и CVS/SVN</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13726/" target="_blank">Безопасный метод авторизации на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13711/" target="_blank">PHP 5.2.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31206/" target="_blank">CodeIgniter: Классы: Benchmark</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31203/" target="_blank">Top 25 Шаблонных движков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13141/" target="_blank">Исходники Facebook просочились в Сеть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13131/" target="_blank">PHP: image charts на last.fm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12951/" target="_blank">Блог о CodeIgniter, перевод User Guide.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12596/" target="_blank">Расширяемый paginator для объекта Zend_Db_Table на основе класса phponrails</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31178/" target="_blank">Введение в Zend_Auth</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31173/" target="_blank">Введение в Zend Framework (продолжение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31168/" target="_blank">Введение в Zend Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12292/" target="_blank">«Делаем стартап гостеприимным» или «Как использовать OpenID на своем сайте»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12177/" target="_blank">PHP4 прекращает свое существование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12127/" target="_blank">Программируем стартап Веб 2.0 на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12093/" target="_blank">5 приемов, облегчающих жизнь PHP-чайника</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12067/" target="_blank">Основы безопасности PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31149/" target="_blank">Как создавать документы Microsoft Office при помощи PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11474/" target="_blank">Как правильно объяснить начинающему php-программисту зачем, как и когда использовать ООП?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282922/" target="_blank">Работа с WAV-файлами с использованием PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282772/" target="_blank">Дайджест интересных материалов из мира Drupal #20</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282724/" target="_blank">Yii 2.0.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pvs-studio/blog/282684/" target="_blank">Проверка PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282333/" target="_blank">Исповедь Битрикс хейтера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282407/" target="_blank">Yii: лучшие практики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uteam/blog/282385/" target="_blank">5 стадий API: что мы поняли, написав две версии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/282331/" target="_blank">PHP-Дайджест № 84 – интересные новости, материалы и инструменты (10 – 24 апреля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282305/" target="_blank">Оптимизация модели Nested Set в PHPixie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/282151/" target="_blank">DevConf-2016: ждём заявок на доклады</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11380/" target="_blank">Полезные мелочи программирования на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282125/" target="_blank">Как я опробовал Microsoft Project Oxford + Telegram Bot API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282077/" target="_blank">Разработка чат-бота для Битрикс24</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282025/" target="_blank">Увеличение производительности Magento</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281991/" target="_blank">Вышел драйвер PDO MSSQL(pdo_sqlsrv) для PHP7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212761/" target="_blank">Сервер очередей Gearman: опыт практического использования и веб-приложение Gearman Monitor && Control</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281875/" target="_blank">Symfony: обработка запросов в API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281863/" target="_blank">Фильтрация данных в Symfony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281827/" target="_blank">Laravel Timestamp Validator</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281559/" target="_blank">Разработка чат-бота для Facebook Messenger</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/281667/" target="_blank">Первая версия Visual Studio Code 1.0 — путь от простого редактора до мощного инструмента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280041/" target="_blank">Сравнение языков программирования относительно работы на фриланс-бирже upwork.com + опрос</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281320/" target="_blank">Перспективы языка го для программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281547/" target="_blank">Поиск регулярных выражений с помощью регулярных выражений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/281443/" target="_blank">PHP UK Conference 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281300/" target="_blank">Анализ подходов для создания лендингов и лонгридов в Drupal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281330/" target="_blank">PHP и Temporal Coupling</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/281306/" target="_blank">PHP-Дайджест № 83 – интересные новости, материалы и инструменты (27 марта – 10 апреля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279203/" target="_blank">SonataAdminBundle: создание объекта из List View (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281160/" target="_blank">Расширенный скелет проекта PHPixie с аутентификацией и админкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/281046/" target="_blank">Вышел Upsource 3.0 с поддержкой PHP, GitHub pull requests и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/281004/" target="_blank">PHP против Ruby: Давайте жить дружно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280744/" target="_blank">Опьяняющая сила Composer Plugins</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280802/" target="_blank">Дайджест интересных материалов из мира Drupal #19</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280774/" target="_blank">Анализ поведенческих факторов с помощью Apache Spark</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280730/" target="_blank">Исповедь PHP программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280694/" target="_blank">На каком фреймворке вы будете писать PHP приложение в 2016 году?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280512/" target="_blank">Symfony и Command Bus</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280262/" target="_blank">Эффективные структуры данных для PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/280278/" target="_blank">PHP-Дайджест № 82 – интересные новости, материалы и инструменты (14 – 27 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280226/" target="_blank">Минусы Битрикса, или Битрикс глазами программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pushall/blog/280218/" target="_blank">Redis — что быстрее, UNIX-сокет или TCP? Что стабильнее? + pconnect</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279917/" target="_blank">Прекрати злоупотреблять массивами в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280071/" target="_blank">Введение в PHP 7: Что добавлено, что убрано</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279921/" target="_blank">Когда использовать статические методы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/279947/" target="_blank">Настройка редактора Visual Studio Code для разработки на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279919/" target="_blank">Как использовать именованные конструкторы в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279887/" target="_blank">Первый хаккатон, от идеи до реализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279701/" target="_blank">Используем миграции Yii2 для работы с несколькими базами данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/279617/" target="_blank">SoftMocks: наша замена runkit для PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279533/" target="_blank">Шесть подработок для ИТ-специалиста, за которые платят в долларах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279555/" target="_blank">Деплой на shared-хостинг: боль и страдания или простая рутина?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279501/" target="_blank">Мультиисключение или Хочу поделиться одним интересным архитектурным приемом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/279461/" target="_blank">О чем говорят тренды PHP в 2016-м году?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279413/" target="_blank">DI плагины в Magento 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/279167/" target="_blank">PHP-Дайджест № 81 – интересные новости, материалы и инструменты (1 – 13 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/279047/" target="_blank">Badoo перешли на PHP7 и сэкономили $1M</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279043/" target="_blank">Как подружить JMS Serializer и LiipImagineBundle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279029/" target="_blank">Универсальные многоразовые формы данных. Рецепты приготовления и сервировки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279017/" target="_blank">Битрикс, HMVC и немного бреда…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278987/" target="_blank">SonataAdminBundle: создание объекта из List View (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278893/" target="_blank">Релиз ownCloud 9.0 — opensource альтернативы Dropbox и другим облачным хранилищам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278859/" target="_blank">Asterisk и информация о входящих звонках в браузере через Notifications</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278849/" target="_blank">Как Облако@mail.ru спасло все* мои файлы и что из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278825/" target="_blank">Спойлер: Вставка SVG иконок одним единственным способом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278673/" target="_blank">Долгая история про локализацию даты без года в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278755/" target="_blank">Асинхронное параллельное исполнение в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278227/" target="_blank">Дайджест интересных материалов из мира Drupal #18</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/278089/" target="_blank">Как устроено сплит-тестирование в Badoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/278137/" target="_blank">PHP-Дайджест № 80 – интересные новости, материалы и инструменты (14 – 28 февраля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278049/" target="_blank">Как создать свой собственный Dependency Injection Container</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277987/" target="_blank">Go с точки зрения PHP программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/277957/" target="_blank">Web. История одной технологии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277743/" target="_blank">IP АТС Askozia и Push уведомления в Telegram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277867/" target="_blank">DI, PHPUnit и setUp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277779/" target="_blank">Неожиданное поведение openssl_random_pseudo_bytes() приводящее к фатальной потере криптостойкости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277637/" target="_blank">Автоматическая работа с SMS на модеме ZTE-MF823</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/277543/" target="_blank">Архитектура чистого кода и разработка через тестирование в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277465/" target="_blank">Инициализируемые контроллеры в Symfony и работа с аннотациями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277209/" target="_blank">Установка и настройка Yii2 на виртуальном хостинге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277201/" target="_blank">Yii 2.0.7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317488/" target="_blank">Запускаем Gulp с вотчерами на обычном хостинге через админпанель</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/317442/" target="_blank">Спроси backend-разработчиков Badoo. Часть 1. Платформа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271417/" target="_blank">Коротко об архитектуре компонента Symfony Config</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/317366/" target="_blank">PHP-Дайджест № 98 – интересные новости, материалы и инструменты (28 ноября – 11 декабря 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317258/" target="_blank">Блокировка дубликатов Symfony Сommand</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/317180/" target="_blank">О языке С и производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316966/" target="_blank">Yii2-advanced: альтернативное размещение папок для нескольких приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/316874/" target="_blank">Покрываем проект smoke-тестами, пока он не сгорел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316650/" target="_blank">Псевдо-инкапсуляция легаси include-ов когда нет времени рефакторить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316506/" target="_blank">Блеск и нищета php. Эволюция языка от 4.x к 7.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/277197/" target="_blank">PHP-Дайджест № 79 – интересные новости, материалы и инструменты (1 – 14 февраля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276781/" target="_blank">Сервисная технология на основе REST + RPC API делаем в турбо режиме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276709/" target="_blank">Linux демон на PHP5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/276331/" target="_blank">Добавление оператора диапазона в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/276353/" target="_blank">DevConf 2015: видео докладов секции PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/276283/" target="_blank">PHP-Дайджест № 78 – интересные новости, материалы и инструменты (18 – 31 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276137/" target="_blank">Дайджест интересных материалов из мира Drupal #17</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/275497/" target="_blank">Объекты в PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275661/" target="_blank">Форсаж под нагрузкой на Symfony + HHVM + MongoDB + CouchDB + Varnish</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275747/" target="_blank">Как перенести сайт из Google Sites на свой хостинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275605/" target="_blank">OpenShift: немного внутренностей Gear'ов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/275293/" target="_blank">PHP-Дайджест № 77 – интересные новости, материалы и инструменты (1 – 17 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275219/" target="_blank">Как правильно внести свою лепту в Open Source проект: простые подсказки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275139/" target="_blank">Cобрать лучшее из двух миров — фреймворков и CMS (часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275151/" target="_blank">Слабые ссылки в PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275131/" target="_blank">Генератор изображений-инвайтов v. 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275065/" target="_blank">Yii 1.1.17</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275021/" target="_blank">Автоматизация вывода виджета Яндекс.Карты на платформе 1C Bitrix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/274943/" target="_blank">WordPress. Бесплатный курс от GeekBrains</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274925/" target="_blank">Наследование ActiveRecord's, описывающих одну таблицу (паттерн single table inheritance) в Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274745/" target="_blank">Быстрое создание phar файлов используя Box</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274651/" target="_blank">Как через composer удобно подменить системный пакет его альтернативной версией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274631/" target="_blank">Pagekit: обзор модульной CMS на базе Symfony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274615/" target="_blank">Подводные камни использования Excel Power Query и MySQL для автоматизации отчетности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274557/" target="_blank">Sitemap.xml или «Делать было нечего...»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/274479/" target="_blank">Yii2 bad behaviors</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274439/" target="_blank">Php Inspections (EA Extended): выбираем стратегию на 2016 год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273615/" target="_blank">Разработка приложений на Yii2 без опыта — прямой путь в АД</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/274153/" target="_blank">PHP-Дайджест № 76 – итоги 2015 года, подборка интересных ссылок + конкурс от компании JetBrains</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274101/" target="_blank">Дайджест интересных материалов из мира Drupal #16</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274065/" target="_blank">Краткий обзор нововведений в Laravel 5.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273955/" target="_blank">Становимся профессиональными PHP разработчиками. Часть 3: Работа в команде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273777/" target="_blank">Как запустить собственный торрент-поисковик на базе RuTracker?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273609/" target="_blank">Становимся профессиональными PHP разработчиками. Часть 2: Важность других людей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/comet-server/blog/273573/" target="_blank">Использование comet сервера для реализации простого чата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273485/" target="_blank">Приложение для apps.com на PHP — особенности и грабли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273477/" target="_blank">Symfony2 Voters и Doctrine Filters на страже безопасности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/273365/" target="_blank">Сравнение производительности PHP 7.0 и HHVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273009/" target="_blank">Разворачиваем Drupal 8 с помощью Otto</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272509/" target="_blank">Случайность в PHP7 – Повезет ли мне?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272513/" target="_blank">Внедряем Bootstrap 3 Datepicker в SonataAdminBundle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/272495/" target="_blank">PHP-Дайджест № 75 – интересные новости, материалы и инструменты (22 ноября – 6 декабря 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/272165/" target="_blank">История PHP: инфографика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272099/" target="_blank">PHP 7.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271901/" target="_blank">Можно ли заниматься разработкой на iPad?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266291/" target="_blank">Улучшенный плагин для Smarty — Combine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271807/" target="_blank">Долгий путь низкоуровневого дебага, чтобы найти закомментаренную строку кода, случайно ушедшую в продакшн</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simbirsoft/blog/271485/" target="_blank">Способ быстрого измерения производительности случайного сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/270991/" target="_blank">Как в Badoo генерируются изображения для «шаринга» в соцсетях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/web_payment_ru/blog/271359/" target="_blank">Жизнь PHP-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271445/" target="_blank">Дайджест интересных материалов из мира Drupal #15</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271409/" target="_blank">Drupal 8. Обучающие материалы и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/271419/" target="_blank">PHP-Дайджест № 74 – интересные новости, материалы и инструменты (5 – 22 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271421/" target="_blank">Сервисы проверки знаний [Сертификация Magento]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271323/" target="_blank">Вышел Drupal 8 — критический взгляд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271081/" target="_blank">Применение SpeechKit Cloud API для озвучивания погоды и новостей от Yandex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/271245/" target="_blank">Риски и проблемы хеширования паролей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/271237/" target="_blank">Особенности создания web-проекта «под ключ» от Startup Makers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/271189/" target="_blank">Использование AJAX-обработчика WordPress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271181/" target="_blank">Мой опыт миграции на PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/270685/" target="_blank">Использование больших страниц в памяти в PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270809/" target="_blank">Голосовое управление мультимедиа центром</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270583/" target="_blank">Highload Dev Conf'2015 прошла 17 октября в Минске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270519/" target="_blank">Symfony2 двухфакторная авторизация с помощью сертификата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270435/" target="_blank">Заставляем совместно работать open_basedir + realpath_cache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270377/" target="_blank">Вышел Magento 2.0 Release Candidate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270359/" target="_blank">Заставляем сервис php-fpm 5.6, запущенный через systemd, читать глобальные переменные окружения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270325/" target="_blank">Вперед, на поиски палиндромов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/269937/" target="_blank">PHP-Дайджест № 73 – интересные новости, материалы и инструменты (18 октября – 5 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270087/" target="_blank">Как нам обустроить альтернативу 1С</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269709/" target="_blank">Валидация сложных структур с PHPixie Validate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269661/" target="_blank">Базовая структура модуля Magento [Сертификация Magento]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269377/" target="_blank">Api-platform</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267125/" target="_blank">Гексагональная архитектура</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247349/" target="_blank">Magento-модули и Travis CI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269361/" target="_blank">Дайджест интересных материалов из мира Drupal #14</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269341/" target="_blank">Magento Codepools [Сертификация Magento]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269199/" target="_blank">Создание GUI приложений на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269125/" target="_blank">Приобретение Zend пока еще ничего не значит</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269081/" target="_blank">Puli: Управление ресурсами в php приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269051/" target="_blank">Конвертация многостраничного xls/xslx в csv при помощи PHPExcel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/269039/" target="_blank">PHP-Дайджест № 72 – интересные новости, материалы и инструменты (5 – 18 октября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268871/" target="_blank">Composer — the right way</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268621/" target="_blank">Серверная кластеризация маркеров на карте. От теории к практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268717/" target="_blank">Первые шаги в мир веба в реальном времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268615/" target="_blank">Программирование с YII2: приступаем к работе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268381/" target="_blank">Производительное юнит-тестирование веб-приложений на примере yii2 и codeception</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268245/" target="_blank">Пример модуля для Magento 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268269/" target="_blank">Почему я выбрал Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268189/" target="_blank">Silex skeleton + Gulp + LiveReload</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268239/" target="_blank">Пара полезностей для CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/268203/" target="_blank">PHP-Дайджест № 71 – интересные новости, материалы и инструменты (21 сентября – 5 октября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268191/" target="_blank">ZF2 + Blitz templates</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268035/" target="_blank">Плохая «Весна» или как причины задержек искали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267963/" target="_blank">Автоматическая рекомендация: немного теории и практики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267799/" target="_blank">Новый PHP, часть 2: Scalar types</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267839/" target="_blank">Готовая сборка новостного портала NewsModxBox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267811/" target="_blank">PHP и OData: пересаживаемся с велосипедов на технологию от Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267727/" target="_blank">PHP: культура программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267495/" target="_blank">Новое в Runkit 1.0.4: PHP 5.6+, closures везде и еще 12 новых фич</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/316344/" target="_blank">Кэши для «чайников»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315690/" target="_blank">Навигация по коду в IDE от JetBrains с использованием REST API и командной строки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/316254/" target="_blank">PHP-Дайджест № 97 – интересные новости, материалы и инструменты (14 – 27 ноября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simpleweek/blog/316210/" target="_blank">Объединяем Code Coverage от PHPUnit и phpspec</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316140/" target="_blank">Как протестировать наследство без боли и страха</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315684/" target="_blank">Марсоход, Координаты посадки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/315680/" target="_blank">Гренландский программист (cоздатель PHP): «Ненавижу программирование. Но я люблю решать проблемы»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315738/" target="_blank">Stacker: Nginx, DB(Mysql, Pgsql, Redis), PHP7+xDebug за 5 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315152/" target="_blank">Ваш язык программирования — отстой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315030/" target="_blank">Система сборки фронтенда в CleverStyle Framework или почему вам может быть не нужна кастомная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267609/" target="_blank">Расширение Yii 1.1 oci8Pdo и бинд параметров CLOB/BLOB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267517/" target="_blank">JetBrains опубликовали уточнения к новой лицензионной и ценовой политике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267257/" target="_blank">Новый PHP, часть 1: Return types</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267293/" target="_blank">Mikrotik RouterOS + PHP скрипт на сайте. Расширение возможностей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/267281/" target="_blank">PHP-Дайджест № 70 – интересные новости, материалы и инструменты (6 – 20 сентября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267177/" target="_blank">Безопасная авторизация с PHPixie 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266997/" target="_blank">Дайджест интересных материалов из мира Drupal #13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266909/" target="_blank">PHP и realpath_cache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266865/" target="_blank">QuadBraces — по мотивам парсера MODx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266615/" target="_blank">Асинхронное выполнение PHP скрипта на подпроцессах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266571/" target="_blank">Генерируем PDF-файлы в веб-проекте: программа wkhtmltopdf</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266521/" target="_blank">Релиз Phalcon 2.1.0 beta 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266339/" target="_blank">Как я Google API с CodeIgniter A3M подружить пытался и что из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/266313/" target="_blank">PHP-Дайджест № 69 – интересные новости, материалы и инструменты (24 августа – 6 сентября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266155/" target="_blank">Набор Yii2 Behavior для хранения деревьев в БД и их совместного использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266091/" target="_blank">Интегрируем оплату через Paypal в web-приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/265875/" target="_blank">Эволюция сборки логов «облака» и сборщик логов в open source</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265377/" target="_blank">Дайджест интересных материалов из мира Drupal #12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/265291/" target="_blank">PHP-Дайджест № 68 – интересные новости, материалы и инструменты (27 июля – 24 августа 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/265169/" target="_blank">Хекслет: новые курсы + вебинары про VIM, программирование, английский</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265075/" target="_blank">Черный список IP своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264863/" target="_blank">Отлов и обработка исключений в Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264877/" target="_blank">Yii environment. Наследования и переопределение конфигов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264775/" target="_blank">Сравнение скорости исполнения кода Drupal для PHP 5.3-5.6 и 7.0. «Битва оптимизаторов кода» apc vs xcache vs opcache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264767/" target="_blank">JetBrains Product Pack for Students и как его получить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264725/" target="_blank">ReactPHP ускоряет PHPixie в 8 раз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264519/" target="_blank">Туториал: компонент интерактивной SVG картограммы для InstantCMS 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264009/" target="_blank">Форматирование сообщений для Yii::t()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/comet-server/blog/264425/" target="_blank">CometQL — api работы с комет сервером по протоколу MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264417/" target="_blank">Правильное использование Exception’ов в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264395/" target="_blank">Отлаживаем правила RewriteRule, или немного об интимной жизни mod_rewrite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zadarma/blog/264279/" target="_blank">API интерфейс для бесплатной АТС и телефонии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264209/" target="_blank">PHP библиотека для интеграции с API Новой Почты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264131/" target="_blank">Как повысить уверенность в том, что кнопка была нажата живым пользователем на сайте и избавиться от капчи?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264017/" target="_blank">Борьба с «плохими» URI, спамерами и php-шеллами — личный опыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264005/" target="_blank">От PHP к Clojure</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263933/" target="_blank">Мини-детектив НЕ системного администратора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263551/" target="_blank">Быстрый старт с PHPixie 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263629/" target="_blank">Хранение иерархических структур. Симбиоз «Closure Table» и «Adjacency List»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/263601/" target="_blank">PHP-Дайджест № 67 – интересные новости, материалы и инструменты (12 – 27 июля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263333/" target="_blank">Киски: Рефакторинг. Часть третья или причесываем шероховатости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263447/" target="_blank">Nested Intervals и их реализация под Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263379/" target="_blank">Snipper &mdash; маленький помощник программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263139/" target="_blank">Киски: Рефакторинг. Часть вторая или лечение зависимостей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263261/" target="_blank">Дайджест интересных материалов из мира Drupal #11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263239/" target="_blank">PhpStorm: Tips and tricks. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262995/" target="_blank">Киски: Рефакторинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262927/" target="_blank">Автоматическая генерация API doc через Аннотации или как прийти к документированию API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262465/" target="_blank">Интеграция Jira и Slack на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262453/" target="_blank">Обзор каркасов приложений на Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/262401/" target="_blank">PHP-Дайджест № 66 – интересные новости, материалы и инструменты (28 июня – 12 июля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262367/" target="_blank">Вышла PHP 7 beta 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262341/" target="_blank">Подписываем данные: HMAC на практике в API и Web-формах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262315/" target="_blank">Yii 2.0.5 (исправление безопасности)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262195/" target="_blank">Мультизагрузка в wysiwyg редакторе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262137/" target="_blank">Настройка проверки синтаксиса «налету» HTML, CSS, JS, PHP в Sublime Text 3 на Windows 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/261939/" target="_blank">Новый PhpStorm 9: постоянное движение вперед. Postfix code completion для PHP, Inline Debugger и многое другое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262007/" target="_blank">Релиз Phalcon 2.0.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261835/" target="_blank">Полиморфные связи для самых маленьких</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/261597/" target="_blank">Видео с очередной встречи PUG: Phalcon и Zephir</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/io/blog/261529/" target="_blank">Как заменить однородный фон прозрачным с помощью Imagemagick</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260769/" target="_blank">Action-Domain-Responder — доработка MVC под задачи веба</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/261489/" target="_blank">Новые курсы на Хекслете: React, Ansible и другие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261451/" target="_blank">Throwable exception и ошибки в php7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261335/" target="_blank">Дайджест интересных материалов из мира Drupal #10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/261131/" target="_blank">Внутреннее представление значений в PHP 7 (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/261327/" target="_blank">PHP-Дайджест № 65 – интересные новости, материалы и инструменты (14 – 28 июня 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261271/" target="_blank">Настройка безопасности сайтов на VPS/VDS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253665/" target="_blank">Использование Log4php в Magento-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261137/" target="_blank">Быстрый фильтр каталога для интернет-магазинов на основе битмапов Redis</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261019/" target="_blank">Важность контроля вывода сериализующего API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260975/" target="_blank">Важность API сериализации вывода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260983/" target="_blank">PHP extension. Пишем простой массив с Traversable и ArrayAccess</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/260221/" target="_blank">Немного о юнит-тестировании и внешних API в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/260479/" target="_blank">DevConf 2015 — сформирована программа конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260429/" target="_blank">Почтовый сервер на собственном сайте через sendmail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260351/" target="_blank">PHP 7 Alpha 1. Что нового</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/260347/" target="_blank">DevConf::PHP уже в эту пятницу — программа сформирована, в кулуарах расскажем как переносили сайт конференции на Laravel 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260185/" target="_blank">Статический анализ кода в PHP: регулярные выражения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/260257/" target="_blank">PHP-Дайджест № 64 – интересные новости, материалы и инструменты (1 – 14 июня 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246521/" target="_blank">LIVR — «независимые от языка правила валидации» или валидация данных без «проблем»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260201/" target="_blank">Upgrade до Middle PHP-разработчика за 3 месяца</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260183/" target="_blank">Реализация Single Sign On в Symfony2 приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/io/blog/259997/" target="_blank">Умный кроп на основе энтропии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260141/" target="_blank">Релиз Phalcon 2.0.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260049/" target="_blank">Одна из особенностей PHP, связанная с методами и функциями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259991/" target="_blank">Готовимся к собеседованию по PHP: псевдотип «callable»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259955/" target="_blank">Laravel 5.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/259901/" target="_blank">Тестирование модулей RequireJS в Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259865/" target="_blank">Безумный PHP. Фьюри код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/259857/" target="_blank">Разработка крупного масштабируемого web 2.0 проекта с нуля (соц.сеть на 100 млн пользователей) — интервью с ведущим мастер-класса на DevConf 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259811/" target="_blank">20-летие PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259765/" target="_blank">Взгляды на Zend PHP Certification</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/io/blog/259549/" target="_blank">Как определить дубликаты картинок с помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259627/" target="_blank">Готовимся к собеседованию по PHP: ключевое слово «static»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/259593/" target="_blank">DevConf 2015 — финальное голосование за доклады. Сделаем программу лучше и полезней</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259589/" target="_blank">Загрузка моделей, трейтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259497/" target="_blank">Приведение типов в PHP == табурет о двух ножках?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259523/" target="_blank">Почему Doctrine ORM плохо подходит для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259369/" target="_blank">PHP для маленьких. MVC по-своему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/313700/" target="_blank">Двенадцать заповедей локализации ПО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315300/" target="_blank">Как мы переводили сервер на php 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315254/" target="_blank">Простые миграции с PHPixie Migrate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314958/" target="_blank">Марсоход, Посадка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/315178/" target="_blank">PHP-Дайджест № 96 – интересные новости, материалы и инструменты (1 – 13 ноября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315160/" target="_blank">Сканирование на терминальном сервере бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315128/" target="_blank">Простой API gateway на базе PHP и Lumen</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/314920/" target="_blank">Анонс митапа ThinkPHP #13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314970/" target="_blank">Принимая PHP всерьёз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314544/" target="_blank">Марсоход, Инициализация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/259305/" target="_blank">PHP-Дайджест № 63 – интересные новости, материалы и инструменты (11 – 31 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259155/" target="_blank">LINQ для PHP: скорость имеет значение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259209/" target="_blank">Сравнение систем типов PHP7 и Hack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/259163/" target="_blank">DevConf 2015: Интервью с автором — PHP6 не будет! Встречаем PHP7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259149/" target="_blank">SonarQube. Проверяем код на качество</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/258979/" target="_blank">Асинхронный PHP — миф? Реальность! Видео с DevConf 2014</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258903/" target="_blank">Авторизация для API с помощью токенов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/258895/" target="_blank">Видео с DevConf 2014::PHP Cоб@чники против кинофобов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258891/" target="_blank">Освоение Composer: советы и приемы использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kodicms/blog/258827/" target="_blank">Переезд KodiCMS с фреймворка Kohana на Laravel 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258777/" target="_blank">Дайджест интересных материалов из мира Drupal #9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258769/" target="_blank">Релиз Phalcon 2.0.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258767/" target="_blank">Почему PHP устарел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258671/" target="_blank">Как я использую трейты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258705/" target="_blank">Геотаргетинг по городам (регионам, странам) для WordPress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258567/" target="_blank">Не мамонт ли Вы? (пятничный тест; который ложь, да в ней намек)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/io/blog/258545/" target="_blank">JPEG 2000, JPEG-XR и WebP в стране упущенных возможностей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258561/" target="_blank">Выдираем sms из GOIP на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258423/" target="_blank">PSR-7 принят</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258459/" target="_blank">Подпишитесь на 72 известных PHP разработчика одним кликом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258403/" target="_blank">Миграция с Symfony 2.0 до 2.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/io/blog/258363/" target="_blank">Оптимизация картинок для Google PageSpeed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/257999/" target="_blank">Внутреннее представление значений в PHP7 (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/258329/" target="_blank">DevConf 2015: 38 попугаев или как конференция сообществ разработчиков пытается выжить в блокаде импортозамещения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ringcloud/blog/258311/" target="_blank">API RingCloud, всё только начинается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258139/" target="_blank">Чего ждать, когда ждешь ребенка: PHP 7, часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257991/" target="_blank">Особенности разработки API на Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257237/" target="_blank">Чего ждать, когда ждешь ребенка: PHP 7, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257711/" target="_blank">Как я пытался облегчить жизнь школьникам и что из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257439/" target="_blank">Руководство по шифрованию данных на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/257691/" target="_blank">PHP-Дайджест № 62 – интересные новости, материалы и инструменты (26 апреля – 11 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257653/" target="_blank">Yii 2.0.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257625/" target="_blank">Удобная отладка с PHPixie Debug</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/io/blog/257533/" target="_blank">Загрузка и хранение фотографий в Web приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257539/" target="_blank">Habrahabr в PDF-варианте для электронной книги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257281/" target="_blank">Размазываем PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257073/" target="_blank">Мини API на Lumen</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257053/" target="_blank">Прогресс выполнения тяжелой задачи в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256685/" target="_blank">«Домашка» по Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/256649/" target="_blank">PHP-Дайджест № 61 – интересные новости, материалы и инструменты (13 – 26 апреля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256639/" target="_blank">Cовременный подход к HTTP с PHPixie и PSR-7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256055/" target="_blank">Работа с API почтового сервиса Mandrill</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256589/" target="_blank">Рассказ о том, как написать свой собственный CSS препроцессор за 9 месяцев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256309/" target="_blank">Webiny Framework. Первый взгляд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256123/" target="_blank">Дайджест интересных материалов из мира Drupal #8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256111/" target="_blank">Симфония самоподдува</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233129/" target="_blank">Исследуем результат работы php-транслятора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256047/" target="_blank">Phalcon 2 вышел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255799/" target="_blank">RSA шифрование в PHP (openssl), Android/Java, JavaScript и Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255785/" target="_blank">Lumen — новый PHP-микрофреймворк от разработчика Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/255739/" target="_blank">Composer & Packagist 101</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/255665/" target="_blank">PHP-Дайджест № 60 – интересные новости, материалы и инструменты (30 марта – 13 апреля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/posthawk/blog/255611/" target="_blank">Post Hawk. Перезагрузка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/255383/" target="_blank">Анонс конференции ThinkPHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/255237/" target="_blank">Подробно об объектах и классах в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255245/" target="_blank">Запуск PHP скрипта по расписанию cron. Когда не всё так ясно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255191/" target="_blank">Привязки из вендорного бандла к рабочему проекту Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/255145/" target="_blank">PHP. Рецепты программирования. 3-е изд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255139/" target="_blank">Cобрать лучшее из двух миров — фреймворков и CMS (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254965/" target="_blank">FAMP на pfsense с помощью PHP-FPM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254949/" target="_blank">Статический анализ PHP кода на примере Symfony2 (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254941/" target="_blank">Визуализация качества кода с PhpMetrics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254915/" target="_blank">4.04 С днём веб-мастера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254789/" target="_blank">Перевод часов в России, опять… и php5-intl</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254537/" target="_blank">Генератор документов docx и xlsx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254603/" target="_blank">Релиз CodeIgniter 3.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254501/" target="_blank">Дайджест интересных материалов из мира Drupal #7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ilkfinkom/blog/254489/" target="_blank">Все еще торт, часть 3.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254461/" target="_blank">IP-Geo. Оптимизация SQL запроса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252405/" target="_blank">Как переписать большой проект или безболезненный для бизнеса рефакторинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/254337/" target="_blank">PHP-Дайджест № 59 – интересные новости, материалы и инструменты (16 – 29 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254277/" target="_blank">Результаты опроса популярности PHP фреймворков от Sitepoint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254273/" target="_blank">Оптимизация ISPmanager под проекты на Битриксе или как я скрестил ISPmanager и VMBitrix (Битрикс окружение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254231/" target="_blank">Добиваемся OCSP stapling = Yes для сертификатов от WoSign на Nginx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254045/" target="_blank">Rock Sanitize — простой и гибкий санитизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253973/" target="_blank">Вкусняшки от новой PHPixie Template</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253387/" target="_blank">Пишем обработку Asterisk AMI своими руками. Часть первая: создаем класс на PHP для обращения к звездочке или как сделать php socket клиент своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253621/" target="_blank">Знакомство с Rock Validate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253278/" target="_blank">Встречайте Envoyer.io (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253217/" target="_blank">Встречайте Envoyer.io (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253207/" target="_blank">Простой PHP генератор сложных HTML таблиц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/253135/" target="_blank">PHP-Дайджест № 58 – интересные новости, материалы и инструменты (22 февраля – 16 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253107/" target="_blank">Yboard — Движок доски объявлений на Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252983/" target="_blank">Показываем процесс работы непрерывной задачи на сервере, используя одно соединение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/252809/" target="_blank">Перезапуск демона на PHP без потери соединений к нему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wargaming/blog/221035/" target="_blank">Если вы решили перейти с PHP на Python, то к чему следует подготовиться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252851/" target="_blank">30 чудных библиотек для PHP программистов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252653/" target="_blank">CKFinder — размеры картинок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252607/" target="_blank">Sendmail-заглушка для PHP и на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252521/" target="_blank">Дайджест интересных материалов из мира Drupal #6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252489/" target="_blank">PHPUnit: Электронная таблица (spreadsheet) в качестве источника данных (data provider)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252349/" target="_blank">Текстовый чат для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tceh/blog/252317/" target="_blank">Гранты, митапы и школы для начинающих и продолжающих разработчиков в Москве и не только. Выпуск второй</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250825/" target="_blank">Web-технологии глазами С++ программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252199/" target="_blank">Zend Certification. Не так страшен черт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252013/" target="_blank">Атомный реактор в каждый сайт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251927/" target="_blank">Взаимодействие PHP и Erlang посредством RabbitMQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251881/" target="_blank">Slim framework или как мы отказались от CMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251833/" target="_blank">PHPCI обновился до версии 1.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251687/" target="_blank">Разговорный бот для Вконтакте на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312322/" target="_blank">Разработка модулей для Magento 1.x — большой гайд + видео</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314840/" target="_blank">Symfony — загрузка файлов в MongoDB GridFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314536/" target="_blank">Марсоход, Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smi2/blog/314558/" target="_blank">Как запустить ClickHouse своими силами и выиграть джекпот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314314/" target="_blank">Консольные команды с PHPixie Console</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314184/" target="_blank">Yii2: Кастомизация Bootstrap с помощью Less</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314180/" target="_blank">Добавление аватара, обрезка фото на мобильном устройстве и десктопе на JavaScript и PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314114/" target="_blank">Enum в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/314014/" target="_blank">Парсинг JSON — это минное поле</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314032/" target="_blank">Настройка окружения для PHP разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251669/" target="_blank">Как REST-архитектура влияет на скорость и надежность работы сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251529/" target="_blank">Vagrant для малышей, или как на Windows легко получить настроенный сервер для разработки веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251459/" target="_blank">Делаем карту кабельных трасс «на коленке»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249951/" target="_blank">TheRole 3. Авторизация для Ruby on Rails</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250667/" target="_blank">Legacy-код — это рак</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251255/" target="_blank">Дайджест интересных материалов из мира Drupal #5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/251223/" target="_blank">PHP-Дайджест № 57 – интересные новости, материалы и инструменты (9 – 22 февраля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251189/" target="_blank">Страничное кеширование в WordPress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251177/" target="_blank">MessagePack аналог JSON, но быстрее и меньше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/250861/" target="_blank">Разбор вызовов функций в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250985/" target="_blank">Нестандартная оптимизация проектов на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250617/" target="_blank">Опрос: как у вас решается проблема синхронизации параллельных запросов на PHP?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245155/" target="_blank">Как мы написали helpdesk (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250415/" target="_blank">Пишем плагин для October CMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250343/" target="_blank">PSR-7 в примерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250323/" target="_blank">Отладка с помощью XDebug и PhpStorm (дополнение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250251/" target="_blank">VKPLS — Генерация потокового аудио-плейлиста из vk.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250223/" target="_blank">Дайджест интересных материалов из мира Drupal #4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250085/" target="_blank">Как я интегрировал WebSockets в существующую систему на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/250075/" target="_blank">PHP-Дайджест № 56 – интересные новости, материалы и инструменты (25 января – 8 февраля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250055/" target="_blank">WSGI/Rack для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250039/" target="_blank">Symfony2. Универсальный инструмент для быстрого приготовления табличных списков в административной панели</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249911/" target="_blank">Дождались, релиз Laravel 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249705/" target="_blank">Своя браузерка — путь мыши: ЗАЧЕМ?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249629/" target="_blank">BemPHP: реализация методологии БЭМ средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249625/" target="_blank">Своя браузерка — путь мыши: начало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/248573/" target="_blank">Буфер вывода в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249367/" target="_blank">Templater — менеджер шаблонов и твикер для MantisBT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248971/" target="_blank">Статический анализ PHP кода на примере Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kodicms/blog/248937/" target="_blank">Развитие KodiCMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/248835/" target="_blank">PHP-Дайджест № 55 – интересные новости, материалы и инструменты (11 – 25 января 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248721/" target="_blank">Революция PHP7: Типы возвращаемых значений и удаление артефактов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248505/" target="_blank">Паттерн «Репозиторий». Основы и разъяснения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248609/" target="_blank">Анонсирован Zend Framework 3 Roadmap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248293/" target="_blank">Дайджест интересных материалов из мира Drupal #3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248055/" target="_blank">Создание собственного вендорного бандла в Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248019/" target="_blank">Производительность shared-папок в Vagrant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247893/" target="_blank">Список YouTube-каналов для обучения веб-разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/247755/" target="_blank">Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5. 3-е изд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247769/" target="_blank">Как Битрикс чуть Новый Год не погубил</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247519/" target="_blank">Создание плагина для PHP Composer'а</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/247605/" target="_blank">PHP-Дайджест № 54 – интересные новости, материалы и инструменты (22 декабря 2014 – 11 января 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246703/" target="_blank">Разработка Magento-модулей с развертыванием приложения через Magento Composer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247145/" target="_blank">PHP 7 получит в два раза более эффективный Hashtable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246827/" target="_blank">REST API за пару минут с Lionframe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246733/" target="_blank">Одностраничный магазин на Phalcon PHP + AngularJS. Работа над ошибками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246503/" target="_blank">Использование различных VCS репозиториев в PhpStorm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246573/" target="_blank">Дайджест интересных материалов из мира Drupal #2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246461/" target="_blank">Я — сертифицированный PHP-специалист</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246437/" target="_blank">Решение задачи коммивояжера с помощью метода ветвей и границ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/246421/" target="_blank">Лучшее из мира PHP за 2014 год + конкурс от компании JetBrains! PHP‑Дайджест № 53</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245549/" target="_blank">Несколько версий php на одном сервере. suphp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245763/" target="_blank">Несколько советов по ускорению Drupal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245911/" target="_blank">Как просто подружить Symfony2 и RequireJS на примере SPA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245893/" target="_blank">Пространства имен в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/textolite/blog/245867/" target="_blank">Textolite 1.04: можно создавать шаблоны и редактировать скрипты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245745/" target="_blank">Composer. Небезопасно использовать packagist и приватный источник пакетов одновременно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245665/" target="_blank">Одностраничный магазин с корзиной на Phalcon + AngularJS + Zurb Foundation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245623/" target="_blank">VarDumper — новый компонент в Symfony 2.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245467/" target="_blank">Защита веб-приложения на Phalcon + AngularJS от CSRF атак</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245401/" target="_blank">Как мы пытались внедрить Яндекс.Кассу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245397/" target="_blank">Банковские выписки и PHP — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245293/" target="_blank">Виртуальные хостинги и php5.4, когда уже?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245209/" target="_blank">Дайджест интересных материалов из мира Drupal #1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245233/" target="_blank">Обработка и оформление отчетов в Excel на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245093/" target="_blank">DOMPDF – экспорт данных из PHP в PDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244825/" target="_blank">Как Composer на 70% ускорили</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/244605/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 52 (16 – 30 ноября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244561/" target="_blank">Поиск на сайте своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244517/" target="_blank">Inversion of Control: Методы реализации с примерами на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244455/" target="_blank">Пишем простую энциклопедию на Slim Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244421/" target="_blank">PHPStamp — честная генерация DOCX документов из шаблона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243589/" target="_blank">Vagrant для PHP-проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244311/" target="_blank">Cобрать лучшее из двух миров — фреймворков и CMS (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244119/" target="_blank">eBay API: шаг второй</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244117/" target="_blank">Несколько версий PHP под одним Apache на Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244113/" target="_blank">PHPixie Amalgama — Интернационализация в PHPixie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244069/" target="_blank">PHPixie Illusion — простой mock HTTP сервер для ваших тестов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243961/" target="_blank">Web-разработка на Python глазами PHP-программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243857/" target="_blank">Gearman и PHP 5.4 (5.6): проблемы и решения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243361/" target="_blank">Yii2 тестируем на HHVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/243367/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 51 (26 октября – 16 ноября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243195/" target="_blank">Грабли, на которые я наступил при скрещивании CRM c Google Calendar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243035/" target="_blank">Ловим snmp трапы mac-notification с устройств Cisco</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242915/" target="_blank">О Symfony 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242685/" target="_blank">Codeship.io: бесплатный CI сервер для приватного репозитория Github/Bitbucket</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ffcms/blog/242579/" target="_blank">Разбираемся с каркасом расширений для FFCMS — hello world!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242577/" target="_blank">Процесс подключения Yii 1.1.15 к CMS в качестве приложения на примере Shop-Script 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242309/" target="_blank">Оптимизация для начинающих, или о пользе профилирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242275/" target="_blank">GUI для xdebug trace файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242217/" target="_blank">IceCash 1.3. Linux рабочее место кассира на php, с драйвером Штрих-М</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ffcms/blog/242101/" target="_blank">Патч-обновление FFCMS 2.0.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242067/" target="_blank">Локализованное форматирование даты в Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/posthawk/blog/241774/" target="_blank">Интерактивный сайт с post-hawk? Легко!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241710/" target="_blank">Генерация HTML: удобнее чем хелперы и чистый HTML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/241565/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 50 (6 октября – 26 октября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241471/" target="_blank">Zend Framework 2: Service Manager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241447/" target="_blank">Перевод часов в России 26 октября и icu4c</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241423/" target="_blank">Создание пакета для Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240817/" target="_blank">Использование Accept Header для версионирования API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314018/" target="_blank">Генерируем красивые картинки для социальных сетей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/313974/" target="_blank">PHP-Дайджест № 95 – интересные новости, материалы и инструменты (9 – 30 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313796/" target="_blank">Разбираемся с SOLID: Инверсия зависимостей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/313524/" target="_blank">Вышел Upsource 3.5 с многочисленными изменениями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313332/" target="_blank">Всем привет, я вебмастер и меня взломали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313298/" target="_blank">Drupal Composer рецепты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313256/" target="_blank">YML (Yandex Market Language) — Генерация файла товаров для Яндекс Вебмастер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313180/" target="_blank">Yii 2.0.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/313104/" target="_blank">Контроль качества кода в перспективе развития проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312974/" target="_blank">Веб-приложение размером с пигмея</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/textolite/blog/241399/" target="_blank">Textolite — система управления статическим сайтом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241357/" target="_blank">Система доступа к документам для MODX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241335/" target="_blank">Как использовать API сайта, у которого нет API?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240841/" target="_blank">Symfony2: logging out</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240909/" target="_blank">Пошаговая форма на Symfony2 с SyliusFlowBundle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240883/" target="_blank">Знакомство с Oro Platform</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ffcms/blog/240829/" target="_blank">Тестирование производительности популярных (и не очень) CMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240789/" target="_blank">Архитектура модуля CleverStyle CMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240809/" target="_blank">Пакет для создания админки в проектах на Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240785/" target="_blank">Простой каркас Rest Api на основе Phalcon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ffcms/blog/240637/" target="_blank">Еще одна коробочная CMS — знакомство с FFCMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240561/" target="_blank">Методы в примитивных типах PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240255/" target="_blank">ZExt Framework :: Работа с MongoDB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240557/" target="_blank">Использование паттерна Proxy для организации кэширования на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240493/" target="_blank">Внедряем работу с координатами в sonata-admin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240329/" target="_blank">25 PHP-разработчиков, на которых можно подписаться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240327/" target="_blank">Хорошая практика в Symfony 2 (по личному опыту)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240187/" target="_blank">Официальный гайд по лучшим практикам в Symfony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240149/" target="_blank">Yii 2.0. Релиз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/240109/" target="_blank">Наш любимый CodeIgniter обрёл новый дом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240003/" target="_blank">Знакомство с Laravel 5 простой блог с локальной разработкой на VirtualBox + Vagrant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239905/" target="_blank">Что нового в CakePHP 3.0.0?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239719/" target="_blank">Возможное будущее для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239645/" target="_blank">Облачные автотесты Selenium + Ubuntu (пошаговая инструкция)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239637/" target="_blank">Не стоит бояться использовать HandlerSocket</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239435/" target="_blank">Опасный finally или ждем 5.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239613/" target="_blank">В Sypex Geo добавлена привязка к API ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/238987/" target="_blank">PHP-фреймворк Badoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/239277/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 49 (21 сентября – 5 октября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239147/" target="_blank">Yii 2.0: Динамическое добавление валидируемых полей формы через «пиджак»(pjax) для мульти-модельной формы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238793/" target="_blank">Drupal 8 Beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238017/" target="_blank">Что нового в Laravel 5?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/237603/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 48 (7 – 21 сентября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237105/" target="_blank">Windows 2012 R2 + IIS + MS SQL + PHP установка, настройка, подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/236929/" target="_blank">Новый PhpStorm 8: развиваемся вместе. Поддержка Blade, Behat, WordPress, удаленных PHP-интерпретаторов и многое другое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/236635/" target="_blank">Yii + WordPress = &lt;3, или Увлекательный эксперимент получения Франкенштейна</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236211/" target="_blank">Деплой php+MySQL на heroku</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236107/" target="_blank">Простой экспорт в Excel XLSX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236029/" target="_blank">Клиент-серверная работа с табличными данными для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235973/" target="_blank">Простой экспорт в Excel XML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/235963/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 47 (24 августа – 7 сентября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235485/" target="_blank">Настройка Yii2 RBAC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235471/" target="_blank">HHVM 3.3 — первый релиз с долгосрочной поддержкой (LTS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pvs-studio/blog/235189/" target="_blank">Заметка про проверку PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235081/" target="_blank">Обработка POST запросов AngularJs в Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234899/" target="_blank">Вышел финальный релиз PHP 5.6.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234791/" target="_blank">Тестируем новый тип бэкапа MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234563/" target="_blank">Интерактивная консоль с автодополнением на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234433/" target="_blank">Магический объект для хранения и передачи разнородных данных с проверкой типов и значений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/234411/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 46 (3 – 24 августа 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234353/" target="_blank">Web-gui для wget (light)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/234125/" target="_blank">mysqlnd — проводник между PHP и MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234071/" target="_blank">Поучительная история о том, что может случиться с сайтом на shared-хостинге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pechkin/blog/233763/" target="_blank">Автоматическое определение пола по имени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233695/" target="_blank">Реализация системы тегов в админке с бандлом SonataAdminBundle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233571/" target="_blank">Нововведения в PHP 5.6 beta 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233491/" target="_blank">Свой сервис скриншотов для спокойного сна</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173311/" target="_blank">Реализация перечислений (Enum) в PHP с проверкой типа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/233337/" target="_blank">Оптимизация модулей RequireJS в Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233243/" target="_blank">И снова Яндекс.Погода для сайта: время суток, направление ветра и прочие параметры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233151/" target="_blank">Ускорение работы Symfony-бандла с помощью Zephir</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simnetworks/blog/233061/" target="_blank">Несколько версий PHP в ISPmanager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/233069/" target="_blank">Ciklum PHP Speakers’ Corner в Минске, 22 августа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232823/" target="_blank">Ресурсы в архиве или как уменьшить количество подгружаемых файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232603/" target="_blank">Magento шаг за шагом: REST API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232305/" target="_blank">Сессии в PHP — подводный камушек при асинхронных запросах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/232133/" target="_blank">Badoo PHP Code Formatter. Теперь в open source!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232157/" target="_blank">Генерация xkcd паролей на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/astoundcommerce/blog/232155/" target="_blank">IQLab challenge: докажи, что ты лучший</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232071/" target="_blank">И снова про монады в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/232043/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 45 (20 июля – 3 августа 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231801/" target="_blank">Привносим монады в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231847/" target="_blank">CodeIgniter 3.0 — будет!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231727/" target="_blank">Push рассылки на PHP (Android и IOS). Минимальное готовое решение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/231745/" target="_blank">Высоконагруженные сайты и приложения на PHP / Symfony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231693/" target="_blank">Спецификации PHP опубликованы для обсуждения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231685/" target="_blank">PHPCI обновился до версии 1.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/231495/" target="_blank">Открытая Yandex PHP Library для работы с API Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231605/" target="_blank">Следующая версия PHP будет называться PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231097/" target="_blank">Коробочные CMS для интернет-магазина: обзор популярных движков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227807/" target="_blank">Использование исключений в Symfony 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230957/" target="_blank">Magento шаг за шагом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230805/" target="_blank">Руководство по собеседованию на вакансию PHP-программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230633/" target="_blank">Удивительный фреймворк phalcon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/230481/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 44 (1 – 20 июля 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230393/" target="_blank">Быстрая морфология или файлы против MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229977/" target="_blank">ZExt Framework :: Cache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229941/" target="_blank">Facebook XHP. Объектный шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229905/" target="_blank">Делаем простейший фильтр по свойствам товаров с помощью ElasticSearch на Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229879/" target="_blank">Syringe — декларативный IoC Container на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229763/" target="_blank">YaLinqo (LINQ to Objects для PHP) — версия 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229579/" target="_blank">ZExt PHP Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229367/" target="_blank">Печальная история социалочки “Уберлов”</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229191/" target="_blank">PHP Zend сертифицирование сегодня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229111/" target="_blank">Обзор Komodo Edit и Komodo IDE 8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228805/" target="_blank">Делаем из массивов объекты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228629/" target="_blank">Знакомство с сервисами передачи сообщений PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/openstat/blog/212211/" target="_blank">Распространенность серверов и серверных языков программирования в Рунете</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228301/" target="_blank">Console Audio Tools — пакет утилит для проверки и конвертации аудиофайлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/228215/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 43 (16 – 30 июня 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312874/" target="_blank">Пакет для работы с СУБД Firebird в Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312662/" target="_blank">Реализация многопоточного сервера на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311514/" target="_blank">Новая жизнь legacy проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312316/" target="_blank">Несколько версий PHP на Windows машине</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312202/" target="_blank">Несколько версий PHP под одним Apache на Windows (v2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312164/" target="_blank">Эволюция CleverStyle Framework 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/312144/" target="_blank">PHP-Дайджест № 94 – интересные новости, материалы и инструменты (25 сентября – 9 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311986/" target="_blank">Asterisk и информация о входящих звонках в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311746/" target="_blank">GUI для php, или скрещиваем написанное расширение с скриншотером</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311446/" target="_blank">Добавление поддержки СУБД Firebird в фреймворк Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227841/" target="_blank">Независимые от фреймворка контроллеры. Последние штрихи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227787/" target="_blank">Избавьтесь от аннотаций в своих контроллерах!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227781/" target="_blank">Как делать независимые от фреймворка контроллеры?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171219/" target="_blank">Пишем скрипты для Cisco AXL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227183/" target="_blank">Сравнение геолокационных бинарных баз и их драйверов: GeoIP, Sypex Geo, TabGeo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226931/" target="_blank">Yii2 и организация мультиязычности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226707/" target="_blank">Изучаем PHP изнутри. Zval</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226753/" target="_blank">Боятся ли PHP-разработчики функций?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226571/" target="_blank">История создания карты мира для игры “C&C Tiberium Alliances”. Постмортем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/226433/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 42 (1 — 16 июня 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226327/" target="_blank">Что должен знать «PHP Junior Developer без опыта работы»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226321/" target="_blank">Спидран по 13 уязвимостям на сайтах. Основные понятия, и средства защиты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/226125/" target="_blank">DevConf 2014 — уже завтра — 14 июня! Опубликована окончательная программа конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225627/" target="_blank">Полезные инструменты для разработки на Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/226051/" target="_blank">Ciklum PHP Speakers' Corner в Виннице 19 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/225979/" target="_blank">Индексирование Sphinx с удаленного сервера средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/225927/" target="_blank">Devconf 2014 — Практический мастер-класс по Laravel — впервые в России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225851/" target="_blank">Phalcon Framework на продакшене</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225823/" target="_blank">Использование Pjax в Yii2 (краткий обзор)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225827/" target="_blank">Учимся разбираться в искусстве программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/225241/" target="_blank">DevConf::PHP 2014 — уже на следующей неделе. PHPNG, Laravel, Yii, Асинхронный PHP — будь в курсе новинок разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225081/" target="_blank">Несколько слов о движке интернет-магазинов OpenCart</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/224855/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 41 (май 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224709/" target="_blank">Пишем свою IDE со встроенным дизайнером интерфейсов на PHP и ExtJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pechkin/blog/224207/" target="_blank">Реализация быстрого импорта из Excel на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224391/" target="_blank">Введение в JadePHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224467/" target="_blank">Отладка электронной почты при помощи MailCatcher</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224351/" target="_blank">Опасный getimagesize() или Zip Bomb для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224199/" target="_blank">RESTful API на Yii framework с RBAC и тестами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197628/" target="_blank">PHP + Java, или In-memory кластер теперь и для PHP разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224053/" target="_blank">Автодокументация мобильных веб-сервисов на примере Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/223579/" target="_blank">Отдай свой PHP на прокачку — PHPNG — движок нового поколения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223539/" target="_blank">Сломайте SafeCurl и получите 0.25 Bitcoin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223385/" target="_blank">Переход от 2-х звенки к архитектуре служб в парадигме SOA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222649/" target="_blank">Kohana-form: beta релиз. Изменения и новшества</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223047/" target="_blank">Кузница Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/prflr/blog/219031/" target="_blank">PRFRL — как устроен интерфейс аналитики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222827/" target="_blank">October CMS: Публичная бета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222813/" target="_blank">Гарвардский курс CS50x на EdX, перевод субтитров (Недели 0-3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222453/" target="_blank">25 Laravel Tips and Tricks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222305/" target="_blank">PHPCI: Система непрерывной интеграции для PHP-проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222219/" target="_blank">PHP New Generation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222185/" target="_blank">Расцвет Composer и закат PEAR</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221917/" target="_blank">Как я bind`ом вирусы искал…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221949/" target="_blank">Правильный подход к использованию API Вконтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221807/" target="_blank">Бенчмарк 14 алгоритмов сортировки на массивах с разной размерностью и содержанием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221893/" target="_blank">Sypex Geo 2.2 — теперь с GeoNames и ОКАТО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221815/" target="_blank">Создаём сайт, используя Laravel и Recurly. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221811/" target="_blank">История о парсинге одного aspx сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210202/" target="_blank">Замолвим слово об отладке и профилировании [PHP]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220393/" target="_blank">Ускоряем PHP (с ReactPHP)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221521/" target="_blank">Асинхронный Php extension для работы с бд Cassandra без Thrift</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221259/" target="_blank">Тестирование отдельных Symfony 2 бандлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75570/" target="_blank">Замена PEAR на Composer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/221083/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 40 (14 апреля — 27 апреля 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220563/" target="_blank">Игра шаблонов. Как примирить Битрикс со сторонним шаблонизатором вывода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220231/" target="_blank">Чат-бот приложения через skype, jabber и whatsapp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/220211/" target="_blank">Переход на PHP 5.5 и юнит-тесты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219913/" target="_blank">MongoDB: $or VS $in — что работает быстрее?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220051/" target="_blank">Одно из мнений о будущем PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219837/" target="_blank">Опциональные зависимости не нужны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219907/" target="_blank">PHP-расширение dom_varimport: быстрое преобразования вложенных массивов в DOMDocument</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219795/" target="_blank">Удобный просмотр syslog журнала межсетевого экрана D-Link DFL-860E c помощью скрипта на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219813/" target="_blank">Релиз Wordpress 3.9 “Smith”</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219441/" target="_blank">Начинаем работать с графовой базой данных Neo4j</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219475/" target="_blank">Обнаружена уязвимость функционала «remember me» в Laravel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/219217/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 39 (24 марта — 14 апреля 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219027/" target="_blank">13 апреля Yii 2 переходит в статус Beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/218585/" target="_blank">Использование PhpStorm для разработки под WordPress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218751/" target="_blank">Работаем асинхронно в PHP или история ещё одного чата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218021/" target="_blank">JPHP — Как он работает. История создания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218113/" target="_blank">Тысяча и одна gif</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartprogress/blog/217239/" target="_blank">Набор велосипедов Yii разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216955/" target="_blank">Используем трейты с пользой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216865/" target="_blank">Используйте поиск по хешу, а не обыск массива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/216809/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 38 (9 марта — 23 марта 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216651/" target="_blank">JPHP — Новый движок php для Java VM + JIT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216727/" target="_blank">Команда Facebook выложила в открытый доступ язык Hack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216227/" target="_blank">Пишем парсер с помощью XPath и Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216251/" target="_blank">Создания приложения на Doophp 1.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216187/" target="_blank">Kohana-form: модуль менеджмента и генерации форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216107/" target="_blank">Уже можно использовать две новые библиотеки из будущей PHPixie 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216103/" target="_blank">Сравнение производительности перебора массивов в цикле через for() и foreach()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215955/" target="_blank">Autotest для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215817/" target="_blank">Продвинутые методы неявного вызова php кода, использующиеся во вредоносных скриптах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211086/" target="_blank">Symfony CMF. Часть 2 и последняя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infobox/blog/215245/" target="_blank">Обновление облачной платформы InfoboxCloud: Jelastic 1.9.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214285/" target="_blank">Шаблоны проектирования PHP. Часть 1. Порождающие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/215183/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 37 (24 февраля — 9 марта 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215025/" target="_blank">Подводные камни при системном тестировании модулей под Magento</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/vkontakte/blog/214877/" target="_blank">Релиз KPHP и движков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214833/" target="_blank">Что общего у gamedev-а с космонавтикой или работа с итераторами в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214645/" target="_blank">Magento Enterprise: Что такое Full Page Cache и почему он нужен</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214647/" target="_blank">PHP и различные виды NoSQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214371/" target="_blank">Контрактное программирование в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213933/" target="_blank">Laravel. Интернет-ресурсы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213971/" target="_blank">Применяем делегирование совместно с наследованием для организации контроллеров действий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/211504/" target="_blank">Вебсокеты на PHP. Часть 3. От чата до игры: Battle City</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213895/" target="_blank">Обнаружение изменений в файлах на веб-сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/213607/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 36 (9 — 23 февраля 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311506/" target="_blank">Пишем расширение с помощью библиотеки php-cpp для php7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311432/" target="_blank">Валидация данных вложенных документов MongoDB в Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311350/" target="_blank">Как создать тему для Magento 2 с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311304/" target="_blank">Шаблон программирования CSN-Ajax</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/305144/" target="_blank">Двойная скорость и половина памяти: оптимизация PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/311218/" target="_blank">Как мы проверяем работоспособность серверного кода без мобильных клиентов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/311068/" target="_blank">Трамплин вызова магических функций в PHP 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310954/" target="_blank">Несколько заметок о MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/310982/" target="_blank">PHP-Дайджест № 93 – интересные новости, материалы и инструменты (12 – 25 сентября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/310726/" target="_blank">Книга «Как пережить полный конец обеда, или безопасность в PHP». Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212917/" target="_blank">Yii обмен опытом: модели (окончание)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213065/" target="_blank">Типизация (определение свойств) объекта руками пользователей сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212975/" target="_blank">Переосмысление Zephir</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212773/" target="_blank">Пространства имен в PHP, разъяснение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212681/" target="_blank">Yii — обмен опытом: модели</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212405/" target="_blank">Находим общих друзей людей с использованием VK API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212153/" target="_blank">PhpStorm — повышаем производительность (плагины и темы оформления). Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212077/" target="_blank">PhpStorm — повышаем производительность (клавиатурные сокращения). Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infobox/blog/211572/" target="_blank">Настраиваем собственный SMTP сервер на платформе Jelastic в облаке InfoboxCloud</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212009/" target="_blank">Простая сборка виртуальных машин с помощью PuPHPet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/211995/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 35 (26 января — 9 февраля 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180555/" target="_blank">Пошаговое создание модуля в Magento — руководство начинающего разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211913/" target="_blank">Прикручиваем ActiveRecord к сайту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210764/" target="_blank">PhpBrew. Менеджер версий PHP. (+ установка и использование в Ubuntu 13.10)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pentestit/blog/211494/" target="_blank">Лучшие практики и рекомендации по защите php-приложений от XSS-атак</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/210228/" target="_blank">Делаем вебсокеты на PHP с нуля. Часть 2. IPC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211260/" target="_blank">Пример работы jQuery UI + PHP и GD. Нанесение аппликаций на изображение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211156/" target="_blank">print или echo, что быстрее?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211118/" target="_blank">PHP: Правильный путь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210656/" target="_blank">Горизонтальное масштабирование PHP приложений. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210520/" target="_blank">Гарвардский курс CS50x на EdX, перевод субтитров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210416/" target="_blank">Ясные печеньки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210388/" target="_blank">Нестандартное применение IT в быту: парсинг, перцептивный хеш, сравнение изображений = оптимизация расходов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/210366/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 34 (13 — 26 января 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210206/" target="_blank">PHP 5.6.0 alpha1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209864/" target="_blank">Делаем вебсокеты на PHP с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209870/" target="_blank">UNIX_TIMESTAMP, ROUND и другие DQL запросы через queryBuilder в Symfony 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209682/" target="_blank">Подобие LINQ на PHP для EAV модели хранения данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209514/" target="_blank">Портируем C# LINQ на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209496/" target="_blank">Создание 3D-иллюстраций — прототип системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209480/" target="_blank">PHP слон на Kickstarter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/209154/" target="_blank">Поддержка sha512 в wsse-authentication-bundle от Escape Studios, Symfony2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209024/" target="_blank">Отладка с помощью XDebug и PhpStorm на примере сайта 1С-Битрикс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208706/" target="_blank">Передача треков Google Analytics сторонним доменам без javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/208840/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 33 (1 января — 12 января 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208778/" target="_blank">HHVM, Nginx и PHP (а также Laravel)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/topic/blog/208556/" target="_blank">Пример использования standalone actions в Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208678/" target="_blank">Удобная генерация URL (ЧПУ). Laravel 4 + сторонние пакеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208376/" target="_blank">Как я заставил работать API в Yiinitializr Advanced</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208496/" target="_blank">Алгоритм нечёткой кластеризации fuzzy c-means на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208352/" target="_blank">Автоматическое тегирование кеша в Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208442/" target="_blank">Шпаргалка по SOLID-принципам с примерами на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208328/" target="_blank">Создаем поведение (behavior) для Yii2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208206/" target="_blank">Создание простого REST-приложения на Silex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208182/" target="_blank">Как связать Yii Framework и Doctrine 2 ORM?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208138/" target="_blank">Подходы к оптимизации (веб-)приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/207812/" target="_blank">Лучшее из мира PHP за 2013 + конкурс от компании JetBrains! Дайджест интересных материалов №32</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207814/" target="_blank">PHP фреймворк 2013</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207454/" target="_blank">Большое руководство по Yiinitializr</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207528/" target="_blank">Опыт разработки сервис-ориентированной системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207470/" target="_blank">Работа с архивами tar и gz средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206898/" target="_blank">Резервное копирование веб-проектов на Яндекс.Диск без ООП и натурщиц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206908/" target="_blank">Элегантная форма входа в админку на Laravel и Sentry</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206752/" target="_blank">Резервное копирование веб-проектов на Яндекс.Диск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206536/" target="_blank">История одного бэкдора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206442/" target="_blank">Laravel: Dependency Injection на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206216/" target="_blank">$7M инвестиций в Symfony и SensioLabs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206146/" target="_blank">Покупаем билеты на поезд в Новый год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205710/" target="_blank">Закончен новый модуль базы данных для PHPixie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205532/" target="_blank">pChart — строим графики и диаграммы на PHP. Практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205456/" target="_blank">Как подружить капчу Yandex API и AJAX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205418/" target="_blank">Разговорный бот на php+prolog</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/205286/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 31 (25 ноября — 8 декабря 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200246/" target="_blank">Сериализация целочисленных массивов Judy в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204438/" target="_blank">Тюнинг SQLite для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204484/" target="_blank">Создание печатной формы Microsoft Word с помощью PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204166/" target="_blank">Magento. Процесс загрузки конфигурационных файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203840/" target="_blank">Создание конструктора кирпичной кладки для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/203702/" target="_blank">Zend Framework 2.0 разработка веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/203482/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 30 (10—24 ноября 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203358/" target="_blank">Еще раз о Security в Symfony2 подход user-resource-privilege</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/idcee/blog/202890/" target="_blank">Создатель PHP Расмус Лердорф — об анархии и демократии в разработке языка, PHP 5.6 и жалующихся программистах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202638/" target="_blank">Фреймворк вашего следующего веб-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartprogress/blog/202188/" target="_blank">HTML Purifier. Расширяем возможности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202528/" target="_blank">Поиск различных вариантов транслитерации русских текстов (ФИО) латиницей для выборок в MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202398/" target="_blank">Функция «ковра»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201984/" target="_blank">PHP Console 3.0 — важнейшее обновление за 3 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202234/" target="_blank">Диспетчер событий с фильтрацией по шаблону</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/202214/" target="_blank">Continuous Delivery hecho en Alawar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202140/" target="_blank">SonataMediaBundle. Русская версия перевода файла xliff</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202058/" target="_blank">Новое в Symfony 2.4: компонент ExpressionLanguage</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202072/" target="_blank">KnpMenuBundle + Sonata. Делаем меню из базы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201646/" target="_blank">Mooha — нодовый интерфейс для PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201658/" target="_blank">PubSub в браузере с помощью вебсокетов и протокола WAMP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/201614/" target="_blank">Дайджест интересных новостей и материалов из мира PHP № 29 (20 октября — 10 ноября 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201558/" target="_blank">Новый сертификат ZCPE от Zend на основе PHP 5.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198980/" target="_blank">Функции в PHP 5.6 — что нового?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201178/" target="_blank">RabbitMQ tutorial 5 — Тематики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201096/" target="_blank">RabbitMQ tutorial 4 — Роутинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200870/" target="_blank">RabbitMQ tutorial 3 — Публикация/Подписка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200916/" target="_blank">Ajax загрузка файлов средствами jQuery и CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200728/" target="_blank">Как я подружил Quickbooks и PHP сайт с помощью Web Connector'а</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200614/" target="_blank">Простой плагин для Twig или разворачиваем константы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200478/" target="_blank">Пошаговое руководство сохранения связанных данных Yii</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200198/" target="_blank">Почему я отказался от использования Smarty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199482/" target="_blank">SonataAdminBundle + AJAX загрузка файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199512/" target="_blank">Bender: идейный борец за минимальность CSS / Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199502/" target="_blank">RESTful Api используя Zend framework 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/unitmobile/blog/199370/" target="_blank">Как мы подружились с PayPal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199296/" target="_blank">Pimple? Не… Не слышал</a></li>
</ol>
</body>
</html>