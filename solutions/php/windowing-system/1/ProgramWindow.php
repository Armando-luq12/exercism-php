<?php

class Size {
    public $width;
    public $height;

    public function __construct($height, $width) {
        $this->height = $height;
        $this->width = $width;
    }
}

class Position {
    public $x;
    public $y;

    public function __construct($y, $x) {
        $this->y = $y;
        $this->x = $x;
    }
}

class ProgramWindow {
    public $x;
    public $y;
    public $width;
    public $height;

    public function __construct() {
        $this->x = 0;
        $this->y = 0;
        $this->width = 800;
        $this->height = 600;
    }

    public function resize(Size $size) {
        $this->width = $size->width;
        $this->height = $size->height;
    }

    public function move(Position $position) {
        $this->x = $position->x;
        $this->y = $position->y;
    }
}


$window = new ProgramWindow();
echo "x: $window->x<br>"; 
echo "y: $window->y<br>"; 
echo "width: $window->width<br>"; 
echo "height: $window->height<br>"; 

$size = new Size(764, 1080);
$window->resize($size);
echo "Resized height: $window->height<br>"; 
echo "Resized width: $window->width<br>";   


$position = new Position(80, 313);
$window->move($position);
echo "Moved y: $window->y<br>"; 
echo "Moved x: $window->x<br>"; 

