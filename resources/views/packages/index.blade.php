@extends('layouts.app', ['activePage' => 'package-management', 'menuParent' => 'laravel', 'titlePage' => __('Package
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title d-inline-block">{{ __('Packages') }}</h4>
              @can('create', App\Models\Package::class)
                <a href="{{ route('package.create') }}" class="btn btn-primary btn-sm float-end">{{ __('Add package') }}</a>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search packages...">
                  <thead class="text-primary">
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Cost') }}</th>
                    <th>{{ __('Creation date') }}</th>
                    @can('manage-users', App\Models\User::class)
                      <th class="dt-nosort text-end">{{ __('Actions') }}</th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($packages as $package)
                      <tr>
                        <td>{{ $package->name }}</td>
                        <td>{{ $package->description }}</td>
                        <td>£{{ $package->cost }}</td>
                        <td>{{ $package->created_at->format('d-m-Y') }}</td>
                        @can('manage-users', App\Models\User::class)
                          <td class="td-actions text-end">
                            @can('update', $package)
                              <a href="{{ route('package.edit', $package) }}" class="btn btn-link btn-warning btn-icon btn-sm edit" data-bs-toggle="tooltip" title="Edit">
                                <i class="fal fa-pencil-alt"></i>
                              </a>
                            @endcan
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
