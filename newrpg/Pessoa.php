<?php

abstract class Pessoa
{
    protected ? int $nivel;
    protected ?string $nome;
    protected ?string $raca;
    protected ?string $profissao;
    protected ?int $constituicao;
    protected ?int $destreza;
    protected ?int $forca;
    protected ?int $inteligencia;
    protected ?int $sabedoria;
    protected ?int $carisma;
    protected ?int $dado;
    protected ? int $dano;
    
    public function dado4()
    {
        $this->setDado(random_int(1,4));
        print("<br>O dado de 4 lados foi rolado e o resultado é: {$this->getDado()}");
    }
    public function dado20()
    {
        $this->setDado(random_int(1,20));
        print("<br>O dado de 20 lados foi rolado e o resultado é: {$this->getDado()}");
    }
    public function oitoDado10()
    {
        $c=0;
        for($i = 0; $i<8; $i++)
        {
        $this->setDado(random_int(1,10));
        $c += $this->getDado();
        print("<br>O dado de 10 lados foi rolado e o resultado é: {$this->getDado()}<br>");
        }
        print("<br>O total de oito dados de 10 dano é = {$c}<br>");
    }
    public function tresDado10()
    {
        $c=0;
        for($i = 0; $i<3; $i++)
        {
        $this->setDado(random_int(1,10));
        $c += $this->getDado();
        print("<br>O dado de 10 lados foi rolado e o resultado é: {$this->getDado()}<br>");
        }
        print("<br>O total de três dados de 10 dano é = {$c}<br>");
    }
    public function seiDado10()
    {
        $c=0;
        for($i = 0; $i<6; $i++)
        {
        $this->setDado(random_int(1,10));
        $c += $this->getDado();
        print("<br>O dado de 10 lados foi rolado e o resultado é: {$this->getDado()}<br>");
        }
        print("<br>O total de 6 dados de 10 é = {$c}<br>");
    }
   


    public function getDado()
    {
        return $this->dado;
    }
    public function setDado(?int $dado)
    {
        $this->dado = $dado;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(?string $nome)
    {
        $this->nome = $nome;
    }
    public function getRaca()
    {
        return $this->raca;
    }
    public function setRaca(?string $raca)
    {
        $this->raca = $raca;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;

        return $this;
    }


    public function getConstituicao()
    {
        return $this->constituicao;
    }


    public function setConstituicao($constituicao)
    {
        $this->constituicao = $constituicao;        
        return $this;
    }


    public function getDestreza()
    {
        return $this->destreza;
    }


    public function setDestreza($destreza)
    {
        $this->destreza = $destreza;

        return $this;
    }

    public function getForca()
    {
        return $this->forca;
    }


    public function setForca($forca)
    {
        $this->forca = $forca;
        
        return $this;
    }


    public function getInteligencia()
    {
        return $this->inteligencia;
    }


    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;

        return $this;
    }


    public function getCarisma()
    {
        return $this->carisma;
    }


    public function setCarisma($carisma)
    {
        $this->carisma = $carisma;

        return $this;
    }

    public function getSabedoria()
    {
        return $this->sabedoria;
    }

    public function setSabedoria($sabedoria)
    {
        $this->sabedoria = $sabedoria;

        return $this;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel(?int $nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }


    public function getDano()
    {
        return $this->dano;
    }


    public function setDano($dano)
    {
        $this->dano = $dano;

        return $this;
    }
}
