<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Handle</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $count = 0; ?>
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