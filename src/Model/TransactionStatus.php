<?php

namespace Amz\VendorDirectFulfillmentTransactions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the getTransactionStatus operation.
 */
class TransactionStatus extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentTransactions\Model\Transaction
     */
    public $transactionStatus = null;
}
