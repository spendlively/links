<?php header('Content-Type: text/html; charset=utf-8', true); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>XAKEP</title>
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
<body><ol class="rounded"><li class="linkCls"><a href="https://xakep.ru/2017/01/18/cert-worries-about-smb-0day/" target="_blank">US-CERT рекомендует отключить SMB из-за потенциальной опасности эксплоитов Shadow Brokers</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/18/developer-backdoored-hes-own-sites/" target="_blank">Разработчик встраивал бэкдор в свои сайты и скомпрометировал 20 000 пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/17/fallible-apk-reverse/" target="_blank">В коде многих Android-приложений содержатся излишние жестко закодированные ключи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/17/samsung-smartcam-bugs/" target="_blank">Уязвимость в камерах Samsung SmartCam позволяет полностью скомпрометировать устройство</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/17/two-factor-authentication-hacking/" target="_blank">Двойное подтверждение. Изучаем двухфакторную аутентификацию Android, iOS и Windows 10 Mobile</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/16/gmail-phishing/" target="_blank">Против пользователей Gmail развернута хитроумная фишинговая кампания</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/16/limitless/" target="_blank">Студенту, написавшему кейлоггер Limitless, грозит до 10 лет тюрьмы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/13/whatsapp-retransmission-problem/" target="_blank">В WhatsApp найдена уязвимость, позволяющая читать чужие сообщения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/13/cellebrite-hacked/" target="_blank">Киберкриминалистов Cellebrite взломали, 900 Гб данных попали в руки журналистов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/13/elasticsearch-ransom/" target="_blank">Вымогатели атакуют не только плохо настроенные серверы MongoDB, но и Elasticsearch</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/13/first-patch-tuesday/" target="_blank">Microsoft и Adobe представили первые обновления в 2017 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/13/shadow-brokers-farewell/" target="_blank">Группа Shadow Brokers отчаялась продать эксплоиты АНБ и опубликовала часть бесплатно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/12/mongodb-still-under-attack/" target="_blank">Хак-группа Kraken продает скрипт для взлома плохо настроенных серверов MongoDB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/12/lawyer-answers-hacker-responsibility-howto/" target="_blank">Ответы юриста: как избежать ответственности за поиск уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/12/phpmailer-exploit/" target="_blank">Эксплуатируем критическую уязвимость в PHPMailer и фреймворках, которые его используют</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/11/st-jude-patch/" target="_blank">Кардиостимуляторы St. Jude Medical оказались уязвимы для атак, компания выпустила патч</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/11/terror-ek/" target="_blank">Специалисты обнаружили новый набор эксплоитов Terror, созданный любителем</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/11/juniper-root-uprgade/" target="_blank">Обновление для маршрутизаторов Juniper SRX опасно и открывает root-доступ к устройству</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/11/lavc-ransomware/" target="_blank">Лос-анджелесский колледж пострадал от атаки шифровальщика и выплатил $28 000 выкупа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/10/hack-iphone-pair-lock/" target="_blank">Атака на iPhone: взламываем запароленный iPhone через депонированные ключи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/10/free-ross-hacked/" target="_blank">Неизвестные пытались украсть средства, собранные для оплаты адвокатов Росса Ульбрихта</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/09/ftc-sued-d-link/" target="_blank">Федеральная торговая комиссия подала в суд на D-Link из-за небезопасности IoT-устройств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/09/mongodb-apocalypse/" target="_blank">Вымогатели стирают данные из баз MongoDB и требуют выкуп за восстановление информации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/09/macos-scam/" target="_blank">Скамеры атакуют пользователей macOS, используя черновики писем</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/30/cyanogenmod-is-dead-long-live-cyanogenmod/" target="_blank">CyanogenMod мертв, да здравствует CyanogenMod. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/29/hacking-team-galileo-sources/" target="_blank">Исследуем Galileo, шпионский софт Hacking Team для слежки за пользователями по всему миру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/28/x-tools-215/" target="_blank">Лучший хакерский софт декабря. X-TOOLS #215</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/27/exploits-215/" target="_blank">Обзор эксплоитов #215. Уязвимости Wget, aria2 и LSASS.EXE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2017/01/09/netgear-bug-bounty/" target="_blank">Netgear запускает программу bug bounty и предлагает исследователям до $15 000 за баг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/23/steam-down-worldwide/" target="_blank">Steam ушел в оффлайн во второй день глобальной зимней распродажи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/23/groupon-fraud/" target="_blank">Пользователи Groupon массово жалуются на взломы аккаунтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/23/netgear-wnr2000-flaws/" target="_blank">0-day уязвимость в роутерах NETGEAR WNR2000 позволяет захватить контроль над устройством</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/22/project-wycheproof/" target="_blank">Google выпустила опенсорсный инструментарий Project Wycheproof для поиска криптобагов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/22/cryptxxx-v3-decryptor/" target="_blank">Третья версия шифровальщика CryptXXX не устояла, ИБ-эксперты вновь создали дешифровщик</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/22/home-ip-ftw/" target="_blank">Хакер украл более 1 млн долларов со своего домашнего IP и получил пять лет тюрьмы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/22/cellebrite-for-everyone/" target="_blank">Эксперимент показал, что купить оборудование для взлома смартфонов может кто угодно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/21/panasonic-ife/" target="_blank">Исследователь взломал развлекательные системы Panasonic, используемые в самолетах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/21/alice-atm-malware/" target="_blank">Появились подробности о малвари Alice, которая заставляет банкоматы «выплевывать» деньги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/21/methbot-farm/" target="_blank">Операторы фермы «рекламных» ботов Methbot зарабатывают от 3 до 5 млн долларов в день</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/20/ethereum-forum-leak/" target="_blank">Неизвестные хакеры скомпрометировали БД форума ethereum.org</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/20/wordpress-bruteforce/" target="_blank">В декабре количество брутфорс-атак против сайтов на WordPress возросло вдвое</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/20/denuvo-refund/" target="_blank">Разработчики Denuvo уверяют, что они не возвращают деньги заказчику, если защита взломана</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/19/tale-of-three-buttons/" target="_blank">Сказ о трех кнопках. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/19/web-application-firewalls-bypasses/" target="_blank">Приручаем WAF’ы. Как искать байпасы в современных Web Application Firewalls и что с ними делать</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/19/bayrob-arrested/" target="_blank">В Румынии арестованы авторы вредоноса Bayrob, продававшие несуществующие автомобили</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/16/wp-plugins-bugs/" target="_blank">Более 8800 плагинов для WordPress содержат хотя бы одну уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/16/gsteamer-flaws/" target="_blank">Популярные дистрибутивы Linux уязвимы перед drive-by атаками через музыкальные файлы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/16/bluetooth-locks-flaw/" target="_blank">Исследователи доказали, что оснащать сейфовые замки Bluetooth – плохая идея</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/16/pcileech/" target="_blank">Устройство за $300 похищает пароли от FileVault2 за считанные секунды</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/15/shadow-brokers-sale/" target="_blank">Группа The Shadow Brokers, взломавшая АНБ, пытается продать похищенные эксплоиты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/15/punycode-for-phishing/" target="_blank">Для фишинговых атак на пользователей Office 365 используется Punycode</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/15/mirai-ddosed-spamhaus/" target="_blank">Операторы Mirai-ботнета атаковали антиспамерский проект Spamhaus</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/15/crypto-part5/" target="_blank">Гайд по криптографии: что такое электронная цифровая подпись и как она работает</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/15/yahoo-huge-leak/" target="_blank">Yahoo сообщает, что в результате утечки данных скомпрометирован миллиард пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/14/joomla-flaw/" target="_blank">Уязвимость в Joomla позволяет изменить пароль и перехватить контроль над сайтом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/14/dnschanger-attack-routers/" target="_blank">Вредоносная реклама теперь нацелена не на браузеры, а на роутеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/14/adobe-patches/" target="_blank">Исправлен очередной 0-day баг во Flash Player, но его уже взяли на вооружение хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/14/netgear-routers-flaw-2/" target="_blank">Компания Netgear расширила список проблемных роутеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/13/skype-for-mac-backdoor/" target="_blank">Специалисты Trustwave нашли бэкдор в Skype для Mac OS X</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/13/samas-ransomware/" target="_blank">Авторы вымогателя Samas заработали более $450 000 за год, атакуя исключительно предприятия</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/13/edge-smartscreen-fake-msg/" target="_blank">В браузере Microsoft Edge найден баг, позволяющий подделать сообщения SmartScreen</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/12/car-thiefs-used-jammers/" target="_blank">Британская полиция обнаружила, что автоворы пользуются генераторами помех</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/12/netgear-routers-flaw/" target="_blank">US-CERT предупреждает, что использовать некоторые роутеры Netgear опасно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/12/cryptowire-ransomware/" target="_blank">Опенсорсный шифровальщик CryptoWire стал основой для трех настоящих семейств малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/12/russian-banks-ddos/" target="_blank">«Ростелеком» сообщил об отражении DDoS-атак на 5 крупнейших банков России</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/09/epson-google-cloud-print-bug/" target="_blank">Изменения в Google Cloud Print вызвали сбой в работе принтеров Epson</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/09/yahoo-mail-xss/" target="_blank">XSS-уязвимость в почте Yahoo позволяла читать чужие письма</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/09/popcorn-time-ransomware/" target="_blank">Шифровальщик Popcorn Time обещает бесплатный ключ тем, кто заразит других людей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/08/sath-i-mudafaa/" target="_blank">Турецкие хакеры геймифицируют DDoS, начисляя участникам атак специальные баллы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/08/eth-and-rep-drop/" target="_blank">Неизвестные взломали и обокрали крупного криптовалютного инвестора</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/07/ip-cameras-0days/" target="_blank">Эксперты обнаружили две неустранимые 0-day уязвимости в десятках моделей IP-камер</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/07/talktalk-criticism/" target="_blank">Специалисты предупреждают провайдеров, что перезагрузка роутера не спасает от Mirai</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/07/hp-disables-ftp-and-telnet/" target="_blank">HP отключила FTP и Telnet для своих принтеров из соображений безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/07/hack_me/" target="_blank">WWW: Hack_me — игра, с которой каждый может почувствовать себя хакером</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/07/gophish-phishing-framework-howto/" target="_blank">Gophish — фреймворк для фишинга. Как писать фейковые письма и обманывать своих сотрудников</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/07/dirty-cow-fix/" target="_blank">Плановое обновление Android окончательно устранило проблему Dirty Cow</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/06/sony-cameras-backdoor/" target="_blank">Устранен секретный бэкдор, обнаруженный в 80 моделях камер наблюдения Sony</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/06/stegano/" target="_blank">Обнаружен новый эксплоит кит Stegano, использующий стеганографию</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/06/dailymotion-leak/" target="_blank">Видеохостинг DailyMotion допустил утечку данных 85 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/05/daily-dddos/" target="_blank">Неизвестный ботнет атаковал цели на Западном побережье США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/03/scam-mastermind-arrested/" target="_blank">Trend Micro помогла Интерполу поймать нигерийского киберкриминального лидера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/03/poodlecorp-leak/" target="_blank">Хакеров, которые обещали DDoS-атаку на Pokemon GO, взломали и сорвали их планы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/03/bitfinex-goes-down/" target="_blank">У обменника Bitfinex проблемы с безопасностью, потеряно более $67 000 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/02/imgur-bug-bounty/" target="_blank">Исследователь убедил руководство Imgur выплатить за найденный баг не $50, а $5000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/02/infosec-market-map/" target="_blank">Составляем карту рынка ИБ. Колонка Александра Полякова</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/02/yahoo-leak/" target="_blank">Новая утечка данных: в даркнете продают 200 млн учетных записей Yahoo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/02/ntlm-auth-flaw/" target="_blank">Старый баг NTLM-аутентификации Windows позволяет деанонимизировать пользователя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/02/qrljacking/" target="_blank">Атака QRLJacking доказывает небезопасность авторизации с использованием SQRL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/01/whatsapp-sqlite/" target="_blank">WhatsApp не удаляет чаты до конца из-за проблемы с SQLite</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/01/snowden-device/" target="_blank">Устройство Сноудена. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/01/skimmer-goes-to-jail/" target="_blank">Хакер-рецидивист, похитивший $900 000 с помощью скиммеров, получил 70 месяцев тюрьмы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/01/ransomware-cyber-guarantee/" target="_blank">SentinelOne подвергалась критике из-за обещания заплатить выкуп хакерам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/01/fsb-found-rats/" target="_blank">ФСБ обнаружила малварь в сетях 20 правительственных организаций</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/29/deer-io/" target="_blank">Исследователи утверждают, что платформа Deer.io — это рай для киберпреступников</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/29/search-suggestions-bug/" target="_blank">Подсказки в поисковой строке позволяют спровоцировать «падение» браузера или всей ОС</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/28/lastpass-0day/" target="_blank">В LastPass выявлен ряд уязвимостей, включая 0-day баг, компрометирующий пароли</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/28/keysniffer/" target="_blank">Представлена новая техника перехвата нажатий клавиш на беспроводных клавиатурах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/28/lennon-ray-brown/" target="_blank">Сисадмин, отключивший 90% инфраструктуры Citibank, приговорен к 21 месяцу тюрьмы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/28/telegram-syslog/" target="_blank">Telegram для macOS записывает все, что пользователь копирует в чат из буфера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/27/hackhound-still-alive/" target="_blank">Старый похититель паролей Hackhound теперь используется для промышленного шпионажа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/27/hack-blackberry-backup/" target="_blank">Как взламывают BlackBerry. Разбираем бэкапы «самой безопасной ОС в мире» BlackBerry 10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/27/amazon-silk-problems/" target="_blank">Принадлежащий Amazon браузер Silk игнорирует HTTPS и уязвим для MitM-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/26/php-odays/" target="_blank">Стремясь взломать PornHub, исследователи нашли 0-day уязвимости в PHP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/25/wordpress-hacked/" target="_blank">По следам хакера. Разбираемся со взломом сайта на WordPress</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/25/vine-source-code/" target="_blank">Ошибка разработчиков позволила исследователю скачать все исходные коды Vine</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/23/woocommerce-xss/" target="_blank">В плагине WooCommerce, который используют миллионы сайтов, найдена уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/23/powerware-mimic-decrypted/" target="_blank">Вымогатель PowerWare старательно копировал Locky, но его шифрование все равно взломали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/22/warframe-leak/" target="_blank">Данные почти 800 000 игроков популярного шутера Warframe продаются на черном рынке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/22/turkey-akp-leak/" target="_blank">Взломавший Hacking Team хакер слил Wikileaks письма правящей партии Турции</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/22/russian-swift-attacks/" target="_blank">Хакеры атакуют российские банки через систему межбанковских коммуникаций SWIFT</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/21/end-of-custom-firmwares/" target="_blank">Кастомные прошивки Android больше не нужны? Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/21/sonicwall-backdoor/" target="_blank">В софте Dell обнаружен бэкдор и пять серьезных уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/21/apple-stagefright/" target="_blank">В продуктах Apple найдена критическая уязвимость, очень похожая на Stagefright</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/20/ddos-1h-2016/" target="_blank">DDoS мощностью более 100 Гбит/с стал нормой, максимум теперь превышает 500 Гбит/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/20/gmail-filter/" target="_blank">Вредоносные макросы обходят фильтры Gmail: хакеры просто делят слова пополам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/20/little-snitch-kernel-panic/" target="_blank">Уязвимость в брандмауэре Little Snitch опасна для macOS в целом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/20/hooking/" target="_blank">В большинстве антивирусов нашли дыры, которые упрощают взлом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/19/httpoxy/" target="_blank">Новая «именная» уязвимость HTTPoxy базируется на баге 15-летней давности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/18/new-neutrino-exploit/" target="_blank">В эксплоит кит Neutrino добавили опенсорсный эксплоит для свежего бага в IE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/18/ubuntu-forums-sql/" target="_blank">Форумы Ubuntu снова взломали, пострадали данные 2 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/18/2fa-premium-number/" target="_blank">Исследователь заставил Instagram, Google и Microsoft звонить на платные номера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/18/pokemon-go-ddos/" target="_blank">Серверы Pokemon GO ушли в оффлайн из-за DDoS-атаки, а малварь маскируется под игру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/16/xper/" target="_blank">В медицинском софте Philips нашли сразу 460 уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/15/drupal-modules-fixes/" target="_blank">Исправлены критические уязвимости в трех модулях Drupal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/15/free-keys-4-cryptxxx/" target="_blank">Жертвам шифровальщика CryptXXX раздают бесплатные ключи для дешифровки данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/15/automation-integrated-leak/" target="_blank">Неправильная настройка CouchDB скомпрометировала безопасность банка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/14/fdic-hacked/" target="_blank">Китайские хакеры взломали американское федеральное агентство по страхованию депозитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/14/aosp-bug/" target="_blank">Баг в дефолтном браузере Android использовался для подписки жертв на платные услуги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/14/xdedic-is-back/" target="_blank">Торговая площадка xDedic, продающая взломанные серверы, возобновила работу в даркнте</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/14/microsoft-patch-tuesday/" target="_blank">Microsoft исправила десятки уязвимостей в своих продуктах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/13/cerber-ransomware-2/" target="_blank">Cerber потеснил CryptXXX и Locky, став самым распространенным шифровальщиком месяца</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/13/taiwans-atm-heist/" target="_blank">Российские хакеры похитили из тайваньских банкоматов более $2 000 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/13/x-tools-210/" target="_blank">Лучший хакерский софт июля. X-TOOLS #210</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/13/miui-flaw/" target="_blank">70 млн смартфонов Xiaomi уязвимы для удаленных атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/12/pokemon-go-full-access/" target="_blank">Приложение Pokemon GO для iOS требует полный доступ к аккаунту Google</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/12/all-in-one-seo-pack/" target="_blank">Уязвимость в популярном плагине WordPress позволяет захватить сайт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/12/medium-bug/" target="_blank">Исследователь нашел баг, позволявший удалить любой пост на платформе Medium</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/12/sega-saturn/" target="_blank">Защиту консоли Sega Saturn удалось взломать спустя 20 лет после ее релиза</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/12/one-more-leak/" target="_blank">Похищены базы данных популярных сайтов Hot Scripts, Mac Forums и Web Hosting Talk</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/11/issledovateli-nashli-izyan-v-zashhite-hranilishha-kriptoklyuchej-android/" target="_blank">Исследователи нашли изъян в защите хранилища криптоключей Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/11/ourmine-new-hack/" target="_blank">Хакеры из группы OurMine утверждают, что взломали руководителей Twitter и Yahoo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/11/hidden-voice-commands/" target="_blank">В обычных видеороликах на YouTube можно спрятать вредоносные голосовые команды</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/08/d-link-senrio/" target="_blank">Более ста моделей камер, маршрутизаторов и других устройств D-Link имеют опасную уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/08/vulners/" target="_blank">Vulners — Гугл для хакера. Как устроен лучший поисковик по уязвимостям и как им пользоваться</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/08/bmw-connecteddrive-bugs/" target="_blank">0-day уязвимости на портале BMW позволяют удаленно взламывать автомобили</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/wget/" target="_blank">Разработчики дистрибутивов Linux игнорируют опасную уязвимость в Wget</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/uefi-0day-2/" target="_blank">Исследователи обнаружили, что уязвимость в UEFI присутствует в продуктах Gigabyte</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/redis-servers/" target="_blank">Выявлено более 6000 скомпрометированных серверов Redis</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/easy-hack-209/" target="_blank">Easy Hack: Как найти потенциальные уязвимости и захардкоженные данные Android-приложения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/wow-scam/" target="_blank">Игроков World of Warcraft атакуют скамеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/july-android-security-bulletin/" target="_blank">Для Android вышел самый объемный патч за всю историю, исправлено 20 критических багов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/07/blurry-phishing/" target="_blank">Эксперт обнаружил новую фишинговую кампанию и несколько дыр на сервере хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/06/tp-link-domains/" target="_blank">Компания TP-LINK потеряла контроль над двумя доменами для конфигурации роутеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/06/startencrypt-bugs/" target="_blank">Мошенники могли получить SSL-сертификат для любого домена из-за багов StartEncrypt</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/05/sqlite-tempfiles-flaw/" target="_blank">В новой версии SQLite устранен опасный баг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/04/uefi-0day/" target="_blank">Уязвимость в UEFI найдена на ноутбуках Lenovo и HP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/04/mnkit-china/" target="_blank">Генератор эксплоитов MNKit помог выявить связь между тремя хакерскими группами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/04/sicam-pas/" target="_blank">В системе управления электроподстанциями Siemens нашли уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/02/qualcomm-fde-hack/" target="_blank">Полное шифрование диска на устройствах Qualcomm можно взломать</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/google-phishing-data-uri/" target="_blank">Злоумышленники обманывали жертв при помощи сервиса Google и data URI</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/thedarkoverlord-media-strategy/" target="_blank">Хакер использовал СМИ, чтобы шантажировать своих жертв</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/myoffice-xss/" target="_blank">Почта для чиновников оказалась уязвимой</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/android-n-security/" target="_blank">Android N и борьба за безопасность. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/lizardstresser/" target="_blank">На базе LizardStresser работают более 100 ботнетов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/110-mpps-ddos/" target="_blank">Китайская компания подверглась DDoS-атаке мощностью 470 Гбит/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/01/google-fuzzes-windows/" target="_blank">Google нашёл 16 уязвимостей в ядре Windows при помощи фаззинга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/30/apocalypse-v-emsisoft/" target="_blank">Автор вымогателя Apocalypse обиделся на экспертов Emsisoft, взломавших его код</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/30/crypto-part4/" target="_blank">Погружение в крипту. Часть 4. Современные зарубежные шифры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/30/facebook-fake-id/" target="_blank">Хакер перехватил контроль над чужим аккаунтом Facebook, предъявив фальшивый паспорт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/30/symantec-flaws/" target="_blank">В продуктах Symantec выявлено сразу несколько опасных уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/29/android-duo-security/" target="_blank">На большинстве смартфонов с Android стоят уязвимые версии системы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/29/libreoffice-rtf-bug/" target="_blank">LibreOffice тоже может использоваться для распространения малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/29/google-instant-apps-danger/" target="_blank">Чем Google Instant Apps грозят интернету. Колонка Андрея Письменного</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/29/lenovo-solution-center/" target="_blank">Предустановленный софт упрощает атаки на ПК и ноутбуки Lenovo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/28/medical-records-leaks/" target="_blank">Хакер продает данные 9,3 млн клиентов медицинской страховой компании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/28/chrome-drm-bug/" target="_blank">Баг в Chrome позволяет обойти защиту DRM и скачивать потоковое видео</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/28/cctv-botnet-2/" target="_blank">Обнаружен ботнет, состоящий из 25 000 камер видеонаблюдения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/27/sundar-pichai-hack/" target="_blank">Хакеры взломали аккаунт Quora, принадлежащий главе Google Сундару Пичаи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/27/facebook-video-id-bug/" target="_blank">Исследователь нашел баг, позволяющий удалить с Facebook любое видео</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/27/paypal-steganography/" target="_blank">Уязвимость в PayPal позволяла встраивать вредоносные изображения на страницы платежей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/27/fansmitter/" target="_blank">Данные с изолированных ПК можно похитить, изменяя обороты кулера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/24/voter-records-in-couchdb/" target="_blank">Хакеры случайно раскрыли данные 154 млн американских избирателей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/24/flash-html5-ad/" target="_blank">Замена Flash на HTML5 не поможет сделать рекламу безопаснее</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/23/bc-phishing/" target="_blank">Фишеры взялись за подделку сайтов биткоин-кошельков</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/22/guccifer20/" target="_blank">Guccifer 2.0 уверяет, что не связан с Россией, но исследователи утверждают обратное</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/22/mcdonalds-nfc/" target="_blank">Исследователи обнаружили в ресторанах McDonald’s опасные NFC метки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/22/durov-about-telegram-bug/" target="_blank">Павел Дуров опроверг наличие уязвимости в Telegram</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/21/t-mobile-almost-leaked/" target="_blank">Сотрудник чешского филиала T-Mobile пытался продать данные 1,5 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/21/xdedic-2/" target="_blank">Аноним поделился с исследователями подробностями о подпольном магазине xDedic</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/20/slow-cisco/" target="_blank">Cisco не планирует устранять уязвимости в своих продуктах до сентября</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/20/gotomypc-hacked/" target="_blank">Сервис GoToMyPC обнулил пароли пользователей после «очень изощренной атаки»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/20/plq-spy/" target="_blank">Исследователь тайно наблюдал за видеоконференциями канадских политиков</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/20/acer-leak/" target="_blank">Хакеры взломали официальный магазин Acer и похитили данные о банковских картах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/20/ato-attacks/" target="_blank">Akamai: преступники используют миллионы IP-адресов для осуществления брутфорс-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/17/mir/" target="_blank">Обладатели карт &#171;Мир&#187; могут пострадать от хакерских атак, считают в ЦБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/17/x-tools-209/" target="_blank">Лучший хакерский софт июня. X-TOOLS #209</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/17/github-bruteforce/" target="_blank">GitHub обнуляет пароли после атаки неизвестных хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/drupal-update/" target="_blank">Апдейт для Drupal устраняет две серьёзные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/badtunnel/" target="_blank">Уязвимость во всех версиях Windows позволяет контролировать трафик жертвы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/microsoft-ole-for-malware/" target="_blank">Технология Microsoft OLE используется для внедрения вредоносного кода в документы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/internet-archive-ddos/" target="_blank">«Архив интернета» атакуют хактивисты, выступающие против ИГИЛ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/new-phishing-tech/" target="_blank">Скрытые JavaScript редиректы делают обнаружение фишинговых страниц гораздо труднее</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/marcher/" target="_blank">Как ломают банковские аккаунты. Полная анатомия хакерской атаки через Marcher</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/xdedic/" target="_blank">Доступ к взломанным правительственным серверам может стоить всего $6</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/16/guccifer-2-0/" target="_blank">Ответственность за взлом демократической партии США взял на себя хакер-одиночка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/15/vpon/" target="_blank">Рекламный SDK для iOS позволяет баннерам подглядывать за пользователем через камеру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/15/flash-0day-2/" target="_blank">Adobe предупреждает новой 0-day уязвимости во Flash, которую уже используют хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/15/hack-the-pentagon-2/" target="_blank">В инфраструктуре Пентагона выявлено более 100 уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/15/evil-russian-hackers/" target="_blank">Российских хакеров подозревают во взломе серверов Демократической партии США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/14/cityf/" target="_blank">CTF: CityF. Взлом ГЭС глазами хакера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/14/ctf/" target="_blank">CTF: Capture the Flag. Как взлом стал спортивным состязанием</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/15/telegram-dos/" target="_blank">Иранские исследователи нашли баг, который «вешает» Telegram</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/14/photominer/" target="_blank">Червь PhotoMiner распространяет себя через уязвимые FTP-серверы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/14/contactless-infusion-x5/" target="_blank">В даркнете продают устройство, способное клонировать 15 бесконтактных карт в секунду</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/14/fb-not-so-private-urls/" target="_blank">Баг в Facebook позволяет увидеть ссылки, которыми пользователи делились с друзьями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/13/imesh-leak/" target="_blank">В даркнете продают 51 млн аккаунтов недавно закрывшегося файлообменного сервиса iMesh</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/13/no-more-angler/" target="_blank">Эксплоит кит Angler прекращает свою работу, хакеры переходят на Neutrino</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/13/mailru-android-hack/" target="_blank">Инжект для робота. Вскрываем почтовое приложение от Mail.Ru для Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/13/fake-game-torrents/" target="_blank">Вредоносные сайты маскируются под торрент-трекеры с играми</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/13/fake-google-alert/" target="_blank">Хакеры придумали, как обойти двухфакторную аутентификацию Google</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/10/exploits-209/" target="_blank">Обзор эксплоитов #209. DoS в MySQL-функции и взлом IP-камеры Motorola</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/11/mozilla-sos-fund/" target="_blank">Mozilla оплатит аудит безопасности софта с открытыми исходниками</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/10/necurs-vanished/" target="_blank">Один из крупнейших ботнетов в мире пропал с радаров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/09/d-link-dcs-930l/" target="_blank">Уязвимость в беспроводной камере D-Link позволяет подглядывать в чужие дома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/09/pdfium-talos/" target="_blank">Вредоносные PDF эксплуатировали уязвимость в Chrome для запуска произвольного кода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/09/bitcoin-stash-just-in-case/" target="_blank">Компании запасаются биткоинами на случай атак вымогателей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/08/248-days/" target="_blank">ИТ-компаниям требуется в среднем 248 дней, чтобы исправить уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/08/torrents-forums-hack/" target="_blank">Взломаны форумы BitTorrent, утекли данные как минимум 34 000 пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/08/defcon-kz-2016/" target="_blank">DEFCON в Казахстане 11 июня</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/08/windows-bits-abuse/" target="_blank">Служба Windows BITS используется для повторного заражения компьютеров малварью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/07/outlander-phev-wifi/" target="_blank">Исследователи отключили сигнализацию Mitsubishi Outlander посредством Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/07/facebook-im-flaw/" target="_blank">В мессенджере Facebook исправлена уязвимость, позволявшая изменять любые сообщения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/07/bitgo-ddos/" target="_blank">Защищенный веб-кошелек BitGo подвергся мощной DDoS-атаке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/07/braintree-hack/" target="_blank">Хакеры воруют данные о банковских картах у магазинов, работающих с системой Braintree</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/06/angler-emet/" target="_blank">Эксплойт-кит Angler обходит средства защиты Microsoft EMET</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/06/dadada/" target="_blank">Хакеры из Саудовской Аравии взломали аккаунты Марка Цукерберга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/06/teamviewer-new-features/" target="_blank">TeamViewer улучшает безопасность после сообщений о массовых взломах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/06/ghostshell-mongodb-leak/" target="_blank">Хакеры из группы GhostShell выложили в открытый доступ дампы 110 серверов MongoDB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/06/no-https-for-keepass/" target="_blank">Разработчики менеджера паролей KeePass отказались исправлять уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/06/vk-leak/" target="_blank">На продажу выставлены данные о 100 млн аккаунтах «ВКонтакте»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/03/dns-unlocker/" target="_blank">Вредонос научился подделывать настройки DNS с помощью нового трюка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/03/lenovo-bloatware/" target="_blank">Компания Lenovo просит пользователей срочно удалить приложение Accelerator</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/03/pop-out-boyz/" target="_blank">Арестованы американские рэперы, писавшие тексты про кардинг и скимминг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/ft30-wordpress/" target="_blank">Крупнейшие компании используют уязвимые версии WordPress и Drupal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/sandjacking/" target="_blank">Уязвимость в iOS позволяет подменить нормальное приложение вредоносным</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/breaches-victims-blackmail/" target="_blank">Мошенники угрожают раскрыть «грязные секреты» жертв взлома LinkedIn, Tumblr, MySpace</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/lurk-arrest/" target="_blank">При поддержке «Лаборатории Касперского» задержаны авторы банкера Lurk</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/bug-poaching/" target="_blank">Новая тактика вымогателей: хакеры ломают компании и просят выкуп за раскрытие багов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/teamviewer-panic/" target="_blank">Серверы TeamViewer ушли в оффлайн, пользователи пострадали от массового взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/01/facebook-clone/" target="_blank">Северокорейский клон Facebook взломали благодаря дефолтному логину и паролю</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/01/load-data-local-infile/" target="_blank">LOAD DATA LOCAL INFILE: Чтение файлов через клиент MySQL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/01/bloatware-everywhere/" target="_blank">Duo Security: предустановленное ПО на большинстве ноутбуков опасно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/01/expocod/" target="_blank">В России заработала биржа по продаже уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/01/0-day-sale/" target="_blank">Российские хакеры продают эксплоит для 0-day уязвимости в Windows за $95000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/01/dao-criticism/" target="_blank">Автоматическая компания DAO, основанная на блокчейне Ethereum, открылась, невзирая на критику</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/31/lg-android-cves/" target="_blank">В смартфонах LG обнаружены две опасные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/31/more-swift-attacks-victims/" target="_blank">Из-за атак на межбанковскую систему SWIFT пострадали более десяти банков</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/31/pornhub-bug-bounty-2/" target="_blank">Эксперт пожаловался, что Pornhub занижает выплаты по программе bug bounty</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/31/jetpack-shortcode-xss/" target="_blank">Уязвимость в плагине для WordPress поставила под угрозу миллион сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/30/myspase-tumblr-leaks/" target="_blank">Новые крупные утечки: хакер продает 427 млн паролей MySpaсe и 65 млн паролей Tumblr</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/30/patterson-dental/" target="_blank">Агенты ФБР вломились в дом к исследователю, который обнаружил утечку данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/30/android-thick-apps/" target="_blank">Все толще и толще. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/30/battle-for-mobile/" target="_blank">Битва за мобильник. Глава подразделения мобильных решений Check Point Михаил Шаулов — о новых и старых угрозах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/27/esc-8832/" target="_blank">Уязвимость контроллера, используемого энергетическими компаниями в США, нельзя исправить</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/27/dangerous-usb-charge/" target="_blank">«Лаборатория Касперского» рассказала, почему небезопасно заряжать смартфон через USB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/26/twitter-pornobot/" target="_blank">Порноботы за две недели захватили 2500 популярных твиттеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/25/gds-phishing/" target="_blank">Камерунец проник в глобальную систему бронирований авиабилетов и налетал на $2 млн</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/25/fbi-keysweeper-warning/" target="_blank">ФБР предупреждает: кейлоггер может маскироваться под обычное зарядное устройство</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/25/pastejacking/" target="_blank">Исследователь предложил использовать JavaScript для атак на буфер обмена</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/24/cve-2016-4117-on-the-loose/" target="_blank">Свежая 0-day уязвимость в Adobe Flash Player уже добавлена в наборы эксплоитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/24/linkedin-leak-2/" target="_blank">LinkedIn закончила сбрасывать пароли, утекшие в 2012 году, и база жертв опубликована</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/24/jp-atm-heist/" target="_blank">За три часа злоумышленники похитили $12,7 млн из 1400 японских банкоматов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/24/tetra-bug/" target="_blank">Студент, обнаруживший баг в полицейском протоколе TETRA, получил условный срок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/23/drupal-fauxsomeware/" target="_blank">Сайты на базе Drupal атакованы фальшивым шифровальщиком</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/23/revive-vs-drm/" target="_blank">Oculus VR борется с пиратством, но не слишком успешно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/23/univer-hack/" target="_blank">Сессия на пятерочку. Как повысить успеваемость, не выходя из дома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/23/linkedin-after-leak-hacks/" target="_blank">После утечки данных LinkedIn были взломаны аккаунты многих известных людей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/20/instagram-bruteforce/" target="_blank">Исследователь обнаружил, что Instagram уязвим перед обычным брутфорсом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/20/exploits-208/" target="_blank">Обзор эксплоитов #208. Уязвимость в Apache Struts, RCE в LifeSize Room и ошибки в сканере Acunetix</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/20/phdays-city-drown/" target="_blank">На PHDays VI нарушена работа ГЭС и затоплен город</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/20/skycure-clickjack/" target="_blank">Уязвимость в Android обманом вытягивает из пользователя разрешения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/19/wordpress-plugins/" target="_blank">К четверти взломов сайтов на основе WordPress привели дыры в трёх плагинах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/19/linkedin-leak/" target="_blank">UPD. 117 млн паролей от LinkedIn выставлены на продажу в даркнете</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/19/inside-nuclear/" target="_blank">Специалисты Check Point детально изучили инфраструктуру эксплоит кита Nuclear</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/18/hack-ios-backup/" target="_blank">Как взламывают iCloud. Разбираемся в системах резервного копирования iPhone и iPad</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/18/gatecoin-heist/" target="_blank">Криптовалютная биржа Gatecoin лишилась 2 млн долларов в результате ограбления</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/18/sathya-prakash-the-bank-job/" target="_blank">Исследователь нашел баги, позволявшие похитить 25 млн долларов у индийского банка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/18/one-more-dridex-hack/" target="_blank">Жертвы вымогателя Locky получили предупреждение вместо вируса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/17/playpan-errors/" target="_blank">Устроить облаву на педофилов в Tor ФБР помогли ошибки админов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/17/symantec-ormandi/" target="_blank">В антивирусах Symantec скрывалась опасная уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/17/pornhub-revolver-2/" target="_blank">Pornhub уверяет, что сообщения о взломе — это ложь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/17/mcafee-and-mysterious-android-bug/" target="_blank">Джон Макафи попытался убедить журналистов, что взломал WhatsApp</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/17/swift-hack-details/" target="_blank">Вторая атака на межбанковскую систему SWIFT связана со взломом Sony в 2014 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/16/bladerf-attack/" target="_blank">Атака на сигналку. Изучаем безопасность системы автомобильной сигнализации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/16/nulled-io/" target="_blank">Утекли данные участников хакерского форума, где торговали крадеными паролями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/16/pornhub-revolver/" target="_blank">Хакер взломал Pornhub и продал доступ за $1000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/14/pawn-storm-cdu/" target="_blank">В кибератаке на немецких политиков заподозрили Россию</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/13/besa-mafia/" target="_blank">Со взломанного сайта албанской мафии утёк список заказчиков наёмных убийств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/13/yahoo-imagetragick/" target="_blank">Yahoo вознаградила исследователя за эксплуатацию уязвимости ImageTragick</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/13/adobe-25-cves/" target="_blank">Adobe исправила 25 уязвимостей во Flash Player, включая свежий 0-day</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/13/fairy-tale-about-pgp/" target="_blank">Алиса и Боб в стране PGP. Почему защитить почту становится все сложнее</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/12/wendys/" target="_blank">Троян для POS-терминалов поразил сотни фастфудов Wendy&#8217;s</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/12/allwinner-backdoor/" target="_blank">Простейший бекдор обнаружен на устройствах, работающих на базе ARM решений Allwinner</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/12/7-zip-bugs/" target="_blank">В 7-Zip обнаружены и устранены сразу две уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/12/pornhub-bug-bounty/" target="_blank">Pornhub учредил собственную программу вознаграждений за уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/12/congress-bans-yahoo/" target="_blank">Почтовый сервис Yahoo заблокировали в Конгрессе США из-за ненадежности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/11/cve-2016-0167/" target="_blank">Уязвимость нулевого дня в Windows помогла ограбить десятки компаний</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/11/lost-door-rat/" target="_blank">Автор трояна Lost Door рекламирует себя через Facebook и YouTube с 2007 года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/11/imagetragick-2/" target="_blank">Для опасной уязвимости ImageTragick созданы и используются уже несколько эксплоитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/11/mass-subreddit-deface/" target="_blank">Доказывая, что Reddit небезопасен, хакер заскучал и взломал десятки сабреддитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/11/microsoft-adobe-0-days/" target="_blank">Microsoft и Adobe экстренно исправляют 0-day уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/10/x-tools-208/" target="_blank">Лучший хакерский софт мая. X-TOOLS #208</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/10/david-levin-arrested/" target="_blank">Исследователя арестовали за обнаружение багов на сайтах для избирателей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/09/recorded-future-pocs/" target="_blank">Recorded Future: Исследователи стали публиковать PoC-эксплоиты в три раза чаще</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/06/cplink/" target="_blank">Один из самых популярных эксплойтов атакует дыру, которую исправили шесть лет назад</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/06/more-redirects-for-wp/" target="_blank">Новая атака перенаправляет трафик сайтов на базе WordPress и Joomla на вредоносные URL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/06/top13-books-about-singularity/" target="_blank">13 книг и рассказов, которые ты должен прочесть до технологической сингулярности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/06/mail-ru-about-hold-sec/" target="_blank">Mail.ru: многомиллионная база логинов-паролей — это грамотный информационный вброс</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/06/openssl-patch/" target="_blank">Новый набор исправлений устраняет шесть уязвимостей в OpenSSL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/05/stupid-locky/" target="_blank">Ботнет Dridex взломали в третий раз за три месяца</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/05/jaku-botnet/" target="_blank">Исследователи обнаружили в Азии новый ботнет Jaku, уже насчитывающий 19 000 машин</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/05/272-mln-passwords/" target="_blank">Российский хакер продает 272 млн паролей от почтовых ящиков, но поводов для паники нет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/05/pwnedlist-pwned/" target="_blank">Сайт PwnedList закрывается после утечки данных 866 млн аккаунтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/04/10000-for-jani/" target="_blank">Десятилетний исследователь заработал $10 000, обнаружив баг в Instagram</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/04/cyber-security-challenge-uzbekistan/" target="_blank">Открыт прием заявок на Cyber Security Challenge Uzbekistan</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/04/mobile-detonation-device/" target="_blank">Вылет рейса задержали из-за подозрительного названия сети Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/04/imagetragick/" target="_blank">0-day уязвимость в ImageMagick ставит под угрозу множество сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/03/steam-crypto-bug/" target="_blank">В Steam устранили баг, позволявший просматривать чужие пароли в виде простого текста</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/03/aria-scale-bugs/" target="_blank">Специалист Google Project Zero нашел критическую уязвимость в умных весах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/03/pavel-durov-about-2auth/" target="_blank">Павел Дуров: спецслужбы РФ решили начать давить на операторов связи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/02/exploits-207/" target="_blank">Обзор эксплоитов #207. Уязвимости в CCTV/DVR, повреждение памяти в libotr и DoS Meterpreter</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/29/windows-godmode/" target="_blank">Хакеры эксплуатируют «пасхалку» в Windows для внедрения малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/29/android-bankers/" target="_blank">Три новых банковских трояна для Android пытаются занять нишу GM Bot</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/29/bsides-kyiv/" target="_blank">14 мая в Киеве пройдет техническая конференция BSides Kyiv</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/29/telegram-clickjacking/" target="_blank">Веб-клиент Telegram был уязвим перед кликджекингом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/29/slack-tokens-leak/" target="_blank">Многие разработчики по ошибке публикуют токены для Slack в открытом доступе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/28/beef-for-hackers/" target="_blank">Хакеры превращают опенсорсные инструменты в орудия для атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/28/grsecurity-ban/" target="_blank">Разработчики Grsecurity забанили исследователя, который нашел баг в свежем патче</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/28/alphabay-flaw/" target="_blank">Один из крупнейших магазинов даркнета случайно раскрыл личные сообщения пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/28/platinum-atp/" target="_blank">Хакеры из группы Platinum обратили систему обновлений Windows против самой ОС</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/28/minecraft-lifeboat-leak/" target="_blank">С крупного сервера Minecraft похитили 7 миллионов плохо защищённых паролей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/atm-malware/" target="_blank">Малварь для банкомата. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/qatar/" target="_blank">Из банка Катара утекли данные королевской семьи, спецслужб и «Аль-Джазиры»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/gundremmingen-malware/" target="_blank">На компьютерах германской АЭС нашли малварь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/routersploit/" target="_blank">Исследователи опубликовали на GitHub аналог Metasploit для роутеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/malvertising-on-tpb/" target="_blank">На The Pirate Bay обнаружена вредоносная реклама</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/waze-ghost-cars-hack/" target="_blank">Баг в навигационном приложении Waze позволяет отследить маршруты пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/27/facebook-fake-email/" target="_blank">Уязвимость Facebook позволяла захватывать аккаунты на других сайтах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/26/android-n-features/" target="_blank">Android N: десктоп, энергосбережение и гибридный компилятор. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/26/crackme-with-z3py/" target="_blank">Взламываем crackme при помощи Microsoft Z3Py</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/26/beautifulpeople-leaked/" target="_blank">Сайт знакомств, ранее шутивший о некрасивых людях и взломах, хакнули по-настоящему</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/26/armada-collective-scum/" target="_blank">Мошенники заработали более $100 000, угрожая компаниям DDoS-атаками и ничего не делая</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/26/towelroot-hacking-team/" target="_blank">Cyber.Police заражает Android и вынуждает жертв покупать подарочные карты iTunes</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/25/weird-pharma-hack/" target="_blank">Спамеры научились обманывать защиту сайтов невидимыми буквами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/25/passwords-leaks/" target="_blank">Извлекаем пароли из популярных программ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/25/fin6/" target="_blank">Кардеры похитили данные 20 млн банковских карт и заработали более $400 млн</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/25/hospitals-hacks/" target="_blank">Duo Security: хакеры атакуют больницы, потому что там используются Windows XP, Flash и Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/22/x-tools-207/" target="_blank">Лучший хакерский софт апреля. X-TOOLS #207</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/22/applocker-bypass/" target="_blank">Команда для обхода Windows AppLocker умещается в один твит</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/22/facebook-backdoor/" target="_blank">Исследователь взломал Facebook и обнаружил чужой вредоносный скрипт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/21/multigrain-pos/" target="_blank">PoS-малварь сливает данные через DNS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/21/chris-gibson-opinion/" target="_blank">Глава CERT-UK: компании до сих пор уязвимы перед малварью восьмилетней давности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/21/crypto-part3/" target="_blank">Погружение в крипту. Часть 3: отечественные шифры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/21/ransomwhere/" target="_blank">Для OS X создан бесплатный детектор вымогательского ПО</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/21/angler-social-button-plugin/" target="_blank">Эксплоит кит Angler маскируется под кнопки социальных сетей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/20/moscow-traffic-sensors/" target="_blank">Датчики дорожного движения, следящие за дорогами Москвы, легко взломать</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/20/google-compromised-sites/" target="_blank">За год Google удалось обнаружить более 760 000 скомпрометированных сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/20/ntt-group-exploit-kit-stats/" target="_blank">Уязвимости в Adobe Flash – самое популярное оружие авторов эксплоит китов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/20/hacking-team-letter/" target="_blank">Глава Hacking Team обвинил СМИ во лжи и угрожает хакеру, взломавшему компанию</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/20/thanatos-botnet-ips/" target="_blank">Специалисты SurfWatch Labs предотвратили атаку на форумную платформу IP.Board</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/19/ai2/" target="_blank">Исследователи МТИ создали искусственный интеллект, распознающий 85% атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/19/teamcity-registration-hack/" target="_blank">Easy Hack: Как обойти отключенную регистрацию пользователей в TeamCity</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/19/ss7-congressman-hack/" target="_blank">SS7 небезопасен: хакеры без труда взломали и прослушали смартфон конгрессмена</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/19/os-x-old-git/" target="_blank">OS X уязвима перед атаками, потому что поставляется с устаревшей версией Git</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/18/fbi-firefox-exploit/" target="_blank">ФБР держит в секрете уязвимость нулевого дня в Firefox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/18/shorteners/" target="_blank">Укорачиватели ссылок помогают злоумышленникам узнавать чужие секреты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/18/jboss-flaw/" target="_blank">Уязвимость в JBoss поставила под угрозу 3,3 млн серверов: их атакует шифровальщик</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/18/blackberry-skeleton-key/" target="_blank">Еще в 2010 году BlackBerry предоставила канадской полиции глобальный ключ шифрования</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/18/hacking-team-hack/" target="_blank">Хакер в подробностях рассказал о том, как он взломал Hacking Team</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/15/mousejack-2/" target="_blank">Microsoft исправила уязвимость, позволявшую злоумышленнику притвориться мышью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/15/rsa-startups-2016/" target="_blank">Рынок безопасности. Колонка Александра Полякова</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/15/unistall-quicktime/" target="_blank">Apple прекращает поддержку QuickTime для Windows, оставив открытыми две уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/14/kaspersky-about-scada/" target="_blank">Евгений Касперский рассказал, как хакеры помогают воровать топливо и уголь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/14/dc7499-april-21/" target="_blank">21 апреля пройдет очередная встреча группы DEFCON Moscow DC7499</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/14/1970-bug-over-ntp/" target="_blank">Баг 1970, превращавший iPhone в кирпич, можно было эксплуатировать удаленно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/14/linux-backdoor-xudp/" target="_blank">Linux-утилита для организации UDP-флуда содержит троян</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/14/revive/" target="_blank">Создан плагин, благодаря которому игры для Oculus Rift работают на других VR-шлемах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/13/coinwallet-closing/" target="_blank">Сервис CoinWallet закрывается после кибератаки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/13/fbi-bought-0day/" target="_blank">ФБР заплатило gray hat хакерам за взлом iPhone террориста</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/13/galaxy-hayes-command-bug/" target="_blank">Некоторые модели Samsung Galaxy принимают AT-команды даже при активной блокировке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/13/badlock/" target="_blank">Обнародованы подробности о «разрекламированной» уязвимости Badlock</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/13/zero-days-symantec/" target="_blank">Symantec: в 2015 году найдено вдвое больше уязвимостей нулевого дня, чем в 2014</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/12/panama-papers-2/" target="_blank">&#171;Панамский архив&#187; могли украсть через дыры в WordPress и Drupal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/12/imessages-flaw/" target="_blank">Баг в приложении iMessage для OS X позволял похитить всю историю чатов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/12/bribes-and-steganography/" target="_blank">Хакеры обманули производителя антивирусов с помощью взяток, стеганографии и хитрости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/12/mobile-malware-js-jiton/" target="_blank">Вредонос подменяет настройки DNS на домашних роутерах через мобильные устройства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/petya-cryptohost-hjacked/" target="_blank">Эксперты взломали шифрование вымогателя «Пети» и CryptoHost</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/manser-not-going-to-prison/" target="_blank">Хакер заработал на инструментах для DDoS-атак $70 000, но получил условный срок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/adobe-flash-0day/" target="_blank">Очередной 0-day в Adobe Flash Player используется для распространения вымогателей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/dbo/" target="_blank">Дистанционное банковское ограбление. PoC атаки на ДБО через ошибки конфигурации СУБД</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/furry-sex-radio/" target="_blank">Хакеры подменили эфир нескольких радиостанций на подкаст для фурри</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/arris-reboot-reset-bug/" target="_blank">135 миллионов кабельных модемов можно перезагрузить удаленно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/two-factor-authentication/" target="_blank">Двухфакторная аутентификация уязвима для новой атаки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/11/philippines/" target="_blank">Информация миллионов жителей Филиппин утекла из государственной базы данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/08/turkish-leak-2/" target="_blank">Правительство Турции проводит расследование утечки данных 50 млн граждан</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/08/hacking-team-lost-its-licence/" target="_blank">Hacking Team лишилась лицензии на экспорт своих решений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/08/fbi-limited-tool/" target="_blank">ФБР не может взломать iPhone 5s и более поздние модели</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/07/recaptcha/" target="_blank">Машинное обучение позволяет обойти ReCAPTCHA</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/07/ccd-flaws/" target="_blank">Крупнейшая база биометрических данных уязвима для атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/07/surreptitious-sharing/" target="_blank">Новая уязвимость в Android позволяет похищать пароли IMAP и сообщения мессенджеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/07/osvdb-shuts-down/" target="_blank">Опенсорсная база уязвимостей закрывается после 12 лет работы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/07/fbr-briefing-senators/" target="_blank">ФБР скрывает от Apple, как был взломан iPhone террориста, но сенаторам метод раскрыли</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/veriflow/" target="_blank">Стартап доказывает уязвимость корпоративных сетей математически</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/prices/" target="_blank">Хакеры берут 65 долларов за взлом Mail.ru и 194 доллара за Вконтакте</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/dominos-pizza-free/" target="_blank">Хакер нашел способ заказывать бесплатную пиццу в Domino и успешно его проверил</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/microsoft-auth-csrf/" target="_blank">Microsoft выплатила исследователю $13 000 за баг в системе аутентификации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/ios-lockscreen-bypass/" target="_blank">Найден новый способ обхода экрана блокировки на iPhone 6S и 6S Plus</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/android-april-upd/" target="_blank">В очередном обновлении для Android устранено 39 уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/06/extension-reuse/" target="_blank">Исследователи считают, что не стоит доверять авторам расширений для Firefox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/05/turkish-leak/" target="_blank">Хактивисты обнародовали данные почти всего населения Турции</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/05/ssh-brute-force/" target="_blank">Захватываем роутер: массовый скан и брутфорс SSH</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/05/exploit-for-ps4/" target="_blank">Опубликован работающий эксплоит для установки Linux на PS4</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/05/uav-flaws/" target="_blank">Исследователь показал, как взломать полицейских дронов, имея аппаратуру за $40</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/01/hid/" target="_blank">Двери с бесконтактным пропуском можно взломать по сети</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/01/android-fragmentation/" target="_blank">Исследователь считает, что фрагментация Android это хорошо для безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/01/angler-goes-livejournal/" target="_blank">Вредоносная реклама с эксплоит китом Angler добралась до Livejournal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/01/kimcilware/" target="_blank">Магазины на платформе Magento атакует вымогатель KimcilWare</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/31/sip/" target="_blank">Команда, ломающая защиту OS X, умещается в твит</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/31/paypal-email-bug/" target="_blank">Устранен баг, позволявший рассылать вредоносные письма с серверов PayPal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/31/steam-watch-paint-dry/" target="_blank">Исследователь обошел все проверки Steam и опубликовал игру о сохнущей краске</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/31/vbulletin-hacked-2/" target="_blank">Компанию vBulletin снова взломали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/31/not-so-smart-home/" target="_blank">Сотрудники Bitdefender протестировали устройства IoT и нашли множество уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/30/scam-gps/" target="_blank">Мошенники вычисляют нарушителей по GPS и пугают их штрафами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/30/malicious-marketing/" target="_blank">Вредоносный маркетинг. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/30/truecaller-android-imei/" target="_blank">Уязвимость в приложении Truecaller представляет опасность для 100 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/30/fbr-playpen/" target="_blank">ФБР отказывается объяснять, каким образом деанонимизирует педофилов в Tor</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/30/concordia-university-keyloggers/" target="_blank">В библиотеке университета Конкордии нашли аппаратные кейлоггеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/30/flappy-mario-glitch/" target="_blank">Энтузиаст перепрограммировал игру при помощи прыжков с переворотом и дурацких ошибок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/29/x-tools-206/" target="_blank">Лучший хакерский софт марта. X-TOOLS #206</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/29/weev-experiment/" target="_blank">Хакер взломал тысячи принтеров и распечатал антисемитские листовки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/29/npm-hydra-worm/" target="_blank">Удаление утилиты Kik привлекло внимание сообщества к серьезным проблемам менеджера пакетов Node.js</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/28/nicchu-shinsei/" target="_blank">Полиция Японии обнаружила данные 18 млн человек на сервере китайских хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/28/imperva-web-apps-stat/" target="_blank">Imperva: Сайты на платформе WordPress атакуют в 3,5 раза чаще других</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/28/5-card-cash/" target="_blank">В США на лотерейных терминалах печатали заведомо выигрышные билеты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/25/vncroulette/" target="_blank">Хакер выставил чужие компьютеры с незащищённым VNC на всеобщее обозрение</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/25/os-x-bug/" target="_blank">В OS X обнаружена уязвимость, позволяющая обойти защитный механизм SIP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/25/verizon-enterprise-leak/" target="_blank">Компания Verizon пострадала от взлома, хакеры продают данные 1,5 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/25/macros-block-for-office-2016/" target="_blank">Для борьбы с малварью в Office 2016 появилась новая функция блокировки макросов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/24/fbi-iphone/" target="_blank">Кто и как будет взламывать iPhone террориста</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/24/pentester-fuckups/" target="_blank">Ошибки пентестера, ужасные и не очень. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/25/backoff-cctv/" target="_blank">Номера кредиток утекали через дыру в прошивке камеры видеонаблюдения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/24/startssl-flaw/" target="_blank">Из-за уязвимости сервис StartSSL позволял получить SSL-сертификат для любого домена</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/24/badlock-hype/" target="_blank">Уязвимость Badlock обнаружена почти во всех версиях Windows и Samba</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/24/accident-scada-attack/" target="_blank">Хакеры нечаянно атаковали водоочистные сооружения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/android-nexus/" target="_blank">Миллионы устройств с Android имеют опасную уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/xorist-and-surprise/" target="_blank">Алгоритм шифровальщика Xorist взломан, а модификация EDA2 использует TeamViewer</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/json-xml-api-xxe/" target="_blank">Easy Hack: Как пропихнуть инъекцию через JSON/XML-заглушки для API</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/uber-bug-bounty/" target="_blank">Uber запустил программу bug bounty с вознаграждениями до $10 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/bindiff-for-free/" target="_blank">Утилита для сравнения бинарников BinDiff стала бесплатной благодаря Google</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/pwn2own-2016/" target="_blank">Pwn2Own 2016 завершился, итоги состязания</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/23/swift/" target="_blank">Крупнейшее киберограбление банка может повториться в другой стране</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/22/imessage/" target="_blank">Исследователи взломали протокол iMessage</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/21/hsts-problem/" target="_blank">95% всех серверов HTTPS настроены неверно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/21/rowhammer-ddr4/" target="_blank">Память DDR4 уязвима для атаки Rowhammer</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/21/buhtrap-robbing-banks/" target="_blank">Группа Buhtrap похитила $25 млн из 13 российских банков</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/18/amex-leak/" target="_blank">American Express предупреждает об утечке данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/18/the-end-of-fappening/" target="_blank">Официальный конец скандала Fappening: хакер, взломавший звезд, признал себя виновным</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/18/security-market/" target="_blank">Рынок Безопасности. Колонка Александра Полякова</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/18/qualcomm-snapdragon-bugs/" target="_blank">Для взлома уязвимы почти все устройства Android на базе процессоров Snapdragon</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/18/stagefright-exploit/" target="_blank">Создан новый эксплоит для уязвимости Stagefright</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/17/beef/" target="_blank">Зомби-скриптинг. Используем BeEF для продвинутых XSS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/17/git-flaws/" target="_blank">В Git обнаружены серьезные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/17/fakecert/" target="_blank">Российские банки атакованы фальшивым Центробанком</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/16/radamant-c2-bug/" target="_blank">Исследователи сумели взломать управляющий сервер шифровальщика Radamant</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/16/malvertising-campaign/" target="_blank">Специалисты зафиксировали масштабную кампанию по распространению вредоносной рекламы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/16/yahoo-mail-bug/" target="_blank">Yahoo устранила баг, позволявший отправить письмо от имени любого пользователя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/15/chrome-reward-program/" target="_blank">Google предлагает $100 000 за взлом Chromebook</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/15/installing-skimmer-in-3-sec/" target="_blank">Видео: как установить скиммер за несколько секунд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/15/staminus-leak/" target="_blank">Хакеры взломали компанию Staminus, которая предоставляет защиту от DDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/15/bitcoinwisdom-ads-remover/" target="_blank">Расширение для Chrome воровало биткоины у пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/05/visa-brutforce/" target="_blank">Карты Visa уязвимы перед обычным брутфорсом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/02/mirai-attacked-uk-isps/" target="_blank">Пользователи британских провайдеров пострадали от атак Mirai</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/02/attack-on-pacemakers/" target="_blank">Эксперты обнаружили и эксплуатировали «смертельные» уязвимости в кардиостимуляторах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/02/shamoon/" target="_blank">Вредонос Shamoon, стирающий данные с жестких дисков, снова активен</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/02/exploits-214/" target="_blank">Обзор эксплоитов #214. Многочисленные уязвимости в D-Link DWR-932B и повышение привилегий в HP ThinPro OS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/02/activation-lock-bypass/" target="_blank">Исследователи придумали, как обойти блокировку активации на устройствах Apple</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/01/new-mirai/" target="_blank">Новая версия Mirai представляет угрозу для 5 000 000 устройств по всему миру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/01/vindows-locker/" target="_blank">Написанный на C# вымогатель Vindows Locker предлагает позвонить в фальшивую техподдержку</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/30/cctv-exploit/" target="_blank">Опубликован эксплоит, позволяющий взломать 35 моделей камер наблюдения одним GET-запросом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/30/firefox-0day/" target="_blank">В Firefox обнаружена 0-day уязвимость, использующаяся для атак на пользователей Tor</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/30/bitlocker-bypass-2/" target="_blank">Нажатие SHIFT+F10 во время обновления Windows 10 позволяет обойти BitLocker</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/29/valartis-bank-blackmail/" target="_blank">Хакеры взломали лихтенштейнский банк и шантажируют его клиентов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/29/encrypted-wordpress-pingback/" target="_blank">UPD. «Лаборатория Касперского»: DDoS-атаки с шифрованием пришли в Россию</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/29/backup-pentesting-case/" target="_blank">Как бэкап становится бэкдором. Ищем уязвимости в веб-приложении крупной компании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/29/mirai-new-attack-vector/" target="_blank">Ботнет на базе Mirai атаковал Deutsche Telekom и заразил почти миллион устройств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/28/youtube-malware-scam/" target="_blank">На YouTube рекламируют фишинговые инструменты с бэкдорами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/28/xakep-dc7499-workshop/" target="_blank">Бесплатный воркшоп по аудиту Wi-Fi-сетей от DC7499 30 ноября в Москве. Приходи!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/28/hack-smartphone-reset-factory-settings/" target="_blank">Как взламывают защиту от сброса к заводским настройкам на смартфонах с iOS, Android, Blackberry и Windows Phone</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/28/hddcryptor-attacked-muni/" target="_blank">Из-за атаки шифровальщика общественный транспорт в Сан-Франциско временно бесплатен</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/tesla-android-hack/" target="_blank">Автомобиль Tesla можно угнать, заразив смартфон его хозяина малварью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/faq-local-net-spoofing/" target="_blank">FAQ: Как защитить локальную сеть от ARP-спуфинга?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/us-navy-leak/" target="_blank">Данные 130 000 служащих ВМС США были скомпрометированы из-за взлома одного ноутбука</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/eir-d1000-flaw/" target="_blank">Тысячи клиентов крупнейшего провайдера Ирландии используют уязвимые модемы Eir D1000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/hack-android-3/" target="_blank">Ломаем софт для Android. Обходим обфускаторы, упаковщики и другие средства защиты кода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/keep-emet-alive/" target="_blank">CERT не рекомендует Microsoft отказываться от EMET и критикует защиту Windows 10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/25/mirai-for-rent/" target="_blank">Хакеры сдают в аренду Mirai-ботнет, состоящий из 400 000 машин</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/24/deliveroo-food-fraud/" target="_blank">Хакеры атаковали сервис доставки еды Deliveroo, разослав заказы случайным людям</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/24/inpage-0day/" target="_blank">0-day уязвимость в InPage используется для атак на банки и правительственные ведомства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/24/telecrypt-encryption-cracked/" target="_blank">Взломано шифрование вымогателя TeleCrypt, использовавшего API Telegram</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/24/speake-a-r/" target="_blank">Атака Speake(a)r позволяет записывать звук с помощью наушников, превратив output в input</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/24/ntp-flaws/" target="_blank">В Network Time Protocol устранена критическая уязвимость, и уже опубликован PoC-эксплоит</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/24/qiwi-infosec-ctf-2016-results/" target="_blank">Свыше 900 команд приняли участие в баттле QIWI-Infosec CTF на ZeroNights 2016</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/23/cobalt-jackpotting/" target="_blank">Хак-группа Cobalt похитила миллионы, заставляя банкоматы выдавать наличные</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/23/office-365-bug/" target="_blank">Баг в Office 365 позволял выдать фейковые письма с адресов microsoft.com за настоящие</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/23/wordpress-auto-update-flaws/" target="_blank">Баги в механизме обновления WordPress ставят под угрозу треть всех сайтов в интернете</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/23/ios-mp4-freeze/" target="_blank">Обнаружено пятисекундное видео, которое заставляет любое iOS-устройство зависнуть</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/22/netis-backdoor/" target="_blank">Старый бэкдор в роутерах Netis пытались эксплуатировать 57 млн раз за последние три месяца</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/22/referral-spam/" target="_blank">Российский спамер подделал домен Google при помощи Unicode</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/22/it-happens-214/" target="_blank">Что интересного произошло с нашими программерами за месяц. Колонка авторов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/21/phishlulz/" target="_blank">Тулкит PhishLulz содержит все что нужно для автоматизации фишинга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/15/imgur-vid-2-gif/" target="_blank">Хостинг картинок Imgur мог использоваться для рассылки спама</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/14/libotr-flaw/" target="_blank">Уязвимость в библиотеке Libotr компрометирует Pidgin, Adium и другие IM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/14/utku-sen-strike-back/" target="_blank">Исследователи посрамили хакера, который заявлял, что его шифрование не взломает АНБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/14/old-java-bug-returns/" target="_blank">Патч для Java двухгодичной давности оказался неэффективным</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/11/flash-player-sec-upd/" target="_blank">Устранено 23 уязвимости во Flash Player, одну из которых уже используют хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/11/bangladesh-cb-hack/" target="_blank">Из-за опечатки хакерам не удалось похитить у банка $850 млн</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/10/scama-amazon-2016/" target="_blank">Хакер рекламировал себя через фишинговый сайт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/10/irs-pins-for-hackers/" target="_blank">Налоговая служба отключила систему защиты от мошенников: ей пользовались мошенники</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/10/crypto-part2/" target="_blank">Погружение в крипту. Часть 2: распределение ключей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/09/2d-printed-fringerprints/" target="_blank">Обмануть сканер отпечатков можно при помощи обычного струйного принтера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/09/fb-pass-reset-bug/" target="_blank">В Facebook исправили баг, позволявший сбросить чужой пароль</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/09/access-control-exploits/" target="_blank">Безопасность в опасности. Эксплуатируем примитивные ошибки СКУД</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/09/linux-for-ps4/" target="_blank">На PS4 теперь можно запускать Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/08/seagate-leak/" target="_blank">Служащий Seagate раскрыл мошенникам данные о персонале компании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/08/cctm-backdoor/" target="_blank">Популярный плагин Custom Content Type Manager для WordPress содержит бэкдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/08/keranger/" target="_blank">В составе Transmission обнаружен первый работающий вымогатель для OS X</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/07/exploits-206/" target="_blank">Обзор эксплоитов №206. DVR Mvpower, QuickHeal и Baidu Browser</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/04/ad-xss/" target="_blank">Рекламные сети уязвимы перед простейшими XSS-атаками</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/03/mate1-leak/" target="_blank">Очередной сайт знакомств взломан, в даркнете продают данные 27 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/03/smart-watch-research/" target="_blank">Исследователь обнаружил подозрительную активность китайских умных часов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/02/touch-id-hack/" target="_blank">Биометрический сенсор iPhone можно обмануть при помощи пластилина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/02/drown-https/" target="_blank">Атака DROWN поставила под угрозу треть всех сайтов, работающих с HTTPS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/02/snapchat-payroll-department/" target="_blank">Сотрудник Snapchat раскрыл злоумышленникам зарплаты персонала</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/01/x-tools-205/" target="_blank">Лучший хакерский софт февраля. X-TOOLS #205</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/01/netsparker-stat/" target="_blank">Самые распространенные баги в опенсорсных приложениях: XSS и SQLi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/29/vickery-vs-uknowkids/" target="_blank">Исследователь сообщил об уязвимости, и его обвинили в «хакерстве»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/26/rise-and-shine-blackberry-priv/" target="_blank">Блеск и нищета BlackBerry Priv. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/26/no-guarantee/" target="_blank">There is no 100% guarantee. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/26/emet-bypass/" target="_blank">Защиту Microsoft EMET можно обойти, использовав сам EMET</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/26/keybase-after-leak/" target="_blank">После утечки исходных кодов KeyBase количество кейлоггеров выросло на порядок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/26/cmu-paid-by-dod/" target="_blank">Власти США заплатили университету Карнеги-Меллона за взлом Tor</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/26/nissan-connect/" target="_blank">Исследователь взломал электромобиль Nissan LEAF</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/25/pimp-my-nmap/" target="_blank">Прокачай свой Nmap! Расширяем возможности культового сканера при помощи NSE-скриптинга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/25/operation-blockbuster/" target="_blank">Против группы хакеров Lazarus, атаковавших Sony, развернута масштабная операция</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/25/baidu-browser-flaws/" target="_blank">Браузер Baidu шпионит за пользователями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/25/ssl-vpn-servers-test/" target="_blank">High-Tech Bridge: публичные SSL VPN-серверы используют небезопасное шифрование</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/25/mousejack/" target="_blank">MouseJack — новая атака на беспроводные мыши</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/24/bohemia-interactive-bugtrackers-off/" target="_blank">Багтрекеры Arma 3 и DayZ ушли в оффлайн из-за возможных проблем с безопасностью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/24/avast-free-wi-fi/" target="_blank">Avast: пользователи не задумываясь подключаются к подозрительным сетям Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/24/acecard-family/" target="_blank">Троян Acecard атакует приложения банков и финансовых систем</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/24/ratopak/" target="_blank">Сотрудникам российских банков угрожает троян Ratopak</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/23/one-more-celebrity-hack-2/" target="_blank">Хакер признался, что похищал фотографии обнаженных знаменитостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/23/teslacrypt-joomla/" target="_blank">Шифровальщик TeslaCrypt теперь распространяется через сайты на базе Joomla</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/23/linux-mint-hack/" target="_blank">Злоумышленники взломали сайт Linux Mint и внедрили малварь в дистрибутив</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/22/terrorism-pr-apple/" target="_blank">Теракт, Apple, FBI, пиар и совесть. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/20/comodo-geekbuddy/" target="_blank">Продукты Comodo устанавливают на ПК пользователя опасную утилиту удаленной поддержки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/20/jsfuck-in-work/" target="_blank">Уязвимость JSF**k, которую eBay отказался исправить, уже эксплуатируют хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/20/locky-ransomware/" target="_blank">Вымогатель Locky использует для распространения вредоносные макросы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/20/simplisafe-hack/" target="_blank">Исследователь продемонстрировал удаленный взлом сигнализации SimpliSafe</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/20/dvr-root/" target="_blank">Видеорегистраторы для хранения записей с камер наблюдения имеют встроенный root-пароль</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/19/where-s-your-data/" target="_blank">Что происходит с личными данными после взлома: эксперимент компании Bitglass</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/19/power-of-community-2015/" target="_blank">PoC 2015: фингерпринтинг смартфонов. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/19/hospital-paid-ransom/" target="_blank">Голливудская клиника заплатила выкуп $17000, чтобы избавиться от шифровальщика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/19/dnssec-ddos/" target="_blank">Новый тренд в области DDoS-атак: хакеры стали использовать протокол DNSSEC</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/19/air-gapped-pc-hack/" target="_blank">Специалисты придумали еще один способ взлома отключенных от сети компьютеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/18/wordpress-layer7/" target="_blank">26 000 сайтов на базе WordPress используются для Layer 7 DDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/18/modern-hashcracking/" target="_blank">Современный хешкрекинг. Взгляд на взлом хешей изнутри</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/18/brain-wallets/" target="_blank">Хакеры украли с мозговых кошельков Bitcoin более $100 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/17/uber-hjack/" target="_blank">Российских пользователей Uber атакуют хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/17/easy-hack-205/" target="_blank">Easy Hack. Hot Potato, SuperSerial и снова XSLT</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/17/glibc-dns-bug/" target="_blank">В библиотеке glibc обнаружен баг, пользователи Linux под угрозой</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/16/ransomware-hits-hospital/" target="_blank">Малварь парализовала работу больницы, хакеры потребовали выкуп в размере  $3,6 млн</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/16/microsoft-careers-leak/" target="_blank">Один из сайтов Microsoft разглашал данные пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/16/1970-bug/" target="_blank">Apple работает над исправлением бага 1970</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/15/crypboss-cracked/" target="_blank">Алгоритм шифровальщиков HydraCrypt и UmbreCrypt взломан</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/15/asus-rt-bug/" target="_blank">В роутерах Asus обнаружен опасный баг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/15/cracka-arrested/" target="_blank">Арестован подозреваемый во взломе глав ЦРУ, ФБР и Национальной разведки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/12/skype-malvertising/" target="_blank">В Skype снова появилась вредоносная реклама</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/12/1-01-1970-bug/" target="_blank">Если выставить на iPhone дату 1.01.1970, он превратится в кирпич</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/11/paroli-ot-mozgovyh-koshelkov-bitcoin-nichem-ne-luchshe-obychnyh/" target="_blank">Пароли от мозговых кошельков Bitcoin ничем не лучше обычных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/11/vtech-terms-and-conditions/" target="_blank">Взломанная и раскритикованная VTech расписалась в том, что ее сервисы небезопасны</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/11/poseidon-apt/" target="_blank">Группа Poseidon занимается кибершпионажем с 2005 года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/11/irs-hack/" target="_blank">Хакеры подделали 101 000 деклараций и обокрали Федеральную налоговую службу США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/11/02-patch-tuesday/" target="_blank">Microsoft устранила 41 уязвимость, включая ряд критических</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/11/adwind/" target="_blank">Кроссплатформенный бэкдор Adwind продается как услуга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/10/libgraphite-bugs/" target="_blank">Обнаружены уязвимости в библиотеке обработки шрифтов Libgraphite</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/10/fbi-and-dhs-leak/" target="_blank">Опубликованы данные тысяч сотрудников ФБР и Министерства национальной безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/10/social-engineering-malware/" target="_blank">Хочешь взломать Facebook своей девушки и читерить в Hearthstone? Опасайся малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/10/metel-and-gcman/" target="_blank">Киберпреступники грабят банки, используя сложные АРТ-техники</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/10/java-patch/" target="_blank">Компания Oracle выпустила экстренное обновление Java для Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/09/hacking-single-sign-on/" target="_blank">Небезопасная аутентификация. Ищем баги в приложениях с Single Sign-On на базе SAML</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/09/dyre-botnet/" target="_blank">За ботнетом Dyre стояла кинокомпания «25 этаж», занятая производством ленты «Ботнет»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/09/corkow-hack/" target="_blank">Хакерская атака повлияла на курс доллара</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/09/unsafe-browsers/" target="_blank">Эксперты раскритиковали браузер SafeZone компании Avast и встроенный браузер Steam</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/08/nms300-flaws/" target="_blank">В продуктах Netgear обнаружили две уязвимости и выпустили для них модули Metasploit</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/05/exploits-205/" target="_blank">Обзор эксплоитов #205. PhpBB, kASLR и RCE в Ruby on Rails</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/05/motorola-focus-problems/" target="_blank">Камеры видеонаблюдения Motorola оказались не средством защиты, а дырой в безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/05/avira-direx/" target="_blank">Неизвестный взломал авторов трояна Dridex, заставив их распространять антивирус</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/05/chromodo-browser/" target="_blank">Защищенный браузер Comodo вел себя как малварь, подменяя собой Chrome</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/04/wordpress-ad-malware/" target="_blank">Хакеры атакуют WordPress с целью распространения вредоносной рекламы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/04/iot-for-kids/" target="_blank">Детские умные часы и IoT-игрушки небезопасны для маленьких пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/04/feb-nexus-upd/" target="_blank">Google снова патчит Android: устранено 7 критических багов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/03/easy-hack-rce-xml-java/" target="_blank">Easy Hack: Как получить RCE через сериализацию XML в Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/03/easy-hack-x509/" target="_blank">Easy Hack: ﻿Как проследить открытие документа c помощью конечного сертификата</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/03/easy-hack-canarytokens/" target="_blank">Easy Hack: Canarytokens помогает отловить утечку данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/03/nasa-leak/" target="_blank">НАСА отрицает утечку данных и факт взлома дронов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/03/ebay-jsfuck/" target="_blank">Администрация eBay не собирается исправлять опасную уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/02/sparkle-updater-http-flaw/" target="_blank">Безопасность OS X под угрозой из-за популярного фреймворка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/02/anonsec-nasa-leak/" target="_blank">Хакеры AnonSec взломали НАСА и попытались утопить дрона, стоимостью $222,7 млн</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/02/mediatek-bug/" target="_blank">Баг в процессорах MediaTek позволяет взломать смартфоны на базе Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/01/apache-tor-flaw/" target="_blank">Неправильно настроенные серверы Apache раскрывают данные Tor-трафика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/01/fop-leak/" target="_blank">Неизвестные заявляют, что взломали крупнейший профсоюз полиции США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/01/openssl-bugs/" target="_blank">Разработчики OpenSSL устранили две серьезные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/29/lg-snap-bug/" target="_blank">В приложении LG исправлена опасная уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/29/new-blackenergy-docs/" target="_blank">Опубликованы новые подробности о том, как троян BlackEnergy атакует Украину</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/29/ddos-2015-stat/" target="_blank">Новые рекорды DDoS: пиковая мощность атак достигает 450-500 Гбит/сек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/29/firefox-44/" target="_blank">Вышел Firefox 44 с исправлением ряда критических уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/28/icalc/" target="_blank">Специалисты обнаружили очень надоедливое вредоносное расширение для Chrome</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/28/hp-printers-for-malware/" target="_blank">Принтеры HP могут использоваться для хранения малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/28/israel-power-grid-hack/" target="_blank">Израильские электросети подверглись мощной кибератаке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/27/securom-80-pa/" target="_blank">Представлен кейген 80_PA, способный преодолеть защиту SecuROM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/27/carhacking/" target="_blank">На конференции Usenix Enigma рассказали о взломе машины при помощи музыкального трека</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/26/shareit-ploblems/" target="_blank">Файлообменное приложение Lenovo кишит багами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/26/android-permissions-2/" target="_blank">Разрешения Android 6.0 в защите и нападении</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/26/magento-flaws/" target="_blank">В Magento устранено 20 уязвимостей, включая критические</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/25/freebsd-icmpv6-bug/" target="_blank">FreeBSD падает при получении сообщения ICMPv6</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/25/themoon-worm/" target="_blank">Малварь заражает роутеры через сайты знакомств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/25/fortinet-backdoor/" target="_blank">В новых продуктах копании Fortinet тоже нашли SSH бэкдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/25/utku-sen-eda2-fail/" target="_blank">Хакеры поставили в тупик автора open source шифровальщика Hidden Tear</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/23/rfid-card-readers/" target="_blank">Хакеры научились воровать деньги с карт, оснащенных чипами RFID</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/22/exploits-204/" target="_blank">Обзор эксплоитов #204. Проблема с аутентификацией в GRUB 2</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/22/ios-cookie-bug-fixed/" target="_blank">Apple исправила критический баг, обнаруженный 2,5 года назад</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/22/teslacrypt-3/" target="_blank">Вымогатель TeslaCrypt содержал уязвимость, его шифрование взломано</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/22/google-denies-keyring-reference-leak/" target="_blank">Google уверяет, что уязвимость в ядре Linux неопасна для Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/22/oracle-fixed-248-bugs/" target="_blank">Компания Oracle исправила рекордное число багов: 248</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/21/gcat-ukrain/" target="_blank">Энергокомпании Украины вновь атакуют хакеры, сообщает ESET</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/21/msn-malvertising/" target="_blank">Портал MSN снова заразили вредоносной рекламой</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/21/hot-potato/" target="_blank">Эксплоит Hot Potato использует старые проблемы Windows, но опасен для новых версий ОС</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/21/chrome-extensions-steal-items/" target="_blank">Расширения для Chrome похищали вещи из инвентаря Steam</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/21/xss-yahoo/" target="_blank">Исследователь заработал $10 000, обнаружив XSS-уязвимость в почте Yahoo!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/20/keysforge/" target="_blank">Напечатать ключ можно по фотографии замочной скважины</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/20/linux-keyring-reference-leak/" target="_blank">0day-уязвимость в ядре Linux ставит под угрозу миллионы ПК и 60% пользователей Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/19/nexus-mods-leak/" target="_blank">Утечка данных Nexus Mods подтвердилась, пострадали 6 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/19/how-antifraud-works/" target="_blank">Как устроен антифрод. История о русских ботах, аукционных ворах и краденых миллиардах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/19/the-fappening-second-suspect/" target="_blank">В деле о хищении фотографий обнаженных знаменитостей появился второй подозреваемый</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/19/affinity-gaming-law-suit/" target="_blank">Владельцы казино подали в суд на ИБ-компанию Trustwave</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/19/blackenergy-boryspil/" target="_blank">Украина обвиняет российских хакеров в атаке на киевский аэропорт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/18/cryptsy-face-bankruptcy/" target="_blank">Биржу криптовалют Cryptsy взломали и ограбили</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/18/android-on-netbook/" target="_blank">Android на нетбуке? Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/18/lastpass-one-more-problem/" target="_blank">В менеджере паролей LastPass снова нашли серьезную уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/16/gatekeeper-still-vulnerable/" target="_blank">GateKeeper по-прежнему уязвим, патч Apple не устранил проблему</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/16/silverlight-bug-found-by-kaspersky-lab/" target="_blank">Специалисты Kaspersky Lab искали критическую уязвимость в Silverlight почти полгода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/15/openssh-roaming/" target="_blank">В OpenSSH исправили баг, допускающий утечку приватных ключей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/15/smart-watch-keylogger/" target="_blank">Умные часы можно использовать в качестве кейлоггера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/15/cisco-patch/" target="_blank">Компания Cisco удалила из своих продуктов бэкдор и исправила два критических бага</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/14/android-ransomware-anatomy/" target="_blank">Шифровальщик для Android. Полная анатомия ПО, шифрующего личные данные пользователя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/14/waledac-upot-spam/" target="_blank">Старый ботнет использовали для махинации с акциями компании, выращивающей марихуану</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/14/ring-wifi-bug/" target="_blank">Эксперты сумели получить пароль от Wi-Fi, взломав видеодомофон</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/13/ebay-xss/" target="_blank">На сайте eBay обнаружили XSS-уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/13/fortios-backdoor/" target="_blank">Неизвестный исследователь обнаружил бэкдор в составе FortiOS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/13/ezcast-bugs/" target="_blank">Стриминговые устройства EZCast компрометируют безопасность пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/13/james-clapper-hacked/" target="_blank">Школьник, взломавший почту директора ЦРУ, добрался до главы Национальной разведки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/12/trend-micro-antivirus-bugs/" target="_blank">В антивирусе Trend Micro исправлена серьезная уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/12/gm-bug-bounty/" target="_blank">Автоконцерн General Motors учредил программу вознаграждений за уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/12/nvidia-chrome-such-incognito/" target="_blank">Баг в GPU NVidia нарушает работу режима инкогнито Google Chrome</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/12/dell-support-scam/" target="_blank">Пользователей Dell атакуют скаммеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/11/fud/" target="_blank">Страх, неизвестность, сомнения. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/11/new-world-hacking/" target="_blank">Сайты BBC и Дональда Трампа подверглись мощнейшей атаке 602 Гбит/сек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/11/drupal-upd-bugs/" target="_blank">UPD Процесс обновления Drupal небезопасен</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/08/brain-test-is-back/" target="_blank">В Google Play Store снова обнаружили малварь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/08/censys/" target="_blank">Что умеет Censys? Ищем уязвимости, ключи и сертификаты новым поисковиком</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/08/lets-encrypt-for-angler/" target="_blank">Хакеры начали использовать сертификаты Let&#8217;s Encrypt</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/08/blackphone-modem-bug/" target="_blank">Единственная уязвимость ставит под вопрос всю безопасность Blackphone</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/07/zigbee-jamming-bug/" target="_blank">Воры ликуют: домашние системы безопасности Comcast очень легко взломать</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/07/https-bicycle/" target="_blank">Представлена новая атака на HTTPS — HTTPS Bicycle</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/06/cybrary/" target="_blank">Google приняла приложение для пентестеров за малварь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/06/zerodium-flash-bounty/" target="_blank">Zerodium предлагает $100 000 за 0day-эксплоит для Flash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/06/android-critical-flaws/" target="_blank">Google исправила пять критических уязвимостей в Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/05/blackenergy/" target="_blank">Вредонос BlackEnergy использовался для атаки на украинские энергосети</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/04/x-tools-204/" target="_blank">Лучший хакерский софт января. X-TOOLS #204</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/31/easy-hack-hibernate-ql/" target="_blank">Easy Hack: Эксплуатируем инъекции Hibernate Query Language</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/05/jabber-cisco-flaw/" target="_blank">Jabber-клиент Cisco уязвим перед атаками типа man-in-the-middle</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/31/krebs-paypal-hacked/" target="_blank">PayPal Брайана Кребса взломали дважды и попытались перевести деньги террористу ДАИШ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/31/valve-steam-ddos/" target="_blank">Valve извинилась за сбой в работе Steam и обвинила в своих проблемах хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/31/android-spywaller/" target="_blank">Вредонос для Android научился блокировать работу антивирусов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/30/easy-hack-xssi/" target="_blank">Easy Hack: Как добыть данные через Cross Site Scripting Inclusion</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/30/radamant-vs-emsisoft/" target="_blank">Алгоритм шифрования вымогательской малвари Radamant взломан, а его автор очень зол</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/30/joomla-0day-very-popular/" target="_blank">Сайты на базе Joomla атакуют до 20 000 раз в день</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/29/easy-hack-one-time-pad-attack/" target="_blank">Easy Hack: Атака на One-Time Pad с помощью Crib Drag</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/29/avg-web-tuneup-xss/" target="_blank">AVG навязывает пользователям небезопасное расширение для Chrome</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/29/flash-player-patch/" target="_blank">Внеплановый патч для Flash Player исправляет кучу багов, включая 0day</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/25/hyatt-hotels-corporation-hack/" target="_blank">Платежная система отелей Хайятт подверглась взлому</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/25/livestream-breach/" target="_blank">Стриминговый сервис Livestream обнулил пароли пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/24/crypto-part1/" target="_blank">Погружение в крипту. Часть 1: как работают самые известные шифры в истории?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/25/juniper-networks-nsa/" target="_blank">АНБ знало о бекдоре в софте Juniper Networks</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/24/one-more-celebrity-hack/" target="_blank">Хакер взломал 130 знаменитостей и похитил сценарии еще не вышедших телешоу</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/23/web-apps-bugs/" target="_blank">Уязвимости найдены в нескольких популярных веб-приложениях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/23/java-is-unsecure/" target="_blank">Oracle заставили признать, что Java небезопасна</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/23/screen-os-backdoor-4/" target="_blank">Бекдор в ScreenOS уже пытаются использовать хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/23/hello-kitty-in-danger/" target="_blank">В сеть попали данные 3,3 млн фанатов Hello Kitty</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/23/whatsapp-emoji-bomb/" target="_blank">Как уронить WhatsApp? Отправить в сообщении 4000 эмодзи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/22/screen-os-backdoor-3/" target="_blank">Пароль для бекдора в ScreenOS нашли за 6 часов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/21/screen-os-backdoor-2/" target="_blank">Проблемой бекдора в коде ScreenOS занимается ФБР</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/19/target-flaw/" target="_blank">Приложение Target сливало данные пользователей всем желающим</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/18/pocket-soft-203/" target="_blank">Карманный софт. Выпуск #14: iOS 9 и все-все-все</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/19/wineberg-vs-facebook/" target="_blank">Facebook угрожала судом исследователю, взломавшему Instagram</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/18/enterprise-killer/" target="_blank">Баг в Microsoft Office можно использовать для атаки на Outlook</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/18/screen-os-backdoor/" target="_blank">В коде операционной системы ScreenOS нашли бекдор, дешифрующий VPN-трафик</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/17/grub2-auth-bug/" target="_blank">Нужно обойти аутентификацию Linux? Просто нажми backspace 28 раз</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/17/anonymous-esa-hack/" target="_blank">Anonymous взломали Европейское управление космических исследований «ради лулзов»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/17/fireeye-critical-flaw/" target="_blank">Критическая уязвимость в продуктах FireEye активируется одним письмом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/17/xmas-ddos-is-coming/" target="_blank">Хакеры угрожают испортить Рождество пользователям PlayStation Network и Xbox Live</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/17/routers-flaws/" target="_blank">Обнаружена новая порция уязвимостей в беспроводных маршрутизаторах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/17/vtech-arrest/" target="_blank">Арестован подозреваемый во взломе Vtech</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/15/active-directory/" target="_blank">Лесорубы Windows: захватываем Active Directory</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/16/kerberos-old-new-bug/" target="_blank">Старый баг в протоколе аутентификации Kerberos приняли за новый</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/15/playstation-4-jailbroken/" target="_blank">Удалось осуществить джейлбрейк PlayStation 4</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/15/joomla-0day/" target="_blank">Преступники активно эксплуатируют новую 0day уязвимость в Joomla</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/14/cybercrime-article-angler/" target="_blank">Хакеры шутят: статья The Guardian о кибепреступности была заражена малварью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/14/isolate-windows/" target="_blank">Как обеспечить изоляцию процессов и не сломать Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/14/wp-engine-hacked/" target="_blank">Взломан популярный WordPress-хостинг WP Engine</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/12/coin-mitm/" target="_blank">Исследователь превратил платежный гаджет Coin в хакерский инструмент</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/apple-flaws-count/" target="_blank">Symantec: количество угроз для OS X и iOS продолжает расти</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/isis-trolling/" target="_blank">11 декабря объявлено днем троллинга ДАИШ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/valve-new-trading-rules/" target="_blank">Valve усилила безопасность торговых механизмов Steam</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/produktsiya-cisco-tozhe-podverzhena-uyazvimosti-deserializatsii-v-java/" target="_blank">Продукция Cisco тоже подвержена уязвимости десериализации в Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/spy-games/" target="_blank">Spy games: тестируем физическую безопасность объекта. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/root-dns-ddos/" target="_blank">Неизвестные атаковали корневые DNS-серверы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/11/xbox-live-cert/" target="_blank">Microsoft выпустила 12 патчей и случайно допустила утечку сертификата Xbox Live</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/10/ensilo-rwx-bug/" target="_blank">Эксперты обнаружили уязвимость в продуктах AVG, McAfee и Kaspersky Lab</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/09/java-deserialization-flaws-2/" target="_blank">Более 40 популярных библиотек подвержены уязвимости десериализации в Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/09/samsung-android5-rce/" target="_blank">Эксплоит: удаленное выполнение кода в устройствах Samsung с Android 5</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/09/midas-flaws/" target="_blank">Исправлена серьезная уязвимость в детекторах газа Midas</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/08/cyber-extortion-copycats/" target="_blank">У хакеров-шантажистов появляется все больше подражателей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/08/nix-exploits-2015/" target="_blank">«Птичья болезнь»: самые значимые уязвимости в *nix за 2015 год</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/08/esm-auth-bug/" target="_blank">McAfee Security Manager содержит опасный баг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/08/innotab-in-the-nut-shell/" target="_blank">Эксперты признали детские планшеты VTech небезопасными</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/07/after-jailbreak/" target="_blank">Что можно сделать с iPhone после того, как выполнен джейлбрейк</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/07/old-bug-made-6-mln-devices-vulnerable/" target="_blank">6 миллионов устройств по-прежнему уязвимы из-за бага трехлетней давности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/07/bloatware-is-bad/" target="_blank">Хакер без предупреждения опубликовал эксплоиты для устройств Dell, Toshiba и Lenovo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/05/opm-hackers-arrested/" target="_blank">Китай арестовал хакеров, ответственных за взлом Службы управления персоналом США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/05/vulnerable-languages/" target="_blank">Компания Veracode подсчитала, какие языки порождают больше всего багов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/04/cryptowall-plus-pony/" target="_blank">Вымогательская малварь похищает пароли, перед тем как зашифровать данные</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/04/belkin-n150-bugs/" target="_blank">Обнаружен ряд активных уязвимостей в роутерах Belkin N150</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/04/x-tools-203/" target="_blank">Лучший хакерский софт декабря. X-TOOLS #203</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/04/dropbox-for-c-and-c/" target="_blank">Китайские хакеры используют Dropbox для связи с C&#038;C серверами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/03/vtech-leak-2/" target="_blank">В ходе взлома VTech пострадали 11 млн пользователей, украдены фото и логи детей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/02/hipchat-exploits/" target="_blank">Полный набор уязвимостей в HipChat — от XSS до RCE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/02/greek-banks-ddos/" target="_blank">Хакеры требуют от греческих банков выкуп в размере 21 млн долларов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/01/smartlink-problems/" target="_blank">Эксперт нашел способ взломать систему подсветки билбордов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/01/raspbian-random-numbers-gen-bug/" target="_blank">Raspberry Pi генерирует предсказуемые ключи SSH</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/01/linux-encoder-rus/" target="_blank">Авторы Linux.Encoder предлагают пользователям из России и СНГ бесплатную расшифровку файлов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/01/hacking-browser/" target="_blank">16 аддонов, которые превратят твой браузер в хакерский инструмент</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/30/exploits-202/" target="_blank">Обзор эксплоитов #202. Уязвимости в Parallels Desktop, Kaseya и My Cloud</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/30/shellter/" target="_blank">Инъекция по-черному. Обходим антивирусы при помощи Shellter</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/01/telegram-metadata/" target="_blank">Мессенджер Telegram сливает метаданные всем желающим</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/30/vtech-leak/" target="_blank">Хакеры похитили данные 5 млн аккаунтов, взломав крупного производителя электронных игрушек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/30/smart-tv-malware/" target="_blank">Исследователь показал, что взломать умные телевизоры очень легко</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/28/iot-device-crypto-keys/" target="_blank">Миллионы IoT-устройств используют одинаковые криптографические ключи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/28/vpn-deanon/" target="_blank">Уязвимость Port Fail позволяет узнать настоящий IP-адрес пользователей VPN и BitTorrent</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/28/win-phone-root/" target="_blank">Впервые создана утилита для получения root на Windows Phone</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/27/gost-sec-vs-isis/" target="_blank">Хакеры взломали сайт ИГ и призвали экстремистов успокоиться</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/27/china-cybercrime-trends/" target="_blank">Исследование: сколько стоят услуги китайских хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/26/easy-hack-rfi-autoload/" target="_blank">Easy Hack: загрузка файлов в PHP через autoload</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/26/refud-me/" target="_blank">В Великобритании арестованы создатели сайта для тестирования малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/26/state-department-phishing/" target="_blank">Госдеп заметил атаку иранских хакеров только после предупреждения от Facebook</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/26/more-flaws-for-dell/" target="_blank">Создан сайт для выявления новых уязвимостей на ноутбуках Dell</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/25/magspoof/" target="_blank">Найден способ предсказать номер карты American Express</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/25/united-airlines-6-month-bug/" target="_blank">United Airlines понадобилось полгода, чтобы закрыть критическую уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/24/edellroot/" target="_blank">Ноутбуки Dell поставляются с проблемным root-сертификатом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/24/sj-data-killer/" target="_blank">SJ Data Killer — флешка с функцией уничтожения данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/24/android-talkback-sniffer/" target="_blank">Получаем пользовательские данные на Android с экранов сторонних приложений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/24/truecrypt-new-audit/" target="_blank">Шифровальщик TrueCrypt содержит баги, но в целом безопасен</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/23/arris-backdoor-within-a-backdoor/" target="_blank">Более 600 000 кабельных модемов Arris содержат бэкдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/23/apt-review/" target="_blank">Хроники целевых атак 2015: находки Hacking Team, червь Duqu и руткит Turla</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/23/steganography/" target="_blank">Стеганография по-прежнему пользуется популярностью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/21/shedun-new-trick/" target="_blank">Троянец Shedun использует легитимные функции Android для обмана жертв</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/20/easy-hack-pdf-requests/" target="_blank">Easy Hack: отправляем произвольные запросы из PDF</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/21/d-link-bug/" target="_blank">Найдена уязвимость в устройствах D-Link</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/20/facebook-bug-2/" target="_blank">Баг в Facebook позволяет создавать фальшивые события от лица других пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/20/how-to-write-pentest-report/" target="_blank">Как писать отчет о проделанном пентесте? Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/20/zerodium-price/" target="_blank">Компания Zerodium рассказала о том, сколько стоят уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/19/lastpass-bugs/" target="_blank">В менеджере паролей LastPass обнаружили кучу новых уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/19/eff-fake-site/" target="_blank">Поддельный сайт Фонда электронных рубежей закроют</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/18/anonymous-vs-is/" target="_blank">Anonymous взломали более 5500 Twitter-аккаунтов ИГ, террористы назвали хактивистов «идиотами»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/18/group-ib-atm-flaw/" target="_blank">Group-IB разоблачила новую схему, позволившую хакерам похитить более 250 млн рублей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/18/bitlocker-bypass/" target="_blank">Шифрование BitLocker можно обойти за несколько секунд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/18/badbarcode/" target="_blank">На PacSec продемонстрировали атаку на сканеры штрихкодов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/18/linux-encoder-1-help/" target="_blank">Linux.Encoder.1 поразил тысячи сайтов, как избавиться от вредоноса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/17/vbulletin-flaw/" target="_blank">Хакеры активно эксплуатируют новую брешь в vBulletin</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/17/keyloggers-2015/" target="_blank">Обзор The Rat и SpyGo — двух лучших современных кейлоггеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/17/conficker-in-police-cam/" target="_blank">Камеры, которые носит полиция, заражены Conficker</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/16/twitter-cc/" target="_blank">Отмена лимита в 140 символов превращает Twitter в командный сервер ботнета</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/16/samsung-mitm/" target="_blank">Смартфоны Samsung можно прослушивать удаленно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/16/gmail-spoofing/" target="_blank">Приложение Gmail делает спуфинг простым как никогда</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/13/easy-hack-rce-xslt/" target="_blank">Easy Hack: выполняем произвольный код на сервере через уязвимость в XSLT</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/13/chrome-javascript-bug/" target="_blank">Все версии Android можно взломать через новую уязвимость в Chrome</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/13/fbr-paid-for-tor-attack/" target="_blank">ФБР заплатило ученым из Университета Карнеги-Меллона $1 млн за взлом Tor</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/13/reverse-engineered-android/" target="_blank">Топовые Android-приложения легко отреверсить</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/12/pre-loaded-malware/" target="_blank">На Amazon продавались планшеты с предустановленным трояном</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/11/x-tools-202/" target="_blank">Лучший хакерский софт ноября. X-TOOLS #202</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/11/java-deserialization-flaws/" target="_blank">Приложения на Java подвержены серьезной уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/11/adobe-flash-bugs/" target="_blank">Уязвимости в Adobe Flash Player — самый популярный компонент наборов эксплоитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/10/jabs-hacked/" target="_blank">Хакеры, взломавшие директора ЦРУ, добрались до правоохранительных органов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/10/nsa-disclose-information/" target="_blank">АНБ раскрывает данные о 91% уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/10/cyber-caliphate/" target="_blank">Хакеры ИГ взломали более 54 000 Twitter-аккаунтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/09/usb-killer-campaign/" target="_blank">На Indiegogo собирают деньги на облегченную версию USB Killer</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/09/omnirat/" target="_blank">Хакеры продают мультиплатформенный OmniRAT за $25</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/09/lizard-squad-owned-cox/" target="_blank">Провайдер Cox Communications оштрафован на $600 тысяч из-за хакеров Lizard Squad</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/06/protonmail-ddos/" target="_blank">Сервис ProtonMail заплатил выкуп хакерам, но все равно подвергся атаке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/06/fbi-mark-giuliano-hacked/" target="_blank">Школьник, взломавший директора ЦРУ, заявил, что теперь взломал замдиректора ФБР</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/06/hunting-mobile-data/" target="_blank">Кто ворует деньги с твоего смартфона?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/05/easy-hack-sop-pdf/" target="_blank">Easy Hack: Обход SOP через content smuggling с PDF</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/05/ibackdoor/" target="_blank">Еще один SDK для iOS-приложений содержит бекдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/05/shuanet/" target="_blank">20 000 поддельных Android-приложений содержат малварь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/05/xcodeghost-s/" target="_blank">Обнаружена новая модификация XcodeGhost</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/05/keefarce/" target="_blank">Представлен бесплатный инструмент для взлома менеджера паролей KeePass</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/04/vbulletin-patch-and-panic/" target="_blank">Взлом компании vBulletin породил в сети панику</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/04/baidu-sdk/" target="_blank">SDK компании Baidu, содержащий опасный бекдор, используется в 14 000 Android-приложений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/03/pagefair-malware/" target="_blank">Более 500 сайтов пострадали из-за взлома антиблокировщика PageFair</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/03/sparkasse-atm/" target="_blank">Банкоматы в Германии были уязвимы для хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/03/zerodium-1-mln-won/" target="_blank">Конкурс завершен, компания Zerodium выплатит 1 млн долларов за джейлбрейк iOS 9.1/9.2b</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/03/not-so-safe-starttls/" target="_blank">Исследователи предупреждают: рассчитывать на надежность STARTTLS не стоит</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/03/vbulletin-hacked/" target="_blank">Компания vBulletin подверглась атаке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/02/reflection-ddos/" target="_blank">Зафиксированы отраженные DDoS-атаки трех новых типов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/30/mysql-ddos/" target="_blank">Серверы MySQL используют для DDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/30/not-so-safe-lte/" target="_blank">Устройство для взлома 4G/LTE сетей можно собрать за $1400</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/30/easy-hack-svg-xss/" target="_blank">Easy Hack: XSS с помощью SVG</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/30/alpr-security/" target="_blank">EFF сообщает: подключиться к системам распознавания номерных знаков может любой</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/30/brennan-outraged/" target="_blank">Директор ЦРУ взбешен из-за взлома почтового ящика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/29/vk-emoji-bug/" target="_blank">Обработка смайликов «ВКонтакте» позволяла выполнить вредоносный код</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/29/000webhost/" target="_blank">Бесплатный хостинг 000Webhost взломан, похищены данные 13,5 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/29/hsts-and-hpkp-tracking/" target="_blank">Через HSTS и HPKP можно шпионить за пользователями Chrome и Firefox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/28/joomla-sql-bug/" target="_blank">Свежая уязвимость в Joomla уже активно используется хакерами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/28/talktalk-hacked-2/" target="_blank">По подозрению во взломе провайдера TalkTalk арестован 15-летний подросток</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/28/pay-the-ransom/" target="_blank">Столкнулись с вымогательским ПО? ФБР советует заплатить</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/28/cctv-botnet/" target="_blank">Ботнет из камер видеонаблюдения участвует в DDoS-атаках</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/27/talktalk-hacked/" target="_blank">Неизвестные взломали британского провайдера TalkTalk</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/26/easy-hack-201-java-2/" target="_blank">Easy Hack #201. Часть 4: Эксплуатация уязвимостей через сериализованные объекты Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/26/volte-bugs/" target="_blank">Обнаружены уязвимости в технологии VoLTE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/23/fitbit-bluetooth-hack/" target="_blank">Фитнес-трекер Fitbit можно взломать за 10 секунд, но разработчики Fitbit с этим не согласны</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/22/brennan-docs/" target="_blank">Wikileaks публикует переписку директора ЦРУ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/22/magento-under-attack/" target="_blank">Тысячи сайтов на платформе Magento подверглись атаке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/22/82648/" target="_blank">Французы рассказали о том, как хакеры ломают банковские chip-and-pin карты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/21/seagate-wd-bugs/" target="_blank">Обнаружен ряд незакрытых уязвимостей в продуктах Seagate и Western Digital</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/20/cia-director-hacked-by-school-student/" target="_blank">UPD. Школьник взломал почту директора ЦРУ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/20/ikettle/" target="_blank">Исследователь продемонстрировал взлом Wi-Fi через умный чайник</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/20/new-app-store-flaw/" target="_blank">Более 250 приложений в Apple App Store шпионили за пользователями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/19/adobe-flash-bug-fixed/" target="_blank">Устранена критическая 0day-уязвимость в Adobe Flash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/19/flare-on-challenge/" target="_blank">Проходим FLARE-On Challenge: разбор заданий от FireEye Labs Advanced Reverse Engineering team</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/19/1password-leaks-metadata/" target="_blank">1Password хранит данные в незашифрованном виде</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/19/efast-browser/" target="_blank">Вредонос подменяет собой весь браузер сразу</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/16/easy-hack-201-java/" target="_blank">Easy Hack #201. Часть 3: подмена данных в сериализованных объектах Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/16/radiowave-hack/" target="_blank">Помощникам Siri и Google Now можно отправлять удаленные беззвучные команды</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/16/unsecure-android/" target="_blank">88% Android-устройств подвержены критическим уязвимостям</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/15/ms-patch-tuesday/" target="_blank">Уязвимость в IE распространялась на все версии Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/14/flash-0day/" target="_blank">Обнаружен 0day-эксплоит для обновленного Adobe Flash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/14/easy-hack-201-windows-wsus/" target="_blank">Easy Hack #201. Часть 2: захват контроля над Windows через WSUS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/14/zennoposter-5-bots/" target="_blank">Конструктор ботов. Обзор ZennoPoster 5 — средства автоматизации для веба</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/14/usb-killer-2-0/" target="_blank">USB Killer 2.0 убьет компьютер еще быстрее</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/14/ormandy-kis-bug/" target="_blank">«Лаборатория Касперского» закрыла еще одну уязвимость, найденную Орманди</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/13/google-rewarded-ved/" target="_blank">Google наградила исследователя, который случайно купил Google.com</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/13/live-com-reward/" target="_blank">$24000 заработал исследователь, нашедший уязвимость в системе Live.com</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/12/improvised-ddos/" target="_blank">Спрос на подручный DDoS. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/12/netgear-bug/" target="_blank">Серьезную уязвимость в роутерах Netgear уже эксплуатируют хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/12/wordpress-xml-rpc/" target="_blank">WordPress уязвим к усиленным брутфорс-атакам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/12/cisco-webvpn-attacks/" target="_blank">Злоумышленники крадут идентификационные данные, используя Cisco WebVPN</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/09/android-update-anatomy/" target="_blank">Почему так медленно, брат? Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/09/easy-hack-201-dir-traversal/" target="_blank">Easy Hack #201. Часть 1: эксплуатация directory traversal в архивах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/10/vk-music/" target="_blank">Приложение «Музыка ВКонтакте» содержит вредоносный код</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/09/looppay-hacked/" target="_blank">Китайские хакеры предприняли попытку атаковать Samsung Pay</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/08/huawei-bugs/" target="_blank">Роутеры Huawei – настоящее решето, но исправлять уязвимости компания не собирается</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/08/trump-hotel-collection-hacked/" target="_blank">Сеть отелей Дональда Трампа взломали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/08/anti-angler-operation/" target="_blank">Cisco прервала деятельность хакеров, использующих Angler Exploit Kit</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/07/hacker-halted-2015/" target="_blank">Точка зрения на Hacker Halted 2015. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/07/owaauth-dll/" target="_blank">Обнаружена атака, использующая Outlook Web Application</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/07/endress-hauser-bug/" target="_blank">Endress+Hauser и CodeWrights закрыли уязвимость в ПО через 2,5 года после уведомления</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/06/htc-security-updates/" target="_blank">Глава HTC Америка: «Гарантированные ежемесячные апдейты для Android-устройств, это нереалистично»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/06/yispecter/" target="_blank">Новый вредонос для iOS поражает устройства с джейлбрейком и без</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/05/x-tools-201/" target="_blank">X-TOOLS #201. Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/05/data-breach-weekend/" target="_blank">Зафиксированы две крупные утечки данных: пострадали T-Mobile и брокеры из Scottrade</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/02/patreon-hacked/" target="_blank">Почти 15 ГБ пользовательских данных украдено с краудфандингового сайта Patreon</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/02/exploits-201/" target="_blank">Обзор эксплоитов #201. Эксплоит для Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/02/stagefright-2-0/" target="_blank">Обнаружен Stagefright 2.0, MP3 и MP4 опасны для Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/02/gatekeeper-bypass/" target="_blank">Обойти Gatekeeper в OS X совсем просто, сообщает компания Synack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/01/winrar-sfx-bug/" target="_blank">Уязвимость в WinRAR ставит под угрозу порядка 500 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/01/linux-botnet/" target="_blank">Linux-ботнет замечен в DDoS-атаках мощностью 150 ГБ/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/01/truecrypt-bugs/" target="_blank">В TrueCrypt обнаружены критические уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/30/fake-bsod/" target="_blank">Хакеры используют фальшивый BSOD для осуществления атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/30/mobile-ad-networks-ddos/" target="_blank">Специалисты CloudFlare обнаружили необычную DDoS-атаку</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/29/http-cookie-bug/" target="_blank">Специалисты CERT обнаружили проблему с cookie во всех современных браузерах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/25/defcon-moscow-dc7499-accounce/" target="_blank">3 октября пройдет очередная встреча группы DEFCON Moscow DC7499. Приходи!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/25/uber-china/" target="_blank">Взломанные аккаунты Uber используются в Китае</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/24/imgur-flaw/" target="_blank">Баг в Imgur использовался для атак на пользователей имиджбордов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/24/opm-hack-5/" target="_blank">В ходе взлома Службы управления персоналом США украдено 5,6 млн отпечатков пальцев</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/24/app-store-xcode/" target="_blank">В результате атаки на App Store пострадали тысячи приложений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/24/kaspersky-av-bugs/" target="_blank">Тэвис Орманди рассказал об уязвимостях в «Антивирусе Касперского»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/23/braintest/" target="_blank">В Google Play обнаружен новый вредонос, поразивший около миллиона устройств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/23/ios-9-siri-bug/" target="_blank">iOS 9 позволяет получить доступ к фотографиям и контактам, не вводя пароль</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/23/3030-bug/" target="_blank">Chrome падает из-за нескольких символов в URL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/22/zerodium-1-mln-bug-bounty/" target="_blank">Компания Zerodium предлагает $1 млн за эксплоит для iOS 9</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/21/at-t-lawsuit/" target="_blank">Компания AT&#038;T подала в суд на бывших сотрудников за нелегальную разблокировку телефонов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/21/wordpress-visitortracker/" target="_blank">Тысячи сайтов на базе WordPress пострадали в ходе новой вредоносной кампании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/21/xcodeghost/" target="_blank">Эпидемия в App Store, магазин подвергся атаке хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/18/x-tools-200/" target="_blank">X-TOOLS #200. Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/18/dlink-keys/" target="_blank">D-Link случайно опубликовала секретные ключи для подписи своих прошивок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/18/bugzilla-email-bug/" target="_blank">Критическая уязвимость в Bugzilla позволяет воровать баги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/17/all-about-ios-9/" target="_blank">iOS 9: новые фичи, релиз, проблемы с обновлением и баг в AirDrop</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/16/android5-hack/" target="_blank">Снятие блокировки в Android 5.x: пошаговая инструкция</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/16/asrb/" target="_blank">Intel подарит хакеру автомобиль за успешный взлом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/21/little-doctor/" target="_blank">Представлен опенсорсный фреймворк Little Doctor для взлома приложений чатов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/21/ragentek-group-backdoor/" target="_blank">Еще один скрытый бэкдор обнаружен на 3 000 000 Android-девайсов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/18/qualcomm-bug-bounty/" target="_blank">Компания Qualcomm готова заплатить до $15 000 за уязвимости в своих продуктах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/18/mega-hacked/" target="_blank">Хакеры из Amn3s1a Team утверждают, что похитили исходные коды файлообменника Mega.nz</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/18/allo-google-assistant-and-pixel/" target="_blank">Allo, Google Assistant и Pixel. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/18/x-tools-214/" target="_blank">Лучший хакерский софт ноября. X-TOOLS #214</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/18/ios-lockscreen-bypass-2/" target="_blank">Обнаружен новый способ обхода экрана блокировки iOS с помощью Siri</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/17/ransoc-blackmail/" target="_blank">Локер Ransoc изучает соцсети и файлы жертвы, чтобы персонализировать свои угрозы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/16/poisontap/" target="_blank">PoisonTap: устройство за $5, способное взломать заблокированный ПК за одну минуту</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/16/rane-developments/" target="_blank">Мошенники заработали миллионы, нелегально генерируя и продавая игровую валюту</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/16/zeronights-hack-o-clock/" target="_blank">It is ZeroNights, it’s hack o’clock. Конференция начинается завтра!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/16/targuess/" target="_blank">Многочисленные утечки данных последних лет превратили брутфорс в эффективное оружие</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/15/cryptsetup-flaw/" target="_blank">Через Cryptsetup можно получить доступ к root shell, если зажать Enter на 70 секунд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/15/crysis-master-keys/" target="_blank">Неизвестный опубликовал мастер-ключи от шифровальщика CrySiS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/15/nes-classic-edition-custom-distro/" target="_blank">На старый-новый хит компании Nintendo, консоль NES Classic Edition, установили Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/15/hack-the-army/" target="_blank">Американская армия собирается запустить собственную bug bounty программу</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/15/backdoor-irc-medusa-1/" target="_blank">Специалисты «Доктор Веб» обнаружили ботнет, недавно атаковавший российские банки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/14/windtalker/" target="_blank">Пароли, PIN-коды и другие данные можно перехватить, анализируя изменения Wi-Fi сигнала</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/14/fbi-unlock-gadgets/" target="_blank">87% заблокированных устройств, попавших в руки ФБР, были успешно взломаны</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/14/ffn-leaks/" target="_blank">LeakedSource сообщил об утечке данных 400 млн пользователей сервисов для взрослых</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/14/failed-robbery/" target="_blank">В Берлине взломщики по ошибке взорвали похожее на банкомат устройство</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/14/pwnfest-2016/" target="_blank">На PwnFest 2016 Google Pixel взломали за 60 секунд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/11/blacknurse/" target="_blank">Атака BlackNurse вызывает отказ в работе брандмауэров через ICMP-пакеты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/11/spotify-junk-data/" target="_blank">Приложение Spotify «убивает» диски пользователей, записывая сотни гигабайт данных в день</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/11/dns-resolve/" target="_blank">Опасный резолв. Разбираем на пальцах три мощных вектора атак через DNS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/11/tesco-bank-attacked-by-retefe/" target="_blank">ESET: Tesco Bank пострадал из-за атаки трояна Retefe</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/11/heimdall-ransomware/" target="_blank">Исследователь написал на PHP опенсорсного шифровальщика Heimdall</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/10/webview-tel-uri/" target="_blank">Баг в iOS WebView заставляет iPhone звонить на произвольные номера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/10/fancy-bear-using-0days/" target="_blank">Хак-группа Fancy Bear выжала из 0-day уязвимости в ядре Windows все, что смогла</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/10/fuck-uac/" target="_blank">FUCK UAC! 10 способов обхода системы User Account Control в Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/10/russian-banks-ddosed/" target="_blank">Пять крупных российских банков подверглись DDoS-атакам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/10/november-patch-tuesday/" target="_blank">Microsoft, Adobe и Google представили ноябрьские обновления</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/09/ddos-killed-heating-system/" target="_blank">DDoS-атака вывела из строя систему теплоснабжения в небольшом финском городе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/09/tormail-fbi/" target="_blank">В 2013 году ФБР взламывало пользователей даркнет-сервиса TorMail без разбора</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/09/yandex-audit-automatization/" target="_blank">Как мы автоматизировали аудит безопасности в «Яндексе». Колонка Тараса Иващенко</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/09/tesco-bank-robbery/" target="_blank">Tesco Bank приостановил все онлайновые операции после компрометации 40 000 аккаунтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/08/philips-hue-sos/" target="_blank">Исследователи взломали IoT-лампочки Philips Hue, заставив их сигналить SOS морзянкой</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/08/oauth-2-0-and-sso-problems/" target="_blank">Более миллиарда Android и iOS устройств уязвимы перед атаками через OAuth 2.0 протокол</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/07/filezilla-secure/" target="_blank">Пострадавший от малвари разработчик создал свой форк FileZilla с шифрованием паролей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/07/qrator-real-ip/" target="_blank">Вычисляем реальный IP сервера за CloudFlare/Qrator</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/15/master-key/" target="_blank">Мастер-ключ ко всем компьютерам. Создаем мультизагрузочную флешку с набором полезностей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/16/synful-knock/" target="_blank">UPD. Обнаружена новая атака на маршрутизаторы Cisco</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/15/ashley-madison-passwords-2/" target="_blank">Опубликованы самые популярные пароли Ashley Madison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/14/easy-hack-200/" target="_blank">Easy Hack #200. Пароли админа Windows, уязвимости веб-фреймворков и ключи протокола Cisco</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/14/android-trojan-mkero-a/" target="_blank">Через Google Play распространяется троян, умеющий обходить CAPTCHA</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/11/vxworks-bug/" target="_blank">ОС VxWorks в марсоходах допускает удаленное исполнение кода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/11/usb-rubber-ducky/" target="_blank">Гадкий утенок. Превращаем обычную флешку в USB Rubber Ducky</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/11/stagefright-proof-of-concept/" target="_blank">Компания Zimperium обнародовала эксплоит для уязвимости Stagefright</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/11/ashley-madison-passwords/" target="_blank">Расшифрованы 11 миллионов парольных хешей Ashley Madison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/10/quantity-ne-quality/" target="_blank">Quantity ne Quality. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/09/modular-smartphone-future/" target="_blank">Есть ли будущее у модульных смартфонов? Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/08/whatsapp/" target="_blank">Уязвимость в WhatsApp поставила под угрозу миллионы пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/08/telegram-bot/" target="_blank">Телеграфирует робот. Пишем бота для Telegram на Python</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/10/turla-satellite-hack/" target="_blank">Русскоязычная хак-группа Turla ломает спутники, чтобы скрыть свои следы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/08/paypal-auth-bug/" target="_blank">Уязвимость в мобильном приложении PayPal позволяет миновать двухфакторную аутентификацию</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/08/antiviruses-bugs/" target="_blank">«Лаборатория Касперского» исправила критическую уязвимость в своих продуктах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/08/seagate-root-login/" target="_blank">Жесткие диски Seagate уязвимы для атак, благодаря недокументированному root-аккаунту</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/07/malware-game-rules/" target="_blank">Заставь малварь играть по правилам. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/07/lidar-hack/" target="_blank">Устройство за $60 обманывает лидар беспилотного автомобиля</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/07/jeep-renegade-bug/" target="_blank">Fiat Chrysler отзывает еще 7810 автомобилей из-за опасности взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/07/bugzilla-hack/" target="_blank">Взломан багтрекер Mozilla, хакеры украли данные о 185 багах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/07/simplocker-xmpp/" target="_blank">Троян-вымогатель использует протокол XMPP и требует денег от имени АНБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/04/ashley-madison-fall/" target="_blank">Падение Ashley Madison. Как хакеры разоблачили нечестный сайт знакомств и его пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/04/autoclick-attack/" target="_blank">Рекламное ПО Genieo научилось пробираться в Mac Keychain, подделывая разрешение пользователя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/03/png-bomb/" target="_blank">Файл 420 байт разжимается в картинку PNG на 40 гигапикселей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/02/exploits-200/" target="_blank">Обзор эксплоитов #200. Браузерные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/02/lizard-squad-vs-nca/" target="_blank">Хакеры Lizard Squad мстят британским правоохранителям</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/02/ashley-madison-bots/" target="_blank">У Ashley Madison все хорошо, даже женщины на сайте существуют</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/02/os-level-encryption/" target="_blank">Камуфляж для пингвина. Настраиваем полнодисковое шифрование и анонимизацию уровня ОС</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/01/facebook-business-pages-bug/" target="_blank">Найден баг, позволяющий взламывать страницы групп в Facebook</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/01/toxy/" target="_blank">Прокси Toxy эмулирует отказ сервера и сбой сети</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/01/agenty-fbr-pritvoryayutsya-zhurnalistami-publikuyut-falshivye-stati/" target="_blank">Агенты ФБР притворяются журналистами, публикуют фальшивые статьи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/28/noel-biderman-exit/" target="_blank">Хакеры добились своего. Исполнительный директор Ashley Madison уволился</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/28/sphinx/" target="_blank">В продажу поступил Sphinx, новый вариант Zeus</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/28/paypal-xss/" target="_blank">Исследователю заплатили $750 за критическую уязвимость в PayPal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/27/ios-mdm/" target="_blank">Уязвимость в песочнице iOS бьет по корпоративным пользователям</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/27/thadeus-zu/" target="_blank">Брайан Кребс почти узнал, кто взломал Ashley Madison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/27/rkn-fake/" target="_blank">Фальшивый Роскомнадзор просит разместить на сайте три строчки PHP-кода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/27/github-ddos/" target="_blank">GitHub подвергся DDoS-атаке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/26/certifi-gate-2/" target="_blank">Приложение Recordable Activator случайно взломало от 100 до 500 тыс. Android-смартфонов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/26/sanford-wallace-guilty/" target="_blank">«Король спама» виновен в рассылке 27 млн сообщений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/26/alm-emails/" target="_blank">Руководство Ashley Madison одобряло взлом конкурентов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/25/sexycyborg/" target="_blank">Девушка напечатала туфли с хакерскими инструментами в каблуках</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/25/tps-press-conference/" target="_blank">Ashley Madison предлагает $500 000 за любую информацию о The Impact Team</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/24/ashleymadison-extortionists/" target="_blank">Шантажисты требуют деньги у любовников с сайта Ashley Madison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/24/the-impact-team-q-and-a/" target="_blank">Слово хакерам: Q&#038;A со взломщиками Ashley Madison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/21/pocket-soft-199/" target="_blank">Карманный софт. Выпуск #10: и вновь Jailbreak</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/20/android-hidden-cam/" target="_blank">Android как средство наблюдения. Следим за происходящим вокруг, не беспокоя владельца телефона</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/21/ashley-madison-second-leak/" target="_blank">Опубликован новый архив на 18,5 Гбайт с документами Ashley Madison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/20/ashley-madison-data/" target="_blank">Является ли архив данных Ashley Madison подлинным и что он содержит?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/20/exploits-199/" target="_blank">Обзор эксплоитов #199. Уязвимости в D-Link, повышение привилегий в OS X 10.10 и CSRF в BuddyPress</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/19/pocket-firefox/" target="_blank">Многочисленные уязвимости обнаружены в расширении Pocket для Firefox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/19/ashleymadison/" target="_blank">Адюльтер рассекретили. Опубликована база неверных мужей с сайтов знакомств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/19/irs-hack-details/" target="_blank">Налоговое управление США взломали, данные 300,000 налогоплательщиков украдены</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/18/binaryedge-research/" target="_blank">В интернете лежит более петабайта незащищённых данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/18/easy-hack-199/" target="_blank">Easy Hack #199. RDP, фишинг через Skype, Escape Sequence Injection и атака на Cisco</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/18/warm-and-soft/" target="_blank">Теплое и мягкое. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/17/parrot-drones-hack/" target="_blank">Защита дронов Parrot оставляет желать лучшего</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/17/bittorrent-drdos-flaw/" target="_blank">Приложения BitTorrent можно использовать для DRDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/14/log-almighty/" target="_blank">Лог всемогущий. Расшифровываем TLS-трафик с помощью JVM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/14/threats-for-health-systems/" target="_blank">Угрозы для систем трекинга показателей здоровья. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/14/stagefright-patch-didnt-worked/" target="_blank">Патч для уязвимости Stagefright неэффективен</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/14/immobilizer-and-rfid-carhack/" target="_blank">Автопроизводители засудили хакеров за взлом иммобилайзеров и заставили молчать три года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/13/x-tools-199/" target="_blank">X-TOOLS #199. Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/13/pentesting-sysadmin-search/" target="_blank">В поисках администратора. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/13/dvcp/" target="_blank">Симулятор взлома химического завода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/13/obd2-and-tcu-dongls-flaws/" target="_blank">Хакеры взломали авто через OBD-II-донгл и могут управлять им через SMS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/13/lenovo-rootkit/" target="_blank">Lenovo поймали на установке руткита</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/12/kali-linux-2-0/" target="_blank">Вышел дистрибутив Kali Linux 2.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/12/pr-hack/" target="_blank">Семья украинских хакеров принесла до $100 млн, вломившись в систему пресс-релизов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/12/certifi-gate/" target="_blank">Certifi-Gate &#8212; уязвимость в сертификатах mobile Remote Support Tool уже эксплуатируют</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/12/oracle-csos-letter/" target="_blank">Директор по безопасности Oracle: прекратите искать уязвимости в нашем коде!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/11/trackingpoint-hack/" target="_blank">Хакеры мешают прицеливанию снайперской Linux-винтовки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/11/metasploit-modules/" target="_blank">Кодинг для пентестера. Разрабатываем модули для Metasploit</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/11/hacking-team-exploits-in-use/" target="_blank">Эксплоиты Hacking Team активно используют хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/10/fake-death/" target="_blank">Насколько легко подделать рождение и смерть человека?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/10/firefox-bug/" target="_blank">В Firefox обнаружена и исправлена серьезная уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/10/zigbee-devices-problems/" target="_blank">Уязвимость в ZigBee ставит IoT-устройства под удар</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/10/gas-stations-hacked/" target="_blank">Эксперимент Trend Micro: хакеры постоянно атакуют автозаправки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/10/x86-smm-bug/" target="_blank">Найден новый баг в старых x86 процессорах Intel</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/08/test-for-stagefright-app/" target="_blank">Создано приложение для проверки на уязвимость Stagefright</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/08/windows-update-are-vulnerable/" target="_blank">Windows Update небезопасен</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/07/securom/" target="_blank">Как взломали SecuROM. История поражения самой мощной DRM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/07/ms-bug-bounty/" target="_blank">Microsoft расширяет программу выплат за уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/07/popcorn-time-flaw/" target="_blank">В Popcorn Time обнаружена уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/07/man-in-the-cloud-attack/" target="_blank">Исследователи нашли способ проникнуть в хранилища Dropbox, OneDrive, Box, Drive</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/07/fingerprint-sensor-spying-attack/" target="_blank">Сканер отпечатков пальцев в Android-устройствах можно взломать</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/07/model-s-rat/" target="_blank">На автомобиль Tesla Model S поставили бекдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/06/icann-hack-2/" target="_blank">ICANN опять взломали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/06/ota-android-updates/" target="_blank">Google и Samsung закрывают дыры в Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/05/globalstar-hack/" target="_blank">Спутниковая система Globalstar не шифрует данные и открыта для взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/05/bind-flaw-in-use/" target="_blank">Уязвимость в BIND уже используется для атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/05/fake-win-10-updates/" target="_blank">Cisco предупреждает о фейковых обновлениях до Windows 10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/05/yahoo-ad/" target="_blank">Реклама на Yahoo снова заражена</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/04/tofsee/" target="_blank">Одинокий хакер зарабатывает $100 000 в месяц</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/04/bitdefender-hacked/" target="_blank">Bitdefender взломали, хакер требует выкуп</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/03/kill-list/" target="_blank">США внесли британского хакера в список на уничтожение</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/03/scada-and-mobile-security/" target="_blank">﻿SCADA и мобильники. Оценка безопасности приложений, превращающих смартфон в пульт управления заводом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/31/ownstar-hjack-gm-cars/" target="_blank">Хакер создал прибор для взлома автомобилей General Motors</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/31/bind-flaw/" target="_blank">В BIND обнаружили критическую уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/30/matroska-otpravlyaet-android-v-komu/" target="_blank">Matroska отправляет Android в кому</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/30/elderwood-platform-framework/" target="_blank">Хакеры из Black Vine делят 0day-уязвимости с конкурентами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/30/blekey-rfid-clone-device/" target="_blank">На Black Hat покажут RFID-скиммер за $10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/29/app-store-itunes-flaw/" target="_blank">Переименовав устройство Apple, можно взломать App Store и iTunes</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/28/sberbank-online-didn-t-hjacked/" target="_blank">Хакеры не крали у Сбербанка 2 миллиарда</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/28/950-mln-ustrojstv-na-android-uyazvimy-pered-novym-bagom/" target="_blank">950 млн устройств на Android уязвимы перед новым багом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/28/exploits-198/" target="_blank">Обзор эксплоитов #198. Выполнение кода за пределами виртуальной машины</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/27/x-tools-198/" target="_blank">X-TOOLS #198. Софт для мониторинга, взлома, пентестинга и бинарного анализа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/28/steam-password-bug-closed/" target="_blank">В Steam закрыли уязвимость, позволявшую угнать аккаунт за пару секунд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/25/fca-voluntary-safety-recall/" target="_blank">Автоконцерн отзывает 1,4 млн автомобилей из-за опасности взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/24/easy-hack-198/" target="_blank">Easy Hack #198. TCP timestamp, Java, SSRF, Drupal, XXE и VLAN</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/25/openssh-brute-force-bug/" target="_blank">Новая уязвимость в OpenSSH позволяет осуществлять брутфорс-атаки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/24/os-x-flaw/" target="_blank">Обнаружена незакрытая уязвимость в OS X</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/22/fiat-chrysler-uconnect-bug/" target="_blank">Исследователи нашли способ удаленно взломать Jeep, Crysler выпустил патч</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/22/microsoft-ms15-078/" target="_blank">Microsoft выпустила экстренный патч для почти всех версий Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/21/metasploit-part-1/" target="_blank">Metasploit, часть 1: знакомимся с мощным фреймворком для анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/22/rook-security-milano/" target="_blank">Вышел бесплатный инструмент для поиска малвари Hacking Team</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/21/ashley-madison-hacked/" target="_blank">Взломан сайт знакомств Ashley Madison, хакеры угрожают опубликовать данные 37 млн человек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/20/java-random-hack/" target="_blank">Взлом генератора случайных чисел Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/19/ucla-hacked/" target="_blank">Неизвестные получили доступ к медицинским данным 4,5 млн человек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/17/mobile-hacking-ss7/" target="_blank">Взлом мобильной связи через SS7: перехват SMS, слежка и прочее</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/17/anarchy-in-the-uk/" target="_blank">Исследователю, обнаружившему баг в школьном ПО, угрожают судом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/16/epic-games-forum-hack/" target="_blank">Неизвестные взломали форумы Epic Games</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/16/wardriving-as-a-service/" target="_blank">Wardriving в качестве консалтинговой услуги. Колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/15/twitter-trading/" target="_blank">Фальшивый сайт отлично сработал для манипуляции акциями Twitter</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/15/tesla-model-s-hack/" target="_blank">Шесть уязвимостей Tesla Model S покажут на Defcon: взломай свою тачку</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/15/cuckoo-clock-198/" target="_blank">Часы с кукушкой. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/15/java-0day/" target="_blank">Обнаружена первая за два года 0day в Java</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/14/easy-money/" target="_blank">Легкие деньги: хакер показал элементарные bug bounties</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/14/new-xpath-xquery-injection/" target="_blank">Новые техники обнаружения и эксплуатации XPath/XQuery injection</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/09/pentest-fbi-airpbus/" target="_blank">Пентесты на виражах. ФБР расследует дело о взломе самолета</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/14/us-suffer/" target="_blank">Федеральные агентства США не могут найти экспертов, способных противостоять хакерам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/09/patriot-hack/" target="_blank">Неизвестный взломал зенитные ракетные комплексы «Пэтриот». Или нет?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/08/hacking-team-0day/" target="_blank">В результате взлома Hacking Team обнаружена 0day в Adobe Flash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/08/ripv1-ddos/" target="_blank">Устаревший протокол RIPv1 используют для усиления DDoS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/07/hacked-team/" target="_blank">Взломали известного поставщика шпионского ПО — Hacking Team</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/06/bitstamp-hack/" target="_blank">Биржа Bitstamp лишилась $5 млн из-за макроса в Word</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/03/lordfenix/" target="_blank">Студент написал более 100 троянов за два года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/01/personal-dark-web-spy/" target="_blank">Услуги личного шпиона в даркнете стоят дорого</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/30/x-tools-197/" target="_blank">X-TOOLS #197. Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/29/carbanak-and-equation/" target="_blank">Carbanak и Equation — малварь на миллиард долларов. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/29/exploits-197/" target="_blank">Обзор эксплойтов #197. Свежие уязвимости апреля-июня 2015 года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/29/opm-hack-3/" target="_blank">Хакеры знают о личной жизни госслужащих США все и даже больше</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/28/us-government-compromised/" target="_blank">Скомпрометированы 47 федеральных учреждений США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/28/back-to-the-future-197/" target="_blank">Назад в будущее. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/27/pentesting-errors-197/" target="_blank">Типовые ошибки, активно эксплуатируемые в рамках внутреннего пентеста</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/27/easy-hack-197/" target="_blank">Easy Hack #197. Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/27/sqlite-197/" target="_blank">Что можно сделать с системой с помощью прав root в SqLite?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/26/mitm-197/" target="_blank">Золотая середина. Обзор инструментов для проведения MITM-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/26/sony-pictures-hack/" target="_blank">Из-за взлома сотрудники Sony Pictures перешли на факсы и другие древние технологии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/25/fonts-hole/" target="_blank">Шрифты представляют собой дыру в безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/25/rsa-conference-2015-197/" target="_blank">RSA Conference 2015. Отчет о крупнейшей мировой конференции по IT-безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/25/tor-197/" target="_blank">Tor: полная деанонимизация. Фингерпринтим пользователей с помощью системы активного мониторинга и не только</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/25/programmers-copying-bugs/" target="_blank">Заимствуешь код — заимствуешь и баги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/25/cryptowall-18-mln/" target="_blank">Вымогатели заработали на CryptoWall $18 млн</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/24/x-tools-196/" target="_blank">X-Tools #196. Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/24/nullcon-2015/" target="_blank">Колонка Дениса Макрушина. Отчет о конференции Nullcon 2015</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/25/eset-nod32-hack/" target="_blank">Сотрудник Google показал тривиальный взлом антивируса ESET NOD32</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/23/zdi-ie-bugs/" target="_blank">HP опубликовала эксплоиты для незакрытых багов IE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/23/sysadmin-kit-197/" target="_blank">Походная аптечка сисадмина. Минимальный набор тулз</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/23/amazon-social-hacking-197/" target="_blank">Amazon под прицелом: добиваемся своего от техподдержки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/23/how-to-social-pentest-197/" target="_blank">Cоцинженерия на практике. Как подготовить и провести социотехнический пентест</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/23/social-networks-197/" target="_blank">Социальная разведка. Используем соцсети для сбора данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/23/pentesting-197/" target="_blank">Социальная инженерия. Истории из практики именитых пентестеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/22/kolonka-yuriya-goltseva-196/" target="_blank">Социальная инженерия как часть тестирования на проникновение</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/22/lot-hack/" target="_blank">В Варшаве самолёты встали из-за беспрецедентного взлома авиакомпании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/22/exploits-196/" target="_blank">Обзор эксплойтов: ломаем ProFTPD и D-Link, получаем админский доступ в OS X</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/21/easy-hack-196/" target="_blank">Атаки на Cisco: cниффинг трафика с роутера/свича, обход IP Source Routing, атаки на роутеры через NAT-PMP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/21/mail-sms/" target="_blank">Мошенники придумали способ захватывать почтовые ящики по SMS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/20/secunia-vim/" target="_blank">Secunia прекращает открытую публикацию списка уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/19/drupal-bug/" target="_blank">Вышло обновление безопасности для Drupal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/19/wikileaks-sony/" target="_blank">На Wikileaks опубликовано ещё 276 000 документов Sony Pictures</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/19/samsung-galaxy-swift/" target="_blank">Samsung выпустит патч для уязвимости в программной клавиатуре</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/19/apple-0days/" target="_blank">В iOS и OS X обнаружен ряд 0-day уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/19/anonymous-attacks-canada/" target="_blank">Группа Anonymous атаковала правительство Канады</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/17/android-security-rewards/" target="_blank">Google заплатит за уязвимости в Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/16/us-navy-0day/" target="_blank">ВМС США просит сообщать об уязвимостях нулевого дня</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/16/pora-menyat-paroli-lastpass-vzlomali/" target="_blank">Пора менять пароли: LastPass взломали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/12/wpad-traffic/" target="_blank">Перехватываем трафик с помощью WPAD</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/12/celebgate-hack/" target="_blank">Опубликованы первые результаты по делу о голых знаменитостях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/12/zafiksirovana-ataka-na-kaspersky-lab/" target="_blank">Зафиксирована атака на Kaspersky Lab</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/12/ios-bug/" target="_blank">Баг в iOS Mail позволяет собирать пароли пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/11/powerpoint-slideshow/" target="_blank">Файлы PowerPoint используются в фишинговых атаках</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/10/hospira/" target="_blank">Уязвимость в инфузионных помпах позволяет ввести смертельную дозу лекарства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/09/xzeres-442sr/" target="_blank">В программе для управления ветряками обнаружена уязвимость CSRF</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/09/army-mil/" target="_blank">Сирийцы взяли на себя ответственность за взлом сайта армии США</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/05/opensesame/" target="_blank">Детская игрушка взламывает двери гаражей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/05/opm-hack/" target="_blank">Крупная атака на госслужбу США: враг получил 4 млн ID</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/04/tesla-bugs/" target="_blank">Tesla Motors начала платить за найденные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/04/skype-bug/" target="_blank">В Skype исправили баг с http://:</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/04/abatis/" target="_blank">Магический драйвер на 100 КБ защитит от сетевых атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/04/github-ssh/" target="_blank">Хакер перехватил сотни уязвимых ключей SSH пользователей Github</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/03/22-bad-routers/" target="_blank">Найдено 62 новых уязвимости в 22 маршрутизаторах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/03/web-app-hack-keep-alive/" target="_blank">Атаки на веб-приложения с помощью keep-alive</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/03/os-x-rootkit/" target="_blank">OS X после сна разрешает себя перепрошить кому угодно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/01/iphone-sms/" target="_blank">Баг в iOS позволяет сообщениям перезагружать телефон</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/01/vkontakte-bugs/" target="_blank">Найди уязвимость «Вконтакте» и заработай доллары</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/22/airbus-a400m/" target="_blank">Airbus A400M упал из-за бага в программе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/21/online-bank/" target="_blank">Главные уязвимости онлайн-банков: авторизация, аутентификация и Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/19/auto-park/" target="_blank">Уязвимый софт на автомобильных парковках</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/18/www-scan/" target="_blank">Автоматический поиск уязвимых сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/18/atm-steal/" target="_blank">Худшая в мире попытка украсть банкомат</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/18/google-app-engine/" target="_blank">Новые уязвимости в Google App Engine</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/18/boeing-hack/" target="_blank">Хакер утверждает, что взломал самолёт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/15/mspy/" target="_blank">Взломана база шпионского приложения mSpy</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/14/usbkill/" target="_blank">USBkill: простой скрипт против обыска</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/13/ipsec-security-flaws/" target="_blank">Изучаем и выявляем уязвимости протокола IPsec</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/14/starbucks-gift/" target="_blank">Кардинг через приложение Starbucks</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/13/venom/" target="_blank">Новая уязвимость с личным именем: VENOM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/13/scada-hacks/" target="_blank">Безопасность промышленных систем управления в 2014 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/13/soho-routers/" target="_blank">Ботнеты из домашних маршрутизаторов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/12/photobucket/" target="_blank">Хостинг Photobucket взломали программой Photofucket</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/11/tor-cloud/" target="_blank">Tor Cloud закрылся из-за багов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/10/defend-wordpress-yourself/" target="_blank">Ломаем и защищаем WordPress своими руками</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/09/powerful-wardriving/" target="_blank">Строим мощный комплекс для вардрайвинга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/28/wordpress-comments-bug/" target="_blank">Взлом сайта на WordPress с помощью комментария</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/27/raven-ii/" target="_blank">Взлом роботов-хирургов во время операции</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/27/digitalocean-race-condition/" target="_blank">DigitalOcean завершил аттракцион невиданной щедрости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/27/ddos-github/" target="_blank">DDoS-атака на Github: анализ от компании Google</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/27/cve-2015-1863/" target="_blank">Атака через название хотспота</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/27/sigaint/" target="_blank">70 плохих выходных узлов Tor прослушивали почтовый трафик SIGAINT</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/24/verifone-password/" target="_blank">Производитель платёжных терминалов 25 лет не менял пароль по умолчанию</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/24/supee-5344/" target="_blank">Уязвимость в CMS Magento: пострадали 98 000 интернет-магазинов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/24/ios-reboot/" target="_blank">Баг в iOS отправляет устройство в бесконечную перезагрузку</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/24/tepco-windows-xp/" target="_blank">Компания-оператор АЭС в Фукусиме работает под Windows XP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/24/spartan-bugs/" target="_blank">Вознаграждение за найденные баги в браузере Spartan</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/21/minecraft-bug/" target="_blank">Эксплоит для серверов Minecraft</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/19/195-x-tools/" target="_blank">X-Tools #195. Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/17/195-exceptions/" target="_blank">Обработка эксепшенов в динамически размещаемом коде</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/17/exploit-exercises/" target="_blank">Exploit Exercises: упражнения с эксплоитами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/17/sony-pictures-wikileaks/" target="_blank">Документы Sony Pictures опубликованы на Wikileaks</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/16/airplane-hack/" target="_blank">Заявления властей о хакерских атаках на самолёты «безответственны»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/16/avs-winvote/" target="_blank">Терминалы для электронного голосования может взломать даже ребёнок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/16/scipher/" target="_blank">SCIpher: скрытие осмысленных сообщений в сгенерированных текстах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/16/fazzing-sqlite/" target="_blank">Фаззинг нашёл 22 бага в SQLite за полчаса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/16/195-mysql/" target="_blank">Методы и средства взлома баз данных MySQL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/16/bruteforce-statistic/" target="_blank">Взлом паролей с использованием статистического анализа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/15/http-sys-bug/" target="_blank">Удалённое исполнение кода в IIS под Windows через HTTP-запрос</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/13/redirect-to-smb/" target="_blank">Уязвимость &#171;Redirect To SMB&#187; во всех версиях Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/13/bitglass-research/" target="_blank">Исследование Bitglass по краже конфиденциальных данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/09/195-goltsev/" target="_blank">Этичный взлом по шагам: колонка Юрия Гольцева</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/09/195-exploits/" target="_blank">Эксплоиты #195. Zoho Mail, WordPress SEO by Yoast, phpMoAdmin</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/08/195-mssql-attacks/" target="_blank">Методы и средства взлома баз данных MS SQL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/08/195-easy-hack/" target="_blank">Хакбук #195: атаки с Cisco, MITM через CAM, обход SOP для Flash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/10/os-x-root/" target="_blank">В последней версии OS X устранили бэкдор с root-привилегиями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/07/atm-bruteforce/" target="_blank">Взлом банкомата методом грубой силы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/07/195-oracle-db/" target="_blank">Подробный гайд по векторам атак на Oracle DB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/07/wp-super-cache/" target="_blank">Новая уязвимость в WordPress: до 1 млн сайтов в опасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/03/xbox-one-hack/" target="_blank">19-летний программист взломал Microsoft, Epic, Valve и др.</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/02/audit-truecrypt-zavershyon-vsyo-normalno/" target="_blank">Аудит TrueCrypt завершён: всё нормально</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/02/us-sanctions/" target="_blank">США вводят экономические санкции против иностранных хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/01/wordpress-hack/" target="_blank">Презентация по взлому сайтов WordPress</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/01/bieber-bug/" target="_blank">YouTube закрыл уязвимость, позволяющую удалить чужие видеоролики</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/01/us-cyberweapon-law/" target="_blank">США используют эксплоит, потом принимают закон</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/30/cisco-spa300-500/" target="_blank">IP-телефоны Cisco SPA300/500 уязвимы к удалённой прослушке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/29/uber-hack/" target="_blank">Аккаунты Uber продаются по одному доллару</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/24/twitch/" target="_blank">Взломан сайт Twitch.tv</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/23/snowden-tools/" target="_blank">Хакерский набор Сноудена</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/19/china-cyberwar/" target="_blank">Китай впервые признал наличие хакерских подразделений в армии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/17/google-apps-leak/" target="_blank">«Глюк» Google Apps выдал информацию о владельцах 282 867 доменов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/11/adobe-bugs/" target="_blank">Adobe не будет платить за найденные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/06/windows-freak/" target="_blank">ОС Windows тоже уязвима к багу FREAK</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/05/clone-eyes/" target="_blank">Обман сканера радужной оболочки по фотографиям глаз</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/04/apple-pay-fraud/" target="_blank">Мошенники генерируют 6% платежей Apple Pay</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/04/freak/" target="_blank">Уязвимость FREAK в TLS/SSL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/27/id-hack/" target="_blank">Взлом студенческих ID в университете Оклахомы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/27/facebook-money/" target="_blank">Facebook выплатил хакерам $1,3 млн за прошлый год</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/26/lenovo-hack/" target="_blank">Месть хакеров: Lenovo.com взломан</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/25/wp-slimstat/" target="_blank">Серьёзная уязвимость в плагине WP-SlimStat для WordPress</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/24/hack-admin-rules-linux/" target="_blank">Повышаем пользовательские привилегии в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/24/os-x-bugs/" target="_blank">OS X: самая уязвимая операционная система?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/20/superfish-brute/" target="_blank">Извлечение сертификата Superfish и брутфорс пароля</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/19/travis-goodspeed/" target="_blank">Бэкдоры в прошивках HDD известны как минимум год</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/18/freebsd-rng/" target="_blank">ГСЧ во FreeBSD работает неправильно четыре месяца</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/16/project-zero-deadline/" target="_blank">Google обещает молчать о чужих багах на 14 дней дольше</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/15/wifiphisher/" target="_blank">Фальшивый хотспот Wifiphisher автоматически собирает пароли</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/13/facebook-bug/" target="_blank">Facebook исправил баг с удалением чужих фотоальбомов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/12/win10-bug/" target="_blank">Обход защиты Windows 10 с помощью одного бита</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/12/split-tlb/" target="_blank">Криптотрюк против реверс-инжиниринга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/12/mongodb-shodan/" target="_blank">Десятки тысяч баз MongoDB доступны через интернет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/11/jasbug/" target="_blank">Microsoft год закрывала кошмарную уязвимость JASBUG в Active Directory</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/10/10-mln-passwords/" target="_blank">Исследователь опубликовал 10 млн логинов с паролями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/09/gnupg-donate/" target="_blank">Автора GnuPG спасли от бедности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/09/gtp-grx/" target="_blank">Перехват GPRS: атаки через GTP и GRX</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/05/power-fingerprinting/" target="_blank">Вычисление уязвимостей по потреблению энергии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/05/connecteddrive/" target="_blank">BMW устранила уязвимость с дистанционным открытием дверей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/03/topface/" target="_blank">Topface заплатил хакеру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/02/google-hackers/" target="_blank">Google платит вперёд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/02/introduction-in-viper/" target="_blank">Основы работы с фреймворком Viper</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/01/scmrtos-installation-on-arduino/" target="_blank">Устанавливаем scmRTOS на Arduino</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/31/logic-fails-top-2014/" target="_blank">ТОП-10 ошибок логики в веб-приложениях в 2014 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/30/user-web-tracking-howto/" target="_blank">Фингерпринтинг браузера. Как отслеживают пользователей в Сети</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/29/crypto-i-keys/" target="_blank">Криптография под прицелом I: ищем ключи криптографических алгоритмов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/30/zynos/" target="_blank">Уязвимость в маршрутизаторах на прошивке ZynOS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/29/password-price/" target="_blank">Сколько стоят пароли</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/28/ghost/" target="_blank">Уязвимость GHOST в Linux обнаружили спустя 14 лет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/28/wi-fi-direct/" target="_blank">DoS-атака через уязвимость Wi-Fi Direct в Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/27/kriptogry-191/" target="_blank">Криптография под прицелом II: дифференциальный анализ питания</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/23/gps-radar-diy/" target="_blank">Собираем GPS-радар на базе STM32F3DISCOVERY и u-blox Neo-6M</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/25/0day-os-x/" target="_blank">Google раскрыла три 0day-уязвимости в OS X</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/23/ntp/" target="_blank">Хуже, чем DDoS. Новые уязвимости в NTP-серверах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/23/users-profiling/" target="_blank">Автоматическая идентификация потенциальных жертв взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/23/sysmon/" target="_blank">Вышла утилита Sysmon 2.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/20/passwords2014/" target="_blank">Худшие пароли 2014 года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/20/minecraft-leak/" target="_blank">Утечка 1800+ аккаунтов Minecraft</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/19/snapshot/" target="_blank">Взлом автомобильного «жучка» Snapshot от страховой компании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/16/hackers-list/" target="_blank">Hacker&#8217;s List: найми правильного хакера!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/13/corel-dll-bug/" target="_blank">Уязвимость загрузки DLL в программах Corel</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/13/keysweeper/" target="_blank">KeySweeper: зарядное устройство с беспроводным кейлогером</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/13/android-too-old/" target="_blank">Извини, Android 4.3, ты слишком стар</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/12/user-profile-service-win8/" target="_blank">Microsoft обиделась на Google за публикацию уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/12/aviator-sources/" target="_blank">Опубликован исходный код браузера Aviator</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/12/atm-smartphone/" target="_blank">Дистанционный взлом банкомата через смартфон</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/05/hyper-v-research-part-2/" target="_blank">Исследуем механизмы работы гипервизора  Hyper-V</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/01/x-tools-192/" target="_blank">X-TOOLS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/01/sintsov-192/" target="_blank">Куда катится безопасность?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/01/obzor-eksplojtov-192/" target="_blank">Обзор эксплойтов 192</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/01/easy-hack-192/" target="_blank">Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/08/piratesnoop/" target="_blank">Браузер для просмотра заблокированных сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/29/auto-hack/" target="_blank">Взлом автомобилей через функции безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/28/lizard-squad/" target="_blank">Хакеры «украли» Рождество у геймеров Xbox Live и PlayStation</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/25/bits-flip/" target="_blank">Большинство модулей памяти DDR3 путают биты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/sintcov-191/" target="_blank">Автомобиль и ИБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/faq-191/" target="_blank">FAQ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/hack-admin-rules/" target="_blank">Повышаем пользовательские привилегии в Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/ispolzovanie-bdfproxy/" target="_blank">Использование BDFProxy</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/easy-hack-191/" target="_blank">Как найти админа домена в Windows-сети и другие хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/thunderbolt-hack/" target="_blank">Взлом «макбуков» через Thunderbolt</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/23/khnp-hack/" target="_blank">Взлом южнокорейского оператора АЭС</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/22/bsi-scada/" target="_blank">Кибератака на сталелитейный завод в Германии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/22/misfortune-cookie/" target="_blank">Критичная уязвимость в 12 млн домашних маршрутизаторов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/22/usbdriveby/" target="_blank">USBdriveby и Teensyterpreter: быстрый взлом по USB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/22/tor-attack/" target="_blank">Началась атака на Tor?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/19/flashflood/" target="_blank">FlashFlood: JS-скрипт для DoS-атаки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/19/ss7-bugs/" target="_blank">Уязвимость в протоколах ОКС-7: прослушка телефонов по всему миру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/19/kriticheskaya-uyazvimost-v-kliente-git/" target="_blank">Критическая уязвимость в клиенте Git</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/18/kernel-bugs/" target="_blank">Многочисленные уязвимости в ядре Linux под x86_64</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/18/icann-hack/" target="_blank">Несколько систем ICANN подверглись взлому</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/17/usb-armory/" target="_blank">USB Armory: «боевой» компьютер на флэшке</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/17/facebook-open-source/" target="_blank">Исходники Facebook в открытом доступе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/16/fbi-metasploit/" target="_blank">ФБР использовало Metasploit против пользователей Tor</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/16/rpef-utility/" target="_blank">RPEF: утилита для внедрения бэкдоров в прошивки маршрутизаторов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/15/las-vegas-sands/" target="_blank">Иранские хакеры применили зловред на Visual Basic</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/14/cryptoy/" target="_blank">Приложение GCHQ обучает основам криптографии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/12/lost-subdomains/" target="_blank">Не забывай свои поддомены</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/09/poodle-tls/" target="_blank">Атака POODLE работает и с протоколом TLS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/09/uber-xss/" target="_blank">Незакрытая XSS-уязвимость на Uber.com</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/08/bureau-121/" target="_blank">В Северной Корее хакеров считают национальной элитой</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/05/samye-luchshie-hakery-v-rossii/" target="_blank">Самые лучшие хакеры — в России</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/04/lastpass-hack/" target="_blank">Извлечение мастер-пароля LastPass</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/02/smartphones-1789-year/" target="_blank">Власти используют закон 1789 года для разлочки чужих смартфонов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/02/jailbrake-ios82/" target="_blank">Джейлбрейк для iOS 8.2 уже готов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/01/sony_movies/" target="_blank">Будущие фильмы Sony Pictures попали в открытый доступ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/28/ipv6-pod-pritselom/" target="_blank">IPv6 под прицелом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/27/car-hacks/" target="_blank">Беспилотные автомобили могут быть взломаны, предупреждают эксперты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/27/sony-pictures-docs/" target="_blank">Опубликован список конфиденциальных документов Sony Pictures</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/26/gop-sony/" target="_blank">Группировка #GOP взломала серверы Sony Pictures</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/26/bug-names/" target="_blank">Время уязвимостей с персональными названиями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/23/easy-hack-190/" target="_blank">Easy Hack #190</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/22/troyanskij-poni/" target="_blank">Троянский пони</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/22/exploits-190/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/22/devops-open-mind/" target="_blank">Devops &#8212; расширяя сознание</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/17/shellshock-busybox/" target="_blank">Уязвимость Shellshock даёт доступ к устройствам BusyBox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/17/badusb-v-raznyh-kontrollerah/" target="_blank">В каких USB-контроллерах есть фатальная уязвимость BadUSB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/16/atm-hack/" target="_blank">Взлом ATM по служебному коду всё ещё работает</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/16/samyj-opasnyj-haker-zashhishhalsya-parolem-s-imenem-koshki/" target="_blank">«Самый опасный хакер» защищался паролем с именем кошки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/12/md5-hashclash/" target="_blank">Поиск коллизий MD5: всего 65 центов в облаке Amazon</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/12/windows-phone-8-1-hack/" target="_blank">Windows Phone 8.1 хакнули</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/11/x-tools-190/" target="_blank">X-Tools. Софт для взлома и безопасноти</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/12/schannel-patch/" target="_blank">Критичный апдейт Schannel для всех версий Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/11/emet-5-1/" target="_blank">Вышел EMET 5.1 с локальной телеметрией</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/11/effective-lying/" target="_blank">Как научиться качественно врать</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/10/nyc-taxi-database/" target="_blank">Дата-майнинг базы нью-йоркских такси</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/10/maim-screenshots/" target="_blank">Maim: простая утилита для снятия скриншотов под Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/06/reflected-file-download/" target="_blank">Уязвимость с «отражённым» скачиванием файла</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/02/exstence-standart-harddisk/" target="_blank">Расширяем стандартные возможности жесткого диска</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/05/telegram-400k/" target="_blank">Telegram предлагает хакерам $400 тыс.</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/31/fm-keylogger/" target="_blank">Кейлоггер на FM-волнах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/31/fisrt-generation-cheap-sdr/" target="_blank">Первое поколение доступных SDR-трансиверов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/30/osquery/" target="_blank">OSquery: свободное ПО для мониторинга системных процессов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/30/wget-simlink/" target="_blank">В утилите Wget исправлена опасная уязвимость</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/22/hid-global-iclass/" target="_blank">Хакеру угрожают судом за раскрытие уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/21/fastfat/" target="_blank">Избирательные патчи от Microsoft</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/20/difficult-bug-bounty/" target="_blank">Доказываем баг вендору в сложных условиях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/20/edison-fazzing/" target="_blank">Фаззинг на мини-компьютерах Intel Edison</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/17/openssl-update/" target="_blank">В OpenSSL устранили четыре уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/16/drupal-sql-injection/" target="_blank">Крайне опасная SQL-инъекция в Drupal 7.0-7.31</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/16/pretty-easy-privacy/" target="_blank">Pretty Easy Privacy: словарная фраза и цветовые коды</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/15/poodle/" target="_blank">POODLE: опасная уязвимость в SSL 3.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/14/veracrypt/" target="_blank">VeraCrypt: улучшенная версия TrueCrypt</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/13/14-hacker-gadget/" target="_blank">14 гаджетов для взломщика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/08/skrytye-kamery-zhuchki-lokpiking/" target="_blank">Скрытые, камеры, жучки, локпикинг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/08/ibrute/" target="_blank">Ibrute, который оказался виноват во всем</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/08/obzor-eksplojtov-2/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/08/kriptography-189/" target="_blank">Криптография: time-based атаки на хеши</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/07/easy-hack/" target="_blank">Easy Hack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/07/sintcov-189/" target="_blank">Колонка Алексея Синцова</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/14/dropbox-accounts/" target="_blank">Утечка аккаунтов Dropbox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/07/bugzilla-bug/" target="_blank">Уязвимость в Bugzilla выдаёт 0day-уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/07/yahoo-winzip-shellshock/" target="_blank">Yahoo и WinZip взломаны через уязвимость Shellshock</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/04/photofucket-author-goes-to-prison/" target="_blank">Хакер, взломавший Photobucket, приговорен к 29 месяцам тюрьмы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/04/mysql-flaws-poc/" target="_blank">Исследователь обнаружил критические баги в MySQL, MariaDB и Percona</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/04/joomla-1day/" target="_blank">1day-взлом Joomla: создаем левые аккаунты и повышаем привилегии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/04/shadow-kill/" target="_blank">IoT-ботнет на базе трояна Mirai едва не лишил интернета целую страну</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/03/belkin-wemo-flaws/" target="_blank">Устройства Belkin WeMo и их специальное приложение содержат серьезные уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/03/windows-stats/" target="_blank">Duo Security: 65% пользователей до сих пор предпочитают Windows 7</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/03/wosar-hacked-fs0ciety/" target="_blank">Хакер пытался продать ключи от шифровальщика эксперту, взломавшему C&#038;C-сервер малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/02/fancy-bear-attacks-win-0day/" target="_blank">Microsoft заявляет, что новую 0-day уязвимость в Windows используют хакеры из Fancy Bear</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/02/dirty-cow-and-containers/" target="_blank">Виртуализация не защитит от уязвимости Dirty COW, возможен побег из контейнеров Docker</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/hack-forums-sst-down/" target="_blank">Админы Hack Forums  закрыли раздел DDoS-атак по найму</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/yandex-cve/" target="_blank">«Яндекс» присоединился к Common Vulnerabilities and Exposures</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/tails-live-flash/" target="_blank">Делаем шпионскую флешку с защищенной операционкой Tails</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/windows-kernel-0day/" target="_blank">Специалисты Google раскрыли информацию о 0-day уязвимости в Windows до выхода патча</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/njrat-pastebin/" target="_blank">RAT njRAT устанавливается на машины жертв при помощи PasteBin</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/31/much-ddos-such-ransomware/" target="_blank">«Опасный ботнет», образованный малварью Rex, насчитывает всего 150 машин</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/31/the-shadow-brokers-new-dump/" target="_blank">Хакерская группа The Shadow Brokers, взломавшая АНБ, опубликовала новый дамп</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/31/joomla-sites-hacked/" target="_blank">Свежие критические уязвимости в Joomla породили волну взломов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/28/atombombing/" target="_blank">Атака AtomBombing позволяет осуществить инъекцию кода и опасна для всех версий Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/28/ldap-ddos-amplification/" target="_blank">LDAP-серверы способны усилить DDoS-атаку в 46-55 раз</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/28/mobile-pwn2own-2016/" target="_blank">В ходе Pwn2Own продемонстрировали удаленный взлом Nexus 6P и iPhone 6S</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/28/911-ddos/" target="_blank">В США арестован охотник за bug bounty, случайно устроивший DDoS-атаку на службу 911</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/27/scamware-as-a-service/" target="_blank">Скамеры разработали платный конструктор для создания мошеннических сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/27/dyn-ddos-statement/" target="_blank">DNS-провайдер Dyn представил анализ DDoS-атаки: виной всему ботнет из 100 000 IoT-девайсов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/27/flash-player-0day/" target="_blank">Adobe выпустила экстренный патч для 0-day уязвимости во Flash Player</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/27/data-execution-prevention/" target="_blank">Пишем сплоит для обхода DEP: ret2libc и ROP-цепочки против Data Execution Prevention</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/26/cellebrite-firmware-leak/" target="_blank">Инструменты израильских киберкриминалистов Cellebrite просочились в сеть</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/26/joomla-critical-flaws/" target="_blank">В Joomla устранен ряд уязвимостей, в том числе баг, позволявший создать новый аккаунт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/26/trackers-flaws/" target="_blank">Исследователи Rapid7 нашли множество багов в TrackR Bravo и других трекерах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/26/nuclear-plants-using-pagers/" target="_blank">На атомных станциях все еще используют незащищенную пейджинговую связь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/26/apple-patches/" target="_blank">Вредоносные JPEG, PDF и файлы шрифтов представляли опасность для устройств Apple</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/25/drammer/" target="_blank">Появился эксплоит Drammer, позволяющий реализовать Rowhammer-атаку на Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/25/bitmarket-robbery/" target="_blank">Исследователь связал хакера, взломавшего Dropbox и LinkedIn, со взломом биржи BitMarket</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/25/paypal-2fa-bug/" target="_blank">Обнаружен еще один способ обхода двухфакторной аутентификации PayPal</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/25/dirty-cow-android/" target="_blank">Представлен эксплоит для уязвимости Dirty COW, позволяющий получить root-права на Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/25/hangzhou-xiongmai/" target="_blank">Китайский производитель отзывает из продажи IP-камеры, уязвимые перед трояном Mirai</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/25/hack-android-2/" target="_blank">Ломаем софт для Android. Внедряем малварь в WhatsApp</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/24/routres-flaws/" target="_blank">ESET: 15% всех роутеров имеют слабые пароли, а у 20% открыт Telnet-порт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/24/hakecr-indicted/" target="_blank">Российскому хакеру предъявили обвинения во взломе Dropbox, Formspring и LinkedIn</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/24/dyn-ddos-aftermath/" target="_blank">Атака на DNS-провайдера Dyn исходила от миллионов IP-адресов и ботнета Mirai</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/discord-attacked-by-rats/" target="_blank">Популярный среди геймеров VoIP-сервис Discord стал целью для нескольких RAT-троянов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/06/uyazvimost-rosetta-flash/" target="_blank">Уязвимость Rosetta Flash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/06/x-tools/" target="_blank">X-TOOLS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/04/dating-pentest/" target="_blank">«Небольшой» аудит безопасности дейтинг-ресурса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/03/usb-hack/" target="_blank">Опубликован код программы для взлома ПК по USB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/03/exploit-shellshock/" target="_blank">Первый эксплоит для уязвимости Shellshock</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/02/team-role-security/" target="_blank">Роль команды при построении защищенной системы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/01/apple-shellshock/" target="_blank">Apple выпустила патч для бага Shellshock</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/01/google-bug-bounty/" target="_blank">Google увеличивает вознаграждение за найденные баги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/26/bitskvotting/" target="_blank">Битсквоттинг: проверка эффективности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/26/search-document-exploit/" target="_blank">Ищем эксплойты в PDF-документах своими силами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/29/shellshock-feature/" target="_blank">Shellshock — не баг, а фича</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/26/shellshock-dhcp/" target="_blank">Эксплоит Shellshock для DHCP-сервера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/25/internet-for-things/" target="_blank">Интернет вещей: защити свою кофеварку</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/25/sodium/" target="_blank">Первая версия криптобиблиотеки Sodium</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/25/shellshock/" target="_blank">Уязвимость ShellShock опаснее, чем Heartbleed</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/24/cve-2014-6271/" target="_blank">CVE-2014-6271: удалённое исполнение кода через bash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/24/ms-bugs-online/" target="_blank">Microsoft расширяет программу оплаты за баги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/22/active-directory-rights-hack/" target="_blank">Как быстро повысить привилегии в сетях, построенных на базе Active Directory</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/24/jquery-rig/" target="_blank">Заразный jQuery.com</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/18/aosp-browser-sop/" target="_blank">Опасная уязвимость в Android-браузере</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/hardware-clock/" target="_blank">Хардварные часы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/easy-hack-2/" target="_blank">Easy Hack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/no-default/" target="_blank">Избавляемся от стандартных настроек серверов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/obzor-eksplojtov-3/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/podbiraem-devajsy-dlya-nastoyashhego-pentestera/" target="_blank">Подбираем девайсы для настоящего пентестера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/audit-bezopasnosti-odnoj-mediakompanii/" target="_blank">Аудит безопасности одной медиакомпании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/radare-framework/" target="_blank">Основы работы с фреймворком Radare</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/aws-security-aws/" target="_blank">Колонка Алексея Синцова: Безопасность AWS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/unit-tests/" target="_blank">Основы использования модульных тестов в ИБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/icloud-keychaine/" target="_blank">Взлом криптоконтейнеров Apple</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/09/share-point/" target="_blank">Взлом Share Point</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/08/password-manager-pentest/" target="_blank">Ищем слабые места современных менеджеров паролей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/08/safe-voip/" target="_blank">Обеспечиваем безопасность VoIP-сервиса и защиту от прослушивания</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/07/skryvaemsya-ot-antivirusov-s-pomoshhyu-frejmvorka-veil/" target="_blank">Скрываемся от антивирусов с помощью фреймворка Veil</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/05/kaspersky-crackme-research/" target="_blank">Исследуем CrackMe от «Лаборатории Касперского»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/05/lua-for-pentest/" target="_blank">Язык Lua на службе у пентестеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/04/ios-app-secrets-pentest/" target="_blank">Application porno</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/04/i2p-secrets/" target="_blank">Раскрываем секреты сети I2P</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/03/ospf-vulnerabilities/" target="_blank">Исследуем дыры в OSPF</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/18/finfisher-files/" target="_blank">Файлы шпионской программы FinFisher</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/03/hacker-competion-winners/" target="_blank">Как наши парни из МГУ побеждали на хакерских соревнованиях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/02/snort-in-cloud/" target="_blank">Snort или как забить гвоздь микроскопом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/26/ntvdm-errors/" target="_blank">Получаем системные привилегии с помощью ошибок в NTVDM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/21/tesla-hackers/" target="_blank">Tesla Motors хочет платить зарплату хакерам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/19/supermicro-ipmi-ddos/" target="_blank">Баг в материнских платах Supermicro позволил запустить DDoS-атаку на 300 Гбит/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/14/disqus-wordpress-bugs/" target="_blank">Уязвимости в плагине Disqus для WordPress</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/14/firmware-bugs/" target="_blank">Статический анализ кода 32 000 прошивок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/13/cat-wardriving/" target="_blank">Как взломать соседский WiFi, используя кошку</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/11/multipath-tcp-danger/" target="_blank">На конференции Black Hat рассказали об опасности протокола Multipath TCP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/11/custom-contact-forms/" target="_blank">Критическая уязвимость в плагине Custom Contact Forms для WordPress</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/08/bitcoin-bgp/" target="_blank">Злоумышленники перенаправили трафик от 19 провайдеров для кражи биткоинов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/06/reverse-china-tablet/" target="_blank">Реверс-инжиниринг прошивки китайского Android-планшета</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/06/1-2-billion-passwords/" target="_blank">Кража 1,2 млрд паролей: опять русские</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/05/airplane-wifi/" target="_blank">Хакеры могут взломать самолёты по WiFi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/05/app-trace-methods/" target="_blank">Альтернативные методы трассировки приложений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/05/auto-wifi/" target="_blank">Взлом автомобилей по WiFi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/04/mozilla-sorry/" target="_blank">Mozilla извиняется за утечку данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/01/vupen-3years-exploit/" target="_blank">Vupen три года скрывала эксплойт для Internet Explorer</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/01/badusb/" target="_blank">На Black Hat покажут «аппаратный» зловред BadUSB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/31/get-started-with-splunk/" target="_blank">Что такое Splunk и с чем его едят</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/30/antivirus-bugs/" target="_blank">В антивирусах много уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/30/security-scanner/" target="_blank">Проверь свой Android на уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/29/i2p-exodus/" target="_blank">Новая версия I2P с закрытыми уязвимостями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/27/disclosure-framework/" target="_blank">Стандартные правила разглашения уязвимостей для компаний</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/25/bypass-jailbreak-detection/" target="_blank">Как задетектить и обойти детект Jailbreak&#8217;а</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/24/ie-bugs-stats/" target="_blank">Internet Explorer ушёл в отрыв по количеству уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/23/tor-bug/" target="_blank">Разработчики Tor определили уязвимость и намерены устранить её</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/17/hsrp-pentest-guide/" target="_blank">HSRP под прицелом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/14/password-managers-bugs/" target="_blank">Уязвимости в популярных парольных менеджерах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/14/lz4-new-bug/" target="_blank">Ещё одна уязвимость в LZ4</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/11/tesla-bug-bounty/" target="_blank">За взлом автомобиля Tesla Model S предлагают $10 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/10/gdrive-leak/" target="_blank">Уязвимость в Google Drive может «рассекретить» старые документы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/08/positive-technologies-cto-interview/" target="_blank">Интервью с техдиром Positive Technologies Сергеем Гордейчиком</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/07/usb-penetration-testing/" target="_blank">Проникновение через USB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/05/blind-antichit-system/" target="_blank">Лишаем зрения античит систему многопользовательских игр</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/07/lifx-hack/" target="_blank">Взлом WiFi-лампочек LIFX</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/06/28/lzo-bug/" target="_blank">Закрыта 20-летняя уязвимость в алгоритме сжатия LZO</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/06/25/xss-catalog/" target="_blank">Новый архив ХSS-уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/06/25/nest-root/" target="_blank">Рутовый доступ к термостату Nest</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/06/02/obzor-eksploitov-185/" target="_blank">Обзор эксплоитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/06/02/easy-hack-185/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/05/25/is-incedent-research/" target="_blank">Расследование инцидента ИБ по горячим следам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/05/25/obzor-eksplojtov-184/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/05/25/easy-hack-184/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/05/14/62498/" target="_blank">Введение в локпикинг</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/04/02/obzor-exploitov/" target="_blank">Анализ свеженьких уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/04/02/easy-hack-april-2014/" target="_blank">Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/03/15/62206/" target="_blank">Деанонимизация для домохозяек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/03/05/easy-hack-182/" target="_blank">Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/03/04/easy-hack-181/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/26/62117/" target="_blank">С какой скоростью распространяется гипотетический WiFi-вирус</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/26/62115/" target="_blank">Twitter вернул владельцу аккаунт @N стоимостью $50 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/26/62114/" target="_blank">Власти Японии начали расследование по делу MtGox</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/26/62113/" target="_blank">Microsoft реализовала новые механизмы защиты в EMET 5.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/25/62112/" target="_blank">Владельцам Mac рекомендуют скачивать апдейт OS X Mavericks 10.9.2 по защищенному каналу</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/25/62109/" target="_blank">О чем расскажут на PHDays IV: трояны на SIM-карте и куда бежать при киберналете</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/25/62108/" target="_blank">MtGox ограблен, биткоин ушел в свободное падение</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/25/62104/" target="_blank">Защищенный телефон Blackphone доступен для предзаказа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/24/62102/" target="_blank">Unseen: чат и почта с 4096-битным шифрованием</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/23/62096/" target="_blank">Apple признала наличие SSL-бага в OS X, обещает скоро исправиться</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/22/62095/" target="_blank">Что если объединить базу АНБ с алгоритмом рекомендаций Amazon</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/22/62092/" target="_blank">Обновление безопасности iOS 7.0.6</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/21/62088/" target="_blank">Зловред-вымогатель BitCrypt взломан с легкостью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/21/62086/" target="_blank">Вышел Chrome 33 на стабильном канале</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/20/62085/" target="_blank">Браслет с электрокардиографом как универсальный пароль и кошелек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/20/62082/" target="_blank">В uTorrent 3.4 увеличена скорость и появилась защита от DDoS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/20/62081/" target="_blank">Отказ от прав администратора устраняет 96% критических уязвимостей Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/20/62079/" target="_blank">Keybase: всеобщий репозиторий открытых ключей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/20/62078/" target="_blank">Новый 0day-эксплойт для IE 9/10 оказался необычным</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/19/62076/" target="_blank">Microsoft заплатила $100 000 хакеру, который обошел ASLR и DEP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/19/62074/" target="_blank">Маршрутизаторы Asus массово взламывают</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/18/62068/" target="_blank">На Pastebin — сотни тысяч пользовательских паролей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/18/62065/" target="_blank">Вышел эксплойт для маршрутизаторов Linksys</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/17/62059/" target="_blank">Пароли от 7000 FTP-серверов продаются на форуме</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/14/exploits-181/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/17/62058/" target="_blank">Kickstarter взломан</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/14/62051/" target="_blank">Silk Road 2.0 ограблен из-за бага в протоколе Bitcoin</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/13/62047/" target="_blank">Технические детали DDoS-атаки с NTP-усилением</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/13/62045/" target="_blank">Америка приняла стандарт кибербезопасности для частных фирм</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/13/62044/" target="_blank">В Яндекс.Браузере появился каталог расширений и функция блокировки сайтов, занимающихся SMS-мошенничеством</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/12/62039/" target="_blank">На Cloudflare идет крупнейшая DDoS-атака с NTP-отражением на 400 Гбит/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/12/62037/" target="_blank">Microsoft ввела многоэтапную авторизацию для всех пользователей Office 365</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/10/62028/" target="_blank">Мишени для нанесения ударов с беспилотников вычисляют по мобильным телефонам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/10/62027/" target="_blank">Запах тела как пароль</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/10/62025/" target="_blank">Github закрыл баг, дающий доступ к чужим аккаунтам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/07/62019/" target="_blank">Пульт дистанционного управления автомобилем за 20 долларов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/07/62016/" target="_blank">Американские СМИ врут о хакерах в Сочи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/07/62015/" target="_blank">Обновление джейлбрейка Evasi0n7 с поддержкой iOS 7.0.5</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/06/62006/" target="_blank">Хакеры в Восточной Европе не боятся ареста?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/05/61999/" target="_blank">Инъекция фрейма через метаданные PNG</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/04/61990/" target="_blank">Отчет HP по информационной безопасности в 2013 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/03/61987/" target="_blank">Профессора криптографии хакнули через липовый профиль LinkedIn</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/02/x-tools-181/" target="_blank">X-Tools</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/31/61977/" target="_blank">Хакеры надругались над сайтом Angry Birds в отместку за слив данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/31/61976/" target="_blank">Массовый взлом аккаунтов Yahoo Mail</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/30/61970/" target="_blank">Удаленное исполнение кода в MediaWiki: третья такая уязвимость за восемь лет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/30/61968/" target="_blank">Взлом твиттера @N: компания GoDaddy признала вину, PayPal нет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/30/61967/" target="_blank">Взломщики Target использовали дефолтный аккаунт в программе BMC Performance Assurance</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/29/61963/" target="_blank">Успешная операция по уводу твиттер-аккаунта @N</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/26/fingerprint-iphone-5s/" target="_blank">Искусственные отпечатки пальцев для iPhone 5S</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/23/61798/" target="_blank">Content Security Policy — опасная политика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/20/61795/" target="_blank">Шапка-невидимка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/14/easy-hack-171/" target="_blank">Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/11/universal-mobile-spy/" target="_blank">Универсальный мобильный шпион: подслушиваем вибрации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/11/easy-hack-173/" target="_blank">Easy Hack:  Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/04/61704/" target="_blank">Библиотека антиотладчика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/02/61689/" target="_blank">Вскрываем крутой бэкдор под Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/02/vzlom-1c/" target="_blank">Проникаем на сервер франчайзи, используя встроенные механизмы языка «1С:Предприятие»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/27/easy-hack-176/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/27/obzor-eksplojtov/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/27/speed-indicator-is/" target="_blank">Скорость реакции как показатель ИБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/26/easy-hack-178/" target="_blank">Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/25/61645/" target="_blank">Грузите файлы пачками!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/25/easy-hack-168/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/19/61612/" target="_blank">Малварь, бабло качай!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/16/windows-session-servise-crimes/" target="_blank">Поток сознания Ала Эка про тайны сессий и сервисов Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/16/forensic-ram-ringerprints/" target="_blank">Криминалистический анализ слепков оперативной памяти</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/16/read-file-in-mysql/" target="_blank">Обходим ограничение на чтение файлов в MySQL</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/16/sap-netweaver/" target="_blank">Разбираем множественные уязвимости в движке SAP NetWeaver J2EE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/16/content-providers-in-android/" target="_blank">Контент-провайдеры — слабое место в Android-приложениях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/08/61563/" target="_blank">Детектим виртуалки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/05/ollydbg-plugins/" target="_blank">Подбираем наиболее интересные плагины для OllyDbg</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/01/61530/" target="_blank">Настоящие герои всегда идут в обход!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/29/x-tools-176/" target="_blank">Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/24/hack-rf/" target="_blank">HackRF: Первое знакомство с виновником торжества</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/22/61466/" target="_blank">Взлом через Google Play</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/19/php-wrappers/" target="_blank">Как врапперы PHP могут быть использованы для атаки на веб-приложения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/16/alternative-php-vulnerabilities/" target="_blank">Уязвимости альтернативных реализаций PHP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/16/relevant-spuffing/" target="_blank">Актуальные методы спуфинга в наши дни</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/13/md5-hack/" target="_blank">Все методы взлома MD5</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/07/easy-hack-163/" target="_blank">Easy-Hack. Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/01/61348/" target="_blank">Ананасовый рай</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/01/light-xml-decrypted/" target="_blank">Легкий способ дешифрования закрытой XML-информации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/30/clean-memory/" target="_blank">Очистка оперативной памяти от улик</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/30/61337/" target="_blank">Bug Bounty — другая сторона медали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/19/61282/" target="_blank">Злоумышленники выбирают Java!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/17/61267/" target="_blank">В ежовых рукавицах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/14/touter-vulnerabilities/" target="_blank">Как ошибки в админке маршрутизаторов могут выдать полный доступ к роутеру</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/14/hardening/" target="_blank">Hardening &#8212; путь самурая</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/14/v-usb/" target="_blank">V-USB — программная реализация USB для AVR</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/11/61232/" target="_blank">Инструментация — эволюция анализа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/08/22/61122/" target="_blank">Прямой распил реестра Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/06/22/light-blind-sql-injection/" target="_blank">Легкий Blind!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/04/25/60511/" target="_blank">Microsoft ломает хеши!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/01/28/60017/" target="_blank">Создаем свой хардварный USB-троян</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/01/04/easy-hack-170/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/29/16-antiddos-recipes/" target="_blank">16 рецептов защиты от DDoS-атак своими силами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/29/loic/" target="_blank">Почему все говорят про LOIC?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/29/net-miracle-influence/" target="_blank">Влияние сетевых аномалий на доступность сетевых ресурсов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/19/59840/" target="_blank">Газель + Bluetooth = развод через SMS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/17/59825/" target="_blank">Ханипот на Amazon</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/12/x-tools-157/" target="_blank">Программы для взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/12/remote-control-system/" target="_blank">Потрошим коммерческий зловред Remote Control System</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/11/xml-apps-attacks-manual/" target="_blank">Настольный справочник по атакам на XML-приложения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/x-tools-164/" target="_blank">X-Tools: Софт для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/vm-xcode-integration/" target="_blank">Внедрение Х-кода и виртуальная машина: теория и практика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/king-of-spam-research/" target="_blank">Раскапываем внутренности руткита, не зря прозванного «королем спама»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/db-dns-export/" target="_blank">Получаем содержимое базы данных через DNS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/x-tools-159/" target="_blank">X-Tools</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/23/61467/" target="_blank">Преодолеваем файрволы: видеопруф</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/mailru-agent-hack/" target="_blank">Получаем доступ к истории переписки и контактам в популярном мессенджере</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/30/elmah-exploits/" target="_blank">Эксплуатируем систему регистрации и мониторинга исключений ELMAH</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/25/easy-hack-hakerskie-sekrety-prostyh-veshhej/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/25/amazing-providers-vulnerabilities/" target="_blank">Невыдуманная история о серьезных уязвимостях провайдера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/22/study-in-alien-mistakes-safe-password-from-brutforce/" target="_blank">Учимся на чужих ошибках и защищаем пароли от брутфорса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/22/php-filter-wrapper-attacks/" target="_blank">Использование враппера php://filter в контексте атаки на веб-приложения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/22/easy-hack-164/" target="_blank">Easy Hack: хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/22/light-fake-checksum/" target="_blank">Легкий способ подделки контрольной суммы и ЭЦП с помощью коллизий</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/16/easy-hack-157/" target="_blank">Easy Hack: Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/09/obzor-eksploitov-158/" target="_blank">Обзор эксплоитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/09/sms-lohotrons-secrets/" target="_blank">Вся подноготная SMS-лохотронов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/08/easy-hack-158/" target="_blank">Хакерские секреты простых вещей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/08/wifi-key-with-wps/" target="_blank">Получаем WPA-ключ для Wi-Fi с помощью уязвимой технологии WPS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/08/test-universal-captcha/" target="_blank">Тестируем универсальную распознавалку CAPTCHA</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/03/fake-votes-creation-guide/" target="_blank">Полный гид по накрутке онлайн-голосований</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/03/money-from-chrome-pentest/" target="_blank">Руководство по заработку на пентесте популярного веб-браузера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/29/x-tools-163/" target="_blank">Софт Для взлома и анализа безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/29/exploits-review-163/" target="_blank">Обзор эксплоитов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/29/x-tools-156/" target="_blank">Программы для взлома</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/22/new-exploit-develop-stage/" target="_blank">Новый виток развития эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/19/lotus-domino/" target="_blank">Эксплуатируем приватную дыру в Lotus Domino Controller</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/18/spyeye-zombinet/" target="_blank">Покоряем зомби-сети на базе SpyEye</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/07/exploit-review-156/" target="_blank">Обзор эксплоитов. Анализ свеженьких уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/04/windows-users-pass-dump/" target="_blank">Как сдампить хеши паролей от учеток Windows-системы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/04/skanner-xss-uyazvimostej-na-100-strochek-koda/" target="_blank">Сканнер XSS-уязвимостей, на 100 строчек кода</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/01/php-vulnerabilities/" target="_blank">Эксплуатация уязвимостей в функциях для работы с файлами в PHP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/09/18/59334/" target="_blank">Пробиваем VMware vCenter</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/09/04/59267/" target="_blank">PHP: старая песня о главном</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/08/28/59231/" target="_blank">Тропический анлим</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/08/21/59194/" target="_blank">iZombie, или вкус чужих яблок</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/04/13/exposure-nosql-db/" target="_blank">Разоблачение мифа о безопасности NoSQL СУБД</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/03/29/58497/" target="_blank">Интервью с Юрием Гольцевым: взлом как образ мысли</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/02/18/62066/" target="_blank">Интервью с главным «антихакером» России</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/02/17/58304/" target="_blank">Полный гид по накрутке онлайн-голосований</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/02/06/58241/" target="_blank">Итоги конкурса Group-IB</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/01/25/58183/" target="_blank">Трюки с phpinfo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/26/58104/" target="_blank">Китайские закладки: непридуманная история о виртуализации, безопасности и шпионах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/16/58014/" target="_blank">5 наиболее ожидаемых тенденций в сфере аутентификации в 2012 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/06/57950/" target="_blank">Sqlmap: SQL-инъекции &#8212; это просто</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/07/57955/" target="_blank">Обнаружение APT: в момент их вторжения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/11/30/57901/" target="_blank">AntiHASP: эмулируем ключ аппаратной защиты HASP</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/11/22/57856/" target="_blank">Бэкдор в БД: протроянивания MySQL с помощью хранимых функций, процедур и триггеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/11/16/57581/" target="_blank">0day своими руками: Ищем уязвимость и пишем эксплойт для Music Maker 16</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/11/02/57690/" target="_blank">phpMyAdmin на лопатках: взлом известного движка с помощью нашумевшего бага в глобализации переменных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/31/57647/" target="_blank">Шесть смертельных ошибок: мелкие уязвимости могут привести к крупным взломам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/27/57554/" target="_blank">Хак-машина из Google Chrome: собираем хакерскую сборку расширений для браузера от Google</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/24/57477/" target="_blank">Прав достаточно: 8 приемов для обхода групповых политик в домене</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/24/57474/" target="_blank">Возможна ли приватность в облаке?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/06/57944/" target="_blank">Oracle оставляет базы данных уязвимыми</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/13/57328/" target="_blank">Чем больше эксплоитов выставлено на продажу, тем выше уровень безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/10/57055/" target="_blank">Распил консоли: Выкатываем рояли на пути следования проактивных защит</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/05/57180/" target="_blank">Проваливай аудит безопасности: это полезно</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/27/56981/" target="_blank">Защиты баз данных: начни с сегментации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/03/57111/" target="_blank">Хакерство улучшает подготовку студентов в области безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/21/56910/" target="_blank">Почему хакерам не нужно быть умными</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/20/56878/" target="_blank">HD Moore: о Metasploit и его создателе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/20/56880/" target="_blank">Критическая уязвимость в SSL вышла из разряда теоретических: исследователи выпустили программу для взлома шифрования</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/19/56855/" target="_blank">Как создатель гаджета  перехитрил копирайтных троллей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/14/56791/" target="_blank">Cloud Hacking: облачные вычисления на службе у пентестера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/14/56790/" target="_blank">Цена плохой системы безопасности: больше, чем ты думаешь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/13/56773/" target="_blank">Anonymous: угроза национальной безопасности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/01/56672/" target="_blank">PHP-дайвинг: низкоуровневый поиск уязвимостей в веб-приложениях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/30/56644/" target="_blank">Безопасность расширений Opera: новые векторы атак через аддоны браузеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/25/56241/" target="_blank">Шелл для синего экрана: Изучаем программирование на Native API на примере шелла</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/24/56585/" target="_blank">Опасные обновления: заражение системы через механизм автоапдейтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/58078/" target="_blank">Easy Hack: Хакерские секреты простых вещейhttp://xakep.ru/58078/</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/58085/" target="_blank">X-TOOLS: Хакерский софт от blackhat’ов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/58091/" target="_blank">Спамим ответы@mail.ru: Используем невнимательность руководства mail.ru в своих целях</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/58079/" target="_blank">Обзор эксплоитов: Разбираем свежие уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/12/56754/" target="_blank">С помощью тайпсквоттинга исследователи украли 20 Гб электронной почты у  компаний Fortune 500</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/18/56532/" target="_blank">Тепловизоры помогут скиммерам в чтении ПИН-кодов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/18/56526/" target="_blank">SMS-похититель для Android: Sсriрting Layer for Android &#8212; интересная среда разработки для мобильного телефона</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/01/56365/" target="_blank">Silverlight: защита и нападение</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/28/56349/" target="_blank">Обратная связь DNS: продвинутый payload для организации туннеля</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/25/56319/" target="_blank">Android-марионетки: cистема управления всеми устройствами на Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/19/56270/" target="_blank">Порочное наследие Windows: концептуальные методы взлома Linux через флешку и защита от них</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/25/56318/" target="_blank">Анализ анонимности в системе Bitcoin</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/14/56209/" target="_blank">Сосед из ада: 18 лет тюрьмы за взлом Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/13/56206/" target="_blank">Безопасность расширений Google Chrome: привычные векторы атак в контексте аддонов для браузера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/13/55971/" target="_blank">Файлы-призраки, или охотники за привидениями: Как криминалисты восстанавливают надежно удаленные данные?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/12/56194/" target="_blank">Каждому хакеру – по VoIP: ищем и взламываем VoIP-шлюзы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/12/55798/" target="_blank">Скажи нет атакам на онлайн-банкинг: Предотвращаем хищения в системе дистанционного банковского обслуживания</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/11/55795/" target="_blank">Мелкомягкие хуки: Microsoft Detours — честное средство для настоящего хакера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/07/56161/" target="_blank">Анонимный хостинг через I2P: практические советы по использованию криптосети</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/06/56151/" target="_blank">Домены верхнего уровня: угроза безопасности?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57579/" target="_blank">Безопасность расширений веб-браузеров. Очередь opera: Новые векторы атак через аддоны браузеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57577/" target="_blank">Easy Hack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57586/" target="_blank">Чемпионаты по программированию и не только: Ломать, программировать и получать деньги? Легко!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57582/" target="_blank">X-Tools</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57578/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/29/55785/" target="_blank">Нокаут WHATHTML: Взлом нестандартной защиты на серийном ключе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/23/55780/" target="_blank">IDA + Python = любовь: Что может дать встроенный Python в дизассемблере IDA?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/11/57414/" target="_blank">Easy Hack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/11/57422/" target="_blank">Имя нам — легион: Анонимус не прощает</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/11/57418/" target="_blank">X-Tools</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/11/57415/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/11/57417/" target="_blank">Безопасность плагинов Google Chrome: Привычные векторы атак в контексте аддонов для браузера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/11/57425/" target="_blank">Обламываем UAC: Так ли страшна программисту система контроля пользователей?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/31/55560/" target="_blank">Top5 багов 2010 года: Самые значимые уязвимости прошедшего года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/30/55559/" target="_blank">Продвинутый фаззинг: Хитрые трюки поиска уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/19/55550/" target="_blank">Под присмотром Monitor API: Как отслеживать вызовы API-функций и зачем это нужно?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/14/57042/" target="_blank">Easy Hack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/14/57048/" target="_blank">X-tools</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/14/57045/" target="_blank">Эволюция Client-side эксплойтов в картинках: Как загружали трои в 2004 году, и как это происходит сейчас?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/14/57047/" target="_blank">Угнать за 60 секунд: Метод добычи удаленного дедика под управлением Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/14/57043/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/27/56069/" target="_blank">Крупные взломы вызвали спрос на сотрудников защиты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/11/55642/" target="_blank">Хакеры взломаны: захвачен главный IRC-сервер Anonymous</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/10/55234/" target="_blank">Перехватываем .NET: Теория и практика перехвата вызовов .NET-функций</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/04/55604/" target="_blank">Как работают DLP-системы: разбираемся в технологиях предотвращения утечки информации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/28/55544/" target="_blank">Tjat.com: финальный удар</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/25/55223/" target="_blank">WFP изнутри: Исследуем внутренности Windows Filtering Platform</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/21/55222/" target="_blank">Бурим ядро Windows: Kernel Pool Overflow – от теории к практике</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/12/55367/" target="_blank">Британника под колпаком: взлом знаменитой энциклопедии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/10/56234/" target="_blank">X-Tools</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/10/56231/" target="_blank">Обзор эксплойтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/03/31/55263/" target="_blank">Атаки на домен: завладеваем корпоративной сетью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/03/29/55194/" target="_blank">Файлы-призраки: как криминалисты восстанавливают надежно удаленные данные?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2010/05/12/53636/" target="_blank">Казуальное вскрытие в полевых условиях. Исследование защиты казуальных игр</a></li>
<li class="linkCls"><a href="https://xakep.ru/2009/02/06/47074/" target="_blank">Взлом метро: копирование и подделка билетов метрополитена</a></li>
<li class="linkCls"><a href="https://xakep.ru/2000/07/20/10261/" target="_blank">Дырка в IIS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2000/07/19/10260/" target="_blank">Огромная дыра в почтовиках</a></li>
<li class="linkCls"><a href="https://xakep.ru/2000/07/18/10297/" target="_blank">Переполнение буфера в WinAmp</a></li>
<li class="linkCls"><a href="https://xakep.ru/2000/07/17/10110/" target="_blank">Дырка в Microsoft Excel 2000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2000/07/17/10109/" target="_blank">Дырка в Internet Explorer 5.5</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/weebly-leak/" target="_blank">Сервис для создания сайтов Weebly подтвердил утечку данных 43 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/eset-about-fancy-bear/" target="_blank">ESET рассказала о целях и 0-day эксплоитах группировки Fancy Bear</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/dyn-ddos/" target="_blank">UPD. DDoS-атака на DNS-провайдера Dyn вызвала сбои в работе крупнейших сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/dirty-cow/" target="_blank">В ядре Linux устранена 0-day уязвимость Dirty COW, уже взятая на вооружение хакерами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/20/fruityarmor-0-day/" target="_blank">0-day уязвимость в Windows использовалась группой FruityArmor для целевых атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/20/japanlocker/" target="_blank">Исследователи обнаружили опенсорсного шифровальщика JapanLocker</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/20/aslr-bypass/" target="_blank">Продемонстрирован обход защиты ASLR за 60 мс, в том числе на архитектуре Intel Haswell</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/20/czech-police-arrest-linkedin-hacker/" target="_blank">В Чехии арестован российский хакер, ответственный за утечку 117 млн аккаунтов LinkedIn</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/19/sberbank-vs-siri/" target="_blank">Сбербанк предупреждает, что хакеры могут воровать деньги с помощью Siri и СМС-сообщений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/19/wp-marketplace-0day/" target="_blank">Сайты на WordPress атакуют через уязвимость в устаревшем плагине WP Marketplace</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/19/drilled-box/" target="_blank">Представитель Сбербанка рассказал, что хакеры сверлят в банкоматах дырки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/explosives-for-atm/" target="_blank">Преступники все чаще применяют для взлома банкоматов взрывчатку, а не малварь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/steganography-for-magento/" target="_blank">Вредонос для платформы Magento использует стеганографию для хищения данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/veracrypt-flaws/" target="_blank">Аудит VeraCrypt выявил 26 уязвимостей, 8 из которых критические</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/exploits-213/" target="_blank">Обзор эксплоитов #213. Обход аутентификации в OpenCFP, уязвимости в IP-камере Samsung и XSS в TP-Link</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/iot-threats/" target="_blank">Специалисты «Доктор Веб» выявили самые распространенные IoT-угрозы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/exotic-ransomware/" target="_blank">Автор шифровальщика Exotic поблагодарил ИБ-специалистов за работу</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/17/bind-flaw-in-the-wild/" target="_blank">Хакеры компрометируют DNS-серверы через недавно исправленную уязвимость в BIND</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/17/new-acecard-trick/" target="_blank">Банковский троянец для Android просит своих жертв сделать селфи с документами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/17/ibm-censored-poc-code/" target="_blank">IBM попросила исследователя убрать PoC-код эксплоита для WebSphere из открытого доступа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/17/mirai-danger-sierra-wireless/" target="_blank">Троян Mirai атакует оборудование Sierra Wireless, предназначенное для сетей сотовой связи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/17/he-shadow-brokers-auction-off/" target="_blank">Группа The Shadow Brokers отменила аукцион по продаже хакерских инструментов АНБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/14/sshowdown-proxy/" target="_blank">Старая SSH-уязвимость используется для атак на IoT-устройства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/14/foxconn-pork-explosion/" target="_blank">Многие Android-устройства с прошивкой от Foxconn содержат скрытый бэкдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/14/nyadrop/" target="_blank">Linux-троян NyaDrop атакует IoT-устройства  и может повторить успех трояна Mirai</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/14/x-tools-213/" target="_blank">Лучший хакерский софт октября. X-TOOLS #213</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/13/october-patch-tuesday/" target="_blank">Microsoft пропатчила четыре 0-day уязвимости, которые эксплуатировали хакеры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/13/blockchain-info-dns-hijacking/" target="_blank">Сервис биткоин-кошельков Blockchain.info пострадал в результате DNS-hijacking атаки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/13/avtech-flaws/" target="_blank">Баги в продуктах Avtech могут привести к появлению нового IoT-ботнета</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/13/trojan-odinaff/" target="_blank">Троян Odinaff атакует банки, использующие систему SWIFT</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/13/pup-problem/" target="_blank">Microsoft и Malwarebytes выступили против потенциально нежелательного ПО</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/12/online-gaming-hacking/" target="_blank">Trend Micro рассказала о том, как хакеры воруют у геймеров и отмывают деньги в играх</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/12/matrixssl-upd/" target="_blank">Уязвимости в MatrixSSL опасны для IoT-устройств производства Canon, D-Link, Intel, Motorola</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/11/strongpity-apt/" target="_blank">Хакерская группа StrongPity распространяет вредоносные версии WinRAR и TrueCrypt</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/11/trojan-encoder-6491/" target="_blank">Исследователи нашли шифровальщика, написанного на Go, и уже его взломали</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/11/tricky-js-malware/" target="_blank">JavaScript-вредонос выключает ПК, если кто-то пытается завершить его процесс</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/10/indian-scam/" target="_blank">Три индийских колл-центра зарабатывали на скаме более $75 млн в год</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/10/false-flags/" target="_blank">«Лаборатория Касперского» рассказала, как хакеры обманывают ИБ-экспертов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/10/f2fs-mythology/" target="_blank">Мифы о файловой системе F2FS. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/07/dark-web-phishing-scheme/" target="_blank">ФБР помогает пользователям, которых обокрали в даркнете</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/07/magecart/" target="_blank">Вредонос Magecart атакует магазины на базе Magento, OpenCart и Powerfront</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/07/private-browsing-ios-10/" target="_blank">IntaForensics: Режим private browsing в Safari был ослаблен с выходом iOS 10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/06/akamai-about-krebs-ddos/" target="_blank">Компания Akamai опубликовала детальный отчет о DDoS-атаках на сайт Брайана Кребса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/06/steam-spreading-rat/" target="_blank">В Steam замечена новая спам-кампания по распространению малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/06/easy-hack-212/" target="_blank">Easy Hack: Прикручиваем умный процессинг HTTP-ответов в Burp Intruder</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/06/trojan-sysscan/" target="_blank">Новый троянец Trojan.sysscan распространяется посредством RDP-брутфорса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/06/buzzfeed-vs-ourmine/" target="_blank">Хакеры из группы OurMine взломали сайт Buzzfeed и утверждают, что украли БД</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/06/badkernel/" target="_blank">Баг BadKernel представляет опасность для каждого шестнадцатого Android-устройства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/05/marsjoke-done/" target="_blank">Взломано шифрование вымогателя MarsJoke</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/04/mirai-mapping/" target="_blank">В состав ботнета Mirai входят порядка 120 000 IoT-устройств</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/03/yahoo-mail-ios/" target="_blank">Смена пароля не действует на iOS-версию приложения Yahoo Mail</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/03/openjpeg-0day/" target="_blank">Обнаружена 0-day уязвимость в библиотеке OpenJPEG</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/03/shadow-brokers-message/" target="_blank">Хакеры из группы Shadow Brokers жалуются, что никто не покупает эксплоиты АНБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/03/mirai-source-code/" target="_blank">Опубликованы исходники трояна Mirai, на базе которого строится мощный IoT-ботнет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/30/ovh-ddos/" target="_blank">Более 150 000 IoT-устройств были задействованы в ходе DDoS-атаки мощностью 1 Тб/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/30/vendetta-brothers/" target="_blank">Хакерская группа Vendetta Brothers атакует PoS-системы в США и скандинавских странах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/30/cisco-cve-2016-6406/" target="_blank">Разработчики Cisco забыли удалить тестовый интерфейс из IronPort AsyncOS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/30/zerodium-price-2/" target="_blank">Zerodium заплатит 1,5 млн долларов за 0-day уязвимости в iOS 10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/30/zeronights-2016-ctf/" target="_blank">CTF на ZeroNights 2016: QIWI и «Информзащита» разыграют 250 тыс. рублей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/30/mobile-criminal/" target="_blank">Мобильная криминалистика. Извлекаем данные из iOS-устройств и проводим их анализ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/29/bypassing-office-pc-restrictions/" target="_blank">Вскрываем Windows. Легкие способы получить права админа на рабочем компьютере</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/28/dridex-new-tricks/" target="_blank">Банковский троян Dridex скрывается в защищенных паролями документах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/28/openssl-fix-for-fixes/" target="_blank">Экстренные патчи, выпущенные OpenSSL, устранили одни уязвимости и привнесли новые</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/28/dangerous-chinaphones/" target="_blank">Опасный Китай. Как ломают китайские смартфоны</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/27/wardriving-devices/" target="_blank">Выбираем бюджетный адаптер для взлома Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/27/epson/" target="_blank">Подмена прошивки МФУ Epson позволяет атаковать компанию через факс-модем устройства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/27/street-fighter-v-anti-cheat/" target="_blank">Новая античитерская система Street Fighter V отключила механизмы безопасности Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/27/spam-looper/" target="_blank">Разработчик написал специального бота для троллинга спамеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/26/beningcertain-map/" target="_blank">Более 850 000 устройств Cisco уязвимы перед эксплоитом BENINGCERTAIN</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/26/ios-10-encryption-strength/" target="_blank">Механизм верификации паролей для бекапов в iOS 10 в 2500 раз слабее предыдущего</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/26/nsa-mistake/" target="_blank">Утечка эксплоитов АНБ произошла из-за ошибки, допущенной сотрудником три года назад</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/26/krebs-ddos/" target="_blank">Из-за мощных DDoS-атак компания Akamai отказалась хостить сайт Брайана Кребса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/23/keybot-happy-end/" target="_blank">Хозяин торгового бота в Steam напугал сообщество, сообщив о возможном взломе Coinbase</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/23/kerio-control-bugs/" target="_blank">Баги в продуктах Kerio Control могут привести к полной компрометации организации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/23/iphone-7-jailbroken/" target="_blank">Приватный джейлбрейк iPhone 7 был осуществлен всего за 24 часа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/23/yahoo-data-breach/" target="_blank">Утечки выходят на новый уровень: похищены данные о 500 млн аккаунтов Yahoo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/22/raum/" target="_blank">Сервис RAUM заражает малварью торрент-файлы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/22/malware-in-letterboxes/" target="_blank">В Австралии хакеры подбрасывают USB-флешки с малварью в почтовые ящики</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/22/665-gbps-ddos/" target="_blank">Хакеры обрушили на сайт Брайана Кребса DDoS-атаку рекордной мощности: 665 Гбит/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/22/poodlecorp-ddos/" target="_blank">Хакерская группа PoodleCorp продолжает атаковать серверы Blizzard</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/21/facebook-idor-issue/" target="_blank">Исследователь заработал $16 000, обнаружив уязвимость в Facebook Business Manager</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/21/tesla-remote-hack/" target="_blank">Китайские исследователи продемонстрировали удаленный взлом Tesla Model S</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/21/microsoft-exchange-bug/" target="_blank">Microsoft отказалась признать, что проблема в работе Exchange является уязвимостью</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/21/openssl-releases/" target="_blank">22 сентября разработчики OpenSSL выпустят патчи сразу для нескольких уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/21/androidexperiments/" target="_blank">Играем в панели уведомлений, вводим PIN-код взмахами и превращаем смартфон в 3D-пульт. Колонка Евгения Зобнина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/20/monero-csrf/" target="_blank">Обнаружен CSRF-баг, позволяющий компрометировать кошельки Monero и похищать деньги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/20/ftp-scan/" target="_blank">Почти 800 000 FTP-серверов доступны любому желающему и не требуют аутентификации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/20/benigncertain/" target="_blank">Эксплоит АНБ, опубликованный хакерами, используется для атак на продукты Cisco</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/20/analyticscore-apk/" target="_blank">Представители Xiaomi объяснили наличие бэкдора в устройствах компании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/20/exploits-212/" target="_blank">Обзор эксплоитов #212. Многочисленные уязвимости в продуктах NUUO, Netgear и JetBrains</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/19/not-so-safe-mode/" target="_blank">Безопасный режим Windows может использоваться для хищения данных</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/19/firefox-certificate-pinning-bug/" target="_blank">В браузере Tor исправлен баг привязки сертификатов, в Firefox уязвимость устранят позже</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/16/drupal-restful-attacks/" target="_blank">Хакеры активно эксплуатируют брешь в модуле Drupal, обнаруженную еще в июле</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/16/xiaomi-mi4-analyticscore/" target="_blank">Предустановленное приложение на смартфонах Xiaomi Mi4 может использоваться как бэкдор</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/16/signal-flaws/" target="_blank">Ничто не идеально: в мессенджере Signal обнаружено и устранено сразу три уязвимости</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/15/clixsence-got-hacked/" target="_blank">Хакеры взломали ClixSence и теперь готовы продать данные 6,6 млн пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/15/cve-2016-3351/" target="_blank">0-day баг в IE и Edge, исправленный два дня назад, использовался хакерами с 2014 года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/14/wada-fancy-bear/" target="_blank">Хак-группа Fancy Bear атаковала ВАДА и опубликовала допинг-тесты американских атлетов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/14/pos-terminals-new-threats/" target="_blank">Новые угрозы для старых PoS-терминалов. Колонка Дениса Макрушина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/13/hack-android-1/" target="_blank">Ломаем софт для Android. Делаем платное приложение бесплатным</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/13/krebs-vs-vdos/" target="_blank">Брайан Кребс разоблачил хакерскую группировку vDos и стал жертвой DDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/13/android-metadata-bug/" target="_blank">Баг в Android позволяет извлечь метаданные из приложений и узнать личность жертвы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/12/0-days-mysql/" target="_blank">В MySQL найдены две 0-day уязвимости, патчей для них пока нет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/09/new-cwa-arrests/" target="_blank">Арестованы хакеры, подозреваемые во взломе директоров ЦРУ и ФБР в 2015 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/09/qip-leak/" target="_blank">Еще одна крупная и старая утечка данных: 33 млн паролей QIP.ru похищены в 2011 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/09/usbkill-2/" target="_blank">Флешку для «убийства» компьютера теперь можно приобрести за 50 евро</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/09/x-tools-212/" target="_blank">Лучший хакерский софт сентября. X-TOOLS #212</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/08/usb-ethernet-stealer/" target="_blank">Модифицированный Ethernet адаптер способен похищать данные с заблокированных ПК и Mac</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/08/old-drm-attack/" target="_blank">Скамеры все еще используют для атак старый трюк с Windows Media Player DRM</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/07/lukavsky-vs-whaling-scam/" target="_blank">Глава компании SEC Consult взломал мошенников, прислав им вредоносный PDF</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/06/windows-cve-2016/" target="_blank">Разбор эксплоита: повреждение памяти в скриптовом движке Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/07/android-upd/" target="_blank">Сентябрьское обновление для Android состоит из трех наборов патчей для 55 уязвимостей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/06/sundown-ek/" target="_blank">В состав эксплоит кита Sundown входят эксплоиты, позаимствованные из других наборов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/06/rambler-leak/" target="_blank">UPD. Почти 100 млн аккаунтов Rambler были украдены еще в 2012 году</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/05/we-put-malware-in-your-malware/" target="_blank">Исследователи Sophos нашли хакера, который заражает чужую малварь своей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/05/phaas/" target="_blank">Эксперты Fortinet обнаружили сайт, предлагающий фишинг в качестве услуги</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/05/kernel-org-arrest/" target="_blank">Во Флориде арестован подозреваемый во взломе kernel.org</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/02/l0phtcrack/" target="_blank">Спустя семь лет после последнего релиза представлена новая версия L0phtCrack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/02/btc-leaks/" target="_blank">Криптовалютная биржа BTC-E и форум BitcoinTalk подверглись взлому</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/02/iot-ddos/" target="_blank">Уже более миллиона IoT устройств входят в состав различных ботнетов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/02/reverse-rights/" target="_blank">Право на реверс. Как обратная разработка выглядит с юридической точки зрения</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/02/last-fm-leak/" target="_blank">В 2012 году были украдены данные 43 млн пользователей Last.fm</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/02/pegasus-os-x-safari-patch/" target="_blank">Коммерческая спайварь Pegasus опасна для macOS и Safari, Apple выпустила патчи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/01/y-browser-csrf/" target="_blank">В браузере «Яндекса» исправлен CSRF-баг, позволявший похитить все данные пользователя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/01/whatsapp-phishing/" target="_blank">Компания ESET предупредила о мошенниках, обещающих взломать WhatsApp</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/31/usbee/" target="_blank">Малварь USBee позволяет использовать любую флешку для кражи данных с изолированных ПК</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/31/onelogin-compromised/" target="_blank">OneLogin взломали, злоумышленники получили доступ к паролям и ключам клиентов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/31/hack-tp-link-hs110/" target="_blank">(Без)умная розетка. Анализируем уязвимости умной розетки TP-Link HS110 Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/31/kelihos-size/" target="_blank">Размер ботнета Kelihos увеличился в три раза за 24 часа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/31/all-about-lurk/" target="_blank">«Лаборатория Касперского» представила отчет о группе Lurk, создавшей эксплоит кит Angler</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/30/google-login-page-issue/" target="_blank">Google отказалась исправить баг на странице логина, приводящий к скачиванию малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/30/kis-bugs-fixed/" target="_blank">В Kaspersky Internet Security исправлены баги, приводившие к крашу антивируса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/30/st-jude-medical/" target="_blank">Исследователи слили данные об уязвимостях в медицинском оборудовании на сторону</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/29/wikey-keylogger/" target="_blank">Создан кейлоггер, перехватывающий нажатия клавиш посредством сигнала Wi-Fi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/29/infosec-43-products/" target="_blank">43 разновидности продуктов на рынке ИБ. Колонка Александра Полякова</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/29/ripper-atm-malware/" target="_blank">Малварь RIPPER, вероятно, использовали при ограблениях банков на Тайване и в Таиланде</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/29/opera-sync-and-dropbox-compromised/" target="_blank">Opera Sync и Dropbox скомпрометированы и просят сменить пароли</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/29/fb-password-bug/" target="_blank">Исследователь придумал способ массового взлома аккаунтов Facebook</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/26/alma-ransomware/" target="_blank">Исследователи использовали MitM-атаку против операторов шифровальщика Alma</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/26/wordpress-botnet/" target="_blank">Компания WordFence нашла ботнет из WordPress-сайтов, созданный одним человеком</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/26/sweet32/" target="_blank">Атака Sweet32 позволяет извлекать данные из HTTPS и OpenVPN</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/26/pegasus-3-zerodays-in-ios/" target="_blank">Найдена коммерческая спайварь Pegasus, использующая три 0-day бага для взлома iOS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/25/thai-bank-heist/" target="_blank">Хакеры украли у таиландского банка $346000, вызвав отключение 3300 банкоматов в стране</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/25/vr-biometric-hack/" target="_blank">Для обхода биометрической аутентификации нужно VR-устройство и фотографии с Facebook</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/24/mail-ru-leak/" target="_blank">UPD. С поддоменов Mail.ru похищены данные 25 млн аккаунтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/24/juniper-nsa-exploits/" target="_blank">Juniper признала, что опубликованные эксплоиты АНБ опасны для продуктов компании</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/24/navis-webaccess-sql/" target="_blank">Американские порты были атакованы из-за уязвимости ПО Navis WebAccess к SQL-инъекциям</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/24/exploits-211/" target="_blank">Обзор эксплоитов #211. Инъекция PHP-кода в IPS и хранимая XSS в Django CMS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/24/cisco-asa-0day/" target="_blank">Эксплоит The Shadow Brokers представляет угрозу и для новых версий Cisco ASA</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/23/bhu-wifi-urouter/" target="_blank">Эксперт компании IOActive нашел множество уязвимостей в роутерах фирмы BHU</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/23/hidden-behind-vm/" target="_blank">Хакеры поднимают виртуальную машину на ПК жертвы, чтобы скрыть следы атаки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/23/epic-games-hacked/" target="_blank">Форумы Epic Games снова взломали, похищены данные 800 000 пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/23/hack-windows-backup/" target="_blank">Как взламывают Windows. Ломаем бэкапы Windows 10 в компьютерах, планшетах и телефонах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/23/ninja-forms-sql-flaw/" target="_blank">Плагин Ninja Forms для WordPress уязвим для SQL-инъекций, в опасности 600 000 сайтов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/22/opolympichacking/" target="_blank">Anonymous написали собственный инструмент для DDoS-операции #OpOlympicHacking</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/22/gnupg-and-libgcrypt-rng-bug/" target="_blank">В GnuPG и библиотеке Libgcrypt исправили критический баг, существующий с 1998 года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/22/new-snowden-docs/" target="_blank">Новые документы из архива Сноудена доказывают, что The Shadow Brokers взломали АНБ</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/19/iot-disaster/" target="_blank">IoT-розетки сливают учетные данные от Wi-Fi и почты, а также пригодны для DDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/19/dlh-and-leet-compromised/" target="_blank">Взломаны сразу два геймерских сайта, похищены миллионы ключей активации игр в Steam</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/19/operation-ghoul/" target="_blank">От таргетированных атак Operation Ghoul пострадали более 130 промышленных предприятий</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/18/www-hacksplaining/" target="_blank">WWW: Hacksplaining — интерактивные уроки по взлому веб-сайтов и его предотвращению</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/18/falseconnect/" target="_blank">Баг FalseCONNECT в процедурах аутентификации прокси приводит к перехвату HTTPS-трафика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/18/browsers-and-rtl-simbols/" target="_blank">Баг в Chrome и Firefox позволял подменить URL, используя арабские символы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/18/cisco-fortinet-exploits/" target="_blank">Cisco и Fortinet исправляют уязвимости, обнародованные хакерами The Shadow Brokers</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/17/pgp-short-ids/" target="_blank">Неизвестные подделали PGP-ключи Линуса Торвальдса и ключевых разработчиков Tor</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/17/nsa-hack/" target="_blank">Сноуден считает, что АНБ взломали российские хакеры. Эксперты подтвердили подлинность дампа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/16/pos-makers-hack/" target="_blank">От взлома пострадало не только PoS-подразделение Oracle, но еще пять PoS-провайдеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/16/x-tools-211/" target="_blank">Лучший хакерский софт августа. X-TOOLS #211</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/16/datasploit/" target="_blank">Инструмент для пентестеров Datasploit автоматизирует приемы социальной инженерии</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/16/cve-2016-5696-on-android/" target="_blank">Уязвимость имплементации TCP в Linux опасна для 1,4 млрд устройств на базе Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/16/equation-group-files/" target="_blank">Хакеры The Shadow Brokers заявляют, что похитили кибероружие АНБ у других хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/15/armageddon/" target="_blank">ARMageddon атакует кеш CPU, позволяя обойти TrustZone и перехватить нажатия клавиш</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/15/retroscope/" target="_blank">Криминалистическое приложение Retroscope достает данные из WhatsApp, Telegram и т.д.</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/15/bitfinex-reward/" target="_blank">Взломанная биржа Bitfinex предложила $3,5 млн за информацию о пропавших биткоинах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/12/diskfiltration/" target="_blank">Данные с изолированного ПК можно перехватить, слушая звуки жесткого диска</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/12/klyuchi-millionov-avto-mozhno-poddelat-s-pomoshhyu-deshevogo-rf-transivera-na-baze-arduino/" target="_blank">Ключи миллионов авто можно подделать с помощью дешевого RF-трансивера на базе Arduino</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/12/secure-boot-golden-keys/" target="_blank">Microsoft случайно забыла в коде режим отладки, позволяющий обойти UEFI Secure Boot</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/12/cve-2016-5696/" target="_blank">В TCP Linux найден баг, допускающий подмену трафика и обрыв HTTPS и Tor соединений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/11/exodus-rsp/" target="_blank">Компания Exodus предложила за уязвимости в iOS больше самой Apple: до $500 000</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/11/mining-industry-threats/" target="_blank">Trend Micro: добывающая промышленность стала одной из ключевых целей хакеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/11/samsung-pay/" target="_blank">Исследователь нашел бреши в платежной системе Samsung Pay, но Samsung все отрицает</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/10/oracle-micros/" target="_blank">PoS-подразделение Oracle пострадало от взлома, атаку связывают с группой Carbanak</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/10/projectsauron/" target="_blank">Исследователи обнаружили хак-группу ProjectSauron, скрывавшуюся в тени более 5 лет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/10/monitor-hack/" target="_blank">На конференции Def Con продемонстрировали взлом монитора</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/09/bitfinex-losses/" target="_blank">Биржа Bitfinex компенсирует потерянные $65 млн за счет пользователей</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/09/thermostat-hack/" target="_blank">Эксперты Pen Test Partners создали вымогателя, заражающего термостаты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/09/malicious-butler/" target="_blank">Старую Windows-уязвимость Evil Maid превратили в Malicious Butler</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/09/quadrooter/" target="_blank">Уязвимости QuadRooter угрожают 900 миллионам устройств на базе Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/08/tech-support-revenge/" target="_blank">Исследователь проучил скаммера, заставив его установить шифровальщика Locky</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/08/car-hackers-arrested/" target="_blank">Арестованы два автоугонщика, взломавшие более 100 автомобилей Dodge и Jeep</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/08/snap_r/" target="_blank">Опубликован инструмент для полностью автоматизированного направленного фишинга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/08/fosshub-hacked/" target="_blank">Бесплатный хостинг для софта FossHub заразили малварью, изменяющей MBR</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/05/pwn2own-how-they-did-it/" target="_blank">Выпущен подробный отчет об уязвимостях и методиках, использованных в ходе Pwn2Own</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/05/compromising-pos-systems/" target="_blank">Устройство за $6 компрометирует ключ-карты отелей и PoS-системы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/04/shimmer-for-atm/" target="_blank">На Black Hat банкомат заставили выдавать деньги, перехватив данные EMV-карты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/04/http-2-flaws/" target="_blank">В протоколе HTTP/2 выявлено сразу четыре опасных бага</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/04/exploits-210/" target="_blank">Обзор эксплоитов #210. Удаленное выполнение кода в MSIE и целочисленное переполнение в Windows</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/04/aem-dispatcher-bug/" target="_blank">Исследователь проник на сервер Microsoft, использовав брешь в Adobe Experience Manager</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/03/hidden-macro-malware/" target="_blank">Чтобы спрятать вредоносные макросы, достаточно просто переименовать файл</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/03/hacked-featured-snippets/" target="_blank">Расширенные сниппеты в Google используются для распространения малвари</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/03/hacked-featured-snippets/" target="_blank">Расширенные сниппеты в Google используются для распространения малвари</a></li>
</ol>
</body>
</html>