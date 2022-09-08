<?php

namespace Lob\Resource;

use Lob\ResourceBase;
use BadMethodCallException;

class IntlAutocompletions extends ResourceBase
{
    public function autocomplete(array $data, ?array $options = [])
    {
        return $this->sendRequest(
            'POST',
            'intl_autocompletions',
            $options,
            $data
        );
    }

    public function all(array $options = array(), $includeMeta = false)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function create(array $data, array $headers = null)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function get($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function delete($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }
}
