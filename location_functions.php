<?php
include "connection.php";
$user_destination = $_POST['destination'];

if($conn->connect_error){
	die ("Connection failed" . mysqli_connect_error());
}else{
}
$new_result= mysqli_query($conn, "SELECT website FROM padealers WHERE zip='$user_destination'");
	if (mysqli_num_rows($new_result) > 0){
		while($row = mysqli_fetch_assoc($new_result)){
		    $site=$row['website'];
		    echo '<h2>finding your nearest Cadillac dealer!</h2>';
        }
	}else{
		echo 'fail';
	}
?>
<script>
window.location.href='https://' + <?php echo json_encode($site); ?>;
</script>
