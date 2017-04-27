<?php
namespace wtest;
/**
 * User class
 * 
 */

class User {
    /**
     * class User
     *
     * @var $ID int идентификатор юзера в базе данных (студент, преподаватель, администратор)
     * @var $type string (студент, преподаватель, администратор)
     * @var $login string  тип юзера 
     * @var $FIO string  имя фамилия отчество 
     * @var $email string  e-mail юзера (студент, преподаватель, администратор)
     * @var $addres string  аддрес юзера (студент, преподаватель, администратор)
     * 
     */
    private $ID;
    private $type;
    private $login;
    private $FIO;
    private $passMD5;
    private $email;
    private $address;
    
    function __construct(int $ID, string $login, string $type, string $passMD5, string $email, string $address, string $FIO ){
        $this->ID = $ID;
        $this->type = $type;
        $this->login = $login;
        $this->passMD5 = $passMD5;
        $this->email = $email;
        $this->address = $address;
        $this->FIO = $FIO;
    } 
    
    public function getlogin(){ return $this->login; }
    public function getID() {return $this->ID;}
    public function getType() {return $this->type;}
    public function getPassMD5($salt) {return md5($this->passMD5 + $salt);}
    public function getEmail() {return $this->email;}
    public function getAddress() {return $this->address;}
    
    public function setlogin($login){ $this->login = $login; }
    public function setID($ID) {$this->ID = $ID;}
    public function setType($type) {$this->type = $type;}
    public function setPassMD5($passMD5) {$this->passMD5 = $passMD5;}
    public function setEmail($email) {$this->email = $email;}
    public function setAddress($address) {return $this->address = $address;}
}