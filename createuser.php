
 
<?php
        // put your code here
        if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["gender"])&& isset($_GET["status"])) {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $gender = $_GET["gender"];
            $status = $_GET["status"];
            

            if (!empty($name) && !empty($email) && !empty($gender)&&!empty($status)) {
                echo 'Name          : ' . $_GET ['name'] . '<br>';    
                echo 'Email         : ' . $_GET ['email'] . '<br>';
                echo 'Gender        : ' . $_GET ['gender'] . '<br>';
                echo 'Status        : ' . $_GET ['status'] . '<br>';
                
            } else {
                echo "please enter all fields";
            }
        }
        
        if ($_POST["name"]==="aaron" && $_POST["password"]==="123456"){
    echo "name and password is correct";
   
}else{
    echo "name and password is incorrect";
}
        $info = $_POST['info'];

if($info != 'Info Here') {
    $conn = mysqli_connect();
    $query = "INSERT INTO leads VALUES(0, '$companyName', 1, NOW(), 3)";
    $result = mysqli_query($conn, $query) or die ('Error Could Not Query');

    $id = mysqli_insert_id($result);
    header("Location: http://localhost/manage/info.php?id=$id");

    mysqli_close($conn);
} else 
    echo '<script>alert("Error");/script>'

   


        ?>

