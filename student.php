<?php 

class Student extends Dbh {
    
    protected function getStudent($id){
        $sql = "SELECT * FROM student WHERE student_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        
        $results = $stmt->fetchAll();
        return $results;
    }
    
    protected function setStudent($id, $name, $dep, $math, $science){
        $sql = "INSERT INTO student(student_id, Name, Department, math_mark, science_mark) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name, $dep, $math, $science]);
    }
    
}