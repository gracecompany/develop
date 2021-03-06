<?php

namespace App\Repositories\Faq;

/**
 * Class AbstractFaqDecorator.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
abstract class AbstractFaqDecorator implements FaqInterface
{
    /**
     * @var FaqInterface
     */
    protected $faq;

    /**
     * @param FaqInterface $faq
     */
    public function __construct(FaqInterface $faq)
    {
        $this->faq = $faq;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->faq->find($id);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->faq->all();
    }

    /**
     * @param null $perPage
     * @param bool $all
     *
     * @return mixed
     */
    public function paginate($page = 1, $limit = 10, $all = false)
    {
        return $this->faq->paginate($page, $limit, $all);
    }
}
