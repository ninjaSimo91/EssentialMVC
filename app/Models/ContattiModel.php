<?php

namespace Models;

use EssentialMVC\Model;

class ContattiModel extends Model
{

    public function __construct(\PDO $pdo)
    {
        parent::__construct($pdo);
    }

    public function getSomething()
    {
        $st = $this->pdo->prepare("SELECT * FROM users;");
        $st->execute();
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }





    public function checkForm($post)
    {
        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        if (strlen($post['nome']) < 2 || strlen($post['messaggio']) < 2) {
            return false;
        }
        return true;
    }
}
