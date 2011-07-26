<?php
echo '<h1>Name : ' . $model[$model_name]['name'] . '</h1>';
echo '<h1>Type : ' . $model[$model_name]['type'] . '</h1>';
echo '<h1>Description : ' . $model[$model_name]['desc'] . '</h1>';
echo '<h1>Preview Image : </h1>';
echo '<p>' . $this->Html->image('/' . $model['Image']['path'] . '/' . $model['Image']['name']) . '</p>';
echo '<p>' . $this->Html->image('/' . $model['ImageMirror']['path'] . '/' . $model['ImageMirror']['name']) . '</p>';
echo $this->Form->create($model_name, array(
    'action' => 'all', 'type' => 'file'));
echo $this->Form->end('Back');
?>