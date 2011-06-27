<?php
echo $this->Html->tag ( 'h1', 'Add ' . $model_name );
echo $this->Form->create ( $model_name, array ('action' => 'add' ) );
echo $this->Form->input ( 'name', array ('label' => $model_name . ' Name' ) );
echo $this->Form->end ( 'Save ' . $model_name );
?>