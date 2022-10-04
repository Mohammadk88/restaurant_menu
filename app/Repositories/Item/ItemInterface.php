<?php

namespace App\Repositories\Item;


interface ItemInterface{
    public function store($data);
    public function update($data,$id);
    public function delete($id);
    public function getList();
    public function getItem($id);


}
