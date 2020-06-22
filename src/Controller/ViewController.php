<?php


namespace App\Controller;


class ViewController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $products = ['product1', 'product2', 'product3', 'product4', 'product5'];

        $title = "Products";
        return $this->twig->render('index.html.twig', [
            'products' => $products,
            'title' => $title,
        ]);
    }
}