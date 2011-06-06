<!-- File: /app/views/posts/add.ctp -->	
	
<h1>Add <?php echo $model_name; ?></h1>
<?php
	echo $this->Form->create($model_name);
	echo $this->Form->input(strtoupper($model_name).'_NAME', array('label' => $model_name.' Name'));
	echo $this->Form->input(strtoupper($model_name).'_DESC', array('type' => 'textarea', 'label' => $model_name.' Description'));
	echo $this->Form->end('Save '.$model_name);
?>