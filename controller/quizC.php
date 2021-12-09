<?PHP
include 'configg.php';
class userC 

{
	public function inscription($product,$con)
	{       
		 $sql = "INSERT INTO users (user_name,user_email,password) values (:user_name, :user_email, :password)";
        try {
            $req = $con->prepare($sql);
            $req->bindValue(':user_name', $product->getuser_name());
            $req->bindValue(':user_email', $product->getuser_email());
			$req->bindValue(':password', $product->getpassword());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}{

function addq()
{
	if(isset($_GET['add'])){
		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$con=config::getConnexion();
		//something was posted
        $question_number=(int) $_POST['question_number'];
		$question_text = trim($_POST['question_text']);
        $option1 = trim($_POST['coption1']);
        $is_coorect1   = (int) $_POST['is_correct1'];
        $option2 = trim($_POST['coption2']);
        $is_coorect2   = (int) $_POST['is_correct2'];
        $option3 = trim($_POST['coption3']);
        $is_coorect3   = (int) $_POST['is_correct3'];
        if(!empty($question_number) && !empty($question_text))
		{
			//save to database
            $sql="INSERT INTO `questions`(`question_number`, `question_text`) VALUES ($question_number,'$question_text')";
            $sql1="INSERT INTO `options`(`question_number`, `is_correct`, `coption`) VALUES ('$question_number','$is_coorect1','$option1')";
            $sql2="INSERT INTO `options`(`question_number`, `is_correct`, `coption`) VALUES ('$question_number','$is_coorect2','$option2')";
            $sql3="INSERT INTO `options`(`question_number`, `is_correct`, `coption`) VALUES ('$question_number','$is_coorect3','$option3')";
			try{  
				$query=$con->prepare($sql);
				$query->execute();
				$query1=$con->prepare($sql1);
				$query1->execute();
				$query2=$con->prepare($sql2);
				$query2->execute();
				$query3=$con->prepare($sql3);
				$query3->execute();
				header("Location:index2.php");
			}catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

	}
}

function quiz_form ()
{
	if(isset($_GET['inscrire'])){
	$con=config::getConnexion();
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
    	$email = $_POST['email'];
		if(!empty($fname) && !empty($lname) && !empty($email))
		{
			$uid=random_num(5);
			//save to database
			$sql = "insert into result (uid,fname,lname,email) values ('$uid','$fname','$lname','$email')";
			try{  
				$query=$con->prepare($sql);
				$query->execute();
				header("Location:quiz.php?n=1&uid=$uid");
			}catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	}
}}

function get_question()
{
	if(isset($_GET['n'])){
	$con=config::getConnexion();
	//Set Question Number
	$number = $_GET['n'];
	//Query for the Question
	$sql = "SELECT * FROM questions WHERE question_number = $number";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	// Get the question
	$question = $query->fetch();
	return $question;
}
}
function getoptions()
{
	if(isset($_GET['n'])){
	$con=config::getConnexion();
	$number = $_GET['n'];
	//Get Choices
	$sql = "SELECT * FROM options WHERE question_number = $number";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
		return $query;
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
}
function result_calcul($number)
{
	$con=config::getConnexion();
	if($_POST){
	$selected_choice = $_POST['choice'];
	//Determine the correct choice for current question
	$sql = "SELECT * FROM options WHERE question_number = $number AND is_correct = 1";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	$row = $query->fetch();
	$correct_choice = $row['id'];
   //Increase the score if selected cohice is correct
	 if($selected_choice == $correct_choice){
		 $_SESSION['score']++;
	 }
	return $_SESSION['score'];
	}

}

function nextq()
{
	$con=Config::getConnexion();
	if(isset($_GET['next'])){
	$number = $_GET['next'];
	$uid = $_GET['uid'];
	$t=total_question();
	result_calcul($number);
	if($number<$t)
	{
	$number ++ ;
	header("Location:quiz.php?n=$number&uid=$uid");
	}
	else{
			$insert_scroe="UPDATE `result` SET `res`={$_SESSION['score']} WHERE uid ='$uid' ";
			try{  
				$query=$con->prepare($insert_scroe);
				$query->execute();
			}catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
			unset($_SESSION['score']);
			header("Location:result.php?id=$uid");
	}
}
}

function get_result()
{
	$con=Config::getConnexion();
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql="SELECT * FROM `result` WHERE `uid` = '$id'";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	$user_data = $query->fetch();
    return $user_data;
	}
}

function total_question()
{
	$con=config::getConnexion();
	// Get Total questions
	$sql= "SELECT * FROM questions";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	$total_questions = $query->rowCount();
	return $total_questions;
}

function deleteq()
{
	$con=config::getConnexion();
	if(isset($_GET['deleteq'])){
        $question_number = $_GET['deleteq'];
        $sql ="DELETE FROM `questions` WHERE `question_number` = '$question_number' ";
        $sql2 ="DELETE FROM `options` WHERE `question_number` = '$question_number' ";
		try{  
			$query2=$con->prepare($sql2);
			$query2->execute();
			$query=$con->prepare($sql);
			$query->execute();
			header("Location:index2.php");
		}catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }
}

function getallq()
{
	$con=config::getConnexion();
	$sql = "SELECT * FROM questions";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
		return $query;
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function getalla($a)
{
	$con=config::getConnexion();
	$sql = "SELECT * FROM `options` WHERE `question_number` = '$a'";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
		return $query;
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function update()
{
	$con=config::getConnexion();
	if(isset($_GET['update'])){
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			//something was posted
			$question_id=(int) $_POST['question_id'];
			$question_number=(int) $_POST['question_number'];
			$question_text = trim($_POST['question_text']);
			$option_id1     = (int) $_POST['id1'];
			$option1 = trim($_POST['coption1']);
			$is_coorect1   = (int) $_POST['is_correct1'];
			$option_id2     = (int) $_POST['id2'];
			$option2 = trim($_POST['coption2']);
			$is_coorect2   = (int) $_POST['is_correct2'];
			$option_id3     = (int) $_POST['id3'];
			$option3 = trim($_POST['coption3']);
			$is_coorect3   = (int) $_POST['is_correct3'];
			if(!empty($question_number) && !empty($question_text))
			{
				//save to database
				$sql="UPDATE `questions` SET `question_number`=$question_number,`question_text`='$question_text' WHERE question_id =$question_id ";
				$sql1="UPDATE `options` SET `question_number`=$question_number,`coption`='$option1',`is_correct`='$is_coorect1' WHERE id =$option_id1";
				$sql2="UPDATE `options` SET `question_number`=$question_number,`coption`='$option2',`is_correct`='$is_coorect2' WHERE id =$option_id2";
				$sql3="UPDATE `options` SET `question_number`=$question_number,`coption`='$option3',`is_correct`='$is_coorect3' WHERE id =$option_id3";
				try{  
					$query=$con->prepare($sql);
					$query->execute();
					$query1=$con->prepare($sql1);
					$query1->execute();
					$query2=$con->prepare($sql2);
					$query2->execute();
					$query3=$con->prepare($sql3);
					$query3->execute();
					header("Location:index2.php");
				}catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}
				die;
			}
		}
}
}
function getallr ()
{
	$con=config::getConnexion();
	$sql = "SELECT * FROM `result`";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	// Get the question
	return $query;
}

function getallr_sort()
{
	if(isset($_GET['sort'])){
	$sort=$_GET['sort'];
	$con=config::getConnexion();
	$sql = "SELECT * FROM `result` ORDER BY $sort ";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	// Get the question
	return $query;
}
}

function top()
{
	$con=config::getConnexion();
	//Query for the Question
	$sql = "SELECT * FROM `result` WHERE res= (SELECT MAX(res) as max_res FROM result)";
	try{  
		$query=$con->prepare($sql);
		$query->execute();
	}catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
	// Get the question
	return $query;
}

function remarque ($s,$t)
{
	if($s/$t>=0.5)
	{
		echo "Good results :) !!!";
	}else
	{
		echo "Bad results :( !!! ";
	}
}

}