<!-- File: /app/views/posts/add.ctp -->	
	
<h1>Add <?php echo $model_name; ?></h1>
<?php
	echo $this->Form->create($model_name, array('action' => 'add', 'type' => 'file'));
	echo $this->Form->input('text', array('label' => $model_name.' Text'));
	echo $this->Form->input('value', array('label' => $model_name.' Value'));
	echo $this->Form->select('question_id', $parentList);
	echo $this->Form->end('Save '.$model_name);
?>