<?php

$url = 'http://localhost/codemonkeys/php_login_form/cms/cms.php';
$file = 'textfile.txt';

if (isset($_POST['text']))
{
    file_put_contents($file, $_POST['text']);

    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

$text = file_get_contents($file);

?>
<form action="" method="post">
<textarea name="text" rows="10" cols="50"><?php echo htmlspecialchars($text) ?></textarea>
<input type='submit' name='btnTest2' value='Update file'>
<input type="reset" />
</form>