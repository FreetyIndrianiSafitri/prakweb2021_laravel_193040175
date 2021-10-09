<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Freety Indriani Safitri",
        "email" => "193040175.freety@mail.unpas.ac.id",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Freety Indriani Safitri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque libero earum debitis officiis, est sapiente, nemo aspernatur tempora hic perspiciatis ducimus, culpa expedita necessitatibus quibusdam architecto! Libero asperiores neque temporibus dolore beatae autem optio modi recusandae dolorum minima at deleniti mollitia omnis facilis natus, impedit culpa. Necessitatibus non modi repudiandae nesciunt, esse sapiente magnam a at magni accusantium, consequatur, sed officiis libero eum alias. Dolor accusantium, cupiditate libero consectetur facere unde mollitia, illum quam omnis tempore nisi iste dolorem molestias."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lady",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt et unde velit asperiores eligendi? Delectus, vel. Dolor repudiandae veritatis ipsam sit eaque perferendis officiis harum, porro repellat, eveniet fuga odit ratione provident sequi assumenda quasi nihil. Dolores architecto, labore cupiditate consectetur exercitationem iure nemo? Ex repellat accusamus libero, culpa quae nihil reprehenderit. Voluptatem ab a ipsam porro, adipisci fuga ducimus quod expedita accusamus ea similique enim maiores nobis nihil distinctio tempore. Ea debitis hic harum assumenda nostrum, esse sapiente aut saepe corporis atque accusantium iure dolorem amet odio earum quisquam optio laboriosam illo perferendis dignissimos itaque sequi iste recusandae! Doloribus!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post  
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Freety Indriani Safitri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque libero earum debitis officiis, est sapiente, nemo aspernatur tempora hic perspiciatis ducimus, culpa expedita necessitatibus quibusdam architecto! Libero asperiores neque temporibus dolore beatae autem optio modi recusandae dolorum minima at deleniti mollitia omnis facilis natus, impedit culpa. Necessitatibus non modi repudiandae nesciunt, esse sapiente magnam a at magni accusantium, consequatur, sed officiis libero eum alias. Dolor accusantium, cupiditate libero consectetur facere unde mollitia, illum quam omnis tempore nisi iste dolorem molestias."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lady",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt et unde velit asperiores eligendi? Delectus, vel. Dolor repudiandae veritatis ipsam sit eaque perferendis officiis harum, porro repellat, eveniet fuga odit ratione provident sequi assumenda quasi nihil. Dolores architecto, labore cupiditate consectetur exercitationem iure nemo? Ex repellat accusamus libero, culpa quae nihil reprehenderit. Voluptatem ab a ipsam porro, adipisci fuga ducimus quod expedita accusamus ea similique enim maiores nobis nihil distinctio tempore. Ea debitis hic harum assumenda nostrum, esse sapiente aut saepe corporis atque accusantium iure dolorem amet odio earum quisquam optio laboriosam illo perferendis dignissimos itaque sequi iste recusandae! Doloribus!"
        ],
    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
}); 

