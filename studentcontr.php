<?php 

class StudentContr extends Student {
    
    public function createStudent($id, $name, $dep, $math, $science){
        
        $this->setStudent($id, $name, $dep, $math, $science);
    }
    
    
    
}