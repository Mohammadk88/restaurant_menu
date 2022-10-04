<?php

namespace App\Repositories\Category;


interface CategoryInterface{

    public function store($data);
    public function update($data,$id);
    public function delete($id);
    public function getList();
    public function getCategory($id);


}
