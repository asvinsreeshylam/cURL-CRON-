
<?php
require_once("dbcontroller.php");
// 0 means unlimited timeout

ini_set('max_execution_time', 0);  

$dbcontroller = new DBController();

$url=$dbcontroller->Remoteurl;



$ch = curl_init();

// Disable SSL verification

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Will return the response, if false it print the response

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set the url

curl_setopt($ch, CURLOPT_URL,$url);

// Execute

$result=curl_exec($ch);

// Closing

curl_close($ch);

// decode JSON

$json = json_decode($result, true);

deleteMobile();

foreach ($json['Output'] as $value) {
    
   addMobile($value);
    
   
}


	 function deleteMobile(){
		
		
			$query = 'TRUNCATE tbl_mobile';
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			if($result != 0){
			   
				$result = array('success'=>1);
				return $result;
			}
		
	}
	 function addMobile($Dat){

		$_POST=$Dat;


		if(isset($_POST['name'])){
			$name = $_POST['name'];
				$model = '';
				$color = '';
			if(isset($_POST['model'])){
				$model = $_POST['model'];
			}
			if(isset($_POST['color'])){
				$color = $_POST['color'];
			}	
			$query = "insert into tbl_mobile (name,model,color) values ('" . $name ."','". $model ."','" . $color ."')";
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			
			if($result != 0){

				$result = array('success'=>1);

				
				return $result;
			}
		}
	}


?>
