<!-- File: /app/views/posts/edit.ctp -->
	
<h1>Edit <?php echo $model_name; ?></h1>
<?php
	echo $this->Form->create($model_name, array('action' => 'edit'));
	echo $this->Form->input(strtoupper(Inflector::underscore($model_name)).'_NAME', array('label' => $model_name.' Name'));
	echo $this->Form->input(strtoupper(Inflector::underscore($model_name)).'_DESC', array('type' => 'textarea', 'label' => $model_name.' Description'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save '.$model_name);
?>
