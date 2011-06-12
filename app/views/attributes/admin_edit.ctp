<!-- File: /app/views/posts/edit.ctp -->
	
<h1>Edit <?php echo $model_name; ?></h1>
<?php
	echo $this->Form->create($model_name, array('action' => 'edit', 'type' => 'file'));
	echo $this->Form->input('name', array('label' => $model_name.' Name'));
	echo $this->Form->input('sub_category_id', array('label'=>'Select Sub Category', 'type'=>'select', 'options'=>$parentList) );
	echo $this->Form->input('desc', array('type' => 'textarea', 'label' => $model_name.' Description'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save '.$model_name);
?>
