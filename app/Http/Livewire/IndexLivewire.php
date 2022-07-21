<?php

namespace App\Http\Livewire;

use App\Models\Earning;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\User;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Carbon\Carbon;
use Numbers\Number;
use Livewire\Component;
use App\Http\Livewire\BaseLivewireComponent;

class IndexLivewire extends BaseLivewireComponent
{

    public function render(){
        return view('livewire.landing_index');
    }
   
}
