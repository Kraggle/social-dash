@extends('layouts.app', ['activePage' => 'user-management', 'menuParent' => 'laravel', 'titlePage' => __('User
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('Users') }}</h4>
            </div>
            <div class="card-body">
              @can('create', App\Models\User::class)
                <div class="row">
                  <div class="col-12 text-right mb-3">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-warning">{{ __('Add user') }}</a>
                  </div>
                </div>
              @endcan
              <div class="table-responsive">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                  <thead class="text-primary">
                    <th>
                      {{ __('Name') }}
                    </th>
                    <th>
                      {{ __('Email') }}
                    </th>
                    <th>
                      {{ __('Role') }}
                    </th>
                    <th>
                      {{ __('Team') }}
                    </th>
                    <th>
                      {{ __('Creation date') }}
                    </th>
                    @can('manage-users', App\Models\User::class)
                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>
                          {{ $user->name }}
                        </td>
                        <td>
                          {{ $user->email }}
                        </td>
                        <td>
                          {{ $user->role->name }}
                        </td>
                        <td>
                          {{ $user->team->name }}
                        </td>
                        <td>
                          {{ $user->created_at->format('d-m-Y') }}
                        </td>
                        @can('manage-users', App\Models\User::class)
                          <td class="td-actions text-right">
                            @if ($user->id != auth()->user()->id)
                              <form action="{{ route('user.destroy', $user) }}" method="post">
                                @csrf
                                @method('delete')

                                @can('update', $user)
                                  <a href="{{ route('user.edit', $user) }}"
                                    class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                      class="fal fa-pencil-alt"></i></a>
                                @endcan
                                @can('delete', $user)
                                  <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove delete-alert">
                                    <i class="fal fa-trash-alt"></i>
                                  </button>
                                @endcan
                              </form>
                            @else
                              <a href="{{ route('profile.edit') }}"
                                class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
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
  <script>
    $(document).ready(function() {
      $('#datatables').fadeIn(1100);
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search users",
        },
        "columnDefs": [{
          "orderable": false,
          "targets": 5
        }, ],
      });
    });
  </script>
@endpush
