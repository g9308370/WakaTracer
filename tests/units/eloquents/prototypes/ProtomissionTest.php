<?php

namespace Tests\units\models;

use Tests\TestCase;
use App\Languages\Prototypes\Protolevel;
use App\Languages\Prototypes\Protolanguage;
use App\Languages\Prototypes\Protomission;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProtomissionTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;

    /**
     * 產生Protomission.
     *
     * @group unit
     * @group language
     * @group prototype
     */
    public function testCanCreate()
    {
        $this->printTestStartMessage(__FUNCTION__);

        $mission = Protomission::create([
            'name' => 'hello_world',
            'display_name' => 'Hello World'
        ]);

        $this->assertEquals($mission->name, 'hello_world');
        $this->assertEquals($mission->display_name, 'Hello World');
    }
}
