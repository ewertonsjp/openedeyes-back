<?php

namespace openedeyes\Http\Controllers;

use Illuminate\Http\Request;
use openedeyes\Plan;

class PlanController extends Controller {

  public function list() {
    $plans = Plan::all();
    $response = response()->json($plans);
    return $response;
  }

  public function detail($id) {
    $plan = Plan::find($id);
    $response = response()->json($plan);
    return $response;
  }

}
