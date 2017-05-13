<?php

namespace openedeyes;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model {

  public function measures() {
    return $this->hasMany('openedeyes\Measure');
  }

}
