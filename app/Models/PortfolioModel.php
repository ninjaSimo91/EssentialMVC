<?php
namespace Models;
use EssentialMVC\Model;

class PortfolioModel extends Model {

    public function __construct(public \PDO $pdo) {
        parent::__construct($pdo);
    }

}