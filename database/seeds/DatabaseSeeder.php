<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call('PlanTableSeeder');
        $this->call('GroupTableSeeder');
        $this->call('IndicatorTableSeeder');
        $this->call('MeasureTableSeeder');
    }
}

class PlanTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into plans (name, description) values (?,?)', array('PLANTRI2017.1 - CLIENTE[CE]', 'Melhorar a percepção do cliente CoopanestCE em relação ao sistema Colméia-CE e aos serviços ofertados pela INFOWAY.'));
  }
}

class GroupTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into groups (name, type, plan_id) values (?,?,?)', array('SQL inconsistentes', 'DAILY', 1));
  }
}

class IndicatorTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into indicators (name, group_id) values (?,?)', array('Total', 1));
   DB::insert('insert into indicators (name, group_id) values (?,?)', array('Extratos duplicados ', 1));
  }
}

class MeasureTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into measures (value, indicator_id) values (?,?)', array(3, 1));
   DB::insert('insert into measures (value, indicator_id) values (?,?)', array(5, 1));
   DB::insert('insert into measures (value, indicator_id) values (?,?)', array(5, 2));
   DB::insert('insert into measures (value, indicator_id) values (?,?)', array(3, 2));
  }
}
