<?php

$text = '<p>IP addr: '. `hostname -I`.'</p>';

$text .= '<p><a href="backup.php?backup=run">Run backup</a></p>';

$text .= '<h1>PING</h1><a href="backup.php?ping=disable">disable</an> | <a href="backup.php?ping=enable">enable</a>';
echo $text;

if (isset($_GET['backup') and $_GET['backup'] == "run") {`sudo /root/backup.sh`; header("Location: backup.php")};

if (isset($_GET['ping']) and $_GET['ping'] == "disable") {`sudo iptables -A INPUT -p icmp -icmp-type echo-request - DROP`; header("Location: backup.php")};

if (isset($_GET['ping']) and $_GET['ping'] "enable") {`sudo iptables -D INPUT -p icmp —icmp-type echo-request - DROP`; header ("Location: backup.php")};



?>