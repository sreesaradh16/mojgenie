<?php

namespace App\Repositories;

use App\Models\History;
use App\Models\User;

class UserRepository
{
    public function create($data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        return $user;
    }

    public function addMoney($data, $user)
    {
        $user->increment('amount', $data['amount']);
        $user->save();

        $this->StoreHistory($data['amount'], 'Credit', 'Deposit', $user->amount);

        return $user;
    }
    public function withdrawMoney($data, $user)
    {
        $user->decrement('amount', $data['amount']);
        $user->save();

        $this->StoreHistory($data['amount'], 'Debit', 'Withdraw', $user->amount);

        return $user;
    }
    public function transferMoney($data)
    {
        $user = User::where('email', $data['email'])->first();

        $user->increment('amount', $data['amount']);
        $user->save();

        // senders history
        History::create([
            'user_id' => auth()->user()->id,
            'amount' => $data['amount'],
            'type' => 'Debit',
            'details' => 'Transfered to ' . $data['email'],
            'balance' => $user->amount
        ]);

        // recievers history
        History::create([
            'user_id' => $user->id,
            'amount' => $data['amount'],
            'type' => 'Credit',
            'details' => 'Transfered from ' . $data['email'],
            'balance' => $user->amount
        ]);

        return $user;
    }

    public function StoreHistory($amount, $type, $details, $balance)
    {
        return History::create([
            'user_id' => auth()->user()->id,
            'amount' => $amount,
            'type' => $type,
            'details' => $details,
            'balance' => $balance
        ]);
    }
}
