<?php
/**
 * Created by PhpStorm.
 * User: nguyenlongit95
 * Date: 4/4/19
 * Time: 6:35 PM
 */
namespace App\Helpers;

use App\Seo;

class render_seo
{
    public function render_seo($blade)
    {
        $seo = Seo::getMeta();
        return view('layouts.' . $blade, compact('seo'))->render();
    }
}

?>
