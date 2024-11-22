<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workspace
{
    use HasFactory;

    private static $workspaces = [
        [
            'id' => 1,
            'name' => 'YATA',
            'favorite' => true,
        ],
        [
            'id' => 2,
            'name' => 'AWS',
            'favorite' => false,
        ],
        [
            'id' => 3,
            'name' => 'Spanish',
            'favorite' => false,
        ]
    ];

    protected $fillable = [
        'name',
        'favorite'
    ];

    static function find($id)
    {
        foreach (self::$workspaces as $workspace) {
            if ($workspace['id'] == $id) {
                return $workspace;
            }
        }

        return null;
    }
}
