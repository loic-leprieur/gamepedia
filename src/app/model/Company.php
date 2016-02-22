<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:56
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Company extends Model{

    protected $table = 'company';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'location_country', 'deck',];

    public function companies(){
        $res = '';
        foreach($this->limit(300)->offset(0)->get() as $co){
            if($co->location_country == 'Japan')
                $res .= $co->id . ' ' . $co->name . ' / ' . $co->location_country . ' / ' . $co->deck . '<br><br>';
        }
        return $res;
    }
}