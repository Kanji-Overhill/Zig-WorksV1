<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Entities\Parameter;
use App\Entities\Contents\Content;
use App\Models\Eventes;
use App\Models\Speakers;

if (! function_exists('countSpeakers')) {
    function countSpeakers($event_id, $type)
    {
    	$speakers = Speakers::where('event_id', '=', $event_id)->where('type', '=', $type)->get();
        $speakers = $speakers->count();
        return $speakers;
    }
}

if (! function_exists('getSpeakers')) {
    function getSpeakers($event_id, $type)
    {
        $speakers = Speakers::where('event_id', '=', $event_id)->where('type', '=', $type)->get();
        return $speakers;
    }
}

?>