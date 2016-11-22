<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title', array('value' => $post['Post']['title']));
	echo $this->Form->input('description', array('value' => $post['Post']['description']));
	echo $this->Form->input('content', array('value' => $post['Post']['content']));
	echo $this->Form->input('image', array('value' => $post['Post']['image']));
	echo $this->Form->input('category_id', array('default' => $post['Post']['category_id']));
	echo $this->Form->end('Save Post');