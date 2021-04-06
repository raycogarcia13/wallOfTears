<?php

namespace App\Repositories;

use App\Models\State;
use Illuminate\Support\Facades\Cache;

class StateRepository
{
    private $key;

    public function __construct()
    {
        $this->key = "states.all";
    }

    public function get()
    {
        return State::orderBy('name', 'asc')->get();
    }

    public function create($data)
    {
        return State::create($data);
    }

    public function update($data, $id){


        return null;
    }

    public function find($id)
    {
        return State::find($id);
    }

    public function delete($id)
    {
        $eat=$this->find($id);

        if(!$eat)
            return null;
            
        return $eat->delete();
    }
}
