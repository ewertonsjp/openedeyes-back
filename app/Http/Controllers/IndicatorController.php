<?php

namespace openedeyes\Http\Controllers;

use Illuminate\Http\Request;
use openedeyes\Indicator;
use openedeyes\Measure;

class IndicatorController extends Controller {

  public function detail($id) {
    $indicator = Indicator::with('measures')->find($id);
    $response = response()->json($indicator);
    return $response;
  }

  public function measure(Request $request, $id) {
    $indicator = Indicator::find($id);

    $measure = new Measure();
    $measure['value'] = $request->input('value',0);
    $measure['indicator_id'] = $id;
    $measure->save();

    $response = response()->json($indicator);
    return $response;
  }

}
