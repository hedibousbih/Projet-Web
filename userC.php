<?php
	include '../config.php';
	include_once '../Model/user.php';
	
	class userC {
		function connexionuser($email,$pwd){
            $sql="SELECT * FROM registration WHERE email='" . $email . "' and pwd= '". $pwd."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }
		function afficheruser(){
			$sql="SELECT * FROM registration";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimeruser($username){
			$sql="DELETE FROM registration WHERE username=:username";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':username', $username);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouteruser($user){
			$sql="INSERT INTO registration(username, userlastname, email, pwd) 
			VALUES (:username, :userlastname, :email, md5(:pwd))";
			// VALUES (:username, :userlastname, :email, md5(:pwd))";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'username' => $user-> getusername(),
					'userlastname' => $user-> getuserlastname(),
					'email' => $user-> getemail(),
					'pwd' => $user-> getpwd(),
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereruser($username){
			$sql='SELECT * FROM registration WHERE username = "'.$username.'"';
			//var_dump($sql);
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				//$user = $db->query($sql);
				
				$user = $query->fetch();
				//var_dump($user);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieruser($user, $username){

			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE  SET 
						username= :username, 
						userlastname= :userlastname, 
						email= :email, 
						pwd= :pwd, 
					WHERE username= :username'
				);
				$query->execute([
					// 'username' => $user-> getusername(),
					'userlastname' => $user-> getuserlastname(),
					'email' => $user-> getemail(),
					'pwd' => $user-> getpwd(),
					'username' => $username
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>