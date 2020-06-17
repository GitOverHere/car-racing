<?php

class DB{
	private static $connection= null;
	public $pdo;
	private $q;
	private $host;
	private $username;
	private $password;
	private $charset;
	private $error;
	private $results;
	private $count=0;


	 public function __construct($database) {
		$host= Config::get('mysql.host');
		$username= Config::get('mysql.username');
		$password= Config::get('mysql.password');
		$charset= Config::get('mysql.charset');



//create connection
$dsn = "mysql:host=".$host.";dbname=".$database.";charset=".$charset."";
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
);
try {
     $this->pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
	echo 'It no work';
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


	}


		public static function RandomString($length){
	$string="";
	$characters='abcdefghijklmnopqrstuvwxyz1234567890';
	$string_length=strlen($characters);
	$random_index = mt_rand(0, $string_length);

	for($length !=0; $length--;){
		$string .= $characters[$random_index];

	}

	return $string;

}


	public static function getConnection(){
		if(!isset(self::$connection)){
			self::$connection= new DB($database= null);

		}
		return self::$connection;
	}

	public function writeStuff($string){
		echo $string;
	}






	public function Add($table,$fields,$values){


		$the_fields=implode(",",$fields);
		$the_values=implode(",",$values);
		$binds= array();

$sql="INSERT INTO $table ($the_fields) VALUES ()";


$sql= substr($sql,0,-1);


		for($x=0; $x < count($fields); $x++){
			$temp=":".$fields[$x];
			array_push($binds,$temp);
			$sql = $sql.$temp.",";
		}
$sql= substr($sql,0,-1);

if(count($fields)==0){
		$sql = $sql.'()';
}
else{
		$sql = $sql.')';
	}

		$q=$this->pdo->prepare($sql);


try{
		for($bind=0; $bind < count($binds); $bind++){
			$q->bindValue($binds[$bind],$values[$bind]);
		}


		$q->execute();
}
catch(\PDOException $e){
	echo "Could not insert!";
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
}



	public function Alter($table,$field){

		try{
		$sql="ALTER TABLE :table ALTER COLUMN :field";
		$q = $this->_db->pdo->prepare($sql);
		$q-> bindParam(':table',$table);
		$q-> bindParam(':field',$field);
		$q->execute();
	}
	catch(\PDOException $e){
		echo  "Error updating field";
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}
}




	public function action($action, $table, $where = array())
     {
         if (count($where) === 3)
         {
             $operators = array('=', '>', '<', '>=', '<=');
             $field      = $where[0];
             $operator   = $where[1];
             $value      = $where[2];
             if (in_array($operator, $operators))
             {
                 $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                 if (!$this->query($sql, array($value))->error())
                 {
                     return $this;
                 }
             }
         }
         return false;
     }
     public function get($table, $where)
     {
         return $this->action('SELECT *', $table, $where);
     }

		 public function query($sql, $params = array())
		    {
		        $this->_errors = false;
		        $this->_query = $this->pdo->prepare($sql);
		        if ($this->_query)
		        {
		            if (count($params))
		            {
		                $x = 1;
		                foreach ($params as $param)
		                {
		                    $this->_query->bindValue($x, $param);
		                    $x++;
		                }
		            }
		            if ($this->_query->execute())
		            {
		                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
		                $this->_count = $this->_query->rowcount();
		            }
		            else
		            {
		                $this->_error = true;
		            }
		        }
		        return $this;
		    }


				public function Update($table,$field,$value){
					$this->q=$this->pdo->prepare("UPDATE $table SET :field = :value WHERE id= :id");
				try{
				bindParam(":field",$field);
				bindParam(":value",$value);
				bindParam(":id",Session::Get('id'));
				$this->q->execute();
				}
				catch(\PDOException $e){
					throw new \PDOException($e->getMessage(), (int)$e->getCode());
				}

				}


	public function Remove($table,$id){
		$q=$this->pdo->prepare("DELETE * FROM ? WHERE id=?");

		try{
			$q->execute([$table,$id]);
		}
		catch(\PDOException $e){
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}

	}




	public function results()
    {
        return $this->results;
    }
    public function first()
    {
        return $this->results()[0];
    }
    public function count()
    {
        return $this->count;
    }
    public function error()
    {
        return $this->error;
    }






}
?>
