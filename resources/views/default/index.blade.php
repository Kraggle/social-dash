@extends('layouts.app', ['activePage' => 'default-management', 'menuParent' => 'laravel', 'titlePage' => __('Default
Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Defaults') }}</h4>
                        </div>
                        <div class="card-body">
                            @can('create', App\Defaults::class)
                                <div class="row">
                                    <div class="col-12 text-right mb-3">
                                        <a href="{{ route('default.create') }}"
                                            class="btn btn-sm btn-primary">{{ __('Add default') }}</a>
                                    </div>
                                </div>
                            @endcan
                            <div class="table-responsive">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    style="display:none">
                                    <thead class="text-primary">
                                        <th>
                                            {{ __('Id') }}
                                        </th>
                                        <th>
                                            {{ __('Name') }}
                                        </th>
                                        <th>
                                            {{ __('Description') }}
                                        </th>
                                        <th>
                                            {{ __('For Table') }}
                                        </th>
                                        @can('manage-defaults', App\User::class)
                                            <th class="text-right">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcan
                                    </thead>
                                    <tbody>
                                        @foreach ($defaults as $default)
                                            <tr>
                                                <td>
                                                    {{ $default->id }}
                                                </td>
                                                <td>
                                                    {{ $default->name }}
                                                </td>
                                                <td>
                                                    {{ $default->description }}
                                                </td>
                                                <td>
                                                    {{ $default->for_table }}
                                                </td>
                                                @can('manage-defaults', App\User::class)
                                                    <td class="td-actions text-right">
                                                        <form action="{{ route('default.destroy', $default) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            @can('update', $default)
                                                                <a href="{{ route('default.edit', $default) }}"
                                                                    class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                                                        class="tim-icons icon-pencil"></i></a>
                                                            @endcan
                                                            @if (auth()->user()->can('remove', $default))
                                                                <button type="button"
                                                                    class="btn btn-link btn-danger btn-icon btn-sm remove"
                                                                    data-original-title="" title=""
                                                                    onclick="confirm('{{ __('Are you sure you want to delete this default?') }}') ? this.parentElement.submit() : ''">
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
