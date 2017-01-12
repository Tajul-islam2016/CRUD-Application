<?php
	
	include "DB.php";
	/**
	*  Main abstract class
	*/
	abstract class Main
	{
		protected $table;

		abstract public function insertData();
		abstract public function updateData($id);

			public function readAll(){
		        $sql = "SELECT * FROM $this->table";
		        $stmt = DB::prepare($sql);
		        $stmt->execute();
		        return $stmt->fetchALL();
	    	}

    		public function deleteData($id){
	      	  $sql = "DELETE FROM $this->table WHERE id=?";
	      	  $stmt = DB::prepare($sql);
	      	  $stmt->execute(array($id));
    		}

	   		 public function readByID($id){
		        $sql = "select * from $this->table where id=?";
		        $stmt = DB::prepare($sql);
		        $stmt->execute(array($id));
		        return $stmt->fetch();
	    	}
	}

?>