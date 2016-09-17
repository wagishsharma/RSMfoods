<table border="1">
    <tr>
    	<th>NO.</th>
		<th>NAME</th>
		<th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Mobile No</th>
        <th>Comefrom</th>
	</tr>
	<?php
	//connection to mysql
	include('include/conectdb.php');
	
	//query get data
	$sql = mysqli_query($dbc,"SELECT * FROM package ORDER BY id ASC");
	$no = 1;
	while($data = mysqli_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['name'].'</td>
			<td>'.$data['email'].'</td>
			<td>'.$data['subject'].'</td>
			<td>'.$data['message'].'</td>
			<td>'.$data['mobile'].'</td>
			<td>'.$data['comefrom'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>