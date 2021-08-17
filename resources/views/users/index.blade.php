@extends('layouts.app', ['activePage' => 'user-management', 'menuParent' => 'laravel', 'titlePage' => __('User
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title d-inline-block">{{ __('Users') }}</h3>
              @can('create', App\Models\User::class)
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-warning btn-gradient float-end">{{ __('Add user') }}</a>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search users...">
                  <thead class="text-primary">
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Role') }}</th>
                    <th>{{ __('Team') }}</th>
                    <th>{{ __('Creation date') }}</th>
                    @can('manage-users', App\Models\User::class)
                      <th class="dt-nosort text-end">
                        {{ __('Actions') }}
                      </th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->team->name }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        @can('manage-users', App\Models\User::class)
                          <td class="td-actions text-end">
                            @if ($user->id != auth()->user()->id)
                              <form action="{{ route('user.destroy', $user) }}" method="post">
                                @csrf
                                @method('delete')

                                @can('update', $user)
                                  <a href="{{ route('user.edit', $user) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                                @endcan
                                @can('delete', $user)
                                  <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove delete-alert">
                                    <i class="fal fa-trash-alt"></i>
                                  </button>
                                @endcan
                              </form>
                            @else
                              <a href="{{ route('profile.edit') }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-bs-toggle="tooltip" title="Edit">
                                <i class="fal fa-pencil-alt"></i>
                              </a>
                            @endif
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
