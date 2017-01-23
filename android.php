<?php header('Content-Type: text/html; charset=utf-8', true); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Android</title>
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
<body><ol class="rounded"><li class="linkCls"><a href="https://habrahabr.ru/post/320134/" target="_blank">Дайджест интересных материалов для мобильного разработчика #187 (16-22 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/meduza/blog/320062/" target="_blank">Куда переехать с Parse Push?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/320034/" target="_blank">Так ли хорош React Native?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319830/" target="_blank">[Перевод] Отчет: Самые популярные Android устройства на рынках США, Британии, Германии и Канады за 4-й квартал 2016 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pushall/blog/319794/" target="_blank">Группировка оповещений в Android 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/319462/" target="_blank">Анонс конференции Mobius 2017: Больше мобильной разработки, хорошей и разной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319642/" target="_blank">Путь, который стоило пройти, чтобы получить бесценный опыт в мобильной разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319562/" target="_blank">Android Tips and Tricks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319554/" target="_blank">Дайджест интересных материалов для мобильного разработчика #186 (9-15 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319504/" target="_blank">Минус одна система аналитики данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319348/" target="_blank">Обзор кросс-платформенных решений для разработки мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/318098/" target="_blank">Мобильный опыт Яндекса в трех видеокурсах: дизайн, разработка, интерфейсы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319238/" target="_blank">FloatingActionMode — панель контекстных действий для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319260/" target="_blank">Разработать и опубликовать игру под Android за неделю</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/319088/" target="_blank">Затемнение изображения в CollapsingToolbarLayout или Image Scrim</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simbirsoft/blog/319150/" target="_blank">Поддержка нестандартного XMPP-протокола с помощью Smack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318882/" target="_blank">Запускаем Telegram-бота на Android устройстве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318812/" target="_blank">Мобильный терминальный клиент, как зарождалась идея</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318796/" target="_blank">Передача GPS-трека по SMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318700/" target="_blank">Змейка. Развитие жанра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313386/" target="_blank">Дайджест интересных материалов для мобильного разработчика #176 (17-23 октября )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/311046/" target="_blank">Измеряем потребление батарейки на мобильных устройствах. Эксперимент в Яндексе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312708/" target="_blank">От AudioBrain к AudioBrain.Language или промежуточный фриланс как он есть</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313160/" target="_blank">Kivy — еще проще, еще нативнее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/311100/" target="_blank">Несколько Gradle фишек для вашего Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313132/" target="_blank">Грабли VK SDK для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/313106/" target="_blank">5 лучших докладов на конференции мобильных разработчиков MBLTdev 15</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313098/" target="_blank">Филиппинские кроссворды. Доработка мобильной 2D головоломки для работы с цветными кроссвордами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/313010/" target="_blank">Анонс Rambler.Android #4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313030/" target="_blank">Лёгкая интеграция tor в android приложение на примере клиента для рутрекера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/242483/" target="_blank">Новый Office 365 как платформа для разработчиков под Windows, Android, iOS и Web</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242371/" target="_blank">Как я физическую головоломку на Libgdx писал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242033/" target="_blank">Иконка бокового меню из Material Design (как в Google Play)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242195/" target="_blank">Дайджест интересных материалов для мобильного разработчика #77 (26 октября-2 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ucbrowser/blog/241899/" target="_blank">UC Browser v10 — каждый день мы открываем новое!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241858/" target="_blank">Android MediaPlayer. Расширяем возможности с помощью прокси</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241537/" target="_blank">Дайджест интересных материалов для мобильного разработчика #76 (20-26 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241479/" target="_blank">AppCompat v21 — Material Design для пре-Lollipop устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241487/" target="_blank">Новый Chromium WebView теперь обновляется через Google Play и поддерживает Web Components</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241415/" target="_blank">Droidutils — набор решений, которые ускоряют разработку приложений под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241289/" target="_blank">Восьмой опрос Developer Economics от VisionMobile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241139/" target="_blank">I/O Schedule 2014: плохой пример для обучения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/241117/" target="_blank">Набор иконок Material Design от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ubank/blog/241025/" target="_blank">Как мы разработали свою систему рассылки push-уведомлений (и почему)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/240479/" target="_blank">Борьба с утечками памяти в Android. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240833/" target="_blank">Дайджест интересных материалов для мобильного разработчика #75 (13-19 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240543/" target="_blank">RESTful API под Android: pattern B</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/masterup/blog/240535/" target="_blank">Запись первой лекции Android-Курса от MasterUp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240435/" target="_blank">Новости с Xamarin Evolve 2014 — система мониторинга Insights, эмулятор Android Player, Profiler, UITest, прототипирование в Sketches</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240431/" target="_blank">Android приложение на QML: Picker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/240303/" target="_blank">В эмулятор Android добавлена поддержка Intel х64</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240115/" target="_blank">Дайджест интересных материалов для мобильного разработчика #74 (6-12 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240107/" target="_blank">Работа со спрайтами (Unity3d). Часть II</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240105/" target="_blank">Работа со спрайтами (Unity3d)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/240045/" target="_blank">Советы и рецепты начинающему Android программисту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239919/" target="_blank">Как мы разрабатывали свое первое приложение на Xamarin.Forms и что из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/masterup/blog/239959/" target="_blank">Открытая лекция Android-Курса от MasterUp</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239921/" target="_blank">В Google Play Store появятся триальные версии приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239845/" target="_blank">Google представил эмулятор x86 64-bit Android L для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239647/" target="_blank">Как я создавал приложение, но был вынужден закрыть из-за действия закона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238907/" target="_blank">Управление домашними электроприборами («умный дом») через чат бот на Raspberry Pi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ubank/blog/239285/" target="_blank">Поговорим о запретном: как делать push-маркетинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238531/" target="_blank">Опыт интеграции библиотеки OpenIAB в Android приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239221/" target="_blank">Отладка NDK и JNI под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239217/" target="_blank">Дайджест интересных материалов для мобильного разработчика #73 (29 сентября-5 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239199/" target="_blank">Полезные инструменты в Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/239073/" target="_blank">Моя реализация Java библиотеки для биржи BTC-e</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238899/" target="_blank">Google продолжает вытравливать неугодных Android-разработчиков?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epson/blog/238777/" target="_blank">Напоминание о конкурсе Epson для Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238619/" target="_blank">Перехват вызовов функций нативных библиотек в Android приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238611/" target="_blank">Android разработчики: всем выйти из сумрака?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cybersafe/blog/238283/" target="_blank">Хранение данных в криптоконтейнере на удаленном сервере и работа с ними с Android-устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238429/" target="_blank">Дайджест интересных материалов для мобильного разработчика #72 (22-28 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238373/" target="_blank">Google изменил соглашение для разработчиков, оставив за собой право удалять приложения с пользовательских устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238329/" target="_blank">Мой путь инди-разработчика, итоги нескольких лет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238327/" target="_blank">Google Play Game Services в Libgdx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/238241/" target="_blank">Доступ к HID-устройствам из программы на Qt под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/236833/" target="_blank">Как мы внедряли INDE в наше Android приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237777/" target="_blank">Как не потерять связь между фоновыми задачами и Activity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237725/" target="_blank">Локализация приложений для китайского рынка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237589/" target="_blank">Сверхбыстрое распознавание речи без серверов на реальном примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237535/" target="_blank">Дайджест интересных материалов для мобильного разработчика #71 (15-21 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237499/" target="_blank">Тестирование для мобильных устройств: эмуляторы, симуляторы и удалённая отладка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237283/" target="_blank">Платформа для тестирования мобильных приложений Ubertesters: опыт внедрения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237173/" target="_blank">RippleDrawable для Pre-L устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237101/" target="_blank">RecyclerView и CardView. Новые виджеты в Android L</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/237095/" target="_blank">Простой и удобный способ добавления социальных сетей в Андроид приложение на примере Вконтакте и Одноклассники</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/skbkontur/blog/236939/" target="_blank">Экспортируем комментарии и оценки из Google Play для анализа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epson/blog/236885/" target="_blank">Первые промежуточные результаты конкурса Android-разработчиков Moverio Apps Market</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236737/" target="_blank">Дайджест интересных материалов для мобильного разработчика #70 (8-14 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236721/" target="_blank">Отобразить уведомление на Android Wear, не показывая его на телефоне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236567/" target="_blank">Как легко сделать Navigation Drawer и вкладки, используемые в популярных приложениях от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235795/" target="_blank">Android NDK: работа с OpenSL ES</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235895/" target="_blank">Дайджест интересных материалов для мобильного разработчика #69 (1-7 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235717/" target="_blank">Как мы боролись с тормозами в AndEngine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235601/" target="_blank">Маркет приложений для очков Epson Moverio BT-200 (сентябрь, 2014)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235409/" target="_blank">Читаем XLSX на Android при помощи Apache POI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epson/blog/235285/" target="_blank">Конкурс разработчиков для Epson Moverio BT-200</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/235077/" target="_blank">Дайджест интересных материалов для мобильного разработчика #68 (25-31 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yotadevices/blog/234639/" target="_blank">Фрагментация Android практически перестала быть проблемой?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/skbkontur/blog/234241/" target="_blank">Контур.Эльба под Android. Записки разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/233889/" target="_blank">Работа с графическими объектами в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234439/" target="_blank">Запуск objective-c кода на Android устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234425/" target="_blank">Простой USSD-запрос в Android 4.0+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/234365/" target="_blank">Полезные материалы для мобильного разработчика #67 (18-24 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233265/" target="_blank">Библиотека для совершения покупок внутри приложений (Android In-App Billing v.3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233589/" target="_blank">Полезные материалы для мобильного разработчика #66 (11-17 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233395/" target="_blank">Xamarin.Forms не готов к боевым условиям?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233199/" target="_blank">Linderdaum Jigsaw Puzzle — отечественная разработка на Indiegogo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/muk/blog/233193/" target="_blank">Обзор новых телефонов Grandstream GXV3275 и GXV3240</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/233005/" target="_blank">MediaCodec или понимаем как хотим</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/232937/" target="_blank">Первая бесплатная школа Android-разработчиков в e-Legion</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232913/" target="_blank">Автоматическое скрытие адресной строки «как в хроме»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232811/" target="_blank">Полезные материалы для мобильного разработчика #65 (4-10 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232525/" target="_blank">Imagrium: Фреймворк для автоматизации кросс-платформенного тестирования мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232477/" target="_blank">Photo Widget своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/freeamp/blog/232453/" target="_blank">Встраиваем локальные уведомления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/232017/" target="_blank">Полезные материалы для мобильного разработчика #64 (28 июня-3 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mobisoft/blog/231827/" target="_blank">Разработка VPN-клиента под Android (Часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231787/" target="_blank">Я всё ещё обожаю программирование графики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/231525/" target="_blank">Пишем на Kotlin под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231429/" target="_blank">Добавляем Floating Action Button в свое Android приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/231473/" target="_blank">Новинки в Support-Library</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231287/" target="_blank">Аспектно ориентированное программирование в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231269/" target="_blank">Быстрое создание графических ресурсов от mdpi до xxhdpi</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231203/" target="_blank">Рисуем знак рубля в Android приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231195/" target="_blank">Полезные материалы для мобильного разработчика #63 (21-27 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/231009/" target="_blank">За что блокируют разработчиков Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/230299/" target="_blank">Самодельный автономный летающий аппарат из Android смартфона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228783/" target="_blank">Разработка приложения на Android с помощью Xamarin и F#</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312876/" target="_blank">Гибридные Android-приложения для малышей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312794/" target="_blank">Дайджест интересных материалов для мобильного разработчика #175 (10-16 октября )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312684/" target="_blank">Как мы придумали и сделали свою первую игру на Android. Часть 1: Механика игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312672/" target="_blank">Как Android-разработчик тайм-менеджментом увлёкся, и что и из этого вышло</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310488/" target="_blank">Танцуют ли роботы Tango</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312554/" target="_blank">Как я делал Brick Game на Unity3D для Android и получил блокировку от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312516/" target="_blank">Делаем экран загрузки Android приложения правильно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mobileup/blog/312548/" target="_blank">Как перестать использовать MVVM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312470/" target="_blank">Хранение пользовательских паролей в Google Chrome на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/312314/" target="_blank">Опубликована предварительная программа конференции мобильных разработчиков MBLTdev 16</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230857/" target="_blank">Knork: простейшая альтернатива ButterKnife в 160 строк кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/230699/" target="_blank">Android NDK, Revision 10 поддерживает архитектуру Intel 64-bit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230399/" target="_blank">FDroid как замена Google Play. Возможно ли и чем придётся жертвовать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230595/" target="_blank">ActivityRecognitionClient из библиотеки Google Play Services — «распознавание действий пользователя»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230665/" target="_blank">«65К методов хватит всем» или как бороться с лимитом DEX методов в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230591/" target="_blank">Статистика из Android-приложения на своем GAE-сайте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230559/" target="_blank">25+ видеоуроков по Android для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230525/" target="_blank">Вышел новый отчет Developer Economics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230455/" target="_blank">Полезные материалы для мобильного разработчика #62 (14-20 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/230385/" target="_blank">Google анонсировал бесплатные курсы программирования для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/freeamp/blog/230293/" target="_blank">Темная сторона Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ubank/blog/230161/" target="_blank">Кому нужен этот HTML: «Как я за 2 месяца запилил платежный сервис — и отправил на свалку»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/229783/" target="_blank">Разработка игр под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229649/" target="_blank">Полезные материалы для мобильного разработчика #61 (7-13 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229637/" target="_blank">Попытка создания полезного приложения для Pebble</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229559/" target="_blank">Обзор 7 самых популярных кроссплатформенных мобильных фреймворков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229467/" target="_blank">Android last.fm скробблер WAIL Beta теперь Open Source</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/229251/" target="_blank">Sony публикует исходные коды ядра операционной системы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/229039/" target="_blank">Авторизация через Google в Android и проверка токена на сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228965/" target="_blank">История о создании игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228911/" target="_blank">Android L портирован на Nexus 4, пока неофициально</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/227237/" target="_blank">Трансляция видео с мобильного устройства на YouTube</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228171/" target="_blank">Как зарабатывать деньги на Android-играх</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228843/" target="_blank">Полезные материалы для мобильного разработчика #60 (30 июня-6 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228835/" target="_blank">Google опубликовал preview версию исходного кода Android L для линейки Nexus</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/228365/" target="_blank">Android Studio для NDK под Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/228125/" target="_blank">Реактивное программирование под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227991/" target="_blank">Полезные материалы для мобильного разработчика #59 (23-29 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227863/" target="_blank">Xamarin. За и против</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227541/" target="_blank">Android JNI + Intelij Idea + Gradle. Полная автоматизация процесса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/227171/" target="_blank">В Apportable SDK добавлена поддержка х86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227117/" target="_blank">Amazon привлекает разработчиков приложений для Fire Phone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/227109/" target="_blank">Полезные материалы для мобильного разработчика #58 (16-22 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226939/" target="_blank">Ошибки при разработке игр под мобильные платформы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226987/" target="_blank">Unity3D — написание плагинов для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226897/" target="_blank">64 миллисекунды после нажатия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/226871/" target="_blank">Удержание и возврат аудитории при помощи Email и Push-уведомлений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226307/" target="_blank">Раскрашиваем значки от гугла</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226357/" target="_blank">Реализация облачного бэкапа данных на основе Android Backup Service</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226297/" target="_blank">Navigation Editor — новый инструмент в Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226251/" target="_blank">Полезные материалы для мобильного разработчика #57 (8-15 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/226141/" target="_blank">Почему пришло время поддерживать только Android 4.0 и выше?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/promwad/blog/225871/" target="_blank">Разработка гаджетов для смартфонов: здоровье 2.0 и другие темы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225631/" target="_blank">Как мы Ур делали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ZeptoLab/blog/225735/" target="_blank">ZeptoLab и Codeforces объединяют усилия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225649/" target="_blank">Создание нестандартного компонента на основе ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225567/" target="_blank">Полезные материалы для мобильного разработчика #56 (2-8 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/225537/" target="_blank">DevConf::Mobi — уже на следующей неделе 14 июня, сформирована программа секции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225459/" target="_blank">Советы по сопровождению мобильного приложения для начинающего разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225423/" target="_blank">Вышло официальное обновление Android 4.4.3 доступное «по воздуху»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/225409/" target="_blank">Темная сторона мобильного трафика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/225101/" target="_blank">Мой опыт разработки Android игры и несколько слов о монетизации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224977/" target="_blank">Android-монстрик по имени FunLib</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176093/" target="_blank">Основы безопасности операционной системы Android. Безопасность на уровне Application Framework. Binder IPC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/224921/" target="_blank">DevConf 2014: Разработка под Android Wear (Google Glass, фитнес-трекеры, умные часы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/224285/" target="_blank">Шифрование и генерация случайных чисел в Android приложениях. Тестовые примеры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224889/" target="_blank">Google Maps clustering</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224817/" target="_blank">Полезные материалы для мобильного разработчика #55 (26 мая-1июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224685/" target="_blank">Синтезатор речи. Теперь и на русском</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224517/" target="_blank">Как подружить Android, Visual Studio и Parallels Desktop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224429/" target="_blank">С пультом по жизни или лень — двигатель прогресса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/224323/" target="_blank">Приглашаем разработчиков из Красноярска принять участие в хакатоне «Вперёд вместе с Google»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224289/" target="_blank">Написание MarkerInfoWindow для osmdroid</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/224233/" target="_blank">DevConf::Mobi 2014 — Голосуем сегодня за интересные доклады — формируем программу конференции сами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224223/" target="_blank">[ libGDX ] Пишем полноценную игру под Android. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224175/" target="_blank">[ libGDX ] Пишем полноценную игру под Android. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223949/" target="_blank">Разработка Android приложения для работы с OBDII протоколом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223997/" target="_blank">Облачная копипаста – открытые исходники</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/224089/" target="_blank">DevConf 2014: Пиратство и другие угрозы для Android-приложений. Как защищаться?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/224033/" target="_blank">Полезные материалы для мобильного разработчика #54 (19-25 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/223967/" target="_blank">Три стратегии продвижения мобильных приложений [Видео]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223837/" target="_blank">AndroidSocialNetworks — удобная работа с социальными сетями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223847/" target="_blank">Договор между разработчиком и Google Play на русском языке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/223415/" target="_blank">Intel GPA для Android — оптимизируем графику в мобильных приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/223431/" target="_blank">VoxImplant Android SDK: телефония и голосовые real-time коммуникации в вашем приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222977/" target="_blank">Создание репортов о тестировании Android-приложений с помощью Spoon и Emma</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/223203/" target="_blank">Полезные материалы для мобильного разработчика #53 (12-18 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/222747/" target="_blank">Третья встреча киевского Android Community в Ciklum. Не пропустите, будет жарко!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199258/" target="_blank">Распознавание Barcode Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222567/" target="_blank">Визуальное редактирование разметки внутри Android-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/istodo/blog/222021/" target="_blank">Кроссплатформенное мобильное приложение: Навигация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartgadget/blog/222471/" target="_blank">К 2019 году две третьих смартфонов будут разрабатываться поставщиками аппаратных платформ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222295/" target="_blank">Тайны кнопок в Android. Часть 3: Кнопки в главном меню</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222383/" target="_blank">Полезные материалы для мобильного разработчика #52 (5-11 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/222199/" target="_blank">Выжимаем максимум из DDMS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221851/" target="_blank">Списки с разными типами элементов и разными провайдерами данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221741/" target="_blank">Ввод паролей при сборке проектов с помощью gradle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221711/" target="_blank">Полезные материалы для мобильного разработчика #51 (28 апреля-4 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221679/" target="_blank">Do not keep activities</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221647/" target="_blank">Продажа приложений в Google Play из Украины</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221549/" target="_blank">Parse.com снижает цены</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220947/" target="_blank">AdMob, Qt 5.2 и Android или что бывает когда в интернете нет ответа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/istodo/blog/221335/" target="_blank">Чистый Android: частые ошибки портирования с iOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cleverpumpkin/blog/221329/" target="_blank">Как мы разрабатывали приложение для Хабрахабра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213291/" target="_blank">Генерируем и сканируем QR/BAR коды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/telebreeze/blog/221119/" target="_blank">Home Connect — одно приложение для всех брендов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/221029/" target="_blank">Полезные материалы для мобильного разработчика #50 (21-27 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220169/" target="_blank">Интеграция OneNote Services API в мобильные приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220877/" target="_blank">Qt 5.2, от желания до Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220835/" target="_blank">Как я с лагом Navigation Drawer боролся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/312272/" target="_blank">Приглашаем на Android Devs Meetup 20 октября</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/312262/" target="_blank">Онлайн трансляция Progressive Web Apps Day начинается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312222/" target="_blank">Знакомство с Telerik AppBuilder</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/312122/" target="_blank">Дайджест интересных материалов для мобильного разработчика #174 (3-9 октября )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/312010/" target="_blank">Онлайн конференция Google: Progressive Web Apps Day (11 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311716/" target="_blank">RetroBase — аналог Retrofit для запросов к базам данных</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311730/" target="_blank">OpenGL ES 2.0. Отложенное освещение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/simnetworks/blog/311670/" target="_blank">Антивирусы для Android могут не увидеть вирус — исследование и «Прачечная вирусов»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311636/" target="_blank">Суд Северной Калифорнии отказал Oracle в ходатайстве на новое рассмотрение по делу против Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310498/" target="_blank">Быстрая интеграция Google Chromecast в Android приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/220711/" target="_blank">Конкурс Intel® INDE beta: Оригинальное приложение для Android – твой пропуск на IDF14!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220689/" target="_blank">Как я писал кастомный локер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/219581/" target="_blank">Перекомпиляция Android библиотек под х86. JavaCV и Alljoyn</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220521/" target="_blank">Про Сталина, Дурова, печеньки и параметр EncryptedPasswd</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194530/" target="_blank">Авторизация с помощью клиентских SSL сертификатов в IOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/216857/" target="_blank">Синхронизация в Android приложениях. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219855/" target="_blank">ImageLoaders: Продолжение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220293/" target="_blank">Состоялся релиз библиотеки libGDX 1.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/219649/" target="_blank">Захват видео в Unity3d с помощью Intel INDE Media Pack для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/220065/" target="_blank">Полезные материалы для мобильного разработчика #49 (14-20 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219327/" target="_blank">VSDCT на OpenGL ES 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219747/" target="_blank">Хождение по граблям и кругам при создании игры с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218307/" target="_blank">Останавливаем скроллирование ScrollView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219801/" target="_blank">Создание standalone библиотеки под android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219655/" target="_blank">Автоматизация приемочного тестирования Android приложений с помощью Calabash</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217253/" target="_blank">Делаем ремейк «Chopper Duel» на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219521/" target="_blank">Humble Mobile Bundle 5!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219457/" target="_blank">Собираем свой Android для BeagleBoard</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219255/" target="_blank">LÖVE + Android + AdMob = дружба</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/219167/" target="_blank">Полезные материалы для мобильного разработчика #48 (7-13 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoftlumia/blog/218941/" target="_blank">Nokia X на Droidcon Moscow</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/218905/" target="_blank">Разработка Фоторамки для Яндекс.Диска под Android и Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217593/" target="_blank">По следам публикации в Google Play/App Store/ Steam Greenlight</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/218761/" target="_blank">Захват видео в OpenGL приложениях с помощью Intel INDE Media Pack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218739/" target="_blank">Что делать, если под рукой нет Android-устройства? Обзор Android-эмуляторов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218425/" target="_blank">Разработка Chromecast Ready приложения под платформу Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218453/" target="_blank">Экономим память: Picasso vs UniversalImageLoader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218381/" target="_blank">Полезные материалы для мобильного разработчика #47 (31 марта-6 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218365/" target="_blank">Новый SwipeRefreshLayout из библиотеки Android support — «потяните чтобы обновить»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/218253/" target="_blank">Droidcon Moscow 2014</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/218037/" target="_blank">Cложности создания и издательства первого Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/octodon/blog/217095/" target="_blank">Пользователь смартфона, знай свою скорость печати!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217809/" target="_blank">Исключение — твой друг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/216545/" target="_blank">Intel INDE Media Pack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217559/" target="_blank">Полезные материалы для мобильного разработчика #46 (24-30 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217517/" target="_blank">Полезное для Android разработчика #2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217377/" target="_blank">Поиск людей на фотографиях на Android с помощью OpenCV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/216353/" target="_blank">Интеграция Android Studio, Gradle и NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/217011/" target="_blank">Неприятный сюрприз от Eclipse</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216853/" target="_blank">Шлюз между IRC и Google Hangouts</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/216495/" target="_blank">Intel INDE</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216629/" target="_blank">Ошибки Android интерфейса Twitter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216755/" target="_blank">Полезные материалы для мобильного разработчика #45 (17-23 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216713/" target="_blank">Long Polling для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/206210/" target="_blank">Синхронизация в Android приложениях. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208984/" target="_blank">Управление рекламой (android)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216591/" target="_blank">Полезное для Android разработчика из Github</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alawar/blog/216473/" target="_blank">Отладка Android CMake проекта по-взрослому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216419/" target="_blank">Пишем свой Orm под Android с канастой и сеньоритами, Часть 3-я</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216283/" target="_blank">Google анонсировал SDK для носимых устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/216069/" target="_blank">Google выпустил новую версию Google Play (4.6.16) с новой опцией парольной защиты от бесконтрольных покупок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215963/" target="_blank">Полезные материалы для мобильного разработчика #44 (10-16 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoftlumia/blog/215875/" target="_blank">Приглашаем на вебинары для разработчиков по работе с платформой Nokia X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215647/" target="_blank">Android SDK vs NDK — сравнение производительности однотипных участков кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ntc-vulkan/blog/215693/" target="_blank">«Шпионская» камера в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215591/" target="_blank">Автоматизация установки множества apk файлов на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215329/" target="_blank">Dalvik vs Xamarin: так ли плох Xamarin?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215211/" target="_blank">Monkeyrunner. Pixel-perfect тестирование web-страниц на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215129/" target="_blank">Полезные материалы для мобильного разработчика #43 (3-9 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215077/" target="_blank">Пишем эффективный blur на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/215027/" target="_blank">Ошибки Android интерфейса Evernote</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/214125/" target="_blank">Защита от тёмных искусств, Эпизод I</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/214567/" target="_blank">Как перевести игру на 20 языков и не попасть в ад</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/214801/" target="_blank">Конференция Mobius: финальное расписание</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214683/" target="_blank">Обновлены средства разработки под android, поддержка java 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214345/" target="_blank">Полезные материалы для мобильного разработчика #42 (24 февраля-2 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/214269/" target="_blank">Еврокомиссия: «Фритуплей? Тогда никаких встроенных покупок!»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/214021/" target="_blank">Почему Intel не уйдет с мобильного рынка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167227/" target="_blank">Подробно о задачах Gradle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/214053/" target="_blank">Приглашаем принять участие в Сибирском хакатоне 1-2 марта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/213755/" target="_blank">MWC 2014. App Planet. Intel Software</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213747/" target="_blank">Samsung анонсировали Galaxy S5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213415/" target="_blank">Google Maps v2 для Android: Всплывающее окно с полноценной перерисовкой и поддержкой событий ввода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213193/" target="_blank">Очень простой слайдер экранов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213097/" target="_blank">10 анти-паттернов навигации в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/213027/" target="_blank">Обеспечиваем надежную работу Google Cloud Messaging</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/octodon/blog/212941/" target="_blank">Октодон: going deeper underground</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212873/" target="_blank">Разработка мобильных приложений. Зачем это бизнесу?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/delphi/blog/212611/" target="_blank">Мировой тур RAD Studio XE5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212425/" target="_blank">Приятное тестирование с Espresso</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/212341/" target="_blank">Простой способ модификации Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/212321/" target="_blank">Об открытости данных в Android-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/freeamp/blog/212125/" target="_blank">Создание галереи альбомов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211921/" target="_blank">Переадресуем уведомления о входящих звонках и смс на компьютер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/211224/" target="_blank">Из Google Play удаляют за альтернативные способы приёма платежей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210926/" target="_blank">Разработка под Android в NetBeans IDE без плагинов. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210898/" target="_blank">Пишем приложения для Sony SmartWatch и SmartWatch 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210584/" target="_blank">Пишем, собираем и запускаем HelloWorld для Android в блокноте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210632/" target="_blank">Продвижение Android приложений, рейтинги и ранжирование в топах Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210562/" target="_blank">Дизайнерский обзор Android 4.4 KitKat. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190428/" target="_blank">Модификация стоковых прошивок для Android. Часть 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/210162/" target="_blank">Работа с геозонами (geofences) в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209922/" target="_blank">Дизайнерский обзор Android 4.4 KitKat. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209910/" target="_blank">По следам бага и немного о событиях MotionEvent в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209206/" target="_blank">Сборка Android под Ubuntu Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/209050/" target="_blank">Geonames, Google Maps, Geocoding, часовые пояса и все, все, все</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189676/" target="_blank">ActionBar на Android 2.1+ с помощью Support Library. Часть 3 — Полезные функции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/205622/" target="_blank">Оптимизация Android приложений под х86. Опыт 2GIS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208504/" target="_blank">Еще раз об архитектуре Android приложения или джентльменский набор библиотек</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208374/" target="_blank">Intel заявила о поддержке Steam Machines и анонсировала Dual OS официально + ответ от AMD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/innopolis_university/blog/311576/" target="_blank">История создания приложения по поиску нянь в Ирландии и электронного официанта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311524/" target="_blank">Дайджест интересных материалов для мобильного разработчика #173 (26 сентября-2 октября )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311442/" target="_blank">Google сделал рассылку пользователям о возможности изменения поисковой системы по умолчанию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311398/" target="_blank">Программируйте там, где затык будет, а не там, где он был</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311388/" target="_blank">Особенности программного ProxyChanging'а в Android. Часть 1: от Jelly Bean до Lollipop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/309870/" target="_blank">Google Tango: управляем роботом в режиме дополненной реальности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/311084/" target="_blank">Укрощаем асинхронные процессы в Android с RxJava. Опыт Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/311332/" target="_blank">Московский Droidcon 2016: взгляд со стороны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310404/" target="_blank">Как я делал игру индейцев Центральной Америки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311264/" target="_blank">Как отлаживать Android ядро без UART, JTAG и прочих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207384/" target="_blank">Разработка под Android в NetBeans IDE без плагинов. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/208132/" target="_blank">Взаимодействие Android-устройств в локальной сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/207706/" target="_blank">Сборка Android под Mac OS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206790/" target="_blank">Android. Работаем с MS SQL без посредников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206952/" target="_blank">Автоматическая генерация ресурсов для приложений Android с помощью скриптов для Adobe Photoshop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/206748/" target="_blank">Разработка виджета под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206344/" target="_blank">Письмо счастья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/profit/blog/206218/" target="_blank">Встраиваем опросы для пользователей Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206064/" target="_blank">Тайны кнопок в Android. Часть 2: Рефакторинг верстки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/206012/" target="_blank">Тайны кнопок в Android. Часть 1: Основы верстки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205950/" target="_blank">В Android 4.4.2 удалили ключевую функцию безопасности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/startad/blog/205578/" target="_blank">StartAD.mobi: Приветствие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205620/" target="_blank">Использование SQLite в Android-разработке. Tips and tricks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/205308/" target="_blank">Continuous Integration для Android с использованием Jenkins + Gradle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204940/" target="_blank">Библиотека Header2ActionBar для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/202088/" target="_blank">Оптимизация приложений под Android x86: проверенные способы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204248/" target="_blank">Подсветка кода на android. Мой опыт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/204384/" target="_blank">Фишки для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/203822/" target="_blank">Создаем прототип 3D-игры за 60 минут с помощью Project Anarchy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203992/" target="_blank">Выполнение PhoneGap-приложений в десктопном браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203884/" target="_blank">Создание удобного OpenFileDialog для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203750/" target="_blank">Android google maps: создаем infowindow любой формы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203368/" target="_blank">Android In-app purchasing: платное отключение рекламы в своём приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/203222/" target="_blank">Апдейт Sony Add-on SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/203014/" target="_blank">Введение в Android NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/203006/" target="_blank">Google выпустил предварительную версию Glass Development Kit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202866/" target="_blank">Знакомимся с Dependency Injection на примере Dagger</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/202672/" target="_blank">Хакатон «Вперед вместе с Google!» отправляется в Новосибирск</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/202480/" target="_blank">Пишем свой Gradle плагин для AnnotatedSql</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201886/" target="_blank">Жизненный цикл Activity Stack (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ifree/blog/202132/" target="_blank">Искусственный интеллект под Android с открытым API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201752/" target="_blank">Превращаем статический сайт в мобильное приложение с помощью jQuery Mobile и PhoneGap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201598/" target="_blank">Опыт создания кроссплатформенной игры (iOS/Android)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201498/" target="_blank">AdMob разрешил блокировать нежелательную рекламу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201346/" target="_blank">ART идет на смену Dalvik</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/201214/" target="_blank">Жизненный цикл Activity Stack (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200954/" target="_blank">Рекомендации по использованию SQLite на мобильных устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200874/" target="_blank">Immersive Mode (режим погружения) в Android 4.4 KitKat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200878/" target="_blank">Хешируем строки на этапе компиляции с помощью annotation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200898/" target="_blank">Быстрая десериализация действительно больших JSON-ответов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200818/" target="_blank">Android идет в сторону Java 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200776/" target="_blank">Про мой опыт разработки под Android или тренируемся на Крестиках-Ноликах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172635/" target="_blank">QML Creator: разработка на QML под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200646/" target="_blank">Сборка Android приложений на Travis CI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/200430/" target="_blank">Qt на Android: Episode One</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/199492/" target="_blank">Внешние ресурсы в Android приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199396/" target="_blank">Разработка OpenGL ES 2.0 в Visual Studio С++</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/199280/" target="_blank">Re: Собеседование разработчика (альтернатива/дополнение)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/198802/" target="_blank">Новый опрос Developer Economics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/198386/" target="_blank">Яндекс запускает Метрику для приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hideninja/blog/198046/" target="_blank">История запуска приложения Hideninja VPN под Android (Часть 2): Путь до правильного UI, важность тестирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196708/" target="_blank">Разблокировка экрана Android с помощью NFC</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197330/" target="_blank">Habra Glass – как сделать геосоциальный сервис</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/197068/" target="_blank">Аудиофокус — управление доступом к звуковой подсистеме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/196912/" target="_blank">SlideStackView или Extending ViewGroup в Android (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/delphi/blog/196904/" target="_blank">Мировой тур RAD Studio XE5 во Львове, Уфе, Киеве, Минске</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194866/" target="_blank">Сравнение производительности Xamarin (monodroid) и Java (DalvikVM) на Android устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196546/" target="_blank">Готовим web-приложение под зоопарк версий Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/beetleplay/blog/196504/" target="_blank">Sprint Driver — почувствуй силу скорости</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hh/blog/196568/" target="_blank">HeadHunter на Android: наконец-то!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196366/" target="_blank">Как я хотел убежать от Admob. История про рекламные сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196378/" target="_blank">One Platform Foundation: Обзор AppDF и OpenIAB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/hideninja/blog/196238/" target="_blank">История запуска приложения Hideninja VPN под Android (Часть 1): Первый прототип, первый взлом In-App Purchase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196224/" target="_blank">Кастомизация переходных анимаций между Activity в ОС Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/196080/" target="_blank">Беспроводной дисплей для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/196102/" target="_blank">Теперь можно привязать Google Play Developer Console к аккаунту Google Analytics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Ciklum/blog/195978/" target="_blank">Ciklum Android Saturday собирает всех интересующихся Android разработкой в Виннице</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195830/" target="_blank">Пишем фреймворк для разработки игр — Mechanic Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dsec/blog/195788/" target="_blank">RCE в Android-приложениях через сторонние сервисы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194514/" target="_blank">ADB Uninstall плагин для Android Studio (IntelliJ IDEA)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/195140/" target="_blank">Добавление Admob в Unity3d и вывод поступивших денег с PayPal на банковский счет в России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194856/" target="_blank">Google glass с точки зрения разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194702/" target="_blank">Android vs iOS на примере одной игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/delphi/blog/194810/" target="_blank">Трансляция запуска RAD Studio XE5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/194344/" target="_blank">Разработка NFC приложений для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194310/" target="_blank">Самая Сложная Игра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/194246/" target="_blank">Компилятор Intel C++ v13.0 для Android — спешите получить бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194084/" target="_blank">JetBrains — разработка под Android для лентяев</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/194056/" target="_blank">Соединение SlidingMenu с Support Library и обход возможных проблем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164139/" target="_blank">Androgenizer — инструмент для сборки исходников под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/193122/" target="_blank">Использование NDK в Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/192998/" target="_blank">Отзывчивое Android-приложение или 1001 способ загрузить картинку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/touchinstinct/blog/191926/" target="_blank">C# async для iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192570/" target="_blank">Не AdMob-ом единым. Обзор интересных рекламных сетей и не только</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188682/" target="_blank">Оптимизация скорости [поиска] приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/192092/" target="_blank">AndEngine GLES2 — Живые обои</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191862/" target="_blank">Немного о том, как мы генератор фото-мозаики для Android писали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/touchinstinct/blog/191910/" target="_blank">Pixel-perfect верстка Android макетов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191898/" target="_blank">Android компонент с нуля — 2 — Лупа для изображения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191842/" target="_blank">Custom layouts. Part 2. CellLayout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191586/" target="_blank">Custom layout. Выплывающая панель + параллаксный скроллинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191290/" target="_blank">Определение местоположения пользователя с помощью Сервисов Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191276/" target="_blank">Ужесточение правил для разработчиков Google Play. Полный запрет push-рекламы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/191136/" target="_blank">Samsung выпустил драйвер exFAT под GPLv2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/190896/" target="_blank">Android 4.3 для Sony Xperia в подробостях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190876/" target="_blank">Оптимизируем скорость SQL вставки на Android устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189678/" target="_blank">ActionBar на Android 2.1+ с помощью Support Library. Часть 2 — Навигация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190668/" target="_blank">Android Intents Library</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190458/" target="_blank">Я обожаю программирование графики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/allcorrect/blog/190324/" target="_blank">Хорошая локализация: миссия невыполнима</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311250/" target="_blank">Использование Drag-and-drop между различными Activity в Android 7 Nougat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/311238/" target="_blank">Google Photos не может удалять файлы с SD карты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/310990/" target="_blank">Итоги Школы и все материалы по архитектуре клиент-серверных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/innopolis_university/blog/311190/" target="_blank">Университет Иннополис поможет бесплатно подготовить ИТ-специалистов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/311126/" target="_blank">Как это было: раскрываем детали Droidcon Moscow 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/309740/" target="_blank">CannyViewAnimator: переключаем состояния красиво</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/309872/" target="_blank">Маячки Eddystone для контроля расхода электроэнергии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/310926/" target="_blank">Безопасность Android-приложений. Лекция в Яндексе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310966/" target="_blank">Дайджест интересных материалов для мобильного разработчика #172 (19-25 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310886/" target="_blank">Заменяем бут-анимацию Android устройства на мелькающие логи Linux ядра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190230/" target="_blank">Выбираем время с помощью нового TimePickerDialog</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/190102/" target="_blank">Переводим ActionBar на следующий уровень</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189912/" target="_blank">Альфа и бета тестирование android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189680/" target="_blank">ActionBar на Android 2.1+ с помощью SupportLibrary</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yotadevices/blog/189784/" target="_blank">Анонс: знакомство с SDK YotaPhone для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189232/" target="_blank">CyanogenMod 10.1 — Полный обзор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189198/" target="_blank">Использование AI и утилит при разработке игр жанра Tower Defense</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188978/" target="_blank">История создания стартапа по разработке мобильных игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188860/" target="_blank">Простой пример использования библиотеки Volley</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188710/" target="_blank">Пишем приложения для Google Glass</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188738/" target="_blank">Фрагментация Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/188420/" target="_blank">Intel Power Monitoring Tool — на страже энергоэффективности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/iplexgroup/blog/188660/" target="_blank">Новая версия ipLex.Профи — «мобилизация» украинских юристов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/188592/" target="_blank">Автоматизация тестирования Android-приложений с помощью Robotium и Spoon</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188344/" target="_blank">Подробный обзор Android 4.3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188252/" target="_blank">OpenGL ES 3.0 в Android 4.3 — сжатие текстур ETC2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188092/" target="_blank">Android компонент с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187888/" target="_blank">Разработка одной игры — полезный опыт, немного денег и куча ошибок, Ч1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188146/" target="_blank">Google предлагает начинать разрабатывать приложения для Google Glass до выпуска Glass Development Kit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/188132/" target="_blank">Кросс-продвижение Android-приложений с помощью сети AppFlood</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187976/" target="_blank">ActionBar на Android 2.1 с помощью Android Support Library</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187594/" target="_blank">Создание нативной библиотеки расширений для OpenFL, часть третья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/187526/" target="_blank">Пишем свой Orm под Android с канастой и сеньоритами, Часть 2-ая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/freshfactory/blog/187438/" target="_blank">Как попасть в ТОП Apple App Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186984/" target="_blank">Конкурс ВКонтакте – Android мессенджер с шифрованием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/186920/" target="_blank">Конкурс мобильных приложений для города Moscow App Contest’13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/backendless/blog/186586/" target="_blank">Дело Че продолжает жить на платформе Backend as a Service</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/186766/" target="_blank">Beacon Mountain — теперь и для MacOS X</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186434/" target="_blank">Tasks и Back Stack в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/beetleplay/blog/186272/" target="_blank">BeetlePlay — знакомство</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/186078/" target="_blank">Пишем свой Orm под Android с канастой и сеньоритами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185940/" target="_blank">Модификация стоковых прошивок для Android. Часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185656/" target="_blank">HoloEverywhere 1.6.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/185696/" target="_blank">Работа с сетью в Android: трафик, безопасность и батарейка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185234/" target="_blank">Автоматизация разработки под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185096/" target="_blank">Мы спасены! Genymotion — забудьте про вашего эмулятора-слоупока</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185036/" target="_blank">Про борьбу с пиратами и продвижение на китайском рынке Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185012/" target="_blank">Взаимодействие с модемом в ОС Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/185004/" target="_blank">Создаем ListView с Context Action Bar как в новом Gmail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184978/" target="_blank">1C + офлайн карты на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184960/" target="_blank">Самостоятельная сборка cURL для iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184738/" target="_blank">Работа с cURL на android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/184708/" target="_blank">Архитектура мобильных ОС. Тенденции и впечатления пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184398/" target="_blank">Инди-игра для Android в цифрах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184500/" target="_blank">Можно ли бесплатно попасть в «топ» App Store и что делать, если бесплатно это сделать не получилось</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/184094/" target="_blank">Beacon Mountain — всё, что нужно Android разработчику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184280/" target="_blank">Форсирование режима автомобильного дока (с помощью root)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/184116/" target="_blank">Подключение шрифтов в своем проекте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183984/" target="_blank">Слой радиоинтерфейса в ОС Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183874/" target="_blank">Приход Node на Android: первые шаги</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183846/" target="_blank">Используем компонент из стандартного Android-приложения в своем проекте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183836/" target="_blank">Интеграция дизайна мобильных приложений. Часть 1: Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/183502/" target="_blank">Несколько полезных шаблонов для Android-разработки под eclipse</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/182506/" target="_blank">Портирование кода на мобильные устройства iOS/Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182780/" target="_blank">Простой каркас Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/182750/" target="_blank">SlideStackView или extending ViewGroup в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181820/" target="_blank">Основы верстки для нативных андроид приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182640/" target="_blank">Модификация стоковых прошивок для Android. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182380/" target="_blank">Клавиатура Google из Android 4.2 теперь доступна в Play Store в качестве автономного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartgadget/blog/182214/" target="_blank">Nikon CoolPix S800c: плохая камера и отличный гаджет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182138/" target="_blank">Как я не спал год или создание социального Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/samsung/blog/182084/" target="_blank">Стартовал всемирный конкурс для разработчиков мобильных приложений Samsung Smart App Challenge 2013</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/182034/" target="_blank">Stack Overflow заменяет официальную документацию по всем вопросам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181826/" target="_blank">Модификация стоковых прошивок для Android. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181610/" target="_blank">Пишем клиент для любимого сайта на phoneGap</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/promwad/blog/181546/" target="_blank">Тенденции рынка мобильной разработки в 2013 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/181117/" target="_blank">Смартфоны на Atom. Достижения и перспективы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181338/" target="_blank">Добавление анимации в ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/181273/" target="_blank">История плохого старта на Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180701/" target="_blank">Google Play Developer Console: новый функционал – новые проблемы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180507/" target="_blank">Добавление Google Apps в эмулятор Android (Intel x86 Atom System Image)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180515/" target="_blank">Управление голосом в приложениях на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179595/" target="_blank">Ubuntu ui toolkit на Ubuntu Touch и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/backendless/blog/180367/" target="_blank">Свой облачный бэкенд в одну строчку кода. Обзор BaaS платформы «Backendless»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/180245/" target="_blank">Сфера из двух треугольников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179991/" target="_blank">Как я писал Bomberman’а на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/179879/" target="_blank">Новые функции Google для разработчиков: игровые API, перевод и тестирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179095/" target="_blank">Термины, жаргон, определения Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179723/" target="_blank">Реверс AdMob SDK или еще один способ защитить свой код</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179683/" target="_blank">Google работает над инструментом синхронизации данных на разных Android устройствах (с одним аккаунтом)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dreamindustries/blog/179625/" target="_blank">Google I/O extended: Telegraph</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179575/" target="_blank">Теперь все разработчики могут отвечать на отзывы в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/179505/" target="_blank">Наступает особый день подготовки к DevConf 2013 — активное голосование за доклады</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/179487/" target="_blank">Защита Android приложений от взлома</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/178249/" target="_blank">AOSP для Sony Xperia Z</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178889/" target="_blank">JavaOne Russia или бенефис Куксенко с Шипилёвым. Отчет о конференции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178775/" target="_blank">PushSharp — простая работа с Push Notifications</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178673/" target="_blank">Как бороться с низкокачественными Android приложениями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178551/" target="_blank">Программы для Android запретили обновлять в обход Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178523/" target="_blank">Как я писал Pacman’a и что из этого получилось. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178497/" target="_blank">Каталог инструментов для разработки мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/178231/" target="_blank">Женщины устанавливают на 40% больше приложений и тратят на них на 87% больше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178095/" target="_blank">Что такое ASO и почему оно крайне необходимо сегодняшним разработчикам</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/178061/" target="_blank">Темы оформления. С блэк-джеком и WeakReference</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/178037/" target="_blank">Как я писал Pacman'a, и что из этого получилось. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177907/" target="_blank">Есть идея, но нет знаний: создаем приложение от идеи до релиза, с нулевым знанием кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/177605/" target="_blank">Шпаргалка по графическому дизайну Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/177277/" target="_blank">App Annie Index: отчет по рынку мобильных приложений, Q1 '13</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176631/" target="_blank">Основы безопасности операционной системы Android. Native user space, ч.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/devconf/blog/177307/" target="_blank">Devconf@Mobi() — 14 июня в Москве — авторы известных мобильных приложений делятся опытом разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/309876/" target="_blank">Победители Google Device Lab: исследуем Project Tango</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/310618/" target="_blank">Masking Bitmaps на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/muk/blog/310520/" target="_blank">Почему дополненная реальность добавляет риска сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310478/" target="_blank">Вышла стабильная версия Android Studio 2.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310454/" target="_blank">Секреты Progressive Web Apps: часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310392/" target="_blank">CTRL + G — хоткей, полностью изменивший принцип моей работы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/309852/" target="_blank">Сезон DevFest 2016 в 10 городах России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310294/" target="_blank">Дайджест интересных материалов для мобильного разработчика #171 (12-18 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/310206/" target="_blank">Как я потратил отпуск на свое первое приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309860/" target="_blank">MaterialViewPager — пример создания уникального приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/osc/blog/177267/" target="_blank">Кроссплатформенная разработка на Adobe Air: частный случай</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176919/" target="_blank">Создание нестандартного компонента с нуля. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176933/" target="_blank">Android NDK: OpenSL ES</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176765/" target="_blank">Краткое введение в MOAI Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176729/" target="_blank">Написание простого приложения для работы с RESTful API под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176643/" target="_blank">Создание нестандартного компонента с нуля. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176675/" target="_blank">Исследование Google Play и AdMob на примере одного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176559/" target="_blank">Основы Android NDK на примере работы с OpenAL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176371/" target="_blank">Разработка бизнес-приложений 1С + Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176355/" target="_blank">Баланс в играх жанра Tower Defense (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176131/" target="_blank">Основы безопасности операционной системы Android. Native user space, ч.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/176135/" target="_blank">Анонсирована новая версия Google Play (Google Play 4.0)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175825/" target="_blank">Ресурсы, о которых должен знать каждый Android-разработчик</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175517/" target="_blank">Основы безопасности операционной системы Android. Уровень ядра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175689/" target="_blank">Corona SDK Starter — бесплатная версия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175513/" target="_blank">Google меняет подход к подсчету популярности версий Android или обновленная статистика по актуальности версий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175455/" target="_blank">Эффективное клиент-серверное взаимодействие в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/175263/" target="_blank">Крупнейший международный хакатон в Москве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/175193/" target="_blank">AAML: Простейший язык разметки для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/175071/" target="_blank">BYOD в контейнере: виртуализуем Android. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/174961/" target="_blank">Русская версия «Экономики разработчиков 2013»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/174211/" target="_blank">BYOD в контейнере: виртуализуем Android. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174477/" target="_blank">Google Translate for Android теперь переводит без подключения к Сети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174201/" target="_blank">Sony SmartWatch, 7 приложений мечты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173303/" target="_blank">Загрузка PNG и JPEG картинок в Android NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174077/" target="_blank">Использование драйверов из Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/174015/" target="_blank">Сравнение Serializable и Parcelable. В секундах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173931/" target="_blank">Adblock теперь работает независимо от Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173913/" target="_blank">Баланс в играх жанра Tower Defense (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173767/" target="_blank">Полезные советы новичкам в дизайне под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173547/" target="_blank">HoloEverywhere v1.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173455/" target="_blank">Опрос о специфике тестирования при разработке приложений для Android?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/173109/" target="_blank">Используем Hierarchy Viewer для оптимизации Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172777/" target="_blank">Использование Berkeley DB в Android приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172639/" target="_blank">Qt 5 для Android: превью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172491/" target="_blank">Подключаем исходники Android в Eclipse</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172469/" target="_blank">Съемка Time Lapse видео под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/172467/" target="_blank">Подразделение Intel выпустило версию Android, оптимизированную под чипы Intel (c поддержкой UEFI)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/171779/" target="_blank">Облачная поддержка для приложений на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171623/" target="_blank">Под капотом: патч для Dalvik от Facebook для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruswizards/blog/171643/" target="_blank">Кастомизация эмулятора Android от Intel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/170517/" target="_blank">Ускорение криптоопераций или опыт портирования под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/samsung/blog/171235/" target="_blank">Коротко о новом: Samsung и Chillingo запускают программу для гейм-девелоперов — 100% Indie</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/171173/" target="_blank">«Умный» размер очереди в андроид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170945/" target="_blank">Инструменты студии мобильной разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/170787/" target="_blank">Intel приобретает набор HTML5 инструментов для разработчиков мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170641/" target="_blank">Объявлена официальная дата презентации Samsung Galaxy S IV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170541/" target="_blank">Сборка приложений под Android с использованием AIR SDK 3.6 в Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/170503/" target="_blank">Galaxy Note 8.0 анонсирован</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169997/" target="_blank">Представлен HTC One</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/168771/" target="_blank">Портирование Android приложения на BlackBerry 10</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169767/" target="_blank">Модификация Android приложения от новичка и для новичков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/169435/" target="_blank">Маленький отважный арканоид (часть 4)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/160911/" target="_blank">In-app Billing Subscriptions со стороны сервера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168843/" target="_blank">Мобильный web сайт или мобильное приложение?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168769/" target="_blank">Разработка софта на Nexus 7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168689/" target="_blank">dot42 — компилятор C# для Dalvik Runtime</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appsministry/blog/168573/" target="_blank">Страшная сказка на ночь для пользователей Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/168003/" target="_blank">Google заблокировал приложение Moon+ Reader по жалобе LitRes</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167807/" target="_blank">Yandex Map Kit for Android. Поворот карты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167679/" target="_blank">Общение между потоками через ResultReceiver</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167541/" target="_blank">Unity3d, в помощь начинающим</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167343/" target="_blank">Использование RichText в Android. Spannable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167323/" target="_blank">Замена манифеста при сборке в Marmalade под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/167315/" target="_blank">Android: используем Fragments для оптимизации интерфейса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166929/" target="_blank">Маленький отважный арканоид (часть 3 — Box2D)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/166829/" target="_blank">Вышел отчет Developer Economics 2013, лучшее исследование мобильной разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166469/" target="_blank">Диалоговые окна в Android. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166357/" target="_blank">Маленький отважный арканоид (часть 2 — YAML)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166351/" target="_blank">Текст с разметкой в android.widget.TextView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/166241/" target="_blank">Уникальный спикерский состав на Winter Nights</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/twins/blog/166093/" target="_blank">Используем векторные изображения SVG в приложениях Android, или как убить фрагментацию экранов и не потерять в качестве (плюсы, минусы, особенности)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/166051/" target="_blank">AnnotatedSQL: schema + content provider</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165861/" target="_blank">Управление декоративной подсветкой на Arduino с телефона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165731/" target="_blank">Daydream: Интерактивная заставка для Android 4.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165667/" target="_blank">Маленький отважный арканоид (часть 1 — IwGl)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/165421/" target="_blank">Разработчики теперь могут отвечать на комментарии в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164367/" target="_blank">Параллакс эффект для живых обоев на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164853/" target="_blank">Программирование под Android для начинающих. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164851/" target="_blank">Вызов Alertdialog из виджета</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164799/" target="_blank">Курс программирования под Android для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164745/" target="_blank">Ingress. Новенькое — обратный отсчет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164413/" target="_blank">Места распространения Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/164257/" target="_blank">Android в цифрах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164179/" target="_blank">Marmalade Framework (режим паузы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164107/" target="_blank">Трехмерные живые обои и OpenGL ES</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164059/" target="_blank">Как я свое бесплатное приложение для Android платным делал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164035/" target="_blank">Android: Quick control menu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/164025/" target="_blank">NVIDIA Nsight Tegra preview release</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/164021/" target="_blank">Тенденции мобильного рынка: итоги года по версии Distimo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163913/" target="_blank">Работа с COM портом в Android приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163885/" target="_blank">Использование фильтров из Box2D в Libgdx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163699/" target="_blank">История одного mBaaS (cloud backend) сервиса на примере QuickBlox</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162767/" target="_blank">Миллион загрузок в месяц или как сделать хороший старт на Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/161527/" target="_blank">Android: Написание многопоточных приложений с помощью Intel® Threading Building Blocks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/163397/" target="_blank">Пишем свой Android Market</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/163343/" target="_blank">Appnique дебютирует с новой службой, которая поможет разработчикам с ASO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161949/" target="_blank">Система достижений (achievements) в Linderdaum Puzzle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162741/" target="_blank">Запускаем консольные Java приложения на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162759/" target="_blank">Переходим с Google Maps на Yandex MapKit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/planado/blog/309842/" target="_blank">Выход «в поле»: Как мы делали мобильное приложение для повышения эффективности выездных работников</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/309840/" target="_blank">Android Dev: продолжение подкастов о профессиональной разработке под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309800/" target="_blank">Разработка мобильной 2D-игры «Составь слова из слова»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309504/" target="_blank">Пишем, собираем и запускаем HelloWorld для Android в блокноте. Java 8 и Android N</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/308498/" target="_blank">Air Berlin: реализация Progressive Web App</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309700/" target="_blank">Дайджест интересных материалов для мобильного разработчика #170 (5-11 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309622/" target="_blank">Таймер с ручным запуском (работа над ошибками)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309612/" target="_blank">Что интересного я вынес за два года разработки и продвижения мобильной игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/309500/" target="_blank">Приглашаем разработчиков на Droidcon Moscow 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309408/" target="_blank">Таймер с ручным запуском</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162511/" target="_blank">Framework в Мармеладе (часть 4)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162389/" target="_blank">Анимация фрагментов в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162181/" target="_blank">Мониторинг сообщений и звонков в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161891/" target="_blank">Интеграция AdMob в Cocos2d-x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/162079/" target="_blank">Работа с ContactListener из Box2d в Libgdx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161977/" target="_blank">Box2d и Libgdx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161959/" target="_blank">Framework в Мармеладе (часть 3)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161849/" target="_blank">Framework в Мармеладе (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161775/" target="_blank">Делаем OpenGL ES LiveWallpaper на Linderdaum Engine под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161681/" target="_blank">Framework в Мармеладе (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161457/" target="_blank">Пробуем на вкус API v2 карт под Android от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/161431/" target="_blank">50% прибыли в App Store и Play получают всего 25 разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/161355/" target="_blank">App Annie: половину дохода Google Play обеспечивает азиатский рынок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161305/" target="_blank">Google Cloud Messaging – пишем backend на PHP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161247/" target="_blank">Google выпускает вторую версию Maps Android API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/161027/" target="_blank">Получение изображения нужного размера без OutOfMemoryError + автоповорот согласно EXIF orientation</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/160685/" target="_blank">Как Fishing Joy 2 в Китае удается получать $1.6 млн в месяц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/159699/" target="_blank">Использование Renderscript на android-устройствах с процессорами Intel®</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159573/" target="_blank">Статистика по Android устройствам (2012, ноябрь)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159487/" target="_blank">AppSurfer в действии — андроид программы в браузере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/158795/" target="_blank">Sony Mobile признана производителем года сайтом xda-developers.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/159105/" target="_blank">GDG Moscow DevFest — немного видео и фотографий с мероприятия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158903/" target="_blank">Поддержите петицию к Motorola по открытию bootloader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/158297/" target="_blank">Sony продолжит вести проект Xperia S AOSP самостоятельно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158743/" target="_blank">Как портировать libcURL под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158675/" target="_blank">Unity3D 4.0 релиз</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158379/" target="_blank">Ключевые люди по тегу #AndroidDev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158439/" target="_blank">Cocos2d-x под Android: ускорение чтения файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/158453/" target="_blank">Реализуем боковую навигацию в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157721/" target="_blank">Ручная установка драйвера ADB</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157363/" target="_blank">Реализация Qt signal/slot на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157393/" target="_blank">Custom Themes для Custom Widgets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157253/" target="_blank">В Сеть выложили дамп Android 4.2 c Nexus 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/157063/" target="_blank">Коммуникация между Activity и Service</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156933/" target="_blank">Обмен сообщениями между облаком и устройством (Cloud to Device Messaging)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/156783/" target="_blank">Google Play догнал Apple App Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/156711/" target="_blank">Перехват HTTPS-траффика между Android-устройством и внешним сервером</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156327/" target="_blank">8% приложений в Google Play потенциально угрожают безопасности пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/156283/" target="_blank">AnnotatedSQL lib — автоматическая генерация базы данных в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/156063/" target="_blank">Монетизация Android растет с каждой новой версией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155879/" target="_blank">Асинхронная загрузка рисунков в TextView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154851/" target="_blank">AndroidAnnotations — упрощаем и укорачиваем код без вреда для здоровья проекта (I часть)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/155807/" target="_blank">Mobile Professional Days в Харькове</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155649/" target="_blank">Готовится образовательный ресурс по Android от XDA-developers</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/155239/" target="_blank">Google зовет на новый Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155193/" target="_blank">Treehouse для всех</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/155183/" target="_blank">В Google Play добавят рубли и рупии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154931/" target="_blank">Маленькая хитрость для отображения большого объёма данных в ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154895/" target="_blank">Google Play представили новую Developer Console</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154827/" target="_blank">AndroidKickstartr — создай современный проект в пять кликов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/154531/" target="_blank">AppSurfer: YouTube для приложений Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154395/" target="_blank">Еще один способ отладки Android приложений на виртуальном устройстве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/154443/" target="_blank">Sony открыла API Floating touch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154361/" target="_blank">Поиск контакта по номеру телефона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/154193/" target="_blank">Распознавание пользовательских жестов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153809/" target="_blank">1C 8.3.2: пишем приложение под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153341/" target="_blank">Знакомьтесь — Google Play Services</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152571/" target="_blank">Новое API в Gingerbread — StrictMode. Или боремся с ANR-диалогами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/153045/" target="_blank">Новый Yandex.Store — что, зачем и почему</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/153003/" target="_blank">HoloEverywhere</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152279/" target="_blank">Android — Сontinuous Integration. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/152339/" target="_blank">Медицинский справочник под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/151927/" target="_blank">Как правильно монетизировать игру</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/151855/" target="_blank">Обзор книги «Программирование под Android»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151831/" target="_blank">Разработчики Google Play из России теперь могут получать банковские переводы через Google Checkout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151791/" target="_blank">Видео последовательность в Drawable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151789/" target="_blank">Работать с AdMob в России станет проще с 1 октября 2012 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151492/" target="_blank">Пишем игру для Android используя Canvas</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/151433/" target="_blank">«Android для программистов: создаём приложения» — новая книга от Дейтелов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148160/" target="_blank">Работа с новой версией Google Analytics v2 на примере Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151310/" target="_blank">Разработчики из Google начали показывать примеры улучшения приложений [Видео]</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151285/" target="_blank">Android. Выпадающий список (Spinner) с индикатором загрузки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/151146/" target="_blank">Конференция «Облачная платформа Windows Azure для мобильных приложений»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151103/" target="_blank">Карты Yandex без использования Yandex Map Kit или карты из различных источников в приложении под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151080/" target="_blank">Способы отправки SMS эмулятору Android в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151003/" target="_blank">Настройки в стиле Holo Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/151002/" target="_blank">Вы покупаете софт для своего устройства на iOS/Android?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150871/" target="_blank">Button c обведенным(stroke) шрифтом на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150817/" target="_blank">Советы по Android Tabs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150742/" target="_blank">Сокет-клиент в сервисе и обновление UI через BroadcastReceiver</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/turbomilk/blog/150726/" target="_blank">КАД: все арбитражные суды России в одном Android-устройстве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150615/" target="_blank">Секционный список в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150559/" target="_blank">Несколько советов по архитектуре мобильного приложения, активно использующего сеть. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/150510/" target="_blank">Пользователи Android наконец стали покупать приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/turbomilk/blog/150416/" target="_blank">Selloby: как мы делали слонов под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150375/" target="_blank">Хорошая клиент-серверная архитектура</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150282/" target="_blank">Изменяем размер текста в заголовке TabWidget</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150143/" target="_blank">Change view. Изменяем вид интерфейса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150068/" target="_blank">Путь с указателями направления на карте с использованием Yandex Map Kit для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/150042/" target="_blank">Andengine: произвольный ландшафт с текстурой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/150009/" target="_blank">Покупки внутри приложений зависят от количества приложений и игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/turbomilk/blog/149955/" target="_blank">СПС «Право.ru» для Android — как это было</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149875/" target="_blank">Эти забавные BroadcastReceiver'ы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149610/" target="_blank">Как должны выглядеть Android приложения?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149624/" target="_blank">Настоящая проблема Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149561/" target="_blank">Kiosk Mode приложения на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149564/" target="_blank">Как отделить тему от приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149555/" target="_blank">Android: Обработка СМС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145907/" target="_blank">Android — Сontinuous Integration. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/149506/" target="_blank">Продвижение приложений: кросс-промо, рекламные сети и прямые продажи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309200/" target="_blank">Android: выдвигающийся экран снизу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308872/" target="_blank">Android Data Binding for RecyclerView: flexible way</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aacidov/blog/309088/" target="_blank">DisQwerty: чтобы печатать не нужно больше одной кнопки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309164/" target="_blank">Дайджест интересных материалов для мобильного разработчика #169 (29 августа-4 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309138/" target="_blank">Изучаем OpenGL ES2 для Android Урок №4. Текстуры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/309062/" target="_blank">Android до Госдумы доведет или Мобилизация гражданской сознательности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/309104/" target="_blank">Группировка моделей телефонов Android по контейнерам Docker</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308900/" target="_blank">Подключаем ККМ АТОЛ к AndroidStudio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308884/" target="_blank">Как я диплом писал/приложение создавал/на Google Play выкладывал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/308700/" target="_blank">Итоги отбора в школу Android-разработчиков в Казани</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/149399/" target="_blank">Как распределяется доход между приложениями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/149242/" target="_blank">Google Play ужесточает требования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/148935/" target="_blank">Freemium или free-to-play: есть ли разница</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148730/" target="_blank">Новый паттерн UI — боковая навигация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148704/" target="_blank">Corona SDK — для начинающих. Работа с несколькими сценами при помощи Storyboard API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/infopulse/blog/148512/" target="_blank">Эмулятор Bluestacks + Eclipse: ускоряем отладку и тестирование Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148436/" target="_blank">Командный паттерн вызова удаленных процедур (RPC) в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148218/" target="_blank">Изменение размера виджета в Android 4.1 Jelly Bean</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148142/" target="_blank">Секундомер под Android на Python + sl4a + fullScreenUI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/148011/" target="_blank">Конкурс Intel и The Code Project для Android игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/148003/" target="_blank">Завершен конкурс на мессенджер ВКонтакте для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147960/" target="_blank">Ежевичный джем для зеленых человечков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147546/" target="_blank">Кастомный ExpandableListView в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nevosoft/blog/147761/" target="_blank">Рынок смартфонов США (новое исследование)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147739/" target="_blank">Подробнее о реализации поддержки GCM на Android-клиенте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147585/" target="_blank">GCM – новый сервис Push-уведомлений от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147569/" target="_blank">Доступны видео Android-сессий конференции Google I/O 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147516/" target="_blank">Инструкция по компиляции Android 4.1 «Jelly Bean» на Ubuntu</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147335/" target="_blank">Конкурс ВК: Мессенджер для Android. Как это было!?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147243/" target="_blank">Бесплатные способы продвижения Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/147239/" target="_blank">10 правил, которые помогут приложению получить рекомендацию от Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147190/" target="_blank">Как сделать swipe-to-dismiss на Андроид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147081/" target="_blank">NVIDIA Nsight Tegra — плагин VS для нативной разработки Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/147090/" target="_blank">Кастомизация ProgressBar в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/turbomilk/blog/146601/" target="_blank">Как мы в Parcsis разрабатываем программы под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146803/" target="_blank">Создаём новый проект для Android по-новому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146667/" target="_blank">Ставим Google Play Store на виртуальный девайс с Jelly Bean (API 16)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146648/" target="_blank">Android 4.1 — Google I/O 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146632/" target="_blank">Некоторые “подводные камни” разработки под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146577/" target="_blank">Android UI конструктор в IntelliJ IDEA 12</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146557/" target="_blank">Скриншоты сервиса Samsung Apps</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146453/" target="_blank">Разработка черного списка sms для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146300/" target="_blank">Обновился сайт developer.android.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146277/" target="_blank">Google Play и root права для Android Emulator</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/146213/" target="_blank">Петиция в Qualcomm: финал?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/146114/" target="_blank">Как разогнать эмулятор Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/146086/" target="_blank">API по управлению энергией в Android может вызвать повышенный ее расход</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/146012/" target="_blank">Разработчики смогут отвечать на комментарии в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145389/" target="_blank">Работаем с веб-сервисом 1С из приложения на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145121/" target="_blank">Исследование приложений обмена местоположением</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145646/" target="_blank">Пересмотрите старые проекты для Android 4.0. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/145559/" target="_blank">Icenium: кросс-платформенная облачная среда для создания мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145442/" target="_blank">Способы проектирования баз данных в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145398/" target="_blank">Особенности AR в iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145337/" target="_blank">PHP for Android project</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145231/" target="_blank">Рисуем мерцающий текст системой частиц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145176/" target="_blank">DroidParts — библиотека для Android 8-in-1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145156/" target="_blank">Как создавать эффективные мобильные решения для предприятий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145092/" target="_blank">Пересмотрите старые проекты для Android 4.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145074/" target="_blank">Как я Android под Mac OS X собирал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/145068/" target="_blank">In-Out анимация в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144955/" target="_blank">Загрузка файлов .3DS на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144831/" target="_blank">Эффект Glow гауссовым размытием на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144672/" target="_blank">Отладка нативного кода Android NDK в Windows</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144547/" target="_blank">Определение подключенности Bluetooth под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144518/" target="_blank">Intel выпустила Android 4.0 для x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144503/" target="_blank">Google добавляет возможность периодических платежей в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144400/" target="_blank">Использование делегата для получения данных из AsyncTask</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144359/" target="_blank">Публикация приложения в Android маркеты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144377/" target="_blank">Stringer Java Obfuscation Toolkit: защита Java и Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144372/" target="_blank">ВКонтакте объявил конкурс на мессенджер под Android. Призовой фонд 3 000 000 рублей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144275/" target="_blank">Организация архитектуры взаимодействия Activity и Service</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/144156/" target="_blank">Петиция: Обновление OpenMAX IL для устройств на базе Qualcomm MSM7227</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143931/" target="_blank">Разнообразие Android-устройств</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/143770/" target="_blank">Вот как выглядит разработка для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143431/" target="_blank">ORM в Android c помощью ORMLite</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143517/" target="_blank">Туториал по libGDX — создание пользовательского интерфейса. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143479/" target="_blank">Перевод туториалов по libGDX — часть 3 (пакет scene2d)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143339/" target="_blank">ВКонтакте Android SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143425/" target="_blank">Конкурс от Samsung</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143405/" target="_blank">Перевод туториалов по libGDX — часть 2 (рисование изображений)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/143325/" target="_blank">Что нам несет обновление Titanium SDK до версии 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/143180/" target="_blank">Монетизация Google Play: бесплатными играми с доступом к биллингу оператора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142962/" target="_blank">Android. Заметка на будущее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142758/" target="_blank">Basic4Android. Пишем на бэйсике нативные приложения для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/142749/" target="_blank">NPD: фримиум игры — билет в прибыльное будущее</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/142641/" target="_blank">Доход Amazon Appstore с одного пользователя превышает доход Google Play и Apple App Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sonyxperia/blog/142614/" target="_blank">Sony выпустил опенсорсный инструмент для анализа APK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/142402/" target="_blank">Исследование «Экономика разработчиков 2012»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142256/" target="_blank">Android UI thread</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/apps4all/blog/142296/" target="_blank">Appcelerator/IDC: Мобильная разработка: 1 квартал 2012</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142149/" target="_blank">Маршруты на картах Google в вашем Android-приложении. Альтернативный подход</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141476/" target="_blank">Как ускорить реакцию на нажатие ссылок в WebView под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/142045/" target="_blank">Как пришлось бороться с нестабильным Google C2DM</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141890/" target="_blank">Секретные коды, или как я писал свое приложение для android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141833/" target="_blank">Маршруты на картах Google в вашем Android-приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141638/" target="_blank">Как вы получаете доход от своих приложений для Android?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141522/" target="_blank">Взлом одного Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141504/" target="_blank">Архитектура Android-приложений. Часть IV — интеграционный уровень</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/141201/" target="_blank">Архитектура Android-приложений. Часть III — основные части приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140928/" target="_blank">Android Notifications. Оповещения через Status Bar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140655/" target="_blank">Архитектура Android-приложений. Часть II — архитектурные стили и шаблоны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140529/" target="_blank">AlsaMixer для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140459/" target="_blank">Архитектура Android-приложений. Часть I — истоки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wapstart/blog/140314/" target="_blank">WapStart приветствует участников Mobilefest 2012 промо акцией</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140313/" target="_blank">Мобильные приложения с рекламой крайне негативно сказываются на продолжительности работы устройства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/140191/" target="_blank">Запись разговоров на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139929/" target="_blank">Android — фильтруем пины на карте, в зависимости от расстояния друг от друга</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139717/" target="_blank">Android SDK: боремся с ограничением размера памяти для картинок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139831/" target="_blank">Взаимодействие между приложением и службой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aacidov/blog/308772/" target="_blank">DisType: простое приложение для общения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/308748/" target="_blank">Опубликована программа Droidcon Moscow 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/305798/" target="_blank">MVP на стероидах: заставляем робота писать код за вас</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308714/" target="_blank">О том, как я пытался заработать на Pokemon Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308674/" target="_blank">Дайджест интересных материалов для мобильного разработчика #168 (22-28 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308538/" target="_blank">Crosswalk Project — замена Android WebView. Развитие проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/308452/" target="_blank">Осталось 7 дней для покупки Early Bird билетов на MBLTdev 16</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/scorocode/blog/308438/" target="_blank">Обзор метрик мобильного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308522/" target="_blank">О чём молчит Google и почему вам стоит использовать Apache HttpComponents в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aacidov/blog/308514/" target="_blank">Как узнать какие цветы дарить девушке, если у нее двигается только голова и она не может говорить?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139505/" target="_blank">Максимальный размер приложения в Android Market увеличен до 4&nbsp;ГБ</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139417/" target="_blank">Построение графиков на Android: sl4a, python и flot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139432/" target="_blank">AIDL (Android Interface Definition Language) и коммуникация между процессами (IPC)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139434/" target="_blank">MIT открыл Google App Inventor в бета-версии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139379/" target="_blank">Пишем плагины для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139293/" target="_blank">Портирование на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139330/" target="_blank">Конфигурация приложения в Android: быстрая разработка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139322/" target="_blank">AlertDialog setMultiChoiceItems, баг или неочевидная особенность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/139008/" target="_blank">Живые обои на Android без нативного кода или история написания Two Hearts Live Wallpaper</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/138821/" target="_blank">Continuous Integration для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137708/" target="_blank">Работа с потоковым аудио</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137861/" target="_blank">Приложение в честь Дня святого Валентина на libgdx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137820/" target="_blank">Собираем показания датчиков с Android смартфона. Работа над ошибками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137678/" target="_blank">Собираем показания датчиков с Android смартфона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137560/" target="_blank">Android, Huawei и логи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137292/" target="_blank">Существующие приложения и будущие Android x86 устройства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137339/" target="_blank">Слайдинг в двух — нет, в четырех направлениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137294/" target="_blank">Перемещение картинки вдоль произвольной кривой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137275/" target="_blank">Андроид живые обои. Как делать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136968/" target="_blank">Сказ о Cocos2d-android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/137021/" target="_blank">Интерфейс «как в маркете» и кое-что еще</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136942/" target="_blank">Выполнение задач в бэкграунде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136802/" target="_blank">Создание простой 2D игры на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136705/" target="_blank">Добавление поддержки Scala за несколько кликов в ваш Android-проект(Eclipse)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136267/" target="_blank">Валидаторы ввода под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136218/" target="_blank">Интеграция некоторых возможностей социальной игровой сети Scoreloop в приложение на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/136075/" target="_blank">Как воспользоваться вебкамерой в эмуляторе Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135902/" target="_blank">Упаковка Python-программы в формат APK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135856/" target="_blank">Улучшенный Android NDK (Native Development Kit)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135342/" target="_blank">Простой шаринг c Facebook и Twitter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135627/" target="_blank">XMPP-SMS шлюз на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/135226/" target="_blank">Выбор Pull To Refresh инструмента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134305/" target="_blank">Тёмная сторона ContentProvider'ов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134828/" target="_blank">Оптимизация расхода батареи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134853/" target="_blank">Глобальное обновление инструментария</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134754/" target="_blank">Учебный курс по разработке для Android от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134509/" target="_blank">Установка приложений Google в эмулятор Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134545/" target="_blank">Выложены дополнительные сборки Android-x86 4.0 под x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134186/" target="_blank">Универсальный ImageLoader для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134184/" target="_blank">Написание программы для простейшей синхронизации файлов по FTP для Android с помощью SL4A + Python</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134198/" target="_blank">Любопытство до SDK доведет</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134172/" target="_blank">По следам разрушителей мифов или Почему Android тормозит, а %мобильная ОС% нет?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134169/" target="_blank">Изменение вида выдачи данных в LogCat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134006/" target="_blank">Несколько проблем при разработке андроид приложений и способы их решения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/134003/" target="_blank">Разработчик Google развеивает мифы о «полном аппаратном ускорении» в Ice Cream Sandwich</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133858/" target="_blank">Монетизация Android-приложения с помощью рекламы от AdMob с возможностью платного отключения. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133609/" target="_blank">ARM выпустила Development Studio 5 Community Edition — среду разработки для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133576/" target="_blank">Используете ли вы другие маркеты для публикации своих приложений кроме Android Market?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133575/" target="_blank">ListView в Android: Кастомизация списков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133569/" target="_blank">ListView в Android: Простое использование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133534/" target="_blank">Мой опыт разработки/продвижения/поддержки. Perfect Ear</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133503/" target="_blank">Работа со строковыми ресурсами Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132870/" target="_blank">Управление зависмостями в Android-проектах с использованием Ivy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133355/" target="_blank">Стилизация приложений часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133307/" target="_blank">Стилизация приложений часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133239/" target="_blank">Кеширование изображений на SD карте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/133220/" target="_blank">31 метод эффективного программирования под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132875/" target="_blank">Пишем функцию сохранения картинок на SD-карту</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132810/" target="_blank">Пробуем AndEngine и physicsbox2d</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132720/" target="_blank">Поставщики содержимого. Взаимодействие с контактами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132646/" target="_blank">Шаблоны проектирования при разработке под Android. Часть 4 — Сохранение данных. Domain Model, Repository, Singleton и BDD</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132513/" target="_blank">PhoneGap — решение проблем в первом приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132277/" target="_blank">Работающий Pull to refresh</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132308/" target="_blank">Реализация режима энергосбережения DEEP&nbsp;IDLE в ядре Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132126/" target="_blank">Aibolit для android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/132017/" target="_blank">Генерация версии android приложения из ревизии subversion и git</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131889/" target="_blank">Слайдинг экранов с помощью ViewPager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131650/" target="_blank">Пишем справочник по математике под Android, подключаем рекламу Begun</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131041/" target="_blank">Некоторые возможности использования Intent'ов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131716/" target="_blank">Ожидание пользовательской реакции на Dialog в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131662/" target="_blank">Первый блин комом, или Как начать писать под Android и не бросить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131657/" target="_blank">Fruity Loops — скоро и для пользователей Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131652/" target="_blank">Шаблоны проектирования при разработке под Android. Часть 3 — Пользовательский интерфейс, тестирование, AndroidMock</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131637/" target="_blank">Инструменты функционального тестирования — Monkey и MonkeyRunner</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131579/" target="_blank">Использование паттерна mediator для переключения между activity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131560/" target="_blank">Реализация ProgressDialog и AsyncTaskLoader на фрагментах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131555/" target="_blank">Android: измерение скорости и расстояния с помощью акселерометра</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131446/" target="_blank">Шаблоны проектирования при разработке под Android. Часть 2 — MVP и Unit tests. Путь Джедая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131369/" target="_blank">Шаблоны проектирования при разработке под Android. Часть 1 — Введение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131377/" target="_blank">Порт SoX для Android или попытка создать идеальный плеер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131252/" target="_blank">Интеграция карт в ваше Android-приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131229/" target="_blank">Использование карты памяти /sdcard/ приложениями в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/131167/" target="_blank">Сборка Android проекта: исключение ненужных файлов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130977/" target="_blank">Еще один способ синхронизации потоков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130925/" target="_blank">Работа с фотографиями контактов в android 2.1+</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130774/" target="_blank">Вкусняшка при разработке Android-приложений в Eclipse</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130717/" target="_blank">USSD в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130718/" target="_blank">SDK Android 4.0 Ice Cream Sandwich будет доступно через… Уже доступно!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130422/" target="_blank">Проигрывание YouTube видео с помощью WebView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130319/" target="_blank">Фоновая подгрузка списков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130201/" target="_blank">Как ускорить эмулятор Android на 400%</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130194/" target="_blank">Android UI Patterns: Dashboard</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130148/" target="_blank">Основы Contacts API в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/130087/" target="_blank">Мой опыт написания программы под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129994/" target="_blank">Фрагментация?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129959/" target="_blank">Android приложения можно будет запускать на iPad</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129831/" target="_blank">Как вы думаете, должна ли иконка приложения (речь об ICQ) всегда висеть в зоне уведомлений Android?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129738/" target="_blank">Хабрачтец или как я сделал этим летом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129648/" target="_blank">Добавляем запись на стену Вконтакте из Android-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129582/" target="_blank">Делаем простейший сборщик ошибок для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308378/" target="_blank">5 UI фишек для современного Андроид приложения. Код, идеи и живой пример</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308318/" target="_blank">Password Visibility Toggle — Android Support Library, revision 24.2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308178/" target="_blank">Дайджест интересных материалов для мобильного разработчика #167 (15-21 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308152/" target="_blank">Использование библиотеки Android support percent на примере PercentRelativeLayout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/308040/" target="_blank">Дружественное введение в Dagger 2. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307974/" target="_blank">Будущее безопасности мобильных приложений, или чему нас могут научить покемоны</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307434/" target="_blank">Дружественное введение в Dagger 2. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307798/" target="_blank">Android string.xml — несколько вещей, которые стоит помнить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307700/" target="_blank">Дайджест интересных материалов для мобильного разработчика #166 (8-14 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307286/" target="_blank">Дайджест интересных материалов для мобильного разработчика #165 (1-7 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122510/" target="_blank">Flurry Analytics. Как держать руку на пульсе приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/129234/" target="_blank">Пишем простое приложение с использованием GoogleMap и прокачанным SimpleCursorAdapter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128844/" target="_blank">Пишем простейший сервис от кражи Android-коммуникатора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/128511/" target="_blank">Разработка приложений на языке Scala</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124322/" target="_blank">Пишем живые обои с часами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127940/" target="_blank">Пишем виджет, использующий API Яндекс.Метрики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127689/" target="_blank">Ещё одна игра для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127637/" target="_blank">Учимся считать в hex, или реверс-инженеринг будильника</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/127005/" target="_blank">Создание горизонтального скрола с градиентом и стрелками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126480/" target="_blank">Быстрая разработка приложений с использованием библиотеки Greendroid</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126316/" target="_blank">Работа с SurfaceView в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126238/" target="_blank">Мои экзерсисы. PaintUp — раскраска разноцветных эскизов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/126079/" target="_blank">Android App Inventor отдадут в Open Source</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125883/" target="_blank">Правильная работа с БД в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125812/" target="_blank">Смена языка приложения в настройках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125318/" target="_blank">Новичок о переходе с iOS на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125259/" target="_blank">Иконифицированное окно настроек (Preferences)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/125107/" target="_blank">ListView внутри ScrollView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124879/" target="_blank">Создание композитных компонентов на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124845/" target="_blank">Android: Вращаем на все четыре стороны AndEngine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124708/" target="_blank">Разработка для Android: Добавляем текст на ProgressBar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124484/" target="_blank">Процессы и потоки в Android: пишем AsyncTask правильно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123966/" target="_blank">Как улучшить читабельность нашего Android-кода или используем android-annotations</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/124098/" target="_blank">Платное и бесплатное приложения: два в одном</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123782/" target="_blank">Что нужно знать Android-разработчику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123707/" target="_blank">Разработка производительных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123642/" target="_blank">In-App Purchase в Android приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123542/" target="_blank">Как получить наибольшую выгоду от Crash Reports или упрощаем себе жизнь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123516/" target="_blank">Пишем игру для Android c помощью AndEngine. Часть 4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123457/" target="_blank">Помещаем файлы из Assets на SD-карту с помощью Infles</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123397/" target="_blank">Определение доступности GPS в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123367/" target="_blank">Пишем игру для Android c помощью AndEngine. Часть 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123361/" target="_blank">Android + Arduino = ♥</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123340/" target="_blank">Удаление иконки приложения из лаунчера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/123306/" target="_blank">Создаём модульное приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121113/" target="_blank">Быстрая сборка С++ библиотек под Андроид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122824/" target="_blank">Чтение XML файла с помощью App Inventor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122738/" target="_blank">Реклама для вашего Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122705/" target="_blank">Глубокое погружение в определение местоположения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122528/" target="_blank">Автоматическое генерирование APK с различными данными из командной строки с помощью Ant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122408/" target="_blank">Как подружить SQLite андроида с языком, отличным от английского</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122361/" target="_blank">Проблема с чтением файлов более 1Мб в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122281/" target="_blank">Проверка кармы пользователя сайта habrahabr.ru с помощью Python на Android. Часть 2 — GUI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122188/" target="_blank">Проверка кармы пользователя сайта habrahabr.ru с помощью Python на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/122157/" target="_blank">Кавказская кухня: проблемы и решения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/121153/" target="_blank">Gesturin — ввод жестами для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120931/" target="_blank">Custom View, скроллинг и жесты в Android на примере простого вьювера картинок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120863/" target="_blank">Пишем игру для Android c помощью AndEngine. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120772/" target="_blank">Это должен знать каждый</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120716/" target="_blank">Пишем игру для Android c помощью AndEngine. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120671/" target="_blank">Android Emulator и локальный веб-сервер (Denwer)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120273/" target="_blank">Как я боролся с Android NDK и NetBeans 6.8</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/120016/" target="_blank">Введение в Gestures</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119931/" target="_blank">Подробное руководство по установке Android-x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119831/" target="_blank">Знакомство с Pygame Subset for Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119693/" target="_blank">Сборка open-source библиотек на Android NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119547/" target="_blank">Тонкости 9-patch ресурсов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119243/" target="_blank">Осторожнее с SQLiteDatabase.insert-ами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/119023/" target="_blank">Заметки о ProgressDialog или как правильно показать прогресс выполнения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118867/" target="_blank">Отслеживание продаж при помощи Google Analytics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118482/" target="_blank">Sliding экранов внутри приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118376/" target="_blank">Google Docs для Android — развитие шаблонов UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118249/" target="_blank">Отчеты о продажах на Android Market</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/118086/" target="_blank">Робот без кофеина</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117997/" target="_blank">Виджет со счетчиком непрочитанных сообщений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117944/" target="_blank">In-app purchasing или внутренние платежи в приложениях для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117885/" target="_blank">Пишем клиент для Хабра под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117739/" target="_blank">Библиотека для работы с API Яндекс.Денег и демонстрационное Android-приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117672/" target="_blank">Widgets. Custom fonts</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/117513/" target="_blank">Кастомизация виджета Action Bar</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116945/" target="_blank">RoboGuice или «Андроид подсел на инъекции»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116830/" target="_blank">Разбор XML при помощи Simple Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116719/" target="_blank">Отслеживание установок приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116376/" target="_blank">Логирование в Android приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116309/" target="_blank">Особенность работы класса AsyncTask</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116294/" target="_blank">Отслеживание утечек памяти в Android приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116191/" target="_blank">Тестирование платежей внутри приложений Android Market</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116163/" target="_blank">Анализ памяти для Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/116106/" target="_blank">Пишем приложение под Android с поддержкой Cloud to Device Messaging (C2DM)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115812/" target="_blank">Пишем whois-клиент под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115338/" target="_blank">Renderscript часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115157/" target="_blank">Вызов .NET сервиса (WCF RESTful) из Android приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115127/" target="_blank">«Правильный» html парсинг</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115122/" target="_blank">Android Development Tutorial. Часть 2/?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115054/" target="_blank">Простой пример выполнения HTTP-запроса к web-сервису и разбор XML-ответа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/115022/" target="_blank">Android Development Tutorial. Часть 1/?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114784/" target="_blank">Профсоюз Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114776/" target="_blank">Пишем функцию обратной связи для Android-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114733/" target="_blank">SeekBar в настройках приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114692/" target="_blank">Pretty Painter – мое первое приложение под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114629/" target="_blank">OpenGL — это просто!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110247/" target="_blank">Пишем первое приложение для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114580/" target="_blank">Простой щелчок кнопки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114570/" target="_blank">Простое использование AsyncTask и ProgressDialog в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114544/" target="_blank">Интегрируем Twitter в ваше Android приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114515/" target="_blank">Hello World widget для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/114089/" target="_blank">Подсвечиваемый виджет в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113623/" target="_blank">Android nine-patch — растягиваем андроида</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113584/" target="_blank">Тестирование Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113535/" target="_blank">Введение в Renderscript</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318674/" target="_blank">Добавление ColorKey в libGDX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318482/" target="_blank">Разработка виджета под Android для отображения курса bitcoin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318470/" target="_blank">Система отслеживания степени заледенелости улиц: машинное обучение + Microsoft Azure + Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317760/" target="_blank">История в каждой вкладке или multiple backstack</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318392/" target="_blank">Дайджест интересных материалов для мобильного разработчика #185 (19-25 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318364/" target="_blank">Разработка игры для Android на Unity 5. От идеи до монетизации. Часть 2 (Live)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318296/" target="_blank">Android Things</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318278/" target="_blank">VR-приложение с нуля на libgdx: часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/317706/" target="_blank">Android Fingerprint API: приделываем аутентификацию по отпечатку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/317964/" target="_blank">Что общего у мобильного QA и осьминога</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307232/" target="_blank">Заставляем FFMPEG менять HLS потоки в зависимости от текущей пропускной способности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/307224/" target="_blank">Фея, корпорация зла и утка. Как реально делаются игры. Часть 2. Программист</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306808/" target="_blank">Пульт управления серверным демоном своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/307098/" target="_blank">Стартовала продажа билетов на конференцию Droidcon Moscow 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/307096/" target="_blank">Почему следует использовать RxJava в Android – краткое введение в RxJava</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/scorocode/blog/307002/" target="_blank">От регистрации до витрины: как выложить мобильное приложение в App Store и Google Play (часть 2)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wix/blog/305834/" target="_blank">Повторное использование строк для высокоэффективной работы со списками React Native ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306922/" target="_blank">Создание игры Doodle Jump для Android в Intel XDK за 2 часа на JavaScript с нуля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306928/" target="_blank">Изучаем OpenGL ES2 для Android Урок №3. Освещение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113480/" target="_blank">Работа с камерой в Android: снимаем видео</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/113196/" target="_blank">Fragments API в Android 3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112833/" target="_blank">Защита Android приложений от реверс-инжиниринга — ProGuard</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112612/" target="_blank">Google опубликовала превью Android 3.0 SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112565/" target="_blank">Как я продал права на своё приложение для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112450/" target="_blank">Отправка E-Mail средствами Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112295/" target="_blank">Первые впечатления от разработки под Андроидом — пишем handsfree</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112272/" target="_blank">Работа с камерой в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112185/" target="_blank">Вопросы по продвижению приложений для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112140/" target="_blank">Особенности работы с VideoView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112100/" target="_blank">Настройки в Android-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/112042/" target="_blank">Рекомендации к стилю кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111961/" target="_blank">Использование Android Search Dialog. Часть 3 — Custom Suggestions</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111868/" target="_blank">Стандарт разработки приложений под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111846/" target="_blank">Работа с прогресс диалогами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111603/" target="_blank">Хабраиндекс для статей по программированию под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111560/" target="_blank">О совместимости Android-приложений на различных устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111513/" target="_blank">Реверс-инжиниринг android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111511/" target="_blank">Игровой контроллер для ПК на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111493/" target="_blank">Использование Android Search Dialog. Часть 2 — Recent Query Suggestions</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111475/" target="_blank">Использование Android Search Dialog. Пример простого приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/111238/" target="_blank">[Программирование] Работа со строкой состояния в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/110003/" target="_blank">Основные UI паттерны разработки Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109944/" target="_blank">Пишем своё первое приложение на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/109486/" target="_blank">AndroidDev #1. Создаем файловый менеджер</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/108339/" target="_blank">Android Calendar API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103582/" target="_blank">Создание QuickAction диалогов в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/103347/" target="_blank">Диалоговое окно Android с «иконифицированным» меню</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306802/" target="_blank">Дайджест интересных материалов для мобильного разработчика #164 (25-31 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/surfingbird/blog/306252/" target="_blank">Эффективное кеширование. От теории к практике</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306746/" target="_blank">Основы реактивного программирования под Android на практическом примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305678/" target="_blank">Scripto — замена стандартному JavaScriptInterface</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/306138/" target="_blank">Открыта регистрация на MBLTdev 16 — Международную конференцию мобильных разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306300/" target="_blank">Простые сладкие приложения с Kivy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306296/" target="_blank">Дайджест интересных материалов для мобильного разработчика #163 (18-24 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/306246/" target="_blank">Кулуары VR. Библиотеки для отображения панорам 360*</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/306236/" target="_blank">Как настроить расширяемую систему для регрессионного тестирования на телефонах: опыт мобильной Почты Mail.Ru</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/306164/" target="_blank">App Intro c использованием видео из YouTube</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/scorocode/blog/305990/" target="_blank">От регистрации до витрины: как выложить мобильное приложение в App Store и Google Play (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305916/" target="_blank">Android и Data Binding: обработка действий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305792/" target="_blank">Дайджест интересных материалов для мобильного разработчика #162 (11-17 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305730/" target="_blank">Анализ обнаружения обфусцированных вирусов мобильными антивирусными приложениями на платформе Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305528/" target="_blank">Разработка Android приложений с использованием qt и android studio часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/305492/" target="_blank">Запуск бесплатной школы для Android-разработчиков в Казани перенесён на сентябрь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305478/" target="_blank">Используем RxJava и Retrofit на Android, учитывая поворот экрана</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305356/" target="_blank">Дайджест интересных материалов для мобильного разработчика #161 (3-10 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/305308/" target="_blank">По следам Google I/O 2016 — новый Firebase: интеграция с Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305288/" target="_blank">Замена системных файлов Android с помощью adb</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305264/" target="_blank">Как мы рассылали SMS со старой Nokia и телефона на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/miip/blog/304810/" target="_blank">Мобильная VR-игра на Unreal Engine: подводные камни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/305156/" target="_blank">Deform: simple database as a service</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304650/" target="_blank">Встраиваем прием платежей в мобильное приложение, или почему можно забыть про PCI DSS и PA DSS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/304640/" target="_blank">Instant Run: как это работает?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304620/" target="_blank">Дайджест интересных материалов для мобильного разработчика #160 (27 июня-3 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303018/" target="_blank">Фейковая Новелла: новый опыт и работа над ошибками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/304506/" target="_blank">Intel Edison, Windows Phone и Microsoft Azure: облачный союз пульта и светодиода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/304488/" target="_blank">Shake Detector для Android на RxJava</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/280117/" target="_blank">Теория и практика AOP. Как мы это делаем в Яндексе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ridewithme/blog/304262/" target="_blank">Единственный способ вытащить человечество из лап интернета — #СпортСПервымВстречным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/304260/" target="_blank">Google I/O 2016: WatchFace 2.0 — Complications</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303990/" target="_blank">Как работает умный обработчик служебных смс (показывает только важную информацию)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/scorocode/blog/303954/" target="_blank">Обзор новорождённой платформы Scorocode</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304208/" target="_blank">AndroidAudit. Ваше Android-приложение как место преступления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304136/" target="_blank">Дайджест интересных материалов для мобильного разработчика #159 (20-26 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/304062/" target="_blank">Сравнение eCPM рекламных сетей на личном опыте</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303926/" target="_blank">Структура Android проекта – альтернативный путь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303912/" target="_blank">Создание поиска по библиотеке юным программистом — каково это?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303888/" target="_blank">3DO и Android NDK и как бы во что не вляпаться…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/303732/" target="_blank">Mobius 2016: мобильная разработка по-новому</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303626/" target="_blank">Progressive Web Apps: WhoAmI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303610/" target="_blank">Дайджест интересных материалов для мобильного разработчика #158 (14-19 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/303536/" target="_blank">Программе Android Security Rewards исполнился 1 год</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303514/" target="_blank">Нюансы Firebase messaging для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/303272/" target="_blank">Бесплатная школа для Android-разработчиков в Казани</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/303208/" target="_blank">Книга «Android для разработчиков»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303158/" target="_blank">Дайджест интересных материалов для мобильного разработчика #157 (6-13 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303142/" target="_blank">OpenGL ES 2.0. Один миллион частиц</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/303064/" target="_blank">Создание приложения под Android или проект без названия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302918/" target="_blank">Colors Go! Игра-мутант из Color Lines</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/302666/" target="_blank">Google Developers Agency Pro: сертификация для лучших разработчиков Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/niceplay_games/blog/302486/" target="_blank">Подводные камни при релизе игры в Google Play и App Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302616/" target="_blank">Дайджест интересных материалов для мобильного разработчика #156 (30 мая-5 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302552/" target="_blank">Динамический blur на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/badoo/blog/302534/" target="_blank">Как мы разработали чат-фреймворк для Android приложения — Chateau</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/kaspersky/blog/302508/" target="_blank">Не соблаговолите ли подискутировать о тестировании мобильных приложений?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/302482/" target="_blank">Google I/O 2016: развитие платформы Firebase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302480/" target="_blank">Работа с анимацией. AnimatedVectorDrawableCompat</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/302400/" target="_blank">3 греха мобильной разработки на Mobius 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/1c/blog/302396/" target="_blank">Мобильная платформа 1С: Предприятия в действии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/302152/" target="_blank">Android за пределами смартфонов: вопросы взрослым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/302202/" target="_blank">Google I/O 2016: Улучшения в области тестирования и доставки приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/302070/" target="_blank">Кроссплатформенная мобильная разработка: вопросы взрослым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/302106/" target="_blank">ConstraintLayout 101 и новый редактор компоновок в Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302084/" target="_blank">Ionic: комментарии к мифам после года использования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302082/" target="_blank">Дайджест интересных материалов для мобильного разработчика #155 (23-29 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/302002/" target="_blank">Push уведомления в Android с помощью Firebase Cloud Messaging для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/301904/" target="_blank">Google I/O 2016: Подробности об Android N и Android-экосистеме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/301858/" target="_blank">Большое интервью с Ханнесом Дорфманом, создателем фреймворка Mosby для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301852/" target="_blank">Разработка Android приложений с использованием qt и android studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301832/" target="_blank">Исследование защищенности карты Тройка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intersystems/blog/301470/" target="_blank">Push-уведомления на Android в InterSystems Ensemble на примере Штрафов ГИБДД</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301776/" target="_blank">Осторожно — Бульдозер (сборка apk пакетов в Kivy)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301752/" target="_blank">Работа с SignalR из Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301716/" target="_blank">Marmalade SDK. Интеграция с сервисами рекламы AdMob, Chartboost, Inmobi и Leadbolt на платформах iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301610/" target="_blank">VectorDrawable — часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301578/" target="_blank">VectorDrawable — часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/301504/" target="_blank">Google I/O 2016 в подробностях: перспективы и технологии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301364/" target="_blank">Mastering Android NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/speakasap/blog/301416/" target="_blank">FlexboxLayout — часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301360/" target="_blank">Дайджест интересных материалов для мобильного разработчика #154 (16-22 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/301174/" target="_blank">Generics в Kotlin vs. Generics в JAVA: cходства, различия, особенности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301190/" target="_blank">Управляем компьютером с Android устройства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301184/" target="_blank">Разработка приложения для разгадывания филиппинских кроссвордов на C++ в среде Marmalade SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/301128/" target="_blank">Работа с ListView в Xamarin.Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/317988/" target="_blank">Новая зимняя стажировка для разработчиков в Redmadrobot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/318006/" target="_blank">Разработка и публикация первой игры под Android на Unity3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317970/" target="_blank">Как не писать лишнего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317928/" target="_blank">RxJava. Убираем магию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317868/" target="_blank">Дайджест интересных материалов для мобильного разработчика #184 (12-18 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317824/" target="_blank">Генератор палитры для мобильных игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317610/" target="_blank">Тестовое задание как средство сбора идей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/317580/" target="_blank">Android и «интернет вещей» стали ближе друг к другу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317532/" target="_blank">Ранний доступ в Google Play. Что внутри?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317462/" target="_blank">Стабилизация экрана в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283274/" target="_blank">Зайцев Нет под Android — история создания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/300934/" target="_blank">Оптимизация Java-кода в Android Marshmallow</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/speakasap/blog/300908/" target="_blank">FlexboxLayout — часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283580/" target="_blank">Дайджест интересных материалов для мобильного разработчика #153 (10-15 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283132/" target="_blank">Qook: Портировать старую игрушку на Android и поделиться ей с миром</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/283514/" target="_blank">Бусидо Mobius: Путь участника</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283494/" target="_blank">Разработка простого приложения «шагомер» на ReactNative</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283426/" target="_blank">Оптимизация работы USB-устройств под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/283230/" target="_blank">Material Design: философия и практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/1c/blog/283198/" target="_blank">О мобильной платформе 1С: Предприятия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283186/" target="_blank">Пример создания простой 2D игры для Android с использованием игрового движка Unity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283154/" target="_blank">Дайджест интересных материалов для мобильного разработчика #152 (4-9 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/283018/" target="_blank">Dagger 2. Лечим зависимости по методике Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/283012/" target="_blank">Опыт использования контрактов при вызовах REST API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/282960/" target="_blank">Android N: как Google «закручивает гайки»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282914/" target="_blank">Пишем фоновый процесс на Apache Cordova</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282876/" target="_blank">Дайджест интересных материалов для мобильного разработчика #151 (25 апреля-3 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282846/" target="_blank">Разбор заданий с Google CTF 2016: Mobile</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/274135/" target="_blank">Animator — что это? Зачем он нужен? Почему его стоит использовать вместо Animation?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/282784/" target="_blank">The Art of Rx</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/euler2012/blog/282732/" target="_blank">My Location Companion — Фото сообщения и контроль магнитного поля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/282696/" target="_blank">Xamarin Forms в действии. Medchest Assistant</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/282536/" target="_blank">Создаём игру для самых маленьких на Phaser в Intel XDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282590/" target="_blank">Рендеринг капли с прозрачностью и отражениями на OpenGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282582/" target="_blank">Использование Open Source OCR библиотеки Tesseract в Android на примере простого приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282427/" target="_blank">Нативная реклама возвращается: Native Admob, RecyclerView и вкратце о правилах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281312/" target="_blank">Кюветы Android, Часть 3: SDK и RxJava (Финал)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282491/" target="_blank">Гуру слов, проблемы с Unity3d, и счастливый финал в итоге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275255/" target="_blank">Пишем MVP приложение на Kotlin под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282505/" target="_blank">Qt Quick Controls 2 — обещанного три года ждут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282499/" target="_blank">QFont и размер шрифта не зависящий от устройства</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282417/" target="_blank">1 разработчик. 2 приложения. 3 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282315/" target="_blank">Дайджест интересных материалов для мобильного разработчика #150 (18-24 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282309/" target="_blank">PaintCAD Mobile — пиксель арт на телефоне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282193/" target="_blank">«Подсмотрено» — путь от идеи для VK Mobile Challenge до реального продукта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282191/" target="_blank">Рендеринг UTF-8 текста с помощью SDF шрифта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/282143/" target="_blank">Как Google в Лондоне тренинг по Android N устраивала</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282129/" target="_blank">Работа с геозонами (geofences) в Android. Обновление</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/282065/" target="_blank">Как это сделано: мобильный кроссплатформенный движок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/279835/" target="_blank">AES шифрование и Android клиент</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281965/" target="_blank">Какую библиотеку работы с HTTP в Android выбрать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281771/" target="_blank">Дайджест интересных материалов для мобильного разработчика #149 (11-17 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/281739/" target="_blank">Конкурс на лучшую публикацию про разработку, дизайн или тестирование мобильного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281557/" target="_blank">Автоматизация публикации приложения в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/281555/" target="_blank">Как мы делали Зимнюю Стажировку по iOS- и Android-разработке в Redmadrobot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/281551/" target="_blank">ТОП-5 докладов с конференции по мобильной разработке Mobius 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281290/" target="_blank">Асинхронные операции и пересоздание Activity в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281286/" target="_blank">Дайджест интересных материалов для мобильного разработчика #148 (4-10 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280190/" target="_blank">Кюветы Android, Часть 2: SDK и Libraries</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/281238/" target="_blank">IoT-решение за 1,5 часа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/280388/" target="_blank">Разбираемся с многопоточностью в RxJava</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/281226/" target="_blank">Сравнительное тестирование девяти ORM для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/281200/" target="_blank">Одновременный анализ энергопотребления/производительности Android-устройств с помощью Intel VTune Amplifier и SoC Watch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/281142/" target="_blank">Xamarin для всех! И другие анонсы по теме с Build 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/281136/" target="_blank">Омск! Приглашаем на практический StudyJam по Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280808/" target="_blank">«Garage» — для станции технического обслуживания</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280770/" target="_blank">Дайджест интересных материалов для мобильного разработчика #147 (28 марта-3 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/it_people/blog/280742/" target="_blank">После небольшого перерыва мобильная секция на DUMP возвращается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/abbyy/blog/280678/" target="_blank">Мобильный OCR. Как всё начиналось</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280596/" target="_blank">Как я VK Mobile Challenge принял</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280586/" target="_blank">Сохранение состояния фрагментов (Fragment)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/280548/" target="_blank">Отчёт с Android Devs Meetup 17 марта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280528/" target="_blank">Радость и грусть разработки на Qt под Android (и не только)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/securitycode/blog/280468/" target="_blank">Сказ о том, как ГОСТ-шифрование диска в Android реализовывали</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280340/" target="_blank">Исследование проблем производительности вызова ClassLoader.getResourceAsStream</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280374/" target="_blank">Измерение покрытия кода тестами в Android с помощью JaCoCo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280264/" target="_blank">5 советов по подготовке вашего приложения к мультиоконному режиму в Android N</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280258/" target="_blank">Дайджест интересных материалов для мобильного разработчика #146 (21-27 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280222/" target="_blank">Автоматизированное тестирование базовой доступности интерфейсов Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279811/" target="_blank">Кюветы Android, Часть 1: SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/280107/" target="_blank">Qt для мобильной кросс-платформенной разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/280095/" target="_blank">Эмуляция и перехват SIM-команд через SIM Toolkit на Android 5.1 и ниже (CVE-2015-3843)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/279799/" target="_blank">Построение Android приложений шаг за шагом, часть третья</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/279991/" target="_blank">Анонс Mobius 2016: конференция по мобильной разработке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279641/" target="_blank">Dagger 2. Часть вторая. Custom scopes, Component dependencies, Subcomponents</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279979/" target="_blank">Пять шагов по оптимизации производительности приложения для Андроид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279973/" target="_blank">Дружим Scala и Android с помощью Macroid</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279685/" target="_blank">Дайджест интересных материалов для мобильного разработчика #145 (14-20 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279379/" target="_blank">Google's beacon platform. Часть 2 — Nearby meassages API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279573/" target="_blank">DroidShoter — скриншоты приложения на разных разрешениях экрана, используя одно устройство и Adb</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/279565/" target="_blank">Новые возможности в Google Play Игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279553/" target="_blank">Есть ли жизнь без Google Play? Альтернативы и обновление приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/278993/" target="_blank">Подробности про Azure Mobile Engagement — эффективный сервис вовлечения мобильных пользователей</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279381/" target="_blank">Google's beacon platform. Часть 1 — Proximity beacon API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279267/" target="_blank">Android клиент для rutracker: обходим блокировку при помощи Google Compression proxy</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/279351/" target="_blank">[Москва] Встреча с разработчиками Kotlin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/279289/" target="_blank">Книга «Android. Программирование для профессионалов»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278815/" target="_blank">Архитектура Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/279263/" target="_blank">Приглашаем на Android Devs Meetup 17 марта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279195/" target="_blank">Как легко и непринужденно написать игру за 2 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279125/" target="_blank">Dagger 2. Часть первая. Основы, создание графа зависимостей, Scopes</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/reactos/blog/279139/" target="_blank">Приглашаем всех на первый хакатон в истории Ставропольского края</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/279133/" target="_blank">Дайджест интересных материалов для мобильного разработчика #144 (9-13 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/279075/" target="_blank">Превью Android N: API и инструменты разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/279061/" target="_blank">Тест Icy Rocks для Android: пришло время реальных испытаний</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278945/" target="_blank">Android runtime permissions. Почему, зачем и как</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278895/" target="_blank">Изучаем OpenGL ES2 для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278769/" target="_blank">Расширяемый код Android-приложений с MVP</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278777/" target="_blank">Дайджест интересных материалов для мобильного разработчика #143 (29 февраля-8 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277529/" target="_blank">Фейковая Новелла: маленькая игра, разработка которой многому меня научила и очередной бан от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317334/" target="_blank">Дайджест интересных материалов для мобильного разработчика #183 (5-11 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316766/" target="_blank">Как Ionic 2 помогает мне вникнуть в angular 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317236/" target="_blank">Разработка игры для Android на Unity 5. От идеи до монетизации (Live)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/inoventica/blog/317152/" target="_blank">В приложении AirDroid была найдена критическая уязвимость, которая позволяет проводить MitM-атаки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/317052/" target="_blank">Разработчики Android добились уменьшения размера обновлений в среднем на 65%</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316746/" target="_blank">Dual-pane с использованием фрагментов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316794/" target="_blank">Дайджест интересных материалов для мобильного разработчика #182 (28 ноября-4 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/316714/" target="_blank">Модульное приложение на Xamarin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mobio/blog/316542/" target="_blank">Интервью с Андреем Ивашенцевым (Game Insight) о будущем VR и AR</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316528/" target="_blank">Добавление AdMob рекламы в Android приложение с использованием Firebase</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wargaming/blog/278601/" target="_blank">WG Labs объявляет конкурс разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/278603/" target="_blank">Сборка библиотеки FreeType для Android x86 с использованием NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/278493/" target="_blank">Компиляция SQLCipher для Android x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278451/" target="_blank">Работа мечты или небольшая история мобильной разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/278365/" target="_blank">В Казани стартовали курсы Study Jam для Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278333/" target="_blank">Оптимизация HTML5 игр для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/278099/" target="_blank">Дайджест интересных материалов для мобильного разработчика #142 (24-28 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277979/" target="_blank">Альтернативы сервису parse.com</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/277871/" target="_blank">[Питер] Встреча JUG.ru с разработчиками Kotlin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/277875/" target="_blank">Microsoft приобретает компанию Xamarin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277813/" target="_blank">Перехватываем всё с помощью CoordinatorLayout Behavior</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277705/" target="_blank">Разработка библиотеки для iOS/Android на Golang</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/277771/" target="_blank">Открытые курсы Android StudyJams по всей России</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277761/" target="_blank">Дайджест интересных материалов для мобильного разработчика #141 (15-23 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277729/" target="_blank">Сборка гибридного приложения под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277605/" target="_blank">Нюансы разработки плагина под Unity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/JetBrains/blog/277573/" target="_blank">Kotlin 1.0. Задай вопрос команде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/277569/" target="_blank">Битва за скорость звука на Android x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/277343/" target="_blank">Построение Android приложений шаг за шагом, часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/host-tracker/blog/277475/" target="_blank">Gmailify: лучшие из функций Gmail теперь доступны без почтового ящика @gmail</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277481/" target="_blank">Встреча Android-разработчиков, посвящённая языку Kotlin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/277411/" target="_blank">Есть идея: защита данных на Android с помощью eCryptfs</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277289/" target="_blank">Аргументы против использования фрагментов в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277257/" target="_blank">Список технических и IT конференций 2016. Часть #3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277185/" target="_blank">Дайджест интересных материалов для мобильного разработчика #140 (8-14 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/277003/" target="_blank">Android VIPER на реактивной тяге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276189/" target="_blank">Moxy — реализация MVP под Android с щепоткой магии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277093/" target="_blank">Работа с устройствами USB в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruward/blog/277057/" target="_blank">Стартовал конкурс мобильных приложений Golden App 2016</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/277047/" target="_blank">Разработчики приложений не заботятся о безопастности пользователей, что приводит к утечке данных (с примерами java-кода)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/277023/" target="_blank">Книга «Head First. Программирование для Android»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276139/" target="_blank">Простейшая 3D игра на libGDX под Android в 200 строк кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276991/" target="_blank">Список технических и IT конференций 2016. Часть #2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/276927/" target="_blank">Рецепты под Android: IoC со вкусом Gradle</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276923/" target="_blank">Создание концепции мобильной f2p игры. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/276881/" target="_blank">Знакомьтесь: Jack и Jill на платформе x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/276851/" target="_blank">АльфаCтрахование Мобайл. Как мы объединили несколько ИТ-систем в одном приложении: кейс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/2gis/blog/276837/" target="_blank">Новый 2ГИС для Android — начинаем публичное тестирование</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276737/" target="_blank">Дайджест интересных материалов для мобильного разработчика #139 (1-7 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276631/" target="_blank">Навыки гейм-дизайнера</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276651/" target="_blank">Google выбросил блокировщик рекламы из Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276619/" target="_blank">Анализ Android малвари-матрешки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/275421/" target="_blank">Новые подкасты о профессиональной разработке под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/276099/" target="_blank">Добавляем в Android-приложение систему локального поиска</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/promwad/blog/276467/" target="_blank">Дозиметр в интернете вещей: составляем карту радиоактивных зон для себя и всего мира</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/275419/" target="_blank">Конкурс Android-приложений для студентов-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276447/" target="_blank">Как я написал игру за 3 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276431/" target="_blank">Создание Android-приложения. Персонализация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/276407/" target="_blank">Руководство по миграции сервера Parse для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276381/" target="_blank">Кому жить, а кому умереть: приоритеты процессов в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276119/" target="_blank">Рекламные сети 3.0: как разработчику перестать раздражать пользователей и при этом заработать больше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/275417/" target="_blank">DevFest Калининград-2015: фотоотчёт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276259/" target="_blank">Дайджест интересных материалов для мобильного разработчика #138 (24-31 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276211/" target="_blank">Исследование распространенной малвари под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/276089/" target="_blank">Сжатие текстур в Android: сравнение форматов и примеры кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/276135/" target="_blank">Parse.com закрывается</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/275943/" target="_blank">Построение Android приложений шаг за шагом, часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275979/" target="_blank">Переделка RC-машинки в смарт-машинку при помощи ардуино</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/275415/" target="_blank">Собираем и используем игровую статистику вместе с Google Player Analytics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/275927/" target="_blank">Оптимизация Android-игр, созданных на Unity для платформы Intel: пример из жизни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/275505/" target="_blank">А вы задумывались о безопасности… автомобиля?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275749/" target="_blank">Миссия невыполнима: геолокация на Android без сжирания батарейки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275781/" target="_blank">Дайджест интересных материалов для мобильного разработчика #137 (18-24 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275759/" target="_blank">Высокоточные координаты (+-2cm) для виртуальной реальности, коптеров и роботов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/stepic/blog/275713/" target="_blank">Мобильные приложения Stepic.org под iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275691/" target="_blank">Как заблокировали мое приложение в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/275491/" target="_blank">VIPER или то, о чем все говорят, но никто не рассказывает</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/275515/" target="_blank">Gradle: управляя зависимостями</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/275413/" target="_blank">GDG DevFest Красноярск 2015: Фотоотчёт</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275265/" target="_blank">Дайджест интересных материалов для мобильного разработчика #136 (11-17 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275097/" target="_blank">Реализация списка использованных библиотек в Android приложении. Попытка №2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/275019/" target="_blank">Маршруты на картах Google в Android-приложении — некоторые уточнения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274959/" target="_blank">Android IDE Template Format</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/274897/" target="_blank">Тотальная шаблонизация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274859/" target="_blank">Реализация списка использованных библиотек с помощью DialogFragment в Android приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/274223/" target="_blank">Итоги 2015 года для Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274801/" target="_blank">Custom rounded view</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274635/" target="_blank">Использование android.os.Binder для организации асинхронного взаимодействия в Андроиде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274489/" target="_blank">Java в Android: Грядут перемены (Слухи)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274323/" target="_blank">Пример реализации методов обработки и распознавания изображений на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274277/" target="_blank">Как я получил первый опыт разработки игры на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274169/" target="_blank">Push уведомления в Android. Грабли, костыли и велосипеды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/274109/" target="_blank">Дайджест интересных материалов для мобильного разработчика #135 (21-27 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ncloudtech/blog/274025/" target="_blank">Dagger 2 и структура приложения для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wrike/blog/273797/" target="_blank">Как мы сделали Rich Text Editor с поддержкой совместного редактирования под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273985/" target="_blank">Как мы делали на Unity игру для взрослых и получили аудиторию «до 10 лет»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/273945/" target="_blank">Сбербанк делится опытом создания приложения в Material Design: стили и темы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273893/" target="_blank">Реализация «Onboarding Experience» в вашем приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/273781/" target="_blank">Немного о сборке мобильного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273589/" target="_blank">Custom EditText с тремя кнопками справа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273537/" target="_blank">Дайджест интересных материалов для мобильного разработчика #134 (14-20 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/plarium/blog/273483/" target="_blank">Требования к игровому функционалу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/273233/" target="_blank">Intel GPA и улучшение производительности Android-игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273269/" target="_blank">Среда разработки andriod приложений App Inventor 2 и ее применение в сообществе Arduino</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/273165/" target="_blank">Зимняя стажировка для разработчиков в Redmadrobot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/skbkontur/blog/273161/" target="_blank">Xamarin и Xamarin.Forms – кактус в шоколаде. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/skbkontur/blog/273075/" target="_blank">Xamarin и Xamarin.Forms – кактус в шоколаде. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/272459/" target="_blank">Intro to RxJava</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273053/" target="_blank">Выпущен CrystaX NDK 10.3.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/273007/" target="_blank">Дайджест интересных материалов для мобильного разработчика #133 (7-13 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/livetyping/blog/315938/" target="_blank">Особенности мультиоконного режима на Android-планшетах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316378/" target="_blank">Приглашаем на DevFest Владивосток</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316302/" target="_blank">Автоматизация публикации приложения в Google Play — прямо из Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316260/" target="_blank">Введение в разработку приложений для Android TV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316224/" target="_blank">Дайджест интересных материалов для мобильного разработчика #181 (21-27 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/316092/" target="_blank">Как мы придумали и сделали свою первую игру на Android. Часть 2: Уровни</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/316058/" target="_blank">Итоги Rambler.Android #4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/316000/" target="_blank">Нативные приложения обречены (часть 1)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315804/" target="_blank">Jenkins для Android на чистой системе и без UI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315736/" target="_blank">Портирование Android-приложения на WebGL</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/272821/" target="_blank">Marmalade C++ и ShiVa3D: начало работы с игровыми движками для платформы Android x86</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/272781/" target="_blank">GDG Devfest Красноярск и Калининград в эту субботу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272775/" target="_blank">OutOfMemoryError. Боремся с утечками памяти в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/272737/" target="_blank">Использование шаблона MVVM (Model-View-ViewModel) в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272705/" target="_blank">Запись и обработка видео на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/geekbrains/blog/272579/" target="_blank">Бесплатный курс «Android. Быстрый старт»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272423/" target="_blank">Опыт разработки аркады под Android на С++ и Qt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272477/" target="_blank">Дайджест интересных материалов для мобильного разработчика #132 (30 ноября-6 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/272431/" target="_blank">Мобильный поиск внутри приложений… которых у вас нет!&nbsp;</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/272215/" target="_blank">Верю – не верю в инди-разработку. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/272209/" target="_blank">GDG DevFest Нижний Новгород 2015: фотоотчёт с мероприятия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271899/" target="_blank">Пишем тактическую игру про цифры под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271951/" target="_blank">Реализация приложения – device owner-а под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271875/" target="_blank">Пагинация списков в Android с RxJava. Часть II</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271919/" target="_blank">Дайджест интересных материалов для мобильного разработчика #131 (23–29 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/271811/" target="_blank">Разработка быстрых мобильных приложений на Android. Часть вторая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/271761/" target="_blank">Разработка быстрых мобильных приложений на Android. Часть первая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271737/" target="_blank">Floating toolbar for text selection в Android Marshmallow: разбор нововведения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271703/" target="_blank">Как иногда плохой код и антипаттерн решают</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271663/" target="_blank">Android. Автозапуск приложения при загрузке: теория и практика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271541/" target="_blank">Отслеживание уведомлений на Android 4.0-4.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271557/" target="_blank">AndroCAD: Rise to Power. Электронщики и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/271535/" target="_blank">Доступна preview Android Studio 2.0: две убер-фичи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/271403/" target="_blank">Дайджест интересных материалов для мобильного разработчика #130 (16–22 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/271365/" target="_blank">Вредоносное ПО для Android становится все более изощренным</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/271269/" target="_blank">Gradle: 5 полезностей для разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256387/" target="_blank">Ionic Framework — работа с камерой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/271013/" target="_blank">Подготовка библиотек FMOD, Cocos2D-x, OpenAL и OpenSSL для Android-устройств, построенных на платформе Intel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/270985/" target="_blank">Прямая трансляция MBLTdev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/270745/" target="_blank">Облако для компаний разработчиков: как Robots Can Dream делали проект для чемпионата мира FINA 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270899/" target="_blank">Дайджест интересных материалов для мобильного разработчика #129 (9–15 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270855/" target="_blank">Разработка 2D игр на Windows, Mac OS, Linux и Android без программирования. Часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/270829/" target="_blank">Разработка и отладка приложений для Android Wear</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270133/" target="_blank">Cocos2d-x — разработка простой игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/270741/" target="_blank">Новая ICQ, или как мы получали Editors’ Choice</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270655/" target="_blank">Нюансы создания аркады</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/270653/" target="_blank">5 дней до конференции мобильных разработчиков MBLTdev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/270509/" target="_blank">GDG DevFest Воронеж 2015: фото- и видеоотчёт с мероприятия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270537/" target="_blank">Как я стал андроид-разработчиком без профильного образования, попутно мешая бетон</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270479/" target="_blank">Методы лечения различных ошибок в Android Studio при разработке проекта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270361/" target="_blank">Анимация переходов между двумя фрагментами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270411/" target="_blank">Дайджест интересных материалов для мобильного разработчика #128 (2–8 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270317/" target="_blank">Material ProgressBar для pre-Lollipop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/270287/" target="_blank">GDG DevFest Нижний Новгород 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269471/" target="_blank">Marshmallow. Это должен сделать каждый. Добавляем поддержку SDK 23 в наши приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270217/" target="_blank">Исследование Google Play Services: Place Picker & Autocomplete</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ua-hosting/blog/270181/" target="_blank">Android и iOS приложения пересылают данные пользователей третьей стороне намного чаще, чем принято считать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/270121/" target="_blank">Овладение Coordinator Layout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/icl_services/blog/270051/" target="_blank">Работаем с Xamarin: опыт разработки на двух проектах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269491/" target="_blank">Android 6.0: Doze Mode, App Standby, Runtime Permissions. Всё, что необходимо знать каждому разработчику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269999/" target="_blank">Бунт против виртуальной машины</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269919/" target="_blank">Дайджест интересных материалов для мобильного разработчика #127 (26 октября – 1 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/269873/" target="_blank">Дайджест: Чему мы научили поиск за это лето</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/microsoft/blog/269797/" target="_blank">10-17 ноября приглашаем принять участие в акции для мобильных разработчиков и пользователей – Russian AppFest</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/269771/" target="_blank">3 дня до повышения стоимости билетов на конференцию мобильных разработчиков MBLTdev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/269435/" target="_blank">По горячим следам DroidCon Moscow 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/269429/" target="_blank">Конвейерное производство Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269517/" target="_blank">Интеграция нативной рекламы Admob в ListView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269487/" target="_blank">Дайджест интересных материалов для мобильного разработчика #126 (19-25 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269371/" target="_blank">Внедрение AspectJ в Android-приложение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269135/" target="_blank">Простой клиент-сервер на Android (интернет-мессенджер)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269057/" target="_blank">Очень удобный абстрактный адаптер для RecyclerView своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/268945/" target="_blank">Опубликована программа Второй международной конференции мобильных разработчиков MBLTdev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268991/" target="_blank">Пагинация списков в Android с RxJava. Часть I</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268987/" target="_blank">Ускоряем код на Android'е</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/269001/" target="_blank">Дайджест интересных материалов для мобильного разработчика #125 (12-18 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/266885/" target="_blank">Пример использования Faces API от Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268923/" target="_blank">Модифицируем плеер Vanilla Music под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268889/" target="_blank">Анимируем изменения размеров компонента в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268791/" target="_blank">Как создавался кроссплатформенный Half-Life или «Хедкрабы внутри ваших часов»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/268685/" target="_blank">Как мы впервые делали стажировку по iOS и Android-разработке в Redmadrobot</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268653/" target="_blank">Переписываем с java на C++ на платформе Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268611/" target="_blank">Дайджест интересных материалов для мобильного разработчика #124 (5-11 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/268251/" target="_blank">Приглашаем на GDG DevFest Воронеж 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/268501/" target="_blank">Рецепты под Андроид: Selectable соус для LayoutManager'a</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268377/" target="_blank">Как без мата создать игру на Unity3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/268219/" target="_blank">Небезопасные разрешения в Android-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/268279/" target="_blank">DroidСon Moscow 2015: как это было</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/268307/" target="_blank">Адаптации сложных приложений под Material Design: подход от Aviary</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/206208/" target="_blank">Обработка аннотаций в процессе компиляции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268187/" target="_blank">Ускоряем отладку и прототипирование мобильных QML-приложений на живом устройстве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268179/" target="_blank">Дайджест интересных материалов для мобильного разработчика #123 (28 сентября-4 октября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/268143/" target="_blank">Доступна Android Studio 1.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ZeptoLab/blog/267845/" target="_blank">Автоматизация разработки в ZeptoLab</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267795/" target="_blank">Дайджест интересных материалов для мобильного разработчика #122 (21-27 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/267735/" target="_blank">Android Data Binding in RecyclerView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/267691/" target="_blank">Онлайн трансляция Droidcon Moscow 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267613/" target="_blank">Добавляем рекламу AdMob в Android приложение на платформе Adobe Air</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/267497/" target="_blank">Рецепты под Android: Как вкусно приготовить LayoutManager</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267243/" target="_blank">RxJava. Борьба с вызовами суровой действительности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/267073/" target="_blank">Vector Drawable API. Возможности применения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267405/" target="_blank">История как мы хотим сделать наш мир чуточку лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/267341/" target="_blank">Адаптация приложения Feedly под Material Design</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/267391/" target="_blank">Droidcon Moscow 2015: уже в эту пятницу</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267381/" target="_blank">Читаем XLSX на Android 5 (ART) c Apache POI XSSF</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267311/" target="_blank">Разносим общий функционал приложений и конфигурации Gradle в отдельные модули</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267275/" target="_blank">AdCtl: Склеиваем AdMob, Analytics и StartAD с QML</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267265/" target="_blank">Дайджест интересных материалов для мобильного разработчика #121 (14-20 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/266927/" target="_blank">Рассказ о том, как подружить Nexus Player (FUGU) и Intel Mobile Development Kit</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315682/" target="_blank">Дайджест интересных материалов для мобильного разработчика #180 (14-20 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mobileup/blog/314838/" target="_blank">Cicerone — простая навигация в Андроид приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310522/" target="_blank">Запускаем свою игру на Android TV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315478/" target="_blank">Шрифты для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313416/" target="_blank">Android In-app Billing: от мобильного приложения до серверной валидации и тестирования</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310486/" target="_blank">Делаем стартап просто и технологично. Маячки Eddystone</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/315144/" target="_blank">Дайджест интересных материалов для мобильного разработчика #179 (7-13 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edison/blog/315070/" target="_blank">Шишки и грабли Android-разработчика за 2 года</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310510/" target="_blank">Технологии Eddystone заменяют QR-коды</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mobio/blog/314896/" target="_blank">Обзор мобильных антифрод-систем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/267059/" target="_blank">Обзор Intent Sender плагина к Android Studio и отдельных особенностей его разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/266837/" target="_blank">Тестирование на Android: Robolectric + Jenkins + JaСoСo</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266939/" target="_blank">Как подружить HTML5 с мобильными ОС</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/266843/" target="_blank">Подготовка Nexus Player (FUGU) к работе с SoCWatch</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266881/" target="_blank">Использование библиотек на Java 8 для приложений под Android с помощью Maven</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/266701/" target="_blank">Записки разработчика Intel System Studio: отладка Linux-ядра Android с помощью Intel JTAG Debugger и MinnowBoard MAX</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266801/" target="_blank">Публикация Android библиотеки в jCenter</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266767/" target="_blank">Дайджест интересных материалов для мобильного разработчика #120 (7-13 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/266653/" target="_blank">Intel INDE Multi-OS Engine</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266617/" target="_blank">Бесплатный реалтайм список онлайн юзеров (Parse.com + Pubnub)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/266581/" target="_blank">Опубликован код эксплойта для критических Android-уязвимостей Stagefright</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/266465/" target="_blank">История одного факапа Яндекс.Навигатора. В шести действиях с прологом и раскаянием</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266301/" target="_blank">Tabris.js — быстро знакомимся и пишем Hello World</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266297/" target="_blank">Дайджест интересных материалов для мобильного разработчика #119 (31 августа-6 сентября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/266149/" target="_blank">Расставляем сообщения Android Logcat на шкале времени VTune Amplifier</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/266099/" target="_blank">Intel приглашает на Droidcon. Москва, 25-27 сентября</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265997/" target="_blank">Грокаем RxJava, часть четвертая: Реактивный Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/266045/" target="_blank">Шаблоны проектирования мобильных приложений. Command Processor</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/265791/" target="_blank">Использование Intel HAXM при разработке приложений для Android Wear и TV</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265943/" target="_blank">Уязвимость (?) и слежка в эмуляторе Bluestacks?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265727/" target="_blank">Грокаем RxJava, часть третья: Реактивность с пользой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265603/" target="_blank">Легко переходим на векторный формат картинок вместо нарезки под разные плотности экранов в Android 4.0+. Часть 2 из 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265895/" target="_blank">Я не верблюд или чересчур бдительный Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/265867/" target="_blank">Открытый митап Rambler.Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265601/" target="_blank">Легко переходим на векторный формат картинок вместо нарезки под разные плотности экранов в Android 4.0+. Часть 1 из 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265823/" target="_blank">Открытый клон Chameleon Launcher</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265815/" target="_blank">[ libGDX ] Опыт разработки игры с использованием Box2D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/265405/" target="_blank">Android архитектура клиент-серверного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265793/" target="_blank">Опыт разработки игры для Android. От идеи до реализации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/265689/" target="_blank">Реальные причины роста популярности PhoneGap и других кроссплатформенных инструментов разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265583/" target="_blank">Грокаем RxJava, часть вторая: Операторы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265715/" target="_blank">Дайджест интересных материалов для мобильного разработчика #118 (24-30 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/265657/" target="_blank">Интервью с сооснователем сервиса по увеличению конверсии мобильных приложений SplitMetrics</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/265621/" target="_blank">Начало работы с Intel Energy Profiler для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265527/" target="_blank">Однопоточность в Android WebView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265503/" target="_blank">Мотивирующая сказка для инди разработчиков игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/265117/" target="_blank">NDK c полпинка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265269/" target="_blank">Грокаем* RxJava, часть первая: основы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265285/" target="_blank">Дайджест интересных материалов для мобильного разработчика #117 (17-23 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265261/" target="_blank">12 лучших фреймворков для разработки приложений под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/265257/" target="_blank">М-м-м-м… Маршмэллоу: что нового в Android 6 и Android SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265247/" target="_blank">Разработка HTML5 игры под Android с нуля и до релиза</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265217/" target="_blank">Разработка циферблатов для Android Wear — это проще, чем кажется</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265163/" target="_blank">Google не прощает ошибок: противостояние с Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/265161/" target="_blank">Обнаружена еще одна серьезная уязвимость в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265159/" target="_blank">Наша Service и опасна и трудна или некоторые аспекты выживания служб в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265119/" target="_blank">Введение в новый CoordinatorLayout</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265107/" target="_blank">Некоторый опыт разработки игры на Unity3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265083/" target="_blank">Как работает поиск приложений в Google Play. Конспект</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/261275/" target="_blank">Ключевые тенденции в разработке мобильных приложений, о которых стоит помнить в 2015 году</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/265031/" target="_blank">QIWI запустила Visa payWave на Android-устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261721/" target="_blank">Android Process: Я тебя породил, я тебя и …</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/264935/" target="_blank">Последние 2 дня продаж Early Bird билетов на конференцию MBLTdev</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264909/" target="_blank">Библиотека Fresco от Facebook</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/topstory/blog/264905/" target="_blank">Top Story уполномочен заявить: не бойтесь мобильной разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264845/" target="_blank">Дайджест интересных материалов для мобильного разработчика #116 (10-16 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264829/" target="_blank">Мобильная печать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/264777/" target="_blank">Открылся набор во вторую оффлайн школу Android-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264701/" target="_blank">Работа с архивами Zip и 7z</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264611/" target="_blank">Платформер под Android на Unity3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/264511/" target="_blank">Оптимизация Android-игры mTricks Looting Crown для платформы Intel Atom</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/264535/" target="_blank">Android Devs Meetup 2: видео и презентации с прошедшей встречи</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264493/" target="_blank">Поле ввода числовых значений в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264399/" target="_blank">Дайджест интересных материалов для мобильного разработчика #115 (2-9 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/264311/" target="_blank">Использование набора инструкций Intel SSSE3 для ускорения реализации алгоритма DNN в задачах распознавания речи, выполняемых на мобильных устройствах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264315/" target="_blank">OpenAdAdapter плагин для Unity3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264255/" target="_blank">Best practices от Google по разработке Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/264103/" target="_blank">Разработка приложений с использованием NexStreaming NexPlayer SDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264135/" target="_blank">Взаимодейтсвие Java и Shell-скриптов в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/264117/" target="_blank">Передача опыта: Путь Джедая</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/nixsolutions/blog/264023/" target="_blank">Увеличение времени работы от аккумулятора в Android M</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263981/" target="_blank">Дайджест интересных материалов для мобильного разработчика #114 (27 июля-2 августа)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263945/" target="_blank">История одного клона</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yota/blog/263919/" target="_blank">Гаджеты как источник постоянных отвлеканий</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/263873/" target="_blank">Пять способов оптимизации кода для Android 5.0 Lollipop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/263903/" target="_blank">Новые критические уязвимости в Android: В чем проблема, и как защититься</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/263843/" target="_blank">Ускорение обработки изображений в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263763/" target="_blank">Как же работает этот загадочный HTC Dot View?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/263413/" target="_blank">Профилирование Android-приложений на потребление аккумулятора</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263657/" target="_blank">Щупаем Kotlin (и чуть-чуть Gradle) на примере Отправлялки-длинных-твитов (открытые исходники)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263655/" target="_blank">Crosswalk Project — замена Android WebView. Проблемы интеграции</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263649/" target="_blank">Crosswalk Project — замена Android WebView. Интеграция в проект</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/263647/" target="_blank">TargetSummit — вечерняя конференция по аналитике и продвижению мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/263627/" target="_blank">Moscow Android Devs Meetup 5 августа</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263561/" target="_blank">Дайджест интересных материалов для мобильного разработчика #113 (20-26 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/262167/" target="_blank">Android WebView: актуальные проблемы и их решение</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263465/" target="_blank">Вариант реализации MVP + DI(Dagger 2) в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263461/" target="_blank">Мой первый опыт в разработке 2D-игры (5 советов)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263419/" target="_blank">Простая и очевидная замена android.util.Log</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/263397/" target="_blank">Битовое кунг-фу, или Как оптимизировать трафик между мобильным приложением и сервером</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/263381/" target="_blank">Началась регистрация на MBLTdev 15 — международную конференцию мобильных разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262501/" target="_blank">Передовой опыт Android-разработки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/263301/" target="_blank">Многооконный режим: дополнительное конкурентное преимущество для Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/263179/" target="_blank">Дни полевого тестирования технологии iBeacon в Лужниках</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/263111/" target="_blank">Библиотека Chronos: облегчаем написание долгих операций</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/263031/" target="_blank">Как сделать кэш браузера не таким бесполезным, как обычно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/263079/" target="_blank">6 вещей, который я хотел бы знать перед разработкой своего первого Android-приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262993/" target="_blank">Дайджест интересных материалов для мобильного разработчика #112 (13-19 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pushall/blog/262571/" target="_blank">Кэширование в Android, Telegram для групп, улучшение callback, multicast, showlist и другие нововведения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262793/" target="_blank">Налоговый суслик. Особенности упрощенной системы налогообложения при работе по договорам с Apple, Google и другими</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314656/" target="_blank">Погружение в Async-Await в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mobio/blog/314660/" target="_blank">Интервью с Олегом Придюком (King) oб игровом движке Defold</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314574/" target="_blank">Беглый взгляд на Async-Await в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310518/" target="_blank">Ловим уведомления с помощью маячков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/312968/" target="_blank">Вводим текст красиво</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314312/" target="_blank">Рисуем, кодим под libGDX и другие маленькие радости из жизни инди-разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314538/" target="_blank">Дайджест интересных материалов для мобильного разработчика #178 (31 октября-6 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314414/" target="_blank">Уязвимость Account Manager в Android, о которой необходимо знать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314416/" target="_blank">Как решить проблему ограничения в 64К методов в Unity3D</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314350/" target="_blank">Пишем сервер-помощник для BaaS или «Ну и зачем мне тогда Firebase?»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262715/" target="_blank">OpenAdAdapter — простое управление мобильной рекламой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/260091/" target="_blank">Freemium в мобильных приложениях. История одной неудачи и одного успеха</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/262575/" target="_blank">Бесплатная онлайн школа Android-разработчиков. Последние дни регистрации</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/262527/" target="_blank">Как заставить дженкинс сделать вашу жизнь проще и стать счастливым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262381/" target="_blank">AOP или как написать свой велосипед для аналитики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262475/" target="_blank">Как внедрить баннеры в Android приложение не перекрыв другие элементы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/techmas/blog/262411/" target="_blank">Основы успешной реализации push-уведомлений для мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262403/" target="_blank">40+ полезных инструментов для разработчика приложений под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262375/" target="_blank">Дайджест интересных материалов для мобильного разработчика #111 (6-12 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262321/" target="_blank">Три мысли для любителей Android по мотивам I/O 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262189/" target="_blank">Malevich</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/262085/" target="_blank">Ищем спикеров! AndroidDevs Meetup 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/262089/" target="_blank">Добавление библиотеки OpenCV в проект Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261833/" target="_blank">Дайджест интересных материалов для мобильного разработчика #110 (29 июня-5 июля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261781/" target="_blank">О тонкостях приватности в Telegram Bots API: «это не баг, это фича»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/261637/" target="_blank">Google Developer Launchpad — программа Google для стартапов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261623/" target="_blank">StorIO — человеческий API для работы с SQLiteDatabase и ContentResolver</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/rambler-co/blog/261527/" target="_blank">Дизайн мобильных приложений: почему мы работаем в @1x</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261551/" target="_blank">Очередной умный дом, в трех частях. Часть третья, пользовательско-интерфейсная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/261277/" target="_blank">Подробное руководство по App Store Optimization в 2015 году – часть 2: Google Play Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261305/" target="_blank">Дайджест интересных материалов для мобильного разработчика #109 (22-28 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261189/" target="_blank">Семь итераций наивности или как я полтора года свою дебютную игру писал</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261175/" target="_blank">Реализация идеи подписки не на человека, как в твиттере/инстаграме, а на место</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/261049/" target="_blank">Релиз CrystaX NDK 10.2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/260089/" target="_blank">Мобильные приложения и основные факторы freemium-монетизации. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/260967/" target="_blank">Droidcon Berlin 2015: как это было</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260933/" target="_blank">Охота на зомби из облака</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/260707/" target="_blank">Android разработка — Gradle JarJar plugin</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/260841/" target="_blank">Google Cloud Messaging: «Сова, открывай! Пуш пришел!»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260787/" target="_blank">Дайджест интересных материалов для мобильного разработчика #108 (15-21 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260609/" target="_blank">Ускоряем приложение Android с помощью Golang</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/260477/" target="_blank">Интервью с коммерческим директором портала zaycev.net</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260467/" target="_blank">Взрывной GameDev. История создания моей игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260461/" target="_blank">История разработки моей первой игры</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/260433/" target="_blank">Learndroid, урок №7: LayoutInflater, UI контролы, AdapterView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260045/" target="_blank">Material Design и поиск на примере приложения-справочника</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/xakep/blog/260379/" target="_blank">Боремся со Status 7. Как работает механизм OTA-обновлений и почему он дает сбои</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260353/" target="_blank">Augmented reality для Dota2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260317/" target="_blank">Быстрый старт Data Binding в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/260229/" target="_blank">Дайджест интересных материалов для мобильного разработчика #107 (8-14 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pushall/blog/260181/" target="_blank">PushAll может отправлять уведомления в браузер Chrome без установки приложений и дополнений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/260083/" target="_blank">Вычисление числа Пи с помощью Intel Threading Building Blocks</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/260003/" target="_blank">Создание нативных Android-приложений с использованием компилятора Intel C++ Compiler в Android Studio 1.0.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/259983/" target="_blank">Google Developers Launchpad — всё что нужно для успешного старта</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/appodeal/blog/259825/" target="_blank">Appodeal — бесплатный оптимизатор доходов от рекламы для мобильных разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartengines/blog/259649/" target="_blank">Проблемы распознавания ID-документов на мобильных устройствах на примере машинно-читаемых зон</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259805/" target="_blank">Возврат результата выполнения из DialogFragment во Fragment минуя Activity</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259739/" target="_blank">Дайджест интересных материалов для мобильного разработчика #106 (1-7 июня)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aviasales/blog/259639/" target="_blank">Что вы хотели знать про Android Animation Framework, но боялись спросить</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259429/" target="_blank">Видео. Пишем полноценное клиент-сервер приложение под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/259377/" target="_blank">Развитие успешного международного бизнеса с Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259195/" target="_blank">Дайджест интересных материалов для мобильного разработчика #105 (25-31 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/259123/" target="_blank">Android M и инструменты для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/evernote/blog/259053/" target="_blank">Вторая версия Evernote SDK для Android: новые возможности Evernote в ваших приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/259007/" target="_blank">Почему айфон перезагружается от арабской смс</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/257917/" target="_blank">Что дает перевод описания и кейвордов для мобильного приложения. Результаты большого эксперимента</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258683/" target="_blank">Kotlin для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258707/" target="_blank">Удобоваримый вызов Java методов из нативного кода</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/arcadia/blog/257749/" target="_blank">Инфраструктура разработки приложения на PhoneGap для iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pushall/blog/258659/" target="_blank">Уведомления могут помочь вам узнать вашу аудиторию лучше + новости + СоХабр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258627/" target="_blank">Дайджест интересных материалов для мобильного разработчика #104 (18-24 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258515/" target="_blank">О том, как я написал простое приложение для Android/iOS</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255331/" target="_blank">Уязвимость в Xamarin для Android: подменяем dll и едим бесплатно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258379/" target="_blank">Андроиды в дельфинарии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/258369/" target="_blank">Главные уязвимости онлайн-банков: авторизация, аутентификация и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/189660/" target="_blank">Kivy и Play Store</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258195/" target="_blank">О RecyclerView и выделении элементов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258111/" target="_blank">Социальная сеть на Android за несколько выходных — часть II (сервер)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258125/" target="_blank">Дайджест интересных материалов для мобильного разработчика #103 (12-17 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258115/" target="_blank">Пульсометр с Bluetooth или устройство фотоплетизмографа. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258105/" target="_blank">Социальная сеть на Android за несколько выходных — часть I (клиент)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/258101/" target="_blank">Обход CloudFlare ScrapeShield в Java (Android)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/z-monitor/blog/257865/" target="_blank">Z-monitor: мониторинг и контроль государственных заказов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257947/" target="_blank">Разрабатываем ИК-пульт ДУ для фотоаппарата</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257443/" target="_blank">GPS-монитор под андроид «KidsTrack»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257889/" target="_blank">Быстрое кроссплатформенное HTML5 приложение на Framework7</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/257861/" target="_blank">Сажаем контроллеры на диету: Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256879/" target="_blank">2D-платформер от Qt 5.2 до Qt 5.4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257661/" target="_blank">Дайджест интересных материалов для мобильного разработчика #102 (5-11 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257633/" target="_blank">LeakCanary — помощник в поиске утечек памяти</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pushall/blog/257585/" target="_blank">PushAll — платформа для рассылки мгновенных уведомлений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/masterkit/blog/257483/" target="_blank">И снова про ушки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/257333/" target="_blank">Стажировка в Redmadrobot: жаркая, летняя, интересная</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/257403/" target="_blank">Первые 6 лекций онлайн школы Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257383/" target="_blank">Navigation Drawer + Fragments: допиливаем гугловский гайд</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257229/" target="_blank">Дайджест интересных материалов для мобильного разработчика #101 (27 апреля-4 мая)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257135/" target="_blank">Трансгуманизм в массы: разблокировка устройства на Android Lollipop вживленным NFC-чипом</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257127/" target="_blank">Microsoft показала Project Astoria: как будет выглядеть использование Android-кода в Windows-приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/257019/" target="_blank">Десятка лучших движков для создания своих собственных игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256947/" target="_blank">SwipeRefreshLayout: не сферический и не в вакууме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256643/" target="_blank">Material Design. Динамический Toolbar на живом примере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256631/" target="_blank">Дайджест интересных материалов для мобильного разработчика #100 (20-26 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256393/" target="_blank">Как сделать Xamarin Studio чуточку лучше?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255763/" target="_blank">Кофе с огурцами (Espresso + Cucumber)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/255525/" target="_blank">Шифрование и расшифровка — обращение к API OpenSSL с помощью вызовов JNI</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256143/" target="_blank">Интерактивный пол на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256071/" target="_blank">Android: Сетевые коммуникации с помощью Nearby (PlayServices API)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/256077/" target="_blank">Дайджест интересных материалов для мобильного разработчика #99 (13-19 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255997/" target="_blank">О производительности Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/eastbanctech/blog/255961/" target="_blank">Как отличить день от ночи, если ты Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314228/" target="_blank">Google научился фильтровать фальшивые установки на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310514/" target="_blank">Адаптирование мобильного приложения для Android TV или почему я люблю Google</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/aacidov/blog/314262/" target="_blank">DisTalk. Если ты не умеешь читать, это не значит то, что ты не можешь общаться</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314236/" target="_blank">Kivy. От создания до production один шаг. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/314170/" target="_blank">Я техлид. Что делать?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314116/" target="_blank">О том как я написал блокировщик рекламы и трекеров для смартфонов Samsung на Android. Adhell</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314028/" target="_blank">Изучаем Retrofit 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314068/" target="_blank">ASO оптимизация. Составление семантического ядра для магазинов приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/314038/" target="_blank">Как превратить смартфон в микрофон (идеи и вопросы)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/313674/" target="_blank">Секреты Progressive Web Apps: часть 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255941/" target="_blank">Организация и использование сегментации в больших мобильных приложениях</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255893/" target="_blank">Как создать мощную систему игровых достижений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249977/" target="_blank">Way of Tanks. Путь от идеи к игре</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255799/" target="_blank">RSA шифрование в PHP (openssl), Android/Java, JavaScript и Go</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/255725/" target="_blank">Конференция Mobius: как в мобильных устройствах открывали неочевидное</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255753/" target="_blank">Создание циферблатов для Android Wear на OpenGL ES 2.0</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/mailru/blog/255737/" target="_blank">Приглашаем на первый Moscow AndroidDevs Meetup 23 апреля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255653/" target="_blank">Разработка кроссплатформенного приложения с помощью Ionic Framework</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255651/" target="_blank">Создаем красивый Date/Time/Data Picker в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255601/" target="_blank">Знакомство с Santoku Linux</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255597/" target="_blank">Hello android from qt</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255559/" target="_blank">Дайджест интересных материалов для мобильного разработчика #98 (6-12 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255397/" target="_blank">Встраиваем RecyclerView в CardView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/delphi/blog/255213/" target="_blank">Вебинар «Новые возможности RAD Studio XE8»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/255165/" target="_blank">Встреча мобильных разработчиков Казани 8 апреля</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255133/" target="_blank">Как я одной кнопкой шарил разные данные в Android приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/255011/" target="_blank">Улучшаем качество звука на планшетах Android с процессорами Intel Atom с помощью API Dolby Digital</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/parallels/blog/254325/" target="_blank">Как правильно переходить границу: кроссплатформенность в мобильном приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255083/" target="_blank">Как продвигать мобильные приложения ДО релиза. Часть 1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/255051/" target="_blank">Поиск изображений в Android при помощи Flickr</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254989/" target="_blank">Android Volley Loader. Движение в сторону библиотеки</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254945/" target="_blank">Дайджест интересных материалов для мобильного разработчика #97 (30 марта-5 апреля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254899/" target="_blank">Шифрование в NQ Vault оказалось обычным XOR-ом, и это еще не самое плохое</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254895/" target="_blank">На вкус и цвет 2 – не RGB единым</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254813/" target="_blank">Получение пути к карте памяти SD Card на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254801/" target="_blank">Android Volley custom Loader</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254797/" target="_blank">На вкус и цвет или Раскраска для Андроид</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254737/" target="_blank">Говорящая панда или что можно сделать с FFmpeg и OpenCV на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/254699/" target="_blank">Анализ обратной связи по техническим лекциям</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254625/" target="_blank">Заставляем камеру в Qt работать на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254527/" target="_blank">Андроид — кастомные View или ToggleButton 4x4</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254297/" target="_blank">Дайджест интересных материалов для мобильного разработчика #96 (23-29 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254255/" target="_blank">Авторизация через китайские соцсети</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254185/" target="_blank">DIY управление телевидением Дом.ru с планшета при помощи ардуино</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254177/" target="_blank">Автоматизация ресайза PNG для iOS и Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/Voximplant/blog/253041/" target="_blank">Новая версия мобильного SDK VoxImplant с поддержкой WebRTC, P2P, видео-звонков для iOS и Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254149/" target="_blank">Android для разработчиков. Недоумеваем и расстраиваемся</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/254091/" target="_blank">Бесплатная онлайн школа Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ZeptoLab/blog/254009/" target="_blank">Как я спас несколько жизней оптимизацией и немного о работе в Zeptolab</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/254021/" target="_blank">Превращение Android телефона в сетевую SQL базу данных (MyMobileSQLServer — Utesov)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253995/" target="_blank">DIY термометр для «Инстаграм» на arduino nano</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253969/" target="_blank">Поисковая оптимизация для AppStore и Google Play или ASO</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/delphi/blog/253929/" target="_blank">Как настроить Android и RAD Studio XE7 (Delphi, C++ Builder)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253895/" target="_blank">Для кого эта игрушка или как определить целевую аудиторию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253713/" target="_blank">Дайджест интересных материалов для мобильного разработчика #95 (16-22 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253639/" target="_blank">Хоткеи Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253455/" target="_blank">Yet another success story</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253471/" target="_blank">Bluetooth пульт для телевизора на arduino</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruward/blog/253405/" target="_blank">Стартовал конкурс мобильных приложений «Golden App»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/253270/" target="_blank">Использование расширенных возможностей компилятора Intel® C++ для приложений Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253321/" target="_blank">Пишем ARP Spoofer под Android. Разработка Root инструментов под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253266/" target="_blank">Gson шпаргалка для Map, List и Array</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/smartengines/blog/252703/" target="_blank">Распознавание Паспорта РФ на мобильном телефоне. (UPD: 28.03.2015 + выложили программу в App Store)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/253169/" target="_blank">Открытые курсы Android Study Jams теперь и в Москве</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253233/" target="_blank">Boost C++ libraries на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253181/" target="_blank">Как это собрать приложение на android за 15 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252969/" target="_blank">Локализация Android приложения средствами Google Sheets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253175/" target="_blank">Bluetooth вольтметр на базе arduino</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/253099/" target="_blank">Дайджест интересных материалов для мобильного разработчика #94 (10-15 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ZeptoLab/blog/253003/" target="_blank">ZeptoLab Code Rush 2015 уже близко</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/edusty/blog/252601/" target="_blank">Особенности работы с файлами в приложениях на разных мобильных платформах</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/252883/" target="_blank">Создание пакетов APK x86 и ARM APK с помощью компилятора Intel® и GNU gcc</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/252919/" target="_blank">Подключаемся к Intel Edison через Android с Bluetooth LE (BLE)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252903/" target="_blank">Android. Пару слов об MVP + rxJava</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/252895/" target="_blank">Material Design. А был ли мальчик?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252893/" target="_blank">Хронометраж для любительских автогонок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252869/" target="_blank">Нужна ли книга по защите мобильных приложений?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252823/" target="_blank">Кастомные функции SQLite Android или своя LOWER_FNC()</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/redmadrobot/blog/252773/" target="_blank">Material Design: на Луну и обратно</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252775/" target="_blank">Программное создание NinePatchDrawable</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252673/" target="_blank">Вышел Open-source мессенджер для детей-аутистов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252629/" target="_blank">Сравнение библиотек для выполнения асинхронных запросов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252537/" target="_blank">Дайджест интересных материалов для мобильного разработчика #93 (2-9 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252367/" target="_blank">Всё, что вам нужно знать об игровых конструкторах. 3 инди-разработчика делятся опытом работы на Gamemaker, Construct 2, Clickteam fusion 2.5</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ruward/blog/252347/" target="_blank">Результаты рейтинга мобильных разработчиков 2015</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/252273/" target="_blank">Конференция Mobius 2015 по мобильной разработке: анонс докладов</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/252179/" target="_blank">IBM AbilityLab Mobile Accessibility Checker: инструмент для автоматизации проверки доступности интерфейса мобильного приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/252083/" target="_blank">GoogleFit API — стартуем и видим результат</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251991/" target="_blank">Corona SDK стала бесплатной</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251943/" target="_blank">Локализация Android приложения средствами Google Sheets</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251751/" target="_blank">Доказательство некорректности алгоритма сортировки Android, Java и Python</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251805/" target="_blank">Дайджест интересных материалов для мобильного разработчика #92 (21 февраля-1 марта)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/251323/" target="_blank">Портирование Android-приложения под Android TV и Nexus Player</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251409/" target="_blank">Как настроить проект LibGDX с Gradle, Google Play Services</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251247/" target="_blank">Дайджест интересных материалов для мобильного разработчика #91 (16-23 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/251165/" target="_blank">22 совета, трюка и шотката для Android Lollipop</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250887/" target="_blank">Do not be evil</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250907/" target="_blank">Кастомная кнопка логина в Twitter SDK (Fabric kit)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/250531/" target="_blank">Антивирус, Android и х86. Особенности взаимодействия</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250873/" target="_blank">Unity: Сборка под Android или «размер имеет значение»</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/piter/blog/250797/" target="_blank">Android для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250167/" target="_blank">Авторизация и использование VK.com API в Xamarin.Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250765/" target="_blank">Navigation Drawer в стиле Material Design за 5 минут</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250745/" target="_blank">История одного провала (разработки первой мобильной игры) с выводами и советами</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/papabubadiop/blog/250723/" target="_blank">Ara, да? Или модульный смартфон будущего</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250727/" target="_blank">Математический пакет для Android своими руками</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/etransport/blog/250689/" target="_blank">Делаем parallax header в RecyclerView</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250703/" target="_blank">Создание мобильной игры в Construct 2. Путь неопытного</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250659/" target="_blank">Архитектура Android-приложений… Правильный путь?</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250607/" target="_blank">Дайджест интересных материалов для мобильного разработчика #90 (9-15 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313986/" target="_blank">Как набить кучу шишек и выпустить игру</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313940/" target="_blank">Дайджест интересных материалов для мобильного разработчика #177 (24-30 октября )</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313788/" target="_blank">Собери котов в Android 7 Nougat (не только)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tcsbank/blog/312196/" target="_blank">@ActivityScope с помощью Dagger 2</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313564/" target="_blank">Установка Jenkins и Bonobo Git Server под ОС Windows для сборки Android приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/pt/blog/313546/" target="_blank">Исследователи создали эксплоит для получения root-доступа к Android-смартфонам с помощью уязвимости Rowhammer</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313516/" target="_blank">Создание консольного приложения с помощью Android NDK</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/313458/" target="_blank">Приглашаем на II-й международный GDG DevFest 2016 в Нижнем Новгороде</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/310506/" target="_blank">Universal Mobile Electronic Key</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/313454/" target="_blank">Создание библиотеки для авторизации с помощью AzureAD для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/surfingbird/blog/250517/" target="_blank">Разрабатываем систему аналитики</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/muk/blog/250521/" target="_blank">Grandstream Networks выпустила бесплатное приложение для SIP телефонии</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/tceh/blog/250333/" target="_blank">Дайджест хороших образовательных программ для IT-специалистов и сочувствующих: в Москве и онлайне</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250319/" target="_blank">Устраняем пробелы, изучаем Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yandex/blog/250235/" target="_blank">Странности в работе Яндекс.Метро: разбор полётов и апдейт приложения</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ximad/blog/250163/" target="_blank">Разработать мобильное приложение и выиграть — интервью с главой департамента мобильной разработки Александром Богдановичем</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250011/" target="_blank">Автоматизация процесса разработки под Android: начало</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/jugru/blog/250081/" target="_blank">Анонс конференции Mobius 2015: доклады по iOS, Android и Mobile Security</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/250035/" target="_blank">Дайджест интересных материалов для мобильного разработчика #89 (2-8 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249961/" target="_blank">Flickr API в Android App. Авторизация</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/token2/blog/249921/" target="_blank">MyTOTP — полностью своя* двухфакторная авторизация по rfc6238</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249765/" target="_blank">Как я боролся с adware в Google Play и проиграл</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249757/" target="_blank">Как взломать двухфакторную аутентификацию Яндекса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249695/" target="_blank">Простое решение для использования ЭЦП — развитие</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/what3words/blog/249729/" target="_blank">Приглашаем познакомиться с нашей новой страницей для разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248373/" target="_blank">Android лончеры. Три ошибки разработчика</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249471/" target="_blank">Мелочи разработки на Android для начинающих</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/249445/" target="_blank">Минимальные показатели жизнеспособности для мобильных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249411/" target="_blank">Дайджест интересных материалов для мобильного разработчика #88 (26 января-1 февраля)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249305/" target="_blank">Кроссплатформенное приложение в Android Studio на jMonkeyEngine 3</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249023/" target="_blank">Канделябр vs леденец</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/249051/" target="_blank">Не используйте MediaPlayer и MediaMetadataRetriever в Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248839/" target="_blank">Разработка ПО для лазерного толщинамера на FriendlyARM Smart210</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/surfingbird/blog/248647/" target="_blank">Пример приложения с использованием библиотеки AQuery</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248767/" target="_blank">Дайджест интересных материалов для мобильного разработчика #87 (19-25 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248667/" target="_blank">Пример использования Fabric (Twitter Kit) в Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248653/" target="_blank">Видео. Основные принципы Material Design</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/delphi/blog/248579/" target="_blank">Мировой тур RAD Studio XE7 в Ростове-на-Дону, Алматы и Оренбурге</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248539/" target="_blank">Вычисление времени заката и рассвета по координатам Android устройства с помощью earthtools</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248509/" target="_blank">Qt Android и системный диалог управления звуком</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248479/" target="_blank">Опыт разработки под Android Wear</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/dataart/blog/248477/" target="_blank">Видео докладов с GDG DevFest Воронеж 2014</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248455/" target="_blank">Релиз CrystaX NDK 10.1</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248431/" target="_blank">Ошибки новичка в сфере разработки игр</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/248295/" target="_blank">Показатели удержания Flurry: очень важные и очень непонятные</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248273/" target="_blank">Unity UI в версии 4.6</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248249/" target="_blank">Ubuntu Make — разработчику в помощь</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/248161/" target="_blank">Дайджест интересных материалов для мобильного разработчика #86 (12-18 января)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/246913/" target="_blank">Новые оптимизации для х86 в GCC 5.0: PIC в 32-битном режиме</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247651/" target="_blank">История еще одной игры на Libgdx+Box2d</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247509/" target="_blank">Легковесная библиотека для Warning сообщений от javac через аннотацию</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247561/" target="_blank">Транзакции фрагментов и потеря состояния активности</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/236745/" target="_blank">MugenMvvmToolkit — кроссплатформенный MVVM фреймворк</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/247079/" target="_blank">Как я писал клиент PeerJS(WebRTC) под Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246935/" target="_blank">Дайджест интересных материалов для мобильного разработчика #85 (22-28 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246817/" target="_blank">Еще одна Змейка не в 30 строк на Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246819/" target="_blank">Новый трек на Coursera: Mobile Cloud Computing with Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246805/" target="_blank">Борьба за души игроков или как я пытался выйти на мобильный рынок</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246491/" target="_blank">Работа со звуком и библиотека SuperPowered</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/246599/" target="_blank">Итоги года для Android-разработчиков</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246575/" target="_blank">Первый месяц раскрутки бесплатного неигрового приложения: грабли, шишки, удачи, выводы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246467/" target="_blank">Простое решение для использования ЭЦП</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246387/" target="_blank">Дайджест интересных материалов для мобильного разработчика #84 (15-21 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/246201/" target="_blank">Практический пример переиспользования кода, как повысить качество и ускорить разработку</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246199/" target="_blank">Используем стандартные элементы ListFragment по назначению</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epson/blog/246063/" target="_blank">Итоги конкурса Android-разработчиков Epson Moverio BT-200</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ksrk/blog/246129/" target="_blank">Работа людей с проблемами зрения на сенсорных устройствах — это уже не перспектива, а реальность</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/246023/" target="_blank">Мобильная игра на Unity. Первый блин…</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245789/" target="_blank">Дайджест интересных материалов для мобильного разработчика #83 (8-14 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/surfingbird/blog/245629/" target="_blank">Как мы учили кнопку плавать</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/etransport/blog/245477/" target="_blank">Ведение независимого времени на android девайсе</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/ksrk/blog/245351/" target="_blank">Технические аспекты обеспечения невизуальной доступности Android-приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sebbia/blog/245299/" target="_blank">Что в ORM тебе моем? Околонаучный подход выбора ORM для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/245259/" target="_blank">Приглашаем на GDG DevFest Omsk 2014</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245273/" target="_blank">Описание состояний интерфейса в XML вместо кода для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/wargaming/blog/244789/" target="_blank">#DevNightMinsk: мобильная разработка</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/245071/" target="_blank">Займи свое место в рейтинге Android-разработчиков Intel</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245181/" target="_blank">Дайджест интересных материалов для мобильного разработчика #82 (1-7 декабря)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/245027/" target="_blank">Локализация приложений для китайского рынка-2. Блок-листы</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/244999/" target="_blank">Kotlin для Android, или лёгкий способ перестать программировать на Java</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/244843/" target="_blank">Как приложение после локализации поднялось с 40 на 5 место в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/alconost/blog/244847/" target="_blank">Эксперимент: бесплатно переводим кейворды и описание приложений для App Store и Google Play в обмен на статистику</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/epson/blog/244755/" target="_blank">Завершение конкурса Android-разработчиков Moverio Apps Market</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244551/" target="_blank">Дайджест интересных материалов для мобильного разработчика #81 (24-30 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244457/" target="_blank">Модификация исходного кода android-приложения с использованием apk-файла</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/surfingbird/blog/244387/" target="_blank">Внедряем материальный дизайн</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244443/" target="_blank">Запуск приложений в Android Virtual Device на удаленном Linux-сервере</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244423/" target="_blank">Notifications на основе билдера с кастомным лейаутом и картинкой</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/e-Legion/blog/244279/" target="_blank">Автоматическое тестирование Android приложений c любовью</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244229/" target="_blank">Маршруты на картах Google в Android-приложении</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/244087/" target="_blank">NaviGuild свой собственный навигатор</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/google/blog/243257/" target="_blank">Google: рекомендации для приложений в Google Play</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243955/" target="_blank">Дайджест интересных материалов для мобильного разработчика #80 (17-23 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/surfingbird/blog/242911/" target="_blank">Превращаем html в нативные компоненты</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243853/" target="_blank">Android AutoCompleteTextView с подсказками из веб-сервиса</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243731/" target="_blank">Обновление на Android 5 Lolipop убивает самоподписанные приложения без возможности восстановления</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/cybersafe/blog/243463/" target="_blank">Защита личных фотоснимков на телефонах Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243363/" target="_blank">Анимации c помощью Transitions API</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/intel/blog/242105/" target="_blank">Intel INDE 2015 — новый полезный инструмент для разработки кросс-платформенных приложений</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243541/" target="_blank">Reveal для всех!</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/sebbia/blog/243537/" target="_blank">Что такое утечки памяти в android, как проверить программу на их отсутствие и как предотвратить их появление</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243519/" target="_blank">Как я учился на своих ошибках или как сделать вторую игру лучше</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243435/" target="_blank">Xamarin.Android: плагин к VS2013 для редактирования aXML в IntelliJ IDEA или Android Studio</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243411/" target="_blank">Подключаем FB, VK, G+ в Android. Версия Light</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243331/" target="_blank">Дайджест интересных материалов для мобильного разработчика #79 (10-16 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/skbkontur/blog/243063/" target="_blank">Делаем собственную индикацию о входящем звонке</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/243059/" target="_blank">Еще один cкрипт генерации иконок для Android</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242885/" target="_blank">За что Google приложения блокирует. Былина</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/post/242669/" target="_blank">Дайджест интересных материалов для мобильного разработчика #78 (2-9 ноября)</a></li>
<li class="linkCls"><a href="https://habrahabr.ru/company/yotadevices/blog/242559/" target="_blank">5 лучших ORM для Android</a></li>
</ol>
</body>
</html>