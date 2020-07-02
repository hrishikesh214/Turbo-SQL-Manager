<?php require base_url('App/views/header.php'); ?>

<table class="table table-bordered table-dark table-hover table-sm table-striped">
	<tr>
		<th>SrNo</th>
		<?php for($x=0;$x<$cols;$x++): ?>
			<th><?=$col_names[$x]?></th>
		<?php endfor ?>
	</tr>
	<?php for($x=0;$x<$rows;$x++): ?>
		<tr>
			<td><?=($x+1)?></td>
			<?php foreach($result[$x] as $d): ?>
				<td><?=$d?></td>
			<?php endforeach ?>
		</tr>
	<?php endfor ?>
</table>

<?php require base_url('App/views/footer.php'); ?>