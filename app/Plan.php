<?php

namespace openedeyes;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

  public function groups() {
    return $this->hasMany('openedeyes\Group');
  }

}
