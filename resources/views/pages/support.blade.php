@extends('layouts.app', ['activePage' => 'timeline', 'menuParent' => 'pages', 'titlePage' => __('Support')])

@section('content')
  <div class="content">
    <div class="header text-center">
      <h3 class="title">Live Support</h3>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="timeline">

          <li class="timeline-end">
            <div class="timeline-badge bg-danger">
              <i class="fal fa-comments"></i>
            </div>
            <div class="card card-timeline">
              <div class="card-header">
                <span class="badge rounded-pill bg-danger">Cory Beevers</span>
              </div>
              <div class="card-body">
                <p>If I had a problem or wanted to request a new feature to be available on the tool I would type it here. Once a message has been sent, it will send us an email with the query for us to reply to.</p>
                <p>This would be us responding with our feed back or support on the topic in discussion. We can add in different solutions for the user to achieve what they want or even request to developers for specific new features to be included.</p>
              </div>
              <div class="card-footer">
                <span class="card-describe">
                  <i class="fal fa-clock"></i> 2 days ago
                </span>
                <button class="btn btn-sm btn-indigo rounded-pill d-none">Reply</button>
              </div>
            </div>
          </li>

          <li class="timeline-start">
            <div class="timeline-badge bg-warning">
              <i class="fal fa-comments"></i>
            </div>
            <div class="card card-timeline">
              <div class="card-header">
                <span class="badge rounded-pill bg-warning">Social Shadow</span>
              </div>
              <div class="card-body">
                <p>This would be us responding with our feed back or support on the topic in discussion. We can add in different solutions for the user to achieve what they want or even request to developers for specific new features to be included.</p>
              </div>
              <div class="card-footer">
                <span class="card-describe">
                  <i class="fal fa-clock"></i> 1 day ago
                </span>
                <button class="btn btn-sm btn-indigo rounded-pill">Reply</button>
              </div>
          </li>

          <li class="timeline-end">
            <div class="timeline-badge bg-danger">
              <i class="fal fa-comments"></i>
            </div>
            <div class="card card-timeline">
              <div class="card-header">
                <span class="badge rounded-pill bg-danger">Cory Beevers</span>
              </div>
              <div class="card-body">
                <p>If I had a problem or wanted to request a new feature to be available on the tool I would type it here. Once a message has been sent, it will send us an email with the query for us to reply to.</p>
              </div>
              <div class="card-footer">
                <span class="card-describe">
                  <i class="fal fa-clock"></i> 16 hours ago
                </span>
                <button class="btn btn-sm btn-indigo rounded-pill d-none">Reply</button>
              </div>
            </div>
          </li>

          <li class="timeline-start">
            <div class="timeline-badge bg-warning">
              <i class="fal fa-comments"></i>
            </div>
            <div class="card card-timeline">
              <div class="card-header">
                <span class="badge rounded-pill bg-warning">Social Shadow</span>
              </div>
              <div class="card-body">
                <p>This would be us responding with our feed back or support on the topic in discussion. We can add in different solutions for the user to achieve what they want or even request to developers for specific new features to be included.</p>
                <p>If I had a problem or wanted to request a new feature to be available on the tool I would type it here. Once a message has been sent, it will send us an email with the query for us to reply to.</p>
              </div>
              <div class="card-footer">
                <span class="card-describe">
                  <i class="fal fa-clock"></i> 4 hours ago
                </span>
                <button class="btn btn-sm btn-indigo rounded-pill">Reply</button>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
