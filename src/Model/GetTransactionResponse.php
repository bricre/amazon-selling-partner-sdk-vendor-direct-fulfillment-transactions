<?php

namespace Amz\VendorDirectFulfillmentTransactions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getTransactionStatus operation.
 */
class GetTransactionResponse extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentTransactions\Model\TransactionStatus
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentTransactions\Model\ErrorList
     */
    public $errors = null;
}
