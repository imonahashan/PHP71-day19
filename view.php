<?php

require_once 'vendor/autoload.php';

use App\classes\Student;
Student::addition();


//
////if(isset($_POST['btn'])){
//////    $demo = new App\classes\Demo();
////    $res =$demo->wordCharacterCount($_POST);
////}

use App\classes\Demo;

if(isset($_POST['btn'])){
    $res =  demo::wordCharacterCount($_POST);
}

?>


<form action="" method="post">
    <table>
        <tr>
            <th>Enter your String</th>
            <td><input type="text" name="given_string" size="50"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
        <tr>
            <th>total number of word</th>
            <td><input type="text" value="<?php echo $res['wordLength'] ?>" readonly/></td>
        </tr>
        <tr>
            <th>total number of character</th>
            <td><input type="text" value="<?php echo $res['stringLength'] ?>" readonly/></td>
        </tr>
    </table>
</form>
