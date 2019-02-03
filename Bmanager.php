<?php
include_once 'connection.php';

Class Bmanager{

	private $db;


	public function __construct($db){
		$this->db=$db;
	}

	public function login($username, $password){
	try{
			$req = $this->db->query("SELECT * FROM clients WHERE email='$username' AND password='$password'")or exit(print_r($this->db->errorInfo()));;
			$_SESSION['username']=$username;
		}catch(Exception $e){
			$e->getMessage();

		}
	}

	//add user
	public function addUser($nom, $prenom, $email, $tel, $password) {
		try {
						//$password = sha1($password);
						$reponse = $this->db->exec("insert into clients values (Default,'$nom','$prenom','$email','$tel','$password')")or exit(print_r($this->db->errorInfo()));
			
			
		}
		catch (PDOException $e){
			echo $e->getMessage();
		}


	}

	public function getAll(){
		try{
			return  $this->db->query("SELECT * FROM users");
		}
		catch(Exception $e){

		}
	}

	public function rechercher($nom){
		try{
			return  $this->db->query("SELECT * FROM users where email like '%".$nom."%'");
		}
		catch(Exception $e){
			$e->getMessage();

		}
	}

	public function getUserById($id){
		try{
			return  $this->db->query("SELECT * FROM users WHERE id= '$id' ");
		}
		catch(Exception $e){
			$e->getMessage();
		}
	}

	public function update($id, $pseudo, $mdp) {
		try{
			if(!empty($pseudo) && !empty($mdp)){
				$mdp = sha1($mdp);
				$modif = $this->db->query("update users set email='$pseudo' where id ='$id'");
				$modif = $this->db->query("update users set passw='$mdp' where id ='$id'");
				
				echo "<span>Modification enregistrée!</span>";
			}
		}
		catch(Exception $e){
			$e->getMessage();
		}

	}
	public function delete($id){
		try{ 
		if($_SESSION['ident']== $id){
			echo "Impossible de supprimer l'utilisateur connecté";
		}else{
				$st=$this->db->prepare("DELETE FROM users WHERE id='$id'");
				$st->execute();
				echo "Utilisateur  suuprimé avec  Succès";
			}
		}catch (Exception $e){
			$e->getMessage();

		}


	}
}
?>