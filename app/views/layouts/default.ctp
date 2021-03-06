<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('EC_SUITS: admin managment'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<table>
				<tr>
					<td colspan="9"><strong>For XML</strong></td>
				</tr>
				<tr>
					<th><?php echo $this->Html->link('Gender', '/genders/all')?></th>
					<th><?php echo $this->Html->link('Style', '/styles/all')?></th>
					<th><?php echo $this->Html->link('Fabric', '/fabrics/all')?></th>
					<th><?php echo $this->Html->link('Lining', '/linings/all')?></th>
					<th><?php echo $this->Html->link('LiningFabric', '/lining_fabrics/all')?></th>
					<th><?php echo $this->Html->link('LiningSet', '/lining_sets/all')?></th>
					<th><?php echo $this->Html->link('Collar', '/collars/all')?></th>
					<th><?php echo $this->Html->link('Pocket', '/pockets/all')?></th>
					<th><?php echo $this->Html->link('Hem', '/hems/all')?></th>
					<th><?php echo $this->Html->link('Button', '/buttons/all')?></th>
					<th><?php echo $this->Html->link('Tie', '/ties/all')?></th>
					<th><?php echo $this->Html->link('Shirt', '/shirts/all')?></th>
				</tr>
				<tr>
					<td colspan="9"><strong>For Administrator</strong></td>
				</tr>
				<tr>
					<th><?php echo $this->Html->link('Gender', '/admin/genders/all')?></th>
					<th><?php echo $this->Html->link('Style', '/admin/styles/all')?></th>
					<th><?php echo $this->Html->link('Lining', '/admin/linings/all')?></th>
					<th><?php echo $this->Html->link('LiningFabric', '/admin/lining_fabrics/all')?></th>
					<th><?php echo $this->Html->link('LiningSet', '/admin/lining_sets/all')?></th>
					<th><?php echo $this->Html->link('Collar', '/admin/collars/all')?></th>
					<th><?php echo $this->Html->link('Pocket', '/admin/pockets/all')?></th>
					<th><?php echo $this->Html->link('Hem', '/admin/hems/all')?></th>
					<th><?php echo $this->Html->link('Button', '/admin/buttons/all')?></th>
					<th><?php echo $this->Html->link('Tie', '/admin/ties/all')?></th>
					<th><?php echo $this->Html->link('Shirt', '/admin/shirts/all')?></th>
				</tr>
			</table>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>