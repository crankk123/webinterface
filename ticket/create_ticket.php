<?php
if (isset($_POST['betreff']) AND isset($_POST['email']) AND isset($_POST['priorit�t']) AND isset($_POST['kategorie']) AND isset($_POST['text'])) {
        $Betreff = $_POST['betreff'];
        $Email = $_POST['email'];
        $Priorit�t = $_POST['priorit�t'];
        $Kategorie = $_POST['kategorie'];
		$Text = $_POST['text'];



//connect to db
                $connect = mysql_connect("127.0.0.1", "root", "alka");
                mysql_select_db("webinterface");
                $sql = mysql_query("SELECT * FROM ticket");
                $row = mysql_fetch_row($sql);




echo"Eingetragen";}




?>

