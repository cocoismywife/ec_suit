<?php
echo $this->Html->tag ( 'h1', 'Edit ' . $model_name );
echo $this->Form->create ( $model_name, array ('action' => 'edit', 'type' => 'file' ) );
echo $this->Form->input ( 'name', array ('label' => $model_name . ' Name' ) );
echo $this->Form->input ( 'type', array ('label' => $model_name . ' Type' ) );
echo $this->Form->input ( 'desc', array ('type' => 'textarea', 'label' => $model_name . ' Description' ) );
echo $this->Form->input ( 'Image.name', array ('type' => 'file', 'label' => false, 'error' => 'Choose a image' ) );
echo $this->Form->input ( 'image_id', array ('type' => 'hidden' ) );
echo $this->Form->input ( 'ImageMirror.name', array ('type' => 'file', 'label' => false, 'error' => 'Choose a image' ) );
echo $this->Form->input ( 'image_mirror_id', array ('type' => 'hidden' ) );
echo $this->Form->input ( 'id', array ('type' => 'hidden' ) );
echo $this->Form->end ( 'Save ' . $model_name );
?>
