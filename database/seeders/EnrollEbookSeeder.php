<?php

namespace Database\Seeders;

use App\Constants\GlobalConstant;
use App\Models\User;
use App\Models\Ebook;
use App\Models\EnrollEbook;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionList;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnrollEbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'student@app.com')->first();

        $ebooks = Ebook::inRandomOrder()->take(5)->get();


        DB::transaction(function () use ($user, $ebooks) {

            $invoice = Invoice::create([
                'user_id' => $user->id,
                'total' => $ebooks->sum('price'),
                'payment_type' => PAYMENT_METHOD_STRIPE,
            ]);

            Payment::create([
                'user_id' => $user->id,
                'invoice_id' => $invoice->id,
                'payment_type' => PAYMENT_METHOD_STRIPE,
                'amount' => $invoice->total,
            ]);


            foreach ($ebooks as $item) {

                EnrollEbook::create([
                    'user_id' => $user->id,
                    'ebook_id' => $item->id,
                ]);

                InvoiceItem::create([
                    'invoice_id' => $invoice->id,
                    'itemable_id' => $item->id,
                    'itemable_type' => 'App\Models\Ebook',
                    'price' => $item->price,
                ]);
            };
        });
    }
}
