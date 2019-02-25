<?php
session_start();
include_once 'Connection.php';

Class ClientManager{

	private $db;

	public function __construct($db){
		$this->db=$db;
	}



	public function login($email, $password){
		if(empty($email) && empty($password)){
			$password = sha1($password);
			$requete ="SELECT * FROM client WHERE email = ? AND password = ?";
			$reponse = $this->db->prepare($requete)or exit(print_r($this->db->errorInfo()));
			$reponse->execute([$email,$password]);			
			if ($reponse->rowCount()==1){
				$_SESSION["email"]=$email;
				$_SESSION["password"]=$password;
			}
			else{
				echo "Utilisateur n'existe pas sur la base";
			}
			//  rajouter
		}else{
			echo "Merci de saisir le login et le mot de passe ";
		}
	}
	
	//add client
	public function ajouterClient($nom, $prenom, $email, $telephone, $password, $adresse, $ville, $codepostal) {
		try {
						$password = sha1($password);
						$requete ="insert into client values (?,?,?,?,?,?,?,?,?,?)";
		                $reponse = $this->db->prepare($requete)or exit(print_r($this->db->errorInfo()));
		                $reponse->execute(['Default',$nom,$prenom,$email,$telephone,$password,$adresse,$ville,$codepostal,rand()]);
		}
		catch (Exception $e){
			echo "Erreur : ".$e->getMessage();
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
			return  $this->db->query("SELECT * FROM users where username like '%".$nom."%'");
		}
		catch(Exception $e){
			$e->getMessage();
	
		}
	}
	
	public function getUserById($id){
		try{
			return  $this->db->query("SELECT * FROM users WHERE id= '$id' ");
			$modif->closeCursor();
		}
		catch(Exception $e){
			$e->getMessage();
		}
	}
	
	public function update($id, $pseudo, $mdp) {
		try{
			if(!empty($pseudo) && !empty($mdp)){
				$mdp = md5($mdp);
				$modif = $this->db->query("update users set username='$pseudo' where id ='$id'");
				$modif = $this->db->query("update users set password='$mdp' where id ='$id'");
				$modif->closeCursor();
				echo "<span>Modification enregistr�e!</span>";
			}
		}
		catch(Exception $e){
			$e->getMessage();
		}
	
	}
	public function delete($id){
		try{
			if($id){
				$st=$this->db->prepare("DELETE FROM users WHERE id='$id'");
				$st->execute();
				$st->closeCursor();
				echo "Utilisateur  suuprim� avec  Succ�s";
			}
		}catch (Exception $e){
			$e->getMessage();
	
		}
	
	
	}
	}
	?>