<?php

namespace Controller;


class PortfoliosController extends AbstractController
{
    public function groupe1()
    {
        return $this->twig->render('Portfolios/groupe1/page1.html.twig');
    }

    public function groupe2()
    {
        return $this->twig->render('Portfolios/groupe2/page2.html.twig');
    }

    public function groupe3()
    {
        return $this->twig->render('Portfolios/groupe3/page3.html.twig');
    }

    public function groupe4()
    {
        return $this->twig->render('Portfolios/groupe4/page4.html.twig');
    }

    public function groupe5()
    {
        return $this->twig->render('Portfolios/groupe5/page5.html.twig');
    }

    public function groupe6()
    {
        return $this->twig->render('Portfolios/groupe6/page6.html.twig');
    }

    public function groupe7()
    {
        return $this->twig->render('Portfolios/groupe7/page7.html.twig');
    }

    public function groupe8()
    {
        return $this->twig->render('Portfolios/groupe8/page8.html.twig');
    }

    public function groupe9()
    {
        return $this->twig->render('Portfolios/groupe9/page9.html.twig');
    }

}
