<?php

session_start();

session_destroy();
echo "<script> window.alert('Logged OUT') </script>";
echo "<script> location.href='login.php'</script>";

?>