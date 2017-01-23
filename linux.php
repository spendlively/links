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
<body><ol class="rounded"><li class="linkCls"><a href="https://xakep.ru/2017/01/09/home-nas-server/" target="_blank">Собираем из старого сервера домашний NAS с медиаплеером на XPEnology</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/20/flash-player-24-for-linux/" target="_blank">После четырехлетнего перерыва представлен Adobe Flash Player 24 для Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/16/gsteamer-flaws/" target="_blank">Популярные дистрибутивы Linux уязвимы перед drive-by атаками через музыкальные файлы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/12/16/ssh-tips-n-tricks/" target="_blank">20 трюков с SSH: подборка советов и интересных команд на все случаи жизни</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/23/linux-kernel-hotpatching/" target="_blank">Hotpatching: как обновить ядро Linux без перезагрузки системы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/21/cappsule/" target="_blank">Песочница, из которой не выбраться: используем Cappsule для запуска малвари и софта в виртуальной среде</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/17/microsoft-linux-foundation/" target="_blank">Компания Microsoft присоединилась к Linux Foundation</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/15/cryptsetup-flaw/" target="_blank">Через Cryptsetup можно получить доступ к root shell, если зажать Enter на 70 секунд</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/tails-live-flash/" target="_blank">Делаем шпионскую флешку с защищенной операционкой Tails</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/02/dirty-cow-and-containers/" target="_blank">Виртуализация не защитит от уязвимости Dirty COW, возможен побег из контейнеров Docker</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/11/01/irctelnet/" target="_blank">Обнаружен написанный на C++ троян IRCTelnet, нацеленный на IoT-устройства</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/virtuozzo-interview/" target="_blank">Virtuozzo на пальцах. Интервью с Алексеем Кобцом, вице-президентом по разработке Virtuozzo</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/24/linux-backdoor-fakefile-1/" target="_blank">Троян FakeFile опасен для Linux-машин и не требует для работы root-привилегий</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/21/dirty-cow/" target="_blank">В ядре Linux устранена 0-day уязвимость Dirty COW, уже взятая на вооружение хакерами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/20/subgraph-os/" target="_blank">Защищенный Linux-дистрибутив Subgraph OS: что внутри?</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/18/iot-threats/" target="_blank">Специалисты «Доктор Веб» выявили самые распространенные IoT-угрозы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/17/bind-flaw-in-the-wild/" target="_blank">Хакеры компрометируют DNS-серверы через недавно исправленную уязвимость в BIND</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/10/faq-dd/" target="_blank">FAQ: Команда dd и ее секреты (на самом деле нет)</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/07/vpn-review/" target="_blank">Строим туннели. Разбираемся с новинками VPN</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/10/04/faq-spy-for-ssh/" target="_blank">FAQ: Смотрим, что печатает пользователь в консоли SSH</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/26/faq-10-bash-tricks/" target="_blank">FAQ: 10 простых и полезных трюков для командной строки UNIX и Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/26/virtuozzo-start/" target="_blank">Быстрый старт с Virtuozzo. Знакомимся с крутой системой контейнерной виртуализации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/28/linux-mirai/" target="_blank">Новые версии трояна Linux.Mirai научились удалять себя и отключать таймер watchdog</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/19/luabot-interview/" target="_blank">Автор Linux-малвари LuaBot утверждает, что его троян безвреден</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/16/configure-vds-and-site-transfer/" target="_blank">Сам себе админ. Учимся настраивать VDS и переносить сайты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/15/linux-ddos-93/" target="_blank">Обнаружен уже шестой за месяц Linux-троян, созданный для организации DDoS-атак</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/12/rust-malware/" target="_blank">Найден кроссплатформенный троян, написанный на языке Rust</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/08/19-shell-scripts/" target="_blank">19 полезных shell-скриптов на все случаи жизни</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/09/05/bind-9/" target="_blank">BIND 9: опыт настройки и эксплуатации DNS-сервера</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/18/shellcode-nix-x64/" target="_blank">Линуксовый IoT под прицелом: пишем шелл-код под *nix x64</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/12/openshot/" target="_blank">Сам себе режиссер: разбираемся с OpenShot</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/22/trojan-rex/" target="_blank">Саморазмножающийся Linux-троян Rex атакует сайты, создавая P2P-ботнет</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/12/cve-2016-5696/" target="_blank">В TCP Linux найден баг, допускающий подмену трафика и обрыв HTTPS и Tor соединений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/09/your-own-docker/" target="_blank">Собственный Docker. Создаем песочницу для приложений своими руками</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/08/04/suckless/" target="_blank">Простота &#038; удобство: обзор невероятно компактных, быстрых и удобных приложений suckless.org</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/22/sandbox-games/" target="_blank">Игры с песочницей. Выбираем простое и быстрое решение для изоляции приложений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/23/whonix/" target="_blank">Whonix: операционная система для анонимуса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/07/console-magic-2/" target="_blank">Покоряем терминал. Как магия консоли позволяет сделать data engineering проще. Часть 2</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/06/02/linux-4-5/" target="_blank">Знакомимся с новым ядром Linux 4.5</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/07/26/virtuozzo-7/" target="_blank">Компания Virtuozzo представила платформу Virtuozzo 7 на базе нового ядра Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/31/sphinx-on-linux-2/" target="_blank">Приручаем Сфинкса, часть 2: практическая реализация распознавания речи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/27/dragonfly/" target="_blank">Тур по BSD, часть 4. DragonFly, гибридное ядро и HAMMER</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/17/console-magic/" target="_blank">Покоряем терминал. Как магия консоли позволяет сделать data engineering проще</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/03/openbsd/" target="_blank">Тур по BSD, часть 3. OpenBSD, OpenSSH и Тео де Раадт</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/29/geek-edc/" target="_blank">Карманный набор инструментов для гика: подбираем отвертки, мультитул и другие полезности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/05/12/allwinner-backdoor/" target="_blank">Простейший бекдор обнаружен на устройствах, работающих на базе ARM решений Allwinner</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/28/grsecurity-ban/" target="_blank">Разработчики Grsecurity забанили исследователя, который нашел баг в свежем патче</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/04/14/sphinx-on-linux/" target="_blank">Приручаем Сфинкса: как настроить систему распознавания голоса Sphinx на Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/31/linux-speech-recognition/" target="_blank">Разбираемся с современными системами распознавания речи в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/16/netbsd/" target="_blank">Тур по BSD, часть 2. NetBSD, rump-ядра и pkgsrc</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/03/02/bsd-history-1/" target="_blank">Тур по BSD, часть 1. Рождение Berkeley Software Distribution</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/20/tox-clients/" target="_blank">Самый безопасный IM. Рассматриваем клиенты Tox для Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/28/linux-admin-panels/" target="_blank">Админим с комфортом. Разбираемся с веб-панелями управления Linux-сервером</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/01/07/freebsd-crypto-protection-2/" target="_blank">Криптозащита FreeBSD. Часть 2: тонкости повседневного использования</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/31/opensource-2015/" target="_blank">Свободный софт в 2015 году: итоги, события и достижения в мире открытого ПО</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/16/emby/" target="_blank">Делаем свой домашний кинотеатр с помощью медиасервера Emby</a></li>
<li class="linkCls"><a href="https://xakep.ru/2016/02/08/maru-os/" target="_blank">Maru OS совмещает Android и Debian и позволяет превращать смартфон в десктоп</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/12/01/raspbian-random-numbers-gen-bug/" target="_blank">Raspberry Pi генерирует предсказуемые ключи SSH</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/11/03/shorewall-review/" target="_blank">Shorewall: «бронированный» файрволл. Обзор и настройка</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/20/nix-viruses-history/" target="_blank">Заразные пингвины. История вирусописательства для *nix-систем в цифрах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/29/ubuntu-15-04-vivid-vervet-diet/" target="_blank">Диета для верветки. Уменьшаем количество используемой памяти в Ubuntu 15.04 без ограничения видимой функциональности</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/23/bcachefs-linux/" target="_blank">Увеличиваем обороты. Разбираемся с Bcachefs — новой файловой системой для Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/10/01/linux-botnet/" target="_blank">Linux-ботнет замечен в DDoS-атаках мощностью 150 ГБ/с</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/22/microsoft-azure-cloud-switch/" target="_blank">Microsoft создала собственный дистрибутив Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/15/astra-linux-se/" target="_blank">Русский бронированный Debian. Как устроена новая модель управления доступом в Astra Linux SE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/09/10/linux-crypt/" target="_blank">Наследники «Энигмы». Обзор современных криптосредств в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/27/shell-cli-alternatives/" target="_blank">*sh, фас! Обзор альтернативных CLI-оболочек</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/19/top-10-unusual-linux-dists/" target="_blank">Сборная солянка. Топ-10 необычных Linux-дистрибутивов, которыми ты вряд ли воспользуешься в обычной жизни</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/08/17/from-windows-2003-2008-to-linux-samba/" target="_blank">Меняем главного. Переходим с Windows 2003/2008 на Linux Samba</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/21/freebsd-crypto-protection/" target="_blank">Использование средств криптографической защиты в ОС FreeBSD</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/13/nas-openmediavault/" target="_blank">Личная пещера Али-Бабы. Обзор программного NAS OpenMediaVault</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/01/virtuozzo-7-test-builds/" target="_blank">Проект OpenVZ начал выкладывать тестовые сборки Virtuozzo 7</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/27/debian-8-review/" target="_blank">«Принцесса Джесси»: обзор Debian 8</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/06/11/elasticsearch-tutorial/" target="_blank">Учимся работать с Elasticsearch</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/26/pdf-linux-tools/" target="_blank">Работаем с PDF в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/20/genode-os-build-review/" target="_blank">Обзор фреймворка для создания ОС Genode</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/05/18/linux-mini-dists-review/" target="_blank">Обзор мини-дистрибутивов Linux: TinyCore, Puppy Linux, SliTaz, 4MLinux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/21/195-kde/" target="_blank">Обзор рабочего стола KDE Plasma 5 с приложениями</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/18/195-chrome-os/" target="_blank">Заглядываем под капот Chrome OS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/07/13/linux-utilities/" target="_blank">Linux Foundation оценила уязвимость системных утилит Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/17/unix-abbr/" target="_blank">Расшифровка названий утилит Unix</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/13/linux-4-0/" target="_blank">Вышло ядро Linux 4.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/04/10/xps-13-developer-edition/" target="_blank">Обновленная версия Linux-ноутбука XPS-13 Developer Edition</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/03/04/linux-4-0-patches/" target="_blank">Linux 4.0: апдейт без перезагрузки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/27/tails-1-3/" target="_blank">Вышел дистрибутив Tails 1.3</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/24/cool-retro-term/" target="_blank">Cool-retro-term: эмулятор старого дисплея</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/19/linux-2015/" target="_blank">Отчёт «Кто пишет Linux 2015»</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/18/i-know-this/" target="_blank">«Я знаю это»: игра для юниксоидов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/02/09/linux-3-19/" target="_blank">Linux 3.19 лучше работает на ноутбуках</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/30/libreboot-x200/" target="_blank">FSF рекомендует ещё один устаревший ноутбук</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/26/openstack/" target="_blank">Боль и страдания Openstack</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/21/librem/" target="_blank">Свободный ноутбук Librem 15</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/19/arch-linux-macbook/" target="_blank">Установка Arch Linux на MacBook Pro Retina 2014</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/16/steam-danger/" target="_blank">Клиент Steam удаляет все файлы под Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/15/intel-frequency/" target="_blank">Утилита для изменения тактовой частоты Intel GPU</a></li>
<li class="linkCls"><a href="https://xakep.ru/2015/01/14/orifs/" target="_blank">OriFS: распределённая P2P-файловая система</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/25/4-years-girl/" target="_blank">4-летняя девочка лидирует на выборах «человека года» в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/24/openssd/" target="_blank">Проект OpenSSD: свободная прошивка для SSD</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/23/erie-brain/" target="_blank">Первый дрон с автопилотом под APM Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/22/nx300-crypto/" target="_blank">Шифруем фотографии в камере</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/18/kernel-bugs/" target="_blank">Многочисленные уязвимости в ядре Linux под x86_64</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/15/tmsu/" target="_blank">TMSU: пометка файлов тегами</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/15/vramfs/" target="_blank">VRAMfs: файловая система в видеопамяти</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/10/fedora-21/" target="_blank">Состоялся выпуск трёх версий Fedora 21</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/12/08/linux-3-18/" target="_blank">Вышло ядро Linux 3.18</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/30/simple-terminal/" target="_blank">Терминал для X в голливудском стиле</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/27/imp/" target="_blank">Свободный ARM-компьютер под Ubuntu за $149</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/22/linux-video-redactors-review/" target="_blank">Обзор линуксовых видеоредакторов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/11/26/ubuntu-meizu-mx4/" target="_blank">Ubuntu-смартфон задерживается до следующего года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/27/firefox-os-rpi/" target="_blank">Firefox OS на Raspberry Pi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/20/ubuntu-10-years/" target="_blank">Ubuntu 10 лет. Воспоминания разработчика</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/11/axiom-beta/" target="_blank">Open source видеокамера Axiom Beta</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/08/open-lmi/" target="_blank">Open LMI</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/08/own-dropbox/" target="_blank">Собственный Dropbox на базе Seafile</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/06/linux-in-corp/" target="_blank">Развертывание различных дистрибутивов Linux в корпоративной среде</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/06/smartos/" target="_blank">Используем SmartOS для построения надежной и производительной инфраструктуры</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/02/paranoid-linuxoid/" target="_blank">Гайд по обеспечению безопасности Linux-системы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/10/06/linux-3-17/" target="_blank">Вышло ядро Linux 3.17</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/29/tails-1-1-2/" target="_blank">Вышел дистрибутив Tails 1.1.2</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/26/relativistic-hash-tables/" target="_blank">Релятивистские хэш-таблицы в ядре Linux 3.17</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/25/fedora-old-gpu/" target="_blank">Fedora избавилась от поддержки старых GPU</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/25/shellshock/" target="_blank">Уязвимость ShellShock опаснее, чем Heartbleed</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/24/cve-2014-6271/" target="_blank">CVE-2014-6271: удалённое исполнение кода через bash</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/22/sshrc/" target="_blank">Автоматическая конфигурация сессий SSH</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/11/past-and-future-unix-virt/" target="_blank">Прошлое, настоящее и будущее виртуализации в *nix-системах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/obustraivaem-minimalistichnoe-rabochee-okruzhenie/" target="_blank">Обустраиваем минималистичное рабочее окружение</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/unusual-linux-distributive/" target="_blank">Обзор необычных дистрибутивов Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/18/minix-3-3-0/" target="_blank">Вышла операционная система Minix 3.3.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/10/shout-irc/" target="_blank">Shout: свой личный веб-клиент IRC</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/09/05/freebsd-10-review/" target="_blank">Детальный обзор FreeBSD 10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/25/linux-distros-support-echelon/" target="_blank">Обзор Linux-дистрибутивов, которые наступают на пятки лидерам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/15/nix-failure-restore/" target="_blank">Восстановление *nix-систем после сбоя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/13/linux-interesting-facts/" target="_blank">Подборка интересных фактов о Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/31/so-slooow-open-source/" target="_blank">Пять поучительных историй о том, почему консерватизм в open source — это зло</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/08/21/torvalds-believe/" target="_blank">Торвальдс верит, что Linux завоюет десктопы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/24/kali-linux-1-0-8/" target="_blank">Опубликованы образы Kali Linux 1.0.8</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/22/docker-for-safe-browsing/" target="_blank">Используем Docker для безопасного веб-серфинга</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/20/cheap-hdmi-mediacenter/" target="_blank">Собираем полнофункциональный медиацентр за 100 долларов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/17/promising-foss-projects/" target="_blank">Обзор перспективных сетевых FOSS-проектов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/08/zfs-at-home/" target="_blank">Разбираемся с ZFS</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/05/11/input-out-linux-planning/" target="_blank">Сравниваем планировщики ввода/вывода ядра Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/03/15/62207/" target="_blank">Обзор балансировщиков нагрузки для *nix</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/07/21/mayhem/" target="_blank">Зловред Mayhem угрожает веб-серверам под *nix</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/21/62087/" target="_blank">Доля Linux в американском трафике почти удвоилась: теперь около 2%</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/17/62063/" target="_blank">VMM дорос до версии 1.0.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/14/62052/" target="_blank">Армия США возьмет на вооружение Linux-винтовки</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/04/61993/" target="_blank">Детальный тест WD My Cloud</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/02/06/62014/" target="_blank">Linux следует включить в школьную программу, считает Linux Federation</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/31/61978/" target="_blank">Вышел OpenSSH 6.5</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/28/61958/" target="_blank">Ищем способы перехвата данных в ядре Android</a></li>
<li class="linkCls"><a href="https://xakep.ru/2014/01/11/using-nftables/" target="_blank">Изучаем возможности nftables — нового пакетного фильтра Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/25/nas-servers-distributives/" target="_blank">Нас было семь</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/24/61803/" target="_blank">Этот безумный, безумный Open Source</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/12/02/61689/" target="_blank">Вскрываем крутой бэкдор под Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/28/61674/" target="_blank">Публичная порка пингвина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/18/space-in-nix-systems/" target="_blank">Восполняем пробелы в *nix-системах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/05/61540/" target="_blank">Там, за горизонтом</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/11/05/criu-manual/" target="_blank">Осваиваем систему заморозки процессов CRIU</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/31/main-linux-kernel-technology/" target="_blank">Обзор ключевых технологий ядра Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/31/enviroment-ubuntu-1210/" target="_blank">Создаем отказоустойчивую среду для экспериментов на основе Ubuntu 12.10</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/29/61509/" target="_blank">Новые горизонты</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/26/alternative-router-firmware/" target="_blank">Обзор альтернативных прошивок домашних роутеров</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/24/61481/" target="_blank">По тернистым тропам к заветной вершине</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/10/61403/" target="_blank">Наш ответ блогерам</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/04/net-safe-prog-config-net/" target="_blank">Разделяй и управляй!</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/10/01/61348/" target="_blank">Ананасовый рай</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/26/obzor-live-cd/" target="_blank">Обзор Live CD</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/09/06/61210/" target="_blank">Практическая паранойя</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/08/28/61155/" target="_blank">Колыбель облаков</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/08/27/61145/" target="_blank">Удаленный контроль 2.0</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/08/23/safe-among-perimetr/" target="_blank">Защита внутри периметра</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/05/09/60579/" target="_blank">Говорит и показывает Raspberry Pi</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/03/21/60309/" target="_blank">Виртуальная vs. «железная» АТС</a></li>
<li class="linkCls"><a href="https://xakep.ru/2013/01/11/unix-apps-limit-launch/" target="_blank">Обзор средств изолированного запуска приложений в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/18/59834/" target="_blank">Из грязи в NAS`ы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/12/extreme-battery-extension/" target="_blank">Экстремальные методы продления жизни ноутбука от батареи</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/12/12/dekstop-open-bsd/" target="_blank">Используем OpenBSD в качестве десктопа</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/21/linux-cloud-integration/" target="_blank">Интегрируем Linux и «облачные» сервисы</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/11/19/59656/" target="_blank">Open vSwitch: cоединяй и властвуй</a></li>
<li class="linkCls"><a href="https://xakep.ru/2012/10/29/hardcore-openssh-and-openssh/" target="_blank">Хардкорные возможности OpenSSL и OpenSSH, о которых ты не знал</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/16/58015/" target="_blank">10 наиболее важных Open Source проектов 2011</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/12/07/57595/" target="_blank">Чертовски хороший LAMP: Пошаговое руководство по установке стека (L)AMP на FreeBSD</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/11/02/57423/" target="_blank">Тараканьи бега: Обзор самых интересных багов в *nix’ах</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/10/06/57053/" target="_blank">Демоническая сила: Изучаем systemd, ulatencyd, relayd и fscd</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/26/56966/" target="_blank">Суперкомпьютер из видеокарты: задействуем возможности GPU для ускорения софта</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/09/06/56714/" target="_blank">SELinux: бронежилет для корпоративного пингвина</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/58089/" target="_blank">Огненный щит: Изучаем популярные надстройки для iptables</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/56239/" target="_blank">Бразильский танец с бубном: Настройка, оптимизация работы и обеспечение безопасности Samba-клиента</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/23/56238/" target="_blank">Записки криптонавта: Осваиваем защиту данных в BSD</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/15/56481/" target="_blank">Грани виртуальных миров: разбираемся с новыми и необычными технологиями виртуализации</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/25/55982/" target="_blank">Зоопарк на карантине: Запускаем небезопасный софт без вреда системе</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/25/55981/" target="_blank">Поднятая целина: Осваиваем и обустраиваем консоль</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/05/55792/" target="_blank">Максимальный минимум: Создаем гиковый десктоп из подручных материалов</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57587/" target="_blank">Кроем одежку: Самостоятельная сборка и оптимизация KDE4 и GNOME3</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/07/04/57589/" target="_blank">Энергия полураспада: Обзор самых интересных форков последнего времени</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/23/56050/" target="_blank">Диета для пингвина: чистим свежеустановленный Ubuntu от хлама</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/06/15/55953/" target="_blank">Веб-серфинг в шапке-невидимке: Liberte Linux для настоящего анонимуса</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/14/57054/" target="_blank">Пингвинов по весне считают: Обзор самых громких релизов начала года</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/04/55230/" target="_blank">Падение железного занавеса: Управляем оборудованием из Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/08/19/56536/" target="_blank">Генеральный директор Red Hat: &quot;Я не имею ни малейшего понятия, что дальше&quot;</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/05/04/55229/" target="_blank">Удобные кеды: Советы по приготовлению самого передового DE</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/28/55228/" target="_blank">Флагом по производительности. Соревнования по скоростному забегу: Linux Mint 9 vs Calculate Linux Desktop 10.9</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/04/27/55227/" target="_blank">Трудности переноса: Или хромая портабельность линуксовых приложений</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/03/30/54897/" target="_blank">Пингвин под колпаком: Аудит системных событий в Linux</a></li>
<li class="linkCls"><a href="https://xakep.ru/2011/03/30/54897/" target="_blank">Пингвин под колпаком: Аудит системных событий в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319210/" target="_blank">Производительность Bitrix Старт на Proxmox и Virtuozzo 7 & Virtuozzo Storage</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319176/" target="_blank">Дайджест важных Linux событий 2016 — юбилеи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/virtuozzo/blog/319112/" target="_blank">VZ7 vs VZ6: есть ли повод обновляться?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319072/" target="_blank">Настройка SPICE-консоли виртуальных машин в OpenStack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318952/" target="_blank">Особенности использования сертификатов от Let's Encrypt и способ настройки nginx в Debian и Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318982/" target="_blank">История одного бага (#1653967)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318694/" target="_blank">VPN за 60 секунд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/first/blog/318646/" target="_blank">Подборка полезных слайдов про *nix 2: Возвращение слайдов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318146/" target="_blank">Настройка сервера Quake Live — пошаговое руководство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318126/" target="_blank">Опыт работы со взломанным сервером</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/veeam/blog/317952/" target="_blank">Состоялся релиз Veeam Agent for Linux 1.0 (Free, Workstation, Server Edition)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317660/" target="_blank">PostgreSQL slave + btrfs и systemd = горячая тестовая база</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317548/" target="_blank">Wi-Fi на Linux станет быстрее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317354/" target="_blank">OpenWRT + OpenVPN: точечный обход блокировок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317230/" target="_blank">Hetzner, сэкономить адреса IPv4 для виртуальных машин XenServer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317220/" target="_blank">Как правильно настроить Wi-Fi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317090/" target="_blank">Asterisk, подмена Hangupcause</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316806/" target="_blank">htop и многое другое на пальцах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316414/" target="_blank">Grep все, что можно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316486/" target="_blank">Развертывание OpenSource Puppet 4 с несколькими Puppet masters. Часть III. Настройка puppet-db с помощью Puppet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277517/" target="_blank">Как я переносил рабочую систему Ubuntu MATE 14.04 на новый SSD-диск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276653/" target="_blank">Настройка аутентификации в OpenVPN через Active Directory в CentOS 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276845/" target="_blank">himawari8 wallpaper для linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276319/" target="_blank">Быстрая установка SSL сертификата от StartSSL в почтовом сервере iRedMail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249515/" target="_blank">ssh: Вытаскиваем для себя чужой порт из-за NAT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275751/" target="_blank">Centos 7.x USB Install Media (Добавляем Centos в Multiboot)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275645/" target="_blank">Systemd: пишем собственные .service и .target</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275551/" target="_blank">Сторожевой таймер для 4G-модема в CentOS 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274765/" target="_blank">Программный интернет шлюз для уже не маленькой компании (Shorewall, плюшки). Часть 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274677/" target="_blank">Программный интернет шлюз для уже не маленькой компании (Shorewall, OpenVPN, OSPF). Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129917/" target="_blank">Бета версия Redhat Enterprise Linux 6.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129903/" target="_blank">Решение проблемы размытых шрифтов в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129900/" target="_blank">Мультидоменность в Apache без лишних хлопот на локальном хосте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129880/" target="_blank">Kernel.org вернулся в онлайн</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129837/" target="_blank">Кодовым названием Ubuntu 12.04 будет Precise Pangolin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129788/" target="_blank">Онлайн тестирование для пользователей Linux систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129658/" target="_blank">Настройка рабочего стола в Calculate Linux 11.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129551/" target="_blank">Оптимизация Ubuntu (и прочих Linux-ов) под SSD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129533/" target="_blank">Ubuntu в техническом вузе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129497/" target="_blank">Шрифты Ubuntu Font Family 0.80, теперь с Ubuntu Mono и Ubuntu Condensed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129304/" target="_blank">Полезные приложения, игры и документация для современных DesktopLinux-систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129266/" target="_blank">Ubuntu открывает портал для разработчиков приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129069/" target="_blank">Продолжение истории с UEFI Secure Boot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129044/" target="_blank">Экспорт истории сообщений из Skype</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128976/" target="_blank">Сборочная среда для проекта Midnight Commander</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128770/" target="_blank">VRRP в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128599/" target="_blank">VPN-сервер в стиле how-to (pptpd+mysql+radius) на CentOS6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111305/" target="_blank">Приём и обработка SMS-сообщений на Linux-машине</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128527/" target="_blank">Re: Командная строка на службе фотографа-линуксоида</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128505/" target="_blank">Ubuntu EducationPack 11.04 — образование, наука и программирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124217/" target="_blank">Загрузка и установка Debian по сети для чайников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128493/" target="_blank">Командная строка на службе фотографа-линуксоида</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128458/" target="_blank">Вышел релиз Centos 5.7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128111/" target="_blank">Несколько подробностей о функции main</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128308/" target="_blank">Виджет «Бинарные часы» для Awesome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128276/" target="_blank">Вышел сентябрьский номер журнала UserAndLINUX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128095/" target="_blank">Перенос системы LINUX на другой винчестер с переразбивкой разделов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127996/" target="_blank">Создание виртуальных хостов в apache под Linux на Python</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128004/" target="_blank">Ubuntu LiveUSB + Черный экран</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127975/" target="_blank">Windows 8 UEFI 2.3.1 Secure Boot — изучайте спецификации покупаемого железа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127850/" target="_blank">Увеличение количества новых компьютеров с Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127761/" target="_blank">Загрузка скриншотов на Imgur в один клик</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127743/" target="_blank">Linux -&gt; github</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127693/" target="_blank">Guitar Pro 6 на Ubuntu 10.10 — решение проблем с установкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127690/" target="_blank">Монтирование LVM-based томов (LVM-in-LVM)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127588/" target="_blank">Парсер RSS на bash для Лостфильма: щадящий режим для RSS сервера, проверка скачанного</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127554/" target="_blank">День свободы ПО в Омске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127523/" target="_blank">Простейшее напоминание о пельменях на bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127405/" target="_blank">Удаленная поддержка компьютера на Linux OS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127383/" target="_blank">Simply Linux. Свежий выпуск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127184/" target="_blank">Конфигурирование iptables при помощи ferm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127142/" target="_blank">«Mate» — форк Gnome2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127133/" target="_blank">Поддержка мышки в Midnight Commander запущенного из под tmux/screen</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127056/" target="_blank">20 лет Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126996/" target="_blank">Краткая шпаргалка по tmux (менеджеру терминалов)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126944/" target="_blank">Debian Server для новичка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126849/" target="_blank">Кукушка на bash своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126707/" target="_blank">Проброс COM-портов из Linux в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126658/" target="_blank">Установка Ubuntu на реальный жёсткий диск через VirtualBox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123371/" target="_blank">В JSLinux теперь есть Интернет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126476/" target="_blank">Как заставить хлам приносить пользу?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126557/" target="_blank">Инфографика: Linux раньше и сейчас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126488/" target="_blank">Скрипт удобной работы с WebDAV в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126440/" target="_blank">Вышел Linux Mint 11 LXDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126436/" target="_blank">Проекту Debian 18 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126427/" target="_blank">Создание операционной системы на базе ядра linux. С нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126145/" target="_blank">Thunderbird будет почтовой программой по умолчанию в Ubuntu 11.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126090/" target="_blank">Аппаратное декодирование видео на AMD Radeon в Ubuntu (mplayer)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125950/" target="_blank">Поддержка Sandy Bridge в linux kernel 3.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125675/" target="_blank">DebConf11: итоги конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125488/" target="_blank">Будущее Активностей — сессии, переносимые между устройствами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125436/" target="_blank">Рабочее место врача на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125431/" target="_blank">Мир open-source в кармане</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125400/" target="_blank">Системы сейсмического мониторинга: обзор, установка, настройка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125367/" target="_blank">Зеркало сервера обновлений ESET на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125369/" target="_blank">Процесcы в операционной системе Linux (основные понятия)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125216/" target="_blank">Создаем систему видеонаблюдения с помощью motion</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125192/" target="_blank">Большая коллекция игр Ubuntu GamePack 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125174/" target="_blank">Ubuntu One увеличивает бесплатный объем хранилища и достигает отметки в миллион пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125017/" target="_blank">Алгоритм: Как оформить баг на ядро Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124839/" target="_blank">3G модем Novacom и Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121216/" target="_blank">Автоконфигурация сетевых интерфейсов в Debian GNU/Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124792/" target="_blank">Торент на Dingoo A320, или зачем оно надо?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124744/" target="_blank">DSL роутер D-link D2650u для не-DSL провайдера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124679/" target="_blank">Линус Торвальдс объявил о выпуске Linux kernel 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124606/" target="_blank">Хитрости и трюки при использовании Wine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124569/" target="_blank">Linux в подарок к своему двадцатилетию получил видеоролик от Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123768/" target="_blank">О специфике детского восприятия и особенностях психического развития консолью и игрухами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124252/" target="_blank">Toyota вступила в Linux Foundation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124202/" target="_blank">Основы работы с Wine для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124196/" target="_blank">Приглашаем на Debian Day!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124181/" target="_blank">64-битный Flash Player 11 под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124082/" target="_blank">Установка SMS Linux (Slackware) на eBox-2300SX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123925/" target="_blank">Релиз файлового менеджера Midnight Commander 4.8.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123872/" target="_blank">Установка openSUSE 11.3 с помощью чайника</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123771/" target="_blank">Состоялся «Долгожданный» релиз Centos 6.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123509/" target="_blank">Горячий летний номер UserAndLINUX №11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123343/" target="_blank">Конкурс русскоязычных статей Ubuntu 2011</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123266/" target="_blank">Обзор шины SPI и разработка драйвера ведомого SPI устройства для embedded Linux (Часть вторая, практическая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123151/" target="_blank">Calculate Linux 11.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123145/" target="_blank">Обзор шины SPI и разработка драйвера ведомого SPI устройства для embedded Linux (Часть первая, обзорная)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123078/" target="_blank">Вышел Voyage Linux 0.7.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122876/" target="_blank">Временное переключение WIFI в режим точки доступа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122859/" target="_blank">Массовое надписывание и загрузка изображений в Picasa Web Albums</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122835/" target="_blank">Прозрачное проксирование в I2P и TOR</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122714/" target="_blank">Обновление Debian 6.0: выпущен Debian 6.0.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122695/" target="_blank">Переход на LibreOffice</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122609/" target="_blank">Менеджер пакетов Synaptic будет удалён из стандартной поставки Ubuntu 11.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122571/" target="_blank">gnome-terminal Закрытие вкладки средней кнопкой мыши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122466/" target="_blank">Понравится ли твое видео Линусу?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274639/" target="_blank">Программный интернет шлюз для уже не маленькой компании (Shorewall, OpenVPN, OSPF). Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274633/" target="_blank">Охота на грызунов под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274539/" target="_blank">Настройка logrotate + доступ для сбора логов по SFTP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273547/" target="_blank">Тонкий клиент HP в качестве домашнего роутера и файл-сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273425/" target="_blank">Быстро поднятое не считается упавшим. Повышаем отказоустойчивость встраиваемых систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268827/" target="_blank">Как обойтись без WDS сервера, при установке Windows из WIM-образов по сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273255/" target="_blank">Добавление пакетов к автономному установщику Lubuntu Alternate ISO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107267/" target="_blank">Multihome IPv4 в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272733/" target="_blank">«Прозрачный» Squid с фильтрацией HTTPS ресурсов без подмены сертификатов (х86, х64 — универсальная инструкция)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272563/" target="_blank">Некоторые новые настройки в Linux Mint Release 17.3 LTS 04.12.2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122379/" target="_blank">shared hotspare для mdadm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122346/" target="_blank">Удалённая отладка .NET сборок на Nokia N900 в Visual Studio — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122313/" target="_blank">42-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122101/" target="_blank">Интервью с разработчиком TuxOnIce Найджелом Каннингемом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122031/" target="_blank">Интервью Марка Шаттлворта: в Ubuntu браузером по умолчанию станет Google Chrome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122020/" target="_blank">Пробелы — главный враг линуксоида</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120943/" target="_blank">Debian: Apt-Pinning на примере php5-fpm и nginx 1.0.4 (Debian way)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121915/" target="_blank">Релаксирующие текстовые редакторы для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121247/" target="_blank">Расширения в GNOME Shell (продолжение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120782/" target="_blank">Заставим клавишу Switch Display на ноутбуке работать по-своему!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121136/" target="_blank">Функции в bashrc. Ещё одна простая вещь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121138/" target="_blank">rtorrent+rutorrent+nginx+php-fpm. Подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120908/" target="_blank">SkypeTab. Вкладки для линуксового скайпа. Теперь без костылей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120682/" target="_blank">Расширения в GNOME Shell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120788/" target="_blank">UserAndLINUX — миниюбилей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120749/" target="_blank">Одна простая вещь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120698/" target="_blank">SkypeTab — вкладки для линуксового скайпа. Теперь под любые оконный менеджер и панель</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120576/" target="_blank">Три модели нетбуков от Asus с предустановленной Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120537/" target="_blank">Вышел Ubuntu 11.10 Oneiric Ocelot Alpha1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120212/" target="_blank">Поддержка гибридных графических карт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120222/" target="_blank">Linux 3.0 скоро будет с нами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120217/" target="_blank">Вопросы для интервью с Nigel Cunningham</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120198/" target="_blank">Учим bash-скрипты, пишем Sokoban</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120177/" target="_blank">Gnome 3 — конец близок?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120167/" target="_blank">Установка и настройка rtorrent+rutorrent+nginx+php-fpm в Arch Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120156/" target="_blank">Vogue-Tec News #2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120150/" target="_blank">Улучшаем GNOME 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119755/" target="_blank">Хочу эту красивую штуку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120052/" target="_blank">Получаем полноценный Linux и сопутствующие плюшки на Zyxel Keenetic без перепрошивки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120059/" target="_blank">Выпущен Linux Mint 11 «Katya»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119907/" target="_blank">Вышла новая версия Ajenti</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119888/" target="_blank">Fedora 15 доступна для скачивания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119664/" target="_blank">Unity customization</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119447/" target="_blank">Кто реальный покупатель Novell? Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119436/" target="_blank">Цветной man или как разукрасить вывод echo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119424/" target="_blank">Эмулятор компьютера с linux на JavaScript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119422/" target="_blank">Linux в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119286/" target="_blank">Решаем проблему родительского контроля в Ubuntu с помощью Dansguardian и Privoxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118961/" target="_blank">Простое решение проблем с Flash в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118951/" target="_blank">Вышел Linux Mint 11 «Katya» RC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118906/" target="_blank">С Ubuntu на Fedora — высаживаемся на чужой земле (хорошее, плохое и уродливое)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118945/" target="_blank">Если у вас не получается поставить MJPG-streamer на Ubuntu 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118926/" target="_blank">Ускорение ядра Linux с помощью графического процессора GPU</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118678/" target="_blank">Пишем расширение Firefox для интеграции с панелью Unity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118676/" target="_blank">Инструкция по настройке Ejabberd с транспортом J2J/ICQ(с корректной кодировкой) на Ubuntu Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118645/" target="_blank">Adobe Creative Suite для Linux не будет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118632/" target="_blank">Предложены новые приложения по умолчанию в Ubuntu 11.10 Oneiric Ocelot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118625/" target="_blank">Выключение монитора горячей клавишей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118614/" target="_blank">Полезные команды Unity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118541/" target="_blank">Понравилась ли вам Unity?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118472/" target="_blank">Интересная фича Grub2: загрузка из ISO-файла</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118355/" target="_blank">Пользуетесь Elementary OS (или другими производными Ubuntu)? Не обновляйтесь до Natty!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118340/" target="_blank">А почему на самом деле я пользуюсь линуксами?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118326/" target="_blank">Релиз Slackware 13.37</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118300/" target="_blank">Релиз Ubuntu 11.04 (Natty Narwhal)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118189/" target="_blank">Вышел майский номер журнала UserAndLINUX v11.05</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118185/" target="_blank">Почему?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118176/" target="_blank">Тест-драйв Ubuntu 11.04 доступен в облаке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118071/" target="_blank">Linux InstallFest 1-го мая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117916/" target="_blank">Дистрибутив Альт Линукс получил сертификат ФСТЭК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117834/" target="_blank">Оповещение при подключении к SSH</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117800/" target="_blank">Призыв подключиться к тестированию Ubuntu 11.04 Natty Narwhal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117620/" target="_blank">Linux + 2 ISP. И доступность внутреннего сервера через обоих провайдеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117537/" target="_blank">Как вернуть иконки в трей в 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117503/" target="_blank">Вышла Ubuntu 11.04 Natty Narwhal beta2 — последняя версия перед релизом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117353/" target="_blank">Скринсейвер Pong в режиме часов в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117283/" target="_blank">Пробуем Gnome 3 на Ubuntu 11.04 Natty Narwhal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117284/" target="_blank">Онлайн-тесты для определения уровня знаний Desktop Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117204/" target="_blank">Flash Player 10.2 + vdpau + 64-bit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117149/" target="_blank">MonoDevelop на Nokia N900. Where is your God now?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117133/" target="_blank">3D CAD из облака на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117131/" target="_blank">Официальный релиз CentOS 5.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117111/" target="_blank">Ubuntu 11.04 возвращается назад на классический GNOME по умолчанию вместо Unity?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117101/" target="_blank">Бэкдор в образе Ubuntu для Amazon EC2, проверьтесь!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117046/" target="_blank">20 лет Linux: краткая история</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117037/" target="_blank">Неофициальный «релиз» CentOS 5.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117028/" target="_blank">Обновляем BIOS на Eee PC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116907/" target="_blank">Основы Linux от основателя Gentoo. Часть 4 (1/4): Файловые системы, разделы и блочные устройства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116992/" target="_blank">Директор Linux Foundation: не нужно обижать Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116974/" target="_blank">Вышел Skype 2.2 beta для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116957/" target="_blank">Карта серверов Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116921/" target="_blank">Canonical больше не будет бесплатно рассылать диски с Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116919/" target="_blank">Большая коллекция игр для Ubuntu на DVD — Ubuntu GamePack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116798/" target="_blank">Пример удачного форка: UMPlayer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116788/" target="_blank">Domain search и Network Manager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116736/" target="_blank">До свидания, Gnome!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116677/" target="_blank">В Магнитогорске пройдёт конференция по открытым технологиям</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116641/" target="_blank">Релиз Elementary OS Jupiter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116638/" target="_blank">Canterbury</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116601/" target="_blank">Фикс падения производительности при копировании/закачке файлов в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116582/" target="_blank">Вышла Ubuntu 11.04 Beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116575/" target="_blank">Определите свое местоположение по WiFi сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116485/" target="_blank">Аккуратная настройка клавиатуры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116380/" target="_blank">Устанавливаем видеодрайвер для видеокарт семейства SIS M671/M672 под Ubuntu 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116360/" target="_blank">Прозрачное Socks5 проксирование приложений в linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116336/" target="_blank">Автоматическое удаление старых ядер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116329/" target="_blank">Синхронизация профилей между linux-системами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116323/" target="_blank">Новый номер журнала UserAndLINUX 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89480/" target="_blank">5 лет с Gentoo Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116253/" target="_blank">Центр приложений Ubuntu 11.04 предоставит возможность «тест-драйва» приложений, без их непосредственной установки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272475/" target="_blank">Простая система управления компьютерным классом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272279/" target="_blank">Заводим ramlog на дистрибутивах с systemd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272199/" target="_blank">Установка и нaстройка Puppet версии 3.8 на примере Centos 6.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271077/" target="_blank">Вопросы для нового интервью с Эдуардом Шишкиным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270877/" target="_blank">Samba и запрещенные символы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270801/" target="_blank">А был ли who на сервере?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simnetworks/blog/270611/" target="_blank">Настройка IPv6 в ОС Linux Debian v7.XX, Ubuntu v14.XX, CentOS v6.XX и FreeBSD v10.XX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270635/" target="_blank">Репликация LDAP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270521/" target="_blank">Docker 1.9 + Weave 1.2.1 bridge mode</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270497/" target="_blank">Оповещения Zabbix через sms используя GSM модем. Простая настройка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115451/" target="_blank">О том, как я заставлял Ubuntu работать 10 часов от батареи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116099/" target="_blank">Выбрано 17 новых обой для Ubuntu 11.04 и немного обновлена картинка рабочего стола по умолчанию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116063/" target="_blank">Скажем нет падению Adobe Flash в веб-браузерах на 64-битных платформах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115861/" target="_blank">41-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116021/" target="_blank">tinycmd — ввод нескольких символов вместо длинной команды в консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116020/" target="_blank">Аппаратная кроссплатформенность: есть ли выход?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115811/" target="_blank">Debian GNU/Linux 6.0.1 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115781/" target="_blank">DEX — проект повышения интенсивности сотрудничества между Debian и его производными дистрибутивами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115600/" target="_blank">Какой формат пакетов использует ваша основная ОС линукс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115555/" target="_blank">Доступен мартовский номер приложения к журналу UserAndLINUX — «Больше чем USER»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115531/" target="_blank">Сервер из образа: DHCP + TFTP + Initrd + OpenVZ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115536/" target="_blank">Простейшая читалка RSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115521/" target="_blank">Picapy: Десктопный файл-браузер по «Picasa Web» для Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115493/" target="_blank">HowTo: Cacti 0.8.7g + Plugin Architecture 2.9 + Spine 0.8.7g на CentOS 5.5 i386</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115427/" target="_blank">Макоподобные мультитач жесты на трэкпаде в линукс с Touchegg</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115365/" target="_blank">Чего вам не хватает для полного перехода с windows на linux?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115241/" target="_blank">Вышел Open SUSE 11.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115188/" target="_blank">Ubuntu отказывается от Netbook Edition</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115063/" target="_blank">Следующий после Natty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115051/" target="_blank">Debian или Ubuntu: кому помогать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114890/" target="_blank">Linux Mint 11 будет использовать GNOME 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114884/" target="_blank">Выпущена Ubuntu 11.04 Natty Narwhal Alpha 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103732/" target="_blank">Эффективная обработка фотографий в Gimp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114680/" target="_blank">Новый номер журнала UserAndLINUX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114656/" target="_blank">G'MIC для GIMP — отличный набор пресетов и эффектов, обзавелся своим PPA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114622/" target="_blank">Простая защита от двойного запуска заданий cron</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114346/" target="_blank">Настройка Archlinux на ASUS Eee 1201NL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114118/" target="_blank">Забавные возможности ImageMagick в помощь веб дизайнеру</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114086/" target="_blank">Выпущена Ubuntu 10.04.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114082/" target="_blank">TOP'ай сюда</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113875/" target="_blank">Лондонская биржа наконец-то запустила торги на Linux-платформе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113828/" target="_blank">UserAndLINUX – Приложение «Больше чем User!» v11.02</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113716/" target="_blank">Свободный игровой клуб — ответы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113684/" target="_blank">Готовы ли вы материально поддерживать полезные вам open source проекты?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113615/" target="_blank">Знакомьтесь — Linux From Scratch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113430/" target="_blank">Ubiquity RouterStation Pro: небольшой обзор и установка Debian GNU/Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113539/" target="_blank">Canonical запустила список компьютерных компонентов, совместимых с Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113479/" target="_blank">Свободный игровой клуб</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113476/" target="_blank">Для Ubuntu появился PPA GIMP Paint Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113387/" target="_blank">Хорошая новость для тех, кому нужен HPC, HA и просто SSI-кластер, наконец</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113350/" target="_blank">6 шагов загрузки Linux на пальцах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113330/" target="_blank">Йоханнесбургская фондовая биржа перейдёт на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113229/" target="_blank">Debian GNU 6.0 «Squeeze» вышел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113213/" target="_blank">Debian GNU/Linux 6.0 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113170/" target="_blank">Кириллическое начертание шрифта Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113143/" target="_blank">Вредоносное ПО для GNU/Linux и борьба с ним</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113123/" target="_blank">Выпущена Ubuntu 11.04 Natty Narwhal Alpha 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112990/" target="_blank">30-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112859/" target="_blank">TENQ P07 — первый планшетник на базе Ubuntu Netbook Remix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112846/" target="_blank">Журнал UserAndLINUX v11.02. Выпуск №6 (февраль 2011)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112838/" target="_blank">XFCE 4.8 на Ubuntu 10.04 и 10.10 через PPA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112836/" target="_blank">Bash: Отмечаем новые серии в Myshows.ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112797/" target="_blank">Краткое введение в терминалы и консоль</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112520/" target="_blank">Использование mcabber через ssh на удаленном сервере с уведомлениями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112624/" target="_blank">Full Circle Magazine Special Edition — The Perfect Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112534/" target="_blank">Один компьютер на двоих (и более) или multiseat на базе Ubuntu 10.04 LTS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112461/" target="_blank">Релиз ArchBang 2011.01 – Symbiosis</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112369/" target="_blank">Вышел Postfix 2.8.0 stable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112172/" target="_blank">Запущен сайт GNOME 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112081/" target="_blank">Vogue-Tec News #1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111862/" target="_blank">Создание m4b из mp3 аудиокниг для ipod</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111771/" target="_blank">Вышел новогодний номер журнала UserAndLinux — v11.01(5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111717/" target="_blank">Кладезь полезной информации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111620/" target="_blank">Тонкие клиенты (linux) из устаревших компьютеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111605/" target="_blank">Цветовая схема Xoria256 для Midnight Commander</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111601/" target="_blank">LibreOffice станет офисом по умолчанию в Ubuntu 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111503/" target="_blank">Установка Ubuntu Desktop на LVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111399/" target="_blank">Настройка PPPoE с шейпингом трафика для небольшой сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111390/" target="_blank">Вышла EDM 2010.2 One KDE4 DVD — альтернативная сборка от команды Edumandriva</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111324/" target="_blank">Использование, настройка и тестирование distcc и ccache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111266/" target="_blank">Перехват системных вызовов с помощью ptrace</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111217/" target="_blank">Собираем виртуалку с phpdaemon'ном на Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111204/" target="_blank">Использование HDAPS в ноутбуках ThinkPad под Linux когда это необходимо</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111149/" target="_blank">Восстановление сохраненного пароля pppoe сессии из маршрутизатора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111059/" target="_blank">Проблема трех раскладок в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111121/" target="_blank">PPA для LibreOffice</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111117/" target="_blank">Состоялся стабильный выпуск Midnight Commander 4.7.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111056/" target="_blank">Failover файрвол на iptables</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111045/" target="_blank">Загрузка c iso образов при помощи memdisk и grub4dos</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111036/" target="_blank">Linux: Ускоряем софтрейд и RAID6 в домашнем сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110989/" target="_blank">Ekoore ET10T таблетка с убунту на борту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110965/" target="_blank">40-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110905/" target="_blank">Как сделать офисный сканер сетевым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110634/" target="_blank">«Правильная» музыка. Или как навести порядок в своей MP3 коллекции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110819/" target="_blank">С новым Симпли! Simply Linux. Выпуск 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110771/" target="_blank">Блокировка нежелательного DNS трафика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110697/" target="_blank">Основы Linux от основателя Gentoo. Часть 3 (4/4): Настройка пользовательского окружения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110645/" target="_blank">Vogue-Tec News #0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110567/" target="_blank">Новые старые эффекты от Compiz — встречайте!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110547/" target="_blank">Политика управления частотой процессора «ondemand» и iowait в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104741/" target="_blank">Легко и непринуждённо: почта и Jabber для пользователей вашего сайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110513/" target="_blank">AirPlay — теперь и в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110444/" target="_blank">Создание зеркала репозитория Ubuntu с помощью apt-mirror</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110369/" target="_blank">Перехват системных вызовов в linux под x86-64</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110364/" target="_blank">Kno — планшет с операционной системой основанной на Ubuntu в двух вариантах с одинарным и двойным дисплеем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110313/" target="_blank">Teamviewer для Linux обновился до 6ой версии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110096/" target="_blank">Adobe Creative Suite for Linux — помогаем воплотить мечты в реальность!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110064/" target="_blank">Оно шевелится! Живые бэкапы Linux с помощью Remastersys</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110061/" target="_blank">Skype под Linux… Теперь со вкладками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110012/" target="_blank">Основы Linux от основателя Gentoo. Часть 3 (3/4): Управление аккаунтами в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269449/" target="_blank">Установка корректного времени на сайте и сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268807/" target="_blank">ZFS on CentOS: работа над ошибками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268711/" target="_blank">Установка CentOS на ZFS в UEFI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268729/" target="_blank">Установка PROXY сервера на DD-WRT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268583/" target="_blank">Supervisord и forever больше не нужны. Systemd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268331/" target="_blank">DHCP сервер на нескольких VLAN</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267851/" target="_blank">«Прозрачный» Squid с фильтрацией HTTPS ресурсов без подмены сертификатов (x86)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267797/" target="_blank">Консоль 21 века: mosh, tmux, fish</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267713/" target="_blank">Централизованное управление конфигурациями: Puppet + Foreman. Часть ІI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267703/" target="_blank">Собираем gnome-screenshot из исходников, чтобы изменить формат имени файла скриншота</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109392/" target="_blank">Основы Linux от основателя Gentoo. Часть 3 (2/4): Модель прав доступа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109767/" target="_blank">Методические материалы по информатике в Linux с грифом Министерства Образования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109394/" target="_blank">Флаги /proc/cpuinfo для архитектуры x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109386/" target="_blank">Как облегчить работу в терминале для новичков? Ответ — CLI Companion!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108690/" target="_blank">Роутинг и policy-routing в Linux при помощи iproute2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109296/" target="_blank">Podget + rsync + BashPod + GUI = KBashPod для подкастофилов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109271/" target="_blank">Выпущена Ubuntu 11.04 Natty Narwhal Alpha 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109193/" target="_blank">Работа со звуком на практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109187/" target="_blank">Synapse неплохая альтернатива для Alt+F2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109055/" target="_blank">Видео с демонстрацией работы компьютерного класса в режиме «тонких клиентов»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109052/" target="_blank">KBookOCR for Linux. Убийца FineReader-а для Linux на начальной стадии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108965/" target="_blank">Debian GNU/Linux 5.0.7 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108867/" target="_blank">39-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108835/" target="_blank">Локальная уязвимость в ядре линукс (и не только), DoS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108833/" target="_blank">Настройка Active/Passive PostgreSQL Cluster с использованием Pacemaker, Corosync, и DRBD (CentOS 5,5)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108764/" target="_blank">Основы Linux от основателя Gentoo. Часть 3 (1/4): Документация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108629/" target="_blank">Интервью с разработчиком reiser4 Эдуардом Шишкиным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108622/" target="_blank">Перехват вызовов функций в Linux или простейший файрвол своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108588/" target="_blank">Как безболезненно перевести образовательное учреждение на Linux и СПО?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108583/" target="_blank">Firefox 4.0 для линукса наконец-то получил новый интерфейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108429/" target="_blank">История одного перехода (не через Альпы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108454/" target="_blank">Prelink и Preload для ускорения запуска программ в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108289/" target="_blank">Быстрый поиск терминальных ошибок в Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108223/" target="_blank">Воспроизведение случайного файла? Одна строчка на bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104029/" target="_blank">Автоматическая преднастроенная установка Ubuntu: isolinux и preseed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108126/" target="_blank">Снятие и загрузка скриншотов в один клик с помощью плагина Compiz на habreffect.ru и Dropbox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107981/" target="_blank">Основы Linux от основателя Gentoo. Часть 2 (5/5): Модули ядра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108085/" target="_blank">Unity основанный на движке compiz'а доступен через PPA для Ubuntu 11.04 Natty narwhal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108075/" target="_blank">Доступна специальная сборка Ubuntu 10.04 для преподавателей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108030/" target="_blank">Вышел Linux Mint 10 “Julia”</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107936/" target="_blank">Вышел релиз Red Hat Enterprise Linux 6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107893/" target="_blank">Настраиваем принтер Canon LBP3010 в Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107816/" target="_blank">Adobe Creative Suite на Linux скоро будет реальностью?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107680/" target="_blank">Gimpbox — Однооконный Gimp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107674/" target="_blank">Простая установка и настройка BURG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107401/" target="_blank">Ответы на вопросы про Unity на десктопах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107377/" target="_blank">Установка Gentoo на VDS с виртуализацией Virtuozzo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107321/" target="_blank">Ручная сборка PostgreSQL для 1C 8.2, или легкие пути не для нас!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107302/" target="_blank">Поднятие хоста инкассации Ликард на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107281/" target="_blank">Регулировка яркости экрана в Meego 1.1 на Samsung 210</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107277/" target="_blank">Как я в сериалы в консоли смотрю / bash-скриптинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107225/" target="_blank">Banshee будет дефолтным медиаплеером в Ubuntu 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107005/" target="_blank">Быстрое уничтожение зашифрованного домашнего каталога без возможности восстановления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106820/" target="_blank">Тюнинг linux для игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106795/" target="_blank">Вышел DeaDBeeF 0.4.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106748/" target="_blank">Nano: И всё-таки его придётся выучить [3]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106706/" target="_blank">38-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106702/" target="_blank">Пишем свой драйвер под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106554/" target="_blank">Nano: И всё-таки его придётся выучить [2]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106471/" target="_blank">Nano: И всё-таки его придётся выучить [1]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106381/" target="_blank">Команда nice, или вежливые процессы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106192/" target="_blank">Видео обновленного интерфейса Unity с uTouch (Ubuntu Netbook Edition 10.10)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/106165/" target="_blank">Что стоит знать задумавшемуся о переходе на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105976/" target="_blank">Canonical против Microsoft? Cool Story, Bro</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105961/" target="_blank">Ubuntu против Windows: а воз и в 10.10 там</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105926/" target="_blank">Основы Linux от основателя Gentoo. Часть 2 (4/5): Обработка текста и перенаправления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105925/" target="_blank">Как я свою Ubuntu до Maverick обновлял</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105923/" target="_blank">Отчет о внедрении Linux в школах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105896/" target="_blank">Вышел Lubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105880/" target="_blank">Живые обои Galaxy Live для Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105869/" target="_blank">Вышла финальная версия Ubuntu 10.10 Maverick Meerkat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105851/" target="_blank">Grub Customizer програмулина для редактирования меню загрузчика GRUB2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105816/" target="_blank">Новый Calculate Linux 10.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105657/" target="_blank">Основы Linux от основателя Gentoo. Часть 2 (3/5): Управление процессами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105556/" target="_blank">Предзаказ дисков с Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105542/" target="_blank">Конференция по ПСПО для преподавателей школ на базе НИРО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105495/" target="_blank">Основы Linux от основателя Gentoo. Часть 2 (2/5): Назначения папок, поиск файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105455/" target="_blank">Линукс в школе № 96 Ростов-на-Дону</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105441/" target="_blank">Рабочий метод разрыва конкретного активного соединения из командной строки linux (drop/kill/cut/close ESTABLISHED connection)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105364/" target="_blank">Процесс запуска RabbitMQ на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105307/" target="_blank">Совсем обычная линуксовка в Екатеринбурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105291/" target="_blank">Ubuntu 10.10 RC доступен для скачивания!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105239/" target="_blank">Новый шрифт Ubuntu доступен всем в Maverick</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105104/" target="_blank">Полезные мелочи: перекодировка неправильной раскладки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105086/" target="_blank">Ubuntu — Фейс-контроль для входа в систему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105065/" target="_blank">Как создается Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104981/" target="_blank">Псевдографика в консоли Unix/Linux. Немного больше User Friendly чем вы могли себе позволить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104914/" target="_blank">Мобильный офис</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104898/" target="_blank">В Тюмени создаётся памятник Linux-у</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104876/" target="_blank">Откуда появляются скриншоты программ в Центре Приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104831/" target="_blank">Для Ubuntu создается интерфейс, реагирующий на движения пользователя по web-камере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104713/" target="_blank">Талисманы версий Ubuntu и OpenSUSE против талисманов Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104546/" target="_blank">cut и grep или awk?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104062/" target="_blank">svn + bash = пишем консольный svn браузер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104437/" target="_blank">Linux стал еще на год взрослее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104420/" target="_blank">Сохраняем видео из Flash Player 10.2 или unlink нам не помеха</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104368/" target="_blank">Полнофункциональный RDP клиент — FreeRDP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104342/" target="_blank">Высокодоступное отказоустойчивое web-приложение на Apache2 и MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104287/" target="_blank">Линус Торвальдс получил американское гражданство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104265/" target="_blank">В Ubuntu 10.10 DEB-пакеты будут по умолчанию открыватьcя в Центре Приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104245/" target="_blank">Web-сервер на Debian GNU/Linux для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104018/" target="_blank">В Ubuntu Maverick добавлены драйвера для Apple Magic Trackpad!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103936/" target="_blank">Изучаем английский с Anki</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103922/" target="_blank">openSUSE 11.3, решение проблемы с выключением USB клавиатур и мышей после обновления ядра до 2.6.34.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103883/" target="_blank">Репликация в PostgreSQL 8.x: упрощаем работу со Slony</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103819/" target="_blank">Вышел Linux Mint на базе Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103668/" target="_blank">Авторизация по SSH с использованием ключей в условиях шифрования домашней директории</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103606/" target="_blank">Backports-сервис становится официальным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267617/" target="_blank">Централизованное управление конфигурациями: Puppet + Foreman. Часть І</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267273/" target="_blank">Linux в устройстве на базе чипа Altera SoC FPGA: восстанавливаем утраченный функционал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267339/" target="_blank">Iproute2 policy-routing и балансировка трафика между аплинками — проблема сброса соединений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267157/" target="_blank">Настройка SCST Target на CentOS 7 с использованием FC QLogic адаптера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267103/" target="_blank">Корпоративный VPN c ACCEL-PPP+IPsec и авторизацией в Freeradius через AD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267029/" target="_blank">Делаем из HP LJ1000 сетевой принтер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266669/" target="_blank">Настройка Vim-like управления в GTK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266569/" target="_blank">Настройка CDMA модема ZTE AD3700 для Intertelecom в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266375/" target="_blank">Настраиваем сочетания клавиш в Linux наподобие Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266399/" target="_blank">Автоматическая сборка модулей ядра при помощи DKMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103584/" target="_blank">Русской редакции журнала Full Circle требуются переводчики!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103573/" target="_blank">Debian GNU/Linux 5.0.6 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103553/" target="_blank">Интервью с Дмитрием Агафоновым [ Ubuntu.ru ]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103533/" target="_blank">Объявлено название релиза Debian 7.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103453/" target="_blank">Настройка Yota в Ubuntu 10.04 для WiMAX карты Intel 5150</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103408/" target="_blank">Ubuntu 10.10 Beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103303/" target="_blank">Учебник по Ubuntu для новичков в День Знаний</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103237/" target="_blank">Winegame 0.2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103009/" target="_blank">Проблемы зоны .local в современных Linux дистрибутивах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102991/" target="_blank">Приведение внешнего вида Ubuntu к Windows 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102880/" target="_blank">Новые обои на Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102873/" target="_blank">В Ubuntu 10.10 появилась возможность покупки платных программ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102849/" target="_blank">Перенос Linux на другой компьютер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102842/" target="_blank">Школы города Дзержинск обеспечены классами с ПСПО к новому учебному году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102685/" target="_blank">10 лучших игр для Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102636/" target="_blank">37-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102616/" target="_blank">Вопросы для интервью с Эдуардом Шишкиным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102573/" target="_blank">Fedora 14 (Laughlin) Alpha released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102558/" target="_blank">В Ubuntu Tweak появилась возможность восстанавливать рабочий стол</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102450/" target="_blank">Foobnix — новый музыкальный плеер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102442/" target="_blank">Основы Linux от основателя Gentoo. Часть 2 (1/5): Регулярные выражения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102387/" target="_blank">Добавление и удаление на ходу SATA/SCSI устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102365/" target="_blank">Талисманы и обои версий Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102311/" target="_blank">Об апплете состояния батареи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94647/" target="_blank">Цветовое оформление консольного вывода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102259/" target="_blank">Вышло сервисное обновление Ubuntu 10.04.1 LTS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102095/" target="_blank">Обзор нового дистрибутива Calculate Scratch Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102091/" target="_blank">Winegame 0.1.92 aka 0.2.0 RC1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102032/" target="_blank">Настройка ИБП Ippon Backpower Pro для автоматического выключения и включения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102007/" target="_blank">GPT и WD Advanced format</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/102001/" target="_blank">Официальное название Ubuntu 11.04 — Natty Narwhal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101892/" target="_blank">Жесты несколькими пальцами в Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101890/" target="_blank">Debian Day 2010</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101698/" target="_blank">Что такое Calculate Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101711/" target="_blank">Запуск программ в Yakuake при старте KDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101679/" target="_blank">Обновлённый файловый менеджер Nautilus в Ubuntu 10.10 Maverick Meerkat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101628/" target="_blank">Неприступный почтовый сервер, или жизнь без спама</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101552/" target="_blank">Коммерческий софт со свободным прошлым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101478/" target="_blank">Создатели Ubuntu запустят счетчик установленных операционных систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101476/" target="_blank">Связка DHCP с DNS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101380/" target="_blank">Собственный Dynamic DNS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100860/" target="_blank">Слушаем prostopleer.com в Exaile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101170/" target="_blank">Вышла версия Ubuntu 10.10 Maverick Meerkat Alpha 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99803/" target="_blank">Корпоративный Jabber сервер: догнать и перегнать Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101085/" target="_blank">Тонкая настройка Synaptics Touchpad</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100932/" target="_blank">Соединяем филиалы в одну сеть. Снижаем затраты на интернет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101011/" target="_blank">Вышла новая версия комплекта для рабочих станций и домашних компьютеров — Ubuntu DesktopPack 10.04.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100976/" target="_blank">Школьный Linux для НИРО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100919/" target="_blank">Настройка роутинга для домашнего multihomed сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100898/" target="_blank">MeeGo «на колесах»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100514/" target="_blank">Убунту с яблочным вкусом: Ubuntu на Apple iMac</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/100230/" target="_blank">Вышел второй номер электронного журнала UserAndLINUX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99843/" target="_blank">Горячие клавиши в шелле</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99896/" target="_blank">Shutter — почти идеальная программа для создания скриншотов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99885/" target="_blank">Что такое Vala</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99849/" target="_blank">Школьный проект. Linux в школе № 72 — Ростов-на-Дону</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99827/" target="_blank">Основы Linux от основателя Gentoo. Часть 1 (4/4): Glob-подстановки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99765/" target="_blank">Glippy — простой clipboard менеджер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99746/" target="_blank">Простое объяснение символических и жестких ссылок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99683/" target="_blank">Вышел Linux Mint 9 LXDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99696/" target="_blank">Удивительное рядом, или команда ddate в Linux / Unix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99653/" target="_blank">Основы Linux от основателя Gentoo. Часть 1 (3/4): Ссылки, а также удаление файлов и директорий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99291/" target="_blank">Основы Linux от основателя Gentoo. Часть 1 (2/4): Управление файлами и директориями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99266/" target="_blank">Смотрим кино с субтитрами сразу на двух языках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99235/" target="_blank">Решение проблемы с вертикальной синхронизацией в видео на Ubuntu 10.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99163/" target="_blank">openSUSE 11.3 «Teal»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99187/" target="_blank">progress bar для консольных утилит</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/99041/" target="_blank">Основы Linux от основателя Gentoo. Часть 1 (1/4): BASH, основы навигации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98989/" target="_blank">Parted Magic 5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98943/" target="_blank">Простая и удобная проверка баланса на Мегафон-модеме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98936/" target="_blank">Откажись от Windows, почувствуй себя животным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98742/" target="_blank">Объединение нескольких разделов в один без потери информации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98620/" target="_blank">Canonical представит новый шрифт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98376/" target="_blank">36-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98527/" target="_blank">Битва за национальную операционную систему началась</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98519/" target="_blank">Завершилась конференция LVEE-2010</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98213/" target="_blank">Релиз Compiz 0.9.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98164/" target="_blank">Поддержка оборудования в Школьном Linux — опыт NNLUG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98144/" target="_blank">Gnome: ввод символов по коду</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97760/" target="_blank">Седьмая конференция разработчиков свободных программ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97722/" target="_blank">А почему бы иконкам .deb файлов не стать живописней?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97678/" target="_blank">Прекращена поддержка Fedora 11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97562/" target="_blank">Школьный проект. Linux в школе № 64 — Ростов-на-Дону</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97496/" target="_blank">5 тем оформления в стиле ретро</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97329/" target="_blank">Скачивание музыки с MySpace</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97316/" target="_blank">Создание качественных рипов Audio-CD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/97080/" target="_blank">Burg — меняем скучный grub (теперь без мороки с установкой)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96963/" target="_blank">Меню управления музыкой в Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96953/" target="_blank">OpenSUSE 11.3 RC1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96920/" target="_blank">Автоматическое копирование CD/DVD на HDD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96814/" target="_blank">Linux USB phone howto</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96818/" target="_blank">Cardapio — отличная замена главного меню Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96792/" target="_blank">Очередное внедрение Школьного Linux в Нижнем Новгороде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96697/" target="_blank">Conky с темой для Ubuntu и удобной настройкой — красивая панель индикаторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96682/" target="_blank">Real-time sunlight — планета в режиме реального времени на рабочем столе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96527/" target="_blank">Parted Magic 4.11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96418/" target="_blank">WineGame 0.1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96382/" target="_blank">Предложенные изменения для установщика Ubuntu 10.10 сделают установку быстрее, дружелюбнее и умнее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266287/" target="_blank">Добавление модулей ядра в дистрибутивах Fedora</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265971/" target="_blank">Небольшие полезности для связки GLPI+FusionInventory</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265065/" target="_blank">Проброс USB в виртуалку по сети средствами UsbRedir и QEMU</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265023/" target="_blank">Настройка D-Link DIR-320/NRU + 3G Ростелеком R41 (Sense R41)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264949/" target="_blank">SMS из Bash или учим Zabbix новым трюкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264853/" target="_blank">mhddfs — Монтирование нескольких разделов в одну директорию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264843/" target="_blank">Исследуем OpenWRT: чем отличаются образы uImage и sysupgrade</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263883/" target="_blank">Создаем универсальный Install Server для автоматической сетевой инсталляции Linux и Windows на основе Cobbler</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264515/" target="_blank">Обновление Linux в устройстве на базе чипа Altera SoC FPGA и получение доступа к расшаренным ресурсам Windows-сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264259/" target="_blank">Banana Pi: через U-Boot к Arch Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96398/" target="_blank">Ubuntu получит возможность восстанавливать приложения и настройки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96375/" target="_blank">Руководство по Ubuntu 10.04 «Lucid Lynx»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96314/" target="_blank">Обзор и установка почтового сервера iRedMail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96305/" target="_blank">Мысли вслух о протоколе X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95677/" target="_blank">Настройка nginx для работы с apache и tomcat серверами на примере Ubuntu 10.04 Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96132/" target="_blank">Обновления Google Reader в Ubuntu Messaging Menu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96108/" target="_blank">Qmmp: продолжение. Альтернативные интерфейсы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95898/" target="_blank">Домашний linux сервер своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/96016/" target="_blank">Fake'аем Chatroulette в Linux — гибче, чем в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95939/" target="_blank">Поднимаем FreshTel в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95934/" target="_blank">Выключаем монитор с клавиатуры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95931/" target="_blank">Встречайте, QMMP — музыкальный плеер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95893/" target="_blank">Аудио плеер под GNU/Linux — DeaDBeeF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95845/" target="_blank">Умная раскладка через ComposeKey</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95737/" target="_blank">Сетевой аудиосервер на основе pulseaudio в ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95587/" target="_blank">Школьный Проект в Ростове-на-Дону</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95569/" target="_blank">Представлена Ubuntu 10.10 Alpha 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95479/" target="_blank">Распознаем текст с помощью cuneiform</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95308/" target="_blank">WineGame 0.1 RC4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95411/" target="_blank">Выпущена Ubuntu 10.10 Alpha 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95210/" target="_blank">Скрипт автоматического преобразования m3u в m3u8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95186/" target="_blank">Реализована родная поддержка файловой системы ZFS для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/95102/" target="_blank">Не используйте kill -9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94745/" target="_blank">Эргономика в тёмное время суток</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94990/" target="_blank">Управление монитором по DDC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94952/" target="_blank">Включаем IPv6 на dd-wrt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94938/" target="_blank">Первые результаты Школьного Проекта в Нижнем Новгороде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94890/" target="_blank">Дистрибутив для детей — Qimo 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94764/" target="_blank">Сброс пароля, редактирование реестра Windows из Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94748/" target="_blank">Обзор MeeGo 1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94611/" target="_blank">Скратчпад с mcabber в awesome WM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94539/" target="_blank">Обзор диска Ubuntu 10.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94512/" target="_blank">Первый номер электронного журнала UserAndLINUX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94505/" target="_blank">Вышел дистрибутив Fedora 13 Goddard</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94444/" target="_blank">35-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94408/" target="_blank">Очистка windows от вирусов с помощью Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94382/" target="_blank">Novell могут распродать по частям</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94350/" target="_blank">named pipes в Unix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94295/" target="_blank">debman — фронтенд для apt с синтаксисом pacman'а</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94226/" target="_blank">Напоминание о событиях с HolidaySH</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94064/" target="_blank">Simply Linux Выпуск 2. Проект набирает обороты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/94032/" target="_blank">Ноутбук + 2 видеокарты — как жить?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93741/" target="_blank">Вышел Linux Mint 9 «Isadora»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93644/" target="_blank">Chrome в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93540/" target="_blank">Директор Mandriva выступил с опровержением слухов о продаже компании</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93337/" target="_blank">Самый удобный рабочий стол Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93199/" target="_blank">Новый интерфейс Ubuntu Netbook Edition</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93095/" target="_blank">Простая кастомизация Ubuntu LiveCD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93071/" target="_blank">Давайте заменим taskbar доком</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/93004/" target="_blank">Shutdown при завершении всех закачек Transmission</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92986/" target="_blank">Отключение дискретной видеокарты в Ubuntu на примере Acer Timeline 3810TG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92927/" target="_blank">Ubuntu 10.10 не будет использовать GNOME Shell по умолчанию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92885/" target="_blank">Ubuntu: маленькие удобства для веб-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92758/" target="_blank">Ставим Ubuntu 10.04 Lucid Lynx на iMac 21.5&quot;</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92697/" target="_blank">Вышел Lubuntu 10.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92668/" target="_blank">Оконные индикаторы в Убунту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92637/" target="_blank">Ubuntu 10.04 BUGFIX (Исправляем медленное развёртывание окна и разрешение plymouth после установки драйверов ATI Catalyst)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92634/" target="_blank">Установка Guitar Pro 6 на x64 Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92538/" target="_blank">Темы семинаров Linux InstallFest 10.04 в Нижнем Новгороде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92335/" target="_blank">Ubuntu «Lucid Lynx» 10.04 LTS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92272/" target="_blank">Screen Shot script</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92126/" target="_blank">Linux InstallFest 10.04 в Нижнем Новгороде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92123/" target="_blank">Мониторинг доступа к файлам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92110/" target="_blank">Цитаты из forismatic.com в консоли (или fortune своими руками)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92055/" target="_blank">Прячемся от Anti-P2P организаций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92047/" target="_blank">Умер Jan Mette</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92001/" target="_blank">DIY SSL-certificate monitoring script для ленивых</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91952/" target="_blank">WineGame 0.0.1 RC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91661/" target="_blank">Альт Линукс 5.0 Ковчег. Нужно ли что-то еще?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91630/" target="_blank">34-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91422/" target="_blank">Качаем торренты автоматически с помощью FlexGet+Deluge</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91350/" target="_blank">Музыка из Vkontakte в Exaile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91351/" target="_blank">Прошу любить и жаловать, TeamViewer теперь и под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91127/" target="_blank">Ubuntu в образовательном учреждении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/91073/" target="_blank">Slackware. Утилита Src2pkg или как не сделать из слаки свалку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90753/" target="_blank">Форум Открытых Технологий II в Екатеринбурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90713/" target="_blank">Guitar Pro 6 для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90630/" target="_blank">установка fglrx в Gentoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90591/" target="_blank">MOPSLinux больше не будет?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90455/" target="_blank">Выпущена Ubuntu 10.04 Beta 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90416/" target="_blank">Синхронизация контактов телефонов с Ubuntu One</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90397/" target="_blank">Ubuntu: 12 млн пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90394/" target="_blank">Вышел Calculate Linux 10.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90309/" target="_blank">33-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90326/" target="_blank">Правильная организация файлов или наше спасение в наших руках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/90046/" target="_blank">Мелкие радости lynx'а и linux'а — качаем файлы и правим</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89819/" target="_blank">Банк скриптов для Festival</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89789/" target="_blank">Шаттлворт назвал имя талисмана Ubuntu 10.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89617/" target="_blank">Клонирование системного диска штатными средствами Linux за 30 секунд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83120/" target="_blank">svnconfbackup: скрипт для резервного копирования конфигурационных файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89499/" target="_blank">Инструкция по регистрации «Опытных Зон СПО» в Школах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89449/" target="_blank">В бета-версию Red Hat Enterprise Virtualization 2.2 включена поддержка виртуальных настольных систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89434/" target="_blank">Небольшой обзор Ubuntu Lucid Lynx beta 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89420/" target="_blank">Настройка Wifi AP на примере Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89384/" target="_blank">Хакер Джордж Хотц извинился перед Linux-сообществом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89356/" target="_blank">29-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264025/" target="_blank">Прошиваем роутер Upvel UR-313N4G на OpenWRT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262581/" target="_blank">Настройка файлового сервера Samba в корпоративной сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262499/" target="_blank">Быстрая настройка резервного копирования под Linux и не только (UrBackup)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261667/" target="_blank">Перенос Android на HDD в Mele A100 (и похожих, Allwinner A10)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261591/" target="_blank">Конференция LVEE 2015. Итоги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261115/" target="_blank">Портирование OpenWRT на новое устройство на примере ASUS DSL N12U</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260631/" target="_blank">Прокачиваем тонкий клиент HP t5325</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260527/" target="_blank">Kolab Groupware (Часть 2 — Установка)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259479/" target="_blank">Настройка OpenSWAN IPsec PSK с использованием NAT Traversal (NAT-T)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259283/" target="_blank">Разбираемся с UEFI и GPT: установка Windows и Kubuntu на один диск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89295/" target="_blank">Концепт нового универсального элемента управления Убунту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89274/" target="_blank">IBM и Canonical готовят Linux-нетбуки для Африки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89187/" target="_blank">AVG выпустила Linux LiveCD для восстановления Windows-системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89183/" target="_blank">Ubuntu One Music Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89128/" target="_blank">Red Hat сообщила о рекордной прибыли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89023/" target="_blank">Неофициальное русскоязычное сообщество openSUSE. Два года в онлайне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88865/" target="_blank">WineGame — программа для подготовки Wine и установки в него приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88839/" target="_blank">Windows 7 будет разослана во все школы бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88737/" target="_blank">Почему гику стоит переходить на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88650/" target="_blank">EiskaltDC++. Первый релиз под номером 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88293/" target="_blank">Свой сервер мониторинга с nagios и cacti</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88281/" target="_blank">Настройка Wifi в Linux при помощи Adhoc на примере Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88193/" target="_blank">Учим ПК разговаривать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/88131/" target="_blank">Ubuntu 9.10 и его жизнь на моем десктопе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87738/" target="_blank">А причина, по которой кнопки в заголовке окна в Ubuntu 10.04 слева, в том, что…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87688/" target="_blank">Слушаем музыку из Vkontakte через Амарок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87660/" target="_blank">Вышел новый комплект для школ Альт Линукс 5.0 Школьный</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87648/" target="_blank">Возвращаем привычный вид окон в Ubuntu 10.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87477/" target="_blank">Установка linux на древний ноутбук</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87471/" target="_blank">Улучшаем notify-send. Добавление нового сообщения в предыдущее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87435/" target="_blank">Настройка резервного копирования Linux-сервера за 5 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87421/" target="_blank">HOW-TO pptpd+freeradius2+mysql+abills 0.50b для малого офиса или мелкого провайдера на Ubuntu 9.10/10.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87408/" target="_blank">Горячие клавиши ctrl+shift+[key] и переключение языков по ctrl+shift (решено)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87368/" target="_blank">Решаем проблемы с кодировкой в mp3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87316/" target="_blank">Простое управление Music Player Daemon на Панели Gnome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/87161/" target="_blank">Линукс для простых людей глазами простого человека</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86844/" target="_blank">Vuurmuur — боевые коты на страже вашей сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86753/" target="_blank">Устанавливаем и настраиваем cGit на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86536/" target="_blank">Краткий обзор Lotus Symphony 3 beta 2 под Линукс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86446/" target="_blank">PDF-Shuffler: Жонглируем PDF файлами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86437/" target="_blank">UbuntuTV: Простейший док / панель запуска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86288/" target="_blank">Свежий глоток воздуха для Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/86230/" target="_blank">Изменение библиотеки libdc1394 для поддержки нужной камеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85978/" target="_blank">Первое впечатление от SoftMaker Office 2010 beta для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85713/" target="_blank">Правильная загрузка ядра linux с EFI на Macbook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85632/" target="_blank">UbuntuTV: График выхода Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85395/" target="_blank">UbuntuTV: Ждём Lucid!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85374/" target="_blank">DIY SSH/SUDO Monitoring script</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85142/" target="_blank">Ureadahead и самосборное ядро</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85084/" target="_blank">Монтируем FTP ресурс как локальную FS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/85033/" target="_blank">Быстрый tile окон с помощью Compiz</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84968/" target="_blank">Конфиг exim.conf для DirectAdmin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84894/" target="_blank">Высший Арбитражный Суд Российской Федерации демонстрирует неожиданное разложение нравственного чувства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84815/" target="_blank">Скрипт для работы с виртуальными хостами apache2 на локале</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84673/" target="_blank">Wubi — восстановление загрузки после обновления ядра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84564/" target="_blank">Изменяем диалоги открытия/сохранения файлов в Opera и Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84562/" target="_blank">32-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84300/" target="_blank">Maemo + Moblin = MeeGo. Чтой-то будет?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/84288/" target="_blank">Рабочий компьютер Ричарда Столлмана</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83511/" target="_blank">Google Docs вместо OpenOffice в Ubuntu Netbook Edition</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83503/" target="_blank">Kernel check. Освежаем ядро по всем правилам без лишних хлопот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83451/" target="_blank">Авторизация по флешке в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83430/" target="_blank">Печать из Vista на сетевом Linux-принтере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83376/" target="_blank">Xsplash — делаем тему для себя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83367/" target="_blank">FlexGet или Бекапим инетернет автоматически</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83324/" target="_blank">Использование альтернативных компиляторов в Gentoo на примере Intel Compiler Suite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83223/" target="_blank">Игры с xkbcomp — настраиваем асимметричное переключение раскладок клавиатуры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83202/" target="_blank">Блокирование DNS DDoS при помощи пакета fail2ban</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83152/" target="_blank">Миграция с Ext3 на Ext4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80235/" target="_blank">А ты сделал бэкап?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/83011/" target="_blank">Установка фоновой картинки на загрузочное меню Ubuntu 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82933/" target="_blank">Ограничение доступа в интернет для приложений в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82661/" target="_blank">Создание собственной темы usplash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82885/" target="_blank">Один фаервол для IPv4 и IPv6 (iptables и ip6tables)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82703/" target="_blank">Закачка файлов с depositfiles.com из консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82756/" target="_blank">Удобное использование сканера HP в локальной сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82537/" target="_blank">Bash's dead, baby*. Viva zsh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82643/" target="_blank">Debian GNU/Linux 5.0.4 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82600/" target="_blank">Сборка и установка ядра под Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82509/" target="_blank">Описание процесса переноса Ubuntu 9.10 на другой винчестер (без использования Ghost, Acronis True Image etc...)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82402/" target="_blank">Тюнинг консольного клиента MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82394/" target="_blank">Скрипт для обработки фотографий: unix-way среди нас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82389/" target="_blank">Поделись консольным выводом своим и он не раз к тебе ещё вернётся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82278/" target="_blank">Не можешь найти то, что нужно? Сделай сам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/82177/" target="_blank">В Lucid Lynx будет изменена дефолтная поисковая система Mozilla Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81894/" target="_blank">Визуальная интеграция Firefox в KDE 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81889/" target="_blank">Linux, безопасность и все такое… (вдогонку)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81730/" target="_blank">Восполняем прорехи в документации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81724/" target="_blank">Linux, безопасность, подумаем о будущем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81715/" target="_blank">Изменение UID&GID пользователя и его файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81701/" target="_blank">Linux Mint: продолжаем разговор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81638/" target="_blank">Организация SSH Layer 3 туннеля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81628/" target="_blank">TLA Toolbox — Microsoft Research выпускает софт для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81607/" target="_blank">SSH-туннели — пробрасываем порт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81504/" target="_blank">Linux I/O Scheduler. Выбираем оптимальный</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81473/" target="_blank">Поддержка Debian Etch будет прекращена 15 февраля 2010</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81263/" target="_blank">Linux Mint: первые впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81069/" target="_blank">31-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80993/" target="_blank">Ubuntu User Day</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80958/" target="_blank">Linux вместо Windows. Стоит ли игра свеч?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80914/" target="_blank">Таблетка от пингвиньего жара своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80693/" target="_blank">Вышла Ubuntu Tweak 0.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80658/" target="_blank">Настройка разрешения на внешнием мониторе (openbox)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80366/" target="_blank">7&quot; нетбук за $99 от Cherrypal</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80303/" target="_blank">А что можно делать в Linux после его настройки?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80297/" target="_blank">Открыт официальный русскоязычный форум openSUSE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80284/" target="_blank">FireHOL — файрволл для невежд за пять минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80271/" target="_blank">Shorewall: файрволл для всех</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80258/" target="_blank">Ubuntu Server на домашнем компьютере. Раздадим интернет, скачаем torrent</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259169/" target="_blank">Способ заставить Iptables писать в свой лог и не дублировать в системный</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258407/" target="_blank">Минимальный почтовый сервер на основе Postfix и Dovecot. Часть 2: Postfix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258279/" target="_blank">Минимальный почтовый сервер на основе Postfix и Dovecot. Часть 1: Dovecot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258377/" target="_blank">Трансляция видео с Raspberry Pi по 3G тремя способами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256769/" target="_blank">Первая брачная ночь с Ardour 4.0 + обзор новых lv2-плагинов Calf 0.0.60</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258199/" target="_blank">ntfsclone — создаст образ так, как другим не под силу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258037/" target="_blank">Проблемы установки CentOS 7 с flash USB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257445/" target="_blank">thd или triggerhappy global hotkey daemon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257269/" target="_blank">Изменение схемы разбивки диска на арендуемом VPS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257197/" target="_blank">Что делать, если Google authenticator всегда выдает неправильные коды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80245/" target="_blank">CEO Red Hat о кризисе, виртуализации и Балмере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80224/" target="_blank">Создаём медиа-пульт из телефона для Linux'a</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/80091/" target="_blank">Ввод произвольных символов при помощи Compose Key: настройка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79977/" target="_blank">Обзор ОС МСВС 3.0 r14 от 07.2009 в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79921/" target="_blank">Печатаем книги-брошюры в *nix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79665/" target="_blank">Документация по Ubuntu и все-все-все</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79589/" target="_blank">Борьба Microsoft с пиратством в Китае</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79489/" target="_blank">Линус, с 40-летием!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79317/" target="_blank">В линукс появилась поддержка мультитач, пока не официально</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79225/" target="_blank">Nginx + PHP-FPM против Apache2 Prefork + mod_php</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79138/" target="_blank">Хотите познакомиться с тайловыми оконными менеджерами? Попробуйте PyTyle!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79107/" target="_blank">Настраиваем Debian/Ubuntu как Mac хранилище</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/79104/" target="_blank">Adobe flash player VS кодировка cp1251</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78850/" target="_blank">Обзор текстовых вeб браузеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78677/" target="_blank">Потоковое видео средствами ffserver & ffmpeg</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78609/" target="_blank">Марк Шатлворт покидает пост CEO Canonical</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78487/" target="_blank">Перенос Gentoo на LVM2 раздел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78501/" target="_blank">Skype и стандартные всплывающие сообщения в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78304/" target="_blank">Скриптинг на bash — это очень просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78257/" target="_blank">Скриптинг на bash — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78094/" target="_blank">Как собрать бинарный deb пакет: подробное HowTo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78086/" target="_blank">Debian-пакеты с человеческим лицом на примере Zabbix 1.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/78049/" target="_blank">Debian пакет с собственными скриптами: «Сделай сам»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77954/" target="_blank">Выход Ubuntu 10.04 Alpha 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77838/" target="_blank">В каталоге GNOME-Look зафиксировано наличие вредоносного ПО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77517/" target="_blank">Reconstructor, свой LiveCD убунту за полчаса без плясок с бубном. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77418/" target="_blank">Linux Mint 8 x64 RC1 released!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77385/" target="_blank">WimaxYota для 2.6.31-14-generic (netbook Remix ubuntu 9.10, intel 5150)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77331/" target="_blank">Ubuntu Customization Kit, свой LiveCD убунту за полчаса без плясок с бубном</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77271/" target="_blank">Прикладная некромантия в линукс или возвращаем из небытия удаленные файлы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77167/" target="_blank">28-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77023/" target="_blank">Подсветка синтаксиса в less</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77005/" target="_blank">Оптимизация apt-get. Повышаем скорость скачивания пакетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76867/" target="_blank">Погода gismeteo по sms (bash)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76706/" target="_blank">Linux Mint 8 “Helena” released!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76460/" target="_blank">Ubuntu 9.10 Flash(x64), ZendStudio7 — решение проблемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76454/" target="_blank">Быстрый Flash в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76358/" target="_blank">Улучшаем юзабилити Krusader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76343/" target="_blank">Подключение к удаленному компьютеру по VNC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/76003/" target="_blank">Debian объявляет об официальной поддержке DebSrc3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75995/" target="_blank">Линусу — Нобеля!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75982/" target="_blank">Концепт новой темы оформления «Ubuntu Sun»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75869/" target="_blank">Linux в Екатеринбурге: кино для своих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75745/" target="_blank">Дружим тв-тюнер Avermedia Avertv 507 с Ubuntu 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75796/" target="_blank">GIMP будет удален из Ubuntu 10.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75299/" target="_blank">3 дня до релиза Fedora 12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75291/" target="_blank">Ubuntu 9.10 и болезнь «голубого экрана»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75144/" target="_blank">Linux Mint 8 “Helena” RC1 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75127/" target="_blank">GPRS/EDGE/3G-интернет при помощи Nokia E-71 и Bluetooth в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74925/" target="_blank">openSUSE 11.2 вышла в свет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/75051/" target="_blank">Вышел первый релиз Simply Linux — нового дистрибутива для обычных людей :)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74988/" target="_blank">Создание загрузочной USB Flash с Windows 7 из-под Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74893/" target="_blank">В Debian GNU/Linux теперь лицензионно чистое ядро</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74880/" target="_blank">Как я завёл дополнительные клавиши на ноутбуке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74739/" target="_blank">Как добавить Fixed в konsole</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74671/" target="_blank">Ubuntu 9.10 и catalyst: исправляем медленное развёртывание окна</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74588/" target="_blank">Исправляем проблему DSL-соединения через NetworkManager в Ubuntu 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74544/" target="_blank">Управляем Rhythmbox'ом по ssh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74543/" target="_blank">Проблемы с сетью в Ubuntu 9.10 Karmic Koala</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74508/" target="_blank">Упорядочиваем диски скриптом весом меньше килобайта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74506/" target="_blank">aptitude vs apt. 5 причин, почему я использую aptitude</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74429/" target="_blank">О добавлении репозиториев в Ubuntu 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74413/" target="_blank">Пишем дополнение к Gnome-deskbar-applet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74388/" target="_blank">mtp — не все так плохо</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74385/" target="_blank">Установка SVN практически на любой хостинг (static svn)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74355/" target="_blank">GMate — набор полезных расширений для gedit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74351/" target="_blank">Вышел Moblin 2.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74310/" target="_blank">PuTTY: Как быстро изменить цветовую схему в существующих сессиях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74295/" target="_blank">27-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74284/" target="_blank">В ядре Linux найдена серьезная уязвимость</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74256/" target="_blank">Ubuntu 9.10 — bcm43xx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74251/" target="_blank">Релиз Mandriva 2010</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74227/" target="_blank">ClearType-сглаживание в Linux, или шрифты как в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74199/" target="_blank">А давайте подружимся с SSH</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74087/" target="_blank">Делаем Pidgin красивым как Adium</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74101/" target="_blank">Ubuntu Moblin Remix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/74035/" target="_blank">Cкорость загрузки: Windows 7 vs. Vista vs. Ubuntu 9.04 vs. Ubuntu 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73881/" target="_blank">Как Линуксу завоевать сердца пользователей?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73744/" target="_blank">Релиз Ubuntu 9.10 «Karmic Koala»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73685/" target="_blank">Экскурс в Ubuntu 9.10 «Karmic Koala»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73579/" target="_blank">Новый дистрибутив Leeenux для eee PC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73514/" target="_blank">Karmic Release Party в городе-герое Минске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73257/" target="_blank">Шлюз+шейпер для домашней сети на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73129/" target="_blank">Как защитить сервер от посетителей из нежелаемых стран</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73055/" target="_blank">15 советов по Ubuntu для опытных пользователей Linux (перевод)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/73025/" target="_blank">28 октября: Ubuntu Install Party в Санкт-Петербурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72776/" target="_blank">Создание live-usb для бэкапа/восстановления системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72754/" target="_blank">Резервное копирование на Аmazon S3 для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72714/" target="_blank">Правильно и удобно перекодируем mp3-теги в UTF-8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72676/" target="_blank">Использование Vim для редактирования простого текста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72666/" target="_blank">Собираем GIMP-2.7 из GIT своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72657/" target="_blank">Karmic Release Party Минск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72633/" target="_blank">deb-пакет на коленке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72609/" target="_blank">Патчим всё, что ни попадя или Open source в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72491/" target="_blank">Большой брат в Linux или видеонаблюдение своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72325/" target="_blank">Webmin — система на кончиках пальцев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72299/" target="_blank">Шустрая гляделка для Nautilus'а</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72238/" target="_blank">Пожизненный e-mail на linux.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72168/" target="_blank">Сетевое вещание — работаем с кодировками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72093/" target="_blank">Трекер и неразрешённый torrent-клиент Flush</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256617/" target="_blank">Состоялся релиз Debian Jessie 8.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256485/" target="_blank">Как мы организовали мини-провайдер в поселке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256305/" target="_blank">Как синхронизировать KOrganizer и Exchange Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256063/" target="_blank">Переводим с помощью Яндекс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255539/" target="_blank">Релиз elementary OS «Freya»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254415/" target="_blank">Стань повелителем загрузки Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252415/" target="_blank">LVS + OpenVZ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254233/" target="_blank">Система централизованного управления авторизацией пользователей на FreeIPA в Docker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253573/" target="_blank">Разбираемся с загрузкой ArchLinux по сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253260/" target="_blank">Установка загрузчика grub4dos на флешку из linux-консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/72054/" target="_blank">Linux (или компьютер) совсем для всех</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71904/" target="_blank">Коммерческая поддержка RedHat — ответ 6 лет спустя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71903/" target="_blank">Squeeze выйдет в редакции GNU/kFreeBSD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71832/" target="_blank">Малтитач в Убунте 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71381/" target="_blank">moc — консольный двухпанельный клиент-серверный проигрыватель музыки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71366/" target="_blank">Анатомия Linux тролля с благими намерениями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71353/" target="_blank">64разрядные грабли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71342/" target="_blank">Сountdown-счетчики Ubuntu 9.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71291/" target="_blank">Вышел Midnight Commander 4.7.0-pre3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71173/" target="_blank">openSUSE 11.2 Milestone 8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/71020/" target="_blank">Load average</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70765/" target="_blank">Внедрение Свободного ПО в школах России. Итоги тендера НП-12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70761/" target="_blank">Full Circle Magazine #26 (RUS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70512/" target="_blank">Ubuntu, KVM и proxy_arp — как обмануть злого провайдера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70504/" target="_blank">Встречаем Gnome 2.28</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70349/" target="_blank">Эмуляция старых (и не только) консолей в GNU/Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70058/" target="_blank">Полноценный доступ ко всем Linux-файловым системам в Windows 2000/XP/Vista/7 с помощью coLinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/70210/" target="_blank">Java с Opera 10 на Gentoo amd64</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69925/" target="_blank">18 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69615/" target="_blank">Ubuntu 9.04 vs. фискальный регистратор (кассовый аппарат)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69317/" target="_blank">Налоговая отчетность через интернет. Как платить налоги без Windows?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/69111/" target="_blank">Бойкот железу без поддержки в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68998/" target="_blank">Выходим в DOS, в нормальный, чистый DOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68946/" target="_blank">Brain Fuck Scheduler — ставим за 5 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68883/" target="_blank">Простой способ познакомится с Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68852/" target="_blank">Debian GNU/Linux 5.0.3 released</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68668/" target="_blank">zenity + wget = GUI wget</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68562/" target="_blank">Lubuntu — новый дистрибутив от Canonical</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68533/" target="_blank">Я использую Brain Fuck Scheduler!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68532/" target="_blank">Puppet, система управления конфигурациями. Часть II</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68489/" target="_blank">Mac OS X в эмуляторе QEMU под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68294/" target="_blank">Коммунити-сборки Mandriva Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68130/" target="_blank">Набор драйверов для гостевых Windows под KVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/68068/" target="_blank">Лечим треск при проигровании звуков в Pidgin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67746/" target="_blank">wrap — shell скрипт для уведомления о завершении команды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67733/" target="_blank">Xara LX — графический редактор для linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67717/" target="_blank">Точка доступа на основе wi-fi карточки D-link DWA-520 (ath5k)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67558/" target="_blank">UUID и /dev/disk/by-id спешат на помощь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67471/" target="_blank">Puppet, система управления конфигурациями. Часть I</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67421/" target="_blank">ADSL модем теряет коннект до перезагрузки? Не проблема!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67417/" target="_blank">Видео с Linux конференции LVEE2009</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67393/" target="_blank">Новый инструмент netprofile в Mandriva 2010.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67348/" target="_blank">Над чем работает компания Mandriva</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67283/" target="_blank">LVM — это просто!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67270/" target="_blank">Установка Linux из iso-образа под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67238/" target="_blank">VPN-мост в локальную сеть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67215/" target="_blank">Легкий Linux дистрибутив для кофейников из Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67209/" target="_blank">OpenVPN: создание полноценного openVPN gateway</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67192/" target="_blank">Установка Ubuntu Linux с винчестера. Скрипт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67190/" target="_blank">Debian Day 2009</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/67063/" target="_blank">Linux-версия клиента Quake Live</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66930/" target="_blank">Умная ретрансляция [wget &gt; fifo &gt; ices0 &gt; icecast]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66879/" target="_blank">Подключение к Yota из Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66903/" target="_blank">Распараллеливание задач в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66551/" target="_blank">Nagios: уведомление через SMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66569/" target="_blank">Inotify или автоматизация рутинных операций с помощью incron</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66525/" target="_blank">Sokso: сам себе last.fm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66278/" target="_blank">Поддерживаемый функционал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66020/" target="_blank">Что такое Zeroconf и с чем его едят</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/66003/" target="_blank">Синхронизируем KDE4 Kontact и мобильник</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65982/" target="_blank">Линукс помогает в жизни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65857/" target="_blank">Читаем руководства в цвете</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65762/" target="_blank">Технический анализ поставок IBS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65638/" target="_blank">Защита пользователей почтового сервера от спаммеров — несколько шагов, которые помогут вам отослать спаммеров подальше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65533/" target="_blank">Установка PhotoShop CS4 под Ubuntu 9.04 Jaunty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65384/" target="_blank">pv — маленькая, но очень полезная утилита</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65287/" target="_blank">Включаем 5.1 в Pulse Audio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/65076/" target="_blank">Установка и ускорение Eclipse и Java Virtual Machine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64986/" target="_blank">Microsoft хочет внести свой код в ядро Linux — давайте разберёмся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64888/" target="_blank">FlylinkDC++ и Wine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64852/" target="_blank">Прошу помощи в создании программы: MountManager 1.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64868/" target="_blank">Общий каталог на Linux десктопе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64775/" target="_blank">Linux DC++ и многопоточность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64750/" target="_blank">Каким рабочим столом преимущественно пользуетесь? Почему? (в комментариях)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64640/" target="_blank">Какова Ubuntu в сравнении с Mac OS X?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64526/" target="_blank">Обзор Suse Studio (в скриншотах)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64408/" target="_blank">NeatX: терминальный NX-сервер от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64362/" target="_blank">SUSE Studio beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64350/" target="_blank">Организация распределенного дискового хранилища с возможностью неограниченного расширения с применением технологий LVM и ATAoE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/64113/" target="_blank">Ссылок на репозитории со свежим софтом пост</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63890/" target="_blank">Проблемы с ext4 в ubuntu jaunty</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63888/" target="_blank">Вышел #! CrunchBang Linux 9.04.01</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63550/" target="_blank">Вышел EduMandriva 2009 Spring Addon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63534/" target="_blank">Почти нативный Direct3D в VirtualBox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63499/" target="_blank">Финал «What do you do with Linux?»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63414/" target="_blank">К вопросу о некоторых аспектах организации файловой системы UNIX/Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63388/" target="_blank">Truth Happens</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63339/" target="_blank">Full Circle Magazine #25 (RUS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63306/" target="_blank">Edumandriva 2009 Spring LXDE One CD — финальный релиз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63291/" target="_blank">Конкурс от Novell на лучшее видео</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63265/" target="_blank">МегафонМодем+ в Mandriva Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/63221/" target="_blank">Linux: Установка программ не входящих в дистрибутив при помощи менеджера xstow</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62811/" target="_blank">Сравнение операционных систем семейства Linux/UNIX и Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62685/" target="_blank">POHMELFS: NFS по-новому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62478/" target="_blank">UbuntuOne открыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62401/" target="_blank">FF 3.5, PNG и цветовые профили</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62369/" target="_blank">В Linux встроена поддержка мультитач</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/62007/" target="_blank">Fedora 11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61973/" target="_blank">Даже для тех, кто хочет оставить Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61974/" target="_blank">Новая версия ядра Linux 2.6.30</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253256/" target="_blank">Разбираемся с установкой и загрузкой Linux на примере ArchLinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253193/" target="_blank">Разворачиваем рабочий образ linux с минимальным интерактивом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252567/" target="_blank">OpenSMTPD + UW IMAP как альтернатива тяжелым почтовым системам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252201/" target="_blank">Мониторинг для бедных или SAR + MySQL + Gnuplot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251931/" target="_blank">Тестируем распределение контента в GlusterFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251923/" target="_blank">Основные моменты настройки Cubieboard с linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251659/" target="_blank">Бэкап Linux и восстановление его на другом железе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250859/" target="_blank">VPN везде и всюду: IPsec без L2TP со strongSwan</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250767/" target="_blank">Поддержка TLS1.1+ для устаревших версий CommuniGate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249707/" target="_blank">Установка FreeBSD по сети (PXE) с linux-сервера (dnsmasq + nfs)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61739/" target="_blank">wTorrent — web-based bittorrent клиент для Linux\BSD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61730/" target="_blank">Изменение фонового изображения на экране входа в систему в Ubuntu 9.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61644/" target="_blank">Стать мэинтейнером — обновляем репозиторий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61643/" target="_blank">Раздражающее поведение менеджера обновлений в Ubuntu 9.04 и как это вылечить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61555/" target="_blank">Ubunchu! — глава 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61343/" target="_blank">Релиз Amarok 2.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/61295/" target="_blank">Жесты мышью в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60444/" target="_blank">Прием спутниковых тв каналов в linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60977/" target="_blank">Синтез русской речи в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60924/" target="_blank">К вопросу о популярности Linux-систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60763/" target="_blank">Вышел GiftWrap 0.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60720/" target="_blank">Скачиваем с Rapidshare в консоли и автоматически сбрасываем PPP сессию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60643/" target="_blank">Вышел Linux Mint 7 Gloria</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60553/" target="_blank">Ubuntu будет запускать приложения под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60401/" target="_blank">TuxOnIce в *ubuntu 9.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60230/" target="_blank">Пользуетесь ли вы антивирусом в линуксе?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60165/" target="_blank">GNOME Zeitgeist: мини-FAQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60095/" target="_blank">Причесываем трафик — динамический шейпер на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/60040/" target="_blank">Yota + Eeebuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59992/" target="_blank">Moblin 2.0 Beta: Новый пользовательский интерфейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59988/" target="_blank">минилинукс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59397/" target="_blank">Минэкономразвития России об использовании свободного программного обеспечения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59775/" target="_blank">Украина готовит программу перехода на Linux и Open Source в госорганах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59732/" target="_blank">Интервью с Эдвардом Херви о видеоредакторе PiTiVi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59648/" target="_blank">Все школы Татарстана переведут на СПО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59602/" target="_blank">Установка Ubuntu 9.04 на ASUS Eee PC 901</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59352/" target="_blank">Аналог dropbox от Canonical</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59346/" target="_blank">Gentoo как бы намекает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59320/" target="_blank">Wbar — dockbar не требующий compiz</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59315/" target="_blank">Full Circle Magazine #24 (RUS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59242/" target="_blank">Даунгрейдим дебиан: из testing в stable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59237/" target="_blank">Использование EAC с Wine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59122/" target="_blank">alias hint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/59099/" target="_blank">Доля LINUX на рынке операционных систем перевалила за 1 (АДИН!) процент!111</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58972/" target="_blank">Ubuntu и 7 окон</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58772/" target="_blank">Quake Live</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58769/" target="_blank">автоматическое монтирование подключаемых устройств через udev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58674/" target="_blank">Боремся с &quot;*** glibc detected ***&quot;</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58626/" target="_blank">Священная корова Хабра?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58603/" target="_blank">Как качать с Rapidshare.com «free user», используя curl или wget</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58572/" target="_blank">С днем рождения, Mandriva Linux 2009.1!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58373/" target="_blank">GTea — время пить чай</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58368/" target="_blank">Ubuntu Install Party в Санкт-Петербурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58218/" target="_blank">Объединение сетевых интерфейсов в linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58197/" target="_blank">Набор качественных тем для gnome от ZgegBlog</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58183/" target="_blank">Особенности Ext4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58127/" target="_blank">Fedora 11: Превью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58121/" target="_blank">Как конвертировать файловую систему из ext3 в ext4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/58060/" target="_blank">Вышел Ubuntu 9.04 Jaunty Jackalope</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57973/" target="_blank">Манга Ubunchu — на русском</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57948/" target="_blank">Книга Ubuntu Pocket Guide and Reference от Keir Thomas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57897/" target="_blank">Выпущен XNeur и gXNeur версии 0.9.4!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57763/" target="_blank">Ubunchu! — манга о Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57628/" target="_blank">Стать мэинтейнером — часть пятая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57469/" target="_blank">Linux Vacation / Eastern Europe 2009: начата регистрация заявок на участие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57252/" target="_blank">Ubuntu Netbook Remix (9.04 Jaunty)+Acer Aspire One A110-Aw</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57246/" target="_blank">We are Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57228/" target="_blank">6 must-have дистрибутивов Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57153/" target="_blank">Full Circle Magazine #23 (RUS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57087/" target="_blank">Ставим Ubuntu 9.04 на Acer Aspire One по сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57085/" target="_blank">Squid для самых маленьких. Часть 4 Режем канал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57075/" target="_blank">Некоторые впечатления от тест-драйва Ubuntu 9.04 beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57072/" target="_blank">Untangle Gateway, вышел релиз 6.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/57066/" target="_blank">Настраиваем сканер отпечатков пальцев (finger print) в Ubuntu 9.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56796/" target="_blank">Спасаем данные в Linux с помощью ddrecovery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56886/" target="_blank">Squid для самых маленьких. Часть 3 Статистика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56782/" target="_blank">Последний шаг к релизу — Mandriva Linux 2009 Spring RC2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56684/" target="_blank">Jabber WebCam Bot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56652/" target="_blank">OpenVPN, объединяем домашние сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56618/" target="_blank">Винные Трюки или установка компонентов Windows в Wine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56515/" target="_blank">The people project</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56508/" target="_blank">Нужен ли магазин, который продает компьютеры/ноутбуки только с предустановленной Ubuntu?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56496/" target="_blank">VPN-сервер на Linux — решение проблемы с MPPE и клиентами, не поддерживающими шифрование данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56439/" target="_blank">У вас есть борода?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56405/" target="_blank">Gnome 3.0 глазами пользователя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56290/" target="_blank">Squid для самых маленьких. Часть2. Настройка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56260/" target="_blank">GRUB2 и ядра Xen</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56222/" target="_blank">Russian Ubuntu LoCo Team придан статус официальной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56216/" target="_blank">GRUB2. Начало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56210/" target="_blank">Калькулятор на MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56074/" target="_blank">Microsoft купила у Novell ext2/3/4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/56049/" target="_blank">Передача файлов между двумя компьютерами по интернету (netcat)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55961/" target="_blank">Аpt-build. Неработающая оптимизация.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55809/" target="_blank">Flush 0.4 released (GTK-based BitTorrent клиент)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55698/" target="_blank">Full Circle Magazine #22 (RUS)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55652/" target="_blank">Вышла Ubuntu 9.04 Beta 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55619/" target="_blank">Q4wine — установка Windows-игры в Wine в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55540/" target="_blank">Ubuntu 9.04 Beta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55232/" target="_blank">Как решить некоторые проблемы в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55465/" target="_blank">Простой способ восстановить удаленные файлы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55427/" target="_blank">Вышла новая версия ядра Linux — 2.6.29</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55411/" target="_blank">Quake в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55256/" target="_blank">Организация съема трафика с Linux сервера для последующего анализа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55136/" target="_blank">Потоки данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55132/" target="_blank">Используем 2+ провайдера (вторая часть)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/55121/" target="_blank">20 советов для линукс-гиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49137/" target="_blank">Используем 2+ провайдера (первая часть)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54938/" target="_blank">Linux выигрывает во время рецессии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54893/" target="_blank">Вышел Gnome 2.26</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316400/" target="_blank">Развертывание OpenSource Puppet 4 с несколькими Puppet masters. Часть I. Подготовительная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316482/" target="_blank">Развертывание OpenSource Puppet 4 с несколькими Puppet masters. Часть II. Настройка Puppet Masters</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/stss/blog/312166/" target="_blank">VIDEOMOST — Сервер ВКС у Вас в кармане</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316208/" target="_blank">Телевидение через Acestream на Raspberry PI. Теперь в docker контейнерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316158/" target="_blank">Поднимаем собственный репозиторий пакетов для Ubuntu (Debian)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315960/" target="_blank">Linux WiFi из командной строки с wpa_supplicant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/selectel/blog/315930/" target="_blank">Виртуальное приватное облако: работа с CoreOS и RancherOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/first/blog/315754/" target="_blank">Подборка полезных слайдов про Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/315766/" target="_blank">Microsoft SQL Server для Linux: мост между мирами Linux и Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/314168/" target="_blank">Мониторинг и настройка сетевого стека Linux: получение данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248073/" target="_blank">Centos 7 convert to software RAID 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248009/" target="_blank">Хостим персональный сайт на роутере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247421/" target="_blank">Восстановление удаленных данных с помощью Scalpel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247337/" target="_blank">ODROID-C1 — обзор и сравнение с RPi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247167/" target="_blank">Stunnel на сервере и клиенте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245809/" target="_blank">Опыт создания домашнего Wi-Fi маршрутизатора. Часть 2. Установка и настройка ПО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246671/" target="_blank">Network UPS Tools (NUT) на CentOS и Windows с отправкой смс через smstools+playsms</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246375/" target="_blank">Не используйте &quot;!!&quot; в баше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246341/" target="_blank">IPv6, miredo, dynamic DNS AAAA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246277/" target="_blank">Сборка и установка пакетов системы мониторинга Calamari для распределенного хранилища CEPH 0.87 на Ubuntu 14.04.1 (Trusty Tahr)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54874/" target="_blank">Открытая замена ati-drivers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54748/" target="_blank">Объединение пропускной способности двух интернет каналов и простая отказоустойчивость</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54719/" target="_blank">GoogleEarth 5, проблема с отображением кириллицы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54700/" target="_blank">Изменение разделов в Linux, восстановление grub</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54676/" target="_blank">Interactive map of Linux kernel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54649/" target="_blank">Сканирование винчестера на badblock из Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54506/" target="_blank">В тылу врага. Внедрение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54487/" target="_blank">Установка Ubuntu Jaunty на Nokia N800/N810</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54491/" target="_blank">The Linux Foundation представила функционал для Linux.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54397/" target="_blank">А вы используете Gnome Deskbar Applet?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54321/" target="_blank">Переход на Open Source небольшой конторы. Опыт, размышления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54229/" target="_blank">Анонс Tiny Core Linux 1.2 — минималистического Linux дистрибутива весом 10 Мб.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54199/" target="_blank">Прогноз погоды по sms (*nix + shell script, email2sms)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54170/" target="_blank">Кто возьмётся за KXneur?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54139/" target="_blank">Интернет в моём EEE PC через Bluetooth-GPRS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54103/" target="_blank">Как сбросить пароль в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/54043/" target="_blank">Файловые системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53966/" target="_blank">Bluetooth в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53863/" target="_blank">Круговая прокрутка а-ля iPod на тачпаде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53698/" target="_blank">9 марта (понедельник) 2009: Ubuntu Testing Day</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53634/" target="_blank">За linux.com теперь отвечает Торвальдс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53590/" target="_blank">Заметаем следы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53542/" target="_blank">Squid для самых маленьких</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53349/" target="_blank">Почему я не могу перейти на Kubuntu/Ubuntu etc</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53276/" target="_blank">Как установить Linux из сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/53219/" target="_blank">Как установить Debian Linux с USB flash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52871/" target="_blank">Основы BASH. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52852/" target="_blank">Установка OpenOffice 3.0 на Ubuntu 8.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52843/" target="_blank">Почему Microsoft боится «кармической коалы»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52310/" target="_blank">Удобный доступ к файлам на удаленных хостах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52518/" target="_blank">Выпуск Ubuntu 9.10 получил кодовое имя «Karmic Koala»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52368/" target="_blank">Оптимизация Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52361/" target="_blank">Небольшой, но полезный скрипт пакетной обработки фото с помощью ImageMagic</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/52058/" target="_blank">Amarok и Last.fm</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51990/" target="_blank">Утягиваем фотографии по bluetooth</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51966/" target="_blank">Элементарный Bash скрипт для резервного копирования данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51875/" target="_blank">Создаем свой SVN сервер: 3$ и 30 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51572/" target="_blank">6 приложений для анализа жесткого диска в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51552/" target="_blank">Ubuntu Developer Week: Пакуем модули ядра с DKMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51427/" target="_blank">Стать мэинтейнером. Часть четвертая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51419/" target="_blank">резервное копирование rsync-ом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51302/" target="_blank">Расширяем возможности wget</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47230/" target="_blank">Настройка сети в Linux через конфиг-файлы, ч.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51212/" target="_blank">Сравнение производительности разных версий Ubuntu и Windows.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51159/" target="_blank">Ubuntu для нетбуков: версия от HP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51077/" target="_blank">Торвальдс отверг идею унифицированного дистрибутива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50944/" target="_blank">Автоматическое выполнение задач с Gnome Schedule</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50716/" target="_blank">Стать мэинтейнером. Часть третья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50689/" target="_blank">Советы для работы в Linux с флешки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50631/" target="_blank">Стать мэинтейнером. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50612/" target="_blank">Intel представила первый альфа-релиз платформы Moblin 2.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50540/" target="_blank">Стать мэинтейнером. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50267/" target="_blank">13 плагинов для того, чтобы сделать Gedit более удобным редактором</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50235/" target="_blank">Bash и Twitter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/50160/" target="_blank">Включение сглаживания шрифтов в wine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49957/" target="_blank">Патчим и собираем pidgin на дому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49801/" target="_blank">SOCKS через SSH — не только для ICQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49708/" target="_blank">Adobe Flash Player 10.0 для 64-битного Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49694/" target="_blank">Обзор разработки Gnome 2.26</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49665/" target="_blank">Sendmail-заглушка для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49113/" target="_blank">Домашний медиацентр на Intel Atom</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49477/" target="_blank">The Chakra Project = Arch Linux + LiveCD + KDE 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49453/" target="_blank">Вышла третья альфа версия Ubuntu 9.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49443/" target="_blank">Исправлен баг в Ubuntu, приводящий к износу винчестера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49385/" target="_blank">Консольный скринкаст</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49204/" target="_blank">Общий обзор стандартных средств наблюдений за системой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/49129/" target="_blank">GNOME: выключаем унылый эффект сворачивания окон</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48954/" target="_blank">Работа с буфером обмена в Linux: теория и практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48790/" target="_blank">Dual-boot Vista SP1 и Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48783/" target="_blank">Появился первый релиз-кандидат ядра Linux 2.6.29.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48750/" target="_blank">Btrfs вошла в состав основной ветки ядра Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48720/" target="_blank">Настройка Ubuntu 8.10 для кодинга под NVIDIA CUDA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48619/" target="_blank">Настройка домашнего сервера на базе Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48522/" target="_blank">Апплет на панель Gnome, отображающий карму и хабрасилу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48451/" target="_blank">Обновление программы в репозитории Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48370/" target="_blank">Gmail Notifier своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48386/" target="_blank">Пакетное масштабирование изображений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48338/" target="_blank">Гонки в OpenSource</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48175/" target="_blank">Папка ~/Templates и контекстное меню правой клавиши мыши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/48120/" target="_blank">Делаем VNC-сервер из Mandriva Linux 2009.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47999/" target="_blank">Терминальный офис: Linux vs Windows — holy war: Part I</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47960/" target="_blank">С днём рождения, Линус!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47892/" target="_blank">Собственные уведомления (notify) в Gnome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47783/" target="_blank">Вышла новая версия ядра Линукс 2.6.28.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47749/" target="_blank">Принтеры HP LaserJet 10xx в Mandriva Linux 2009.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47638/" target="_blank">Пакеты с getdeb.net теперь доступны в качестве неофициального репозитория</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47569/" target="_blank">TortoiseSVN в Ubuntu быть!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47555/" target="_blank">Linux From Scratch 6.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47457/" target="_blank">Вышла вторая альфа версия Ubuntu 9.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47163/" target="_blank">Основы BASH. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/47005/" target="_blank">Плагин для быстрой смены кодировки открытого файла в Gedit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46884/" target="_blank">«Многабукав», как говорят древние греки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46830/" target="_blank">О наболевших проблемах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46821/" target="_blank">Используем GPS в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46449/" target="_blank">Apt-cacher как корпоративный сервер обновлений для Ubuntu/Kubuntu/*buntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46342/" target="_blank">База данных скриншотов программ Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246223/" target="_blank">Установка и настройка VPS с CentOS 6.x парой команд с VestaCP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/veeam/blog/245931/" target="_blank">Применение Veeam Backup для виртуальных машин под управлением Linux: аутентификация на основе сертификата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245871/" target="_blank">Как жить, если у тебя ноутбук, а экранов стало не хватать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245663/" target="_blank">Перенос ОС Windows на другой компьютер средствами ОС Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245651/" target="_blank">Установка, настройка и тестирование Fedora 21 Workstation на личном или игровом компьютере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221543/" target="_blank">Установка Archlinux на телефон с Android во второй раздел SD или просто подпапку системной карты памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244921/" target="_blank">Продолжаем ставить OpenWrt на всё что угодно. D-link DNS-320L</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244931/" target="_blank">Назад в 2010, или устанавливаем MATE в Ubuntu 14.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244703/" target="_blank">Офис на Linux — мой опыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243889/" target="_blank">«Защита от дурака» или как запретить изменение/удаление важных папок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46230/" target="_blank">Tux из бумаги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46173/" target="_blank">Китайские интернет-кафе насильно переводят на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/46114/" target="_blank">Установка Linux из виртуальной машины на съемный диск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45912/" target="_blank">Настройка резервного копирования в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45873/" target="_blank">Файловые системы в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45841/" target="_blank">Поздравляем! Вы нашли этот блог!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45827/" target="_blank">Использование файла подкачки вместо раздела</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45809/" target="_blank">USB в VirtualBox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45627/" target="_blank">Imageshack.us applet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45584/" target="_blank">Amarok 2 RC1 вышел и есть в репозитариях.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/45192/" target="_blank">LTSP. Подключаем Flash-носители для клиентов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44943/" target="_blank">Настраиваем трекбол Trackman Marble</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44828/" target="_blank">Sudo и графические приложения.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44788/" target="_blank">Угадывание мыслей и выполнение несуществующих команд средствами bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44783/" target="_blank">su или sudo?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44735/" target="_blank">Выложу-ка я тут комментарий, и не боюсь я, что будет сообщение слишком коротким, нет, где-то средней длины</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44600/" target="_blank">Какой дистрибутив Linux выбрать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44562/" target="_blank">Настройка Apple Slim keyboard под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44585/" target="_blank">ATI Catalyst 8.11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44519/" target="_blank">Несколько способов долбануться на отличненько тупому нубу, решившему поставить линукс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44455/" target="_blank">Несколько способов не потерять данные при подвисании Gnome (Ubuntu и другие)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/44039/" target="_blank">Ubuntu Release Party in Minsk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43927/" target="_blank">bluetooth pan network — интернет на вашем телефоне с «большого брата»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43886/" target="_blank">Ubuntu netbook remix на раз два</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43830/" target="_blank">Воспроизведение 3GP «для чайников»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43783/" target="_blank">Как тяжело «попасть» в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43652/" target="_blank">Владельцам нетбуков посвящается: Unetbootin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43629/" target="_blank">Ubuntu 8.10 Final</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43261/" target="_blank">Неприятная особенность Ubuntu Linux для системных администраторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43260/" target="_blank">Простой способ переноса больших файлов по частям</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43258/" target="_blank">Ubuntu 8.10 на eee 901</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43190/" target="_blank">Ubuntu 8.10: Скриншот тур</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43101/" target="_blank">Ubuntu 8.10 rc1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43074/" target="_blank">Рулим трафиком в Linux. Часть третья.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43059/" target="_blank">Marble drop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42977/" target="_blank">Рулим трафиком в Linux. Часть вторая.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42963/" target="_blank">Mini-tip: Калибрация дисплея в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42958/" target="_blank">Выбор серверного дистрибутива Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42680/" target="_blank">zsh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42638/" target="_blank">Загрузка Linux за 5 секунд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42581/" target="_blank">Рулим трафиком в Linux. Аккаунтинг, сбор статистики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42548/" target="_blank">Будьте осторожнее с Adobe Flash Player 10!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42540/" target="_blank">Лицензия Ubuntu для украинского (и не только) законодательства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42527/" target="_blank">time management и bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42498/" target="_blank">Шрифты в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42424/" target="_blank">Анализатор лог-файлов 3proxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42109/" target="_blank">NetworkManager в Ubuntu 8.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/42105/" target="_blank">nVidia Legacy драйвер в Intrepid Ibex</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41969/" target="_blank">Качаем файлы в бэкграунде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41701/" target="_blank">Загрузка Linux за пять секунд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41492/" target="_blank">Backup — дело тонкое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41438/" target="_blank">medit — хорошая замена gedit в Linux и TextPad в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41430/" target="_blank">Дёшево и сердито блокируем 85% спама: greysmtpd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41176/" target="_blank">Прекращается поддержка Ubuntu 7.04 Feisty Fawn</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41148/" target="_blank">Включаем NX-бит в 32-битном ядре на 64-битном CPU</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41093/" target="_blank">367 обновлений в 8.10 Alpha6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/41060/" target="_blank">Линукс для детей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40868/" target="_blank">Ubuntu 8.04, cups-pdf, apparmor, домен и likewise-open… Пьеса в трех действиях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40619/" target="_blank">Собственный дистрибутив на базе Debian Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40543/" target="_blank">Опять о раскладке Бирмана, да и переключении раскладок вообще в грядущей 8.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40183/" target="_blank">Собираем deb-пакет. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40135/" target="_blank">Маленькая хитрость ssh-консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39956/" target="_blank">Компания CodeWeavers выпустила версию Google Chrome для Linux и Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39834/" target="_blank">Началось альфа-тестирование десктоп-окружения Xfce 4.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39833/" target="_blank">SoftMaker Office 2008 for Linux (бублик бета)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39803/" target="_blank">Foresight Mobile Edition 1.0 — пополнение в мобильных линуксах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39624/" target="_blank">Что ждать от Ubuntu 8.10?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39541/" target="_blank">LinuxFest 2008 в Молдове</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39463/" target="_blank">Полукомпактная тема GTK.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39277/" target="_blank">Пара хитростей ssh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39254/" target="_blank">Использование putty и ssh ключей в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39204/" target="_blank">Появился клиент Dropbox под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39206/" target="_blank">Настройка bluetooth стерео-наушников в Ubuntu Linux (8.04 & 7.10)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39190/" target="_blank">Ставим свежий ClamAV с поддержкой UNRAR</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39177/" target="_blank">Частный опыт перехода на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39129/" target="_blank">Logitech MX Revolution в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39116/" target="_blank">SSH для частого использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/39020/" target="_blank">Репозиторий пакетов популярных игровых программ для Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38991/" target="_blank">Запуск Google Chrome под WINE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37606/" target="_blank">HowTo: Что делать, если у вас в лэптопе программный блютус…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38551/" target="_blank">Slax — карманная операционная система (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38166/" target="_blank">Текстовые редакторы для Linux (часть 2): Geany</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/38043/" target="_blank">Как я оптимизировал систему: Ubuntu 8.04 Hardy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37942/" target="_blank">ATI Catalyst 8.7/8.8 + WINE OpenGL. Решение проблемы.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37864/" target="_blank">Домашний сервер: медиацентр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37859/" target="_blank">uRSSus — для тех кто еще не нашел удобную RSS-читалку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37824/" target="_blank">Домашний сервер: виртуализация на основе Xen</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37706/" target="_blank">Firefox будет портирован под Qt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37660/" target="_blank">Домашний сервер: прокси для SIP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37262/" target="_blank">Как открыть файл или папку правым кликом с правами root</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37234/" target="_blank">Debian исполнилось 15 лет!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37195/" target="_blank">Настройка exim+postgresql+dbmail+spamassassin в Gentoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/36746/" target="_blank">Apparmor и Firefox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30703/" target="_blank">Подскажите аналоги win софта в Ububntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30506/" target="_blank">Дистрибутив ALT Linux Desktop Professional получил сертификат ФСТЭК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30494/" target="_blank">Munin — мониторинг сети это просто!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30490/" target="_blank">Обновление Linux ядра: 2.6.25.14 и 2.6.26.1. Что нового ожидается в 2.6.27</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30315/" target="_blank">PDC on Ubuntu server 8.04 openLDAP+Samba</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30198/" target="_blank">Виртуализация Linux с помощью OpenVZ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29748/" target="_blank">Десктоп с потреблением 2 Вт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244373/" target="_blank">Поднятие chroot-«виртуалки» с ubuntu для сборки пакетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244133/" target="_blank">Перенаправление пользователей по правилам в Squid</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244027/" target="_blank">Разбираем методы проксирования на основе HAProxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243977/" target="_blank">Давим шумы средствами PulseAudio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243651/" target="_blank">Mosh — SSH с блекджеком и роумингом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243613/" target="_blank">Удобное удаленное управление консолью linux из-под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243407/" target="_blank">Odroid-W + W Docking Board LCD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242819/" target="_blank">network manager + автоматизация http-логина в wifi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242253/" target="_blank">Как драйвер Windows коварно ломает звук в Linux или мучительные поиски бага</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241379/" target="_blank">Ubuntu 14.10 (Utopic Unicorn) доступна для скачивания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29470/" target="_blank">Linux-смартфон на базе openmoko уже в продаже, а стоит ли покупать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29279/" target="_blank">Линус Торвальдс о безопасности и обезьянах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29256/" target="_blank">Линус Торвальдс обдумывает новую схему нумерации версий Linux ядра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29158/" target="_blank">«примеры эффективного использования GNU утилит в Linux»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29136/" target="_blank">Консоль для новичка. Часть 2.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29127/" target="_blank">Релиз Linux ядра 2.6.26.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/29121/" target="_blank">Консоль для новичка. Часть 1.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28889/" target="_blank">Fedoralinux.ru — сайт о любомой операционной системе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28707/" target="_blank">Сомнений больше нет… Ганс Рейзер — убийца.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28550/" target="_blank">Вышло обновление Ubuntu 8.04.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28547/" target="_blank">Мультитач для всех</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28400/" target="_blank">Как качать с Rapidshare.com premium используя wget</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28392/" target="_blank">Самые ненавистные linux дистрибутивы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28366/" target="_blank">Пересборка пакетов для Ubuntu (Debian)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28138/" target="_blank">Flash 9r48</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28137/" target="_blank">Глюки и недочеты ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28128/" target="_blank">Гламурный mc</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/28095/" target="_blank">Разработчики мобильных версий Linux объединяют усилия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27997/" target="_blank">Быстрый copy — paste.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31618/" target="_blank">Небольшой обзор Ubuntu MID Edition 8.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27921/" target="_blank">Ubuntu 8.04 для мобильных терминалов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27889/" target="_blank">Инкрементный Backup при подключении USB HDD в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27799/" target="_blank">Обновление kernel'а без ребута или просто Ksplice</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27584/" target="_blank">Раздельная скорость мышки и тачпада в Linux.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27478/" target="_blank">Slax — карманная операционная система</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27469/" target="_blank">Как запустить VirtualBox(OSE версию) на новом ядре Linux.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27408/" target="_blank">В OpenSSH появились картинки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27382/" target="_blank">qutIM — может, кто-то еще ищет свою «идеальную аську»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27380/" target="_blank">Как получить любой символ в Гноме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27371/" target="_blank">Linux Vacation / Eastern Europe — регистрация продлена до 20 июня</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27350/" target="_blank">Звук по сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27163/" target="_blank">Mandriva Install Fest в Екатеринбурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27117/" target="_blank">Вышел Linux Mint 5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27080/" target="_blank">Подкасты и программирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27041/" target="_blank">ext4: Еще тестируется или уже работает?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/27039/" target="_blank">Реклама Linux от IBM, 2003</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26864/" target="_blank">Linux в массы через телефоны?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26530/" target="_blank">Про Flickr и быструю закачку фотографий в сеть из Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26521/" target="_blank">Видеоредакторы для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31592/" target="_blank">Пять принципов успешного массового сотрудничества, ч3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31590/" target="_blank">10 трюков в командной строке, о которых вы не знали. Честное слово.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/26117/" target="_blank">Установка SVN+Trac+TracWebAdmin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31577/" target="_blank">Пять принципов успешного массового сотрудничества ч2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25970/" target="_blank">Ubuntu+Aptana=… Установка Aptana в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25951/" target="_blank">Skype — береженого Бог бережет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25936/" target="_blank">Пять принципов успешного массового сотрудничества ч1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25855/" target="_blank">Alpha 400 — новый субноутбук на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25797/" target="_blank">Linux Vacation / Eastern Europe 2008 состоится в июне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25361/" target="_blank">Релиз Fedora 9!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25256/" target="_blank">UbuntuSatanic</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25174/" target="_blank">Синхронизация музыки в Ubuntu c iPhone по WiFi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/25150/" target="_blank">И снова о раскладке Бирмана</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24956/" target="_blank">HP OpenView Service Desk</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24912/" target="_blank">Для начинающих убунтуводов. Моё мини FAQ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24907/" target="_blank">Linux help</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24701/" target="_blank">Реакция девушки-гуманитария на свежеустановленную ей Ubuntu. День второй.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24653/" target="_blank">Реакция девушки-гуманитария на свежеустановленную ей Ubuntu. День первый.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24514/" target="_blank">XGL 3d desktop on Touchscreen</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24438/" target="_blank">Linux, ATI, Compiz-Fusion и игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24386/" target="_blank">Моя Убунта — II</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24327/" target="_blank">Заворачиваем Amarok на MySQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24297/" target="_blank">Хардипати в Петрозаводске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24118/" target="_blank">Я не качаю Ubuntu 8.04!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24106/" target="_blank">Вышел Ubuntu 8.04.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24082/" target="_blank">Sun опубликует остатки Java под GPL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/24046/" target="_blank">Эмуляция влияния глобальных сетей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23776/" target="_blank">Решение проблемы с Ubuntu Hardy (8.04, beta) и Photoshop CS2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23746/" target="_blank">Fedora 9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23650/" target="_blank">Установка и настройка VPN сервера с биллинговой системой AbillS на Ubuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23615/" target="_blank">Rootless Root на русском языке. Откровение четвёртое.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23564/" target="_blank">WindowsXP -&gt; XDMPC -&gt; Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23523/" target="_blank">Shortcuts в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23375/" target="_blank">Rootless Root на русском языке. Откровение третье.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23313/" target="_blank">Есть ли жизнь на Марсе? Тьфу! Под Linux-ом?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23223/" target="_blank">Rootless Root на русском языке. Откровение второе.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/23191/" target="_blank">Rootless Root на русском языке. Откровение первое.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31504/" target="_blank">Apturl в Ubuntu: установка программ одним кликом по ссылке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22959/" target="_blank">Linux T1000</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22922/" target="_blank">C Linux все возможно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22830/" target="_blank">Конвертируем видео для iPod из-под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22805/" target="_blank">Настройка почты для отладки mail-функций разрабатываемых приложений на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22754/" target="_blank">Ян Мёрдок в гостях у SPbLUG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22635/" target="_blank">Adobe Air Alpha 1 for Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35353/" target="_blank">Готовы ли вы платить за компьютерные игры под GNU/Linux?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22190/" target="_blank">Linux для веб-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/22066/" target="_blank">Шаг 9. Установка программ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21902/" target="_blank">Установка программ и обновление Ubuntu без интернета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21726/" target="_blank">История Tux'а, талисмана Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21500/" target="_blank">Юзабилити Ubuntu: Gnome Do</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21362/" target="_blank">Состоялся телемост с Ричардом Столлманом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21205/" target="_blank">Как загружается Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21187/" target="_blank">Кое-что о проблемах с кодировками в убунту.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/21117/" target="_blank">Пользователь Linux, подпиши открытое письмо к NVIDIA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20901/" target="_blank">Ускорение запуска программ с помощью Preload</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20807/" target="_blank">Шаг 8: Звук</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20736/" target="_blank">Установка и настройка Apache2+PHP5+MySQL+XDebug & Eclipse+PDT+XDebug в Ubuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20624/" target="_blank">Bluetooth авторизация для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20593/" target="_blank">Бесшовная интеграция — всё наоборот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20579/" target="_blank">Встречайте: Ubuntu 8.10 «Intrepid Ibex»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20525/" target="_blank">Устанавливаем и настраиваем LAMP и Trac+SVN на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240915/" target="_blank">Готовим Debian к переводу часов 26 октября 2014 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239949/" target="_blank">Torrent-клиент на linux-шлюзе — миф или реальность?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239805/" target="_blank">Реанимация D-Link NAS DNS-325</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239729/" target="_blank">Проброс VLAN-ов через интернет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239513/" target="_blank">Организация backup-сервера. Linux, ZFS и rsync</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238621/" target="_blank">Ubuntu 14.04 на Asus X200MA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238413/" target="_blank">Разбираемся с rtorrent всерьёз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237955/" target="_blank">Роутер из DAP-1160</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237727/" target="_blank">Реанимация серверов Ubuntu на Hetzner или немного полезных команд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237797/" target="_blank">Webmin — такой, каким мы все хотели бы его видеть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20488/" target="_blank">Фильм о Linux на русском языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20445/" target="_blank">Тест производительности BIND на разных OS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20279/" target="_blank">Скриншоты всех дистрибутивов Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20211/" target="_blank">В ядре Linux обнаружена уязвимость</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20200/" target="_blank">Стоп! Снято!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20186/" target="_blank">Sun приобретает innotek GmbH</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/20181/" target="_blank">Шаг 7. Продолжаем настройку системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19879/" target="_blank">Red Hat заняла 11 место в списке самых быстрорастущих компаний</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31412/" target="_blank">Mac OS X и Vista глазами Линуса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19610/" target="_blank">Linux в бытовой технике уже реальность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19596/" target="_blank">Чиним яркость у ноутбука</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19547/" target="_blank">Шаг 6: Краткое знакомство с консолью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19460/" target="_blank">Шаг 5: Священные войны и немного о каталогах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19352/" target="_blank">Переключение раскладки в KDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19319/" target="_blank">Тонкий ноутбук от Dell… под управлением Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19270/" target="_blank">KDE портируют на Windows и Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19258/" target="_blank">Шаг 4. Настройка поддержки видеокарты и мыши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19217/" target="_blank">Шаг 3. Настройка репозиториев и локализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19188/" target="_blank">Linux на ладони</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19169/" target="_blank">Шаг 2. Настройка интернета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19123/" target="_blank">От новичка до пользователя. Шаг 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/19040/" target="_blank">Ленивым линуксоидам-(к)убунтоводам посвящается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18992/" target="_blank">Ещё больше новых компьютеров с Linux на борту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18928/" target="_blank">Обзор Archlinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31368/" target="_blank">10 советов новичку в KDE 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18845/" target="_blank">Курс обучения Ubuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18595/" target="_blank">Linux в организации…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18483/" target="_blank">Ubuntu 8.04 Hardy Heron — есть чего ждать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18447/" target="_blank">Что лучше для сервера: Линукс, FreeBSD или Mac OS X Server и почему?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18425/" target="_blank">TextMate средствами gedit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18407/" target="_blank">PSPI — запуск фотошопных плагинов под Гимпом!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18397/" target="_blank">Не бойтесь линукса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18375/" target="_blank">Описание более 350 команд Линукс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18349/" target="_blank">Установка драйвера для видяхи NVIDIA в Ubuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18329/" target="_blank">Шанс для альтернативных ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18251/" target="_blank">Guitar pro 5.2 под Kubuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/18198/" target="_blank">Снег на рабочем столе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17919/" target="_blank">Вышла вторая альфа Kubuntu Hardy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17827/" target="_blank">Проект Samba получил спецификации по протоколам от Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17610/" target="_blank">Какой-такой «ОпенСурс»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17598/" target="_blank">Почему OpenSource не «любят» в России? (Личное мнение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17557/" target="_blank">Hi, i`m Linux… Шуточные ad-ролики Novell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17473/" target="_blank">Xubuntu для ASUS eeePC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31326/" target="_blank">Советы и подсказки по bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17373/" target="_blank">Дневники Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35196/" target="_blank">Gnome или KDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/17216/" target="_blank">Пишем музыку в Linux: LMMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16718/" target="_blank">Canonical запускает сервис для разработчиков Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16673/" target="_blank">Надёжный мультипротокольный IM?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16504/" target="_blank">Приятные перспективы Linux в корпоративном секторе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16417/" target="_blank">LinuXPC: очередной настольный компьютер на базе Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16413/" target="_blank">Compiz Fusion — Не только красиво, но и удобно!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16405/" target="_blank">Как перезагрузить зависшую систему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16343/" target="_blank">Ubuntu отправляется покорять корпоративные серверы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16314/" target="_blank">Linux в USB-брелоке + TFT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16298/" target="_blank">2008 год может стать прорывным для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16280/" target="_blank">Linux Mint 4.0 на базе Ubuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16201/" target="_blank">С производительностью Ubuntu полный порядок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16151/" target="_blank">Я вот не знал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/16136/" target="_blank">Ubuntu Home Server Edition</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31300/" target="_blank">Mandriva против Microsoft, новый раунд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15968/" target="_blank">Fedora 8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15926/" target="_blank">Red Hat и Amazon сдают Linux в аренду</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15811/" target="_blank">Анонимный серфинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15445/" target="_blank">О пользе консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15383/" target="_blank">Вышла новая стабильная версия GIMP 2.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15366/" target="_blank">Алкснис комментирует распоряжение Зубкова по софту в образовательных учреждениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15325/" target="_blank">Fluxbuntu 7.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15322/" target="_blank">Ubuntu Gutsy и MCP51 (snd-hda-intel) — что сделать, чтобы зазвучало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15268/" target="_blank">Мультимедиа в Убунту. Говорят, ты юзер фрэндли. Врут чайнику?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15247/" target="_blank">Ubuntu Release Party в Киеве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15237/" target="_blank">Как чайник Убунту ставил. Всю ночь. С продолжением.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15182/" target="_blank">Гип-гип, ура!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15159/" target="_blank">Ubuntu 7.10 (Gutsy Gibbon)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15136/" target="_blank">Trolltech Greenphone (анонс)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15114/" target="_blank">4 причины не использовать линукс на ноутбуке.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15064/" target="_blank">Mandriva Linux 2008 стала еще проще в установке и настройке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15059/" target="_blank">Тест системы энергосбережения Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/15053/" target="_blank">Очередной праздник в стране Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14976/" target="_blank">Русский форум поддержки Ubuntu заработал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14967/" target="_blank">Госдума проголосовала против Обращения к Президенту по проекту «Информационная независимость России»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14876/" target="_blank">RT-ядро в Убунту. Быстро и без головной боли.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14861/" target="_blank">ubuntu-ru shut down</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14812/" target="_blank">Runtu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31267/" target="_blank">Опыт использования PDFedit в Kubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31266/" target="_blank">Пять наиболее распространенных заблуждений в отношении Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14772/" target="_blank">UA Gutsy Release Party</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31264/" target="_blank">Vixta: Vista Look and Feel для линуксоидов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14696/" target="_blank">Linux Foundation сотрудничает с японским правительством</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14670/" target="_blank">hardware4linux.info</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14318/" target="_blank">Определена программа Linux Land/ SofTool / SITOP 2007</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14260/" target="_blank">LINA вышла под лицензией GPL v2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14215/" target="_blank">Переназначение горячих клавиш в среде GNOME</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/14193/" target="_blank">Гитаризм для линуксоида — why not?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31248/" target="_blank">Интервью с Ричардом Столлманом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236551/" target="_blank">Использование ownCloud 7 в полевых условиях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237521/" target="_blank">IPsec IKEv1 Strongswan split tunneling</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237445/" target="_blank">Появился RTM-релиз (для производителей) Ubuntu для смартфонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237217/" target="_blank">Немного о Iptables, Iproute2 и эмуляции сетевых проблем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236977/" target="_blank">dd_rescue vs GNU ddrescue: зачем нужен клон, когда есть оригинал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236819/" target="_blank">Снова за парту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235207/" target="_blank">Управляем сервоприводами из OpenWRT без Arduino</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235523/" target="_blank">Просмотр Торрент-ТВ в интерфейсе LiveTV XBMC, под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235361/" target="_blank">Cubietruck. Дорожный мини сервер. Часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235355/" target="_blank">Cubietruck. Дорожный мини сервер. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13949/" target="_blank">Linux назвали самой перспективной ОС для смартфонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13924/" target="_blank">Управление KTorrent из консоли</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13905/" target="_blank">GNOME заботится о вашем здоровье!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31242/" target="_blank">Режим “язвить” в sudo!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13662/" target="_blank">Немецкие университеты переходят на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13571/" target="_blank">Linux в USB-брелоке + VGA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13554/" target="_blank">Этот подозрительный Skype</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13357/" target="_blank">В Ubuntu 7.10 появится графический конфигуратор Xorg</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13325/" target="_blank">«Пакет дня Debian»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13299/" target="_blank">Линукс везде. Теперь и Media Center Edition.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13273/" target="_blank">Мобильные телефоны на базе платформы LiMo появятся в 2008 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13270/" target="_blank">Проекту Debian — 14 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13201/" target="_blank">Проекту Gnome 10 лет!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31199/" target="_blank">Как изменить SSH-приветсвие под Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13098/" target="_blank">Hardened Gentoo: впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13097/" target="_blank">Hardened Gentoo: настройка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13095/" target="_blank">Hardened Gentoo: установка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13094/" target="_blank">Hardened Gentoo: описание</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31194/" target="_blank">Dell пророчит 2008 году славу года корпоративного Linux-десктопа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13033/" target="_blank">IBM объявила о новой инициативе «Big Green Linux».</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/13014/" target="_blank">CFS vs O(1) scheduler</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12989/" target="_blank">Internet Tablet от Nokia в 2008 году будет работать с Wimax</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12972/" target="_blank">Dell начала продажи компьютеров с Ubuntu в Европе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12760/" target="_blank">Мастер-классы по Linux в Екатеринбурге отменяют под давлением Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12688/" target="_blank">10 проблем пользователя Linux, силой пересаженного на Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31185/" target="_blank">«Пасхальные яйца» в Ubuntu!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12600/" target="_blank">Вирусы для *n*x существуют!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12557/" target="_blank">NASA купила крупнейшую автономную систему Linux в мире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12458/" target="_blank">Ubuntu выходит на корпоративный рынок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12429/" target="_blank">Как фанат Windows ставил Ubuntu: поминутный дневник</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12374/" target="_blank">Интервью с Линусом Торвальдсом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12139/" target="_blank">Ubuntu выпускает ориентированный на свободу дистрибутив Gobuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12052/" target="_blank">Dell начнёт продажи компьютеров с Linux за пределами США</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/12031/" target="_blank">Телефон от Openmoko уже можно заказать: Neo1973</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11873/" target="_blank">Вышел Slackware 12.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11871/" target="_blank">Windows-программисты начинают разрабатывать софт для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11714/" target="_blank">Palm OS на базе Linux появится не раньше 2008 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11506/" target="_blank">Google Desktop for Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11343/" target="_blank">Компьютер с Linux в USB-брелоке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11298/" target="_blank">Релиз ALT Linux 4.0.1 Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11241/" target="_blank">Мicrosoft распространяло Ubuntu через Windows Marketplace</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11232/" target="_blank">Linux XP Professional Edition</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11140/" target="_blank">Linux Mint, или то, чего не хватает в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31125/" target="_blank">ZFS на Linux: она жива!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/11067/" target="_blank">Демонстрация Ubuntu 6.10 with XGL & Kiba-Dock</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31119/" target="_blank">Экономия энергии в Linux на платформе Intel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/10987/" target="_blank">Где хороший Mysql Explorer под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/10976/" target="_blank">Linux для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/10836/" target="_blank">Skype 1.4.0.74 Beta for Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/35011/" target="_blank">Ваша домашняя «рабочая среда»?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9670/" target="_blank">THE Ubuntu Community Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9663/" target="_blank">Ubuntu 7.10 (Gutsy Gibbon) приближается.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9605/" target="_blank">Webilder, красивые backgrounds.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9463/" target="_blank">проприетарное vs. свободное</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9454/" target="_blank">Xandros заключила партнёрское соглашение с Microsoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9291/" target="_blank">Ну и где купить ноутбук с Linux? Ответы 13 фирм-производителей.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9274/" target="_blank">Шифрование (K)Ubuntu для домашнего и бизнес применения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9238/" target="_blank">Fedora 7 «Moonshine»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9052/" target="_blank">Mandriva открывает представительство в России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/9019/" target="_blank">Опубликованные Novell документы тянут на скандал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8848/" target="_blank">Компания Dell начала продавать компьютеры с предустановленной ОС Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8397/" target="_blank">Еще один проект OLPC (One Laptop Per Child) стал реальностью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/31035/" target="_blank">Pulseaudio в Ubuntu — звук по сети (и не только)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8235/" target="_blank">Microsoft давит?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8224/" target="_blank">Ubuntu Studio вышел</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8123/" target="_blank">Релиз Gentoo 2007.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8050/" target="_blank">Линукс в школу не пойдёт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/8031/" target="_blank">KTrayer: модификация kicker-а для экономии места.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/34921/" target="_blank">Если Adobe портирует свою продукцию под Linux, вы заплатите за неё деньги?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7968/" target="_blank">Глобализация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7763/" target="_blank">Эволюция Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7611/" target="_blank">Honda и Linux подружатся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7284/" target="_blank">Семь советов после установки Ubuntu 7.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7265/" target="_blank">Сайт Ubuntu не справился с наплывом пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7230/" target="_blank">Ubuntu 7.04. Кто поставил?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7156/" target="_blank">Сегодня — выход ubuntu linux 7.04 feisty fawn и выход первого релиза Ubuntu Studio!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30992/" target="_blank">Марк Шаттлворт: «Время массовых продаж десктопов на Linux еще не пришло»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/7109/" target="_blank">Майкл Делл познакомился с пингвином Tux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6804/" target="_blank">Сегодня  выход ubuntu linux 7.04 feisty fawn!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6799/" target="_blank">Вышел CentOS 5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6736/" target="_blank">KDE и GNOME в среде Windows — это реально</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6732/" target="_blank">ShipIt и Ubuntu 7.04 — 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6471/" target="_blank">Dell. Мы просили, мы получили.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6457/" target="_blank">Ubuntu 7.04 и ShipIt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/6058/" target="_blank">Dell будет продавать ПК с предустановленной ОС Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/5551/" target="_blank">Чиним гибернацию в Убунту.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/30931/" target="_blank">Ubuntu: история успеха в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/5187/" target="_blank">На Linux обращают внимание крупные корпорации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/5183/" target="_blank">OpenOffice напрашивается в Dell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3968/" target="_blank">Опубликован черновой план выпуска KDE 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3775/" target="_blank">Вышел Wine 0.9.32</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3692/" target="_blank">Dell пояснила свою позицию по Open Source</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3621/" target="_blank">Торвальдс не любит Gnome</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3534/" target="_blank">Запись на NTFS из под GNU/Linux.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3336/" target="_blank">Кто больше всего мешает продвижению Linux в России в настоящее время?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3317/" target="_blank">Полезное дело или профанация?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3292/" target="_blank">Телевидение отказалось показывать заметку о судьбе Linux в России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3183/" target="_blank">Linux — как альтернатива Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3153/" target="_blank">С РэдХатом победят!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3148/" target="_blank">Журнал LinuxFormat выложил все номера 2006-ого года на свой сайт в формате PDF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234697/" target="_blank">Как быстро запустить добровольные распределённые вычисления на сотне машин</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235199/" target="_blank">Cubietruck. Дорожный мини сервер. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234839/" target="_blank">Состоялась конференция LVEE 2014. Итоги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234653/" target="_blank">Оптимизация Linux для desktop и игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234543/" target="_blank">РЖД и ядерщики создадут операционную систему «Синергия» на базе ОС Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233961/" target="_blank">Копирование разделов жёсткого диска средствами GNU/Linux: как обойтись загрузочной флешкой там, где раньше нужен был Акронис</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233717/" target="_blank">Делаем backup Google или паранойя по поводу санкций. Owncloud и другие открытые решения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233351/" target="_blank">Топ-10 игр и Топ-10 приложений для Ubuntu по версии репозитория UALinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233085/" target="_blank">Awesome tasklist</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233087/" target="_blank">Как подружить Surface Pro 3 и Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3136/" target="_blank">Ubuntu+Linspire</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/3046/" target="_blank">Круглый стол о судьбе Linux в России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/2882/" target="_blank">Linux Genuine Advantage</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/2695/" target="_blank">Разработчики готовы бесплатно заняться драйверами под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/2665/" target="_blank">Доля Linux на ПК — 2,5%?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/1380/" target="_blank">UbuntuStudio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/1026/" target="_blank">Лед продолжает трещать: 1С 8.1 работает на линуксе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/961/" target="_blank">Журнал LinuxFormat выложили в свободный доступ в формате PDF. Все номера за прошлый год.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/720/" target="_blank">Koala Mini — аналог Mac Mini c открытым программным обеспечением</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/576/" target="_blank">Google подарил проекту Samba 20 000$</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/497/" target="_blank">Встречаем Ubuntu 6.10.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/469/" target="_blank">Bill Gates vs. Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/339/" target="_blank">Ганс Рейзер арестован по подозрению в убийстве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307/" target="_blank">Ух то то Лебедев будет рад.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305/" target="_blank">Цели и задачи LUG как вы их понимаете.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/298/" target="_blank">Gentoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274/" target="_blank">Давайте знакомиться.</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232893/" target="_blank">Состоялся релиз бета-версии дистрибутива Elementary OS 0.3 Freya</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232827/" target="_blank">Релиз Android-x86 4.4: ставим Android на ПК без проблем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232411/" target="_blank">Зеркало обновлений ESET Nod32 (все версии)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231967/" target="_blank">Сетевая установка рабочих мест на базе Debian GNU/Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232163/" target="_blank">Скрипт создания зеркала обновлений для Eset Nod32 на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232113/" target="_blank">Переключение раскладки с помощью CapsLock в Ubuntu 14.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231653/" target="_blank">Linux Mint 17 и DLNA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231889/" target="_blank">Стартовал онлайн курс «Введение в Linux» от Linux Foundation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231375/" target="_blank">Бесплатный аналог AnyConnect VPN Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231175/" target="_blank">Шпаргалка по пробросу IP во внутреннюю сеть без моста и iptables в 4 команды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231077/" target="_blank">Превращаем GIMP в удобный редактор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230999/" target="_blank">На GOG.com появились игры для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230461/" target="_blank">VolksPC — Android и Debian одновременно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229881/" target="_blank">Вышло обновление 1.0.8.19 для SailfishOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229827/" target="_blank">Началось создание «100-процентно российской программной платформы»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229713/" target="_blank">Умный будильник на основе датчика движения или IP-камеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229501/" target="_blank">Что такое grep и с чем его едят</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229355/" target="_blank">Защищаем роутер от пользователя с помощью dd-wrt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229335/" target="_blank">Виртуалки VirtualBox на btrfs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229167/" target="_blank">Автоматическое определение подключения\отключения второго монитора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229113/" target="_blank">Сетевое хранилище данных «WD My Book Live» и его доработка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229043/" target="_blank">Вышел релиз Centos 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228641/" target="_blank">Grub 2 + VHD: установка и загрузка ОС Windows 7 Ultimate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228405/" target="_blank">Получаем уведомления от Zabbix в WhatsApp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228233/" target="_blank">Понижение рабочего напряжения процессора, или тюнинг Enhanced Intel SpeedStep</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227767/" target="_blank">Настройка OpenVPN в связке Mikrotik/Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227859/" target="_blank">Простой Ethernet-туннель на Linux в четыре-шесть команд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224487/" target="_blank">Почтовый сервер с хранением данных в PostgreSQL (окончание)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226973/" target="_blank">Живой Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226783/" target="_blank">Минпромторг заказывает разработку отечественного процессора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226527/" target="_blank">Ubuntu Phone активирована на 10 000 устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226365/" target="_blank">Мониторинг базы данных Oracle через ODBC в Zabbix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226017/" target="_blank">Домашний медиацентр (HTTP, NFS, FTP, Torrent, MiniDLNA и Firebird server) на основе Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225965/" target="_blank">Настройка работы сервера на CentOS с 2 шлюзами и балансировки между ними</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225925/" target="_blank">Civilization V со всеми дополнениями вышла для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225825/" target="_blank">Aptly — создание собственного репозитория</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225371/" target="_blank">Cubietruck. Уютный, домашний сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225157/" target="_blank">Обзор северокорейского дистрибутива Red Star 3.0. Серверная версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224987/" target="_blank">Новая жизнь старого синтезатора. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224959/" target="_blank">Лекция Ричарда Столлмана в Кишиневе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/virtuozzo/blog/315722/" target="_blank">Как мы заново собирали серверы в американском ЦОДе из России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315664/" target="_blank">Настройка Virtual Private Network на AWS EC2 c OpenVPN на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315376/" target="_blank">Уязвимость скриптов инициализации Cryptsetup в Debian: достаточно просто зажать Enter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infobox/blog/315076/" target="_blank">Пробрасываем USB–ключ в облако (Linux клиент — Linux сервер)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315086/" target="_blank">Установка PROXMOX 4.3 на Soft-RAID 10 GPT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315056/" target="_blank">Конфигурация Salt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315054/" target="_blank">Установка salt-master, salt-minion на RHEL / CENTOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315048/" target="_blank">Gentoo — это возможность выбора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315012/" target="_blank">Salt за 10 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/etagi/blog/315002/" target="_blank">Прокси-сервер с помощью Tor. Основа для многопоточного парсинга</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224369/" target="_blank">XCOM: Enemy Unknown портируют на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224179/" target="_blank">Dual boot ArchLinux и Windows 8 на UEFI без GRUB c помощью rEFInd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223363/" target="_blank">Мониторинг подключения USB накопителей и логирование операций с файлами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218657/" target="_blank">Почтовый сервер с хранением данных в PostgreSQL (продолжение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223399/" target="_blank">Немножко велосипедостроения под Linux или RSS-агрегатор на коленке своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223351/" target="_blank">И объял меня systemd до глубин дистрибутива моего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223319/" target="_blank">Китайское правительство по центральному ТВ призвало пользователей переходить с Windows XP на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222659/" target="_blank">RedHat блокирует российские учетные записи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221983/" target="_blank">U.S. Robotics Pilot 5000 — первый успешный КПК. Внутренности, модем, использование с современными ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221843/" target="_blank">Безопасное динамическое обновление DNS записей в Windows домене из Linux (GSS-TSIG)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221253/" target="_blank">Как нам построить маленькую радиостанцию в большой сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221271/" target="_blank">Ubuntu и старые ATI видеокарты (+ немного про BURG)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220475/" target="_blank">Анекдот о том, как я GRUB2.0 в BURG превращал или Самогон можно гнать даже из табурета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220073/" target="_blank">Zabbix + Iostat: мониторинг дисковой подсистемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219831/" target="_blank">Ubuntu 14.04 LTS (Trusty Tahr) доступна для скачивания!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219507/" target="_blank">LSI MegaRAID SAS 8208XLP в Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219345/" target="_blank">Ubuntu на смартфоне Meizu MX3 — как это выглядит? Официальное видео ubuntu-смартфона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219295/" target="_blank">Кэш на запись и DRBD: почему полезно знать подноготную</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218993/" target="_blank">Настройка Intel Galileo с нуля и до установки полной версии Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218997/" target="_blank">Внедрение СПО в общеобразовательную школу. Возможно ли?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204788/" target="_blank">Cobbler+puppet или сетевая установка Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218563/" target="_blank">bcat: просмотр вывода консольных программ в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211078/" target="_blank">Почтовый сервер с хранением данных в PostgreSQL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218329/" target="_blank">GosLinux от Федеральной Службы Судебных Приставов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218039/" target="_blank">Canonical закрывает сервис Ubuntu One</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217819/" target="_blank">Разминка для шеи в терминале</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217669/" target="_blank">TACACS+ на Linux с аутентификацией через Active Directory</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217583/" target="_blank">Патчим EDID телевизора из-под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216461/" target="_blank">Samba4 + GlusterFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216441/" target="_blank">GOG.com портирует классические игры под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216269/" target="_blank">Дистрибутив, среда, оконный менеджер Линукса дома?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216101/" target="_blank">Поднимаем VPN-туннель из мира домой в обход NAT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216177/" target="_blank">Как я сделал USB-МФУ беспроводным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216173/" target="_blank">Samba4 в роли AD + файловый сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215573/" target="_blank">Поднимаем контроллер домена на Ubuntu Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215577/" target="_blank">Strace</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215167/" target="_blank">Linux Foundation совместно с EdX начинает бесплатный курс «Введение в Linux»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214255/" target="_blank">Gentoo: настройка и подключение через /dev/loop файловой системы с компрессией на примере Reiser4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214147/" target="_blank">Новая жизнь старого синтезатора. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213519/" target="_blank">Настройка централизованного логирования с LogAnalyzer и Rsyslog</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213411/" target="_blank">Распаковка, редактирование и упаковка прошивок видеорегистраторов и IP камер из Китая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213453/" target="_blank">В Ubuntu 14.04 будет возможность вернуть главное меню приложения в окно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213285/" target="_blank">Названы первые производители смартфонов Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212763/" target="_blank">Яндекс.Диск в Linux. Пункт в меню KDE\Dolphin. Отображение состояния в conky</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212679/" target="_blank">Установка Softether vpn-сервера в chroot окружение, под zte f-660 Iconbit 1003d</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212621/" target="_blank">Поднимаем простой DAV server на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212531/" target="_blank">Работа с usb видеокамерой в Linux. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212443/" target="_blank">Мигрируем с raid1 на raid10 без потери данных в Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212449/" target="_blank">Подключение графического планшета Wacom Pro в Linux или как bash помогает художникам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212269/" target="_blank">Переводим работающую систему Debian 7 на софтовый raid1/10 на примере хостинга от Leaseweb</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212259/" target="_blank">Накладываем себе гипс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211917/" target="_blank">Бэкап данных с btrfs и LVM bash скриптами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211759/" target="_blank">Установка программного обеспечения из исходников под МГТС роутер ZTE F-660 в chroot окружении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211755/" target="_blank">Bacula: для тех кому надо по-быстрому и в картинках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211608/" target="_blank">Работа с usb видеокамерой в Linux. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137938/" target="_blank">Создание надёжного хранилища раздаваемого нескольким серверам по nfs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211174/" target="_blank">OpenWrt + VPNclient для роутера с 4mb ROM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211090/" target="_blank">Mageia 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210426/" target="_blank">Удобное переключение wifi в режим точки доступа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210924/" target="_blank">Северокорейский Red Star OS идет к Макам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203502/" target="_blank">Установка Ansible AWX на Debian 7.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210786/" target="_blank">Вышел Linux-дистрибутив ROSA Desktop Fresh GNOME R2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210572/" target="_blank">Почему я сменил место работы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209540/" target="_blank">Зачем вам вводить пароль в sudo?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209516/" target="_blank">Netavis Observer — ПО IP-видеонаблюдения на базе Linux. Установка, настройка и небольшой взлом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202378/" target="_blank">Крайне простой способ создать мультизагрузочную флешку под Debian/Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208814/" target="_blank">Принтер HP Designjet T120 и Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208412/" target="_blank">CentOS объединяет усилия с Red Hat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208114/" target="_blank">Пляски с бубном в новогоднюю ночь или вторая жизнь старых машин</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129097/" target="_blank">Iodine: DNS туннель через закрытый WiFi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207584/" target="_blank">Удаленная установка Fedora/CentOS в headless-режиме без носителей и TFTP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207138/" target="_blank">Школьный звонок на Raspberry Pi с удаленным управлением</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207174/" target="_blank">Canonical выпустила превью Ubuntu Touch dual boot для смартфонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207100/" target="_blank">Ставим Ubuntu на MacBook pro 11.3 (2013) или хакинтош наоборот</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207030/" target="_blank">Dive into Litecoin, или как начать майнить scrypt валюту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206782/" target="_blank">Новогодняя малина — прикручиваем экран HD44780 к Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206692/" target="_blank">Поздравление по гиковски, без написания дров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206518/" target="_blank">Установка Sailfish OS на Nokia N9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206148/" target="_blank">Создание собственных драйверов под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206122/" target="_blank">Дешевая USB кнопка для PC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206098/" target="_blank">Устанавливаем SteamOS на виртуальную машину</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206072/" target="_blank">После обновления демон Bittorrent Sync больше не работает от имени root пользователя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206038/" target="_blank">SteamOS доступна для загрузки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205652/" target="_blank">«Hi-end» смартфоны с Ubuntu Touch появятся в 2014 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205460/" target="_blank">Настройка интернет шлюза для небольшого офиса CentOS, Iptables, NAT, Squid Transparent, Sarg</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205326/" target="_blank">Антивирусное сканирование по доступу на Samba</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203162/" target="_blank">Как я делал идеальный медиапроигрыватель из Apple TV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204478/" target="_blank">Мониторинг температуры гермозоны с помощью 1-wire датчиков и Zabbix 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204306/" target="_blank">Управление правами доступа к WMI через Puppet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202380/" target="_blank">Linux Mint 16 «Petra»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204160/" target="_blank">Как облегчить установку .apk на Android или GUI для adb install</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203972/" target="_blank">Универсальный способ быстро сделать скриншот в linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203488/" target="_blank">Десктоп в домашнем сервере или «всё-в-одном»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203652/" target="_blank">Проблема одновременного использование kernel raid autodetect для / на /dev/md0 и superblock v1.2 для других /dev/md, или как можно уронить (и поднять) сервер после его обновления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203504/" target="_blank">Как я вешал горячие клавиши на Unity sound indicator</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203376/" target="_blank">Домашний сервер «всё-в-одном» — success story</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203028/" target="_blank">Организация контентной фильтрации в образовательных учреждениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202876/" target="_blank">Обновляем Nexus 4 до Android 4.4 в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202610/" target="_blank">Выпущен Linux Mint 16 RC «Petra»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202348/" target="_blank">Скрипты для управления виртуальными хостами на веб-сервере Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314918/" target="_blank">Squid с фильтрацией HTTPS без подмены сертификата, интеграция с Active Directory 2012R2 + WPAD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314718/" target="_blank">«Прозрачный» Squid с разграничением доступа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314412/" target="_blank">Настройка UEFI-загрузчика. Самое краткое руководство в мире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/314166/" target="_blank">Нет – взломам серверов! Советы по проверке и защите</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313730/" target="_blank">Проблемы с установкой начального загрузчика на флеш-накопитель</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313636/" target="_blank">Принт-сервер на linux с интеграцией в AD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/virtuozzo/blog/313614/" target="_blank">Docker: когда нужно размещать контейнер на виртуальной машине?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310144/" target="_blank">Поднимаем Owncloud с нуля с динамическим IP и Let's Encrypt. Тысяча слонов!*</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313144/" target="_blank">QEMU/KVM и установка Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312926/" target="_blank">Запускаем i2pd в контейнере Docker на CentOS 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202334/" target="_blank">Система наблюдения в автомобиле за ним же на Raspberry Pi. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201944/" target="_blank">Сравнение bcache и btier</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202056/" target="_blank">Я перешел на Ubuntu и не… жалею?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201694/" target="_blank">Сравнение производительности различных систем шифрования под linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201814/" target="_blank">Внедрение корпоративного Linux в ПриватБанке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201688/" target="_blank">Автозапуск Яндекс.Диска как службы systemd в Fedora 19</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201448/" target="_blank">ID Software отказываются от поддержки quakelive в mac и linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201410/" target="_blank">В чем прелесть Gentoo: Мифы и реальность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201034/" target="_blank">Очередной mp3-box из mpd и raspberry</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201332/" target="_blank">Легкая печать с мобильных устройств или AirPrint без AirPrint</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186098/" target="_blank">Стоит ли ставить Gentoo ради ускорения?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200618/" target="_blank">Открылся репозиторий Red Hat Software Collections который можно использовать в Centos</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200464/" target="_blank">Сравнение носителей SATA, SAS, SSD и RAID-массивов с ними</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143383/" target="_blank">Бэкап большого количества мелких файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200348/" target="_blank">pacemaker: как добить лежачего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192164/" target="_blank">Практика IPv6 — домашняя сеть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199478/" target="_blank">Переключения между провайдерами интернета на Debian 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199442/" target="_blank">Как Ubuntu помогает сохранить ваш бизнес. Практика внедренца</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199388/" target="_blank">Производительность Ubuntu в играх практически сравнялась с Windows 8.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199040/" target="_blank">Сами себе туннельный брокер IPv6 с помощью openvpn и 6to4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197862/" target="_blank">MarsBoard. Debian. Роутер. HOWTO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198526/" target="_blank">GeeXboX полностью портирован на Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198492/" target="_blank">Домашний «облачный» сервер на 10 Ватт? Вполне!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198490/" target="_blank">День рождения Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198108/" target="_blank">ICMP port knocking в OpenWRT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198170/" target="_blank">Новый эсминец ВМС США работает под управлением Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198110/" target="_blank">Устанавка pyload в качестве standalone качалки для ReadyNAS DUO v2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198020/" target="_blank">Финальный релиз Ubuntu 13.10 «Saucy Salamander»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197746/" target="_blank">Установка DBforBix для Zabbix под Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197824/" target="_blank">Вышел новый выпуск журнала UserAndLINUX 10/2013</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197438/" target="_blank">Linux Kernel EFI Boot Stub или «Сам себе загрузчик»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197302/" target="_blank">Как настроить Firewall для VPN-а на сервере с двумя IP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197216/" target="_blank">PicUntu 4.5 installer: легкий способ установить Ubuntu на устройства с Rockchip RK3188</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197138/" target="_blank">Lenovo Thinkpad Tablet 2 и моя неудачная попытка установить Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196922/" target="_blank">Как дешево напечатать книгу в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196926/" target="_blank">Загрузка ОС Linux без загрузчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196384/" target="_blank">Эпопея о WD My Book Live, или «девайс-конфетка» с «печеньками»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196020/" target="_blank">История успеха Open Source во Франции: общая стоимость владения компьютерным парком национальной жандармерии упала на 40%</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195592/" target="_blank">Запуск и использование OpenWrt в VirtualBox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195578/" target="_blank">GNOME Shell Extensions</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195458/" target="_blank">Распределенный музыкальный плейер на Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195394/" target="_blank">Встречайте GNOME 3.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195152/" target="_blank">Linux pipes tips & tricks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195042/" target="_blank">Компания NVIDIA передала часть документации по видеокартам команде nouveau</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194970/" target="_blank">Масштабируемый отказоустойчивый файловый сервис на базе CTDB, GlusterFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194750/" target="_blank">Другой tacacs+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194588/" target="_blank">Настройка e-mu 0204 usb в ubuntu GNU/linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194546/" target="_blank">Photoshop в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194500/" target="_blank">Ubuntu Touch выйдет 17 октября</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194346/" target="_blank">Linux Malware Detect — антивирус для веб-серверов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194274/" target="_blank">FQ_CoDel — планировщик пакетов, который сделает все за вас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193390/" target="_blank">MarsBoard — скромный клон RPi. Ставим и настраиваем систему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193220/" target="_blank">Я построю свой почтовый сервер с Postfix и Dovecot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193084/" target="_blank">Девять признаков сурового администратора Unix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192848/" target="_blank">Подключаем «Электронное правительство» в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192588/" target="_blank">Мини-ПК под Linux за 45 долларов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192508/" target="_blank">Экономия на спичках, или Неуловимый Джо возвращается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192386/" target="_blank">Aria2C + OpenWRT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192188/" target="_blank">Raspisco — удалённый доступ к Cisco через Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191990/" target="_blank">OpenWRT, или Что еще можно сделать со своим роутером</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191854/" target="_blank">Raspberry Pi в руках дилетанта или домашняя торрент-качалка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191374/" target="_blank">Linux Kernel исполнилось 22 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191150/" target="_blank">GNUstep собирает средства на реализацию полной совместимости с Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191082/" target="_blank">Кампания по сбору средств на Ubuntu Edge завершилась</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191072/" target="_blank">Jolla: предзаказ окончен, дизайн обновлен</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190852/" target="_blank">ROSA Media Player в Ubuntu. Собираем из исходников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190828/" target="_blank">Пишем музыку в Linux. Софт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190540/" target="_blank">Hardkernel ODROID-XU миникомпьютер на Exynos5 Octa (big.LITTLE Cortex-A15). Личные впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190318/" target="_blank">Проекту Debian 20 лет!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189966/" target="_blank">Как я познакомил мышь DNS Extreme M-1 c Xubuntu 12.04.2 LTS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189704/" target="_blank">Релиз elementary OS «Luna»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188886/" target="_blank">Раздача интернета с 3G модема в локальную сеть в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189564/" target="_blank">Устанавливаем любой Linux дистрибутив на Digital Ocean</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189466/" target="_blank">Canonical снижает цену на Ubuntu Edge до 695$ до конца кампании</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189380/" target="_blank">Проект Ubuntu Edge получил 80 тысяч долларов от Bloomberg, но этого недостаточно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189234/" target="_blank">Анонсирован ноутбук на солнечных батареях с временем работы около 10 часов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189074/" target="_blank">Учим xrdp подключаться к прошлым сессиям</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188272/" target="_blank">Хотите Chromebook Pixel by Asus со встроенной Yota 4G?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188274/" target="_blank">Беспроводная точка доступа, используя Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188702/" target="_blank">Удобный веб сервер на Virtualbox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188108/" target="_blank">Статьи про переносной сервер на Linux для новичков — нужны ли?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187806/" target="_blank">Canonical временно снизила цены на предзаказ Ubuntu Edge</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187480/" target="_blank">32 миллионный краудфандинг от Canonical на производство нового смартфона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187168/" target="_blank">Оптимизация сканирования в небольшом офисе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187236/" target="_blank">Замена Dropbox на BitTorrent Sync + Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186884/" target="_blank">В Wine добавили нативную поддержку Direct3D 9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186764/" target="_blank">Linux 3.11 официально назван «Linux For Workgroups»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186582/" target="_blank">Будущее русского Gentoo Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186022/" target="_blank">Об организации сетевого рабочего пространства в малой сети на уровне виртуальных серверов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185944/" target="_blank">Final Term: новый взгляд на терминал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185584/" target="_blank">Fedora 19 кот Шрёдингера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185336/" target="_blank">ksuperkey — открытие меню KDE Kickoff по кнопке Win key (Super) в Ubuntu, Kubuntu и других версиях Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185178/" target="_blank">Вышло ядро Linux 3.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184940/" target="_blank">Переделывание D-Link DIR-320 в 3G роутер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184886/" target="_blank">Более 11 000 пользователей подписали петицию для Google — просят выпустить Linux-клиент Google Drive</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184702/" target="_blank">Некоторые наблюдения и советы по использованию Bittorrent Sync для синхронизации резервных копий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184396/" target="_blank">Про Linux — для любознательных Windows-пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184452/" target="_blank">Власти Мюнхена будут раздавать диски с Linux для жителей, которые пользуются Windows XP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183982/" target="_blank">Перевод и объединение нескольких разделов виртуальной машины на LVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183714/" target="_blank">Linux From Scratch, не вдаваясь в детали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312900/" target="_blank">Multiseat на компьютере с ОС Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312710/" target="_blank">Netstat, где мои дейтаграммы?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312778/" target="_blank">OpenShift v 3 III. OpenShift Origin 1.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/312556/" target="_blank">Методы удаленного доступа к Linux GUI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312228/" target="_blank">Установка принтеров Canon серии LBP в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/netangels/blog/312174/" target="_blank">Autoscaling — инструмент автоматического вертикального масштабирования ресурсов (CPU|RAM|HDD)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311462/" target="_blank">FreeType 2.7 — превосходное качество шрифтов Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311268/" target="_blank">[systemd/udev] ppp: корректный автостарт system‐wide демона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/selectel/blog/311120/" target="_blank">Виртуальное приватное облако: подготовка образов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/oleg-bunin/blog/310848/" target="_blank">Современная операционная система: что надо знать разработчику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183626/" target="_blank">Удобная торрентокачалка с управлением через web и android для выделенного сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183560/" target="_blank">Беседа Линуса Торвальдса со студентами университета Аалто (23.10.2012)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183316/" target="_blank">Особенности получения пакетов через raw socket в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183230/" target="_blank">Как я писал LZ4 плагин компрессии для Reiser4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183202/" target="_blank">Массовая рассылка из консоли с помощью mutt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183172/" target="_blank">Скачиваем Youtube плейлист в формате mp3 одним bash-скриптом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182786/" target="_blank">Установка любого клона Red Hat Enterprise Linux не используя стандартный инсталлятор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182528/" target="_blank">Ubuntu Phone уже поддерживает интернет-подключение, социальные приложения, звонки и многое другое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182372/" target="_blank">Ускоряем базу данных. Bcache</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181934/" target="_blank">Приводим иконки Скайпа к общему стилю системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181930/" target="_blank">Cambot — робот-фотограф на Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181728/" target="_blank">Распределенный аудиоплеер на Odroid U2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181790/" target="_blank">Как за неделю подружить gma3600 (intel cedar trail) и linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181486/" target="_blank">Установка Debian Wheezy на Buffalo Linkstation Pro</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178925/" target="_blank">Linux Mint 15 «Olivia»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181293/" target="_blank">Debian Armel на Nokia N9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181247/" target="_blank">Создание LXC-контейнеров с общей файловой базой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181103/" target="_blank">Вариант управления компьютером на Windows из-под консоли Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180663/" target="_blank">Дистрибутив Fedora Linux для Raspberry PI теперь…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180505/" target="_blank">Изучаем принципы взаимодействия Ubuntu Touch и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180295/" target="_blank">Небольшой эксперимент сетевой независимости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180211/" target="_blank">Вышла Mageia 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180027/" target="_blank">Вычисление арифметических выражений в текстовом редакторе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179837/" target="_blank">Продолжаем удалять. [Re: Работа с «плохими» файлами в командной строке в Linux]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179821/" target="_blank">CentOS 6.4 + ReiserFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179761/" target="_blank">Host Protected Area или Где мое место?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179751/" target="_blank">В убунту может появиться новый упрощенный формат сборки пакетов и новый установщик</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179649/" target="_blank">3 ОС на одном Nokia N9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179597/" target="_blank">Работа с «плохими» файлами в командной строке в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178139/" target="_blank">Bash: 2 способа логгирования запуска пользовательских приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179323/" target="_blank">DLink DNS-325 – подключаем через WebDav облачные хранилища</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179419/" target="_blank">Команда Ubuntu Touch надеется представить пререлизы своей ОС, пригодные для ежедневного использования, к концу мая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179279/" target="_blank">Intel/AMD Switchable graphics [Ubuntu 12.04 — 12.10]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179237/" target="_blank">Ноутбук общего пользования с ограничением времени сеанса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145073/" target="_blank">*nix-way: Даже если тебя съели, у тебя есть как минимум два выхода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179065/" target="_blank">Вышла вторая бета elementary OS Luna</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178679/" target="_blank">В полку игр от Valve прибыло: Portal и Left 4 Dead 2 выпущены в статусе Beta!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178181/" target="_blank">Новый образ NemoMobile с UI MeeGo Harmattan</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178141/" target="_blank">Команда sponge: «губка» для стандартного ввода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177897/" target="_blank">Вышла Ubuntu 13.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177887/" target="_blank">Новый BeagleBone Black доступен для заказа, всего за 45$</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177647/" target="_blank">Установка usbip на ubuntu 12.04 server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177425/" target="_blank">Самый медленный компьютер на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177167/" target="_blank">В новых билдах Ubuntu Touch preview вскоре появятся первые приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176823/" target="_blank">Запуск Windows под Linux KVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176369/" target="_blank">Настраиваем RAID1+LVM (для снапшотов файловой системы) в Hetzner и ServerLoft</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176307/" target="_blank">Самодельный бот с камерой и управлением по wifi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176111/" target="_blank">Почтовый сервер на базе ROSA. Первые дни испытаний. Все ли так просто?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175899/" target="_blank">Скрипт получения информации с удаленных unix-like серверов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175743/" target="_blank">Нативное решение проблемы с дисками WD в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175697/" target="_blank">Alienware выпускает игровые ПК с Ubuntu на борту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175693/" target="_blank">Jolla выпустила SDK SailfishOS для MасOS и Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175653/" target="_blank">Кластер высокой доступности на Red Hat Cluster Suite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175633/" target="_blank">Версионность конфигураций серверов на базе debian/ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175269/" target="_blank">Online трансляция Red Hat Tour 2013</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175249/" target="_blank">Огромный турбо-дизельный гексапод Mantis</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175191/" target="_blank">Valve начинает публиковать пакеты своего дистрибутива Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173157/" target="_blank">Программирование Arduino из консоли, gentoo-way, ничего лишнего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173041/" target="_blank">Sieve: фильтрация почты на стороне сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169845/" target="_blank">Кеширование данных на SSD с помощью EnhanceIO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172895/" target="_blank">Миниатюрные платы Odroid U2 и Odroid X2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172765/" target="_blank">Linux 3.8 Local Root Vulnerability</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172629/" target="_blank">Вышел openSUSE 12.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172215/" target="_blank">Программирование Arduino из Linux, gentoo-way, быстрый старт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171875/" target="_blank">Debian Linux портируют на Samsung Galaxy Note 10.1 (с поддержкой стилуса)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171457/" target="_blank">Новые билды Ubuntu Touch теперь выкладываются каждый день</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171419/" target="_blank">Просмотр DVD-дисков под Linux является незаконным в США</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171165/" target="_blank">Canonical всерьез задумались об отказе от полугодовых релизов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171033/" target="_blank">История операционной системы GNU, или что случилось с Hurd?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170843/" target="_blank">Энтузиасты портировали Ubuntu для 24 смартфонов и планшетных ПК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167479/" target="_blank">Pocketsphinx. Распознавание речи и голосовое управление в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170407/" target="_blank">Развенчание мифов об x32 ABI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170419/" target="_blank">Ubuntu Touch портирован на Galaxy S III + инструкция от Canonical для других устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170235/" target="_blank">Автоматическая настройка Icecast2 и mpd на несколько аудио потоков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169893/" target="_blank">ATI+Fedora17 и желание посмотреть фильмы в хорошем качестве с привычной скоростью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170003/" target="_blank">Обзор ожидаемых возможностей Ubuntu tablet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169877/" target="_blank">Настройка сервера аутентификации посредством связки Kerberos+LDAP на базе ROSA Enterprise Linux Server</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/77502/" target="_blank">SystemTap в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169819/" target="_blank">Автоматическая блокировка экрана в GNU/Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169603/" target="_blank">Ubuntu Phone можно будет загрузить на следующей неделе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169463/" target="_blank">Настраиваем IPSec VPN сервер через strongSwan и On-Demand на iOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169251/" target="_blank">Бездисковая загрузка с использованием PXE и iSCSI на примере Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169193/" target="_blank">Как за одну минуту восстановить текст после неудачной отправки веб-формы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169127/" target="_blank">Простой домен на базе ROSA Enterprise Linux Server и Samba 3 с поддержкой перемещаемых профилей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169075/" target="_blank">На планшет Surface Pro от Microsoft поставили Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169003/" target="_blank">Планшет в качестве второго экрана под linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168711/" target="_blank">Меряем производительность накопителей или снова про IOPS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168687/" target="_blank">LibreOffice 4.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168635/" target="_blank">Развёртывание репозиториев Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168625/" target="_blank">Опрос по Октябрьскому релизу Ubuntu Phone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168515/" target="_blank">Squid3 в режиме SSLBump с динамической генерацией сертификатов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168617/" target="_blank">Ubuntu Phone можно будет купить в октябре 2013 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168577/" target="_blank">Microsoft собирается выпустить Office для Linux в 2014 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168407/" target="_blank">TCP Congestion Control или Почему скорость прыгает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168433/" target="_blank">Counter-Strike: Source вышел под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146356/" target="_blank">IMDb, GrooveShark, eBay и многое другое в поиске Unity в Ubuntu 13.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168189/" target="_blank">Менеджер лицензий для 1C в виртуальной среде + мониторинг в Zabbix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168183/" target="_blank">Почтовый сервер на базе ROSA Server Enterpise Linux за несколько минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167915/" target="_blank">Вышла новая версия скробблера для last.fm, добавлена поддержка Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167367/" target="_blank">Развёртывание DNS/DDNS и DHCP сервера на ROSA Enterpise Linux Server за несколько минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310646/" target="_blank">Запуск отдельных приложений через OpenVPN без контейнеров и виртуализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310242/" target="_blank">Шейпер для Linux в пользовательском пространстве (NFQUEUE-based)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309628/" target="_blank">Скрипт для тех, кому лень разбираться в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309386/" target="_blank">OSPF (Quagga), Shorewall и Policy Routing: проблема inactive route</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309124/" target="_blank">LXC на службе QoS (заменяем ifb на veth)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruvds/blog/309010/" target="_blank">Преимущества systemd-networkd на виртуальных серверах Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308140/" target="_blank">Автор сurl просит Microsoft удалить алиасы curl и wget из PowerShell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308076/" target="_blank">Microsoft открыла исходный код PowerShell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308028/" target="_blank">0day уязвимости в lshell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308032/" target="_blank">Используем Secure Boot в Linux на всю катушку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167199/" target="_blank">Counter-Strike 1.6 доступен для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166779/" target="_blank">Canonical может отказаться от полугодового цикла релизов Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166375/" target="_blank">И снова о… LAMP и базово защищённый мини-хостинг своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166671/" target="_blank">Как я ставил Red5 на CentOS и ни один мануал не мог мне помочь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166543/" target="_blank">Релиз fuse-exfat 1.0.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166339/" target="_blank">Вышел новый релиз CRUX 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166055/" target="_blank">PicUntu: Ubuntu для мини-ПК на основе Rockchip RK3066</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165897/" target="_blank">Подмена DSDT через GRUB2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165855/" target="_blank">Профилирование нагрузки на файловую систему с помощью iostat и gnuplot — заметки дилетанта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165575/" target="_blank">Загрузка GNU/Linux без стороннего загрузчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165625/" target="_blank">Меню запуска приложений в KDE4 и Gnome2 по клавише Super</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165525/" target="_blank">Обновляем iPhone через Linux сохранив данные и нервы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165401/" target="_blank">Управляем вентилятором ноутбука через DSDT в Linux и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165385/" target="_blank">Linux :: два, три, пять… указателей мыши</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165341/" target="_blank">На CES 2013 показан Samsung Galaxy Nexus с Ubuntu Phone OS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165317/" target="_blank">Безопасный «ctrl+v» в терминале</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165119/" target="_blank">Запись интернет-радио из консоли Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164967/" target="_blank">Blizzard планирует выпустить игру для Linux в этом году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164929/" target="_blank">Сколько вы пожертвовали при загрузке Ubuntu 12.10?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164865/" target="_blank">Создание зашифрованной USB флешки с OC Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164635/" target="_blank">Миникомпьютер из роутера с OpenWRT: пишем драйвер фреймбуфера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164775/" target="_blank">Слежение за изменениями в директории: как это делается в разных ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164661/" target="_blank">Выигрываем ценные призы с exim и mail piping</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164577/" target="_blank">Аносирована Ubuntu для телефонов, первые устройства появятся в начале 2014 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163861/" target="_blank">Миникомпьютер из роутера с OpenWRT: пишем USB class-driver под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164415/" target="_blank">Еще немного о Zabbix’е – настраиваем ICQ уведомления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164147/" target="_blank">Бездисковая загрузка по сети и жизнь после нее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163967/" target="_blank">Создание гостевого доступа в Интернет с Web-аутентификацией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163969/" target="_blank">Организация High-Load cluster с несколькими нодами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163891/" target="_blank">Открыт каталог приложений для Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163771/" target="_blank">Используем Webex в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163689/" target="_blank">Миникомпьютер из роутера с OpenWRT: разрабатываем USB-видеокарту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163051/" target="_blank">Ninite. Облегчаем жизнь начинающему админу-эникейщику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162431/" target="_blank">Google ARM Chromebook: HOWTO Install Ubuntu/Fedora/openSUSE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162447/" target="_blank">Ключ от всех дверей в непрерывной интеграции — rundeck</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162425/" target="_blank">Из ядра Linux уберут поддержку процессоров 386SX/DX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162339/" target="_blank">zsh и bash: что выбрать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162087/" target="_blank">Collectd — Следим за системой с минимальными затратами. Настройка и использование нотификаций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161999/" target="_blank">256 цветов в терминале ⇒ уровень nightmare</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161321/" target="_blank">Появилась совместимая с Rockchip RK3066 версия Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161107/" target="_blank">Демонстрация регионального компонента ЕГИСЗ от КИР/РТК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160983/" target="_blank">Компания PengPod выпустит в январе dualboot Linux/Android-планшеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160959/" target="_blank">Dell выпустил для разработчиков ультрабук с Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160251/" target="_blank">Квадрокоптер дополненной реальности — обзор AR.Drone 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160691/" target="_blank">«Отказоустойчивая» система на базе Ubuntu и btrfs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160609/" target="_blank">Open Build Service — создаём свои репозитории</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160579/" target="_blank">Централизованная система обновления пакетов в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160355/" target="_blank">GPL панель управления сервером Vesta</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160285/" target="_blank">Обзор Hackberry — одноплатного компьютера от Miniand</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160237/" target="_blank">Большое файловое хранилище для маленькой такой компании</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159987/" target="_blank">Пишем консольный будильник на BASH-е</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159953/" target="_blank">Виртуальное прототипирование в Linux на примерах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159739/" target="_blank">Linux Mint 14 Nadia</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159409/" target="_blank">Компания System76 выпустила геймерский ноутбук c Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158555/" target="_blank">Light — продвинутый светильник с Linux на борту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158523/" target="_blank">Автоматизация начальной настройки веб-сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158447/" target="_blank">Настройка tv тюнера Beholder 609 на linux Mint 13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158195/" target="_blank">Canonical выкладывает новые билды Ubuntu 13.04 Raring Ringtail каждый день</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158149/" target="_blank">Вышел Linux Deploy 1.2.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157613/" target="_blank">Так как же удалить миллионы файлов из одной папки?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157645/" target="_blank">Steam под Linux: началось закрытое бета-тестирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157401/" target="_blank">Комбинированная балансировка нагрузки интернет-каналов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157167/" target="_blank">Ещё одна операционная система, работающая на Chromebook — Fedora</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157029/" target="_blank">GlusterFS, опыт новой версии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157019/" target="_blank">Samba4, Radius и PPTP с использованием MS-CHAP v2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156989/" target="_blank">Удаленное разблокирование томов зашифрованных luks в CentOS6 через ssh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156807/" target="_blank">Удобное копирование бумажных документов в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156801/" target="_blank">ARM ChrUbuntu 12.04 Alpha — портируем Ubuntu на Samsung Chromebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156779/" target="_blank">Однозначный переключатель раскладки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156641/" target="_blank">CrossOver бесплатно на год!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156591/" target="_blank">Интернет-радиостанция на Liquidsoap + IceCast</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155321/" target="_blank">Настройка SMS уведомлений в zabbix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156081/" target="_blank">Huawei MediaPad 10 FHD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156367/" target="_blank">Открыт сбор заявок на участие в бета-тестировании Steam для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156363/" target="_blank">Canonical представила инсталлер Ubuntu для Nexus 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156151/" target="_blank">Идея будильника, или как объединить для этого книжку, CD-ROM, фен, старую нокию и немного shell'a?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156141/" target="_blank">Canonical наняла создателя Faenza для работы над новыми иконками Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156059/" target="_blank">Настройка синхронизации двух почтовиков iRedMail на двух каналах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141970/" target="_blank">Подводные камни shell скриптинга</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155885/" target="_blank">Новая файловая система для Flash-накопителей от Samsung и сравнение производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155555/" target="_blank">Перенос сайта(ов) без простоя и потери данных между выделенными серверами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155749/" target="_blank">На Chromebook от Samsung можно запустить Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155735/" target="_blank">Как установить 1С Предприятие 8.2 (релиз 8.2.16.368 от 05.10.12) на линукс CentOS 6.3 (статья, HowTo)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155645/" target="_blank">Находим код системного вызова mkdir</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155557/" target="_blank">Тачку на прокачку — настраиваем и расширяем возможности D-Link DNS-325</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155527/" target="_blank">Canonical пробует перенести Ubuntu Linux на планшетные ПК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155465/" target="_blank">Простой способ создать Unity Lens для Ubuntu (перевод)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155375/" target="_blank">Стрим с mpd на смартфон или вся музыкальная коллекция в кармане</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155209/" target="_blank">Ubuntu 13.04 Raring Ringtail: Нетерпеливый Лемур стремится на мобильные платформы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151141/" target="_blank">Ubuntu 12.10 Quantal Quetzal (Квантовый Кетцаль/Квезаль)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155171/" target="_blank">В Оренбургской области заблокирована Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154947/" target="_blank">Декодирование ipsec в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154641/" target="_blank">Ваш взгляд на жизненный цикл Ubuntu на десктопе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154507/" target="_blank">Linux Foundation выпустит загрузчик для обхода ограничений UEFI Secure Boot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154235/" target="_blank">Как правильно мерять производительность диска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154403/" target="_blank">Теперь разработчиков Ubuntu можно поблагодарить финансово</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153989/" target="_blank">Приложения для MeeGo Harmattan: Nokia N9, N950</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154315/" target="_blank">Глубокий обзор свежеиспеченного Linux 3.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154071/" target="_blank">Дуалбут Windows 7 и Debian Squeeze на компьютере с UEFI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153785/" target="_blank">Функциональное программирование в шелле на примере xargs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307208/" target="_blank">Debian Linux и Tor за безопасный deb</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/veeam/blog/307758/" target="_blank">Восстановление из резервной копии с помощью Veeam Agent for Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307528/" target="_blank">Анализ NetFlow v.9 Cisco ASA с помощью Logstash (ELK)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307414/" target="_blank">Раскладка клавиатуры в Q4OS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307338/" target="_blank">Настройка wifi авторизации через sms под ubuntu 16.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306886/" target="_blank">Укрощаем пыл Plex на ARM устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306760/" target="_blank">Обновление UEFI/BIOS в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306606/" target="_blank">Full Disk Encryption (FDE)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306382/" target="_blank">Настройка ssh callback на сервере в связке с Ansible</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306128/" target="_blank">Настройка Nginx с Let's Encrypt на CentOS 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153611/" target="_blank">Raspberry Pi. Передача видео для дистанционного управления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153615/" target="_blank">Nokia, План Б (дубль 2)?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153461/" target="_blank">ZFS on Linux — не все так просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152853/" target="_blank">zfsonlinux — легко и просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152805/" target="_blank">Вышел первый стабильный релиз GStreamer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150243/" target="_blank">Релиз Slackware 14.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152249/" target="_blank">Мобильная версия ruTorrent</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152597/" target="_blank">Перезагружаемся в другую ОС без рукоприкладства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152397/" target="_blank">Udpxy на сервере провайдера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152227/" target="_blank">Jolla готовит анонс MeeGo-смартфона в конце года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152219/" target="_blank">Вспоминаем ретро Spectrum ZX с помощью ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152082/" target="_blank">В Ubuntu 12.10 появится реклама и музыкальный магазин</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152024/" target="_blank">Централизованный сбор логов с консолей сетевого оборудования по ssh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151953/" target="_blank">Open webOS портирована на микрокомпьютер Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151904/" target="_blank">OpenDKIM + Postfix = просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151839/" target="_blank">Raspberry Pi теперь можно официально разогнать до 1 ГГц и не потерять гарантию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151698/" target="_blank">Простой смс-бот на shell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151684/" target="_blank">Очередь тяжелых заданий на bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151612/" target="_blank">DNS сервер на локальном интерфейсе или простой путь к любви между программистами и администраторами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151516/" target="_blank">Clover Trail не будет работать под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151405/" target="_blank">Управляемый через web репозиторий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151268/" target="_blank">Flashcache: первый опыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150930/" target="_blank">Unix как IDE: Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150759/" target="_blank">Пример использования макросов в редакторе mcedit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150830/" target="_blank">Как правильно скопировать файлы и папки исключая некоторые из них</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150813/" target="_blank">Как в linux консоли скопировать файлы и папки исключая некоторые из них по регулярному выражению</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150792/" target="_blank">Чего 5 сентября ждать от Nokia</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150722/" target="_blank">Что убило Linux Desktop (версия Miguel de Icaza)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150708/" target="_blank">MIMB – Мульти-установочная и мульти-загрузочная флэшка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150698/" target="_blank">Релиз Ubuntu 12.04.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150652/" target="_blank">Windows 8 — произведение искусства. Но это не Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150533/" target="_blank">Школьный учитель бесплатно собрал компьютерный класс из 70 Linux-ПК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150271/" target="_blank">Двухфакторная Авторизация на Linux сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/105219/" target="_blank">Кнопка для поворота экрана на X220 tablet</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150221/" target="_blank">Прозрачное проксирование или как подружить Cisco и Squid</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150185/" target="_blank">Си-подобный текстовый процессор AWK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150004/" target="_blank">«Войны в свободное время 2» или CS сервер + статистика в офисе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150131/" target="_blank">Шпаргалка начинающего Debian/Ubuntu администратора по управлению пакетами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145726/" target="_blank">Установка драйвера D-Link DWA-125 A3 в Debian Squeeze</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150100/" target="_blank">Тайловый оконный менеджер i3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149994/" target="_blank">Классный оконный менеджер — Awesome WM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149982/" target="_blank">Абсолютно бесплатный хостинг для Ваших проектов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149963/" target="_blank">Тишина должна быть! или убираем щелчки в Ubuntu, когда ничего не играет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149494/" target="_blank">Взгляд рядового программиста на вектор изменения оболочек и что делать дальше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149947/" target="_blank">«Войны в свободное время» или BF2 сервер + статистика в офисе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149913/" target="_blank">Maemo-MeeGo story</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149735/" target="_blank">Gnome исполнилось 15 лет!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149676/" target="_blank">Сообществу Debian исполнилось 19 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149655/" target="_blank">Flashcache, или I/O на стероидах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149598/" target="_blank">Запуск Linux на планшете с SoC Allwinner A10 на борту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149495/" target="_blank">Автоматическая смена WPA2-пароля (preshared key) на Wi-Fi роутере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149477/" target="_blank">Написание музыки в Linux: что есть прямо сейчас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146877/" target="_blank">Небольшой экскурс в Linux на ARM и ArchLinux на Mele A1000/A2000</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149439/" target="_blank">Разработчики Gnome готовят собственную ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149217/" target="_blank">Стали известны победители конкурса Ubuntu App Showdown</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149189/" target="_blank">Российское сообщество разработчиков MeeGo и webOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149104/" target="_blank">Shred и безвозвратное удаление файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149059/" target="_blank">Делаем свою Time Machine для Линукса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148988/" target="_blank">Можно ли в UNIX обнулять (truncate) файл, в который пишет некоторый процесс?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122445/" target="_blank">Памятка пользователям ssh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148610/" target="_blank">Ubuntu on air. Ответы разработчиков на вопросы пользователей в G+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148601/" target="_blank">ArchLinux — Software RAID</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148445/" target="_blank">Что делать, если у вас много сторонних репозиториев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148426/" target="_blank">Squid: баним баннеры без вспомогательного веб-сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148316/" target="_blank">Установка Debian на физически доступную систему без монитора и клавиатуры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148201/" target="_blank">Загрузка CentOS 6 с флэшки: прямые руки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148126/" target="_blank">Microsoft извинилась за «оскорбление» в ядре Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148120/" target="_blank">Canoniсal анонсировала Ubuntu WebApps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147517/" target="_blank">Первое знакомство с ядром линукс версии 3.3 и 3.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147925/" target="_blank">Valve открыла блог команды разработчиков Steam и Left 4 Dead 2 под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147842/" target="_blank">Клиент для сервиса Forvo.com подручными средствами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147806/" target="_blank">Музей скриншотов Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147793/" target="_blank">GNU/Linux и устройство на Rockchip 2918</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147751/" target="_blank">Установка ZTE AX226 в Ubuntu 11.04 и 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147698/" target="_blank">Настройка почтовых оповещений о различных системных событиях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147583/" target="_blank">Отправка бесплатного sms сообщения в linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147522/" target="_blank">Ставим Ubuntu/Debian через debootstrap из другой Linux-системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147495/" target="_blank">Отправляем уведомления Nagios в чат Skype</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147485/" target="_blank">Nokia передала патенты на MeeGo стартапу Jolla (UPD)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147378/" target="_blank">Состояние SAMBA 4 на данный момент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147369/" target="_blank">picotux — самый маленький компьютер с Linux в мире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147347/" target="_blank">Удаленный доступ к компьютеру за NAT'ом через SSH-туннель</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147333/" target="_blank">Если оба компьютера за натом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147319/" target="_blank">Ключевая роль Linux в поиске бозона Хиггса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147230/" target="_blank">Передача файлов с Siemens-телефона на Linux — SieFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147077/" target="_blank">1С: Предприятие 8.3 ознакомительная версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147041/" target="_blank">Скрипты на коленке — приручаем klipper Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147002/" target="_blank">Blizzard банит игроков Diablo III за использование Wine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146922/" target="_blank">UDP и проблема доставки ответа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146932/" target="_blank">Доступны для загрузки неофициальные сборки Ubuntu 12.04 с включенными интерфейсами GNOME Shell и Classic</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146871/" target="_blank">Печатная инструкция пользователя Raspberry Pi будет стоить $14</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146863/" target="_blank">Leap second привёл к зависанию некоторых серверов на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146455/" target="_blank">Массовое добавление/удаление хостов в Zabbix при помощи API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146733/" target="_blank">Сравнительная таблица 39 одноплатных компьютеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146480/" target="_blank">Запускаем Ubuntu x86 + Wine под Android x86 (chroot+VNC)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146587/" target="_blank">Скрипты на коленке — приручаем klipper Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146450/" target="_blank">Сервер OpenVPN на CentOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146432/" target="_blank">Elementary OS Luna: когда уже?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146436/" target="_blank">Установка Linux на дешёвые ARM-нетбуки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146424/" target="_blank">NVIDIA потеряла контракт с Китаем на поставку видеокарт для 10 млн Linux-компьютеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/veeam/blog/306032/" target="_blank">Знакомство с Veeam Agent for Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305918/" target="_blank">Автоответчик в postfix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304594/" target="_blank">systemd: getty-подобный сервис для htop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304008/" target="_blank">Установка Firebird на D-Link DNS-325</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303894/" target="_blank">Настраиваем URL Overrides в Keepass2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302634/" target="_blank">Одновременное монтирование зашифрованных папок в Synology DSM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301700/" target="_blank">HowTo: Подключение к Cisco VPN с использованием Aladdin eToken в Linux (Ubuntu)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282828/" target="_blank">HDD посвящается: усмиряем приложение, прожорливое на дисковое время</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/98770/" target="_blank">Как перезагрузить сервер?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281170/" target="_blank">Ubuntu. Русификация консоли в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146398/" target="_blank">Canonical попросили заняться поддержкой Retina-дисплеев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146349/" target="_blank">Calculate Linux 5 лет!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146286/" target="_blank">Развертывание радиостанции на GNU/Linux. Часть I</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114705/" target="_blank">Отключение ClickPad'а на X220; чуть-чуть детектива</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146170/" target="_blank">Разработка — «Рабочее место кассира» под LINUX. GPL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146166/" target="_blank">Parallels патчит ядро Linux. Хабраинтервью со Стасом Протасовым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146126/" target="_blank">NVIDIA прокомментировала критическое высказывание Линуса Торвальдса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146116/" target="_blank">Файервол для Linux с простым интерфейсом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146031/" target="_blank">Dell будет продавать в Индии компьютеры с Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145964/" target="_blank">Как Линус Торвальдс относится к Nvidia?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145945/" target="_blank">Обновления ядра в Ubuntu с помощью Bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145713/" target="_blank">HowTo: Интернет-банкинг для юридических лиц с использованием Aladdin eToken в Linux (Ubuntu)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145281/" target="_blank">Релиз Rhythmbox 2.97</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145267/" target="_blank">Logrotate. Postrotate скрипт и имя файла</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145230/" target="_blank">В Arch Linux по умолчанию включена проверка цифровых подписей пакетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144990/" target="_blank">Что же это за чудо — Beefy Miracle? История названия Fedora 17</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144828/" target="_blank">Fedora 17 Beefy Miracle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144638/" target="_blank">Засеки 25 минут!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143808/" target="_blank">Linux для ARM в эмуляторе qemu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144512/" target="_blank">Вышел Linux Mint 13 «Maya»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143327/" target="_blank">Немножко паранойи для онлайн-хранилища</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144274/" target="_blank">Ваша основная среда рабочего стола в linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144230/" target="_blank">Ядро Linux обновилось до версии 3.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144138/" target="_blank">Команда Raspberry Pi анонсировала модуль камеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144116/" target="_blank">Добавляем Last.fm радио в MPD плейлист</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144058/" target="_blank">Копирайт на команду /bin/true</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143980/" target="_blank">Time Machine: бекапим OS X Lion на Ubuntu 12.04 LTS сервер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143859/" target="_blank">Обновлённый мини-компьютер FXI Cotton Candy поступит в продажу этим летом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143821/" target="_blank">davfs2 и encfs на box.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143707/" target="_blank">Поваренная книга Debian или как я начал работать над официальным wiki</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143734/" target="_blank">Goobuntu: внутренний дистрибутив Ubuntu для сотрудников Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143614/" target="_blank">Разница между bin, sbin, usr/bin, usr/sbin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143547/" target="_blank">Качественное сглаживание шрифтов в Gentoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143540/" target="_blank">Как раскидать окна по рабочим столам после загрузки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143511/" target="_blank">Linux-ноутбук, спроектированный для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143460/" target="_blank">Ubuntu планирует охватить 5% рынка новых ПК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142974/" target="_blank">Простейший моделер для zenoss или грязный путь в светлое будущее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143170/" target="_blank">Mikogo для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138186/" target="_blank">Вещание AAC-потока с помощью Icecast2 и streamTranscoder</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143113/" target="_blank">Установка Oracle JDK 7 в Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143083/" target="_blank">Экономим память с помощью UKSM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138698/" target="_blank">Маршрутизация в Linux: VRF Lite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142949/" target="_blank">Покупателям отправлены первые 700 Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142900/" target="_blank">APRX клиент в радиолюбительскую APRS на базе D-Link Dir-620</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142852/" target="_blank">Вышла Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142497/" target="_blank">Linux клиент VMWare View 5.0 c «пробросом USB»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142518/" target="_blank">Что нового в Red Hat Enterprise Linux 6.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142474/" target="_blank">Mele A1000 — интересный конкурент Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142303/" target="_blank">Редактирование GRUB на Ext4 из под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141320/" target="_blank">Удаленная замена корневой ФС в GNU/linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142067/" target="_blank">Яндекс.Диск как файловая система</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141937/" target="_blank">Делаем резервное копирование на Яндекс.Диск с помощью Déjà Dup в Ubuntu и не только в нём</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141912/" target="_blank">Mosh — SSH 2012 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141227/" target="_blank">Бесшумный веб-сервер на 80386 под управлением Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141197/" target="_blank">Переворачиваем интернет на 1-е апреля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141174/" target="_blank">Самый медленный Linux компьютер в мире</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141110/" target="_blank">Мониторим Memcache с помощью Zabbix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141120/" target="_blank">WD MyBook Live — расширение стандартной функциональности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141090/" target="_blank">Ребенок в семье гика или видеоняня своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140959/" target="_blank">Динамический IP от провайдера, и проброс портов в Iptables</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141031/" target="_blank">Ещё раз про скринкасты в линуксе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141026/" target="_blank">Вышла вторая бета Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141016/" target="_blank">Red Hat станет первой компанией-миллиардером в мире СПО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141003/" target="_blank">Власть над демонами или автозапуск в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140993/" target="_blank">SMS шлюз в радиолюбительский DX-кластер на базе D-Link Dir-620</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140869/" target="_blank">Подписка Ubuntu Advantage: теперь и в России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140817/" target="_blank">Миграция CentOS6 с raid1 на raid10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140709/" target="_blank">Дистрибутивы, обновления и errata для Oracle Linux теперь доступны бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140689/" target="_blank">Менеджер паролей с web доступом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140436/" target="_blank">Спасительная флешка на основе дистрибутива Linux Debian/Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140337/" target="_blank">Настройка веб-сервиса Cherokee под Ubuntu 11.04 для работы с WordPress</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140280/" target="_blank">The Humble Bundle for Android 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140269/" target="_blank">Ядро Linux 3.3 поддерживает Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140184/" target="_blank">Мониторим Nginx c помощью ZTC и Zabbix</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140052/" target="_blank">Прозрачный прокси сервер Squid с паролем на Ubuntu 11.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140047/" target="_blank">10 самых популярных игр для Ubuntu по версии UALinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140031/" target="_blank">[UPD]Взрослеем с GlusterFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138705/" target="_blank">Cкрипт для настройки MultiHomed linux router</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140010/" target="_blank">Удобство наблюдения, atop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140006/" target="_blank">Скринкасты в линуксе, личный опыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139917/" target="_blank">Допиливание Gnome 3 под ArchLinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139668/" target="_blank">Единая база расширений GNOME Shell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139666/" target="_blank">Прячем Bash скрипты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128117/" target="_blank">Домашний сервер. Часть 2. FTP, Samba и rTorrent</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130875/" target="_blank">Сборка DebWRT на примере Ubiquity RouterStation Pro</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139088/" target="_blank">Прямая трансляция семинара «Обзор Red Hat Enterprise Linux 6»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139070/" target="_blank">Продажа Raspberry Pi стартует сегодня в 10:00 МСК</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139061/" target="_blank">Linux показал рост 64% за год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138945/" target="_blank">Яндекс перевод на bash с использованием zenity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138866/" target="_blank">Семинар Red Hat. Впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138724/" target="_blank">Ноутбук: Звук в наушники и/или из динамиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138672/" target="_blank">Canonical представила Ubuntu for Android (UPD)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138329/" target="_blank">На Distrowatch появился новый русско-украинский дистрибутив: Ubuntu DesktopPack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138292/" target="_blank">Сборка, настройка и запуск ipt-netflow в Debian Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138111/" target="_blank">Использование GDB на примере MaNGOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138030/" target="_blank">Flash, Flex, ActionScript — делимся вариантами настройки среды программирования в Ubuntu GNU\Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137919/" target="_blank">[archlinux] До нас добрались бинарные логи!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137476/" target="_blank">Отказоустойчивый IP-адрес с помощью ucarp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137401/" target="_blank">Открыт репозиторий с играми для Ubuntu 10.04, 10.10, 11.04, 11.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137215/" target="_blank">Перевод выделенного текста с любого языка на русский</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280574/" target="_blank">Обработка sms на куче одинаковых gsm модемов без насилия над udev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280292/" target="_blank">Linux для начинающих или чему может научить девушка?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280093/" target="_blank">25 вопросов задаваемых на собеседовании системным администраторам Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280037/" target="_blank">Взаимоотношения dhcpclient и resolv.conf'а в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279897/" target="_blank">Переезд из Windows в Linux Ubuntu 14.04 LTS вместе с Jetbrains IntelliJ Idea 14.1.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279777/" target="_blank">«Щадящая» балансировка между несколькими провайдерами на офисном шлюзе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277783/" target="_blank">LTSP: Терминальный сервер на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279505/" target="_blank">Настройка сервера репозиториев на основе SCM-Manager под Debian</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277983/" target="_blank">Программный интернет шлюз для уже не маленькой компании (Shorewall, QoS во всю ширь). Часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270207/" target="_blank">Metronome IM и Jappix: многофункциональный Jabber, без сложностей в настройке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137171/" target="_blank">GrSecurity/PaX: предустановленные security level</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137037/" target="_blank">[новости archlinux testing] KDE 4.8 появился в тестинге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136721/" target="_blank">Red Hat: Итоги 2011 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136939/" target="_blank">Разработчики Ubuntu представили инновационную альтернативу традиционным меню</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136745/" target="_blank">Клиент Desurium опубликован под GPL v3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136595/" target="_blank">Автоматический бекап при подключении внешнего HDD в Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136537/" target="_blank">Централизованный сбор, хранение и просмотр Syslog в Debian Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136533/" target="_blank">DWM — минимализм в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135992/" target="_blank">Debian на Iomega StoreCenter Ix2-200 или делаем полноценный сервачок из сетевого диска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136504/" target="_blank">Почему UEFI Secure boot это трудность для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136388/" target="_blank">Датчик освещённости из веб-камеры вашего ноутбука</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136309/" target="_blank">Открыт прием заявок на LVEE winter 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136214/" target="_blank">[новости archlinux testing] Поддержка /usr на отдельном разделе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136180/" target="_blank">[новости archlinux testing] новый LTS и udev-177</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136121/" target="_blank">Эмуляция OSS в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136043/" target="_blank">Corel выпустила в свет редактор изображений AfterShot Pro, схожий по функционалу с Lightroom, с версией для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135989/" target="_blank">Какой рабочей средой вы обычно пользуетесь?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135925/" target="_blank">UbuntuTV — TV for human beings</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135805/" target="_blank">16 января Mandriva может быть объявлена банкротом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135800/" target="_blank">Избавляемся от PGP в почтовом ящике mutt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135769/" target="_blank">[новости archlinux testing] M-I-T не нужен. Да здравствует kmod-3!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135754/" target="_blank">Вышло ядро Linux 3.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135731/" target="_blank">Решение проблемы с местом, организация директории «Разобрать»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135613/" target="_blank">YouTube поиск в Unity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135598/" target="_blank">Ричард Столлман ответил, как он встречает Новый год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135475/" target="_blank">Вышел журнал UserAndLINUX v11.12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124663/" target="_blank">Обзор изменений в МСВС 3.0 (вариант исполнения 16)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135253/" target="_blank">Настраиваем GNOME Shell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135240/" target="_blank">Импорт кода из Android в основное Linux-ядро</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135224/" target="_blank">43-й выпуск русского Full Circle Magazine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135161/" target="_blank">CentALT репозиторий для CentOS 6.x/RHEL 6.x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133936/" target="_blank">Решение проблемы установки Openfire на CentOS 64-bit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134968/" target="_blank">Готовим Linux на Asus U31SD/P31SD и подобных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134973/" target="_blank">Подключение принтера HP LJ 1010/1015/1018/1020 в Linux Debian(Ubuntu) c CUPS 1.4 и выше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134800/" target="_blank">Subtle — tiling window manager in ruby</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134747/" target="_blank">Почти линейное увеличение производительности bzip2 на многопроцессорных системах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134542/" target="_blank">Возвращаем Pidgin и Skype на верхнюю панель GNOME Shell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134477/" target="_blank">Какие уроки должна извлечь Ubuntu для успешного выхода на мобильный рынок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134409/" target="_blank">Настройка WiMax интернета и его раздачи другим через Wi-Fi в openSUSE 12.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134379/" target="_blank">Используем телефон в качестве неттопа, или десктопный Linux на Motorola Atrix 4G</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134385/" target="_blank">Сохранение flash-video из кэша браузера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134376/" target="_blank">qtpanel — ещё одна десктопная панель для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134307/" target="_blank">Поддержка SFTP в midnight commander</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134254/" target="_blank">Поиск торрентов в Unity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134120/" target="_blank">Первый альфа релиз Ubuntu 12.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134118/" target="_blank">Создаём веб-приложение для GNOME 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134087/" target="_blank">Представлены операционные системы Ubuntu, Kubuntu и Xubuntu 11.10 OEM в сборке от UALinux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133977/" target="_blank">Управление мандатными метками в МСВС 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133880/" target="_blank">1С: Предприятие 8.2 в Ubuntu 11.10 с локальным ключом HASP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133703/" target="_blank">Использование HTTP proxy и SOCKS в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133468/" target="_blank">Ubuntu Unity — светлое будущее против консерватизма</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133472/" target="_blank">Какие дистрибутивы Linux вы используете на десктопах?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133470/" target="_blank">Ubuntu скатилась на 4-ое место по популярности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133440/" target="_blank">Linux Mint 12 «Lisa»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133411/" target="_blank">X Neural Switcher — Поваренная книга (Часть 3). Кейлоггер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133247/" target="_blank">Мандатная модель ОС МСВС 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133076/" target="_blank">Новичкам про управление шириной канала в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132975/" target="_blank">Расширяем функциональность conky: добавляем функцию для отображения даты трека MPD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132921/" target="_blank">Desura: платформа дистрибуции игр под Linux/Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132851/" target="_blank">X Neural Switcher — Поваренная книга (Часть 2). Алгоритмы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132819/" target="_blank">Ubuntu 11.10 сборка от NNLUG</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132781/" target="_blank">Релиз Linux-дистрибутива openSUSE 12.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132684/" target="_blank">X Neural Switcher — Поваренная книга (Часть 1). Предтечи и аналоги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132635/" target="_blank">X Neural Switcher — Поваренная книга</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132623/" target="_blank">Вышел Linux Mint 12 «Lisa» RC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132614/" target="_blank">Общий каталог на Linux-машине, v2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132599/" target="_blank">zsh :: настраиваем «правое» приглашение командной строки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132138/" target="_blank">Fedora 16 (Verne) доступна для скачивания и обновления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132099/" target="_blank">Начальная настройка ИБП APC в Linux с точки зрения чайника</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132095/" target="_blank">Как я устанавливал Openmeetings</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132064/" target="_blank">Как я делаю скриншоты в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132026/" target="_blank">Дистрибутив Linux Mint занял первое место в рейтинге DistroWatch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131810/" target="_blank">Компания «ПингВин Софтвер» закончила разработку прототипа национальной программной платформы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131711/" target="_blank">Ekoore обновила версию Ubuntu на своих планшетах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131504/" target="_blank">Мониторинг (измерение) потребляемого траффика в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131574/" target="_blank">Ubuntu идёт на смартфоны и планшеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131549/" target="_blank">Очень быстрый способ выключить зимнее время для тех, кто проспал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131484/" target="_blank">Linux Foundation рекомендует сделать простое меню для отключения UEFI Secure Boot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131433/" target="_blank">Nmap — руководство для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131302/" target="_blank">Megafon 3G modem + linux модифицирует sudoers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131263/" target="_blank">Есть ли польза от кастомных ядер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131239/" target="_blank">Ubuntu, почтовый клиент для MS Exchange 2007</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131234/" target="_blank">Готовим свой Linux на базе Gentoo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131220/" target="_blank">Как понять почему упал сервер не подключая к нему монитор и клавиатуру?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131116/" target="_blank">Автоматизация работы интернет-радио на Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130978/" target="_blank">Установка Debian по сети через netboot и ssh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130926/" target="_blank">Удаленный доступ при динамическом IP или Настраиваем DynDNS в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130868/" target="_blank">Хочется взять и расстрелять, или ликбез о том, почему не стоит использовать make install</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130841/" target="_blank">ДР Ubuntu — 7 лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130763/" target="_blank">Рецепт приготовления Xubuntu, или нетбук для супруги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130650/" target="_blank">Red Hat теперь и в России: «Нужно быть ближе к клиенту»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130601/" target="_blank">Cага о пакетном конвертировании pdf в text</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130482/" target="_blank">Краткое руководство по GNOME Shell в Ubuntu 11.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130310/" target="_blank">Релиз Ubuntu 11.10 (Oneiric Ocelot)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130330/" target="_blank">Unix-way напоминалка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130284/" target="_blank">Способ разгона видеокарты Nvidia в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130175/" target="_blank">UserAndLINUX 11/10 — Все про Андроид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130165/" target="_blank">К JavaScript-Linux прикрутили «диски постоянной памяти»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130151/" target="_blank">Geany и пользовательские скрипты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129989/" target="_blank">Сборочная среда для проекта Midnight Commander — продолжение</a></li>
</ol>
</body>
</html>