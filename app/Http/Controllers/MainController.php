<?php namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\RegisterEmailRequest;
use App\Post;
use App\Question;
use App\Setting;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        $page = 'index';
        $questions = Question::latest('updated_at')->limit(10)->get();
        $trangmintunhien = Post::whereHas('modules', function($q){
            $q->where('slug', 'trang-min-trang-chu')->orderBy('order');
        })->limit(4)->get();


        $videos = Video::latest('updated_at')->limit(3)->get();

        return view('frontend.index', compact(
            'page', 'questions','trangmintunhien', 'videos'
        ))->with([
            'meta_title' => 'Trang chủ | '.env('META_TITLE'),
            'meta_desc' =>  'Trang chủ '.env('META_TITLE'),
            'meta_keywords' => env('META_KEYWORDS'),
        ]);
    }

    public function tag($keyword)
    {
        $tag = Tag::where('slug', $keyword)->first();
        $posts = $tag->posts();
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn '.$keyword.' tại '.env('META_TITLE'),
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }
    public function video($value = null)
    {
        $page = 'video';

        if ($value) {
            $videoMain = Video::where('slug', $value)->first();
        } else {
            $videoMain = null;
        }

        $hotVideos = Video::where('hot', true)
            ->latest('updated_at')
            ->limit(7)
            ->get();

        $videos = Video::latest('updated_at')->paginate(10);

        return view('frontend.video', compact('page', 'hotVideos', 'videos', 'videoMain'))->with([
            'meta_title' => 'Video | '.env('META_TITLE'),
            'meta_desc' =>  'Video '.env('META_TITLE'),
            'meta_keywords' => env('META_KEYWORDS'),
        ]);
    }



    public function lienhe()
    {
        $page = 'lien-he';
        return view('frontend.lien-he', compact('page'))->with([
            'meta_title' => 'Liên hệ | '.env('META_TITLE'),
            'meta_desc' =>  'Liên hệ '.env('META_TITLE'),
            'meta_keywords' => env('META_KEYWORDS'),
        ]);
    }

    public function lycoskin()
    {
        $page = 'lyco-skin';
        $settings = Setting::lists('value', 'name');
        return view('frontend.lycoskin', compact('page', 'settings'))->with([
            'meta_title' => env('META_TITLE'),
            'meta_desc' =>  env('META_TITLE'),
            'meta_keywords' => env('META_KEYWORDS'),
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('q');
        $posts = Post::where('title', 'LIKE', '%'.$keyword.'%')
            ->where('status', true)
            ->paginate(10);
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn '.$keyword.' tại '.env('META_TITLE'),
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }

    /**
     * save contact form.
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect('/');
    }

    public function registerEmail(RegisterEmailRequest $request)
    {
        Mail::send('emails.register', ['email' => $request->input('email')], function ($message) {
            $message->from(env('EMAIL_FROM_EMAIL'), env('EMAIL_FROM_NAME'));

            $message->to(env('EMAIL_TO_EMAIL'))
                ->cc('thienkimlove@gmail.com')
                ->subject('Email đăng ký nhận tin!');
        });
        return redirect('/');
    }

    /**
     * save question form.
     * @param ContactRequest|QuestionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createQuestion(QuestionRequest $request)
    {
        Question::create($request->all());
        return redirect('/');
    }


    /**
     * ajax increase likes.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function increaseLikes(Request $request)
    {
        $post = Post::findOrFail($request->input('post_id'));
        $post->likes = $post->likes + 1;
        $post->save();

        return \Response::json([]);
    }

}
