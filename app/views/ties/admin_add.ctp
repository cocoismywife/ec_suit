<?php
echo $this->Html->tag ( 'h1', 'Add ' . $model_name );
echo $this->Form->create ( $model_name, array ('action' => 'add', 'type' => 'file' ) );
echo $this->Form->input ( 'name', array ('label' => $model_name . ' Name' ) );
echo $this->Form->input ( 'type', array ('label' => $model_name . ' Type' ) );
echo $this->Form->input ( 'desc', array ('type' => 'textarea', 'label' => $model_name . ' Description' ) );
echo $this->Form->input ( 'Image.name', array ('type' => 'file', 'label' => false, 'error' => 'Choose a image' ) );
echo $this->Form->input ( 'ImageMirror.name', array ('type' => 'file', 'label' => false, 'error' => 'Choose a image' ) );
echo $this->Form->end ( 'Save ' . $model_name );
?>