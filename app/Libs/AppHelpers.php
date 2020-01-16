<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 20/01/2019
 * Time: 7:52
 */

namespace App\Libs;

use Illuminate\Support\Str;

class AppHelpers
{
    const TITLE = 'Application';

    /**
     * Manage dynamic title name
     * @param string $title
     * @param bool $isAppend
     * @return string
     */
    public static function appendTitle($title = '', $isAppend = false){
        if($isAppend){
            if(empty($title)){
                return Str::title(self::TITLE).' | '.config('app.name');
            }
            return Str::title($title).' | '.config('app.name');
        }
        return e($title);
    }

    /**
     * Generate breadcrumb
     * @param mixed ...$links
     * @return string
     */
    public static function breadcrumb(...$links){
        $li = '<vk-breadcrumb-item href="'.route('home').'"><span data-uk-icon="icon: home"></span></vk-breadcrumb-item>';
        foreach ($links as $link){
            $li .= '<vk-breadcrumb-item>'.$link.'</vk-breadcrumb-item>';
        }

        $breadcrumb = '<vk-breadcrumb>'.$li.'</vk-breadcrumb>';
        return $breadcrumb;
    }
}
