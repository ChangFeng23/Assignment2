<?php 

class studentView extends Student {
    
    public function showStudent($id){
        $results = $this->getStudent($id);
        echo "Student_id: " . $results[0]['student_id'] . "<br>";
        echo "Student_name: " . $results[0]['Name'] . "<br>";
        echo "Department: " . $results[0]['Department'] . "<br>";
        echo "Math_mark: " . $results[0]['math_mark'] . "<br>";
        echo "Science_mark: " . $results[0]['science_mark'];
    }
    
}