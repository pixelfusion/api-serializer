<?php

namespace PixelFusion\Fractal\Serializer;

use League\Fractal\Pagination\PaginatorInterface;
use League\Fractal\Serializer\ArraySerializer;

class ApiSerializer extends ArraySerializer
{
    /**
     * Serialize a collection. Only uses a resourceKey if it is specifically
     * set in the presenter.
     *
     * @param string $resourceKey
     * @param array  $data
     *
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return $resourceKey === null ? $data : [$resourceKey => $data];
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
