<?php

abstract class Page {

	private $title;
	private $desc;
	private $stylesheets;
	private $jsFiles;


	public function buildHeaderHtml(){

	}

	public function buildFooterHtml(){


	}

	public function newsWeeklySubsciber(){

		
	}


	abstract public function contentHTML();
}