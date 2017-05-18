<?php

namespace openedeyes\Http\Controllers;

use Illuminate\Http\Request;
use openedeyes\Plan;

class PlanController extends Controller {

  public function list() {
    //TODO Sem indicators
    $plans = Plan::all();
    $response = response()->json($plans);
    return $response;
  }

  public function detail($id) {
    $plan = Plan::with('groups')->find($id);
    $response = response()->json($plan);
    return $response;
  }

}
