@extends('layout.app')
@section('statement','active')
@section('content')
<div class="col-md-12 col-lg-12">
    <div class="card">
        @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status')}}
        </div>
        @endif
        <div class="card-header">
            <h3 class="card-title">Statement of account</h3>
        </div>
        <div class="card-body">
            <div id="table-default" class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><button class="table-sort desc" data-sort="sort-datetime">DateTime</button></th>
                            <th><button class="table-sort" data-sort="sort-amount">Amount</button></th>
                            <th><button class="table-sort" data-sort="sort-type">Type</button></th>
                            <th><button class="table-sort" data-sort="sort-details">Details</button></th>
                            <th><button class="table-sort" data-sort="sort-balance">Balance</button></th>
                        </tr>
                    </thead>
                    @foreach($statements as $statement)
                    <tbody class="table-tbody">
                        <tr>
                            <td class="sort-date" data-date="1546016360">{{ $statement->created_at}}</td>
                            <td class="sort-name">{{ $statement->amount }}</td>
                            <td class="sort-name">{{ $statement->type }}</td>
                            <td class="sort-name">{{ $statement->details }}</td>
                            <td class="sort-name">{{ $statement->balance }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div><br>
            {{ $statements->links() }}
        </div>
    </div>
</div>
@endsection