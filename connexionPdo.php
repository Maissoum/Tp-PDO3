<?php
$hostnom= 'host=btssio.dedyn.io';
$usernom='OUMRIMA';
$password = '20051001';
$bdd= 'OUMRIMA_biblio';

try 
{
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo $e->getMessage();
    $monPdo = null;
}
?>
