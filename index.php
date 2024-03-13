<?php
include 'Header.php';
include 'footer.php';
include 'db.php';

?>
<div class="box1">
    <!-- <input type="text"> -->
    <h2>All Students</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        ADD Button
    </button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
        <!-- <th>Sr. No.</th> -->
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody>

        <?php 
        $query = "select * from students";
        $result= mysqli_query($connection, $query);
        
        if(!$result){
            die("query Failed".mysqli_error());
        }
        else{
            
            while($row = mysqli_fetch_assoc($result)){
                ?>
        <tr>
        
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['First_name']; ?></td>
            <td><?php echo $row['Last_name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="delete_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php 
                
            
            }
        }
        ?>
</table>
</tbody>

    <?php 

        if(isset($_GET['insert_msg'])){
            echo "<h2>" .$_GET['insert_msg']."</h2>";
        } 
    ?>

    <?php 

        if(isset($_GET['update_msg'])){
            echo "<h6>" .$_GET['update_msg']."</h6>";
        } 
    ?>

        
    <?php 

    if(isset($_GET['delete_msg'])){
        echo "<h6>" .$_GET['delete_msg']."</h6>";
    } 
    ?>
    <form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="a_age">Age</label>
                        <input type="text" name="a_age" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_students" value="ADD">
                </div>
            </div>
        </div>
    </div>
</form>

<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD Students</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="a_age">Age</label>
                        <input type="text" name="a_age" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="Add_students" value="ADD">
                </div>
            </div>
        </div>
    </div>
</form>
<?php 
include 'footer.php';
?>







<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Manager</title>
</head>

<body>

    <?php
// include 'db.php';

// $createTableQuery = "CREATE TABLE IF NOT EXISTS tasks (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(255) NOT NULL,
//     description TEXT,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
// $conn->query($createTableQuery);
?>

<h2>Task Manager</h2>
<a href="create.php">Add New Task</a>

<?php
    // Display tasks
    // $result = $conn->query("SELECT * FROM tasks");
    // while ($row = $result->fetch_assoc()) {
    //     echo "<div class='task'>";
    //     echo "<h3>{$row['title']}</h3>";
    //     echo "<p>{$row['description']}</p>";
    //     echo "<p>{$row['created_at']}</p>";
    //     echo "<a href='edit.php?id={$row['id']}'>Edit</a>";
    //     echo "<a href='delete.php?id={$row['id']}'>Delete</a>";
    //     echo "</div>";
    // }
    ?> -->



















<!-- 
        <h2> Begning of PHP 12/1/24 </h2> 
        <?php
    $txt = "PHP";
    echo "I love $txt";  echo '<br>';
    echo "Hello World!";
    echo '<br>';
    echo phpversion()
?>
    

    <h4>My First PHP page </h4>
    <?php
    echo "Road to Laravel";
    ?>

    <?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";


      $a = "W3schools.com";
   echo "I love" .$a. "!";
   echo '<br>';
   $a = 4;
    $b = 5;
    echo $a + $b;
    echo '<br>';

   $x = "Roger";
$y = '4398574395!';
$z = 12.34;
$w= true;

var_dump($x);
echo "<br>"; 
var_dump($y, $z, $w);

   ?>

    <pre>

<?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

$x = 5;
function mytest($x) {
    echo '<br>'; 
    echo $x;
  echo '<br>';

}
mytest($x);
echo $x;
 
?>

</pre>

    <?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;
    
    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;
?> -->




</body>

</html>
