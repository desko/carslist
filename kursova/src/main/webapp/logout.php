<<<<<<< HEAD
<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: /login.php');
die;
=======
<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: /login.php');
die;
>>>>>>> branch 'master' of https://github.com/desko/carslist.git
?>