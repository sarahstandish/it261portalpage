<?php
    if (isset($_POST['name'], $_POST['confirm'])) {
        $name = $_POST['name'];
        $confirm = $_POST['confirm'];
        $yes = 'unchecked';
        $no = 'unchecked';

        if ($confirm == 'yes') {
            $yes = 'checked';
            header('Location:/it261/index.php');
        } else if ($confirm == 'no') {
            $no = 'checked';
            header('Location:member.php');
        }

    } else {
        echo "
        <form action='' method='post'>
            <label>Name</label>
                <input type='text' name='name'>
            <label>Are you a member?</label>
                <input type='radio' name='confirm' value='yes'>Yes
                <input type='radio' name='confirm' value='no'>No
            <input type='submit' value='Submit'>
            <p><a href=''>Reset</a></p>
        </form>
        ";
    }

?>