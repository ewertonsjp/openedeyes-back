<?php

namespace openedeyes\Http\Controllers;

use Illuminate\Http\Request;
use openedeyes\Group;

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
    return;
  }

}
