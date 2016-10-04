<?php

namespace DesignPatterns\More\Repository;

class Post
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    public static function fromState(array $state)
    {
        return new self(
            $state['id'],
            $state['title'],
            $state['text']
        );
    }

    /**
     * @param int|null $id
     * @param string $text
     * @param string $title
     */
    public function __construct($id, $title, $text)
    {
        $this->id = $id;
        $this->text = $text;
        $this->title = $title;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
