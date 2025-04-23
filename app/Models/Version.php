<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // For Unit Testing (later on)
use Illuminate\Database\Eloquent\Relations\BelongsTo;   // For 1:1 relations
use App\Models\User;                                    // For reference to the User model

class Version extends Model
{
    use HasFactory; // For Unit Testing (later on)

    protected $fillable = [
        'main',
        'minor_patch',
        'build',
        'name',
        'description',
        'user_id',
        'release_date',
        'release_time',
    ]; // Fillable fields for mass assignment

    protected $casts = [
        'main' => 'integer',
        'minor_patch' => 'float',
        'build' => 'integer',
        'release_date' => 'date',
        'release_time' => 'datetime:H:i:s',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]; // Type casting for attributes (optional, but usefuland secure)

    /**
     * A version was created from 0 to 1 user.
     * This is the user who created the version.
     * @return BelongsTo
     * @see https://laravel.com/docs/12.x/eloquent-relationships
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Getting the version number as a string. (I know that there is a better way with Eloquent-Accessors, but I want to keep it simple for now)
     * @return string
     * @see https://laravel.com/docs/12.x/eloquent-mutators#accessors-and-mutators for the better way
     */
    public function getVersionNumber(): string
    {
        return "{$this->main}.{$this->minor_patch}.{$this->build}";
    }
}
