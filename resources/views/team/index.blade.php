@extends('layouts.app', ['activePage' => 'team-management', 'menuParent' => 'laravel', 'titlePage' => __('Team
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @can('manage-teams', App\Models\User::class)
            {{-- Teams management - admin only --}}
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Teams') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\Models\Team::class)
                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="{{ route('team.create') }}" class="btn btn-sm btn-primary">{{ __('Add team') }}</a>
                    </div>
                  </div>
                @endcan
                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary">
                      <th>{{ __('Name') }}</th>
                      <th>{{ __('Package') }}</th>
                      <th>{{ __('Accounts') }}</th>
                      <th>{{ __('Members') }}</th>
                      <th>{{ __('Creation Date') }}</th>
                      <th class="text-right">{{ __('Actions') }}</th>
                    </thead>
                    <tbody>
                      @foreach ($teams as $team)
                        <tr>
                          <td>{{ $team->name }}</td>
                          <td>{{ $team->package->name ?? '' }}</td>
                          <td>{{ $team->accounts->count() }}</td>
                          <td>{{ $team->members->count() }}</td>
                          <td>{{ $team->created_at->format('d-m-Y') }}</td>
                          <td class="td-actions text-right">
                            <form action="{{ route('team.destroy', $team) }}" method="post">
                              @csrf
                              @method('delete')

                              @can('update', $team)
                                <a href="{{ route('team.edit', $team) }}"
                                  class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                              @endcan
                              @if (auth()->user()->can('remove', $team))
                                <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove delete-alert">
                                  <i class="fal fa-trash-alt"></i>
                                </button>
                              @endif
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          @elsecan('manage-team', App\Models\User::class)
            {{-- Team management - by permission or team admin --}}
            @define($team = auth()->user()->team)
            <div class="card">

              <div class="card-header">
                <h4 class="card-title">{{ __('Team Management') }}</h4>
              </div>

              <div class="card-body">
                @can('add-member', $team)
                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="{{ route('member.create') }}"
                        class="btn btn-sm btn-primary">{{ __('Add team member') }}</a>
                    </div>
                  </div>
                @endcan

                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary">
                      <th>{{ __('Name') }}</th>
                      <th>{{ __('Email') }}</th>
                      <th>{{ __('Member Since') }}</th>
                      <th class="text-right">{{ __('Actions') }}</th>
                    </thead>
                    <tbody>
                      @foreach ($team->members as $member)
                        @php
                          $admin = $member->isTeamAdmin() ? '<i class="fal fa-user-crown text-orange"></i> &nbsp;' : '';
                        @endphp
                        <tr>
                          <td>{!! $admin !!} {{ $member->name }}</td>
                          <td>{{ $member->email ?? '' }}</td>
                          <td>{{ $team->created_at->format('d-m-Y') }}</td>
                          <td class="td-actions text-right">
                            <form action="{{ route('team.destroy', $team) }}" method="post">
                              @csrf
                              @method('delete')

                              @unless(auth()->user()->id == $member->id || $member->isTeamAdmin())
                                @can('edit-member', $team)
                                  <a href="{{ route('member.edit', $member) }}"
                                    class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                                @endcan

                                @can('remove-member', $team)
                                  <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove delete-alert">
                                    <i class="fal fa-trash-alt"></i>
                                  </button>
                                @endcan
                              @endunless
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
            {{-- Lacks permissions for team management --}}
            @include('permission')
          @endcan
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
          searchPlaceholder: "Search accounts",
        },
        "columnDefs": [{
          "orderable": false,
          "targets": 3
        }, ],
      });
    });
  </script>
@endpush
