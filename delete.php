<!-- 4=step)Delete-->
<?php include 'connection.php';
    $id=$_GET['id'];
    $query="DELETE FROM priti WHERE id=$id";
    $data=mysqli_query($conn,$query);
    if($data){
        ?>
            <script type="text/javascript">
                alert("Data Deleted Successfully");
                window.open("http://localhost/priti(crud)/view.php","_self");//redirecting on same page
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
?>