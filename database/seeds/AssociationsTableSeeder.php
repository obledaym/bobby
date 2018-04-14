<?php

use Illuminate\Database\Seeder;
use App\Models\Association;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $associations = [
        	[
        		'name' => 'Integration UTC',
        		'parent_id'	=>	nul,
        		'mail'	=>	'integutc'
	        ],
	        [
	        	'title' => 'L\'intégration va commencer !',
		        'content' => 'Début de l\'intégration le jeudi 30 août 2018',
		        'asso_id' => 'integ',
		        'visibility_id' => 'cas',
	        ],
	        [
	        	'title' => 'Grand spectacle du PAE',
		        'content' => 'Jeudi dernier, les associations du PAE ont eu l\'honneur de présenter devant plus de 500 UTCéens un grand spectacle...',
		        'asso_id' => 'pae',
		        'visibility_id' => 'contributor',
	        ]
        ];

        foreach ($articles as $article){
        	Article::create([
        		'title' => $article['title'],
		        'content' => $article['content'],
		        'asso_id' => Asso::where('login', $article['asso_id'])->first()->id,
		        'visibility_id' => Visibility::where('type', $article['visibility_id'])->first()->id,
	        ]);
        }

    }
}
