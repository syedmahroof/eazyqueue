<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    protected $fillable = [
        'language_id', 'name', 'address', 'email', 'phone', 'location', 'display_notification', 'display_font_size', 'display_font_color', 'logo', 'timezone', 'sms_url', 'sms_enabled', 'installed'
    ];

    protected $appends = ['logo_url','video_url'];

    protected $hidden = ['installed'];

    public function getLogoUrlAttribute()
    {
        return Storage::disk('public')->url($this->logo);
    }

    public function getVideoUrlAttribute()
    {
        return Storage::disk('public')->url($this->video);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
