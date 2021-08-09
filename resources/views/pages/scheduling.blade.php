@extends('layouts.app', ['activePage' => 'scheduling', 'menuParent' => 'dashboard', 'titlePage' => __('Post
Scheduling')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12 card">
          <div class="card-header">
            <h4 class="card-title">{{ __('Scheduling') }}</h4>
          </div>

          <div class="card-body row">
            <ul class="col-12 nav nav-pills nav-pills-warning">
              <li class="nav-item">
                <button class="nav-link active" id=" calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-pane" type="button" role="tab" aria-controls="calendar" aria-selected="true">
                  {{ __('Calendar') }}
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-pane" type="button" role="tab" aria-controls="list" aria-selected="false">
                  {{ __('List') }}
                </button>
              </li>
            </ul>

            <div class="col-12 tab-content tab-space" id="tab-content">

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
                    <thead class="text-primary">
                      <th>
                        {{ __('Picture') }}
                      </th>
                      <th>
                        {{ __('Description') }}
                      </th>
                      <th>
                        {{ __('Hashtags') }}
                      </th>
                      <th>
                        {{ __('Schedule Date') }}
                      </th>
                      <th>
                        {{ __('Schedule Time') }}
                      </th>
                      @can('manage-items', App\User::class)
                        <th class="text-end">
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
                                    <i class="fal fa-trash-alt"></i>
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
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  {{-- <script src="{{ asset('js/plugins') }}/full-calendar/fullcalendar.js"></script> --}}
  <script src="{{ asset('js/pages') }}/datatable-only.js" type="module"></script>
  <script src="{{ asset('js/pages') }}/scheduling.js" type="module"></script>
@endpush
