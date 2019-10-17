<?
//ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ (БД)
$nameDB = "blog";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "root";//Имя пользователя БД
$passUSER = "";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
//ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ (БД)
$header_title = "Админ панель";
$header_metaD = "Описание страницы";
$header_metaK = "Ключевые слова страницы";

if($_GET['page'])$page = $_GET['page']; else $page = "index";//Определяем страницу которая открыта.
//Если переменная не существует значит открыта главная страница

//ГЛАВНОЕ МЕНЮ АДМИНКИ
if($page == "index")//Главная страница
{
include("moduls/menu.php");//Подключаем модуль
$txt = menu();//Помещаем с генерированный код в переменную
}
//ГЛАВНОЕ МЕНЮ АДМИНКИ

//ДОБАВЛЕНИЕ КОНТЕНТА
if($page == "add_content")//Если открыта страница добавление постов
{
include("moduls/addcontent.php");//Подключаем модуль
$txt = addcontent();//Выводим с генерированный код в переменную
}
//ДОБАВЛЕНИЕ КОНТЕНТА

include("templates/index.html");//Выводим главный шаблон на экран
?>