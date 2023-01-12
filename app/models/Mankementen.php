<?php

class Mankementen
{
   private $db;
   public function __construct()
   {
      $this->db = new Database();
   }
   public function getMankement()
   {
      $this->db->query('SELECT mankement.Datum, mankement.Mankement, instructeur.Naam, instructeur.Email, auto.Kenteken 
                      from mankement Inner join auto on mankement.AutoId = auto.Id
                      Inner join instructeur on instructeur.Id = auto.InstructeurId WHERE instructeur.Id = :Id order by mankement.Datum desc' );
      $this->db->bind(':Id', 2);
      $result = $this->db->resultSet();
      return $result;
   }
}

?>