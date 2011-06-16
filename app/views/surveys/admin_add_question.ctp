	
<h1>Add <?php echo $model_name; ?></h1>
<?php
	echo $this->Form->create($model_name, array('action' => 'add_question'));
	echo $this->Form->input('Survey.id', array('label'=>$model_name, 'type'=>'select', 'empty'=> false, 'options'=>$list) );
	echo $this->Form->input('Question');
	echo $this->Form->end('Save');
?>