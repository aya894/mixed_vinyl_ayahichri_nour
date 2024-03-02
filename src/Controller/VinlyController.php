<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function symfony\Component\String\u;

 class VinlyController{
    #[Route('/')]
    public function homepage(){
        return  new Response('Titre: PD and Jams');
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