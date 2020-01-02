<?php

use Illuminate\Database\Seeder;
use App\Models\GeneralSettingsTableModel;

class GeneralSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSettingsTableModel::create([
            "id" => 1,
            "title" => "Talha Can, Yazılım Mühendisi & Grafiker",
            "description" => "Talha Can, Yazılım Mühendisi ve Grafiker",
            "keywords" => "yazılım,yazılım mühendisi,web geliştirici,web tasarım,web yazılım,laravel,sql,mysql,php,framework,grafiker, grafik tasarım,photoshop,illustrator",
            "logo" => "/images/logo.png",
            "header_image" => "/images/bg-1.jpg",
            "header_text" => "Web Geliştirici & Grafiker",
            "google_maps_api_key" => " ",
            "about" => "OOP ve AOP programlama metodolojilerine fazlasıyla hakimim. MVC, RESTful ve Laravel mimarilerinde, PHP, HTML, CSS alanlarında uzmanım. Ayrıca yeterli seviyede Jquery ve Javascript bilgisine sahibim ve temel seviyede NodeJs bilgim bulunmakta.",
            "address" => "44100 Merkez, MALATYA",
            "contact_phone" => "5383761370",
            "contact_mail" => "rampesna@gmail.com",
            "copyright" => "© 2019 Rampesna. Tüm Hakları Saklıdır.",
            "facebook" => "https://www.facebook.com/rampesna",
            "twitter" => "https://www.twitter.com/rampesna",
            "instagram" => "https://www.instagram.com/rampesna",
            "linkedin" => "https://www.linkedin.com/in/rampesna"
        ]);
    }
}
