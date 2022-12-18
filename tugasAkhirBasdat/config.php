<?php
$db=pg_connect('host=localhost dbname=basdat user=postgres password=Dafnof131');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
