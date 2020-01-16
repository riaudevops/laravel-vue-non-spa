<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/12/2019
 * Time: 20:02
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function html(Request $request){
        $data = [];
        return $this->renderPage($request,'development.html', $data);
    }
}
