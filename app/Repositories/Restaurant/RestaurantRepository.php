<?php

namespace App\Repositories\Restaurant;


use App\Models\Restaurant;
use PDOException;

class RestaurantRepository implements RestaurantInterface {


    protected Restaurant $restaurant;
  /*  public function __construct(Restaurant $restaurant)
    {
      //  $this->restaurant = $restaurant;
    }*/

    public function store($data): array
    {
        $res = [
            'data' => [],
            'status' => false
        ];
        try {
            $res['data'] = $this->restaurant->save($data);
            $res['status'] = true;
        }catch (PDOException $exception){
            $res["data"] = [
               'code' => $exception->getCode(),
                'error' => $exception->getMessage()
            ];
        }

        return $res;
    }

    public function update($data, $id): array
    {
        $res = [
            'data' => [],
            'status' => false
        ];
        try {
            $res['data'] = $this->restaurant->save($data);
            $res['status'] = true;
        }catch (PDOException $exception){
            $res["data"] = [
                'code' => $exception->getCode(),
                'error' => $exception->getMessage()
            ];
        }

        return $res;
    }

    public function delete($id)
    {

    }

    public function getList(): array
    {
       $res['data'] = $this->restaurant->all();
       $res['status'] = true;

       return $res;
    }

    public function getRestaurant($id): array
    {
        $res['data'] = $this->restaurant->find($id);
        $res['status'] = true;

        return $res;
    }
}
