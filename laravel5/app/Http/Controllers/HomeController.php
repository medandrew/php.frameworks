<?php

namespace App\Http\Controllers;

/*
 * Class HomeController
 * Класс контроллера страницы новостей сайта
 *
 * @package App\Http\Controllers
 */

class HomeController extends Controller
{
    protected $news = [];

    public function __construct()
    {
        $file = file(__DIR__ . '/../../../database/news.php', FILE_IGNORE_NEW_LINES);
        foreach ($file as $record) {
            $this->news[] = explode('|', $record);
        }
    }

    /*
     * Отображает страницу news
     */
    public function news()
    {
        $data = [
            'news' => $this->news
        ];
        return view('templates.news', $data);
    }

    /*
     * Отображает подробную информацию о новости
     */
    public function show($article)
    {
        $data = [
            'news'    => $this->news,
            'article' => $this->news[--$article]
        ];
        return view('templates.article', $data);
    }
}
