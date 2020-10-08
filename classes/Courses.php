<?php 
/* Class to read, add, edit and delete course(s)
 --made by Lena Tibbling 2020 */

class Courses {
    
    //Connect to database
    public function __construct($db) {
        $this->db = $db->connect(); 
    }   

    //SQL-queries

    // Show all courses
    public function readCourses() {   
        $sql = "SELECT * FROM courses"; 
        $result = $this->db->query($sql); 
        return mysqli_fetch_all($result, MYSQLI_ASSOC); 
    }

    // Show one course based on id
    public function readCourse($id) {
        $sql= "SELECT * FROM courses WHERE id=$id";
        $result = $this->db->query($sql);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    // Add new course       
    public function create() {    
 
        $sql = "INSERT INTO courses(code, name, progression, coursesyll) VALUES ('$this->code', '$this->name', '$this->progression', '$this->coursesyll')";
        $result = $this->db->query($sql); 
        return $result;  
    }  
     
    //Update post  
    public function update(int $id) {       
        $sql = "UPDATE courses SET code='$this->code', name='$this->name', progression='$this->progression', coursesyll='$this->coursesyll' WHERE id=$id";
        $result = $this->db->query($sql);
        return $result;  
    }  

    // Delete course
        public function deleteCourse(int $id) {
            $sql = "DELETE FROM courses WHERE id=$id"; 
            $result = $this->db->query($sql); 
            return $result;
        }
}
?>