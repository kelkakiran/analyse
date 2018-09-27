<?php

use App\TechnicalSkills;
use Illuminate\Database\Seeder;

class TechnicalSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $php = new TechnicalSkills;
        $php->name = "PHP";
        $php->save();

        $js = new TechnicalSkills;
        $js->name = "JavaScript";
        $js->save();

        $nodeJS = new TechnicalSkills;
        $nodeJS->name = "Node.js";
        $nodeJS->save();

        $python = new TechnicalSkills;
        $python->name = "Python";
        $python->save();
    }
}
