<!-- 3=step) Display Data -->
<?php include 'connection.php';?>
<a href="index.php">Home</a>
<table border="1px" cellpadding="10" cellspacing="0px">
    <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Age</th>
       <th colspan="2">Actions</th>
    </tr>
    <?php
        $query="SELECT * FROM priti";
        $data=mysqli_query($conn,$query);
        $result=mysqli_num_rows($data);//this will wether the rows are there or not and check how many rows are there
        if($result){
           while ($row=mysqli_fetch_assoc($data)){
            ?>
            <tr>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['age'];?></td>
                <th><a href="update.php?id=<?php echo $row ['id'];?>">Edit</a></th>
                <th> <a onclick="return confirm('Are You Sure You Want To Delete')"  href="delete.php?id=<?php echo $row['id']?>">Delete</a></th>

            </tr>
            <?php
           }
        }
        else{
            ?>
            <tr>
                <td>No Record Found</td>
            </tr>
            <?php
        }
    ?>
</table>