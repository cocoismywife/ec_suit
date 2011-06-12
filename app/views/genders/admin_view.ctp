<h1>Gender Name : <?php echo $model[$model_name]['name']?></h1>
<h1>Gender Description : <?php echo $model[$model_name]['desc']?></h1>
<h1>Preview Image : </h1>
<p><?php echo $this->Html->image('/files/images/'.$model[$model_name]['upload_file_url']); ?></p>
<?php
echo $this->Form->create($model_name, array('action' => 'all', 'type' => 'file'));
echo $this->Form->end('Back');
?>