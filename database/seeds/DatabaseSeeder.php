<?php


use App\Models\service;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        
        $services = [
            'برمجة وتصميم المواقع الإلكترونية',
            'برمجة تطبيقات الجوال',
            'البرامج المحاسبية والإدارية',
            'إستضافة المواقع الإلكترونية',
            'التسويق الإلكتروني',
            'تدريب'

        ];
        foreach($services as $service){
            service::create(['name'=>$service]);
        }

        factory(Project::class,10)->create();
    }
}
