<?php
namespace Nadia\Tools;
use PDO;
use PDOException;

class Conexion {

	//constantes de configuración

	private static ?PDO $instancia = null;

	private function __construct(){}


	public static function getConexion():PDO {

		if(self::$instancia === null) {
            $config = Config::getInstance();


            $driver = $config->get('database', 'driver');
            $host   = $config->get('database', 'host');
            $dbname = $config->get('database', 'dbname');
            $port   = $config->get('database', 'port');
            $user   = $config->get('database', 'user');
            $pass   = $config->get('database', 'pass');

            $dsn = "$driver:host=$host;dbname=$dbname;port=$port";
            $opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

            if ($driver === 'mysql') {
                $dsn .= ";charset=utf8mb4";
            }

		try{

			 self::$instancia = new PDO($dsn, $user, $pass, $opciones);
		    return self::$instancia;

		} catch (PDOException $e) {

            throw new PDOException("Error al conectar con la base de datos: ". $e->getMessage() . "<br>" . $e->getCode());
		}

	}
	return self::$instancia;
	}

}