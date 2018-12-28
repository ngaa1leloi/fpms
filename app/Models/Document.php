<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'documents';

    public function documentVersion()
    {
        return $this->belongsTo('App\Models\DocumentVersion');
    }
}