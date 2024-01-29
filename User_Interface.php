<?php

interface User_Interface{
    // interface is public because it'll be used by others.
    public function insert();
    public function update();
    public function delete();
    public function select();

}


class Record implements User_Interface{
    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function select(){

    }
}