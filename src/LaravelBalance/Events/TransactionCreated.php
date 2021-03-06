<?php

namespace CawaKharkov\LaravelBalance\Events;

use App\Podcast;
use App\Events\Event;
use CawaKharkov\LaravelBalance\Interfaces\BalanceTransactionInterface;
use Illuminate\Queue\SerializesModels;

/**
 * Class TransactionCreated
 * @package LaravelBalance\Events
 */
class TransactionCreated extends Event
{
    use SerializesModels;

    public $transaction;

    /**
     * Create a new event instance.
     * @param BalanceServiceInterface $transaction
     */
    public function __construct(BalanceTransactionInterface $transaction)
    {
        $this->transaction = $transaction;
    }
}
