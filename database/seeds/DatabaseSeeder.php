<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call('PlanTableSeeder');
    }
}

class PlanTableSeeder extends Seeder {
  public function run() {
   DB::insert('insert into plans (name, description) values (?,?)', array('Sqls Inconsistentes', 'Side by Side com gelo na porta'));
  }
}
