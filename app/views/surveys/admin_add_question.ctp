	
echo $this->Html->tag ( 'h1', 'Add ' . $model_name );
<?php
	echo $this->Form->create($model_name, array('action' => 'add_question'));
	echo $this->Form->input('Survey.id', array('label'=>$model_name, 'type'=>'select', 'empty'=> false, 'options'=>$list) );
	echo $this->Form->input('Question');
	echo $this->Form->end('Save');
?>