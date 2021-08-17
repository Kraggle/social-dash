@extends('layouts.app', ['activePage' => 'role-management', 'menuParent' => 'laravel', 'titlePage' => __('Role
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title d-inline-block">{{ __('Roles') }}</h3>
              @can('create', App\Models\Role::class)
                <a href="{{ route('role.create') }}" class="btn btn-primary btn-gradient btn-sm float-end">{{ __('Add role') }}</a>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search roles...">
                  <thead class="text-primary">
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Users') }}</th>
                    <th>{{ __('Creation date') }}</th>
                    @can('manage-users', App\Models\User::class)
                      <th class="dt-nosort text-end">{{ __('Actions') }}</th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($roles as $role)
                      <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->description }}</td>
                        <td>{{ $role->users->count() }}</td>
                        <td>{{ $role->created_at->format('d-m-Y') }}</td>
                        @can('manage-users', App\Models\User::class)
                          <td class="td-actions text-end">
                            @can('update', $role)
                              <a href="{{ route('role.edit', $role) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-bs-toggle="tooltip" title="Edit">
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
