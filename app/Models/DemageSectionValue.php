<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemageSectionValue extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'demage_section_values';
    protected $fillable =
    [
        'demage_level',
        'comment',
        'repair_duration_days'
    ];

    public function demage () :BelongsTo
    {
        return $this->belongsTo(DemageSection::class, 'demage_section_id', 'id');
    }
}
