<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gourmet extends Model
{
    /**
     * リレーション (従属の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reporter()
    {
        return $this->belongsTo('App\Reporter');
    }
}
