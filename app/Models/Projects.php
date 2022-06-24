<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    protected $fillable = [
        // main page
        'main_page_bg',
        'project_name',
        'read_more_link',
        'present_link',
        'gamepedia_link',
        'merchstore_link',
        // first page
        'first_page_bg',
        'trailer_link',
        'description',
        // second page
        'second_page_bg',
        // third page
        'third_page_bg',
        'modding_editor_link',
        'documentation_link',
        // fourth page
        'fourth_page_bg'
    ];
}
