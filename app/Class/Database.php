<?php
namespace App\Class;
use PDO;
class Database {
    protected $pdo ; 
    protected $statement;
    public function __construct($config,$username = 'root',$password = ''){
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->pdo = new PDO( $dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function query($query,$params = []){
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($params);
        return $this->statement;
    }
    public function find($query,$params = []){
        return $this->query($query,$params)->fetch();
    }
    public function findAll($query,$params = []){
        return $this->query($query,$params)->fetchAll();
    }
    // public function findOrFail($query,$params = []){
    //     $result = $this->query($query,$params)->fetch();
    //     if (!$result){
    //         abort(404);
    //     }
    //     return $result;
    // }

}