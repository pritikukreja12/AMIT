<!--2=step) insert data into database-->
<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="" method="POST">
       FIRSTNAME: <input type="text" name="firstname" placeholder="firstname"><br><br>
       LASTNAME: <input type="text" name="lastname" placeholder="lastname"><br><br>
       AGE: <input type="number" name="age" placeholder="Age"><br><br>
       <input type="submit" name="save_btn" value="Save">
       <button><a href="view.php">View</a></button> 
    </form>
    </div>
    <?php
        if(isset($_POST['save_btn'])){//if user will click on save btn then only action will perform 
            $fname=$_POST['firstname'];//when user will fill the information then it will store in this variable
            $lname=$_POST['lastname'];
            $age=$_POST['age'];

            $query="INSERT INTO priti (firstname, lastname, age) VALUES ('$fname', '$lname', '$age')";
            $data=mysqli_query($conn,$query);//execute a query
            if($data){
                ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully");
                </script>

                <?php
            }
            else{
                ?>
                <script type="text/javascript">
                    alert("Please Try Again");
                </script>
                <?php
            }
        } 
    ?>
</body>
</html>