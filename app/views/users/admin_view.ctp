<h1>User Name : <?php echo $model[$model_name]['username']?></h1>
<h1>Password : <?php echo $model[$model_name]['password']?></h1>
<?php
echo $this->Form->create($model_name, array('action' => 'all'));
echo $this->Form->end('Back');
?>