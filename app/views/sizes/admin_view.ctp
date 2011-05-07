<div class="sizes view">
<h2><?php  __('Size');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $size['Size']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $size['Size']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Size', true), array('action' => 'edit', $size['Size']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Size', true), array('action' => 'delete', $size['Size']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $size['Size']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shirts', true), array('controller' => 'shirts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shirt', true), array('controller' => 'shirts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Shirts');?></h3>
	<?php if (!empty($size['Shirt'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Url'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Reference'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($size['Shirt'] as $shirt):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $shirt['id'];?></td>
			<td><?php echo $shirt['name'];?></td>
			<td><?php echo $shirt['image'];?></td>
			<td><?php echo $shirt['url'];?></td>
			<td><?php echo $shirt['price'];?></td>
			<td><?php echo $shirt['reference'];?></td>
			<td><?php echo $shirt['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'shirts', 'action' => 'view', $shirt['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'shirts', 'action' => 'edit', $shirt['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'shirts', 'action' => 'delete', $shirt['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shirt['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shirt', true), array('controller' => 'shirts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
