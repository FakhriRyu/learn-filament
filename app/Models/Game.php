<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['developer_id','game_title','poster','description','release_date','price',] ;

    public function developer(): BelongsTo{
        return $this->belongsTo(Developer::class);
    }
}
