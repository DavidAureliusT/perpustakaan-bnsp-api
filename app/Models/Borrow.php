<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $primaryKey = 'borrow_id';
    protected $fillable = [
        "member_id",
        "book_id",
        "return_date"
    ];
    public function book(){
        return $this->hasOne(Book::class);
    }
    public function member(){
        return $this->hasOne(User::class);
    }
}
