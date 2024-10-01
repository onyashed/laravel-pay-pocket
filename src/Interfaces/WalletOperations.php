<?php

namespace HPWebdeveloper\LaravelPayPocket\Interfaces;

use HPWebdeveloper\LaravelPayPocket\Exceptions\InsufficientBalanceException;

interface WalletOperations
{
    /**
     * Get User's Wallet Balance
     */
    public function getWalletBalanceAttribute(): int|float;

    /**
     * Get the balance of a specific wallet type.
     */
    public function getWalletBalanceByType(string $walletType): int|float;

    /**
     *  Check if User's wallet balance is more than given value
     */
    public function hasSufficientBalance(int|float $value): bool;

    /**
     * Pay the order value from the user's wallets.
     *
     * @throws InsufficientBalanceException
     */
    //Pay for product or services from a supplier using the balance in the wallet.
    public function pay(int|float $orderValue, ?string $notes = null): void;

    /**
     * Deposit an amount to the user's wallet of a specific type.
     */
    //The deposit source goes into notes. 2024 Oct 1 16:45 Hrs.
    //Get mobile payments and api paypal pesapal payments/deposits into the wallet.
    public function deposit(string $type, int|float $amount, ?string $notes = null): bool;

    /**
     * Get user's wallet balance.
     */
    public function getWalletBalance(): int|float;
}
