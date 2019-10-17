<?
function menu()
{
$sm_read = file("templates/menu.html");//...подключаем шаблон
$sm_read = implode("",$sm_read);//функция file() возвращаем массив, поэтому склеиваем его

return $sm_read;//Выводим с генерированный html код
}
?>