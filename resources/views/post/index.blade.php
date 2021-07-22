@extends('layouts.app', ['activePage' => 'post-management', 'menuParent' => 'laravel', 'titlePage' => __('Post
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('Posts') }}</h4>
            </div>
            <div class="card-body">
              @can('create', App\Post::class)
                <div class="row">
                  <div class="col-12 text-right mb-3">
                    <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">{{ __('Add post') }}</a>
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
                      {{ __('Description') }}
                    </th>
                    <th>
                      {{ __('Picture') }}
                    </th>
                    <th>
                      {{ __('Hashtags') }}
                    </th>
                    <th>
                      {{ __('Post at') }}
                    </th>
                    <th>
                      {{ __('Account') }}
                    </th>
                    <th>
                      {{ __('Team') }}
                    </th>
                    <th>
                      {{ __('Added On') }}
                    </th>
                    @can('manage-posts', App\User::class)
                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>
                          {{ $post->id }}
                        </td>
                        <td>
                          {{ $post->description }}
                        </td>
                        <td>
                          {{ $post->picture }}
                        </td>
                        <td>
                          {{ $post->hashtags }}
                        </td>
                        <td>
                          {{ $post->post_at }}
                        </td>
                        <td>
                          {{ $post->account }}
                        </td>
                        <td>
                          {{ $post->team }}
                        </td>
                        <td>
                          {{ $post->created_at->format('d-m-Y') }}
                        </td>
                        @can('manage-posts', App\User::class)
                          <td class="td-actions text-right">
                            <form action="{{ route('post.destroy', $post) }}" method="post">
                              @csrf
                              @method('delete')

                              @can('update', $post)
                                <a href="{{ route('post.edit', $post) }}"
                                  class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                              @endcan
                              @if (auth()->user()->can('remove', $post))
                                <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove"
                                  data-original-title="" title=""
                                  onclick="confirm('{{ __('Are you sure you want to delete this post?') }}') ? this.parentElement.submit() : ''">
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
