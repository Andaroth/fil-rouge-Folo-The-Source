<?php

class NewsletterManager
{
  private $db;

  function __construct(){
    /* --------------------------------------- A PARAMETRER --------------------------------- */
    $db = new \PDO('mysql:host=localhost;dbname=FoloTheSource;charset=utf8', 'root', 'root');
    /*----------------------------------------------------------------------------------------*/
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $this->db = $db;
  }

  function getDb(){return $this->db;}
  function setDb($db){$this->db = $db;}

  function addSubscriber($email){
    $rq = $this->db->prepare('INSERT INTO newsletter (email, subscriptionDate) VALUES (:email, NOW())');
    $rq->execute([
      'email' => $email
    ]);
  }
}

?>
