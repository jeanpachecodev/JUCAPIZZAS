<?php
header("access-Control-Allow-Origin: *");
header("Content-Type: Application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, OUT, DELETE, OPTIONS");


echo json_encode(["Mensagem"=>"Hello! Bem vindos à Juca pizzas!"]);

// echo json_encode(array("mensagem"=>"Hello! bem vindos à Juca pizzas!"));