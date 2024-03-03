<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function symfony\Component\String\u;

 class VinlyController  extends AbstractController {
    #[Route('/')]
    public function homepage() :Response{
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
        return  $this->render('vinly/homepage.html.twig',[
            'title'=>'PB & Jams',
            'tracks' => $tracks,
        ]);
    }
    #[Route('/browse/{slug}')]
    public function browse( string $slug): Response
{
    if($slug){
        $title= 'Genre:'.u(str_replace('-','',$slug))->title(true);
    }else {
        $title='all genres';

    }
    return new Response($title);
 }
 }