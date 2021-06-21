@extends('layouts.app', ['activePage' => 'team-management', 'menuParent' => 'laravel', 'titlePage' => __('Team Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Teams') }}</h4>
                    </div>
                    <div class="card-body">
                        @can('create', App\Team::class)
                        <div class="row">
                            <div class="col-12 text-right mb-3">
                                <a href="{{ route('team.create') }}" class="btn btn-sm btn-primary">{{ __('Add team') }}</a>
                            </div>
                        </div>
                        @endcan
                        <div class="table-responsive">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                                <thead class="text-primary">
                                    <th>
                                        {{ __('Id') }}
                                    </th>
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Created at') }}
                                    </th>
                                    <th>
                                        {{ __('Updated at') }}
                                    </th>
                                    @can('manage-teams', App\User::class)
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    @endcan
                                </thead>
                                <tbody>
                                    @foreach($teams as $team)
                                    <tr>
                                        <td>
                                            {{ $team->id }}
                                        </td>
                                        <td>
                                            {{ $team->name }}
                                        </td>
                                        <td>
                                            {{ $team->created_at }}
                                        </td>
                                        <td>
                                            {{ $team->updated_at }}
                                        </td>
                                        @can('manage-teams', App\User::class)
                                        <td class="td-actions text-right">
                                            <form action="{{ route('team.destroy', $team) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                @can('update', $team)
                                                <a href="{{ route('team.edit', $team) }}" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                                                @endcan
                                                @if (auth()->user()->can('remove', $team))
                                                <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this team?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="tim-icons icon-simple-remove"></i>
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
<script>
    $(document).ready(function() {
        $('#datatables').fadeIn(1100);
        $('#datatables').DataTable({
            "pagingType": "full_numbers"
            , "lengthMenu": [
                [10, 25, 50, -1]
                , [10, 25, 50, "All"]
            ]
            , responsive: true
            , language: {
                search: "_INPUT_"
                , searchPlaceholder: "Search accounts"
            , }
            , "columnDefs": [{
                "orderable": false
                , "targets": 3
            }, ]
        , });
    });

</script>
@endpush