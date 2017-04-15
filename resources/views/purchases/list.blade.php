@extends('layouts/main')

@section('content')
<div class="panel-heading">
    <div class="panel-title text-center">
        <h1 class="title">Company Name</h1>
        <hr />
    </div>
</div> 
<div class="main-login main-center" ng-app="myApp">

    <a ui-sref="create">Create</a>
    <a ui-sref="list">List</a>
    
    <div ui-view></div>

</div>
@endsection