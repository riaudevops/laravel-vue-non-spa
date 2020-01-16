<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 01/05/2019
 * Time: 9:35
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AjaxController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Reply message
     * @var array
     */
    protected $reply = [
        'status' => false,
        'message' => '',
        'data' => null
    ];

    public function __construct()
    {
//        $this->middleware('auth');
    }
}
