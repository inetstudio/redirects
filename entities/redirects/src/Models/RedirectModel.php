<?php

namespace InetStudio\RedirectsPackage\Redirects\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use InetStudio\Classifiers\Models\Traits\HasClassifiers;
use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;

class RedirectModel extends Model implements RedirectModelContract
{
    use SoftDeletes;
    use HasClassifiers;

    const ENTITY_TYPE = 'redirect';

    protected $table = 'redirects';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($redirect) {
            $redirect->{$redirect->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getTypeAttribute(): string
    {
        return self::ENTITY_TYPE;
    }
}
