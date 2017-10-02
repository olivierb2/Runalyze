<?php

namespace Runalyze\Profile\Sync;

interface ProviderProfileInterface
{
    /**
     * @return int
     */
    public function getInternalProfileEnum();

    /**
     * @return bool
     */
    public function notifiesAboutNewData();

    /**
     * @return bool
     */
    public function hasActivityData();

    /**
     * @return bool
     */
    public function hasSleepData();

    /**
     * @return bool
     */
    public function hasBodyData();

    /**
     * @return bool
     */
    public function hasAllDayHeartRate();

}