<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class Countries extends Component
{
    use WithPagination;


    public function render()
    {
        $perPage = 20;
        $countries =  Http::get('https://restcountries.eu/rest/v2/all?fields=name;capital;flag;Population;region;capital', [
            'limit' => 10,
        ]);
        $tools = collect(json_decode($countries->body()));
        //$data = $this->paginate($tools);
        $items = $tools->forPage($this->page, $perPage);

        $paginator = new LengthAwarePaginator($items, $tools->count(), $perPage, $this->page);

        //dd($tools);
        return view('livewire.countries', [
            "country" => $paginator
        ]);
    }
}
