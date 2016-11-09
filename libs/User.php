<?php 
class User{
	private $_db;

	public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function create($fields)
    {
        $fields['password'] = sha1($fields['password']);

    	if ($this->_db->insert('users',$fields)) {
    		return true;
    	}

    	throw new Exception("Error Processing Request");
    }

    public function update($id,$fields)
    {
        if ($this->_db->update('users',$id,$fields)) {
            return true;
        }

        throw new Exception("Error Processing Request");
    }

    public function changePassword($currentPassword,$newPassword)
    {
        $user = $this->_db->query(
            'SELECT * FROM users WHERE username = ? AND password = ?',
            [
                Session::get('username'),
                sha1($currentPassword)
            ]
        );

        if ($user->count()) {
            return $this->update(
                Session::get('id'),
                [
                    'password' => sha1($newPassword)
                ]
            );
        }else{
            return false;
        }
    }

    public function login($username,$password)
    {
        $password = sha1($password);

        $user = $this->_db->query('SELECT * FROM users WHERE username = ? AND password = ?',[$username,$password]);

        if ($user->count()) {
            $userData = $user->results()[0];

            Session::put('is_logged_in',true);
            Session::put('id',$userData->id);
            Session::put('firstName',$userData->firstName);
            Session::put('lastName',$userData->lastName);
            Session::put('username',$userData->username);
        }
    }

    public function findById($id)
    {
        $user = $this->_db->get('users',['id','=',$id]);

        return  $user->results()[0];
    }

    public function isLoggedIn()
    {
        if (Session::exists('is_logged_in')) {
            return Session::get('is_logged_in');
        }
    }

    public function logout()
    {
        Session::destroy();
    }
}