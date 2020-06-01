<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    //
    protected $table="seo";

    protected $fillable = [
        "id",
        "link",
        "checksum",
        "title",
        "keywords",
        "description",
        "h1",
        "noindex",
        "avatar",
        "language",
        "created_at",
        "updated_at"
    ];

    // Function render seo to pages
    public function seo_render($checksum){
        $SeoLinks = DB::table('seo')->where('checksum',$checksum)
            ->where('link','!=', null)->first();
        return $SeoLinks;
    }

    public static function getMeta(){


        $c_url = url()->current();

        $url = url('/');

        if($url != $c_url){
            $uri = str_replace($url, '', $c_url);
            $md5 = md5($uri);
//            dd($md5);
            $seo = Seo::where('checksum', $md5)->first();
        }else{
            /// Trang chủ
            $seo = Seo::find(1);

        }

        if($seo){

            return $seo;

        }else{
            return false;
        }

    }

    public static function createMeta($data){

        if(!isset($data['link']) || !isset($data['title']) || !isset($data['description'])) {
            return null;
        }else {
            $seo = new Seo;
            $seo->link = (isset($data['link'])) ? $data['link'] : '';
            $seo->checksum = md5($data['link']);
            $seo->title = $data['title'];
            $seo->keywords = $data['keywords'];
            $seo->description = $data['description'];
            $seo->avatar = (isset($data['avatar'])) ? $data['avatar'] : '';
            $seo->language = (isset($data['language'])) ? $data['language'] : '';
            $seo->h1 = (isset($data['h1'])) ? $data['h1'] : '';

            $result = $seo->save();
            if($result){
                return $seo->id;
            }else{
                return null;
            }
        }
    }
}
