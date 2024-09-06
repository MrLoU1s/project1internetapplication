<?php
class Menus{
    public function main_menu(){
        ?>
        <div>
            <a href="./">Home</a>
            <a href="">About Us</a>
            <?php $this->main_right_menu();?>
        </div>
        <?php
    }

    public function main_right_menu(){
        ?>
        <div class="topnav">
            <a href="./">Sign up></a>
            <a href="">Sign in</a>
        </div>
        <?php

}

}