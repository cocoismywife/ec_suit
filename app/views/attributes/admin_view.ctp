<h1><?php echo $model_name?> Name : <?php echo $model[$model_name]['name']?></h1>
<h1>SubCategory Name : <?php echo $model[$model_name]['name']?></h1>
<h1><?php echo $model_name?> Description : <?php echo $model[$model_name]['desc']?></h1>
<?php
echo $this->Form->create($model_name, array('action' => 'all', 'type' => 'file'));
echo $this->Form->end('Back');
?>