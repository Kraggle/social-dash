@extends('layouts.app', ['activePage' => 'default-management', 'menuParent' => 'laravel', 'titlePage' => __('Default
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title d-inline-block">{{ __('Defaults') }}</h3>
              @can('create', App\Models\Defaults::class)
                <a href="{{ route('default.create') }}" class="btn btn-sm btn-primary btn-gradient float-end">
                  {{ __('Add default') }}
                </a>
              @endcan
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search defaults...">
                  <thead class="text-primary">
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('For Table') }}</th>
                    @can('manage-defaults', App\Models\User::class)
                      <th class="text-end dt-nosort">{{ __('Actions') }}</th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($defaults as $default)
                      <tr>
                        <td>{{ $default->name }}</td>
                        <td>{{ AppHelper::truncate($default->description) }}</td>
                        <td>{{ ucwords($default->for_table) }}</td>
                        @can('manage-defaults', App\Models\User::class)
                          <td class="td-actions text-end">
                            <form action="{{ route('default.destroy', $default) }}" method="post">
                              @csrf
                              @method('delete')

                              @can('update', $default)
                                <a href="{{ route('default.edit', $default) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-bs-toggle="tooltip" title="{{ __('Edit') }}">
                                  <i class="fal fa-pencil-alt"></i>
                                </a>
                              @endcan
                              @if (auth()->user()->can('remove', $default))
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
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/pages/datatable-only.js"></script>
@endpush
