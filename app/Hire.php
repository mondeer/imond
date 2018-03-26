<?php

namespace imond;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    protected $fillable = ['names', 'email', 'subject', 'message'];
}
