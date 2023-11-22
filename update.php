<!--4=step) Update -->
<?php include 'connection.php';
$id=$_GET['id'];

//for displaying the data
$select="SELECT * FROM priti WHERE id='$id'";
$data=mysqli_query($conn,$select);

//fetching the data
$row=mysqli_fetch_assoc($data);

 ?>

<div>
    <form action="" method="POST">
       FIRSTNAME: <input type="text" value="<?php echo $row['firstname']?>" name="firstname" placeholder="firstname"><br><br>
       LASTNAME: <input type="text" value="<?php echo $row['lastname']?>" name="lastname" placeholder="lastname"><br><br>
       AGE: <input type="number" value="<?php echo $row ['age']?>" name="age" placeholder="Age"><br><br>
       <input type="submit" name="update_btn" value="Update">
       <button><a href="view.php">Back</a></button>
    </form>
</div>
<?php
        if(isset($_POST['update_btn'])){//if user will click on save btn then only action will perform 
            $fname=$_POST['firstname'];//when user will fill the information then it will store in this variable
            $lname=$_POST['lastname'];
            $age=$_POST['age'];

            $update="UPDATE priti SET firstname='$fname', lastname='$lname', age='$age' WHERE id='$id'" ;
            $data=mysqli_query($conn,$update);//execute a query
            if($data){
                ?>
                <script type="text/javascript">
                    alert("Data Updated Successfully");
                    window.open("http://localhost/priti(crud)/view.php","_self");
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
