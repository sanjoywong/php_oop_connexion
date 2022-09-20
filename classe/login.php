<?php
class Login{

    var $username;
    var $psw;

    private Config $db;

    public function __construct()
    {
        $this->db = new Config();
    }
    
    public function check_user($username, $psw)
    {
        $requete = "SELECT username FROM users WHERE username = '$username' AND password = '$psw';";
        $condition = $this->db->lister($requete);

        if(empty($condition))
        {
            $requete = "SELECT username FROM users WHERE username = '$username';";
            $condition=$this->db->lister($requete);
            if(empty($condition)) return "le mot de passe n'est pas correct!";
            return true;
        }
        return false;
    }

}

?>