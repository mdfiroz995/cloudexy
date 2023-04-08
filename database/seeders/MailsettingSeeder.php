<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mailsetting;

class MailsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mailsetting::create([
            'mail_transport'            =>'smtp',
            'mail_host'                 =>'smtp.mailtrap.io',
            'mail_port'                 =>'2525',
            'mail_username'             =>'c889b005e72d85',
            'mail_password'             =>'be3d241a35d72a',
            'mail_encryption'           =>'tls',
            'mail_from'                 => 'satishsen@excellencetechnologies.in',
        ]);
    }
}