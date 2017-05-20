<?php

namespace openedeyes\Http\Controllers;

use Illuminate\Http\Request;
use openedeyes\Group;
use openedeyes\Measure;

class GroupController extends Controller {

  public function detail($id) {
    $group = Group::with('indicators')->find($id);
    foreach ($group->indicators as $indicator) {
      //FIXE: Isso é um Tocar objetos cara...
      $indicator->measures;
    }
    $response = response()->json($group);
    return $response;
  }

  public function measure(Request $request, $id) {
    $group = Group::find($id);
    $values = json_decode($request->getContent());

    foreach ($values->measures as $m) {
      $measure = new Measure();
      $measure['indicator_id'] = $m->indicator_id;
      $measure['value'] = $m->value;
      $measure['assembled_at'] = $m->date;
      $measure->save();
    }

    return "SUCESS";
  }

}
