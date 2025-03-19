<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create(['order_id' => 1, 'payment_method' => 'Credit Card', 'amount' => 2500.00, 'transaction_id' => 'TXN001', 'status' => 'Pending']);
        Payment::create(['order_id' => 2, 'payment_method' => 'PayPal', 'amount' => 1800.00, 'transaction_id' => 'TXN002', 'status' => 'Completed']);
        Payment::create(['order_id' => 3, 'payment_method' => 'Credit Card', 'amount' => 900.00, 'transaction_id' => 'TXN003', 'status' => 'Completed']);
        Payment::create(['order_id' => 4, 'payment_method' => 'Debit Card', 'amount' => 2000.00, 'transaction_id' => 'TXN004', 'status' => 'Completed']);
        Payment::create(['order_id' => 5, 'payment_method' => 'Credit Card', 'amount' => 1200.00, 'transaction_id' => 'TXN005', 'status' => 'Failed']);
    }
}
