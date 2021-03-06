<!-- File: /app/views/posts/index.ctp  (edit links added) -->
	
<h1><?php echo $model_name; ?> admin</h1>
<p><?php echo $this->Html->link("Add ".$model_name, array('action' => 'admin_add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Question</th>
		<th>Options</th>
		<th>Action</th>
	</tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($list as $item): ?>
	<tr>
		<td><?php echo $item[$model_name]['id']; ?></td>
		<td><?php echo $this->Html->link($item[$model_name]['name'], array('action' => 'view', $item[$model_name]['id']));?></td>
		<td>
			<?php for ($i = 0; $i < sizeof($item['Option']); $i++) {
				echo $item['Option'][$i]['text']. ',';
			}?>
		</td>
        <td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $item[$model_name]['id']));?>
			<?php echo $this->Html->link(
				'Delete', 
				array('action' => 'delete', $item[$model_name]['id']), 
				null, 
				'Are you sure?'
			)?>
		</td>
	</tr>
<?php endforeach; ?>

</table>