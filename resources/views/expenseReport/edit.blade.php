@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Edit Report</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
    <form action="/expense_reports/{{$report->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="title"></label>
              <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection