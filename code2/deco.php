<!DOCTYPE html>
<?php
session_start();
session_destroy();?>
<html>
    <head>
</head>
<body>
<?php
if(isset($_GET['pays1'])){
    echo '<meta http-equiv="refresh" content="0; url=comparer.php?pays1='.$_GET['pays1'].'&continent=1">';
}else{
    echo '<meta http-equiv="refresh" content="0; url=comparer.php">';
}
?>
</body>
</html>