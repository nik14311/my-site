<?
function menu()
{
$sm_read = file("templates/menu.html");//...���������� ������
$sm_read = implode("",$sm_read);//������� file() ���������� ������, ������� ��������� ���

return $sm_read;//������� � �������������� html ���
}
?>