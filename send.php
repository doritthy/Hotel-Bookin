<?php
// ��������� �����������
$to  = 'adik.kz.ru@gmail.com' . ', ';  // �������� �������� �� �������
$to .= 'adik.kz.ru@gmail.com';

// ���� ������
$subject = '������ � ����� �����';

// ����� ������
$message = '������������' . $_POST['name'] . ' �������� ��� ������:<br />' . $_POST['message'] . '<br />
��������� � ��� ����� �� email <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

// ��� �������� HTML-������ ������ ���� ���������� ��������� Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// �������������� ���������
$headers .= 'To: ���� <Ivan@example.com>' . "\r\n"; // ���� ��� � email
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


// ����������
mail($to, $subject, $message, $headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - ���������!
echo "��������� ����������. ������� ��� " . $first_name . ", �� ����� �������� � ����.";
echo "<br /><br /><a href='http://localhost/hotel/index.html'>��������� �� ����.</a>";

}

?>

<!--������������� �� ������� �������� �����, ����� 3 �������-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://localhost/hotel/index.html");}
window.setTimeout("changeurl();",3000);
</script>
?>