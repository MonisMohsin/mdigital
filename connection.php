<html>
<?php
$db = new mysqli('localhost','root','','mdigital');
if($db){
    ?><script type="text/javascript">alert("connected!!")</script>
<?php
}
?>
</html>