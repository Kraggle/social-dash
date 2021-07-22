@extends('layouts.app', ['activePage' => 'package-management', 'menuParent' => 'laravel', 'titlePage' => __('Package
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('Packages') }}</h4>
            </div>
            <div class="card-body">
              @can('create', App\Package::class)
                <div class="row">
                  <div class="col-12 text-right mb-3">
                    <a href="{{ route('package.create') }}" class="btn btn-primary btn-sm">{{ __('Add package') }}</a>
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
                      {{ __('Description') }}
                    </th>
                    <th>
                      {{ __('Cost') }}
                    </th>
                    <th>
                      {{ __('Creation date') }}
                    </th>
                    @can('manage-users', App\User::class)
                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($packages as $package)
                      <tr>
                        <td>
                          {{ $package->name }}
                        </td>
                        <td>
                          {{ $package->description }}
                        </td>
                        <td>
                          £{{ $package->cost }}
                        </td>
                        <td>
                          {{ $package->created_at->format('d-m-Y') }}
                        </td>
                        @can('manage-users', App\User::class)
                          <td class="td-actions text-right">
                            @can('update', $package)
                              <a href="{{ route('package.edit', $package) }}"
                                class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
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
          searchPlaceholder: "Search packages",
        },
        "columnDefs": [{
          "orderable": false,
          "targets": 3
        }, ],
      });
    });
  </script>
@endpush
