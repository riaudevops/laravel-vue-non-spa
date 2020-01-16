<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 23/12/2019
 * Time: 23:44
 */

namespace App\Http\Controllers\Ajax;


use App\Buku;
use App\Http\Controllers\AjaxController;
use Illuminate\Http\Request;

class AjaxBuku extends AjaxController
{
    public function search(Request $request, $limit = 25, $offset = 0){
        $qResult = $request->query('q');
        $all = Buku::where('judul', 'like', '%'.$qResult.'%')
            ->paginate(50);
        $this->reply['status'] = true;
        $this->reply['data'] = $all;
        return response($this->reply, 200);
    }

    public function countAll(Request $request){
        $count = Buku::query()->count();
        $this->reply['data'] = ['total' => $count];
        $this->reply['status'] = true;
        return response($this->reply, 200);
    }
}
