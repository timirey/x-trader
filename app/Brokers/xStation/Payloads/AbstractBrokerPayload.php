<?php

namespace App\Brokers\xStation\Payloads;

use App\Http\Payloads\AbstractPayload;

abstract class AbstractBrokerPayload extends AbstractPayload
{
    abstract public function getCommand(): string;

    public function toJson(): string
    {
        $data['command'] = $this->getCommand();

        if (! empty($this->getArguments())) {
            $data['arguments'] = $this->getArguments();
        }

        return json_encode($data);
    }
}
