<?php

namespace App\Controllers;
use App\Models\ArtModel;

class Home extends BaseController
{
    protected $mdl;

    public function __construct()
    {
        $this->mdl = new ArtModel();
    }

    public function index()
    {
        $data['text'] = 'Hai';

        echo view('templates/header', $data);
        echo view('templates/sticky-links', $data);
        echo view('dashboard/dashboard', $data);
        echo view('templates/footer', $data);
    }

    public function about()
    {
        $data['text'] = 'ITS PIRA';

        echo view('templates/header', $data);
        echo view('templates/sticky-links', $data);
        echo view('about/about', $data);
        echo view('templates/footer', $data);
    }

    public function artworks()
    {
        $data['text'] = 'ITS ARTWORKS';

        $allArt =  $this->mdl->getArtworks();
        $data['artworks'] = $allArt;
        $data['recent'] = $this->mdl->getRecentArtworks();
        
        $year = $this->request->getPost('filter_by_year');
        if ($year) {
            $sort = $this->mdl->sortByYear($year);
            $data['filter_res'] = $sort;
            $data['active_year'] = $year;
        } else {
            $sort = $allArt;
            $data['filter_res'] = $sort;
            $data['active_year'] = null;
        }

        echo view('templates/header', $data);
        echo view('templates/sticky-links', $data);
        echo view('artworks/artworks', $data);
        echo view('templates/footer', $data);
    }

    public function commission()
    {
        $data['text'] = 'ITS COMMIS';

        echo view('templates/header', $data);
        echo view('templates/sticky-links', $data);
        echo view('commission/commission', $data);
        echo view('templates/footer', $data);
    }
}