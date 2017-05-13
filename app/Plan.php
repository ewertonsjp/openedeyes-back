<?php

namespace openedeyes;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

  public function indicators() {
    return $this->hasMany('openedeyes\Indicator');
  }

}
