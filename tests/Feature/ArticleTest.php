<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_it_fetches_trending_articles()
    {
        factory(Article::class, 3)->create();
        factory(Article::class, 1)->create(['reads' => 10]);
        $mostPopular = factory(Article::class, 1)->create(['reads' => 20]);

        $articles = Article::trending();

        $this->assertEquals($mostPopular[0]->title, $articles->first()->title);
        $this->assertEquals($mostPopular[0]->id, $articles->first()->id);
        $this->assertCount(5, $articles);
    }
}
