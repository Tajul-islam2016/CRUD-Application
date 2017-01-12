<?php
include("header.php"); 
include("function.php");

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

?>

<?php

$user = new Teacher();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $age = $_POST['age'];

    $user->setAge($age);
    $user->setDep($dept);
    $user->setName($name);

    $user->insertData();
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $age = $_POST['age'];
    
    $user->setAge($age);
    $user->setDep($dept);
    $user->setName($name);

    $user->updateData($id);
}
?>

<?php
    
    if(isset($_GET['action']) && $_GET['action'] == 'edit')
    {
        $id = (int)$_GET['id'];
        $result = $user->readByID($id);

?>
<section class="mainleft">
    <form action="" method="post">
        <table>
            <input type="hidden" name="id" value="<?php echo $result['id'];?>"
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?php echo $result['name'];?>" required="1"/></td>
            </tr>
            <tr>
                <td>Department: </td>
                <td><input type="text" name="dept" value="<?php echo $result['dep'];?>" required="1"/></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age" value="<?php echo $result['age'];?>" required="1"/></td>          
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update"/></td>          
            </tr>
        </table>
    </form>
</section>

<?php } else if (isset($_GET['action']) && $_GET['action'] == 'delete'){ 
                 $id = (int)$_GET['id'];
                 $user->deleteData($id); ?>
                 
                 <section class="mainleft">
    <form action="" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" placeholder="Your Name.." required="1"/></td>
            </tr>
            <tr>
                <td>Department: </td>
                <td><input type="text" name="dept" placeholder="Your Department.." required="1"/></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age" placeholder="Your Age.." required="1"/></td>          
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"/></td>          
            </tr>
        </table>
    </form>
</section>
 <?php  } else { ?>

<section class="mainleft">
    <form action="" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" placeholder="Your Name.." required="1"/></td>
            </tr>
            <tr>
                <td>Department: </td>
                <td><input type="text" name="dept" placeholder="Your Department.." required="1"/></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age" placeholder="Your Age.." required="1"/></td>          
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"/></td>          
            </tr>
        </table>
    </form>
</section>

<?php } ?>

<section class="mainright">
    <table class="tblone">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        
    <?php
    $i = 0;
    foreach($user->readAll() as $value){
        $i++;
    ?>  
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $value['name']?></td>
            <td><?php echo $value['dep']?></td>
            <td><?php echo $value['age']?></td>

            <td>
                <?php 

                    echo "<a href='teacher.php?action=edit&id=".$value['id']."'>Edit</a>";

                ?>
                  ||
                <?php echo "<a href='teacher.php?action=delete&id=".$value['id']."' onClick='return confirm(\"Are you sure to delete Data....\")'>Delete</a>"; ?>
            </td>
        </tr>
        
    <?php } ?>
    </table>
</section>

<?php include("footer.php"); ?>
