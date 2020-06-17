<?php
class User{

	private $_db,$_data,$session_name,$cookie_name,$expires;
	private static $isLoggedIn;

	public function __construct()
    {
        $this->_db = new DB('supportlabs_accounts');
				$this->session_name= Config::get('session.session_name');
				$this->cookie_name= Config::get('remember.cookie_name');
				$this->expires= Config::get('remember.cookie_expiry');
	  }

	public function makeUser($fields,$values){
		try{
		$this->_db->Add('users',$fields,$values);
		$this->_db->Add('notifications',array(),array());
		$this->_db->isLoggedIn = true;
	}
	catch(\PDOException $e){
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}
	}

	 public function get_id($email){
	 	$sql= "SELECT * from users WHERE email = :email ";
		$q = $this->_db->pdo->prepare($sql);
		$q-> bindParam(':email',$email);
		$q->execute();
		$row= $q->fetch();

	if($row['id'] !=""){
		return $row['id'];
	}


	else{
		die('Gunga Ginga');
	}


	 }

	 public function get($table,$string){
		try {
	 	$sql= "SELECT * from $table WHERE id = :id";
		$q = $this->_db->pdo->prepare($sql);
		$q-> bindParam(':id',$_SESSION['id']);
		$q->execute();
		$row= $q->fetch();

	if($row[$string] !=""){
		return $row[$string];
	}
	
	else {
		return "Not Set";
		echo $_SESSION['id'];
	}
	
		}
	catch(PDOException $e){
		echo $e->getMessage();
		die('Gunga Ginga');
	
	}
}


public function EditUsername($username){
	$sql="UPDATE users SET username = ? WHERE id=?";
	$q=$this->_db->pdo->prepare($sql);
	$q->execute([$username,$_SESSION['id']]);
}

public function EditName($name){
	$sql="UPDATE users SET full_name = ? WHERE id=?";
	$q=$this->_db->pdo->prepare($sql);
	$q->execute([$name,$_SESSION['id']]);
}

public function EditEmail($email){
	$sql="UPDATE users SET email = ? WHERE id=?";
	$q=$this->_db->pdo->prepare($sql);
	$q->execute([$email,$_SESSION['id']]);
}

public function EditPaypal($paypal){
	$sql="UPDATE paypal SET address = ? WHERE id=?";
	$q=$this->_db->pdo->prepare($sql);
	$q->execute([$paypal,$_SESSION['id']]);
}

public function EditBTC($btc){
	$sql="UPDATE bitcoin SET address = ? WHERE id=?";
	$q=$this->_db->pdo->prepare($sql);
	$q->execute([$btc,$_SESSION['id']]);
}





    public function hasPermission($key)
    {
        $group = $this->_db->get('groups', array('id', '=', $this->data()->group));
        if ($group->count())
        {
            $permissions = json_decode($group->first()->permissions, true);
            if ($permissions[$key] == true)
            {
                return true;
            }
        }
        return false;
    }
	
	public function Destroy($email){
		$this->_db->Destroy(email);
		
	}
	
	
	
    public function exists()
    {
        return (!empty($this->data)) ? true : false;
    }
    public function logout()
    {
        $this->_db->delete('users_session', array('user_id', '=', $this->data()->id));
        Session::delete($this->_sessionName);
        Cookie::delete($this->_cookieName);
        session_destroy();
    }
    public function data()
    {
        return $this->_data;
    }
    public static function isLoggedIn()
    {
        return $this->isLoggedIn;
    }


}

?>
