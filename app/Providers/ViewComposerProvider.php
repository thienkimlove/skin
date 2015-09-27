<?php namespace App\Providers;

use App\Post;
use App\Setting;
use DB;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		DB::listen(function($sql, $bindings) {

			for($j=0; $j<sizeof($bindings); $j++) {
				$sql = implode($bindings[$j], explode('?', $sql, 2));
			}
			$logFile = fopen(storage_path('logs/query.log'), 'a+');
			//write log to file
			fwrite($logFile, $sql . "\n");
			fclose($logFile);
		});


        view()->composer('frontend.box_share', function ($view) {
			$shares = Post::whereHas('modules', function($q){
				$q->where('slug', 'box-chia-se')->orderBy('order');
			})->limit(4)->get();
            $view->with('shares', $shares);

        });

        view()->composer('frontend.right', function ($view) {
            $view->with([
                'settings' => Setting::lists('value', 'name'),
                'mostReads' =>  Post::whereHas('modules', function($q){
                    $q->where('slug', 'right-most-read')->orderBy('order');
                })->limit(6)->get(),
                'newPosts' =>  Post::whereHas('modules', function($q){
                    $q->where('slug', 'right-new-post')->orderBy('order');
                })->limit(6)->get()
            ]);

        });

		view()->composer('frontend.box_news', function ($view) {
			$news = Post::whereHas('modules', function($q){
				$q->where('slug', 'box-news')->orderBy('order');
			})->limit(4)->get();
			$view->with('news', $news);

		});


	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
