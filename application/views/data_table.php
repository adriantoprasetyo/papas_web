<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>

	<table class="table table-hover">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Subject</th>
	      <th scope="col">Messasge</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $count = 1; ?>
	  	<?php foreach ($data as $value) { ?>
	    <tr>
	      <th scope="row"><?= $count ?></th>
	      <td><?= $value->name ?></td>
	      <td><?= $value->email ?></td>
	      <td><?= $value->phone ?></td>
	      <td><?= $value->subject ?></td>
	      <td><?= $value->message ?></td>
	    </tr>
	    <?php $count++ ?>
		<?php } ?>
	  </tbody>
	</table>
</body>
</html>