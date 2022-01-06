@extends('layouts.app', ['activePage' => 'scheduling', 'menuParent' => 'dashboard', 'titlePage' => __('Post
Scheduling')])

@section('content')
  <div class="content">

    <div class="card">
      <div class="card-header card-cap-bg">
        <h3 class="card-title">{{ __('Post Scheduling') }}</h3>
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <button class="nav-link active" id=" calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-pane" type="button" role="tab" aria-controls="calendar" aria-selected="true">
              @icon('fal fa-calendar-alt')
              {{ __('Calendar View') }}
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-pane" type="button" role="tab" aria-controls="list" aria-selected="false">
              @icon('fal fa-list-alt')
              {{ __('List View') }}
            </button>
          </li>
          <li class="flex-grow-1"></li>
          <li class="nav-item">
            <button class="nav-link fw-bold text-primary" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-pane" type="button" role="tab" aria-controls="list" aria-selected="false">
              @icon('fas fa-plus-square')
              {{ __('New Post') }}
            </button>
          </li>
        </ul>
      </div>

      <div class="card-body tab-content" id="tab-content">

        <div class="tab-pane fade show active" id="calendar-pane" role="tabpanel" aria-labelledby="calendar-tab">
          <div id="full-calendar"></div>
        </div>

        <div class="tab-pane fade row" id="list-pane" role="tabpanel" aria-labelledby="list-tab">
          @can('create', App\Item::class)
            <div class="row">
              <div class="col-12 text-end mb-3">
                <a href="{{ route('item.create') }}" class="btn btn-sm btn-primary btn-gradient">{{ __('Add Item') }}</a>
              </div>
            </div>
          @endcan
          <div class="table-responsive">
            <table id="datatable" class="table table-striped table-no-bordered table-hover" style="display:none">
              <caption></caption>
              <thead class="text-primary">
                <th scope="col">
                  {{ __('Picture') }}
                </th>
                <th scope="col">
                  {{ __('Description') }}
                </th>
                <th scope="col">
                  {{ __('Hashtags') }}
                </th>
                <th scope="col">
                  {{ __('Schedule Date') }}
                </th>
                <th scope="col">
                  {{ __('Schedule Time') }}
                </th>
                @can('manage-items', App\User::class)
                  <th scope="col" class="text-end">
                    {{ __('Actions') }}
                  </th>
                @endcan
              </thead>
              <tbody>
                {{-- @foreach ($items as $item)
                        <tr>
                          <td>
                            <img src="{{ $item->path() }}" alt="" style="max-width: 200px;">
                          </td>
                          <td>
                            {{ $item->name }}
                          </td>
                          <td>
                            {{ $item->category->name }}
                          </td>
                          <td>
                            @foreach ($item->tags as $tag)
                              <span class="badge badge-default"
                                style="background-color:{{ $tag->color }}">{{ $tag->name }}</span>
                            @endforeach
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                          @can('manage-items', App\User::class)
                            <td class="td-actions text-end">
                              <form action="{{ route('item.destroy', $item) }}" method="post">
                                @csrf
                                @method('delete')

                                @can('update', $item)
                                  <a href="{{ route('item.edit', $item) }}"
                                    class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i
                                      class="fal fa-pencil-alt"></i></a>
                                @endcan
                                @can('delete', $item)
                                  <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"
                                    data-original-title="" title=""
                                    onclick="confirm('{{ __('Are you sure you want to delete this item?') }}') ? this.parentElement.submit() : ''">
                                    @icon('fal fa-trash-alt')
                                  </button>
                                @endcan
                              </form>
                            </td>
                          @endcan
                        </tr>
                      @endforeach --}}
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane fade" id="new-pane" role="tabpanel" aria-labelledby="new-tab">

        </div>

      </div>

    </div>
  </div>
@endsection

@push('js')
  <script src="{{ asset('js/pages') }}/datatable-only.js" type="module"></script>
  <script src="{{ asset('js/pages') }}/scheduling.js" type="module"></script>
@endpush
