<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();
        //  Listing::create([
        //   'title' => 'Laravel Senior Dev',
        //   'tags' => 'laravel, javascript',
        //   'company' => 'Acme Corp',
        //   'location' => 'Boston, MA',
        //   'email' => 'email@email.com',
        //   'website' => 'https://www.acme.com',
        //   'description' => 'lorem ipsum asldh ajksdh akjsdhajkhsdjkfhskjf hasdkfj hbsdkjhf bhdkjf bhakj bhakjh a
        //   askdlah nsdlkashjd lkashd ;asda d asd as daaa asd asdklhkashd aklsd al lakshdla 
        //   asldhas dha dlahd jklahdjaksdhajkshdjk ashdjkah kja h jhjkah skj
        //   ashdajkshdjaksdh sdjh.'
        //  ]);

        //  Listing::create([
        //     'title' => 'C++ Junior Developer',
        //     'tags' => 'c++, sql, java, html',
        //     'company' => 'Intrasoft Corp',
        //     'location' => 'Greece, ATH',
        //     'email' => 'email@intrasoft.com',
        //     'website' => 'https://www.intesoft.com',
        //     'description' => 'lorem ipsum asldh ajksdh akjsdhajkhsdjkfhskjf hasdkfj hbsdkjhf bhdkjf bhakj bhakjh a
        //     askdlah nsdlkashjd lkashd ;asda d asd as daaa asd asdklhkashd aklsd al lakshdla 
        //     asldhas dha dlahd jklahdjaksdhajkshdjk ashdjkah kja h jhjkah skj
        //     ashdajkshdjaksdh sdjh.'
        //    ]);
    }
}
