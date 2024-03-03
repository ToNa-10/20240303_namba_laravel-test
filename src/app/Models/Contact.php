<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'last-name',
        'first-name',
        'gender',
        'email',
        'tel1',
        'tel2',
        'tel3',
        'address',
        'building',
        'detail',
        'content'
    ];

    public function getDetail()
    {
        $content = 'ID:' . $this->id . ' ' . $this->name . '(' . $this->age .  '才' . ') ' . $this->nationality;
        return $content;
    }
}
