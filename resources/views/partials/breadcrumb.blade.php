<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 19/12/2019
 * Time: 21:14
 *
 * @var array $breadcrumbs
 */

$data = $breadcrumbs ?? [];
?>
<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><b-link href="{{route('home')}}">Home</b-link></li>
        @if($data ?? '')
            @foreach ($data as $breadcrumb)
                <li class="breadcrumb-item active"><?=$title?></li>
            @endforeach
        @endif
    </ol>
</div>
