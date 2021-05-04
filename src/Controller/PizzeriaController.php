<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Service\Dao\PizzeriaDao;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

/**
 * Class PizzeriaController
 */
class PizzeriaController extends AbstractController
{
    /**
     * @Route("/pizzerias")
     *
     * @param PizzeriaDao $pizzeriaDao
     *
     * @return Response
     */
    public function listeAction(PizzeriaDao $pizzeriaDao): Response
    {
        // récupération des différentes pizzéria de l'application
        $pizzerias = $pizzeriaDao->getAllPizzerias();

        return $this->render("Pizzeria/liste.html.twig", [
            "pizzerias" => $pizzerias,
        ]);
    }

    /**
     * @Route(
     *     "/pizzerias/carte-{pizzeriaId}",
     *     requirements={"pizzeriaId": "\d+"}
     * )
     *
     * @param int $pizzeriaId
     *
     * @param PizzeriaDao $pizzeriaDao
     * @return Response
     * @throws \Exception
     */
    public function detailAction(int $pizzeriaId, PizzeriaDao $pizzeriaDao): Response
    {
        //Récupération des données
        $pizzeria = $pizzeriaDao->getCartePizzeria($pizzeriaId);
        $pizzas =$pizzeria->getPizzas();
        $marge = $pizzeria->getMarge();
        //Création d'un tableau de valeurs contenant les noms et le cout de fabrication des pizzas
        $liste =[];
        foreach ($pizzas as $pizza) {
            //dd($pizza);
            //Récupération du nom de la pizza en cours et des extraction des valeurs
            $nom =$pizza->getNom();
            $collectionIngredients = $pizza->getQuantiteIngredients()->getValues();
            $prix =0;
            foreach ($collectionIngredients as $ingredientQuantite){
                //Calcul du coût de fabrication selon la quantité et le prix des ingrédients
               $quantite = $ingredientQuantite->convertirGrammeEnKilo($ingredientQuantite->getQuantite());
               $ingredient=$ingredientQuantite->getIngredient();
               $cout = $ingredient->getCout();
               $somme = $quantite*$cout;
               $prix= round($prix+$somme,2);

            }
           $liste[]=['nom'=>$nom, 'prix'=>$prix+$marge];
         }
        //dd($liste);



        return $this->render("Pizzeria/carte.html.twig",[
            "pizzeria"=>$pizzeria,
            "liste"=>$liste,
        ]);
    }
}
