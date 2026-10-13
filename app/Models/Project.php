<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'summary',
        'description',
        'thumbnail',
        'demo_url',
        'repository_url',
        'role',
        'project_year',
        'featured',
        'published',
    ];

    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
            'published' => 'boolean',
            'project_year' => 'integer',
        ];
    }
}