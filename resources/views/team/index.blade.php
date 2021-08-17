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
                <h3 class="card-title d-inline-block">{{ __('Teams') }}</h3>
                @can('create', App\Models\Team::class)
                  <a href="{{ route('team.create') }}" class="btn btn-sm btn-primary btn-gradient float-end">
                    {{ __('Add team') }}
                  </a>
                @endcan
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary" data-search-placeholder="Search teams...">
                      <th>{{ __('Name') }}</th>
                      <th>{{ __('Package') }}</th>
                      <th>{{ __('Accounts') }}</th>
                      <th>{{ __('Members') }}</th>
                      <th>{{ __('Creation Date') }}</th>
                      <th class="text-end dt-nosort">{{ __('Actions') }}</th>
                    </thead>
                    <tbody>
                      @foreach ($teams as $team)
                        <tr>
                          <td>{{ $team->name }}</td>
                          <td>{{ $team->package->name ?? '' }}</td>
                          <td>{{ $team->accounts->count() }}</td>
                          <td>{{ $team->members->count() }}</td>
                          <td>{{ $team->created_at->format('d-m-Y') }}</td>
                          <td class="td-actions text-end">
                            <form action="{{ route('team.destroy', $team) }}" method="post">
                              @csrf
                              @method('delete')

                              @can('update', $team)
                                <a href="{{ route('team.edit', $team) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" title="{{ __('Edit') }}">
                                  <i class="fal fa-pencil-alt"></i>
                                </a>
                              @endcan
                              @if (auth()->user()->can('remove', $team))
                                <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove delete-alert" title="{{ __('Delete') }}">
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
                <h3 class="card-title d-inline-block">{{ __('Team Management') }}</h3>
                @can('add-member', $team)
                  <a href="{{ route('member.create') }}" class="btn btn-sm btn-primary btn-gradient float-end">
                    {{ __('Add team member') }}
                  </a>
                @endcan
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search teams...">
                    <thead class="text-primary">
                      <th>{{ __('Name') }}</th>
                      <th>{{ __('Email') }}</th>
                      <th>{{ __('Member Since') }}</th>
                      <th class="text-end dt-nosort">{{ __('Actions') }}</th>
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
                          <td class="td-actions text-end">
                            <form action="{{ route('team.destroy', $team) }}" method="post">
                              @csrf
                              @method('delete')

                              @unless(auth()->user()->id == $member->id || $member->isTeamAdmin())
                                @can('edit-member', $team)
                                  <a href="{{ route('member.edit', $member) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-bs-toggle="tooltip" title="{{ __('Edit') }}">
                                    <i class="fal fa-pencil-alt"></i>
                                  </a>
                                @endcan

                                @can('remove-member', $team)
                                  <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove delete-alert" data-bs-toggle="tooltip" title="{{ __('Delete') }}">
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
  <script type="module" src="{{ asset('js') }}/pages/datatable-only.js"></script>
@endpush
