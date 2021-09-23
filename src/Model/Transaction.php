<?php

namespace Amz\VendorDirectFulfillmentTransactions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The transaction status details.
 */
class Transaction extends AbstractModel
{
    /**
     * The unique identifier sent in the 'transactionId' field in response to the post
     * request of a specific transaction.
     *
     * @var string
     */
    public $transactionId = null;

    /**
     * Current processing status of the transaction.
     *
     * @var string
     */
    public $status = null;

    /**
     * Error code and message for the failed transaction. Only available when
     * transaction status is 'Failure'.
     *
     * @var \Amz\VendorDirectFulfillmentTransactions\Model\ErrorList
     */
    public $errors = null;
}
