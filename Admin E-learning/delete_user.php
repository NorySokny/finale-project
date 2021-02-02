<?php
    $servername='localhost';
    $username="root";
    $dbname="e_learning";
    $con=mysqli_connect($servername,$username,'',$dbname);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }
    $data=array();
    $id=@$_POST['id'];
    if($id>0){
        $q_delete="delete from users where id=".$id;
        $result=$con->query($q_delete);
        if(isset($result)&&$result==1){
            $data['status']=1;
            $data['message']="<div style='margin-top:10px;' class='alert alert-success' role='alert'>Delete Successful</div>";
            echo json_encode($data);
            exit();
        }
    }
?>
