<?
//����������� � ���� ������ (��)
$nameDB = "blog";//�������� ��
$nameSERVER = "localhost";//������
$nameUSER = "root";//��� ������������ ��
$passUSER = "";//������ ������������ ��
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
//����������� � ���� ������ (��)
$header_title = "����� ������";
$header_metaD = "�������� ��������";
$header_metaK = "�������� ����� ��������";

if($_GET['page'])$page = $_GET['page']; else $page = "index";//���������� �������� ������� �������.
//���� ���������� �� ���������� ������ ������� ������� ��������

//������� ���� �������
if($page == "index")//������� ��������
{
include("moduls/menu.php");//���������� ������
$txt = menu();//�������� � �������������� ��� � ����������
}
//������� ���� �������

//���������� ��������
if($page == "add_content")//���� ������� �������� ���������� ������
{
include("moduls/addcontent.php");//���������� ������
$txt = addcontent();//������� � �������������� ��� � ����������
}
//���������� ��������

include("templates/index.html");//������� ������� ������ �� �����
?>