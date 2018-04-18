<?php
include('db.php')
?>

<!DOCTYPE html>
<html>
<body>

<?php
$venue = 'futsal';  
$date = '22/12';
$time = '0000';
$court = '3';

if (($venue == 'futsal') && ($date == '22/12') && ($time == '0100')) {
    echo "Alamak";
}else
	echo "Bereh!!!!!!!"
?>  

</body>
</html>