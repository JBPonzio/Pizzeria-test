<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Entity\Ingredient;
use App\Entity\IngredientPizza;
use App\Repository\PizzaioloRepository;
use App\Repository\PizzaRepository;
use App\Service\Dao\PizzaDao;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PizzaController
 */
class PizzaController extends AbstractController
{
    /**
     * @Route("/pizzas")
     *
     * @param PizzaDao $pizzaDao
     *
     * @return Response
     */
    public function listeAction(PizzaDao $pizzaDao): Response
    {
        // récupération des différentes pizzas
        $pizzas = $pizzaDao->getAllPizzas();

        return $this->render("Pizza/liste.html.twig", [
            "pizzas" => $pizzas,
        ]);
    }

    /**
     * @Route(
     *     "/pizzas/detail-{pizzaId}",
     *     requirements={"pizzaId": "\d+"},
     *     name="detail"
     * )
     *
     * @param int $pizzaId
     *
     * @param PizzaDao $pizzaDao
     * @return Response
     * @throws \Exception
     */
    public function detailAction(int $pizzaId, PizzaDao $pizzaDao): Response
    {
        //récupération des données
        $pizza = $pizzaDao->getDetailPizza($pizzaId);
        $ingredientPizza = $pizza->getQuantiteIngredients();
        $cout = 0;

        //Calcul du cout de fabrication
        foreach ($ingredientPizza as $ingredient) {
            $quantite = $ingredient->convertirGrammeEnKilo($ingredient->getQuantite());
            $prix = $ingredient->getIngredient()->getCout();
            $cout= round($cout + $quantite*$prix,2);
        }


        return $this->render("Pizza/detail.html.twig",[
            "pizza"=>$pizza,
            "ingredientPizza"=>$ingredientPizza,
            "cout"=>$cout,
        ]);
    }
}
