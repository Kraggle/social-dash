@extends('layouts.app', ['activePage' => 'account-management', 'menuParent' => 'laravel', 'titlePage' => __('Account
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @can('manage-accounts', App\Models\User::class)
            {{-- Account management - admin only --}}
            <div class="card">
              <div class="card-header">
                <h4 class="card-title d-inline-block">{{ __('Accounts') }}</h4>
                @can('create', App\Models\Account::class)
                  <a href="{{ route('account.create') }}" class="btn btn-sm btn-primary btn-gradient float-end">{{ __('Add account') }}</a>
                @endcan
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search accounts...">
                    <thead class="text-primary">
                      <th>{{ __('Username') }}</th>
                      <th>{{ __('Team') }}</th>
                      <th>{{ __('Active') }}</th>
                      <th>{{ __('Added On') }}</th>
                      @can('manage-accounts', App\Models\User::class)
                        <th class="text-end dt-nosort">{{ __('Actions') }}</th>
                      @endcan
                    </thead>
                    <tbody>
                      @foreach ($accounts as $account)

                        @php $settings = $account->getAllSettings(); @endphp

                        <tr>
                          <td>{{ '@' . $account->username }}</td>
                          <td>{{ $account->team->name ?? '' }}</td>
                          <td>{{ $settings->active->value ? 'true' : 'false' }}</td>
                          <td>{{ $account->created_at->format('d-m-Y') }}</td>
                          @can('manage-accounts', App\Models\User::class)
                            <td class="td-actions text-end">
                              <form action="{{ route('account.destroy', $account) }}" method="post">
                                @csrf
                                @method('delete')

                                @can('update', $account)
                                  <a href="{{ route('account.edit', $account) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-bs-toggle="tooltip" title="{{ __('Edit') }}">
                                    <i class="fal fa-pencil-alt"></i>
                                  </a>
                                @endcan
                                @if (auth()->user()->can('remove', $account))
                                  <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove delete-alert" data-bs-toggle="tooltip" title="{{ __('Delete') }}">
                                    <i class="fal fa-trash-alt"></i>
                                  </button>
                                @endif
                              </form>
                            </td>
                          @endcan
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          @elsecan ('manage-team-accounts', App\Models\User::class)
            {{-- Account management - team admin or by permission --}}
            @define($team = auth()->user()->team)
            @define($accounts = $team->accounts)
            <div class="card">
              <div class="card-header">
                <h4 class="card-title d-inline-block">{{ __('Instagram Accounts') }}</h4>
                @can('add-account', $team)
                  <a href="{{ route('account.create') }}" class="btn btn-sm btn-primary btn-gradient float-end">
                    {{ __('Add account') }}
                  </a>
                @endcan
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary" data-search-placeholder="Search accounts...">
                      <th>{{ __('Username') }}</th>
                      <th>{{ __('Cost') }}</th>
                      <th>{{ __('Active') }}</th>
                      <th>{{ __('Added On') }}</th>
                      <th class="text-end dt-nosort">{{ __('Actions') }}</th>
                    </thead>
                    <tbody>
                      @foreach ($accounts as $account)

                        @define($settings = $account->getAllSettings())

                        @php
                          $cost = (float) \App\Models\Defaults::where('options->key', 'active')->first()->options->on_cost;
                          $values = \App\Models\Defaults::where('options->key', 'follower_freq')->first()->options->values;
                          $price = $values[array_search($account->price_id, array_column($values, 'key'))];
                          $cost += ((float) $price->cost) * (int) $account->quantity;
                        @endphp

                        <tr>
                          <td>{{ '@' . $account->username }}</td>
                          <td>£{{ number_format($cost, 2) }} pm</td>
                          <td>{{ $team->subscribed($account->username) ? 'true' : 'false' }}</td>
                          <td>{{ $account->created_at->format('d-m-Y') }}</td>
                          <td class="td-actions text-end">
                            <form action="{{ route('account.destroy', $account) }}" method="post">
                              @csrf
                              @method('delete')

                              @can('edit-account', $team)
                                <a href="{{ route('account.edit', $account) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-toggle="tooltip" title="{{ __('Edit') }}">
                                  <i class="fal fa-pencil-alt"></i>
                                </a>
                              @endcan
                              @can('remove-account', $team)
                                <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove delete-alert" data-toggle="tooltip" title="{{ __('Delete') }}">
                                  <i class="fal fa-trash-alt"></i>
                                </button>
                              @endcan
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          @else
            @include('permission')
          @endcan
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/pages/datatable-only.js"></script>
@endpush
