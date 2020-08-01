<?php

$text = '<p>IP addr: '. `hostname -I`.'</p>';

$text .= '<p><a href="status.php?backup=run">Run backup</a></p>';

$text .= '<h1>PING</h1><a href="status.php?ping=disable">disable</a> | <a href="status.php?ping=enable">enable</a>';
echo $text;

if (isset($_GET['backup']) and $_GET['backup'] == "run") {`sudo /root/backup.sh`; header("Location: status.php");}

if (isset($_GET['ping']) and $_GET['ping'] == "disable") {`sudo iptables -A INPUT -p icmp --icmp-type echo-request -j DROP`; header("Location: status.php");}

if (isset($_GET['ping']) and $_GET['ping'] == "enable") {`sudo iptables -D INPUT -p icmp --icmp-type echo-request -j DROP`; header ("Location: status.php");}



?>
