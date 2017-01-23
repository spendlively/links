<?php header('Content-Type: text/html; charset=utf-8', true); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>JS</title>
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
<body><ol class="rounded"><li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/320166/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №246 (16 — 22 января 2017)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/320124/" target="_blank">Обзор современных систем веб-рабочих столов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319894/" target="_blank">Чистый javascript. Объекты и структуры данных. Асинхронность. Обработка ошибок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/320064/" target="_blank">Angular 2: почему на TypeScript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319936/" target="_blank">Убийцы оптимизации JS уже не такие страшные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/319906/" target="_blank">Первый официальный релиз Webpack 2. Что нового по сравнению с Webpack 1?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/319888/" target="_blank">Как сделать кроссплатформенное десктопное приложение на базе веб-технологий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319804/" target="_blank">Чистый javascript.Классы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/319834/" target="_blank">WebAssembly – путь к новым горизонтам производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/319766/" target="_blank">Как обучают в Школе разработки интерфейсов Яндекса, и чему там научился я</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319680/" target="_blank">Scala.js легко и просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319678/" target="_blank">Удаленные AJAX компоненты для ReactJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319674/" target="_blank">Формируем изображения из текста в PhantomJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319662/" target="_blank">Как мы заново открыли TFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319656/" target="_blank">CodeceptJS — современные end2end тесты для NodeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318452/" target="_blank">Доставляем себе в офис чашку горячего кофе одной командой консоли с помощью TestCafe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/319578/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №245 (9 — 15 января 2017)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319480/" target="_blank">Чистый javascript.Функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319536/" target="_blank">Оптимизация производительности в React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319520/" target="_blank">Неконтролируемые компоненты в React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/316732/" target="_blank">Logux: Connection lost, data synchronized – интервью с Андреем Ситником (Злые Марсиане)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/316684/" target="_blank">О бравом React'е замолвите слово</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316676/" target="_blank">Front-end и блокировщики рекламы (на примере Adblock Plus)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316664/" target="_blank">Транслируем в Facebook красиво: титры и их кастомизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/315868/" target="_blank">Неигровой VR: перспективы и возможности в вебе, – интервью с VR-энтузиастом Martin Splitt, Archilogic</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316618/" target="_blank">9 способов оптимизации производительности Front-End</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316608/" target="_blank">Mozilla и Tor закрыли критическую уязвимость, которая активно использовалась для деанонимизации пользователей Tor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316606/" target="_blank">Front-end JavaScript framework Evolution beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316600/" target="_blank">React.js на русском языке. Часть шестая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314560/" target="_blank">Делаем проект на Node.js с использованием Mongoose, Express, Cluster. Часть 2.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264717/" target="_blank">Можно ли полагаться на данные, извлекаемые WMI классами?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264681/" target="_blank">Работа с формами в Webix UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/264675/" target="_blank">Практические советы по повышению производительности HTML и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264657/" target="_blank">Javascript и часовые пояса — правильное время на сайте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264607/" target="_blank">Универсальный JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/264631/" target="_blank">Третий набор в Школу разработки интерфейсов Яндекса. Разбор вступительных заданий и полезные советы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264583/" target="_blank">Легковесный модуль для HTTP запросов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264423/" target="_blank">Изоморфное Приложение с React и Redux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/264485/" target="_blank">Webix + databoom = быстрое прототипирование приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/264437/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №171 (3 — 10 августа 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264345/" target="_blank">Введение в JavaScript итераторы на ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264325/" target="_blank">Теги в социальных сетях и синтетические (флективные) языки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264175/" target="_blank">Обновление React компонентов с сохранением состояния в режиме реального времени для Browserify</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263971/" target="_blank">Catberry.js: Прогрессивный рендеринг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261417/" target="_blank">Тонкости ES6: Коллекции (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264127/" target="_blank">Алгоритм упорядочения логических томов в среде ОС Windows, часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264115/" target="_blank">Создание игры на Blend4Web. Путь программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264019/" target="_blank">Алгоритм упорядочения логических томов в среде ОС Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/263997/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №170 (26 июля — 2 августа 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263967/" target="_blank">JavaScript — шаблоны наследования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261853/" target="_blank">Xonix на Javascript с картинками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/263741/" target="_blank">Angular.js persistent storage</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/what3words/blog/263651/" target="_blank">Node-RED нод для конвертации локаций в адреса what3words</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263643/" target="_blank">Load Balancing: Firebase + RabbitMQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263619/" target="_blank">Встраиваемая JavaScript база данных с прицелом на API совместимость с MongoDB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/263603/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №169 (19 — 25 июля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/amperka/blog/263505/" target="_blank">Отображаем данные из Serial в Chrome Application</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263455/" target="_blank">Смайлики для API Вконтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263443/" target="_blank">Букмарклеты в Internet Explorer 11: формат хранения, лимиты и негласные правила, коварный баг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/263435/" target="_blank">OData REST API — мелкие хитрости (часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263417/" target="_blank">Особенности withCredentials</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/263241/" target="_blank">Что нового в Visual Studio 2015 для JS-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/262389/" target="_blank">Ускоряем angular.js или как не выстрелить себе в ногу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262949/" target="_blank">Catberry.js: Flux и веб-компоненты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/263167/" target="_blank">OData REST API — мелкие хитрости (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/targetix/blog/262917/" target="_blank">Еще один способ приготовления одностраничных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263153/" target="_blank">Вместе с Visual Studio 2015 состоялся релиз TypeScript 1.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263113/" target="_blank">Пришла беда откуда не ждали, уязвимость XSS в сервисе Яндекс.Метрика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263041/" target="_blank">$jin.time — работаем с датами и временем правильно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/263007/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последние две недели №168 (5 — 19 июля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262979/" target="_blank">Тонкости работы с PassportJs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/262969/" target="_blank">Итоги летнего конкурса Hola по программированию на JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/262937/" target="_blank">OData REST API — мелкие хитрости (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262853/" target="_blank">Букмарклеты: если XPath недоступен, а селекторов и методов навигации по DOM не хватает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262727/" target="_blank">Опубликованы jQuery 3.0 alpha и jQuery Compat 3.0 alpha</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262749/" target="_blank">Что выбрать для 3D сайта – Three.js или Blend4Web?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262687/" target="_blank">Билайн автоматически добавляет тулбар и изменяет дизайн сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262681/" target="_blank">Все дело не в количестве строк кода. От серийного разработчика модулей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260813/" target="_blank">Что нового в Babylon.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262351/" target="_blank">Перевод документации RivetsJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262239/" target="_blank">Критический путь рендеринга веб-страниц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262195/" target="_blank">Мультизагрузка в wysiwyg редакторе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262183/" target="_blank">React на ES6+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/261951/" target="_blank">Прокачиваем JavaScript с помощью TurboFan</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/262017/" target="_blank">Shadow DOM: спецификация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262105/" target="_blank">Проверка JSON при помощи декораторов в TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261911/" target="_blank">Своя JS обертка для Uppod плеера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261903/" target="_blank">Пишем LINQ на JavaScript с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261847/" target="_blank">Адаптивная карусель на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261817/" target="_blank">Создание Worker-а с другого домена</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/261811/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №167 (29 июня — 4 июля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261785/" target="_blank">Семь удивительных «возможностей» Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261723/" target="_blank">Функции высшего порядка в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261517/" target="_blank">Отстой ли XMPP?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261389/" target="_blank">Разработка на ES6 для браузеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261353/" target="_blank">Cordova 5.1.1 и обновления плагинов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261347/" target="_blank">Библиотека, облегчающая разработку форм на сайтах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/261337/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №166 (22 — 28 июня 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261307/" target="_blank">Worker-ы и shared worker-ы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261205/" target="_blank">WebAssembly: начало новой эры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/261141/" target="_blank">Модули JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261187/" target="_blank">Тонкости ES6: Коллекции (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259603/" target="_blank">Скруглы — border-radius inset для картинок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/261037/" target="_blank">Делаем видео-конференции в браузере за 10 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259113/" target="_blank">STB — погружение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260965/" target="_blank">Сборка Кубика Рубика генетическим алгоритмом online без смс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260961/" target="_blank">Пишем на JS в функционально-декларативном стиле</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260851/" target="_blank">Быстрые помощники для вашего Asterisk'а</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260933/" target="_blank">Охота на зомби из облака</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/260859/" target="_blank">Призы Hola: утешительные и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260829/" target="_blank">Wheel-indicator — плагин эмуляции touchstart при работе с трекпадами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260657/" target="_blank">Как написать плагин для TiddlyWiki</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260811/" target="_blank">«Её» или ещё один ёфикатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/260805/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №165 (15 — 21 июня 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260789/" target="_blank">Node-Webkit без вебкита</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260651/" target="_blank">2Mb веб-страницы — кого винить?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wargaming/blog/259687/" target="_blank">Как работает Wargaming Common Menu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260667/" target="_blank">Google, Microsoft, Mozilla и другие объединились для запуска WebAssembly, нового бинарного формата для Web</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260615/" target="_blank">Редактирование пространственных данных в Leaflet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260319/" target="_blank">Неизменяемость в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260573/" target="_blank">Новые возможности io.js, которые Вы возможно не используете</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260571/" target="_blank">Одобрена спецификация ECMAScript 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260561/" target="_blank">ECMAScript 2015 официальный релиз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260449/" target="_blank">Наблюдение за работой JavaScript-таймеров в реальном времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260437/" target="_blank">Angular обертка для Apache Cordova плагина для работы с серсивисом Card.IO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/260427/" target="_blank">Прототипы это объекты (и почему это важно)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/260259/" target="_blank">Ингредиенты IoT деликатесов быстрого приготовления: Intel Edison + Intel XDK + JavaScript + Grove Kit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/260299/" target="_blank">Компоненты, React и Flux обсудили на IT talk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260173/" target="_blank">LiveReload — обновление javascript без полной перезагрузки страницы (на примере mithril)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/260253/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №164 (8 — 14 июня 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316556/" target="_blank">Два аспекта «децентрализованных» одностраничных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316464/" target="_blank">Очередной метод снизить объем SPA приложения (webpack)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316244/" target="_blank">20 полезных Node.js фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316460/" target="_blank">Пишем свой язык программирования без мам, пап и бизонов. Часть 0: теория</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/SECL_GROUP/blog/316406/" target="_blank">«Великий уравнитель» или способ решить проблему выравнивания по высоте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/315774/" target="_blank">Тут-тук, откройте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/316308/" target="_blank">Модульный CSS: — Инструментарий, который мы имеем сейчас в арсенале — это просто сказка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/315908/" target="_blank">Когда вредно тестировать ваши компоненты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316262/" target="_blank">React.js на русском языке. Часть пятая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/316250/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №238 (21 — 27 ноября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246521/" target="_blank">LIVR — «независимые от языка правила валидации» или валидация данных без «проблем»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260149/" target="_blank">Как я нашел лучший в мире язык программирования. Часть Йо (2.72)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cit/blog/259987/" target="_blank">node.js для Java-разработчиков: первые шаги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259907/" target="_blank">Создание игр без canvas: Matreshka.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259881/" target="_blank">Свой шаблон отклика-письма на HeadHunter (и moikrug) без Copy-Paste</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259831/" target="_blank">Как я нашел лучший в мире язык программирования. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259795/" target="_blank">tmsTable — как я писал плагин для отображения таблиц, руководствуясь принципом KISS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259539/" target="_blank">Scrollissimo – плагин для плавной скролл-анимации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/259767/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №163 (1 — 7 июня 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259625/" target="_blank">Изоморфные приложения. Взгляд в будущее с React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259613/" target="_blank">Как я png в 4 раза уменьшал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259529/" target="_blank">Настоящие ассоциативные массивы в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259457/" target="_blank">С чего начинался jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cackle/blog/259301/" target="_blank">Система комментариев Cackle: как мы делали аналитику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259375/" target="_blank">Пишем тетрис под LG SmartTV (WebOS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259353/" target="_blank">Webix 2.4. Дверь в лето</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259349/" target="_blank">Как я перестал беспокоиться и полюбил React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259347/" target="_blank">Адаптивное многоуровневое меню сайта с саморегистрируемыми пунктами на основе директивы AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259311/" target="_blank">AngularJS против Backbone.js против Ember.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259281/" target="_blank">Node.JS Загрузка модулей по требованию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259279/" target="_blank">В поисках идеального фреймворка для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/htmlacademy/blog/259231/" target="_blank">«Когда будут курсы по JavaScript?!» или второй год в Академии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259223/" target="_blank">jQuery считается вредным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259225/" target="_blank">Gulp.watch: ловим ошибки правильно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258977/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #44</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/259207/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №162 (15 — 31 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259105/" target="_blank">Шишки об матрешку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259073/" target="_blank">Сниффинг истории браузера с помощью favicon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258971/" target="_blank">Маршрутизация по наименьшей стоимости (LCR) в Asterisk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258957/" target="_blank">TypeScript: общие впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/258901/" target="_blank">Универсальный солдат: как мы разработали и внедрили адаптивное портальное меню для всех проектов Mail.Ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258915/" target="_blank">Нововведения в Cordova 5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258731/" target="_blank">Google WebFonts и FontFaceObserver. Используем сторонние шрифты на своем веб-сайте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258713/" target="_blank">Как я считал рукопожатия или «Уверен ли ты, что хочешь знать друзей друзей друзей друзей»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/258665/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №161 (18 — 24 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258579/" target="_blank">Пост усиленного ретро</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258387/" target="_blank">Как я в библиотеке реальность дополнял</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258415/" target="_blank">Пересчет изображений под разные картографические проекции в webGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258383/" target="_blank">Scrollport.js — новая анимация скролла</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/258301/" target="_blank">50+ лучших дополнений к Bootstrap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258167/" target="_blank">Собственное контекстное меню с использованием JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/258147/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №160 (11 — 17 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258061/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #43</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/258031/" target="_blank">Новые возможности платформы VoxImplant: Instant Messaging и Presence + демо на ReactJS/Flux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/258019/" target="_blank">Asm.js пришел в Chakra и Microsoft Edge</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/257923/" target="_blank">Фреймворки JavaScript. Как изучить их по-быстрому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257889/" target="_blank">Быстрое кроссплатформенное HTML5 приложение на Framework7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257511/" target="_blank">ES6 и за его пределами. Глава 2: Синтаксис. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257825/" target="_blank">Какой JavaScript Framework используете вы? Опрос среди JS-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257813/" target="_blank">Пишем Бетховена на Javascript или немного о MIDI.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/257617/" target="_blank">Три особенности JavaScript, о которых полезно знать каждому Java/C-разработчику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/257635/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №159 (4 — 10 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257619/" target="_blank">Пишем бота для браузерной игры agar.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257355/" target="_blank">ES6 и за его пределами. Глава 1: ES? Настоящее и Будущее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257415/" target="_blank">Типограф — история продолжается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256467/" target="_blank">Разработка игры: 4 года и два новых человека</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257401/" target="_blank">Знакомимся с Fabric.js. Часть 4-я</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256339/" target="_blank">Делаем себя развидеть это, или Право на предварительную правку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257349/" target="_blank">Альтернатива HLS для iOS Safari — потоковое видео через Websocket</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/257323/" target="_blank">Асинхронный рекурсивный итератор и борьба с callback в Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257305/" target="_blank">Реализация приватных полей с помощью WeakMap в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257275/" target="_blank">Создание gulp-плагина на примере построения графа зависимостей для модулей Angular JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/257199/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №158 (27 апреля — 3 мая 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257133/" target="_blank">Билайн автоматически добавляет тулбар с поиском Mail.Ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257113/" target="_blank">Пишем систему инвайтов (приглашений) для своего Meteor-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/257007/" target="_blank">Разработка простого плагина для JIRA для работы с базой данных: придаем нашему плагину нормальный внешний вид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257053/" target="_blank">Прогресс выполнения тяжелой задачи в PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257051/" target="_blank">Html-maker — удобная и простая генерация html с помощью coffeescript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257025/" target="_blank">Поиск по странице с помощью jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257005/" target="_blank">ES6 в деталях: введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256979/" target="_blank">Создание изоморфного приложения на React и Flummox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256965/" target="_blank">Что такое Virtual DOM?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/256789/" target="_blank">Разработка простого плагина для JIRA для работы с базой данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256783/" target="_blank">Frontend Dev Conf'15 прошла 18 апреля в Минске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256817/" target="_blank">Native Script. Один код для всех платформ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/256669/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №157 (20 — 26 апреля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256505/" target="_blank">Webix. Первое знакомство с JavaScript фреймворком</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/256489/" target="_blank">Видео докладов с MoscowJS Meetup</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256325/" target="_blank">Интенс, индикатор прокрутки (или жизнь после скроллбара)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256329/" target="_blank">Играй, голова</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255865/" target="_blank">Миксины для “классов” в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cackle/blog/255477/" target="_blank">Система отзывов для интернет-магазинов — Cackle Reviews</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256095/" target="_blank">jspm — менеджер пакетов для браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256117/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #42</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/256105/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №156 (13 — 19 апреля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256027/" target="_blank">Вырезать и копировать в буффер с помощью JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256079/" target="_blank">Устранение загадочной ошибки «undefined is not a function» в V8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/255895/" target="_blank">10 основных ошибок при разработке на Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255885/" target="_blank">Новый движок учебника javascript на IO.JS в open source</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255881/" target="_blank">Работа с данными в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255837/" target="_blank">Отладка сборки javascript в IntelliJ IDEA/PHPStorm/WebStorm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255833/" target="_blank">Многопользовательский чат с использованием WebRTC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255801/" target="_blank">Обзор вредоносного браузерного расширения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255799/" target="_blank">RSA шифрование в PHP (openssl), Android/Java, JavaScript и Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255769/" target="_blank">Очень субъективный обзор JS фреймворков. AmpersandJS, часть 0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255717/" target="_blank">Результаты ежегодного исследования StackOverflow — про технологии, зарплаты, счастье и кофе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/255693/" target="_blank">JavaScript для профессиональных веб-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255653/" target="_blank">Разработка кроссплатформенного приложения с помощью Ionic Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/255599/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №155 (6 — 12 апреля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316194/" target="_blank">Настольный пульт управления на JavaScript/Node.js для робота на Ардуине</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/316072/" target="_blank">Я смог и вы сможете: делаем RPG на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/316132/" target="_blank">Консоль разработчика Google Chrome: десять неочевидных полезностей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316090/" target="_blank">Вышел Riot.js 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/315812/" target="_blank">WebRTC: Делаем peer to peer игру на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/316000/" target="_blank">Нативные приложения обречены (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315900/" target="_blank">Отличие каркаса от библиотеки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315956/" target="_blank">Intersystems DeepSee. Простая и быстрая визуализация данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315942/" target="_blank">Javascript-анимация элементов как в jQuery, только своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/315768/" target="_blank">Dart Developer Summit 2016: главные новости из мира Dart</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/255571/" target="_blank">Анонсирована превью-версия WinJS 4.0: универсальный UX, интеграция с AngularJS, обновленный ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250581/" target="_blank">RefluxJS — альтернативный взгляд на Flux архитектуру от Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255565/" target="_blank">ASN1js и PKIjs — год после создания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255485/" target="_blank">Рисование эллипса под произвольным углом в canvas на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simpleweek/blog/254681/" target="_blank">Ionic framework. Обзор экосистемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/254927/" target="_blank">(Архив) 10 причин попробовать Матрешку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255389/" target="_blank">Exploring JavaScript Symbols. Использование символов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255327/" target="_blank">Почему одного AJAX недостаточно: протокол WAMP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cackle/blog/255013/" target="_blank">Облачные сервисы под высокой нагрузкой. Опыт Cackle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/254889/" target="_blank">Matreshka.js 2: От простого к простому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/255223/" target="_blank">Отзывчивая анимация спрайтов с помощью ImageMagick и GreenSock</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255195/" target="_blank">Манипулирование БЭМ-структурой с помощью Bemy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255137/" target="_blank">Exploring JavaScript Symbols. Symbol — новый тип данных в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/253909/" target="_blank">(Архив) Вышла первая версия фреймворка Matreshka.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/254981/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №154 (30 марта — 5 апреля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254979/" target="_blank">Пишем расширение для Chrome «загрузка аудиозаписей с Вконтакте», часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254973/" target="_blank">Конвертируем svg to png</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254911/" target="_blank">MPCMeter — индикация прогресса просмотра видео. Arduino + JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254907/" target="_blank">Web Bundle — дело RarJPEG живет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/254867/" target="_blank">Анонс альфа-версии TypeScript 1.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254675/" target="_blank">Оптимизация кода с помощью RequireJS: как это делается и для чего это нужно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254767/" target="_blank">Qooxdoo. Разрабатываем TODO List</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254763/" target="_blank">Знакомимся с Fabric.js. Часть 3-я</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254713/" target="_blank">Even more jQuery?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/254507/" target="_blank">Создание универсального веб-приложения сайта Habrahabr.ru при помощи Web App Template</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254587/" target="_blank">Факториал на числах Чёрча — теперь и в смайликах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254583/" target="_blank">Очередной XSS на SoundCloud</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/254523/" target="_blank">Конструктор интерактивных упражнений для online-обучения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254437/" target="_blank">Почему Касперский определяет на сайте троян HEUR:Trojan.Script.Generic? (и возможный способ устранения)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/254413/" target="_blank">Грид, группировка данных и OData</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254357/" target="_blank">Корзинка для каталога товаров (minibasket.js)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254347/" target="_blank">Компонентный подход в разработке Blaze фронтенда для MeteorJS приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254327/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #41</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/254335/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №153 (22 — 29 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254291/" target="_blank">Разработка векторного редактора на JavaScript (часть вторая, с исходниками)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254229/" target="_blank">Dart 1.9. Релиз, который вы ждали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254213/" target="_blank">Еще одна статья про индексацию ajax-сайтов поисковиками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254195/" target="_blank">﻿Dart для всего веба</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/254105/" target="_blank">TARS, сделай уровень frontend-рутины 0%</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254103/" target="_blank">Webix 2.3. Весеннее обновление</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254031/" target="_blank">Три состояния пользователя (web-разработка)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253875/" target="_blank">Хочу таймер и счётчик загруженных строк на Web-форме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253913/" target="_blank">API для интернационализации JavaScript: реализация в Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253805/" target="_blank">Динамическое обновление веб-страницы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253761/" target="_blank">Pattern-matching (еще один) в coffeescript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/253743/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №152 (16 — 22 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253719/" target="_blank">Удаленное управление смартфоном с Node.js и Socket.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253437/" target="_blank">Модульный файловый менеджер Cloud Commander 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253595/" target="_blank">Поддержка DOM L3 XPath в Project Spartan</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253479/" target="_blank">Создание семантических сайтов с помощью веб-компонентов и JSON-LD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253515/" target="_blank">Районы… Кварталы…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253469/" target="_blank">Angular 2.0.0-alpha для тех, кто не в силах ждать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253449/" target="_blank">Как отобразить количество оповещений в названии вкладки браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253359/" target="_blank">Справочник методов console в JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253347/" target="_blank">Имплементация coroutine в NodeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253337/" target="_blank">Играем в сапера в фотошопе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253323/" target="_blank">Создание кастомного матчера для unit тестирования в Jasmine 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dsec/blog/253309/" target="_blank">Точки соприкосновения JavaScript и Reverse Engineering</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253293/" target="_blank">Как подружить Google Диск и Google Календарь? Пробуем GAS на вкус</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253103/" target="_blank">Топ10 ошибок, совершаемых при разработке на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251759/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #40</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/253125/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №151 (9 — 15 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253101/" target="_blank">Перевод книги «Выразительный Javascript» в pdf</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253081/" target="_blank">5 функций объекта Console, о которых Вы не знали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253051/" target="_blank">Создание объектов унаследованных от null на Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231169/" target="_blank">PCE.js и старое железо в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252849/" target="_blank">Переписываем Require.js с использованием Promise. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252983/" target="_blank">Показываем процесс работы непрерывной задачи на сервере, используя одно соединение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252981/" target="_blank">SummaryJS, выпуск 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252941/" target="_blank">Введение в fetch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252909/" target="_blank">Использование Marionette.Region для создания загрузочных представлений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252783/" target="_blank">Переписываем Require.js с использованием Promise. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252745/" target="_blank">Самые нужные плагины для Gulp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252733/" target="_blank">Астериск: маршрутизация по номеру звонящего и коду региона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252727/" target="_blank">Toast-уведомления, теперь и в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252653/" target="_blank">CKFinder — размеры картинок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252705/" target="_blank">NoScript теперь и для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/252657/" target="_blank">OData + Angular.js + Bootstrap + JavaScript Grid = приложение за 5 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252637/" target="_blank">Анимация против лагов, или лучшая битва та, которой не было</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252593/" target="_blank">Двух-факторная аутентификация в Meteor.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252559/" target="_blank">Еженедельник io.js, 6 марта 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252533/" target="_blank">Простой разбор URL с помощью изоморфного Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/252499/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №150 (2 — 8 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252433/" target="_blank">Супер-куки на основе HSTS отследят вас даже в приватном режиме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/252397/" target="_blank">Большая подборка ссылок о галереях и всем, что с ними связанно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252389/" target="_blank">Некоторые тонкости работы с Github и NPM — со вкусом ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252349/" target="_blank">Текстовый чат для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252337/" target="_blank">Angular 2: Построенный на TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252327/" target="_blank">SummaryJS, выпуск 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252323/" target="_blank">ECMAScript 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250825/" target="_blank">Web-технологии глазами С++ программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252291/" target="_blank">Приручаем JavaScript или очередной велосипед для frontend-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251835/" target="_blank">Разработка javascript приложений на базе Rx.js и React.js (RxReact)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252175/" target="_blank">Ресайз картинок в браузере. Все очень плохо</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252117/" target="_blank">RSConf: Обзор и видеоматериалы фронтенд-конференции в Минске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/enterra/blog/252079/" target="_blank">DuoCode: транслируем C# в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252029/" target="_blank">Использование npm для глобальной установки приложений, наделённых GUI и основанных на nw.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251955/" target="_blank">Telephone Directory</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/251965/" target="_blank">Как JavaScript Grid работает с протоколом OData</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251939/" target="_blank">Используем время простоя веб-приложения для фоновых задач</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315922/" target="_blank">React.js на русском языке. Часть четвертая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315882/" target="_blank">От Jquery UI до Ext.js: обзор библиотек виджетов для построения интерфейса на JS. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315736/" target="_blank">Портирование Android-приложения на WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315526/" target="_blank">Функциональное тестирование современных web-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/315772/" target="_blank">React.js State of the art (интервью с Max Stoiber)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315770/" target="_blank">Qemu.js с поддержкой JIT: фарш всё же можно провернуть назад</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315716/" target="_blank">React.js на русском языке. Часть третья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315666/" target="_blank">Как Phoenix убивает React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/315700/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №237 (14 — 20 ноября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315480/" target="_blank">Управление роботом на Ардуино из приложения на Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251807/" target="_blank">Ещё один пост о сборке front-end проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/251849/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №149 (24 февраля — 1 марта 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251801/" target="_blank">SummaryJS, выпуск 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251077/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #39</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251783/" target="_blank">Введение в разработку слайд-шоу на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251729/" target="_blank">Практика функционального программирования на JavaScript с использованием Ramda</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251723/" target="_blank">Создаём своё первое десктопное приложение при помощи HTML, JS и Node-WebKit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251705/" target="_blank">«Реверс-инжиниринг» клиентского приложения в образовательном центре</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/251473/" target="_blank">Сайт с нуля на полном стеке БЭМ-технологий. Методология Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251477/" target="_blank">Честные приватные свойства в прототипе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251467/" target="_blank">React v0.13 RC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/251421/" target="_blank">Повышаем стабильность Front-end</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/251329/" target="_blank">Статические анализаторы JavaScript и ошибки, от которых они помогут отучиться (Часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251307/" target="_blank">node-seq на новый лад (опять про асинхронность)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/251283/" target="_blank">BattleGIS — JavaScript-движок для игры в Танчики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/251277/" target="_blank">Статические анализаторы JavaScript и ошибки, от которых они помогут отучиться (Часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218389/" target="_blank">Гибридные приложения в Qt на примере использования D3.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/251215/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №148 (16 — 22 февраля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/251185/" target="_blank">OData REST API и рекурсивные запросы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251175/" target="_blank">Решение задачи сброса тяжелой логики на одну из множества открытых вкладок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251157/" target="_blank">Самые нужные плагины для Grunt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251111/" target="_blank">SummaryJS, выпуск 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/251035/" target="_blank">Изучаем программирование на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250957/" target="_blank">СМС-рассылка с Google Sheets API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250943/" target="_blank">Построение анимированной круговой диаграммы на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/250913/" target="_blank">Управление данными с помощью протокола OData</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250897/" target="_blank">Konva.js — HTML5 2d canvas framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250891/" target="_blank">Общение скриптов из разных вкладок браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250807/" target="_blank">Визуальный брутфорс на примере решения 3D-головоломки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250771/" target="_blank">Улучшаем код JavaScript на примере StarWars API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/comet-server/blog/250719/" target="_blank">Реализация обмена сообщениями между вкладками браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250637/" target="_blank">Подробно о внутренней кухне AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/250631/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №147 (9 — 15 февраля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250589/" target="_blank">Angular Light + Object.observe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250569/" target="_blank">Приятная сборка frontend проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249417/" target="_blank">Breeze Server — разграничиваем доступ к объектам при помощи атрибутов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250513/" target="_blank">Node v0.12.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250481/" target="_blank">Сад JavaScript: Объекты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250435/" target="_blank">SummaryJS: самое интересное из мира JavaScript за последнюю неделю</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250393/" target="_blank">Vibration API: кому и зачем это нужно?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250311/" target="_blank">Очень быстрые классы на JavaScript с красивым синтаксисом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250239/" target="_blank">Еще один способ сжатия CSS файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250205/" target="_blank">От React до Riot 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250191/" target="_blank">Бинарные операции над упорядоченными множествами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250129/" target="_blank">Используем SVG (часть первая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250103/" target="_blank">Как мы готовим React, Require и Backbone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/250063/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №146 (2 — 8 февраля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249783/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #38</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250021/" target="_blank">Избавляемся от JavaScript в социальных кнопках (Facebook, VK, Twitter и др.)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249973/" target="_blank">Альтернативный бейдж для страниц Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249969/" target="_blank">Пуленепробиваемые тесты JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249949/" target="_blank">Надёжный localStorage для букмарклетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249929/" target="_blank">Случайный лабиринт на JS в сами знаете сколько строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/249793/" target="_blank">Нетрадиционный обзор AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249751/" target="_blank">Меняем CoffeeScript на ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249733/" target="_blank">Как MooTools jQuery заборол, или детектив в стиле Коломбо</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249653/" target="_blank">Изоморфный БЭМ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249631/" target="_blank">Первая разработка и публикация игры в соцсетях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247935/" target="_blank">О input[type=range], параметре multiple и как сделать, чтобы всё работало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/249579/" target="_blank">Нетрадиционный обзор React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249373/" target="_blank">Как распутывать лапшу, не впадая в депрессию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249525/" target="_blank">Ошибки в JavaScript и как их исправить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249473/" target="_blank">Wallaby.js — маленький зверь с большим будущим</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248139/" target="_blank">IO.js или старые грабли под новым соусом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/249441/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №145 (26 января — 1 февраля 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249393/" target="_blank">Анонс React Native</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249379/" target="_blank">Опубликован официальный Node.JS-драйвер для базы данных Oracle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249371/" target="_blank">Делаем игру 2048 на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249367/" target="_blank">Templater — менеджер шаблонов и твикер для MantisBT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249279/" target="_blank">Flux для глупых людей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249231/" target="_blank">Ещё один способ сборки TypeScript проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249195/" target="_blank">Философия Ember.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249189/" target="_blank">Издеваемся над Google Cast, или мышь для телевизора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249175/" target="_blank">Conveyor — поэлементная обработка данных с временной задержкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249103/" target="_blank">Кривые Безье-де Кастельжо. Canvas HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249107/" target="_blank">ReactJS для глупых людей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249091/" target="_blank">Расширение для нормального выделения текста внутри ссылки в браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249087/" target="_blank">FutoIn AsyncSteps: концепция и реализация асинхронной бизнес-логики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248999/" target="_blank">Генерирование фейковых данных для вашего JavaScript-приложения с помощью Faker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248955/" target="_blank">Aurelia — новый современный JS-фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248875/" target="_blank">Meteor. А теперь загрузка фоточек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/248869/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №144 (19 — 25 января 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248799/" target="_blank">Краткое руководство по React JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246259/" target="_blank">Игровой мир WebGL или Three.js vs Babylon.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248783/" target="_blank">Караоке на HTML5 canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248715/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #37</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248605/" target="_blank">Пилотируем облачную MongoDB через VanillaJS или как бесплатно сделать приватный todo-лист за 15 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248601/" target="_blank">Любителям Ruby и Coffeescript — очередной велосипед?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248511/" target="_blank">Сайт без бекэнда: аутентификация пользователя в BaaS parse.com через социальные сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248507/" target="_blank">WebSocket RPC или как написать живое WEB приложение для браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247731/" target="_blank">Рисуем анимированную сцену с помощью css</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237501/" target="_blank">Гибкое управление событиями в jQuery — плагин jquery-behavior</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248465/" target="_blank">Как мы дружили Neo4j и Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/248397/" target="_blank">Пора заменить Python как язык для обучения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248371/" target="_blank">Unity3D — кроссфейд, основы работы со звуком (урок)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248331/" target="_blank">Вычисление факториала на числах Чёрча</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248263/" target="_blank">Быстрый голосовой набор на Asterisk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/248225/" target="_blank">Расследование Яндекса: full disclosure о вирусе на Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248229/" target="_blank">Бинарные операции над неупорядоченными множествами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/248177/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №143 (12 — 18 января 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315630/" target="_blank">React.js на русском языке. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/315572/" target="_blank">Какой язык программирования стоит выучить первым? (ʇdıɹɔsɐʌɐɾ: ɯǝʚɯо ņıqнqvиʚɐdu)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/315558/" target="_blank">Представляем библиотеку right-angled, конструктор гридов для angular2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/1c/blog/315414/" target="_blank">Про веб-клиент 1С</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315466/" target="_blank">React.js на русском языке. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315152/" target="_blank">Ваш язык программирования — отстой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/web_payment_ru/blog/313294/" target="_blank">Обзор децентрализованных крипто-платформ. Часть 2: Lisk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315410/" target="_blank">Двусторонний binding данных с ECMAScript-2015 без Proxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315382/" target="_blank">GraphQL CMS, вторая версия уже в открытом доступе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315204/" target="_blank">Функциональный TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248111/" target="_blank">Пишем быстрый и экономный код на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247857/" target="_blank">Все способы перебора массива в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247893/" target="_blank">Список YouTube-каналов для обучения веб-разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247849/" target="_blank">Meteor. Как же запилить этот ваш iron:router для CRUD?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247847/" target="_blank">Простой парсинг сайтов с помощью SlimerJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247837/" target="_blank">Свершилось! io.js Version 1.0.1 (Beta stability) released!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247811/" target="_blank">Трёхмерный фон для сайта в реальном времени на JavaScript при помощи three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247809/" target="_blank">Возможно, первая игра на Dart + Box2D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247739/" target="_blank">Задача коммуникации между вкладками и выявления активной вкладки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247735/" target="_blank">Грядёт io.js 1.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247727/" target="_blank">Простой диспетчер задач с веб-интерфейсом, на GO для Unix-систем, включая Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247719/" target="_blank">Material Design и AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247543/" target="_blank">Impress Application Server простыми словами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/247593/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №142 (5 — 11 января 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247469/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #36</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247571/" target="_blank">Звездное небо на webGL с использованием three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247473/" target="_blank">JSON, который можно комментировать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247347/" target="_blank">(псевдо)Наследование для компонентов ReactJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247325/" target="_blank">Краткая заметка про наследование в Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/247323/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №141 (29 декабря 2014 — 4 января 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247283/" target="_blank">Учебник AngularJS: Всеобъемлющее руководство, часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247257/" target="_blank">Закон Фиттса или как его использовать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/247229/" target="_blank">Тренды JavaScript на 2015 год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247185/" target="_blank">Наследуем тип .NET от JavaScript объекта с перегрузками и приватными методами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247049/" target="_blank">em-dosbox и 50 подарков на новый год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246959/" target="_blank">Разбираемся с Flux, реактивной архитектурой от facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247077/" target="_blank">Распознавание лиц в 4 строки на JQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247073/" target="_blank">Экспрессивный ReactJS или тырим фичи Angular в наш фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/247033/" target="_blank">Руководство хакера по нейронным сетям. Глава 2: Машинное обучение. Более традиционный подход: Функции потерь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246981/" target="_blank">Numcap — npm для определения оператора и региона по номеру телефона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246999/" target="_blank">DOM-а хватит на всех, или как помирить ReactJS с тем фактом, что сторонние библиотеки меняют его DOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/246973/" target="_blank">Руководство хакера по нейронным сетям. Глава 2: Машинное обучение. Обобщаем SVM до нейронной сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/246957/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №140 (22 — 28 декабря 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246909/" target="_blank">Реализация Sunburst Chart на JavaScript и HTML5 Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246907/" target="_blank">15 лучших JavaScript-библиотек для построения диаграмм и сводных таблиц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246905/" target="_blank">Почему вам НЕ стоит использовать AngularJs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246881/" target="_blank">Учебник AngularJS: Всеобъемлющее руководство, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/246849/" target="_blank">Руководство хакера по нейронным сетям. Глава 2: Машинное обучение. Обучение сети на основе метода опорных векторов (SVM)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246837/" target="_blank">Введение в всплывающие события</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246829/" target="_blank">Авторизация пользователей с AngularJS и Firebase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246621/" target="_blank">История одного маленького эксперимента с Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/246557/" target="_blank">Суперсилы Chrome DevTools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/246523/" target="_blank">Руководство хакера по нейронным сетям. Глава 2: Машинное обучение. Бинарная классификация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246435/" target="_blank">Типичные исправления после обновления Windows Store приложений с версии 8 до 8.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246373/" target="_blank">Sortable v1.0: Новые возможности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245557/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #35</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/246413/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №139 (15 — 21 декабря 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/246397/" target="_blank">Руководство хакера по нейронным сетям. Схемы реальных значений. Становимся мастером обратного распространения ошибки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246347/" target="_blank">Отправка писем с помошью Javascript, и один из способов «Сообщить об опечатке на сайте»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246331/" target="_blank">Выразительный JavaScript: Проект: Веб-сайт по обмену опытом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246329/" target="_blank">Новогодний розыгрыш</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246125/" target="_blank">Работа с ngCordova в Cordova приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246097/" target="_blank">Проблема «7-го января»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/246093/" target="_blank">Руководство хакера по нейронным сетям. Схемы реальных значений. Шаблоны в «обратном» потоке. Пример «Один нейрон»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245791/" target="_blank">Пошаговая инструкция: залог для сделок в bitcoin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/245945/" target="_blank">Создание универсальных веб-приложений при помощи Web App Template</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245921/" target="_blank">Тестируем Mighty Editor и Phaser. HTML5 игра за час</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245991/" target="_blank">webpack: 7 бед — один ответ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245909/" target="_blank">Строим фронтэнд вместе с ErgoJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/textolite/blog/245867/" target="_blank">Textolite 1.04: можно создавать шаблоны и редактировать скрипты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/245831/" target="_blank">Как добавить карты Bing Maps в Windows-приложение на HTML и JavaScript. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/245817/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №138 (8 — 14 декабря 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245775/" target="_blank">Выразительный JavaScript: Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245767/" target="_blank">Выразительный JavaScript: Проект: программа Paint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245731/" target="_blank">Выразительный JavaScript: Формы и поля форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/245683/" target="_blank">Как добавить карты Bing Maps в Windows-приложение на HTML и JavaScript. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/245361/" target="_blank">5 историй успеха, которые бы не случились без promises</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/245405/" target="_blank">Как использовать GamePad в браузере и в приложениях для Windows на HTML и JavaScript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/245403/" target="_blank">Руководство хакера по нейронным сетям. Схемы реальных значений. Схемы с несколькими логическими элементами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245269/" target="_blank">Как изобрести велосипед и познакомиться с FRP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245263/" target="_blank">GSON. Добавим ему немного строгости и решаем проблему переполнения памяти при обработки больших JSON файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245239/" target="_blank">Функциональное программирование на CoffeeScript с библиотекой f_context</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245213/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #34</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/245223/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №137 (1 — 7 декабря 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242459/" target="_blank">Проблемы даты и времени в JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244721/" target="_blank">Пересмотренное руководство по Grunt для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245145/" target="_blank">Выразительный JavaScript: HTTP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245109/" target="_blank">Анонс новых возможностей Typescript 1.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/245051/" target="_blank">Руководство хакера по нейронным сетям. Схемы реальных значений. Стратегия №3: Аналитический градиент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245049/" target="_blank">AngularJS + UI Router: проверка авторизации и прав доступа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/bitcalm/blog/244725/" target="_blank">Быстрая настройка Grunt для комфортной разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245013/" target="_blank">Раскол nodejs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/244949/" target="_blank">День рождения JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/244791/" target="_blank">Polymer: транскрипт видео с Google I\O</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/244935/" target="_blank">Руководство хакера по нейронным сетям. Схемы реальных значений.Стратегия №2: Числовой градиент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244925/" target="_blank">AngularJS 1.x – перевод курса от CodeSchool</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244839/" target="_blank">Cемантическое слияние JSON файлов в Git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/244745/" target="_blank">Мысли вслух о разработке javascript-приложений на примере небольшого Line Of Business фреймворка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/243163/" target="_blank">WinJS + универсальные приложения. Изучаем навигацию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/paysto/blog/244723/" target="_blank">Руководство хакера по нейронным сетям. Схемы реальных значений. Стратегия №1: Произвольный локальный поиск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244715/" target="_blank">Скрипт сворачивания комментариев на хабре</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244681/" target="_blank">Sublime Text для фронтэнд-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/regru/blog/224919/" target="_blank">BabelFish — полиглот в мире JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244651/" target="_blank">JavaScript выходит за пределы Web в 2014 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244641/" target="_blank">Как мы в django-проекте js собираем + пара хитростей в Gulp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/244587/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №136 (24 — 30 ноября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244545/" target="_blank">Выразительный JavaScript: Рисование на холсте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244435/" target="_blank">Скрипт на NodeJS для Backup-а данных: Окончание</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243351/" target="_blank">Код, которого нет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244405/" target="_blank">Выразительный JavaScript: Проект: Игра-платформер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315200/" target="_blank">Производительность межпроцессного обмена сообщениями в node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simbirsoft/blog/315194/" target="_blank">СМАРТ ТВ – будущее телевидения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315186/" target="_blank">CleverScrollbar.js — Сайдбар для понятной навигации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/315180/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №236 (7 — 13 ноября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312880/" target="_blank">Математика в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315038/" target="_blank">Анализ вредоносного расширения Google chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314978/" target="_blank">Jasmine vs. Mocha, Chai и Sinon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uteam/blog/314796/" target="_blank">Как мы запускали Хабр для гуманитариев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/amperka/blog/314894/" target="_blank">Множество JS-пакетов в одном репозитории</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/teamlab/blog/314716/" target="_blank">Теперь ONLYOFFICE может всё: добавляем плагины в редакторы документов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244283/" target="_blank">Видео с доклада Виталия Фридмана «Responsive Web-дизайн: Трюки и уловки»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244273/" target="_blank">Система разработки, сочетающая ExtJS и Node.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244223/" target="_blank">Скрипт на NodeJS для Backup-а данных: Начало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244219/" target="_blank">В одной упряжке Polymer’ы, Dart и Firebase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244209/" target="_blank">Создание AngularJS приложения c использованием Firebase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244203/" target="_blank">Построение параллельных кривых в картографических веб-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244041/" target="_blank">Выразительный JavaScript: Обработка событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244001/" target="_blank">AngularJs $parse hacks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/243987/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №135 (17 — 23 ноября 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243963/" target="_blank">Незакрываемая вкладка в Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243945/" target="_blank">Node.js в огне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243815/" target="_blank">Выразительный JavaScript: Document Object Model (объектная модель документа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243779/" target="_blank">Highlighting в браузере или пишем очередное расширение для Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243713/" target="_blank">Flow — статический анализ типов в JS от Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243685/" target="_blank">Решение проблем с RTZ2 после Microsoft Update KB2998527</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243457/" target="_blank">Солнечная система на graphics2d.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243579/" target="_blank">Eskimo — Node.js бойлерплэйт для создания прототипов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243565/" target="_blank">Использование RequireJS в приложениях AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216997/" target="_blank">Размышления о стандартной библиотеке JavaScript. Core.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243495/" target="_blank">Вселенная npm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240779/" target="_blank">Создаем собственные виджеты в Dojo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243421/" target="_blank">Печать из Google Apps Script</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243403/" target="_blank">Краткий конспект по языку JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243399/" target="_blank">Алгоритмы и решения при разработке движка JavaScript на C#</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243397/" target="_blank">Well.js – еще один подход к модульной разработке на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243343/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #33</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243335/" target="_blank">npm для простых смертных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243311/" target="_blank">Выразительный JavaScript: JavaScript и браузер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243277/" target="_blank">Выразительный JavaScript: Проект: язык программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243273/" target="_blank">Выразительный JavaScript: Модули</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243271/" target="_blank">Простой односторонний универсальный коннектор для Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/242903/" target="_blank">WinJS + универсальные приложения. Изучаем ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243143/" target="_blank">AngularJS 1.3 и ES6 — как использовать их вместе уже сейчас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242943/" target="_blank">Meteor. Разрабатываем TODO List</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242835/" target="_blank">GamepadAPI или джойстик в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242767/" target="_blank">ECMAScript 6 Promises</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242301/" target="_blank">Nexus 5 + JavaScript + 48 часов = сенсорная поверхность?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242697/" target="_blank">Особенности загрузки объектов из карты формата KML на карту Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241275/" target="_blank">Ecmascript 6 — что можно использовать уже сейчас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242695/" target="_blank">Выразительный JavaScript: Регулярные выражения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242643/" target="_blank">Создаем портфолио на основе фотографий из Instagram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242623/" target="_blank">Brackets для сомневающихся и новичков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242609/" target="_blank">Выразительный JavaScript: Поиск и обработка ошибок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/241863/" target="_blank">Установка библиотеки WinJS 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/242415/" target="_blank">Новый WebStorm 9: просто лучше. Поддержка Meteor, React и JSX, интеграция с Gulp, PhoneGap и многое другое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/242503/" target="_blank">Как инкрементальные обновления влияют на скорость загрузки. Опыт Яндекс.Почты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242407/" target="_blank">Эволюция Yahoo Mail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239261/" target="_blank">Graphics2D.js — объекты, интерактивность, анимация на canvas… И ничего лишнего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242379/" target="_blank">Продвинутый Gulp и Browserify: интересные трюки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241539/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #32</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242161/" target="_blank">Работа веб-проекта в условиях нестабильного подключения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240773/" target="_blank">Атом — реализация на TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241861/" target="_blank">Вышел Meteor 1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241776/" target="_blank">Выразительный JavaScript: Проект «Электронная жизнь»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241766/" target="_blank">markdown-it — парсер markdown / CommonMark на стероидах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241722/" target="_blank">Пишем Windows Phone JavaScript дебаггер для Apache Cordova</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/241744/" target="_blank">TypeScript и путь к версии 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241587/" target="_blank">Выразительный JavaScript: Тайная жизнь объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241515/" target="_blank">WebJars + RequireJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241465/" target="_blank">Продвинутое использование объектов в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241359/" target="_blank">Решение проблемы со временем в ExtJS 3 (после patch'а KB2998527)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240969/" target="_blank">Изучаем Javascript перебирая косточки Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241255/" target="_blank">Pooling соединений к базе данных на node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240775/" target="_blank">Работа с COM портом в web-проекте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241215/" target="_blank">GLPI и последние обновления временных зон в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241161/" target="_blank">Как я завел дружбу с асинхронностью в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241155/" target="_blank">Выразительный JavaScript: Функции высшего порядка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241131/" target="_blank">Создание расширения для Chrome за пару часов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241111/" target="_blank">Перевод книги «The Little Book on CoffeeScript»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241023/" target="_blank">BlackHole.js с привязкой к картам leaflet.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/241089/" target="_blank">Мобильные приложения для веб-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240997/" target="_blank">Распознавание жестов в sketchometry</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239165/" target="_blank">PassGenJS. Генерируем пароли в Javascript с указанием надёжности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240837/" target="_blank">Готовим свой первый веб-компонент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240861/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #31</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240819/" target="_blank">Эквалайзер на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240713/" target="_blank">Разбор Underscore</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240807/" target="_blank">NodeMap, но не то, что вы подумали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240813/" target="_blank">Выразительный JavaScript: Структуры данных: объекты и массивы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240539/" target="_blank">Duo.js — новое поколение пакетного менеджера для фронтэнда</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240533/" target="_blank">СМС-термометр из связки Google script, Google Doc, Wolfram-Alpha и Sms.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240485/" target="_blank">Последовательное выполнение задач в Gulp JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239259/" target="_blank">sketchometry — динамическая геометрия в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/240373/" target="_blank">Новый курс от Школы разработки интерфейсов. В Екатеринбурге и везде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240375/" target="_blank">Объекты в JavaScript и создание JS-компонента. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240357/" target="_blank">5 популярных JavaScript-хаков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/240333/" target="_blank">WinJS 3.0 – релиз для всех платформ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240349/" target="_blank">Выразительный JavaScript: Функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240301/" target="_blank">Новая таймзона — новые проблемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240265/" target="_blank">Использование Backbone.js при работе c html5 canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240259/" target="_blank">AngularJS 1.3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239927/" target="_blank">Новости из мира Node: Node 0.11.14, svgexport, node-webkitgtk, Nightmare, Prototypes, node-libpq и node-pg-native</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240225/" target="_blank">Выразительный JavaScript: Структура программ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240223/" target="_blank">Выразительный JavaScript: Величины, типы и операторы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240219/" target="_blank">Выразительный JavaScript: Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238755/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #30</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225405/" target="_blank">JavaScript: проверьте свою интуицию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232911/" target="_blank">Unit тестирование в js. YATS — поделка для написания юнит тестов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240083/" target="_blank">jQuery.viewport или как я искал элементы на экране</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229887/" target="_blank">Замыкания в Javascript [Часть 2]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314752/" target="_blank">React'ивные Panel'и</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314766/" target="_blank">Горячая перезагрузка Chrome-расширения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314554/" target="_blank">Be King of your state with Angular2 State Machine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/314552/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №235 (1 — 6 ноября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314540/" target="_blank">Установка node.js на Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314472/" target="_blank">Кодируем музыку в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314326/" target="_blank">Из Firefox 52 удалят API уровня заряда аккумулятора для сохранения приватности пользовательских данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314394/" target="_blank">Делаем проект на Node.js с использованием Mongoose, Express, Cluster. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314204/" target="_blank">Автоматически генерируемая CMS использую вашу готовую GraphQL-схему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313392/" target="_blank">Паттерн Стратегия на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/239993/" target="_blank">Сборка проектов с помощью Gulp.js. Семинар в Яндексе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239863/" target="_blank">Всё, что вы хотели знать об областях видимости в JavaScript (но боялись спросить)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239859/" target="_blank">JSXML или работа с xml\xslt в javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239853/" target="_blank">Создаем видеостену с трансляцией изображения с ip-камер через спутник с минимумом трафика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239573/" target="_blank">Автоматизированный шаблон для front-end проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/239461/" target="_blank">Node.js в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239635/" target="_blank">Создание приложений OS X с помощью JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/238709/" target="_blank">Знакомимся с элементами управления библиотеки WinJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239149/" target="_blank">Sqimitive.js — Frontend Primitive или «Backbone без фантиков»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239323/" target="_blank">Система пакетов в Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239423/" target="_blank">Хром, укравший рождество</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239353/" target="_blank">Видео докладов с FrontTalks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239275/" target="_blank">jQuery плагин Social-feed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239065/" target="_blank">JavaScript. Вопросы на собеседовании</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239045/" target="_blank">Средство для очистки мыслей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238171/" target="_blank">Разбираемся с монадами с помощью Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/swarm/blog/238785/" target="_blank">Holy Grail на стероидах: тотальная синхронизация и изоморфный JavaScript на Swarm.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238689/" target="_blank">Новости из мира Node: npm 2.0, nvm для Windows, xtpl</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238643/" target="_blank">ТТТ: jQuery-плагин анимации текста от Contorra</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238519/" target="_blank">Схема лифта на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/238499/" target="_blank">Распродажа электронных книг по 99 рублей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237697/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #29</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238197/" target="_blank">Arr.js: события для стандартного массива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237933/" target="_blank">[Подборка] Melchior.js, ng-admin, Hello.js, ineed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238095/" target="_blank">Знакомство с Koa или coroutine в nodejs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238007/" target="_blank">Генератор функциональных парсеров на JavaScript (с трансдьюсерами)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238001/" target="_blank">Алгоритмы поиска путей на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237959/" target="_blank">[Перевод] Проблема конструкторов JavaScript и три способа её решения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237733/" target="_blank">Трансдьюсеры в JavaScript. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237755/" target="_blank">Власти требуют у студентов исходный код js-майнера Tidbit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237613/" target="_blank">Трансдьюсеры в JavaScript. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/237643/" target="_blank">Использование SQLite в Windows и Windows Phone приложениях на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237615/" target="_blank">Пишем тестопригодный javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236683/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #28</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237495/" target="_blank">Kefir.js — новая библиотека для функционального реактивного программирования (FRP) в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237421/" target="_blank">Веб-компоненты в реализации Polymer от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/237333/" target="_blank">WinJS + универсальные приложения. Изучаем FlipView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/236621/" target="_blank">Команда разработчиков графического языка Processing представила официальную JavaScript-библиотеку p5.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237287/" target="_blank">От парусов до кракена, или как я фреймворк выбирал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237279/" target="_blank">Смелый стайлгайд по AngularJS для командной разработки [2/2]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/237265/" target="_blank">Khan Academy разработала быструю JavaScript-библиотеку для работы с математическими формулами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237127/" target="_blank">Как я участвовал в конкурсе маленьких игр js13kGames</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237083/" target="_blank">BiMap, jQuery breakpoint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237029/" target="_blank">Связанные списки в ExtJs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236973/" target="_blank">Музейные приключения с телефоном</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236809/" target="_blank">Тайловая графика в Phaser.js и принципы построения тайловых карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236787/" target="_blank">Сюрреализм на JavaScript. Советы по разработке на NodeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236785/" target="_blank">Принципы написания кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236699/" target="_blank">Вывод видео с нескольких web-камер на одной странице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/theonlypage/blog/236741/" target="_blank">Букмарклет: разбор существенных моментов, часть третья, резервная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236713/" target="_blank">Пост о маленьких видеоиграх</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236481/" target="_blank">Новости из мира Node: promise.io, copromise, Apper</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236455/" target="_blank">Часы на кривых Безье</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236447/" target="_blank">Проблемы поиска утечки памяти в веб-приложении с помощью Chrome DevTools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/236437/" target="_blank">Windows Phone + WinJS. Изучаем Pivot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236335/" target="_blank">Новости из мира Node: DataCollection.js, Supererror, Readability</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/236343/" target="_blank">Выпущен WebStorm 9 EAP v.2 — что добавили на этот раз?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/theonlypage/blog/236315/" target="_blank">Букмарклет: разбор существенных моментов, часть вторая, подгружаемая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236223/" target="_blank">[Перевод] Cross-Storage: Сделайте локальные данные доступными между доменами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236159/" target="_blank">Визуализация npm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235937/" target="_blank">Scrawl — скриншотер сайтов и безопасность веб-интерфейсов SIP-устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236045/" target="_blank">Вы разрушили HTML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235545/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #27</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235943/" target="_blank">Как я создавал плагин постраничной прокрутки One Page Scroll с открытым исходным кодом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235873/" target="_blank">Смелый стайлгайд по AngularJS для командной разработки [1/2]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235333/" target="_blank">JavaScript метод insertAdjacentHTML и beforeend</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235741/" target="_blank">Пишем проигрыватель lossless аудио на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235675/" target="_blank">Ractive.js — бриллиантовый век web-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235639/" target="_blank">[Перевод] Новости из мира Node: Tint, Redbird</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235603/" target="_blank">Эдди Османи: Паралич выбора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235567/" target="_blank">Очень простой язык программирования для web-дизайнеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235447/" target="_blank">[Перевод] Введение в Gulp, Grunt, Bower, и поддержка npm в Visual Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/234905/" target="_blank">Масштабирование наоборот: БЭМ-методология Яндекса на небольших проектах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235395/" target="_blank">Делаем Angular.js сайт доступным для роботов. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235205/" target="_blank">Небольшие полезности для CoffeeScript разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234417/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #26</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235121/" target="_blank">Атом — минимальный кирпичик FRP приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235035/" target="_blank">В Firefox Developer Tools добавлена поддержка событий jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234545/" target="_blank">Pixi-editor — простая рисовалка на pixi.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234447/" target="_blank">Как заставить background-size работать в старых IE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/theonlypage/blog/234427/" target="_blank">Букмарклет: разбор существенных моментов, часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234279/" target="_blank">Несколько интересностей и полезностей от веб-разработчика *</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234409/" target="_blank">BaasCMS – бэкенд не нужен</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233987/" target="_blank">Полная стоимость кредита(займа) – пример/алгоритм расчета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233959/" target="_blank">Генерируем простую музыку в браузере с Web Audio API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233827/" target="_blank">Основы работы с модулями в Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233705/" target="_blank">Настоящее модульное тестирование в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233651/" target="_blank">Пишем Chrome расширение на CoffeeScript — подсчет баллов на Coursera</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/233657/" target="_blank">Интервью с разработчиками на TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233527/" target="_blank">3 новых JavaScript API, которые вам стоит узнать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/233553/" target="_blank">10 самых распространённых ошибок при программировании на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233483/" target="_blank">Лучшие интересности и полезности за год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233453/" target="_blank">Разработка векторного редактора на JavaScript (сложности и идеи)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233189/" target="_blank">JavaScript Dynamic Content shim для Windows JavaScript Apps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/202022/" target="_blank">Построение собственного JS SDK — зачем и как?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232989/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #25</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232965/" target="_blank">Эмоции.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232861/" target="_blank">yandex-speech — wrapper к речевым технологиям Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232851/" target="_blank">Dependency Injection. JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232823/" target="_blank">Ресурсы в архиве или как уменьшить количество подгружаемых файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314186/" target="_blank">Построение MVC приложения на Node.js с кластертзацией и исполнением кода в песочнице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314180/" target="_blank">Добавление аватара, обрезка фото на мобильном устройстве и десктопе на JavaScript и PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314172/" target="_blank">JavaScript и SEO в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313966/" target="_blank">Redux-form. Когда работать с формами просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/313726/" target="_blank">Интервью c Max Stoiber и Сергеем Лапиным: Выбираем state management решение для React.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311172/" target="_blank">$mol: reactive micromodular ui-framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cit/blog/313254/" target="_blank">Теория категорий на JavaScript. Часть 1. Категория множеств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/313968/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №234 (24 — 30 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313964/" target="_blank">Каково это, на самом деле, писать на JavaScript в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313922/" target="_blank">Скроллинг контента методом касания и перетаскивания на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232671/" target="_blank">Асинхронный JavaScript: без колбеков и промисов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/231347/" target="_blank">(Архив) Matreshka.js — долгожданная реализация TodoMVC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232219/" target="_blank">AngularJS: настраиваем событие инициализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232191/" target="_blank">Dalek.js — простое функциональное тестирование веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232305/" target="_blank">Сессии в PHP — подводный камушек при асинхронных запросах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232249/" target="_blank">Введение в Bookshelf.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/232229/" target="_blank">Инъекция React JS в приложение на Angular JS или борьба за производительность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232073/" target="_blank">URL.js или дружим JavaScript с обработкой ссылок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232103/" target="_blank">Node.js + HTML5 + js = online action game. Игра на Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/231333/" target="_blank">(Архив) Matreshka.js v0.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232023/" target="_blank">Контроллеры директив в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231987/" target="_blank">Платформер на Three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231883/" target="_blank">Создание модулей JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231853/" target="_blank">Сотни неработающих сайтов, или о том, как code.jquery.com забыли продлить SSL-сертификат</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231239/" target="_blank">Фильтр для комментариев Хабрахабра в виде userscript: версия 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231637/" target="_blank">Удобная документация для тех, кто хочет изучать FRP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231411/" target="_blank">Разбираемся с bind и bindAll в Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230927/" target="_blank">JavaScript для… настольного IP телефона?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231151/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #24</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231071/" target="_blank">Собеседование на должность JavaScript разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230753/" target="_blank">Как устроен Grunt: смотрим исходники</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230951/" target="_blank">Строим маршруты с помощью OpenStreetMap, OSRM и Leaflet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootuamedia/blog/230893/" target="_blank">Онлайн-трансляция WebCamp 2014: Developer Day</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230831/" target="_blank">NPM 2.0.0 & передача аргументов в run-script</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230821/" target="_blank">Немного о npm-scripts</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230761/" target="_blank">С большой силой приходит и большая ответственность — техника безопасности в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230649/" target="_blank">Функциональный Javascript. Пишем свои линзы, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230625/" target="_blank">Просмотр DOM-событий в Firefox Developer Tools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230449/" target="_blank">18 неожиданностей при чтении исходного кода jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230269/" target="_blank">Построение надежных веб-приложений на React: Часть 4, серверная генерация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/bankrot-pro/blog/230441/" target="_blank">JQuery Deferred — примеры использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230405/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #23</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/htdt/blog/230323/" target="_blank">Особенности разработки WebGL игры Digital Trip</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/trackduck/blog/230257/" target="_blank">Лучшие способы использования Angular.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230229/" target="_blank">Задача по расположению фигур в игре «Тетрис»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230215/" target="_blank">Генплан посёлка на основе Яндекс api v2 или как соотнести координаты картинки и карты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229987/" target="_blank">Построение надежных веб-приложений на React: Часть 3, тестирование с Jasmine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229853/" target="_blank">Построение надежных веб-приложений на React: Часть 2, оптимизация с Browserify</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229893/" target="_blank">Функциональный JavaScript, Часть 1: Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227435/" target="_blank">Никогда не «не делай» того, о чем пожалеешь или умный дом с CCU.IO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229655/" target="_blank">Построение надежных веб-приложений на React: Часть 1, браузерные прототипы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/229811/" target="_blank">WinJS на Windows Phone 8.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229743/" target="_blank">Node.js + JQuery Ajax. Загрузка файлов на сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/luxoft/blog/229791/" target="_blank">Мастер-класс Адама Бина «Java EE: Архитектура, шаблоны и решения»: отзывы и впечатления участников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229691/" target="_blank">Angular Light 0.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229629/" target="_blank">5 практических примеров для изучения фреймворка React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229607/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #22</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229247/" target="_blank">Легкая и динамическая бизнес логика на JavaScript при помощи Mozilla Rhino</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/moscowjs/blog/229563/" target="_blank">Материалы MoscowJS 12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229537/" target="_blank">Morearty.js — новая pure JavaScript прослойка над React для разумного управления состоянием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229449/" target="_blank">Псевдо-случайное изображение (на примере страницы 404-й ошибки)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229495/" target="_blank">po.js — супер простая утилита для i18n</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229329/" target="_blank">JavaScript модули</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229395/" target="_blank">Генерация картинок для Android приложения из SVG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229339/" target="_blank">Адаптивная верстка с Restive.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224073/" target="_blank">Node.js: Обзор технологий разработки библиотек общего назначения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229225/" target="_blank">AngularJS: как я отказался от ng-include и связал состояния двух контроллеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229189/" target="_blank">Кастомные события JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229177/" target="_blank">Рациональная автоматизация кампании в Google AdWords</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229125/" target="_blank">Создаем платформер за четыре вечера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229071/" target="_blank">Даем анимации жизнь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/229097/" target="_blank">2GIS API 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228479/" target="_blank">Музыкальный программируемый школьный звонок «Школьник-4»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229007/" target="_blank">Форматирование цены, или как я input переписывал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229001/" target="_blank">Autopolyfiller — Precise polyfills</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227731/" target="_blank">Как я проект с JavaScript на Scala переписывал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227945/" target="_blank">Генерация CSS-спрайтов с Gulp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228893/" target="_blank">[Перевод] Не стоит бояться функционального программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228819/" target="_blank">Deb.js: самый крохотный отладчик в мире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228863/" target="_blank">Тонкости AngularJS: select внутри шаблона директивы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228757/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #21</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228751/" target="_blank">TJ Holowaychuk: Прощай Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227753/" target="_blank">Метапрограммирование (с примерами на JavaScript)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228607/" target="_blank">Пишем бота для онлайн-игры на JavaScript с применением AOP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228341/" target="_blank">Подмена родительской страницы на примере ask.fm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227241/" target="_blank">Нисходящий парсер с операторным предшествованием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228363/" target="_blank">Моя любимая особенность генераторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228457/" target="_blank">Универсальный web-GUI для произвольных RESTful сервисов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228419/" target="_blank">Особенности использования Sails для начинающих (Часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228325/" target="_blank">Ожидающая функция fnDelay</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228253/" target="_blank">Особенности использования SailsJS для начинающих (Часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/228135/" target="_blank">Ribs.js — вложенные атрибуты, вычисляемые поля и биндинги для Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228223/" target="_blank">Astrobench: тестирование производительности JavaScript кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228209/" target="_blank">Как я писал бота для аукциона AliExpress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224403/" target="_blank">Написание простого блога на SailsJS: наглядная практика для начинающих (Часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227969/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #20</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224825/" target="_blank">Начинаем работать с browserify</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227861/" target="_blank">OpenUI5 – новый javascript фреймворк от SAP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227853/" target="_blank">Разработка мобильных Javascript MVC приложений с Framework7, RequireJS и Handlebars</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227665/" target="_blank">Sourcebuster JS: модуль определения источников посетителей сайта на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227449/" target="_blank">Кто бы смог мне подсказать, как require подключать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227415/" target="_blank">Собственный движок WebGL. Статья №3. Примитивы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227285/" target="_blank">Собственный движок WebGL. Статья №2. Матрица</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227281/" target="_blank">Интеграция GoogleDocs с Redmine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227201/" target="_blank">Собственный движок WebGL. Статья №1. Холст</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227103/" target="_blank">Фреймворк RPG JS v2 для создания браузерной 2D онлайн-игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227069/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #19</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/226997/" target="_blank">Приглашаем на Moscow JavaScript Meetup 26 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226957/" target="_blank">Муравей Лэнгтона на JS и Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226843/" target="_blank">MVbind — Backbone расширение для data binding между Model и View</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313886/" target="_blank">400 музыкальных инструментов для Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313814/" target="_blank">Глупые трюки с ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313658/" target="_blank">Node.js 7.0.0 зарелизился. Встречайте async/await без babel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313526/" target="_blank">Обзор базовых возможностей ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313468/" target="_blank">AVA — Футуристическая JavaScript библиотека для тестирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313422/" target="_blank">42 строки кода для выхода из лимба</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313374/" target="_blank">JavaScript: includes vs indexOf</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/313402/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №233 (17 — 23 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/313286/" target="_blank">Дробим монолит: Рефакторинг архитектуры Web-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313234/" target="_blank">JavaScript 2016, а можно попроще?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226759/" target="_blank">Как использовать Routing в Ext JS 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224261/" target="_blank">jsonex – упрощаем сложные клиент-серверные диалоги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226545/" target="_blank">Простой способ пагинации в Highcharts</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225931/" target="_blank">ANGULARJS + REQUIREJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226309/" target="_blank">Декларативная привязка данных в WinJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/226423/" target="_blank">Запуск Internet Explorer Developer Channel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226257/" target="_blank">Двухпанельный веб-файл менеджер Cloud Commander</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/226261/" target="_blank">Классы и фабрики. Как разобрать и собрать объект с наследованием на прототипах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226325/" target="_blank">Интересная задачка для интервью, карринг и частичное применение функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226293/" target="_blank">Несколько полезных функций для разработчика под Squarespace</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226209/" target="_blank">Завершилась битва в CodeCombat между 545 программистами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226169/" target="_blank">Веб анимации — element.animate() уже в Chrome 36</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225065/" target="_blank">Революция дата-байндинга с Object.Observe()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226107/" target="_blank">Мобильное приложение HTML5: ошибка или успех. Попытка №1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226063/" target="_blank">Как запускать расширения Хрома не из магазина WebStore</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/226027/" target="_blank">Ciklum .NET/JS Субботник в Днепропетровске, 21 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225911/" target="_blank">Решаем проблему грамотности в интернете с помощью Яндекс.Спеллера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225847/" target="_blank">ImEx.js украсит ваш код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225833/" target="_blank">Modbus-RTU на скриптах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225669/" target="_blank">Интерактивная сетевая игра на HTML, CSS и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225575/" target="_blank">«Кто я?» — чтение мыслей и никакого мошенничества (посмотрите исходник)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225557/" target="_blank">STAN — самый короткий шаблонный движок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225309/" target="_blank">Maxmertkit. Идеальный css-фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225289/" target="_blank">Мой последний file uploader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225199/" target="_blank">Изучаем Three.js.Глава 2: Работа с основными компонентами, из которых состоитThree.js-сцена</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225091/" target="_blank">Back/Forward Cache — механизм кеширования страниц в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224799/" target="_blank">Кроссворд из RegEx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224967/" target="_blank">jsDelivr – передовая, открытая и общедоступная CDN</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/224853/" target="_blank">Проблемы при верстке сайтов и игр. Особенности сайтов для мобильников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224831/" target="_blank">Введение в компоненты derby 0.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224791/" target="_blank">Вышла версия 1.0 библиотеки Socket.IO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224751/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #18</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202168/" target="_blank">Добавлена поддержка «Яндекс.Карты» версии 2.1 в angular.js модуль yaMap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224509/" target="_blank">Изучаем Three.js.Глава 1: Создаем нашу первую 3D-сцену, используя Three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224173/" target="_blank">Как я делал виджет управления мощностью для своего браузерного симулятора космических полетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224195/" target="_blank">Написание простого блога на SailsJS: наглядная практика для начинающих (Часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224187/" target="_blank">Рендеринг WEB-страницы: что об этом должен знать front-end разработчик</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224143/" target="_blank">Книжка Discover Meteor переведена на русский</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224081/" target="_blank">Как писать парсеры на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224031/" target="_blank">Derby 0.6 — FAQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220975/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #17</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223027/" target="_blank">Всё, что вы должны знать о прототипах, замыканиях и производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223459/" target="_blank">Замыкания в Javascript [Часть 1]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223251/" target="_blank">Собрание ваших сочинений на Angular.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222399/" target="_blank">Изучаем Derby 0.6, пример #3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/223207/" target="_blank">Разгоняем JavaScript вместе (Внимание, конкурс!)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223137/" target="_blank">Бесплатный курс по AngularJS от Codeschool</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222761/" target="_blank">Обработка ошибок в Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222729/" target="_blank">Web плеер FLAC.JS (HTML5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218559/" target="_blank">lemongrab: плагин валидации веб-форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222261/" target="_blank">Кроссплатформенный CommonJS на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222573/" target="_blank">ReactJS in a nutshell. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/222591/" target="_blank">Бестселлеры O'Reilly</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220775/" target="_blank">Reedy – Скорочтение, которое действительно можно использовать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222317/" target="_blank">Функция reduce</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222325/" target="_blank">AniJS – библиотека для декларативного описания CSS-анимации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222259/" target="_blank">Разработка REST API на Express, Restify, hapi и LoopBack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222247/" target="_blank">Swipe жесты в Internet Explorer и остальных браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221989/" target="_blank">Таргетинг пользователей: регион, город, улица</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222065/" target="_blank">Легкие контроллеры с AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221903/" target="_blank">Лёгкие контроллеры с Angular Classy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221857/" target="_blank">PKI (Public Key Infrastructure) с помощью JavaScript? Теперь это возможно с помощью библиотек PKIjs и ASN1js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221811/" target="_blank">История о парсинге одного aspx сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221763/" target="_blank">Linq-подобный синтаксис для knockout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221733/" target="_blank">В чем разница между factory и provider в AngularJS (на пальцах)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221703/" target="_blank">Изучаем Derby 0.6, пример #2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221727/" target="_blank">Последний день регистрации на Всеукраинский чемпионат UA Web Challenge VI для фронтенд разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221619/" target="_blank">Оценка возможности постобработки видео в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221171/" target="_blank">Счет на оплату. Рабочее приложение на sails.js, ractive.js, Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221111/" target="_blank">Правильное использование promise в angular.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221027/" target="_blank">Изучаем Derby 0.6, пример #1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220983/" target="_blank">Readability своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220839/" target="_blank">Что такое Excel Mashup, и кому это может пригодиться?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220845/" target="_blank">Генератор гамм на Reactjs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220767/" target="_blank">Браузерный мультиплеер без сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220679/" target="_blank">Запуск приложения во Вконтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220631/" target="_blank">Вы мне Javascript сломали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/220573/" target="_blank">Вышел новый plugin COLT для Webstorm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uprock/blog/220551/" target="_blank">Прошел GTA – запили плеер!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220493/" target="_blank">NodeSchool, Node.js и один урок для самых маленьких</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219973/" target="_blank">Пишем музыку на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220399/" target="_blank">«Flappy Bird» до 1КБ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220297/" target="_blank">Библиотека для обмена событиями, данными и задачами между вкладками браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220299/" target="_blank">Marionette.js. Drag&Drop сортировка моделей в коллекции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220179/" target="_blank">Система управления PRT-транспортом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220229/" target="_blank">JSCS: JavaScript Code Style</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219995/" target="_blank">jWidget — объектно-ориентированный JavaScript MV* framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220163/" target="_blank">Введение в Marionette.js Behaviors</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220015/" target="_blank">Организация вебсокетного взаимодействия с приложением Spring</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220005/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #16</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220001/" target="_blank">Kenju форк Kendo UI Web (GPL3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219873/" target="_blank">15 шаблонизаторов для фронтенд-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219425/" target="_blank">Приключенческая игра, в которую играют путем изменения её Javascript-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/219341/" target="_blank">В новой сборке COLT 2.0 (beta 6) появился расширенный автокомплит для Angular.js проектов — внутри {{}} для Sublime Text (2 и 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/219279/" target="_blank">Визуальный контроль потока исполнения JavaScript с помощью COLT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/217241/" target="_blank">(Архив) Matreshka.js v0.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219155/" target="_blank">MMO на WebRTC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219037/" target="_blank">Скрещиваем WebWorker и Promise</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218989/" target="_blank">Скрещиваем WebWorker и XMLHttpRequest</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218743/" target="_blank">Как использовать Handlebars</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313208/" target="_blank">JsTree — построение простого дерева с помощью JAVA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313196/" target="_blank">Javascript-паноптикум</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/313176/" target="_blank">Конкурс по программированию на JS: Классификатор слов (специальные призы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313128/" target="_blank">От Jquery UI до Ext.js: обзор javascript UI библиотек для SPA. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313038/" target="_blank">Пишем простое приложение на React с использованием библиотеки cellx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/docsvision/blog/310870/" target="_blank">Темная сторона TypeScript — @декораторы на примерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313000/" target="_blank">Linux Foundation запустил «перезагрузку» JavaScript-сообщества</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/scorocode/blog/312784/" target="_blank">Поддержка NPM модулей в backend as a service Scorocode</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312868/" target="_blank">Видео-чат через браузер. WebRTC — это просто, если есть библиотека</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312902/" target="_blank">Фильтр символов вводимых в input</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218813/" target="_blank">Делегирование событий в AngularJS. Попытка разобраться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/datalaboratory/blog/217905/" target="_blank">Введение в D3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218463/" target="_blank">Игровой сервер за один день на Node.js + Socket.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213515/" target="_blank">Готовим IndexedDB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218485/" target="_blank">Организация js кода для джуниоров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218529/" target="_blank">Стилизация элементов форм и попытка обойти подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218481/" target="_blank">Intl к нам приходит!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218465/" target="_blank">Использование директив ngShow и ngHide в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218397/" target="_blank">Отладка асинхронного JavaScript с помощью Chrome DevTools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218385/" target="_blank">Расширение и компоновка директив</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218197/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #15</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218283/" target="_blank">WinJS — opensource от Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218207/" target="_blank">Бренден Айк ушёл с поста руководителя Mozilla под давлением ЛГБТ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218113/" target="_blank">Тысяча и одна gif</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218061/" target="_blank">Не заставляйте (не)равенства в JavaScript выглядеть хуже, чем они есть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217901/" target="_blank">Node.js, Require и Exports</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212701/" target="_blank">NanoMMO на Go и Canvas [Сервер]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217753/" target="_blank">Основы работы со StackExchange API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/217725/" target="_blank">Вышел COLT 2.0 с поддержкой Angular.js, node-webkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217641/" target="_blank">Новый хаб «Chrome Extensions» (с октября 2014 — «Расширения для браузеров»)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217603/" target="_blank">Расширение нативных объектов JavaScript — зло ли это? Манифест SugarJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217501/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #14</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217295/" target="_blank">Diff-алгоритм React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217515/" target="_blank">lodash (underscore) — знай свою стандартную библиотеку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217507/" target="_blank">Dripstat — сервис мониторинга производительности JVM или MMO игра?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217401/" target="_blank">Веббраузер, как среда для функционирования программного обеспечения для контроля/управления технологическими процессами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/217447/" target="_blank">Встречайте WebStorm 8: поддержка AngularJS, spy-js, интеграция Grunt и многое другое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217065/" target="_blank">Mylar — Платформа для защищенных веб приложений на базе Meteor.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216839/" target="_blank">Цвета и разница между ними в LESS / Sass</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216805/" target="_blank">Gremlins.js — monkey testing библиотека для веб приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216715/" target="_blank">Broccoli: первый бета-релиз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/216667/" target="_blank">IntelliJ IDEA 13.1: Весеннее обновление</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216641/" target="_blank">Быстрый gzip на javascript для браузера и node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/216623/" target="_blank">Управление JavaScript UI-потоком с помощью планировщика WinJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216577/" target="_blank">Руководство по basis.js. Часть 1: Начало работы, представления, модули, инструменты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216469/" target="_blank">AngularJS — разделение приложения на модули и загрузка компонентов с помощью RequireJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/216045/" target="_blank">HTML по стандартам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216451/" target="_blank">Пишем UI системы RealTime мониторинга на typescript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216375/" target="_blank">Отзывчивый дизайн. Реакция на уровень освещенности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/216135/" target="_blank">Win 8.1 App использование HTML & WinJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216239/" target="_blank">Как меня назвали параноиком и что из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216155/" target="_blank">Реалии работы в проектах приложений Smart TV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216149/" target="_blank">Простая передача в Google Analytics событий ошибок заполнения форм в Magento (и не только)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215131/" target="_blank">Сравнение популярных систем сборки для frontend-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214013/" target="_blank">Разрабатываем Flappy Bird на Phaser</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215937/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215843/" target="_blank">Google Docs Add-on. Расширяем возможности редактора Google Docs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215673/" target="_blank">Генерация правильного кода баннерной зоны на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215635/" target="_blank">Скачивать музыку и видео с ВК средствами браузера Chrome, используя свое расширение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215611/" target="_blank">Подсветка естественного языка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215607/" target="_blank">AngularJS и ReactJS или как сделать ваше приложение быстрее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215297/" target="_blank">Планируете писать приложение на AngularJS? Пост вам в помощь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215493/" target="_blank">Завершен перевод книги Эдди Османи «Паттерны для масштабируемых JavaScript-приложений»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215267/" target="_blank">Оптимизируем Gruntfile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215273/" target="_blank">Разделяй и властвуй или как сделать ваше приложение структурированным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215185/" target="_blank">Пример приложения — телефонной книги на AngularJS + Bootstrap v3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215175/" target="_blank">Firefox: улучшения панели загрузок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215173/" target="_blank">Статистика использования javascript-библиотек и CDN</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215171/" target="_blank">Простой фильтр ленты VK по «плохим» словам и кем он может стать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215071/" target="_blank">Определение локальных IP-адресов через WebRTC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215043/" target="_blank">Javascript без this</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214945/" target="_blank">Сравнение сервисов для автодополнения адресов в форме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214937/" target="_blank">Javascript UPNP/DLNA сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214765/" target="_blank">Prudence</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214743/" target="_blank">Планирование автопутешествий на базе google maps api</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214695/" target="_blank">Графы — sigmajs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/214531/" target="_blank">JavaScript to APK. Подводные камни разработки под Android для тех, кого задолбал PhoneGap. Построение мостов из Java в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214559/" target="_blank">Font boosting в мобильных браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214591/" target="_blank">JSDuck — генератор документации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214517/" target="_blank">Пишем генератор для Yeoman.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214373/" target="_blank">Звездное Небо на Canvas. Созвездия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214319/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214281/" target="_blank">Тестовое задание моей мечты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214087/" target="_blank">Вы до сих пор не любите JavaScript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214063/" target="_blank">Angular boilerplate. Простота — тренд молодежи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190484/" target="_blank">Создание браузерной игрульки в соц сети от и до</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213937/" target="_blank">Продвинутая работа с подписками в еvent-driven архитектуре в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213847/" target="_blank">Knockout-popover: простой байндинг Twitter Bootstrap Popover для KnockoutJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213295/" target="_blank">Пользовательские события в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213627/" target="_blank">Модульная система YM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/213455/" target="_blank">Стрелочные функции (Arrow functions) в ECMAScript 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213565/" target="_blank">Вышла Derby 0.6.0-alpha3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213481/" target="_blank">А таки давайте напишем инструмент для написания писем Дяди Федора!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213471/" target="_blank">Разработка статического сайта на Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213441/" target="_blank">Legacy или Inheritance: немного оффтопа про .prototype, каламбур для неофита</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213393/" target="_blank">Стартовала Online продажа Revolution Geeksphone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213283/" target="_blank">Пометить как прочитанное: Twitter, VK, LiveJournal, Facebook…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213265/" target="_blank">Init.js: Зачем и как разрабатывать с Full-Stack JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213171/" target="_blank">Тестируем MeteorJS-приложение с помощью Laika</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/213033/" target="_blank">Новый интерфейс Яндекс.Метро и технологии, с помощью которых он работает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212959/" target="_blank">Как мы :hover на iOS побеждали…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213009/" target="_blank">Использование комментариев для хранения статических данных в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212883/" target="_blank">Declarative event binding / handling</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212889/" target="_blank">JavaScript: цикличные таймеры с автокоррекцией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212817/" target="_blank">Definer.js — простая модульная система</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212689/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/212709/" target="_blank">LocalForage: кроссбраузерное локальное хранилище от Mozilla</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212441/" target="_blank">Анатомия Ember.js (часть первая, теоретическая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212397/" target="_blank">Зачёркивание и подчёркивание символьными средствами ( ̶т̶а̶к̶ ̶, т̱а̱к̱ или т̲а̲к̲)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212347/" target="_blank">Bootstrap Modal Iframe Костыль</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319476/" target="_blank">Чистый javascript.Переменные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319472/" target="_blank">Чистый javascript.Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319514/" target="_blank">Переведена документация Nuxt.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319510/" target="_blank">Ref-атрибуты и DOM в React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/htmlacademy/blog/319458/" target="_blank">Тренды и события в мире веб-технологий в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314402/" target="_blank">Bushed Bricks: простая и увлекательная игра на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319302/" target="_blank">FPS и пусть ваш код подождет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319358/" target="_blank">PropTypes — проверка типов в React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319270/" target="_blank">JSX — подробности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319014/" target="_blank">Простой шаблонизатор на чистом JS со связями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312876/" target="_blank">Гибридные Android-приложения для малышей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312762/" target="_blank">Все рушится</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/312832/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №232 (10 — 16 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312812/" target="_blank">То, чего вы не знаете о веб-разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312748/" target="_blank">Готовим многопоточность с core.async</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/railsclub/blog/312706/" target="_blank">RailsClub 2016: интервью с Zach Briggs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312670/" target="_blank">Promises 101</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312646/" target="_blank">Антикейлоггер «для параноика» в Safari</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/312638/" target="_blank">Использование ES6 генераторов на примере koa.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312620/" target="_blank">Как мы всех на юх послали (ну или продолжение истории про шаблонизотор)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212297/" target="_blank">Реализуем 3D картинку в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212301/" target="_blank">Angular Light: «Ленивое» подключение директив и препроцессор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212113/" target="_blank">Date.prototype.getTimezoneOffset — различие возвращаемых значений в разных браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188294/" target="_blank">Создание кроссплатформенного Smart TV приложения на базе библиотеки SmartBox для Samsung, LG, Philips и других</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212015/" target="_blank">Создаем тег Markdown с помощью Polymer/Web Components</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200664/" target="_blank">Почему typeof null === 'object'?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211961/" target="_blank">Вы можете обойтись без jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211905/" target="_blank">Использование Audio API для создания вокодера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211937/" target="_blank">Простой вызов удалённых сервисных методов в одностраничных приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211925/" target="_blank">Интеграция Passport в SailsJS 0.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211863/" target="_blank">Polyfill для обхода проблемы с браузерным автозаполнением форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211659/" target="_blank">Три правила проектирования интерфейсов с высокоскоростным пользовательским взаимодействием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211620/" target="_blank">LiveReload в очень постороннем браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211590/" target="_blank">Repeatable, еще один способ рендерить списки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211538/" target="_blank">10+ полезных jQuery сниппетов на каждый день</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211236/" target="_blank">Кроссплатформенное Smart TV приложение в одном экземпляре. Библиотека SmartBox для Samsung, LG, Philips, STB Mag 200/250 и других</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211456/" target="_blank">Keypress 2.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210622/" target="_blank">Генератор космических кораблей из арматуры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211124/" target="_blank">Updated + code: Свой «VBoxManage list ip» — список адресов запущенных виртуальных машин</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211020/" target="_blank">О безопасности в Meteor и не только (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211002/" target="_blank">О безопасности в Meteor и не только (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootuamedia/blog/210862/" target="_blank">Видеозаписи докладов конференции Happу New Front-End: О фронтенде по-новому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210820/" target="_blank">О применении $.Deferred в работе с асинхронными задачами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210808/" target="_blank">Собираем свой аналог Google Calendar не в 30 строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208952/" target="_blank">Деревья принятия решений на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210748/" target="_blank">User Timing API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210680/" target="_blank">Используете ли вы Веб Компоненты?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210614/" target="_blank">Генерация деревьев на HTML5 Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210564/" target="_blank">User Timing API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210558/" target="_blank">Список оптимизаций рендеринга DOM, реализуемых на уровне Javascript фреймворка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210330/" target="_blank">Отказываемся от коллбэков: Генераторы в ECMAScript 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210454/" target="_blank">Sweet.js: Синтаксические расширения для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210422/" target="_blank">Пробуем Audio API на примере написания визуализатора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210344/" target="_blank">Дросселирование ввода на AngularJS с помощью debounce</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210270/" target="_blank">Оптимизация обработки сложных селекторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210130/" target="_blank">Web Components — это единственное светлое будущее веба. Смиритесь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/209780/" target="_blank">jQuery Events изнутри</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210166/" target="_blank">Пишем парсер на NodeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210146/" target="_blank">Видеопроигрыватель для сайтов обучающих иностранным языкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210058/" target="_blank">Web Components — будущее Web</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210020/" target="_blank">X-Notifier. Пишем оповещалку для трекера и диалогов на Хабарахабр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209936/" target="_blank">Глубинное погружение в test-driven JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209696/" target="_blank">Dart 1.1 стал на 25% быстрее, сравнялся с идиоматическим JavaScript и теперь подходит для серверов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209662/" target="_blank">Обещания JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209544/" target="_blank">Небольшая игра «Крестики-нолики» на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209496/" target="_blank">Создание 3D-иллюстраций — прототип системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209424/" target="_blank">Перевод книги Эдди Османи «Паттерны для масштабируемых JavaScript-приложений»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootuamedia/blog/209360/" target="_blank">Видеозаписи докладов потока «JavaScript на бекенде» конференции FOSS Sea</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209230/" target="_blank">HuGu — коллективный плейер музыки Вконтакте на node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209228/" target="_blank">Создание клиентского MVC приложения с помощью RequireJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209140/" target="_blank">О создании улучшенной JavaScript-библиотеки для работы с DOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/monandco/blog/209126/" target="_blank">MathML или Latex – как мы реализовывали меняющийся оклад в расчете ЗП с помощью MathJax</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209108/" target="_blank">Angular Light. Управляем декларативным биндингом данных в HTML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208970/" target="_blank">Первые шаги к вселенной MeteorJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208978/" target="_blank">Будущее JavaScript MVC фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208922/" target="_blank">JavaScript: проверьте свою интуицию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208890/" target="_blank">GulpJS — фантастически быстрый сборщик проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200208/" target="_blank">Новая функциональность Impress Application Server для Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208768/" target="_blank">Избавляемся от лишних $watch'еров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208644/" target="_blank">Chrome extension за выходные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sourcetalk/blog/208600/" target="_blank">Backbone.Component — автономные компоненты UI для Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208402/" target="_blank">Создание превью изображений на клиенте: борьба с прожорливыми браузерами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208346/" target="_blank">Отмена изменения пути в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208282/" target="_blank">Наследование директив в Angular Light и другие «плюшки»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208164/" target="_blank">Загрузка модуля по требованию в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205892/" target="_blank">Генерация абстрактных изображений с помощью генетических алгоритмов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207970/" target="_blank">Подарок всем front-end разработчикам. grunt(Jade+Stylus+Watch)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207930/" target="_blank">Базовое Node.JS приложение с использованием express</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207920/" target="_blank">Разработка тайловой игры на JavaScript (Robbo)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207890/" target="_blank">Оптимизация вызовов функций из воркеров (web-workers)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207884/" target="_blank">Библиотека для кэширования на стороне клиента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207704/" target="_blank">Воплощение идеи Bitcoin для борьбы со спамом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207730/" target="_blank">От Backbone.js к Marionette.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207794/" target="_blank">Jasmine DRY: а ты правильно пишешь тесты?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207792/" target="_blank">Задаем временной интервал на циферблате часов. JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207778/" target="_blank">Асинхронный JavaScript (книга)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207698/" target="_blank">Несколько интересностей и полезностей для веб-разработчика #10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207648/" target="_blank">Пусть компьютер сам принимает решение или пишем ИИ для игры вместе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207612/" target="_blank">Node.JS + taskset == немного странного юмора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207232/" target="_blank">Карты для всех, даром</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207542/" target="_blank">IT-книги по свободной цене</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207340/" target="_blank">Asm.js стал ещё быстрее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207304/" target="_blank">Регистрация на сайте: c начала и до обеда</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootuamedia/blog/207236/" target="_blank">Запуск проекта GeeksLab и анонс конференции «Happу New Front-End! О фронтенде по-новому!» 18 января в Одессе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207080/" target="_blank">Панель отправка исходящих факсов средствами Asterisk и Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/207048/" target="_blank">Сортировка при помощи HTML5 Drag'n'Drop API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206734/" target="_blank">Мурлыканье кошки на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206678/" target="_blank">Несколько полезностей по работе с NPM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206628/" target="_blank">NodeSchool — интерактивные уроки по Node.Js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206526/" target="_blank">Invisible.js — одни модели и на клиенте и на сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/206522/" target="_blank">Очень интересный ролик про StarlingJS+Sublime+COLT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/206436/" target="_blank">Обзор литературы прочитанной за два года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206456/" target="_blank">Вышел Meteor версии 0.7.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206330/" target="_blank">Как масштабировать Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206328/" target="_blank">Отладка Chrome Dev Tools из Chrome Dev Tools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202450/" target="_blank">AJL — компонент для загрузки JS и CSS файлов средствами JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206092/" target="_blank">Feathers.js — реактивный JavaScript-фреймворк поверх Express</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206070/" target="_blank">HTTP Live Streaming на чистом Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205894/" target="_blank">Ход конем с использованием canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/205902/" target="_blank">Видео-курс по JavaScript на русском языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312558/" target="_blank">node-direct — один NodeJS сервер на несколько сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312536/" target="_blank">Событие при изменении размеров блочного элемента — resize</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/312530/" target="_blank">Видео докладов с митапа MoscowJS в Badoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312508/" target="_blank">Инструментарий для front-end разработки под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312458/" target="_blank">Facebook и Google выпустили Yarn, новый менеджер пакетов для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/312318/" target="_blank">Создаем игру для WebGL с помощью Unity 5 и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infowatch/blog/312320/" target="_blank">Сериализация данных или диалектика общения: простая сериализация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312290/" target="_blank">Понятие песочницы при разработке расширений для браузера Google Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312278/" target="_blank">Разбор задач первого этапа отбора в школу программистов HeadHunter 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/312274/" target="_blank">Matreshka.js 2 — самый простой фреймворк во Вселенной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205878/" target="_blank">Как устроен Meteor изнутри</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/205778/" target="_blank">Акция невиданной щедрости. 6 месяцев подписки COLT бесплатно. Осталось 2 дня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205736/" target="_blank">yo n — быстрое начало для нового node.js проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205692/" target="_blank">Мы потеряли тот Веб</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205616/" target="_blank">Хватит быть милым и умным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205446/" target="_blank">Переменное количество аргументов: проблемы и решения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204394/" target="_blank">Windows Azure Mobile Services custom API на примере скрам-доски</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205364/" target="_blank">Прототип необычной надстройки для GitHub, система подготовки веб-справки с использованием GitHub Pages</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205230/" target="_blank">Лучший учебник по Meteor — «Discover Meteor» — один день бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205178/" target="_blank">Совершеннолетие JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/205154/" target="_blank">Редактор HTML+CSS+JS в стиле JSfiddle, код которого состоит из 230 символов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204902/" target="_blank">Почему Meteor погубит Ruby on Rails</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204966/" target="_blank">Windows Azure Blob-storage: поддержка CORS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uprock/blog/204848/" target="_blank">Перевод AirBnB Style Guide</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/htdt/blog/204652/" target="_blank">Hot Dot Parallax Engine под лицензией MIT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204628/" target="_blank">250 строк кода, распознающих дату на русском языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204598/" target="_blank">Enyo 2. ООП</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/204538/" target="_blank">Sublime + COLT. Добавь интеллекта своему IDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204506/" target="_blank">kidomi: построение DOM-объектов «на лету»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204456/" target="_blank">Рекурсивное сохранение вложенностей с помощью $.Deferred</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204430/" target="_blank">Несколько JavaScript хаков для хипстеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204350/" target="_blank">Бесконечная прокрутка в веб-приложениях с примерами на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204238/" target="_blank">60 FPS? Легко! pointer-events:none!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204130/" target="_blank">Несколько интересностей и полезностей для веб-разработчика (выпуск 9)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201428/" target="_blank">Загрузка CommonJS модулей в браузер без изменения исходного кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204262/" target="_blank">Реальный опыт разработки на Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204176/" target="_blank">Пишем плагин для CKEditor 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204170/" target="_blank">Смогут ли подружиться Angular.js и Facebook Login?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204162/" target="_blank">TempusJS — работаем с датой в javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203890/" target="_blank">JohnSmith — простой и легковесный JavaScript-фреймворк для построения UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203378/" target="_blank">Карта звездной системы на Three.js/WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203864/" target="_blank">Почему стоит использовать специальные классы для привязки событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203568/" target="_blank">Мой опыт работы с Webrtc</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203514/" target="_blank">Pointer события</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203540/" target="_blank">Angular. Почему не работают вложенные инклуды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203462/" target="_blank">HTML5 Canvas Схема пригородного движения ж/д сообщения Москвы и МО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203444/" target="_blank">Изоморфный JavaScript — будущее веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/203340/" target="_blank">А что Вы думаете о StarlingJS?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/toptechphoto/blog/203306/" target="_blank">Как мы делали сервис на WebRTC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203156/" target="_blank">Генератор визуальных интерфейсов с генетическим алгоритмом в помощь дизайнерам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203072/" target="_blank">В Google показали сложный WebGL-мир для мобильного Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203048/" target="_blank">Игра в 0 строк кода на чистом JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/202942/" target="_blank">Миникрафт в 252 символа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202944/" target="_blank">Маленькие программы на Javascript: куда податься</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202888/" target="_blank">Реализация Asteroids на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootuamedia/blog/202806/" target="_blank">Программа конференции FOSS Sea</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uprock/blog/202774/" target="_blank">Есть вероятность глюков в Chrome/Chromium 31, Opera 18: селекторы вроде nth-last-child могут отрабатывать некорректно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202756/" target="_blank">Сокобан на Javascript в 30 строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202736/" target="_blank">Hello world в 1 строчку на чистом JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202484/" target="_blank">WidLib – декларативный js-фреймворк для построения виджетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202684/" target="_blank">Roguelike/RPG на JavaScript (30 строк кода)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202646/" target="_blank">Пианино в 24 строки на Javascript: если играть, то музыку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202628/" target="_blank">Tetris на javascript (в 30+ строк)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202578/" target="_blank">Pong на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202556/" target="_blank">Гоночка на JavaScript (30 строк кода)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202530/" target="_blank">Крошечный арканоид на JavaScript (30 строк кода)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202476/" target="_blank">Крошечная змейка на JavaScript (30 строк кода)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202432/" target="_blank">cnCt — клиентский js шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202452/" target="_blank">Использование Google Spreadsheet как JSON бэкенд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202394/" target="_blank">Продвинутая JavaScript отладка при помощи console.table()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202366/" target="_blank">DOM MutationObserver — реакция на изменение DOM не убивая производительность браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202358/" target="_blank">Аппаратное ускорение рендеринга в браузере Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202340/" target="_blank">Google выкатила замену Javascript — язык Dart</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202304/" target="_blank">Крошечный Excel на чистом JavaScript (30 строк кода)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202288/" target="_blank">Enyo 2. Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201684/" target="_blank">Пишем свой JavaScript шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202014/" target="_blank">Змейка на Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201980/" target="_blank">js2js: компилятор из JavaScript в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201600/" target="_blank">jBone. Замена jQuery для Backbone или 2kb для DOM манипуляций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201354/" target="_blank">Developing Titanium module for iOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201790/" target="_blank">Карта галактики на Three.js/WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200754/" target="_blank">Подробное руководство по разработке мобильных приложений AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201832/" target="_blank">Сделай свой AngularJS: Часть 1 — Scope и Digest</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201828/" target="_blank">jor1k: Linux в браузере с поддержкой сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201686/" target="_blank">Vanilla JS vs jQuery 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201658/" target="_blank">PubSub в браузере с помощью вебсокетов и протокола WAMP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201682/" target="_blank">Еще раз об обфускации JavaScript или сказ о том, как я обфускатор писал. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/201674/" target="_blank">Асинхронная добыча меток utm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201592/" target="_blank">Итератор в шаблонизаторе doT.js по объектам с фильтрацией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201468/" target="_blank">AngularJS 1.2.0: Своевременная доставка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/201292/" target="_blank">Использование аннотаций COLT во front-end разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cackle/blog/201190/" target="_blank">Скриншоты без десктопа на HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/200968/" target="_blank">Как мы тестируем поиск в Яндексе. Screenshot-based тестирование блоков результатов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201098/" target="_blank">Как создать мир, спрятать труп и обшмонать перса. Стеки зажатых клавиш. Виртуальные УФМС и ФСКН (или кто разруливает 228 и «пудрит носик»)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/201010/" target="_blank">FileAPI 2.0: Загрузка файлов на сервер год спустя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kolibrios/blog/201022/" target="_blank">Опубликованы исходники эмулятора x86 на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200952/" target="_blank">Работаем с девелоперской версией CKEditor 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200790/" target="_blank">Морфана: приставки, корни, суффиксы…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200916/" target="_blank">Ajax загрузка файлов средствами jQuery и CodeIgniter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200812/" target="_blank">OAuth.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200770/" target="_blank">Открываем файлы формата Open XML Excel в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uprock/blog/200644/" target="_blank">Harmony collections NOW</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200670/" target="_blank">Оптимизация производительности длинных списков в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200620/" target="_blank">Разработка директив angularjs — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/200584/" target="_blank">Визуализируем в 3D, или как подружить D3 и Three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200356/" target="_blank">Разработка клиент-серверной инфраструктуры на javascript (часть 2 — сервер и размещение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199210/" target="_blank">Несколько интересностей и полезностей для веб-разработчика (выпуск 7)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootuamedia/blog/200460/" target="_blank">Техническая конференция FOSS Sea: back-end на базе свободных и открытых технологий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198158/" target="_blank">Warp9 — еще одна реактивная js библиотека. На этот раз компонуемая и без утечек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200192/" target="_blank">Разработка клиент-серверной инфраструктуры на javascript (часть 1 — клиент)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312086/" target="_blank">Легкий способ потерять клиентов или почему не следует использовать Google CDN</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312088/" target="_blank">ES6 const это не про иммутабельность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312172/" target="_blank">Javascript-путешествие с шестью символами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/312136/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №231 (3 — 9 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312066/" target="_blank">DBGlass — Open-Source кросс-платформенный PostgreSQL GUI клиент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312022/" target="_blank">Каково оно учить JavaScript в 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311964/" target="_blank">Универсальний (изоморфный) «шлем» для React js или Как удобно работать с head на React js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/311994/" target="_blank">Как спасти принцессу, используя 8(+45) языков программирования, в пятницу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311860/" target="_blank">Я тут это… Трекалку для времени написал. За 628 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311804/" target="_blank">Еще раз про обещания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/198212/" target="_blank">(Архив) Matreshka.js — MK.Array</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/196886/" target="_blank">(Архив) Matreshka.js — MK.Object</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200130/" target="_blank">Кэш для фильтров AngularJS с помощью Lo-Dash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200114/" target="_blank">Где jQuery хранит обработчики событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/200078/" target="_blank">(Архив) Matreshka.js — Наследование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200106/" target="_blank">Прекратите использовать location.hash, да здравствует HTML5 History API!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199456/" target="_blank">Bind, Call и Apply в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200058/" target="_blank">Как интегрировать ckEditor в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/196146/" target="_blank">(Архив) Matreshka.js — Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/199472/" target="_blank">Видео: полный цикл разработки на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199428/" target="_blank">Приложения для Firefox OS запустятся на Android, Windows, Mac OS X и Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/199386/" target="_blank">Что не хватает в COLT/JS, чтобы начать его использовать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199290/" target="_blank">Яндекс карты для angular.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/acronis/blog/199012/" target="_blank">DSL на JavaScript для C++ или кодгенератор — это просто!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197014/" target="_blank">Простой слайдер изображений и контента на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199226/" target="_blank">Рецепт i18n. Основа — Babel, json с кофе и грант с hbs на свой вкус</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199218/" target="_blank">Отчет о конференции IvBit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199162/" target="_blank">Классический подход к управлению зависимостями в сравнении с RequireJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199172/" target="_blank">Internet Archive позволяет запускать Atari-игры и старое ПО прямо в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198778/" target="_blank">История одного Google Chrome расширения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198942/" target="_blank">Несколько интересностей и полезностей для веб-разработчика (выпуск 6)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198964/" target="_blank">Helios Kernel — include в джаваскрипте, теперь и для nodejs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198954/" target="_blank">Создание виджета «Счет Live» использую PHP Web Sockets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/codeorchestra/blog/198776/" target="_blank">JavaFX WebView (HTML/JS) — используем web практики для разработки desktop приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198800/" target="_blank">Экзоскелет — быстрая и современная замена Backbone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198666/" target="_blank">IndexedDB — безлимитное хранение данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198652/" target="_blank">Создаём своё расширение для Google Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198656/" target="_blank">FRP (functional reactive programming) на Bacon.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198632/" target="_blank">Делаем свой персональный Skype, пошаговая инструкция создания WebRTC приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197646/" target="_blank">AngularJS: еще одна таблица с сортировкой, фильтрацией и постраничной навигацией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198372/" target="_blank">API консоли Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198300/" target="_blank">Анимация перехода от глобуса к двумерной карте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198306/" target="_blank">«WebGL Beginner's Guide» Глава 1: Начиная работать с WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198330/" target="_blank">6 советов для создания сложных AJAX сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198280/" target="_blank">Babel и handlebars, пора бы и подружить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198292/" target="_blank">Советы по использованию media query</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/198252/" target="_blank">Локализация приложений Node.js. Часть 3: локализация в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198192/" target="_blank">Эмулятор x86 на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/198154/" target="_blank">Локализация приложений Node.js. Часть 2: инструментарий и процесс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179525/" target="_blank">Решение проблемы border-radius + overflow:hidden с помощью canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197872/" target="_blank">100.000 Stars, или карта галактики от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197796/" target="_blank">Создание гравитационной и портальной пушки. Как правильно убить персонажа в машине и создать теплый вязаный интерфейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197762/" target="_blank">Несколько полезных приемов в AngularJS для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/197566/" target="_blank">Локализация приложений Node.js. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197416/" target="_blank">Пишем HTML5-игру за 20 минут, или введение в Phaser framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetex/blog/196854/" target="_blank">Миша… нет, Серёжа… нет, Полина! Node-Polina!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197466/" target="_blank">Как я взломал Хабрахабр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197358/" target="_blank">Node.js и новый фронтенд в вебе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197296/" target="_blank">Meteor + JQuery-UI Sortable + Animation + Todos</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196720/" target="_blank">Несколько интересностей и полезностей для веб-разработчика (выпуск 5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uprock/blog/197220/" target="_blank">Pages в PDF или сервис за 2 часа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197178/" target="_blank">Как злоумышленники использовали сайт в качестве рекламной площадки и как я с этим боролся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197192/" target="_blank">Ознакомление с компонентами в Markdown webdocs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197046/" target="_blank">Случайный генератор буквоцифр и его варианты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197038/" target="_blank">Кроссдоменный postMessage или как браузеры поддерживают стандарты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uprock/blog/192740/" target="_blank">CornerJS, или директивы «как в AngularJS», только лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196668/" target="_blank">Создание кроссбраузерной визуализации аудио</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196718/" target="_blank">Prerender</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196580/" target="_blank">Оптимизация JavaScript и jQuery из-под HTML и CSS при разработке сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196530/" target="_blank">Насилие над DHTML и вывод JavaScript на десктоп. Реставрация старых игр. Сборка web-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196474/" target="_blank">В чем разница между Brackets/Adobe Edge и COLT?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196368/" target="_blank">jQuery.BEM — декларативный подход к работе с версткой по БЭМ методу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196380/" target="_blank">Cline и создание интерактивного приложения командной строки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/196358/" target="_blank">Производительность фронтэнда. Часть 1 — конкатенация, компрессия, кэширование (4-я из 12 статей о Node.js от Mozilla)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196274/" target="_blank">Ливкодинг сразу же для нескольких устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196248/" target="_blank">Веб-справка, веб-документы. Еще проще</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196092/" target="_blank">Почему мы перешли на Marionette.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195944/" target="_blank">Нам не нужен ваш кофе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nordavind/blog/196018/" target="_blank">Храним сессии на клиенте, чтобы упростить масштабирование приложения (3-я из 12 статей о Node.js от команды Mozilla Identity)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195966/" target="_blank">Полноценные события мыши на графических элементах Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195950/" target="_blank">Быстрые треки на google maps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195816/" target="_blank">Схема аргументов javascript функции или C-style прототипы без тяжёловесных фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195870/" target="_blank">Введение в Nashorn</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195820/" target="_blank">Автоматизированное создание отчета по тестированию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195812/" target="_blank">Derby.js deploy на Amazon EC2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195588/" target="_blank">[UPD] Chain.js: связываем синхронные и асинхронные функции в цепи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193598/" target="_blank">Ещё раз о Deferred/Promise</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/194132/" target="_blank">Новый WebStorm 7: все необходимое под рукой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195342/" target="_blank">Работаем с документами в браузере с помошью jDoc</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195184/" target="_blank">SVG.js — достойный конкурент Raphaël</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/195198/" target="_blank">Как находить и устранять утечки памяти на примере Яндекс.Почты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195142/" target="_blank">Генератор случайных котов за 8 шагов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194900/" target="_blank">Rainyday.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194852/" target="_blank">Отказ от jParser (в пользу работы напрямую с буферами Node.js) ускоряет скрипт на порядок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194848/" target="_blank">Чистим HTML-код при вставке текста из MS Word в HTML5 WYSIWYG редактор (contenteditable)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194784/" target="_blank">Генерируем кастомные маркеры для Google Maps v3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194250/" target="_blank">Impress: многоцелевой сервер приложений для Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194632/" target="_blank">Рендер ландшафта в WebGL — 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194618/" target="_blank">Ion.Sound — плагин для воспроизведения звуков. Создание и особенности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194592/" target="_blank">Рендер ландшафта в WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194486/" target="_blank">TogetherJS: добавь на сайт коллективизма</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194130/" target="_blank">Виджет становится новой элементарной частицей интернета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193972/" target="_blank">Mobify.js — изменение DOM до начала загрузки ресурсов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193950/" target="_blank">Замечательное выступление настоящего программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193752/" target="_blank">NodeConf EU 2013 — впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193778/" target="_blank">Карта Московского Метро на Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193716/" target="_blank">Несколько интересностей и полезностей для веб-разработчика (выпуск 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193642/" target="_blank">Asm.js практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193556/" target="_blank">Сравнение эффективности минимизаторов CSS- и JavaScript-кода (Сентябрь 2013)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193484/" target="_blank">«Ускоряем» открытие тяжелого сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311300/" target="_blank">Ты помнишь чудное мгновенье?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/311582/" target="_blank">Двенадцать полезных Chrome DevTools Tips</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/311554/" target="_blank">Как перестать отлаживать асинхронный код и начать жить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/311546/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №230 (26 сентября — 2 октября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311448/" target="_blank">Какие перспективы у Node.js после воссоединения — мнения экспертов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311452/" target="_blank">Онлайн-книга своими руками на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311404/" target="_blank">Фреймворк для простых проектов на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311398/" target="_blank">Программируйте там, где затык будет, а не там, где он был</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311066/" target="_blank">Делаем свою первую браузерную 2d игру с физикой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310302/" target="_blank">Универсальный (Изоморфный) проект на Koa 2.x + React + Redux + React-Router</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193376/" target="_blank">Google Apps script: получение данных из Flurry</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/193340/" target="_blank">JavaScript: хорошие новости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192806/" target="_blank">Нужны ли в JavaScript классы? часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193004/" target="_blank">Альтернатива .sortable — новое решение сортировки списка на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192972/" target="_blank">БЭМ on Rails</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192902/" target="_blank">Сниппеты для Chrome DevTools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192672/" target="_blank">Стартовал предзаказ Tessel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187590/" target="_blank">HTML5 и drag & drop нескольких объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192444/" target="_blank">Happy end моей истории со скриптом для комфортного чтения Хабра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192372/" target="_blank">Дэйв Мэтвин: jQuery создают личности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192358/" target="_blank">Двухпанельный менеджер закладок для Firefox на ExtJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/xakep/blog/189210/" target="_blank">В поисках лазеек: гид по DOM Based XSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191858/" target="_blank">Ещё один препроцессор для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192288/" target="_blank">Объединение Easel.js и Box2d на Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192276/" target="_blank">Электронные библиотеки на работе и дома</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192272/" target="_blank">Расчет площади пересечения окружностей методом Монте-Карло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192124/" target="_blank">Строковая интерполяция. Сказка-быль</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192012/" target="_blank">Несколько интересностей и полезностей для веб-разработчика (выпуск 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192020/" target="_blank">Интерфейс модуля fs из API Node.js частично портирован во браузерный (клиентский) JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191850/" target="_blank">Делаем «mindmap» на Javascript с локальным хранением в базе данных браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191664/" target="_blank">Наш взгляд: Meteor против Derby</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191480/" target="_blank">Паттерн Стратегия на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191464/" target="_blank">Загрузка файлов в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191192/" target="_blank">NodeJS Cluster-hub. Обмен сообщениями в cluster, запросы, межпроцессные эксклюзивные блокировки (критические секции)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183008/" target="_blank">Deferred объекты в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191060/" target="_blank">Минималистичный RSS-ридер для сервиса Яндекс.Подписки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191074/" target="_blank">Локализация шаблонов на клиенте в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190958/" target="_blank">DRY роутинг в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190874/" target="_blank">Как я продолжил делать свой луна-парк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190700/" target="_blank">YAMD: еще один велосипед для описания модулей в JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/190340/" target="_blank">Mail.Ru для бизнеса, часть 2: как это работает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190374/" target="_blank">Наследование в Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190494/" target="_blank">Улучшенное наследование в CoffeeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182532/" target="_blank">Реализация выборки, кэширования и отрисовки фотографий на карте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190370/" target="_blank">Набор методов для работы со списками в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190342/" target="_blank">Понимание типов сервисов в AngularJS (constant, value, factory, service, provider)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190272/" target="_blank">Двухколёсная автоматизация загрузки файлов на сервер из Notepad++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190200/" target="_blank">Вышел test.it v1.1.0 — что дальше?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189084/" target="_blank">Promise-ы в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189872/" target="_blank">Оформление кода, оптимизация процесса проверки качества кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189994/" target="_blank">Несколько интересностей и полезностей для веб-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190142/" target="_blank">Вышел Meteor 0.6.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190146/" target="_blank">Tessel – микроконтроллер, программируемый на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190144/" target="_blank">Titanium Cloud Service: отправка писем без вызова email dialog</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190096/" target="_blank">Nested routing в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189862/" target="_blank">JSXGraph — введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176779/" target="_blank">Esboza — векторный редактор online & фреймворк (Часть вторая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/189830/" target="_blank">Build 2013 для HTML/JS-разработчиков под Windows 8.1 и обзор полезных докладов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187582/" target="_blank">Использование Drag&Drop в HTML 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189838/" target="_blank">Crossfilter.js, dc.js и D3.js для визуализации Данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189812/" target="_blank">Node.JS и выгрузка каталога из 1С на сайт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189782/" target="_blank">JavaScript: как правильно курить IE10, или проблемы миграции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189692/" target="_blank">Звездное небо на Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189216/" target="_blank">test.it — не опять, а снова</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189576/" target="_blank">10 причин почему ваш проект должен использовать Dojo Toolkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189570/" target="_blank">Делаем красивый input[type=file] для адаптивного сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189432/" target="_blank">Понимание ООП на джаваскрипте (ES5), часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189258/" target="_blank">Как я учился на своих хотелках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/it_dominanta/blog/189286/" target="_blank">Конференция jQuery Russia: первые темы и спикеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189230/" target="_blank">React: javascript-фреймворк от Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189168/" target="_blank">Плагин для webstorm и авто-дополнение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188990/" target="_blank">Инструментирование JavaScript путем изменения кода: области применения и общие принципы работы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188942/" target="_blank">Prepros: open-source компилятор файлов для front-end разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188928/" target="_blank">Социальные игры: сервер, клиент и общая шина событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188778/" target="_blank">Custom Tree v2 jQuery plugin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188760/" target="_blank">Link, $observe и $watch функции в директивах, выполняемые в контексте AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188720/" target="_blank">Symfony2 и KnockoutJS — валидация форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188722/" target="_blank">«backgroundImageTransition», плавная анимация фоновых изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188562/" target="_blank">Последний день 21 века в России и эволюция протеста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188268/" target="_blank">test.it — тестирование JavaScript или мой велосипед с вложенностью и подробным выводом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188406/" target="_blank">CoffeeScript и AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/188254/" target="_blank">Сравнение производительности JS-библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188246/" target="_blank">Пример экзамена факультета информатики в TU Dresden</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188232/" target="_blank">Новый вид mozilla vlc plugin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188118/" target="_blank">Генерация древовидного меню модели представления Nested Sets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188170/" target="_blank">Чертежи в SVG формате. Часть 5. — Черновик стандарта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187808/" target="_blank">AngularJS vs. KnockoutJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187862/" target="_blank">Облачная эпоха CMS. Пример реализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187780/" target="_blank">Самые простые фракталы на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187452/" target="_blank">JavaScript обработка изображений нативными функциями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187406/" target="_blank">Полноэкранный, масштабируемый div, соблюдающий пропорции ширины, высоты и текста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187400/" target="_blank">Как захватить мир, или javascript next уже сейчас (часть первая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187316/" target="_blank">Стартап WigWag создаёт среду для программирования умного дома на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187270/" target="_blank">WebRTC PeerConnection и DataChannel: обмен данными между браузерами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187264/" target="_blank">PopulateJS: don't repeat yourself в HTML-разметке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187176/" target="_blank">Карта с проекциями из Proj4js на Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187094/" target="_blank">Karma — тестируем javascript в консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185970/" target="_blank">Интересные аспекты развития JavaScript и веб-технологий 2013-го года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/186768/" target="_blank">Применение JSON-Schema в тестировании и документировании API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186762/" target="_blank">Доступ к JavaScript веб-страницы из расширения для Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186690/" target="_blank">JQuery плагин ipmask для ввода ip v4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186672/" target="_blank">Карта на Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186532/" target="_blank">Интерактивный глобус — SVG versus Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186568/" target="_blank">Автоматическое оповещение об изменениях статуса почтовых посылок через SMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186352/" target="_blank">Node.js в роли проксирующего сервера данных через websockets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/it_dominanta/blog/186336/" target="_blank">Мировая конференция jQuery приходит в Россию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/186050/" target="_blank">HTML5 в мобильной разработке — что выбрать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186202/" target="_blank">Сжатие данных при передаче от браузера к серверу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186136/" target="_blank">Voyeur.js — маленькая и привлекательная библиотека для работы с DOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185932/" target="_blank">Поиск похожих проектов на GitHub</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311390/" target="_blank">История одной одержимости, или как я писал календарный скрипт для Photoshop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311226/" target="_blank">JSX: антипаттерн или нет?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310952/" target="_blank">React.js: собираем с нуля изоморфное / универсальное приложение. Часть 3: добавляем авторизацию и обмен данными с API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311196/" target="_blank">Битва дроидов и джедаев на клеточном автомате</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/310740/" target="_blank">Как переписать SDK на TypeScript, обновить платформу и ни о чем не жалеть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311180/" target="_blank">Управляем кучей таймеров в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/311138/" target="_blank">Создание шейдеров на основе Babylon.js и WebGL: теория и примеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nanofl/blog/311086/" target="_blank">NanoFL: краткое описание возможностей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/311096/" target="_blank">Javascript-фреймворки: должен остаться только один</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310854/" target="_blank">Redux Action Creators. Без констант и головной боли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/185210/" target="_blank">ChartJS — JavaScript-библиотека визуализации данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185750/" target="_blank">jQuery plugin для использования SVG графики. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185558/" target="_blank">Организуем выделение текста в textarea</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/xakep/blog/185490/" target="_blank">Как делать презентацию с помощью веб-технологий?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185316/" target="_blank">Мобильное приложение HTML5: ошибка или успех. Попытка №0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185290/" target="_blank">Построение масштабируемых приложений на TypeScript. Часть 2.5 — Работа над ошибками и делегаты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185238/" target="_blank">Javascript: тесты, компиляция и MVVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185244/" target="_blank">Флажок «Включить JavaScript» убрали из настроек Firefox 23</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185200/" target="_blank">Особенности npm и хранение node_modules в git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185192/" target="_blank">Ленивый препресс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185160/" target="_blank">Построение масштабируемых приложений на TypeScript. Часть 2 — События или зачем стоит изобретать собственный велосипед</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184942/" target="_blank">Построение масштабируемых приложений на TypeScript. Часть 1 — Асинхронная загрузка модулей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184926/" target="_blank">Как использовать Fullscreen API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/backendless/blog/184598/" target="_blank">Работаем с реляционными данными используя Backend-as-a-Service</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184896/" target="_blank">Backend фреймворк SailsJS + BackboneJS + MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184550/" target="_blank">O Backbone.js очень просто и кратко для любителей MVC-фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184726/" target="_blank">Игра на JavaScript «Уголки»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184766/" target="_blank">Эволюция гоночных автомобилей на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184666/" target="_blank">Создаём игру, используя canvas и спрайты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184540/" target="_blank">Доступ к SOAP веб-сервисам 1С из JavaScript и Html</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184210/" target="_blank">Yaxy — proxy-сервер для веб-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184488/" target="_blank">HTML5 круговая панорама на three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ostrovok/blog/183746/" target="_blank">Чем живет мобильный Островок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184334/" target="_blank">Решаем квартирный вопрос при помощи API Яндекс.Карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184344/" target="_blank">CoffeeScript в примерах. Валидация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184186/" target="_blank">Привязка телефона к аккаунту и авторизация сканированием QR кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183874/" target="_blank">Приход Node на Android: первые шаги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183868/" target="_blank">Добавляем ссылки на страницы сайта в CKEDITOR 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183838/" target="_blank">Что было бы, если бы Хемингуэй писал на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183818/" target="_blank">Вышел TypeScript 0.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183630/" target="_blank">HTML 5 Notifications API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182620/" target="_blank">Исследуем JavaScript Generators</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183458/" target="_blank">Мобильная веб-разработка: HTML5 приложение для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183434/" target="_blank">Простой компонент на TypeScript для отображения дерева</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183400/" target="_blank">Bison для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183334/" target="_blank">Node.js vs Java + Rhino + Jetty + FreeMarker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183238/" target="_blank">Photoshop color picker на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183188/" target="_blank">Паттерны JavaScript модулей в Impress для node.js и браузеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175029/" target="_blank">Нужны ли в JavaScript классы?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183094/" target="_blank">Используем bower в django проектах с django-bower</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183016/" target="_blank">Внешнее воздействие на веб-клиент 1С: Предприятие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182802/" target="_blank">Прошлое и будущее компиляции JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182782/" target="_blank">Генератор ASCII-артов на HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182714/" target="_blank">Прототип тоталитарного фреймворка для node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182670/" target="_blank">Понимание областей видимости или Scope в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182556/" target="_blank">Создание огроооомных приложений на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182484/" target="_blank">URL Scheme: Проверка наличия установленного приложения в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182348/" target="_blank">Опыт работы с AngularJS на примере игрового проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182310/" target="_blank">Погружение в темные воды загрузки скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182292/" target="_blank">Еще один загрузчик скриптов для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/182278/" target="_blank">DevConf 2013 пройдет 14 июня — cформирована программа секции JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/182134/" target="_blank">PhoneJS — Новый HTML5-фреймворк для мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182036/" target="_blank">«Поддержка Sass» в Chrome Dev Tools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181992/" target="_blank">«Workspace» и «Сниппеты» в Chrome Dev Tools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181880/" target="_blank">Сравнение эффективности минимизаторов CSS- и JavaScript-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181882/" target="_blank">Лучшие практики AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181840/" target="_blank">Модуль, упрощающий работу с OpenLayers и системами мониторинга</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181746/" target="_blank">Реализация стилей подчеркивания в LESS через генерацию png в data-URI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181846/" target="_blank">Морской бой в браузере на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181782/" target="_blank">jVForms.js — кроссбраузерный полифил проверки форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181778/" target="_blank">Директива для работы с таблицами на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181554/" target="_blank">LibCanvas: На пути к звёздам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181758/" target="_blank">Внутренняя работа плагина unobtrusive jQuery validate в ASP.Net MVC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181754/" target="_blank">Понимание Html-кода, сгенерированного ненавязчивой валидацией в ASP.Net MVC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181686/" target="_blank">Vert.x — асинхронный, event-driven фреймворк, созданный под влиянием node.js. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181670/" target="_blank">HTML/CSS/JS + Node.js + node-webkit = Кроссархитектурные приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181650/" target="_blank">Пуленепробиваемый Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181618/" target="_blank">Популярность Javascript-фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181610/" target="_blank">Пишем клиент для любимого сайта на phoneGap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181536/" target="_blank">Путь JavaScript модуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dnevnik_ru/blog/181352/" target="_blank">Развиваем фронтенд Дневник.ру. Часть первая. Сборка и проверка JavaScript кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181179/" target="_blank">Особенности jQuery методов fadeIn, fadeOut и fadeTo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181007/" target="_blank">Авторизация в PhoneGap приложении через Facebook, Vkontakte и Habrahabr</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180927/" target="_blank">Визуализация на сервере: NodeJS + D3.js + PhantomJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180767/" target="_blank">Треугольно-оквадраченный релиз AngularJS 1.1.5. Что нового?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180659/" target="_blank">Пример круговой диаграммы в SVG средствами Raphael и PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180657/" target="_blank">Создаем аудио слайдшоу с помощью jPlayer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180365/" target="_blank">Директивы в Angularjs для начинающих. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180573/" target="_blank">Поиск и подсветка текста на странице (JavaScript — jQuery)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180377/" target="_blank">Shadow DOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180241/" target="_blank">Прививка от реальности: розовые очки для браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180279/" target="_blank">Работа плагина jQuery validate изнутри</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180353/" target="_blank">Псевдо 3D: Анимация вращения планет и других шароподобных объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180275/" target="_blank">Эффект слайдов на сайте. Версия вторая, дополненная и исправленная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179983/" target="_blank">Объекты страницы: описание одной техники</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179359/" target="_blank">MaskJS — HMV* фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/179915/" target="_blank">Ремонтируем онлайн-банкинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179875/" target="_blank">Движок V8 и браузер Google Chrome станут лучше поддерживать Asm.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179755/" target="_blank">Директивы в Angularjs для начинающих. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179473/" target="_blank">Формы в Angularjs. Как я обрел любовь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163535/" target="_blank">jsFind. Выборка данных из массива объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179267/" target="_blank">Почем оптимизация или «бесплатных завтраков не бывает»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179209/" target="_blank">Как подружить Socket.IO и backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178133/" target="_blank">Особенности работы или «За что я люблю JavaScript»: Замыкания, Прототипирование и Контекст</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179031/" target="_blank">Знакомство с CoffeeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178811/" target="_blank">Работа с моделями данных в javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178823/" target="_blank">Вывод метаданных модели MVC в динамическую разметку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178753/" target="_blank">AngularJs. Отложенная загрузка модулей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178743/" target="_blank">Время подключать исходники. Введение в Source Maps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178705/" target="_blank">Dvelum или как я искал серебряную пулю</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310968/" target="_blank">Руководство новичка по разработке плагинов для графического редактора Sketch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/310980/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №229 (19 — 25 сентября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310946/" target="_blank">Canvas Gauges 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303378/" target="_blank">Определяем Phantom-ных ботов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/310868/" target="_blank">Быстрый рендеринг с DOM шаблонизаторами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310830/" target="_blank">Как выжать максимум из минификации кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310794/" target="_blank">Структуры данных для самых маленьких</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310820/" target="_blank">Как использовать Mongoose-схему для генерации graphQL-типов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310788/" target="_blank">Строим свой full-stack на JavaScript: Клиент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310706/" target="_blank">Выходит HTML 5.1, готовится HTML 5.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178615/" target="_blank">Удлинитель субтитров формата SubRip (.srt)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178611/" target="_blank">Мобильная веб-разработка: жесты, фреймворки, цифры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178427/" target="_blank">uptodate.js — библиотека для автообновления элементов времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178217/" target="_blank">Пишем плагин для IntelliJ IDEA, добавляем функциональности редактору кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178299/" target="_blank">Кастомизация скроллбаров в браузере: компромисс между технологиями html, css, js и удобством использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tradingview/blog/178261/" target="_blank">Основной цикл в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178271/" target="_blank">Оканчивается эпоха восьмеричных чисел с ведущим нулём в языке JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178135/" target="_blank">Verlet.js — физический движок на основе метода Верле</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178021/" target="_blank">Новая CSS директива @supports</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177759/" target="_blank">tFormer.js — велосипед для валидации форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177755/" target="_blank">Простой способ управления удалёнными устройствами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177843/" target="_blank">MVC-фреймворки на JavaScript: сравнение Marionette и Chaplin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177735/" target="_blank">TraceGL — интересный способ отладки JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177645/" target="_blank">jRIApp — новый HTML5 фреймворк для создания интернет бизнес приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177559/" target="_blank">Манипулирование URL'ами в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177553/" target="_blank">Управление front-end проектом с помощью NPM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177395/" target="_blank">Делаем жизнь проще, GruntJS (для новичков)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177253/" target="_blank">jQuery 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177219/" target="_blank">ASP.NET MVC и ненавязчивая валидация с Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177159/" target="_blank">Как я Quake в браузере делал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177069/" target="_blank">Как сократить количество написаного кода при ajax запросах? И ассинхронная отправка файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177115/" target="_blank">Сравнение Angular, Backbone, CanJS и Ember</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177059/" target="_blank">Даты в JavaScript: количество дней в месяце и некоторые особенности Safari</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177083/" target="_blank">JQuery плагин для перевода страниц с помощью html5 data-* атрибутов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176897/" target="_blank">Bootstrap-wysiwyg: крошечный текстовый редактор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aktiv-company/blog/176513/" target="_blank">Берем под контроль криптографию в облачном хранилище MEGA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176669/" target="_blank">YaUI — буддийская кросплатформенная нативная JavaScript библиотека UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176651/" target="_blank">Перевод Angular.js на русский язык</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176633/" target="_blank">Веб-чат от Mozilla на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176617/" target="_blank">Реализация ToDoMVC на Jiant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176473/" target="_blank">Javascript Interface Abstract Notation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176325/" target="_blank">Гиперпространство на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176457/" target="_blank">Twitter Bootstrap 3: неофициальный первый взгляд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175753/" target="_blank">Разработка встраиваемого JavaScript приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176239/" target="_blank">Hyperlapse: сервис для обзора Google Street View</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176199/" target="_blank">Хипстерский Bootstrap. Вспомни миллениум!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176115/" target="_blank">Организация хостинга зашифрованного видеоконтента с помощью HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176143/" target="_blank">Асинхронные шаблоны в Knockout.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175947/" target="_blank">Асинхронные API и объект Deferred в деталях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175745/" target="_blank">Firefox: размер файла по ссылке, или через тернии к форку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175725/" target="_blank">Связные списки в функциональном стиле</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175571/" target="_blank">Tree View с «CRUD операциями», «drag and drop (DnD)» и «отложенной загрузкой» с использованием Dojo Tree, Entity Framework, SQL Server и ASP.NET MVC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175371/" target="_blank">Обзор ECMAScript 6, следующей версии JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175469/" target="_blank">Firefox: приватные вкладки, разные API и расширения, не требующие перезапуска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175453/" target="_blank">Использование паттернов проектирования в javaScript: Порождающие паттерны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175283/" target="_blank">24 совета javascript-разработчику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175241/" target="_blank">Nodecopter — управление квадрокоптерами на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175187/" target="_blank">4-числовая система нумерации версий с датой и минорами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175117/" target="_blank">Пишем сложное приложение на knockout.js — 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175045/" target="_blank">50 потрясающих плагинов jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174935/" target="_blank">Первоапрельские CSS-сниппеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174745/" target="_blank">Нельзя просто так взять и обратиться к фоновой странице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174659/" target="_blank">Игры с физикой благодаря HTML5 и JS. Программист симулирует движение ткани</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174603/" target="_blank">Pixi.js — 2D движок с прозрачной поддержкой WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174375/" target="_blank">Github Visualizer — Сервис визуализации истории репозиториев с GitHub</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174481/" target="_blank">Mozilla предлагает создавать «тяжёлые» 3D-игры для web на их новом движке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174461/" target="_blank">FightCode: танковые войны на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174339/" target="_blank">Vow: самые быстрые промисы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174207/" target="_blank">Swig — JavaScript шаблонизатор с Django Template синтаксисом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174197/" target="_blank">Создаем удобный вьювер для vk.com при помощи Fluid.app с нотификацией о новых сообщениях в доке Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174175/" target="_blank">Новый этап в гонке скоростей JavaScript. Модуль OdinMonkey ускоряет низкоуровневый код в 10 раз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173773/" target="_blank">Canvas в GIF на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mbt/blog/173915/" target="_blank">Javascript умирает или перерождается?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173813/" target="_blank">Почему вам стоит использовать TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173691/" target="_blank">Взлом тега в 100 символов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173447/" target="_blank">Эмуляция хвостовой рекурсии в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173327/" target="_blank">intro.js — пошаговое руководство для веб-страницы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173201/" target="_blank">Page Visibility API и побочный эффект предотрисовки страниц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173103/" target="_blank">StateController. Событийная модель в разработке интерфейсов. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173023/" target="_blank">StateController. Событийная модель в разработке интерфейсов. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164439/" target="_blank">Универсальный код C# под .NET и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172975/" target="_blank">AngularJS для привыкших к jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172973/" target="_blank">Редактор цветовых схем для SublimeText 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172875/" target="_blank">Динамический шаблон Wordpress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172831/" target="_blank">Простой упаковщик CommonJS модулей для использования в браузере — clinch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/172767/" target="_blank">Online-трансляция HTML5 Camp — 15 марта с 10:00</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172731/" target="_blank">Вертикальная черта, затем ноль</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172509/" target="_blank">Использование Loader в QML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/172333/" target="_blank">Pilot: многофункциональный JavaScript роутер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169909/" target="_blank">Пошаговое создание виджета для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172299/" target="_blank">Запись и модификация звука в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170129/" target="_blank">Карты в браузере без сети: open source наносит ответный удар</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172107/" target="_blank">Отладка Node.js в Visual Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171989/" target="_blank">Samsung SmartTV AppsFramework глас народа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171967/" target="_blank">Tern — умное редактирование JavaScript с выводом типов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171959/" target="_blank">Расширения Google Chrome: cookies и HTTP-запросы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171917/" target="_blank">Директивы в разметке или разметка с кодом?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/171897/" target="_blank">Вышел WebStorm 6 с поддержкой новейших технологий веб-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171821/" target="_blank">Очень маленький фреймверк или как написать собственный Angularjs в 200 строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171743/" target="_blank">Произвольный вид поля file в html-форме, одинаковый во всех браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171731/" target="_blank">Прототипы JavaScript — программистам на C/C++/C#/Java</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171649/" target="_blank">Вышел CoffeeScript 1.6.1 с поддержкой Source Maps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171565/" target="_blank">Расширения Google Chrome: делаем горячие клавиши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171477/" target="_blank">Webrtc, Peer Connection — создание полноценного видео чата в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171561/" target="_blank">Часто задаваемые вопросы про asm.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171517/" target="_blank">Пишем своё расширение для браузера Mozilla Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171543/" target="_blank">О пользе JSDB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ostrovok/blog/171519/" target="_blank">Грузим много CSS для IE в режиме разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171437/" target="_blank">Объектно-ориентированный дизайн… в CSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171383/" target="_blank">Поле с паролем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310434/" target="_blank">Как мы написали фриланс-биржу для Telegram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310662/" target="_blank">Номенклатура JavaScript (в контексте Node.js и Web API)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310594/" target="_blank">Авторизация с помощью Facebook и Vkontakte в одностраничном приложении на Backbonejs + Express</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hh/blog/310524/" target="_blank">Нянчим проект на React-redux с пелёнок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intersystems/blog/310402/" target="_blank">Ontodia + Caché — визуализатор онтологий для навигации по хранимым сущностям InterSystems Caché</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jetinfosystems/blog/310490/" target="_blank">Использование EntryPoints в SuiteCRM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310454/" target="_blank">Секреты Progressive Web Apps: часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/310422/" target="_blank">Zone.js или как Dart спас Angular</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310432/" target="_blank">Приложение на Elm за считанные секунды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309930/" target="_blank">Доводы в пользу function tree</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171359/" target="_blank">10 странностей и секретов JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171183/" target="_blank">RemoteAll — технология мобильного управления экранами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171141/" target="_blank">Пишем HTML-виджет для приложения IBOOK Author</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150549/" target="_blank">Фабрика виджетов jQuery UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171011/" target="_blank">Работаем с API вконтакте из расширения для Google Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170987/" target="_blank">Использование событий в jQuery плагинах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170983/" target="_blank">Создаем автарки в браузере с помощью вебкамеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170937/" target="_blank">Миграция на Grunt v0.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170765/" target="_blank">Пишем расширение для Google Chrome (и публикуем его)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170627/" target="_blank">CoffeeScript 1.5.0 позволяет писать комментарии в формате Markdown</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170137/" target="_blank">Instant PlanningPoker на socket.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170563/" target="_blank">От JQuery до Backbone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170009/" target="_blank">Полезные советы в работе с Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/169359/" target="_blank">Кроссбраузерная кастомизация системного скроллбара</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169699/" target="_blank">Jasmine — дополнительные возможности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168829/" target="_blank">Файловый менеджер (Silex + Kendo UI) — Tutorial</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169445/" target="_blank">vPass 2 — простой и удобный генератор безопасных паролей на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169249/" target="_blank">Мини-игра с отслеживанием положения головы или как я встретил headtrackr.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169161/" target="_blank">NodeSmarty новый шаблонизатор для node.js (3.beta)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169051/" target="_blank">Отзывчивый дизайн с помощью камеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168959/" target="_blank">Вышел Bootstrap 2.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168885/" target="_blank">Облака на CSS3 3D Transformations</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168845/" target="_blank">Egghead.io — видео курс по AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168705/" target="_blank">Изометрический сапёр на LibCanvas (html5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168461/" target="_blank">Зачем Google добавляет while(1); к своим JSON-ответам?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168435/" target="_blank">Классический сапёр на html5 и LibCanvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168355/" target="_blank">PCRE в JavaScript под Node</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168091/" target="_blank">LiveReload на Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168027/" target="_blank">Tweetping — все твиты на карте мира в прямом эфире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167973/" target="_blank">Искусственный интеллект. Моделируем спасательную операцию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cackle/blog/167895/" target="_blank">Long Polling от А до Я своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167843/" target="_blank">Flight — новый js-фреймворк от Twitter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167793/" target="_blank">Валидация форм в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167799/" target="_blank">Игровые технологии — в жизнь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167591/" target="_blank">Оптимизация knockoutjs при динамическом добавлении и удалении темплейтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167525/" target="_blank">Мысли о верстке с JavaScript позиционированием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167437/" target="_blank">Создание спрайтового движка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167119/" target="_blank">Знакомимся с Fabric.js. Часть 2-я</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167311/" target="_blank">Cypher десктопное приложение, написанное на основе платформы node-webkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167273/" target="_blank">Пользовательский JavaScript и CSS на мобильных устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167161/" target="_blank">Тонкости Rails 4 — Turbolinks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167265/" target="_blank">Общение между окнами одного браузера средствами cookie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167173/" target="_blank">Введение в Jasmine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167033/" target="_blank">Переполнение стека вызовов JavaScript, SetTimeout и снижение производительности AJAX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167015/" target="_blank">Разминаем мозг регулярными выражениями — Regex Tuesday Challenge</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167007/" target="_blank">Physics Snake. С нуля. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166835/" target="_blank">Yeoman Express Stack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166893/" target="_blank">Используем method decorator в CoffeeScript(Javascript) для удобного и читаемого DRY-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166831/" target="_blank">Кнопки социальных сетей, HTML 5, атрибут data и асинхронная загрузка javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166721/" target="_blank">Yota-script или экономим c Yota кроссплатформенно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166575/" target="_blank">Показ масштабируемых изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166539/" target="_blank">Lifehack для Same-Origin-Policy; Google Chrome и другие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166413/" target="_blank">Тренды фронтэнда. Javascript APIs для мобильных устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166419/" target="_blank">Не надо давать обещания, или Promises наоборот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165565/" target="_blank">Knockoutjs. «Растим» дерево</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166321/" target="_blank">Отслеживаем «onresize» на элементе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166135/" target="_blank">Введение в NikaFramework (NKF). Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166215/" target="_blank">Геокодирование адреса в координаты и геолокация текущего местоположения в OpenLayers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166179/" target="_blank">Встречайте долгожданный plugins.jquery.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166127/" target="_blank">Джон Резиг об интернационализации JavaScript-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/166061/" target="_blank">Инерция в JavaScript на примере OL3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166043/" target="_blank">jsiedit: идея и создание удобного подключаемого WYSIWYM редактора с примером для Хабрахабра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166045/" target="_blank">Введение в NikaFramework (NKF). Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165813/" target="_blank">Браузерная онлайн игра средствами jQuery, CoffeeScript, SVG и node.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165373/" target="_blank">В поисках идеального css-фреймворка. Требования, реализация, maxmertkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165741/" target="_blank">Букмарклет JS: «Альбомы видеозаписей ВКонтакте»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165649/" target="_blank">JavaScript: от начала до конца</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161715/" target="_blank">Suit Up! Простой и легкий WYSIWYG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/165213/" target="_blank">Touch-web: Swipe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165275/" target="_blank">Ключевое отличие AngularJS от Knockout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165197/" target="_blank">RegEx Selector для jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164805/" target="_blank">jQuery изнутри — атрибуты, свойства, данные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165085/" target="_blank">JS модуль для Java разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165073/" target="_blank">Пишем расширение для google chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165017/" target="_blank">Полный набор пакетов для разработки с помощью NodeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164937/" target="_blank">Применение, советы и особенности knockout.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164899/" target="_blank">Ещё одна «Солнечная cистема» на HTML5 Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164887/" target="_blank">Прохождение капчи «Лабиринт» на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164815/" target="_blank">Экономическая стратегия или 4200 байт за 10 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164677/" target="_blank">jQuery изнутри — манипуляции с DOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164609/" target="_blank">Симуляция движения и заноса машины в игре на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164533/" target="_blank">jQuery изнутри — парсинг html</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164493/" target="_blank">Директивы в AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164433/" target="_blank">jQuery изнутри — введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164169/" target="_blank">Математическая библиотека Numbers.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164003/" target="_blank">Как сделать 3D шутер на JavaScript за пару дней</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163893/" target="_blank">Солнечная система на LibCanvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163787/" target="_blank">Webshell.io — командная строка для интернета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163527/" target="_blank">WebRTC #1 — Знакомимся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163739/" target="_blank">Улучшаем опыт взаимодействия с формами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163703/" target="_blank">История одного хабраспора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163373/" target="_blank">Своя игра с JavaScript и Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163321/" target="_blank">Numeral.js — библиотека для форматирования чисел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163073/" target="_blank">Javascript: Рисуем с помощью кривых Безье</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163115/" target="_blank">Sencha объявила конкурс HTML5 приложений с призовым фондом более 20 000 долларов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163033/" target="_blank">Альтернативы для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162841/" target="_blank">Мобильные браузеры и position:fixed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162775/" target="_blank">Вышло обновление JavaScript шаблонизатора ECT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162801/" target="_blank">Мысли по процессу разработки игры REFLECT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162537/" target="_blank">Подбор маски ввода по телефонному номеру</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/310308/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №228 (12 — 18 сентября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310262/" target="_blank">15 самых популярных языков программирования по версии GitHub</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310146/" target="_blank">Скованные одной цепью, или добавим комфорта комментариям Вконтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310042/" target="_blank">Строим свой full-stack на JavaScript: Сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310142/" target="_blank">Состоялся финальный релиз Angular 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rtl-service/blog/309978/" target="_blank">Односторонний binding данных с ECMAScript-2015 Proxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309958/" target="_blank">React.js: собираем с нуля изоморфное / универсальное приложение. Часть 1: собираем стек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309848/" target="_blank">Три принципа производительности в JavaScript, делающие Bluebird быстрым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308296/" target="_blank">Вынесение управления состоянием компонентов в пользовательские классы в React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/309606/" target="_blank">Moscow JS Meetup в Badoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162385/" target="_blank">Попробуй БЭМ на вкус!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162367/" target="_blank">Знакомимся с Fabric.js. Часть 1-я</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162301/" target="_blank">Вебсокеты: боевое применение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162261/" target="_blank">Closure Platform. Костыли для Google Closure Library</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162159/" target="_blank">Псевдо 3D или параллакс средствами javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162137/" target="_blank">TinyMCE 3.x: Подсчет количества слов и символов при редактировании контента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161943/" target="_blank">Навигация без перезагрузки используя expressjs, jade и History.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161875/" target="_blank">Простая техника Parallax Scrolling</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161763/" target="_blank">Пользовательские кнопки в API Яндекс.Карт 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161887/" target="_blank">3D-шахматы на HTML / CSS3 / JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161755/" target="_blank">Создаём сложный лабиринт в фоне веб-страницы (на клиенте)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/158905/" target="_blank">Централизованная обработка исключений в Node.JS. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161665/" target="_blank">Вышел AWS SDK для Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161469/" target="_blank">API PHP в JavaScript. Краткий обзор PHP.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161389/" target="_blank">Extensionizr — шаблонизатор дополнений для хрома</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160917/" target="_blank">Новый сервис Dropbox: диалог выбора файлов Dropbox Chooser с поиском и галереей для встраивания в веб-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160887/" target="_blank">Асинхронная загрузка данных Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160679/" target="_blank">Псевдо веб сокеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160651/" target="_blank">Пагинация для Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160477/" target="_blank">«Offline first» подход к созданию веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160473/" target="_blank">Примеры использования тригонометрических функций для анимации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160125/" target="_blank">Фильтр для комментариев Хабрахабра в виде userscript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160181/" target="_blank">Jenkins + JsHint(JsLint) или смотрим метрики javaScript на Jenkins-е</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159879/" target="_blank">Копирование текста в буфер обмена с помощью jQuery плагина zClip</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159961/" target="_blank">Делаем превью сайтов в стиле Yandex Браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158495/" target="_blank">HTML5 Canvas: rotate и translate на примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159733/" target="_blank">Новый jQuery плагин адаптивной галереи c автоматической группировкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/159587/" target="_blank">Загрузка файлов на сервер в 2012 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159313/" target="_blank">Подводные камни JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159269/" target="_blank">SteelToe — object, не стреляй мне в ногу!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159071/" target="_blank">JavaScript SIP библиотека от авторов стандарта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159145/" target="_blank">Chrome extension — с шахматами и библиотекаршами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158235/" target="_blank">Пишем плагин для jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158927/" target="_blank">Описание и валидация древовидных структур данных. JSON-Schema</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intersystems/blog/158681/" target="_blank">Реализация фоновой загрузки файлов на сервер Caché</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158915/" target="_blank">Fronteers 2012 — лучшая конференция по клиентской разработке, часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158797/" target="_blank">Buildy: песочница для взрослых на HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158333/" target="_blank">Визуализируем геоинформацию из логов на web-карте в реальном времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158513/" target="_blank">ExtJS: легкий способ мультизагрузки и валидации файлов (используем HTML5 File API)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158403/" target="_blank">Почему eval — это не всегда плохо</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158197/" target="_blank">Конвертируем видео… в SVG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158185/" target="_blank">Web разработка на node.js и express. Глава 2 — тестирование приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157791/" target="_blank">Adobe Edge Animation, Chrome 23 и мозговых протуберанцев пост</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/157673/" target="_blank">Lo-Dash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157661/" target="_blank">Отдача мелкой графики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157383/" target="_blank">Преимущества произвольных тегов, или как я отказался от HTML разметки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157489/" target="_blank">Большое обновление ObjectScript 0.99-vm3. Часть 1: Регистровая виртуальная машина</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157341/" target="_blank">Сборка клиентских JavaScript шаблонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157111/" target="_blank">Привлекательные экспериментальные плагины на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157011/" target="_blank">Вышла версия 1.0.0 кросс-браузерного фреймворка для создания расширений Kango</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156665/" target="_blank">Вышел KnockoutJS 2.2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155867/" target="_blank">Блог на node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156589/" target="_blank">Загрузка картинок в фоне. Модуль на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ostrovok/blog/156227/" target="_blank">Фронт-энд Островка изнутри</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156553/" target="_blank">DatePalette — фреймверк, создающий UI для работы пользователя с датой в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155881/" target="_blank">JSter – все, что нужно для Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155877/" target="_blank">Странные глобальные переменные в VK.com, зачем?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155849/" target="_blank">Как работает оператор delete</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155815/" target="_blank">Четыре паттерна вызова функций в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/154999/" target="_blank">Rivertrail: параллелизм в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155579/" target="_blank">Thinking Reactively. Meteor JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/155275/" target="_blank">Изучаем jQuery. 2-е изд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155227/" target="_blank">Meteor 0.5.0: аутентификация, OAuth, SRP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155157/" target="_blank">Fronteers 2012 — лучшая конференция по клиентской разработке, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ostrovok/blog/155013/" target="_blank">Видеозапись доклада «Вся соль одностраничных приложений» с 404fest</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155069/" target="_blank">Первый стабильный SDK для Dart</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155059/" target="_blank">Визуальный редактор ББ кодов для phpBB3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155039/" target="_blank">Посылаем сообщения в Notification Center из браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155029/" target="_blank">Создаем подобие шаблонизатора на TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155007/" target="_blank">Пишем игру для Samsung SmartTV на JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154917/" target="_blank">Об использовании WebKit .NET</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154801/" target="_blank">Угадываем знаменитость</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154639/" target="_blank">[Html 5] SharedWorker: примеры использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154587/" target="_blank">Загрузка файлов через FileReader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154537/" target="_blank">Оптимизируем производительность JavaScript для V8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154411/" target="_blank">Ruby-встречи в Санкт-Петербурге снова в моде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154343/" target="_blank">Визуализация характеристической функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153127/" target="_blank">TypeScript: статический анализ, автодополнение и немножко ES6 для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154251/" target="_blank">Премьера jQuery UI 1.9.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154191/" target="_blank">DBSlayer прокси на BASH за 5 минут или еще один способ отдать JSON из MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/154151/" target="_blank">Новые аттачи в Яндекс.Почте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154105/" target="_blank">Функциональное программирование на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154103/" target="_blank">JPG, прозрачность, Canvas, анимация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154097/" target="_blank">Особенности загрузки файлов на HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154003/" target="_blank">Пишем сложное приложение на knockoutjs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153803/" target="_blank">TypeScript Debugging</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153739/" target="_blank">Эмулятор Радио-86РК на JavaScript / Перезагрузка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153697/" target="_blank">Насколько Node.js быстрее, чем Windows Script Host? И о чём это говорит нам?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/enterra/blog/153365/" target="_blank">Понимание ООП в JavaScript [Часть 1]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152731/" target="_blank">Пишем редактор карт изображений (html image map) на javascript / html5 / inline SVG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153529/" target="_blank">Интерактивная HTML5-визуализация по мотивам «Lost»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153457/" target="_blank">Doppio — JVM, Компилятор и дизассемблер в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153279/" target="_blank">SugarJS — Синтаксический сахар для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153227/" target="_blank">Эффектная анимация разрушения (Pixel Dust) на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153169/" target="_blank">Космики: моделирование эволюции многоклеточных организмов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153121/" target="_blank">Небольшая заметка о feature detection</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153119/" target="_blank">JavaScript — это Бейсик сего дня! (В хорошем смысле.)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153099/" target="_blank">Создание плагина jQuery на примере слайдера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153095/" target="_blank">Node.js + Chromium = node-webkit: ещё более перспективный вариант второго шага эволюции веборазработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153077/" target="_blank">TypeScript: язык для разработки больших приложений на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/309718/" target="_blank">[Питер, анонс] Встреча JUG.ru с Дмитрием Александровым — Nashorn: легкий движок JavaScript на JVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/309708/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №227 (4 — 11 сентября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309678/" target="_blank">Масштабирование текста в блоке с помощью Jquery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/309614/" target="_blank">«Ни единого разрыва»: чего стоит сделать онлайн-трансляцию, которая не будет падать, тормозить и вызывать боль в глазах?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309572/" target="_blank">Offline-first приложение с Hoodie & React. Часть вторая: авторизация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309466/" target="_blank">Строим свой full-stack на JavaScript: Основы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309518/" target="_blank">Script-server. WebUI для удалённого запуска ваших скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309276/" target="_blank">Необычные jQuery и CSS селекторы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309166/" target="_blank">Offline-first приложение с Hoodie & React. Часть первая: браузерная база данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309430/" target="_blank">30 легковесных JavaScript плагинов и библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153073/" target="_blank">Еще раз о модальных окнах и немного плюшек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152845/" target="_blank">Получение метаданных .NET на клиенте с использованием ajax</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153013/" target="_blank">Node.js + Chromium = AppJS: один из перспективных вариантов второго шага эволюции веборазработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152873/" target="_blank">Node.js на узле Фидонета: автоматизация периодических публикаций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152847/" target="_blank">KnockoutJS: фильтрация списка с сохранением состояния</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152833/" target="_blank">Модульный подход к разработке web-приложений с использованием JavaScript: AMD и RequireJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152797/" target="_blank">ObjectScript API, интеграция с C++. Часть 1: работа со стеком, вызов функций OS из C++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151961/" target="_blank">«Герои мата и меха» портированы на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152591/" target="_blank">Система online документации для JavaScript — ADWiki</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152683/" target="_blank">LZW-сжатие строк на javascript и распаковка средствами PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152681/" target="_blank">Kittydar: кошачий детектор на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152637/" target="_blank">Первые шаги с Chromium Embedded Framework и .NET</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152289/" target="_blank">ObjectScript — новый язык программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152245/" target="_blank">Новинки DOM API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152119/" target="_blank">LispyScript — JavaScript в стиле Lisp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152048/" target="_blank">JavaScript — полезные материалы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151589/" target="_blank">Карма-расширение для Google Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152001/" target="_blank">Введение в веб-компоненты. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151949/" target="_blank">Deployd — backend платформа для frontend разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151832/" target="_blank">Реализация игры «Life 1970» на javascript'е с использованием TDD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151815/" target="_blank">Application Cache API — новые возможности и проблемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151724/" target="_blank">SlickGrid documentation improvement</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151722/" target="_blank">Web Workers работа с Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151716/" target="_blank">Понимание callback-функций (колбеков)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151690/" target="_blank">ECMAScript Harmony и Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151677/" target="_blank">Дифференцирование Object, Array, Number и String</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151591/" target="_blank">ECT — новый JavaScript шаблонизатор со вкусом кофе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151409/" target="_blank">Карта музыкальных жанров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151374/" target="_blank">Mozilla готовит к релизу новый JavaScript-движок для Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151269/" target="_blank">Производительность: Flash vs JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151239/" target="_blank">JsTree — деревья это так просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151155/" target="_blank">Отложенная обработка массива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/151137/" target="_blank">Вышел WebStorm 5 — станьте еще продуктивнее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151104/" target="_blank">jQuery plugin для форм с динамической структурой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151070/" target="_blank">«Сложно о простом». Функции-конструкторы — как объекты,(prototype). Объекты,(__proto__). constructor, ={}, как функция-конструктор new Object()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151014/" target="_blank">Saltarelle: open source C# — JavaScript компилятор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151013/" target="_blank">DraftIcon — смена favicon, если пост перенесен в черновики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150944/" target="_blank">Neutrino — крошечный js-фреймворк с полноценным наследованием и событиями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150919/" target="_blank">В Firefox 16 заработает инкрементальный сборщик мусора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150890/" target="_blank">Wicked Good XPath: быстрый Xpath на Javascript-е</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150851/" target="_blank">Smooth.js — jQuery-плагин для CSS3-transitions с даунгрейдом до $.animate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150723/" target="_blank">JavaScript: оператор delete создает утечку!?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150730/" target="_blank">«Сложно о простом». Типы данных JS. В поисках истины примитивов и объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150743/" target="_blank">Piecon — динамическая круговая диаграмма в фавиконе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150644/" target="_blank">Авторизация пользователей, у которых заблокированы cookies</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150729/" target="_blank">Поверхностный обзор javascript-enabled BaaS платформ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150695/" target="_blank">Отслеживание изменений в свойствах Js объекта с использованием dirtyFlag из пакета KoLite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150594/" target="_blank">Vanilla JS — очень мощный javascript-фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150575/" target="_blank">Релиз jQuery 1.8.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150571/" target="_blank">Object.defineProperty или как сделать код капельку лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150565/" target="_blank">Компания Atari в партнёрстве с Microsoft запустила свои старые игры в онлайн</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150370/" target="_blank">Другой IncludeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150372/" target="_blank">Speakker — музыкальный плеер на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147111/" target="_blank">Внедрение Javascript-кода в страницу через Chrome Extension</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150321/" target="_blank">Практикум AngularJS — разработка административной панели (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145816/" target="_blank">Манипуляция пикселями на холсте с использованием Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149626/" target="_blank">Пишем реализацию MVC для Backbone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150240/" target="_blank">Превращаем Хабр в «пятнашки» с помощью Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150204/" target="_blank">Решение проблемы установки Cloud9 ide на Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150054/" target="_blank">jQuery UI Datepicker: добавляем нестандартные элементы навигации по годам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145801/" target="_blank">Т-фракталы на JavaScript Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149934/" target="_blank">vPass: страничка на Javascript для максимума безопасности и минимума мучений при работе с паролями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149926/" target="_blank">Google Analytics для сбора ошибок JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149912/" target="_blank">Auto dependency injection в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149872/" target="_blank">Обзор JS-фреймворков. Путешествие через джунгли JavaScript MVC. Ч. 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149864/" target="_blank">Меню с плавной инверсией цвета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149581/" target="_blank">Привязка контекста (this) к функции в javascript и частичное применение функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149757/" target="_blank">Практикум AngularJS — разработка административной панели</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149665/" target="_blank">Noty — необычайно гибкий плагин jQuery для вывода уведомлений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149606/" target="_blank">Bart Chalkboard Generator</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149594/" target="_blank">Обзор JS-фреймворков. Путешествие через джунгли JavaScript MVC. Ч. 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149526/" target="_blank">Лексическая область видимости функций в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149516/" target="_blank">Ключевое слово this в javascript — учимся определять контекст на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149518/" target="_blank">HTML5 Audio — состояние дел. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149514/" target="_blank">Библиотечка datef — форматирование дат</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149509/" target="_blank">MaskJS, поговорим о шаблонном движке, или новом велосипеде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149430/" target="_blank">Вещи, которые я не знал о WebKit inspector</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149403/" target="_blank">Релиз jQuery 1.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149397/" target="_blank">Браузерный API для регистрации на сайте и совершения моментальных платежей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149349/" target="_blank">Про jQuery и велосипеды — мое дополнение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149342/" target="_blank">В Firefox 15 появилась удаленная отладка для мобильных устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoftlumia/blog/149320/" target="_blank">Пишем мэшап с помощью Nokia Maps JS API и Twitter Search API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149237/" target="_blank">Велосипеды на Javascript и jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149176/" target="_blank">Оптимизация длинных списков логических значений на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149109/" target="_blank">arcticModal — jQuery-плагин для модальных окон</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149098/" target="_blank">Киберпанк, матрицы и canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149060/" target="_blank">AngularJS — фреймворк для динамических веб-приложений от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149082/" target="_blank">Бесплатные книги по JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149053/" target="_blank">Профилирование JavaScript с Chrome Developer Tools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149036/" target="_blank">Начинаем работать с Ember.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149025/" target="_blank">3D в вебе — выбор технологии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149010/" target="_blank">Маскирование числовых значений с использованием autoNumeric и Knockout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoftlumia/blog/148926/" target="_blank">Пишем простую карту с помощью Nokia Maps JS API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148875/" target="_blank">Отображение зависимых данных на примере каскадных выпадающих списков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148758/" target="_blank">Отображение зависимых данных, на примере использования двух ниспадающих списков, посредством knockout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148744/" target="_blank">Leaflet 0.4 — новая версия открытой JS-библиотеки для интерактивных карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148648/" target="_blank">JavaScript-фреймворк Meteor получил 11 миллионов долларов инвестиций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148573/" target="_blank">JsRender: Новое поколение jQuery Templates</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148515/" target="_blank">The Modal — правильные модальные окна</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148416/" target="_blank">JScriptInclude Gear v 0.1.0 — механизм каскадного импорта скриптов/библиотек. (Реванш)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309286/" target="_blank">Решаем головоломки шаманов в World of Warcraft генетическим алгоритмом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309370/" target="_blank">Основы Serverless приложений в среде Amazon Web Services</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309354/" target="_blank">История языков программирования: разброд и консолидация JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309318/" target="_blank">4 вида утечек памяти в JavaScript и как с ними бороться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/309316/" target="_blank">Четкий пацан Zone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/309212/" target="_blank">Frontend: Разработка и поддержка (+голосование)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309306/" target="_blank">Пособие по webpack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/309298/" target="_blank">Книга «ES6 и не только»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309300/" target="_blank">Что стоит почитать об Angular 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309256/" target="_blank">Пишем свой первый плагин для Brackets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148404/" target="_blank">Простой bookmarklet как средство очистки содержимого веб-страницы от нежелательных элементов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148314/" target="_blank">Ovation. Таблица аккордов своими руками с помощью JS и HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147912/" target="_blank">jQuery CoreUISelect — плагин для стилизации селекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148368/" target="_blank">HTML5 Audio — cостояние дел. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148274/" target="_blank">Grunt, инструмент для сборки javascript проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ostrovok/blog/148292/" target="_blank">Как сделать группу инпутов удобной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148217/" target="_blank">Java2Js: Инструменты и шаблоны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148213/" target="_blank">Золотое правило производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148188/" target="_blank">Дао роста полей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148185/" target="_blank">6 примеров, роняющих IE6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148098/" target="_blank">Введение в Javascript Source Maps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148140/" target="_blank">Подмена XMLHttpRequest или как не трогая тонны готового js-кода изменить поведение всех ajax-запросов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148000/" target="_blank">Edit-in-place на компонентах Bootstrap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147979/" target="_blank">Изменяем СSS в реальном времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147901/" target="_blank">Свежий взгляд на примеси в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147699/" target="_blank">Wordpress Plugin длиной в одну страницу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147630/" target="_blank">Парсинг BEncode на JavaScript. Просмотр торрент-файлов в Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147563/" target="_blank">Отличия в адаптации сайта и AJAX веб-приложения для iOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147512/" target="_blank">WysiBB — WYSIWYG BBCode редактор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147432/" target="_blank">Последовательное сохранение настроек с использованием AJAX и очередей jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147469/" target="_blank">Работа по протоколу XMPP используя jquery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147367/" target="_blank">Поле для творчества, — анимации и многопользовательские игры прямо в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147351/" target="_blank">Кроссбаузерный скроллинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147274/" target="_blank">Google передает управление проектом GWT независимому комитету</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147255/" target="_blank">Клавиатурные сокращения с Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146735/" target="_blank">Своё приложение на Node.js с хранением в Dropbox – это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147037/" target="_blank">Три нестандартных типа чисел в JavaScript и две библиотеки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147032/" target="_blank">Как создать свой Color Picker на Javascript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146983/" target="_blank">Web-разработка на node.js и express. Изучаем node.js на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146853/" target="_blank">FLAC-декодер на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146844/" target="_blank">FuckItJS: принудительное исполнение JavaScript-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146829/" target="_blank">Yeoman.io</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146824/" target="_blank">Велосипед: альтернатива iframe на jQuery.ajax как инструмент разработки mash-up приложений. Есть ли смысл?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146795/" target="_blank">Экосистемный подход к сборке веб-проекта с TeaCSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146784/" target="_blank">Утечки памяти в замыканиях JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146769/" target="_blank">Как отличить версию iPad в Safari</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145584/" target="_blank">Билайн Wi-Fi бьёт адреса открытых до него вкладок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146638/" target="_blank">HTML5 в HabraStorage</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146594/" target="_blank">Индикаторы ключевой информации на сайтах для Firefox на скорую руку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146563/" target="_blank">Brackets — Open Source IDE для веб-разработки от Adobe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/146562/" target="_blank">Плакат «Современные веб-стандарты»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146394/" target="_blank">Moobile — основанный на MooTools фреймворк для мобильных устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146474/" target="_blank">RichFaces 3.0, Формирование и выгрузка файла, jQuery и Костыли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146405/" target="_blank">CoffeeScript: Классы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146440/" target="_blank">CoffeeScript: Методы для работы с объектами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146444/" target="_blank">Машина Тьюринга восстановлена из уплотнённого кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146362/" target="_blank">Qbaka — сервис для отслеживания JS-ошибок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141013/" target="_blank">Приватный чат на node.js — что может быть проще?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/enterra/blog/145903/" target="_blank">Knockout MVC — Сила Knockout.js для ASP.NET MVC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146090/" target="_blank">Появился перевод стандарта EcmaScript 5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146044/" target="_blank">DesktopGap для Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145953/" target="_blank">История одного расследования о странном поведении XMLHttpRequest в новых версиях Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145836/" target="_blank">Что интересного я узнал на DevConf 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145810/" target="_blank">В jQuery начиная с версии 1.8 можно исключить некоторые модули</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/toster/blog/145506/" target="_blank">.toster: Javascript supportato!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145618/" target="_blank">JavaScript loader без define</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145608/" target="_blank">HTML5: Доступ к батарее через javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145574/" target="_blank">Удобная работа с LocalStorage. Ну и с SessionStorage заодно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145539/" target="_blank">Синтаксический сахар АОП в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143288/" target="_blank">Извлечение ссылки на объект из замыкания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145269/" target="_blank">Загрузка и инициализация JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/roundlake/blog/145210/" target="_blank">Joosy: альтернативный подход к браузерным фреймворкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145152/" target="_blank">gmaps.js — самый легкий способ использования Google Maps API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145141/" target="_blank">Работа с изометрическими матрицами. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145129/" target="_blank">DOM-библиотека Laconic</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145117/" target="_blank">OpenLayers или делаем сервис мониторинга транспорта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145034/" target="_blank">WebGl-2d.js: Реализация Canvas 2D API на WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144998/" target="_blank">Работа с локальным хранилищем, как с объектом — Продолжение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144951/" target="_blank">HTML5-карты для мобильных платформ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144758/" target="_blank">Визуализация «В Контакте»: Скажи мне, кто твой друг?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144720/" target="_blank">jClever — умный jNice с плюшками. Стилизация HTML-форм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144646/" target="_blank">Javascript: ООП, прототипы, замыкания, «класс» Timer.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144635/" target="_blank">JavaScript для «маленьких». DOM (часть 4)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144466/" target="_blank">Greensock: анимация на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144402/" target="_blank">Реализации прогрессивной загрузки изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144391/" target="_blank">Принцип работы SIP клиента в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144393/" target="_blank">JSZip спустя полгода: распаковка архивов, работа на Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144352/" target="_blank">Modernizr: практическое применение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144268/" target="_blank">Node.js на узле Фидонета: читаем джаваскриптом заголовки эхопочты, хранимой в формате JAM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144237/" target="_blank">Пишем и оптимизируем Жизнь Конуэя на JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144235/" target="_blank">JavaScript для «маленьких». DOM (часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144129/" target="_blank">Видео SIP клиент в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144208/" target="_blank">Greensock — теперь и для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144154/" target="_blank">JavaScript для «маленьких». DOM (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144124/" target="_blank">Средний размер сценария JavaScript увеличился на 48% за год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144112/" target="_blank">Пример воздействия масс-эффекта на количество скачиваний</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144071/" target="_blank">HTML5 History API уже сегодня и без ограничений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144008/" target="_blank">jParser: анализ двоичных файлов работает просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143985/" target="_blank">Javascript BMP Parser</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143895/" target="_blank">Средняя длина идентификатора в популярных библиотеках JavaScript составляет 8.27 символа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143870/" target="_blank">CanvGauge — измерительный прибор с помощью canvas для HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143857/" target="_blank">Имитируем пересечение, исключение и вычитание, с помощью опережающих проверок, в регулярных выражениях в ECMAScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/143714/" target="_blank">Простой универсальный переключатель на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143743/" target="_blank">Импровизированный шаблонизатор на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143698/" target="_blank">Mobiscroll — кастомный select для мобильных сайтов и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143583/" target="_blank">Портируем C/C++ библиотеку на JavaScript (xml.js)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143597/" target="_blank">Работа с локальным хранилищем, как с объектом? Легко!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143592/" target="_blank">eachDeferred — отложенная обработка коллекции, one by one</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143586/" target="_blank">Пакеты в JavaScript — jpack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143574/" target="_blank">Улучшаем «бесконечный скроллинг»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319092/" target="_blank">Lebab это как Babel, только наоборот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/319162/" target="_blank">JavaScript-тренды, на которые стоит обратить внимание в 2017-м</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mindbox/blog/319156/" target="_blank">Webpack в Visual Studio для больших солюшенов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319136/" target="_blank">Классы на JS с protected, множественным наследованием, геттерами/сеттерами и примесями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319134/" target="_blank">Мыслим в стиле React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/319132/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №244 (2 — 8 января 2017)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319094/" target="_blank">Еще один велосипед для борьбы с callback hell в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319016/" target="_blank">Особенности разработки Telegram бота с Google API в Docker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319056/" target="_blank">FuseTools — уникальный инструмент прототипирования и разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/319038/" target="_blank">Изоморфные React-приложения: производительность и масштабирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/309230/" target="_blank">10 особенностей Webpack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309226/" target="_blank">RxConnect — когда React встречает RxJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/309174/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №226 (29 августа — 4 сентября 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308986/" target="_blank">Знакомство с p5.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308930/" target="_blank">Ускоряем npm-скрипты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308874/" target="_blank">64-битная арифметика в браузере и WebAssembly</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308944/" target="_blank">Проверяем скорость работы промисов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/308934/" target="_blank">Новые практические курсы по JavaScript и ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308926/" target="_blank">Webpack + React. Как уменьшить бандл в 15 раз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308864/" target="_blank">Асинхронный код в синхронный встроенными средствами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143382/" target="_blank">Отчет с конференции Front Trends 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130377/" target="_blank">Когда я умер, не было никого, кто бы это опроверг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143347/" target="_blank">Все JavaScript библиотеки в одном месте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143338/" target="_blank">Backbone.js и routes без хэшей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143322/" target="_blank">Написание сложных интерфейсов с Spine.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143303/" target="_blank">Расширение функций виджета iCal в Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143266/" target="_blank">Фреймворк Autodafe — работа с моделями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143172/" target="_blank">Saga: проверяем покрытие кода тестами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143001/" target="_blank">Виджет для Android на JavaScript за 15 минут на примере Хабра-Кармы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142934/" target="_blank">Что у нас «Лучшего» на сегодня?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142910/" target="_blank">Расширение для jQuery: Execute Object</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142888/" target="_blank">Внутренности jQuery. Поиск кода, выполняемого по событию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142862/" target="_blank">Получение кроссдоменных данных в Google Chrome через юзерскрипт (обход бага)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142844/" target="_blank">Стереоскопический эффект на 3D-картах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142597/" target="_blank">Учим MS SQL Server Reporting Services 2008 R2 показывать HTML в отчетах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142603/" target="_blank">Custom Tree View</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142590/" target="_blank">7 причин, почему AngularJS крут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142475/" target="_blank">Шаблонизация в JavaScript с использованием Razor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142419/" target="_blank">Рисуем карту изображения мышкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142301/" target="_blank">TodoMVC — «Hello, world» на стероидах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141952/" target="_blank">WebStorm 4 — в гармонии с ECMA Script</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142103/" target="_blank">Факторы популярности юзерскриптов на примере одного сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140286/" target="_blank">Web-Drawing библиотеки: Paper.js Vs. Processing.js Vs. Raphael.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142039/" target="_blank">Интеграция web приложений с соц сетями или «проставляем лайки»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141938/" target="_blank">Очистка заражённых файлов сайта от вредоносного кода. Продолжение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141961/" target="_blank">DeepClone на javascript, который можно твитнуть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141910/" target="_blank">«Паскалевская графика на HTML5» или «Что Opera сделала с Rainbow Dash»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141874/" target="_blank">Модуль корзины интернет-магазина на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141834/" target="_blank">Meteor — Новый способ создания приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141817/" target="_blank">Простой parallax эффект для промо-сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141770/" target="_blank">Использование классов в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141745/" target="_blank">fc.tape — js-библиотека для простой анимации спрайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141675/" target="_blank">Перевод официальной документации по Backbone.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141451/" target="_blank">Утечки памяти в IE8, или страшная сказка со счастливым концом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141467/" target="_blank">Архитектура взаимодействия клиентской и серверной частей Web приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141463/" target="_blank">Асинхронные функции в Javascript и ключевое слово this</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/141361/" target="_blank">JavaScript на сервере, 1ms на трансформацию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141469/" target="_blank">Сложный SVG на клиенте и сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141350/" target="_blank">Баннер конференции о JS с ошибкой в JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141346/" target="_blank">Интерактивная визуализация данных Envision.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141334/" target="_blank">Онлайн генератор документации для Node.JS проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141165/" target="_blank">Тестирование компонентов и приложений ExtJS/Sencha с использованием движка PhantomJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141068/" target="_blank">Пишем веб-эмулятор терминала на Go, используя Websocket</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141042/" target="_blank">Console-trace — улучшение console.log для Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141010/" target="_blank">Починяем кнопку «Подписаться» в Google Reader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140981/" target="_blank">Dojo, JSONP и все-все-все</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140974/" target="_blank">Получение фото с android-смартфона прямо в html форму</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140960/" target="_blank">JavaScript в диаграммах (Часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140856/" target="_blank">Создание соединительных стрелок для блочных элементов используя canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140810/" target="_blank">Prototype, proto и оператор new</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140825/" target="_blank">Создание кроссбраузерной оболочки для пользовательских скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140809/" target="_blank">Коллекция паттернов и антипаттернов JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140806/" target="_blank">BrowserQuest — многопользовательская игра на canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140576/" target="_blank">Увидеть скрытое или как хорошее сделать еще лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140780/" target="_blank">Игра Tron размером в 219 байт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140775/" target="_blank">Фотореалистическое изображение облака при помощи JavaScript и трёхмерных CSS-преобразований</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140705/" target="_blank">Как исправить ошибки в Google Maps Javascript API 3 mobile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140764/" target="_blank">CoffeeScript: Подробное руководство по циклам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140743/" target="_blank">Баг в браузере Safari</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140624/" target="_blank">Создаём простейший виджет для Mac OS X Dashboard</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140643/" target="_blank">Установка юзерскриптов в Опере в общих случаях и для защищённых страниц (https)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140441/" target="_blank">Особенности написания и возможные фичи LR-генераторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140338/" target="_blank">cache-js. функция кэширования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140369/" target="_blank">PHP warning/notice сообщения в JS консоль + секретная кнопка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140316/" target="_blank">Автоматическая кросс-доменная установка высоты Iframe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140147/" target="_blank">Fiddler — помощник в отладке JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140306/" target="_blank">Две маленьких функции, способных упростить жизнь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140297/" target="_blank">Авторизация через JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/roundlake/blog/140291/" target="_blank">Индексация AJAX-сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139708/" target="_blank">Sync vs Async на примере Firebird</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140227/" target="_blank">habrAllHub — переключалка между «Все блоги» и «Мои избранные блоги»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140185/" target="_blank">SQL.js: движок SQLite переведён на JavaScript посредством Emscripten</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/140140/" target="_blank">Первый тренинг по KnockoutJS от Романа Гомолко в Днепропетровске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140123/" target="_blank">Пишем сайт на GWT: Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140082/" target="_blank">Распознаём retina-дисплеи джаваскриптом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140033/" target="_blank">Kartograph — фреймворк для создания интерактивных карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140034/" target="_blank">Оптимизатор загрузки JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139999/" target="_blank">PIRO — ракета для вашего PivotalTracker акаунта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139990/" target="_blank">Javascript в декларативном стиле</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139748/" target="_blank">Аналог паттерна Step и вложенность асинхронных вызовов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139746/" target="_blank">Представление многострочных данных в javascript и юзерскриптах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139719/" target="_blank">Паттерн Repository в связке с Mongoose ODM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139341/" target="_blank">Khan Academy будет использовать JavaScript для обучения программированию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139210/" target="_blank">HTML-атрибуты data-* для хранения параметров и получения их в js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138987/" target="_blank">Обертка для API асинхронного IndexedDB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138939/" target="_blank">JUST — JavaScript шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138913/" target="_blank">Мой extend и стиль наследования классов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138881/" target="_blank">Кривые дракона и черепашка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138668/" target="_blank">Пиксельные искажения с билинейной фильтрацией в HTML5 canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138492/" target="_blank">Динамический перевод страницы на другой язык</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138331/" target="_blank">Мысли о скриншотах через JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138272/" target="_blank">Отличия == и === в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138151/" target="_blank">Как вы относитесь к функции eval в JavaScript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138062/" target="_blank">О том, как работают JavaScript таймеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138047/" target="_blank">В Chrome (dev) реализованы будущие функции JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137870/" target="_blank">JavaScript|HTML Preprocessor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137863/" target="_blank">Обновление информации в фоне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137852/" target="_blank">Simplify.js — JavaScript-библиотека для упрощения ломаных линий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137818/" target="_blank">«Лапша» из callback-ов — будьте проще</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137812/" target="_blank">Видео: Антон Кекс. Асинхронное программирование с Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308856/" target="_blank">DiffHTML.js — утилита для патчинга DOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308782/" target="_blank">Выбираем состав изоморфных React-приложений на следующие 12 месяцев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308766/" target="_blank">Horizon — realtime JavaScript бэкэнд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308696/" target="_blank">Векторные вычисления в JS, есть ли смысл, когда и как можно использовать SIMD в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/308698/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №225 (22 — 28 августа 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307896/" target="_blank">Как я изобретал велосипед, или мой первый MEAN-проект</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/uteam/blog/308504/" target="_blank">Over 9000: неочевидные сложности работы со счетчиками социальных кнопок (+ задачка)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308484/" target="_blank">Статическая и динамическая типизация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308446/" target="_blank">Почему я все ещё использую function в JavaScript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/308410/" target="_blank">JavaScript Performance, базы данных и поиски «серебряной пули»: видеозаписи ТОП-5 докладов HolyJS 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137778/" target="_blank">Спагетти в последовательном вызове асинхронных функций. Теория и практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137682/" target="_blank">Префиксные деревья в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137426/" target="_blank">Javascript. Сортировка таблицы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137379/" target="_blank">Парсер PSD файлов на CoffeeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137343/" target="_blank">Смена изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137188/" target="_blank">Почему WAT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136782/" target="_blank">KnockoutJS: сказ о том, как легко принимать или отклонять изменения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136886/" target="_blank">Три подхода к методологии построения сложного клиентского приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136860/" target="_blank">Открытое письмо лидерам JS касательно точек с запятой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136374/" target="_blank">Kinetic ScrollBar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136360/" target="_blank">Оптимизация JavaScript для ускорения загрузки веб-страниц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136301/" target="_blank">Фильтрация текстов по списку регулярных выражений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135979/" target="_blank">PhantomJS + JSCoverage + QUnit или консольные JS юнит-тесты с подсчетом покрытия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136027/" target="_blank">Backbone Boilerplate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135919/" target="_blank">Простая минималистская реализация сложных JavaScript приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135565/" target="_blank">ISO 8601 и ECMAScript — головная боль от разночтения стандартов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135464/" target="_blank">Вышла «бета» скрипта HabrAjax</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135039/" target="_blank">Динамические графики на основе highstock</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135027/" target="_blank">Самовызывающийся конструктор Джона Резига и размышление о том, почему это решение не прижилось</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135001/" target="_blank">Эмуляция события вызова функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134823/" target="_blank">Последовательный вызов асинхронных функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134653/" target="_blank">Repaint для больших картинок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134602/" target="_blank">Esprima — парсер для javascript, написанный на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134281/" target="_blank">Тест на скорость год спустя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/133998/" target="_blank">Работа с бинарными данными с использованием типизированных массивов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133940/" target="_blank">Быстрый переезд с Google Translate API v1 на Bing Translate API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133648/" target="_blank">Kendo UI — новейший UI-фреймворк от Telerik</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133622/" target="_blank">Практическое применение Backbone.View</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133406/" target="_blank">JVM на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133328/" target="_blank">DOM-shim для всех браузеров включая IE &lt; 8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133321/" target="_blank">Расстановка точек над onmousewheel и немного о луковом супе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133160/" target="_blank">Ненормальный Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133129/" target="_blank">JSZip Создаем .zip файлы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133077/" target="_blank">Вертикальный скроллинг содержимого страницы в стиле Mac OS X Lion</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133074/" target="_blank">JavaScript для чайников. Всё что вы хотели знать о функциях но боялись спросить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133034/" target="_blank">Попытка просто объяснить сложные, для новичков, вещи в javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132983/" target="_blank">OS.js: десктоп на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132941/" target="_blank">Highstock: мониторим Премию Рунета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132728/" target="_blank">Практический пример использования Backbone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132698/" target="_blank">ООП в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132682/" target="_blank">Декораторы в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132654/" target="_blank">Moment.js: легкая работа с датами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132472/" target="_blank">JavaScript паттерны… для чайников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132611/" target="_blank">Javascript в PDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132463/" target="_blank">Reactive Extensions for JavaScript. Полное руководство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132340/" target="_blank">Javascript примеси для чайников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132286/" target="_blank">Online Json Generator</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132160/" target="_blank">Отладка javascript на мобильных устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131818/" target="_blank">Диаграмма процентовки «за и против» на canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131714/" target="_blank">Javascript наследование для чайников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131689/" target="_blank">Сравнительное тестирование JavaScript-календарей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131632/" target="_blank">H.264 декодер на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131542/" target="_blank">Chainvas: изящный и миниатюрный «костыль», добавляющий средства цепного вызова (method chaining) к любому API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131489/" target="_blank">sjFilemanager — Reloaded. AJAX + PHP файловый менеджер версия 1.0 бета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131437/" target="_blank">Школа программирования Codecademy получила $2,5 млн</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131340/" target="_blank">accounting.js — форматирование чисел и валют</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131166/" target="_blank">Паттерн «Обозреватель» и контекст вызова в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130911/" target="_blank">Поиск, сортировка и фильтры для списков в HTML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130673/" target="_blank">Userscripts. Кроссдоменные запросы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130713/" target="_blank">Серия 2. Как выполнять методы предков в модификации прототипного наследования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130681/" target="_blank">Блеск и нищета GWT (или почему я не верю в Dart часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130589/" target="_blank">Почему я не верю в Dart</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130495/" target="_blank">Как выполнять методы предков в реализации прототипного наследования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130419/" target="_blank">Компиляция JavaScript проекта с помощью Maven и Closure Compiler</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130436/" target="_blank">Userscripts. Упаковываем юзерскрипт для Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130276/" target="_blank">Объединение javascript файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129928/" target="_blank">Базовая архитектура веб-приложения на Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129454/" target="_blank">Userscripts. Углубляемся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129409/" target="_blank">Азы Dojo на примере самодельного Хабра-парсера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129343/" target="_blank">Учимся писать userscript'ы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129237/" target="_blank">Dojo-виджет своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129246/" target="_blank">Работа с last.fm API на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129250/" target="_blank">Кроссбраузерный вызов методов Flash из JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129086/" target="_blank">Маленькие да удаленькие — 3 библиотеки JavaScript на всякий случай</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128986/" target="_blank">&lt;input placeholder=&quot;нажми чтобы написать&quot;&gt;</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128848/" target="_blank">Kerning.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128552/" target="_blank">Загрузка страницы с помощью Ajax как ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128426/" target="_blank">График «мастер-детали» средствами Highcharts и jQuery UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128321/" target="_blank">Валидация в JavaScript с помощью Valid8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128347/" target="_blank">Создание Doodle jump на HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128264/" target="_blank">Streams.js: отложенные (ленивые) вычисления в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128169/" target="_blank">Simile TimeLine — библиотека для отображения событий на шкале времени</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128115/" target="_blank">Визуализация статистических данных с помощью Highcharts</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128079/" target="_blank">setImmediate через MessageChannel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128047/" target="_blank">Визуализация графов с помощью библиотеки arbor.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127994/" target="_blank">HTML и SVG: создаём интерактивную карту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127991/" target="_blank">JavaScript Gaming: Часть 1. Box2d и основы Физики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127908/" target="_blank">Принципы написания приложений на ExtJS 2.x/3.x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127672/" target="_blank">Маньячная минимизация (в погоне за байтом)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127557/" target="_blank">Helios Kernel (удобный include в Javascript)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127482/" target="_blank">Область видимости в JavaScript и «поднятие» переменных и объявлений функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127285/" target="_blank">Keymaster.js: простая микро-библиотека для «горячих клавиш»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127101/" target="_blank">SunCalc — JavaScript-библиотека для вычисления положения солнца и солнечных фаз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127049/" target="_blank">Backbone.js для «чайников»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126901/" target="_blank">Codecademy: 200 тыс. юзеров, 2,1 млн уроков за первые 72 часа работы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126802/" target="_blank">Немного о том, как JavaScript include JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126788/" target="_blank">5 полезных приемов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126775/" target="_blank">Введение в Wacom Javascript API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126551/" target="_blank">CBS или упрощенный вид стилизирования и написания скриптов в ваших проектах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126471/" target="_blank">Events bubbling и events capturing</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308326/" target="_blank">Ember: Декларативная шаблонизация c компонируемыми хелперами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308374/" target="_blank">Стоит ли Typescript усилий?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308138/" target="_blank">Что нового в Marionette.js 3.0?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/308330/" target="_blank">Использование С++ в AWS Lambda</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/308316/" target="_blank">Книга «Веб-разработка с применением Node и Express. Полноценное использование стека JavaScript»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306584/" target="_blank">Node.js и JavaScript вместо ветхого веба</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308256/" target="_blank">Создание игры «Слова из Слова»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/308190/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №224 (15 — 21 августа 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308154/" target="_blank">JavaScript: где мы сейчас и куда двигаться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308148/" target="_blank">It’s the future</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126330/" target="_blank">Ещё один физический движок на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126027/" target="_blank">Введение в SproutCore часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/evilmartians/blog/125833/" target="_blank">Page Visibility API и Visibility.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125698/" target="_blank">Введение в SproutCore, часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125772/" target="_blank">Взаимодействие между web-приложениями через Web Intents</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125148/" target="_blank">KnockoutJS: Ajax grid view с нуля в 40 строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125118/" target="_blank">Первое знакомство с Google Maps Javascript API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125617/" target="_blank">Нечёткий поиск на клиенте и Soundex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125605/" target="_blank">HotMilk — библиотека для удобной организации шаблонов Mustache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125524/" target="_blank">Введение в MVVM и KnockoutJS (видео)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125306/" target="_blank">Замыкания и объекты JavaScript. Переизобретаем интерпретатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125415/" target="_blank">Sugar — подслащённый Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125308/" target="_blank">Функция К.O'Nsole.log для отладки в разных браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124912/" target="_blank">Виджет выпадающих списков Chosen: реализуем динамическое добавление позиций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124931/" target="_blank">KnockoutJS: Фильтрация списков на лету</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124911/" target="_blank">Imperavi: удобный и действительно красивый JS WYSIWYG редактор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124899/" target="_blank">Chosen: сделай выпадающие списки более дружественными</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124731/" target="_blank">Knockout, практический опыт использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123314/" target="_blank">Получаем данные из Javascript через функции Java</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122945/" target="_blank">Dojo Build System, собственный опыт создания сборки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124327/" target="_blank">JavaScript F.A.Q: Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123937/" target="_blank">Асинхронная загрузка изображений в скрытом iframe: подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122993/" target="_blank">Разработка архитектуры вашего приложения в Ext JS 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123793/" target="_blank">JavaScript-библиотеки для работы с SVG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123692/" target="_blank">Разработка приложения живого поиска по Twitter с помощью Knockout, jQuery и ASP.NET MVC 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123635/" target="_blank">Масштабируемые JavaScript приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123400/" target="_blank">Three.js — 3D в браузере своими руками или WebGL становится ближе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123106/" target="_blank">Введение в HTML5 History API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122739/" target="_blank">Итераторы и генераторы на основе функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122829/" target="_blank">Cвязывание данных в JavaScript-приложениях: автороутинг событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122783/" target="_blank">Реализация HTTP server push с помощью Server-Sent Events</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122620/" target="_blank">Iterators & Generators</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122270/" target="_blank">Введение в prototype.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121997/" target="_blank">Flash vs JavaScript, V8 Benchmark Suite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121926/" target="_blank">Пример использования KnockoutJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121803/" target="_blank">Топ-11 самых частых ошибок в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121180/" target="_blank">Модульное проектирование RIA проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120878/" target="_blank">Lightcycle demo using WebGL (part 0)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120917/" target="_blank">Новые возможности XMLHttpRequest2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120884/" target="_blank">Cactus Obfuscator обфускатор JavaScript/CSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120585/" target="_blank">Компилятор .NET в JavaScript и пример XNA-демо в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120429/" target="_blank">Создание приложений реального времени с помощью Server-Sent Events</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120364/" target="_blank">Оператор with и почему его не стоит использовать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120336/" target="_blank">Cross-domain «ajax» — простое решение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120244/" target="_blank">В Firefox 6 интегрируют расширение Workspace для предпросмотра скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120193/" target="_blank">Основы и заблуждения насчет JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120192/" target="_blank">JavaScript F.A.Q: Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120122/" target="_blank">DepthJS: фреймворк для веб-навигации с помощью Kinect</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119898/" target="_blank">Техники сжатия кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119851/" target="_blank">FAQ по JavaScript: задавайте вопросы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119841/" target="_blank">Пять способов вызвать функцию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119369/" target="_blank">И опять про MVC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119694/" target="_blank">Типизированые массивы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119692/" target="_blank">Распределенные вычисления на JavaScript: Сегодня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119465/" target="_blank">TDD в JavaScript. Разработка приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119391/" target="_blank">Создание объектов в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119371/" target="_blank">Появилась «Leaflet» — новая open source JavaScript-библиотека для любых карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119304/" target="_blank">Применение Event-driven модели в веб-приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118782/" target="_blank">Написание сложных интерфейсов с Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118721/" target="_blank">CoffeeScript в деле — Пять вещей, которые можно сделать и с JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118666/" target="_blank">JavaScript Strict Mode</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118091/" target="_blank">QooxDoo 1.4 — очередной релиз JS-фреймворка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117915/" target="_blank">ES5 Harmony Proxy — меняем семантику JavaScript внутри самого JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117909/" target="_blank">Простой, казалось бы, вопрос по JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117868/" target="_blank">Магия JavaScript: arguments</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117838/" target="_blank">Что почитать, чтобы повысить свой уровень JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117803/" target="_blank">Кроссбраузерные аксессоры в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117632/" target="_blank">Эмуляция блокировки видимости с помощью with в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117229/" target="_blank">Сборка проекта без единой глобальной переменной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117069/" target="_blank">Модульный подход в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116898/" target="_blank">Запускаем сторонний код в песочнице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116852/" target="_blank">Делаем консоль чуточку удобнее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116827/" target="_blank">Оператор запятая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116789/" target="_blank">PhantomJS: Webkit в консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116587/" target="_blank">Mocking private в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115841/" target="_blank">Поведения браузеров с typeof и toString</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115485/" target="_blank">JavaScript Augmented Reality — тест JSARToolkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115369/" target="_blank">JS1k — пишем отличное веб приложение в 1024 байт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115357/" target="_blank">Sausage.js — библиотека для превращения любого кода в цепочку вызовов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115321/" target="_blank">Справочник, посвященный тонкостям JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115290/" target="_blank">Самый короткий аплоадер картинок!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115138/" target="_blank">«Условная компиляция» в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114936/" target="_blank">Marble Run: победитель конкурса Mozilla Labs Gaming</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114737/" target="_blank">Опасности необязательных аргументов в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114483/" target="_blank">Используем console на полную</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114358/" target="_blank">Продвинутые анимации с requestAnimationFrame</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114350/" target="_blank">DOM Storage window broadcast</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114244/" target="_blank">Программная генерация событий DOM 2 Events</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114198/" target="_blank">Настоящие online, offline события</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114129/" target="_blank">jCanvaScript: JavaScript библиотека для работы с html5 canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114080/" target="_blank">Canvas Indicator — альтернатива для AjaxLoad.gif</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113971/" target="_blank">Проверка на отрицательный ноль</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113955/" target="_blank">Все что нужно для JSONP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113790/" target="_blank">Поддержка HTML5 Web Sql Database и Google Gears с примерами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111982/" target="_blank">Эмуляция фич IE9 в Opera</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113257/" target="_blank">sjFilemanager — бесплатный AJAX файл менеджер. Колесо или ноу-хау?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113344/" target="_blank">JavaScript 1.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113169/" target="_blank">Блокировка видимости с помощью Let в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113075/" target="_blank">Виртуальная клавиатура</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112824/" target="_blank">Регулярная ловушка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281342/" target="_blank">JavaScript выходит за пределы Web в 2015 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/308134/" target="_blank">Зачем нам jQuery?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308034/" target="_blank">Трёхпозиционный checkbox (aka tristate) без скриптов и смс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/307972/" target="_blank">HolyJS в Москве: первые доклады и CallForPapers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307936/" target="_blank">Angular2: RC4 to RC5 Unit Tests Migration Guide</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307856/" target="_blank">Запускаем Node.js на JVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307822/" target="_blank">Я заглянул в папку node_modules, и вы не поверите, что произошло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307826/" target="_blank">20+ Моих любимых AngularJS помощников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307754/" target="_blank">Компания Appcelerator выпустила Hyperloop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307744/" target="_blank">Разработка простого чата на Socket.IO [2016] \ Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112650/" target="_blank">Вынеси мусор!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112551/" target="_blank">Динамический favicon или отображаем карму, не обновляя страницу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112530/" target="_blank">Обфускация JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112518/" target="_blank">Валидация форм в JavaScript ч.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112242/" target="_blank">Mozilla Skywriter (Bespin) вошёл в состав Cloud9 IDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111861/" target="_blank">Написание документации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111634/" target="_blank">Асинхронное программирование на JavaScript — Остаться в живых</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111686/" target="_blank">Javascript и canvas в игре «Жизнь» Джона Конвея</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111563/" target="_blank">Всё, что надо знать о точке с запятой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111393/" target="_blank">Обёртки для создания классов: зло или добро?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111385/" target="_blank">HTML5 CANVAS шаг за шагом: Изображения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111308/" target="_blank">CANVAS шаг за шагом: Основы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111290/" target="_blank">Использование объектов для красивой структуры кода в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111151/" target="_blank">Стековый язык программирования на JavaScript в 34 строки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111070/" target="_blank">Tips & tricks в разработке букмарклетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110906/" target="_blank">audio.js — слушаем музыку в любом браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110794/" target="_blank">Играем H.264 в Опере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110712/" target="_blank">WXHR: старый добрый XHR со вкусом Web Workers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110617/" target="_blank">Используем движок Javascript от IE9 без самого IE9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110521/" target="_blank">Снежки с мультиплеером на HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110391/" target="_blank">Оптимизация JavaScript: Scope, Low level ES vs ES5 Array methods</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110366/" target="_blank">Релиз ImpactJS Game Engine — 99$</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110193/" target="_blank">AtomJS — миниатюрный JavaScript фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109872/" target="_blank">QooxDoo 1.3 — очередной релиз JS-фреймворка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109762/" target="_blank">Nano — миниатюрный JavaScript фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109563/" target="_blank">Новая версия V8 будет на 50% быстрее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109477/" target="_blank">JavaScript Performance Best Practices</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109407/" target="_blank">XUI: простой JavaScript фреймворк для разработки мобильных веб-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108915/" target="_blank">Разбираемся с prototype, __proto__, constructor и их цепочками в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108760/" target="_blank">Тест на скорость ServerSide</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108694/" target="_blank">Разворачиваем хабракат без перезагрузки страницы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108575/" target="_blank">Асинхронная синхронность. JSDeferred</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108542/" target="_blank">Синхронизация асинхронных вызовов. WaitSync</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108539/" target="_blank">Отладка Javascript на мобильных устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108298/" target="_blank">После всех асинхронных вызовов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108295/" target="_blank">Геттеры и сеттеры в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107992/" target="_blank">Умляуты в регулярных выражениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107291/" target="_blank">Простой Javascript Benchmarker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107232/" target="_blank">Пошаговая установка Node.js на Windows без виртуалок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106930/" target="_blank">QooxDoo: запуск source-версии с denwer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106811/" target="_blank">Используем Coffeescript на Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106274/" target="_blank">История создания Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106241/" target="_blank">Impact HTML5 Game Engine — движок на JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105850/" target="_blank">extsrc.js — загружаем все скрипты асинхронно и уже после отрисовки страницы (даже с document.write)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105696/" target="_blank">Юнит-тестирование и CodeCoverage для Javascript-кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105586/" target="_blank">JSNAV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105199/" target="_blank">Сравнение производительности Javascript-движков с родным Linux приложением</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105190/" target="_blank">Итоги конкурса JS1k</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104186/" target="_blank">Проверка существования свойств и методов объекта в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104142/" target="_blank">Получаем Object из формы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103760/" target="_blank">Правильный захват контекста в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103409/" target="_blank">Велосипедим, или Django-like Javascript Templates</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103293/" target="_blank">jQuery плагин визуального стека сообщений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103100/" target="_blank">Chrome / Chromium и клавиатура</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102943/" target="_blank">Javascript fluent html builder</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102612/" target="_blank">Мастер-классы по профессиональному Javascript, AJAX/COMET, jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101145/" target="_blank">HTML5 Audio и Game Development: баги браузеров, проблемы и их решения, идеи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100828/" target="_blank">Сам себе gzip: сжимаем скрипты на 20% лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100576/" target="_blank">Кубик Рубика на canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98929/" target="_blank">Esboza — векторный редактор online & фреймворк (Часть первая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100347/" target="_blank">Paginator3000 и колёсико мыши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99636/" target="_blank">Удобный callback</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99161/" target="_blank">Underscore.js — библиотека, которая так хороша, что должна быть вне закона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99080/" target="_blank">Простое наследование в стиле Ruby для Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99005/" target="_blank">Притча о шаблонах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98766/" target="_blank">Движок V8 для .NET-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97993/" target="_blank">Coffeescript. И снова о нём. Резюме о приятностях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97622/" target="_blank">Предварительная загрузка изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97007/" target="_blank">Амперсанды в строковых константах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96636/" target="_blank">Шаблонизатор на основе объектной модели html</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96588/" target="_blank">Немного шаблонизирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95890/" target="_blank">Smokescreen — «Flash-плеер, написанный на Javascript»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95471/" target="_blank">Мастер-классы по javascript, AJAX/COMET, jQuery в Киеве и Москве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95010/" target="_blank">Appcelerator Titanium — что это и как оно там</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94190/" target="_blank">3D №2 или Illustrate! своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94070/" target="_blank">Классы и метаклассы в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93854/" target="_blank">Распознание речи из Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92867/" target="_blank">Выполнение SQL-подобных запросов над данными — как в браузере, так и на сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92505/" target="_blank">Притча о потерянном состоянии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91241/" target="_blank">Привязка модели данных к представлению на javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90432/" target="_blank">Вызов метода Javascript без его вызова фактически</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89315/" target="_blank">CanVG: отрисовка SVG-файлов в canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88975/" target="_blank">Особенности кроссдоменного скриптинга на субдоменах с XML в Opera и некоторых других</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88930/" target="_blank">Мастер-классы по javascript в Москве и Санкт-Петербурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88500/" target="_blank">Турнирная таблица на SVG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88213/" target="_blank">Использование URI-Fragment адресации в RIA приложениях на основе ExtJS и Mootools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87098/" target="_blank">Притча о пропавшем Стэке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86852/" target="_blank">Притча о перехвате ошибок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86626/" target="_blank">Javascript для Notepad++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86403/" target="_blank">Перегрузка функций в JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86078/" target="_blank">Практический опыт создания Dojo виджетов. Оптимизация производительности Javascript кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85838/" target="_blank">dynaTrace AJAX — мощный профайлер JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85675/" target="_blank">Оптимизация JSON датасетов (массивов записей)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84793/" target="_blank">Google Code Playground — инструмент для совместного тестирования примеров на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84709/" target="_blank">Асинхронное программирование: Примитивы высокого уровня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84381/" target="_blank">Маленький тест на знание JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84311/" target="_blank">Ох уж этот javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83865/" target="_blank">nodeJS и nonblocking I/O</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83826/" target="_blank">iLoad 3 — javascript галерея изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83344/" target="_blank">Конструктор/редактор Яндекс.Карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307694/" target="_blank">Прогрессивная загрузка web-приложения с помощью разделения кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/307722/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №223 (8 — 14 августа 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307650/" target="_blank">Создание бесконечного раннера на JavaScript, механика движения фона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307574/" target="_blank">Random User-Agent — версия вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306716/" target="_blank">Frontend-разработчики должны быть в теме всего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307482/" target="_blank">Телепатия на стероидах в js/node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304806/" target="_blank">Начало перевода «legacy» Angular JS проекта на Angular 1.5 Components / ES6 и TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/307380/" target="_blank">Как важно писать код, который могут читать люди</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307332/" target="_blank">Примеры кода с летней школы по Node.js и JavaScript в КПИ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307340/" target="_blank">Управляем компьютером через браузер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83170/" target="_blank">QUnit. Тестирование javascript кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83185/" target="_blank">String.Format</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82615/" target="_blank">Javascript Templater ноль.два</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82271/" target="_blank">Bacon And Eggs. Велосипед с яйцами и линейной алгеброй!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81573/" target="_blank">Мастер-классы по javascript в Москве и Санкт-Петербурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81571/" target="_blank">Викторина для тех, кто любит Javascript больше ECMAscript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81180/" target="_blank">Визуализация данных в вебе: диаграммы Ганта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80333/" target="_blank">Побит рекорд самого короткого кода по определению IE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80165/" target="_blank">Джаваскриптовый эмулятор Сommodore 64</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80027/" target="_blank">Список Javascript библиотек для рисования графиков и диаграмм 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79960/" target="_blank">Список Javascript библиотек для рисования графиков и диаграмм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79134/" target="_blank">RTM Context Autocomplete Menu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79066/" target="_blank">Плавная смена картинок — Javascript, SVG и VML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79059/" target="_blank">Джаваскриптовая библиотека MathJax преобразует математические формулы на языке MathML или LaTeX в красивые иллюстрации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78991/" target="_blank">Область видимости переменной в Javascript (ликбез)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78762/" target="_blank">Релиз Javascript фреймворка Qooxdoo 1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78702/" target="_blank">Авторесайз IFRAME и безопасный способ передачи информации с одного домена на другой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78174/" target="_blank">Асинхронная загрузка произвольного html</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77539/" target="_blank">Виджет выбора OpenID провайдера на Prototype</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77256/" target="_blank">Мастер-классы по Javascript в Киеве, 26 декабря</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77183/" target="_blank">Небольшой отладчик в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77012/" target="_blank">Простой способ сделать «дешёвый» Private в JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76638/" target="_blank">Не кроссбраузерный event</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76485/" target="_blank">Отладка Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76377/" target="_blank">Javascript — персональное безумие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75979/" target="_blank">Scroll Clock</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75622/" target="_blank">Сравнение скорости популярных JS библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75285/" target="_blank">Browser persistence</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75158/" target="_blank">Getters & Setters в IE5+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64746/" target="_blank">Попытка классификации и анализа существующих подходов к наследованию в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74644/" target="_blank">Мастер-класс «Секреты клиентской оптимизации» &mdash; как это было</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74419/" target="_blank">Повышение качества javascript кода. JSLint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74425/" target="_blank">Отделяем мух от котлет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74363/" target="_blank">placeholder.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73531/" target="_blank">Мастер-классы по Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73122/" target="_blank">File API: читаем джаваскриптом нужные файлы с компьютера посетителя сайта (по согласию этого посетителя)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73085/" target="_blank">Сжатие файлов (tar и LZMA) на стороне клиента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72773/" target="_blank">Пустые текстовые узлы в Internet Explorer'е</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72503/" target="_blank">JXT — Javascript XHTML тэги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71858/" target="_blank">Server-side JS (v8+Node)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71144/" target="_blank">Эмулятор Радио-86РК на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70793/" target="_blank">Используем паттерн Наблюдатель(Observer) для создания индикатора выполнения процесса на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69897/" target="_blank">Вращение предметов без флэш</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69123/" target="_blank">Быстрая сортировка таблиц посредством Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69069/" target="_blank">Prototype 1.6.1: быстрее, чище, команднее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67567/" target="_blank">Интересно же IE интерпретирует исходники</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67456/" target="_blank">Эмуляция DOM.prototype в ИЕ (lte 7)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67388/" target="_blank">TeX-like разметка на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67179/" target="_blank">Сверхплавное передвижение объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66875/" target="_blank">Создание слайдеров с анимированной прокруткой, используя Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66678/" target="_blank">innerHTML в таблицах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66455/" target="_blank">ServerSideJS: теперь проще просто. Встречайте v8cgi!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66242/" target="_blank">Getters & Setters в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65989/" target="_blank">Сравнение скорости обработки JSON разными парсерами и браузерами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65687/" target="_blank">Очистка поля типа file</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65680/" target="_blank">Нужны ли «приватные» свойства объектов в Javascript?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65407/" target="_blank">Парсим URL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65219/" target="_blank">Реализация паттерна декоратор на JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64889/" target="_blank">Javascript от а и до… II</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64767/" target="_blank">Копируем в буфер обмена в FireFox 3.5 и IE8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64756/" target="_blank">Русские пароли в Safari/Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64195/" target="_blank">Электронное табло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63353/" target="_blank">Шпаргалка =&gt; Cross Domain AJAX. Dynamic script Tag Hack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63119/" target="_blank">Оптимизация с помощью замыканий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63061/" target="_blank">InfoVis Toolkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63009/" target="_blank">prettyPrint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62901/" target="_blank">Подводные камни оператора сравнения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62854/" target="_blank">Скорость работы у последних коммуникаторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62845/" target="_blank">MooTools — AJAX + document.write</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62823/" target="_blank">JsImageBox — легкий аналог LightBox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62314/" target="_blank">Безопасный JSONP? Интересная особенность Bing API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61345/" target="_blank">Справочник по javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60957/" target="_blank">Микропаттерны оптимизации в Javascript: декораторы функций debouncing и throttling</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60343/" target="_blank">Online JSON Parser</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60282/" target="_blank">ECMAscript 5: Строгий режим, JSON, и так далее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60234/" target="_blank">ECMAscript 5: Обьекты и Свойства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59761/" target="_blank">Слушаем вызовы функций в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59413/" target="_blank">Улучшаем формы или Веб-Восемь-Ноль-Сто-Три</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59402/" target="_blank">Processing.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59386/" target="_blank">Raphaël</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58935/" target="_blank">Многострочный Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58928/" target="_blank">Suggest в Google — никакого аякса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56846/" target="_blank">Исследование на тему замены стандартных кнопок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56814/" target="_blank">Определение размеров текста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56106/" target="_blank">Abyz — выбор элемента в алфавитном указателе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55922/" target="_blank">Range, TextRange и Selection</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55828/" target="_blank">В Сафари сломалось время</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55825/" target="_blank">Кросс-доменные запросы в Opera UserJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55799/" target="_blank">Javascript от А и до…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55553/" target="_blank">Сравнение производительности браузеров при обработке JSON-строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54380/" target="_blank">Реализация интерфейса ElementTraversal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54109/" target="_blank">Используем любой шрифт с Javascript.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53853/" target="_blank">Чистый шаблонизатор — PURE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53808/" target="_blank">Расширяем Sizzle (псевдоселекторы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52874/" target="_blank">Небольшой скрипт для создания главного меню(аналог десктопного mainmenu)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52346/" target="_blank">Букмарклеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52027/" target="_blank">Клиентские Windows приложения на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51988/" target="_blank">ActionWeb. Асинхронный интернет.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51354/" target="_blank">Современная отладка JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50831/" target="_blank">jQuery в Eclipse PDT, WTP/ Zend Studio for Eclipse</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/307296/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №222 (1 — 7 августа 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307288/" target="_blank">Такая разная асинхронность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307148/" target="_blank">Пишем микросервис на KoaJS 2 в стиле ES2017. Часть II: Минималистичный REST</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307094/" target="_blank">Еще один способ подгрузки CSS через RequireJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306816/" target="_blank">Пишем микросервис на KoaJS 2 в стиле ES2017. Часть I: Такая разная ассинхронность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307054/" target="_blank">Генератор конфигураций для сетевого оборудования и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307018/" target="_blank">Sprute.js. Ещё один изоморфный JavaScript фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kingservers/blog/307012/" target="_blank">Рейтинг языков программирования в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306922/" target="_blank">Создание игры Doodle Jump для Android в Intel XDK за 2 часа на JavaScript с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306894/" target="_blank">Небольшой скрипт для отслеживания цен avito из Google Spreadsheet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50544/" target="_blank">Самый короткий способ определения браузера IE (влючая IE.8)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50265/" target="_blank">OCR и нейронная сеть на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50210/" target="_blank">Архитектура YASS. Часть 3: проблема выбора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50096/" target="_blank">Отладка Javascript в различных браузерах и средах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49679/" target="_blank">Архитектура YASS. Часть 2: выборка по CSS-селектору</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49624/" target="_blank">Когда программисту нечего делать, пишем игры сами. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49245/" target="_blank">Стыкуем компоненты в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49182/" target="_blank">Когда программисту нечего делать, пишем игры сами. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49052/" target="_blank">Производительность простых и сложных конструкций в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48679/" target="_blank">Dimension picker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48542/" target="_blank">Работа с объектами в JavaScript: теория и практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48491/" target="_blank">Когда программисту нечего делать…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47884/" target="_blank">Bravequest — RPG на Prototype.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47879/" target="_blank">White IDE — Браузерная RAD среда разработки на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47782/" target="_blank">Интересные JS-фреймворки для изучения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47370/" target="_blank">Выбор флага страны по коду.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47304/" target="_blank">Тестирование JavaScript: Fireunit Screencast</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47072/" target="_blank">Результаты отчета по скриптам поисковой системы MAMA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47024/" target="_blank">Jifeon Note Widget или просто блокнот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46787/" target="_blank">Поиск в массиве (множестве) в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46766/" target="_blank">Версия 0.2.4: больше, лучше, быстрее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46339/" target="_blank">Мирный XSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46303/" target="_blank">Версия 0.1.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46117/" target="_blank">Yet Another cSS selector = YASS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45968/" target="_blank">widget своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45657/" target="_blank">GameBox — аркадная игрушка на JavaScript.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44655/" target="_blank">Поиск по файлопомойкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44540/" target="_blank">Вертикальный скрол c краткой информацией.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44273/" target="_blank">Плагинописателям.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43804/" target="_blank">Визуализируем данные на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43317/" target="_blank">Подсветка текста в «TextArea»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43111/" target="_blank">Контекстное меню на javascript: небольшое, но мощное</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43030/" target="_blank">Подсветка синтаксиса несколькими строками javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42534/" target="_blank">Удобный дебаг с BlackBird</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42173/" target="_blank">Обзор нового релиза самой мощной Ajax библиотеки — Dojo Toolkit 1.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41827/" target="_blank">Несколько простых вопросов про JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41775/" target="_blank">Color Lines</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41669/" target="_blank">JavaScript Cross Site (XSS) POST</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40909/" target="_blank">Классы в Javascript: вызов методов родительского класса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40716/" target="_blank">Скриптлеты для Web-разработчика + подарок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40707/" target="_blank">Безбраузерные приложения на Javascript (HTA)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39862/" target="_blank">sdf gsdfg sdfg sd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38264/" target="_blank">Вращающееся облако тегов на javascripte</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37723/" target="_blank">Сборка мусора после выгрузки модуля из родительского приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37087/" target="_blank">Запуск серверных процессов через JavaScript и Jaxer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37583/" target="_blank">YUICompressor — улучшаем сжатие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30666/" target="_blank">Парочка полезных функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35597/" target="_blank">А какой JavaScript Framework используете вы? Опрос среди JS-разработчиков.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29293/" target="_blank">Альтернатива cookies посредством Java Script</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31647/" target="_blank">Getting Out of Binding Situations in JavaScript.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28977/" target="_blank">Работаем с массивами в JavaScript без велосипедов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28820/" target="_blank">Шпаргалки по jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28814/" target="_blank">JS-PHP MVC интерфейс — cобираем всё вместе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28741/" target="_blank">Meteora</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28660/" target="_blank">Безопасность. Модификация кода ядра платформы подгружаемыми апплетами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28467/" target="_blank">php.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28355/" target="_blank">Букмарклет, подгружающий внешний скрипт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28325/" target="_blank">16 действительно полезных решений для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28323/" target="_blank">Шаблоны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28113/" target="_blank">Яндекс.Интернет, как верстали макет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27915/" target="_blank">Helma — и снова серверный JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27034/" target="_blank">FC-TrackBar 0.4.1 — новое начало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26888/" target="_blank">Crop & Resize на страницах ваших сайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26802/" target="_blank">Вышел Firebug 1.2b2 с заботой о производительности…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26215/" target="_blank">Планировщик задач на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26152/" target="_blank">Десять преимуществ Unobtrusive Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26130/" target="_blank">Иногда они возвращаются… снова</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25991/" target="_blank">Unobtrusive JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25776/" target="_blank">JS-TrackBar, четвертая версия бегунков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25561/" target="_blank">Selectors API — IE8b1 и Webkit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25538/" target="_blank">Трекбар для работы с датами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25511/" target="_blank">Сохранение по Ctrl+S в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25265/" target="_blank">Еще раз о трекбаре</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25173/" target="_blank">Элемент управления, TrackBar но с двумя ползунками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24126/" target="_blank">TaffyDB — СУБД для AJAX приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23253/" target="_blank">Prototype: селекторы и события</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23131/" target="_blank">JavaScript еще в силе; Сериале «Звездные врата»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31481/" target="_blank">Самый недооцененный язык в мире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31477/" target="_blank">Web 2.0, встречай JavaScript 2.0!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21512/" target="_blank">русские блоги о javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21496/" target="_blank">Реализации ECMAScript 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21177/" target="_blank">offsetHeight или нечаянный спуск лавины reflow</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21019/" target="_blank">CSS в помощь JavaScript программисту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20916/" target="_blank">Различия в поведении window.open в разных браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20802/" target="_blank">Программируем жесты мышкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19526/" target="_blank">Краткий справочник по PrototypeJS 1.6.0.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17613/" target="_blank">JavaScript. Создание объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15404/" target="_blank">JavaScript debugger для IE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14977/" target="_blank">Ext 2.0 beta 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14481/" target="_blank">Еще одна реализация DOM onReady</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13594/" target="_blank">Javascript Object Layout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13388/" target="_blank">Расширенное применение тернарного оператора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/306550/" target="_blank">JavaScript в 2016 году: функциональное программирование пришло всерьез и надолго</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306832/" target="_blank">5 наиболее перспективных JavaScript фреймворков в 2016-м году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/306822/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №221 (24 — 31 июля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306744/" target="_blank">Персональный рейтинг депутатов каждому при помощи JavaScript и браузера Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306726/" target="_blank">Youtube Player — создание собственного плеера на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306664/" target="_blank">Спидометр на HTML5 Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306644/" target="_blank">CRAWL динамических страниц для Google и Яндекс поисковиков (snapshots, _escaped_fragment_, ajax, fragment)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/306536/" target="_blank">uDev tech events: Харьков, 9 августа. Better Architecture with UX-Driven Design</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/306306/" target="_blank">Дайджест свежих материалов из мира фронтенда за последние две недели №220 (11 — 24 июля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306278/" target="_blank">Библиотека, облегчающая разработку форм на сайтах (v3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306276/" target="_blank">Простой Dependency Injection в Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306146/" target="_blank">Уведомления в браузере и пример того, как их можно использовать с пользой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartprogress/blog/306096/" target="_blank">Порталы в React.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306072/" target="_blank">API для управления плеерами на сайтах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305898/" target="_blank">Кэш, хэш и няш-меш</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/305846/" target="_blank">API Яндекс.Панорам: как сделать свою виртуальную прогулку или просто довести человека от метро</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/305818/" target="_blank">Запускаем Angular2 c Visual Studio 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305900/" target="_blank">ES6 по-человечески</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305892/" target="_blank">Модальные окна на Angular, Angular 2 и ReactJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305828/" target="_blank">Angular2-like регистрация компонентов и зависимостей для knockoutjs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/305812/" target="_blank">Честный MVC на React + Redux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305292/" target="_blank">Делаем крутые Single Page Application на basis.js — часть 3. Клиент для «ВКонтакте»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304784/" target="_blank">Типографируем названия организаций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305576/" target="_blank">Лечение всех js-файлов на сервере или определение метода шифрования в выходной день</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305548/" target="_blank">Сражаясь с БЭМ: 10 основных ошибок и как их избежать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/305470/" target="_blank">Microsoft Edge и RTC: история боли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/305394/" target="_blank">«Веб — это самая сложная платформа в истории человечества» — интервью с Вадимом Макеевым из Opera</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/305408/" target="_blank">Рендер в текстуру с использованием Three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305398/" target="_blank">Стрелочный ад, или новый круг старой проблемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/305376/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №219 (4 — 10 июля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305366/" target="_blank">Удивительная история document.write</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305300/" target="_blank">Улучшение путей взаимодействия пользователя (user flow) через переходы по странице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305096/" target="_blank">Ко дню рождения Далай-ламы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305074/" target="_blank">Redux-Redents — (еще) один модуль для работы с серверными данными из React-Redux приложений.  </a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305002/" target="_blank">CMYK алгоритм поиска замкнутого контура на двумерной матрице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/flyelephant/blog/304848/" target="_blank">Приглашаем в Одессу на WebCamp 2016! Море, отдых и любимые технологии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304708/" target="_blank">Web scraping обновляющихся данных при помощи Node.js и PaaS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/304630/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №218 (27 — 3 июля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304608/" target="_blank">Делаем крутые Single Page Application на basis.js — часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304574/" target="_blank">NW.js или Electron?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319004/" target="_blank">End-to-end шифрование файлов в Dropbox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318984/" target="_blank">Вот тебе, бабушка, и неймспейсы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318972/" target="_blank">Адаптивный jQuery без window.matchMedia</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318958/" target="_blank">json-api-normalizer: легкий способ подружить Redux и JSON API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318950/" target="_blank">NativeScript, что за зверь и для чего он нужен?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/318890/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №243 (26 декабря — 1 января 2017)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318862/" target="_blank">Построение мобильных приложений с Ember</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318682/" target="_blank">Просто Angular</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318822/" target="_blank">Нестандартное использование Twitter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317542/" target="_blank">Путь джесая, часть первая: typescript, webpack, jsx, custom elements…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304414/" target="_blank">Нейронные сети на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/304474/" target="_blank">Как разравнять Пирамиду смерти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304472/" target="_blank">Управление вибрацией с помощью библиотеки jquery.vibrate.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/304454/" target="_blank">История о том, как заставить Flurry собирать статистику десктопных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302968/" target="_blank">D3.js. Визуализация графов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/304362/" target="_blank">Собираем ваш первый WebAssembly-компонент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simbirsoft/blog/304304/" target="_blank">Борьба за кодстайл или Bracket Wars</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304340/" target="_blank">Оптимизируем React приложение для отображения списка элементов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304296/" target="_blank">Визуализация с Google Chart Tools API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/304152/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №217 (20 — 26 июня 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304078/" target="_blank">Делаем крутые Single Page Application на basis.js — часть 1, вступительно-теоретическая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304112/" target="_blank">Позвольте представить, Shadow DOM API на основе слотов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/304086/" target="_blank">HolyJS: с первой попытки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304000/" target="_blank">Vidom — blazingly fast alternative to React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303988/" target="_blank">Подборка уроков для начинающего разработчика игр на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/303580/" target="_blank">Как мы разрабатываем новый фронтенд Tinkoff.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303918/" target="_blank">Опрос: насколько строго вы следуете стандартам и лучшим практикам на фронтенде?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303896/" target="_blank">Как стать профессиональным веб-разработчиком: практическое руководство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303840/" target="_blank">Java библиотека для эффективной передачи CSS и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303834/" target="_blank">Простые графики с помощью D3.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/abbyy/blog/302960/" target="_blank">А ваш AngularJS умеет работать на 3.5Mb ОЗУ?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/303328/" target="_blank">Создаем приложение на JavaScript с помощью React Native</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303782/" target="_blank">[Go][JS] И снова про обработку форматов marc</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303748/" target="_blank">Что скрывает Array#sort: реверс-инжиниринг подручными средствами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303726/" target="_blank">Web scraping на Node.js и защита от ботов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303624/" target="_blank">Jsqry — библиотека для запросов к JS объектам и массивам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/303660/" target="_blank">Конкурс по программированию на JS: Классификатор слов (окончательные результаты)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303626/" target="_blank">Progressive Web Apps: WhoAmI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/303620/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №216 (13 — 19 июня 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303542/" target="_blank">Чем полезен мономорфизм?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/theron/blog/303436/" target="_blank">Синхронизация данных в приложениях реального времени c Theron</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ivi/blog/303516/" target="_blank">Декораторы и рефлексия в TypeScript: от новичка до эксперта (ч.3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/303456/" target="_blank">Руководство по работе с Redux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303308/" target="_blank">Az.js: JavaScript-библиотека для обработки текстов на русском языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303352/" target="_blank">Правильное использование require в node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303186/" target="_blank">jQuery UI Datepicker — добавление возможности выбора нескольких дат на одном календаре</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/303178/" target="_blank">Конкурс по программированию на JS: Классификатор слов (предварительные результаты)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/303136/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №215 (6 — 12 июня 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303034/" target="_blank">jQuery 3.0 Final Released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rtl-service/blog/302998/" target="_blank">Использование webrtc для взаимодействия с asterisk-сервером или как заставить рации говорить с браузером</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/302896/" target="_blank">Асинхронность в JavaScript: Пособие для тех, кто хочет разобраться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/302922/" target="_blank">Конкурс по программированию на JS: Классификатор слов (о ходе тестирования)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302744/" target="_blank">Ресайз картинок в браузере. Все может стать еще хуже</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302860/" target="_blank">Создание арканоида на чистом JavaScript с нуля. CANVAS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/easla/blog/302786/" target="_blank">Прикручивание диаграммы Гантта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302766/" target="_blank">Web scraping на Node.js и проблемные сайты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271425/" target="_blank">Как парсить интернет по-гусиному</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302756/" target="_blank">xfcRS — оригинальный лаконичный шустрый рендер сглаженных тайлов, «expansion fast cell — Rounded Squares»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302684/" target="_blank">Подход игродела к созданию современных веб приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/302630/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №214 (30 мая — 5 июня 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302604/" target="_blank">Front-end шаблонизатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/302518/" target="_blank">ООП в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283090/" target="_blank">Быстрое клонирование объектов в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302506/" target="_blank">Шестое чувство Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/302374/" target="_blank">Ещё больше комфорта в разработке фронтенда с TARS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/302284/" target="_blank">RxJS: реактивное расширение для фронтенд разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/302302/" target="_blank">Angular Attack: мой опыт участия в хакатоне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302288/" target="_blank">Запросы к Rest API из JavaScript компактно и красиво</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302280/" target="_blank">События в Angular Light</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302256/" target="_blank">Конкурс по классификации слов от Hola или «где взять ещё один процент?»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302178/" target="_blank">Фиеричная система счисления, или почему 1 + 10 = 100</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302156/" target="_blank">Почему мы рады тому, что не попали на themeforest</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/302188/" target="_blank">DevConf::JavaScript — поддержи свой любимый JS фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/301042/" target="_blank">Angular 2 несёт мир в галактику фронтенда</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/megalenta/blog/302066/" target="_blank">Отпуск по-программистски, или как я не поучаствовал в конкурсе по программированию на JS. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/302118/" target="_blank">Иммутабельность в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/302110/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №213 (23 — 29 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/megalenta/blog/302020/" target="_blank">Отпуск по-программистски, или как я не поучаствовал в конкурсе по программированию на JS. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283082/" target="_blank">My 1st WEB App</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301916/" target="_blank">NeDB: аналог SQLite для NodeJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301646/" target="_blank">Язык описания шаблонов Snakeskin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/301562/" target="_blank">Как решить семейные разногласия с помощью 4 контроллеров и 2 умных часов за 1 месяц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/301588/" target="_blank">JavaScript-only: гомогенная архитектура веб-проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301426/" target="_blank">Web scraping при помощи Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301482/" target="_blank">Релиз jQuery 3.0 Release Candidate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/301310/" target="_blank">Планировщик путешествий своими руками за пару часов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301442/" target="_blank">Запуск NodeJS-приложения на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/301408/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №212 (16 — 22 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/301314/" target="_blank">Конкурс по программированию на JS: Классификатор слов (дополнение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301288/" target="_blank">Опыт перехода сайта на Single Page Application с упором на SEO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301258/" target="_blank">Strelki.js — еще одна библиотека для работы с массивами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301146/" target="_blank">Для чего вообще нужна изоморфность?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/301040/" target="_blank">Что браузеры делают с вашим JavaScript-кодом: об оптимизациях в JS-движках на примере V8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301122/" target="_blank">Анализ типов с помощью Proxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301020/" target="_blank">Фундамент масштабируемости javascript приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/301002/" target="_blank">Основы синтаксиса TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/300846/" target="_blank">String.raw: некоторые возможности и ограничения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/283552/" target="_blank">Уменьшаем размер публикуемых npm модулей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/300842/" target="_blank">Дайджест свежих материалов из мира фронтенда, дизайна и IT за последнюю неделю №211 (9 — 15 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283556/" target="_blank">Angular 2 Beta, обучающий курс «Тур героев» часть 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/283518/" target="_blank">Данные на фронтенде: шаг к приложениям будущего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283494/" target="_blank">Разработка простого приложения «шагомер» на ReactNative</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/283468/" target="_blank">DevConf-2016: программа мастер-классов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283354/" target="_blank">Leaflet как оболочка для «Яндекс.Карт» — отображаем 100 тысяч маркеров на карте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282874/" target="_blank">ReactJS 15.0.2 Tutorial</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/283340/" target="_blank">DevConf-2016: программа конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283318/" target="_blank">Что такое «Нативное приложение»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/283314/" target="_blank">Стилизация React-компонентов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/283304/" target="_blank">Точка с запятой в JavaScript: на свой вкус</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318600/" target="_blank">8 JavaScript библиотек для визуализации данных в виде интерактивных карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318558/" target="_blank">Интерактивная таблица результатов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hh/blog/318450/" target="_blank">Самые востребованные языки программирования 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318474/" target="_blank">Фреймворк для работы с Telegraph API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/318282/" target="_blank">Правда о традиционных JavaScript-бенчмарках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318472/" target="_blank">Front-end JavaScript framework Evolution :: release 1.5.7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/318000/" target="_blank">Использование Service Worker для создания ботнета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/318222/" target="_blank">Разбор: как и зачем применять PureComponent в React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/318404/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №242 (18 — 25 декабря 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/318322/" target="_blank">19 неожиданных находок в документации Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283218/" target="_blank">Yandex Translate для Visual Studio Code</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/283172/" target="_blank">Дайджест свежих материалов из мира фронтенда, дизайна и IT за последнюю неделю №210 (2 — 8 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283152/" target="_blank">Meteor + MVVM = ❤</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283148/" target="_blank">Почему нельзя использовать Backbone.js в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283108/" target="_blank">Играем с ключевыми словами в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283086/" target="_blank">Полноценный lazyload на node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283072/" target="_blank">JavaScript по-русски — pycckuu.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283054/" target="_blank">Использование стандарта ES2015 в рамках библиотеки Backbone.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283050/" target="_blank">Создание RESTful сервисов на Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/283042/" target="_blank">На пути к полной типизации с TypeScript, Swashbuckle и AutoRest</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/282968/" target="_blank">Производительность web: Why Performance Matters</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280636/" target="_blank">Как вы можете использовать отзывчивые веб-компоненты сегодня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mindbox/blog/276235/" target="_blank">Как мы перестали бояться тикетов на UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247235/" target="_blank">Интерполяция: рисуем плавные графики с помощью кривых Безье</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/282836/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №209 (25 апреля — 1 мая 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282578/" target="_blank">Mobx — управление состоянием вашего приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282688/" target="_blank">Вышел в свет Node.JS v6.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282634/" target="_blank">Angular 2 Beta, обучающий курс «Тур героев» часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/282612/" target="_blank">P2P в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/282624/" target="_blank">Конкурс по программированию на JS: Классификатор слов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282584/" target="_blank">Используем Webpack вместо Sprockets в Ruby on Rails</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282511/" target="_blank">Все, что хотел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282425/" target="_blank">Frontend Dev Conf 2016: герои, события и сюрпризы конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282477/" target="_blank">Async/Await в javascript. Взгляд со стороны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282397/" target="_blank">Angular.js — разработка webApi модуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282369/" target="_blank">Текстовый туториал по react-router, а так же react-router + redux. На русском</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/282325/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №208 (18 — 24 апреля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282293/" target="_blank">Используем CommonJS модули в Rails с Browserify</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281605/" target="_blank">RESTful Visual Editor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282275/" target="_blank">Один из способов поиска неэкранированных символов с помощью новых средств JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282267/" target="_blank">Краткая история Всемирной паутины по версии веб-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282257/" target="_blank">Итератор генератора в промисе или интеграция КриптоПро browser plugin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/282207/" target="_blank">Этажи: 3D-навигация на WebGL в 2gis.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/282149/" target="_blank">Правильная обработка ошибок в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/282089/" target="_blank">Основы разработки 3D-игр в Intel XDK на BabylonJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/282159/" target="_blank">Профилирование JS-кода из функций. Опыт Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/282131/" target="_blank">Введение в программирование шейдеров: часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/282113/" target="_blank">Эмодзи?! Нет, не слышал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/282117/" target="_blank">Бесплатные практические курсы по основам программирования на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/282015/" target="_blank">Коллбэки в JavaScript на примере миньонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282041/" target="_blank">JS Загрузчик + шаблонизатор или история очередного велика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/282023/" target="_blank">Доступны записи Microsoft Edge Web Summit 2016 — Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281981/" target="_blank">Разработка HTML5-игр в Intel XDK. Часть 7. Оформление игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281967/" target="_blank">Разработка JavaScript API: 5 принципов написания встраиваемых скриптов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281931/" target="_blank">Electron, SASS, TypeScript, Pug(Jade), Polymer и немного полетного велосипедирования для создания приложения для Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/281871/" target="_blank">Новая конференция для всех, кому интересен JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281873/" target="_blank">Разработка HTML5-игр в Intel XDK. Часть 6. Угощение для змеи и обработка столкновений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/281789/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №207 (11 — 17 апреля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281755/" target="_blank">Unicode character properties в регулярных выражениях V8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281727/" target="_blank">Angular 2 Beta, обучающий курс «Тур героев» часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281721/" target="_blank">AngularJS: Миграция с 1.2 на 1.4, ч.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/281667/" target="_blank">Первая версия Visual Studio Code 1.0 — путь от простого редактора до мощного инструмента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281639/" target="_blank">Разработка HTML5-игр в Intel XDK. Часть 5. Увеличиваем длину змеи и управляем ей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280041/" target="_blank">Сравнение языков программирования относительно работы на фриланс-бирже upwork.com + опрос</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/281617/" target="_blank">Фильтруй правильно, или вредные советы по фильтрации в Angular.Js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281635/" target="_blank">JSCS, CST и новое начало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281607/" target="_blank">Разработка HTML5-игр в Intel XDK. Часть 4. Система координат и перемещение объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/281599/" target="_blank">Введение в программирование шейдеров: часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281523/" target="_blank">Разработка HTML5-игр в Intel XDK. Часть 3. Знакомство со змейкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/281505/" target="_blank">Как мы внедряли DevOps: инфраструктура-как-код с помощью Microsoft Azure и Azure Resource Manager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281453/" target="_blank">Разработка HTML5-игр в Intel XDK. Часть 2. Cocos2d-JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281449/" target="_blank">Angular 2 и внедрение зависимостей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281420/" target="_blank">Ю.Гагарин и Web Audio API от Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/281308/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №206 (4 — 10 апреля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281298/" target="_blank">Пишем свой Lisp на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281278/" target="_blank">Снова об Electron или рисуем музыку ВК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281270/" target="_blank">Lookbehind assertions в регулярных выражениях V8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281146/" target="_blank">Действительно полезное приложение для Digium телефонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281190/" target="_blank">Angular 2 Beta, обучающий курс «Тур героев» часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281110/" target="_blank">ES5 руководство по JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/281024/" target="_blank">Как мы внедряли DevOps: непрерывная интеграция с GitHub и системой сборки Visual Studio Team Services</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280998/" target="_blank">Библиотека для работы с cookies (tasty-cookies)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280960/" target="_blank">«Банда четырёх» была неправа, а вы не знаете, что такое делегирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280922/" target="_blank">Konami code или читайте между строк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280928/" target="_blank">Удобная вставка многострочных шаблонных литералов в код на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280830/" target="_blank">RING буфер — 2D cлучай</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/280788/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №205 (28 марта — 3 апреля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280738/" target="_blank">Как сделать многослойную Parallax иллюстрацию на CSS & JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/280602/" target="_blank">Как мы разогнали мобильную Lenta.ru до скорости света</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280334/" target="_blank">Как один программист Jocly подковал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280546/" target="_blank">NPM запретил отзывать без разрешения open-source модули старше 24 часов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/teamlab/blog/279397/" target="_blank">Анатомия редакторов документов: общий код для онлайн и оффлайн-версий редакторов ONLYOFFICE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mr_gefest/blog/280370/" target="_blank">Советы, библиотеки и дополнительные материалы по CSS-анимации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/innopolis_university/blog/280372/" target="_blank">Интерактивное видео и с чем его едят</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280206/" target="_blank">Как ESLint реагирует на ситуацию с удалением пакетов из NPM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/280272/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №204 (21 — 27 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280212/" target="_blank">Не пропусти js-ошибку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280057/" target="_blank">Создаем package для Atom</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280137/" target="_blank">Стандарт ECMA-262 (JavaScript) в картинках, часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280099/" target="_blank">NPM и left-pad: мы разучились программировать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280039/" target="_blank">Один разработчик чуть не «сломал» пакетный менеджер NPM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279923/" target="_blank">Автоматическое дополнение JS-кода из базы Stack Overflow</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279867/" target="_blank">Несколько полезных кейсов при работе с массивами в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279817/" target="_blank">Javascript: проблемы с click event при использовании requestAnimationFrame</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/279771/" target="_blank">MoscowJS #29 (31 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/279177/" target="_blank">«ES7» — неправильное название для планов по развитию JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279733/" target="_blank">Стандарт ECMA-262 (JavaScript) в картинках, часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/279709/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №203 (14 — 20 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279671/" target="_blank">Angular — это паттерн проектирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279613/" target="_blank">Автоматизация проверки на целостность рейд-массива на сервере Dell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318268/" target="_blank">Оптимизируем redux хранилище для более производительных изменений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/scorocode/blog/317450/" target="_blank">Предновогодний релиз API и портала Scorocode</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/317972/" target="_blank">HolyJS Moscow: Время экспансии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318096/" target="_blank">Ember — Лучшие практики: избегайте утечки состояния внутрь фабрики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314050/" target="_blank">Как я писал приложение на Elm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317894/" target="_blank">Alameda, Bower и NPM интеграция в CleverStyle Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/317858/" target="_blank">Используем oEmbed, чтобы добавить телефон в хабрапост</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/317886/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №241 (12 — 18 декабря 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317810/" target="_blank">Отправка электронной почты в формате HTML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317708/" target="_blank">Landing Page как замена всего сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279595/" target="_blank">L10n строк в приложениях (JavaScript)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279533/" target="_blank">Шесть подработок для ИТ-специалиста, за которые платят в долларах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278997/" target="_blank">Релиз Webix 3.2. Новые виджеты для работы с данными и прочие фичи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279101/" target="_blank">О бедной XWiki замолвите слово — 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279513/" target="_blank">Быстрый старт нового приложения на React с использованием nwb</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279507/" target="_blank">Занимательный разбор одного выражения с квадратными скобками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279439/" target="_blank">Простой и не очень очевидный способ повесить chrome, firefox и nodejs внутри нативной функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279429/" target="_blank">Три основных браузера добавили поддержку низкоуровневого бинарного формата WebAssembly</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279421/" target="_blank">Стандарт ECMA-262 (JavaScript) в картинках, часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279383/" target="_blank">Работа с ВК API при создании игры для ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279291/" target="_blank">Web-приложения в режиме offline. ServiceWorker и CacheStorage</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279249/" target="_blank">Текстовый туториал по React.js и Redux на русском</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/279237/" target="_blank">Стек MEAN. Пример использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/277847/" target="_blank">Декораторы в typescript: оружие против сложности или бесполезная «свистелка»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/279163/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №202 (6 — 13 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279103/" target="_blank">Лёгкий деплой Meteor-приложения на собственный сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279063/" target="_blank">Автоматическое обновление расширений Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279045/" target="_blank">Пишу TreeView на Angular 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/278991/" target="_blank">Отчёт с MoscowJS 25 февраля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278961/" target="_blank">Reinforced.Typings — Angular-сервисы на TypeScript прямо из ваших MVC-контроллеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278951/" target="_blank">Собираем грабли Electron.js или десктопные JS-приложения на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278871/" target="_blank">Агрегат для node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/278823/" target="_blank">Захвати и визуализируй! Или гистограмма с микрофона средствами Web Audio API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/278789/" target="_blank">Почему я НЕ являюсь фанатом TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278747/" target="_blank">Sublime Text: валидация синтаксиса, автодополнение (v.1.1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278731/" target="_blank">Выбираем библиотеку для работы с WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/278711/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №201 (1 — 6 марта 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278621/" target="_blank">Подборка материалов для начинающего разработчика игр на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278619/" target="_blank">EDA подход в Angular</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/278593/" target="_blank">Знакомимся с веб-стандартами. Работа с аудио. — Видео и история создания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278111/" target="_blank">Мой «Умный дом» на ПЛК и с веб-интерфейсом. Часть 2. Веб-интерфейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278523/" target="_blank">Порог вхождения в Angular 2 — теория и практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/278503/" target="_blank">Тестирование JS. Кармический Webpack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/278401/" target="_blank">JavaScript-парсер для искателей сокровищ фотографических глубин</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/278377/" target="_blank">Управление приватными данными классов ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278333/" target="_blank">Оптимизация HTML5 игр для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278043/" target="_blank">История бесконечного города. На Three.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/277869/" target="_blank">Лучшие инструменты для JavaScript-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278181/" target="_blank">Пилим веб-демку — Wavescroll</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/278127/" target="_blank">Юбилейный дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №200 (22 — 28 февраля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278033/" target="_blank">TOM.js — особая библиотека, для особых случаев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/278017/" target="_blank">Node.js. Паттерны проектирования и разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/277957/" target="_blank">Web. История одной технологии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/277833/" target="_blank">Приглашаем на MoscowJS 25 февраля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277823/" target="_blank">Тонкости Javascript/Node.js. Увеличиваем производительность в десятки раз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277513/" target="_blank">Рип сетевых словарей при помощи Node.js, ч. 2: динамические страницы; подключение NW.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/277707/" target="_blank">10 привычек довольного node.js разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276747/" target="_blank">Идеальный UI фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/277697/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №199 (15 — 21 февраля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277645/" target="_blank">Amelisa. Оффлайн и реалтайм движок для React и Mongo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277615/" target="_blank">Тестирование плагинов для Apache Cordova</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277603/" target="_blank">Правила хорошего тона при написании плагина на jQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277547/" target="_blank">Как выбрать фреймворк для frontend-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277533/" target="_blank">Создание пользовательского интерфейса для Blend4Web (ч.1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277489/" target="_blank">Дополнение свойств в Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/277485/" target="_blank">6 впечатляющих веб-технологий 2015 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277311/" target="_blank">Почему мобильные веб-приложения такие медленные?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277451/" target="_blank">Динамическое связывание данных в HTML и JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277361/" target="_blank">Сервис «Kimono» закрывается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/277255/" target="_blank">Чем плох JavaScript в большом проекте? С какими проблемами мы столкнулись и как их решали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277323/" target="_blank">Я веб-разработчик и уже 10 дней не могу написать простейшее приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ivi/blog/277321/" target="_blank">Декораторы и рефлексия в TypeScript: от новичка до эксперта (ч.2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252575/" target="_blank">Многопользовательский онлайн-шутер на WebGL и asyncio, часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277221/" target="_blank">Номинальные ряды для JavaScript и ГОСТ-28884-90</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/277169/" target="_blank">Исполнит ли React Native мечту программиста: единый код для web, android и ios?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/277193/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №198 (7 — 14 февраля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/277171/" target="_blank">Роутер для Matreshka.js 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277167/" target="_blank">Удаленная отладка JavaScript с VS2015. Часть 3 (F12 Chooser)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277113/" target="_blank">Почему я больше не использую MVC-фреймворки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/277129/" target="_blank">Понимание сборки мусора и отлов утечек памяти в Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272449/" target="_blank">Разработка Mithril. Практика, опыт и подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277087/" target="_blank">Angular 1.5: Компоненты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epam_systems/blog/277041/" target="_blank">Апгрейд мультиканального сайта. Как облегчить себе жизнь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277033/" target="_blank">Генераторы в ES6 и асинхронный код по-новому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277021/" target="_blank">Разбираем декораторы ES2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nanofl/blog/276519/" target="_blank">SVG-файлы изнутри и вывод векторных изображений на canvas «вручную» (ч.1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276913/" target="_blank">Fallback-действия в ES6 Promise</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276897/" target="_blank">Удаленная отладка JavaScript с VS2015. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276825/" target="_blank">Используем VS Code для Веб-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276771/" target="_blank">Пишем чат на Vert.x 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276673/" target="_blank">Месье, ваши problem solving skills не на высоте, или как я провалил одно собеседование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/276753/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №197 (1 — 7 февраля 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276585/" target="_blank">Про использование React с элементом canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/276659/" target="_blank">Прямая трансляция конференции Make Web, Not War из Монреаля — 5 февраля, пятница, в 17:00 (Москва)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276649/" target="_blank">Сравнение Angular 2 и Aurelia side by side</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276617/" target="_blank">Chakra официально принят Node.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/276035/" target="_blank">БЭМ-методология: с чего всё начиналось и зачем это всё нужно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275729/" target="_blank">Руководство по HTML/CSS/JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276445/" target="_blank">RainyJs — как Angular, только для Ajax</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276417/" target="_blank">Конец эры глобального CSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/276307/" target="_blank">Записи с конференции Web Standards Days — Москва 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276389/" target="_blank">Фреймворк для создания ботов для Telegram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114047/" target="_blank">Aka rspeс, т.е. ленивые переменные в тестах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/276221/" target="_blank">Typescript 1.8: очень много нового и полезного</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/276285/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №196 (25 — 31 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273393/" target="_blank">Простейшие клеточные автоматы и их практическое применение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276159/" target="_blank">Real-Time игры и кроссдоменное соединение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276147/" target="_blank">Полгода работы с Blend4Web. А стоит ли оно этого?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276141/" target="_blank">Дурим DPI двумя скриптами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276039/" target="_blank">Крупнейший хакатон в истории разработки ПО с призовым фондом в 140000$</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/317694/" target="_blank">Как я побывала на HolyJS Moscow и нужно ли туда ходить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317586/" target="_blank">Pабота с localstorage: подписка на события, хранение функций, массивов и объектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/317484/" target="_blank">Как научить веб-приложение говорить на 100 языках: особенности локализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/317074/" target="_blank">Особенности реализации виртуальной машины в Dart. JS и Dart глазами компиляторщика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317488/" target="_blank">Запускаем Gulp с вотчерами на обычном хостинге через админпанель</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317402/" target="_blank">Marionette.js исполнилось 5 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/317412/" target="_blank">Митап RDSFront& #1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317360/" target="_blank">$mol_atom: теория и практика реактивности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/317362/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №240 (5 — 11 декабря 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317330/" target="_blank">React.js на русском языке. Часть восьмая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275965/" target="_blank">Instagram Like Bot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275849/" target="_blank">Пишем правильный манифест для сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/275797/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №195 (18 — 24 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275779/" target="_blank">Microsoft отправила запрос на аппрув реализации поддержки ChakraCore в Node.js наряду с движком V8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pvs-studio/blog/275701/" target="_blank">ChakraCore: проверка JavaScript-движка для Microsoft Edge</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275615/" target="_blank">Десктопные приложения на JavaScript. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275531/" target="_blank">Перевод «Simplified JavaScript Jargon»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/275503/" target="_blank">Почему сложно программировать UI и как выглядит идеальный фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275479/" target="_blank">Расширенный поиск Яндекса (и Гугла) с помощью установленного скрипта или в интерфейсе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275473/" target="_blank">Удаленная отладка JavaScript с VS2015. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/275463/" target="_blank">Использование Chakra и JavaScript в Azure DocumentDB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275435/" target="_blank">Обучающий курс по Redux от создателя библиотеки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275353/" target="_blank">Аналоговые часы на HTML5 c логикой на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275343/" target="_blank">3 место за 11 шагов в конкурсе по JavaScript от Hola</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275333/" target="_blank">JavaScript-приложение, или зачем нам Razor в ASP.NET MVC?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275307/" target="_blank">ЗаПулить по простому. Менеджер пула на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/275279/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №194 (11 — 17 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274475/" target="_blank">Рип сетевых словарей при помощи Node.js, ч. 1: статические страницы; CLI; DSL -&gt; TXT, PDF, DjVu; сопутствующие задачи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/275245/" target="_blank">Лучшая подарочная книга для начитанных фанатов JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275227/" target="_blank">How to ReactJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/275111/" target="_blank">Окончательные итоги конкурса по программированию на JS: Почтовые фильтры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275109/" target="_blank">Сортируемый вложенный список с выделяемыми элементами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/275067/" target="_blank">Исходный код JavaScript-движка ChakraCore выложен на GitHub</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275023/" target="_blank">Реализации setImmediate: сообщения, мутация или обещания, что быстрее?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275011/" target="_blank">Загрузчик модулей для node js с поддержкой локальных модулей и загрузки модулей по требованию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ivi/blog/275003/" target="_blank">Декораторы и рефлексия в TypeScript: от новичка до эксперта (ч.1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/274961/" target="_blank">О пересмотре результатов конкурса по программированию на JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274935/" target="_blank">Разбор решения занявшего второе (пока что) место в конкурсе Hola по программированию почтовых фильтров на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/274739/" target="_blank">Перевод: Трагедия common lisp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274797/" target="_blank">Векторизация, небольшой баг и семистильный костыль</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/274785/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №193 (3 — 10 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274743/" target="_blank">Разбираемся с синтаксисом шаблонов в Angular2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/274697/" target="_blank">Итоги конкурса по программированию на JS: Почтовые фильтры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274683/" target="_blank">jQuery плагин для Постройки мозаики из блоков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274655/" target="_blank">Собираем простое MariontteJS+ES6 приложение с помощью Brunch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274637/" target="_blank">Ember.js — прощай MVC (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274591/" target="_blank">Опыт Angular + Typescript + Offline SPA проекта через год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274523/" target="_blank">Angular 2 против React: И будет кровь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/274515/" target="_blank">Meet-up «Продуктивная работа фронтенд-разработчика в условиях поддержки legacy-кода»: говорим о полезных инструментах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/274513/" target="_blank">Meet-up «Продуктивная работа фронтенд-разработчика в условиях поддержки legacy-кода»: переход на Dart</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274419/" target="_blank">Jii 0.8: Миграции, ReactViews, изоморфное приложение и прочие плюшки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274535/" target="_blank">Анимация падающего снега на Canvas эффективнее анимации на DOM в несколько раз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/273839/" target="_blank">Убийцы оптимизации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/274481/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №192 (28 декабря 2015 — 3 января 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274471/" target="_blank">Таблицы умножения… kind of</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274415/" target="_blank">Обзор возможностей современного JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274401/" target="_blank">Конечный автомат и его реализация на Javascript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274385/" target="_blank">Webpack ProvidePlugin: как не писать простыню import/require в начале javascript модуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/274317/" target="_blank">Sinon.js — mock-библиотека для JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/274253/" target="_blank">Проблемы при использовании Math.random()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274261/" target="_blank">Новогодний подарок от HTML Academy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/274185/" target="_blank">Диагностика и устранение утечек памяти в приложениях с TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/274141/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №191 (20 — 27 декабря 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274139/" target="_blank">Функциональные выражения в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/274013/" target="_blank">Как на самом деле будет выглядеть рынок JavaScript в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273545/" target="_blank">Быстрый старт за 5 минут с Angular 2 beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273923/" target="_blank">Добавляем анимацию сортировки в jQuery UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273795/" target="_blank">Создание веб-сайта. Курс молодого бойца</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/273735/" target="_blank">WebGL для всех</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273779/" target="_blank">CLI для MarionetteJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273751/" target="_blank">bala.js — убийца jQuery в менее чем 400 символах кода *</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273669/" target="_blank">Попытка измерить талант провалилась…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/273613/" target="_blank">Цена использования фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272055/" target="_blank">Мысли вслух о TypeScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273581/" target="_blank">Handlebars. Руководство к действию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/comet-server/blog/273573/" target="_blank">Использование comet сервера для реализации простого чата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/273557/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №190 (13 — 20 декабря 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mr_gefest/blog/273553/" target="_blank">Сравнение css-фреймворков/библиотек на живом примере. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/273493/" target="_blank">Готовим ASP.NET 5, выпуск №7: подробнее про работу с Gulp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273445/" target="_blank">Angular2 теперь «бета»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/taggy/blog/273415/" target="_blank">Художественный подход к загрузке изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/273267/" target="_blank">Шорткаты в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273307/" target="_blank">Digital Data Layer — сердце вашей tag-management системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273405/" target="_blank">Node.JS Избавься от require() навсегда</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273395/" target="_blank">Побег Джедая: Да прибудет с тобой гироскоп</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273367/" target="_blank">Концепция «Родные Элементы»(Native Elements)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273359/" target="_blank">Хватит использовать jQuery, вы способны сделать лучше без него</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273327/" target="_blank">«Война и мир» – испытание временем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273311/" target="_blank">NW+Edge.js+Fiddler или сказ о стыкуемости нестыкуемого</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273275/" target="_blank">С-подобные структуры в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/273171/" target="_blank">Итоги 2015: веб-разработка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/272911/" target="_blank">Создаём проект c OAuth и NoSQL за $0,00</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272983/" target="_blank">Пишем код для Node.js в стиле «машина состояний»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/273021/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №189 (6 — 13 декабря 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273003/" target="_blank">Игры, которые учат программированию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272871/" target="_blank">Haskell для ВКонтакте, JavaScript и ReactJS, Или «Чужой против Симпсонов»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/comet-server/blog/272507/" target="_blank">Шифрование на JavaScript с использованием библиотеки pidCrypt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/comet-server/blog/272817/" target="_blank">Создаём простой Realtime чат</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/272809/" target="_blank">Исходный код JavaScript-движка Microsoft Edge будет открыт в январе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/luxoft/blog/272725/" target="_blank">DEV Labs 2015. Финальная онлайн конференция года. Java и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272675/" target="_blank">Проектирование в PostgreSQL документо-ориентированного API: Комплексные запросы (Часть 4)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/qiwi/blog/272625/" target="_blank">Как написать JS-библиотеку на ScalaJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271891/" target="_blank">asm.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/272579/" target="_blank">Бесплатный курс «Android. Быстрый старт»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272545/" target="_blank">Проектирование в PostgreSQL документо-ориентированного API: Находя искомое (Часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/272491/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №188 (1 — 6 декабря 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272411/" target="_blank">Проектирование в PostgreSQL документо-ориентированного API: Полнотекстовый поиск и сохранение многих документов(Часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272395/" target="_blank">Проектирование в PostgreSQL документо-ориентированного API (Часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272389/" target="_blank">Десктопные приложения на JavaScript. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272239/" target="_blank">Баг с GPU и Canvas в Google Chrome под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zerotech/blog/317256/" target="_blank">Путеводитель по JavaScript Promise для новичков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317114/" target="_blank">Можно ли обойтись без jsx и зачем?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/317248/" target="_blank">Неизменяемый JavaScript: как это делается с ES6 и выше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/317238/" target="_blank">Минимальное окружение для JS-разработки: ava, standard, chokidar-cli и precommit-hook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316766/" target="_blank">Как Ionic 2 помогает мне вникнуть в angular 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317112/" target="_blank">Переведена документация Vue.JS 2.x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/317060/" target="_blank">Remote (dev)tools своими руками – интервью с Романом Дворновым (Авито)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317024/" target="_blank">Отрисовка карт с условными координатами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epam_systems/blog/317050/" target="_blank">Нейронные сети на JS. Создавая сеть с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316978/" target="_blank">Дорогой JavaScript,</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272233/" target="_blank">2D тени на WebGL за 4 простых шага</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272189/" target="_blank">особенность протокол javascript или генерация случайного пароля в закладке браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/272087/" target="_blank">Измерение производительности функций в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272173/" target="_blank">Air Datepicker, легкий и красивый выбор даты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272129/" target="_blank">Codecha — программистская капча, или как не надо проектировать API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272125/" target="_blank">Angular Light для jQuery/JS разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272109/" target="_blank">JSON и Swift. Способы запросов и работа с обменом данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272049/" target="_blank">Все, что вы хотели знать о моделях и коллекциях в Titanium</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272075/" target="_blank">Создание десктопного приложения с помощью Electron и веб-технологий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/272037/" target="_blank">Релиз typescript 1.7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/272033/" target="_blank">Приглашаем на Web Standards Day в Москве, 13 декабря</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/allcountjs/blog/272031/" target="_blank">AllcountJS: Делаем систему для места продажи (POS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271363/" target="_blank">JS-DOS API: запускаем DOS в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272011/" target="_blank">Шесть вещей, которые вы должны знать о движении WordPress в сторону JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272001/" target="_blank">Appcelerator Titanium SDK обновился до версии 5.1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/271929/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №187 (23 — 29 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271881/" target="_blank">Как создать круглую Progress Button</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271819/" target="_blank">Управление состоянием и эффективный рендеринг в приложениях на React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271783/" target="_blank">Как заставить сайт работать в виде Web App (никому не интересный пример частного решения, к тому же плохо описанный)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/271689/" target="_blank">Разработка собственного решения: риски и ответственность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271739/" target="_blank">PostCSS быстрый старт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271379/" target="_blank">Тестирование вёрстки на визуальные регрессии с помощью PhantomCSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271625/" target="_blank">Blend4Web. Система событий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wargaming/blog/271357/" target="_blank">Пользовательские плагины в JavaScript играх</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271545/" target="_blank">Прогулка с динозаврами: как я адаптировал веб-приложение под IE 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271451/" target="_blank">Гравитационное поле на поверхности тел неправильной формы на примере кометы Чурюмова-Герасименко</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/271423/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №186 (15 — 22 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/271395/" target="_blank">Итоги GeekWeek. Как трудоустроиться, на чем разрабатывать и какие системы использовать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271281/" target="_blank">Сборщик проектов на Angular и RequireJS и некоторые мысли по сборке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/271237/" target="_blank">Особенности создания web-проекта «под ключ» от Startup Makers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271215/" target="_blank">Защищенные социальные сети — миф или реальность?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/allcountjs/blog/271111/" target="_blank">AllcountJS и ionic: Мобильное приложение для CRM за 30 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270459/" target="_blank">Google Cloud Endpoints на Java: Руководство. ч. 2 (Frontend)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271153/" target="_blank">Путеводитель по Bootstrap + Ember.js. Часть 1: Модальные окна в Эмбере или как подружить Bootstrap Modal и Ember.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/artec3d/blog/271069/" target="_blank">MoscowJS 27</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271065/" target="_blank">Игра для математика. Устный счёт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256387/" target="_blank">Ionic Framework — работа с камерой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/271041/" target="_blank">Приглашаем на встречу по web-разработке 2 декабря</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271031/" target="_blank">CSRF-уязвимость VK Open Api, позволяющая злоумышленнику без ведома пользователя получать Access Token’ы сторонних сайтов, на которых реализована авторизация через VK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/270593/" target="_blank">WebPack: как внутри устроено Hot Reloading</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271007/" target="_blank">Moff.js и модулированный Bootstrap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/270917/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №185 (8 — 15 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270879/" target="_blank">Агрегация и осведомленность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hola/blog/270847/" target="_blank">Конкурс по программированию на JS: Почтовые фильтры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/270837/" target="_blank">Внедрение зависимостей в Angular 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/270697/" target="_blank">Обзор ES6 в 350 пунктах. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270705/" target="_blank">50 лучших инструментов для разработки CSS и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270339/" target="_blank">Observer vs Pub-Sub</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270665/" target="_blank">Создание подсказок для сайта с помощью EnjoyHint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270645/" target="_blank">Jiant. Модели для фронтенд приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/lingualeo/blog/270243/" target="_blank">Реакция на долголетие: как мы обновили фронтенд Lingualeo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262343/" target="_blank">Распознаем коды Морзе с использованием Rx.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270485/" target="_blank">Unit-тестирование вашего Ionic-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/270437/" target="_blank">(Архив) Matreshka.js — Три возможности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rutube/blog/270381/" target="_blank">Разработка приложения для tvOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/270441/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №184 (2 — 8 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/270353/" target="_blank">Обзор ES6 в 350 пунктах. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270241/" target="_blank">Index-based programming или зачем нам все эти if, switch, тернарный оператор?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269791/" target="_blank">Janusjs: концепт системы, где клиент и сервер — сиамские близнецы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269673/" target="_blank">Gulp: как я проект для production собирал, livereload запускал и перехват ошибок делал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270281/" target="_blank">Captain Awesome вещает: BrowserSync Angular Template</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270245/" target="_blank">Smooth scroll на AngularJS с использованием requestAnimationFrame + советы по стилю</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270255/" target="_blank">100 строк на canvas-е: часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265079/" target="_blank">Реализация сортировки в V8 от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270193/" target="_blank">Not a Flux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270141/" target="_blank">Онлайн-компиляция на статическом сайте, рецепт для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270183/" target="_blank">Скриптование под .NET на JScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/270109/" target="_blank">Понятно и просто про веб-компоненты и Polymer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/allcountjs/blog/270119/" target="_blank">AllcountJS: Делаем простую CRM с веб-интерфейсом и REST API за 15 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270103/" target="_blank">CSS-модули</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270093/" target="_blank">Использование RxJs для связывания компонентов приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/270011/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №183 (26 октября — 1 ноября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269971/" target="_blank">Стабильный релиз Node v5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269931/" target="_blank">О том, как рисовать кривые графики в стиле XKCD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264813/" target="_blank">Тонкости ES6: Наследование (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269895/" target="_blank">Как я делал веб-версию KeePass</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/269871/" target="_blank">Упрощение асинхронного кода на JavaScript с внедрением асинхронных функций из ES2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269831/" target="_blank">С 0 до 1. Разбираемся с Redux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269779/" target="_blank">Создание игры на Blend4Web. Зачатки интеллекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/269743/" target="_blank">Продолжаем бороться с frontend-рутиной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269669/" target="_blank">Блеск и нищета HTML5 — доступ к датчикам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/269619/" target="_blank">Введение в работу с ORTC в Microsoft Edge</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269565/" target="_blank">&lt;input&gt; Я ♥ тебя, но ты меня обламываешь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269581/" target="_blank">npm@3: будущее уже здесь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/269465/" target="_blank">У нас проблемы с промисами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/269503/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №182 (19 — 25 октября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267003/" target="_blank">Reinforced.Typings — больше деталей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/269447/" target="_blank">Секция о клиентском программировании на HighLoad++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269419/" target="_blank">Почему Mobile First?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269369/" target="_blank">Гироскоп и акселерометр в веб-дизайне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262187/" target="_blank">Создание нового типа поля для MS SharePoint на примере простого проверяемого поля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269325/" target="_blank">И еще немного об автоподстройке высоты textarea</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269303/" target="_blank">Изучение React — для чего, откуда, как?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/269217/" target="_blank">Архитектура веб-приложений. Стек Spring MVC + AngularJs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269207/" target="_blank">Angular2 близко</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269163/" target="_blank">Сервис для системного администратора. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/269143/" target="_blank">Как создать свой собственный браузер для Windows 10 на HTML и JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268915/" target="_blank">Аккордеон про архитектуру и локализацию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269069/" target="_blank">Релиз TypeScript 1.6: не только React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/269033/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №181 (12 — 18 октября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316970/" target="_blank">Above-the-Fold CSS — как ускорить загрузку сайта не замедлив разработку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316896/" target="_blank">React.js на русском языке. Часть седьмая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/316136/" target="_blank">Про оптимизацию рендеринга — с оптимизмом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316880/" target="_blank">Electron: от мотивации до публикации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/316840/" target="_blank">Как аккуратно залезть в кишки WebRTC при передаче голоса и видео</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316562/" target="_blank">Смотрим часть чужого избранного ВКонтакте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316824/" target="_blank">Рецепт разработки бота под Telegram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devexpress/blog/316358/" target="_blank">React, Web Components, Angular и jQuery — друзья навеки. Универсальные JavaScript-компоненты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316818/" target="_blank">Electrode — open source платформа от WalmartLabs для ReactJS/NodeJS приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/316812/" target="_blank">Дайджест свежих материалов из мира фронтенда за последнюю неделю №239 (28 ноября — 4 декабря 2016)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269003/" target="_blank">Скрипт управлениями доставками интернет-магазина</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268975/" target="_blank">Рецепт вращения планет в космосе на HTML5 + JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268973/" target="_blank">Создание космической браузерной игры. Первый опыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268969/" target="_blank">Тутор по BabylonJS — использование спрайтов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268937/" target="_blank">Подготовка персонажа для Blend4Web</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268801/" target="_blank">Осциллоскоп на WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268795/" target="_blank">Введение в стрелочные функции (arrow functions) в JavaScript ES6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/268733/" target="_blank">Готовим ASP.NET5, выпуск №5 — Gulp и Bower спешат на помощь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268753/" target="_blank">CoffeeScript array comprehensions — модно, стильно, медленно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/posthawk/blog/268673/" target="_blank">Делаем электронного консультанта из чата Post Hawk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/268335/" target="_blank">(Архив) Matreshka.js ECMAScript.next boilerplate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/268625/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №180 (5 — 11 октября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266773/" target="_blank">Нюансы MVVM в Ext JS при разработке компонентов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267873/" target="_blank">Попытка реализации универсального парсера интернет магазинов с помощью SlimerJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268265/" target="_blank">AngularJS: Миграция с 1.2 на 1.4, ч.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/268249/" target="_blank">Flux в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268031/" target="_blank">Apiway — новый способ клиент-серверной транспортировки данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268199/" target="_blank">Карта Московского Метро. SVG-версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/268193/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №179 (28 сентября — 4 октября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268109/" target="_blank">jQuery-плагин для организации компонентов на странице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267995/" target="_blank">Webix 3.0 — новый, лиловый</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ivi/blog/256517/" target="_blank">Разделяем интерфейсы для юнит-тестирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267955/" target="_blank">JavaScript и Nginx = nginScript, а HTTP2 в придачу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/267875/" target="_blank">19 принципов разработки по БЭМ, или что должен знать каждый разработчик библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267895/" target="_blank">Создание синтезатора на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/267513/" target="_blank">Matreshka.js 2: события</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/matreshka/blog/267483/" target="_blank">(Архив) Matreshka.js 1.1: еще больше крутостей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/267803/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №178 (21 — 27 сентября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267775/" target="_blank">«Книжная полка фронтендера» — как гугл, только лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266317/" target="_blank">Перенаправление данных из COM-порта в web. Доработка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267715/" target="_blank">Почему именно Vue?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267639/" target="_blank">Тонкости модульной системы ECMAScript 2015 (ES6)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267557/" target="_blank">Прикручиваем мультимедиа-клавиши в Яндекс.Радио</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267549/" target="_blank">Аккордеон на AngularJS и Bootstrap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267501/" target="_blank">Локализация расширений Google Chrome — необходимо и просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267471/" target="_blank">gulpfile в 10 строк? Легко! — упрощаем создание типовых задач</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267387/" target="_blank">Скорость локального форматирования чисел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267349/" target="_blank">JSON Web Token и sliding expiration в web-приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267283/" target="_blank">Считаем рабочие дни с Moment.js</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/267279/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №177 (14 — 20 сентября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266721/" target="_blank">Z-Desk — геометрические построения в пространстве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267179/" target="_blank">Игра для РЖД: complete story</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/267165/" target="_blank">ES6 в деталях: прокси</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261669/" target="_blank">Игра знакомая с детства в реализации на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267111/" target="_blank">BabylonJS. Урок 2 — базовые меши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267061/" target="_blank">Карточная игра: реализуем атаку и найдем применение ShadowDOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266959/" target="_blank">Урок по BabylonJS — создание базовой сцены</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266899/" target="_blank">Reinforced.Typings — библиотека для автоматической генерации TypeScript-тайпингов и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/266713/" target="_blank">Унификация дизайна со стороны бэкенда: JavaScript на сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266805/" target="_blank">King's Bounty III: расширенный римейк оригинальной игры под DOS на Javascript/HTML5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/266777/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №176 (7 — 13 сентября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266683/" target="_blank">Обзор релиз-кандидата React v0.14</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266665/" target="_blank">Использование React JSX вместе с TypeScript 1.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266553/" target="_blank">Определяем, что у пользователя заблокирована Википедия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266559/" target="_blank">Умные и глупые компоненты React</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266499/" target="_blank">Вышла в свет новая версия Node.js v4.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266479/" target="_blank">Счастливые билетики до 300 цифр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266401/" target="_blank">Очередь событий в карточной игре + основы Angular</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hexlet/blog/266443/" target="_blank">Как работают замыкания (под капотом) в JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266407/" target="_blank">Мир недокументированного React.js. Context</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266315/" target="_blank">Пиринговая сеть base.network</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266355/" target="_blank">Firebase-queue: стероиды для firebase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266337/" target="_blank">Прокачка TinyMCE 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/266311/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №175 (31 августа — 6 сентября 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266301/" target="_blank">Tabris.js — быстро знакомимся и пишем Hello World</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266171/" target="_blank">Wkhtmltopdf + Node.JS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266145/" target="_blank">Интерактивная музыка в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266081/" target="_blank">По стопам Meteor, или велосипедируем реактивность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265937/" target="_blank">Прекратите использовать React для всего подряд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265847/" target="_blank">Использование ES6 в AngularJs 1.x со сборкой Browserify+Babel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265823/" target="_blank">Открытый клон Chameleon Launcher</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265811/" target="_blank">О бедной XWiki замолвите слово</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265801/" target="_blank">Webpack для Single Page App</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/265729/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №174 (23 — 30 августа 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265663/" target="_blank">Мультиселект и автокомплит на AngularJS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265673/" target="_blank">Визуализация кристаллических 3d-структур в браузере без плагинов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265627/" target="_blank">Клиентская точка отказа: SPOF за счет внешних JS-библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265575/" target="_blank">NW.js (Node-Webkit) + Рутокен = RutokenJS (Начало)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265517/" target="_blank">Делаем месенджер для параноиков на Webix и DataBoom</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265497/" target="_blank">Telegram-like анимированный placeholder для HTML-инпутов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265477/" target="_blank">Модуль вкладок на es6/es2015 без jQuery и прочих зависимостей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265469/" target="_blank">Публикация iFrame / HTML5 игры во ВКонтакте. Основы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265419/" target="_blank">За что Microsoft Edge ненавидит закладки?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/databoom/blog/265381/" target="_blank">Webix + databoom = быстрое прототипирование приложений.  Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265295/" target="_blank">Поддержка PostgreSQL в Meteor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/265293/" target="_blank">Конференция Frontend Union Conf в эту субботу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/265289/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №173 (16 — 23 августа 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264851/" target="_blank">Как исправить ошибку в Node.js и нечаянно поднять производительность в 2 раза</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265247/" target="_blank">Разработка HTML5 игры под Android с нуля и до релиза</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/265165/" target="_blank">Пишем плагин под webpack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/265223/" target="_blank">Использование новых возможностей JavaScript в мире ES3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/265037/" target="_blank">7 советов, как улучшить работу вашего сайта в Microsoft Edge и других современных браузерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262327/" target="_blank">Dojo 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265013/" target="_blank">Эмуляция CORS на стороне клиента: кроссбраузерное решение некоторых пользовательских задач без расширений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264993/" target="_blank">Задачи, микрозадачи, очереди и планы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264869/" target="_blank">Level Up для новичков: gulp и requirejs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264861/" target="_blank">Как в проекте заменить jQuery на D3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/zfort/blog/264859/" target="_blank">Дайджест интересных материалов из мира веб-разработки и IT за последнюю неделю №172 (9 — 16 августа 2015)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/264791/" target="_blank">Внедрение компонентого подхода в вебе: обзор веб-компонентов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264789/" target="_blank">Релиз Cordova 5.2.0</a></li>
</ol>
</body>
</html>
