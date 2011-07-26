<?php
echo $this->Html->tag ( 'h1', 'Edit ' . $model_name );
echo $this->Form->create ( $model_name, array ('action' => 'edit', 'type' => 'file' ) );
echo $this->Form->input ( 'text', array ('label' => $model_name . ' Text' ) );
echo $this->Form->input ( 'value', array ('label' => $model_name . ' Value' ) );
echo $this->Form->select ( 'question_id', $parentList0 );
echo $this->Form->input ( 'id', array ('type' => 'hidden' ) );
echo $this->Form->end ( 'Save ' . $model_name );
?>
