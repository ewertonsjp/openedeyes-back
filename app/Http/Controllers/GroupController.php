<?php

namespace openedeyes\Http\Controllers;

use Illuminate\Http\Request;
use openedeyes\Group;
use openedeyes\Measure;
use openedeyes\Indicator;
use openedeyes\Plan;

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

  public function add(Request $request) {
    $_json = json_decode($request->getContent());
    $_group = $_json->group;

    $group = new Group();
    $group->name = $_group->name;
    $group->type = $_group->type;
    //FIXME
    $group->plan_id = $_json->planId;
    $group->save();

    foreach ($_group->indicators as $_ind) {
      $indicator = new Indicator();
      $indicator->name = $_ind->name;
      //FIXME
      $indicator->group_id = $group->id;
      $indicator->save();
    }

    $response = response()->json($group);
    return $response;
  }

}
