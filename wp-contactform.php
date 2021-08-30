<?php

if (!empty($_POST)) {

	global $wpdb;
	$table = 'wp_contactform';
	$data = array(
		'name' => $_POST['yourname'],
		'message' => $_POST['yourmessage']
	);
	$format = array(
		'%s',
		'%s'
	);
	$success=$wpdb->insert( $table, $data);
	if($success) {
		echo 'Data has been saved';
	}
} else {

	?>
	<form method="post">
	<input type="text" name="yourname">
	<textarea name="yourmessage"></textarea>
	<input type="submit">
</form>
<?php
}

