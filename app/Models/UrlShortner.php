<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlShortner extends Model
{
    protected $fillable = ['url_main_link','click','short_url'];
}
