<?php
namespace App\Car ;
use PDO;
class Car{
	public $id='';
	public $title='';
	public $conn='';
	public $dbuser='root';
	public $dbpass='';

	public function __construct(){
		session_start();
		$this->conn= new PDO ("mysql:host=localhost;dbname=crud",$this->dbuser,$this->dbpass);
	}

	public function setData($data){
		if (array_key_exists('car_model', $data)&& !empty($data['car_model'])){
			$this->title=$data['car_model'];
		}
		if (array_key_exists('id', $data)&& !empty($data['id'])){
			$this->id=$data['id'];
		}
		return $this;
	}

	public function store(){
		try{
			$query ="INSERT INTO car(id,title) VALUES(:id , :title)";
 			$stmt =$this->conn->prepare($query);
 			$stmt->execute(array(
 				':id'=> null,
 				':title'=>$this->title
 		));
 			if($stmt){
 		$_SESSION['Message']="successfully Addedd";
 		header('location:create.php');
 	}else{
 		$_SESSION['Message']="Unsuccessful";
 	}
		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}

	public function index(){
		try{
			$query= "SELECT * FROM car where is_delete=0";
			$stmt=$this->conn->query($query);
			$data=$stmt->fetchAll();
			return $data;
		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}

	public function show(){
		try{
			$query="SELECT * FROM car where id=" .$this->id;
			$stmt=$this->conn->query($query);
			$result=$stmt->fetch();
		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
		return $result;
	}

	public function update(){
		try{
			$query = "UPDATE car SET title=:title where id=:id";
			$stmt=$this->conn->prepare($query);
			$result=$stmt->execute(array(
				':id'=>$this->id,
				':title'=>$this->title
				));
                         if($result){
                            $_SESSION['message'] =  $this->brand.' Updated Successfully';
                            header('location: /raihan/View/car/index.php');
                        }else{
                            $_SESSION['message'] =  'Failed To Update';
                            header('location: /view/car/index.php');
                        }
		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}

	public function delete(){
		try{
			$query="DELETE from car where id=" .$this->id;
			$stmt=$this->conn->query($query);
			$result=$stmt->execute();
                        if($result){
                            $_SESSION['message'] =  $this->brand.' Deleted Successfully';
                            header('location: /raihan/View/car/trashlist.php');
                        }else{
                            $_SESSION['message'] =  'Failed To Delated';
                            header('location: /raihan/View/car/trashlist.php');
                        }

		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}

	public function trash(){
		try{
			$query = "UPDATE car SET is_delete=:true where id=:id";
			$stmt=$this->conn->prepare($query);
			$result=$stmt->execute(array(
				':true'=>'1',
				':id'=>$this->id
				));
                        if($result){
                            $_SESSION['message'] =  $this->brand.' Deleted Successfully';
                            header('location: /raihan/View/car/index.php');
                        }else{
                            $_SESSION['message'] =  'Failed To Delated';
                            header('location: /raihan/View/car/index.php');
                        }
		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}

	public function trashlist(){
		try{
			$query="SELECT * FROM car where is_delete=1";
			$stmt=$this->conn->query($query);
			$data=$stmt->fetchAll();
			return $data;
		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}

	public function restore(){
		try{
			$query = "UPDATE car SET is_delete=:true where id=:id";
			$stmt=$this->conn->prepare($query);
			$result=$stmt->execute(array(
				':true'=>'0',
				':id'=>$this->id
				));
                         if($result){
                            $_SESSION['message'] =  $this->brand.' Restore Successfully';
                            header('location: /raihan/View/car/trashlist.php');
                        }else{
                            $_SESSION['message'] =  'Failed To Restore';
                            header('location: /raihan/View/car/trashlist.php');
                        }

		}catch(PDOException  $e){
			echo 'Error :' .$e->getMessage();
		}
	}
}

?>