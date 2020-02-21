<?php
namespace App\database;
class Oracle {
	private static $sequence;
	private static $connection;
	public static function GetConnection() {
		try {
		    if(empty(self::$connection)){
                $server = "";
                $db_username = "";
                $db_password = "";
                $service_name = "";
                $sid = "XE";
                $port = 1521;
                $dbtns = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port)) (CONNECT_DATA = (SERVICE_NAME = $service_name) (SID = $sid)))";

                $dbh = new \PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password, array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_EMULATE_PREPARES => false,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC));
                self::$connection = $dbh;
                return self::$connection;
            }else{
		        return self::$connection;
            }
		} catch (\Exception $ex) {
			throw new \Exception($ex->getMessage());
		}
	}


	public static function select($query, $parameters = null) {
		try {
            $items = [];
            if(empty(self::$connection)){
                $sql = Oracle::GetConnection();
            }else{
                $sql = self::$connection;
            }

			$exec = $sql->prepare($query);
			if (is_array($parameters)) {
                $parameters = array_map('strtoupper', $parameters);
				foreach ($parameters as $key => &$value) {
					$exec->BindParam($key, $value);
				}
			}

			$exec->execute();
            while($data = $exec->fetch(\PDO::FETCH_ASSOC)){
                $items[] = $data;
            }

            foreach ($items as $key => $item) {
                $items[$key]=array_change_key_case($item, CASE_LOWER);
            }

			return $items;
		} catch (\Exception $ex) {
			throw new \Exception($ex->getMessage());
		}
	}

	public static function sequence($seq){
		try{
			self::$sequence = $seq;
			$instance = new static();
			return $instance;
		}catch(\Exception $ex){
			throw new \Exception($ex->getMessage());
		}
	}

	public static function nextval(){
		try{
			$sql = "SELECT ".self::$sequence.".NEXTVAL NEXT FROM DUAL";
			$data = Oracle::select($sql);
			return $data[0]['next'];
		}catch(\Exception $ex){
			throw new \Exception($ex->getMessage());
		}
	}

	public static function current(){
		try{
			$sql = "SELECT ".self::$sequence.".CURRVAL CURRENT FROM DUAL";
			$data = Oracle::select($sql);
			$data = $data->fetch(\PDO::FETCH_ASSOC);
			return $data['CURRENT'];
		}catch(\Exception $ex){
			throw new \Exception($ex->getMessage());
		}
	}

	public static function insert($query, $parameters = null) {
		try {
            if(empty(self::$connection)){
                $sql = Oracle::GetConnection();
            }else{
                $sql = self::$connection;
            }
			$exec = $sql->prepare($query);
			if (is_array($parameters)) {
                $parameters = array_map('strtoupper', $parameters);
                foreach ($parameters as $key => &$value) {
                    $exec->BindParam($key, $value);
                }
			}

			$exec->execute();
		} catch (\Exception $ex) {
			throw new \Exception($ex->getMessage());
		}
	}

    public static function update($query, $parameters = null) {
        try {
            if(empty(self::$connection)){
                $sql = Oracle::GetConnection();
            }else{
                $sql = self::$connection;
            }

            $exec = $sql->prepare($query);
            if (is_array($parameters)) {
                $parameters = array_map('strtoupper', $parameters);
                foreach ($parameters as $key => &$value) {
                    $exec->BindParam($key, $value);
                }
            }

            $exec->execute();
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

	public static function debugSQL($query, $parameters = null){
        try{
            $sql = $query;
            if(is_array($parameters)){
                foreach($parameters as $key => $value){
                    $sql = str_replace($key, $value, $sql);
                }
            }

            return $sql;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function setTransaction(){
	    try{
            if(empty(self::$connection)){
                $sql = Oracle::GetConnection();
            }else{
                $sql = self::$connection;
            }

            $sql->beginTransaction();
        }catch (\Exception $ex){
	        throw new \Exception($ex->getMessage());
        }
    }

    public static function commit(){
	    try{
            if(empty(self::$connection)){
                $sql = Oracle::GetConnection();
            }else{
                $sql = self::$connection;
            }

            $sql->commit();
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function rollback(){
        try{
            if(empty(self::$connection)){
                $sql = Oracle::GetConnection();
            }else{
                $sql = self::$connection;
            }

            if($sql->inTransaction()){
                $sql->rollback();
            }
        }catch (\Exception $ex){
            dd($ex->getMessage());
            throw new \Exception($ex->getMessage());
        }
    }
}
?>