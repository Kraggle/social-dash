@extends('layouts.app', [
'activePage' => 'auth-test',
'menuParent' => '',
'titlePage' => __('Authorization Test')
])

@section('content')
<div class="content">
    <a href="https://api.instagram.com/oauth/authorize?client_id=476627210291548&redirect_uri=https://dashboard.social-shadow.com/auth&scope=user_profile,user_media&response_type=code" class="btn btn-instagram">
        <i class="fab fa-instagram"></i> Authorize with Instagram
    </a>
    <p>
        {{ $name ?? '' }}
    </p>
</div>
@endsection

@push('js')
<script>

</script>
@endpush
