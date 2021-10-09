<?php

namespace App\repository;

use App\entity\Customer;
use bootstrap\App;

class CustomerRepository implements RepositoryInterface
{

    public static function getAllData(): array
    {

        return App::get('database')
            ->from('customer')
            ->fetchAll('phone');

    }

    public static function filter(array $data, array $filters = null): array
    {
        $filtered = $data;

        foreach ($filters as $key => $filter) {
            $filtered = array_filter($filtered, function (Customer $customer) use ( $key, $filter) {
                $function = "get" .$key;
                return $customer->getPhone()->{$function}() == $filter;
            }, ARRAY_FILTER_USE_BOTH);

        }

        return $filtered;
    }


}
