<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'product';

    protected $fillable =[
        'name',
        'dom',
        'pd',
        'domd',
        'ed',
        'created_at',
        'updated_at'
    ];

    public function average($dom, $ed){
        $dates = [];
        array_push($dates,$dom);
        array_push($dates,$ed);

        $dates = array_map('strtotime', $dates);
        $average = date('Y-m-d', array_sum($dates) / count($dates));

        return $average;
    }

}
