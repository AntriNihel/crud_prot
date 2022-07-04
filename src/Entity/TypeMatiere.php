<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TypeMatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
#[ApiResource(

    collectionOperations: [
       'get',
        'post',
    ],
    itemOperations: [
        'get',
        'put',
        'delete',
       'patch',
       'get_nomtypematiere' => [ 'route_name' => 'nom_get_typematiere',
        'openapi_context' => [
          "parameters" => [
          "id" => [
          "name" => "id",
          "in" => "path",
          "required" => false,
          ],               
          "nomTypeMatiere"=> [
          "name" => "nomTypeMatiere",
          "in" => "path",
          "description" => "The nomTypeMatiere of your typeMatiere",
          "type" => "string",
          "required" => true,
    ],
   ],
 ],
],
     

'get_typematiere' => ['route_name' => 'title_get_typematiere'],

     //   'get_by_nomTypeMatiere' =>[
   //         'method' =>'Get',
     //       'path' => 'type_matieres/{nomTypeMatiere}',
    //        'controller' => typeMatiereController::class,
      //      'read'=> false,
      //      'openapi_context' => [
     //         "parameters" => [

      //         "id" => [
      //              "name" => "id",
      //              "in" => "path",
      //              "required" => false,
       //        ],
               
       //       "nomTypeMatiere"=> [
       //             "name" => "nomTypeMatiere",
       //             "in" => "path",
        //            "description" => "The nomTypeMatiere of your typeMatiere",
        //            "type" => "string",
        //            "required" => true,
       //         ],
       //       ],
     //       ],
  //     ],
  
    ],
)]


#[ORM\Entity(repositoryClass: TypeMatiereRepository::class)]
class TypeMatiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;


  //  #[ORM\OneToMany(mappedBy: 'nom', targetEntity: Matiere::class)]
//    private $nomTypeMatiere;


    private $idTypeMatiere;

    public function __construct()
    {
  //      $this->nomTypeMatiere = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeMatiere(): ?string
    {
        return $this->nom_typeMatiere;
    }

    public function setNomTypeMatiere(string $nom_typeMatiere): self
    {
        $this->nom_typeMatiere = $nom_typeMatiere;

        return $this;
    }

    public function addNomTypeMatiere(Matiere $nomTypeMatiere): self
    {
        if (!$this->nomTypeMatiere->contains($nomTypeMatiere)) {
            $this->nomTypeMatiere[] = $nomTypeMatiere;
            $nomTypeMatiere->setNom($this);
        }

        return $this;
    }

 





}
