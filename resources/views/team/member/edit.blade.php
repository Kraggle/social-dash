@extends('layouts.app', ['activePage' => 'team-management', 'menuParent' => 'laravel', 'titlePage' => __('Member
Permissions')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @unless(auth()->user()->id == $member->id || $member->isTeamAdmin())
            @can('edit-member', $member->team)
              <form method="post" enctype="multipart/form-data" action="{{ route('member.update', $member) }}" autocomplete="off">
                @csrf
                @method('put')

                <div class="card">
                  <div class="card-header row">
                    <h4 class="card-title col-md-6">{{ __('Team Member') }}</h4>

                    <div class="col-md-6 mb-3 text-end">
                      <a href="{{ route('team.index') }}" class="btn btn-sm btn-warning btn-gradient">{{ __('Back to list') }}</a>
                    </div>
                  </div>
                  <div class="card-body ">

                    <div class="row justify-content-center">
                      <h4 class="col-12 text-center fz-xl"><strong>{{ $member->name }}'s</strong> Permissions</h4>

                      {{-- Member --}}
                      <div class="row col-md-3 form-wrap mx-3 align-content-start">
                        <span class="form-wrap-title">Team Members</span>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[member][create]',
                          'placeholder' => 'Add team members',
                          'value' => $member->permission->member->create ?? false
                          ]])
                        </div>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[member][update]',
                          'placeholder' => 'Set team member permissions',
                          'value' => $member->permission->member->update ?? false
                          ]])
                        </div>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[member][delete]',
                          'placeholder' => 'Remove team members',
                          'value' => $member->permission->member->delete ?? false
                          ]])
                        </div>

                      </div>

                      {{-- Account --}}
                      <div class="row col-md-3 form-wrap mx-3 align-content-start">
                        <span class="form-wrap-title">Instagram Accounts</span>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[account][create]',
                          'placeholder' => 'Add instagram accounts',
                          'value' => $member->permission->account->create ?? false
                          ]])
                        </div>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[account][update]',
                          'placeholder' => 'Update instagram accounts',
                          'value' => $member->permission->account->update ?? false
                          ]])
                        </div>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[account][delete]',
                          'placeholder' => 'Remove instagram accounts',
                          'value' => $member->permission->account->delete ?? false
                          ]])
                        </div>

                      </div>

                      {{-- Clients --}}
                      <div class="row col-md-3 form-wrap mx-3 align-content-start">
                        <span class="form-wrap-title">Clients</span>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[client][add]',
                          'placeholder' => 'Share with clients',
                          'value' => $member->permission->client->add ?? false
                          ]])
                        </div>

                        <div class="col-sm-12">
                          @include('forms.check', ['options' => [
                          'name' => 'permission[client][remove]',
                          'placeholder' => 'Unshare with clients',
                          'value' => $member->permission->client->remove ?? false
                          ]])
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer mx-auto">
                    <button type="submit" class="btn btn-primary btn-gradient">{{ __('Save') }}</button>
                  </div>
                </div>
              </form>
            @endcan

          @else
            @include('permission')
          @endunless
        </div>
      </div>
    </div>
  </div>
@endsection
