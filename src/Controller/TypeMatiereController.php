<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\AsController; 

#[AsController]
class TypeMatiereController extends AbstractController
{

    #[Route(
        name: 'nom_get_typematiere',
        path: 'type_matieres/{nomTypeMatiere}',
        methods: ['Get'],
        defaults: [
            '_api_resource_class'=> TypeMatiere::class,
            '_api_item_operation_name' => 'get_nomtypematiere',
        ],
    )]
  
   public function __invoke(string $nomTypeMatiere)
    {
        $typeMatieres = $this->getDoctrine()
            ->getRepository(TypeMatiere::class)
            ->findBy(
                ['nomTypeMatiere' => $nomTypeMatiere],
            );

        return $typeMatieres;
    }

    #[Route(
        name: 'title_get_typematiere',
        path: 'type_matieres/{nom}',
        methods: ['Get'],

        defaults: [
            '_api_resource_class'=> TypeMatiere::class,
            '_api_item_operation_name' => 'get_typematiere',
        ],
 

    )]
    public function __inv(string $nomTypeMatiere)
    {
        $typeMatieres = $this->getDoctrine()
            ->getRepository(TypeMatiere::class)
            ->findBy(
                ['nomTypeMatiere' => $nomTypeMatiere],
            );

        return $typeMatieres;
    }
}
