<?php

use App\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = file_get_contents('http://loripsum.net/api');

        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'title' => Str::random(25),
                'image' => 'https://picsum.photos/200/300',
                'author' => Str::random(4) . " " . Str::random(6),
                'body' => $content,
            ]);
        }
    }
}
