<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('description');
	echo $this->Form->input('content');
	echo $this->Form->input('image');
	echo $this->Form->input('category_id');
	echo $this->Form->end('Save Post');