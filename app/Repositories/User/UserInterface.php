<?php

namespace App\Repositories\User;


interface UserInterface{


    public function store($data);
    public function update($data,$id);
    public function delete($id);
    public function getList();
    public function getUser($id);

}
