<?php
echo $this->Html->tag ( 'h1', 'Add ' . $model_name );
echo $this->Form->create ( $model_name, array ('action' => 'add', 'type' => 'file' ) );
echo $this->Form->select ( 'lining_id', $parentList0 );
echo '<br>';
echo $this->Form->select ( 'lining_fabric_id', $parentList1);
echo '<br>';
echo $this->Form->input ( 'Image.name', array ('type' => 'file', 'label' => false, 'error' => 'Choose a image' ) );
echo $this->Form->end ( 'Save ' . $model_name );
?>