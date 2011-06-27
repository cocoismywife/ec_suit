<?php
echo $this->Html->tag ( 'h1', 'Edit ' . $model_name );
echo $this->Form->create ( $model_name, array ('action' => 'edit' ) );
echo $this->Form->input ( 'name', array ('label' => $model_name . ' Name' ) );
echo $this->Form->input ( 'desc', array ('type' => 'textarea', 'label' => $model_name . ' Description' ) );
echo $this->Form->input ( 'id', array ('type' => 'hidden' ) );
echo $this->Form->end ( 'Save ' . $model_name );
?>
