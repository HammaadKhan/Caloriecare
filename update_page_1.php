<?php include ('header.php') ?>
<?php include ('db.php') ?>

<?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];

            
        $query = "SELECT * from students where id= $id";

        $result = mysqli_query($connection, $query);
        // var_dump($result);
        if(!$result){
            die("query Failed".mysqli_error());
        }
        else{
            
           $row = mysqli_fetch_assoc($result);

        //    print_r($row);
        //    die('query Success');
        }      
            }
            ?>

                <?php 
                if(isset($_POST['update_students'])){

                    if(isset($_GET['id_new'])){
                        $idnew = $_GET['id_new'];
                    }

                    $f_name = $_POST['f_name'];
                    $l_name = $_POST['l_name'];
                    $a_age = $_POST['a_age'];

                    $query = "update students set First_Name='$f_name', Last_Name='$l_name', age = $a_age where id = $idnew";

                    // echo $query,$f_name,$l_name,$a_age;
                    // die('query failed');

            $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("query Failed".mysqli_error());
        }
    
        else{
            
           header('location:index.php?update_msg=You have updated successfully');
            }
                
        }
                ?>
            
                <form action="update_page_1.php?id_new=<?php echo $id;?>" method="POST">
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control" value="<?php echo $row['First_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control" value="<?php echo $row['Last_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="a_age">Age</label>
                        <input type="text" name="a_age" class="form-control"value="<?php echo $row['age']?>">
                    </div>
                    <input type="submit" class="btn btn-success" name="update_students" value="Update">
                </form>




<?php include ('footer.php') ?>