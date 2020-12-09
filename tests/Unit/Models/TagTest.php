<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;

use App\Models\Tag;

class TagTest extends TestCase
{
    public function test_set_slug_in_lowercase() 
    {
        $tag = new Tag;
        $tag->name = 'PHP';

        $this->assertEquals('php', $tag->slug);
    }
}
