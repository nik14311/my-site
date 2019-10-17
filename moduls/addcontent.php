<?
//Объявляем переменные, если форма была заполнена и отправленна
if($_POST['name_post'])$name_post = $_POST['name_post'];
if($_POST['txt_post'])$txt_post = $_POST['txt_post'];
if($_POST['author_post'])$author_post = $_POST['author_post'];
//Объявляем переменные, если форма была заполнена и отправленна

if($name_post & $txt_post & $author_post)//Если существуют посланные данные...
{//...то
    $date_day = date("d");//Определяем день
    $date_month = date("m");//Определяем месяц
    $date_year = date("Y");//Определяем год
    $date_time = date("H:i");//Определяем часы и минуты
    $date_cont = $date_day."/".$date_month."/".$date_year." ".$date_time;//Склеим все переменные в одну
    //получим дату для записи в формате день/месяц/год часы:минуты 

    //Заменяем html код на аналог
    $name_post = htmlspecialchars($name_post);
    $txt_post = htmlspecialchars($txt_post);
    $author_post = htmlspecialchars($author_post);
    
    //Избавляемся от кавычки
    $name_post = str_replace("'","&#039",$name_post);
    $txt_post = str_replace("'","&#039",$txt_post);
    $author_post = str_replace("'","&#039",$author_post);
    
    $txt_post = str_replace("\n","<BR>",$txt_post);//Заменяем переносы строки на тег <BR>
    
    //ДОБАВЛЯЕМ ПОСТ В БАЗУ ДАННЫХ
    $result_add_cont = mysql_query ("INSERT INTO blog (text,title,author,date_b) 
    VALUES ('$txt_post','$name_post','$author_post','$date_cont')");
    //ДОБАВЛЯЕМ ПОСТ В БАЗУ ДАННЫХ
    
    header("location: index.php");//Перенаправление
    exit;//на главную страницу
}

function addcontent()
{
$sm_read = file("templates/addcontent.html");//...подключаем шаблон
$sm_read = implode("",$sm_read);//функция file() возвращаем массив, поэтому склеиваем его

return $sm_read;//Выводим с генерированный html код
}
?>