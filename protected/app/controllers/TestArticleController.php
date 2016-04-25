<?php
//use Model\Article;

class ArticleController extends BaseController 
{
    // layout dengan menggunakan blade
    //public $layout  = 'layout';
    //public $title   = 'Article';
 
    public function article() {
        //$this->layout->title = $this->title;
        /* 
        * menggunakan view yang ada 
        * pada direktori views/article/index
        */
        //$view = View::make('test.article');
        
        // query ini digunakan untuk mengambil semua data dari table article        
        //$view->articles = Article::all();
 
        // query ini digunakan untuk menghitung total data dari table article
        //$view->count = Article::all()->count();
 
        // render semua konten view kedalam layout
        //$this->layout->content = $view;

        return View::make('test.article');
    }
}