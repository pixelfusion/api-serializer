<?php

namespace PixelFusion\Fractal\Serializer;

use League\Fractal\Pagination\PaginatorInterface;
use League\Fractal\Serializer\ArraySerializer;

class ApiSerializer extends ArraySerializer
{
    /**
     * Serialize the meta.
     *
     * @param array $meta
     *
     * @return array
     */
    public function meta(array $meta)
    {
        if (empty($meta) === true) {
            return [];
        }

        return $meta;
    }

    /**
     * Serialize the paginator.
     *
     * @param PaginatorInterface $paginator
     *
     * @return array
     */
    public function paginator(PaginatorInterface $paginator)
    {
        $pagination = [
            'total' => (int) $paginator->getTotal(),
            'per_page' => (int) $paginator->getPerPage(),
            'current_page' => (int) $paginator->getCurrentPage(),
            'last_page' => (int) $paginator->getLastPage(),
        ];

        return ['pagination' => $pagination];
    }
}
