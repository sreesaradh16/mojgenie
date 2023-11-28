<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function home()
    {
        return view('home');
    }
    public function deposit()
    {
        return view('deposit');
    }
    public function depositMoney(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $this->user->addMoney($request->all(), auth()->user());
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('deposit')->with('status', 'Something went wrong');
        }
        DB::commit();
        return redirect()->route('deposit')->with('status', 'Deposit completed');
    }

    public function withdraw()
    {
        return view('withdraw');
    }

    public function withdrawMoney(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);

        if (auth()->user()->amount < $request->amount) {
            return redirect()->route('withdraw')->with('status', 'Insufficient balance');
        }

        DB::beginTransaction();
        try {
            $this->user->withdrawMoney($request->all(), auth()->user());
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('withdraw')->with('status', 'Something went wrong');
        }
        DB::commit();
        return redirect()->route('withdraw')->with('status', 'Withdrawal completed');
    }
    public function transfer()
    {
        return view('transfer');
    }

    public function transferMoney(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'amount' => 'required',
        ]);


        if (auth()->user()->amount < $request->amount) {
            return redirect()->route('transfer')->with('status', 'Insufficient balance');
        }

        DB::beginTransaction();
        try {
            $this->user->transferMoney($request->all());
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('transfer')->with('status', 'Something went wrong');
        }
        DB::commit();
        return redirect()->route('transfer')->with('status', 'Transfer completed');
    }
    public function statement()
    {
        return view('statement', [
            'statements' => History::where('user_id', auth()->user()->id)->paginate(10)
        ]);
    }
}
