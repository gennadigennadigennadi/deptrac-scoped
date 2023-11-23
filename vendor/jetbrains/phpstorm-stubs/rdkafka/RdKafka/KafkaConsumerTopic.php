<?php

namespace DEPTRAC_1700753084\RdKafka;

class KafkaConsumerTopic extends Topic
{
    private function __construct()
    {
    }
    /**
     * @param int $partition
     * @param int $offset
     *
     * @return void
     */
    public function offsetStore($partition, $offset)
    {
    }
}
