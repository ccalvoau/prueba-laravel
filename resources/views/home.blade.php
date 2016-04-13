@extends('layout.master')

@section('title')
{{ 'Novus - Home' }}
@endsection


@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{ $page_title or 'Page Title' }}
        <small>- {{ $page_description or 'Page Description' }}</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">
                        WELCOME
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection


@section('scripts')

@endsection
