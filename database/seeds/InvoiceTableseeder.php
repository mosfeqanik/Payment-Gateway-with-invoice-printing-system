<?php

use Illuminate\Database\Seeder;

class InvoiceTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\invoice',50)->create();
    }
}
