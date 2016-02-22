<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:58
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{

    protected $table = 'platform';


    protected $primaryKey = 'id';

    public $timestamps = false;

    public $fillable = ['name', 'install_base'];

    public function plateformes(){
        $res = '';
        foreach($this->limit(30)->offset(0)->get() as $p){
            if($p->install_base >= 10000000)
                $res .= $p->id . ' ' . $p->name . ' ' . $p->install_base . '<br><br>';
        }
        return $res;
    }
}