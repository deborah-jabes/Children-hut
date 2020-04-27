<?php 

if (isset($_POST['submit'])) {
	$to = $_POST['mail'];
	$name = $_POST['name'];

	$object = $_POST['object'];
	$message = $_POST['msg'];

	mail ($to, $object, $name. ' wrote the following : ' . PHP_EOL . $message);
}

else {
	showError ('An error has occured :(');
}

/**
 * Shows an error with the message in parameter
 * @param $message
 * @param string $title
 */
function showError($message, $title="ERROR :")
{
    echo '<div class="form" id="errorcomponent">'.PHP_EOL.
    '    <h3>'.$title.'</h3>'.PHP_EOL.
    '    <p>'.$message.'</p>'.PHP_EOL.
        '</div>';
}


