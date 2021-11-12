<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tests\Blameable\Fixture\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Blameable;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 */
class TitledArticle implements Blameable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string", length=128)
     */
    private $title;

    /**
     * @ORM\Column(name="text", type="string", length=128)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="chtext", type="string", nullable=true)
     * @Gedmo\Blameable(on="change", field="text")
     */
    private $chtext;

    /**
     * @var string
     *
     * @ORM\Column(name="chtitle", type="string", nullable=true)
     * @Gedmo\Blameable(on="change", field="title")
     */
    private $chtitle;

    /**
     * @param string $chtext
     */
    public function setChtext($chtext)
    {
        $this->chtext = $chtext;
    }

    /**
     * @return string
     */
    public function getChtext()
    {
        return $this->chtext;
    }

    /**
     * @param string $chtitle
     */
    public function setChtitle($chtitle)
    {
        $this->chtitle = $chtitle;
    }

    /**
     * @return string
     */
    public function getChtitle()
    {
        return $this->chtitle;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
