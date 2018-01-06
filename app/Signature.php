<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    /**
     * Field to be mass-assigned.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'body', 'flagged_at'];

    /**
     * Ignore flagged signatures.
     *
     * @param $query
     * @return mixed
     */
    public function scopeIgnoreFlagged($query)
    {
        return $query->where('flagged_at', null);
    }

    /**
     * Flag the given signature.
     *
     * @return bool
     */
    public function flag()
    {
        return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
    }
}
