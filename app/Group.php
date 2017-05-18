<?php

namespace openedeyes;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

  public function indicators() {
    return $this->hasMany('openedeyes\Indicator');
  }

}
