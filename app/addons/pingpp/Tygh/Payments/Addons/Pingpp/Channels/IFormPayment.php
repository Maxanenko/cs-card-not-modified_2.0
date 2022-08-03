<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

namespace Tygh\Payments\Addons\Pingpp\Channels;

interface IFormPayment extends IChannel
{
    /**
     * Provides payment form URL.
     *
     * @param array $charge Charge data from API
     *
     * @return string
     */
    public function getFormUrl(array $charge);

    /**
     * Provides payment form data.
     *
     * @param array $charge Charge data from API
     *
     * @return array
     */
    public function getFormData(array $charge);

    /**
     * Provides payment form request method.
     *
     * @param array $charge Charge data from API
     *
     * @return string 'get' or 'post'
     */
    public function getFormMethod(array $charge);
}