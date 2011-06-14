<!-- File: /app/views/posts/add.ctp -->	
	
<h1>Add <?php echo $model_name; ?></h1>
<?php
	echo $this->Form->create($model_name, array('action' => 'add', 'type' => 'file'));
	echo $this->Form->input('name', array('label' => $model_name.' Name'));
	echo $this->Form->input('desc', array('type' => 'textarea', 'label' => $model_name.' Description'));
	echo $this->Form->end('Save '.$model_name);
?>