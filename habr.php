<?php header('Content-Type: text/html; charset=utf-8', true); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>ХАБР: Информационная безопасность</title>
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
<body><ol class="rounded">
<li class="habr"><a href="https://habrahabr.ru/post/319698/" target="_blank">Windows имеет внутренний список неудаляемых корневых сертификатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319582/" target="_blank">Инфраструктура онлайн игры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319560/" target="_blank">Множественные уязвимости в последних версиях CMS 1С-Битрикс. Видео атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318860/" target="_blank">VulnHub: Реверсим всё что можно в DC416 Baffle</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318944/" target="_blank">В поиске бесплатных билетов, исследование игры Аэрофлота: Миссия 2017</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/319502/" target="_blank">Security Week 01-02: уязвимость в box.com, фишинг паролей в PDF, атаки на MongoDB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infopulse/blog/319492/" target="_blank">Простая и ужасающая история о шифровании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319380/" target="_blank">Exploit Exercises или ещё один сайт для любителей VulnHub</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319470/" target="_blank">Google запускает Key Transparency, инструмент для подтверждения криптоключей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/319416/" target="_blank">Обновление для межсетевых экранов Juniper открывает несанкционированный root-доступ к устройствам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/319398/" target="_blank">«Мое облако — моя крепость»: Тренды облачной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/319382/" target="_blank">Как PVS-Studio ищет ошибки: методики и технологии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/319366/" target="_blank">Информационная безопасность на мобильных устройствах – взгляд потребителей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/319234/" target="_blank">Браузеры и app specific security mitigation. Часть 3. Google Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319360/" target="_blank">Уязвимость Viber, позволяющая прослушивать чужой разговор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319322/" target="_blank">Как не надо делать защиту от эксплойтов на примере Norton Security</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319316/" target="_blank">Как использовать SELF XSS в формах входа/восстановления пароля/регистрации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319304/" target="_blank">Iframe injection и self xss на более чем 20 000 сайтах alexarank UA/RU</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319204/" target="_blank">VulnHub: Разбираем самый короткий квест DC416 Fortress</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/echelon/blog/319218/" target="_blank">Обнаружение в коде дефекта «разыменование нулевого указателя»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316296/" target="_blank">Как я взломал свою ip-камеру и нашел там бекдор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316252/" target="_blank">О квантовой криптографии. Протоколы E91 & Lo05</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316150/" target="_blank">7 самых неприятных проблем в программировании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315454/" target="_blank">Создание и тестирование Firewall в Linux, Часть 1.3. Написание char device. Добавление виртуальной файловой системы…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316184/" target="_blank">Информационная безопасность АСУ ТП: Дон Кихот в эру кибероружия</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/316166/" target="_blank">CTFzone write-ups – Going 300, going 500, OSINT sold</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/316174/" target="_blank">Security Week 47: закладки в Android, безопасность Wi-Fi, уязвимость NTP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/314686/" target="_blank">За гранью хакерских возможностей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/315954/" target="_blank">CTFzone write-ups – First comes Forensics</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315850/" target="_blank">Antidote — TOX клиент для iOS наконец-то стал доступен</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271215/" target="_blank">Защищенные социальные сети — миф или реальность?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271211/" target="_blank">Хакеры изобрели новую схему воровства денег, украв 250 млн. рублей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/271193/" target="_blank">«Красная карточка»: что скрывается за предупреждением о вредоносном ПО?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/271191/" target="_blank">Как проанализировать файл на вредоносность?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/271165/" target="_blank">Как вести секретную переписку в мире, где за вами постоянно следят: методы Эдварда Сноудена. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hosting-cafe/blog/271139/" target="_blank">Хостинг Кафе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/271071/" target="_blank">Мастер-класс Дмитрия Склярова. DRM: вчера, сегодня и завтра</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/271119/" target="_blank">Microsoft повысила безопасность веб-браузера Edge</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271113/" target="_blank">Двухфакторная аутентификация клиентов AnyConnect. Active Directory и Azure Multi-Factor Authentication Server</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itpark/blog/271061/" target="_blank">Защита персональных данных по N 242-ФЗ: как понять и что делать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271031/" target="_blank">CSRF-уязвимость VK Open Api, позволяющая злоумышленнику без ведома пользователя получать Access Token’ы сторонних сайтов, на которых реализована авторизация через VK</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271023/" target="_blank">Перенос данных в Россию. Краткий FAQ по заблуждениям</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/270831/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 16. «Operation Firewall»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/270931/" target="_blank">Забвение старых идей и попытки изобретения «старого колеса»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/truevds/blog/270919/" target="_blank">Let's encrypt: старт публичной беты с 3 декабря</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/audiocodes/blog/270739/" target="_blank">Защита VoIP сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270819/" target="_blank">Слежение за пустотой, или атаки на несуществующие ресурсы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/270815/" target="_blank">Security Week 46: Разносторонний Java-баг, жизнь криптолокеров, 17 заплаток Adobe Flash</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/270803/" target="_blank">Лаборатория тестирования на проникновение «Test lab v.8»: welcome to hell</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270799/" target="_blank">Незащищенный Redis, или кто виноват?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/270785/" target="_blank">666-й пост: страхи и суеверия айтишников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269737/" target="_blank">Безопасное криптопрограммирование. Часть 2, заключительная</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/270701/" target="_blank">Курс этичного хакинга для начинающих: «Zero Security: A»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/270729/" target="_blank">Хватит болтать, пора ломать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/267163/" target="_blank">Хакер, криптограф или экстрасенс. Обыкновенное волшебство</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270681/" target="_blank">WoSign Free SSL — конец большой китайской халявы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270679/" target="_blank">Критическая уязвимость в ряде Java Application Server</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270657/" target="_blank">Прозрачный обход блокировок в домашней сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/270633/" target="_blank">Случайный взлом: зачем ломают низкопосещаемые сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270623/" target="_blank">Windows Store и будущее малвари</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270631/" target="_blank">Freeradius. Поддержка различных типов аутентификации пользователей одновременно</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/270599/" target="_blank">Червь, который изменил Интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270571/" target="_blank">LinOTP+RADIUS. Аутентификация с помощью одноразовых паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/270525/" target="_blank">Криптовымогатели придумывают новые способы шантажа пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/270487/" target="_blank">Манипулирование ценами акций с помощью поддельных новостей: Как не попасться на удочку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270475/" target="_blank">Проект Доктрины информационной безопасности Российской Федерации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/270393/" target="_blank">ZeroNights HackQuest 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/267705/" target="_blank">Фиалка М-125</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/270307/" target="_blank">Программа-криптовымогатель шифрует пользовательские файлы в «оффлайне»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/270295/" target="_blank">Security Week 45: побег из песочницы, обход EMET через WOW64, взлом 000webhost</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270249/" target="_blank">Вышел новый Intercepter-NG [Android Edition] 1.6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270165/" target="_blank">Изолируем демоны с systemd или «вам не нужен Docker для этого!»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/270181/" target="_blank">Android и iOS приложения пересылают данные пользователей третьей стороне намного чаще, чем принято считать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270163/" target="_blank">Как мы впервые в Украине провели мероприятие по безопасности с размахом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/270077/" target="_blank">Отчет с Security Meetup 22 октября</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/269951/" target="_blank">Как обнаружить и устранить скрытую переадресацию для мобильных устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270065/" target="_blank">Эксплоит на миллион. У нас есть победитель</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/269829/" target="_blank">10 относительно честных способов взломать почту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/270015/" target="_blank">Включение BitLocker на серверах Exchange</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269999/" target="_blank">Бунт против виртуальной машины</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269895/" target="_blank">Как я делал веб-версию KeePass</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/269815/" target="_blank">Security Week 44: законодатели и безопасность, криптография и разведка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269729/" target="_blank">Обзор Certificate Transparency</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/269777/" target="_blank">Как мы искали баг в поисковом Балансере Яндекса, а нашли в Chromium</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/269783/" target="_blank">DDoS аналитика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/269431/" target="_blank">Pivoting Everywhere — техники продвижения внутрь локальной сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269663/" target="_blank">Уязвимости в сервисе компании Plategka.com, включающие XSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/269641/" target="_blank">Как беспилотник может взломать вашу домашнюю сеть, просто летая рядом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/269633/" target="_blank">О методах борьбы со спамом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/269625/" target="_blank">VII Hi-Tech тур «Облачный Октоберфест». Как это было?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/269603/" target="_blank">Превратить группу камер наблюдения в ботнет? Нет ничего проще</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tottoli_gsm/blog/269407/" target="_blank">Это не паранойя: источники угроз в системе GSM и защита от них</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/269507/" target="_blank">Яндекс и ZeroNights: месяц поиска уязвимостей в Яндекс.Браузере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269531/" target="_blank">Почему писать скрипты для борьбы с «браузером Амиго» — зло?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/269525/" target="_blank">HackerSIM: разбор полетов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/269523/" target="_blank">В Joomla исправили баг, который ставил под угрозу безопасность миллионов сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/269521/" target="_blank">Немецкие спецслужбы обнаружили новые следы вируса Regin</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/269513/" target="_blank">Обзор средств защиты электронной почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/269393/" target="_blank">Security Week 43: непростые простые числа, криптография в HDD, патчи Adobe и Oracle</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/luxoft/blog/269305/" target="_blank">Правила безопасного программирования на С: прошлое, настоящее и будущее</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269269/" target="_blank">Let's Encrypt теперь доверенный</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/269235/" target="_blank">Panda Adaptive Defense 360: адаптация IT-защиты к новым потребностям предприятий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/269213/" target="_blank">Let's Encrypt объявил о кросс-сертификации от IdenTrust</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/269177/" target="_blank">1Password меняет формат файлов по умолчанию для повышения уровня безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/269165/" target="_blank">Чем защищают сайты, или Зачем нужен WAF?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/269161/" target="_blank">Антивирусная компания AVG теперь может продавать данные своих клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/269155/" target="_blank">Google обязала производителей смартфонов шифровать данные на устройствах с Android 6 по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/269099/" target="_blank">Русские хакеры взломали Dow Jones и завладели инсайдерской информацией</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/268999/" target="_blank">Как Cisco Security Ninja научили 20 тысяч сотрудников безопасному программированию?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268423/" target="_blank">О безопасности UEFI, часть заключительная</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/268907/" target="_blank">Security Week 42: коллизии в SHA-1, практический взлом роутеров, Android/Безопасность/Грусть</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/268843/" target="_blank">Практическая подготовка в пентест-лабораториях. Часть 5</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/268829/" target="_blank">Microsoft исправила уязвимости в ядре Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/268819/" target="_blank">Adobe обновила свои продукты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268815/" target="_blank">Не все виджеты одинаково «полезны»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/268811/" target="_blank">Как защитить Вашу компанию от атак нулевого дня</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268789/" target="_blank">HackedSim. Звонок с любого номера — вымысел или реальность?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/268787/" target="_blank">Возможности программных и аппаратных файрволов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/268779/" target="_blank">Уязвимости веб-приложений: ситуация не улучшается</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/268749/" target="_blank">Преимущества управляемого сервиса безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/268667/" target="_blank">Осторожно, Ваши смарт-часы могут раскрыть то, что Вы делаете на Вашем компьютере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268659/" target="_blank">Борются ли банки со скиммингом в банкоматах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268633/" target="_blank">У Калифорнии теперь лучший в стране закон о защите цифровых данных (перевод статьи WIRED)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268623/" target="_blank">Уведомления о конфиденциальности в электронной почте: не очень хорошая идея</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268581/" target="_blank">Потенциально до 1 миллиона «живых» аккаунтов VK.com оказалось скомпрометировано злоумышленниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268555/" target="_blank">Утечка реальных ФИО пользователей через Кинопоиск.ру</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/268545/" target="_blank">Мы делили интернет: много нас, а его нет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/268537/" target="_blank">Достаточно лазерной указки, чтобы запутать так называемый «смарт-автомобиль»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268515/" target="_blank">Установка неподписанных программ на устройства с iOS 9 без Jailbreak</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315972/" target="_blank">Защита виртуальных машин, размещенных в дата центре</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315898/" target="_blank">[ZeroNights2016] [CTFzone] Без 100 грамм не разберёшься</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315876/" target="_blank">[ZeroNights2016] [CTFzone] Разбор полётов за 50</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315862/" target="_blank">Двойная аутентификация Вконтакте — секс или имитация?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/315854/" target="_blank">Международный конкурс для молодых исследователей и профессионалов в области ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/315840/" target="_blank">PDUG Meetup. SSDL для руководителей: как перевести команду на безопасную разработку и не выстрелить себе в ногу</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/parallels/blog/315730/" target="_blank">Зловреды-вымогатели для IoT опаснее «традиционных» зловредов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/306520/" target="_blank">Уничтожить SSD за 7 секунд: тактическая защита информации от несанкционированного доступа</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/315744/" target="_blank">Lenovo исправила уязвимости в прошивках своих компьютеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315678/" target="_blank">Поддержка https совсем без настроек</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/268493/" target="_blank">Security Week 41: цензура исследований, взлом Outlook Web Access, потери данных на стыках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268495/" target="_blank">Коллизия для SHA-1 за 100$ тыс</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/268453/" target="_blank">Основные сертификаты информационной безопасности для ИТ-специалистов и предприятий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268443/" target="_blank">Конференция SGTech Europe 2015: взгляд из России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268421/" target="_blank">USB killer v2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268357/" target="_blank">Эм, но наша вина тут в чем? Мы выдаем эти сим-карты или что? (с) Вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266709/" target="_blank">HackerSIM: подделка любого телефонного номера. CTF по социальной инженерии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/267167/" target="_blank">Новая атака на почтовый сервер Microsoft Exchange позволяет украсть пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/268337/" target="_blank">Приглашаем на OWASP EEE 11 октября</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268305/" target="_blank">Уязвимость в Platius: доступ в любой аккаунт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/268291/" target="_blank">Google выпустила security-обновление для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/268243/" target="_blank">Kaspersky Industrial CTF: время защищать подстанции, и время ломать подстанции</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268225/" target="_blank">Цена отписки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bitrix/blog/267947/" target="_blank">DDoS-атаки и электронная коммерция: современные подходы к защите</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268173/" target="_blank">Избавляемся от DNS Leak в Windows 10 — свой userspace WFP-фильтр в виде OpenVPN-плагина</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/268207/" target="_blank">В чем разница между Snort и Cisco FirePOWER?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268177/" target="_blank">Обнаружен ботнет, который исправляет уязвимости в зараженных им маршрутизаторах и сообщает об этом администратору</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268135/" target="_blank">О безопасности UEFI, часть шестая</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268137/" target="_blank">Удачи в цифровую эпоху! Или включите параноика и проверьте защиту своих данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268127/" target="_blank">Как работает радиоинтерфейс в GSM-сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268125/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 15. «UBuyWeRush»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/268113/" target="_blank">Безопасное криптопрограммирование. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/268087/" target="_blank">В криптософте TrueCrypt обнаружены критические уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/268067/" target="_blank">Security Week 40: неуязвимость в WinRAR, баг-ветеран в Firefox, упс-апдейт Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/268049/" target="_blank">Обзор программных межсетевых экранов при защите ИСПДн</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/268007/" target="_blank">Ботнет из Linux-устройств организует DDoS-атаки с потоком трафика 150 Гбит/с и выше</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/267949/" target="_blank">Практическая подготовка в пентест-лабораториях. Часть 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/267983/" target="_blank">Критическая уязвимость WinRAR</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/267981/" target="_blank">Безопасность в «облаках»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267959/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 14. «The Raid»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267953/" target="_blank">О безопасности UEFI, часть пятая</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/267931/" target="_blank">Киберпреступники похитили отпечатки пальцев 5,6 млн американских госслужащих</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/267915/" target="_blank">ZeroNights 2015: Hack now — Save the future</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/267907/" target="_blank">SAP Afaria. Маленькая SMS для взлома большой компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/267871/" target="_blank">Зонд для слежки за дронами: Разоблачаем сенсацию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/265495/" target="_blank">Корпоративный иммунитет: создаём систему централизованного управления сетевой безопасностью в компании и её филиалах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jugru/blog/217543/" target="_blank">Артем Гавриченков, Qrator — DDoS-атаки [Видеолекция]</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/267745/" target="_blank">Facebook вводит шифрование для Internet.org</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/267683/" target="_blank">Security Week 39: XcodeGhost, утечка сертификата D-Link, миллион за баг в iOS9</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dellemc/blog/267627/" target="_blank">Dell Solutions Forum 2015: регистрация открыта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267645/" target="_blank">Еще одно встроенное шпионское приложение обнаружено на компьютерах Lenovo</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/267611/" target="_blank">Firefox 42 с новым «приватным» режимом доступен в Бета-тесте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267583/" target="_blank">Symantec самовольно выпустил сертификат для google.com и www.google.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267563/" target="_blank">Технический способ защиты от неправомерной выдачи дубликатов сим-карт (и вообще персональных данных), реализуемый на уровне оператора</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/267467/" target="_blank">3 Атаки на TACACS+ от Cisco</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/267547/" target="_blank">Компания D-Link по ошибке опубликовала секретные ключи для подписи прошивок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267541/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 7. «Max Vision»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/267017/" target="_blank">Современные методы взлома корпоративных сетей и систем на конференции «Secure IT World 2015»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267507/" target="_blank">Еще один способ отключения сбора телеметрии в OC Windows 10</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267491/" target="_blank">О безопасности UEFI, часть четвертая</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267475/" target="_blank">Как обойти экран блокировки в iOS, не зная пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/267465/" target="_blank">Эксплоит на миллион</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267431/" target="_blank">Крипто-поГОСТ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267447/" target="_blank">Оператор мобильной связи не в силах предотвратить выдачу дубликатов сим-карт злоумышленникам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/267423/" target="_blank">Практическая подготовка в пентест-лабораториях. Часть 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/267443/" target="_blank">XcodeGhost — malware apocalypto для iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267349/" target="_blank">JSON Web Token и sliding expiration в web-приложении</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/266907/" target="_blank">HP TippingPoint ATA Network и HP TippingPoint ATA Mail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267253/" target="_blank">В Китайском AppStore были обнаружены 39 заражённых приложений из-за модифицированной версии Xcode</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267237/" target="_blank">О безопасности UEFI, часть третья</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267229/" target="_blank">DoS эксплойт Chrome и некоторых других браузеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267197/" target="_blank">О безопасности UEFI, часть вторая</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/267141/" target="_blank">Бэкдор SYNful Knock для атаки на маршрутизаторы: в чем проблема и как защититься</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/267117/" target="_blank">Security Week 38: Атака на роутеры Cisco, баг в AirDrop, арест криптобарыг</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/267121/" target="_blank">Перебор ссылок — получение данных о клиентах Portmone и Фидобанка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/267069/" target="_blank">Новый способ MITM-атаки на протокол TLS делает злоумышленника незаметным</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/267057/" target="_blank">Бэкдор SYNful knock позволяет подменять операционную систему маршрутизаторов Cisco</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/267021/" target="_blank">«Zero Security: A» — курсы этичного хакинга для начинающих</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/267013/" target="_blank">Безопасный WiFi в Яндекс.Браузере. О защите для тех, кто ещё не успел HTTPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266991/" target="_blank">Ограничение доступа к веб-приложениям в Synology DSM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266977/" target="_blank">Как разблокировать Android, не зная пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/266533/" target="_blank">Разнообразные тесты безопасности сети: обзор решений компании IXIA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/266945/" target="_blank">Практическая подготовка в пентест-лабораториях. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266935/" target="_blank">О безопасности UEFI, части нулевая и первая</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jugru/blog/224217/" target="_blank">Анонс — Артем Гавриченков из Qrator расскажет в Москве про DDoS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266849/" target="_blank">Книга про вирусы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/266717/" target="_blank">Исследование: Почти все популярные межсетевые экраны пропускают XSS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266789/" target="_blank">Для чего нужен антивирус</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266077/" target="_blank">Анализ одной из модификаций шифровальщика VaultCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266707/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 10. «Cris Aragon»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/266675/" target="_blank">Security Week 37: Bug-bugzilla, Карбанак из бэк, С&C на рыбалке</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/266485/" target="_blank">Оценка уязвимостей CVSS 3.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/266349/" target="_blank">Практическая подготовка в пентест-лабораториях. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/266581/" target="_blank">Опубликован код эксплойта для критических Android-уязвимостей Stagefright</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266577/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 2. «Deadly Weapons»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266345/" target="_blank">Практическое руководство по взлому (и защите) игр на Unity</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/266501/" target="_blank">Уязвимости прошивки беспроводных дисков Seagate позволяют удаленно загружать и скачивать файлы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/fgts/blog/266463/" target="_blank">Организация веб-доступа на базе Sophos UTM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/266455/" target="_blank">За кулисами у КиберСофта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/266027/" target="_blank">#NoHacked: устранение последствий взлома с загрузкой URL, содержащих бессмысленный текст</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/266415/" target="_blank">Защита корпоративных приложений: как стать разработчиком PT Application Firewall</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266377/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 13. «Villa Siena»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266359/" target="_blank">В ГОСТе сидел «Кузнечик»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266323/" target="_blank">Безопасность на доверии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266173/" target="_blank">ReCaptcha в PhpMyAdmin — активация, обход и фикс</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/266135/" target="_blank">Карстен Ноль: корпорации против людей, угрозы USB и недостатки биометрии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/266119/" target="_blank">Security Week 36: джейлбрейк-ограбление, прощание с RC4, пористость роутеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/266061/" target="_blank">Опасный мир вредоносных расширений и защита от них. Опыт Яндекс.Браузера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266039/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 12. «Free Amex!»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/315610/" target="_blank">Security Week 46: обход OAuth 2.0, низковольтный ICMP DDoS, приватность iOS и обход локскрина</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315608/" target="_blank">Обход CSP при помощи расширений Google Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/315578/" target="_blank">Безопасность в IoT: Стратегия всесторонней защиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/315540/" target="_blank">Уязвимость в продуктах VMware позволяет осуществлять выполнение кода на хост-системе виртуальной машины</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/softline/blog/315474/" target="_blank">Сноуден в Россию, Хэммонд за решетку</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/315222/" target="_blank">Apple Pay как двигатель мобильных платежей в Японии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/314842/" target="_blank">Лаборатория тестирования на проникновение «Test lab v.10» — за гранью хакерских возможностей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/315404/" target="_blank">Приглашаем на встречу с практикующими защитниками АСУ-ТП</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/315388/" target="_blank">Досье на Хакера: Альберт Гонсалес. 20 лет тюрьмы и 170 000 000 украденных кредитных карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/315362/" target="_blank">Атака BlackNurse: Как отключить межсетевой экран с помощью ноутбука и ICMP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265989/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 11. «Script’s Twenty-Dollar Dumps»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265943/" target="_blank">Уязвимость (?) и слежка в эмуляторе Bluestacks?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265335/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 9. «Возможности»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/265859/" target="_blank">Новый курс «Анализ безопасности веб-проектов» на Stepic</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/265697/" target="_blank">Безопасность Wi-Fi сетей: обнаружение атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265851/" target="_blank">Клетка со всеми удобствами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265779/" target="_blank">«Благодарим за использование наших продуктов и служб». Что мы разрешаем сервисам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265757/" target="_blank">Как я сдавал OSCP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265711/" target="_blank">R01 + Timeweb, ваши сайты под угрозой</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/265623/" target="_blank">Немецкие спецслужбы делились данными граждан с АНБ в обмен на шпионский софт XKeyscore</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/265587/" target="_blank">Security Week 35: ничего личного, просто бизнес</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265607/" target="_blank">Минимализм в криптографии, или схема Even–Mansour</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/265547/" target="_blank">220 000 учетных записей iCloud скомпрометированы с помощью бэкдора для прошедших джейлбрейк iOS-устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/265457/" target="_blank">Защита переговоров. Антижучки и индикаторы поля</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/254877/" target="_blank">GPS: глушилки, спуфинг и уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265515/" target="_blank">Необычный развод под видом Роскомнадзора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265513/" target="_blank">Творческая попытка взлома сайта: пишут от имени Роскомнадзора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265447/" target="_blank">В Telegram появились спамеры?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/safedata/blog/265311/" target="_blank">Надёжно как в сейфе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/265187/" target="_blank">Карьера в информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265367/" target="_blank">Википедию уже не блокируют</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265365/" target="_blank">Тинькофф банк скомпрометировал выписки по счетам клиентов?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/264235/" target="_blank">Мобильные телефоны для/против спецслужб</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264579/" target="_blank">SQL Insert Injection в одном интернет магазине</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265309/" target="_blank">Криптография на Python: шифрование информации и создание электронных цифровых подписей с помощью пакета PyCrypto</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/265021/" target="_blank">SCADA и мобильники: оценка безопасности приложений, превращающих смартфон в пульт управления заводом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265235/" target="_blank">Анализ защиты Sony PlayStation 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265283/" target="_blank">Microsoft добавил средство сбора телеметрии в Windows 7/8/8.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/265257/" target="_blank">М-м-м-м… Маршмэллоу: что нового в Android 6 и Android SDK</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265255/" target="_blank">Полиция заставила китайского разработчика удалить код с GitHub</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/265233/" target="_blank">Исследование: Уязвимости криптотранспондера позволяют заводить без ключа более 100 моделей машин</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265227/" target="_blank">Обход авторизации через социальные сети при подключении к публичным Wi-Fi</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/265219/" target="_blank">Security Week 34: Полковника никто не патчит</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/265161/" target="_blank">Обнаружена еще одна серьезная уязвимость в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265149/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 8. «Добро пожаловать в Америку»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265075/" target="_blank">Черный список IP своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/264827/" target="_blank">Профессиональная подготовка в области практической ИБ: «Корпоративные лаборатории». Новый набор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/265051/" target="_blank">Атака на архиваторы. Скрываемся в одном архиве от трех программ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/264647/" target="_blank">Светофоры тоже можно взломать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/264805/" target="_blank">Test lab v.8 — пентест-лаборатория, построенная на базе реальной корпоративной сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264891/" target="_blank">Подпольный рынок кардеров. Перевод книги «Kingpin». Глава 4. «The White Hat»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264885/" target="_blank">«Ваша конфиденциальность очень важна для нас». Читаем Заявление о конфиденциальности корпорации Майкрософт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264849/" target="_blank">Мегафон — кто угодно может управлять вашим счётом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/264763/" target="_blank">Как Windows 10 собирает данные о пользователях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/264369/" target="_blank">Битва с роботом, опасности социальных сетей и хакнутый WiFi: как прошел NeoQUEST-2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/264727/" target="_blank">Security Week 33: двери без замков, неуязвимость Microsoft, дизассемблер и боль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/regru/blog/264551/" target="_blank">Прошлое и настоящее SSL-сертификатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264641/" target="_blank">Spring Security 4 + CSRF (добавление в Spring проект защиты от межсайтовой подделки запроса)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/264599/" target="_blank">Человек — это главная уязвимость. Немного о социальной инженерии на PHDays V</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/264601/" target="_blank">Злоумышленники активно эксплуатируют новую уязвимость в Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/abbyy/blog/264539/" target="_blank">Проверять или не проверять — вот в чём вопрос</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/264581/" target="_blank">Неприкасаемый Oracle</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/264541/" target="_blank">Kali Linux 2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264503/" target="_blank">Особенности резолвера DNS в Windows 10 и DNS Leak</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264489/" target="_blank">Распознавание кириллической Яндекс капчи</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/264479/" target="_blank">Корпоративные сети могут быть взломаны с помощью Windows Update</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264481/" target="_blank">Tor для всех: если заблокируют сайт torproject</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/264471/" target="_blank">Как русские хакеры обокрали Nasdaq</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264439/" target="_blank">PAP — старый, но не бесполезный!?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264429/" target="_blank">Уничтожить все</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264385/" target="_blank">Исследование «Глобальное состояние информационной безопасности 2015» (GSISS 2015). Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264405/" target="_blank">Министерство обороны уличили в пересылке секретных сведений через публичные почтовые сервисы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264383/" target="_blank">Разработчики Tox отмежевались от Tox Foundation</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264349/" target="_blank">Подпольный рынок кардеров. Перевод книги «Kingpin». Глава 6. «Я скучаю по преступлению»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tceh/blog/264337/" target="_blank">Глючинг, атаки по сторонним каналам и хакерские проекты на Кикстартере (продолжение)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264327/" target="_blank">Еженедельные новости Tor — 22 июля, 2015 г</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/264329/" target="_blank">Security Week 32: Android Stagefright, новые автодыры, Do Not Track 2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/264319/" target="_blank">Microsoft выпустила первое большое обновление для Windows 10</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tceh/blog/263845/" target="_blank">Хакерские проекты на Кикстартере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264287/" target="_blank">Двухфакторная аутентификация. Новые вызовы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264249/" target="_blank">Новые возможности Hyper-V vNext</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/264247/" target="_blank">Google и Samsung обещают регулярно обновлять Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264227/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 1. «Ключ»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/264151/" target="_blank">Таргетированные атаки: Китай атаковал более 600 объектов в США за последние 5 лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264131/" target="_blank">Как повысить уверенность в том, что кнопка была нажата живым пользователем на сайте и избавиться от капчи?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/264123/" target="_blank">Исследователи создали червя, который может заражать прошивку Mac</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262535/" target="_blank">Уязвимости систем безопасности Министерства Обороны, ФСБ, ФСИН, АЭС, метрополитена и федеральных автодорог</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/264049/" target="_blank">Третий лишний: как мы реализовали сбор почты с использованием OAuth 2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264073/" target="_blank">Защита от вирусов — что NIST указывает нам?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/264071/" target="_blank">Проверьте Ваш сайт на попадание в Единый реестр запрещённых сайтов России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264089/" target="_blank">5 нажатий на экран терминала — и открывается любая папка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/264047/" target="_blank">NGFW. Часть 3 – Демонстрация защиты от DDoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/264017/" target="_blank">Борьба с «плохими» URI, спамерами и php-шеллами — личный опыт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/264013/" target="_blank">Антивирусы под прицелом #2: взлом BitDefender и серьезные уязвимости в Symantec</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263975/" target="_blank">Bitcoin на пределе? Почему криптовалюту ждут тяжелые времена</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/263963/" target="_blank">Многофакторный LastPass</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/263903/" target="_blank">Новые критические уязвимости в Android: В чем проблема, и как защититься</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/263101/" target="_blank">Работа с паролями: как защитить свои учетные записи (мнения специалистов)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263813/" target="_blank">Подпольный рынок кардеров. Перевод книги «Kingpin». Глава 5. «Cyberwar!»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263819/" target="_blank">Перевод книги «Kingpin». Глава 3. «The Hungry Programmers»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/263665/" target="_blank">Корпоративные лаборатории PENTESTIT: современные угрозы ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virusdie/blog/263785/" target="_blank">Бой антивирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263789/" target="_blank">Обзор нового Intercepter-NG 0.9.10</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263759/" target="_blank">В Android обнаружены уязвимости, позволяющие получить доступ к смартфону через MMS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/263755/" target="_blank">Киберпреступники возродили форум Darkode</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263703/" target="_blank">Очередной взлом FL.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263591/" target="_blank">Обзор и видео докладов по информационной безопасности с конференции SECR-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/263615/" target="_blank">Как превратить саму сеть в полноценную систему защиты?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/263607/" target="_blank">Ошибка в системе безопасности Steam: восстановление пароля без ввода проверочного кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263557/" target="_blank">Чек-лист проверки анонимности сёрфинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315350/" target="_blank">Создание и тестирование Firewall в Linux, Часть 1.2. Простой перехват трафика с Netfilter</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/315338/" target="_blank">Решение пасхалки из анонса CTF от Bi.Zone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315340/" target="_blank">Создание и тестирование Firewall в Linux, Часть 1.1 Виртуальная лаборатория</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/315326/" target="_blank">Простыми словами: как работает машинное обучение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315242/" target="_blank">СМИ узнали о новом способе перехвата паролей и PIN-кода с мобильных телефонов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/315226/" target="_blank">DDoS на российские банки. Хронология атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/315224/" target="_blank">Итоги контеста PwnFest</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315212/" target="_blank">В сеть попала база данных (400 млн аккаунтов) сайтов Friend Finder Networks</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/315132/" target="_blank">Объясняем бабушке: Как зашифроваться за час</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/315052/" target="_blank">Security Week 45: обход двухфакторной авторизации в OWA, перехват аккаунтов GMail, уязвимость в OpenSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216295/" target="_blank">Определяем пользователей VPN (и их настройки!) и прокси со стороны сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263503/" target="_blank">Удар из прошлого: DdoS-атака RIPv1, или чем опасны старые роутеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263473/" target="_blank">SibirCTF 2015: как это было</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263459/" target="_blank">Персональные данные: насколько реально попасть под проверку Роскомнадзора?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263429/" target="_blank">Билайн автоматически меняет HTML теги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263351/" target="_blank">Семинар про криптографию и PGP Keysigning party</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/263305/" target="_blank">АНБ выложило на GitHub утилиту для обеспечения сетевой безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263293/" target="_blank">Перевод книги «Kingpin». Глава 34. «DarkMarket»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/263203/" target="_blank">Хакеров из Anonymous или Китая заподозрили в атаке на Нью-Йоркскую биржу</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/263195/" target="_blank">Автопроизводитель Chrysler выпустил security-обновление для Jeep Grand Cherokee (WK2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/263085/" target="_blank">Аудит безопасности сайта глазами заказчика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263147/" target="_blank">Взломан сайт AshleyMadison.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/263129/" target="_blank">Microsoft выпустила внеплановое security-обновление для Windows MS15-078</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263127/" target="_blank">Распознавание KCAPTCHA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263113/" target="_blank">Пришла беда откуда не ждали, уязвимость XSS в сервисе Яндекс.Метрика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263109/" target="_blank">Утечка пользовательских данных в QIWI</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263089/" target="_blank">Автоматический поиск роутеров со стандартными паролями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263073/" target="_blank">Угнать за 9 символов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/263045/" target="_blank">А что думали об антивирусах в прошлом?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/262997/" target="_blank">Google Chrome внедрил дополнительные механизмы безопасности для Flash Player</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/262897/" target="_blank">RC4 NOMORE: взламываем RC4-поток за десятки часов в TLS и WPA-TKIP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/262891/" target="_blank">Шесть способов надежно защитить свою организацию от внешних и внутренних угроз</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/262827/" target="_blank">Тестирование парольных политик крупнейших веб-сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/262765/" target="_blank">Проверьте Ваши сайты на уязвимость TLS Logjam</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262843/" target="_blank">Почему стать VPN провайдером не так просто?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262837/" target="_blank">Palantir, мафия PayPal, спецслужбы, мировое правительство</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dataart/blog/262817/" target="_blank">Обзор способов и протоколов аутентификации в веб-приложениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261885/" target="_blank">Двухфакторная аутентификация для всех</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/262733/" target="_blank">Защитные механизмы в HP Superdome X</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/262775/" target="_blank">Главный разведчик Южной Кореи: спецслужбы 35 стран покупали шпионский софт у Hacking Team</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/262721/" target="_blank">Правоохранительные органы закрыли известный киберпреступный форум Darkode</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262695/" target="_blank">ЯндексБот ходит по ссылкам, по которым ходит пользователь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262687/" target="_blank">Билайн автоматически добавляет тулбар и изменяет дизайн сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virusdie/blog/262611/" target="_blank">Рейтинг Mail.Ru запустил проверку сайтов на вирусы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/262515/" target="_blank">Курсы этичного хакинга для начинающих: новый набор</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/262663/" target="_blank">Баг в софте автомобилей Land Rover приводит к самопроизвольному отпиранию дверей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/262661/" target="_blank">Microsoft выпустила набор обновлений для своих продуктов, июль 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262645/" target="_blank">Firefox блокирует плагин Adobe Flash Player</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262639/" target="_blank">Официальные форумы Epic Games взломаны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262631/" target="_blank">Билайн вмешивается в трафик пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/262579/" target="_blank">Взлом сайта и его последствия</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/262587/" target="_blank">Отчёт о прошедшей встрече Defcon Moscow</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262479/" target="_blank">Инструкция: внедряем HIDS OSSEC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262469/" target="_blank">Делаем всё наоборот или портативный канал для безопасной передачи данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/262459/" target="_blank">Хакеры добрались до ракет Patriot?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262305/" target="_blank">Чёрная археология датамайнинга: насколько опасны «сливы» больших данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/261891/" target="_blank">Детектируем, разбираем, изучаем, паяем и глушим полицейские радары и лидары</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262413/" target="_blank">Что дают профили антивируcной защиты?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262341/" target="_blank">Подписываем данные: HMAC на практике в API и Web-формах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262331/" target="_blank">Wordpress в Интернет — приказано выжить</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/262319/" target="_blank">В Adobe Flash Player обнаружена очередная критическая уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/262251/" target="_blank">Немного о защите идентификаторов веб-сессий</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/262123/" target="_blank">Сетевая безопасность, Часть 2. Next-Generation Firewall</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262103/" target="_blank">Почему мы шифруем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262097/" target="_blank">Алгоритмы атаки и защиты мобильной рекламной сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262083/" target="_blank">Wallix vs balabit. Сравнение ПО по контролю админов [rdp]</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/261659/" target="_blank">11 продуктов для решения IT-задач компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/261925/" target="_blank">Автоматическое выявление уязвимостей: описание и статистика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/262061/" target="_blank">Злоумышленники активно используют 0day уязвимость Flash Player для кибератак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262053/" target="_blank">Собираем базу людей из открытых данных WhatsApp и VK</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/262013/" target="_blank">Критическое обновление безопасности для node.js и io.js</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/261913/" target="_blank">Сетевая безопасность. Вместо введения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/261979/" target="_blank">В Adobe Flash Player обнаружена опасная 0day уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/261943/" target="_blank">Немного понагнетаем: стало понятнее, что будет с персональными данными после 1 сентября 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261945/" target="_blank">Сравнительный тест популярных антивирусов от разработчика кибероружия Hacking Team</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261899/" target="_blank">Насколько важно видеть URL сайта?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/261887/" target="_blank">Кибергруппа Hacking Team подверглась масштабному взлому</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258183/" target="_blank">Центр сертификации AD + Smart Card = Авторизация пользователя в домене</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261881/" target="_blank">Заменит ли бекап антивирус?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259671/" target="_blank">Быстрый security-oriented fuzzing c AFL</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/261657/" target="_blank">Обзор решения Juniper Networks по защите против DDOS-атак на уровне приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169983/" target="_blank">Шифруем и перешифровываем LUKS без потери данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261789/" target="_blank">А не пойти ли вам в облака?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261787/" target="_blank">Удаленная инъекция Wi-Fi кадров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261781/" target="_blank">О тонкостях приватности в Telegram Bots API: «это не баг, это фича»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261779/" target="_blank">Экспресс-анализ подозрительной активности в журнале веб-сервера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261763/" target="_blank">Антивирусная авантюра Вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/261653/" target="_blank">Самый простой способ начать зашифрованный чат</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/261621/" target="_blank">Корпоративные лаборатории — программа профессиональной подготовки в области информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/261459/" target="_blank">Разбор заданий конкурса «Конкурентная разведка» на PHDays V</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/261647/" target="_blank">Apple выпустила iOS 8.4</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/260879/" target="_blank">Malware для OS X: полная летопись. Самые знаковые яблочные вредители этого десятилетия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257287/" target="_blank">Head Unit — как цель для хакера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261491/" target="_blank">Шкворень: школьники переводят книгу про хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/261569/" target="_blank">Сервисы для проверки навыков тестирования на проникновение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/acronis/blog/261519/" target="_blank">Acronis Backup Russia — первый взгляд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261549/" target="_blank">Распределенный криптопроцессинг</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/261081/" target="_blank">Хардкорный олдскул: QEMU и реверс образа флоппика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/stepic/blog/261195/" target="_blank">StepCTF’15: как мы проводили CTF на Stepic</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261355/" target="_blank">Опыт внедрения NetBackup 7.6</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/261375/" target="_blank">Анализируем необычные прошивки: разбор конкурса Best Reverser</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261041/" target="_blank">Детский лагерь: биссектрально-пифагоровы треугольники, перепрограммирование мозга, радар-детектор и взлом наручников</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/billing/blog/261301/" target="_blank">Анализ SSL/TLS трафика в Wireshark</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sap/blog/260765/" target="_blank">Электронная подпись в SAP – это просто</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261331/" target="_blank">Черная археология датамайнинга: что может быть эффективнее атаки по словарю?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261295/" target="_blank">Коммерческий VPN сервис в opensource</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261289/" target="_blank">Почему «электронные дневники» до сих пор ненадежны в образовании?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261271/" target="_blank">Настройка безопасности сайтов на VPS/VDS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261161/" target="_blank">Захват пакетов в Linux на скорости десятки миллионов пакетов в секунду без использования сторонних библиотек</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261153/" target="_blank">Как я получил доступ к «бесконечным» лайкам в Instagram и ВК</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/315032/" target="_blank">Немного о квантовой криптографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/315026/" target="_blank">CTF от Bi.Zone на ZeroNights2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/314976/" target="_blank">Конкурс на ZeroNights 2016 от Mail.Ru Group</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/314816/" target="_blank">Microsoft исправила серьезную уязвимость в Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/314868/" target="_blank">ZeroNights: анонс воркшопов и конкурсов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/314912/" target="_blank">Нюансы внедрения защиты от DDoS-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mobio/blog/314896/" target="_blank">Обзор мобильных антифрод-систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/314878/" target="_blank">Шесть вопросов в отношении обеспечения облачной безопасности, которые необходимо решить организациям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/314866/" target="_blank">DDoS-атака на Сбербанк, Альфа-Банк, Банк Москвы, Росбанк и другие</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/314856/" target="_blank">DRAMA: Новая атака позволяет скрытно похищать данные из изолированных виртуальных машин</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/261085/" target="_blank">Программное обеспечение Samsung способно намеренно отключать Windows Update</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/260913/" target="_blank">PentestBox — портативная сборка популярных security утилит</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/261075/" target="_blank">Антивирусы под прицелом: большая дыра в ESET и атака на Касперского</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sap/blog/261045/" target="_blank">Интернет вещей – миф или реальность?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/261035/" target="_blank">Конкурс MiTM Mobile: как ломали мобильную связь на PHDays V</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virusdie/blog/261039/" target="_blank">Внутри антивируса для сайтов Вирусдай — Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260995/" target="_blank">Общая концепция направления SafeCityNET</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260989/" target="_blank">Спам в мессенджерах: нарушается ли закон?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/260903/" target="_blank">Сноуден: АНБ шпионит за иностранными антивирусными компаниями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260875/" target="_blank">Исключительно простые задачи по AppSec .NET</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/255079/" target="_blank">Масоны выбирают солнце: взлом программы для Sun Solaris & SPARC в задании NeoQUEST-2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260833/" target="_blank">Как и где нужно применять СКЗИ — точка зрения ФСБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260733/" target="_blank">Будущее электронной подписи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260747/" target="_blank">Черная археология дата майнинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/260693/" target="_blank">Борьба с фишинговыми и вредоносными Web-ссылками в электронной почте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260647/" target="_blank">Блокировка по access_log, легкий способ прострелить ногу или устранение конкурентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/260577/" target="_blank">Исключения для хардкорщиков. Особенности обработки эксепшенов в динамически размещаемом коде</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/255629/" target="_blank">Доклады и конкурсы на NeoQUEST-2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/rambler-co/blog/260557/" target="_blank">XARA-уязвимости в OS X и iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260535/" target="_blank">Уязвимость в телефонах Samsung позволяет подслушивать разговоры</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/260513/" target="_blank">Гаджеты становятся «ближе к телу». Пять фактов, о которых вас хотят предупредить эксперты по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/260361/" target="_blank">Курсы этичного хакинга: начальная подготовка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/billing/blog/260415/" target="_blank">Сказ о том, как мы отечественного производителя поддерживали</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/260435/" target="_blank">Горячая кибервойна. Хакеры и ракетные установки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260413/" target="_blank">Инструкция: Настройка ПАК «Шлюз ПДн» (AltLinux СПТ 6.0 + VipNet Coordinator)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260393/" target="_blank">DDoS атака в обход Qrator. Как защититься?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/260383/" target="_blank">LastPass взломан, меняйте ваш мастер-пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hola/blog/260359/" target="_blank">Hola и Ваша безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/acronis/blog/260031/" target="_blank">Интеграция Windows и Mac OS при помощи Acronis Access Connect</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/260269/" target="_blank">Самозащита антивирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260303/" target="_blank">Угон префиксов магистрального провайдера «Телеком Малайзия» заметно ухудшил мировую маршрутизацию в прошлую пятницу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260287/" target="_blank">Готовы ли вы жаловаться?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260225/" target="_blank">Уязвимость в приложении Mail в iOS 8.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260183/" target="_blank">Реализация Single Sign On в Symfony2 приложении</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/260159/" target="_blank">Сравнение Security Enhanced NGINX и Hiawatha Web Server при отражении атак 7 уровня (BOTS/SQL/XSS etc.)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/260021/" target="_blank">Забота о репутации: проверяем свои сайты на попадание в блеклисты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/259845/" target="_blank">Соединяй и властвуй. Нестандартный взгляд на keep-alive</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/259389/" target="_blank">(Не)безопасный frontend</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/259887/" target="_blank">Топ-3 частых ошибок, обнаруженных при аудите безопасности сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/259905/" target="_blank">Кто взломал электрическую подстанцию: разбор конкурса Digital Substation Takeover</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/oblakoteka/blog/259891/" target="_blank">Защита персональных данных -aaS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/259889/" target="_blank">Общие советы при решении вопроса контроля местоположения, разрешений доступа и использования конфиденциальной информации в организации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/259843/" target="_blank">Под прессом. Ломаем и защищаем Wordpress своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/safedata/blog/259815/" target="_blank">Жизнь без DDoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259821/" target="_blank">Настройка Checkpoint. Часть 1. Установка и первоначальная конфигурация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/abbyy/blog/258197/" target="_blank">При достаточном количестве денег все ошибки выплывают на поверхность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259781/" target="_blank">Атака «evil maid» на зашифрованный жесткий диск</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/256659/" target="_blank">Анатомия IPsec. Проверяем на прочность легендарный протокол</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/259609/" target="_blank">Как на PHDays V взламывали систему ДБО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259559/" target="_blank">Расследование одного взлома или как быстро и просто потратить миллиард</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259569/" target="_blank">BSON инъекция в MongoDB адаптере для Ruby</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256139/" target="_blank">ASA5525-X+MS CA Windows Server 2012R2 — двухфакторная аутентификация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/259521/" target="_blank">WPAD: инструкция по эксплуатации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/259451/" target="_blank">Зачем покупать монстров? — Практика отечественного импортозамещения софта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/255945/" target="_blank">Нейроинтерфейсы: от фотобумаги до нейропыли</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virusdie/blog/259427/" target="_blank">Вирусдай — антивирус для сайтов, за который не стыдно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259419/" target="_blank">Эксплуатируем XSS уязвимость на сайте ipay.ua для кражи карточных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259399/" target="_blank">Релиз FastNetMon 1.1.2 открытого решения для мониторинга DoS/DDoS атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259393/" target="_blank">DoS эксплойт десктопного Skype для Windows и Mac OS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/259371/" target="_blank">Приглашаем на OWASP Russia Meetup 6 июня</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259363/" target="_blank">«ВКонтакте» не платит пользователям за найденные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/259309/" target="_blank">Методология аудита безопасности веб-приложения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/259331/" target="_blank">Защищенный компьютер внутри Micro SD карты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/259323/" target="_blank">Резервное копирование и шифрование при защите конфиденциальной информации в РФ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/259129/" target="_blank">Конкурс WAF Bypass на Positive Hack Days V</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259253/" target="_blank">10 способов защиты данных в Office 365</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259199/" target="_blank">Введение в KDF на примере решения криптографического ребуса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259177/" target="_blank">VPN-расширение Hola продает пользовательский трафик и содержит уязвимости удаленного выполнения кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259137/" target="_blank">«ВКонтакте» запускает программу BugBounty</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/259135/" target="_blank">Что было на PHDays V: признаки перехвата GSM-сигнала, лучшее время для взлома Wi-Fi, будущее шифрования</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/257407/" target="_blank">Выписываем цифровой сертификат и проверяем подпись с помощью BouncyCastle</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252877/" target="_blank">Читаем переписку клиентов Ubank с саппортом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/259073/" target="_blank">Сниффинг истории браузера с помощью favicon</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/simplepay/blog/259047/" target="_blank">OWASP TOP-10: практический взгляд на безопасность веб-приложений: №1 — инъекции</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/259013/" target="_blank">Расширение для Chrome позволяет следить за друзьями через Facebook Messenger</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/258893/" target="_blank">Простая криптография: частотный и дифференциальный криптоанализ в задании NeoQUEST-2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/custis/blog/258861/" target="_blank">Знакомство с XACML — стандартом для Attribute-Based Access Control</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/258921/" target="_blank">Первый день PHDays V: от перехвата СМС до взлома спутника</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258771/" target="_blank">RuCTF 2015: танковые битвы «белых хакеров»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/258663/" target="_blank">Курсы этичного хакинга и тестирования на проникновение от PENTESTIT</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/258673/" target="_blank">Выбор ciphersuites для TLS и уязвимость Logjam. Опыт Яндекса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258735/" target="_blank">Безопасность SSL/TLS российского интернет-банкинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258685/" target="_blank">Документ, который ждали</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/258681/" target="_blank">Заработай на кибервойне</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258595/" target="_blank">Печальное состояние сисадмина в эпоху контейнеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/simplepay/blog/258519/" target="_blank">Появился новый способ мошенничества: псевдорегистраторы доменов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258513/" target="_blank">Как я однажды взломал онлайн-казино</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255331/" target="_blank">Уязвимость в Xamarin для Android: подменяем dll и едим бесплатно</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/258457/" target="_blank">Уязвимость TLS Logjam — FREAK с DH</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/simplepay/blog/258499/" target="_blank">OWASP TOP-10: практический взгляд на безопасность веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/258461/" target="_blank">Logjam — новая уязвимость в TLS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258449/" target="_blank">Как я взломал Starbucks для безлимитного кофе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/prodlenka/blog/258431/" target="_blank">Больше ИТ-профессий для детей, ещё больше</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/258369/" target="_blank">Главные уязвимости онлайн-банков: авторизация, аутентификация и Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/258343/" target="_blank">Apple выпустила первые обновления для Watch OS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258335/" target="_blank">Уязвимость в KCodes NetUSB в роутерах D-Link, NETGEAR, TP-LINK, Trendnet, ZyXEL и других</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tmru/blog/258281/" target="_blank">Релиз новой версии WordPress 4.2 Powell и брешь в безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/258297/" target="_blank">Исследование безопасности коммерческих сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258285/" target="_blank">Что такое TLS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/258169/" target="_blank">NeoQUEST-2015: HeartBleed, Android и немного реверса</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/abbyy/blog/314830/" target="_blank">Как технологии ABBYY помогают улучшить работу систем обнаружения утечек данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/innopolis_university/blog/314800/" target="_blank">Российский хакер научил студентов ИТ-вуза взламывать сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/314722/" target="_blank">Google и Samsung исправили уязвимость Dirty COW в прошивках Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/comparex/blog/314700/" target="_blank">BYOD: корпоративная мобильность может быть безопасной</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/vasexperts/blog/313562/" target="_blank">Немного о типах DDoS-атак и методах защиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/314476/" target="_blank">Microsoft предоставит антивирусам возможность контроля за активностью подсистемы Linux на Windows 10</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/comparex/blog/314450/" target="_blank">Информационная безопасность: пять способов защиты от кибератак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/314434/" target="_blank">Security Week 44: zero-day в Windows, уязвимость в ботнете Mirai, серьезные дыры в MySQL</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/314418/" target="_blank">Microsoft отказывается от поддержки EMET</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/314392/" target="_blank">Роcкомнадзор: держим ухо востро. Как вовремя заметить внесение в список</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/257675/" target="_blank">Лаборатория тестирования на проникновение «Test lab v.7» глазами хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kingservers/blog/258253/" target="_blank">Google переносит корпоративные приложения в облако с возможностью доступа извне</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258065/" target="_blank">Как я проходил первый хак квест CTF Ratazana</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/258101/" target="_blank">Обход CloudFlare ScrapeShield в Java (Android)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/258071/" target="_blank">Безопасность сетевой инфраструктуры. Расширенные методы взлома и защиты. Видео</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/258039/" target="_blank">Исследование: уязвимости промышленных систем управления в 2014 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257951/" target="_blank">Уязвимость «ВКонтакте» позволяла получить прямые ссылки на приватные фотографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/257937/" target="_blank">Новые соревнования на PHDays: взлом мобильной связи, электрических подстанций и протоколов маршрутизации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/257885/" target="_blank">Курсы этичного хакинга и тестирования на проникновение: обновленная программа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257877/" target="_blank">Ошибки типовые и не очень</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/3cx/blog/257673/" target="_blank">Как 3CX решает проблемы безопасности (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257881/" target="_blank">Анализ учетных записей одного (не)надежного email-сервиса</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/257879/" target="_blank">Как «русские хакеры» пытались узнать о новых санкциях против России: изучаем CVE-2015-1701</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/257829/" target="_blank">Выбираем корпоративный интернет-шлюз</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/257737/" target="_blank">Форензика и стеганография в видеофайле: разбор заданий online-этапа NeoQUEST-2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/257811/" target="_blank">Стань автором «Хакера» и получи инвайт на форум PHDays V</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/257705/" target="_blank">Тот случай, когда флуд бесполезен</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/257783/" target="_blank">IBM представляет новое решение для борьбы с кибератаками</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/257769/" target="_blank">Онлайн-голосование стало на шаг ближе, благодаря прорыву в технологии безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/257753/" target="_blank">Вперед к победе: опубликована конкурсная программа PHDays V</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257725/" target="_blank">Как поймать то, чего нет. Часть шестая. Вирусы в банке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257439/" target="_blank">Руководство по шифрованию данных на PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257605/" target="_blank">EMCSSL – Система идентификации пользователей WWW на основе подсистемы NVS криптовалюты EmerCoin и децентрализованных клиентских SSL-сертификатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257681/" target="_blank">Trojan-Downloader.Win32.Cabby.cemx — Часть вторая — Функционал</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/257507/" target="_blank">Новый вирус, выводящий из строя компьютер при своем обнаружении</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256367/" target="_blank">Структура PKCS7-файла</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ivi/blog/257431/" target="_blank">Реализуем ещё более безопасный VPN-протокол</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/256667/" target="_blank">Проверяем MS SQL на прочность. Векторы атак на MS SQL Server</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257413/" target="_blank">Trojan-Downloader.Win32.Cabby.cemx — Часть первая — Распаковка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/3cx/blog/257377/" target="_blank">Как 3CX Phone System решает проблемы безопасности в VoIP (часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/257343/" target="_blank">Microsoft откажется от Patch Tuesday для Windows 10</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/256665/" target="_blank">Играем мускулами. Методы и средства взлома баз данных MySQL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257207/" target="_blank">Бесплатные SSL-сертификаты — теперь на 3 года от WoSign</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257163/" target="_blank">Ошибка в коде AFNetworking позволяет перехватывать HTTPS трафик пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257137/" target="_blank">Очередные пароли засветили на ТВ. Теперь Британские железные дороги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257135/" target="_blank">Трансгуманизм в массы: разблокировка устройства на Android Lollipop вживленным NFC-чипом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257133/" target="_blank">Билайн автоматически добавляет тулбар с поиском Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/257117/" target="_blank">Лаборатория тестирования на проникновение «Test lab v.7» открыта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/257077/" target="_blank">Конкурсы HackQuest и Hash Runner: разогреем мозги перед PHDays</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/256663/" target="_blank">Атака на оракула. Подробный гайд по векторам атак на Oracle DB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/257043/" target="_blank">Яндекс против мошеннических мобильных редиректов и подписок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/257027/" target="_blank">Уязвимость в proftpd CVE-2015-3306</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/256989/" target="_blank">Хакер имплантировал чип NFC в руку, чтобы обходить сканеры систем безопасности и управлять андроид-телефонами</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/parallels/blog/256961/" target="_blank">Как Virtuozzo улучшает безопасность Docker для сервис-провайдеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256975/" target="_blank">Аудит одного «медленного» приложения в одном крупном концерне</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/256937/" target="_blank">PHDays V: как сделать свой Shodan, противостоять ROP-шеллкодам и автоматизировать обратную разработку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256843/" target="_blank">Ещё раз о шифровании ГОСТ 28147-89</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/otr_to/blog/256841/" target="_blank">В Управлении по регулированию телекоммуникаций Индии (TRAI) произошла утечка более 2 миллионов email-адресов; месть Anonymous India</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256835/" target="_blank">Поклонникам китайских пионеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infopulse/blog/256829/" target="_blank">Особенности внедрения DLL и установки хуков в Modern-приложениях Windows 8/10</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/256661/" target="_blank">Car Hacking: так ли безопасны системы безопасности автомобиля?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dellemc/blog/256749/" target="_blank">Потери данных и простои обходятся российским компаниям более чем в 29 млрд долл</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256793/" target="_blank">Почему вас все равно взломают</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256777/" target="_blank">Да какого, блин, хрена, D-Link⁈</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256735/" target="_blank">Как поймать то, чего нет. Часть пятая, дробь два: Что нужно знать для покупки сертифицированного продукта. ЧАВО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256613/" target="_blank">Может ли софтверное уничтожение данных быть лучше мощного магнита?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256579/" target="_blank">Двухэтапная аутентификация в браузере с помощью USB-токена U2F</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/reactos/blog/256675/" target="_blank">Информационная безопасность в открытых проектах, доклад с РИФ+КИБ 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256671/" target="_blank">Джеф Атвуд: «Ваш пароль слишком короткий!»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256573/" target="_blank">CTB-Locker. Мы решили платить</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/256463/" target="_blank">Яндекс выпустил антивирус для сайтов — Manul</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ivi/blog/256365/" target="_blank">Реализуем безопасный VPN-протокол</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256451/" target="_blank">Взламываем D-Link DIR-890L</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/256461/" target="_blank">Где взять полтора миллиона на стартап по кибербезопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/256437/" target="_blank">Запись вебинара: «Способы защиты информации на базе Azure, Backup (Microsoft, Veeam, BackupExec) и Azure Site Recovery»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/256407/" target="_blank">Червивые яблочки [БЕЗ JailBreak]</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/innopolis_university/blog/256383/" target="_blank">Получи грант на обучение сетевой безопасности в Нидерландах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256373/" target="_blank">CCTV на OS X</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/256361/" target="_blank">Новый спам: Как мошенники используют интерактивные робо-звонки из облака</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/256333/" target="_blank">Программа практической подготовки в области ИБ: «Zero Security: A»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/256263/" target="_blank">Интернет в российских школах: работа над ошибками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256255/" target="_blank">В отделах Google Adsense слегка c adidas совместно оборзели?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kingservers/blog/256233/" target="_blank">Закон о «персональных данных» приведет к росту объема рынка дата-центров в России?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/244467/" target="_blank">Stealer на C#. Мы уложились в 9 Кб исполнимого файла</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/256217/" target="_blank">Что нужно знать про миграцию в Россию к 1 сентября 2015-го с иностранной инфраструктуры</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/254671/" target="_blank">Убийцы жестких дисков. Коэрцетивный выстрел в голову</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/254685/" target="_blank">Взлом дронов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/256147/" target="_blank">Как поймать то, чего нет. Часть пятая: Миф о необходимости сертифицированного ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/255823/" target="_blank">Лаборатория тестирования на проникновение «Test lab v.7». Вызов брошен</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/256037/" target="_blank">Уязвимость CVE-2015-1635 (MS15-034) эксплуатируется in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/255929/" target="_blank">Компания Schneider Electric поблагодарила победительницу хакерского конкурса PHDays</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/253997/" target="_blank">Яблочный forensic. Извлекаем данные из iOS-устройств при помощи open source инструментов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/255779/" target="_blank">Microsoft и Adobe выпустили набор обновлений для своих продуктов, апрель 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inline_tech/blog/255275/" target="_blank">Особенности аутентификации контроллера домена с использованием двух разных сертификатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/255633/" target="_blank">Некапча Mail.Ru – капча, которая не показывается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255689/" target="_blank">Сертификаты SSL, SHA-1 и nic.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/254129/" target="_blank">Я тебя по сетям вычислю: используем API крупнейших соцсетей в своих корыстных целях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/255681/" target="_blank">Главные уязвимости корпоративных информационных систем в 2014 году: веб-приложения, пароли и сотрудники</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/255623/" target="_blank">Сравнение техподдержки крупнейших производителей ПО в сфере сетевой безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/255619/" target="_blank">Наиболее актуальные примеры уведомлений о нестандартном поведении пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/255603/" target="_blank">Приглашаем на олимпиаду по безопасности в МИФИ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255601/" target="_blank">Знакомство с Santoku Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255595/" target="_blank">Как поймать то, чего нет. Часть четвертая: персональные данные без зонтика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255587/" target="_blank">Внимание! Фишинг регистрационных данных NIC.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255537/" target="_blank">Использование Java смарт-карт для защиты ПО. Глава 5. Безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255535/" target="_blank">Использование Java смарт-карт для защиты ПО. Глава 4. Пишем первый апплет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255533/" target="_blank">Использование Java смарт-карт для защиты ПО. Глава 3. Установка и настройка IDE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255531/" target="_blank">Использование Java смарт-карт для защиты ПО. Глава 2. Java смарт-карта с точки зрения разработчика апплетов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/314352/" target="_blank">Утечки данных в 2016 году – предварительные итоги года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/313710/" target="_blank">Malware + Blockchain = ❤️</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/314230/" target="_blank">Корпоративные лаборатории — обновление программы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/314150/" target="_blank">Хакеры украли с помощью бота у четырёх банков миллиард рублей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/314142/" target="_blank">Google опять раскрыла непропатченную уязвимость в Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ru_mts/blog/314134/" target="_blank">Как делают Wi-Fi-сеть в общественном транспорте</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/solarsecurity/blog/312056/" target="_blank">Поиск уязвимостей в байткоде Java: что делать с результатами?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/314112/" target="_blank">Власти США разрешили исследователям заниматься пентестами и реверс-инжинирингом без юридических последствий</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/314044/" target="_blank">Находим ошибки в коде проекта LLVM с помощью анализатора PVS-Studio</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/314002/" target="_blank">Хакеры Shadow Brokers опубликовали новую порцию данных группировки Equation Group</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255529/" target="_blank">Использование Java смарт-карт для защиты ПО. Глава 1. Общие сведения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255565/" target="_blank">ASN1js и PKIjs — год после создания</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255569/" target="_blank">SSO на FreeIPA+Apache+Flask-Login+JWT</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255557/" target="_blank">Воскресный сказ о важности обновления, даже если вы ботнет оператор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255519/" target="_blank">Return oriented programming. Собираем exploit по кусочкам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255509/" target="_blank">Французский телеканал был взломан после интервью сотрудника на фоне стикеров с паролями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255475/" target="_blank">Как студент баг в Яндекс.Музыке нашел</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/255483/" target="_blank">Особое мнение: Алгоритм JPMorgan вычислит недобросовестных трейдеров до того, как они принесут убытки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255433/" target="_blank">OSSIM — разворачиваем комплексную open source систему управления безопасностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255427/" target="_blank">Особенности работы с виртуальными дискaми VirtualBox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255417/" target="_blank">Исследование андроид-вируса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255333/" target="_blank">Новый adware встраивается непосредственно в браузер</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infopulse/blog/255251/" target="_blank">Обнаружены поддельные сертификаты для доменов Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255225/" target="_blank">Интервью со skype-мошенником</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255183/" target="_blank">Двухфакторная аутентификация для корпоративных веб-сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payler/blog/255039/" target="_blank">Payler: обновление сертификации PCI DSS до версии 3.0 — DONE</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/255113/" target="_blank">Тестирование на проникновение в соответствии с требованиями СТО БР ИББС-1.0-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/255015/" target="_blank">Как поймать то, чего нет. Часть печальная: что такое антивирус?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254899/" target="_blank">Шифрование в NQ Vault оказалось обычным XOR-ом, и это еще не самое плохое</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/254741/" target="_blank">Traffic Inspector: полная перезагрузка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254777/" target="_blank">Завершен аудит кода TrueCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/254751/" target="_blank">Как Уитфилд Диффи помог Бобу и Алисе обмануть Еву</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254403/" target="_blank">SaltStack: Предварительная генерация паролей для использования в сервисах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/254003/" target="_blank">Анализ защищенности терминалов общего пользования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254597/" target="_blank">Пять очевидных ошибок, которые почему-то продолжают совершать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254583/" target="_blank">Очередной XSS на SoundCloud</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254565/" target="_blank">Топ-5 самых дурацких антивирусов. Записки хулигана</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254503/" target="_blank">Single Sign-On (SSO): OpenAM + mod_auth_mellon</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/254505/" target="_blank">Как интернет вещей меняет подход к безопасности в корпорациях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tibbo/blog/254381/" target="_blank">IO Ninja – программируемый эмулятор терминала/сниффер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254437/" target="_blank">Почему Касперский определяет на сайте троян HEUR:Trojan.Script.Generic? (и возможный способ устранения)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dentalcloud/blog/254423/" target="_blank">Как создавать и зарабатывать на SaaS | Часть 17 | Персональные данные и врачебная тайна в облаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254351/" target="_blank">Как поймать то, чего нет. Часть третья: а судьи кто?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/253893/" target="_blank">Нестандартное использование сервиса мониторинга сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/caspowa/blog/254343/" target="_blank">Даниил Дубровкин: «Оpen source не значит, что это бесплатно и что это никому не принадлежит»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ppbbxx/blog/253073/" target="_blank">Защита от прослушивания разговоров — строим безопасную SIP телефонию своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/254073/" target="_blank">Лекции Технопарка. 2 семестр. Базы данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254231/" target="_blank">Добиваемся OCSP stapling = Yes для сертификатов от WoSign на Nginx</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254227/" target="_blank">Запрет bitcoin в РФ этой осенью?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254217/" target="_blank">Анонимности нет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254201/" target="_blank">Исследование мобильного jar трояна</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254183/" target="_blank">Про MAC-таблицы в коммутаторах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254173/" target="_blank">Как меня Trendnet 2-й раз обманул</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254141/" target="_blank">В свободном доступе по-прежнему находится частная, финансовая и другая закрытая информация пользователей Fl.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/254109/" target="_blank">Как расшифровать данные магнитной дорожки с использованием DUKPT</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/254061/" target="_blank">В Android обнаружена опасная уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/253991/" target="_blank">Google усилит безопасность веб-браузера Chrome для Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/253693/" target="_blank">Видеострим: обзор модуля из курса HP ArcSight Bootcamp</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252779/" target="_blank">e-Ticket misunderstanding</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253943/" target="_blank">Критическая уязвимость в безопасности на fl.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253939/" target="_blank">Сам себе Руссинович</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253885/" target="_blank">Решение задач по sql injection с сайта alexbers.com/sql</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/244485/" target="_blank">Снифаем выходную ноду Tor’а и анализируем получившийся контент</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/253835/" target="_blank">Не совсем известные решения по защите ИТ-инфраструктуры бизнеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/253619/" target="_blank">Электронная подпись в доверенной среде на базe загрузочной Ubuntu 14.04 LTS и Рутокен ЭЦП Flash</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253769/" target="_blank">Как поймать то, чего нет. Часть вторая: снаряд и броня</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/253767/" target="_blank">Приглашаем принять участие в Security Meetup 9 апреля</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/253727/" target="_blank">Pwn2Own 2015: итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253623/" target="_blank">Анонимные платежи: Dash или Bitcoin+Миксеры?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253617/" target="_blank">Как я защищался от фишинга, и написал велосипед, но свой собственный</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/253557/" target="_blank">Pwn2Own 2015: первые итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253521/" target="_blank">Как легко расшифровать TLS-трафик от браузера в Wireshark</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253545/" target="_blank">Как поймать то, чего нет. Часть первая. Термины и определения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/253353/" target="_blank">Сертификации CompTIA для ИТ-специалистов. Часть 4 из 7. CompTIA Security+</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/253333/" target="_blank">«Корпоративные лаборатории PENTESTIT» — практическая подготовка в области информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253335/" target="_blank">Ваш wi-fi расскажет мне, где вы живёте, где работаете и где путешествуете</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/253327/" target="_blank">Google усилит безопасность своего магазина приложений Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/253309/" target="_blank">Точки соприкосновения JavaScript и Reverse Engineering</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253153/" target="_blank">Брутфорс паролей инженерного меню радиостанции</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/253149/" target="_blank">Корпоративный поиск</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253119/" target="_blank">Случайные и фантомные домены (random subdomain, phantom domain), DDoS атака на кэширующий DNS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253137/" target="_blank">Как обойти двух факторную аутенфикацию Authy с ../sms</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252905/" target="_blank">Результаты Radare Summer of Code 2014 и организация нового RSoC/GSoC 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253045/" target="_blank">Стеганография в XXI веке. Цели. Практическое применение. Актуальность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/253013/" target="_blank">Эксплуатируем root-уязвимость в роутерах Asus</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/252991/" target="_blank">Как получить статус суперпользователя с помощью уязвимости DRAM: Техника Rowhammer</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/252963/" target="_blank">Как крадут деньги, которых нет. Или кое-что новенькое о криптовалютах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252911/" target="_blank">Атака Telegram за 2^64 операций, и почему суперзлодею она не нужна</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252869/" target="_blank">Нужна ли книга по защите мобильных приложений?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/252863/" target="_blank">Apple и Microsoft исправили опасную уязвимость FREAK</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252813/" target="_blank">Можно ли верить коду в редакторе? bi-directional текст</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252831/" target="_blank">Отслеживание устройств через пассивное прослушивание WiFi</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252821/" target="_blank">Nginx и https. Получаем класс А+</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252475/" target="_blank">Персональные данные пользователей Rozetka.ua в публичном доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/usedesk/blog/252747/" target="_blank">Лучшая практика развертывания SSL/TLS, часть 2. Конфигурация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/252711/" target="_blank">Microsoft неправильно исправила уязвимость, которую использовал червь Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252705/" target="_blank">NoScript теперь и для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/252233/" target="_blank">DDoS как актуальная проблема безопасности для бизнеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252611/" target="_blank">Обход блокировки запрещенного сайта вебмастером без настроек и ПО на стороне клиента</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/252613/" target="_blank">Apple выпустила iOS 8.2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/252561/" target="_blank">Сравнение настольных программ для шифрования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249563/" target="_blank">Мощь Scapy</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251569/" target="_blank">Опыт маскировки OpenVPN-туннеля с помощью obfsproxy</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252529/" target="_blank">Бесплатные SSL-сертификаты на 2 года от WoSign</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252507/" target="_blank">Мигрируем на HTTPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252491/" target="_blank">TLS в HTTP/2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252441/" target="_blank">Reconnect — уязвимость в Facebook Login</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252433/" target="_blank">Супер-куки на основе HSTS отследят вас даже в приватном режиме</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dit/blog/252375/" target="_blank">Хабраэффект для 130 000 камер Москвы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jugru/blog/252273/" target="_blank">Конференция Mobius 2015 по мобильной разработке: анонс докладов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/313926/" target="_blank">Массовое ограбление покупателей Fix-Price</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/313882/" target="_blank">Security Week 43: атака на серверы Dyn, жизнь поддельного техсаппорта, уязвимость в Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/313856/" target="_blank">В процессорах Intel обнаружена ошибка, позволяющая обходить защиту ASLR</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/313768/" target="_blank">Adobe выпустила экстренное обновление для Flash Player</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/313762/" target="_blank">Безопасность в IoT: Azure IoT Suite для тех, кто начинает с нуля</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/313728/" target="_blank">ИТ-бульдоги под ковром</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/313688/" target="_blank">Двухфакторная аутентификация и открытые двери</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/313678/" target="_blank">Деятельность кибергруппировки Sednit под микроскопом — Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/313546/" target="_blank">Исследователи создали эксплоит для получения root-доступа к Android-смартфонам с помощью уязвимости Rowhammer</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/qiwi/blog/313530/" target="_blank">QIWI Security Development Lifecycle</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/252227/" target="_blank">Аудит безопасности сайта — выявление рисков и угроз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252303/" target="_blank">SibSUTIS CTF 2015: Как мы проводили свои студенческие соревнования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252263/" target="_blank">Распределённый Captive Portal в публичных местах и сложности с Apple</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252275/" target="_blank">Hotpatch. Патчим память ядра Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252177/" target="_blank">Я тебя по блеску в глазах взломаю</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/252095/" target="_blank">Уязвимость «большого пальца»: я твой палец по фотографии взломаю</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/252165/" target="_blank">FREAK — TLS Downgrade атака на Android и iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/252091/" target="_blank">Безопасность в интернете: готовы ли пользователи противостоять киберугрозам?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/252055/" target="_blank">Как взламывают корпоративный Wi-Fi: новые возможности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/252047/" target="_blank">Классификация неструктурированных данных – зачем она нужна?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251815/" target="_blank">Бонд. Джеймс Бонд. Роботизированная подделка почерка для маркетологов и социальных инженеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/248567/" target="_blank">Открыта регистрация на NeoQUEST-2015: «Сокровища масонов»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/252027/" target="_blank">Google решила повременить с шифрованием данных на Android по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yotadevices/blog/251929/" target="_blank">Обнаружение мобильного вредоносного ПО в дикой природе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92787/" target="_blank">Для чего используют TOR?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/247911/" target="_blank">Конструируем локальный криптографический TLS-прокси c HTTP API электронной подписи</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/innopolis_university/blog/251901/" target="_blank">Как я поехал учиться в Сингапур бесплатно</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/251889/" target="_blank">Сравнение Android-приложений для шифрования данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251547/" target="_blank">Безопасная Cisco</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251823/" target="_blank">Опасности использования open-uri</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251705/" target="_blank">«Реверс-инжиниринг» клиентского приложения в образовательном центре</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251671/" target="_blank">Браузер Vivaldi хранит пароли в открытом виде</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/239089/" target="_blank">Влезаем в компьютер, не используя средства ввода, ищем Джокера и коннектимся к серверу на Android — в заданиях NeoQUEST-2014!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/251613/" target="_blank">За поимку автора Zeus назначена максимальная награда</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/251609/" target="_blank">Компанию Lenovo атаковали в отместку за шпионскую программу Superfish</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/251595/" target="_blank">Сертификации CompTIA для ИТ-специалистов. Часть 1 из 7. CompTIA A+ и запись вебинара о подготовке к сертификациям по ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/icl_services/blog/251575/" target="_blank">Patch Management. Тестирование ежемесячных обновлений ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/251577/" target="_blank">Правоохранительные органы обрушили ботнет Ramnit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251487/" target="_blank">Слив данных 180 тысяч пользователей FL.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251451/" target="_blank">USB killer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251445/" target="_blank">Уязвимость в плагине WP-Slimstat 3.9.5 и ниже для WordPress</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neuronspace/blog/249825/" target="_blank">Jammer: глушим GSM, 3G, 4G, WiMAX, Yota</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/251209/" target="_blank">Курсы этичного хакинга и тестирования на проникновение. Новый набор</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/251399/" target="_blank">Новое в программе PHDays: защита суперкомпьютеров, безопасность iOS-приложений и продажа эксплойтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251341/" target="_blank">Кнут и… кнут информационной безопасности на предприятии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/251291/" target="_blank">Владельцы данных – мысли на тему, за и против</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/crystal_service/blog/251127/" target="_blank">Международная выставка «EuroCIS-2015». Прямая twitter-трансляция</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251099/" target="_blank">Говорила же мама: не доверяй телефону с SIM-картой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/251069/" target="_blank">Ноутбуки Lenovo поставляются с вредоносным ПО Superfish и его CA-сертификатом и приватным ключом в хранилище</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250573/" target="_blank">[Доморощенный] web honeypot своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247409/" target="_blank">Потенциальная уязвимость в Telegram Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250999/" target="_blank">Восстанавливаем локальные и доменные пароли из hiberfil.sys</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/250991/" target="_blank">The Equation, Carbanak, Desert Falcons: отчет с Security Analyst Summit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250945/" target="_blank">ZeroNet — Распределенные сайты через Bittorrent и Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250931/" target="_blank">Переходим на HTTPS на Nginx: шпаргалка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/250915/" target="_blank">Вассенаарские соглашения ограничат беспорядочную продажу эксплойтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/250531/" target="_blank">Антивирус, Android и х86. Особенности взаимодействия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216739/" target="_blank">Шифрование SQLite базы данных в Qt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250851/" target="_blank">Почему Bittorent через Tor — плохая идея</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/250793/" target="_blank">PHDays V: шифрование будущего, M&A в «Яндексе», химическая атака и отец киберпанка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250775/" target="_blank">Говорила же мама: не доверяй прошивкам жёстких дисков</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/reactos/blog/250749/" target="_blank">Откуда берутся бреши в безопасности программ?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250735/" target="_blank">Что не договаривают сервисы по защите от DDoS или почему защита не работает</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250725/" target="_blank">Результаты тестирования алгоритмов российских биометрических компаний на мировом рынке</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/250675/" target="_blank">Делаем свободное ПО безопасней: баги и фиксы InstantCMS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250671/" target="_blank">Небезопасное хранение паролей в IBM WebSphere</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/250599/" target="_blank">Совместное использование криптодисков на ПК и Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250347/" target="_blank">Взлом пароля на Mac с Arduino и OpenCV</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/250627/" target="_blank">Технический отчет о деятельности преступной группы, занимающейся целевыми атаками — Anunak</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250597/" target="_blank">Хакеры совершили одно из крупнейших в истории банковских ограблений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250551/" target="_blank">Обзор площадки для тестирования веб-уязвимостей OWASP Top-10 на примере bWAPP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/250565/" target="_blank">VirusTotal будет отслеживать false positive</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/250315/" target="_blank">Microsoft выпустила набор обновлений для своих продуктов, февраль 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250505/" target="_blank">Удобное использование WPS в Mikrotik</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250495/" target="_blank">Безопасность в ссылках для e-mail рассылок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250473/" target="_blank">Facebook запустил социальную сеть для профессионалов в области информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payture/blog/250437/" target="_blank">Популярно про фрод — ответы на вопросы из реальной жизни электронных коммерсантов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250413/" target="_blank">Как Elasticsearch может помочь в поиске подозрительной активности на сайте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250403/" target="_blank">Уязвимости и бэкдоры в телефонах Grandstream</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250339/" target="_blank">Взлом TLS с денежным призом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/250331/" target="_blank">Нестандартный топ новостей о безопасности: Январь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250313/" target="_blank">Что и зачем ищут на сайтах «боты тёмной стороны силы»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/250289/" target="_blank">Чему нас научили 5 крупнейших хакерских атак 2014 года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250267/" target="_blank">Шпионим за всеми с помощью Яндекс.Метро</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/250235/" target="_blank">Странности в работе Яндекс.Метро: разбор полётов и апдейт приложения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/249723/" target="_blank">Библиотека для встраивания электронной подписи в приложения С++</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/250127/" target="_blank">Разграничение информационных систем при защите персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250133/" target="_blank">Kali NetHunter. Мобильная pentest-платформа</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/250111/" target="_blank">Исследование: Перехват трафика мобильного Интернета через GTP и GRX</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250109/" target="_blank">Почему вам надо обновить свои SSL сертификаты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/250107/" target="_blank">Новое исследование: избыточные права доступа сотрудников к конфиденциальной информации подвергают компанию опасности и повышают риски</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/parallels/blog/250015/" target="_blank">Перестаем пользоваться паролями в Plesk</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250045/" target="_blank">Статистика использования imarker (система СОРМ-like веб-аналитики)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/250023/" target="_blank">Ограничение количества попыток ввода пароля в веб-форме авторизации при помощи Nginx или HAProxy на примере WordPress</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/249921/" target="_blank">MyTOTP — полностью своя* двухфакторная авторизация по rfc6238</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249891/" target="_blank">XSS уязвимость в Mobli</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/249893/" target="_blank">Adobe исправила очередную опасную уязвимость Flash Player</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/249877/" target="_blank">Microsoft выплатила рекордные $125k за эксплойт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/249809/" target="_blank">XSS-уязвимость нулевого дня в Internet Explorer позволяет атаковать любые сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249427/" target="_blank">Новый инвариант натурального числа. Теорема и доказательство</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/249771/" target="_blank">Как и зачем мы делаем TLS в Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249765/" target="_blank">Как я боролся с adware в Google Play и проиграл</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249761/" target="_blank">Сбербанк Онлайн: узнаем персональные данные по телефону</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249757/" target="_blank">Как взломать двухфакторную аутентификацию Яндекса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249747/" target="_blank">Яндекс.Метро следит за тобой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249695/" target="_blank">Простое решение для использования ЭЦП — развитие</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/249719/" target="_blank">Как мы реализовали HTTPS на главной странице портала Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249721/" target="_blank">Банальная XSS уязвимость на странице p2p переводов Фидобанка, позволяющая украсть cvv2 код пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249681/" target="_blank">Защита игр и мобильных приложений от взлома для чайников (Unity, C#, Mono)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/249697/" target="_blank">Использование графов для раскрытия планов инсайдеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/313444/" target="_blank">Ботнет Mirai использовался для мощной DDoS-атаки на компанию Dyn</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/313400/" target="_blank">Досье на хакера: Борис Флорикик aka Tron, создатель первого Криптофона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/313332/" target="_blank">Всем привет, я вебмастер и меня взломали</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/313312/" target="_blank">Security Week 42: зима на подходе, взрывающиеся свиньи, зашифрована половина интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/313282/" target="_blank">Для новичков. XSS и ошибки разработчиков на веб-сервисах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/313276/" target="_blank">В ядре Linux обнаружена опасная 0-day уязвимость Dirty COW (CVE-2016-5195)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/313236/" target="_blank">Программа ZeroNights 2016 + анонс HackQuest</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/313166/" target="_blank">В 3 квартале 2016 года киберпреступления достигли новых высот</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/313132/" target="_blank">Грабли VK SDK для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/313068/" target="_blank">СМИ: Немецкие военные взломали сеть афганского мобильного оператора, чтобы узнать местонахождение заложника</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yotadevices/blog/249581/" target="_blank">Трудности монетизации украденных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/249547/" target="_blank">Двухфакторная аутентификация, которой удобно пользоваться</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249589/" target="_blank">XSS на сайтах, использующих Instagram API</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/usedesk/blog/249575/" target="_blank">Лучшая практика развертывания SSL/TLS, часть 1. Теория</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/249565/" target="_blank">IBM Research объявила о запуске инновационной облачной технологии для защиты персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249537/" target="_blank">Heartbleed на Rust</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249529/" target="_blank">Бесплатные SSL-сертификаты на 2 года с поддержкой до 100 доменов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249513/" target="_blank">Уязвимость на сайте Дом.ru, позволяющая получить личные данные клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249503/" target="_blank">Настраиваем авторизацию в IIS по сертификатам используя OneToOne</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249437/" target="_blank">План EFF по устранению массовой слежки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249315/" target="_blank">Блокируем блокировку от Роскомнадзора</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/249303/" target="_blank">Риски информационной безопасности для владельцев бизнеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248917/" target="_blank">CSRF в моем домашнем роутере и как я ее закрыл</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/249173/" target="_blank">Продолжаем смотреть публичные камеры видео-наблюдения Москвы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/luxoft/blog/249135/" target="_blank">Баг в CLR: как затащить объект в песочницу без маршаллинга и вызвать Callback</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/249097/" target="_blank">Новая уязвимость GHOST угрожает популярным дистрибутивам на базе Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infobox/blog/249083/" target="_blank">Как защитить Linux–сервер от критической уязвимости Ghost. Обновите ОС!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/249081/" target="_blank">Apple выпустила iOS 8.1.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/249041/" target="_blank">YouTube отказался от Flash в пользу HTML5 по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/249007/" target="_blank">GHOST — уязвимость gethostbyname() в glibc</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/249001/" target="_blank">Новые уязвимости Flash Player эксплуатируются in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248933/" target="_blank">Linux DDoS-троян скрывается за встроенным руткитом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248887/" target="_blank">Взлом биткоин биржи на Rails</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/248867/" target="_blank">Интервью: CISSP, CISA, SecurityPlus и другие слова, понятные только спецам по ИТ-безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243997/" target="_blank">Был получен доступ к тысячам персональных данных пользователей «Билайн проводной интернет»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248419/" target="_blank">Встраиваем бэкдор в Bitcoin (ECDSA) или еще раз о клептографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247179/" target="_blank">Факторизация и шифрование на эллиптической кривой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248761/" target="_blank">Браузер-в-браузере сделает сайт намного безопасней</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/248733/" target="_blank">Must-read книги за 2014 год по ИБ и программированию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248727/" target="_blank">Был получен несанкционированный доступ к более чем 20 000 камерам видео-наблюдения Москвы (теперь вы тоже)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/248703/" target="_blank">Горный ЦОД</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/248675/" target="_blank">Пытливый взгляд АНБ: что такое война за Интернет-безопасность (Часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/custis/blog/248649/" target="_blank">Подходы к контролю доступа: RBAC vs. ABAC</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/248637/" target="_blank">Взлом времени: более 30 000 серверов NTP еще уязвимы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cetrinenet/blog/248617/" target="_blank">Мониторинг серверов теперь стал проще с WinLogViewer.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248575/" target="_blank">One ring to rule them all или аутентификация через TeddyID</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/248435/" target="_blank">Пытливый взгляд АНБ: что такое война за Интернет-безопасность (Часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/248417/" target="_blank">«HR lab» — оценка квалификации специалистов в области информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248117/" target="_blank">evalidate: безопасная обработка пользовательских выражений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/248351/" target="_blank">Не все антивирусы одинаково полезны: вебинар Сергея Гордейчика и Владимира Кропотова</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248343/" target="_blank">Руководство по виртуализации PCI DSS. Часть 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248269/" target="_blank">Встраиваем бэкдор в публичный ключ RSA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/248271/" target="_blank">Электронная подпись по Российским нормативам: практическое использование на предприятиях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/248287/" target="_blank">Критическая уязвимость в PolarSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248285/" target="_blank">Бесплатный https сертификат + интеграция в Apache–TomCat</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/248225/" target="_blank">Расследование Яндекса: full disclosure о вирусе на Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/248201/" target="_blank">Информационная безопасность Cisco в 2014-м году: краткие итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/248205/" target="_blank">PHDays V: обнаружение ботнетов, трюки с NFC и соревнования «социальных инженеров»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248089/" target="_blank">Уязвимость MS14-063 в драйвере FastFat в ОС Windows. Разбор полетов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/248033/" target="_blank">Перманентный бан злоумышленников при помощи Fail2Ban + MikroTik</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247873/" target="_blank">Curve25519, EdDSA и Poly1305: Три обделенных вниманием криптопримитива</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/247967/" target="_blank">Блокировка iOS: не поддавайтесь на шантаж!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247953/" target="_blank">Автоматизация построения системы защиты информации в соответствии с приказом ФСТЭК №21</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/247699/" target="_blank">Знакомство с Intel® Active Management Technology 10</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247927/" target="_blank">Вот что будет, если установить топ-10 программ с Download.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/247723/" target="_blank">Курсы этичного хакинга и тестирования на проникновение. Новый набор</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/247709/" target="_blank">Будни багхантинга: еще одна уязвимость в Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247309/" target="_blank">«Идеальное» бросание монеты: The NIST Randomness Beacon</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/247835/" target="_blank">Azure Key Vault Preview</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/247019/" target="_blank">Электронная подпись: практическое использование на предприятии программного продукта CyberSafe Enterprise. Часть первая</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247737/" target="_blank">Мобильный трафик воруют из Adwords (редирект на некий recseek)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247715/" target="_blank">Эксплуатировать нельзя сообщать или трудности перевода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247707/" target="_blank">DDoS, в поисках силы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247541/" target="_blank">Безопасность Parse в iOS приложении</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/247625/" target="_blank">Практическая безопасность: тренды и прогнозы-2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247621/" target="_blank">Heartbleed и его друзья в 2015 году: как рекламная сеть ставит под угрозу посетителей сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247527/" target="_blank">Padding Oracle Attack или почему криптография пугает</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/247355/" target="_blank">Прокачай SNMP на устройствах Huawei и H3C</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247475/" target="_blank">Интерактивные карты кибератак в реальном времени</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/247471/" target="_blank">Сообщения в глубине: удивительная история подводного Интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247465/" target="_blank">imarker — коммерческая СОРМ-like веб-аналитика уже у вашего провайдера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/247377/" target="_blank">Apple исправила важную уязвимость в iCloud</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247279/" target="_blank">Большая подборка функций хеширования на Github</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247265/" target="_blank">Эволюция Zeus. Part III</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/247271/" target="_blank">PVS-Studio покопался во внутренностях Linux (3.18.1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/247129/" target="_blank">Вести с форума 31C3: новые происки АНБ, компьютерное управление мозгом и Интернет туалетов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247115/" target="_blank">Как я племянника с Днем рождения поздравлял</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/247041/" target="_blank">VNC-рулетка. Srsly?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/246841/" target="_blank">Windows 8.1 Kernel Patch Protection — PatchGuard</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246929/" target="_blank">Anonymous слил большой список паролей, кредитных карт, а также фильм “The interview” от Sony</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/246861/" target="_blank">Встраивание электронной подписи в системы с WEB-интерфейсом с помощью браузерного плагина и openssl</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/246607/" target="_blank">Mail.Ru объявляет о начале закрытого бета-тестирования двухфакторной аутентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/246855/" target="_blank">Bluetooth и другие способы взлома наручников</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kato/blog/246839/" target="_blank">Почему сотрудники крупных компаний используют для профессионального общения «левый» софт и что с этим делать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246755/" target="_blank">Изменение ролей пользователей 1С 8 (файловый вариант)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/246745/" target="_blank">Нестандартный Top10 событий в сфере IT-безопасности 2014 года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246695/" target="_blank">Уязвимости счетов PayPal, мошенничество refund transactions, взлом аккаунта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ifree/blog/246611/" target="_blank">Так может ли NFC Кольцо Всевластья разблокировать Android-телефон?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246615/" target="_blank">Почта РФ кишит уязвимостями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/246249/" target="_blank">Security Meetup в офисе Mail.Ru Group — как это было</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246467/" target="_blank">Простое решение для использования ЭЦП</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/246449/" target="_blank">Уязвимости публичных терминалов: как взломать велопрокат и поликлинику</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/246471/" target="_blank">Мой персональный Sony Hack</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246447/" target="_blank">Немного о том, как не надо защищать учетные записи в Active Directory</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246433/" target="_blank">Руководство по виртуализации PCI DSS. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245431/" target="_blank">Антивирусная утилита AntiSMS теперь удаляет Adware</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246377/" target="_blank">Уязвимость в Git: выполнение произвольных команд</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/244853/" target="_blank">ФБР: компанию Sony атаковали хакеры из Северной Кореи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246353/" target="_blank">Внедрение через URL: www.site.ru/?jn=xxxxxxxx</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/242603/" target="_blank">Криптографические решения. От облачной подписи к доверенной среде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/313030/" target="_blank">Лёгкая интеграция tor в android приложение на примере клиента для рутрекера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/solarsecurity/blog/313012/" target="_blank">DLP и защита инженерных данных от плагиата</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/312990/" target="_blank">ПО для шифрования VeraCrypt подверглось аудиту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275745/" target="_blank">Транспондер DST40: принцип работы, история появления и взлома, а также немного практики по брутфорсу</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payonline/blog/312414/" target="_blank">Пришло время бизнесу воспринимать селфи всерьез</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/312752/" target="_blank">Лучшие доклады Black Hat USA 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311978/" target="_blank">Сводная таблица РД ФСТЭК (до профилей защиты) по порядку и в разрезе грифов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312720/" target="_blank">Как влияют тренды кибербезопасности на рынок хищений денежных средств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312722/" target="_blank">Почему я больше не нажимаю кнопку «Add contact» в Telegram</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/312700/" target="_blank">Security Week 41: неделя патчей, 12-летняя уязвимость в sshd возвращается, StrongPity APT</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246279/" target="_blank">Steam Stealer или троян, крадущий вещи в Steam. История появления и схема работы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245935/" target="_blank">IPv6 SLAAC Attack</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/246197/" target="_blank">Сканеры безопасности: автоматическая валидация уязвимостей с помощью нечетких множеств и нейронных сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/246205/" target="_blank">JSOC: как готовить инциденты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246193/" target="_blank">О сертификации межсетевых экранов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246189/" target="_blank">Защита служебных учетных записей Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246175/" target="_blank">Троян, ворующий предметы из инвентаря Steam</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/246123/" target="_blank">Открытый рекурсивный DNS-сервер. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245925/" target="_blank">Квантмех для защиты пластиковых карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/246025/" target="_blank">Захватываем полный контроль над чужим облаком Digital Ocean (уязвимость в Doorkeeper)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245961/" target="_blank">Как я взломал Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/245885/" target="_blank">Как показать самые опасные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/245203/" target="_blank">Конференция ZeroNights 2014 — как все было</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245773/" target="_blank">Дурацкая атака на пароли BIOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/245759/" target="_blank">Google Chrome пометит HTTP-сайты как небезопасные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245717/" target="_blank">WiFi Pineapple Mark V: черный ящик для беспроводного перехвата</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245011/" target="_blank">No cON Name CTF 2014 Final</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245635/" target="_blank">Роскомнадзор сам нарушает 152 ФЗ РФ?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245537/" target="_blank">Стартовал краудсорсинговый перевод OWASP Testing Guide 4.0 на 30+ языков (в т. ч. и на русский)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/245485/" target="_blank">Microsoft и Adobe выпустили набор обновлений, декабрь 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245467/" target="_blank">Защита веб-приложения на Phalcon + AngularJS от CSRF атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245461/" target="_blank">При запуске реплеев игры World Of Tanks на вашем компьютере может исполняться произвольный код</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/web_payment_ru/blog/245445/" target="_blank">В системе защиты от подделки запросов PayPal обнаружена уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245435/" target="_blank">Анонимизация всего траффика через VPN + TOR/I2P. Собираем миддлбокс с нуля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245415/" target="_blank">6 способов: как добавить security для Rest сервиса в Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245365/" target="_blank">Как я потерял пароль от Android keystore, но потом смог восстановить с помощью Jetbrains Idea</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/e-Legion/blog/245367/" target="_blank">Современные способы аутентификации и безопасность iOS-устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245159/" target="_blank">Хакер нашел способ читать файлы на серверах Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/245113/" target="_blank">Мобильные телефоны и тотальная слежка АНБ: как это работает</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245073/" target="_blank">GitHub опять разблокировали</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/245017/" target="_blank">Повышение доверия к РОИ при сохранении секретности персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244991/" target="_blank">Краткое введение в доверительные отношения, или почему нельзя запускать вслепую без проверки скрипты из интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/244955/" target="_blank">﻿Новый GNS3 — шаг вперед или прыжок на месте?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/244897/" target="_blank">Как стать докладчиком на PHDays V</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244753/" target="_blank">Исследование причин аномального голосования на сайте РОИ или особенности электронной демократии в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244887/" target="_blank">WFC и полицейское расследование</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230965/" target="_blank">Руководство по виртуализации PCI DSS. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244869/" target="_blank">Краткая инструкция: GitHub через Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243915/" target="_blank">VPN в каждый дом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/244819/" target="_blank">DDoS-атака в обход балансировщика: защищайте свои cookie!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244813/" target="_blank">Github опять заблокирован</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244779/" target="_blank">Вышла новая версия reCaptcha API 2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kato/blog/244763/" target="_blank">Кому должны принадлежать сообщения пользователей мессенджера: Опыт Kato.im</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244741/" target="_blank">«Железная» уязвимость в DRAM позволяет изменить содержимое чужой памяти</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244735/" target="_blank">Безопасен ли Telegram? v2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244705/" target="_blank">Уязвимость отказа в обслуживании в OpenVPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/244559/" target="_blank">Краткая история хакерства. Рассказ от руководителя информационной безопасности Яндекса</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/244535/" target="_blank">Всемирный день информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/acronis/blog/244449/" target="_blank">Sync, share & secure – три в одном с помощью Acronis Access 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244457/" target="_blank">Модификация исходного кода android-приложения с использованием apk-файла</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/244447/" target="_blank">84% сайтов на WordPress могут быть взломаны: что дальше?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/244383/" target="_blank">IPv6 под прицелом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/web_payment_ru/blog/244301/" target="_blank">Несколько фактов о фроде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244255/" target="_blank">Facebook обновил пользовательское соглашение и собирается передавать данные третьим лицам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/244245/" target="_blank">Форум Positive Hack Days V: открываем двери сингулярности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/244159/" target="_blank">Атака на банкомат с помощью Raspberry Pi</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244143/" target="_blank">Обходим защиту iOS клиента Dropbox</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/244115/" target="_blank">Злоумышленники используют CVE-2014-6332</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244107/" target="_blank">PIN-код при оплате картой — точки над i</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dellemc/blog/244051/" target="_blank">Сертификация доступа: уменьшаем риски, вооружившись актуальными данными</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/243989/" target="_blank">PENTESTIT. Практическая информационная безопасность: итоги 2014 года, часть II</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/244073/" target="_blank">Троян Regin: кто шпионит за GSM через Windows?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244037/" target="_blank">SSL-сертификаты: всем, каждому, и пусть никто не уйдёт обиженным</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/244023/" target="_blank">CryptSync и GnuPG — возможности кастомизации и невозможность использования</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nordavind/blog/243885/" target="_blank">Развертывание IBM Security Network Protection в Open vSwitch</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/243947/" target="_blank">Статья про нетипичную эксплуатацию SQL инъекции и про трюк в sqlmap. А еще — про Counter Strike</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243895/" target="_blank">Безопасность Виртуализации. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243845/" target="_blank">Безопасность Виртуализации. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payanyway/blog/243741/" target="_blank">Карты, деньги, два… фактора</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/243697/" target="_blank">Безопасность 4G: захватываем USB-модем и SIM-карту с помощью SMS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/243463/" target="_blank">Защита личных фотоснимков на телефонах Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/243663/" target="_blank">Уязвимость в Android &lt; 5.0 (ObjectInputStream)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cloud4y/blog/243647/" target="_blank">Анти-DDoS Voxility: чему нас научила война пиццерий</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/243627/" target="_blank">Взгляд из Японии на аномалии российского трафика, ошибки ARM TrustZone, взлом смартфонов через NFC — что было на PacSec</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/243585/" target="_blank">Apple выпустила iOS 8.1.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243511/" target="_blank">Проверка уязвимости Masque в iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/first/blog/243487/" target="_blank">Установка, настройка и использование сканера уязвимостей chkrootkit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243419/" target="_blank">Тест Тьюринга на основе реальных поисковых запросов в Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/243377/" target="_blank">Приглашаем принять участие в Security Meet Up 4 декабря</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/242953/" target="_blank">Как и зачем «ломают» интернет-магазины</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/243323/" target="_blank">Mobile Pwn2Own 2014: итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/243279/" target="_blank">Apple прокомментировала ситуацию с уязвимостью Masque в iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sap/blog/243121/" target="_blank">Безопасная ABAP-разработка в SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243105/" target="_blank">Уязвимость в одном из сервисов Альфа-Банка позволяла просматривать выписки по любому клиенту</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/243083/" target="_blank">PENTESTIT. Практическая информационная безопасность: итоги 2014 года, часть I</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243009/" target="_blank">Уязвимость от разработчика в Raindrop.io</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/243047/" target="_blank">Уязвимость 19-летней давности позволяет захватить компьютер через Internet Explorer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/243023/" target="_blank">Почему Spritz стал столь популярным за последние несколько недель</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/243001/" target="_blank">Памятка: Как стартапам обеспечить защиту данных в облаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/242997/" target="_blank">Критическая уязвимость в Microsoft SChannel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238589/" target="_blank">Выбор поставщика решения двухфакторной аутентификации. Часть 1 из 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/redmadrobot/blog/242827/" target="_blank">Интервью: Тим Мессершмидт, PayPal</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/242803/" target="_blank">Защита АСУ ТП в России: исследуем новые требования ФСТЭК</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/first/blog/242865/" target="_blank">Установка, настройка и использование сканера уязвимостей сервера rkhunter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242799/" target="_blank">Перевыпускаем сертификат с SHA-2 — если Webnames не идет к Магомету…</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/242589/" target="_blank">Конференция 4SICS: уязвимый коллайдер, троян Havex и другие «русские угрозы»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242535/" target="_blank">Ricochet — анонимный бессерверный протокол передачи мгновенных сообщений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/first/blog/242493/" target="_blank">Как защитить свой Windows-сервер от уязвимости POODLE SSLv3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241295/" target="_blank">Как быстро настроить Антивирус Касперского на шлюзе Juniper SRX</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/242439/" target="_blank">Хакеры взломали более 3 млн. аккаунтов iTunes?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/319186/" target="_blank">Хакеры атакуют MongoDB: число скомпрометированных систем превысило 27 000</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319148/" target="_blank">Что делать, если у кабелей есть уши, или стеганографическое прокси</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318998/" target="_blank">VulnHub: Слепая эксплуатация и Брайнфак в DC416 Basement</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/319084/" target="_blank">Обещания Google начали сбываться — теперь сайты https помечаются как надёжные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316756/" target="_blank">Создание и тестирование Firewall в Linux, Часть 2.2. Таблицы Firewall. Доступ к TCP\IP структурам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/318968/" target="_blank">Безопасность в IoT: Архитектура системы безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318870/" target="_blank">У «Казаков» секретов нет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318850/" target="_blank">33C3 CTF Эксплуатируем уязвимость LaTeX'а в задании pdfmaker</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318814/" target="_blank">VulnHub: Разбор IMF 1 и очередное переполнение буфера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/318652/" target="_blank">CTFzone write-ups — Grand Finale</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/312698/" target="_blank">Проблемы безопасности IoT: исследователь обнаружил серьезные уязвимости в MatrixSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/312676/" target="_blank">Великая война хакеров 1990 года (Great Hacker War)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312654/" target="_blank">Декомпозиция blockchain</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312636/" target="_blank">Любой сайт может получить информацию о том, в каких популярных сервисах вы авторизированы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312634/" target="_blank">Специальные простые числа помогают пассивно прослушать протокол обмена ключами Диффи-Хеллмана</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/312606/" target="_blank">Защита от вымогателей: советы наших экспертов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312470/" target="_blank">Хранение пользовательских паролей в Google Chrome на Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/312432/" target="_blank">Интернет-провайдер оштрафован на £400 000 после хакерской атаки с утечкой данных клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/312428/" target="_blank">Microsoft исправила уязвимости в своих продуктах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/312234/" target="_blank">Криптономикон: великий баян, привет из 90-х и лучшая книга о технарях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242433/" target="_blank">Просмотр всех нажатий клавиш в Google Docs</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/242319/" target="_blank">ZeroNights 2014: взломай и получи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239097/" target="_blank">ИБ по-американски. Часть 4. Разбираемся с «подгонкой» и «перекрытиями» и завершаем этот обзор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242267/" target="_blank">Бесплатный Code signing для Open Source от Certum</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242197/" target="_blank">Cloud Connect: Приватный и Безопасный серфинг. Пока бесплатно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242175/" target="_blank">Facebook, скрытые сервисы и https-сертификаты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/242145/" target="_blank">Facebook официально доступен в Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/paysto/blog/242141/" target="_blank">«Спрячь за высоким забором… приватность»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/242027/" target="_blank">Вирус-вымогатель CryptoBot сдаёт своих жертв через Twitter</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sap/blog/242003/" target="_blank">Никакой несерьезности в вопросах безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/241935/" target="_blank">Видеонаблюдение в ЦОДах: совмещаем паранойю охраны с паранойей инженеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241854/" target="_blank">Жизнь печеньки-параноика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/vcstart/blog/241726/" target="_blank">«Cлед ведет в Россию»: российских хакеров обвинили во взломе систем НАТО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241720/" target="_blank">Способ удобного шифрования данных в облаке (собственными средствами)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241716/" target="_blank">Уязвимость в сервисе Find My Mobile позволяет злоумышленнику получить удаленный доступ к смартфону Samsung</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241708/" target="_blank">СОПКА: зачем ракетным войскам России «белые хакеры»?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237335/" target="_blank">Анонимизация в интернете и использование self-hosted сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/241221/" target="_blank">Криптографические решения. От криптопровайдеров до браузерных плагинов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241648/" target="_blank">Анализатор исходных кодов RATS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/241642/" target="_blank">ZeroNights 2014: запретных тем нет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/first/blog/241603/" target="_blank">Против кого дружат Google, Mozilla и Microsoft? Или SHA-1 уходит в прошлое</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/241559/" target="_blank">Гости программы «Корпоративные лаборатории тестирования на проникновение»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241547/" target="_blank">Outpost Security Suite 9.1 + RDP = глюк</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241293/" target="_blank">Проверка протокола SSL3 в 20 банк-клиентах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/241391/" target="_blank">Небольшой рассказ о BlackHat Europe 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/240655/" target="_blank">Вирусы. Вирусы? Вирусы! Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/241353/" target="_blank">Контроль уязвимостей в программных приложениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241345/" target="_blank">Pangu выпустила джейлбрейк iOS 8.1 без Cydia</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/securitycode/blog/241205/" target="_blank">Как vGate поможет в расследовании ИБ-инцидентов в виртуальной инфраструктуре</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241325/" target="_blank">ФБР обратилось к Конгрессу США с просьбой законодательно ослабить защиту iOS и Android устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241273/" target="_blank">Опубликован рейтинг стран, более всего страдающих от хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241257/" target="_blank">Делаем на основе Raspberry Pi и TOR анонимную точку доступа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241185/" target="_blank">Gmail добавил возможность аутентификации пользователя с Security Key</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241137/" target="_blank">Как Энакин Скайоуокер стал Дартом Вейдером. Вирус для Android в картинке .PNG</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/241113/" target="_blank">Этот пудель кусается: использование дыр в протоколе SSL 3.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/241081/" target="_blank">Батники против эксплойтов (версия для Windows XP)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/240389/" target="_blank">Проверьте своего хостера на уязвимость Shellshock (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/240995/" target="_blank">Курсы этичного хакинга и тестирования на проникновение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240993/" target="_blank">Китай осуществляет MiTM-атаку на пользователей iCloud</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/240923/" target="_blank">Особенности отражения DDoS атак и история атаки на один крупный банк</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240939/" target="_blank">Facebook запустил систему сбора и проверки данных скомпрометированных аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239165/" target="_blank">PassGenJS. Генерируем пароли в Javascript с указанием надёжности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240865/" target="_blank">ФБР против шифрования на смартфонах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238977/" target="_blank">ИБ по-американски. Часть 3. Что из себя представляет базовый набор контролей и как определять критичность систем?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240803/" target="_blank">Бесплатный Cryptic Disk 4 с поддержкой TrueCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240799/" target="_blank">История одного бага в автомате для видеопокера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240765/" target="_blank">OpenSSL закрыл четыре опасные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240763/" target="_blank">Изгоняем нечисть из ReadyNAS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240759/" target="_blank">Facebook удвоила антихакерскую премию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240753/" target="_blank">Машина плавающих опкодов. Теория</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240699/" target="_blank">О медицинской тайне или кому нужна информационная безопасность?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240721/" target="_blank">Очередная критическая уязвимость в Drupal 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240675/" target="_blank">Суд отклонил утверждение защиты о том, что ФБР нелегально взломало Silk Road</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ifube/blog/240641/" target="_blank">Облачный сервис контроля целостности файлов вебсайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240607/" target="_blank">Автоматический перебор комбинаций в механических сейфовых замках</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/stars_s/blog/240595/" target="_blank">Windows Server «10» Technical Preview — Failover Clustering и Storage Replica (регистрация на вебинар)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240521/" target="_blank">Тревожные симптомы Telegram</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240513/" target="_blank">Плавающие энумы в RayFoundation</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/240499/" target="_blank">Уязвимость SSLv3 POODLE — как BEAST, только проще</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/240445/" target="_blank">Новые уязвимости Windows используются злоумышленниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/centosadmin/blog/240425/" target="_blank">Простой способ дополнительной защиты: SSH — ALERT</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/240345/" target="_blank">Новая 0day уязвимость в Windows эксплуатируется in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/240307/" target="_blank">Искусственный интеллект, импортозамещение и другие особенности безопасности приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240291/" target="_blank">Брутфорсим EFI с Arduino</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240233/" target="_blank">Официальный интернет-магазин Panasonic пересылает пароль в открытом виде и в копию 3 адресатам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/240179/" target="_blank">Приглашаем на семинар «Практика выбора решений для защиты от угроз нулевого дня и целевых атак»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sap/blog/239553/" target="_blank">Безопасность SAP. Регулярно ли вы устанавливаете обновления?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240097/" target="_blank">Как защитить свои данные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/240051/" target="_blank">Простая реализация шифрования и расшифровывания файлов в Qt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239969/" target="_blank">Программа Digital Editions 4 «стучит» в Adobe обо всех открытых файлах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/230579/" target="_blank">Безумная тачка, полулегальный TPM и жидкий азот: чем запомнился NeoQUEST-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/e-Legion/blog/239707/" target="_blank">Трилатерация с iBeacons, безопасность iOS и мобильная реклама ВКонтакте на #MBLTDev</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239411/" target="_blank">Защита HTTP траффика с помощью Citrix Netscaler</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/239629/" target="_blank">Проверка библиотеки Network Security Services</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239567/" target="_blank">Взлом с помощью поиска, невнимательность и мой подельник GitHub</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239549/" target="_blank">Демонстрация уязвимостей в Liqpay</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239507/" target="_blank">Cloudflare включил бесплатный SSL для всех сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/239137/" target="_blank">Проверьте своего хостера на уязвимость Shellshock</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239395/" target="_blank">Уязвимость Yandex money или как восстановить платежный пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/239379/" target="_blank">Исследование: внутренние угрозы в крупных компаниях оказались опаснее, чем вирусы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239305/" target="_blank">Исходный код эксплойта для «неустранимой» уязвимости в USB-устройствах опубликован на GitHub</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238951/" target="_blank">ИБ по-американски. Часть 2. А можно поподробнее о NIST 800-53 и причём тут управление рисками?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239225/" target="_blank">P2P — Следующий этап развития информационных систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239287/" target="_blank">Закон Шнайера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239213/" target="_blank">Троян в highscreen, или как телефон начал творить чудеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238903/" target="_blank">Исправление уязвимости shellshock для устаревших систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/239009/" target="_blank">Две специальные модели разбиения чисел</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238831/" target="_blank">Передача файлов в изолированную виртуальную машину под управлением DOS с помощью… клавиатуры</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/238917/" target="_blank">Positive Education: научим практической безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/medgadgets/blog/238855/" target="_blank">Autothysis128t: SSD с очень серьезной системой защиты информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238713/" target="_blank">Исследуем китайские роутеры на RT5350</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238745/" target="_blank">Уязвимость в Akeeba Backup и Joomla!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/238711/" target="_blank">ZeroNights 2014 — hackquest</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/238641/" target="_blank">Apple исправила уязвимость Shellshock в OS X</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238619/" target="_blank">Перехват вызовов функций нативных библиотек в Android приложениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238565/" target="_blank">За нами следят или clickjacking для бизнеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238539/" target="_blank">Начало активного применения ShellShock</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237909/" target="_blank">Защищённый SMS Commander</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it/blog/238315/" target="_blank">Open source UTM на защите периметра сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238495/" target="_blank">Разрешите вас отадминить?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/312176/" target="_blank">ФСТЭК: требования к файрволам — 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/312072/" target="_blank">Квантовое хеширование. Лекция в Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/311954/" target="_blank">Досье на хакера: Phiber Optik</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311518/" target="_blank">Текст, которого нет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/312028/" target="_blank">Злоумышленники используют фальшивые приложения Google Play для обмана пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/311958/" target="_blank">Security Week 40: баг в systemd, 20 уязвимостей в роутере D-Link, взлом инсулиновых помп</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311930/" target="_blank">Yersinia — шифруем программы, тестируем антивирусы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/311906/" target="_blank">Американские спецслужбы арестовали возможного информатора хакеров Shadow Brokers</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/solarsecurity/blog/311770/" target="_blank">Доступность JSOC: показатели и измерение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311876/" target="_blank">Я милого узнаю по сетчатке: современные методы идентификации по биометрическим показателям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238245/" target="_blank">ИБ по-американски. Часть 1. Что такое NIST 800-53 и как выглядят контроли безопасности?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/238475/" target="_blank">Всё, что вы хотели знать об уязвимости Shellshock (но боялись спросить)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238463/" target="_blank">В поиске бесплатных билетов, исследование игры Аэрофлота</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238379/" target="_blank">Кого же блокирует китайский фаервол?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238303/" target="_blank">Fail2ban [incremental]: Лучше, быстрее, надежнее</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payture/blog/237803/" target="_blank">Как IT-мошенники разоряют предприятия в e-commerce, используя украденные данные банковских карт?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238235/" target="_blank">Полицейские дроны ищут незадекларированные особняки в Аргентине</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238219/" target="_blank">Роскомнадзор уведомил Facebook, Gmail и Twitter о необходимости регистрации в России в качестве «организаторов распространения информации»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238185/" target="_blank">Уязвимость в проверке подписей сертификатов в библиотеке NSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238159/" target="_blank">Вероятностный закон распределения длительности сеанса ИСЗ с наземным объектом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238155/" target="_blank">Подглядываем за пользователем через In-App на iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/238145/" target="_blank">Новая опасная уязвимость ShellShock позволяет атаковать множество устройств, от смартфонов до промышленных серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238117/" target="_blank">uLogin, как средство накрутки лайков клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238039/" target="_blank">Кевин Митник осваивает профессию будущего</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/238035/" target="_blank">Apple отзывает iOS 8.0.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238031/" target="_blank">jQuery.com взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238021/" target="_blank">CVE-2014-6271, CVE-2014-7169: удалённое выполнение кода в Bash</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/238009/" target="_blank">Меня попросили взломать программу на собеседовании. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/237981/" target="_blank">Атаки на SS7: вчера для спецслужб, сегодня для всех</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/stars_s/blog/237709/" target="_blank">Возвращение А. Кибкало — бесплатный вебинар по Storage Spaces — СХД на базе Windows Server 2012R2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237855/" target="_blank">Так ли приватен HTTPS?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237787/" target="_blank">Примеры поиска в Shodan</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237779/" target="_blank">Что делать с пыльным GPU, если ты — пентестер. Часть 1: Legacy ATI/AMD RADEON</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/237759/" target="_blank">Новое решение Cisco по безопасности следующего поколения (NGFW + NGIPS + AMP)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237755/" target="_blank">Власти требуют у студентов исходный код js-майнера Tidbit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237731/" target="_blank">Совет безопасности передумал сегодня обсуждать отключение России от Интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237673/" target="_blank">Немного о Tor и русскоязычном .onion-пространстве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237565/" target="_blank">Подарок от VmWare или как заблокировать свой сервер на хостинге</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237469/" target="_blank">Меня попросили взломать программу на собеседовании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/237387/" target="_blank">Apple выпустила набор обновлений для своих продуктов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237379/" target="_blank">Новая версия Android будет шифровать данные пользователя по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cjdns/blog/237365/" target="_blank">Как получать информацию, если российский сегмент интернета будет отрезан от глобального</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237347/" target="_blank">Совет безопасности хочет изолировать Россию от глобального Интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/237289/" target="_blank">Security-фиксы iOS 8</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237251/" target="_blank">Apple перестала хранить криптоключи пользователей на своём сервере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236901/" target="_blank">Вероятностный закон распределения длительности сеанса искусственного спутника Земли с наземным объектом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/237207/" target="_blank">Анализ Simplelocker-a — вируса-вымогателя для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237225/" target="_blank">BitTorrent Bleep: защищенный мессенджер от BitTorrent</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/237171/" target="_blank">PT Reporting Portal: как увидеть главные угрозы безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237145/" target="_blank">Что на самом деле является аргументом о стойкости систем аутентификации по голосу?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237045/" target="_blank">Хакеры сыграли в Doom на принтере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/237019/" target="_blank">Tor Hidden Service как техника Nat Traversal</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236997/" target="_blank">Как компания D-Link предоставляет исходные коды прошивок</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/236909/" target="_blank">WikiLeaks публикует список стран-клиентов FinFisher</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236879/" target="_blank">Как не надо делать федеральные информационные системы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/235641/" target="_blank">Bootstrapping мобильного приложения, или как немного сэкономить на разработке и публикации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236835/" target="_blank">Простые вещи (безопасность e-mail)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236759/" target="_blank">Анализ утёкших паролей Gmail, Yandex и Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236727/" target="_blank">Половина сайтов силовых структур России использует публичные почтовые серверы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236771/" target="_blank">Пара полезных команд, которые могут пригодиться при DDoS и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/236725/" target="_blank">Приходите на турнир по информационной безопасности и конференцию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/236597/" target="_blank">Немного о нас</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/236587/" target="_blank">Google: только 2% указанных злоумышленниками аккаунтов действительно рабочие</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236577/" target="_blank">Социальная инженерия и доверие, как человеческий фактор</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smartgadget/blog/236553/" target="_blank">29% россиян верят, что онлайн-сервисы надежно охраняют их пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/236347/" target="_blank">JSOC: как измерить доступность Security Operation Center?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/236411/" target="_blank">Направленные ИТ-атаки в сфере крупного бизнеса: как это происходит в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236387/" target="_blank">Tabnabbing: экстравагантный фишинг</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/236331/" target="_blank">Microsoft выпустили набор обновлений, сентябрь 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236287/" target="_blank">Хакер/фрикер 1903 года: взлом «защищенного» беспроводного канала связи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236283/" target="_blank">А теперь и gmail.com: в сеть выложена база на 5 000 000 адресов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236209/" target="_blank">Биометрическая система на мобильном телефоне</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236169/" target="_blank">Коллективное расследование: как появилась база данных с паролями аккаунтов «Яндекса»?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236131/" target="_blank">Взломаны почта и другие аккаунты Сатоси Накамото</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/230743/" target="_blank">Про утечку базы паролей пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236113/" target="_blank">Response Policy Zones (RPZ) на страже сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/236077/" target="_blank">В сеть попала база 4,5 млн паролей от почтовых ящиков Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/236007/" target="_blank">1 000 000 уже неработающих паролей в открытом доступе. Как мы защищаем пользователей Яндекса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235949/" target="_blank">1000000 паролей от почтовых ящиков Яндекса утекли в сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235857/" target="_blank">Официальный анонс MEGAsync клиента под Линукс</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235841/" target="_blank">Грозный пират утонул из-за протекающей капчи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235713/" target="_blank">SMS-вирус под ОС Android или «Привет :) Тебе фото…»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235703/" target="_blank">Noise Security Bit #9 (о Black Hat 2014 и Defcon 22)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/witget/blog/235671/" target="_blank">Утечка частных фотографий знаменитостей: подробное расследование австралийского разработчика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235609/" target="_blank">Amazon выпустил фикс для инстансов работающих под Windows Server 2012 R2, предотвращающий потерю сетевых подключений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/235539/" target="_blank">Apple: iCloud ни при чем, знаменитости пали жертвой направленных атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235237/" target="_blank">Хосты-однодневки в DNS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235487/" target="_blank">Как мы (почти) победили DirCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235449/" target="_blank">Хакеры использовали сайт Google для отладки вредоносного софта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235247/" target="_blank">Типичные ошибки при защите сайтов от CSRF-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/235203/" target="_blank">SAP SDM. 6 букв — много проблем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235311/" target="_blank">0day уязвимость в приложениях для iOS: Gmail, Google+ и FB Messenger</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/shopozzcom/blog/235273/" target="_blank">Разблокировка телефона с помощью NFC-клипсы: игра в одно касание</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235287/" target="_blank">Error based MySQL injection или не надо ругаться</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235197/" target="_blank">Насколько опасен открытый рекурсивный DNS-сервер?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/235235/" target="_blank">Apple исправила важную уязвимость в iCloud</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235139/" target="_blank">«Гражданское» электромагнитное оружие</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200256/" target="_blank">Откровенные фото Дженнифер Лоуренс и еще десятков знаменитостей утекли через iCloud</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/235063/" target="_blank">Microsoft отказалась подчиниться судебному ордеру и выдать письма пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234957/" target="_blank">Спецназ задержал игрока в Counter-Strike во время трансляции игры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234923/" target="_blank">Новое обновление Microsoft KB2993651 тоже может вызывать BSOD</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/234845/" target="_blank">Исследование: самыми уязвимыми для хакеров оказались сайты на PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234833/" target="_blank">Как я банку на баги указывал или Об утечке данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/celecom/blog/234803/" target="_blank">Ваши анонимные публикации в Secret все-таки не анонимны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234761/" target="_blank">Опубликованы инструкции Uber по саботажу сервиса Lyft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234719/" target="_blank">Секреты Metasploit</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/234713/" target="_blank">64-битный Chrome вышел в релиз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234663/" target="_blank">Как я позорно деактивировал ботнет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234615/" target="_blank">Поисковая система в АНБ содержит более 850 млрд записей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234277/" target="_blank">Факторизация и классы чисел натурального ряда</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/311666/" target="_blank">Многоуровневый подход NoSQL к обеспечению безопасности больших данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/311842/" target="_blank">Google исправила уязвимости в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/311796/" target="_blank">Банковский троян Qadars вернулся и атакует банки в Великобритании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311782/" target="_blank">Цифры растут: зарегистрирована атака в 620 Gbps</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/311754/" target="_blank">Проблема “admin:password”: стандартные пароли помогли создать ботнет из почти 400 000 IoT-устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/311616/" target="_blank">Браузеры и app specific security mitigation. Часть 2. Internet Explorer и Edge</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311630/" target="_blank">суБД — Безопасность Данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/simnetworks/blog/311670/" target="_blank">Антивирусы для Android могут не увидеть вирус — исследование и «Прачечная вирусов»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/311622/" target="_blank">Атаки на банкоматы: прошлое, настоящее и будущее</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aladdinrd/blog/311596/" target="_blank">Почему традиционная защита от кражи денежных средств в системах ДБО уязвима</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/232207/" target="_blank">Получаем системные привилегии с помощью ошибок в NTVDM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234467/" target="_blank">Cuckoo – собственная автоматизированная лаборатория анализа вредоносных файлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/234491/" target="_blank">Ввоз средств шифрования в Россию: разоблачая мифы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233905/" target="_blank">Линейный криптоанализ для чайников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234391/" target="_blank">Коллективный иск против Facebook поддержали более 60 000 человек</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234381/" target="_blank">Вебинар Крикета Ли — (со)автора книг о DNS и Bind. Безопасность DNS: угрозы и решения, Best Practices</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234359/" target="_blank">Потрогай, чтобы взломать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234331/" target="_blank">Как была взломана Gamma International</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234299/" target="_blank">Hack in Paris 2014. Европейские приключения хакеров в Диснейленде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234191/" target="_blank">DEF CON CTF 22 Final</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234209/" target="_blank">Google разработает детские аккаунты для Youtube и Gmail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/234067/" target="_blank">Теперь любой сайт может узнать адрес вашей страницы в VK?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/234007/" target="_blank">Книги о кибербезопасности: 5+ рекомендаций наших экспертов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/233891/" target="_blank">Большой рассказ про BlackHat USA'2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233545/" target="_blank">Как Митник троллил ФБР. Статьи на Хабр из лагеря для школьников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233971/" target="_blank">Руководство по установке и настройке OpenVPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233955/" target="_blank">Как Яндекс.Метрика продает вашим конкурентам «обобщенную статистическую информацию» вашего сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233735/" target="_blank">Получение CISA. История одного сертификата и помощь интересующимся</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233947/" target="_blank">Behaviosec: идентификация пользователя мобильного приложения по поведенческим параметрам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/233885/" target="_blank">JSOC: опыт молодого российского MSSP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233689/" target="_blank">Ученые из Стэнфорда создали приложение, позволяющее подслушивать с помощью гироскопа Android-смартфона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233687/" target="_blank">Минкомсвязи хочет увеличить количество программистов в России с 350 тыс до 1 млн</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/233671/" target="_blank">Даже неопытный хакер может взломать 8 из 10 крупных компаний</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233357/" target="_blank">Немного об организации отдела информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233411/" target="_blank">Идея на тему генерации и запоминания надёжных паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/233573/" target="_blank">Microsoft советует воздержаться от установки обновления MS14-045</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233533/" target="_blank">Все сломано</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233503/" target="_blank">Идентификация загружаемых модулей ядра Linux [ч.1]: исходные тексты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233485/" target="_blank">Twitter собирается объявить войну «Троллям»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233457/" target="_blank">Tortilla — весь TCP и DNS трафик из виртуальной машины через TOR</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/synology/blog/233369/" target="_blank">Synology призывает пользователей обновить ОС DSM для защиты от вируса SynoLocker, угрожающего старым версиями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233363/" target="_blank">Получение пароля коммутаторов D-Link на примере DGS-1500</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233331/" target="_blank">Американские хакеры нечаянно отключили интернет в Сирии в 2012-м году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233315/" target="_blank">Построение СУИБ: С чего начать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233305/" target="_blank">Взломан твиттер Дмитрия Медведева</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233263/" target="_blank">Парольная защита и биометрическая идентификация — сравнение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/233185/" target="_blank">Microsoft и Adobe выпустили набор обновлений, август 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233201/" target="_blank">Давайте, наконец, задумаемся о том, что мы подразумеваем, когда говорим «активы» и «три защищаемых свойства информации»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233177/" target="_blank">В обновленном Android Device Manager появилась функция «позвонить владельцу»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233171/" target="_blank">Ряд региональных провайдеров блокирует свои общественные Wi-Fi точки. Доступ только по своему логину</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233159/" target="_blank">Немного поговорим о дополнении для FireFox HttpUserAgentCleaner</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/233105/" target="_blank">Владельцы сайтов будут обязаны взаимодействовать с ФСБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/232999/" target="_blank">Приглашаю на большой CTF-турнир по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232931/" target="_blank">Хакеры воровали криптовалюту подменой BGP-анонсов mining pool'ов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/232863/" target="_blank">Как и зачем защищать доступ в Интернет на предприятии — часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/232563/" target="_blank">Атаки шейпинга в сетях low latency или почему Tor не спасает от спецслужб</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232723/" target="_blank">Шпионское ПО официально использует полиция в 30 странах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232705/" target="_blank">В Украине не будут блокировать сайты?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232643/" target="_blank">Бесплатный Wifi в России теперь по паспорту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232629/" target="_blank">Google повышает сайты с HTTPS в выдаче</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232601/" target="_blank">Крупная уязвимость в WordPress и Drupal может положить сайт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232549/" target="_blank">Немножко уязвимостей в OpenSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232545/" target="_blank">Бесплатная расшифровка файлов CryptoLocker</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232343/" target="_blank">С днем рождения, Кевин Митник!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232459/" target="_blank">Как не остаться голодным или безлимитный проход в столовую</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232443/" target="_blank">Два примера коммерческой цензуры: за негативные отзывы отель штрафует посетителей, а ресторан выигрывает в суде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232405/" target="_blank">В помощь коллегам «безобразникам»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232391/" target="_blank">Визуализация кибератак в реальном времени</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232359/" target="_blank">Сканирование почты. Не зашел ли Google слишком далеко?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232353/" target="_blank">Социальная инженерия на практике: «физический доступ» на закрытую конференцию Кевина Митника</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232159/" target="_blank">Ladies of Warez</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232157/" target="_blank">Генерация xkcd паролей на PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232129/" target="_blank">И опять атака на сайты Wordpress — перебор + XMLRPC</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/228997/" target="_blank">Разделяй и властвуй: как мы реализовывали разделение сессий на портале Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/232053/" target="_blank">Как совместить приятное с полезным (анонимность и приватность) в email-е</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/likeastore/blog/231917/" target="_blank">Безопасное развертывание ElasticSearch сервера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231887/" target="_blank">Pluso начал размещать скрипты и картинки на сторонние ресурсы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231849/" target="_blank">Старый трюк — работает всегда?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231795/" target="_blank">Открыта регистрация Официальных Блогеров™ в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/231783/" target="_blank">Как мы проверяем безопасность мобильных приложений, и почему это непросто. Безопасность в Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/231769/" target="_blank">Google выпускает в бету 64-битную версию веб-браузера Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/231427/" target="_blank">Анализ sms-бота для Android. Часть II</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/231551/" target="_blank">«Корпоративные лаборатории PentestIT» — программа профессиональной подготовки в области ИБ и тестирования на проникновение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231571/" target="_blank">Британский парламент выступил против «права быть забытым»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231561/" target="_blank">Остросюжетная история об отсутствии синхронизации данных разных служб в Google без счастливого финала</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231521/" target="_blank">Глава Минкомсвязи предложил Apple и SAP раскрыть свои исходные коды российским специалистам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231491/" target="_blank">Защищаем сеть L2 коммутаторами</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/netwrix/blog/231483/" target="_blank">Аудит почтовых ящиков Exchange. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231369/" target="_blank">Обзор новых функций Intercepter-NG</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/231425/" target="_blank">Анализ sms-бота для Android. Часть I</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231337/" target="_blank">Какую архитектуру IM вы считаете приемлемой?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/231267/" target="_blank">Сказка про белого бычка или как оставаться невидимым за стеклом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/at_consulting/blog/231261/" target="_blank">Ruby и криптоалгоритмы ГОСТ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231253/" target="_blank">Что есть общедоступная информация?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231165/" target="_blank">Apple не следит, а помогает пользователям, с помощью скрытых сервисов на мобильных устройствах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/231003/" target="_blank">Microsoft усиливает иммунитет Internet Explorer к атакам use-after-free</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231019/" target="_blank">Команда IM+ выпустила защищенный мессенджер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/231015/" target="_blank">Популяризация информационной безопасности через мультики</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/230995/" target="_blank">Шифровальщик Android/Simplocker нацелился на англоговорящих пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230961/" target="_blank">Немного Tor/I2P/Tails/СОРМ-3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230923/" target="_blank">МВД РФ объявило конкурс, целью которого является «взлом» TOR</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230921/" target="_blank">Ещё одна причина переходить на SSL, или 133 КБ не лишние</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230605/" target="_blank">Controls of C.I.A</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230771/" target="_blank">Книги по информационной безопасности (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230747/" target="_blank">Реализация метода Куттера-Джордана-Боссена в MATLAB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/229849/" target="_blank">Можно ли украсть деньги из мобильного банкинга? Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230735/" target="_blank">Игрища с сервером jabber.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230727/" target="_blank">Подписан закон о хранении персональных данных российских интернет-пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/230695/" target="_blank">Двухфакторная аутентификация: еще раз о рисках при использовании SMS и голосовых вызовов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/230143/" target="_blank">vPath или как создать сервисную цепочку в среде виртуализации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/first/blog/311584/" target="_blank">О взломе серверов FirstVDS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/311552/" target="_blank">Исходный код составляющих IoT-ботнета Mirai выложен в свободный доступ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311492/" target="_blank">Обходим детектирование виртуальной машины программами в VMWare</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/311438/" target="_blank">Security Week 39: взлом Yahoo, брутфорс бэкапов iOS 10, макромалварь скрывается от исследователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/311428/" target="_blank">Zerodium повысила сумму вознаграждения за удаленный jailbreak для iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/311408/" target="_blank">Критическая уязвимость библиотеки OpenSSL позволяет проводить DoS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/311374/" target="_blank">Результаты летней стажировки в Digital Security. Отдел исследований</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virgilsecurity/blog/311200/" target="_blank">Format preserving encryption или как правильно шифровать номера кредиток</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311366/" target="_blank">Позволит ли формальная верификация кода микроядра создавать сверхнадежные ОС</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311368/" target="_blank">Как не надо делать сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230679/" target="_blank">Исследователи из Принстона обнаружили «теневой» инструмент идентификации пользователей в плагине AddThis</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230645/" target="_blank">Области применения гомоморфного шифрования</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/230583/" target="_blank">Эксперимент в Яндексе. Как идентифицировать взломщика с помощью машинного обучения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/230575/" target="_blank">Контролируемые счетчики в Traffic Inspector: держим мегабайты в ежовых рукавицах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230469/" target="_blank">Взламываем Asus RT-AC66U и подготавливаемся к SOHOpelesslyBroken CTF</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230543/" target="_blank">Власти штата Нью-Йорк разработали правила для компаний, работающих с Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/230515/" target="_blank">Как и зачем защищать доступ в Интернет на предприятии — часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230467/" target="_blank">ФСБ и данные пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230339/" target="_blank">Сотрудники АНБ тоже развлекаются на работе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/billing/blog/230267/" target="_blank">Настойка можжевельника: готовим Juniper SRX. Часть 2: IPSec</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230281/" target="_blank">Bing стал следующим поисковиком, в котором можно запросить удаление поисковых результатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230273/" target="_blank">Швейцарский нож британских спецслужб: набор инструментов для ведения кибервойн</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/230167/" target="_blank">MAYHEM — многоцелевой бот для *NIX-серверов. Расследование Яндекс.Безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230149/" target="_blank">OpenVPN Access Server Desktop Client уязвим</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230121/" target="_blank">О «Цифровой крепости» и журналистах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/230055/" target="_blank">Google анонсирует Project Zero</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/230049/" target="_blank">Собираем в команду «Project Zero» специалистов по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/230043/" target="_blank">Программа стажировки «Zero Security:A» — практика этичного хакинга для начинающих</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230039/" target="_blank">Неспортивная война: как использовать реестр запрещенных сайтов в бизнес-интересах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/230037/" target="_blank">TOX — Защищенный мессенджер добрался до Альфа версии (Для всех платформ)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/web_payment_ru/blog/229699/" target="_blank">Квантовые деньги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/229479/" target="_blank">Разбор заданий конкурса WAF Bypass на PHDays IV</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/229719/" target="_blank">Шифрование облачных сервисов в компаниях и организациях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229639/" target="_blank">Rosetta Flash — кодирование SWF для вызова из JSONP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229557/" target="_blank">[Перевод] Конфиденциальность в офисе: где черта, которую не стоит пересекать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/229525/" target="_blank">Cisco Identity Services Engine</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229431/" target="_blank">С 1 августа интернет в России станут блокировать целыми подсетями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/229373/" target="_blank">Можно ли украсть деньги из мобильного банкинга? Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229415/" target="_blank">5 проектов криптовалют, нацеленных на анонимность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229377/" target="_blank">Статистика применяемых средств блокирования сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229343/" target="_blank">Что к чему в “NGFW | NGIPS | UTM”</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229349/" target="_blank">Детальная фотография дата-центра АНБ передана в общественное достояние</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229303/" target="_blank">Обнаружена уязвимость в подсистеме ptrace ядра Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229289/" target="_blank">Режим сброса смартфона к заводскому состоянию — не гарантия удаления личной информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/229263/" target="_blank">Вход в web-приложение с использованием распознавания лица</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/228681/" target="_blank">Вирусы. Вирусы? Вирусы! Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/229195/" target="_blank">Обзор межсетевого экрана и системы предотвращения вторжений нового поколения SourceFire FirePower</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229185/" target="_blank">NIC India выдал цифровые сертификаты на домены Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/229171/" target="_blank">Microsoft и Adobe выпустили набор обновлений, июль 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229165/" target="_blank">Вооружённые грабители ограбили завод Samsung на 6 миллионов долларов, украв 40 тысяч устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229157/" target="_blank">TrulySecure: биометрическая аутентификация пользователя для мобильных устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/229135/" target="_blank">Разбор заданий конкурса Hash Runner на PHDays IV</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/229073/" target="_blank">Сетевая телеметрия Cisco против киберугроз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229049/" target="_blank">Каждый сможет взломать Tor за 3000$</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/229013/" target="_blank">На рейсы в США запретят проносить разряженные телефоны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228971/" target="_blank">Tor Relay за пять минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/228955/" target="_blank">Учимся безопасности: самые популярные вебинары</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228833/" target="_blank">День рождения Ади Шамира. Визуальная, геометрическая и нейрокриптография</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228735/" target="_blank">EFF подал в суд на АНБ за неразглашение 0day-уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228435/" target="_blank">Спираль Улама, области запрета простых чисел</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/beeline/blog/228623/" target="_blank">Платные подписки и платные контент-услуги сотовых операторов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228689/" target="_blank">Запрет хранения данных россиян на зарубежных серверах: что будет после 1 сентября 2016 года?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228665/" target="_blank">АНБ следит за теми, кто интересуется Linux и информационной безопасностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228633/" target="_blank">С днем рождения, Джулиан Ассанж</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228617/" target="_blank">Легальный Clickjacking ВКонтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/228595/" target="_blank">Чем опасны «умные» электросети</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/webnames/blog/228557/" target="_blank">Просроченный домен — мишень для хакера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228539/" target="_blank">Cisco убрали backdoor из VoIP и Jabber-контроллера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228507/" target="_blank">7 вещей, которые необходимо знать о Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228341/" target="_blank">Подмена родительской страницы на примере ask.fm</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228481/" target="_blank">Службы Dyn-DNS: Microsoft блокирует «хороших» и «плохих» пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228449/" target="_blank">Смартфон может считать пароль с экрана из отражения в Ваших глазах, а так же отпечатки пальцев</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/228427/" target="_blank">Волшебная формула или как увидеть угрозу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228339/" target="_blank">Настройка ModSecurity</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228331/" target="_blank">Построение собственной коммуникационной сети поверх I2P</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228315/" target="_blank">Как я поборол DDoS за 15 минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228305/" target="_blank">Определитель типа блокировки сайтов у провайдера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/228297/" target="_blank">Apple выпустила набор обновлений для своих продуктов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228219/" target="_blank">Эти чертовы инкрементальные айдишники</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/228217/" target="_blank">Apple исправляет уязвимости в iOS 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228103/" target="_blank">Web Application Firewall (ModSecurity) в действии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228137/" target="_blank">Чарльз Херцфилд: директор DARPA и крестный отец ARPANET</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227747/" target="_blank">Application Porno или как найти секреты в мобильных приложениях и вынести всё</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228069/" target="_blank">Yii 1.1.15 (исправление безопасности)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/228063/" target="_blank">Опыт проверок Роскомнадзором операторов персональных данных за последний год</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/227537/" target="_blank">«Отмороженный» компьютер и полезный «Хрюкер»: чем удивит NeoQUEST-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227817/" target="_blank">Выбираем защищенный IM для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227805/" target="_blank">Дата судного дня или Microsoft наносит ответный удар</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227689/" target="_blank">Пароль от Wifi-сети центра обеспечения безопасности ЧМ 2014 транслировался на экран и попал на фото местной газеты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227657/" target="_blank">Органам власти в Иркутской области запретили пользоваться Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227575/" target="_blank">ProtonMail или что же это на самом деле?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/227563/" target="_blank">Программа стажировки «Zero Security:A» — практика этичного хакинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/227497/" target="_blank">Критическая уязвимость OpenVZ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227405/" target="_blank">Code Spaces — всё</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/istbudget/blog/227267/" target="_blank">О том, как стартап может вылететь из индекса в одночасье</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227035/" target="_blank">Алан Тьюринг, Винт Серф и Джосс Уидон</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/227245/" target="_blank">«Безумный дом» на PHDays: киберугрозы обычной квартиры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227163/" target="_blank">Симбиоз: после заражения троян начинает защищать систему от других зловредов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mosigra/blog/225611/" target="_blank">Безопасность магазина в рознице: основные атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227053/" target="_blank">Приложение «Yo», попавшее в топ-10 приложений App Store в США, взломано студентами колледжа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/227041/" target="_blank">Уязвимость в BMC-контроллере Supermicro позволяет получить доступ к паролям управляющего интерфейса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226993/" target="_blank">Всплеск brute-force атак направленный на легко подбираемые доступные для записи snmp community</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/226977/" target="_blank">Прослушка украинских мобильников: как это сделано и как защититься</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226859/" target="_blank">Реализация схемы разделения секретной визуальной информации в MATLAB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/226817/" target="_blank">Яндекс и безопасность. Как мы изучали и обезвреживали обёртки (агрессивные adware)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/226803/" target="_blank">PHDays IV CTF: как это было</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226793/" target="_blank">Как сервисы-рассылки относятся к правилам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/226699/" target="_blank">Cisco вновь выходит в сегмент защиты персональных компьютеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226679/" target="_blank">Еще один способ перехвата трафика через ARP Spoofing</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/istbudget/blog/226613/" target="_blank">Аккредитация на ЭТП — для тех, кому надо</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/311242/" target="_blank">Microsoft представила защитную технологию Windows Defender Application Guard для веб-браузера Edge</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/311188/" target="_blank">ФСТЭК: требования к файрволам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/e-Legion/blog/311126/" target="_blank">Как это было: раскрываем детали Droidcon Moscow 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/311102/" target="_blank">Спецслужбы и не только: как защитить свое приложение от бэкдоров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/311076/" target="_blank">Безопасность интернета вещей: прогресс, хайп и головная боль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gotech_vc/blog/311026/" target="_blank">Где распознают лица</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/310926/" target="_blank">Безопасность Android-приложений. Лекция в Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/310950/" target="_blank">Драйвер компьютерной игры Street Fighter V отключает встроенный механизм защиты Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310944/" target="_blank">После крупнейшей кражи данных в истории на Yahoo! обрушились еще «33 несчастья»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310922/" target="_blank">40% организаций хранит администраторские пароли в таблицах и текстовых файлах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226431/" target="_blank">Wi-Fi сети: проникновение и защита. 3) WPA. OpenCL/CUDA. Статистика подбора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226605/" target="_blank">Людей гораздо проще заразить вредоносным ПО, если заплатить им пару центов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226593/" target="_blank">Уязвимость OpenSSL CCS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mosigra/blog/225607/" target="_blank">Безопасность покупателя в рознице: что надо знать лично вам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/226401/" target="_blank">На PHDays IV взломали «умный город»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/226393/" target="_blank">Шифрование резервного копирования на облачных сервисах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226379/" target="_blank">Оказалось, что Xbox One включается, когда слышит свою рекламу по телевизору</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226321/" target="_blank">Спидран по 13 уязвимостям на сайтах. Основные понятия, и средства защиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/226189/" target="_blank">Реинкарнация NTLM-relay или как стать администратором домена за 1 минуту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/226089/" target="_blank">un1c0rn, «Google для уязвимостей»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225963/" target="_blank">Атака на чёрный ящик. Реверс-инжиниринг виртуализированного и мутированного кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225975/" target="_blank">Раскрывая секрет. Архитектура Secret</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/225955/" target="_blank">Как мы реализовали DKIM в «Mail.Ru для бизнеса»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/225933/" target="_blank">IBM получила патент на новую технологию борьбы с интернет-мошенничеством</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225921/" target="_blank">Полиция арестовала двух русских хакеров, использовавших функцию Find my iPhone для вымогательства</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/225903/" target="_blank">Microsoft и Adobe выпустили набор обновлений, июнь 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/225503/" target="_blank">Применение двухфакторной аутентификации при подключении к 1С</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infotecs/blog/225817/" target="_blank">ИнфоТеКС Академия запускает конкурс «Прозрачная безопасность»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225781/" target="_blank">В Вашингтоне насчитали ущерб от киберпреступности на 0,5% мирового ВВП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225483/" target="_blank">Wi-Fi сети: проникновение и защита. 2) Kali. Скрытие SSID. MAC-фильтрация. WPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225581/" target="_blank">Бесплатные SSL-сертификаты для проектов Open Source</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225575/" target="_blank">«Кто я?» — чтение мыслей и никакого мошенничества (посмотрите исходник)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225539/" target="_blank">Как IPv6 помогает роутеры ломать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/225543/" target="_blank">Как разрабатывать безопасные приложения под Android. Семинар в Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225269/" target="_blank">SQL Injection для eBay</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/222009/" target="_blank">Доклады и конкурсы на NeoQUEST-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225425/" target="_blank">Июньская уязвимость в ядре Linux: подсистема futex. Возможность локального повышения привилегий. CVE-2014-3153</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225381/" target="_blank">OpenSSL: новая уязвимость: возможность выполнить MITM атаку (CVE-2014-0224)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/225353/" target="_blank">Разбор заданий конкурса «Конкурентная разведка» на PHDays IV</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219911/" target="_blank">Криптографию — ФСТЭКу!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225053/" target="_blank">Менеджеры паролей — краткий обзор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225307/" target="_blank">Сувениры от EFF для владельцев рилеев Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224803/" target="_blank">Анализ безопасности сетевых Unity3D игр в VKontakte</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225147/" target="_blank">Google предложит пользователям GMail использовать end-to-end шифрование</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225083/" target="_blank">5 июня 2014 года — всемирный день против интернет-слежки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/225077/" target="_blank">Автор банковского трояна Zeus объявлен в розыск</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/225059/" target="_blank">Эксплуатация концептуальных недостатков беспроводных сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224955/" target="_blank">Wi-Fi сети: проникновение и защита. 1) Матчасть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176093/" target="_blank">Основы безопасности операционной системы Android. Безопасность на уровне Application Framework. Binder IPC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224895/" target="_blank">Основные международные стандарты и лучшие практики проведения аудита информационных технологий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224821/" target="_blank">Выводим MySQL из окружения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224813/" target="_blank">Право «Быть забытым» Google'ом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kidsreview/blog/224797/" target="_blank">Подмена (встраивание) спам-ссылок на страницы сайта плагинами браузеров, cpatext, Content-Security-Policy</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224773/" target="_blank">XSS-game от Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/224547/" target="_blank">Об анализе исходного кода и автоматической генерации эксплоитов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224523/" target="_blank">Выбор параметров шифра RSA и возможные последствия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224491/" target="_blank">Сайт TrueCrypt сообщает о закрытии проекта и предлагает переходить на BitLocker</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224335/" target="_blank">Использование Tomoyo Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224351/" target="_blank">Опасный getimagesize() или Zip Bomb для PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224317/" target="_blank">Форум avast! подвергся взлому</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224307/" target="_blank">Twitter передал шести университетам всю базу твитов с 2006 года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200260/" target="_blank">Продлеваем получение обновлений безопасности для Windows XP еще на 5 лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/beeline/blog/224245/" target="_blank">Антивирус для всех абонентов «Билайн»: тесты на приложениях для слежки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/224147/" target="_blank">Лучшие доклады PHDays IV: слежка, взлом и национальные особенности кибервойны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224063/" target="_blank">Взламываем D-Link DSP-W215 Smart Plug: Опять, снова, еще раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/224055/" target="_blank">Активное шумоподавление звука затвора в камере мобильного устройства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223991/" target="_blank">Взламываем D-Link DSP-W215 Smart Plug. Снова и опять</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223973/" target="_blank">Взламываем D-Link DSP-W215 Smart Plug. Снова</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/223939/" target="_blank">Открыта лаборатория тестирования на проникновение «На шаг впереди»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223809/" target="_blank">Команда разработчиков из ЦЕРН запустила защищённый анонимный почтовый сервис ProtonMail</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/223775/" target="_blank">Месяц поиска уязвимостей: как мы к нему готовились и как его пережили</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/223729/" target="_blank">Очень сложный выбор: 3 способа защитить виртуальную машину</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223707/" target="_blank">Сноуден поддерживал крупнейший выходной узел Tor на 2 Гбита/с</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223661/" target="_blank">eBay сообщает о взломе: меняйте пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223649/" target="_blank">Ладар Левисон рассказал, как его заставили закрыть Lavabit</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/223533/" target="_blank">ФБР объявили в розыск китайских граждан из группы APT1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223585/" target="_blank">Авторизация по венозному рисунку пальца как замена банковских карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223561/" target="_blank">Пару слов о перехвате HTTP/HTTPS трафика iOS приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223539/" target="_blank">Сломайте SafeCurl и получите 0.25 Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sibirix/blog/223501/" target="_blank">Атаки HTML5: что нужно знать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/223497/" target="_blank">Правоохранительные органы задержали хакерскую группу Blackshades</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222805/" target="_blank">Храним пароли с помощью редактора vim</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223463/" target="_blank">Опасная безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/223465/" target="_blank">Конкурс «Большой ку$h» на PHDays: образ системы ДБО доступен для скачивания</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/223313/" target="_blank">Взламываем D-Link DSP-W215 Smart Plug</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kerio/blog/223077/" target="_blank">Запись вебинара по Kerio Control 8.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/222993/" target="_blank">VM escape: 101</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222773/" target="_blank">Насколько можно доверять социологическим исследованиям?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/222763/" target="_blank">15 площадок в четырех странах уже присоединились к PHDays Everywhere</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/222367/" target="_blank">Microsoft и Adobe выпустили набор обновлений, май 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/222619/" target="_blank">Что скрывает IdM: функциональное сравнение IdM-решений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/beeline/blog/222559/" target="_blank">Защита от DDoS атак как сервис ВымпелКом — и история о выигранных тендерах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222541/" target="_blank">Уязвимость в ядре Linux, позволяющая получить локальный root</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/222513/" target="_blank">Как не отключать картинки и скрипты в письмах, и при этом быть безопасными. История от Яндекс.Почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222511/" target="_blank">Как Мюнхен перевёл 15 000 ПК с Windows на Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222487/" target="_blank">Защита баз данных в iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222337/" target="_blank">Статус «Кровоточащего сердца»: обновление до «Разбитого»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/222253/" target="_blank">PHDays IV: Открыта регистрация на онлайн-конкурсы «Конкурентная разведка» и Hash Runner</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/221991/" target="_blank">Битвы хакеров: разбор заданий PHDays CTF и CTF Quals</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/222045/" target="_blank">Новая версия DuckDuckGo</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/221947/" target="_blank">Что такое НР TippingPoint простыми словами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221871/" target="_blank">Спам-бот Stealrat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221857/" target="_blank">PKI (Public Key Infrastructure) с помощью JavaScript? Теперь это возможно с помощью библиотек PKIjs и ASN1js</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221503/" target="_blank">Конспект по веб-безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221615/" target="_blank">Чтобы скрыть беременность от маркетинговых компаний, женщина использовала Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/221589/" target="_blank">Microsoft исправит 0day уязвимость в Internet Explorer для Windows XP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221423/" target="_blank">Microsoft, Oracle и ряд других компаний присоединяются к антироссийским санкциям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221359/" target="_blank">Переход к ISO/IEC 27001:2013. Тонкости перевода и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221229/" target="_blank">Математика в шпионаже: затруднительное положение в работе на шпионов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221159/" target="_blank">Какие задачи решают IAM системы?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/310726/" target="_blank">Книга «Как пережить полный конец обеда, или безопасность в PHP». Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/310778/" target="_blank">Security Week 38: уязвимость в Firefox, взлом Windows через Safe Mode и Tesla через Wifi</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310802/" target="_blank">Крупный процессинг планирует уйти с российского рынка, возможно, из-за действий хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/310676/" target="_blank">Браузеры и app specific security mitigation. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/310774/" target="_blank">Учетные записи пользователей Yahoo оказались скомпрометированы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310688/" target="_blank">Как мы делали поиск в elasticsearch на vulners.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/310616/" target="_blank">Утечки данных в сфере здравоохранения: новая чума</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310604/" target="_blank">Проверка паролей пользователей домена Windows на стойкость к атаке по словарю без компрометации пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310442/" target="_blank">USB killer Type-C</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310576/" target="_blank">ФСБ планирует дешифровать весь интернет-трафик россиян в режиме реального времени</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221221/" target="_blank">Hello MongoDB (открытый удаленный доступ)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/220889/" target="_blank">YotaPhone, Android и немного криптографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/221079/" target="_blank">Как сдать налоговую декларацию за 2013 год электронным способом за несколько дней (РФ)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123140/" target="_blank">Изолирование приложения с IP-адресом из VPN другой страны на примере Steam</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/221025/" target="_blank">Новая уязвимость Internet Explorer эксплуатируется in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220999/" target="_blank">DDoS любого сайта с использованием заметок Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kerio/blog/220859/" target="_blank">Новое в релизе Kerio Control 8.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/220831/" target="_blank">Экспертно-хакерский десант на PHDays IV: делаем ключи от запертых дверей, ломаем браузеры и спасаемся из «умного дома»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220769/" target="_blank">Качество кода Open Source впервые превзошло качество кода проприетарных проектов на C/C++</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220765/" target="_blank">HTTP Switchboard — NoScript на стероидах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220727/" target="_blank">Linux Foundation и крупнейшие IT-компании создают фонд для поддержки критически важного открытого ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220665/" target="_blank">Регулирование смс-спама. Давайте поразмышляем?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/220657/" target="_blank">Атаки нулевого дня, APT-атаки и защита от них с использованием решений Check Point</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220449/" target="_blank">SIEM на практике: дружим Prelude + Cisco IPS и выявляем эксплуатацию HeartBleed через корреляцию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/220583/" target="_blank">Лаборатория «На шаг впереди» на PHD IV</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220539/" target="_blank">Как работает программа «Поиск IT-уязвимостей» у ПриватБанка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220521/" target="_blank">Про Сталина, Дурова, печеньки и параметр EncryptedPasswd</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220497/" target="_blank">Интернет может рухнуть. Нам нужен «План Б»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220495/" target="_blank">Вышла iOS 7.1.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220429/" target="_blank">Gmail и Skype грозит запрещение в России. А также остальным email и IM сервисам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220411/" target="_blank">Обновление для backdoor в роутерах Linksys и Netgear</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220367/" target="_blank">LibreSSL: очищенная версия OpenSSL (проект OpenBSD)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hola/blog/220351/" target="_blank">Блоги – это маленькие СМИ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/celecom/blog/220043/" target="_blank">MetaPhone: важность телефонных метаданных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220161/" target="_blank">Лечим проблемы с набором номера у GPON роутера от МГТС</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220277/" target="_blank">Как создавать патчи, основанные на доверчивой политике безопасности Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/220003/" target="_blank">Как браузеры реализуют отзыв цифровых сертификатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/220189/" target="_blank">Positive Technologies приглашает студентов на Всероссийскую олимпиаду по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/220157/" target="_blank">Mail.Ru Group объявляет о старте программы поиска уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/219905/" target="_blank">Шифрование данных в публичном облаке — контроль и спокойный сон заказчика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220113/" target="_blank">Эксплуатация уязвимости в процедуре обновления DrWeb</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220083/" target="_blank">Shit и меч</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/220027/" target="_blank">Кого атакует BillGates?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bughunt/blog/219871/" target="_blank">Как мы ломали docshell.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/219845/" target="_blank">OpenVPN успешно скомпрометирован через Heartbleed</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/219071/" target="_blank">Авторизация на портале Госуслуг с помощью Рутокен ЭЦП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219767/" target="_blank">Новый алгоритм распознавания изображений от Google способен распознавать CAPTCHA с точностью 99,8%</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219691/" target="_blank">Данные около 70 000 карт были скомпрометированы на платежном шлюзе РЖД</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219677/" target="_blank">Эдвард Сноуден использовал дистрибутив TAILS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219669/" target="_blank">Как получить данные о 5 млн компаний через LinkedIn REST API или почему в OAuth лучше разрешать использовать Request Token только один раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219623/" target="_blank">Обзор специализированных способов обхода блокировок в интернете</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/219615/" target="_blank">Утечка конфиденциальных данных при кешировании сетевых запросов на платформе iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219397/" target="_blank">Умный город: Вы готовы жертвовать конфиденциальностью ради эффективности?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hola/blog/219247/" target="_blank">Твиттер: революции продолжаются?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219513/" target="_blank">Гоу IPTV, я сломал</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/219547/" target="_blank">Скучная статья про проверку OpenSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219493/" target="_blank">Сканер отпечатков пальцев в Samsung Galaxy S5 также уязвим</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219475/" target="_blank">Обнаружена уязвимость функционала «remember me» в Laravel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219453/" target="_blank">HP iLO 2 уязвимо для Heartbleed — защищаемся и обновляемся!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/216373/" target="_blank">Итоги и разбор заданий онлайн-тура NeoQUEST-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219335/" target="_blank">Чем ещё грозит Heartbleed простому пользователю?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/219299/" target="_blank">Microsoft представляет SQL Server 2014 в России!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/218971/" target="_blank">Конкурсная программа PHDays IV</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218969/" target="_blank">Radare2 собирает денежные средства на проведение своего Summer of Code</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219163/" target="_blank">Heartbleed и заблуждения о Open Source</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219151/" target="_blank">Чем грозит Heartbleed простому пользователю?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219125/" target="_blank">Хакеры получили $10,000 за взлом Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219109/" target="_blank">С конкурсного сервера CloudFlare был успешно украден SSL-ключ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219105/" target="_blank">В АНБ знали о уязвимости Heartbleed два года назад</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219023/" target="_blank">Тестирование бесплатных антивирусов или альтернатива Microsoft Security Essentials для Windows XP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219091/" target="_blank">История хакерских взломов информационных систем (1903-1971)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/219087/" target="_blank">Вышла новая версия opensource межсетевого экрана pfSense 2.1.2. Не прошло и недели</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/218951/" target="_blank">Время менять пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218987/" target="_blank">Кондолиза Райс, бывшая глава госдепа США, вошла в совет директоров Dropbox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218957/" target="_blank">Роскомнадзор посоветовал размещать сайты на отечественных хостинг-площадках</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/218945/" target="_blank">Heartbleed: что говорят вендоры</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/218913/" target="_blank">Почему после обнаружения Heartbleed мы не предлагаем пользователям Почты Mail.Ru менять пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218887/" target="_blank">Анализ приложения защищенного виртуальной машиной</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/218829/" target="_blank">Тестирование безопасности клиент-серверного API</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/celecom/blog/218803/" target="_blank">Пользователями мобильных телефонов теперь интересуется не только АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218713/" target="_blank">Справочник по уязвимости OpenSSL Heartbleed</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218703/" target="_blank">Продолжение работы Microsoft Security Essentials на Windows XP после 8 апреля 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218691/" target="_blank">Диагностика ошибки Heartbleed в OpenSSL. (Окончательный диагноз ещё не поставлен, хотя лечение уже идёт вовсю)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/218699/" target="_blank">Microsoft выпустили набор обновлений, апрель 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218685/" target="_blank">По следам бременских музыкантов, или «Как нам выстроить информационную защиту России» правильно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218661/" target="_blank">Последствия OpenSSL HeartBleed</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218609/" target="_blank">Критическая уязвимость в OpenSSL 1.0.1 и 1.0.2-beta</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218467/" target="_blank">Уязвимость в MACROSCOP (устранена с версии 1.9.72)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/218395/" target="_blank">Системы типа DoubleClick позволяют идентифицировать до 90% пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200262/" target="_blank">5-летний ребенок взломал авторизацию Xbox Live</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/218143/" target="_blank">Расследование об информационной безопасности в Яндексе. Rdomn – скрытая угроза</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hola/blog/218085/" target="_blank">Сетевая нейтральность: а есть ли мальчик?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jetinfosystems/blog/218007/" target="_blank">Особенности мобильных приложений на платформе iOS, использующих логин и пароль клиентов для доступа к платному контенту</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/stars_s/blog/217993/" target="_blank">Ждем летних вебинаров от Алексея Кибкало</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217759/" target="_blank">История о трёх уязвимостях ядра</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/217715/" target="_blank">Порталы нежити в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217915/" target="_blank">Антивирус на сервере — быть или не быть?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217885/" target="_blank">Книги по информационной безопасности. Знакомимся ближе с ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/217747/" target="_blank">Как выявить хакерскую активность на сайте, устранить ее последствия и защититься от злоумышленников</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/217695/" target="_blank">Современные тенденции развития DDoS-атак и защита от них с помощью DefencePro Radware</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/217685/" target="_blank">Обзор мультифакторной аутентификации в облаке Microsoft Azure</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217667/" target="_blank">Принципы успешного внедрения IDM. Бизнес-кейсы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/217419/" target="_blank">Национальная платёжная система: что это значит для вас, и когда конкретно паниковать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217331/" target="_blank">Алгоритм Энигмы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217327/" target="_blank">Атаки по времени — сказка или реальная угроза?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217199/" target="_blank">Российским чиновникам запретили использовать iPad</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217123/" target="_blank">Как и чем сегодня защищать свои данные на ПК и накопителях?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217079/" target="_blank">Эдвард Сноуден на TED: Как нам вернуть Интернет (озвучка)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/217017/" target="_blank">Устанавливаем Metasploit Framework Dev на Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216977/" target="_blank">Обама подготовил законопроект о прекращении полной записи разговоров граждан</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/310548/" target="_blank">Уязвимости систем видеонаблюдения позволяют хакерам создавать масштабные ботнеты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/310520/" target="_blank">Почему дополненная реальность добавляет риска сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/310504/" target="_blank">Шкатулка с эксплойтами Equation Group пополнилась новым экземпляром</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310482/" target="_blank">Ещё один тип XSS-атаки на сайт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ru_mts/blog/310480/" target="_blank">Почему иногда «падает» сеть мобильных операторов?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/solarsecurity/blog/310470/" target="_blank">Solar JSOC – опыт построения коммерческого SOC</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/310398/" target="_blank">Обратный отсчет: книга о Stuxnet, исследователях вредоносного кода и уязвимой критической инфраструктуре</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301892/" target="_blank">Syncookied — OpenSource ddos protection system</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/310244/" target="_blank">Пользователям веб-браузера Tor рекомендуют обновить его как можно скорее</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/310238/" target="_blank">Apple выпустила iOS 10.0.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/216949/" target="_blank">Уязвимость MS Word эксплуатируется in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216941/" target="_blank">FireChat: Первый Mesh мессенджер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216931/" target="_blank">Турция заблокировала Google DNS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216913/" target="_blank">Анапские прокуроры зачищают Интернет по-своему. Блокировка Google и других</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/216785/" target="_blank">Спуфинг расширения в winrar</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216779/" target="_blank">Реестр запрещённых сайтов как путь к информационной изоляции</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216771/" target="_blank">New York Times: у NSA был доступ к серверному оборудованию Huawei в течение нескольких лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216751/" target="_blank">«HTTP Strict-Transport-Security» или как обезопасить себя от атак «man-in-the-middle» и заставить браузер всегда использовать HTTPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216719/" target="_blank">Как одним судебным преследованием Microsoft разрушила веру клиентов в неприкосновенность своих данных в «облачных» сервисах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216649/" target="_blank">Счета Microsoft к ФБР: корпорация получает деньги за каждый официальный запрос спецслужбы по раскрытию информации пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208338/" target="_blank">Джаббер переходит на полное шифрование</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216571/" target="_blank">tKC или «Как глухой из Африки cracking-сцену захватил»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216575/" target="_blank">Опубликованы судебные документы на Алексея Кибкало</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216557/" target="_blank">Google ввел шифрование Gmail-трафика между дата-центрами для надежной защиты данных пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216503/" target="_blank">ФБР задержало российского программиста по наводке Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216405/" target="_blank">The Washington Post: NSA «пишет» 100% всех звонков неназванной страны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/216131/" target="_blank">Атаки на отказ в обслуживании: практика тестирования</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/216345/" target="_blank">Новое на PHDays IV: как взломать Gmail, шпионить через телевизор, подслушать любой телефонный разговор и уронить WordPress</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/216235/" target="_blank">Священная корова, карма и усы: как и почему индусы неравнодушны к ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/216169/" target="_blank">Взаимодействие сканеров уязвимостей с Metasploit. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/216153/" target="_blank">«Запретите им запрещать» или обратная сторона реестра запрещенных сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/216087/" target="_blank">Щит и меч в системах ДБО – 2, или как бороться с MITM-атаками и несанкционированным удаленным доступом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215993/" target="_blank">Впечатления от китайской warez-сцены</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215975/" target="_blank">Великий Российский Фаервол, что будет когда занавес опустится?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215553/" target="_blank">Обзор систем защиты ПО для Windows от нелегального использования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214023/" target="_blank">Голосования и информационная безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215849/" target="_blank">Сайт Lenta.ru подвергся хакерской атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215829/" target="_blank">Как я немного Instagram увёл</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/215831/" target="_blank">Pwn2Own 2014: итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215817/" target="_blank">Продвинутые методы неявного вызова php кода, использующиеся во вредоносных скриптах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215527/" target="_blank">Дифференциальный криптоанализ для чайников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215773/" target="_blank">Обещают жаркое лето… Изменения в «антипиратский» закон вступают в силу 1 июля 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/215667/" target="_blank">Pwn2Own 2014: первые результаты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215641/" target="_blank">Дружим IPS Appliance и Многоуровневый коммутатор (Cisco IPS и Catalyst 6500)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215661/" target="_blank">В индийской полиции 8 лет не отвечали на жалобы, потому что потеряли пароль от базы данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215509/" target="_blank">Мониторинг событий информационной безопасности с помощью ZABBIX</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215543/" target="_blank">Более 162.000 сайтов на WordPress использовались для масштабной DDOS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215457/" target="_blank">Самые популярные пароли в 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/215335/" target="_blank">Microsoft выпустили набор обновлений, март 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/215313/" target="_blank">Взаимодействие сканеров уязвимостей с Metasploit. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215233/" target="_blank">DDOS любого сайта с помощью Google Spreadsheet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215229/" target="_blank">На счетах MtGox обнаружены «украденные» деньги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215225/" target="_blank">Сломай меня полностью (ZeroNightsCrackme, Часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189848/" target="_blank">Биометрическая подпись на документе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215143/" target="_blank">Норвежский провайдер выдавал в браузере номер телефона клиента по IP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215139/" target="_blank">Приемы неявного вызова php кода, применяемые во вредоносных скриптах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215071/" target="_blank">Определение локальных IP-адресов через WebRTC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215035/" target="_blank">Немного змеиного масла</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/215019/" target="_blank">Закончился первый этап общественных консультаций по реформе авторского права при Еврокомиссии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214927/" target="_blank">У руководства Meetup требуют 300 долларов за отмену мощной DDoS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infotecs/blog/214885/" target="_blank">В ИнфоТеКС Академии стартует конкурс «Профессиональный аналитик»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/214881/" target="_blank">Подпись файлов через браузер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214829/" target="_blank">С QIWI-Кошелька Росузника сняли пол-миллиона рублей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214795/" target="_blank">Инсайд истории Mt. Gox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214685/" target="_blank">Исходники Bitcoin-биржи MtGox слиты, часть выложена в интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214617/" target="_blank">Перехват разговоров ФБР с помощью Google Maps</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214557/" target="_blank">История однострочных багов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/214445/" target="_blank">Безопасность сетей доступа 3G/4G</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214327/" target="_blank">Кейлогер iOS 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/214351/" target="_blank">Атаки на банковские системы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213187/" target="_blank">Как удалить 1500000 записей из базы данных Yahoo</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214295/" target="_blank">Обзор форматов стандарта CAdES</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214263/" target="_blank">Отправляем заявление в Государственную Думу относительно &quot;«анти»террористического&quot; пакета законопроектов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infotecs/blog/214237/" target="_blank">Мы начинаем серию постов, посвященных работам победителей ИнфоТеКС Академии 2011-2012 по направлению «Научное исследование»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214185/" target="_blank">«BillGates» Linux Botnet — откуда же он взялся?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/214055/" target="_blank">Бан по континентам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154301/" target="_blank">Критический баг в CoreGraphics в iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213885/" target="_blank">Сервис анонимной аренды хостинга с i2p-доступом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213973/" target="_blank">Исследуем Linux Botnet «BillGates»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/213947/" target="_blank">Уязвимость Flash Player используется для направленных атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213895/" target="_blank">Обнаружение изменений в файлах на веб-сервере</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nordavind/blog/213889/" target="_blank">DARPA финансирует разработку чипа для подтверждения подлинности электронных компонентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213783/" target="_blank">Взлом аккаунтов через форму и событие. «XSS», чтобы не было путаницы с каскадными таблицами стилей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/212909/" target="_blank">FortiAP-14С – remote access point от Fortinet. Хороший вариант построения безопасной беспроводной сети для удалённого офиса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213719/" target="_blank">Ещё один пример теста на проникновение из собственной практики</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/213657/" target="_blank">О чем расскажут на PHDays IV: трояны на SIM-карте и куда бежать при киберналете</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213651/" target="_blank">Банк России считает биткоины финансовой пирамидой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213633/" target="_blank">От белорусских компаний потребовали сертифицировать продаваемые средства защиты информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213537/" target="_blank">Шифрованный тоннель для общения через VK (RSA + GreaseMonkey)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213525/" target="_blank">Адам Лэнгли объяснил причины бага в iOS: лишняя строчка кода поломала всю безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213483/" target="_blank">А может не уведомлять об обработке персональных данных?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213413/" target="_blank">Беда с web безопасностью или самый защищенный банк Америки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213397/" target="_blank">Как я перехватывал трафик покер рума или «Пишем свой MitM SSL прокси на C#»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213209/" target="_blank">Контроль за информацией, или Три веселые буквы – DLP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213205/" target="_blank">Переполненяем стек в fprintf на Linksys WRT120N</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213217/" target="_blank">Реакция разных компаний на уязвимости их ресурсов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213191/" target="_blank">Исследуем обфускацию прошивки Linksys WRT120N</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213165/" target="_blank">Twister теперь действительно работает на Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213101/" target="_blank">Уязвимость в рутере или как невзначай «испортить» имидж компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213083/" target="_blank">Переходы наличности и переходы на личности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/213025/" target="_blank">Германия и Франция не хотят пропускать европейский трафик через США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212851/" target="_blank">Смотрим закрытые профили в LinkedIn</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/212839/" target="_blank">Очерк безопасности SIP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212825/" target="_blank">Анти-руткит для Userland-RootKit Azazel «на коленке»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212769/" target="_blank">Новый Userland-RootKit Azazel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212757/" target="_blank">Взлом сервиса Kickstarter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212653/" target="_blank">Децентрализация: Какие сервисы уже есть?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/212619/" target="_blank">Новая IE 0day уязвимость используется для drive-by</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211749/" target="_blank">Получаем образ оперативной памяти</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212589/" target="_blank">Взламываем библиотеку от «ГЭОТАР-Медиа»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yota/blog/310120/" target="_blank">Страхи мобильной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/310128/" target="_blank">Security Week 37: патчи Windows станут кумулятивнее, Google против HTTP, уязвимость в MySQL</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bitrix/blog/310084/" target="_blank">Особенности использования машинного обучения при защите от DDoS-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/310094/" target="_blank">Microsoft выпустила обновления для своих продуктов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payonline/blog/305646/" target="_blank">Для чего финтеху машинное обучение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/310074/" target="_blank">Dropbox на macOS использует приёмы malware, чтобы получить привилегии, которые ему не нужны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/310008/" target="_blank">Миф о незрелости мобильных NFC технологий</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/309948/" target="_blank">Настройки безопасности iOS 10, на которые следует обратить внимание</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/309884/" target="_blank">Разработчик, который живет на крыше: хроники прошедшего PDUG Picnic</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/309808/" target="_blank">От черного списка до машинного обучения. Антифишинг в Яндекс.Браузере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212543/" target="_blank">The Day We Fight Back</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212141/" target="_blank">Сервис-подход публикации или передачи данных строго не ранее указанной даты и/или только в определенной геолокации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/212105/" target="_blank">Тим Бернерс-Ли: нам необходимо заново децентрализовать Интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/212391/" target="_blank">Защита электронной почты в организациях с использованием мобильных устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212477/" target="_blank">В Беларуси отсуствует доступ к крупнейшим VOIP-операторам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212451/" target="_blank">Фальшивые разработчики Debian требуют бесплатный доступ к играм Valve</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212407/" target="_blank">Yacy — распределённый не цензурируемый поисковик: три года спустя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207334/" target="_blank">Реально ли заработать на мобильном приложении по просмотру рекламы за деньги?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212373/" target="_blank">Ещё раз о том, как не надо делать розыгрыши призов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212317/" target="_blank">Триста девяносто четыре доллара</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212329/" target="_blank">Facebook пытается блокировать консоль разработчика в браузере Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infotecs/blog/212319/" target="_blank">ИнфоТеКС Академия открыла прием заявок на конкурс «Быстрый криптограф»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/212253/" target="_blank">Знакомство с новой моделью FortiGate-90D от Fortinet</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/212037/" target="_blank">Microsoft выпустили набор обновлений, февраль 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212265/" target="_blank">1% всех сайтов рунета держит свой memcached открытым для мира. Немного статистики</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212245/" target="_blank">Откровенность API Telegram</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/209726/" target="_blank">NeoQUEST-2014: регистрация объявляется открытой!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211146/" target="_blank">Интеграция RPKI в BGP на маршрутизаторах Juniper</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211176/" target="_blank">Защита от DDOS атак средствами BGP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212195/" target="_blank">11 февраля протест против массовой слежки NSA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/212029/" target="_blank">Вышла публичная альфа версия децентрализованного мессенджера Tox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211973/" target="_blank">Уязвимость в Paperclip (XSS/RCE)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211903/" target="_blank">Этот наш мир</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/211935/" target="_blank">IBM получила от DARPA 3,45 миллиона долларов на разработку самоуничтожающейся электроники</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211845/" target="_blank">Как я взломал Гитхаб еще раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211645/" target="_blank">Как испортить безопасность паролей, следуя советам с Хабра</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211626/" target="_blank">Власти США пугают хакерами посетителей Олимпиады в Сочи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211564/" target="_blank">Британские спецслужбы использовали DDoS-атаки против Anonymous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211560/" target="_blank">SyncNet: децентрализованный peer-to-peer браузер на основе BitTorrent Sync</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/badoo/blog/211518/" target="_blank">Программа по поиску уязвимостей. Проверь Badoo на прочность!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/211494/" target="_blank">Лучшие практики и рекомендации по защите php-приложений от XSS-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209746/" target="_blank">Шпионские гаджеты от АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211370/" target="_blank">Content Security Policy, для зла</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211330/" target="_blank">Конкурс от Microsoft. Опять дырка в безопасности?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211296/" target="_blank">Запросы со стороны спецслужб США в 2013 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211292/" target="_blank">Фильтры отображения для сетевых анализаторов (Wireshark, Paketyzer)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211278/" target="_blank">Utopia заменит Silk Road?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/211262/" target="_blank">HP выплатит рекордные $150K за эксплойт на Pwn2Own 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211232/" target="_blank">GoDaddy изменили политику безопасности после случая с «Twitter аккаунтом ценой в $50 000»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/211012/" target="_blank">Прозрачное шифрование сетевых папок в корпоративном пространстве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211064/" target="_blank">Как сотрудники газеты Guardian уничтожали компьютеры с файлами Эдварда Сноудена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211060/" target="_blank">Сканирование с поддержкой JavaScript/Ajax/DomMutation или SlimerJS + CasperJS + Magic = Profit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/211042/" target="_blank">Фильтры захвата для сетевых анализаторов (tcpdump, Wireshark, Paketyzer)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200264/" target="_blank">Канадские спецслужбы следят за путешественниками с помощью Wi-Fi хотспотов в аэропортах и кафе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/210952/" target="_blank">Две истории об уязвимостях в сервисах Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210966/" target="_blank">Twitter хочет читать мои SMS и знать о том, кто и когда звонит мне, кому и когда я звоню</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210938/" target="_blank">DisLocker. Или находим общий язык с BitLocker в Linux Mint</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/210866/" target="_blank">Итоги PHDays CTF Quals</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210760/" target="_blank">Как надо хешировать пароли и как не надо</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210744/" target="_blank">Безопасное резервное копирование с помощью публичных сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210718/" target="_blank">Как PayPal и GoDaddy заставили меня отдать Twitter аккаунт ценой в $50 000</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/210582/" target="_blank">Fortigate — достойная замена уходящему Microsoft Forefront TMG</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210684/" target="_blank">Криптоанализ хэш-функции ГОСТ Р 34.11-2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210636/" target="_blank">Полностью анонимный блог</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/210630/" target="_blank">В США арестован предполагаемый автор SpyEye</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210416/" target="_blank">Ясные печеньки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210410/" target="_blank">Реализация L2TP/IPsec VPN сервера стандартными средствами Windows 7/8 для подключения Windows/iOS/Android систем к внутренней сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/210338/" target="_blank">Подборка трюков при анализе защищенности веб приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/210310/" target="_blank">В США очередная крупная утечка данных кредитных карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/210180/" target="_blank">Как попасть на PHDays IV CTF? Участвовать в CTF Quals</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/palitrumlab/blog/210150/" target="_blank">Трансформация угроз в информационном пространстве: от технологических к социальным. Часть III</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210026/" target="_blank">CCNP Security ver. 2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/210014/" target="_blank">Эпилог истории со «шпионящими» умными телевизорами LG</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/209642/" target="_blank">Шифрование почты в Outlook 2010</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/209924/" target="_blank">После прочтения сжечь</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/209690/" target="_blank">Первоначальная настройка и возможности UTM-устройств FortiGate для малых предприятий</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/209694/" target="_blank">Итоги 2013: угрозы и эксплуатация Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it/blog/209714/" target="_blank">Системы предотвращения вторжений «из коробки». Тест-драйв</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209704/" target="_blank">Обнаружен ботнет, состоящий из «умных» телевизоров, медиацентров, ПК и… холодильника</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/209674/" target="_blank">Компрометация Target: последние данные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209600/" target="_blank">Сюрприз от неизвестного: доверие к расширениям Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209618/" target="_blank">Почему не нужно использовать RJS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209564/" target="_blank">Петиция президенту Бразилии о предоставлении убежища для Эдварда Сноудена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209536/" target="_blank">Куки-бомбы, или как положить интернеты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209500/" target="_blank">Облако.Mail.Ru + EncFS для резервного копирования домашнего фотоархива</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209486/" target="_blank">Подмена DNS сервера. Будьте осторожны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/209454/" target="_blank">Лаборатории тестирования на проникновение «Test.lab»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209438/" target="_blank">Атака с помощью вашего сервера времени: NTP amplification attack (CVE-2013-5211)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209414/" target="_blank">Конгрессменам США приходится добывать секреты АНБ у Брюса Шнайера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209298/" target="_blank">Carrier Grade NAT</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209204/" target="_blank">Blackphone: первый смартфон, защищённый от прослушивания</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/209178/" target="_blank">Дыра ВКонтакте, утечка персональных данных пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/209110/" target="_blank">Анализ подозрительных PDF файлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/209042/" target="_blank">Результаты исследования методов аутентификации и некоторых механизмов защиты от WEB-атак на примере Google, VK и других</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/209010/" target="_blank">Chaos Communication Congress: Диснейленд для хакера, безопасность SCADA и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208962/" target="_blank">Вирус вывел из строя все комплексы видеофиксации в Подмосковье</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208874/" target="_blank">Как была взломана локальная версия сайта Intuit.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/208786/" target="_blank">Packet crafting как он есть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208766/" target="_blank">Сбой в работе Dropbox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208762/" target="_blank">Приглашаю принять участие в создании документа «Концепция Стратегии Кибербезопасности Российской Федерации»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208704/" target="_blank">Бюджетный SSH тоннель в подводный мир I2P для начинающих оленеводов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208604/" target="_blank">Что бывает, если открыто сообщать об уязвимостях государственных сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208510/" target="_blank">О защите детей от опасной информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208486/" target="_blank">Пара небольших мыслей о повышении usability и безопасности платёжных web-форм</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208468/" target="_blank">Kali Linux внедряет «экстренный» пароль, приводящий к полной шифрации диска</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208448/" target="_blank">Агентство DARPA запустило проект создания биоразлагаемой электроники, самоуничтожающейся по команде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208384/" target="_blank">Официальный форум openSUSE взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208176/" target="_blank">Tribute to HIEW</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208152/" target="_blank">vmware esxi 4.1 и атаки с помощью ntp</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208096/" target="_blank">Отключаем шифрование RC4 в Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ru_mts/blog/309760/" target="_blank">Как работает Центр оперативного управления мобильной сетью МТС. Ответы на ваши вопросы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/309542/" target="_blank">Краткая история паролей от П до Ь: рождение, смерть и зомби-апокалипсис</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/309734/" target="_blank">В сеть утекло демовидео шпионского софта от разработчиков кибероружия RCS Lab</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/309694/" target="_blank">Intel и Hewlett Packard выпустили уведомления безопасности для уязвимости ThinkPwn</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/309660/" target="_blank">Plug-and-Get-Security I, безопасность TLS в роще доменов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/309618/" target="_blank">Немного о ARM Security Extensions (aka ARM TrustZone)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/309530/" target="_blank">Google обновила Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/309566/" target="_blank">Security Week 36: уязвимость в Nexus 5X, криптолокер постит картинки, атака на Linux-серверы через Redis</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/309560/" target="_blank">Архитектура JETPLOW – NSA бэкдор в моей подставке под кофе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bitrix/blog/309536/" target="_blank">Как достичь рейтинга А+ для SSL-сертификата на вашем сайте, и другие аспекты безопасности хостинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208086/" target="_blank">АНБ работает над созданием квантового компьютера для взлома любого типа шифрования (но пока далеко от успеха)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208074/" target="_blank">Snapchat подтвердил утечку данных своих пользователей, но не извинился</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208028/" target="_blank">«И эти люди запрещают нам ковыряться в носу»: Huawei и АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/208014/" target="_blank">Backdoor в роутерах Linksys и Netgear</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207996/" target="_blank">Сирийская электронная армия взломала блог и Twitter-аккаунт Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207984/" target="_blank">Произошла утечка данных 4,6 млн пользователей мессенджера Snapchat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207922/" target="_blank">Идентификация личности на основе данных о перемещениях (трекинга)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207746/" target="_blank">0day* уязвимости к Новому Году: ICQ, Ebay, Forbes, PayPal и AVG</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207858/" target="_blank">Уязвимость Теле2: пользователи Telegram и Qiwi-кошелька в опасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207774/" target="_blank">Взломан openssl.org</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207756/" target="_blank">Elections OS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207758/" target="_blank">АНБ не справляется с объёмами трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/205840/" target="_blank">ZeroNights'2013 — отчет о конференции</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/207506/" target="_blank">Исследователь из Стэнфорда доказал, что АНБ может идентифицировать людей на основе телефонных записей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207380/" target="_blank">Новый баг в Telegram'e</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207378/" target="_blank">«Верно лошадь батарея скрепка», или что такое надёжный пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207208/" target="_blank">I2P-прокси на хостинге</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/207004/" target="_blank">IT-системы крупных компаний может взломать даже начинающий хакер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207038/" target="_blank">Остались ли ещё закладки в Telegram?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207010/" target="_blank">Случай из жизни, или к вопросу о выборе антивируса для домашнего использования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207042/" target="_blank">0day Wednesday – исследование новейшего вредоноса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/207006/" target="_blank">Концепция идеального мессенджера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206900/" target="_blank">Безопасен ли Telegram? Или как я искал закладку в MTProto</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200266/" target="_blank">RSA Security получила $10 млн. от АНБ за использование заведомо дырявого генератора псевдослучайных чисел</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206738/" target="_blank">Ловушка конкурсов по взлому</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206724/" target="_blank">Ответный вызов разработчикам Telegram</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206566/" target="_blank">Удаленное выполнение кода на EBay</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/206508/" target="_blank">Как мы сделали чтение писем безопаснее: Content Security Policy в Яндекс.Почте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206488/" target="_blank">Хак сайта на WordPress, кому все это нужно и советы как этого избежать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206476/" target="_blank">$200 000 любому, кто взломает IM-мессенджер Telegram</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206472/" target="_blank">Восстановление удалённых c Apple iPhone контактов. 9 простых шагов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/206468/" target="_blank">Решение главных проблем CAPTCHA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/palitrumlab/blog/206182/" target="_blank">Трансформация угроз в информационном пространстве: от технологических к социальным. Часть II</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205950/" target="_blank">В Android 4.4.2 удалили ключевую функцию безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205762/" target="_blank">Запускаем Ubuntu и смотрим Torrent и Torrent-TV прямиком на Samsung SmartTV</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/205680/" target="_blank">Где моя повозка, сударь? Безопасность GPS-трекинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/205340/" target="_blank">Microsoft и Adobe выпустили набор обновлений, декабрь 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205594/" target="_blank">Мегафон не спешит закрывать старые дыры в безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205548/" target="_blank">Разработчики FreeBSD ограничат использование аппаратных генераторов случайных чисел из-за подозрений на наличие бэкдоров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205534/" target="_blank">Цифровая погоня за золотым гусём, или как самая большая афера в истории Bitcoin превратилась в фарс</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/205512/" target="_blank">Metasploit Penetration Testing Cookbook – часть 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/promwad/blog/205374/" target="_blank">Аутсорсинг: как защитить свои разработки от копирования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200268/" target="_blank">АНБ. Теперь и в World Of Warcraft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205128/" target="_blank">Отчёт по событиям на Windows серверах домена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205390/" target="_blank">Глобальная реформа правительственного наблюдения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205388/" target="_blank">Поделись сокровенным</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205378/" target="_blank">Apple присоединилась к остальным ИТ-гигантам в своих призывах по реформированию программ АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/FastVPS/blog/205162/" target="_blank">Настраиваем VPN связь посредством l2tp + ipsec c использованием в качестве сервера OpenVZ контейнер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205298/" target="_blank">Zoiper сохраняет наши пароли от SIP на своих серверах — и потерял эту базу?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205274/" target="_blank">Простая маскировка модуля ядра Linux с применением DKOM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205234/" target="_blank">Крупнейшие торрент-трекеры попали в базу родительского контроля «Лаборатории Касперского»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205184/" target="_blank">Как будут защищать детей от вредной информации?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205152/" target="_blank">Как сделать обычный сервер FTP по-настоящему безопасным и одновременно удобным?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205052/" target="_blank">Возможное раскрытие личности Сатоси Накамото, создателя Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205006/" target="_blank">Украдено 2 млн. паролей пользователей социальных сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/205004/" target="_blank">Telepathwords — определение уровня защищённости пароля онлайн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204998/" target="_blank">АНБ отслеживает местоположение мобильных телефонов по всему миру</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204948/" target="_blank">Код для запуска атомных бомб США: 00000000</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/204886/" target="_blank">Яндекс проводит эксперимент по шифрованию текста запроса в заголовке Referer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204486/" target="_blank">Админская сказка о экономических аспектах информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204780/" target="_blank">Управляемые учётные записи служб (Managed Service Accounts)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202914/" target="_blank">Отчёт о запуске программ на компьютерах пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/204670/" target="_blank">Форум технологий Mail.Ru Group в Нижнем Новгороде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204698/" target="_blank">Решение Zeronights Crackme 2013 и причём тут матрицы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204688/" target="_blank">Крупнейшая афера с Bitcoin происходит прямо сейчас</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204532/" target="_blank">Backdoor в HP MSA P2000 G3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204508/" target="_blank">Оптимальная защита от DDoS с помощью netstat и iptables</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/204274/" target="_blank">Wireshark — приручение акулы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/196576/" target="_blank">Делаем USB-ключ из Arduino для обхода беспарольной авторизации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204432/" target="_blank">Сломай меня полностью (ZeroNights 2013)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/204428/" target="_blank">SMS-уязвимость во всех Nexus</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/204362/" target="_blank">Microsoft предупреждает об эксплуатации CVE-2013-5065 ITW</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204316/" target="_blank">Защита ПДн в небольших, средних и больших организациях. Так ли все гладко?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204266/" target="_blank">Методы анонимности в сети. Часть 4. Tor&VPN. Whonix</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/204148/" target="_blank">Взлом корпоративного портала SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204128/" target="_blank">Re: Отчёт и задания со всероссийской олимпиады по администрированию Linux-систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204106/" target="_blank">Twitter следит за тобой, анонимус</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/204066/" target="_blank">О том, как я был кул хацкером</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/203882/" target="_blank">Яндекс теперь поддерживает шифрование исходящей и входящей почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203996/" target="_blank">Как кибербезопасникам подкинули кибернаркотики</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203766/" target="_blank">Использование сканера уязвимостей OpenVAS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/3mrussia/blog/203828/" target="_blank">Как безопасно читать Хабр на работе с помощью наших экранов защиты информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203776/" target="_blank">Обзор Preliminary Cybersecurity Framework или как Обама завещал управлять рисками ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203680/" target="_blank">Методы анонимности в сети. Часть 3. Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/203682/" target="_blank">Форум PHDays IV будет посвящен поиску новых рецептов выживания в киберпространстве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200270/" target="_blank">АНБ заразило вирусами более 50.000 сетей по всему миру</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203410/" target="_blank">Полиция США поймала «подарок»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203354/" target="_blank">LG перестанет следить за пользователями SmartTV</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203338/" target="_blank">Кража пароля от Gmail аккаунта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203294/" target="_blank">Сооснователь The Pirate Bay будет выдан Дании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202368/" target="_blank">Личностная криптография: рассказ об одной полезной уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203172/" target="_blank">Брутфорс атака на GitHub</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203152/" target="_blank">Немножко ИБ на ночь, или базовые понятия идентификации и аутентификации обьектов и пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/203122/" target="_blank">Уязвимая SCADA-система могла заставить мировых лидеров томиться в пробках</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/santi/blog/202976/" target="_blank">Система безопасности сайтов САНТИ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202878/" target="_blank">Чем занимаются плохие менеджеры ИБ?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202792/" target="_blank">Копирование данных баз Web и Firewall прокси-сервера MS TMG в базу MySQL</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/202784/" target="_blank">XSS'им iOS устройства на примере софта от Facebook, Google, ВКонтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202796/" target="_blank">Уязвимость в nginx — nginx security advisory (CVE-2013-4547)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202770/" target="_blank">«Умные» телевизоры LG шпионят за пользователями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/309416/" target="_blank">Новые функции безопасности Android 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/309406/" target="_blank">Юбилейный выпуск Intercepter-NG 1.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/309294/" target="_blank">Жизнь в условиях тотального подключения к сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/309348/" target="_blank">Защита от «спама» на 8800 во FreePBX</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/309312/" target="_blank">В сети опубликовали базу из 98 млн учетных записей Rambler</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308270/" target="_blank">О разработке предстоящего CTF с оффлайн квестом для всеукраинской битвы хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/309292/" target="_blank">GPS Spoofing на практике: Как поймать всех покемонов, не выходя из дома</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/309260/" target="_blank">Охота на Lurk: от исследования вредоносного кода до уголовного дела</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/veeam/blog/282530/" target="_blank">Сертифицированная ФСТЭК версия Veeam Backup and Replication: резервное копирование конфиденциальной информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/309192/" target="_blank">Новая утечка: В сети опубликованы данные 43 млн аккаунтов Last.Fm</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/202386/" target="_blank">Лаборатория «Вдоль и поперек» на ZeroNights 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202614/" target="_blank">Правовые основы обеспечения ИБ в коммерческой организации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202582/" target="_blank">Выявление виртуалов в Википедии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202570/" target="_blank">Слушания в Сенате США по Bitcoin: отчеты Министерства Юстиции и Комиссии по ценным бумагам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202538/" target="_blank">Двойные стандарты в шифровании учетных записей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/202554/" target="_blank">Дмитрий Скляров: «Внимательность и немного логики. Как сложное оказывается простым»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202488/" target="_blank">О контентной фильтрации в учебных заведениях. Проблемы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202468/" target="_blank">vbulletin.com взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202426/" target="_blank">Госдума единогласно пустила ФСБ в интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202416/" target="_blank">Anonymous утверждают, что взломали серверы украинской таможни и выложили 1 Гб документов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200272/" target="_blank">Кроссворд на основе украденной у Adobe базы паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201696/" target="_blank">Анонимный чат TorChat и его улучшение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202210/" target="_blank">Никогда не повторяйте этого дома: модификация алгоритма шифрования HC-128</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/202162/" target="_blank">Неявные предикаты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199356/" target="_blank">Как была закейгенена Armadillo, взломана PSP и скомпрометированы все DSA ключи в Debian. Или еще раз о слабых ГПСЧ и (EC)DSA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nordavind/blog/202040/" target="_blank">Погрешности сенсоров позволяют сопоставить с каждым смартфоном индивидуальный «отпечаток»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201990/" target="_blank">HTTP 2.0 будет только по HTTPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/201844/" target="_blank">Microsoft выпустили набор обновлений, ноябрь 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/201830/" target="_blank">Power of Community: новые сценарии атак на АСУ ТП или Choo Choo PWN в Корее</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/maxifier/blog/201798/" target="_blank">Я параноик или Почему Большой Брат уже следит за нами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201768/" target="_blank">Методы обхода ASLR в новейших Zero-Day эксплоитах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199202/" target="_blank">Готовим NSA SELinux</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/201602/" target="_blank">Удаленный DOS exploit (device reboot) iOS ~6.1 — 7.0.3 [0day]</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201576/" target="_blank">OllyDbg 2.01</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201556/" target="_blank">Уникальное исследование базы паролей университета Карнеги-Меллон</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201486/" target="_blank">Google говорит «F*ck You, АНБ» и начинает шифровать трафик между дата-центрами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201398/" target="_blank">Безопасность ваших юзеров: OAuth, SSL, P2P-чат с RSA, гейт в i2p</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201384/" target="_blank">Виртуальный Bitcoin-банк inputs.io ограбили на миллион долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/maxifier/blog/201076/" target="_blank">Поведенческая реклама ≠ правительственная слежка. Пора внести ясность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infotecs/blog/201266/" target="_blank">Открылась регистрация участников программы «ИнфоТеКС Академия» 2013-2014</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201212/" target="_blank">О том, как я случайно уронил сервер браузерной игры от ЕА</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194268/" target="_blank">Про применимость Novec©®™ 1230©®™ для погруженного в жидкость компьютера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201114/" target="_blank">Аппаратная поддержка алгоритма AES современными процессорами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201124/" target="_blank">Почему оценка соответсвия средств защиты информации и есть сертификация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/3mrussia/blog/200840/" target="_blank">Сухая вода Novec® 1230 для защиты серверных и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/200984/" target="_blank">CheckPoint: установка, первоначальная настройка и организация кластера из двух фаервольных модулей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201058/" target="_blank">Сертификация средств защиты и персональные данные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/201040/" target="_blank">Apple поместила скрытое предупреждение в официальный отчёт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/palitrumlab/blog/200964/" target="_blank">Трансформация угроз в информационном пространстве: от технологических к социальным</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/201002/" target="_blank">MS предупреждает об эксплуатации CVE-2013-3906 in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200922/" target="_blank">SSD винт отключается через 5 мин работы Или немыслимая логика SSD контроллера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/200518/" target="_blank">Лента – все еще лидер в резервном копировании данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200914/" target="_blank">Декодируем GSM с RTL-SDR за 30$</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200894/" target="_blank">Защита информации и сертификация. Если нет разницы — зачем платить больше?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200858/" target="_blank">Как АНБ внедрило закладку в генератор псевдослучайных чисел</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/197912/" target="_blank">Поле битвы — гипервизор!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200686/" target="_blank">RSA Security заявила о наличии АНБ-бэкдора в своих продуктах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200274/" target="_blank">Таинственная история badBIOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200634/" target="_blank">Повышаем безопасность в два клика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199254/" target="_blank">Учитывая постоянно растущее количество видеокамер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200412/" target="_blank">Структура современной пиратской (варезной) сцены</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/200408/" target="_blank">Избранное: ссылки по IT безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200378/" target="_blank">На саммите G20 Россия дарила дипломатам флешки с «закладками»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200370/" target="_blank">Yota хочет знать все…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200276/" target="_blank">АНБ в реальном времени контролирует каналы между дата-центрами Yahoo! и Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200248/" target="_blank">Проектируем вместе защищенное приложение для обмена сообщениями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/200104/" target="_blank">Наш хакер победил в финале Cyber Challenge по региону EMEA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199532/" target="_blank">Обновите свою прошивку iLO</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/200042/" target="_blank">Плагин Lightbeam к Firefox позволяет видеть, кто и как запрашивает информацию с ПК пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/199468/" target="_blank">Как защищать данные на мобильных сотрудников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199446/" target="_blank">Американский стартап разработал нейросеть, распознающую популярные CAPTCHA с точностью более 90%</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199420/" target="_blank">Anonymous взломали почту МИД Украины</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199412/" target="_blank">Anonymous утверждают, что взломали почту украинского МИД</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199238/" target="_blank">КриптоПати! — party hard!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199354/" target="_blank">Как шифровать сообщения по e-mail и станет ли от этого «безопасней»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/blippex/blog/199336/" target="_blank">Blippex — википедия поиска</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199306/" target="_blank">Теория «Черного лебедя» и фундаментальная уязвимость автоматизированных систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/199052/" target="_blank">45% веб-ресурсов крупнейших российских компаний содержат критические уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199240/" target="_blank">12-летний школьник взламывал правительственные сайты для Anonymous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199204/" target="_blank">Сайт UploaderTalk оказался антипиратской ловушкой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199184/" target="_blank">Трафик I2P заметно вырос за последний год</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199036/" target="_blank">Вирусы для MS-DOS в действии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/199010/" target="_blank">Growth Hacking — зачем оно, с чем его едят или «как умерла SEO»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/199016/" target="_blank">Аппаратная защита от пиратства на Windows RT 8.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/199000/" target="_blank">php.net скомпрометирован</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198956/" target="_blank">Новый продукт Linkedin Intro: удобство или слежка за пользователями?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198920/" target="_blank">DARPA начинает разработку систем компьютерной безопасности, способных самостоятельно находить и исправлять уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/198810/" target="_blank">Теперь вузы — участники программы Positive Education смогут использовать MaxPatrol для обучения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198834/" target="_blank">Информационная безопасность и сотрудники — загадка отношений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198654/" target="_blank">Система слежения за морскими судами АИС «взломана», но так ли это?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198610/" target="_blank">Mikeysoft — сисоп BBS, прекратившей существование в 1995 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ruvpn/blog/198596/" target="_blank">Частный вариант спасения от СОРМ-3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198548/" target="_blank">Google защитит сайты от DDoS атак и поможет обойти цензуру</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/197740/" target="_blank">История о XSS в Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198486/" target="_blank">Новый закон о СОРМ. Болтать бесполезно, убегать — тоже. Надо бороться!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198374/" target="_blank">«Закон об инсайде» дал право Банку России без суда требовать раскрытия и переписки, и переговоров, и всего такого</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/198362/" target="_blank">Под ударом. Системы ДБО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198236/" target="_blank">Закрытая уязвимость CSRF в Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198218/" target="_blank">По следам уязвимости D-Link: В беспроводных маршрутизаторах Tenda и Medialink обнаружен бэкдор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198188/" target="_blank">Хакеры на экране</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198152/" target="_blank">Пользователи системы Bitcoin, возможно, обнаружили личный кошелек Росса Ульбрихта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/198096/" target="_blank">ИБ вдоль и поперек на ZeroNights</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197908/" target="_blank">Fortuna: генератор случайных чисел для параноиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198010/" target="_blank">Новая рансомварь просит биткойны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/198002/" target="_blank">Хабраинтервью с бывшим сценером</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197998/" target="_blank">Сказ о том, как у украинского оператора появились серьезные проблемы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197964/" target="_blank">История «Silk Road» попадёт на большой экран</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197728/" target="_blank">Взлом сервера Counter Strike или «Безопасность? Не… не слышал!»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197812/" target="_blank">Baidu начал принимать Bitcoin для оплаты одного из своих сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197692/" target="_blank">Ослабленный SSL в android устройствах?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318768/" target="_blank">Второе пришествие ГОСТ 28147-89: Честные тесты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318748/" target="_blank">Методы защиты от CSRF-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/318744/" target="_blank">Отладочный механизм в процессорах Intel позволяет захватывать их через USB-порт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318238/" target="_blank">VulnHub: Эксплуатируем уязвимость переполнения буфера в Lord Of The Root</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/318606/" target="_blank">В системах управления электроподстанциями Siemens обнаружены серьезные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318436/" target="_blank">Антивирусная защита предприятия</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/badoo/blog/318000/" target="_blank">Использование Service Worker для создания ботнета</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/318430/" target="_blank">«Дайджест 1cloud»: 25 материалов о безопасности, работе программистов и опыте создания IaaS-провайдера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318378/" target="_blank">60 криптоалгоритмов. Часть первая: Бесключевые КА</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318362/" target="_blank">Как будет продавать ваши персональные данные стартап, в который вложил 70м рублей ФРИИ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/309072/" target="_blank">Защита периметра: старые атаки не хуже новых</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/309054/" target="_blank">Security Week 35: перехват клавиатуры через WiFi, атака на банкоматы с помощью EMV-чипа, новый IoT-ботнет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/309064/" target="_blank">Пример эксплуатации одной старой уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/309056/" target="_blank">Сервис безопасных заметок OneLogin Secure Notes оказался скомпрометирован</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308828/" target="_blank">Биткойн — деньги для всех</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/308968/" target="_blank">AMD представляет новые механизмы безопасности своего гипервизора AMD-V</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/308966/" target="_blank">Новый релиз Kali Linux 2016.2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/308946/" target="_blank">Находим ошибки в коде компилятора GCC с помощью анализатора PVS-Studio</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/megafon/blog/306698/" target="_blank">Что есть подпись. От капли крови до ЭЦП</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/308906/" target="_blank">Данные более чем 68 млн пользователей Dropbox утекли в сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197672/" target="_blank">Как я не взломал «Хабрахабр» или 10+ активных XSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197414/" target="_blank">Защита сайта от спамеров и угона аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197388/" target="_blank">Драма Инстаграма — веерные блокировки аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197314/" target="_blank">Очередная программная закладка в роутерах D-Link</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197224/" target="_blank">Из-за тотальной слежки АНБ экономика США может потерять до 35 миллиардов долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197218/" target="_blank">Mail.Ru Group оштрафовали за соблюдение Конституции РФ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197178/" target="_blank">Как злоумышленники использовали сайт в качестве рекламной площадки и как я с этим боролся</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/196858/" target="_blank">Пентест WordPress своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197096/" target="_blank">I2P: Прозрачный доступ из любого браузера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/197056/" target="_blank">Google начинает выплачивать вознаграждения за исправление уязвимостей в проектах с открытым исходным кодом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196984/" target="_blank">Картинки с внешних ресурсов — добро или зло?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/196900/" target="_blank">О флагах в 0x41414141 раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196894/" target="_blank">Еще один способ потратить деньги — спасибо «любимому» сотовому оператору!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196882/" target="_blank">Вирус на сайте или реверс-инжиниринг Exploit.SWF.254</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/196610/" target="_blank">Microsoft выпустили набор обновлений, октябрь 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/196852/" target="_blank">Автор Blackhole exploit kit арестован</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196850/" target="_blank">Вопросы для хабраинтервью с бывшим сценером</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196844/" target="_blank">Яндекс.DNS — безопасный домашний интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/sokogroup/blog/196730/" target="_blank">Скрамблер — сервис для хранения и обмена данными с шифрованием</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196442/" target="_blank">В поисках криптостойкого ГПСЧ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it/blog/196638/" target="_blank">Сертификация CISSP: Howto</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196700/" target="_blank">Геолокация – как на нас зарабатывают</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196672/" target="_blank">Воруй-убивай, пиши-качай</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196528/" target="_blank">ФБР не знает, что делать с изъятыми Bitcoins ресурса Silk Road, доступа к кошельку Росса Ульбрихта у ФБР пока нет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196494/" target="_blank">Leaseweb взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196464/" target="_blank">Розыск и поимка владельца Silk Road. Отчет агента ФБР</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196466/" target="_blank">Skype вводит синхронизацию сообщений на разных устройствах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196372/" target="_blank">Особенности встраивания в ключевые механизмы ядра Linux с использованием LSM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/196300/" target="_blank">Adobe hacked, 3 млн. аккаунтов скомпрометированы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196278/" target="_blank">Реакция сообщества сыграла свою роль — в Yahoo обновили программу вознаграждения за найденные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196164/" target="_blank">Задержан владелец Silk Road, изъяты 3,6 миллиона долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196134/" target="_blank">Как устроен VPN через SSTP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196094/" target="_blank">Бывший директор по приватности Microsoft теперь доверяет только открытому ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/196044/" target="_blank">Yahoo платит по $12.50 за XSS-уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195914/" target="_blank">BitTorrent Chat — теперь ФСБ за вами не проследит!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195808/" target="_blank">Настраиваем HTTPS-сервер на nginx</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/195788/" target="_blank">RCE в Android-приложениях через сторонние сервисы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/195784/" target="_blank">YAC-2013: круглый стол по проблемам DDoS-атак в сетях больших операторов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195718/" target="_blank">Как Сбербанк распространяет ваши личные данные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195558/" target="_blank">Готовимся к CCNA Security (IINS 554)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195632/" target="_blank">WebCrypt — сервис онлайн шифрования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195582/" target="_blank">Увидеть невидимое, или немного о секретах mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195544/" target="_blank">«Сбор средств на борьбу с антипиратским законом» — новый вид спама?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/195408/" target="_blank">Устройство системы Безопасного Поиска Яндекса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195052/" target="_blank">Добавляем безопасности браузеру Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/195320/" target="_blank">6 XSS на Хабрахабр и методы защиты с их последствиями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195150/" target="_blank">Debian: создаем пакеты для узкого круга систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194972/" target="_blank">Хэширование паролей в PHP 5.5 с использованием нового API</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/195028/" target="_blank">Удаленная блокировка Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/194916/" target="_blank">Информационная безопасность в Австралии, и почему пентест там уже не торт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194898/" target="_blank">Получение телефонного номера пользователя Facebook полным перебором</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194664/" target="_blank">Разбираем x.509 сертификат</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194794/" target="_blank">Журнал для ученика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/194700/" target="_blank">IE 0day (CVE-2013-3893) и DeputyDog operation</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194732/" target="_blank">Chaos Computer Club взламывают Touch ID</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194730/" target="_blank">Apple Touch ID — сканер отпечатков в iPhone 5S взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193688/" target="_blank">Открытый интернет-мессенджер Tox</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/194682/" target="_blank">Материалы конференции DEF CON 1993-2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/194190/" target="_blank">Рассказы участников о недавнем хак-квесте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194462/" target="_blank">Владельцам форумов на vBulletin — волна взломов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/194460/" target="_blank">Возможность обойти экран блокировки iOS 7.0 и получить доступ к фото. И к контактам!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194430/" target="_blank">Линуса Торвальдса просили вставить в ядро бэкдор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194374/" target="_blank">Бразилия хочет проложить BRICS Cable через Россию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ruvpn/blog/194364/" target="_blank">iOS 7 не поддерживает Connect On Demand в режиме Always On</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194004/" target="_blank">Допрос Митника в Хакспейсе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194316/" target="_blank">USB-кондом. Зловреды через USB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/194282/" target="_blank">WordPress: небезопасен из коробки — получаем RCE с правами редактора. И еще о Google, стартапе и 1 миллиарде долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/194258/" target="_blank">Второй мобильный Pwn2Own пройдет в Токио: призовой фонд более $300,000</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194034/" target="_blank">OFF Pocket — чехол для параноиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/194184/" target="_blank">Новая cross- Internet Explorer уязвимость эксплуатируется in-the-wild</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194154/" target="_blank">Дыра в безопасности IP-телефонов D-Link? Нет, это «Особенность»!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194106/" target="_blank">Как узнать все платежи в системе Яндекс.Деньги?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/194070/" target="_blank">Прошлое, настоящее и будущее виртуализации на ZeroNights 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/194046/" target="_blank">В Tor Bundle нашли уязвимость, позволяющую деанонимизировать пользователей, которой воспользовались агенты ФБР</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193996/" target="_blank">Возможный сценарий мошенничества с Yota</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193986/" target="_blank">PHP-шелл без единого буквенно-цифрового символа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193954/" target="_blank">Аппаратные трояны: теперь с допингом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193882/" target="_blank">Инфекция на сайте — история на примере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193944/" target="_blank">История одного виджета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193702/" target="_blank">Шифрования сообщений вконтакте методом AES для браузеров Chrome и Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193666/" target="_blank">Стеганография в .NET приложениях или водяные знаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/193618/" target="_blank">Hacker-friendly Software-defined radio</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193640/" target="_blank">Управление доступом на основе поведенческих характеристик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193638/" target="_blank">Роскомнадзор заблокировал крупнейший порносайт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/193594/" target="_blank">Отчёт с хакерского турнира и конференции по безопасности с Митником</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193584/" target="_blank">Этика (или неэтичность) массированного наблюдения правительства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193542/" target="_blank">Как оптимизировать подсчёт голосов в день голосования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193426/" target="_blank">Эгоцентрический веб</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193418/" target="_blank">Конспект выступления Кевина Митника в Москве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193424/" target="_blank">Под наблюдением АНБ: как остаться защищенным (Рекомендации Брюса Шнайера)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193320/" target="_blank">Ноль без палочки?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/193064/" target="_blank">Microsoft и Adobe выпустили обновления для своих продуктов, сентябрь 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193228/" target="_blank">Установка FreeBSD 9.1 с шифрованием корневого раздела</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193204/" target="_blank">ПриватБанк обвинил украинского программиста во взломе своего Android-приложения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193196/" target="_blank">Греки создали свой интернет с поисковиком и файлообменниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193194/" target="_blank">Американские интернет-компании собираются публиковать подробную статистику запросов АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193132/" target="_blank">Визуализация шаблонов использумых паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193068/" target="_blank">По данным Spiegel, NSA может получить данные почти с любого смартфона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/193028/" target="_blank">Google внедряет end-to-end шифрование между дата-центрами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192884/" target="_blank">Suricata как IPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/308898/" target="_blank">1 млн веб-камер заражены червем BASHLITE и используются для DDoS-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/308742/" target="_blank">Масштабируемые решения для EMV и мобильных NFC-платежей в закрытых сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/308774/" target="_blank">Визуализация атак, аномалий и нарушений информационной безопасности с помощью OpenGraphiti</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/308824/" target="_blank">Удостоверяющий центр из Китая по ошибке выдал пользователю SSL-сертификат для домена GitHub</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/e-Legion/blog/308748/" target="_blank">Опубликована программа Droidcon Moscow 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/308746/" target="_blank">Атака SWEET32: Исследователи обнаружили новый способ взлома шифров 3DES и Blowfish</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/308638/" target="_blank">Opera призывает своих пользователей сменить пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308634/" target="_blank">Функциональная безопасность – старшая сестра информационной безопасности, Часть 1 из 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308628/" target="_blank">Предостережение для пользователей Kubernetes</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/308618/" target="_blank">Security Week 34: уязвимость в iOS, Powershell-троян, коллизии против 3DES и Blowfish</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192914/" target="_blank">Кошелек Mailpile в Paypal был заморожен в течение суток</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192896/" target="_blank">Как не нужно освобождать интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192872/" target="_blank">Как конкретно освободить интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192852/" target="_blank">Правительство США предало интернет. Нам надо вернуть его в свои руки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/192294/" target="_blank">0day в расширении Any.DO — доступ к данным на всех сайтах (обход gmail 2-steps auth). Public disclosure. Затронуто ~500 тысяч пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/192822/" target="_blank">SecurityLab.ru запускает службу оперативного уведомления об уязвимостях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192800/" target="_blank">OSSEC: Большой Брат наблюдает за тобой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192722/" target="_blank">Сноуден пролил свет на ситуацию со взломом криптографии. Все плохо</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/192668/" target="_blank">Аутентификация в Cisco IOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192616/" target="_blank">Неожиданный финт Cisco ASA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192566/" target="_blank">Для кибердружинников создана своя социальная сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192530/" target="_blank">Nymi: аутентификация по биению сердца</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192466/" target="_blank">Исследователь компьютерных уязвимостей обнаружил баг, позволяющий удалять чужие фото из Фейсбука</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/189210/" target="_blank">В поисках лазеек: гид по DOM Based XSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190500/" target="_blank">Устанавливаем OSSEC (HIDS) и Prewikka (WebUI)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192252/" target="_blank">Как подключиться к Hyperboria</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192184/" target="_blank">Криптопереписка для недоверчивых</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192200/" target="_blank">Новый Vogue. Теперь банановый</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192122/" target="_blank">Типичные уязвимости на сайтах, со статистикой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192054/" target="_blank">Получение root доступа в Mac OS X без пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/192022/" target="_blank">Атака канального уровня ARP-spoofing и как защитить коммутатор Cisco</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/192014/" target="_blank">Атаки в Facebook ежегодно приносят злоумышленникам $200 млн прибыли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190938/" target="_blank">Российские рекламщики предложили интернет-провайдерам бесплатный DPI в обмен на слежку за пользователями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191954/" target="_blank">Первые несколько миллисекунд HTTPS соединения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/191866/" target="_blank">Форматы электронной подписи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191874/" target="_blank">PPTP vs L2TP vs OpenVPN vs SSTP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191742/" target="_blank">Хакаем Transcend WiFi SDHC карту памяти</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191684/" target="_blank">BitTorrent sync стал доступен для iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191670/" target="_blank">Сирийские хакеры подменили DNS-записи Twitter и The New York Times</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/191642/" target="_blank">Кевин Митник приедет в Москву выступать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191662/" target="_blank">Реверс-инжиниринг клиента Dropbox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191644/" target="_blank">Mailpile собрал $120K на разработку open source криптопочты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/191632/" target="_blank">Microsoft перевыпускает MS13-057 и MS13-061</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191522/" target="_blank">Роскомнадзор VS TitanPoker</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191450/" target="_blank">Взлет и падение начинающего фрикера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191448/" target="_blank">Немножко анонимен</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191434/" target="_blank">Поиск уязвимостей у хабросайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191386/" target="_blank">Tor предлагают встроить в браузер Firefox как стандартную опцию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/191384/" target="_blank">Найти и обезвредить. Как раскрыть местоположение мобильного абонента</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191240/" target="_blank">Эллиптическая криптография: практика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190258/" target="_blank">Безопасность банковских пластиковых карт — миф или реальность?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191316/" target="_blank">Плюсы и минусы различных подходов обеспечения анонимности в сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190664/" target="_blank">Методы анонимности в сети. Часть 2. Утечки данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/191254/" target="_blank">Правительство Германии предостерегает ведомства страны от использования Windows 8</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/191148/" target="_blank">Отправка сообщения от любого пользователя любому. ̶$̶6̶0̶0̶ Бесплатно ;)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/191002/" target="_blank">Скрестить ужа с ежом. Найти все-все 0-day. Захватить Вселенную!11</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190994/" target="_blank">В Петербурге задержали десятки африканцев по делам о «нигерийских письмах»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190682/" target="_blank">Деобфускация одного зловредного кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190972/" target="_blank">Заявление Брэдли Мэннинга после вынесения приговора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190940/" target="_blank">Турбофильм переводит своих пользователей на VPN, выводя из под юрисдикции РФ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190884/" target="_blank">Заблокирован первый сайт по «антипиратскому» закону UPD + полный список сайтов для блокировки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190816/" target="_blank">Вконтакте включил https почти по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190710/" target="_blank">Android хранит незашифрованные пароли от Wi-Fi на серверах Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190696/" target="_blank">Сообщество собирает деньги для хакера, которому не заплатил Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190602/" target="_blank">Загадка A858</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190554/" target="_blank">Запуск Aircrack-ng и Reaver на Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190488/" target="_blank">Cookie без куков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190478/" target="_blank">Разработчик сообщил о баге в Facebook на страницу Цукерберга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190396/" target="_blank">Методы анонимности в сети. Часть 1. Просто о сложном</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190260/" target="_blank">Как я нашел уязвимость на phpclub.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190188/" target="_blank">Это наша вина… Смиритесь с этим</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190148/" target="_blank">Scrambls — защита Вашей интеллектуальной собственности и шифрование в соцсетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/190130/" target="_blank">Безопасность электронной почты: шифрование писем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/190108/" target="_blank">Microsoft отзывает MS13-061</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/190016/" target="_blank">ntdll!LdrHotPatchRoutine & DEP/ASLR bypass (MS13-063)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189996/" target="_blank">О кибервойсках</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/189578/" target="_blank">Microsoft выпустили очередной набор обновлений, август 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/189828/" target="_blank">Chaos Construction 2013: hackquest review-writeup</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189674/" target="_blank">Foscam: Перезагрузка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189672/" target="_blank">Обама пообещал сделать программы разведки более прозрачными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189668/" target="_blank">The Pirate Bay исполнилось 10 лет, и они запустили браузер для обхода цензуры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189644/" target="_blank">Презумпция виновности в интернете. Когда нужно доказывать, что ты не верблюд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189596/" target="_blank">Смешанный (клиент/сервер) алгоритм формирования цифровой подписи xmlDsig на основе CryptoPro Browser Plugin</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/189560/" target="_blank">Социальная инженерия: ликбез про метод атаки, который никогда не устаревает</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188958/" target="_blank">Эллиптическая криптография: теория</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189514/" target="_blank">CreepyDOL — мобильная шпионская сеть на основе Raspberry Pi</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189510/" target="_blank">Почтовый сервис Lavabit вынужден закрыться</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/189434/" target="_blank">Backdoor от SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/189032/" target="_blank">DKIM в Яндекс.Почте для доменов — как развивается безопасность электронной почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189266/" target="_blank">Dissent — протокол анонимной связи малых закрытых сообществ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189040/" target="_blank">Ищите ошибки с помощью Google или «взлом» аккаунтов на badoo.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/189036/" target="_blank">IP-камеры Foscam по умолчанию транслируют в сеть, каждый 3-й владелец об этом не подозревает</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188996/" target="_blank">Программный комплекс для проведения автоматизированного аудита виртуальной среды на предмет наличия ошибок в конфигурации безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188966/" target="_blank">Новый вид атак — атаки на автомобили</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/188974/" target="_blank">Firefox 17 0day via Freedom Hosting</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188922/" target="_blank">Японские высокотехнологичные туалеты подвержены «взлому» по Bluetooth</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188914/" target="_blank">Основатель Freedom Hosting арестован в Ирландии и ждет экстрадиции в США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188894/" target="_blank">И снова сертификат Mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188878/" target="_blank">Как узнать, что ваш PHP сайт был взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188846/" target="_blank">Эксперты призывают готовиться к криптоапокалипсису</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188808/" target="_blank">MEGA выпустили собственный SDK</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188714/" target="_blank">Криптошлюз Vipnet Failover или как не надо реализовывать отказоустойчивость</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188732/" target="_blank">Взлом серверов BitTorrent</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188454/" target="_blank">Абоненты МГТС GPon под угрозой взлома, новые сети – новые проблемы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188648/" target="_blank">Эдвард Сноуден получил временное убежище в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/188574/" target="_blank">Безопасность мобильного интернета изнутри и снаружи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188578/" target="_blank">XKeyscore — еще одна секретная программа от АНБ США, раскрытая Сноуденом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188474/" target="_blank">Настройка OpenVPN шлюза в интернет на Debian, который на OpenVZ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188328/" target="_blank">Один крупный банк, доступ ко всем счетам клиента при наличии копии паспорта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188222/" target="_blank">Struts2 is under attack или CVE-2013-2115</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/308600/" target="_blank">Российский хакер признан виновным в краже $169 млн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308566/" target="_blank">Reverse engineering тестового crackme от Лаборатории Касперского v2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308560/" target="_blank">iOS 9.3.5: исправления безопасности и неудачная атака против правозащитника из Арабских эмиратов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/308558/" target="_blank">Apple выпустила экстренное обновление для iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308548/" target="_blank">Reverse engineering тестового crackme от Лаборатории Касперского</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tottoli_gsm/blog/308432/" target="_blank">Все под контролем: защищаем корпоративные разговоры. Часть 3: защищенная SIM-карта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123238/" target="_blank">Я заглянул в приложение Prisma, и вы не поверите, что я там нашёл</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/308242/" target="_blank">Ломаем сбор мусора и десериализацию в PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/307850/" target="_blank">Корпоративные лаборатории — актуальная программа обучения специалистов по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dellemc/blog/308334/" target="_blank">Основные мировые события, хактивизм и #OpOlympicHacking</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188236/" target="_blank">SIM-карты пассажиров московского метро подвергнутся бесконтактному считыванию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188198/" target="_blank">Как не нужно реализовывать двухфакторную авторизацию на примере одного банка, или почему продакт-менеджер должен консультироваться с безопасниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188042/" target="_blank">Как HTTPS обеспечивает безопасность соединения: что должен знать каждый Web-разработчик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188152/" target="_blank">Хеш-функция Стрибог или в городе новый шериф</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188168/" target="_blank">Пять человек обвиняются в совершении крупнейшей кражи финансовых данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188072/" target="_blank">Программист Google выиграл награду АНБ, а потом сказал, что эту организацию нужно упразднить</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/188024/" target="_blank">Вы используете универсальный пароль для клиентских сайтов?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/188016/" target="_blank">Суд запретил публикацию кодов запуска люксовых автомобилей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187992/" target="_blank">Американским агентам «повезло» в преследовании русских хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187980/" target="_blank">Хакер-докладчик на Black Hat Джек Барнаби умер за несколько дней до конференции</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/187962/" target="_blank">Ботнеты на основе TOR</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187934/" target="_blank">Власти США требуют у крупнейших интернет-компаний раскрыть пароли пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/187880/" target="_blank">KINS — новый crimeware toolkit</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/186430/" target="_blank">HP Store Once</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/qiwi/blog/187724/" target="_blank">3 истории Ethic Hack. Как хакеры помогают QIWI ликвидировать баги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/187636/" target="_blank">Тестирование сканеров безопасности веб-приложений: подходы и критерии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187612/" target="_blank">Хакеры получили доступ к базе данных OVH.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187542/" target="_blank">DES уязвимость SIM-карт. Есть ли повод для опасений?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187402/" target="_blank">DarkJPEG: cтеганография для всех</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187422/" target="_blank">Обстоятельное интервью Ричарда Столлмана о слежке и свободе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187408/" target="_blank">Специалист по безопасности рассказал о взломе Apple Developer Center</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/187380/" target="_blank">iOS Developer Center взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187376/" target="_blank">750 миллионов мобильных телефонов уязвимы для злоумышленников из-за недостаточно защищенных SIM карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187266/" target="_blank">Как я учился в Информзащите</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187130/" target="_blank">Как стать Мэром Краснодара</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187126/" target="_blank">Google, Apple и Facebook хотят раскрывать запросы АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tzor/blog/187028/" target="_blank">Кибер-безопасность. Еженедельный обзор 8 июля — 14 июля 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187022/" target="_blank">В Google думают над шифрованием файлов Google Drive</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/187018/" target="_blank">Критическая уязвимость многих роутеров Asus</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186838/" target="_blank">Безопасность GSM сетей: шифрование данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186968/" target="_blank">Google исправил уязвимость, позволявшую получить полный удалённый доступ к Glass</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/186892/" target="_blank">Отчёты с прошедших хакерских турниров C^2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186860/" target="_blank">EFF подаёт в суд на АНБ, Министерство юстиции и ФБР</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/186856/" target="_blank">Microsoft: спецслужбы заставляют нас оправдываться перед пользователями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/186844/" target="_blank">На чем хранить бэкапы: Лента VS Дисковые СХД</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186840/" target="_blank">История сценера и крупнейшего релизёра EliteTorrents, который «отделался» условным сроком</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186824/" target="_blank">Сотрудник Google стал первым, кому Microsoft заплатил за найденную уязвимость в IE11</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/186800/" target="_blank">PHDays III CTF: взгляд изнутри (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186744/" target="_blank">Новые бэкдоры в серверной продукции HP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186732/" target="_blank">Использование screen для логирования действий (аудита) пользователей в Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186698/" target="_blank">Полиция Великобритании может конфисковать телефоны и личные данные путешественников на границе без указания причины</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186592/" target="_blank">Microsoft начинает выплачивать вознаграждения за найденные в своих продуктах баги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/186580/" target="_blank">NY Times: правительства заинтересованы в 0day</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186460/" target="_blank">Microsoft помогал АНБ и ФБР шпионить за пользователями Hotmail, Skype и Outlook</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/186072/" target="_blank">Руткиты: проблемы безопасности и тенденции развития</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186392/" target="_blank">Ким Дотком (Mega, Megaupload) собирается запустить защищенный от прослушки мессенджер и электронную почту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186362/" target="_blank">Прокачка debian/ubuntu сервера для маленьких</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/170949/" target="_blank">Wi-Fi с логином и паролем для каждого пользователя или делаем WPA2-EAP/TLS подручными средствами</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/186310/" target="_blank">PHDays III CTF: взгляд изнутри (часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tzor/blog/186328/" target="_blank">Кибер-безопасность. Еженедельный обзор 1 июля — 7 июля 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186302/" target="_blank">ФСО закупает пишущие машинки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186292/" target="_blank">Призер всероссийской олимпиады по информатике задержан во время взлома банкомата</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186288/" target="_blank">По мнению Совета Федерации, пользовательское соглашение Google противоречит Конституции РФ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186274/" target="_blank">Сверхзащищенность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186266/" target="_blank">В Москве обнаружены фальшивые банкоматы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186246/" target="_blank">Сооснователь Пиратской Бухты создаёт мобильный мессенджер, защищённый от прослушки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186160/" target="_blank">Сражаясь с анонимностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186126/" target="_blank">IKEv2 и Flex VPN средствами Cisco IOS. Синтаксис и логика работы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186170/" target="_blank">Почта России потеряла свой твиттер за долги, а до этого говорила, что его взломали</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/186118/" target="_blank">Приглашаю на хак-квест CRC — турнир по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/185902/" target="_blank">Microsoft выпустили очередной набор обновлений, июль 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186086/" target="_blank">Google выпустила патч для уязвимости в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/186062/" target="_blank">ZeroNights 2013 приглашает хакеров, друзей и единомышленников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186046/" target="_blank">Поиск пропавшего android-смартфона и управление удаленным девайсом. Сервис Reptilicus</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it/blog/185930/" target="_blank">Дружим Check Point и ГОСТовое шифрование</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185946/" target="_blank">Oracle Label Security. Первое знакомство</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/186000/" target="_blank">Описание протокола BitMessage</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185916/" target="_blank">Орудия для государственной измены</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185914/" target="_blank">MediaMarkt раскрывает личные данные своих подписчиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185836/" target="_blank">Европейские регуляторы хотят, чтобы Google переписал свою политику конфиденциальности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185784/" target="_blank">Сотрудники Яндекса предупреждают о некорректной работе сервиса odnaknopka.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185768/" target="_blank">Oracle 12c Data Redaction. Сокрытие информации от непривилегированных пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185648/" target="_blank">Секретность карт, координат и ДДЗ на бытовом уровне</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185632/" target="_blank">Со дня рождения Джорджа Оруэлла — 110 лет. Оденем все камеры наблюдения в праздничные шапочки!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185618/" target="_blank">Техподдержка Google или её отсутствие. Алгоритмы поиска помощи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185580/" target="_blank">0+ / 18+ ставить или нет?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185546/" target="_blank">Об особенностях настроек безопасности «Интернет от МГТС»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/boxowerview/blog/185516/" target="_blank">Уязвимость в Android позволяет злоумышленникам превратить любое приложение в троян</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185492/" target="_blank">Немного про UEFI и Secure Boot</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185474/" target="_blank">Утечка учетных записей Ubisoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/185450/" target="_blank">Телевизор-шпион, или опасности использования рисоварок: доклады и конкурсы на NeoQUEST-2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185446/" target="_blank">EFF вступился за хакера, нашедшего уязвимость на сайте AT&T и попавшего за решётку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/185402/" target="_blank">Итак, вы решили создать security отдел…</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/185370/" target="_blank">Ликбез по информационной безопасности сегодня</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/185248/" target="_blank">Аутентификация по-новому, или суперкуки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/184892/" target="_blank">Обзор камер для наружного наблюдения Grandstream GXV3672_HD/FHD</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156909/" target="_blank">Электронная дактилоскопия средствами интернет бразуера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tzor/blog/184988/" target="_blank">Кибер-безопасность. Еженедельный обзор 17 июня — 23 июня 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/184980/" target="_blank">Голосовые отпечатки: скорее всего, вы уже успели «наследить»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184972/" target="_blank">Вместо паролей тату и… таблетки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184802/" target="_blank">У Opera Software украли сертификат и подписали им malware</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184636/" target="_blank">Пожар и гики</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184504/" target="_blank">«Конкурентная разведка» на PHD-2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184518/" target="_blank">Советы по защите для Cloud Computing (Германия)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/184450/" target="_blank">Прохождение конкурса “Конкурентая разведка“ на PHDays III</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/184428/" target="_blank">EMET v4 Release</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/184404/" target="_blank">Найден способ установки эксклюзивных приложений Nokia на любой смартфон с WP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184390/" target="_blank">Первый случай конфискации биткоинов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184354/" target="_blank">Google был вынужден передать властям США переписку двух волонтёров Wikileaks</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184306/" target="_blank">Незаконченная история одного e-mail'а</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271319/" target="_blank">OSSIM. Создание простого плагина для разбора логов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308236/" target="_blank">Аудит уязвимостей Linux c Vulners.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/308206/" target="_blank">День открытых дверей в «Лаборатории Касперского»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/308158/" target="_blank">Microsoft меняет модель обновления Windows 7 и 8.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308116/" target="_blank">Мониторинг лог-журналов: Такой уязвимый лог или как подложить свинью коллегам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/308130/" target="_blank">Security Week 33: отключение Secure Boot, сортировка адресатов в GMail, последствия TCP-бага в Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/thirdpin/blog/307982/" target="_blank">Расшифровка базы данных KeePass: пошаговое руководство</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/308088/" target="_blank">Безопасное использование языка Go в веб-программировании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/308074/" target="_blank">Cisco и Fortinet выпустили уведомления безопасности после утечки данных Equation Group</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/308064/" target="_blank">Cisco и Fortinet подтвердили наличие уязвимостей, опубликованных хакерами The Shadow Brokers</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184246/" target="_blank">На Эдварда Сноудена завели уголовное дело за шпионаж</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tzor/blog/184152/" target="_blank">Кибер-безопасность. Еженедельный обзор 10 июня — 16 июня 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184150/" target="_blank">Моё маленькое расследование или История одного взлома</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/184060/" target="_blank">NeoQUEST-2013: очная ставка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184100/" target="_blank">Как удалить антивирус McAfee: видеоинструкция с горничными, массажистками и солью для ванной</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184068/" target="_blank">Photoshop CC взломали всего за один день</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/184014/" target="_blank">Могут ли компании снова доверять Microsoft? Спецслужбы получали информацию о 0-day уязвимостях Windows и Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183992/" target="_blank">Способ защиты от несанкционированного копирования файлов в корень флеш-карты для юзеров OS WINDOWS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183976/" target="_blank">Online IDE и Local File Inclusion</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nordavind/blog/183732/" target="_blank">Общественное обсуждение проекта ГОСТ по защите оцифрованных видеоданных от случайного и преднамеренного искажения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183934/" target="_blank">Саморазмножающиеся инстансы в облаках, как замена «вирусам в исполняемых файлах»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183928/" target="_blank">Microsoft заплатит за поиск уязвимостей в Windows 8.1 и IE 11</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183878/" target="_blank">Взлом аккаунта и юникодные символы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/183760/" target="_blank">Маленький британский шпион – закладка на Raspberry Pi</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183858/" target="_blank">Клавиатурный ввод с использованием IME</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183762/" target="_blank">История варезной группы Drink or Die</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183606/" target="_blank">Hyperboria: Маршрутизация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/135599/" target="_blank">Защита систем интернет-банкинга: TLS, электронная подпись, ГОСТы, токены</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183622/" target="_blank">28 июня 2013 года Уолл-Стрит ждёт «Квантовый рассвет»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181954/" target="_blank">Об одной ошибке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183526/" target="_blank">АНБ-драма продолжается: GCHQ прослушивало переговоры политиков на саммите G20 и строило подставные интернет-кафе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183520/" target="_blank">Почему Гонконг — это отличный вариант для Сноудена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183190/" target="_blank">ICQ, новые функции — новые дыры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183482/" target="_blank">АНБ признало факт прослушивания телефонных разговоров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183350/" target="_blank">Телефонный номер пользователя отечественных соцсетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183314/" target="_blank">Backdoor в роутерах D-Link</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183302/" target="_blank">Очередная дыра в системе безопасности Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183300/" target="_blank">Преимущества и недостатки безопасности SaaS сервиса. Решение по безопасности SaaS сервиса от компании IBM. Обеспечение безопасности облака от компании КРОК</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183292/" target="_blank">Технология аутентификации с помощью доверенных лиц</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/183250/" target="_blank">Хакеры против Правительства: почему гики разглашают информацию?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183234/" target="_blank">Эдвард Сноуден заявил, что АНБ взламывало сотни машин в Китае</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/beeline/blog/183164/" target="_blank">Моя работа — ждать IT-катастрофы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183168/" target="_blank">Угрозы облачных вычислений и методы их защиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183068/" target="_blank">Как Google передает данные правительству США? Объяснение от корпорации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/183046/" target="_blank">Mozilla, EFF и ещё 84 компании и организации объединились против шпионажа АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/182494/" target="_blank">Microsoft выпустили очередной набор обновлений, июнь 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tzor/blog/182994/" target="_blank">Кибер-безопасность. Еженедельный обзор 27 мая — 02 июня 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182988/" target="_blank">Нидерландская разведка имела доступ к данным PRISM и внедряла агентов в IT-компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/181936/" target="_blank">Нестандартный способ получить недоступную информацию на iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182954/" target="_blank">SMB Hijacking. Kerberos не помеха</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182942/" target="_blank">Эдвард Сноуден выписался из гостиницы в Гонконге и скрылся</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182930/" target="_blank">Это заразно: закручивание гаек в информационном пространстве Украины</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182760/" target="_blank">Bunny: Скрываем трафик в шуме Wi-Fi</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182508/" target="_blank">Эксперименты с VMware</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182704/" target="_blank">Инфографика — Tor, HTTPS и безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182700/" target="_blank">Облачный способ организации VPN для объединения сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182698/" target="_blank">Эдвард Сноуден: осведомитель, который выдал секреты АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182652/" target="_blank">Hyperboria: Как все устроено</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182648/" target="_blank">The Guardian опубликовало очередной слайд из секретной презентации о PRISM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182616/" target="_blank">Google и Facebook не давали разведке прямого доступа к серверам, но создавали для неё «защищённые порталы»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182554/" target="_blank">Ларри Пейдж о программе PRISM: «What the ...?»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/182450/" target="_blank">The Washington Post: АНБ собирает данные непосредственно с серверов Google, Facebook, Microsoft и Apple</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182434/" target="_blank">Физики научились терять в дифракционных карманах до 46% трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182296/" target="_blank">Кто лучше: хакер или аналитик безопасности...?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182390/" target="_blank">WeCanTrust — проект РосКомНадзора для обсуждения списка заблокированных сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/182318/" target="_blank">Microsoft приступили к операции против преступной схемы Citadel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182288/" target="_blank">ФСБ открестилось от идеи запретить анонимайзеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182274/" target="_blank">Попытка взять хабраинтервью у бывшего сценера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/182246/" target="_blank">Обнаружен эксплоит локального повышения прав в ОС Windows CVE-2013-3660</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182184/" target="_blank">С AurumXchange, похоже, не все в порядке</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/182180/" target="_blank">Как я учил Африканцев из ЮАР защищать SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182178/" target="_blank">Обнаружена сеть кибершпионажа, действующая в 40 странах мира</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182154/" target="_blank">Определение IP-адреса в скайпе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182150/" target="_blank">Общественный совет при ФСБ предлагает запретить Tor и сайты-анонимизаторы, привлечь к ответственности их создателей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/182080/" target="_blank">Силовики предлагают запретить ПО, скрывающее пользователя в Сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ruvpn/blog/182072/" target="_blank">VPN для обычных пользователей. Реальная необходимость или бесполезная опция?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/182058/" target="_blank">Разбор заданий конкурса по анализу защищенности сетевой инфраструктуры NetHack</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/182012/" target="_blank">Модифицированная зарядка может взломать любое устройство на iOS за минуту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181956/" target="_blank">Отказоустойчивость систем на базе HP Storageworks P4xxx без третьего дата центра</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tzor/blog/181450/" target="_blank">Mercury — вестник android-багов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181530/" target="_blank">Согласование действий пользователей в VMware перед их выполнением</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181436/" target="_blank">Новый сервис логинов Login with Amazon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181320/" target="_blank">Повышаем безопасность закрытых ssh-ключей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181313/" target="_blank">Рассылки на почтовые адреса ВКонтакте &quot;@post.vk.com&quot; ведут к нарушению конфиденциальности личных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ruvpn/blog/181223/" target="_blank">Мобильные устройства Apple в корпоративном секторе. Профили конфигурации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181115/" target="_blank">Правообладатели США просят законности использования вредоносного ПО против пиратов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179917/" target="_blank">Как работает FIDO</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/181013/" target="_blank">17-летний подросток опубликовал 0day XSS в PayPal после того, как ему отказали в вознаграждении</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180899/" target="_blank">Как хвост виляет собакой. Азбука пропаганды</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ruvpn/blog/180817/" target="_blank">Нагрузочное тестирование проекта ruVPN, технология IPSec VPN-on-Demand для iPhone, iPad</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180711/" target="_blank">Ким Дотком и двухфакторная авторизация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180623/" target="_blank">Защищаем персональные данные по новому приказу ФСТЭК. Больше ответов или вопросов?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180525/" target="_blank">RiSCiSO — ещё одна группа сценеров, попавшая под удар ФБР</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180503/" target="_blank">Наборы обновлений для Windows XP x86 и Windows 7 x86-x64</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/deiteriy/blog/180317/" target="_blank">Краудсорсинг при разработке государственных стандартов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/180287/" target="_blank">PHDays Everywhere: участвуйте в форуме из любой точки планеты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/deiteriy/blog/180221/" target="_blank">Безопасность платежей. Часть 1: Стандарт PCI DSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180163/" target="_blank">Skype — Да, мы читаем все, что Вы пишете</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180147/" target="_blank">Skype просматривает содержимое ссылок отправленных в чате</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nordavind/blog/180063/" target="_blank">Камуфляж против видеонаблюдения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/180049/" target="_blank">Rambler раздает поиск Яндекса через трояны на торрентах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179981/" target="_blank">Mail.Ru тестирует новый способ заражения компьютеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179973/" target="_blank">Мне и ещё 103045 человек нравится видео, которое я не смотрел</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179963/" target="_blank">Виртуальная степень свободы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179861/" target="_blank">Microsoft исправила уязвимость с синим экраном</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179735/" target="_blank">0day уязвимость в Linux от 2.6.37 до 3.8.10</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/179315/" target="_blank">Microsoft и Adobe выпустили обновления для своих продуктов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179677/" target="_blank">Apple расширила двухфакторную верификацию на весь мир</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/179653/" target="_blank">Новые доклады на PHDays III: от безопасности АСУ ТП до анализа эксплойтов нулевого дня в Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179627/" target="_blank">Суперзащищенные флешки и жесткие диски</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ru_mts/blog/308044/" target="_blank">Как работает Центр оперативного управления мобильной сетью МТС</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/308030/" target="_blank">В библиотеке шифрования Libgcrypt обнаружена критическая уязвимость, существовавшая 18 лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/308014/" target="_blank">Насколько защищены от кибератак банки и биржи: Статистика и мнения экспертов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307974/" target="_blank">Будущее безопасности мобильных приложений, или чему нас могут научить покемоны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/307948/" target="_blank">Опубликованные данные элитной кибергруппировки Equation Group не оказались шуткой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307898/" target="_blank">Рокетбанк подверг риску персональные данные клиентов и данные банковских карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307828/" target="_blank">Обнаружен новый механизм взлома облачных виртуальных машин</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/307780/" target="_blank">Взлом Equation Group: файлы создателей Stuxnet, Duqu и Flame продаются на аукционе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/307792/" target="_blank">Известная кибергруппировка Equation Group могла подвергнуться масштабному взлому</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307774/" target="_blank">Анализ трафика Android-приложений: обход certificate pinning без реверс-инжиниринга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179543/" target="_blank">Как уронить Windows шестью строчками кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179493/" target="_blank">Деньги полученные с использованием бага Diablo 3 пойдут на благотворительность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179475/" target="_blank">Управление привилегированными учетными записями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/179467/" target="_blank">Автор Hydra, Amap и SuSEFirewall выступит на PHDays</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179219/" target="_blank">Port knocking или как обезопасить себя от брута по ssh</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179179/" target="_blank">Оценка эффективности и защищённости механизмов аутентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179189/" target="_blank">В США предлагают легализовать снятие SIM lock и обход DRM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/179161/" target="_blank">Экономика Diablo III была разрушена целочисленным переполнением</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179135/" target="_blank">Индия запускает систему слежения за всеми звонками, SMS-перепиской и интернет-активностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/179067/" target="_blank">Исследуем игру с аркадного автомата ч. 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178975/" target="_blank">В Лос-Аламосе более двух лет работает квантовая сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178955/" target="_blank">Некриптографические хеш-функции и DoS атака на них</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178501/" target="_blank">Shodan – самый страшный поисковик Интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178603/" target="_blank">Mozilla протестует против шпионской программы под видом Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/178595/" target="_blank">Полностью бесплатная двухфакторная аутентификация для Citrix Web Interface 5.x с использованием Mobile-OTP в качестве софт-токена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178575/" target="_blank">Анонимный сайт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178549/" target="_blank">Идеологическая уязвимость, атака на пулы майнинга криптовалют</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178489/" target="_blank">Защита Citrix Web Interface от brute-force атак с помощью CAPTCHA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/178439/" target="_blank">Хакерские соревнования на Positive Hack Days III</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178393/" target="_blank">Реализация перехвата вызовов API</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/178357/" target="_blank">Валидация запросов ASP.NET: от &lt;?i[a-z!/\?]|&# до XSS Type-1 WAF</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178195/" target="_blank">Взломать Skype? Легко!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178189/" target="_blank">Простой способ обнаружения эмуляторов ключа Guardant</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/178153/" target="_blank">Как выглядит DDoS-атака</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/178055/" target="_blank">Уязвимость в Viber позволяет обходить блокировку Android-смартфона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177849/" target="_blank">Сайты начнут блокировать за «призывы к насилию»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/177815/" target="_blank">Первые мастер-классы PHDays III: киберрасследования, атаки на SAP и Windows kernel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177813/" target="_blank">Google присоединился к FIDO Alliance для поиска надежной альтернативы парольной аутентификации пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177551/" target="_blank">Классификация механизмов аутентификации пользователей и их обзор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177547/" target="_blank">StrongSwan. Remote Access VPN с использованием MSCHAPv2-EAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177433/" target="_blank">ЦРУ — большие задачи и большие данные. На пути к созданию глобального информационного колпака</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177453/" target="_blank">Обзор IPSEC демона StrongSwan</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177493/" target="_blank">Фишинговые письма под банк «Русский стандарт»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177275/" target="_blank">Пираты XX века</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176631/" target="_blank">Основы безопасности операционной системы Android. Native user space, ч.2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nordavind/blog/177355/" target="_blank">Схема разделения секретной визуальной информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/177265/" target="_blank">EMET v4 вышел в бету</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177293/" target="_blank">Wikileaks опубликовал пятичасовую беседу Эрика Шмидта и Джулиана Ассанжа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/177223/" target="_blank">Racoon vs. OpenSWAN: Настройка IPSEC VPN туннеля HOST-TO-SITE с Cisco и L2TP over IPSEC для Windows, iOS и Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/samurai/blog/176987/" target="_blank">Статья-отчет от компании R.LAB о тестировании «самураев»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it/blog/176887/" target="_blank">Пробрасываем толстый клиент через SSL туннель с шифрованием по ГОСТ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/176703/" target="_blank">Oracle исправляет 42 уязвимости в Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176911/" target="_blank">Возвращаем приватность или большой брат следит за мной на стандартных настройках. Часть 3. Настраиваем «Фейсбук» и «Вконтакте»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176687/" target="_blank">Подводная лодка USS Jimmy Carter, её специальные задачи и подводные оптические кабели</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176677/" target="_blank">Скрытное подсоединие к оптоволокну: методы и предосторожности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176819/" target="_blank">Уязвимость в почте mail.ru, позволяющая сменить пароль на любом ящике без секретного вопроса</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/176513/" target="_blank">Берем под контроль криптографию в облачном хранилище MEGA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176693/" target="_blank">MiTM атака на SSH</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176657/" target="_blank">Повышение безопасности сервера RemoteApp</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176603/" target="_blank">Об изменениях в сертификации Cisco</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176577/" target="_blank">Распределённая атака на WordPress сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176581/" target="_blank">Хотите заблокировать распространённые пароли? Извините, это запатентовано</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176499/" target="_blank">Маниакальный Синдром Взлома</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/176523/" target="_blank">Microsoft советует воздержаться от установки обновления MS13-036</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176481/" target="_blank">Уязвимость на Habrahabr или как украсть инвайт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/176381/" target="_blank">Исследователь продемонстрировал перехват управления самолетом при помощи Android-приложения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176131/" target="_blank">Основы безопасности операционной системы Android. Native user space, ч.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/175531/" target="_blank">Microsoft выпустили очередной набор обновлений, апрель 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/176129/" target="_blank">Русские хакеры взломали uPlay, в сеть утекла игра Far Cry 3: Blood Dragon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175941/" target="_blank">Аутентификация с помощью мозговых волн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175959/" target="_blank">Мимолётный зловред</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175939/" target="_blank">Новая дыра в безопасности Мегафона позволяет взламывать счета абонентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/badoo/blog/175865/" target="_blank">Конкурс уязвимостей, или Ломай меня полностью!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175837/" target="_blank">WikiLeaks представил поисковый механизм по более чем 2 млн. документам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175517/" target="_blank">Основы безопасности операционной системы Android. Уровень ядра</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175737/" target="_blank">Новый skype-троян превращает компьютер в раба, добывающего Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175699/" target="_blank">Произошла утечка одного из UEFI-ключей компании AMI?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/drweb/blog/175585/" target="_blank">Carberp: конец истории</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175557/" target="_blank">Система оплаты проезда общественного транспорта Москвы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175487/" target="_blank">Wikileaks отдыхает — ICIJ опубликовал исследование крупнейшей утечки данных об офшорных счетах сильных мира сего</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175447/" target="_blank">Крупнейшая биржа Биткоин Mt. Gox под DDoS-атакой — владельцы подозревают, что атакующие хотят спровоцировать панику</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/175205/" target="_blank">Чёрные списки: как мы судились с Роспотребнадзором</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174937/" target="_blank">AT&T запретил нецензурные пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174643/" target="_blank">Cyberbunker vs Spamhaus</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174489/" target="_blank">Политика информационной безопасности — опыт разработки и рекомендации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174483/" target="_blank">Одна из самых больших DDoS-атак в истории</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174451/" target="_blank">Возвращаем приватность или большой брат следит за мной на стандартных настройках. Часть 2. Блокируем следящие скрипты на сайтах и настраиваем VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174423/" target="_blank">Уязвимость нулевого дня в roundcube</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174397/" target="_blank">Биометрия 2013: пора отказываться от банковских карт. Мечта?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/174401/" target="_blank">У iPhone больше уязвимостей, чем у Android, BlackBerry и Windows Phone вместе взятых</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/174281/" target="_blank">Carberp: бесконечная история</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/174221/" target="_blank">Идентифицировать человека среди 1 500 000 пользователей мобильной связи можно всего по 4 точкам во времени и пространстве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173869/" target="_blank">Обновился Intercepter-NG</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/173835/" target="_blank">Стартует второй этап Call for Papers форума PHDays III</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173827/" target="_blank">Apple представила двухфакторную верификацию для Apple ID и iCloud аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173285/" target="_blank">Фрилансер — история одного пентеста</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173691/" target="_blank">Взлом тега в 100 символов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173697/" target="_blank">Новая уязвимость позволяет обойти экран блокировки в iOS 6.1.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173651/" target="_blank">Почтовые индексы — на свободу! (Реверсинг в картинках)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173647/" target="_blank">Очередная уязвимость в локскрине некоторых смартфонов Samsung</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/173609/" target="_blank">Норвегия и Южная Корея подверглись масштабным кибератакам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173607/" target="_blank">Динамический графический пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173501/" target="_blank">Burn-in рутовый шелл в IP-камерах Vesta и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173493/" target="_blank">Лига защиты интернета будет оповещать о угрозах свободы Сети по примеру Бетмена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173461/" target="_blank">Возвращаем приватность или большой брат следит за мной на стандартных настройках. Часть 1. Браузер и настройки сервисов «Гугла»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173463/" target="_blank">Цена скелетов в шкафу</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/badoo/blog/173393/" target="_blank">Проверь Badoo на прочность! Месяц поиска уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173067/" target="_blank">Безопасность приложения: это почти просто</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/173377/" target="_blank">SIEM для ИТ и ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/173125/" target="_blank">Готовим Nginx к PCI Compliance</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307734/" target="_blank">Cистематическая уязвимость сайтов, созданных на CMS 1С-Битрикс</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/307662/" target="_blank">Security Week 32: проект Саурон, уязвимость в iOS, червь в PLC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307628/" target="_blank">Tinkoff скомпрометировал данные о балансе карт своих клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/283056/" target="_blank">Системы обработки данных при проведении тестирования на проникновение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/307424/" target="_blank">Игра в кошки-мышки: как создавался антиспам в Почте Mail.Ru и при чем здесь Tarantool</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/307576/" target="_blank">Голосовые «отпечатки» теперь официально работают (и как выглядит процесс внедрения в Приорбанке)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307564/" target="_blank">Золотой ключик — неустранимая возможность полного обхода Secure Boot на большинстве Windows-устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/307540/" target="_blank">Microsoft исправила уязвимости в Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kingservers/blog/307538/" target="_blank">QRLJacking: новый тип атаки угрожает безопасности пользователей ряда сервисов и интернет-мессенджеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/307450/" target="_blank">Уязвимости онлайн-банков 2016: лидируют проблемы авторизации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172999/" target="_blank">Чем может грозить точка в конце доменного имени</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172991/" target="_blank">Регистратор отберет у хакеров доменное имя сайта с данными о знаменитостях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/172867/" target="_blank">Black Hat Europe 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172799/" target="_blank">Бэкдор в роутерах TP-LINK</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/172719/" target="_blank">Руководство по выстраиванию звезд: kernel pool spraying и VMware CVE-2013-2406</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/172657/" target="_blank">Новый дистрибутив Backtrack: встречайте Kali Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172631/" target="_blank">Как, на ваш взгляд, антивирусы должны воспринимать Guard@Mail.Ru и другое подобное ПО?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/172011/" target="_blank">Microsoft и Adobe выпустили обновления для своих продуктов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172389/" target="_blank">SIEM: ответы на часто задаваемые вопросы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172393/" target="_blank">Новый троян с валидной цифровой подписью LLC Mail.Ru маскируется под обновления популярных программ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/171957/" target="_blank">Бесплатно, без регистрации, но с смс</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/172293/" target="_blank">Технология борьбы с MiniDuke. Простая защита от сложных угроз?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172279/" target="_blank">Неочевидные способы защиты от malware</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172247/" target="_blank">Справочник по взлому Xbox: в память об Аароне Шварце</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/172183/" target="_blank">Реклама Pirate Bay на билборде в Сербии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/172165/" target="_blank">Reflected XSS на поддомене Пентагона (и к чему это привело)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/172031/" target="_blank">Pwn2Own 2013: итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171971/" target="_blank">Что же всё-таки случилось с TPB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/171913/" target="_blank">Pwn2Own 2013: первые результаты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171825/" target="_blank">Программка из десятка строчек обрушает Springboard</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/171749/" target="_blank">Осторожно: злоумышленники</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171629/" target="_blank">Безопасная среда выполнения криптографических операций</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/171549/" target="_blank">SSRF DoS Relaying</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171429/" target="_blank">Флешка с биометрической защитой MyIDkey</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171501/" target="_blank">О разных взглядах на мир или кто какую грызет морковку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171427/" target="_blank">Установка «безопасного соединения» с банком Wells Fargo</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171385/" target="_blank">Evernote вероятно был взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171317/" target="_blank">Пример того, как сервер под управлением *nix может стать частью ботнета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171289/" target="_blank">Новая уязвимость нулевого дня в браузерных апплетах Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171241/" target="_blank">Конференция RSA 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171169/" target="_blank">White-box cryptography в картинках</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/papabubadiop/blog/171095/" target="_blank">Математическая модель злоумышленника и защита физических объектов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/171037/" target="_blank">Обход двухфакторной аутентификации Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/171083/" target="_blank">Соответствие стандартам и политикам в сканерах уязвимостей и SIEM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ivideon/blog/171031/" target="_blank">Новые Бабушкины. «Инновационное» облачное видеонаблюдение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/170829/" target="_blank">Настройка Kerberos-аутентификации с использованием смарт-карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/170869/" target="_blank">Бумажные специалисты. Часть 3. РЖД</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/170679/" target="_blank">Результаты отборочного этапа NeoQUEST-2013 и способы прохождения заданий</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/170553/" target="_blank">APT1: схема устойчивых вторжений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/170167/" target="_blank">На пути к созданию безопасного (веб)ресурса. Часть 3 — офис, сотрудники</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/170285/" target="_blank">APT1: разоблачение китайской организации, занимавшейся промышленным кибершпионажем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/170333/" target="_blank">Как сделать бомбу из XML</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/170221/" target="_blank">Безопасность АСУТП практика и примеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168823/" target="_blank">На пути к созданию безопасного веб-ресурса. Часть 2 — разработка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/170043/" target="_blank">Oracle выпустила очередную порцию обновлений для Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/169839/" target="_blank">Технология разоблачения Red October</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/169789/" target="_blank">Яндекс.Деньги ввели одноразовые SMS-пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169727/" target="_blank">Mega запустит почту, чат, голос, видео и мобильный сервис</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169717/" target="_blank">Морозная атака на шифрование в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169497/" target="_blank">История безответственности и одной уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169669/" target="_blank">Модем Укртелекома или как не нужно настраивать роутер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169587/" target="_blank">Бумажные специалисты. Часть 2. Интеграторы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169527/" target="_blank">Снова о защите персональных данных или готовимся к проверке Роскомнадзора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169491/" target="_blank">￼Чего стоит информационная безопасность на бумаге?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169445/" target="_blank">vPass 2 — простой и удобный генератор безопасных паролей на Javascript</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/centosadmin/blog/169341/" target="_blank">redmine_wiki_encryptor — плагин шифрования данных Wiki Redmine</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169221/" target="_blank">Очередная 0-day уязвимость в Adobe Reader</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169213/" target="_blank">Firefox и Google Chrome блокируют сокращатель ссылок от Вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/169203/" target="_blank">Adobe Flash Player обновлен, опять обновлен</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/169153/" target="_blank">Microsoft выпустили очередной набор обновлений, февраль 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169183/" target="_blank">PostgreSQL, TCL и другие: Критическая ошибка в RE engine. Возможная уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/169131/" target="_blank">Современные буткит-технологии и детальный анализ Win32/Gapz</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169107/" target="_blank">Washington Post: Против США ведётся массовая кампания кибершпионажа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169105/" target="_blank">Flickr случайно сделал некоторые приватные фотографии на 20 дней публичными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169087/" target="_blank">Срочно обновляемся до Ruby on Rails 3.2.12, 3.1.11 и 2.3.17 во благо собственных нервов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/169083/" target="_blank">Файлообменник Mega начал выплачивать вознаграждение за найденные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/169039/" target="_blank">Что общего у Win32/Redyms и TDL4?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166855/" target="_blank">Об одной малоизвестной уязвимости в веб сайтах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168839/" target="_blank">Эксплуатируем уязвимости роутеров wi-fi с android-устройства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168853/" target="_blank">Настройка OpenVPN в iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168739/" target="_blank">На пути к созданию безопасного веб-ресурса. Часть 1 — серверное ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168707/" target="_blank">Почему Keccak настолько крут и почему его выбрали в качестве нового SHA-3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168685/" target="_blank">Безопасность и Huawei</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168677/" target="_blank">PowerShell. Дешифруем файлы после воздействия «вируса»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168565/" target="_blank">ПАК ФПСУ-IP и его плюшки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168683/" target="_blank">Очередные уязвимости нулевого дня в различных роутерах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168637/" target="_blank">GPS-мониторинг без лишних глаз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168613/" target="_blank">Критическая уязвимость во многих роутерах различных вендоров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168607/" target="_blank">«Пакет смерти» для сетевых карт Intel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168461/" target="_blank">Зачем Google добавляет while(1); к своим JSON-ответам?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166623/" target="_blank">Перевод NIST SP800-125. Руководство по защите технологии полной виртуализации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168281/" target="_blank">Стеганография: бездонные контейнеры и многоразовые ключи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168307/" target="_blank">Дом с привидениями: уязвимости в ИИУП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168255/" target="_blank">Внедрение своего кода в адресное пространство процессов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168253/" target="_blank">Для ИБшников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168121/" target="_blank">Мобильные подписки, AdWords, приложение Вконтакте и фишинг</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/168025/" target="_blank">Mega: обзор (не)безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/168005/" target="_blank">Дата-майнинг для информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167995/" target="_blank">Твиттер взломан. 250k аккаунтов под угрозой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167985/" target="_blank">Взлом PSVita — первые шаги, эмулятор PSP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167893/" target="_blank">Использование ssh socks прокси совместно с MSF Reverse TCP Payloads</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167873/" target="_blank">Фишинг с использованием данных из VK/Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167829/" target="_blank">Исследование игры-головоломки «Сапёр» (продолжение)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167765/" target="_blank">Критическая уязвимость во всех версиях JunOS начиная с 7.6R1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167755/" target="_blank">Качественный фишинг в Gmail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167731/" target="_blank">Первые жертвы критических уязвимостей Rails: RubyGems.org подвергся хакерской атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167727/" target="_blank">Китай организует Man-in-the-middle атаку против пользователей github</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167685/" target="_blank">Сотовый маляр</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167653/" target="_blank">Децентрализация социальных сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167453/" target="_blank">Google выделяет миллионы долларов на новый конкурс по взлому Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/odnoklassniki/blog/307438/" target="_blank">Об охоте на «насекомых»: программа bug bounty в Одноклассниках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307430/" target="_blank">ProjectSauron: кибершпионское ПО, взламывающее зашифрованные каналы связи госорганизаций</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/307126/" target="_blank">Летний дедлайн: Топ-10 курсов Microsoft Virtual Academy</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/307202/" target="_blank">Security Week 31: новости с Blackhat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307160/" target="_blank">Apple вводит программу вознаграждения за выявление уязвимостей в своих продуктах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/307156/" target="_blank">NIST: SMS нельзя использовать в качестве средства аутентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307120/" target="_blank">В результате взлома известного opensource-хостинга были заражены дистрибутивы Audacity, Classic Shell и другие</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/307050/" target="_blank">Грамотный аудит безопасности сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aladdinrd/blog/306920/" target="_blank">Есть ли жизнь после отказа популярных браузеров от поддержки архитектуры NPAPI</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306902/" target="_blank">Контрабанда «Гамлета» при помощи кота</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167179/" target="_blank">Avast! открывает охоту на ошибки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167137/" target="_blank">Новая социальная сеть — напечатай мне письмо</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/167013/" target="_blank">Заметки о безопасности. Восстановление пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166989/" target="_blank">HTTPS в браузере Xpress</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/165887/" target="_blank">Щит и меч в системах ДБО. Прикладное решение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/166939/" target="_blank">Сюрприз из kernel32 для сетевых ресурсов (MS12-081, детальный разбор уязвимости в Microsoft File Handling Component)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/166907/" target="_blank">PHDays Young School: Разыскиваются молодые специалисты по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166773/" target="_blank">Как инстаграммить по-черному или следи за печеньками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166607/" target="_blank">AXFR — возвращение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166655/" target="_blank">По поручению Путина в ФСБ будет создана система предупреждения и ликвидации компьютерных атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166583/" target="_blank">Можно так просто взять и скрыть информацию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166531/" target="_blank">Github заблокирован в Китае</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/166513/" target="_blank">NeoQUEST – 2013: начало регистрации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166459/" target="_blank">Студента отчислили за использование сканера веб-уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166257/" target="_blank">Google объявил войну паролям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166081/" target="_blank">Защита беспроводной сети на Avaya WLAN 8100</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/166031/" target="_blank">А как Вы передаете клиентам логины/пароли?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165999/" target="_blank">Как банки защищают ваши персональные данные — log.txt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165801/" target="_blank">Порка идеи — удобный и безопасный веб-менеджер сокровенных текстовых заметок с javascript</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/boxowerview/blog/165619/" target="_blank">EgisTec ES603 — сканер отпечатков за 500 рублей или внедряем биометрическую авторизацию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165737/" target="_blank">Уязвимость нулевого дня в роутерах Cisco Linksys</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165605/" target="_blank">Anonymous просит признать DDoS-атаки законной формой протеста</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165607/" target="_blank">Как была украдена Half-Life 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165569/" target="_blank">Сайт Yota оказался взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165533/" target="_blank">Уязвимость в ICQ позволяет получить доступ к архиву переданных через сервис файлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165489/" target="_blank">Фишинг: Новый тренд — переклейка QR кодов в общественных местах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165457/" target="_blank">Кроссдоменный обмен: анонимайзер + фрейм</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165435/" target="_blank">Деанонимизация во всемирной сети — все ближе и ближе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165379/" target="_blank">Новая уязвимость нулевого дня в браузерных плагинах Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165343/" target="_blank">Выполнение произвольного кода в Rails</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165253/" target="_blank">ЕС открывает центр по борьбе с киберпреступностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165161/" target="_blank">Взломы moin-moin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165127/" target="_blank">Нидерланды утвердили рекомендации для белых хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/165069/" target="_blank">PHP класс для удобной и безопасной работы с MySQL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164999/" target="_blank">Опасаясь шпионажа, американская ядерная лаборатория отказалась от китайской техники</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164935/" target="_blank">Django: Генерируем безопасные отчёты об ошибках на сайте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164895/" target="_blank">Уязвимость нулевого дня в IE v6-8</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164809/" target="_blank">Интеркасса меняет ключи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164787/" target="_blank">Разработчику ПО для азартных игр грозит тюремный срок в США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164685/" target="_blank">Rails params & GC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164371/" target="_blank">NIST SP 800: библиотека по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164379/" target="_blank">Как владелец командного Dropbox-аккаунта может уничтожить ваш Dropbox-аккаунт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164113/" target="_blank">Aruba Networks — Часть 2: Построение безопасной беспроводной инфраструктуры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164213/" target="_blank">Как вы относитесь к анонимности в интернете?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164171/" target="_blank">Один из способов резервного копирования контейнера TrueCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164109/" target="_blank">Власти США сохранили право читать «брошенную» электронную почту без судебного ордера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/164057/" target="_blank">PHDays CTF Quals: BINARY 500, или как спрятать флаг ниже плинтуса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/164039/" target="_blank">Внезапный 2012 год: что будет с безопасностью в OS X дальше?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139367/" target="_blank">Банк поздравил и подарил базу электронных адресов клиентов и сотрудников</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/164029/" target="_blank">Solar Designer на Yet another Conference 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163925/" target="_blank">Так ли страшны новые эксплоиты, если их не видит антивирус?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163901/" target="_blank">В Китае ужесточают правила доступа в Интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163719/" target="_blank">Админы Великого китайского файрвола всерьёз взялись за VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163647/" target="_blank">Кто следит за нами?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163089/" target="_blank">Больше руткитов — «хороших» и разных. Part II</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163583/" target="_blank">Безопасность клиентов и разрабочиков SaaS HRM сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163547/" target="_blank">Google Play не взломан, однако бесплатно совершать покупки в приложениях можно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163409/" target="_blank">0-day в Windows XP\Vista\7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/163383/" target="_blank">Письма torrent счастья от большого брата</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ddosinsurance/blog/163123/" target="_blank">Страхование от DDoS-атак за 5$</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162933/" target="_blank">Больше руткитов — «хороших» и разных. Part I</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/beeline/blog/162913/" target="_blank">Обзор векторов атак на мобильные телефоны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162839/" target="_blank">Что такое «backup»?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162711/" target="_blank">Читают ли в Google свои собственные соглашения?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/162811/" target="_blank">Критическая уязвимость у смартфонов на базе Exynos</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162679/" target="_blank">Эволюция Zeus. Теперь и в смартфонах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162663/" target="_blank">Знает ли жена* ваши пароли?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162613/" target="_blank">GPS и карты: смещённые координаты в Китае</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/162617/" target="_blank">Внутреннее устройство ASLR в Windows 8</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162401/" target="_blank">Создаем Свой Sniffer/FireWall/Parental control/ SpyWare/Клиент для компьютерного Клуба. Технология LSP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/selectel/blog/162397/" target="_blank">Запуск услуги «Управляемый фаервол»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162421/" target="_blank">Следственный комитет РФ хранил жалобы пользователей в открытом виде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162259/" target="_blank">Коронные фишки вредоносных программ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162379/" target="_blank">IE позволяет отслеживать координаты мыши (даже в другом окне)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162101/" target="_blank">Эту страну не победить. Почта России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/162075/" target="_blank">SMS-вымогатель в виде набора плагинов для браузеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161883/" target="_blank">Концепция Суперпароля — как дополнительная защита для веб-базированных почтовых аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161861/" target="_blank">Эволюция Zeus. Part II</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161707/" target="_blank">Эволюция Zeus. Part I</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/160709/" target="_blank">McAfee Deep Defender: от затыкания дыр к защите «изнутри»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161507/" target="_blank">О «карманном» перехвате в предпоследний раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161493/" target="_blank">Twitter и подмена отправителя SMS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161459/" target="_blank">История реверс-инжиниринга одного SMS трояна для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161411/" target="_blank">Несколько 0day эксплойтов для MySQL и не только от @Kingcope</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161409/" target="_blank">Международный союз электросвязи утвердил рекомендации на Deep Packet Inspection</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161393/" target="_blank">Обход проактивной защиты Agnitum Outpost Security Suite в 2 строчки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161369/" target="_blank">Анонимное интервью с бывшим участником варезной сцены. Часть 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161297/" target="_blank">Vice.com рассекретил местоположение Джона Макафи через метаданные EXIF</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158381/" target="_blank">Интервью с CYBERMANIAC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161159/" target="_blank">Взлом старой каптчи сайта Хабрахабр</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/161051/" target="_blank">Компьютерное преступление: тогда и теперь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160973/" target="_blank">Кибервойнушка — Stuxnet, Duqu, Flame, Gauss и все, все, все…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160937/" target="_blank">Cyberwarfare — особенности национальной войнушки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160945/" target="_blank">Установка зашифрованной (TrueCrypt) Windows при Ubuntu по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160905/" target="_blank">Microsoft Security Essentials провалил сертификацию AV-Test</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160849/" target="_blank">Яндекс.Амнистия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160779/" target="_blank">С праздником, безопасники!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160731/" target="_blank">Экспертная система для прогнозирования личностных характеристик человека на основе теоремы Байеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/160703/" target="_blank">UTM против NGFW – один оттенок серого</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160555/" target="_blank">Коротко и ясно: Flex VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306810/" target="_blank">Деанонимизируем пользователей Windows и получаем учетные данные Microsoft и VPN-аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306862/" target="_blank">Все драйверы режима ядра для Windows 10 (1607) теперь должны быть подписаны Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/306852/" target="_blank">Летняя стажировка в Positive Technologies: результаты отбора и немного статистики</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/306844/" target="_blank">Бесконтактные платежи – на пути к доверию потребителей и разработчиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/306754/" target="_blank">Security Week 30: PHP-порноуязвимость, подслушивание клавиатур, обход UAC в Windows 10</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306694/" target="_blank">Почему в Украине всё-таки есть белые хакеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/306670/" target="_blank">Positive Development User Group Picnic: безопасная разработка для каждого</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306634/" target="_blank">Как поступить с найденной уязвимостью и что делать если нет Bug Bounty программы?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/306622/" target="_blank">Уязвимости веб-приложений: под ударом пользователи</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/306600/" target="_blank">Во 2 квартале 2016 шифровальщики возглавляют список кибер-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/160541/" target="_blank">PHDays CTF Quals</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160419/" target="_blank">Не так страшен DRM, как его малюют</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/158945/" target="_blank">Борьба с DDoS глазами Highload Lab</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160359/" target="_blank">Шлюз электронной почты за 7 минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160337/" target="_blank">Morris worm — он был первым</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160321/" target="_blank">Анонимное интервью с бывшим участником варезной сцены. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160265/" target="_blank">Aruba Networks теперь и в России. Часть 1 — Первое знакомство</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160221/" target="_blank">Конфиденциальные документы полиции Нью-Йорка использовались в качестве конфетти</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160163/" target="_blank">Человек, который взломал Голливуд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160129/" target="_blank">Всё, что нужно знать о Do Not Track: ​​Microsoft против Google и Mozilla</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159929/" target="_blank">SIEM-системы: а есть ли перспективы у OpenSource?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/160035/" target="_blank">За кулисами Android: что-то, чего вы можете не знать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159977/" target="_blank">Приглашаем на работу секретных агентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159845/" target="_blank">Саудовская Аравия внедрила электронную систему слежения за женщинами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159811/" target="_blank">История борьбы с трояном-файлошифровальщиком – поход в центр управления за ключом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159757/" target="_blank">Новый руткит против серверов на Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159687/" target="_blank">Анонимное интервью с бывшим участником варезной сцены. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159679/" target="_blank">После публикации фотографий принца Уильяма на базе Королевских ВВС военным пришлось менять пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159669/" target="_blank">Duqu — вредоносная матрёшка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/samurai/blog/159617/" target="_blank">От идеи до гаджета. Путь «Самурая» в России (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159595/" target="_blank">Пользователи Reddit обнаружили способ активации Windows 8</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159537/" target="_blank">Бесплатный анонимайзер от Google — всегда под рукой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159533/" target="_blank">Stuxnet и Duqu — есть ли связь?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/159347/" target="_blank">Русский взгляд на конференцию Power of Community в Сеуле</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159151/" target="_blank">Готовятся новые поправки в закон «Об информации»: страницы сайтов предлагают блокировать точечно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159073/" target="_blank">Keccak, новый стандарт хеширования данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159077/" target="_blank">FreeBSD.org скомпрометирован</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159069/" target="_blank">Conficker — из пушки по воробьям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159055/" target="_blank">Что вы знаете о Sality?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159053/" target="_blank">И снова о Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/159049/" target="_blank">Shamoon — что это было?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158913/" target="_blank">Массовые угоны аккаунтов от EA Origin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158867/" target="_blank">CryptoParty в Москве! Я хочу рассказать о:</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158861/" target="_blank">Индусский код VS Windows Phone 8</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158857/" target="_blank">Взлом форума Adobe Connectusers.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158829/" target="_blank">Простой личный анонимайзер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158785/" target="_blank">Tor? I2P? Может быть, что-то еще?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158545/" target="_blank">Уязвимость в skype, позволяющая угнать любой аккаунт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/158485/" target="_blank">Google Chrome для Android: уязвимость UXSS и раскрытие учетных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158463/" target="_blank">Мыльный пузырь рекламы: show must go on! Мы творцы истории интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/158319/" target="_blank">ZeroNights: последние штрихи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158435/" target="_blank">VPN? Суперпросто! Я гарантирую это</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158417/" target="_blank">Анатомия атаки: Как я взломал StackOverflow</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158355/" target="_blank">Спецификация ZigBee. Безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158351/" target="_blank">PayPal начал принимать карты Maestro</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158255/" target="_blank">Полезна ли модель CIA для защиты АСУТП?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/158045/" target="_blank">Уязвимость «нулевого дня» в Adobe Reader X/XI</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157937/" target="_blank">Утечка паролей в Twitter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157907/" target="_blank">ФАС взялся за лохотроны на коротких номерах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157899/" target="_blank">Как я внедрял первое правило ведения бизнеса в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157891/" target="_blank">Платёжные карты MasterCard с дисплеем и клавиатурой</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/157385/" target="_blank">Преимущества централизованной безопасности Check Point перед сетевыми конкурентами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157799/" target="_blank">Ping-flooding атака: что осталось «за кадром» или о пользе дотошности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156937/" target="_blank">Создание регулярного отчета по журналу событий Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/157589/" target="_blank">Безопасность SCADA в цифрах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157547/" target="_blank">Создание «островка сетевой свободы» на основе VPS за 30 минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157531/" target="_blank">Базовые sql-инъекции в приложениях, использующих язык SQL. Руководство для чайников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157423/" target="_blank">«Стрёмный оператор» — неудачная шутка или сигнал тревоги?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157361/" target="_blank">Фишинг в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157303/" target="_blank">GhostShell заявила о намерении развязать кибервойну с российским правительством</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156207/" target="_blank">Установка и первоначальная настройка Check Point R75</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157157/" target="_blank">Google укрепляет защиту ОС Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157145/" target="_blank">«Оцифровываем» каптчу единого реестра сайтов, защищающего людей от информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/157031/" target="_blank">Bitcoin получил официальное признание</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/156849/" target="_blank">ZeroNights 2012: финишная прямая</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/156795/" target="_blank">Асинхронный пинг с помощью Boost.Asio</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156517/" target="_blank">Security Reverse Engineering vk.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/156537/" target="_blank">Дан старт CFP на Positive Hack Days III</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/156533/" target="_blank">MPLS VPN с TE в корпоративных сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156327/" target="_blank">8% приложений в Google Play потенциально угрожают безопасности пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156315/" target="_blank">Опера не спешит закрывать уязвимость?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156275/" target="_blank">Данные об 1 млн пользователей Facebook стоят 5 долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/156133/" target="_blank">Безопасность случайных чисел в Python</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/156057/" target="_blank">Однофакторная двухфакторная аутентификация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155925/" target="_blank">Как мирный reverse engineering помог чуть-чуть улучшить приложение Яндекс.Деньги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/155937/" target="_blank">Ваш фонарик может отправлять SMS: еще один повод обновить ваши устройства до iOS 6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155929/" target="_blank">VPN для iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155851/" target="_blank">Цифровой барьер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155803/" target="_blank">UDP hole punching для Symmetric NAT: немного теории и почти честный эксперимент</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155761/" target="_blank">Bot watchers — свобода комментирования</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/highloadlab/blog/155667/" target="_blank">Облака против тесака, или Хроника DDoS-атак на cvk2012.org</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155501/" target="_blank">Пароли сотрудников FBI выложены в свободный доступ Hackers Army</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155443/" target="_blank">Microsoft отказывается установить руткит от Verizon, начало продаж Windows Phone 8 могут отложить</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155265/" target="_blank">Коллизия хэш-функции MAC-адреса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155259/" target="_blank">Кардиостимуляторы/ритмоводители подвержены удаленному взлому</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155185/" target="_blank">Anonymous получили доступ к почтовым серверам BP, Shell, Exxon, Газпрома и Роснефти</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/155135/" target="_blank">Внедрение Enhanced Write Filter (EWF)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/155035/" target="_blank">Европейский союз требует у Google сменить политику безопасности относительно личных данных пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154921/" target="_blank">В Google Play встроят антивирусный сервис</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154889/" target="_blank">С 1 ноября в PayPal появятся платежи в рублях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154875/" target="_blank">Операция ФБР «Site Down» против варез-сцены. Узнаем ли мы правду?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154841/" target="_blank">Индивидуальные движения глаза как компонент системы идентификации человека</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/154831/" target="_blank">На ZeroNights – бесплатно!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154819/" target="_blank">Ошибка в работе сайта стоила Electronic Arts тысяч скачанных бесплатно игр</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154747/" target="_blank">PRTG: Система мониторинга и некоторые полезные советы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154597/" target="_blank">Уязвимость в протоколе аутентификации Oracle 11g</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154497/" target="_blank">Обзор VPN-клиентов для Android 4.x</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154479/" target="_blank">Заставят ли в социальных сетях регистрироваться по паспорту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154469/" target="_blank">Максимально безопасная авторизация. Обсуждение алгоритма авторизации клиентов на сервере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154431/" target="_blank">UPD: Распространение Firefox 16 временно остановлено из-за проблемы с безопасностью (bux fixed)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301346/" target="_blank">Информационное сокрытие в PDF документах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/306534/" target="_blank">Деньги не спят: кто побеждает в противостоянии хакеров и финансовых организаций</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/306446/" target="_blank">Критические уязвимости в Drupal: подробности и эксплоиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/306336/" target="_blank">Навыки и требования к специалистам по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tottoli_gsm/blog/306370/" target="_blank">Все под контролем: защищаем корпоративные разговоры. Часть 2: защищенный телефонный аппарат</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306034/" target="_blank">Извлечение ключа из токена с неизвлекаемым ключом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306298/" target="_blank">Telegram пишет в syslog сообщения вставленные из буфера обмена, в том числе и в секретных чатах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306258/" target="_blank">Использование custom functions в парсерах OSSIM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/306190/" target="_blank">Security Week 29: утечка на форуме Ubuntu, прокси-уязвимость в PHP, Go и Python, 276 заплаток Oracle</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/306182/" target="_blank">Безопасность железных дорог из открытых источников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154405/" target="_blank">Работа с инцидентами информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154359/" target="_blank">Как хранят биткойны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/securitycode/blog/154309/" target="_blank">Защита сервера Microsoft Hyper-V от несанкционированного сетевого доступа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154273/" target="_blank">Дал взятку? Лови десятку. Анализ приложения Bribr для iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154229/" target="_blank">Как работают одноразовые пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154107/" target="_blank">Новая система аутентификации пользователей использует уникальные характеристики видеоадаптеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153855/" target="_blank">Теплый и ламповый VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154031/" target="_blank">Обучение пользователей своей организации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/154013/" target="_blank">Возможность свободного редактирования вики является открытой дверью для провокации ФСБ?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/154005/" target="_blank">Реагирование на инциденты в системах интернет-банкинга — инструкция от Group-IB</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153981/" target="_blank">Фишинг паролей в GMail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153973/" target="_blank">Примеры и рекомендации удобных инструкций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153799/" target="_blank">Оружие в России оснастят биометрическими сканерами</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/152092/" target="_blank">ZeroNights 2012: вы хотели хардкора?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153643/" target="_blank">Facebook сканирует переписку пользователей и по ссылкам в ней автоматически расставляет «лайки»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153581/" target="_blank">Безопасность, инструкции и интеграторы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153571/" target="_blank">Evil USB HID-эмулятор или просто Peensy</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153439/" target="_blank">Доверие к интернет-магазинам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153399/" target="_blank">Lockitron: самый умный в мире дверной замок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153391/" target="_blank">Получение подлинного Windows Subsystem(csrss.exe) процесса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153357/" target="_blank">Master-key для замков Onity на Arduino в обычном маркере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153351/" target="_blank">Пользовательские соглашения: правила изменились, и теперь будет ТАК!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153349/" target="_blank">NIST принял решение: SHA-3 будет использовать алгоритм Keccak</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153259/" target="_blank">iTunes 10.7 пытался подключиться к домену bogusapple.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/153249/" target="_blank">Публичность-приватность: вопрос уважаемой публике</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tuthost/blog/152867/" target="_blank">Code Signing сертификаты или сертификаты разработчика. Виды, как выбрать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/evernote/blog/153005/" target="_blank">Защита данных в Evernote: как мы избавляемся от сломанных дисков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152899/" target="_blank">Шпион в твоем кармане</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152747/" target="_blank">Создаем рекурсивные ярлыки в Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/152713/" target="_blank">АСУ ТП, 3G и мобильная безопасность. Terra Incognita?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152697/" target="_blank">Диссонанс</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152699/" target="_blank">Mozilla анонсировала обновленный аналог OpenID</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151688/" target="_blank">Взломать Wi-Fi за… 3 секунды</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152535/" target="_blank">Использование криптографических функций, реализованных на аппаратном токене в web-приложениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/digitalsecuritylab/blog/152479/" target="_blank">История одного стартапа в области информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/152471/" target="_blank">Бесплатность не защита: 40% бесплатных приложений на iOS и 80% на Android взламываются</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152461/" target="_blank">Уязвимости с удалением данных подвержены также смартфоны HTC, Motorola и Sony. Сайт для проверки проблемы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152433/" target="_blank">Бэкдор в phpMyAdmin</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/152365/" target="_blank">Windows 8 – да будет SMEP!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152363/" target="_blank">Почта России будет работать быстрее через 2 года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152353/" target="_blank">100 000 паролей ieee.org целый месяц лежали в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152287/" target="_blank">uRPF (антиспуфинг защита data plane)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152251/" target="_blank">Бета-версия modSecurity для Nginx</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152136/" target="_blank">SHA-3 скоро появится на свет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151126/" target="_blank">Безопасность сетей 802.11 — основные угрозы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151192/" target="_blank">Отладка приложений для Android без исходных кодов: native методы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/152000/" target="_blank">Анализ Guntior</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151996/" target="_blank">Reversing Google Play Store</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/151921/" target="_blank">Яндекс открывает программу по поиску уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151906/" target="_blank">Что такое системы управления уязвимостями на примере облачной платформы QualysGuard</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151891/" target="_blank">Опасная 0-day уязвимость в iOS 5.1.1 и 6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151875/" target="_blank">Искусственный Интеллект на службе Mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151872/" target="_blank">Участники Pwn2Own взломали Galaxy SIII и iPhone 4S</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/151816/" target="_blank">Такой опасный Internet Explorer…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151631/" target="_blank">Common Event Format изнутри</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/storelab/blog/151554/" target="_blank">Как стереть данные так, чтобы их не смогли восстановить спецслужбы?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151752/" target="_blank">ГИБДД планируют вооружить… iPad'ом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/151704/" target="_blank">Пробиваем VMware vCenter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151696/" target="_blank">Принудительный разрыв HTTP сессий при MiTM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151682/" target="_blank">Stripe CTF — разбор уязвимости алгоритма SHA-1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/151680/" target="_blank">А вот робот-турникет, который узнаёт вас в лицо</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151671/" target="_blank">Уязвимость нулевого дня в Internet Explorer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151669/" target="_blank">Методика аудита ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151595/" target="_blank">Хитрый способ слива мобильного трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ivideon/blog/151582/" target="_blank">Киберсквоттинг по-китайски</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151521/" target="_blank">Intel планирует покончить с паролями «по мановению руки»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151420/" target="_blank">Простой способ защиты от классического HTTP DDoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151389/" target="_blank">Почта России — новые хотелки за 10 миллиардов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151388/" target="_blank">Сложно ли угадать PIN-код?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151187/" target="_blank">Подробно о генераторах случайных и псевдослучайных чисел</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151281/" target="_blank">Шейн Питман, лидер варез-группы Razor 1911: жизнь после тюрьмы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151238/" target="_blank">Сетевые черви прошлого десятилетия встречаются и сейчас</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151207/" target="_blank">Godaddy лежит под DDOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151205/" target="_blank">Ну вот и умерли dns сервера godaddy</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149636/" target="_blank">Зачем Mail.Ru занимается разработкой шпионского программного обеспечения?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151089/" target="_blank">Google Inc. приобретает VirusTotal</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/151086/" target="_blank">Восемь уязвимостей нулевого дня в одном флаконе, и это еще не всё</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151084/" target="_blank">Как обойтись без капчи?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/151041/" target="_blank">Выделение паролей в MAC OS X — эволюция malware?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/151034/" target="_blank">Bitcoin, криминальные хроники: Bitfloor PWND!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150927/" target="_blank">Qubes OS 1.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150983/" target="_blank">Проверяем виртуальную инфраструктуру VMware на соответствие требованиям стандартов безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150756/" target="_blank">Безопасность OAuth2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150862/" target="_blank">Отладка приложений для Android без исходного кода на Java: пару слов о breakpoints</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150845/" target="_blank">Уязвимость в JAVA позволила выкрасть у ФБР данные о 12 миллионах владельцев устройств Apple</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150825/" target="_blank">Отладка приложений для Android без исходного кода на Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150804/" target="_blank">Исследователи раскрыли местонахождение аплоадеров Pirate Bay</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/150590/" target="_blank">Расширение SurfPatrol для Google Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/150547/" target="_blank">Технологии, методики, атаки и исследования на ZeroNights 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infopulse/blog/150598/" target="_blank">Практика получения и использования цифровых подписей при сдаче отчетов в гос.органы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150484/" target="_blank">Обвиняемая в краже коммерческой тайны экс-сотрудница Motorola получила 4 года тюрьмы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150386/" target="_blank">Movim: Децентрализованная социальная сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147111/" target="_blank">Внедрение Javascript-кода в страницу через Chrome Extension</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147079/" target="_blank">Коммерческая тайна. Сертификация ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150179/" target="_blank">WPA2-Enterprise, или правильный подход к безопасности Wi-Fi сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150331/" target="_blank">Новый 0day эксплоит для Java. Теперь и в Metasploit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150322/" target="_blank">Бесплатный VPN от ThePirateBay</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150293/" target="_blank">«Backdoor» для мозга уже создан!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150269/" target="_blank">Служба внешней разведки России создает ботов для социальных сетей за 30 млн. рублей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147731/" target="_blank">Защитите свой аккаунт Dropbox с помощью двухэтапной аутентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/306202/" target="_blank">Промышленные системы управления — 2016: уязвимость и доступность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/306176/" target="_blank">Уязвимость HTTPoxy позволяет перенаправлять http-запросы веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/306066/" target="_blank">Стажер — находка для шпиона</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/305960/" target="_blank">Control Flow Guard. Принцип работы и методы обхода на примере Adobe Flash Player</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305998/" target="_blank">Киберпреступная группа Carbanak связана с российской компанией в сфере безопасности?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/305966/" target="_blank">Научим практической безопасности: Летняя стажировка в Positive Technologies</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/305954/" target="_blank">Как работают процессоры FortiASIC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305782/" target="_blank">Пасхалка в Mr Robot S02E01</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/305754/" target="_blank">Security Week 28: Приватность покемонов, критическая инфраструктура онлайн, постквантовая криптография в Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305748/" target="_blank">Принцип Доверия (Trust) в HTTPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150239/" target="_blank">Как сделать увлекательный кибер-сериал из окон mIRC, ICQ, и Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150227/" target="_blank">DLP Lite – легче уже некуда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150226/" target="_blank">Уязвимость «физического присутствия» в UEFI</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/150218/" target="_blank">NIST принимает стандарт для защиты BIOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150209/" target="_blank">Как подружить Truecrypt loader и Grub 2?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150206/" target="_blank">Обход проактивной защиты продуктов лаборатории Касперского. Видео демонстрация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150201/" target="_blank">Уязвимость в Kohana?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150192/" target="_blank">Windows 8 сообщает Microsoft о любых устанавливаемых программах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150184/" target="_blank">BackDoor.Wirenet.1 — первый кросс-платформенный «троян», работающий под Linux и Mac OS X</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/150164/" target="_blank">Последние новости безопасности SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150155/" target="_blank">Аккаунт в Instagram угрожал безопасности Норвежской королевской семьи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150147/" target="_blank">Эквадор будет играть честно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145765/" target="_blank">Сравнение программ для удаления баннеров-вымогателей (блокираторов)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150106/" target="_blank">Двухфакторная аутентификация с сюрпризом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/150097/" target="_blank">CTF для разработчиков приложений от Stripe</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/150067/" target="_blank">Гомоморфное шифрование своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149988/" target="_blank">Компаниям с подробными клиентскими БД, их клиентам и пользователям соц.сетей посвящается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149968/" target="_blank">Хакеры из Anonymous на страже нравственности россиян</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/149939/" target="_blank">Настройка SSL для приложения в Windows Azure</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149934/" target="_blank">vPass: страничка на Javascript для максимума безопасности и минимума мучений при работе с паролями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149907/" target="_blank">Обзор открытой системы контроля за данными MyDLP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/149904/" target="_blank">Разгадка к пятничному вопросу</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/149746/" target="_blank">Случайные числа. Take Two</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149862/" target="_blank">Страны Латинской Америки на стороне Эквадора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149661/" target="_blank">Атака пользователей WLAN через rogue-сервисы, или почему PSK — не самый лучший выбор для гостиницы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/149779/" target="_blank">Hack4Fun на PHDays</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/149722/" target="_blank">Ни за что не угадаете</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149741/" target="_blank">Теперь Facebook действительно удаляет пользовательские фото</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149733/" target="_blank">Провайдеры и черный список сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149729/" target="_blank">Google усиливает безопасность Chrome, увеличивает вознаграждения и объявляет конкурс с фондом в $2 млн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149726/" target="_blank">Ассанж не сможет беспрепятственно покинуть Великобританию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149596/" target="_blank">Обзор уязвимостей на сайтах «Большой Тройки»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149709/" target="_blank">Джулиан Ассанж получил политическое убежище в Эквадоре</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149591/" target="_blank">IM+ Paranoia Mode On</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149679/" target="_blank">Британские власти угрожают штурмом посольству Эквадора</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/149662/" target="_blank">Исследование вредоносной интернет-активности: Россия снова в лидерах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/abbyy/blog/149396/" target="_blank">Программа zxcvbn: реалистичная оценка надежности пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149531/" target="_blank">RuTracker взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149486/" target="_blank">LAMP. От постановки задачи до старта отказоустойчивого сервиса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149475/" target="_blank">Злоумышленники зашифровали базу данных больницы, требуя выкуп</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149424/" target="_blank">Биометрическая идентификация по рисунку вен ладони (mini How To)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149423/" target="_blank">«Охотники за головами» предлагают запретить TOR</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149389/" target="_blank">Реклама фишинг-сайта в Яндекс.директе и поддельный Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149370/" target="_blank">Battle.Net взломан, рекомендуется сменить пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149330/" target="_blank">Грабим награбленное</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149293/" target="_blank">Анализ Wi-Fi сигнала позволяет следить за людьми, которые находятся по ту сторону стены</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149251/" target="_blank">Ежемесячный оборот SilkRoad достигает $2 миллионов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149207/" target="_blank">Реверс-инжиниринг in-app покупок Apple. (или «там» все тоже ленивые)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149179/" target="_blank">Как, зная только имя и email человека, злоумышленники получили доступ ко всем его аккаунтам и удаленно уничтожили информацию на всех его устройствах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/149152/" target="_blank">Вся правда об XSS или Почему межсайтовое выполнение сценариев не является уязвимостью?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149154/" target="_blank">Обход защиты Runpad Shell</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149148/" target="_blank">Google перешёл на TLS 1.1/1.2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149137/" target="_blank">Подмена файлов в HTTP трафике</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149134/" target="_blank">Пассивная XSS на mail.ru и готовый exploit</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/149111/" target="_blank">Мастер-класс по итогам конкурса «Большой ку$h» в хакспейсе Neúron</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148701/" target="_blank">Защита от SQL-инъекций в PHP и MySQL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149103/" target="_blank">Уязвимость AirOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149076/" target="_blank">Разбираем последствия взлома MS-CHAPv2 для Wi-Fi (WPA/WPA2-Enterprise)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/149045/" target="_blank">DEFCON'20 / DEFCON'20 CTF. Материалы, overview</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148999/" target="_blank">Ваш сайт тоже позволяет заливать всё подряд?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148976/" target="_blank">Защита против взломов in-app покупок. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148959/" target="_blank">Полиция Лондона будет отслеживать нелегальные точки доступа во время проведения Олимпиады</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148833/" target="_blank">Dropbox: База с адресами электронной почты была украдена из аккаунта сотрудника</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148808/" target="_blank">У биржевых хакеров снова наступила «ломка»…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148792/" target="_blank">Firefox заблокировал расширение Ubisoft Uplay</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/148480/" target="_blank">SAPокалипсис. BlackHat. Взлом J2EE. Кошмар, кошмар</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148602/" target="_blank">DPAPI на пальцах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148745/" target="_blank">Сколько стоит SDN?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148743/" target="_blank">Введение в безопасность на основе мандатных ссылок (англ. Capability-based security)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/148723/" target="_blank">Тариф «Бесплатный». Взлом таксофона на PHDays</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148685/" target="_blank">Корпорация Apple покупает компанию AuthenTec</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148683/" target="_blank">Ninja Tel — любительская беспроводная телефонная сеть на Defcon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148663/" target="_blank">Атаки на RFID-ы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148638/" target="_blank">Защита против универсальных взломов in-app покупок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148630/" target="_blank">Google признался в неудалении спорных данных Street View, собранных в 2010</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148625/" target="_blank">Как украсть миллион?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148613/" target="_blank">mashina.org недоступна под Билайном</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148581/" target="_blank">Tor будет платить операторам точек выхода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148570/" target="_blank">Объявлены победители Pwnie Awards 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148543/" target="_blank">История и описание уже исправленной уязвимости в игре WarCraft 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148511/" target="_blank">Побег из Vlan. Баг? Хак?! Фича… Или о пользе чтения документации</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/148495/" target="_blank">Сыграть в ящик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148331/" target="_blank">Remote wipe на Android и Exchange ActiveSync</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148330/" target="_blank">Дизассемблирование и снятие защиты на живом примере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148286/" target="_blank">Крупнейший DNS-хостер Zerigo атакован</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148260/" target="_blank">История про мобильный интернет. Паранойя или есть над чем задуматься?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148251/" target="_blank">Dropbox проводит расследование по факту возможного взлома</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148250/" target="_blank">Используете ли вы шифрование своей домашней директории (либо всего диска) на ноутбуке?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/148205/" target="_blank">Silent Code — в августе мир увидит комплексную систему защиты переговоров для мобильных устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148200/" target="_blank">Бесплатный сыр бесплатных VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148151/" target="_blank">SQL injection для начинающих. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148127/" target="_blank">Лига защиты интернета создаёт сеть экстренного оповещения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148122/" target="_blank">Разработана система хранения паролей в подсознании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148112/" target="_blank">Обезврежен ботнет Grum, рассылавший 18% мирового спама</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/148087/" target="_blank">Конкурентная разведка на PHDays 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148024/" target="_blank">Биткойн, пятница, тринадцать…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/148012/" target="_blank">#SaveTheArctic by Anonymous, или утечка данных из Shell, Газпром, Роснефть и BP Global</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147971/" target="_blank">Очередное собеседование — взгляд работодателя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147924/" target="_blank">Закон 89417-6 в действии или инициатива операторов связи?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147923/" target="_blank">CD за 3,5 миллиона евро</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318372/" target="_blank">VulnHub: Разбор DC416 Dick Dastardly</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318324/" target="_blank">Личный опыт: как мы выбирали DLP-систему</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/318262/" target="_blank">Security Week 51-52: Нестандартный топ новостей 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/318250/" target="_blank">В защите McAfee для банкоматов обнаружена опасная уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318230/" target="_blank">Информационная гигиена в стране с несвободным интернетом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318228/" target="_blank">Взлом на борту самолёта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318174/" target="_blank">Можно ли вычислять биткоины быстрее, проще или легче?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318122/" target="_blank">Соревнование Underhanded Rust 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318106/" target="_blank">Перехват системных вызовов Linux с помощью LSM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317878/" target="_blank">VulnHub Разбор заданий с CTF SkyDog: 2016 — Catch Me If You Can</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305730/" target="_blank">Анализ обнаружения обфусцированных вирусов мобильными антивирусными приложениями на платформе Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bitrix/blog/305704/" target="_blank">Почему взламывают даже защищённые CMS на безопасном хостинге</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305706/" target="_blank">Добавляем произвольный телефон в личном кабинете оператора мобильной связи Киевстар (Украина)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305694/" target="_blank">Организация аутентификации по СМС по примеру Telegram/Viber/WhatsApp</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/thirdpin/blog/305594/" target="_blank">Пастильда — открытый аппаратный менеджер паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/tottoli_gsm/blog/305586/" target="_blank">Все под контролем: защищаем корпоративные разговоры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305572/" target="_blank">Дайджест последних достижений в области криптографии. Выпуск первый</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/alloy_software/blog/305516/" target="_blank">Тернистый путь ITSM в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305550/" target="_blank">TP-LINK потеряла права на домен, использующийся для настройки роутеров и усилителей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305536/" target="_blank">Код Rust включен в Firefox 48</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147915/" target="_blank">Skype перепутал адресатов сообщений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/147736/" target="_blank">«Занимательный XenAPI», или «Новые приключения Citrix XenServer»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147857/" target="_blank">Многозначное шифрование с использованием хеш-функций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147840/" target="_blank">10 самых популярных паролей, украденных с Yahoo</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/147145/" target="_blank">Прогнозирование событий и Data Mining — вперед в будущее</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147792/" target="_blank">Глубоко эшелонированная анонимность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147769/" target="_blank">В Англии ты можешь попасть за решётку за хранение шума</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147755/" target="_blank">Расшифрован механизм In-App App Store</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147748/" target="_blank">Взломан androidforums.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147737/" target="_blank">Worst-case thinking</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147732/" target="_blank">Реверс-инжиниринг протокола App Store</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147704/" target="_blank">Aftershock: как будем жить после пресловутого законопроекта. Советы бывалых</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147677/" target="_blank">Сказ о том, как я чуть не занялся благотворительностью и не подарил нигерийскому мальчику объектив Canon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147672/" target="_blank">Дыра в прайваси и безопасности Apple iMessage</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147644/" target="_blank">Закон 89417-6: Получим публичную базу нелегального контента?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147643/" target="_blank">В сеть утекли пароли Yahoo</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/147636/" target="_blank">Социальная инженерия на PHDays 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147635/" target="_blank">Интервью с владельцем ботнета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147622/" target="_blank">Google высказался против закона № 89417-6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147609/" target="_blank">Как работает интернет-цензура сегодня (и работает ли?)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147593/" target="_blank">У сервиса Formspring “увели” 420 тысяч паролей пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147591/" target="_blank">DDOS атака на Почту России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147576/" target="_blank">Bash.im (Башорг) включился в поддержку акции против закона № 89417-6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147568/" target="_blank">Яндекс поддержал акцию против закона № 89417-6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147566/" target="_blank">Защита АСУ ТП по-русски</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147554/" target="_blank">Google близки к выплате штрафа в 22,5 миллиона долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147532/" target="_blank">Портабельная система анализа вредоносности на основе Buster Sandbox Analyzer — Sandboxie</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147484/" target="_blank">Отправляем заявление в Государственную Думу по законопроекту №89417-6</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/147478/" target="_blank">Контроль над облачной инфраструктурой на раз-два-три</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147446/" target="_blank">Как лучше хранить хэши паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147422/" target="_blank">Если бы хакеры не существовали, правительству стоило бы их выдумать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147331/" target="_blank">Проблема идентификации пользователя для компаний</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147327/" target="_blank">Голландский провайдер насчитал 120 000 юзеров с паролем по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/147271/" target="_blank">Взлом хэшей на PHDays 2012: конкурс Hash Runner</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147258/" target="_blank">Биткойн и основы фьючерсной тоговли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147242/" target="_blank">Блокировка мобильных паразитов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/luxoft/blog/147197/" target="_blank">Что можно увидеть на спутниковых снимках? Часть #1. Места, запрещённые к просмотру</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147218/" target="_blank">Wikileaks публикует 2,4 млн электронных писем сирийских властей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147152/" target="_blank">Отраженная браузерозависимая XSS на mts.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/147140/" target="_blank">Европейский парламент проголосовал против ACTA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/147105/" target="_blank">Ученый разработал clickjack rootkit для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/group-ib/blog/146954/" target="_blank">Checkpoint Abra — бреши в «доверенных» флэшках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146906/" target="_blank">Антивирусы не могут победить Zeus</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146852/" target="_blank">Комиссия США по торговле подаёт в суд на компанию, которая не смогла защититься от российских крэкеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146831/" target="_blank">Обнаружена новая версия троянца «Тибет», поражающего Mac OS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146806/" target="_blank">Белорусские интернет-кафе смогут больше не проверять паспорт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/146766/" target="_blank">«Шапочки из фольги уже недостаточно, пора заворачивать в нее бумажник»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146672/" target="_blank">Твиттер-боты создают события в международном масштабе</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/146308/" target="_blank">Покажи мне деньги! Конкурс «Большой Ку$h» на PHDays 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146591/" target="_blank">Хранение паролей в Ozon.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146588/" target="_blank">One Time Secret – после прочтения сжечь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146555/" target="_blank">«Доска позора» с юзерами, выдающими приватную информацию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146551/" target="_blank">Wired vs Wireless Firewall, Hole196, маркетинг против здравого смысла и все-все-все</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146524/" target="_blank">На TechRadar произошла утечка личных данных пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146516/" target="_blank">Facebook сгенерировал почтовые адреса всем пользователям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146497/" target="_blank">Инфографика — чем опасны беспроводные сети с точки зрения безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146400/" target="_blank">PayPal заплатит за найденные баги в своей системе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146395/" target="_blank">В Нидерландах предлагают легализовать DDoS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146315/" target="_blank">МВД ликвидировало сеть ботнетов, заразивших 6 миллионов компьютеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146284/" target="_blank">Логические дыры в безопасности Сбербанк ОнЛ@йн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146278/" target="_blank">Обратная связь</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/146142/" target="_blank">PHDays Online HackQuest 2012 завершен</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146175/" target="_blank">Визуализация атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146155/" target="_blank">Вирус Flame создавался специалистами США и Израиля с целью саботажа иранской ядерной программы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146130/" target="_blank">Защита gitlab и gitolite от подбора паролей и ключей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146118/" target="_blank">Web of Trust подключил Безопасный Поиск Яндекса (SafeBrowsing API)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/146094/" target="_blank">Остаться в живых. Безопасность SCADA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146068/" target="_blank">Генератор/валидатор паролей по результатам взлома LinkedIn</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/146054/" target="_blank">Несколько интересных историй о потерянных ноутбуках, камерах и фотоаппаратах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145980/" target="_blank">Настройка корректного завершения работы гостевой Windows 2003 в qemu-kvm Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145948/" target="_blank">Сканер вирусов изнутри</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145896/" target="_blank">Новый министр о будущем связи в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145890/" target="_blank">Дефейс официального сайта ЕГЭ Санкт-Петербурга</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/145872/" target="_blank">Русские хакеры в Польше, или CONFidence 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145858/" target="_blank">За использование Google Talk или Skype можно сесть в тюрьму на 15 лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145843/" target="_blank">Анализ возможностей массового аудита на основе утечки хешей из LinkedIn</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145820/" target="_blank">Радужные таблицы в домашних условиях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/145792/" target="_blank">Positive Hack Days CTF 2012. Как это было</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145775/" target="_blank">Извлечение AES ключа в мгновение ока</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145566/" target="_blank">Дырка позволяющая удаленное исполнение произвольного кода при старте 1С 8.2 БП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145770/" target="_blank">Британское агентство возобновило дело Google Street View в свете выводов FCC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145721/" target="_blank">Критическая уязвимость XEN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145658/" target="_blank">30 наиболее популярных паролей, украденных с LinkedIn</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145650/" target="_blank">Череда утечек баз продолжается, на этот раз Riot Games</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145648/" target="_blank">Солим пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145642/" target="_blank">LinkedIn начал использовать соль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145641/" target="_blank">Смешная уязвимость в MySQL под Linux 64-bit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145637/" target="_blank">Иссык-кульские кибер-милиционеры задержали распространителя компьютерных вирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145581/" target="_blank">Stuxnet, Flame и Duqu использовали GPL-код</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145580/" target="_blank">Опубликовано досье ФБР на Ричарда Фейнмана</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/145466/" target="_blank">Видео с Positive Hack Days 2012 — в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145448/" target="_blank">По следам LinkedIn благополучно утекла база и Last.fm</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145436/" target="_blank">Как направить весь tcp-трафик с гостевой Windows системы через Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/145438/" target="_blank">Шпионаж через Bluetooth — возможности W32.Flamer</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/145329/" target="_blank">Веб-уязвимости. Невероятное — очевидно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145332/" target="_blank">Планирование политики безопасности: «матрица доступа»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145345/" target="_blank">Утекла база LinkedIn хэшей?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145324/" target="_blank">Поисковик Shodan подвергает новым рискам системы управления в промышленности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145318/" target="_blank">Фиксим клиент Last.FM или как получить бесплатное радио</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145288/" target="_blank">AntiSMS — быстрое и эффективное лечение блокировщиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/305532/" target="_blank">Сортировка предупреждений статических анализаторов по приоритету при поиске и исправлении программных ошибок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305508/" target="_blank">FIDO U2F — Универсальная Двухфакторная Аутентификация. Введение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/305472/" target="_blank">Атакуем SS7: анализ защищенности сотовых операторов в 2015 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/305390/" target="_blank">Из украинского банка похищено $10 млн: новая атака взломщиков системы SWIFT</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/305314/" target="_blank">Похоже, Github опять недоступен в России… и другие сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/305000/" target="_blank">Ищем уязвимости в коде: теория, практика и перспективы SAST</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/305290/" target="_blank">Security Week 27: обход шифрования в Android, воскрешение Conficker в медицине, IoT ботнет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/305262/" target="_blank">Vulners — Гугл для хакера. Как устроен лучший поисковик по уязвимостям и как им пользоваться</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/afidistribution/blog/304278/" target="_blank">Altaro VM Backup: резервное копирование виртуальных машин Hyper-V и VMware</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304868/" target="_blank">Windows ПК как генератор ARP флуда</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/145260/" target="_blank">Apple выпустила руководство по безопасности iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145241/" target="_blank">Защита для NGINX — NAXSI</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/145236/" target="_blank">Анализ структуры управления Flame</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/145234/" target="_blank">Современное ПО – защищённое ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144455/" target="_blank">Взлом базы данных из-за LFI</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145174/" target="_blank">Идеи о механизме защиты в Windows на основе самоограничения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145192/" target="_blank">Защита прав пользователей. Рейтинг компаний</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145172/" target="_blank">В штатовской военной микросхеме китайского производства обнаружили запароленный «чёрный ход»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/highloadlab/blog/145137/" target="_blank">Обзор DDoS-атак Рунета: 9:1 в пользу примитива</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145081/" target="_blank">Единая Россия выступает за усиленное государственное регулирование интернет-пространства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145065/" target="_blank">Меня в Гугле забанили</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/145037/" target="_blank">Карманный перехват и восстановление файлов из трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/144967/" target="_blank">Flame: что известно на данный момент</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144957/" target="_blank">Против лома нет приёма: OpenJDK hack vs. Class Encryption</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/144775/" target="_blank">Еще раз о безопасности систем ДБО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144904/" target="_blank">Банки. Ошибки и уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144884/" target="_blank">Phorm</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144892/" target="_blank">Летаем вместе с Yandex! или XSS для самых маленьких</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144876/" target="_blank">Akismet отсеял уже 50 миллиардов спам-комментов в блогах Wordpress</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144870/" target="_blank">Верховный суд Британии отклонил апелляцию основателя WikiLeaks</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144721/" target="_blank">Кто будет зарабатывать на Eye-Tracking завтра?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144842/" target="_blank">Защита АСУ ТП по-американски</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144819/" target="_blank">Вирусы с радикала. Опять!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144815/" target="_blank">Взломанный сайт Bitcoinica не имел бэкапов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/globatel_ltd/blog/144811/" target="_blank">IPMI — уязвимость в shell v. 1.00 позволяющая перезагружать сервер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144776/" target="_blank">О том, как не стоит делать веб-сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144772/" target="_blank">Вирус-шпион</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144750/" target="_blank">Австралийка выложила фото денег в Facebook, наведя грабителей на дом матери</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144738/" target="_blank">Британские регуляторы штрафуют премиум-провайдеров за вредоносное ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/144713/" target="_blank">Началась регистрация на онлайн-конкурсы PHDays 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144718/" target="_blank">Пограничный контроль биометрических паспортов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/144700/" target="_blank">Разработка и применение модуля PAM для аутентификации в Astra Linux с использованием Рутокен ЭЦП и Рутокен S</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144663/" target="_blank">Использование Sandbox на Mac OS X Server для изоляции пользовательских веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144406/" target="_blank">Защита ajax-приложения от Cross Site Request атак (CSRF)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144641/" target="_blank">В ФБР создано подразделение по контролю интернет-коммуникаций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144597/" target="_blank">КВИС — критически важные информационные сегменты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144621/" target="_blank">IT Quest 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intersystems/blog/144310/" target="_blank">Работа с SSL/TLS в СУБД Caché</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/144565/" target="_blank">Поточное шифрование на скорости 10 Гбит/c? Да. Параллельно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144439/" target="_blank">Находим admin + shell на *******.alfabank.ru с помощью Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144485/" target="_blank">Создатель ботнета Bredolab получил 4 года тюрьмы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144427/" target="_blank">DoS-атака на сайты с собственными капчами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144417/" target="_blank">CISCO ACE. Часть 2: балансировка удаленных серверов и приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/drweb/blog/144399/" target="_blank">Интервью с главным разработчиком Dr.Web СureIt! 7.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/144384/" target="_blank">Мифы о защите персональных данных в облаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/144383/" target="_blank">Как я учил арабских шейхов ломать SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144377/" target="_blank">Stringer Java Obfuscation Toolkit: защита Java и Android-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/apps4all/blog/144375/" target="_blank">80% приложений для мобильного банкинга имеют уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/144374/" target="_blank">Максимум практики, минимум формальности: опубликована программа PHDays 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144282/" target="_blank">Безопасная аутентификация между клиентом и сервером без ввода логина и пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144362/" target="_blank">Вынужденный обход парольной защиты модуля VBA в Excel 2010</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144343/" target="_blank">Хакеры UGNazi взломали WHMCS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144255/" target="_blank">Nmap 6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144253/" target="_blank">Авторизация в Альфа-Мобайл (под iOS) через 10 часов после ввода пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144251/" target="_blank">Anonymous взломали одну из баз данных Министерства Юстиции США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144245/" target="_blank">Дефейс сайта notepad++</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/144187/" target="_blank">Мастер-классы PHDays 2012: от защиты сетей Wi-Fi до безопасности SAP и Web 2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144167/" target="_blank">Обнаружены источники мусорного P2P-траффика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144139/" target="_blank">Массовая уязвимость в проектах на Ruby</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144130/" target="_blank">Twitter включил Do Not Track и изменил принцип создания рекомендаций</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/144079/" target="_blank">Подробные правила конкурса Hack2Own на PHDays 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144065/" target="_blank">Находим SQL инъекцию в *******.alfabank.ru с помощью Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144060/" target="_blank">The Pirate Bay активно DDoS`ят. UPD Бывший анонимус</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/144014/" target="_blank">Пишем модуль безопасности Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/144005/" target="_blank">Новый «подарок» в законодательстве по ПДн</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/143909/" target="_blank">Азбука NoSQL-инъекций</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/143921/" target="_blank">Яндекс.Почта. Предотвращение хакострофы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/143896/" target="_blank">Ждем всех на светлой стороне силы!</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/143834/" target="_blank">Взломать Wi-Fi за 10 часов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/doktelecom/blog/143823/" target="_blank">Номер 8-800, или как разориться за один день</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143814/" target="_blank">Шифруем сообщения до заданного времени</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143807/" target="_blank">Читаем паспортные данные студентов, школьников и пенсионеров у них из кармана</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143752/" target="_blank">Adobe разрешила пользователям старых версий Creative Suite не платить за патчи безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143719/" target="_blank">Сервис Bitcoinica снова взломали</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/143700/" target="_blank">SELinux на практике: DVWA-тест</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143595/" target="_blank">Блокирующие Wi-Fi обои можно будет купить в следующем году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143590/" target="_blank">Ustream DDoS`ят из-за русских журналистов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143587/" target="_blank">Отчет ФБР о криптовалюте Биткойн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143564/" target="_blank">CISCO ACE — балансировка приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143548/" target="_blank">Ломаем сайт банка или от LFI к RCE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143526/" target="_blank">Энигма — шифрование сообщений в войну</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143516/" target="_blank">Строим защищённую систему на основе TOR и I2P</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143501/" target="_blank">Cайт Кремля подвергся DDoS-атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143440/" target="_blank">Странный баг доступа к корпоративной гуглопочте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143436/" target="_blank">ФБР хочет заставить Facebook, Skype, Google и других оставлять в своих продуктах бэкдоры для слежки и прослушки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/highloadlab/blog/143404/" target="_blank">Сайт радиостанции «Эхо Москвы» атаковали сразу три ботнета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143369/" target="_blank">Угон аккаунтов Yahoo, AOL, Hotmail</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/highloadlab/blog/143368/" target="_blank">Как отбить DDoS-атаку и обезопасить сеть от аномалий своими силами? – 14 мая на семинаре</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/drweb/blog/143361/" target="_blank">Новое мошенничество угрожает пользователям Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143345/" target="_blank">О детектировании атак типа drive-by download и новых векторах распространения вредоносного ПО через Flash-баннеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143331/" target="_blank">Уязвимость PHP в режиме CGI</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143328/" target="_blank">Получение паролей подключенных пользователей к mobile AP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143290/" target="_blank">Ошибки трансферта технологий №2 / «Ошибки раскрытия»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143276/" target="_blank">Типичная ошибка при установке COOKIE в PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143257/" target="_blank">Облака в применении к ИБ: некоторые неочевидные следствия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143259/" target="_blank">Очевидные 3 правила безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143239/" target="_blank">Ошибки трансферта технологий №1 / «Ошибки индивидуализации»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143022/" target="_blank">Google Chrome хакеру не помощник</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143078/" target="_blank">Symantec: на религиозных сайтах больше вирусов, чем на порносайтах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143064/" target="_blank">CMS DLE + uLogin. Ошибки модуля</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/304842/" target="_blank">Критическая уязвимость позволяет перехватывать весь сетевой трафик пользователей Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/304818/" target="_blank">Зачем на самом деле хакеры атакуют биржи и так ли масштабна проблема</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/afidistribution/blog/304276/" target="_blank">GFI MailEssentials: почта под защитой</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/304764/" target="_blank">Эволюция угроз и стратегии защиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/304738/" target="_blank">Уязвимости корпоративных информационных систем — 2015: внутри хуже, чем снаружи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304680/" target="_blank">Пример базы Keepass для сетевого администратора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304646/" target="_blank">Одна неочевидная уязвимость некоторых групп вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/304638/" target="_blank">«Противостояние» глазами защитника: Рассказ о PHDays CTF от участника соревнований</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304578/" target="_blank">Автоматизация в JunOS: пишем скрипты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/304580/" target="_blank">Security Week 26: Слив данных через вентилятор, ядро iOS расшифровали, криптолокер на парольных архивах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143058/" target="_blank">Браузер Onion Browser для iOS 5.0 работает с TOR</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143048/" target="_blank">Твит об XSS-баге в Google+ привёл к XSS на сайте издания InformationWeek</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143036/" target="_blank">Что нужно знать о CISPA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/143007/" target="_blank">Услуга «Оптимизация» от Мегафона вмешивается в содержимое трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/drweb/blog/142993/" target="_blank">Уязвимости платформы Android. Настоящее и будущее</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142933/" target="_blank">Очередная схватка с веб-вирусами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142929/" target="_blank">Яндекс разрешил шифрованный контент</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142925/" target="_blank">Безопасность при авторизации на сайтах по OpenID</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142921/" target="_blank">Drive eRazer Ultra надежно сотрет любую информацию с жесткого диска</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/140572/" target="_blank">Аутентификация на Asp.net сайтах с помощью Rutoken WEB</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142909/" target="_blank">Мегафон вмешивается в трафик до юзера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142885/" target="_blank">Где тонко, там и взломают</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142883/" target="_blank">Неприятные особенности браузера от Яндекса (браузер «Интернет»)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142876/" target="_blank">Раскрытие IP-адреса пользователя Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142836/" target="_blank">ВКонтакте ддосит antigate.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142803/" target="_blank">Шифрование дисков в XenServer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142779/" target="_blank">Google Drive — all your base are belong to us</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139711/" target="_blank">Право быть забытым</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infopulse/blog/142422/" target="_blank">Своими руками: автоматизация управления процессами безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/142729/" target="_blank">Как воруют вашу почту: gmail fishing</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142721/" target="_blank">Великий Китайский Firewall пал?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142710/" target="_blank">FortNotes — онлайн менеджер паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/142706/" target="_blank">eBay. Что купил твой сосед?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142625/" target="_blank">ЭЦП в браузере: проблемы, решения, личный опыт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142606/" target="_blank">Логические уязвимости при составлении SQL запросов с LIKE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142599/" target="_blank">Самый частый шаблон SQL инъекций в РНР — бесполезное экранирование символов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/142575/" target="_blank">Dynamic Binary Instrumentation в ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142545/" target="_blank">Монетизация безопасности на free-lance.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142528/" target="_blank">Несложный WEB-quest для студентов не ИТ-специальностей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142521/" target="_blank">На Chrome Webstore распространяются вредоносные расширения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142495/" target="_blank">Anonymous собираются атаковать официальный сайт Формулы 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/142479/" target="_blank">Популярное сетевое оборудование и статистика уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142426/" target="_blank">Два китайца обвиняются в продаже пиратского ПО на 100 миллионов долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/142423/" target="_blank">Введение в SELinux: модификация политики targeted для сторонних веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142408/" target="_blank">Анонимусы создали свою альтернативу Pastebin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142349/" target="_blank">Terraria: или пишите игры правильно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142131/" target="_blank">VolgaCTF глазами участника</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142326/" target="_blank">15-летний хакер задержан за взлом 259 сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142260/" target="_blank">Уязвимость браузере Safari в iOS 5.0.1, 5.1, 5.1.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142247/" target="_blank">The Pirate Bay: а .torrent файлы-то никуда и не пропадали</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142219/" target="_blank">Актуальность атаки SMBRelay в современных Windows сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142192/" target="_blank">«Хакера» поймали за сиськи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142184/" target="_blank">Пуленепробиваемый футляр для iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142174/" target="_blank">Поговорим о Paxos?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/142166/" target="_blank">Яндекс.Пробки. А туда ли вы едете?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142141/" target="_blank">Защита сети — вещи, о которых мы забываем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142135/" target="_blank">Эпик фейл с рассылками у Evernote</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142130/" target="_blank">Эпик фейл с рассылками у VMWare</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142098/" target="_blank">Киоск электронного правительства с пасьянсом и маджонгом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142097/" target="_blank">Деньги из воздуха</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142070/" target="_blank">Аутентификация беспроводных клиентов по учетным записям Active Directory</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142060/" target="_blank">Анонимус против Большого Китайского Фаервола</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/142024/" target="_blank">Модный тренд APT — беспечность и как с ней бороться</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/142015/" target="_blank">Пятница 13-е</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141989/" target="_blank">Модуль nginx для борьбы с DDoS, ставим cookie через Flash</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141938/" target="_blank">Очистка заражённых файлов сайта от вредоносного кода. Продолжение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141984/" target="_blank">Японцы разрабатывают ATM с биометрией</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/141963/" target="_blank">Ботнет на Mac: подробности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141955/" target="_blank">МегаФон предлагает защиту от DDoS?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141946/" target="_blank">Создания сеансового ключа с использованием публичных и приватных ключей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141921/" target="_blank">Сайт Конверсбанка подвергся атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/141869/" target="_blank">Введение в XCCDF</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141872/" target="_blank">Серверное malware или зачем нужны ssh-логгеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141839/" target="_blank">Упражнения по взлому Linux-систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/141838/" target="_blank">Боевой HID-эмулятор на Arduino</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141829/" target="_blank">Samba &lt; 3.6.4 (CVE-2012-1182) удаленное выполнение произвольного кода с root-правами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141825/" target="_blank">Защищаем трафик при помощи Comodo TrustConnect и DNSCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141803/" target="_blank">Пентест на стероидах. Автоматизируем процесс</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141781/" target="_blank">Разделегирован домен Xakep.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/141757/" target="_blank">Умные редиректы на Nuclear Pack</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141710/" target="_blank">Очистка заражённых файлов сайта от вредоносного кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/141684/" target="_blank">Ломаем банк в стиле smash the stack!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141698/" target="_blank">Шеллкоды, эксплойты… Тулзы под Win</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141657/" target="_blank">Softpatent уходит красиво?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/141520/" target="_blank">(Не)безопасный серфинг?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141483/" target="_blank">Бесплатный VPN от Comodo</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141517/" target="_blank">Хакеры Anonymous утверждают, что взломали сотни сайтов в Китае</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141500/" target="_blank">Давайте Поговорим о Контроле</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/141490/" target="_blank">0day/текила/криптография</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141479/" target="_blank">Перехват WEB трафика через протокол WPAD при помощи Intercepter-NG</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141421/" target="_blank">«Доктор Веб» обнаружил ботнет из более чем 550 000 «маков»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141414/" target="_blank">CSRF уязвимость в Wordpress — комментарии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/141365/" target="_blank">Blackhole + CVE-2012-0507 = Carberp</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141312/" target="_blank">Командное взаимодействие во время соревнований CTF</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/141297/" target="_blank">Самоустановка приложения МТС на устройствах Samsung: как это могло случиться</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/141275/" target="_blank">Проникновение в Lotus Domino</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141277/" target="_blank">Егор Хомяков продолжает взломы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141213/" target="_blank">Что записано внутри бесконтактных карт Киевского метрополитена?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141116/" target="_blank">Geode — мечта кардеров или новое слово в использовании кредиток?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/140886/" target="_blank">Citrix XenServer 5.6 Free/Advanced Security Guide</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141012/" target="_blank">Из чрута — на поверхность: как, почему и что делать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/141000/" target="_blank">Выбираем DLP-систему для средней организации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140966/" target="_blank">Баним чужой аккаунт на Free-lance.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/140922/" target="_blank">Интервью с Дмитрием Скляровым</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/140897/" target="_blank">Отчет с конференции BlackHat EU 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/140882/" target="_blank">Инъекция Excel-формул в Google Docs</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/140849/" target="_blank">Обзор уязвимостей в 2011 году: Opera на коне, Adobe в зоне риска</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139196/" target="_blank">Электронная подпись простыми словами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140778/" target="_blank">Владельцам Samsung Galaxy S/S2, установившим проиложение «МТС Мобильная Почта»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140736/" target="_blank">Обнаружение местоположения хоста в неуправляемой сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304568/" target="_blank">6 причин объяснить ребенку азы информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/304532/" target="_blank">Критическая уязвимость антивируса Symantec Endpoint позволяет осуществлять удаленное выполнение кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/304028/" target="_blank">В Питере быть: доклады «очной ставки» NeoQUEST-2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/243673/" target="_blank">Мониторинг и система управления ЦОД</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304446/" target="_blank">SBC+VPN+Tor+obfsproxy в кармане</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/304382/" target="_blank">Кибер-пандемия: компьютерные атаки в сфере здравоохранения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/afidistribution/blog/304274/" target="_blank">GFI Archiver: хранилище для почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304374/" target="_blank">Создание плагина OSSIM для сбора логов из базы данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/afidistribution/blog/304272/" target="_blank">GFI LanGuard — виртуальный консультант по безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virgilsecurity/blog/304286/" target="_blank">Отправляем зашифрованные SMS сообщения с Virgil</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140740/" target="_blank">Коды, исправляющие ошибки. Варианты программной реализации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140734/" target="_blank">Подмена HTTP-заголовка Server для различных веб-серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/140725/" target="_blank">Android. Обзор боевых приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140623/" target="_blank">Торгуем титульными знаками Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/140464/" target="_blank">iPhone: MiTM-атака из кармана</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140525/" target="_blank">У Scalaxy неделю присутствовала дыра в безопасности API</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/140484/" target="_blank">Разбор полетов: хакспейс по итогам PHDays CTF Afterparty 2011</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140440/" target="_blank">Войны в песочнице – Часть 3. ARP-Spoofing, бесполезность фильтрации по MAC-адресу и опасность установки неподписанного ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140404/" target="_blank">Почему сеть Фейстеля работает? Объяснение «на пальцах»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140412/" target="_blank">Muz.ru отдает аудиоматериал бесплатно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140394/" target="_blank">На пути к Skein: просто и понятно про Blowfish</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140324/" target="_blank">МВД России впервые довело до конца дело о компьютерном фишинге</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140303/" target="_blank">Googleapis.com взломан?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140278/" target="_blank">Боевое тестирование Wifi Protector: защищаем ARP-таблицу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140196/" target="_blank">Утечки личных данных в вебмани</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140172/" target="_blank">AndroidLost: удалённое управление утерянным смартфоном</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140145/" target="_blank">Путь к проведению SQL-инъекций в Zend Framework</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140054/" target="_blank">Злые фишинг картинки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140038/" target="_blank">Anonymous представили инструментарий «начинающего взломщика»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/139950/" target="_blank">Реализация инструментов для создания контента OVAL® на Python</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/140025/" target="_blank">MS12-020: разведение RDP-червей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/140003/" target="_blank">Фотохостинги и privacy ваших фотографий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139974/" target="_blank">Немного о хэшах и безопасном хранении паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/139818/" target="_blank">NeoQUEST — подведение итогов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139931/" target="_blank">Модуль nginx для борьбы с DDoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/symantec/blog/109921/" target="_blank">Сотрудники Symantec потеряли 50 мобильников. Не находили?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139940/" target="_blank">Защищаем сайт от атак на примере ХабраХабра</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139753/" target="_blank">Вешаем сервер через PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139704/" target="_blank">Сравнительный тест программ, предотвращающих атаку на ARP-таблицу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139685/" target="_blank">Блокиратор одноклассников и прочих сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139667/" target="_blank">Правильный подход к проблемам безопасности на github</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139604/" target="_blank">Отслеживание параметров браузера и ОС пользователя как мера предотвращения угона аккаунтов (обновлено)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139540/" target="_blank">Предполагаемый лидер LulzSec помогает ФБР арестовывать хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139453/" target="_blank">Идентификация javascript зловреда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139399/" target="_blank">Егор, прекрати взламывать Github!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139314/" target="_blank">Взломаны cервера на Linode, украдено около 50K BTC ($250K)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139302/" target="_blank">Аддон для Firefox: наглядно увидеть, какие сайты «тихо» устанавливают cookie</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139225/" target="_blank">Как относятся к безопасности своих данных в НАСА?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139176/" target="_blank">Перехват сессий в беспроводных сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138770/" target="_blank">Полностью никто никогда не защищён. Уязвимости на eBayToday</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139085/" target="_blank">Анализ случайных последовательностей с помощью простых графических тестов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139079/" target="_blank">iOS-приложение может без уведомления пользователя получить доступ к фотографиям устройства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139072/" target="_blank">Хактивисты с Anonymous смогли вывести из строя сайт интерпола</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139071/" target="_blank">Полиция арестовала 25 активистов Anonymous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139051/" target="_blank">Сайты *.narod.ru работают на ZX Spectrum</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/139034/" target="_blank">Google раздаст 1 миллион долларов борцам с багами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138964/" target="_blank">«Анатомия анонимных атак» — как работают Anonymous?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138922/" target="_blank">EFF просит Европарламент защитить права программистов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138919/" target="_blank">Parallels Plesk hacked — Нашли дыру в Плеск-панели</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138886/" target="_blank">Linux 2.6, PHP 5.3 и PostgreSQL 9.1 признаны открытым ПО с высоким качеством кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138867/" target="_blank">Google прекратит отслеживать поведение пользователей в своём браузере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138807/" target="_blank">CISM application</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138745/" target="_blank">Google, Microsoft, Apple приняли соглашение о приватности данных: новые требования для разработчиков мобильных приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138741/" target="_blank">][ackQuest — NeoQuest 2012</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138726/" target="_blank">Утечка логинов, паролей и почты пользователей чата Youporn</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138690/" target="_blank">Не стоит паниковать по поводу слабых RSA ключей — просто заботьтесь о своих P и Q</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138490/" target="_blank">Практическое применение DNSSEC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135369/" target="_blank">Защита RDP по ГОСТ с помощью Рутокен ЭЦП. Двухуровневый TLS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138476/" target="_blank">Google без разрешения следил за пользователями Safari</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138447/" target="_blank">Начальник по борьбе с киберпреступностью, зарплата 1500 гривен</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138431/" target="_blank">В Великобритании на £100 000 оштрафовали владельцев twtter.com и wikapedia.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138397/" target="_blank">В среднем, 2 RSA ключа из 1000 уязвимы к взлому</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138384/" target="_blank">Google готовит встроенный генератор паролей для Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138374/" target="_blank">Sandboxie и trial версии программ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138363/" target="_blank">Как НЕ нужно проводить конкурсы на своём сайте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138289/" target="_blank">Обзор защищенной флешки Aegis Secure Key</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138300/" target="_blank">Хактивисты перешли к конкретике: атакован производитель слезоточивого газа и наручников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138287/" target="_blank">Apple вынуждена отвечать на письмо конгресса США относительно безопасности данных на iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138227/" target="_blank">Филипп Гросс о безопасности в соцсетях в передаче Соловьева</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138213/" target="_blank">Глава Group IB: русские хакеры считаются самыми меркантильными в мире</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138175/" target="_blank">Хакеры благородно обошлись с NASA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138127/" target="_blank">Hascgi y или пароли в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138033/" target="_blank">Эксперты из Zvelo Labs нашли уязвимость в Google Wallet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138024/" target="_blank">Немного истории: кто такой Anonymous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/138000/" target="_blank">Trustwave признает выдачу корневого сертификата сторонней компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137981/" target="_blank">Github сообщили о DDoS атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137961/" target="_blank">Защита от ботов, основанная на различии в работе с большими числами в JavaScript и PHP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137940/" target="_blank">Обновление политики использования паролей RIPE NCC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137915/" target="_blank">Anonymous приступили ко взломам сайтов «Единой России»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137913/" target="_blank">Diamond Dash, или как не надо защищать свои online приложения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137865/" target="_blank">Опыт сертификации CISM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137849/" target="_blank">Сервис Path был уличен в загрузке всей адресной книги iPhone на свои серверы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137761/" target="_blank">Обезвреженный Microsoft и Лабораторией Касперского ботнет вернулся к жизни</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137760/" target="_blank">Исходники Symantec pcAnywhere в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137657/" target="_blank">Хакеры из группировки Аnonymous опубликовали запись переговоров между ФБР и отделом по борьбе с киберпреступностью британской полиции</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137646/" target="_blank">Alarmist, или история одного параноика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137601/" target="_blank">Взлом капчи LostFilm (php)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137634/" target="_blank">Боитесь что снова закроют ex.ua? Не стоит — все можно скачать на сервере Министерства внутренних дел Украины</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137633/" target="_blank">Спецам из Рурского университета удалось взломать систему шифрования спутниковой телефонной связи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137625/" target="_blank">Перспективы развития цивилизации в контексте проблемы бесконтактного информационного обмена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137578/" target="_blank">Обновление Opera Mini — даже если она у вас не установлена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137571/" target="_blank">EX.UA, LOIC и беспомощная украинская милиция</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137512/" target="_blank">Google внедряет дополнительные механизмы защиты в Android Market</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137508/" target="_blank">Взлом VeriSign в 2010 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137502/" target="_blank">«Вирусная» атака на Android Market оказалась ошибкой Symantec</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137499/" target="_blank">В Украине продолжаются атаки на сайты органов власти</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137493/" target="_blank">Выполнение кода в PHP 5.3.9</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137492/" target="_blank">Kaspersky: проблемы с обновлением баз, антивирусы отключаются</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137475/" target="_blank">Анонимность vs деанонимизация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137416/" target="_blank">Анонимизация и деанонимизация в сети Интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304014/" target="_blank">Исследуем защиту и восстанавливаем аркады Namco System ES1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304222/" target="_blank">Организация доступа в сеть WI-FI московского метрополитена с точки зрения безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304202/" target="_blank">Обновление MS16-072 ломает Group Policy. Что с этим делать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/304196/" target="_blank">Противостояние: новый формат и новая реальность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/304188/" target="_blank">Утечки данных дорожают: средний размер убытков компаний из-за взлома вырос до $4 млн</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/304050/" target="_blank">Security Week 25: уязвимости в Windows, libarchive и Wordpress, новые старые трюки криптолокеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aladdinrd/blog/304024/" target="_blank">«Разрубить Гордиев узел» или преодоление проблем шифрования информации в ОС Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/303956/" target="_blank">Веб-сервисы для проверки сайтов на вирусы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/304010/" target="_blank">Инлайн ассемблер в PowerShell</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/282778/" target="_blank">Путешествие в Onionland: взлом скрытого сервиса из даркнета в задании NeoQUEST-2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137419/" target="_blank">Уязвимость в ISPSystem Billmanager</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137236/" target="_blank">ФБР готовит программу для мониторинга социальных сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137370/" target="_blank">Уязвимость в sudo</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/137306/" target="_blank">Авторизация в OpenVPN c помощью Рутокен ЭЦП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137196/" target="_blank">Взлом университета Сколково и «соседних» сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136836/" target="_blank">Технологии работы с электронной подписью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137127/" target="_blank">История одного ресурса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137071/" target="_blank">Расшифровка вредоносного JavaScript</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136932/" target="_blank">Редирект при вставке видео с Ютуба</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137042/" target="_blank">Новое Соглашение о Конфиденциальности Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/137020/" target="_blank">Пиктографический пароль. Результат</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136771/" target="_blank">Как я узнал, что у нас сливают трафик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136948/" target="_blank">Евросоюз ужесточает требования к защите персональной информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125317/" target="_blank">Обзор бесплатных инструментов для пентеста web-ресурсов и не только v2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136918/" target="_blank">Пиктографический пароль. Эксперимент</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136859/" target="_blank">Аnonymous запустят свой MegaUpload</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136848/" target="_blank">Где Apple iCloud хранит Ваши файлы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136826/" target="_blank">Повышение привилегий в Linux &gt;=2.6.39</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136736/" target="_blank">Принцип домино или XSS на крупных сайтах рунета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136669/" target="_blank">МЧС выпустило «тревожную кнопку» для iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136572/" target="_blank">Интересные решения для электронной подписи в браузере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136635/" target="_blank">Глава Минсвязи заявил что власти не будут блокировать доступ к Twitter и Facebook в случае волнений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136621/" target="_blank">Anonymous начали мстить за Megaupload</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136543/" target="_blank">eSSL — SSL сертификаты для встраиваемых систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136500/" target="_blank">Исследуем защиту на основе сертификатов (utm5)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136531/" target="_blank">Пассивная XSS в Яндекс.Деньгах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136384/" target="_blank">Корпоративный терроризм</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136366/" target="_blank">Установка и настройка центра сертификации EJBCA в Debian 6 с поддержкой LunaSA HSM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136312/" target="_blank">Утечка данных 6pm.com и Zappos.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136282/" target="_blank">Упаковщик для dsniff.db</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136249/" target="_blank">Википедии 11 лет!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136247/" target="_blank">Microsoft собирает данные ботнет-сетей для борьбы с ними</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135999/" target="_blank">История одного аудита</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136166/" target="_blank">DDOS-бот на PHP гуляет по серверам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136127/" target="_blank">Завалить 30 серверов за секунду с лаптопа?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136046/" target="_blank">Введение в OVAL: Open vulnerability and Assessment Language</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/136014/" target="_blank">О безопасности и адекватности поддержки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135915/" target="_blank">Backdoor в Active Directory #2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135899/" target="_blank">Apple планирует защищать свою продукцию от краж хранением пароля в зарядном устройстве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135817/" target="_blank">Уязвимости серверов к медленному чтению</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135757/" target="_blank">Отмечена активность новой версии червя Ramnit в социальных сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135681/" target="_blank">Как наша армия ждет свой Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135721/" target="_blank">Anonymous против неонацистов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135621/" target="_blank">Полиция Германии разослала 440&nbsp;тыс. скрытых SMS для слежки за гражданами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135618/" target="_blank">Китай на государственном уровне борется с фишерами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135606/" target="_blank">Очередные фишинговые письма (или Как уводят пароли от почты на Яндексе)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135562/" target="_blank">Как получают доступ к чужим ящикам на mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135530/" target="_blank">На Chaos Communication Congress заявили о DoS-уязвимостях в ряде популярных языков веб-программирования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135523/" target="_blank">2,7 млн email’ов между самыми влиятельными людьми мира скоро выложат в онлайн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135451/" target="_blank">«Рождественские подарки» от Anonymous продолжаются: взломан военный ритейлер SpecialForces.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135400/" target="_blank">Во FreeBSD устранено 5 уязвимостей, включая критическую root-уязвимость в telnetd</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135398/" target="_blank">Когда инструкцию лучше не читать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/aktiv-company/blog/134890/" target="_blank">Электронная подпись в браузере с помощью OpenSSL и СКЗИ Рутокен ЭЦП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135303/" target="_blank">Citrix XenServer Free: Hypervizor hardening with PAM and RBAC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135279/" target="_blank">Хакеры атаковали разведывательно-аналитическую компанию Strategic Forecasting</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135273/" target="_blank">Снова о раскрытии IP-адреса собеседника в Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135250/" target="_blank">Раскрытие трафика AppStore и iCloud</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135190/" target="_blank">Обновление одним файлом или объединяем несколько патчей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135150/" target="_blank">Иранские хакеры смогли получить управление американским БПЛА и посадить его на своей территории</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134150/" target="_blank">CSRF уязвимости на примере ХабраХабра</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/135041/" target="_blank">Как любовь к музыке помогла найти уязвимость во Flash'е</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134999/" target="_blank">Критическая уязвимость Windows 7 x64: BSOD и компрометация системы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134885/" target="_blank">Детективная история про SQL injection, местами blind</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134861/" target="_blank">Средства защиты информации и где дёготь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134862/" target="_blank">Взлом с продолжением</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134860/" target="_blank">Безопасный и комфортный доступ в интернет или как защитить свою сеть от интернет угроз без неудобств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134811/" target="_blank">Mенеджер проектов Open Source в Google: мобильные антивирусы бесполезны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134768/" target="_blank">Новый механизм аутентификации в Windows 8: «вход по картинке»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134725/" target="_blank">Подключаем Рутокен ЭЦП к OpenSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133767/" target="_blank">Передача полезного сигнала в смежных полосах спектра несущего сигнала</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134523/" target="_blank">«Защита» mp3 файлов на amazon.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134517/" target="_blank">TOR: Халатность руководства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134453/" target="_blank">Настройка SSL для TomCat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134359/" target="_blank">Наносим удар по ddos ботнету своими силами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134418/" target="_blank">Внутри извращенного ума специалиста по безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134372/" target="_blank">MySQL: Взламываем черный ящик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134369/" target="_blank">Защита от платного контента партнеров-мошенников ОПераторов СОтовой Связи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134358/" target="_blank">Навязывание МТ-подписки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134331/" target="_blank">Практический эпизод борьбы с DDoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134293/" target="_blank">Что если заглянуть в замочную скважину Избиркома?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134266/" target="_blank">DDoSить можно отныне!?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134026/" target="_blank">Щит и Меч в системах ДБО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134165/" target="_blank">Дистрибутив для оценки децентрализованной файловой системы Tahoe-LAFS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134157/" target="_blank">Уязвимость в Facebook открыла доступ к приватным фото пользователей (включая Цукерберга)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134086/" target="_blank">Автор программы OSMP Grabber пошёл под суд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/134014/" target="_blank">Безопасная небезопасная почта от bigmir)net</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133963/" target="_blank">Уязвимость Skype позволяет определить IP-адрес конкретного пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133930/" target="_blank">Операция «Робин Гуд»: перераспределение мировых финансов в пользу 99%</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133906/" target="_blank">Гипервизор против руткитов: как это работает</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133859/" target="_blank">Спецслужбы Великобритании GCHQ запустили конкурс взлома кода для привлечения новых талантов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133825/" target="_blank">Wikileaks будет публиковать документы о компаниях, создающих технологии для слежки за людьми</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133772/" target="_blank">Взлом защиты от копирования HDCP с помощью MitM-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133715/" target="_blank">Материалы конференции «ZeroNights» 0x01</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133667/" target="_blank">Международный день защиты информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133660/" target="_blank">Онлайновый курс Стэнфорда по компьютерной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133640/" target="_blank">О CALEA по-русски</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133604/" target="_blank">Заставляете ли вы клиентов менять стандартные пароли от админок?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133547/" target="_blank">О большой глупости маленьких компаний</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133524/" target="_blank">Злоумышленники «увели» данные 13 млн игроков Maple Story</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133505/" target="_blank">В США разгорается скандал о незаконном использовании пользовательских данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/xakep/blog/303880/" target="_blank">Кирилл «isox» Ермаков, главный безопасник QIWI, рассказывает о своей работе, о блеке, об анонимности и о взрослой ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payonline/blog/303204/" target="_blank">9 секретов онлайн-платежей. Часть 7: система Fraud-мониторинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/303948/" target="_blank">Как «PunkeyPOS» крадет информацию с банковских карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/303922/" target="_blank">1C.Drop.1 использует 1С для выполнения вредоносного кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/303700/" target="_blank">Пентест-лаборатория Pentestit — полное прохождение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/303736/" target="_blank">Теперь ваш HTTPS будет прослушиваться, а сертификат для MitM вы должны поставить сами</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payonline/blog/303330/" target="_blank">Что такое PCI DSS и как происходит проверка на соответствие стандарту?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/securitycode/blog/303698/" target="_blank">Как построить датчик случайных чисел с участием человека?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/303492/" target="_blank">Security Week 24: черный рынок угнанных RDP, зиродей в Flash, GMail отказывается от SSLv3 и RC4</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/google/blog/303536/" target="_blank">Программе Android Security Rewards исполнился 1 год</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133508/" target="_blank">Исследование защиты программы Quick Password Recovery PRO 1.7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133437/" target="_blank">Qiwi. Вирус или нововведения системы для повышения безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133430/" target="_blank">Google собирается сделать свои сервисы еще более безопасными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133418/" target="_blank">Школьный DDoS и стоит ли его бояться</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133415/" target="_blank">Брутфорсим номер карты, CVV2 и срок действия при помощи сайта Мастер-Банка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133409/" target="_blank">Приемы анализа malware: Распаковка драйверов в Ring3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133345/" target="_blank">Сказ о том как вредно может быть ставить компоненты из коробки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133339/" target="_blank">Заметки про SSL/TLS: forward, backward secrecy</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133286/" target="_blank">Сеть сайтов, распространяющих вирусы под видом инструкций и прошивок для мобильных телефонов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133260/" target="_blank">Хакеры устроили очередной «климатгейт»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/133248/" target="_blank">В анкетах с полями типа &quot;девичья фамилия матери&quot; или &quot;любимое блюдо&quot; Вы пишете</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132942/" target="_blank">Быстрое шифрование ваших сообщений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132843/" target="_blank">Исследование защиты программы TurboLaunch 5.1.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132888/" target="_blank">Злоумышленники получили удаленный контроль над системой водоочистки одной из водоочистных станций США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132880/" target="_blank">Худшие пароли 2011 года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132668/" target="_blank">Нифига себе сходил за хлебушком, или история одного взлома</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132565/" target="_blank">Google пометил сайт ОАО «РЖД» как потенциально опасный</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132384/" target="_blank">Steam взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132346/" target="_blank">Персональные данные из ПФР попали в интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132233/" target="_blank">Дырка большого диаметра в Microsoft Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132204/" target="_blank">Новосибирский провайдер «Новотелеком» выложил данные о пользователях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132153/" target="_blank">Одноразовые URI: после прочтения уничтожить</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132108/" target="_blank">«Вконтакте» выдаёт личные данные в поиске по документам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132028/" target="_blank">Anonymous атаковали компьютеры правительства Израиля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/132022/" target="_blank">Сайт компании Adidas взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131984/" target="_blank">Госслужбы будут распространять дезинформацию, чтобы вычислить инсайдеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131936/" target="_blank">История взлома одной браузерной игры. Возврат контроля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131907/" target="_blank">Microsoft выпустила патч для Windows, препятствующий попаданию червя Duqu в систему</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131938/" target="_blank">Непреднамеренный пентестинг (стадия сбора информации и немного больше), или дефолтные пароли — зло</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131903/" target="_blank">Кража информации с экрана смартфона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131710/" target="_blank">О некоторых приемах атаки Man in the middle</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131764/" target="_blank">Anonymous Mexico пытаются отменить операцию, наркокартель начал охоту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131597/" target="_blank">Рассылка малвари почтой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131584/" target="_blank">Deface изображений или Вас могут подставить</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131530/" target="_blank">Anonymous угрожает мексиканскому наркокартелю</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131505/" target="_blank">DLL HiJacking в Qt-приложениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131305/" target="_blank">Почти идеальная схема мошенничества с использованием Webmoney</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131253/" target="_blank">Правительства разных стран подают все больше запросов к Google на открытие доступа к пользовательским данным</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131181/" target="_blank">Ещё о «пользе» плагинов ВКонтакте или история о WebPlugins</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131156/" target="_blank">Персональные данные 1,6 млн абонентов МТС в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131112/" target="_blank">Секреты Meterpreter Payload</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130710/" target="_blank">Перехват PPPoE сессии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131028/" target="_blank">Имеют ли право пренебрегать безопасностью пользователей крупные компании?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131022/" target="_blank">Канал Microsoft на Youtube был взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131020/" target="_blank">Anonymous обрушили серверы с детской порнографией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/131007/" target="_blank">Поиск файлов phpinfo.php, часть 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130965/" target="_blank">Про догмы в криптографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130759/" target="_blank">Использование смартфона в качестве кейлоггера для ПК</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130731/" target="_blank">Баг в хостинге или как делать деньги из воздуха</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130728/" target="_blank">В Сети появился червь Duqu, «родственник» Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130602/" target="_blank">Стойкий и запоминаемый пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130485/" target="_blank">HTML/CSS-инъекция в почте Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130265/" target="_blank">Конференция ZeroNights</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130333/" target="_blank">Вам вне офиса\дома понадобился Интернет. Поиск Wi-Fi нашел незнакомую открытую сеть.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130240/" target="_blank">Осторожно фишинг FirstVDS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130202/" target="_blank">Похищена база данных логинов и паролей от appdb.winehq.org</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130117/" target="_blank">Вторичная аутентификация аккаунта на сайте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130090/" target="_blank">Firewalls — немного теории для начинающих или что надо знать перед покупкой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130085/" target="_blank">Шифрование/дешифрование данных на стороне клиента в web-ориентированных системах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130095/" target="_blank">Полицию Германии обвиняют в использовании шпионской программы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130061/" target="_blank">Создатель GPS против слежки за местоположением подозреваемого без судебного распоряжения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130017/" target="_blank">В школах округа Вашингтон используют сканеры отпечатков пальцев</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/130015/" target="_blank">Вирус попал в систему управления американскими беспилотниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129879/" target="_blank">RusLeaks — все только начинается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129668/" target="_blank">rusleaks приостановил работу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129595/" target="_blank">Уязвимость в системе безопасности Android-устройств HTC может привести к утечке данных пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129541/" target="_blank">Обновление 0x4553-Intercepter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129522/" target="_blank">rusleaks.com — личные данные россиян в интернете</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129430/" target="_blank">Использование уязвимости PromoDJ во имя справедливости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129408/" target="_blank">Разбор атак на части: SYN-flood</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129401/" target="_blank">Серьезная уязвимость во всех версиях FreeBSD</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129386/" target="_blank">Информационная угрозология, уязвимоведение и рисководство</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129321/" target="_blank">Я.Инцидент: Почему я читал ваши СМС?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115669/" target="_blank">Информационная опасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129256/" target="_blank">Угон почты mail.ru, привязанной к сотовому? Думаете, вы защищены? [UPD4]</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126306/" target="_blank">Предложение по совместному созданию стандарта безопасности для Web приложений (сайтов)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129204/" target="_blank">История одного взлома или как пытались увести всё, но не увели ничего</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129221/" target="_blank">MySQL.com взломан и продан за 3000$</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129181/" target="_blank">Методы борьбы с DDoS-атаками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129173/" target="_blank">Уводим чужие cookies c mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129052/" target="_blank">Исследование на тему паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129024/" target="_blank">Существование бизнеса на вредоносных программах, как доказательство недееспособности индустрии безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/129003/" target="_blank">Член хакерской группы LulzSec арестован за участие во взломе компьютерных систем Sony Pictures Entertainment</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128943/" target="_blank">Хроники пентестера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128889/" target="_blank">Изготовление ATM-скиммеров с помощью 3D-печати</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128833/" target="_blank">Хакеры взломали SSL шифрование, используемое миллионами сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128805/" target="_blank">XSS в Skype для IOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128660/" target="_blank">Сотни сайтов на хостинге Go Daddy оказались скомпрометированными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128643/" target="_blank">Sony ограничивает возможности пользователей PSN подать в суд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128628/" target="_blank">Файлы *.txt представляют опасность в Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128526/" target="_blank">Защита от DDOS атаки подручными средствами. Получение доступа к своему серверу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128446/" target="_blank">Суд запретил участнику Anonymous выходить в онлайн под настоящим именем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128383/" target="_blank">Обновление 0x4553-Intercepter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128232/" target="_blank">Безопасность конвертов с пин кодами пластиковых карт ВТБ24</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128211/" target="_blank">Взломан linux.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128197/" target="_blank">Ищете mail.ru в Google?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128188/" target="_blank">Из Windows Phone Marketplace удалили «антивирус», собирающий персональные данные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128167/" target="_blank">«Тайпсквоттеры» собрали 20 ГБ чужой переписки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128077/" target="_blank">Ваши клиенты меняют реквизиты доступа после получения сайта?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/128012/" target="_blank">DroidKungFu-разбор полетов malware на Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/303500/" target="_blank">SЯP wrong эncяyptioи или как скомпрометировать всех пользователей в SAP JAVA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/rootwelt/blog/303462/" target="_blank">Первые 10 минут на сервере</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/303448/" target="_blank">В Adobe Flash Player обнаружена очередная 0day-уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/303264/" target="_blank">Это все потому, что у кого-то слишком маленькая экспонента: атака Хастада на RSA в задании NeoQUEST-2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inline_tech/blog/303240/" target="_blank">UBA, или ищем пользователей «с отклонениями»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/303198/" target="_blank">Кибербезопасность на бескрайних морях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/redhelper/blog/303226/" target="_blank">Что угрожает вашему сайту после установки онлайн-консультанта и как мы с этим боремся</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/303082/" target="_blank">Security Week 23: украли все пароли, невзлом TeamViewer, Lenovo просит удалить уязвимую утилиту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/303058/" target="_blank">Где взять логины или VoIP в помощь</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/282173/" target="_blank">Вам Telegramma: SPARQL-инъекции и CSRF через Telegram-сообщения в задании NeoQUEST-2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127963/" target="_blank">Как вы относитесь к обновлениям, связанным с безопасностью?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127902/" target="_blank">Использование инструментов аудита для взлома VoIP серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127782/" target="_blank">Доступность скрытых и приватных видео на YouTube для подписчиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127795/" target="_blank">Convergence — возможная замена Certification Authority System</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127774/" target="_blank">Вводный видеокурс по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127653/" target="_blank">Мошенничество на «установке» и «активации» платных «обновлений»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127593/" target="_blank">Механизм реализации своих законных прав владельцами персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127576/" target="_blank">Intel Capital предоставила инвестиции разработчику систем безопасности для «умных» устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127521/" target="_blank">Вы еще не авторизуетесь по ключам? Тогда мы идем к вам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127498/" target="_blank">Kernel.org был заражен в течение 17 дней</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127471/" target="_blank">Сокращаем произвольные ссылки сервисом G.CO</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127369/" target="_blank">WikiLeaks: очередная, небывало крупная порция документов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127359/" target="_blank">Некто решил удалить все упомининания о себе в сети. Что делать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127333/" target="_blank">Дыры на zakupki.gov.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127328/" target="_blank">Используем правительственный сайт zakupki.gov.ru как средство бесплатного хостинга статических файлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127298/" target="_blank">Когда просто отфильтровать параметры запроса недостаточно или о вреде универсальности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/abbyy/blog/127259/" target="_blank">Перезаписывать память – зачем?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127225/" target="_blank">LiveInternet.ru: как хранятся пароли пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127180/" target="_blank">Статья «ПДн для обычного человека» — разбор полетов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127164/" target="_blank">Защита и взлом БД на примере программы «Каталог запчастей»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127109/" target="_blank">Теория и практика накрутки голосов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127095/" target="_blank">Фальшивые комментарии в ЖЖ от известных блогеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/127086/" target="_blank">Что дает обычному человеку Федеральный Закон №152 О персональных данных?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126841/" target="_blank">Что такое Prey и как он охотится за вашим компьютером</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126960/" target="_blank">CNET предоставляет подробную информацию о хакерских атаках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126828/" target="_blank">Токены vs Пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126806/" target="_blank">Перехват нажатий клавиш смартфона при помощи акселерометра</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126800/" target="_blank">Раскручиваем XSS на Яндексе (fixed)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126774/" target="_blank">Основы биометрии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126751/" target="_blank">Подключение зашифрованных контейнеров TrueCrypt с помощью USB накопителя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126740/" target="_blank">Эксплуатируемая уязвимость в почте Mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126716/" target="_blank">ВКонтакте стало доступным удаление страницы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126686/" target="_blank">Ресурсы Яндекса на 17:13 MSK не отвечают</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126643/" target="_blank">Постоянные неблокируемые cookie с использованием HTTP-заголовков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126589/" target="_blank">DEFCON 19 CTF Final. Team IV took 4th place</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126581/" target="_blank">Украденный во время лондонских беспорядков ноутбук и вор нашлись благодаря программе слежения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126409/" target="_blank">Множественные CSRF уязвимости в крупнейших порталах Рунета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126274/" target="_blank">Кто такие Anonymous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126364/" target="_blank">Anonymous взломали сайт железнодорожной компании BART</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126319/" target="_blank">Http Parameter Contamination (more)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126198/" target="_blank">Можно ли верить своим глазам? (Unicode в именах файлов)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126173/" target="_blank">Эксперт по сетевой безопасности из Германии создал систему по перехвату и дешифровке GPRS-трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/126144/" target="_blank">Современные биометрические методы идентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125989/" target="_blank">Хранение паролей без их сохранения (развитие темы)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125927/" target="_blank">На Defcon представлена Android-программа для проверки надежности защиты компьютерных сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125826/" target="_blank">Несколько крупных Интернет-провайдеров США зарабатывали на поисковых запросах клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125825/" target="_blank">Группа AntiSec осуществила успешный взлом сетей правоохранительных органов США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125821/" target="_blank">Bit-squatting – посмеялись и забыли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125790/" target="_blank">Как пожаловаться МТС на мобильный спам и вирусы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125744/" target="_blank">Bit-squatting – свежая угроза для владельцев популярных доменов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125727/" target="_blank">Ликбез по уязвимостям в веб-приложениях, а также самые частые ошибки разработчиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125723/" target="_blank">Пособие по выживанию на конференциях Black Hat и Defcon: как спастись от хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125681/" target="_blank">Как работает WebsiteDefender</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/125534/" target="_blank">Уязвимость в Wordpress темах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125486/" target="_blank">Использование TrueCrypt c ключевым файлом на рутокен носителе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125473/" target="_blank">В октябре начнется добровольная сертификация интернет-магазинов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125338/" target="_blank">Аудит. «Черный ящик»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125258/" target="_blank">Наш аудитор безопасности — идиот</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125349/" target="_blank">И все таки оно взламывается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125316/" target="_blank">Facebook будет платить за найденные баги по $500</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125206/" target="_blank">Обзор бесплатных инструментов для аудита web-ресурсов и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125288/" target="_blank">Интересное мошенничество, или Как выйти сухим из воды</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125279/" target="_blank">Google сохраняет в кэше ссылки на «удаленные» и скрытые фото пользователей ВКонтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125248/" target="_blank">Популярные менеджеры паролей в сравнении</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125222/" target="_blank">Безопасное хранение паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124866/" target="_blank">Спасение «битого» переносного винчестера с TrueCrypt-контейнером</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125065/" target="_blank">BlackBerry PlayBook стал первым планшетом сертифицированным для правительства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125056/" target="_blank">Управление приватностью: советы от команды Яндекс.Поиска</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125019/" target="_blank">Медиапираты XXI века</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125022/" target="_blank">Утечки и законы. Кто виноват?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/125013/" target="_blank">Утечка конфиденциальных данных глазами 96%</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124996/" target="_blank">Google проиндексировал gov.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124956/" target="_blank">Яндекс – (действительно) найдется все!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124928/" target="_blank">Эксперты по сетевой безопасности обнаружили, что firmware аккумуляторов Macbook уязвимо для взлома</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124898/" target="_blank">Яндекс продолжает выдавать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124571/" target="_blank">Онлайн генератор паролей с энтропией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124810/" target="_blank">Социальная сеть AnonPlus от Anonymous взломана</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124671/" target="_blank">Анонимность в Сети: есть ли, будет ли. А нужна ли?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124658/" target="_blank">Сетевой поединок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124603/" target="_blank">Взломали API Банка Приват24</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124601/" target="_blank">Новый тип «насадки на банкомат»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124570/" target="_blank">Google помогает бороться с вирусами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124537/" target="_blank">Небезопасный ВКонтакте или собираем миллионый ботнет?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124538/" target="_blank">Яндекс.Бар – Большой брат следит за тобой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124528/" target="_blank">Уязвимость Google позволяла удалить любой сайт из поискового индекса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124493/" target="_blank">Truecrypt собирает $150,000, но зачем?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124456/" target="_blank">Данные об операциях из Приват24 попали в сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124450/" target="_blank">Вброс троянов под видом инвойса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124432/" target="_blank">Яндекс проиндексировал приватные фотоальбомы streamphoto.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124422/" target="_blank">LulzSec взломали сервера издания The Sun</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124387/" target="_blank">FAQ по утечке текстов SMS с сайта «Мегафона»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124380/" target="_blank">Защита персональных данных — опыт внедрения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124356/" target="_blank">Hotmail обновил систему безопасности сервиса, запретив пользователям выбирать простые пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124090/" target="_blank">Опасность использования «учебных» криптопротоколов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124080/" target="_blank">Защита от несанкционированного копирования приложений Blackberry PlayBook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124054/" target="_blank">Epic Fail от IDA и Eset</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/124002/" target="_blank">Как НЕ нужно делать тест CAPTCHA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123947/" target="_blank">Защита персональных данных — как быть и что делать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123908/" target="_blank">Асимметричная криптография при лицензировании подписочного ПО на практическом примере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123600/" target="_blank">Нигерийские мошенники на Molotok.ru. Одна из схем мошенничества</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/303042/" target="_blank">Опасайтесь онлайн-счетов с шифровальщиком: недавно обнаруженная угроза уже проявилась в разных странах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/303004/" target="_blank">Хакер продает базу данных с 32 миллионами учетных записей Twitter</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/302838/" target="_blank">Лаборатория тестирования на проникновение v.9: нет ничего невозможного</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/302874/" target="_blank">Facebook Messenger был уязвим к атаке, требующей базовые знания HTML</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virgilsecurity/blog/302608/" target="_blank">Создаем безопасный IP мессенджер с помощью Virgil и Twilio за 30 минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302836/" target="_blank">Очередное крупное мошенничество с использованием платежных карт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/302832/" target="_blank">Lazarus: Кто стоит за атаками на систему банковских переводов SWIFT</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302068/" target="_blank">Обзор вариантов организации доступа к сервисам корпоративной сети из Интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/282319/" target="_blank">OAuth-авторизация в Mozilla Thunderbird: от зарождения до релиза</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302660/" target="_blank">Asus автоматически обновляет BIOS/UEFI по HTTP без верификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123936/" target="_blank">Сохраняем безопасно свои данные: p2p файловая система с шифрованием в облаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123923/" target="_blank">Новые виды атак на основе технологии кликджекинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123900/" target="_blank">Поддельные приглашения на Google+ используют для кражи банковской информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122971/" target="_blank">Мониторинг активности пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123843/" target="_blank">Verified by Visa или бесполезная верификация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123808/" target="_blank">Злоумышленники получили доступ к данным пользователей Washington Post</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123744/" target="_blank">Фишинг с использованием ситуации в Туркменистане</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123725/" target="_blank">Виртуальная машина KLEE для символьного выполнения кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123711/" target="_blank">Skype + ФСБ = ♥</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123661/" target="_blank">Google коварен!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123604/" target="_blank">Morgan Stanley разослал 34000 клиентам предупреждение об утере их данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123567/" target="_blank">Что не скрывает LastPass?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123593/" target="_blank">Использование сайтов типа Pastebin для сбора информации о цели пентеста</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123474/" target="_blank">SNORT как сервисная IPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123462/" target="_blank">Специалисты компании Dr.Web не рекомендуют посещать Google AdSense</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123372/" target="_blank">Аутентификация на базе ЭЦП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123428/" target="_blank">Identity Management — основы управления учетными записями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123425/" target="_blank">Anonymous запустили HackerLeaks.tk для слива информации о взломах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123414/" target="_blank">Проверка рассыльщиков смс-спама с помощью заявления в прокуратуру</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123315/" target="_blank">Один ботнет чтоб править всеми — Alureon (TDL-4)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123268/" target="_blank">Об имени, «Google me», и проблемe сохранения хорошей Google-репутации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123244/" target="_blank">Троян, использующий вычислительные мощности ПК для генерации Bitcoin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123164/" target="_blank">Наибольшая угроза — сотрудники компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123114/" target="_blank">Как зашифровать Ваши файлы и улучшить безопасность Dropbox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123030/" target="_blank">Как Symantec взломала Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/123007/" target="_blank">Использование Pastebin для хранения украденных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122927/" target="_blank">Генерация одноразовых паролей при помощи смартфона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122956/" target="_blank">Массовый аудит паролей «одной кнопкой»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122935/" target="_blank">Как сеть bitcoin будет уничтожена (практические советы с примерами)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122915/" target="_blank">Индийский Groupon выложил базу с паролями 200 000 пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122839/" target="_blank">Игра «Terraria» и её «хорошая» система шифрования профайлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122737/" target="_blank">Взломаны сервера Electronic Arts</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122711/" target="_blank">Ликбез по псевдослучайным генераторам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122703/" target="_blank">Пользователь TrueCrypt арестован по причине отказа предоставить ключ шифрования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122623/" target="_blank">Об алгоритме взлома WPA-PSK</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122661/" target="_blank">ФБР по ошибке украло сервер Instapaper</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122633/" target="_blank">Практические рекомендации по выбору паролей по результатам взлома antichat.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122553/" target="_blank">Подбор паролей к WPA/WPA2 с использованием видеокарты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122304/" target="_blank">Как избежать инъекций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122545/" target="_blank">Поговаривают, что блог Навального блокирован фальшивыми записями DNS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122497/" target="_blank">«Доктор Веб» обнаружил еще один бэкдор под Mac: BackDoor.Olyx</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122473/" target="_blank">Популярные пароли от аккаунтов Antichat.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122460/" target="_blank">Белтелеком на время «революции из социальной сети» блокирует Вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122448/" target="_blank">США будут применять кибератаки в военных целях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122423/" target="_blank">Неизвестные злоумышленники загрузили скомпрометированные Wordpress-плагины в репозитарий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122287/" target="_blank">Ещё одна проблема с безопасностью в Dropbox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122282/" target="_blank">В технологии квантовой криптографии обнаружили слабое место</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122267/" target="_blank">Базы данных с приватной информацией в легальной продаже</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122126/" target="_blank">Microsoft называет графическую технологию, используемую в Firefox и Chrome, опасной</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122181/" target="_blank">Microsoft заявила об успехах в борьбе с autorun-вирусами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122132/" target="_blank">Есть ли серебрянная пуля анализа уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122153/" target="_blank">Анализ реальных паролей пользователей и улучшенный полный перебор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122129/" target="_blank">Распределение символов в паролях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122119/" target="_blank">Взломаны сервера сервиса SEGA Pass</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122044/" target="_blank">У одного из пользователей системы Bitcoin украли 25 тысяч «коинов» (примерно 300 тыс. долларов США)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/122037/" target="_blank">Прячем 1С за огнеупорную стену</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121961/" target="_blank">Группа LulzSec атаковала сайт ЦРУ и Сената США. Неделя Lulz Security на Хабре продолжается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121923/" target="_blank">LulzSec «положили» несколько известных игровых серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121894/" target="_blank">Самые популярные пасскоды на смартфонах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121866/" target="_blank">Про день ЗПДн или как работать с персональными данными в белую — 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121845/" target="_blank">Серверы EVE Online, Minecraft'а и журнала The Escapist были атакованы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120990/" target="_blank">Web-аутентификация с помощью USB-токенов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121270/" target="_blank">Хакерская группа Lulz Security добралась до сайтов Bethesda Softworks и Сената США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121241/" target="_blank">Халатность хостера привела к обнародованию базы сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121229/" target="_blank">Автомобиль Nissan Leaf отдаёт свои координаты любому RSS-провайдеру</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121210/" target="_blank">Анонимные сети и timing атаки: принципы построения безопасных систем (заключение)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121209/" target="_blank">Анонимные сети и timing атаки: малозатратная атака на Tarzan и Morphmix</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121134/" target="_blank">Новый троян для Android распространяется с приложением Angry Birds Rio Unlock</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121091/" target="_blank">Обращение Anonymous к блоку НАТО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121078/" target="_blank">Анонимные сети и timing атаки: Малозатратная атака</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121034/" target="_blank">Уведомление о несанкционированном доступе к веб-приложению</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121021/" target="_blank">SRP-6: аутентификация без передачи пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/121010/" target="_blank">Как работает reCAPTCHA?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120986/" target="_blank">Парень из техподдержки устанавливал на ПК клиенток ПО, чтобы втихушку их фотографировать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120751/" target="_blank">Практика защиты персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120918/" target="_blank">Немного о паранойе и фотографиях ВКонтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120876/" target="_blank">Передача пароля по открытому каналу (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120851/" target="_blank">В поисках идеальной CAPTCHA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120787/" target="_blank">RSA бесплатно заменит токены SecurID всем корпоративным клиентам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120663/" target="_blank">Вести с фронта Sony: взломаны еще два сайта корпорации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120644/" target="_blank">Онлайн хранение документов — как быть спокойным за свои данные?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120627/" target="_blank">Сервер Nintendo в США был скомпрометирован, но данные пользователей не пострадали</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120523/" target="_blank">Сайт Sony Pictures взломан, украдены данные 1 миллиона аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120452/" target="_blank">Китайские хакеры уводили пароли пользователей Gmail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120380/" target="_blank">Защита пароля при передаче по открытому каналу (часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120355/" target="_blank">Владелец украденного ноутбука вернул его благодаря установленной на устройстве программе слежения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120351/" target="_blank">Про день ЗПДн или как работать с персональными данными в белую — 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120342/" target="_blank">Эпоха антивирусов на Mac OS X пришла официально</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120265/" target="_blank">Уязвимость в reCaptcha позволяет активировать до 30 действий по одному и тому же токену</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120254/" target="_blank">Microsoft не считает кукиджекинг серьёзной угрозой</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120233/" target="_blank">Красивый пример фишинга во «В Контакте»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120117/" target="_blank">Про день ЗПДн или как работать с персональными данными в белую — 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119780/" target="_blank">Небольшой обзор исходного кода трояна zeus</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/120038/" target="_blank">Взломан сайт DirectAdmin и клиентская база данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119951/" target="_blank">Хакеры украли письма с Hotmail благодаря ошибке на сайте Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119921/" target="_blank">Рейд по тылам: атака на Sony Ericsson</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119843/" target="_blank">Очередная атака на Sony</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119838/" target="_blank">14-летний пойманный «хакер» теперь работает на Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119808/" target="_blank">Opera крутит баннеры собственных подделок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119796/" target="_blank">Плагин под Firefox, который скачали около 7 миллионов раз, шпионил за пользователями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/302644/" target="_blank">Взлом вконтакте: украдены данные 171 миллиона пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302562/" target="_blank">Как настроить двухфакторную аутентификацию для логина и sudo</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/302548/" target="_blank">Security Week 22: Microsoft против паролей, судебные неувязки с Tor, криптолокер атакует клиентов Amazon</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/302524/" target="_blank">Укол на миллиард долларов: худшие кошмары банков</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/302490/" target="_blank">PHD VI: как у нас угнали дрона</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/302418/" target="_blank">Аккаунты пользователей Teamviewer взломаны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/282782/" target="_blank">О нетрадиционном способе использования компьютерной мыши</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cleantalk/blog/301424/" target="_blank">SpamFireWall — запрет доступа к сайту для спам ботов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/302328/" target="_blank">XSS уязвимость по-прежнему сохраняется для WordPress</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/302292/" target="_blank">Боремся с дистанционным контролем: как отключить Intel ME</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119672/" target="_blank">Истёкшие домены — дыра в безопасности Google Apps</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119602/" target="_blank">Mac Defender. Угроза для пользователей Apple</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119545/" target="_blank">Чёрная полоса Sony продолжается, новая вспышка взломов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119357/" target="_blank">В США ужесточат наказание для хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119348/" target="_blank">Dropbox врал пользователям о защите данных, подана жалоба в FTC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119314/" target="_blank">Sony PlayStation Network поэтапно вводят в строй</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119301/" target="_blank">Поиск файлов phpinfo.php, часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119280/" target="_blank">Спам — как средство передачи шифровок?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119250/" target="_blank">Metasploit нацелился на Apple iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119155/" target="_blank">Студента могут посадить на 30 лет за публикацию поддельных скидочных купонов на 4chan и Zoklet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119066/" target="_blank">Эксперты Symantec обнаружили и помогли исправить серьезную ошибку в системе защиты персональных данных пользователей Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/119008/" target="_blank">Оффлайновый способ хранить пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118988/" target="_blank">Устройство GPS-жучка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118944/" target="_blank">Для восстановления работы онлайн-сервисов Sony требуется больше времени</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118886/" target="_blank">LastPass: «Xmarks не пострадал»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118879/" target="_blank">0day уязвимость в версии Skype для Mac OS X</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100361/" target="_blank">Есть ли рубильник, или как выключить Интернет?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118844/" target="_blank">Анонимности нет, смиритесь! (русские субтитры)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118755/" target="_blank">Делаем шифрование в Dropbox Mac (совместимо с Linux)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118803/" target="_blank">Серверы Sony работали на устаревшей версии Apache</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118788/" target="_blank">Возможно, был взломан LastPass</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118699/" target="_blank">Sony отключает сервис Sony Online Entertainment</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118572/" target="_blank">Новые подробности о взломе серверов Sony</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118519/" target="_blank">Защита онлайн проекта от «выноса»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118508/" target="_blank">Sony обещает пошаговое восстановление работы PSN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118499/" target="_blank">Простой и надежный пароль – коллективное творчество</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118483/" target="_blank">Теория о сокрытии процессов руткитами (DKOM)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118391/" target="_blank">ICANN взял на работу Джеффа Мосса, организатора конференций Black Hat и Defcon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118386/" target="_blank">Эксперты из компании CA обнаружили фальшивый «Антивирус Касперского» для мобильных устройств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118289/" target="_blank">Sony опубликовала Q&A по взлому 17-19 апреля для пользователей сервисов PlayStation Network и Qriocity</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117986/" target="_blank">Про день ЗПДн или как работать с персональными данными в белую</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118248/" target="_blank">Apple опубликовала официальную позицию по файлу Consolidated.db</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118220/" target="_blank">DropBox предоставит расшифрованные копии ваших файлов правительству по запросу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118195/" target="_blank">Sony призналась, что личные данные пользователей PlayStation Network были украдены</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118140/" target="_blank">PlayStation Network не работает из-за атаки хакеров?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118017/" target="_blank">Расследование CNET показало, какую информацию телефоны на Android отсылают в Google, и почему она не может считаться анонимной</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/118005/" target="_blank">Телефон Android тоже следит…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117967/" target="_blank">Эффективно уничтожаем информацию на жестком диске</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117891/" target="_blank">Хакеры взломали один из серверов Ashampoo</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117862/" target="_blank">Твой айфон следит за тобой, %username%</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117820/" target="_blank">ESA не считает недавний взлом своей сети критичным</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117777/" target="_blank">Высоковольтное стирание компакт-диска (видео)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117218/" target="_blank">Misuse Cases</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117586/" target="_blank">Анонимные сети и timing атаки: Tarzan и MorphMix</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117539/" target="_blank">Toshiba выпускает жесткие диски со встроенной системой уничтожения данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117465/" target="_blank">Dropbox уязвим изначально?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117409/" target="_blank">Размышления о государственной сертификации антивирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117280/" target="_blank">Проблема с антивирусом Avast!.. «Вирус» html: script-inf</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117151/" target="_blank">Теперь вас смогут отследить с точностью до 690 метров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117132/" target="_blank">Оценка стойкости пароля от Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117127/" target="_blank">Франция запретила хранить пароли в хешированном виде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117091/" target="_blank">В Chrome появится система обнаружения зловредного ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117047/" target="_blank">Есть ли у вас устройства со встроенным сканером отпечатков пальцев?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/117005/" target="_blank">Список сайтов, которые хранят пароли открытым текстом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116889/" target="_blank">[Перевод] Кража данных из-за новейших возможностей Windows и Mac OS X</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116603/" target="_blank">Методы распознавания отпечатков пальцев и реализация средствами Python</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116854/" target="_blank">Anonymous решили наказать Sony за Geohot</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116823/" target="_blank">А может и правда web 2.0 подразумевает открытость, или хотя бы web 3.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116761/" target="_blank">Шифруем файлы в черно-белых изображениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116738/" target="_blank">Скрипт LizaMoon найден уже на 500 тысячах сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116730/" target="_blank">Теория анонимности в современной сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116572/" target="_blank">31 марта — международный день бэкапа!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116563/" target="_blank">Массовое SQL-внедрение скрипта LizaMoon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116526/" target="_blank">На ноутбуках Samsung обнаружен кейлоггер, вероятно установленный производителем [не подтвердилось]</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116513/" target="_blank">«Живой журнал» подвергся DDoS-атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116483/" target="_blank">Про криптостойкость паролей и отношение к ней некоторых крупных российских интернет-сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116477/" target="_blank">DDoS-атаки внесут в Уголовный кодекс (статьи 272–274)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116425/" target="_blank">Алгоритм оценки стойкости пароля от Microsoft (Часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116331/" target="_blank">Алгоритм оценки стойкости пароля от Microsoft (Часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116390/" target="_blank">Основные услуги и тарифы на рынке киберпреступности в странах СНГ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116388/" target="_blank">Решение вопроса с паролями — раз и навсегда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116214/" target="_blank">SSH-туннель домой без необходимости оставлять включённым домашний ПК</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116132/" target="_blank">Loginza — простота хуже воровства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116093/" target="_blank">Сервера Еврокомиссии подверглись атаке хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116084/" target="_blank">Поддельные сертификаты для популярных сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/116056/" target="_blank">Атака на отказ в обслуживании методом slow HTTP POST</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115937/" target="_blank">Рейтинг обнаружения антивирусными продуктами «свежего» вредоносного кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115914/" target="_blank">Файлы сайта-открытки ВТБ в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115864/" target="_blank">Microsoft поборол ботнет Rustock</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115749/" target="_blank">Цифровая подпись и электронные закупки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115601/" target="_blank">Взлом автомобильного компьютера с помощью MP3-файла</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115384/" target="_blank">Флеш-память: проблемы для компьютерной криминалистики</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115415/" target="_blank">Что такое безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115349/" target="_blank">Стереть нельзя восстановить</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115309/" target="_blank">Второй день Pwn2own: Firefox, Android, BlackBerry, iPhone, Windows Phone 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115307/" target="_blank">DDoS, когда его совсем не ждут</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115298/" target="_blank">GoDaddy угрожает закрыть домен rospil.info из-за спамеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115275/" target="_blank">В России могут ужесточить наказание для кардеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115267/" target="_blank">Создана новая эффективная технология идентификации авторов анонимной электронной почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115261/" target="_blank">Apple потерял более 2,3 млн. долларов из-за утечки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115249/" target="_blank">На соревновании Pwn2own взломаны Safari и IE, браузер Chrome устоял</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115148/" target="_blank">Чем опасны дешёвые GPS-глушилки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115141/" target="_blank">Шпион в кармане. Каким образом ваши мобильники могут выдать ваши же географические координаты?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115099/" target="_blank">Безопасность в Интернете для детей (продолжение)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/115061/" target="_blank">WordPress.com подвергся мощнейшей DDoS-атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114974/" target="_blank">Анонимные сети и timing атаки: Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114928/" target="_blank">Почему бы не выводить простое предупреждение?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114907/" target="_blank">В Великобитании посадили создателей форума Gh0stMarket</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114875/" target="_blank">Стеганография. Практическая реализация сокрытия данных в формате BMP с использованием .net</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114597/" target="_blank">Стеганография</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302276/" target="_blank">Вирус, живущий исключительно в ПЛК</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302260/" target="_blank">«Атака на топливный склад» или ломаем SCADA систему на PHDays VI</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/236531/" target="_blank">Что такое «Dark web»?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virgilsecurity/blog/301772/" target="_blank">Как перестать бояться и полюбить end-to-end шифрование</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/302194/" target="_blank">Умный транспорт: Новые вызовы информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302168/" target="_blank">Pivoting или проброс портов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302022/" target="_blank">Куда движется современная биометрия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/302060/" target="_blank">Завершился IT & Security Forum 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/301932/" target="_blank">Security Week 21: отказ от паролей, жизнь древних уязвимостей, вирус в сетевом оборудовании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301832/" target="_blank">Исследование защищенности карты Тройка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114600/" target="_blank">Backdoor в Active Directory</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114558/" target="_blank">Взгляд на аудит сквозь призму стандарта PCI DSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114520/" target="_blank">Anonymous взломали сайт в прямом эфире радиошоу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114486/" target="_blank">Осторожно, собеседование!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114453/" target="_blank">Белорусу грозит 38 лет тюрьмы за создание CallService.biz</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114381/" target="_blank">Эпидемия «белых котов» в жж (lj embedded и социальная инженерия)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114274/" target="_blank">Безопасность в Интернете для детей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114150/" target="_blank">Хранение и шифрование паролей Microsoft Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/114008/" target="_blank">Детективная история в стиле Java/JS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113977/" target="_blank">Как воруют данные с банкомата</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113954/" target="_blank">Sony угрожает отключать навсегда геймеров от PlayStation Network за взлом PS3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113873/" target="_blank">Среди почтовых вложений компании HBGary был декомпилированный код Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113836/" target="_blank">«Атака на банк-клиент...». Взгляд со стороны работника банка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113787/" target="_blank">Кому я нужен?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113777/" target="_blank">Нужны эксперты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113749/" target="_blank">Атака на банк-клиент или Охота на миллион</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113748/" target="_blank">Как остановить распространение вредоносного ПО в интернете?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113646/" target="_blank">Sony получила разрешение изучить информацию на жестком диске с ПК хакера GeoHot</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113618/" target="_blank">В Сеть полностью утёк Crysis 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113454/" target="_blank">Microsoft наконец-то избавляется от Autorun</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113401/" target="_blank">Пользователи применяют ненадёжные пароли? Неофициальная статистика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113296/" target="_blank">Anonymous атакуют Аарона Барра, который их разоблачил</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113240/" target="_blank">Лидеров Anonymous вскоре могут арестовать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113127/" target="_blank">Забавляемся с хешами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113112/" target="_blank">Pwn2Own 2011</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113091/" target="_blank">Trojan.winlock начал распространяться через ЖЖ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/113017/" target="_blank">Небольшое исследование sms спама</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112993/" target="_blank">DDoS-атаки превысили 100 Гбит/с</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112860/" target="_blank">Анонимные сети и timing атаки: Введение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112801/" target="_blank">Windows можно взломать через MHTML-файл</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112782/" target="_blank">Облава на Anonymous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112755/" target="_blank">О том, как у меня украли домен, а я украл его обратно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112682/" target="_blank">Upgrade</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112680/" target="_blank">Британские полицейские отлавливают анонимусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112646/" target="_blank">Google включил цензуру и начал фильтровать BitTorrent, RapidShare и другие сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112496/" target="_blank">Границы приватности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112449/" target="_blank">Определение местоположения отключенного телефона: миф?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112374/" target="_blank">«Пассивные» электронные ключи для авто — не очень серьезная защита</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112297/" target="_blank">Китайцы создали вирус, блокирующий связь клиентских ПК с облачными антивирусами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112289/" target="_blank">Цифровые подписи в исполняемых файлах и обход этой защиты во вредоносных программах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112273/" target="_blank">Концепт трояна, распознающего голос и тоновые сигналы со смартфона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112244/" target="_blank">Android-смартфон превратили в поддельную USB-клавиатуру</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112237/" target="_blank">Дыра на free-lance.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112173/" target="_blank">Принудительная смена паролей на сайте, или забота о моей безопасности. Или free-lance.ru сломали?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/112088/" target="_blank">rospil.info и ruleaks.net подверглись DOS-атаке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111758/" target="_blank">История одного взлома и результат работы отдела «К»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111759/" target="_blank">Взлом аккаунтов оппозиции на Facebook, Gmail и Yahoo</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111714/" target="_blank">Войны в песочнице — Часть 2. Обход HTTPS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111631/" target="_blank">В США собираются разработать систему интернет-паспортов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111617/" target="_blank">Фильтрация контента на потоке программно-аппаратным комплексом eSafe</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111409/" target="_blank">Самостоятельная подготовка ИСПДн к аттестации (часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111512/" target="_blank">Угрозы Inside: инициализируем каналы утечки корпоративной информации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111489/" target="_blank">Войны в песочнице — Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111488/" target="_blank">Хакер продемонстрировал «облачный» софт для взлома WiFi-сетей на конференции Black Hat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111073/" target="_blank">Пользователи Hotmail встретили Новый год с пустым ящиком</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111049/" target="_blank">Лайфстрим сервис chi.mp (бесплатный домен 2-ого уровня, блог) не фильтрует javascript</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111042/" target="_blank">Продолжая тему прослушки GSM</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/111008/" target="_blank">UNIX-программиста Fannie Mae посадили на 41 месяц за установку логической бомбы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110996/" target="_blank">Компания ChronoPay вернула себе угнанный домен chronopay.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110876/" target="_blank">SEO-спам в Рейтинге@Mail.ru?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110871/" target="_blank">Эксперты McAfee выделили главные цели хакеров в 2011 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81283/" target="_blank">Покупка Plus аккаунта на vimeo.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110815/" target="_blank">Американца могут посадить за чтение электронной почты жены</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110761/" target="_blank">Современные «письма счастья» или «Менеджеры верят в ангелов»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110754/" target="_blank">Как хакер издевался над преступником, своровавшим его ПК</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110742/" target="_blank">У президента США хотят забрать право отключения компьютерных систем и серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110680/" target="_blank">Как перевести пожертвования движению за Wikileaks через российский банк</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110590/" target="_blank">Ошибка в рекурсивной обработке CSS в IE 6/7/8 (CVE-2010-3971)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110508/" target="_blank">Небольшое исследование самозащиты продуктов Dr.Web</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110536/" target="_blank">Маршрутизатор со встроенным анонимайзером Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110534/" target="_blank">Одобрена сделка по поглощению компании McAfee корпорацией Intel</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110524/" target="_blank">МТС, настройки по умолчанию как средство извлечения дополнительной прибыли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110447/" target="_blank">Apple удалил WikiLeaks App из App Store</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110387/" target="_blank">Перехват cookie в реальном времени в открытых WiFi-сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110339/" target="_blank">Бумажные спамеры освоили базы данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110290/" target="_blank">Firefox получит кнопку «не отслеживать» для тех, кому нужна анонимность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110235/" target="_blank">В Google Earth локализованы сервера Wikileaks</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110032/" target="_blank">MS закрыла вчера 17 уязвимостей, в числе которых DLL Preloading/Hijacking и последняя незакрытая уязвимость из червя Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110050/" target="_blank">Шифрование данных в БД ORACLE по ГОСТ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/110015/" target="_blank">Anonymous начали атаку на факс-аппараты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109985/" target="_blank">Спамеры украли базу данных адресов пользователей портала deviantart.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109974/" target="_blank">Анализ проникновения бота через эксплоит в старых версиях phpmyadmin и рекомендации по настройкам безопасности php-хостинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109942/" target="_blank">JS LOIC: атака в один клик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109932/" target="_blank">Тотальный взлом Gawker Media: украдено 1.5 млн аккаунтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109888/" target="_blank">Исследование голландцев показывает, что анонимусы не так уж и анонимны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109840/" target="_blank">Хакеры запустили завирусованные рекламные кампании в рекламных сетях Google и Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109644/" target="_blank">NASA продолжает продавать б/у компьютеры с засекреченными данными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109559/" target="_blank">В Twitter появился очередной опасный вирус</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109427/" target="_blank">Ленинградская АЭС изнутри</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109243/" target="_blank">Безопасность личности в информационном обществе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109174/" target="_blank">Вконтакте и Федеральный Закон 152</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/109104/" target="_blank">С Международным днем защиты информации!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108903/" target="_blank">Новая уязвимость позволяет повысить привилегии в Win7/Vista в обход UAC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108900/" target="_blank">0day уязвимость в современных ОС от Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108894/" target="_blank">Обнаружена премиум-версия червя Zeus</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108701/" target="_blank">Война в киберэпоху: концепция геоцентрического ТВД</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108681/" target="_blank">Agnitum выпускает Outpost Security Suite Free</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108649/" target="_blank">«Берлин»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108553/" target="_blank">Социальная инженерия в Facebook и не только. Разбор новой «уязвимости»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108509/" target="_blank">Генератор надежных и запоминаемых паролей на Javascript</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/318070/" target="_blank">Враг внутри: приглашаем хакеров и докладчиков на PHDays VII</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318060/" target="_blank">Компания Google представила набор тестов Wycheproof</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/318050/" target="_blank">Уязвимость в системе мониторинга Nagios позволяет осуществлять повышение привилегий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318054/" target="_blank">Прототип RFC HTTP-кодов состояния для ошибок разработчиков (диапазон 7XX)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/318010/" target="_blank">Здравствуй, дорогой Мегафон</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316912/" target="_blank">Как Skype уязвимости чинил</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317822/" target="_blank">VulnHub Разбор HackDay: Albania</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/317794/" target="_blank">Security Week 50: социализация криптолокеров, аудит OpenVPN, уязвимость в ядре Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317780/" target="_blank">Взлом без взлома или семь способов найти утечку информации ресурса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317346/" target="_blank">VulnHub Решение простого 64Base: Boot2Root</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301816/" target="_blank">Так ли безопасны «топовые» сайты: исследуем рейтинг Alexa</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/rootwelt/blog/301826/" target="_blank">Dropbox объяснил, почему внедряется в ядро операционной системы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/283404/" target="_blank">IaaS-дайджест: 30 материалов по теме облачной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/301574/" target="_blank">Корпоративные лаборатории — лучшие практики информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/301642/" target="_blank">Конкурс WAF Bypass на Positive Hack Days VI</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cleantalk/blog/301498/" target="_blank">Какие CMS спамят чаще?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/283402/" target="_blank">Как защитить облачную инфраструктуру</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/301510/" target="_blank">PHDays VI: хакеры не смогли взять город целиком</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itpark/blog/301464/" target="_blank">Simply AWeSome – коротко об Amazon Web Services</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/301354/" target="_blank">Немного о трендах в сфере «облачной» безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108493/" target="_blank">Хранение личных данных на примере сайта ГИБДД Челябинской области</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108464/" target="_blank">ИБ на Новосибирском Заводе ХимКонцентратов (производство ядерного топлива)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108293/" target="_blank">Google Chrome — самая «дырявая» программа?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108281/" target="_blank">HSTS будет внедрён в Firefox и Google Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108251/" target="_blank">Анонимусов с 4Chan победили их же оружием</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108152/" target="_blank">phpinfo.php: невероятно, но факт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108207/" target="_blank">Эксперты обнаружили очередную модификацию Stuxnet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108117/" target="_blank">Вирус заразил более миллиона смартфонов в Китае</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108101/" target="_blank">Англичане нашли управляющие сервера ботнета Koobface</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108035/" target="_blank">За вами следят со школьной скамьи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/108019/" target="_blank">Запущен сайт VERIS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107977/" target="_blank">В США начинают расследование по поводу сбора данных корпорацией Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107785/" target="_blank">Свойства документа Microsoft Word выдают авторов мебельного тендера МЧС, в котором один из столов помечен почти двухмиллионной суммою</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107736/" target="_blank">Проверка каптчи на сайте ФМС</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107648/" target="_blank">У Wikileaks появляются последователи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107631/" target="_blank">Бесплатный VPN от Amazon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107630/" target="_blank">Руководитель Wikileaks собирается жить и работать в Швейцарии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107628/" target="_blank">Trend Micro подняла скандал в связи с предоставлением MS Security Essentials через Windows Update</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107590/" target="_blank">В Европе хотят большего контроля над личной информацией в Сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107576/" target="_blank">Персональные данные (Краткий FAQ)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107467/" target="_blank">Удостоверяющий центр на основе OpenSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107541/" target="_blank">У Google снова проблемы с законами о персональных данных и европейскими законодателями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107504/" target="_blank">events.webmoney.ru — раскрытие приватных данных!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107450/" target="_blank">Хостинг по требованиям 152-ФЗ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107442/" target="_blank">Google начинает платить за найденные дыры во всех веб-продуктах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107396/" target="_blank">Запрещаем использование известных UserJS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107243/" target="_blank">Подбор 14 символьного сложного пароля за 5 секунд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107197/" target="_blank">Мой опыт использования платных VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107140/" target="_blank">В продуктах Adobe снова уязвимости. Под ударом Flash, Reader/Acrobat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107083/" target="_blank">Опубликован отчет McAfee: самые опасные доменные зоны в мире</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107061/" target="_blank">Несанкционерованный доступ к эккаунтам Facebook и Twitter через открытые WiFi сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107059/" target="_blank">Microsoft Security Essentials — теперь через Windows Update</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/107039/" target="_blank">Re: История одного переписчика. России важен каждый</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106920/" target="_blank">Защита Win32 и .NET приложений: обзор протектора Themida (X-Protector)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106807/" target="_blank">Любовь Google Maps к российским стратегическим объектам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106785/" target="_blank">Google обновил внутреннюю политику безопасности компании по работе с частной информацией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106777/" target="_blank">Придумываем сложные и легко запоминаемые пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106769/" target="_blank">Личные данные участников конференций в полной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106752/" target="_blank">Анонимное сканирование портов при помощи hping3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106737/" target="_blank">Google признался в случайном сборе паролей, логинов, e-mail некоторых интернет-пользователей во время работы авто Street View</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106536/" target="_blank">Подмена со вкусом Mail.Ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106401/" target="_blank">Microsoft удалила 281&nbsp;491 троян Zeus за пять дней</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106357/" target="_blank">Платные курсы для интернет-мошенников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106276/" target="_blank">Google ввел новую функцию по борьбе с интернет-мошенниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106113/" target="_blank">Система Uniflow 5 от Canon блокирует копировально-множительные операции по содержащимся в документе ключевым словам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/106061/" target="_blank">Осторожно — несанкционированный трафик!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105964/" target="_blank">Stuxnet: война 2.0</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105966/" target="_blank">В Индии разрабатывается собственная операционная система</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105894/" target="_blank">Уязвимость в стандартной функции glob() как угроза для FTP-серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105849/" target="_blank">Новый троян ворует пароли пользователей браузера Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105804/" target="_blank">49 уязвимостей за месяц: новый рекорд Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105777/" target="_blank">Как правильно отключить среду исполнения Java в Opera for Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105708/" target="_blank">Публикация найденных уязвимостей: за и против</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105668/" target="_blank">В России взломали клиентскую подсистему Blackberry</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105581/" target="_blank">Антивирусные песочницы. Введение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105534/" target="_blank">Инциденты информационной безопасности АСУ ТП зарубежных государств</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105375/" target="_blank">Современные АСУ ТП</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105506/" target="_blank">Порно-студии собираются судиться с «пиратами»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105258/" target="_blank">Pimp my surf, или Отсутенёрь свой сёрфинг</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105316/" target="_blank">Stuxnet поразил более 1000 предприятий Китая</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105120/" target="_blank">Выпущено исправление уязвимости связанное с приложениями ASP.NET</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105064/" target="_blank">Что же произошло на Вирусинфо и что будет дальше?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/105004/" target="_blank">Подслушиваем в AD</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104995/" target="_blank">Предупреждаю пользователей сборки Zver и ПО Radmin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104973/" target="_blank">Stuxnet таки добрался до иранского ядерного завода в Бушехре</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104771/" target="_blank">Криптоанализ шифра Виженера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104820/" target="_blank">Microsoft Security Essentials теперь доступен для малого бизнеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104794/" target="_blank">Червь Stuxnet создан для саботажа на ядерных предприятиях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104775/" target="_blank">Стоимость кредиток упала до $1,50 за штуку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104675/" target="_blank">Карта мира как генератор надёжных паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104668/" target="_blank">Ложь, большая ложь и антивирусы. Часть четвёртая. «Ересь вселенская»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104665/" target="_blank">Активная XSS на Twitter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104664/" target="_blank">XSS: Rainbow Twitter Released!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104601/" target="_blank">Защита от DDOS атаки случайными аргументами при помощи Nginx</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104536/" target="_blank">GRUB: Получаем полный доступ к системе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104511/" target="_blank">Важно: Уязвимость безопасности ASP.NET</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104510/" target="_blank">Троян Kenzero отслеживает любителей «клубнички»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104484/" target="_blank">Panda Security назвала Facebook и Twitter проблемой малого бизнеса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104423/" target="_blank">Intel подтвердила, что взломанный master-key для HDCP является настоящим</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104333/" target="_blank">Удаление цифровой подписи PE-файла</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104206/" target="_blank">Уязвимость эмулятора в антивирусе Касперского</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104205/" target="_blank">Вконтакте и Мастер Банк преподнесли мошенникам на блюдечке великолепную уязвимость, связанную с оплатой банковскими картами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104202/" target="_blank">Комментарии к статье CNews «Дыры в Mail.RU закрывают шантажом»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104190/" target="_blank">В Mail.ru никак не закроют критические уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104175/" target="_blank">Похоже, взломан мастер-ключ HDCP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/104146/" target="_blank">Компания Hewlett-Packard покупает компанию ArcSight</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86594/" target="_blank">Маленькие проблемы большой компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103926/" target="_blank">Verified by Visa и SSL — не панацея</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103877/" target="_blank">Виктор Плещук, причастный к взлому платежной системы RBS WorldPay, осужден условно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103870/" target="_blank">Компания Microsoft получила управление над крупным ботнетом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103619/" target="_blank">В Германии запускается сервис борьбы с ботнетами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103605/" target="_blank">Готовится к запуску сервис по идентификации пользователей Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103604/" target="_blank">А Ваши ИС уже приведены в соответствие с требованиями 152-ФЗ &quot;О персональных данных&quot;?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103580/" target="_blank">В США посадили «нигерийского» спамера на 12 лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103452/" target="_blank">Индия хочет контролировать RIM, Google и Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103446/" target="_blank">Идентифицируем пользователей Skype по перехваченному HTTP траффику</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102915/" target="_blank">«Фича» в IPSEC реализации VPN роутеров Draytek</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103369/" target="_blank">Twitter планирует вести мониторинг кликов пользователей по линкам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103366/" target="_blank">Э-почта — ненадёжный вид коммуникации. Поэтому мы шлём вам в ней пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103268/" target="_blank">Грань между личным и конфиденциальным</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cleantalk/blog/301302/" target="_blank">Невизуальные методы защиты сайта от спама. Часть 3. Повторы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301422/" target="_blank">IPSec VPN для OS X и iOS. Без боли</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/301250/" target="_blank">Security Week 20: случайные числа, уязвимость в 7-Zip, Microsoft выключает WiFi Sense</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/301046/" target="_blank">Test lab v.9: impossible or nothing</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/rootwelt/blog/301246/" target="_blank">Двойной обман. Как ФБР использовало украинского хакера Максима Попова</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301180/" target="_blank">Дайджест последних достижений в области криптографии. Выпуск нулевой</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/301226/" target="_blank">Создатели трояна-шифровальщика TeslaCrypt закрыли проект и опубликовали master-ключ для разблокировки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301196/" target="_blank">Преступники, заражавшие банкоматы вирусом, пойманы на горячем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virgilsecurity/blog/301048/" target="_blank">ЭЦП стран СНГ на Python</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283464/" target="_blank">Уязвимость в электронном дневнике или как украсть персональные данные 2 миллионов пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103251/" target="_blank">IBM X-Force Threat Report: исправление цифр</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103208/" target="_blank">Разработчики вируса Trojan Winlock заработали один миллиард рублей за полгода</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103135/" target="_blank">Ложь, большая ложь и антивирусы. Часть первая. «А они первыми начали!»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103086/" target="_blank">MakeMeLaughNow — анализ червя нового поколения в Facebook (перевод)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/103036/" target="_blank">Червь в Facebook — «Make Me Laugh Now»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102953/" target="_blank">Проект Diaspora близок к запуску</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102807/" target="_blank">Горький опыт, резервное копирование и качественная техподдержка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102686/" target="_blank">Уязвимость в загрузке DLL есть в Microsoft Office — PoC</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102565/" target="_blank">Что это было? Дефейс Вконтакте?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102561/" target="_blank">Хакеры не считают «облака» достаточно защищенными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102478/" target="_blank">Анализ защищенности утилиты удаления продуктов Лаборатории Касперского</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102421/" target="_blank">Intel объясняет, зачем они купили McAfee</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102391/" target="_blank">Анонимусы получили доступ к системе мониторинга и архивирования корпоративной и веб-почты ФСО России на сервере gov.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102332/" target="_blank">Препарируем Яндекс-карты: «Вас поставили подслушивать, а Вы тут подглядываете». Информация о точках доступа Wi-fi используется для определения местоположения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102271/" target="_blank">Критическая уязвимость в 40 Windows-приложениях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102254/" target="_blank">Intel, как сообщалось ранее, купил McAfee. Интересно, зачем?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102195/" target="_blank">Город Леон, Мексика, станет «самым безопасным городом в мире „</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/102077/" target="_blank">Эскалация привилегий в десктопном линуксе: Получение рутового доступа из GUI-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101973/" target="_blank">В/На Украине с помощью лома уничтожили базу данных сертификатов качества на все виды продукции</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101919/" target="_blank">Кража информации у работодателя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101817/" target="_blank">Предотвращение скрытого Nmap сканирования в Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101870/" target="_blank">Очередной массовый взлом ICQ-UIN'ов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101692/" target="_blank">Вход в систему «по лицу»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101691/" target="_blank">«Не отображается сайт»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101641/" target="_blank">Методы социальной инженерии, используемые для распространения вредоносного ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101652/" target="_blank">Саудовская Аравия стала второй страной, запретившей Blackberry</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101451/" target="_blank">Toshiba изобретает жесткий диск для параноиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101411/" target="_blank">Соблюдают ли Google и Verizon принципы «сетевого нейтралитета»?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101401/" target="_blank">Взломан канал связи между автомобилем и шинами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101389/" target="_blank">ФСБ учится распознавать кавказцев по голосу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101208/" target="_blank">Взлом звуковой CAPTCHA на примере сайта Digg.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/101110/" target="_blank">Для phpMyAdmin появился эксплоит</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100763/" target="_blank">Сравнительный обзор бесплатных антивирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100756/" target="_blank">Хакер создал устройство прослушивания сотовых телефонов за $1,500</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100619/" target="_blank">На конференции Black Hat представлено ПО для дешифровки разговоров в GSM-сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100552/" target="_blank">Очень интересный вариант защиты от SQL-инъекций и XSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100503/" target="_blank">Kismet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100496/" target="_blank">ЦРУ и Google инвестируют средства в компанию, разработавшую систему веб-мониторинга людей и событий</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100460/" target="_blank">На конференции Black Hat хакер показал новый способ взлома банкоматов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100447/" target="_blank">Серьёзная уязвимость в QuickTime</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100427/" target="_blank">Россия — лидер по количеству «агрессивного» траффика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100318/" target="_blank">30 июля пройдет четвертое собрание украинского сообщества специалистов по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100224/" target="_blank">Отмена запретов Copyright Office</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100176/" target="_blank">Обнаружена серьезная уязвимость в протоколе защиты данных WPA2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/100035/" target="_blank">В vBulletin обнаружена серьёзная уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99903/" target="_blank">Уязвимость персональных данных в Safаri</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99868/" target="_blank">Уязвимость Microsoft Windows, которую демонстрировал 0-day exploit 19 июля, оказалась многовекторною: сайты могут автоматически заражать читателей через Internet Explorer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99804/" target="_blank">Хакеры представили «Kraken» для взлома алгоритма шифрования в GSM-сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99736/" target="_blank">Взлом НКА</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99732/" target="_blank">LNKpokalipsis или новая багофича от MS (CVE-2010-2568)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99713/" target="_blank">Google повышает вознаграждение за баги до $3133,7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99661/" target="_blank">Microsoft предложила альтернативу сложным паролям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99487/" target="_blank">Mozilla повышает награду за найденные баги до $3000</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99377/" target="_blank">Организация SSH-доступа по одноразовым паролям</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99361/" target="_blank">Фотографии с Твиттера «заговорили» в руках хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99360/" target="_blank">Немец выпустил «самую уязвимую ОС» на базе Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99104/" target="_blank">Уязвимость Windows Help and Support Center (CVE-2010-1885) в цифрах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/99050/" target="_blank">Изменение системы ретрива привело к массовому угону номеров icq</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98873/" target="_blank">Хайтек-слежка за студентами на экзаменах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98684/" target="_blank">Trillian IM и безопасность Gmail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98601/" target="_blank">Хакеры получили доступ к базе данных пользователей The Pirate Bay</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98575/" target="_blank">В США потратят 100 млн. на борьбу с русскими и китайскими интернет-шпионами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98546/" target="_blank">Раскрыт самый большой секрет Skype</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98455/" target="_blank">Microsoft открыла российским спецслужбам все исходные коды</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98323/" target="_blank">Электронная цифровая подпись для чайников: с чем ее есть и как не подавиться. Часть 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98282/" target="_blank">Взлом компьютера через радиопульт для презентации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98206/" target="_blank">Доменные имена как инструмент Competitive Intelligence</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98162/" target="_blank">Видео-капча от NuCaptcha</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98098/" target="_blank">Уязвимость на виртуальном хостинге инфобокса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/98094/" target="_blank">Установка трояна через USB plug-and-play</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97996/" target="_blank">I2P — Создание своего сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97874/" target="_blank">CoMoDo информирует VeriSign о серьезной дыре в безопасности в SSL сертификатах, выпускаемых VeriSign</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97827/" target="_blank">I2P — Проект Невидимый Интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97769/" target="_blank">Практика современного хайтек-шпионажа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97759/" target="_blank">Только 3% SSL-сертификатов правильно сконфигурированы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97643/" target="_blank">Screenjelly, Screentoaster или Radmin?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97266/" target="_blank">Как я нашел дыру в системе безопасности сайта госуслуги.рф</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97344/" target="_blank">Чем Россия ответит на кибератаки?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97283/" target="_blank">Электронная подпись для чайников: с чем ее есть и как не подавиться. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97123/" target="_blank">Автомобили Google Street View шпионили по всему миру?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/97066/" target="_blank">Электронная цифровая подпись для чайников: с чем ее есть, и как не подавиться. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96861/" target="_blank">Обновление Kaspersky Rescue Disk</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96759/" target="_blank">У какой из анонимных сетей наибольший потенциал?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96386/" target="_blank">Правовые основы использования криптографии в личных целях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96271/" target="_blank">Конфиденциальность в сетях связи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96196/" target="_blank">Сотрудник Google публикует 0-day уязвимость Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96111/" target="_blank">Взломан ряд израильских сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95916/" target="_blank">Особенности национальной информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/96001/" target="_blank">Фотоаппараты Olympus продавались с вирусом во встроенной памяти</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95772/" target="_blank">Кража доменов: Что делать, если во время этой массовой атаки у вас его увели</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95678/" target="_blank">Теперь НАТОвцы будут в прямом смысле слова бомбить киберпреступников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95567/" target="_blank">Критическая уязвимость в Adobe Flash Player, Adobe Reader, Adobe Acrobat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95513/" target="_blank">Дыры в безопасности веб-интерфейса mail.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95444/" target="_blank">А вы уже слили бд нигмы?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95406/" target="_blank">Евросоюз близок к введению мониторинга поисковых запросов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95144/" target="_blank">Dropbox. sharing-folders. Безопасность или удобство?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95057/" target="_blank">Семинар по защите программных продуктов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/95053/" target="_blank">50 000 немцев могут подать в суд на Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94476/" target="_blank">Защищённый удалённый терминал</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94356/" target="_blank">Взлом сайта: простые советы по безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/301120/" target="_blank">НЕтехнологические проблемы защиты от утечек. Практика полевого инженера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/301116/" target="_blank">Защита цифровых активов — задача стратегическая</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283540/" target="_blank">Fail2ban 0.10: Новые возможности. Тест открыт</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/301016/" target="_blank">Уязвимости в прокси-соединении: как антивирусы снижают безопасность интернет-браузера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/282860/" target="_blank">Защита сайта от хакерских атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/300988/" target="_blank">Бэкдор в Linux-ядре китайского производителя ARM открывает доступ к смартфону одной командой</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/300972/" target="_blank">Запись вебинара «Легкая облачная защита корпоративной сети с низкой полной стоимостью владения»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/300926/" target="_blank">Отчет с семинара RISSPA 20 апреля</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/300910/" target="_blank">Накануне Противостояния: участники PHDays VI СityF — о том, кто кого</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/283536/" target="_blank">Security Week 19: искусственный интеллект в безопасности, zero days у Microsoft и Adobe, иной взгляд на криптолокеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94442/" target="_blank">Внимание — новый вид фишинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94363/" target="_blank">Проверяете ли вы хеш-суммы скачиваемых файлов, если они указаны на сайте-источник?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94349/" target="_blank">Уязвимость сайта qip.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92681/" target="_blank">Практическая атака на беспроводную сеть с WEP шифрованием</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94151/" target="_blank">Узнаем пароли пользователей 1С</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94122/" target="_blank">Практика использования arp-spoofing</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/94089/" target="_blank">Подробнее о Google Maps или о том, как google шпионит за нами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93956/" target="_blank">Microsoft легализует бета-тестирование патчей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93941/" target="_blank">Офисный копир — еще одна брешь в безопасности?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93744/" target="_blank">Google «по ошибке» собирал приватные данные из WiFi-сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93665/" target="_blank">Ваш автомобиль в недалеком будущем может быть запросто взломан хакерами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93507/" target="_blank">Банкоматных вирусов пост</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93027/" target="_blank">Об обходе антивирусов на практике</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93403/" target="_blank">Mozilla запустила сервис для проверки версий плагинов в браузерах Opera, Chrome, Safari, IE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93402/" target="_blank">Подготавливаем OllyDbg к бою</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93226/" target="_blank">Хэш-алгоритмы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/93177/" target="_blank">«Реформа маршрутизаторов» никому не нужна</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92953/" target="_blank">Комплекты для взлома WiFi-сетей продаются по $24</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92774/" target="_blank">Скрытый шифрованный диск с защитой от терморектальной расшифровки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92735/" target="_blank">10 лет со вспышки внезапной любви</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92679/" target="_blank">Свобода слова в Сети: Осторожно, двери закрываются?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92528/" target="_blank">История одной глупости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92393/" target="_blank">Демонстрация ботнета перед продажей: какой сайт изволите повалить?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92343/" target="_blank">Вытаскиваем кучу паролей из пиринговых сетей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92301/" target="_blank">Microsoft заменила ошибочный апдейт для Windows 2000</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92239/" target="_blank">Механизмы безопасности в Linux</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92216/" target="_blank">Прячем терминальные сервера. Бюджетное решение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92112/" target="_blank">«Сложный пароль» в расшифровке не нуждается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92033/" target="_blank">Сложный пароль в запоминании не нуждается</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/92022/" target="_blank">Удалённый сервер с 100% шифрованием и защитой от маски-шоу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89588/" target="_blank">Вопросы безопасности современных OS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91948/" target="_blank">Мечта параноика или Еще раз о шифровании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91859/" target="_blank">У Вас WiFi? Тогда Google едет к Вам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91826/" target="_blank">Абсолютно защищенная файловая система</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91321/" target="_blank">Третьеклассник взломал школьную компьютерную сеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91266/" target="_blank">Взломали Gmail аккаунт</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91207/" target="_blank">Sun выпустила экстренный апдейт Java для Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/91097/" target="_blank">USBDetect 3.0: сетевой детектор флэшек от АНБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/90990/" target="_blank">Бэкдор в active directory своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/90892/" target="_blank">Microsoft подсчитала: менять пароли невыгодно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/90737/" target="_blank">В JavaWS нашли бэкдор</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/90473/" target="_blank">Министерство образования и науки Украины… Образование 2.0 говорите?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/90263/" target="_blank">История одного «инцидента» или оконная пакость</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89882/" target="_blank">Взлом security.vkontakte.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89676/" target="_blank">Насколько опасна DRM-защита, или Видео-вирус часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89108/" target="_blank">401 Unauthorized на службе зла</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89478/" target="_blank">Foxit Reader — уязвимость с запуском внедренного в PDF исполняемого файла без предупреждений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89475/" target="_blank">Мероприятия по информационной безопасности. Оффлайн или онлайн?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89402/" target="_blank">Размышления о безопасности на производстве</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89234/" target="_blank">Проходим сквозь стены NAT-ов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89253/" target="_blank">Выявляем мошенников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89109/" target="_blank">Социальная инженерия: «Дорожное яблоко»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/89016/" target="_blank">Вирус на ровном месте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88961/" target="_blank">Поддержка браузерами технологии Data Execution Prevention</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88923/" target="_blank">Устройства сил правопорядка подрывают SSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88796/" target="_blank">Как обойти URL-фильтры с помощью математики</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88669/" target="_blank">«Дети и интернет»: программы в помощь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88628/" target="_blank">Взломщики RBS World Pay арестованы. Будут ли экстрадировать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88545/" target="_blank">Уязвимость xname.org</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88333/" target="_blank">Для преступников ботнет Зевс (ZeuS) становится все удобнее и удобнее</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88286/" target="_blank">В который раз о важности сложных паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88249/" target="_blank">Google выпускает skipfish — сканер безопасности сетевых приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88064/" target="_blank">Nmap. Начало использования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88058/" target="_blank">NDA (non-disclosure agreement, соглашение о неразглашении)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/88012/" target="_blank">Хакер заблокировал более 100 машин через интернет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87915/" target="_blank">А вы довольны памятью своей Linux системы?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87872/" target="_blank">Профилактика SQL-инъекций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87802/" target="_blank">Суровые админы Ространснадзора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87748/" target="_blank">Если пришла проверка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87615/" target="_blank">Взломщики CAPTCHA заработали $25 млн</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87493/" target="_blank">Шифрование электронной почты Gmail в Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87323/" target="_blank">Apple закрыла 16 (шестнадцать) дыр в безопасности Safari 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86512/" target="_blank">Задача недоказуемой передачи данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87090/" target="_blank">Как у меня увели домен</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/87060/" target="_blank">Шпионские истории. «Камбала»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86939/" target="_blank">Про хакеров, кадабру и ТМ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86880/" target="_blank">Кто умнее тот и прав — Записки Хакера часть 1 из 5</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86872/" target="_blank">Скрыть неиспользуемые ярлыки в банкомате?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86841/" target="_blank">Взломано 1024-битное шифрование RSA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86799/" target="_blank">«Распределенное управление информационными потоками»/«Distributed Information Flow Control»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86698/" target="_blank">Активная XSS уязвимость в IP.Board v2.3.6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86624/" target="_blank">Уязвимость в браузере Opera (переполнение буфера)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86554/" target="_blank">Мошенничество на популярности Opera Mini и Jimm</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86530/" target="_blank">Биометрическая идентификация: о надежности технологии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86474/" target="_blank">Удалённый доступ между компьютерами на базе ОС Windows с использованием RSA-алгоритма аутентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86394/" target="_blank">Как ловили меня</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86368/" target="_blank">История одного проникновения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86333/" target="_blank">Как я ловил хакера 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86310/" target="_blank">Полиция Испании арестовала зачинщиков массивного бот-нета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86282/" target="_blank">Как я ловил хакера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86257/" target="_blank">Microsoft открывает U-prove</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/86221/" target="_blank">Видео-вирус, или как я кино не посмотрел</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/85969/" target="_blank">Торренты, скайп и безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/85278/" target="_blank">Конкурс от BitDefender ко Дню Защитника Отечества</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/85188/" target="_blank">Два китайских учебных заведения и украинский профессор причастны к взлому Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/84635/" target="_blank">SUID и безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/84733/" target="_blank">«Закон 404» не так страшен, как его малюют</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/84655/" target="_blank">25 самых опасных программных ошибок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/84357/" target="_blank">SVN: Полгода спустя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/84172/" target="_blank">Простой и эффективный метод отразить http DDoS от 50мбит с помощью nginx и iptables</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283482/" target="_blank">Еще раз о том, как не сделать из своей сети «решето»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/virgilsecurity/blog/283458/" target="_blank">End-to-end шифрование, теперь это просто</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/283480/" target="_blank">NFC – в массы. Новые технологии на Евровидении, музыкальных и спортивных площадках</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/283448/" target="_blank">Антивирус как угроза</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/283424/" target="_blank">Введение в OAuth (в простых словах)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/283382/" target="_blank">Большой куш: Почему хакеры атакуют систему финансовых переводов SWIFT</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283380/" target="_blank">Facebook выложил на Гитхаб свою платформу для проведения CTF — Facebook CTF</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/283316/" target="_blank">Деловая программа PHDays: откровенное обсуждение сложных вопросов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/283320/" target="_blank">Целенаправленные атаки на гостиничные сети: практический пример</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cleantalk/blog/283300/" target="_blank">Невизуальные методы защиты сайта от спама. Часть 2. Истинное лицо символов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83889/" target="_blank">16 февраля на США совершат учебную кибератаку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83724/" target="_blank">Троян Spy Eye устраняет конкурентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83611/" target="_blank">История одного неудачного взлома</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83585/" target="_blank">Экспортные ограничения на криптографию в США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83566/" target="_blank">Китайские власти закрыли сайт по обучению хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83415/" target="_blank">Краткое введение в социальную инженерию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83164/" target="_blank">SEO и информационная безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83149/" target="_blank">Критическая уязвимость в lighttpd, DoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/83062/" target="_blank">Запредельная наглость SMS-мошенников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82880/" target="_blank">Ограбление по-дилетантски-3 или те же яйца, только в профиль</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82670/" target="_blank">Распространенные заблуждения про банковские карточки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82658/" target="_blank">GnuPG: Безопасная почта для Win, Mac и *nix</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82597/" target="_blank">Avast 5 уже здесь</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82504/" target="_blank">Ограбление по-дилетантски-2 или о том, как Mail.ru хранит пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82485/" target="_blank">Новый вид развода — помоги девушке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82386/" target="_blank">Банк подал в суд на жертву кибермошенничества</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82348/" target="_blank">Очередное мошенничество с сотовыми — старшее поколение под прицелом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82317/" target="_blank">Ограбление по-дилетантски или о том, как Яндекс хранит пароли</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82252/" target="_blank">Вконтакте и WebMoney запустили сервис займов. Чем это опасно для пользователей?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/82012/" target="_blank">Отправь смс на номер ЧЧЧЧ, чтобы получить эту работу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81799/" target="_blank">Критическая уязвимость в продуктах Apple не закрыта 7 месяцев</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81523/" target="_blank">Появился патч для Internet Explorer (Операция «Аврора»)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81517/" target="_blank">Microsoft закрыла уязвимость в IE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81399/" target="_blank">Патч для Internet Explorer появится 21-го января(Операция «Аврора»)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81344/" target="_blank">Microsoft согласилась пропатчить IE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81221/" target="_blank">Программа для перехвата управления маршрутизаторами D-Link</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81137/" target="_blank">Операция «Aurora». Удар по Google и прочим</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81098/" target="_blank">Опубликован код, который использовали для атаки на Google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81083/" target="_blank">Kaspersky KryptoStorage от и до</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/81032/" target="_blank">ГОСТ 28147-89 (Часть 2. Режим простой замены)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80979/" target="_blank">InetGuards</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80967/" target="_blank">ГОСТ 28147-89 (Часть 1. Введение и общие принципы)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80842/" target="_blank">Вчера (14 января 2010 года) терминал автобуса, следующего по маршруту № 36 в Липецке, выдавал всем пассажирам нецензурные билеты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80827/" target="_blank">Прон на московском билборде</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80820/" target="_blank">В атаке на Google использовалась уязвимость Internet Explorer</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80779/" target="_blank">безопасен ли СберБанк Онлайн?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80657/" target="_blank">Подробности о «раздевающих» сканерах в аэропортах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80582/" target="_blank">У меня только один прогноз на 2010 год</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80543/" target="_blank">BackTrack 4 Final Released</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80360/" target="_blank">Массовый угон доменов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80313/" target="_blank">RU-CENTER хранит пароли в открытом/декодируемом виде?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80219/" target="_blank">Хитрые способы обмана адресной строки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80171/" target="_blank">Универсальный пароль, при этом уникальный для каждого сервера и сервиса</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80143/" target="_blank">Распространение троянов через flash баннеры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80036/" target="_blank">Оптимальная длина и состав пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/80016/" target="_blank">Роуэн Аткинсон как председатель Евросоюза</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79991/" target="_blank">PayPal или все-таки РауРаl?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79989/" target="_blank">Как «неизвестные хакеры» взламывают по пол интернета за раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79988/" target="_blank">Как много паролей вы используете?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79631/" target="_blank">Подробности о взломе алгоритма A5/1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79449/" target="_blank">Социальный хакинг в быту (защищаемся от глупостей)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79413/" target="_blank">Безопасность сайтов с лирическими отступлениями</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79395/" target="_blank">Yota Egg: Уязвимость или фича?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79289/" target="_blank">Регистраторы предупреждают: появился новый тип мошенничества!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/79282/" target="_blank">Новый принцип «взлома»: Не можешь взломать? Укради</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78926/" target="_blank">В США идёт национальный отбор хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78866/" target="_blank">DDoS'еров начали ловить</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78635/" target="_blank">Твиттер взломан иранскими хакерами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78599/" target="_blank">Приватбанк: защита персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78584/" target="_blank">Войнушки 2.0: кто наблюдает за наблюдателями?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78503/" target="_blank">Советы по защите форума vBulletin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78462/" target="_blank">Статья в РБК на тему информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78272/" target="_blank">ВТБ24. Безопасность телебанка</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78145/" target="_blank">Строим кластерную систему защиты от DDoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/78109/" target="_blank">Не хочу рекламировать шарлатанов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76025/" target="_blank">Интернет голосования, концепт защиты от накруток</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77962/" target="_blank">Ботнет Zeus случайно попал на Amazon EC2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77956/" target="_blank">Сломался whois для международных доменов или «Как я зарегистрировал sex.com»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77689/" target="_blank">Безопасность при межпроектном взаимодействии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74127/" target="_blank">Один шаг от пассивной XSS уязвимости до внедрения AJAX червя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77642/" target="_blank">Хакеры грабят фишеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77625/" target="_blank">Вы несете деньги в Банк, Банки несут деньги в Bitrix</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77500/" target="_blank">Утечка закрытых данных — кто виноват? Возможно, так и задумано</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/77422/" target="_blank">Большой брат видит тебя: облачные вычисления на sim-карте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76954/" target="_blank">Как люди покупают безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76936/" target="_blank">~/mysql_history и безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76831/" target="_blank">Возможность получить информацию о сайте на symfony</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76816/" target="_blank">Перехват пейджинговых сообщений 11 сентября 2001</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76637/" target="_blank">ВКонтакте и защита от фишинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76351/" target="_blank">No robot: зашифровка текста на веб-странице</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76334/" target="_blank">Взломан сайт Интернет-магазина Symantec</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76229/" target="_blank">Шифр Аль-Кайды взломали</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76130/" target="_blank">Злостный DDOS и защита</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76094/" target="_blank">В Украине изымают серверы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76079/" target="_blank">SDL — теперь для облака и быстрой разработки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/76060/" target="_blank">Критические уязвимости в браузерах за выходные</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75953/" target="_blank">Взлом сервера Climatic Research Unit привел к большому скандалу вокруг глобального потепления</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75866/" target="_blank">Microsoft опровергает наличие бэкдора в Windows 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75644/" target="_blank">Первая проверка мобильного ботнета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75342/" target="_blank">Студента ЭФ СПбГУ осудили за взлом факультетского сайта — 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75333/" target="_blank">Как защитить свои личные данные при регистрации домена?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75316/" target="_blank">Я вижу вас насквозь, а вы при этом наивно полагаете, что находитесь в полной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75307/" target="_blank">Меньше знаешь — крепче спишь, или хватит выдергивать информацию из контекста</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75204/" target="_blank">Введен в строй сайт Perl.org — первые дыры (upd: уже заткнули)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/75145/" target="_blank">Фундаментальный баг Adobe Flash не будут исправлять</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74892/" target="_blank">Релиз бесплатного антивируса Panda Cloud выложен в свободный доступ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74752/" target="_blank">Односторонняя подписка или мы вас подпишем, а вы платите…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74701/" target="_blank">А Вы доверяете интернет-хранилищам данных конфиденциальную информацю?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74689/" target="_blank">Хакеры устроили блэкаут в Бразилии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74557/" target="_blank">Убежал COFEE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283308/" target="_blank">Microsoft избавится от телеметрии в Visual C++ в Update 3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283296/" target="_blank">PornHub запускает публичную программу Bug Bounty</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/283250/" target="_blank">Закрывается продажа билетов на PHDays VI</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283224/" target="_blank">Интересный способ доставки зловредов или как «хакеры» взламывают «мошенников»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283210/" target="_blank">Ищем уязвимости с помощью google</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283036/" target="_blank">Средства сбора данных в компьютерно-технической экспертизе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/283110/" target="_blank">Как отключить инъекцию скрипта ff.kis.scr.kaspersky-labs.com при использовании Kaspersky Internet Security 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/283084/" target="_blank">Security Week 18: VirusTotal за справедливость, уязвимость в Android, утечка токенов Slack</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/283052/" target="_blank">Как взломать Telegram и WhatsApp: спецслужбы не нужны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/283028/" target="_blank">Серьезная уязвимость прокси-сервера Squid позволяет «отравить кэш»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74462/" target="_blank">Социальные сети как платформа для создания ботнета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74092/" target="_blank">Как устроена смарт-карта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/74013/" target="_blank">Ellance — поддельная биржа труда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/73805/" target="_blank">Скачай себе Adware от Агавы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/73642/" target="_blank">Безопасное хранение секретов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/73476/" target="_blank">Вскрываем эксплоиты, шифрованный javascript, вредоносные iframe — русский мануал Malzilla</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/73515/" target="_blank">Фарминг в соц. сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72729/" target="_blank">Securelist.com — XSS и SQL Injection уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/73133/" target="_blank">Aladdin представляет новый ключ eToken Pro Anywhere</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/73039/" target="_blank">Symantec Network Access Control</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72820/" target="_blank">Способы сокрытия IP-адреса в сети Internet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72758/" target="_blank">Банлисты для .htaccess: от XSS до SQL-инъекций. Бонусом плохие реферреры и UA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70287/" target="_blank">file.qip.ru и яичный вирус</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72712/" target="_blank">Вычисляем плохих ботов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72678/" target="_blank">Обама призывает американцев помочь в кибер-безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72352/" target="_blank">Thawte отменяет Web of Trust</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/72008/" target="_blank">Долой капчу! Да здравствует Clickcha — one click captcha</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/71978/" target="_blank">Новый мировой рекорд по отлову хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/71933/" target="_blank">Атака с нулевым префиксом для SSL/TLS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/71572/" target="_blank">Блог о персональных данных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/71299/" target="_blank">Безопасность США обеспечит тысяча элитных хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/71077/" target="_blank">Shrew бесплатная альтернатива Cisco VPN Client</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70942/" target="_blank">Шнайер о проблеме деидентификации</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70615/" target="_blank">Об одном эвристическом методе детекции вирусных инжекций на сайтах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70498/" target="_blank">Студента ЭФ СПбГУ осудили за взлом факультетского сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70330/" target="_blank">Были получены исходники 3300 глобальных интернет-проектов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70367/" target="_blank">Бесплатный VPN</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/70300/" target="_blank">%providername% has you!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69964/" target="_blank">На mail.ru возможно узнать ФИО человека по его email</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69854/" target="_blank">Использование snort для блокирования атак скрипт-киддисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69806/" target="_blank">Microsoft отказалась патчить Windows XP</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69775/" target="_blank">уязвимость в Kqueue во FreeBSD</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69586/" target="_blank">Ботнет из Linux-серверов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69561/" target="_blank">Полиция должна хакать больше</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69436/" target="_blank">Зачем нужен firewall на веб-проектах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/69362/" target="_blank">Купи меня за 11 долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68992/" target="_blank">Хакерская помощь для разбитых сердец</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68401/" target="_blank">Шантаж 2: спасение от атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68463/" target="_blank">Лаборатория Касперского или туда-сюда…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68328/" target="_blank">AES-128 vs AES-256</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68301/" target="_blank">Защищаемся от HTTP DDoS и прочих Хабраэффектов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68156/" target="_blank">WPA теперь может быть взломан за 1 минуту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/68131/" target="_blank">Шантаж</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67943/" target="_blank">55 тыс сайтов в Интернете оказались заражены одним и тем же iframe</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67900/" target="_blank">Сеть отелей Рэдиссон взломали</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67685/" target="_blank">Недорогой способ защиты от HTTP-флуда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67244/" target="_blank">Мой парольный менеджер с шахматами и поэтессами. И синхронизацией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67141/" target="_blank">Верни мои деньги, банкомат</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67102/" target="_blank">Woodpeckers</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67067/" target="_blank">Защита от вредного ПО и фишинга в браузерах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/67062/" target="_blank">Управление ботнетом через Твиттер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66962/" target="_blank">Махинации с Бюро Кредитных Историй</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66817/" target="_blank">Ищу инструменты статического анализа кода для поиска уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66549/" target="_blank">Даже при закрытых дырах на «Вконтакте» можно устроить XSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66138/" target="_blank">Фальшивый банкомат на DEFCON поставили явно преступники-приколисты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66057/" target="_blank">XSS глазами злоумышленника</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66093/" target="_blank">Защищенность правительственных сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66083/" target="_blank">«Кредитные хакеры»: методика банковских манипуляций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66065/" target="_blank">Инструмент VideoJak для подмены VoIP-видеопотока</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66029/" target="_blank">Пароли для ленивых</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66028/" target="_blank">Acrobat, Reader и Flash Player обновили</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/66004/" target="_blank">Бумага как способ резервного копирования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65955/" target="_blank">Приватность вашей почты у некоторых сервисов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65927/" target="_blank">Новый-старый pdf exploit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65892/" target="_blank">Black Hat 2009 — владельцам смартфонов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65863/" target="_blank">Black Hat 2009: слайды команды Invisible Things Lab</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65737/" target="_blank">BlackHat 2009: взломаны сервера известных экспертов в области ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65652/" target="_blank">Журналирование Windows EventLog и система оповещения для администраторов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65636/" target="_blank">ISC анонсирует новую уязвимость BIND: Dynamic Update DoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65549/" target="_blank">Системы контроля и управления доступом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65513/" target="_blank">КиберХелпер — ещё не Скайнет, но уже близко</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65482/" target="_blank">ФБР анализирует 200 000 отпечатков пальцев в сутки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65391/" target="_blank">Третье измерение защиты паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65322/" target="_blank">DNS Tunneling via iodine: сыр действительно бесплатный</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65304/" target="_blank">Атака на Twitter: шаг за шагом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65241/" target="_blank">Исчезающая информация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65220/" target="_blank">Промышленный шпионаж</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65166/" target="_blank">Вторая жизнь жестких дисков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65137/" target="_blank">Крупнейшая в мире база приватной информации: 40 млн человек</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65100/" target="_blank">Hacking on Rails</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65065/" target="_blank">Вышли защитные продукты Outpost (Firewall, Antivirus, etc) для Windows 7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/65022/" target="_blank">Chrome OS положит конец вирусам?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64922/" target="_blank">Безопасность web-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64820/" target="_blank">Личная информационная безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64788/" target="_blank">Популярный антивирус AVG FREE теперь и на русском языке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64774/" target="_blank">XSS на yandex.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64516/" target="_blank">Крупнейшая кража корпоративных документов Twitter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64459/" target="_blank">Обнаружен критический эксплоит Firefox 3.5</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64458/" target="_blank">Незакрытая критическая уязвимость в Firefox 3.5</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64429/" target="_blank">Флэшка для шпионов: AES-256 с самоуничтожением</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64216/" target="_blank">CTF в России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/64090/" target="_blank">CA Antivirus блокирует системные файлы Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63854/" target="_blank">Ломаем капчу</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63819/" target="_blank">Как стать разносчиком спама ВКонтакте из-за любопытства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63763/" target="_blank">Уязвимость в Video ActiveX Control</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63674/" target="_blank">Уязвимость нулевого дня в Microsoft DirectX</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63518/" target="_blank">База китайского malware</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63244/" target="_blank">Слепой хакер получил 11 лет тюрьмы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63176/" target="_blank">Угон JSON</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63132/" target="_blank">Google Chrome + SSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/282854/" target="_blank">С днем шифровальщикаǃ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/283000/" target="_blank">В I квартале 2016 года ежедневно идентифицировались 227 000 образцов вредоносных программ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282934/" target="_blank">Easy Hack: Java application</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282906/" target="_blank">Администраторы групп в vk всегда были в открытом доступе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282904/" target="_blank">Краткий курс от ESET по проектированию малвари</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/282786/" target="_blank">Интернет пчел, или Зеленое будущее M2M приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282896/" target="_blank">Множество уязвимостей в ImageMagick, одна из которых ведёт к RCE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282880/" target="_blank">Опасный target=&quot;_blank&quot;</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282846/" target="_blank">Разбор заданий с Google CTF 2016: Mobile</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/282806/" target="_blank">01100100 лет со дня рождения Клода Шеннона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/63095/" target="_blank">Rambler bug</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/62980/" target="_blank">Slow Lori атака на веб-сервер Apache</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/62933/" target="_blank">При содействии с Запада</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/62306/" target="_blank">Обзор анонимной сети I2P</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/62283/" target="_blank">XSS вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/62215/" target="_blank">Новый эксплоит угрожает iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/61749/" target="_blank">Генерация сложных паролей простыми фразами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/61709/" target="_blank">Excel-калькулятор реальной надёжности паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/61670/" target="_blank">OpenSSL: простое шифрование с открытым ключом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60868/" target="_blank">Выключатель от 100,000 компьютеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60726/" target="_blank">TCP стеганография или как скрыть передачу данных в интернете</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/60590/" target="_blank">Web Application Firewall — защита сайта от хакерских атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60589/" target="_blank">Социальная инженерия vs mchost.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60227/" target="_blank">Эксперты перепрошили «хакерский» Nokia 1100</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60139/" target="_blank">«Секретные» вопросы — пародия на безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60105/" target="_blank">Data mining по отношению к сотрудникам online и offline – смех и слёзы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/60059/" target="_blank">Обеспечение и сбор доказательств с помощью Интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59961/" target="_blank">Израильская разведка предупреждает насчёт Facebook</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59828/" target="_blank">Зараженная Windows 7 RC формирует новый ботнет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59824/" target="_blank">Фальшивые антивирусы под прикрытием Comodo CA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59351/" target="_blank">TrueCrypt 6.2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59247/" target="_blank">Шифруемся по полной</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59199/" target="_blank">О защите паролей от кейлоггеров — более гуманная идея</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59187/" target="_blank">QIP — Минутка ненависти (хистори на сервере)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59152/" target="_blank">Пароль для гиков — смешать, но не взбалтывать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59142/" target="_blank">ВНИМАНИЕ! QIP.RU ВЗЛОМАН!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59134/" target="_blank">WTF! Новый троян блокирующий Windows!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59127/" target="_blank">Qip без ведома пользователя стал вести микроблог</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/59012/" target="_blank">Ботнет Torpig захватили для исследований</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58882/" target="_blank">Доступ к приватному видео Вконтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58863/" target="_blank">Документы по делу johnjane</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58647/" target="_blank">Cloud-антивирус Panda с поддержкой «коллективного разума»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58386/" target="_blank">Как пользователи Outpost опередили релиз Firewall Free 2009</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58307/" target="_blank">Mythbusters на RSA Conference 2009</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58264/" target="_blank">Исходные коды Антивируса Касперского утекли?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/58063/" target="_blank">Украинский мега-ботнет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/57884/" target="_blank">Сравнительное тестирование криптоконтейнеров и шифрованных файловых систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/57903/" target="_blank">Хакеры скупают телефоны Nokia 1100</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/57802/" target="_blank">Хакеры украли данные самого дорогого проекта в истории Пентагона</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/57454/" target="_blank">Хакеры научились расшифровывать PIN-коды</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/57374/" target="_blank">Первый турнир для AV консультантов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/57034/" target="_blank">Как защититься от Conficker и краткий обзор OpenDNS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/56918/" target="_blank">Conficker проснулся</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/56879/" target="_blank">Neverending story</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/56757/" target="_blank">Веб-каст Microsoft по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/56559/" target="_blank">Старые форматы PowerPoint стали опасными</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/56028/" target="_blank">Сетевой детектор conficker'a</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55700/" target="_blank">Атака на беспроводные сети. Чуть меньше теории и чуть больше практики</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55663/" target="_blank">Вопросы и ответы: Conficker и 1 апреля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55524/" target="_blank">Защита флешки от записи новых файлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55523/" target="_blank">Трояны в банкоматах. Официальные комментарии «Лаборатории Касперского»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55498/" target="_blank">Найдена возможность заражения BIOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55308/" target="_blank">Открывать ли публичный доступ к WiFi точке доступа?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55285/" target="_blank">Хакеры могут обрушить «умную» электросеть</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55199/" target="_blank">Будущее ботнетов или размышления об том, что нас может ждать.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/55123/" target="_blank">Модификация червя Downadup — W32.Downadup.C.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54618/" target="_blank">Простой способ определить уникальность листа бумаги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54596/" target="_blank">Таблетки счастья</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54342/" target="_blank">Вы покопались в системе защиты какого-либо сервиса и обнаружили уязвимость. Ваши действия:</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54187/" target="_blank">Panda USB and AutoRun Vaccine — лекарство от autorun-вирусов на флешке</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54150/" target="_blank">Кей-генератор для подарочных карт iTunes Store</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54056/" target="_blank">Документы Google Docs опять потеряли приватность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/54018/" target="_blank">О самоподписных сертификатах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/53720/" target="_blank">Рецепт: Как сделать зашифрованную USB флешку?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/53910/" target="_blank">Файлы PDF заразны при наведении на них курсора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/53642/" target="_blank">AUTOSTOP — скрипт для защиты флешки от autorun-вирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/53327/" target="_blank">Предупреждение пользователям Webmoney: фишеры стали рассылать поддельную программу-клиент</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/52657/" target="_blank">DoS в ICQ 6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/52655/" target="_blank">Каптчи. Способы взлома и защиты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/52653/" target="_blank">DoS атака Mozilla Firefox 3.0.6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/52275/" target="_blank">Хакеры…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/52178/" target="_blank">DoS атака телефонов SonyEricsson</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/51951/" target="_blank">Crossite DoS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/51660/" target="_blank">Развали свою страничку в контакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/51574/" target="_blank">DNS Amplification (DNS усиление)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/51315/" target="_blank">Обзор SSL-сертификатов: типы, выбор, приемущества.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/51006/" target="_blank">Персональные/начальные аттестаты webmoney от «Webnames.RU (Регтайма)»: некорректная информация о владельце</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50454/" target="_blank">Атаки на беспроводные сети. Часть 3. WPA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50434/" target="_blank">Взлом хеш-функций (2004-2006 гг.): как это было и что теперь делать?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50177/" target="_blank">Ликбез по основам безопасности и криптографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50340/" target="_blank">QIP Infium — Карл у Клары…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50305/" target="_blank">Свежая модификация трояна OSX.Trojan.iServices</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50280/" target="_blank">Боремся с Radarix.com. Часть первая.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50249/" target="_blank">Атаки на беспроводные сети. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50174/" target="_blank">Атаки на беспроводные сети. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/50007/" target="_blank">Skype (windows) вирус и способы его устранения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/49947/" target="_blank">Свежий троян для MacOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/49678/" target="_blank">Генерация мнемонических сильных паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/49101/" target="_blank">У Обамы будет новый смартфон: модель АНБ?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/49022/" target="_blank">Руки прочь от автозапуска!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/49008/" target="_blank">ASCII-стеганография на ваших картинках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/48626/" target="_blank">Давно проверялись на вирусы/adware/spyware?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/48435/" target="_blank">Взломаны 33 популярных twitter-аккаунта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/48182/" target="_blank">Удаленный DoS телефонов Nokia S60 при помощи SMS/MMS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/48162/" target="_blank">Два фактора, благоприятствующие интернет-мошенникам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/48026/" target="_blank">Стартует бета-тестирование Dr.Web для MAC OS X</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47769/" target="_blank">Вирус, маскирующийся под Google Analytics, поражает Firefox и Opera</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47681/" target="_blank">Ботнеты, участвующие в «медленном брутфорсе», стали умнее</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47670/" target="_blank">США — основной «поставщик» вредоносного ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47565/" target="_blank">Компьютерные симуляции с целью проверки готовности к кибератакам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/282794/" target="_blank">Двухголовый монстр в мире вирусов: GozNym</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/282790/" target="_blank">Security Week 17: Взлом SWIFT и кассовых аппаратов, вымогательство в Android c эксплойтами, обход AppLocker</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/282700/" target="_blank">Список книг по наступательной информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/282742/" target="_blank">Гостиничный бизнес: легкая мишень для хакеров с заманчивыми прибылями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/282433/" target="_blank">Распознавание DGA доменов. А что если нейронные сети?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282043/" target="_blank">О выработке неперебираемых ключей на основе перебираемых паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282692/" target="_blank">Разворачиваем Cisco ISE в среде Hyper-V и не только</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282672/" target="_blank">О пользе проверок</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/282654/" target="_blank">Запись вебинара «Как просто защитить предприятие от шифровальщиков и скрытых угроз»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cleantalk/blog/282586/" target="_blank">Невизуальные методы защиты сайта от спама. Часть 1. Статистика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47313/" target="_blank">Примитивная защита от фишинга</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47287/" target="_blank">Защита флэшки от Autorun-вирусов.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47073/" target="_blank">Safari и Chrome: худшие менеджеры паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/47071/" target="_blank">Способ выманить копию паспорта (очередная мутация кидалова)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/46913/" target="_blank">Марш на фарш</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/46907/" target="_blank">Взломан Rambler Top100</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/46797/" target="_blank">«God, Sex, Love and Secret» или статистика использования паролей в социальных сетях</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/46806/" target="_blank">DDoS — мысли вслух…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/46675/" target="_blank">0-day эксплоит в IE7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/46321/" target="_blank">Безопасность (шифрование) трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/45983/" target="_blank">Продолжение истории с «хакером Данилой»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/45979/" target="_blank">На «маки» нужно ставить несколько антивирусов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44496/" target="_blank">Атака на WPA: подробности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/45849/" target="_blank">Новая хеш-функция MD6</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/45591/" target="_blank">Как Blogcamp рассылку проводил</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/45546/" target="_blank">Вирусный маркетинг стал вирусным буквально</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/45205/" target="_blank">Секретные IP-адреса немецкой разведки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44513/" target="_blank">Спам — Зло</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44476/" target="_blank">Объем DDoS атак за последний год вырос до 40 Гбит/сек.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44436/" target="_blank">Патч через семь с половиной лет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44246/" target="_blank">Microsoft: если хочешь быть здоров — обновляйся</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44181/" target="_blank">Старый злой WPA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/44147/" target="_blank">Список безопасных веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/43884/" target="_blank">Вышел TrueCrypt 6.1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/43285/" target="_blank">Как запустили неподписанный код на Xbox 360</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/43127/" target="_blank">Удалённое снятие ЭМИ с порта PS/2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/42795/" target="_blank">Согласимся на создание международной интернет-полиции?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/42647/" target="_blank">«Элкомсофт» ускорил подбор WPA2-ключей в 100 раз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/42137/" target="_blank">Борьба с червём GetCodec</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/42049/" target="_blank">Зияющая дыра в Mail.ru?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/41980/" target="_blank">Всевидящее око</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/41838/" target="_blank">Вышла новая сборка бесплатного сниффера 0x4553-Intercepter</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/41432/" target="_blank">Kaspersky Security Network</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/40551/" target="_blank">О проблеме в почти каждой реализации восстановления забытого пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/40580/" target="_blank">Руткит руткитом вышибают</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/40517/" target="_blank">В Google AdSense и Яндекс.Директ активно рекламируются вредоносные программы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/40281/" target="_blank">Скрытая угроза сторонних приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/39703/" target="_blank">Собираем бесплатную комплексную защиту Security Suite</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/39675/" target="_blank">iPhone делает скриншоты всего подряд</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/39003/" target="_blank">&laquo; Разрушители мифов&raquo; против заговора замалчивания</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/38884/" target="_blank">Обход парольной защиты в документах ms word. (OFFICE11)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/38149/" target="_blank">Список адресов антивирусных компаний для сабмита подозрительных файлов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/38224/" target="_blank">Троянский конь на орбите</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/38117/" target="_blank">42% юзеров лазят в чужие аккаунты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/37797/" target="_blank">Red Hat Enterprise Linux в опасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/37792/" target="_blank">The Middler: программа для взлома незащищённых аккаунтов Gmail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/37695/" target="_blank">На vkontakte снова тырят пароли нерадивых пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/37457/" target="_blank">Беспечность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/37309/" target="_blank">МТС начнет продажи Blackberry частным лицам — ЗАЧЕМ?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30590/" target="_blank">Вы верите Вашему провайдеру?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30548/" target="_blank">Победа российской команды на C.I.P.H.E.R. 4</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30021/" target="_blank">Создан первый эксплоит для дыры в DNS-серверах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30009/" target="_blank">Выдвинуты номинанты на премию Pwnie 2008</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29996/" target="_blank">«Удобная» регистрация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29764/" target="_blank">Хранение паролей considered harmful</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29712/" target="_blank">«Лаборатория Касперского» сообщает об обнаружении червя, заражающего аудиофайлы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29693/" target="_blank">Хабр снова в опасносте!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29263/" target="_blank">Уязвимости при применении TrueCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29198/" target="_blank">Усовершенствования во вредоносных скриптах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29186/" target="_blank">По адресу @gmail.com можно узнать имя человека</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/29145/" target="_blank">Сравнение проактивной защиты Outpost vs. ESET vs. Касперский</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28936/" target="_blank">Вирусы под Mac</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28842/" target="_blank">DNS-апдейт от Microsoft конфликтует с файрволом ZoneAlarm</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28798/" target="_blank">DNS: Случилось страшное…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28790/" target="_blank">Госслужбы наконец-то начали шифровать свои диски</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28693/" target="_blank">Gmail покажет, кто читал вашу почту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28534/" target="_blank">Аутентификация в Web</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28426/" target="_blank">Безопасность в IE8</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28421/" target="_blank">Виртуальная клавиатура в новом Касперском</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28279/" target="_blank">Дырка в кармане Большого Брата</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28194/" target="_blank">«Аль-Каида»: хайтек и информационная война</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/28050/" target="_blank">Онлайновые семинары Black Hat для хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/27704/" target="_blank">Распространенные угрозы безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/27682/" target="_blank">Удалённое снятие информации о посещённых страницах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/27152/" target="_blank">Новый вирус Gpcode шифрует файлы ключом RSA-1024 и вымогает деньги за дешифратор, Kaspersky запускает проект «Stop Gpcode»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26816/" target="_blank">Брюс Шнайер: «Почему мы принимаем подписи по факсу?»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26754/" target="_blank">32-е мая или 3 дня с НОДом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26751/" target="_blank">Пример простой защиты информации на VMWare</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26750/" target="_blank">О вреде ActiveX</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26738/" target="_blank">Одноклассники, серия вторая!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26721/" target="_blank">Как защититься от “хакеров” и воровства паролей?!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26666/" target="_blank">Внимание, воровство cookies!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26658/" target="_blank">Однокласникис.инфо</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/26647/" target="_blank">Храним пароли открыто</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/25004/" target="_blank">Agnitum, agnitum…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/24696/" target="_blank">Сравнительное тестирование 15 антивирусных программ в новом журнале С'T</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/24494/" target="_blank">Microsoft сделала полицейские «жучки» для взлома защиты Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/24218/" target="_blank">Полмиллиона серверов IIS попали под атаку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/23768/" target="_blank">PayPal заблокирует «опасные» браузеры, в том числе Safari и старые IE</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/23722/" target="_blank">Турция обогнала Китай и замкнула спамерский пьедестал</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/31502/" target="_blank">Десять способов уничтожения интернета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/22849/" target="_blank">Вирусы переселяются на USB-флэшки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/22461/" target="_blank">MacBook Air взломали за две минуты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/22116/" target="_blank">Легальный троянец уже у вас на борту</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/22077/" target="_blank">ФБР заманивало маньяков на сайт-фальшивку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/21369/" target="_blank">Google открывает то, что скрыто</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/21321/" target="_blank">Мошенничество через ICQ — будьте бдительны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20662/" target="_blank">Взломать криптозащиту GSM теперь можно за тысячу долларов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20654/" target="_blank">Шифрованные диски взломали через холодную перезагрузку</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20633/" target="_blank">Уязвимость в Firefox позволяет передать личную информацию на удаленный компьютер</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/282602/" target="_blank">(Почему) Почта Mail.Ru включает строгий DMARC</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/282546/" target="_blank">Intel ME. Как избежать восстания машин?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/282503/" target="_blank">PowerWare или PoshCoder? Сравнение и дешифрование</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/282489/" target="_blank">Хакеры и биржи: К каким последствиям могут приводить атаки на финансовые компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pechkin/blog/282455/" target="_blank">Почему эксперты по безопасности предпочитают устаревшие почтовые клиенты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282343/" target="_blank">Мир готов к end-to-end шифрованию?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/282411/" target="_blank">Аппаратные технологии безопасности Intel: новое слово в защите биометрических приложений. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/282375/" target="_blank">Антиспам в Mail.Ru: как машине распознать взломщика по его поведению</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payonline/blog/281060/" target="_blank">Обзор ЦБ: банкоматы все меньше интересуют мошенников</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/282373/" target="_blank">Очередной способ обхода Windows AppLocker</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20457/" target="_blank">BotSniffer: система раннего обнаружения ботов в локальной сети</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20337/" target="_blank">Guardian посчитала Касперского агентом КГБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20278/" target="_blank">Ozon.ru хранит пароли в открытом виде?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20271/" target="_blank">Уязвимость в Bittorrent протоколе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20237/" target="_blank">Конкурсный подход к взлому ОС</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/20176/" target="_blank">IBM против нечестной игры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/19912/" target="_blank">ActiveX лучше отключить навсегда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/19559/" target="_blank">Неделя безопасного Рунета</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/19146/" target="_blank">В Европе IP станут рассматривать как персональную информацию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/18906/" target="_blank">XSS-червь: кто меньше?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/18856/" target="_blank">XSS на Яндексе</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/18829/" target="_blank">США планирует открыть секретным службам доступ к любому e-mail</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/31364/" target="_blank">Почему WiFi нужно держать открытым</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/18387/" target="_blank">Боинг 787 уязвим для хакерских атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/18318/" target="_blank">Онлайн Банкинг</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/17316/" target="_blank">Человеческий фактор снова на коне</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/17139/" target="_blank">Радиоснифер клавиатуры</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/17023/" target="_blank">Новый тренд в фишинге — адреса становятся короче</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/17013/" target="_blank">В Microsoft выделили «военную комнату» для чрезвычайных ситуаций</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/17005/" target="_blank">Защита от мошеннических сайтов — забота самих пользователей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16989/" target="_blank">Хакеры научились воровать деньги в Second Life</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16688/" target="_blank">Наглядная демонстрация перехвата VoIP-звонков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16602/" target="_blank">Потеряны личные данные 25 млн. британцев</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16597/" target="_blank">Немецкая полиция не смогла прослушать Skype, просит разрешения на трояны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16325/" target="_blank">Половина пользователей Британии «коммуниздит» беспроводной доступ к Сети у соседей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/35156/" target="_blank">Пользовались ли вы без разрешения чужими WiFi-сетями?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16287/" target="_blank">IT-консультант, взломавший российское посольство, допрошен полицией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16203/" target="_blank">Разведка США: приватность не значит анонимность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/16037/" target="_blank">Черные ходы Касперского 6/7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/15584/" target="_blank">Графические пароли вместо обычных</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/15474/" target="_blank">Будьте бдительны — Фишеры воруют Яндекс.Деньги</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/15429/" target="_blank">«Элкомсофт» научился ломать пароли видеокартой GeForce</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/14681/" target="_blank">Кибервойну в Эстонии устроила хакерская группировка «Желатин»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/14048/" target="_blank">Система Windows начала обновляться без разрешения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/31229/" target="_blank">iPhone. Находим уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/13369/" target="_blank">Хостинг гаджетов Google облегчит жизнь фишерам?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/13253/" target="_blank">Серверы Ubuntu взломаны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12894/" target="_blank">В сервисах Веб 2.0 хакеры нашли «фундаментальную уязвимость»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12734/" target="_blank">Начались «открытые» брифинги Black Hat</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12691/" target="_blank">Нанятые хакеры взломали систему электронного голосования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12507/" target="_blank">Программисты из Dream Coders Team рассказывают о создании MPack</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12317/" target="_blank">В Yahoo Messenger и Trillian обнаружены критические ошибки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12310/" target="_blank">Тест McAfee: можете ли Вы распознать фальшивые сайты?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12287/" target="_blank">Мошенники взломали банкомат при помощи стандартного пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12092/" target="_blank">Мошенники используют ажиотаж вокруг iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/12041/" target="_blank">Новый спамерский троянец обходит CAPTCHA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/11975/" target="_blank">Открылась площадка для торговли эксплоитами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/11842/" target="_blank">Владельцы ботнетов Srizbi и Storm Worm развязали войну</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/11763/" target="_blank">Полицейские-хакеры получили срок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/11385/" target="_blank">Буш и Ильвес поговорили о кибератаках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/11192/" target="_blank">Хакеры атаковали почтовый сервер Пентагона: подробности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/11094/" target="_blank">«Мисс Америка» пропагандирует сетевую безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/31117/" target="_blank">Беспроводная сеть — беззаботный веб-серфинг?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/10977/" target="_blank">Насколько MS SQL Server безопаснее, чем Oracle</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/35022/" target="_blank">Используете ли вы PGP (GPG)?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/10932/" target="_blank">В Амстердаме задержана самая большая интернет-банда</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/34993/" target="_blank">С каким программным win-фаерволом хабрахабрим?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/31091/" target="_blank">Скриншоты Outpost Firewall 2008 для Vista</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/9594/" target="_blank">Эксплоит на rbc.ru</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/9566/" target="_blank">Microsoft IIS — самый вредоносный веб-сервер</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/9213/" target="_blank">Хакеры заинтересовались расширениями Firefox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/9045/" target="_blank">Перегибы на местах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/8955/" target="_blank">Выигрышная модель безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/8753/" target="_blank">Пользователи Firefox относятся к безопасности серьёзнее, нежели пользователи других браузеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/8449/" target="_blank">Каждая десятая страница заражена троянами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/8202/" target="_blank">В институте Фраунгофера нашли способ прочитать документы после шреддера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7852/" target="_blank">Русские хакеры атакуют эстонские сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7501/" target="_blank">В Белоруссии насчитали 1300 киберпреступников</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7251/" target="_blank">Спамеры и хакеры начали эксплуатировать мем “Virginia Tech”</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7193/" target="_blank">Филиппины дразнят хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7122/" target="_blank">Через Google Calendar утекает корпоративная информация</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7110/" target="_blank">Двух англичан арестовали за «воровство WiFi»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/7043/" target="_blank">Cisco «латает дыры» в своём беспроводном оборудовании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/6790/" target="_blank">Мониторинг емейла и телефона нарушает европейские законы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/6697/" target="_blank">На рынке ботнетов лидерство захватили Sdbot и Gaobot</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30973/" target="_blank">Самые опасные доменные зоны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30968/" target="_blank">Год тюрьмы за логическую бомбу на американских подлодках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/6376/" target="_blank">Информацию о системе ПРО потеряли вместе с порно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/6345/" target="_blank">Братья Кумары взломали загрузчик Windows Vista</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5893/" target="_blank">Хакерские гаджеты на конференции ShmooCon</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5798/" target="_blank">Интернет-преступники объединяются для усиления онлайн-атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5748/" target="_blank">Каролинские краски: покрасил и забыл… о Wi-Fi и сотовой связи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5506/" target="_blank">Личная информация американцев стоит копейки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5470/" target="_blank">Полиция будет следить за пользователями через фото- и видеосайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5351/" target="_blank">SCO поможет бороться с порнографией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5269/" target="_blank">Файлообменные сети вредят детям и национальной безопасности США</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5216/" target="_blank">Gartner: ИТ-департаменты не справляются с утечками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5213/" target="_blank">DDOS-атака на рутовые DNS-серверы оказалась рекламной акцией</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/30925/" target="_blank">Наш хрупкий компьютеризированный мир.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5173/" target="_blank">Live OneCare виноват в исчезновении почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/5138/" target="_blank">Китайские военные беспокоятся об информационных утечках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3929/" target="_blank">Создан новый универсальный сниффер Ferret</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3901/" target="_blank">Критические размышления о технологии OpenID.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3858/" target="_blank">В марте проходит «Месяц багов PHP»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3802/" target="_blank">Парольная защита веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3801/" target="_blank">Когда в интернете люди начнут отвечать за свои действия?!</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3661/" target="_blank">В США начинают борьбу с кибер-издевательствами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3492/" target="_blank">Американский ВМФ боится китайских хакеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3480/" target="_blank">За DDoS-атаки в Швеции будут давать реальные сроки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3441/" target="_blank">Курильщики подрывают информационную безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/281803/" target="_blank">IaaS-дайджест: 30 материалов по теме ИБ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/282349/" target="_blank">Обнаружение DGA-доменов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282339/" target="_blank">«Have I been pwned» получил первый «самостоятельный запрос»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282087/" target="_blank">Исследуем «Ревизор» Роскомнадзора</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/282247/" target="_blank">Security Week 16: взлом мыши с 225 метров, детектор криптолокеров в Mac OS X, миллион долларов за взлом iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/282209/" target="_blank">Истории участников PHDays VI: как Мокси Марлинспайк победил ФБР, а Джон Бамбенек вычислил хакера № 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/282179/" target="_blank">Как я взломал Facebook и обнаружил чужой бэкдор</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/281763/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 27. «Web War One»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/282165/" target="_blank">Объявлены результаты отбора на секцию Young School</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/282029/" target="_blank">Статистика появления правил IDS/IPS Suricata для новых угроз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3339/" target="_blank">Оцени плиз мой новый сайт — www.counter-pr.info</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3236/" target="_blank">Китай создал крупнейшую онлайновую базу идентификаторов граждан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3222/" target="_blank">Зачем Skype читает BIOS?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3152/" target="_blank">В годовом бюджете США на IT выделено $65,5 млрд.</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3117/" target="_blank">Microsoft выпускает внеочередное обновление к IE7</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3042/" target="_blank">Билл Гейтс предлагает всем отказаться от паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3033/" target="_blank">Apache vs IIS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/3002/" target="_blank">Немецким полицейским запретили устанавливать шпионское ПО на компьютеры подозреваемых</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/2932/" target="_blank">Создателю вируса для MySpace запретили пользоваться интернетом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/2879/" target="_blank">«Яндекс.Лента» показала пароли ЖЖ-юзеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/2836/" target="_blank">Брюс Шнайер пишет книгу о мозге</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/2765/" target="_blank">Владельцам ботнетов дали слишком малые сроки</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/2674/" target="_blank">В Microsoft Word 2000 обнаружена «экстремально критическая» дыра</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/1048/" target="_blank">Google Hacking Database</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/1019/" target="_blank">RAdmin. Знаете ли вы что…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/1017/" target="_blank">Google Code Search проиндексировал много php-скриптов… вместе с паролями…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/380/" target="_blank">Зёрна от плевел…</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/341/" target="_blank">И опять о Spamhous</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/329/" target="_blank">Антивирус — что в имени тебе моём</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282145/" target="_blank">Как понадеяться на МЧС и сгинуть в лесах Карелии — вредные советы от опытного туриста</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/281749/" target="_blank">Test lab v.9 — обратный отсчет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/282121/" target="_blank">Новый шифровальщик CryptoBit распространяется через наборы эксплойтов, поражающие браузер</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/360totalsecurity/blog/282047/" target="_blank">Эволюция вирусов: от студенческих забав до нарушения работы ядерной программы Ирана</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281937/" target="_blank">Стандарт управления правами доступа к корпоративным файловым информационным ресурсам</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/281989/" target="_blank">Аппаратные технологии безопасности Intel: новое слово в защите биометрических приложений. Часть первая</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/282005/" target="_blank">Как стать IT-принцессой</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/281985/" target="_blank">За год Google проанализировал 760 тыс. взломов сайтов и анонсировал новый инструмент оповещения веб-мастеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hosting-cafe/blog/281943/" target="_blank">7 онлайн сканеров для поиска открытых портов на сервере</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281877/" target="_blank">Решение давно существующих проблем безопасности BLE-маячков. Eddystone-EID. Eddystone GATT service и Beacon Tools</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317720/" target="_blank">Экзотичные заголовки HTTP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/317422/" target="_blank">CTFzone write-ups — Deeper into the WEB</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/317668/" target="_blank">Виртуальные ключи к реальному миру</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/317644/" target="_blank">Трояны-вымогатели — security-тема года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317630/" target="_blank">Я отказался от PGP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/317322/" target="_blank">Пентест в Global Data Security — прохождение 10-й лаборатории Pentestit</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/spbifmo/blog/317454/" target="_blank">Как защитить умный дом: Решение от команды Университета ИТМО</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/solarsecurity/blog/317002/" target="_blank">Пишем настоящий Pointer Analysis для LLVM. Часть 1: Введение или первое свидание с миром анализа программ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316086/" target="_blank">Создание и тестирование Firewall в Linux, Часть 2.1. Введение во вторую часть. Смотрим на сеть и протоколы. Wireshark</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/317420/" target="_blank">Роутеры NetGear подвержены серьезной уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281849/" target="_blank">Открытый Server-status в Электронном правительстве Казахстана или как получить базу данных граждан</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/281793/" target="_blank">Как внедряется система безопасной печати на ближайшее к пользователю устройство (follow-me printing)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/281743/" target="_blank">Хакер рассказал о компрометации Hacking Team</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/281729/" target="_blank">Security Week 15: Badlock не впечатлил, больше криптолокеров, еще одна уязвимость в iMessage</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/281619/" target="_blank">Интернет вещей (IoT) – вызовы новой реальности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/281627/" target="_blank">Приглашаем на семинар RISSPA 20 апреля</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/Voximplant/blog/281593/" target="_blank">v3.14.1592-beta2: все, что вы хотели знать о семантическом версионировании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/281573/" target="_blank">Хакеры продали ФБР секрет взлома iPhone</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jugru/blog/281551/" target="_blank">ТОП-5 докладов с конференции по мобильной разработке Mobius 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281569/" target="_blank">Победитель Password Hashing Competition Argon2 или еще раз о медленном хэшировании</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/281112/" target="_blank">Киберконтрразведка. Как Palantir может «сноуденов» ловить</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/281463/" target="_blank">BYOD — удобство против безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/281481/" target="_blank">Microsoft добавила в Windows 10 очередную функцию защиты от эксплойтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281374/" target="_blank">Стандартная библиотека Visual Studio 2015 и телеметрия</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/279717/" target="_blank">Экспресс-анализ вредоносных файлов в учебных целях</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/281445/" target="_blank">Кто потерял ключи: по следам SSH</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/281439/" target="_blank">Новые конкурсы на PHDays VI: ломаем ГЭС и «умный» дом</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281438/" target="_blank">Платежная EMV-карта. Механизмы обеспечения безопасности платежа</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/281436/" target="_blank">Разработчики из Google предложили консорциуму WWW черновик WebUSB — протокола для работы USB-устройств с веб-страницами</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281284/" target="_blank">Современный троянский конь: история одного расследования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281256/" target="_blank">eToken жил, eToken жив, eToken будет жить</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/281250/" target="_blank">Security Week 14: опасная уязвимость в Adobe Flash, WhatsApp включает шифрование, Пентагон платит за баги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/360totalsecurity/blog/281076/" target="_blank">Компьютер, не болей — чек-лист проверки уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281164/" target="_blank">Сбор логов межсетевого экрана Checkpoint (OPSEC LEA)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/281150/" target="_blank">Критическая уязвимость iOS 9 позволяет обходить экран блокировки c помощью голосового помощника Siri</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/281126/" target="_blank">Анатомия взлома: Sony</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/280930/" target="_blank">Palantir: как обнаружить ботнет</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/281078/" target="_blank">Онлайн-конкурсы на PHDays: битва за инвайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/281056/" target="_blank">АРСИЭНТЕК запускает третью версию auth.as:token для iOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dellemc/blog/280962/" target="_blank">Аттестация и сертификация: зачем это нужно?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/281014/" target="_blank">Мессенджер WhatsApp обзавелся полноценным end-to-end шифрованием по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280910/" target="_blank">Уязвимости в MyChat от NetworkSoftwareSolutions (устранённые и нет)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280896/" target="_blank">В сеть утекли персональные данные 50 миллионов граждан Турции</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/regru/blog/280878/" target="_blank">Цифровой сертификат безопасности: для чего это нужно?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/280832/" target="_blank">Критическая уязвимость в антивирусе TrendMicro позволяет осуществлять удаленное выполнение кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/280792/" target="_blank">Дельта-синхронизация крипто-дисков</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nixsolutions/blog/280706/" target="_blank">Чёрные списки: Киберзащита в эру продвинутых устойчивых угроз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280796/" target="_blank">WPS Pixie Dust Attack — Взлом Wi-Fi сети за 5 минут. Описание уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/280776/" target="_blank">IBM работает над усилением информационной защиты «подключенных» автомобилей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280768/" target="_blank">StartCOM: Certificate Transparency, бесплатные* EV SSL сертификаты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280758/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 36. «Aftermath»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/280712/" target="_blank">Защита платежной инфраструктуры банка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/280688/" target="_blank">Security Week 13: парад криптолокеров, ФБР взломала iPhone без помощи Apple, больше деталей о Badlock</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/280686/" target="_blank">Проверьте свои силы во всероссийской олимпиаде по безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/264597/" target="_blank">Forensic VS шрёдер: получение доступа к удаленным файлам</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280646/" target="_blank">Стеганография в акроконструкциях. Алгоритм DANTSOVA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280644/" target="_blank">Смотрим на высыхание краски: Как я залил игру в Steam Store безо всякого одобрения со стороны Valve</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280564/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 35. «Приговор»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/280624/" target="_blank">Стенд EAST 4 SCADA: как устроить аварию на железной дороге</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/230201/" target="_blank">Как заблокировать IP адреса через ufw</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/280582/" target="_blank">Регистрация на вебинар «Как гарантированно и просто защитить предприятие от шифровальщиков и скрытых угроз»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/280556/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 33. «Стратегия выхода»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/280200/" target="_blank">Направленный фишинг – современная угроза безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280516/" target="_blank">Небольшое погружение внутрь взломанного сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280498/" target="_blank">Как накрутить счетчик Google Analytics или Google ненавидит Казахстан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280460/" target="_blank">Опять про IDS или ELK для suricata</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/280466/" target="_blank">PowerWare новый вымогатель использующий PowerShell</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/yandex/blog/280380/" target="_blank">Решаем проблему перехвата и подмены DNS-запросов. DNSCrypt в Яндекс.Браузере</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hosting-cafe/blog/280442/" target="_blank">10 онлайн-инструментов для проверки SSL, TLS и последних уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/280436/" target="_blank">ИБ-стартап Palantir поможет инвестбанку Credit Suisse создать систему для выявления недобросовестных трейдеров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/280434/" target="_blank">Palantir и отмывание денег</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280364/" target="_blank">Эксплоит для уязвимости в Cisco UCS Manager: так ли страшен чёрт?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/280348/" target="_blank">Полиция против мафии или занимательная статистика online-этапа NeoQUEST-2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280236/" target="_blank">Делаем свой friGate с анонимностью и без рекламы</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/280390/" target="_blank">SaaS-решения для защиты любых устройств в любом месте: почему это проще и дешевле + пример внедрения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/280332/" target="_blank">Device Guard в Windows 10. Политика целостности кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/acronis/blog/280316/" target="_blank">Утекай… или несерьёзный пост о серьёзных вещах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/280173/" target="_blank">Security Week 12: ФБР взломает айфон без помощи Apple, криптодыра в iMessage, шифровальщики в больнице</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280149/" target="_blank">Документы по защите персональных данных. Боремся с халявщиками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280139/" target="_blank">Сайт компании EC Council заражал посетителей вымогательским ПО TeslaCrypt</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/280135/" target="_blank">Комплексная инфобезопасность: блиц-обзор линейки Fortinet</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280131/" target="_blank">Аудит СКЗИ и криптоключей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280097/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 32. «The Mall»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/280095/" target="_blank">Эмуляция и перехват SIM-команд через SIM Toolkit на Android 5.1 и ниже (CVE-2015-3843)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280065/" target="_blank">Fbi Detected: Как я обнаружил агентов ФБР</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/280025/" target="_blank">Конкурс CityF: битва между хакерами и безопасниками</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/280011/" target="_blank">Alipay — One Click Checkout: стоит ли нам беспокоиться?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/360totalsecurity/blog/280003/" target="_blank">Обзор антивируса 360 Total Security</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/279983/" target="_blank">IBM поможет ликвидировать последствия кибератак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/279931/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 31. «Суд»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/279787/" target="_blank">Основные угрозы безопасности сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/279863/" target="_blank">Название нового домена Active Directory</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/279215/" target="_blank">Изучаем дерево исходников Windows 10: от телеметрии до open source</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/279791/" target="_blank">Обходим антивирус при помощи десяти строк кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibs/blog/279767/" target="_blank">Вебинар «Соответствие Parallels VDI требованиям регуляторов по информационной безопасности»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/279051/" target="_blank">Решето под названием Adobe Flash</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/279749/" target="_blank">Исследование: Считавшаяся «неуязвимой» память DDR4 подвержена уязвимости Rowhammer</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/279699/" target="_blank">Security-ресерчеры продемонстрировали полнофункциональный эксплойт для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/279661/" target="_blank">woSign продолжение китайской халявы (хоть и не такой большой как раньше)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/279629/" target="_blank">Security Week 11: трояны на iOS без джейлбрейка, утечка в American Express, кража учеток Steam</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/279539/" target="_blank">Популярный плагин для WordPress содержит в себе бэкдор</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/279503/" target="_blank">Критические уязвимости DNS-сервера BIND позволяют удаленно отключать его и проводить DoS-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/279497/" target="_blank">Pwn2Own 2016: первые итоги</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/279483/" target="_blank">Критические уязвимости в клиенте и серверной части Git позволяют осуществлять удаленное выполнение кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/279187/" target="_blank">Ixia выпустила интеллектуальный network packet broker — Vision ONE</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/279405/" target="_blank">Регистрация на вебинар «Легкая облачная защита корпоративной сети с низкой полной стоимостью владения»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/278283/" target="_blank">Как прервать непрерывную интеграцию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/beget/blog/278613/" target="_blank">Juniper MX + IX + SynFlood</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/latera/blog/279339/" target="_blank">Универсальный инструмент для установки бэкдоров: Что не так с системными обновлениями</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/badoo/blog/279325/" target="_blank">Bounty-программа в Badoo</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317406/" target="_blank">Экспорт ключа SignalCom в OpenSSL</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317336/" target="_blank">Записки с M*CTF</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317306/" target="_blank">Взлом «админки» роутера</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/317272/" target="_blank">Security Week 49: Google фаззит опенсорс, Android-троян крадет учетные записи, Microsoft чинит старый баг</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317242/" target="_blank">Сервис такси разыгрывает базу контактов клиентов и водителей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317240/" target="_blank">«Ростелеком» отчитался об отражении атаки «интернета вещей» на крупнейшие российские банки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/317226/" target="_blank">С чего начинается ботнет: опасный бэкдор найден в IP-камерах Sony</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/inoventica/blog/317152/" target="_blank">В приложении AirDroid была найдена критическая уязвимость, которая позволяет проводить MitM-атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/jugru/blog/317142/" target="_blank">[СПб, Анонс] Встреча CodeFreeze с Александром Чепурным про блокчейн для разработчиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/317066/" target="_blank">Психология на службе информационной безопасности. Склонность к преступлению</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/279219/" target="_blank">Риски информационной безопасности веб-приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/279315/" target="_blank">Курьезный случай с root-доступом к mysql</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/277977/" target="_blank">IaaS-провайдер и проблемы безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/279113/" target="_blank">Наблюдение об интернационализованных доменных именах и букве K</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/279073/" target="_blank">Security Week 10: вымогатель для OS X, обход пасскода iPhone, уязвимость в Facebook и польза bug bounty</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/279031/" target="_blank">RetroShare — инструмент для приватного общения и обмена данными</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/278955/" target="_blank">Ошибка в микрокоде процессоров AMD позволяет пользователям виртуальных машин получать доступ к хост-системе гипервизора</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/278949/" target="_blank">Исследования Spiceworks: инсайдерские угрозы будут самой большой проблемой информационной безопасности в 2016 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278933/" target="_blank">Бюллетень MS16-023: Когда критическое обновление безопасности Windows затрагивает не только безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/277135/" target="_blank">Фреймворк Fortinet для защиты от продвинутых угроз</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278865/" target="_blank">Центр сертификации Let's Encrypt выдал миллион бесплатных сертификатов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/278813/" target="_blank">Регистрация на вебинар «Использование SaaS-решений Panda для защиты и управления ИТ-активами предприятия»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278809/" target="_blank">OSSIM — пользуемся комплексной Open Source системой управления безопасностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278771/" target="_blank">Успехи импортозамещения или занимательная статистика на основе Реестра федеральных государственных информационных систем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/278725/" target="_blank">Для Apple OS X обнаружен первый вымогатель</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278615/" target="_blank">ZeroNet — По настоящему распределенная сеть — год спустя</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/278539/" target="_blank">Готовимся к экзамену CISA. Практики Business Continuity</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/278569/" target="_blank">Критическая уязвимость коммутаторов Cisco Nexus 3000 Series и 3500 Platform позволяет получить к ним удаленный доступ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/278555/" target="_blank">Security Week 09: атака DROWN, HackingTeam возвращается, впечатления c RSA Conference 2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/278549/" target="_blank">Безопасность прошивок на примере подсистемы Intel Management Engine</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hpe/blog/278465/" target="_blank">Защита на всех стадиях кибератак</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/278231/" target="_blank">Практическая подготовка в области ИБ: Корпоративные лаборатории 2016, перезагрузка</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/278361/" target="_blank">Готовимся к экзамену CISA. Польза Business Continuity</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/278335/" target="_blank">Уязвимость DROWN в SSLv2 позволяет дешифровать TLS-трафик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278305/" target="_blank">«Атака на Wi-Fi» в аэропорту Барселоны (MWC 2016) – много шума из ничего</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/278289/" target="_blank">Как обезопасить процесс онлайн-покупок</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278291/" target="_blank">Эрик Кровавый Топор (Крис Гогганс): «Information wants to be free»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278271/" target="_blank">Прячем фактическое место, где стоит сервер компании: практические методы и вопрос</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/264555/" target="_blank">Получаем доступ к облаку XenServer через доступ к одной виртуальной машине</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hosting-cafe/blog/278255/" target="_blank">Сравнение SSL сертификатов с верификацией домена</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/278221/" target="_blank">Хакер опубликовал данные SIM-карт и счетов 3 млн абонентов крупного африканского оператора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278051/" target="_blank">Патчим gnupg или пара RSA-32768 за 106 минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/278031/" target="_blank">Проблемы разграничения доступа на основе списка доступа в ECM системах (часть 2)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/278025/" target="_blank">Security Week 08: кража мышей через свисток, операция «Блокбастер», Linux Mint с бэкдором</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/277901/" target="_blank">Немного о 2FA: Двухфакторная аутентификация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/277959/" target="_blank">Стартует прием заявок на секцию PHDays VI Young School</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277939/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 30. «Максик»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/277477/" target="_blank">Проблема вредоносного ПО для PoS – терминалов в гостиничной индустрии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/277793/" target="_blank">Rogue AP — фальшивые точки доступа</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277811/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 20. «The Starlight Room»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/uteam/blog/277751/" target="_blank">Как наши технари в армии служили</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277723/" target="_blank">Ассиметричные решения. Информационная безопасность ICS в энергетике</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/277713/" target="_blank">Готовимся к экзамену CISA. Определения Business Continuity</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277649/" target="_blank">50 оттенков паранойи или как хранить пароли не сохраняя</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/277571/" target="_blank">Security Week 07: Apple против ФБР, глобальная уязвимость в glibc, криптолокеры и медицина</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277591/" target="_blank">Что несут свежие изменения в 63-ФЗ «об электронной подписи»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/277575/" target="_blank">XSS-уязвимость нулевого дня позволяет похищать учетные данные пользователей Cisco ASA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/neobit/blog/277247/" target="_blank">Открыта регистрация на NeoQUEST-2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/277487/" target="_blank">Мурат Уртембаев — первый советский хакер</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/277467/" target="_blank">Новый криптовымогатель «Locky»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276831/" target="_blank">Shodan собирал IPv6-адреса NTP-клиентов и сканировал их в ответ</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277405/" target="_blank">Реверс протокола СКУД RS485 от Perco. Берегите линии своих СКУД от вторжения</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/277411/" target="_blank">Есть идея: защита данных на Android с помощью eCryptfs</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/277381/" target="_blank">Первые доклады PHDays VI: как ломают транспортные карты, ставят хакерские «мышеловки» и продают уязвимости за 100 000 $</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/277383/" target="_blank">Критическая уязвимость библиотеки glibc позволяет осуществлять удаленное выполнение кода</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/277139/" target="_blank">Критическая уязвимость Cisco ASA: В чем проблема, и как защититься</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/277225/" target="_blank">Как контролировать безопасность облачных сервисов с новым Azure Security Center</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277279/" target="_blank">Безопасность средств безопасности: СКУД</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/latera/blog/277233/" target="_blank">Как графовые базы данных помогают бороться с мошенничеством в e-commerce</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277173/" target="_blank">Критическая уязвимость в Cisco ASA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/277091/" target="_blank">Security Week 06: банковский грабеж на потоке, взлом энергосетей, Посейдон/Амебей/Кианохет</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277111/" target="_blank">Проблемы разграничения доступа на основе списка доступа в ECM системах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/277047/" target="_blank">Разработчики приложений не заботятся о безопастности пользователей, что приводит к утечке данных (с примерами java-кода)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276983/" target="_blank">Уязвимость ВКонтакте: доступ к превью фотографий из диалогов и скрытых альбомов любого пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276967/" target="_blank">Аппаратный менеджер паролей или как перестать вводить пароли и начать жить</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/276921/" target="_blank">Лучшие практики защиты e-commerce сайтов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/276949/" target="_blank">Расшифровка обновлений одного популярного сотового модема: метод Дмитрия Склярова</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276915/" target="_blank">Обход DPI провайдера на роутере с OpenWrt, используя только busybox</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276565/" target="_blank">Вы не того параноите！ (пред-пятничный пост)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276865/" target="_blank">Привязка дополнительных одноразовых паролей к окну входа Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276859/" target="_blank">Приёмный день в МИД РФ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/276811/" target="_blank">Антивирусы снова под прицелом: в Malwarebytes обнаружены критические уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276787/" target="_blank">Закладка в OS X, продлевающая работу от батарейки для избранных приложений</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276777/" target="_blank">Viber для Windows и история сообщений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pechkin/blog/276761/" target="_blank">Email и безопасность: Можно ли защитить почтовую переписку</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/276751/" target="_blank">IBM усилит борьбу с кибермошенничеством с помощью технологий IRIS Analytics</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276739/" target="_blank">Почему Яндекс отказался от подтверждения сайтов txt-файлом</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/276697/" target="_blank">Хакерская ёлка, или Как провести Детский День в недетской компании</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276665/" target="_blank">Так ли безопасен Tox, как его малюют?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/276629/" target="_blank">Security Week 05: непростые числа в socat, Virustotal проверяет BIOS на закладки, тайная жизнь WiFi модулей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276645/" target="_blank">Улучшение образования в ВУЗах по ИБ/ИТ</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/innopolis_university/blog/276603/" target="_blank">Евгений Касперский рассказал о киберпреступлениях в Университете Иннополис [видео]</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276619/" target="_blank">Анализ Android малвари-матрешки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/varonis/blog/276561/" target="_blank">Автоматизированный доступ к SharePoint. Как облегчить работу администратора и установить контроль за раздачей прав</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/itinvest/blog/276545/" target="_blank">ФБР: Трейдеры хедж-фондов делились инсайдерской информацией в игровом чате Call of Duty</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276535/" target="_blank">Как устроены пакеты для проверки качества случайных последовательностей?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276503/" target="_blank">Как поймать вирус в запароленом архиве</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/276477/" target="_blank">Лучшие дистрибутивы для проведения тестирования на проникновение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/276451/" target="_blank">Иван Григоров: «Для топовых багхантеров $25К в месяц — не проблема»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/276459/" target="_blank">Взломать PayPal за 73 секунды</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/275347/" target="_blank">Шифрование машины Purple</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/276415/" target="_blank">Google выпустила обновление для Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/276293/" target="_blank">ИТ-инфраструктура, ИБ и телеком: Мероприятия в 2016-м</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/276345/" target="_blank">Безопасность прошивок на примере промышленных коммутаторов Hirschmann и Phoenix Contact</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/276349/" target="_blank">Иностранные хакеры взломали базу данных крупнейшего профсоюза полиции США</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/276301/" target="_blank">27% всех зафиксированных вредоносных программ появились в 2015 году</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276269/" target="_blank">Вышел Tor Browser 5.5</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276257/" target="_blank">«Энергетический» троян BlackEnergy внедряется через уязвимость в Microsoft Office 2013</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/latera/blog/276219/" target="_blank">Исследователи нашли множество критических уязвимостей в платежных протоколах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276213/" target="_blank">В OpenSSL ликвидирована опасная уязвимость, позволявшая злоумышленнику расшифровывать HTTPS трафик</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/314734/" target="_blank">Уязвимость в платёжном сервисе Платинум Банка (Украина)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/solarsecurity/blog/316980/" target="_blank">Формула доверия</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/316960/" target="_blank">Google исправила уязвимости в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/316952/" target="_blank">Рихард Цвиненберг (AMTSO): “Киберпреступность не имеет границ, но мы застряли с национальными законами…»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/316846/" target="_blank">CTFzone write-ups — MISC it all up</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316562/" target="_blank">Смотрим часть чужого избранного ВКонтакте</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/316750/" target="_blank">Security Week 48: локер с техподдержкой, мутации Mirai, уязвимость в Firefox и Tor Browser</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316736/" target="_blank">Сказание о Клеопатре и о российской криптографии (Продолжение)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/316648/" target="_blank">Монополия на DDoS: Два хакера создали ботнет из 1 млн устройств на базе Mirai</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/316582/" target="_blank">CTFzone write-ups – Shall I reverse it too?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276211/" target="_blank">Исследование распространенной малвари под Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/276129/" target="_blank">Security Week 04: дыра в WiFi софте Lenovo, конф-колл-бэкдор, Amazon раздает HTTPS бесплатно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276153/" target="_blank">Сколько Google заплатила за потерянный домен google.com</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276149/" target="_blank">Взлом Kaspersky Crackme: исследование защитного механизма (Часть 1)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/275719/" target="_blank">Все что вы хотели знать про защиту от XSS в SAP</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/host-tracker/blog/276109/" target="_blank">Домены: есть ли жизнь после смерти?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276131/" target="_blank">Размещаем сайт в анонимной сети I2P (+ параноидальный режим)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276125/" target="_blank">Chrome Cleanup Tool: программа для очистки Chrome от мусора</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276123/" target="_blank">В некоторых моделях роутеров TP-LINK дефолтный пароль — это 8 последних символов MAC-адреса устройства</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276071/" target="_blank">Oracle прекращает выпуск браузерного плагина Java</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276057/" target="_blank">«Почему всем можно, а мне нельзя?» или реверсим API и получаем данные с eToken</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/276009/" target="_blank">В ПО Lenovo был зашит неизменяемый пароль 12345678</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275999/" target="_blank">Обработка временной или постоянной замены пароля Аутентификации 1С: Предприятия 8.2-8.3</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275987/" target="_blank">Сайт CrashSafari.com отправляет айфоны в перезагрузку</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/e-Legion/blog/275505/" target="_blank">А вы задумывались о безопасности… автомобиля?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/275853/" target="_blank">Что не так с безопасностью в Интернете Вещей: Как Shodan стал «поисковиком спящих детей»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275835/" target="_blank">Правительство Великобритании продвигает криптопротокол для VoIP с бэкдором</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/275529/" target="_blank">Шифровальная машина NEMA</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275819/" target="_blank">Недокументированные возможности оптического терминала ZTE ZXHN F660 от МГТС</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275811/" target="_blank">Как я писал политику безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275695/" target="_blank">Skype начал скрывать IP адреса по умолчанию</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/275693/" target="_blank">Security Week 03 или неделя патчей: Linux, OpenSSH, Cisco, Yahoo Mail, Apple</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/plesk/blog/275625/" target="_blank">Research Day</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275649/" target="_blank">Project Abacus от Google: биометрия вместо пароля</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275647/" target="_blank">Как пользоваться i2pd: исчерпывающая инструкция под MS Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275643/" target="_blank">Как в первый раз запустить i2pd: инструкция под Debian/Ubuntu</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/275637/" target="_blank">Во FreeBSD обнаружены критически опасные уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275591/" target="_blank">Взгляд внутрь кибермошеннических колл-центров</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/275525/" target="_blank">Корпоративные лаборатории 2016 — практическая подготовка в области информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275549/" target="_blank">Белый список с брандмауэром Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/274045/" target="_blank">Защита утилиты шифрования Scrypt с помощью Intel® Tamper Protection Toolkit</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275543/" target="_blank">В ядре Linux обнаружили уязвимость, позволяющую получить права суперпользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275443/" target="_blank">Пользователи LastPass уязвимы для простейшей фишинговой атаки в Chrome</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275403/" target="_blank">Небезопасный способ авторизации в GitLab CE с использованием LDAP аккаунтов и метод устранения уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/innopolis_university/blog/275161/" target="_blank">Взлом банковских карт, автомобилей и мессенджеров и др. особенности обучения на лучшей магистратуре Нидерландов</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/payonline/blog/275101/" target="_blank">9 секретов онлайн-платежей. Часть 1: настройка 3-D Secure</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/274999/" target="_blank">Шифрование фотографий в Google Диск</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275289/" target="_blank">Работа инфраструктуры Tor: подробная визуализация в проекте TorFlow</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/275275/" target="_blank">Microsoft заставит перейти на Windows 10 владельцев новых микропроцессоров</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275075/" target="_blank">Атака на пользователей Linux или как собрать ботнет руками админов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275247/" target="_blank">Почти совершенная компьютерная безопасность может быть ближе, чем вы думаете</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/275185/" target="_blank">Security Week 02: уязвимые вебкамеры, продолжение истории с Juniper, Zero-Day в Silverlight и как его нашли</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/1cloud/blog/275167/" target="_blank">АНБ помогало британским спецслужбам использовать уязвимости в продуктах Juniper</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275137/" target="_blank">В клиенте OpenSSH обнаружена серьёзная уязвимость CVE-2016-0777</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/274359/" target="_blank">Кибербезопасность 2015 года</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275123/" target="_blank">Простое снятие «навороченной» защиты kraftway credo vv18</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/275035/" target="_blank">DLP система своими руками</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/275031/" target="_blank">Школьник взломал email и получил доступ к личным данным главы Национальной разведки США</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/274981/" target="_blank">Microsoft и Adobe исправили уязвимости в своих продуктах</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/274855/" target="_blank">Опасное видео: как я нашёл уязвимость в видеохостингах и не умер через 7 дней</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273895/" target="_blank">Стандарты симметричного шифрования стран СНГ на Python</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274899/" target="_blank">Уязвимость в продуктах Trend Micro позволяет любому веб-сайту выполнить произвольную команду Windows</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274749/" target="_blank">LetsEncrypt в Go</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dellemc/blog/274245/" target="_blank">GlassRAT: анализ трояна из Китая с помощью RSA Security Analytics и RSA ECAT</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/274781/" target="_blank">IBM открывает разработчикам доступ к ряду своих сервисов, способствуя борьбе с киберпреступностью</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/274703/" target="_blank">Security Week 01: Вымогатель на Javascript, $100k за баг в Adobe Flash, зашифрованное светлое будущее</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/274695/" target="_blank">Новая уязвимость в WhatsApp: волна смайликов, которые могут блокировать приложение</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274617/" target="_blank">Обезвреживаем бомбу с Radare2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274679/" target="_blank">Пойманы преступники, опустошавшие банкоматы с помощью вируса Tyupkin</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274621/" target="_blank">Инструменты для взлома, мелькавшие в сериале Mr Robot</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274595/" target="_blank">На следующей неделе Microsoft прекращает поддержку всех версий IE, кроме 11</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274561/" target="_blank">Новинка от Google. Безопасна ли аутентификация без ввода пароля?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/274559/" target="_blank">Google исправила уязвимости в Android</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274533/" target="_blank">Деанонимизация программиста возможна не только через исходный код, но и через скомпилированный бинарный файл</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274505/" target="_blank">Популярная платформа Wix подвержена утечке данных из доменной зоны</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/274501/" target="_blank">IBM открывает blockchain-лабораторию</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274457/" target="_blank">Защищаем Revel от CSRF атак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274453/" target="_blank">Black Hat USA 2015: полная история взлома того самого Jeep</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274445/" target="_blank">Kill switch для OpenVPN на основе iptables</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/274443/" target="_blank">Microsoft уведомит пользователей о state-sponsored кибератаках</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274387/" target="_blank">Новогодний голосовой хабрачат (2016)</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/274273/" target="_blank">Безопасность веб-ресурсов банков России</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274337/" target="_blank">Почему важно не выдавать пользователям простой пароль</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/273977/" target="_blank">Утрачиваемое искусство доказательства защищенности. Часть 2 из 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274329/" target="_blank">Printf Oriented Programming</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dataart/blog/274325/" target="_blank">Мобильные приложения и PA-DSS</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/274293/" target="_blank">Компания Adobe выпустила экстренный патч для исправления критических уязвимостей Flash Player</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/microsoft/blog/274269/" target="_blank">От ИИ и наук о данных до криптографии: исследователи Microsoft дают 16 предсказаний на 2016 год</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274251/" target="_blank">Сборка и настройка FreeRADIUS 3 с поддержкой SQLITE</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/274241/" target="_blank">Сканеры безопасности: автоматическая классификация уязвимостей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274243/" target="_blank">И еще раз о необходимости закрывать базы</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274235/" target="_blank">Почему я перепроверяю записанные данные, или История одного расследования</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274215/" target="_blank">«ВКонтакте» не только не платит пользователям за найденные уязвимости, но и не рассматривает их</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/274211/" target="_blank">Security Week 52-53: бэкдор у Juniper с толстым слоем криптографии, винтажная Java, гопо-bug bounty</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/infopulse/blog/274183/" target="_blank">Как я искал (и нашел) разницу в двух побайтово идентичных файлах</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274173/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 29. «One Plat and Six Classics»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274117/" target="_blank">Ботнет из тысяч взломанных роутеров Aethra использовался для атаки на Wordpress-сайты</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274105/" target="_blank">GOTPass: новая беспарольная система аутентификации пользователя</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274095/" target="_blank">Что случилось с google public dns в России?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/274053/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 28. «Carder Court»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/273919/" target="_blank">Нестандартный топ событий в сфере IT-безопасности 2015</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/plesk/blog/273827/" target="_blank">Let’s Encrypt в Plesk-панели</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273943/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 26. «What’s in Your Wallet?»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272045/" target="_blank">Немного про Яндекс Protect</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273903/" target="_blank">Microsoft начинает активную борьбу с adware типа Superfish</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273901/" target="_blank">Вливаемся в tox-сообщество или установка ноды за 5 минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/273829/" target="_blank">Google тестирует «беспарольный» вход</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273725/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 24. «Exposure»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273719/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 23. «Anglerphish»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316608/" target="_blank">Mozilla и Tor закрыли критическую уязвимость, которая активно использовалась для деанонимизации пользователей Tor</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/gemaltorussia/blog/316522/" target="_blank">Пять аспектов информационной безопасности, которые изменятся с развитием мобильных сетей пятого поколения</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316546/" target="_blank">2.5F Аутентификация</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/316548/" target="_blank">Уязвимость в управляющем софте позволяет перепрошить контроллеры Schneider Electric</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/316524/" target="_blank">Злоумышленники используют 0day уязвимость в веб-браузере Tor для кибератак</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316496/" target="_blank">Поиск Use Case'ов для SIEM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/bizone/blog/316420/" target="_blank">CTFzone write-ups – Shall I reverse it?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/316338/" target="_blank">Злоумышленники обещают пользователям бесплатные билеты авиакомпании Emirates</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316328/" target="_blank">Токены PKCS#11: сертификаты и закрытые ключи</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/316322/" target="_blank">ZeroNet — По настоящему распределенная сеть: Социальная сеть,Wiki движок (изменения за полгода)</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273703/" target="_blank">Google прекращает поддержку SHA-1 сертификатов вслед за Mozilla и Microsoft</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/273689/" target="_blank">Прогноз 2016: атаки на Android и масштабные инфекции – одни из основных угроз безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273519/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 22. «Enemies»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273657/" target="_blank">152-ФЗ. ЦОДы, базы данных и уведомления о них</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273523/" target="_blank">Еще одна «критическая» «уязвимость» «VPN» и почему Port Fail — ерунда</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/273407/" target="_blank">День рождения основателя старейшего хакерского клуба Chaos Computer Club</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/273511/" target="_blank">Пол Грэм: Слово «хакер»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273497/" target="_blank">Укрощаем UEFI SecureBoot</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273491/" target="_blank">Facebook угрожает специалисту по безопасности, взломавшему Instagram</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273489/" target="_blank">Бэкдоры в файрволах Juniper</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273477/" target="_blank">Symfony2 Voters и Doctrine Filters на страже безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pvs-studio/blog/273451/" target="_blank">Комментарий к «Как попасть на дачу президента в пять часов утра»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/273373/" target="_blank">Как сделать пароль надежным и запоминающимся</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/273437/" target="_blank">Security Week 51: Zero Day в Joomla, Twitter предупреждает, утечка базы MacKeeper</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/273423/" target="_blank">Дети и родители в Сети: история взлома сервисов VTech</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/273357/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 25. «Hostile Takeover»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/273389/" target="_blank">Критическая уязвимость в загрузчике Grub2 позволяет обходить защиту паролем</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/272787/" target="_blank">Обновление линейки Juniper SRX</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/272789/" target="_blank">Утрачиваемое искусство доказательства защищенности. Часть 1 из 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/273147/" target="_blank">Мифы о /dev/urandom</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/272285/" target="_blank">Топ 5 опасных угроз от сторонних поставщиков</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273249/" target="_blank">Как попасть на дачу президента в пять часов утра</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/273213/" target="_blank">В CMS Joomla обнаружена критическая 0-day уязвимость</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mosigra/blog/272287/" target="_blank">Какие микроатаки постоянно идут на офис: детский социнжиниринг и фишинг</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/273125/" target="_blank">DB hacking или экскурс в мир СУБД</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/273095/" target="_blank">Контентная фильтрация: зачем и как это делать</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273055/" target="_blank">Open-source реализации отечественных криптоГОСТов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/273043/" target="_blank">Об эффективности «учений» Рутрекера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272935/" target="_blank">Знакомьтесь: Хеш-стеганография. Очень медленная, но совершенно секретная</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/273001/" target="_blank">Черный пиар Telegram. Кому верить?</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272915/" target="_blank">DASH «Эволюция» анонсирована как «Социальная платёжная сеть»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/272855/" target="_blank">Security Week 50: DDoS корневых DNS-серверов, жизнь APT Sofacy, много криптографии</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/272851/" target="_blank">В антивирусе Avast обнаружены критические уязвимости</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/272831/" target="_blank">2015 – год Cryptolocker, и как кибер-преступники совершенствовали свои атаки</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/defconru/blog/272539/" target="_blank">Лаборатория тестирования на проникновение «Test lab v.8»: банк взломан</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272783/" target="_blank">Фишинговые приложения для Вконтакте на Google Play</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272703/" target="_blank">Революция WikiLeaks: дайджест злоключений</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/parallels/blog/272589/" target="_blank">Эксплуатация инъекций в Hibernate ORM</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/272591/" target="_blank">Microsoft добавил возможность отключения слежения в версиях Windows 10 для корпоративных клиентов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272187/" target="_blank">Не все cookie одинаково полезны</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/266591/" target="_blank">Как устроены дыры в безопасности: переполнение буфера</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272573/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 21. «Master Splyntr»</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272547/" target="_blank">Анонимное подключение к meterpreter/reverse_tcp через промежуточный сервер с помощью SSH-туннелей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271883/" target="_blank">Palantir 101. Что позволено знать простым смертным о второй по крутоcти частной компании в Кремниевой Долине</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/272487/" target="_blank">Сделай сам: dll hijacking под MS Office для самых маленьких</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272461/" target="_blank">Как разделить VPN трафик в MacOS</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272457/" target="_blank">Объявлено о начале приема работ на симпозиум CTCrypt'2016</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/272451/" target="_blank">Создатели программ-вымогателей и мошеннических сайтов техподдержки объединяются</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/272413/" target="_blank">Security Week 49: б/у сертификаты, кража данных из детских игрушек, Microsoft блокирует нежелательное ПО</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272385/" target="_blank">Правда Сноудена</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272253/" target="_blank">Let's Encrypt выходит в публичную бету: HTTPS всюду, каждому, отныне и навсегда бесплатно</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/272275/" target="_blank">Приглашаем докладчиков на форум PHDays VI: расскажите о своей кибервойне</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272261/" target="_blank">Вы все еще храните 404backup.zip на сервере? Я на 200ДА</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/272205/" target="_blank">10 атак на веб-приложения в действии</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272207/" target="_blank">Казахстан внедряет свой CA для прослушивания всего TLS-трафика</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/272183/" target="_blank">Cisco IOS shellcode: All-in-one</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/272175/" target="_blank">Критически опасные уязвимости в популярных 3G- и 4G-модемах или как построить Большого Брата</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/eset/blog/272147/" target="_blank">Adobe прощается с Flash</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/272127/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 19. «Carders Market»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/intel/blog/272095/" target="_blank">Корпоративное использование Android 5.0: рекомендации по безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cisco/blog/272093/" target="_blank">Сетевое оборудование под угрозой? Давайте разбираться…</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/272073/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 18. «Briefing»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/271985/" target="_blank">Ежеквартальная проверка безопасности сайта</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/smart_soft/blog/272039/" target="_blank">Настройка публичного интернет-доступа за пять минут</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/croc/blog/272015/" target="_blank">Работа параноика: планы аварийного восстановления/непрерывности, метеорит, зомби-апокалипсис, 1000 уборщиц, портал в ад</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ibm/blog/272023/" target="_blank">IBM запустила облачный сервис безопасной аутентификации Identity Mixer</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/272017/" target="_blank">SmartTV* — как создать небезопасное устройство в современном мире</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271999/" target="_blank">Успешное внедрение SIEM. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/skbkontur/blog/271909/" target="_blank">QCTF Starter: компьютерная безопасность на четверых или как мы сделали турнир для новичков в 19 городах одновременно</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271859/" target="_blank">Утечка 191 000 адресов электронной почты из резюме Авито</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/271831/" target="_blank">Программы-вымогатели на Smart TV? Можно готовиться, они идут</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/271847/" target="_blank">Security Week 48: тоска с сертификатами у Dell, бэкдор в модемах, Truecrypt возвращается</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/271785/" target="_blank">Автомобильная безопасность: какие уроки мы можем вынести из отзыва машин?</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/271825/" target="_blank">В 600 000 модемах «Arris» обнаружили бекдор в бекдоре</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/fujitsu/blog/271721/" target="_blank">Биометрия: Учёт рабочего времени + Fujitsu PalmSecure</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/token2/blog/271769/" target="_blank">WifiOTP: Удобная двухфакторная аутентификация с помощью Wi-Fi SSID</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/271597/" target="_blank">Фишинг в корпоративной среде</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/muk/blog/271577/" target="_blank">Нагрузим все: демонстрация решения ІXIA для нагрузочных тестов</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271745/" target="_blank">Успешное внедрение SIEM. Часть 1</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271717/" target="_blank">Социальная инженерия из первых рук</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271713/" target="_blank">«Будни даркнета» – видеоматериалы для тренинга по информационной безопасности</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/271681/" target="_blank">Юные хакеры 414s</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/271649/" target="_blank">Критическая уязвимость в компьютерах Dell позволяет хакерам получать доступ практически к любым данным: Как защититься</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cybersafe/blog/271639/" target="_blank">Защита почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/nixsolutions/blog/271575/" target="_blank">Улучшение сетевой безопасности с помощью Content Security Policy</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/hosting-cafe/blog/271521/" target="_blank">Чем отличаются SSL-сертификаты от Namecheap? Шифрование, проверка и доверие</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271511/" target="_blank">Superfish: возвращение</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/dsec/blog/271431/" target="_blank">ZeroNights — про прошедший hackquest и грядущий Hardware Village</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271465/" target="_blank">Матрица возможностей современных мессенджеров с упором на безопасность</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/271387/" target="_blank">Хагелин — гений научно-технической мысли</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/it-grad/blog/271455/" target="_blank">Как вести секретную переписку в мире, где за вами постоянно следят: методы Эдварда Сноудена. Часть 2</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/ua-hosting/blog/271365/" target="_blank">Вредоносное ПО для Android становится все более изощренным</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/edison/blog/270951/" target="_blank">Подпольный рынок кардеров. Перевод книги «KingPIN». Глава 17. «Pizza and Plastic»</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/panda/blog/271341/" target="_blank">Новый ежеквартальный отчет антивирусной лаборатории PandaLabs</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pentestit/blog/271123/" target="_blank">Примеры фишинговых сообщений электронной почты</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/kaspersky/blog/271295/" target="_blank">Security Week 47: {не}взломанный Tor, Gmail предупреждает о дешифровке, атака штрих-кодами</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/pt/blog/271287/" target="_blank">Разработка защищенных банковских приложений: главные проблемы и как их избежать</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/mailru/blog/271245/" target="_blank">Риски и проблемы хеширования паролей</a></li>
<li class="habr"><a href="https://habrahabr.ru/post/271259/" target="_blank">Двухфакторная аутентификация клиентов Cisco AnyConnect. FreeRadius и Google Authenticator</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cbs/blog/270795/" target="_blank">Делимся опытом. Интеграция сервисов FirePOWER на Cisco ASA</a></li>
<li class="habr"><a href="https://habrahabr.ru/company/cbs/blog/270795/" target="_blank">Делимся опытом. Интеграция сервисов FirePOWER на Cisco ASA</a></li>
</ol>
</body>
</html>
