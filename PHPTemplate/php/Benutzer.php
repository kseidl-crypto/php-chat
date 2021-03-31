<?php


//Klasse für Benutzer. Passwort is private
class Benutzer
{
    public $vorname;
    public $nachname ;
    protected $email ;
    private $password ;


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail ( ) {
        return $this -> email ;
    }

    protected function isValidEmail ( $email ) {
        return filter_var ( $email , FILTER_VALIDATE_EMAIL ) !== false ;
    }

    /**
     * @return mixed
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param mixed $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return mixed
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * @param mixed $nachname
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}