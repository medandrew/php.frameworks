<?php

namespace App\Http\Controllers;

/*
 * Class HomeController
 * Класс контроллера страницы новостей сайта
 *
 * @package App\Http\Controllers
 */

use App\Models\Article;
use App\Models\Author;

class HomeController extends Controller
{
    /*
     * Отображает страницу news
     */
    public function news()
    {
        $data = [
            'news' => Article::all()
        ];

        return view('templates.news', $data);
    }

    /*
     * Отображает подробную информацию о новости
     */
    public function show($article)
    {
        $data = [
            'news'    => Article::all(),
            'article' => Article::find($article),
            'authors' => Author::all()
        ];

        return view('templates.article', $data);
    }
}
