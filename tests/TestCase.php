<?php

namespace Tests;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // protected function setUp(): void
    // {
    //     parent::setUp();
    //     DB::delete("delete from addresses");
    //     DB::delete("delete from users");
    //     DB::delete("delete from user_images");
    //     DB::delete("delete from user_individuals");
    // }
}