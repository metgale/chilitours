<?php $link = mysql_connect('wholesomeweb1.globatmysql.com', 'pharmaers', '*password*');
if (!$link) {
    die('Could not connect: ' . mysql_error());
} echo 'Connected successfully';
mysql_select_db(aers); ?> 