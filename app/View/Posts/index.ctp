<h1>Posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <?php foreach ($posts as $key => $value) { ?>
    
	    <tr>
	        <td><?php echo $value['Post']['id']; ?></td>
	        <td>
	            <?php
	                echo $this->Html->link(
	                    $value['Post']['title'],
	                    array('action' => 'view', $value['Post']['id'])
	                );
	            ?>
	        </td>
	        <td><?php echo $value['Post']['category_id']; ?></td>
	        <td>
	            <?php
	                echo $this->Form->postLink(
	                    'Delete',
	                    array('action' => 'delete', $value['Post']['id']),
	                    array('confirm' => 'Are you sure?')
	                );
	            ?>
	            <?php
	                echo $this->Html->link(
	                    'Edit', array('action' => 'edit', $value['Post']['id'])
	                );
	            ?>
	        </td>
	        <td>
	            <?php echo $value['Post']['created']; ?>
	        </td>
	    </tr>
    <?php } ?>

</table>