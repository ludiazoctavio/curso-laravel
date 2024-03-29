@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Report {{$report->title}}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
    <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/confirmSendMail">Send email</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3>Details</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($report->expenses as $expense)
                <tr>
                    <td scope="row">{{$expense->description}}</td>
                    <td>{{$expense->created_at}}</td>
                    <td>{{$expense->amount}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
    <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/expenses/create">New expense</a>
    </div>
</div>
@endsection