<?php 

class airplane extends dbConnection{

	private $planeId;
	private $type;
	private $model;

	public function addPlaneDetails($type,$model){
		$sql = "INSERT INTO `airplane`(`type`, `model`) VALUES ('".$type."','".$model."')";
		$conn=$this->connect();
            if ($conn) {
        		if ($ex=$conn->query($sql)) {
                    mysqli_close($conn);
           
                }else {
                    die('query not executed!!!');
                }
            
            
            
            
            } else {
            	die('Connection Failed!!!');
            }

	}

	public function getAvailablePlaneDetails(){
		 $sql = "SELECT * FROM `airplane`";
		 $plane_details=array();
         $conn=$this->connect();
            if ($conn) {
        
                if ($ex=$conn->query($sql)) {
                    mysqli_close($conn);
                    
                    while($result=mysqli_fetch_assoc($ex)){
                        array_push($plane_details,$result);
                   
                    }

                    
                } 
                else {
                    die('query not executed!!!');
                }
            
            
            
            
            } else {
            die('Connection Failed!!!');
            }

            return $plane_details;
            
	}







}








 ?>