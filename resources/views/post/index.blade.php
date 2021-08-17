@extends('layouts.app', ['activePage' => 'post-management', 'menuParent' => 'laravel', 'titlePage' => __('Post
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title d-inline-block">{{ __('Posts') }}</h3>
              @can('create', App\Models\Post::class)
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary btn-gradient float-end">
                  {{ __('Add post') }}
                </a>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none" data-search-placeholder="Search posts...">
                  <thead class="text-primary">
                    <th>{{ __('Id') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Picture') }}</th>
                    <th>{{ __('Hashtags') }}</th>
                    <th>{{ __('Post at') }}</th>
                    <th>{{ __('Account') }}</th>
                    <th>{{ __('Team') }}</th>
                    <th>{{ __('Added On') }}</th>
                    @can('manage-posts', App\Models\User::class)
                      <th class="text-end dt-nosort">
                        {{ __('Actions') }}
                      </th>
                    @endcan
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->picture }}</td>
                        <td>{{ $post->hashtags }}</td>
                        <td>{{ $post->post_at }}</td>
                        <td>{{ $post->account }}</td>
                        <td>{{ $post->team }}</td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                        @can('manage-posts', App\Models\User::class)
                          <td class="td-actions text-end">
                            <form action="{{ route('post.destroy', $post) }}" method="post">
                              @csrf
                              @method('delete')

                              @can('update', $post)
                                <a href="{{ route('post.edit', $post) }}" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit" data-bs-toggle="tooltip" title="{{ __('Edit') }}">
                                  <i class="fal fa-pencil-alt"></i>
                                </a>
                              @endcan
                              @if (auth()->user()->can('remove', $post))
                                <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove" data-bs-toggle="tooltip" title="{{ __('Delete') }}">
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
  <script type="module" src="{{ asset('js') }}/pages/datatable-only.js"></script>
@endpush
