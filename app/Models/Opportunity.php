<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;
    protected $fillable = ['nameGiver','nameWorker','phoneGiver','emailGiver','phoneWorker','emailWorker','message','idGiver','idWorker','status','type'];
}