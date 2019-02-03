<?php

require __DIR__ .'/Class/Monster.php';

function getDbConnect() {
    $db = new PDO('mysql:host=localhost; dbname=bdd_jason','root','');
    return $db;
}



function getMonsters() {
    $monsters = array();
    $db = getDbConnect();
    $query = $db->query('select * from monster_bdd');
    $data = $query->fetchAll();
    foreach ($data as $key => $value) {
        $monster = new Monster();
        $monster->setId($value['id']);
        $monster->setName($value['name']);
        $monster->setStrength($value['weight']);
        $monster->setLife($value['age']);
        $monster->setType($value['bio']);
        $monsters[] = $monster;
    }
    return $monsters;
}


function addMonster($value) {
    $db = getDbConnect();

    $stmt = $db->prepare("INSERT INTO monster_bdd (`name`, `age`, `weight`, `bio`, `filename`) VALUES (:name, :age, :weight, :bio, :filename)");
    $stmt->bindParam(':name', $value['name']);
    $stmt->bindParam(':age', $value['age']);
    $stmt->bindParam(':weight', $value['weight']);
    $stmt->bindParam(':bio', $value['bio']);
    $stmt->bindParam(':filename', $value['filename']);

    $stmt->execute();
}

function deletemonster($id) {
    $db = getDbConnect();

    $stmt = $db->prepare("DELETE FROM monster_bdd where id  = :id");
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}

function getMonster($id) {
    $db = getDbConnect();
    $sth = $db->prepare('select * from monster_bdd where id = :id');
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $value = $sth->fetch();
    $monster = new Monster();
    $monster->setId($value['id']);
    $monster->setName($value['name']);
    $monster->setStrength($value['weight']);
    $monster->setLife($value['age']);
    $monster->setType($value['bio']);

    return $monster;
}
