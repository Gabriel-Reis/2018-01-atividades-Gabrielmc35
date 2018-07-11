<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoveiculo extends Model
{
        protected $fillable = ['nome','tipo','price'];
        protected $guarded = ['id', 'created_at', 'update_at'];
    	protected $table = 'tipoveiculo';

		}
 