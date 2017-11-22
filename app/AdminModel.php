<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = 'objective_exam';
    protected $fillable = ['question','option_1','option_2','option_3','option_4','answer'];
}
