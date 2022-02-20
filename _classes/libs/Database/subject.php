<?php

namespace Libs\Database;

use PDOException;

class subject
{
    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    public function SubjectGetAll()
    {
      $statement = $this->db->query("SELECT * FROM subjects");
  
      return $statement->fetchAll();
    }
    
    // insert data
    public function SubjectInsert($data)
    {
      try {
         $query = "INSERT INTO subjects (subject_name, course_id, created_at) VALUES (:subject_name, :course_id, :created_at)";
          $statement = $this->db->prepare($query);
          $statement->execute($data);
          return $this->db->lastInsertId();
      }catch (PDOException $e) {
        return $e->getMessage()();
      }
    }
}