<?php

class SWorder {
 // Attributes / Properties
    public $menu_wing;
    //public $menu_fries;
    public $price;
	public $quanity;
    
    function __construct($menu_wing, /*$menu_fries,*/ $price; $quanity) {
        // Variables in a method are separate from those of the overall class
        // To access class level variable utilize the $this keyword
        $this->menu_wing = $menu_wing;
        //$this->menu_fries = $menu_fries;
        $this->price = $price;
		$this->quanity = $quanity;
    }
	
	function__calculate ($price; $quanity, $total) {
		$this->price = $price;
		$this->quanity = $quanity;
		$this->total = $price * $quanity;
		
	}
	
$order1 = new Order('Honey BBQ'Yes', '.65', '4')