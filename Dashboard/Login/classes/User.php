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
		$this->_db->Add('paypal',array(),array());
		$this->_db->Add('bitcoin',array(),array());
		$this->_db->isLoggedIn = true;
	}
	catch(\PDOException $e){
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}

	}





    public function login($email, $password, $remember)
    {
			$sql= "SELECT * from users WHERE email = :email ";
		$q = $this->_db->pdo->prepare($sql);
		$q-> bindParam(':email',$email);
		$q->execute();
		$row= $q->fetch();







			 if(password_verify($password , $row['password'])){
				 $s= new Session();
		     $s->set('logged_in','true');
		     $s->set('email',$email);
				 if($remember === true){
				 	$this->_db->Add('users_session',array('user_id','hash'));
				 $c= new Cookie();
				 $c->set($this->cookie_name,$row['id'],$expires);
				 echo 'Welcome '.$row['username']."<br>";
			 return true;
			}
			return true;

			 }



			 return false;

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
	 
	 public function reset_password($email,$hash){
		$id= $this->get_id($email);
		$this->_db->Add('resets',array('id','email','hash'),array($id,$email,$hash));	
	}

	 public function get($table,$string){
	 	$sql= "SELECT * from $table WHERE id = :id";
		$q = $this->_db->pdo->prepare($sql);
		$q-> bindParam(':id',$_SESSION['id']);
		$q->execute();
		$row= $q->fetch();

	if($row[$string] !=""){
		return $row[$string];
	}
	else{
		die('Gunga Ginga');
	}
}

public function email_valid($email){
		$sql= "SELECT * from users WHERE email = :email";
		$q=$this->_db->pdo->prepare($sql);
		$q->bindParam(":email",$email);
		$q->execute();
		$row= $q->fetch();
		
		if($row['email'] == $email){
			return true;
		}
		else {
			return false;
		}
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
