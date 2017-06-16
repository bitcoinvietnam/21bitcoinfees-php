<?php
/**
 * MIT License
 *
 * Copyright (c) 2017 Bitcoin Vietnam
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

namespace BitcoinVietnam\TwentyoneBitcoinfees\Response\Get\FeesList;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ListItem
 *
 * @package BitcoinVietnam\TwentyoneBitcoinfees\Response\Get\FeesList
 */
class ListItem
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("minFee")
     */
    private $minFee;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("maxFee")
     */
    private $maxFee;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("dayCount")
     */
    private $dayCount;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("minDelay")
     */
    private $minDelay;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("maxDelay")
     */
    private $maxDelay;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("minMinutes")
     */
    private $minMinutes;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("maxMinutes")
     */
    private $maxMinutes;

    /**
     * @return int
     */
    public function getMinFee()
    {
        return $this->minFee;
    }

    /**
     * @return int
     */
    public function getMaxFee()
    {
        return $this->maxFee;
    }

    /**
     * @return int
     */
    public function getDayCount()
    {
        return $this->dayCount;
    }

    /**
     * @return int
     */
    public function getMinDelay()
    {
        return $this->minDelay;
    }

    /**
     * @return int
     */
    public function getMaxDelay()
    {
        return $this->maxDelay;
    }

    /**
     * @return int
     */
    public function getMinMinutes()
    {
        return $this->minMinutes;
    }

    /**
     * @return int
     */
    public function getMaxMinutes()
    {
        return $this->maxMinutes;
    }
}