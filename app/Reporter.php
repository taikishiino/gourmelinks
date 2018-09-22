<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    /**
     * リレーション (1対多の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gourmets()
    {
        // 記事を新しい順で取得する
        return $this->hasMany('App\Gourmets')->latest();
    }
}
