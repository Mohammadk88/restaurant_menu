<?php

namespace App\Repositories\Restaurant;


interface RestaurantInterface{

    public function store($data);
    public function update($data,$id);
    public function delete($id);
    public function getList();
    public function getRestaurant($id);

}
