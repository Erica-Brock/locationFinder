<?php

if($conn->connect_error){
	die ("Connection failed" . mysqli_connect_error());
}
$result= mysqli_query($conn, "SELECT zip FROM padealers");
$numResults= mysqli_num_rows($result);
$data=array();
	while($row = $result->fetch_assoc()) {
		foreach ($row as $value) {
			array_push( $data, $row["zip"] );
		}
	}
mysqli_close($conn);
	?>
<script type="text/javascript">
let zipCodes= <?php echo json_encode($data); ?>;
let gMapKey= <?php echo json_encode($g_api_key)?>;
</script>