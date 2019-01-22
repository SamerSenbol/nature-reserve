<?php

abstract class Animal {

    public abstract function getSound();

    public abstract function getPicture();

}

class Monkey extends Animal {
    
    public function getSound() {
        return"Haoo";
    }

    public function getPicture() {
        return "<img src = './Images/Monkey.jpg' height = 150px width = 200px>";
    }
}
class Giraffer extends Animal {
    
    public function getSound() {
        return"Maoo";
    }

    public function getPicture() {
        return "<img src = './Images/giraffer.jpg' height = 150px width = 200px>";
    }
}
class Tigrar extends Animal {
    
    public function getSound() {
        return"Naoo";
    }

    public function getPicture() {
        return "<img src = './Images/tigrar.jpg' height = 150px width = 200px>";
    }
}
class Kokosnötter extends Animal {
    
    public function getSound() {
        return"AoAo";
    }

    public function getPicture() {
        return "<img src = './Images/kokosnötter.jpg' height = 150px width = 200px>";
    }
}
/* 
if($setPost = $_POST['Monkey']) {
    for($i = 1; $i<=$setPost; $i++) {
        $image = $animalOne->image;
        ?><p onclick="clickApe()"><?=$image ?></p> <?php
        echo randomName();
    }
}; */

