<?php

namespace BD;

class Conexao{
	private static $instance;

	// Dados de acesso MySQL
    // Meu banco se chama pweb2_mysql.
    private static $connectURL = "mysql:dbname=pweb2_mysql; host=127.0.0.1";
    private static $user = 'root';
    private static $password = '';

    // Impede o uso do construtor
    private function __construct(){}

    // Impede o clone de instância
    private function __clone(){}

    // Impede a criação da instância via unserialize()
    private function __wakeup(){}

    // Cria o método que cria ou retorna a instância
    public static function getInstance(){

    	if(!isset(self::$instance)){
    		self::$instance = new \PDO(self::$connectURL, self::$user, self::$password);
    	}

    	return self::$instance;
    }
}

?>