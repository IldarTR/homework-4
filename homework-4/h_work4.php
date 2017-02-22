<?php

require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книжка</title>
	
</head>
<body>
	<table cellpadding="10">
		
		<thead>
			<tr>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>Адрес</th>
				<th>Телефон</th>
			</tr>
		</thead>
		
		<tbody>
			<?php foreach(getProfiles() as $item): ?>
			
			<tr  class="<?php echo isset($class) ? $class : ' '; ?>">
				<td> <?php echo $item["firstname"]; ?> </td>
				<td> <?php echo $item["lastname"]; ?> </td>
				<td> <?php echo $item["address"]; ?> </td>
				<td> <?php echo $item["phoneNumber"]; ?> </td>
			</tr>
			
			<?php endforeach; ?>
		
		</tbody>
	</table>
</body>
</html>