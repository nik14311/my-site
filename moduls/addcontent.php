<?
//��������� ����������, ���� ����� ���� ��������� � �����������
if($_POST['name_post'])$name_post = $_POST['name_post'];
if($_POST['txt_post'])$txt_post = $_POST['txt_post'];
if($_POST['author_post'])$author_post = $_POST['author_post'];
//��������� ����������, ���� ����� ���� ��������� � �����������

if($name_post & $txt_post & $author_post)//���� ���������� ��������� ������...
{//...��
    $date_day = date("d");//���������� ����
    $date_month = date("m");//���������� �����
    $date_year = date("Y");//���������� ���
    $date_time = date("H:i");//���������� ���� � ������
    $date_cont = $date_day."/".$date_month."/".$date_year." ".$date_time;//������ ��� ���������� � ����
    //������� ���� ��� ������ � ������� ����/�����/��� ����:������ 

    //�������� html ��� �� ������
    $name_post = htmlspecialchars($name_post);
    $txt_post = htmlspecialchars($txt_post);
    $author_post = htmlspecialchars($author_post);
    
    //����������� �� �������
    $name_post = str_replace("'","&#039",$name_post);
    $txt_post = str_replace("'","&#039",$txt_post);
    $author_post = str_replace("'","&#039",$author_post);
    
    $txt_post = str_replace("\n","<BR>",$txt_post);//�������� �������� ������ �� ��� <BR>
    
    //��������� ���� � ���� ������
    $result_add_cont = mysql_query ("INSERT INTO blog (text,title,author,date_b) 
    VALUES ('$txt_post','$name_post','$author_post','$date_cont')");
    //��������� ���� � ���� ������
    
    header("location: index.php");//���������������
    exit;//�� ������� ��������
}

function addcontent()
{
$sm_read = file("templates/addcontent.html");//...���������� ������
$sm_read = implode("",$sm_read);//������� file() ���������� ������, ������� ��������� ���

return $sm_read;//������� � �������������� html ���
}
?>