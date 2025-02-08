<?php 
declare(strict_types=1);
namespace App\Services;
use App\Models\UrlShortner;
class UrlShortnerService{
    public function getAllshortUrl(){
        return UrlShortner::orderBy('id')->cursorPaginate(10);
    }
    public function create(array $data) : UrlShortner
    {
       $short_code = $this->generateStringUrl();
       while (UrlShortner::where('short_url',$short_code)->exists()) {
        $short_code = $this->generateStringUrl();
       }
       return UrlShortner::create([
            'url_main_link'=> $data['url_main_link'],
            'short_url'=> $short_code,
            'click' => 0
        ]);
    }
    protected function generateStringUrl(): string
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
    }
}