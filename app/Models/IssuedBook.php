<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssuedBook extends Model
{
    protected $table = 'borrow_records';

    protected $fillable = [
           'book_id',
           'member_id',
           'issue_date',
           'due_date',
           'return_date',
           'status'
          ];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}