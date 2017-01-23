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
<body><ol class="rounded"><li class="linkCls"><a href="https://habrahabr.ru/post/319670/" target="_blank">Консоль в массы. Переход на светлую сторону. Bash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318948/" target="_blank">Поиск утечки GDI объектов: Как загнать мастодонта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/318910/" target="_blank">Информационные технологии в новогоднем мюзикле «Чародеи»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318722/" target="_blank">Маршрутизация ортогональных соединений в редакторах диаграмм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318500/" target="_blank">A fistful of relays. Часть 3 — декодер команд и управляющий автомат</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/virtuozzo/blog/318522/" target="_blank">Как обновить ядро в системе без перезапуска сервисов (пошаговая инструкция)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318376/" target="_blank">Консоль в массы. Переход на светлую сторону. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/318396/" target="_blank">Предпочитайте SRW-блокировки критическим секциям</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318122/" target="_blank">Соревнование Underhanded Rust 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infowatch/blog/318026/" target="_blank">Как написать свою «песочницу»: пример простейшей «песочницы». Часть II</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317636/" target="_blank">Docker, GitLab, бесплатные SSL-сертификаты и другие плюшки современной веб-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317638/" target="_blank">Превозмогая трудности: Gravity Defied на sed</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317534/" target="_blank">Консоль в массы. Переход на светлую сторону. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/317442/" target="_blank">Спроси backend-разработчиков Badoo. Часть 1. Платформа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infowatch/blog/317396/" target="_blank">Как написать свою «песочницу»? Разбор простейшей «песочницы»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pvs-studio/blog/317374/" target="_blank">Тестируем Linux-версию PVS-Studio на Linux Kernel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316824/" target="_blank">Рецепт разработки бота под Telegram</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/316344/" target="_blank">Кэши для «чайников»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315914/" target="_blank">Использование технологий от Intel для передачи сетевого трафика из физического адаптера в виртуальный</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315192/" target="_blank">Выпуск Rust 1.13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278245/" target="_blank">Стек стеком погоняет, или преобразование байткода виртуальной машины Java в байткод машины Фантом ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/277995/" target="_blank">Хуки — это просто (часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/efo/blog/277899/" target="_blank">Статья про микроконтроллер EFM32ZG110F32</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/1cloud/blog/277369/" target="_blank">Как разработчику «влиться» в тему DevOps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/efo/blog/277491/" target="_blank">На что стоит променять Cortex-M3?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/144196/" target="_blank">CAT — Управление размером кэша процессора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276227/" target="_blank">man!( C =&gt; D )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253049/" target="_blank">Две точки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275801/" target="_blank">Rust и парадокс Блаба</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/3cx/blog/275655/" target="_blank">Настройка Google почты в 3CX Phone System</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275545/" target="_blank">Новый интерфейс для получения атрибутов процессов в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275507/" target="_blank">Поиск множества регулярных выражений при помощи библиотеки Hyperscan</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274767/" target="_blank">ProDBG переходит на Rust</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274757/" target="_blank">Rust в 2016 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kolibrios/blog/274487/" target="_blank">Дайджест по итогам 2015 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/274549/" target="_blank">Итоги 2015-го года для C++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/muk/blog/273441/" target="_blank">Демонстрация-обзор решения Dell EVO:rail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274463/" target="_blank">Пишем DXE-драйвер для снятия скриншотов с BIOS Setup и других UEFI-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/274217/" target="_blank">Простая возможность приобрести опыт в IT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274137/" target="_blank">Разработка цифровой аппаратуры на C++/SystemC глазами SystemVerilog программиста</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274099/" target="_blank">Кому и зачем все-таки нужен Go?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/securitycode/blog/273629/" target="_blank">Случайности не случайны?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273497/" target="_blank">Укрощаем UEFI SecureBoot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273109/" target="_blank">Смешиваем цвета правильно или оптимизируем AlphaBlend</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272619/" target="_blank">Самомодифицирующийся код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/271983/" target="_blank">Linux, отложенная загрузка драйверов и неработающие прерывания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/271809/" target="_blank">Расследование ошибки установки Visual Studio 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271433/" target="_blank">Сделаем код чище: работа с 64-битными регистрами оборудования в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270789/" target="_blank">Sublime Text как IDE для ARM на примере STM32</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270743/" target="_blank">Статический анализ printf-like функций в Си при помощи libclang</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270371/" target="_blank">Обработка ошибок в Rust</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/269935/" target="_blank">История мигрирования операционных систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270009/" target="_blank">Управление памятью: Взгляд изнутри</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269835/" target="_blank">Изоляция виртуальных серверов в apache2 — ugidctl</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269383/" target="_blank">Встроить JSON в Embedded? Проще простого</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269295/" target="_blank">PCEPTPDPTE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/269193/" target="_blank">4 способа писать в защищённую страницу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268423/" target="_blank">О безопасности UEFI, часть заключительная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/268847/" target="_blank">«Чтобы стать хорошим системщиком, нужно 5–10 лет опыта» — интервью с Алексеем Шипилёвым из Java Performance Team</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/truevds/blog/268763/" target="_blank">Параллельное выполнение зависимых задач и синхронизация с условными переменными в shell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/268677/" target="_blank">LinuxCon 2015 и все, все, все: впечатления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/268655/" target="_blank">LinuxCon + CloudOpen + Embedded LinuxCon Europe 2015: как это было</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/268607/" target="_blank">Volker Simonis — Внутренности SAP JVM [Встреча JUG в Питере]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/268409/" target="_blank">Добавить системный вызов. Часть 4 и последняя</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268135/" target="_blank">О безопасности UEFI, часть шестая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268145/" target="_blank">Сетевые системные вызовы. Часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/odnoklassniki/blog/259415/" target="_blank">«Мы можем лучше протестировать Java, чем Oracle» — интервью с Андреем Паньгиным из Одноклассников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267239/" target="_blank">По следам C++ Siberia: дракон в мешке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267953/" target="_blank">О безопасности UEFI, часть пятая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267773/" target="_blank">Модификация системного вызова. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267535/" target="_blank">Делаем доступным все символы ядра Linux. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267491/" target="_blank">О безопасности UEFI, часть четвертая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267237/" target="_blank">О безопасности UEFI, часть третья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/267203/" target="_blank">Rust, дисциплинирующий язык программирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267197/" target="_blank">О безопасности UEFI, часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266935/" target="_blank">О безопасности UEFI, части нулевая и первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266557/" target="_blank">Сортировка целых чисел при нехватке памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/266335/" target="_blank">Примеры классического кода, ставшего Open Source</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/266089/" target="_blank">Встреча разработчиков Linux-контейнеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266083/" target="_blank">Ограничение памяти, доступной программе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265685/" target="_blank">Интервью с Nenad Rakocevic о языке Red, преемнике Rebol</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265509/" target="_blank">Анатомия программы в памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/265461/" target="_blank">Ещё один способ автоматического вызова unit-тестов на языке Си</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265235/" target="_blank">Анализ защиты Sony PlayStation 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/truevds/blog/265263/" target="_blank">Настройка окружения для тестирования изменений в ядре Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265111/" target="_blank">Сделаем код чище: Когда применение devres API приносит вред?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/265059/" target="_blank">Существует ли отечественный процессор Мультиклет?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/263571/" target="_blank">SoC: пишем реализацию framebuffer для контроллера в FPGA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/264293/" target="_blank">Как мы преодолевали передачу данных по USB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263269/" target="_blank">Автоматизация обновления темплейтов OpenVZ на Proxmox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262531/" target="_blank">Моя система тестирования и повышения качества GSM шлюза, часть первая: функциональный и схемный уровень</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/260119/" target="_blank">Виртуальное время, часть 2: вопросы симуляции и виртуализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262335/" target="_blank">Сборщик мусора в Go: решение проблемы отзывчивости в Go 1.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260663/" target="_blank">Что новые версии UEFI-стандартов нам готовят, часть третья, UEFI 2.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/261609/" target="_blank">Пять заблуждений об открытом ПО</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/260113/" target="_blank">Виртуальное время. Часть 1: источники времени в компьютере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/efo/blog/261253/" target="_blank">«Программирование мышкой» для микроконтроллеров</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261339/" target="_blank">Сложно о простоте Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261161/" target="_blank">Захват пакетов в Linux на скорости десятки миллионов пакетов в секунду без использования сторонних библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/261003/" target="_blank">Механизмы профилирования Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259477/" target="_blank">Что новые версии UEFI-стандартов нам готовят, часть вторая, ACPI 6.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260451/" target="_blank">Почему Go превосходит посредственность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260223/" target="_blank">Почему Go обречён на успех (обновлено)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259839/" target="_blank">Разработка OS на Go+asm Part 0x01</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259755/" target="_blank">Система Оберон, реализованная на доступной FPGA-плате</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/259721/" target="_blank">SIP телефон из stm32f4-discovery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259719/" target="_blank">Разработка OS на Go+asm Part 0x00</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259535/" target="_blank">Сказ об одной ошибке, так и не попавшей в релиз ядра Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259051/" target="_blank">Что новые версии UEFI-стандартов нам готовят, часть первая, PI 1.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258993/" target="_blank">Оберон умер, да здравствует Оберон! Часть 2. Модули</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258917/" target="_blank">Оберон умер, да здравствует Оберон! Часть 1. Некоторые любят поактивней</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258727/" target="_blank">Проект «Оберон 2013»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258721/" target="_blank">Проверяем открытый исходный код UEFI для Intel Galileo при помощи PVS-Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258391/" target="_blank">«Проклятие» фигурных скобочек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/244565/" target="_blank">Самая медленная инструкция x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/248145/" target="_blank">SoC: поднимаем простой DMA на FPGA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/256829/" target="_blank">Особенности внедрения DLL и установки хуков в Modern-приложениях Windows 8/10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/256565/" target="_blank">Легкие потоки в Embox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/256191/" target="_blank">Организация виртуальной памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/254027/" target="_blank">Ассемблер для задач симуляции. Часть 2: ядро симуляции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314758/" target="_blank">Может ли компьютерная книга оставаться актуальной через 30 лет после написания?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314702/" target="_blank">Выпуск Rust 1.12.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314038/" target="_blank">Как превратить смартфон в микрофон (идеи и вопросы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313980/" target="_blank">Интеграция внешней объектной системы в Delphi на примере IBM SOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/313638/" target="_blank">О производительности именованных каналов в многопроцессных приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313274/" target="_blank">Заблуждения большинства программистов относительно «времени»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311502/" target="_blank">Как я читал показания датчиков через SNMP (Python+AgentX+systemd+Raspberry Pi) и соорудил ещё одну мониторилку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311384/" target="_blank">Анонс Rust 1.12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311562/" target="_blank">Микросхемы с разных сторон: семинары Nanometer ASIC, MIPSfpga и Connected MCU в России, Украине и Казахстане</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311366/" target="_blank">Позволит ли формальная верификация кода микроядра создавать сверхнадежные ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255519/" target="_blank">Return oriented programming. Собираем exploit по кусочкам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255459/" target="_blank">Сделаем код чище: Пару слов об управляемых ресурсах в ядре Linux для драйверов устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/254419/" target="_blank">Ассемблер для задач симуляции. Часть 1: гостевой ассемблер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254097/" target="_blank">Как избежать разыменования нулевого указателя, на примере одного исправления в ядре Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253811/" target="_blank">Плохо документированные особенности Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/muk/blog/251957/" target="_blank">Видео о программировании микроконтроллеров Atmel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/203706/" target="_blank">Как запустить программу без операционной системы: часть 6. Поддержка работы с дисками с файловой системой FAT</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250611/" target="_blank">Возвращаем оригинальные страницы меню в Phoenix SCT UEFI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249939/" target="_blank">Еще немного реверс-инжиниринга UEFI PEI-модулей на другом полезном примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249655/" target="_blank">Простые приемы реверс-инжиниринга UEFI PEI-модулей на полезном примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hpe/blog/248047/" target="_blank">HP ProLiant ML350 Gen9 — сервер с безумной расширяемостью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247521/" target="_blank">Релиз Rust 1.0 Alpha</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/luxoft/blog/247399/" target="_blank">История создания Norton Commander. Часть 1: вступление</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pvs-studio/blog/247271/" target="_blank">PVS-Studio покопался во внутренностях Linux (3.18.1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247173/" target="_blank">Использование WPP Software Tracing в системном программировании</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/246841/" target="_blank">Windows 8.1 Kernel Patch Protection — PatchGuard</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243687/" target="_blank">Учебник по языку программирования D. Часть 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/securitycode/blog/245539/" target="_blank">Встраивание в ядро Linux: перехват системных вызовов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244759/" target="_blank">Как использовать список ядра Linux для создания очереди</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/244361/" target="_blank">Protothread и кооперативная многозадачность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/244155/" target="_blank">Многозадачность в ядре Linux: workqueue</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/243385/" target="_blank">Процессоры, ядра и потоки. Топология систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/244071/" target="_blank">Многозадачность в ядре Linux: прерывания и tasklet’ы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/243659/" target="_blank">[Питер] Встреча с техлидом OpenSource ОС Embox: Современное встроенное ПО и классика Таненбаума</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kodeks/blog/243439/" target="_blank">Жизненный цикл документа в профессиональной справочной системе. Немного сказочный пост о том, как кипа бумаги превращается в систему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/238091/" target="_blank">Адреса памяти: физические, виртуальные, логические, линейные, эффективные, гостевые</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240843/" target="_blank">Почему 0x00400000 является базовым адресом по умолчанию для EXE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240617/" target="_blank">Почему ваша первая реализация FizzBuzz на Rust может не работать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/238059/" target="_blank">Виртуализация²</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240075/" target="_blank">Разработка и отладка UEFI-драйверов на Intel Galileo, часть 3: начинаем аппаратную отладку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240183/" target="_blank">Маленький Hello World для маленького микроконтроллера — в 24 байта (и чужое решение в 12 байт)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240021/" target="_blank">Визуализация алгоритмов для сборки мусора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kodeks/blog/239747/" target="_blank">История жизни одного программного комплекса в фотографиях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/237523/" target="_blank">Виртуализация¹</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/239387/" target="_blank">Тестирование встроенных систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/237295/" target="_blank">Виртуализация⁰</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/securitycode/blog/237089/" target="_blank">Встраивание в ядро Linux: перехват функций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237183/" target="_blank">Разработка и отладка UEFI-драйверов на Intel Galileo, часть 2: готовим плацдарм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236743/" target="_blank">Разработка и отладка UEFI-драйверов на Intel Galileo, часть первая, вводная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236251/" target="_blank">Linux: кнопки, светодиоды и GPIO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/235707/" target="_blank">Поднимаем SOC: ARM + FPGA</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/232605/" target="_blank">fork() vs. vfork()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230355/" target="_blank">Измеряем температуру: TEMPer + Python + Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/228131/" target="_blank">Инфраструктура обработки очередей в социальной сети Мой Мир</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228049/" target="_blank">Вытесняющая многозадачность на ассемблере Z80</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227957/" target="_blank">Возобновились продажи Parallella board от Adapteva</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226565/" target="_blank">Учебник по языку программирования D. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226071/" target="_blank">Учебник по языку программирования D. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226073/" target="_blank">The Machine. Новая компьютерная архитектура от HP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223293/" target="_blank">WavPlayer — мы не ищем легких путей, мы их прокладываем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kerio/blog/223077/" target="_blank">Запись вебинара по Kerio Control 8.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/220851/" target="_blank">(Само)идентификация процессоров. Часть вторая. Волосатый CPUID</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/220203/" target="_blank">(Само)идентификация процессоров. Часть первая. Сравнение архитектур</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219461/" target="_blank">Сетевое сканирование на Xerox 3220 при подключенном VPN</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/218911/" target="_blank">Книга «Linux. Системное программирование. 2-е изд.»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218359/" target="_blank">Вышел Rust 0.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/promwad/blog/217893/" target="_blank">Микрокомпьютер Module MB 77.07 — русский ответ Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216849/" target="_blank">Настройка среды разработки под OpenStack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215389/" target="_blank">Простая прокси-DLL своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213803/" target="_blank">Полнофункциональный драйвер SDHC карты памяти для Stm32f4 (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213567/" target="_blank">Консольное приложение readpe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/213309/" target="_blank">Хуки — это просто (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213225/" target="_blank">Сборщик мусора на С++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211150/" target="_blank">MMU в картинках (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212885/" target="_blank">Проблема 10 миллионов соединений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211879/" target="_blank">Модификация UEFI BIOS, часть вторая: полезные модификации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211574/" target="_blank">Модификация UEFI BIOS, часть первая: знакомство с UEFITool</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/211470/" target="_blank">Как запустить программу без операционной системы: часть 5. Обращение к BIOS из ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210364/" target="_blank">Динамическое расширение ядра Linux — добавляем функцию «удалить в корзину»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209356/" target="_blank">Как вынудить процесс использовать новый адрес DNS-сервера из обновлённого resolv.conf без перезапуска самого процесса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209128/" target="_blank">А как же всё-таки работает многопоточность? Часть II: memory ordering</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206778/" target="_blank">Перехват функций ядра Linux с использованием исключений (kprobes своими руками)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208446/" target="_blank">Улучшение степени сжатия применяемого в UPX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207122/" target="_blank">Кошерный способ модификации защищённых от записи областей ядра Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206338/" target="_blank">Экспоненциальный алгоритм сильно замедляет Windows XP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205274/" target="_blank">Простая маскировка модуля ядра Linux с применением DKOM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196952/" target="_blank">Управляемый PageFault в ядре Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203276/" target="_blank">Стражи ночи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/carbonsoft/blog/200854/" target="_blank">Изучаем netfilter: пишем свой match-модуль на базе xt_string для поиска нескольких шаблонов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/198264/" target="_blank">Предотвращаем участие в dns amplification attack или опыт написания ядерного кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196372/" target="_blank">Особенности встраивания в ключевые механизмы ядра Linux с использованием LSM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196110/" target="_blank">Эдвард руки — С++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/195074/" target="_blank">Process Explorer vs Process Hacker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195330/" target="_blank">Задачка из реальной жизни: Как восстановить дерево процессов в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195280/" target="_blank">Взгляд на свет в новом свете: Учёные создали невиданную форму материи. (перевод статьи)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194980/" target="_blank">Мониторим ядра CPU в Zabbix и создаем произвольные счетчики в Low-level discovery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194716/" target="_blank">Расширяем контекстное меню кнопки «Пуск» в Windows 8.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194816/" target="_blank">ARM-ы для самых маленьких: компоновка-2, прерывания и hello world!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191058/" target="_blank">ARM-ы для самых маленьких: тонкости компиляции и компоновщик</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190800/" target="_blank">Пишем свой отладчик под Windows [часть 2]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190032/" target="_blank">ARM-ы для самых маленьких: который час?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189484/" target="_blank">ARM-ы для самых маленьких</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/183576/" target="_blank">Совместный запуск Linux и baremetal OS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188114/" target="_blank">Настоящий многопоточный веб-сервер на ассемблере под Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/186812/" target="_blank">Выход за границы контейнера Modern-приложений Windows 8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/promwad/blog/186806/" target="_blank">OpenMCAPI: одновременный запуск Linux и RTOS на многоядерных процессорах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185774/" target="_blank">Устройство файла UEFI BIOS, часть вторая: UEFI Firmware Volume и его содержимое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185764/" target="_blank">Устройство файла UEFI BIOS, часть полуторная: UEFI Platform Initialization</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185754/" target="_blank">Разблокировка AES-NI на Lenovo U310</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185704/" target="_blank">Устройство файла UEFI BIOS, часть первая: UEFI Capsule и Intel Flash Image</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311264/" target="_blank">Как отлаживать Android ядро без UART, JTAG и прочих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/311134/" target="_blank">Блокировки работают не так уж медленно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310886/" target="_blank">Заменяем бут-анимацию Android устройства на мелькающие логи Linux ядра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310806/" target="_blank">Моим самым важным проектом был интерпретатор байт-кода (или «как увидеть матрицу»)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310056/" target="_blank">Запускаем Linux на FPGA: Hello, World</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310122/" target="_blank">«Операционные системы: зачем они инженеру»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309618/" target="_blank">Немного о ARM Security Extensions (aka ARM TrustZone)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307840/" target="_blank">Использование gpio-generic и irq_chip_generic для драйвера gpio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/308490/" target="_blank">Неожиданное поведение WinAPI-функции IsWow64Process()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pvs-studio/blog/308212/" target="_blank">По просьбе читателей, проверяем код LDAP-сервера ReOpenLDAP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/181626/" target="_blank">Как запустить программу без операционной системы: часть 4. Параллельные вычисления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181870/" target="_blank">Пишу игрушечную ОС (о реализации sleep)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179561/" target="_blank">Пишу игрушечную ОС (о реализации мьютекса)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177569/" target="_blank">Пишу игрушечную ОС (доступнее о планировщике)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177469/" target="_blank">Разработка Shell Extensions для Windows Explorer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177403/" target="_blank">Пишу игрушечную ОС (о планировщике)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177201/" target="_blank">Портирование Genode OS Framework на новую аппаратную платформу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176739/" target="_blank">Разработка MiniFilter драйвера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/176707/" target="_blank">Как запустить программу без операционной системы: часть 3: Графика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175749/" target="_blank">Пишу игрушечную ОС (о прерываниях)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/174157/" target="_blank">Как запустить программу без операционной системы: часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173639/" target="_blank">Сравнение C++ Standard и Boost</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/173263/" target="_blank">Как запустить программу без операционной системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171375/" target="_blank">Микроядра и FOSDEM'13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171203/" target="_blank">Что такое -1.#IND и -1.#J?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168631/" target="_blank">Cascade File System или размышления о файловой системы моей мечты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165703/" target="_blank">Сохранение документов Excel в PDF на сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163057/" target="_blank">Баллада о «Мультиклете»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/neobit/blog/162769/" target="_blank">Как найти PCI устройства без операционной системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/embox/blog/162229/" target="_blank">Системные вызовы MIPS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158183/" target="_blank">Аудит пользователей в AD через VBS с занесением в SharePoint при помощи PowerShell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156817/" target="_blank">EventTrace for Windows. Высокоскоростная передача отладочных сообщений драйвера по сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156597/" target="_blank">Мониторинг сервисов Windows средствами PowerShell и Python</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155517/" target="_blank">Барьеры доступа к памяти в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154847/" target="_blank">Пишем свой отладчик под Windows [часть 1]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154419/" target="_blank">Инъекция кода в .NET CLR: изменение IL-кода во время выполнения программы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153391/" target="_blank">Получение подлинного Windows Subsystem(csrss.exe) процесса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hpe/blog/151360/" target="_blank">Появление в HP IMC интерфейса RESTful Web Services</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150654/" target="_blank">Как правильно скопировать массив и при чем тут SFINAE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150801/" target="_blank">Немного о многопоточном программировании. Часть 1. Синхронизация зло или все-таки нет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148839/" target="_blank">Экспериментальное определение характеристик кэш-памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148657/" target="_blank">Управление памятью в C++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148589/" target="_blank">Трудности программирования под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148428/" target="_blank">Быстрый поиск неповрежденных областей на умирающем жестком диске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148413/" target="_blank">CRIU — новый амбициозный проект для сохранения и восстановления состояния процессов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146980/" target="_blank">Как быстро «забросить» 100500 новых юзеров в Active Directory (поднятую на MS Windows Server 2003) или Скрипт для добавления учетных записей пользователей в Active Directory</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146071/" target="_blank">Простейший WDM-драйвер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146865/" target="_blank">Первая опытно-промышленная партия отечественных мультиклеточных процессоров MCp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145926/" target="_blank">Драйвер — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145174/" target="_blank">Идеи о механизме защиты в Windows на основе самоограничения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143237/" target="_blank">А как же всё-таки работает многопоточность? Часть I: синхронизация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144507/" target="_blank">Реализация разделяемой памяти между драйвером и приложением</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144025/" target="_blank">Летняя школа системного программирования ksys labs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ideco/blog/143886/" target="_blank">Программы в автоматном стиле – трудности перевода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142527/" target="_blank">TCP/IP proxy на Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/141544/" target="_blank">Настраиваем пользовательский синий экран смерти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141032/" target="_blank">Менеджмент памяти в .Net Framework от Redgate</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/140456/" target="_blank">Хуки — это просто</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139728/" target="_blank">Сортировка писем по imap-папкам на почтовом сервере без использования sieve и иже с ними</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139344/" target="_blank">Сборка библиотеки Microsoft Detours под Visual Studio 2008</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133956/" target="_blank">Создание прокси-dll для запуска DirectDraw игр в окне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138940/" target="_blank">Простой индикатор раскладки клавиатуры в курсоре на С++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138328/" target="_blank">Учимся писать модуль ядра (Netfilter) или Прозрачный прокси для HTTPS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137479/" target="_blank">Продолжение истории про переменные окружения, или подменяем PEB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136779/" target="_blank">История с передачей переменной окружения. Разные версии msvcrt, UAC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130213/" target="_blank">Отладка драйверов под Windows: VirtualBox+WinDbg</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129298/" target="_blank">О замене стандартного /sbin/init</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129241/" target="_blank">Разработка функций RvaToRaw и RawToRva</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128915/" target="_blank">Необычное использование генератора отчётов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128449/" target="_blank">Исправляем ACPI на Samsung N250</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126461/" target="_blank">Go Language. Небольшое клиент-серверное приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122216/" target="_blank">Изучаем микроядро L4 и пишем приложение «Hello world» для системы Xameleon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122171/" target="_blank">Память и задачи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121925/" target="_blank">Основы MPI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121235/" target="_blank">Основы MPI для «чайников»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120685/" target="_blank">Начинаем разговор о многозадачности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119283/" target="_blank">Спецификация системных вызовов операционной системы Хамелеон (осторожно, много картинок!)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119058/" target="_blank">Учим систему страничной адресации и обработке прерываний</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116506/" target="_blank">Четыре вида метаданных NTFS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118917/" target="_blank">Преимущества безблокировочного алгоритма — не только и не столько в производительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118881/" target="_blank">Что такое Protected Mode и с чем его едят</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118850/" target="_blank">Беззахватные алгоритмы: модель «сделай, запиши,(поручи другому)»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118647/" target="_blank">Продолжаем написание операционок. Шаг за шагом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118515/" target="_blank">Беззамочные алгоритмы: ненастойчивый кэш</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118466/" target="_blank">Беззамочные алгоритмы: модель «сделай, запиши,(попытайся снова)»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118390/" target="_blank">Потоко-безопасная ленивая инициализация в C++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117842/" target="_blank">Многопоточное программирование в Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116511/" target="_blank">Пишем viewer почтовой базы MS Exchange (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116308/" target="_blank">Пишем viewer почтовой базы MS Exchange (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114853/" target="_blank">xinetd + netcat → подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113332/" target="_blank">Консервативная логика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/107030/" target="_blank">Чуть больше о загрузке самодельных ОС — пишем bootloader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/104988/" target="_blank">Пишем свою ОС: Выпуск 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103073/" target="_blank">Точки останова на ручной тяге (для архитектуры x86)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/101810/" target="_blank">Пишем свою ОС: Выпуск 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/92628/" target="_blank">Пишем драйвер для USB девайса. Pipe 0: что такое usb?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/89763/" target="_blank">Коварный и ужасный sndrec32.exe</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/81067/" target="_blank">IPC: сокеты против именованных каналов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/51857/" target="_blank">Расширение функциональности готовых программ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/43991/" target="_blank">Маленькая, но очень коварная засада с программированием в kernelspace-е в ОС MS Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40504/" target="_blank">Crash dump'ы и KeCapturePersistentThreadState</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40466/" target="_blank">Пишем свой первый Windows-драйвер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40275/" target="_blank">Что такое нити (threads)?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40227/" target="_blank">Процессы и потоки in-depth. Обзор различных потоковых моделей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/40171/" target="_blank">Программирование в ring0 для Windows: вводная статья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/37455/" target="_blank">DMA для новичков или то, что вам нужно знать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kolibrios/blog/308050/" target="_blank">Вопросы Хейлмейера, Пирса и ответы наших разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308116/" target="_blank">Мониторинг лог-журналов: Такой уязвимый лог или как подложить свинью коллегам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308124/" target="_blank">Анонс Rust 1.11</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306856/" target="_blank">Трассировщик ввода-вывода в ядре Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306940/" target="_blank">Coroutines everywhere</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aladdinrd/blog/306920/" target="_blank">Есть ли жизнь после отказа популярных браузеров от поддержки архитектуры NPAPI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306702/" target="_blank">Rust: for и итераторы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/306548/" target="_blank">Распределенное выполнение Python-задач с использованием Apache Mesos. Опыт Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305800/" target="_blank">STM32F405: прошить 400кб за 10 секунд или быстрый UART-загрузчик заточенный под USB-UART, размером менее 4 килобайт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306582/" target="_blank">Rust: & и ref в паттернах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/virtuozzo/blog/306466/" target="_blank">Новая версия OpenVZ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306034/" target="_blank">Извлечение ключа из токена с неизвлекаемым ключом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305536/" target="_blank">Код Rust включен в Firefox 48</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305486/" target="_blank">Анонс Rust 1.10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305246/" target="_blank">Большие бинари в моем Rust?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/metrotek/blog/304644/" target="_blank">SO_TIMESTAMPING в картинках. Прием пакета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304460/" target="_blank">Анонс записи выпуска подкаста SDcast об OpenVZ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304034/" target="_blank">История языков программирования: 100% «чистый» Си, без единого «плюса»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aladdinrd/blog/304024/" target="_blank">«Разрубить Гордиев узел» или преодоление проблем шифрования информации в ОС Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303060/" target="_blank">Драйвер виртуальных GPIO с контроллером прерываний на базе QEMU ivshmem для Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303602/" target="_blank">Опыт полезной модификации UEFI: возвращаем Thinkpad W520 законную поддержку быстрой памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303380/" target="_blank">Не Паскалем единым: что сделал для современного мира лауреат компьютерной «нобелевки» Никлаус Вирт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302956/" target="_blank">Юникастовая маршрутизация мультикаст-трафика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302494/" target="_blank">Делаем собственный сервис по определению WHOIS любого домена</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/302466/" target="_blank">Конференция OS DAY 2016. Своя система — свой процессор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kolibrios/blog/302094/" target="_blank">Дайджест KolibriOS #12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/302292/" target="_blank">Боремся с дистанционным контролем: как отключить Intel ME</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301994/" target="_blank">Анонс Rust 1.9</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rootwelt/blog/301826/" target="_blank">Dropbox объяснил, почему внедряется в ядро операционной системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301452/" target="_blank">Nginx + OpenSSL 1.0.2h = ALPN. Включаем поддержку ALPN на Ubuntu 14.04</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283504/" target="_blank">Особенности тестирования технологии C/R в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/283066/" target="_blank">Что делает центральный процессор, когда ему нечего делать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282930/" target="_blank">Драйверы умного или виртуального железа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282808/" target="_blank">UDP/TCP File System, Trivial Remote File System</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/282776/" target="_blank">Linux Programming Interface</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282652/" target="_blank">Lazy threads: опциональный параллелизм</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282564/" target="_blank">Анатомия драйвера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dsec/blog/282546/" target="_blank">Intel ME. Как избежать восстания машин?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282263/" target="_blank">Персистентная ОС: ничто не блокируется</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282415/" target="_blank">Атрибуты устройств, или ioctl must die</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282213/" target="_blank">От шедулера к планировщику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282049/" target="_blank">Преемптивность: как отнять процессор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282037/" target="_blank">Делаем мультизадачность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281901/" target="_blank">Устройство NVRAM в UEFI-совместимых прошивках, часть четвертая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281469/" target="_blank">Устройство NVRAM в UEFI-совместимых прошивках, часть третья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281412/" target="_blank">Устройство NVRAM в UEFI-совместимых прошивках, часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281242/" target="_blank">Устройство NVRAM в UEFI-совместимых прошивках, часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281236/" target="_blank">Сборка мусора в персистентной модели: от терабайта и дальше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280756/" target="_blank">Визуализация NFS-трафика с помощью elasticsearch+kibana</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280560/" target="_blank">Ubuntu интегрировали в Windows 10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280254/" target="_blank">Опыт запуска AHCI в VxWorks653</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279627/" target="_blank">Прерывания для самых маленьких</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279509/" target="_blank">Программный поиск процесса по имени в QNX 6.5.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279443/" target="_blank">Персистентная оперативная память</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279271/" target="_blank">Как заставить GNU Make исполнить файл многократно с разными аргументами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278775/" target="_blank">Пишем на D для Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278685/" target="_blank">Обзор примитивов синхронизации — спинлоки и тайны ядра процессора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278661/" target="_blank">Обзор примитивов синхронизации — Семафор и немного lockless-а</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278631/" target="_blank">System 6 (Systemicus) GUI, некоторые аспекты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278413/" target="_blank">Обзор примитивов синхронизации — mutex и cond</a></li>
</ol>
</body>
</html>