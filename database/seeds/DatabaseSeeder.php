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
        $this->call('IndicatorTableSeeder');
        $this->call('MeasureTableSeeder');
    }
}

class PlanTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into plans (name, description) values (?,?)', array('TRI2017.1 - CoopCE', 'Visa melhorar...'));
  }
}

class IndicatorTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into indicators (name, description, type, plan_id) values (?,?,?,?)', array('Sqls Inconsistentes', 'Representa a...', 'DAILY', 1));
  }
}

class MeasureTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into measures (value, indicator_id) values (?,?)', array(3, 1));
   DB::insert('insert into measures (value, indicator_id) values (?,?)', array(5, 1));
  }
}
