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
   DB::insert('insert into plans (name, description) values (?,?)', array('PLANTRI2017.1 - CLIENTE[AL]', 'Melhorar a percepção do cliente SantacoopMCZ em relação ao sistema Dolphin e aos serviços ofertados pela INFOWAY.'));
   //DB::insert('insert into plans (name, description) values (?,?)', array('PLANTRI2017.1 - CLIENTE[CE]', 'Melhorar a percepção do cliente CoopanestCE em relação ao sistema Colméia-CE e aos serviços ofertados pela INFOWAY.'));
  }
}

class GroupTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into groups (name, type, plan_id) values (?,?,?)', array('SQLs de Monitoramento', 'DAILY', 1));
  }
}

class IndicatorTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into indicators (name, group_id) values (?,?)', array('Total de SQLs com Problema', 1));
//   DB::insert('insert into indicators (name, group_id) values (?,?)', array('SQL: Faturamento Inconsistente ', 1));
//   DB::insert('insert into indicators (name, group_id) values (?,?)', array('SQL: Extratos com divergência com Ciclo Anterior', 1));
  }
}

class MeasureTableSeeder extends Seeder {
  public function run() {
    //01 - Total
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(15, date("Y-m-d",strtotime("2017-05-01")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(15, date("Y-m-d",strtotime("2017-05-02")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(15, date("Y-m-d",strtotime("2017-05-03")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(13, date("Y-m-d",strtotime("2017-05-04")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-05")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-08")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-09")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-10")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-11")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-12")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(12, date("Y-m-d",strtotime("2017-05-15")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(13, date("Y-m-d",strtotime("2017-05-16")), 1));
    DB::insert('insert into measures (value, assembled_at, indicator_id) values (?,?,?)', array(13, date("Y-m-d",strtotime("2017-05-17")), 1));
  }
}
