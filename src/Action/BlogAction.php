<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Category;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class BlogAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
//        $posts = Post::all();
        $categories = Category::all();

        $page = $request->getQueryParams()['page'] ?? 1;
        $postsPerPage = 3;
        $offset = $page == 1 ? 0 : ($page - 1) * $postsPerPage;

        $total = Manager::select('select COUNT(*) as counter from posts');

        $posts = new Paginator(
            Post::skip($offset)->take($postsPerPage)->get(),
            $postsPerPage,
            $page
        );

        return $this->renderer->make('blog.blog', [
            'title' => 'Pet Salon Blog',
            'posts' => $posts,
            'categories' => $categories,
            'total' => round($total[0]->counter / $postsPerPage)
        ]);
    }
}
