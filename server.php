<?php
$_POST = json_decode(file_get_contents("php://input"),true);
//конструкция для работа с json данными на php
echo var_dump($_POST);
//берет данные с клиента,превращает их в строку и показывает их на клиенте
 