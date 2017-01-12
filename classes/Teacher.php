<?php

include 'Main.php';

class Teacher extends Main{
    
    protected $table = "tbl_teacher";
    private $name;
    private $age;
    private $dep;

    
    public function setName($name){
        $this->name = $name;
    }
    
    public function setDep($dep){
        $this->dep = $dep;
    }
    
    public function setAge($age){
        $this->age = $age;
    }
    
    public function insertData(){
        $sql = "insert into $this->table (name, dep, age) values(?,?,?)";
        $stmt = DB::prepare($sql);
        $stmt->execute(array($this->name, $this->dep, $this->age));
    }
    
    public function updateData($id){
        $sql = "UPDATE $this->table SET name=?, dep=?, age=? WHERE id=?";
        $stmt = DB::prepare($sql);
        $stmt->execute(array($this->name, $this->dep, $this->age, $id));
    }
    
}
?>
