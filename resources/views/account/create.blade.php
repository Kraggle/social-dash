@extends('layouts.app', [
'activePage' => 'account-management',
'menuParent' => 'laravel',
'titlePage' => __('Account Management')
])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('account.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Add Account') }}</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Username') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="username" id="username">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('PK') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="pk" id="pk">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn">{{ __('Add Account') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
