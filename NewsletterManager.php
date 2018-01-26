<?php

class NewsletterManager
{
  private $db;

  function __construct(){
    /* --------------------------------------- A PARAMETRER --------------------------------- */
    $db = new \PDO('mysql:host=localhost;dbname=id4419678_folothesource;charset=utf8', 'id4419678_becodegroupe5', 'BECODEgroupe5');
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
