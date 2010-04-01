<?php

class MarkDown extends TextParser {
	public function parse(){
		require_once BASE_PATH . '/showdown/code/phpmarkdown/markdown.php';
		return Markdown($this->content); 
	}
}
