@extends('layouts.app', ['activePage' => 'timeline', 'menuParent' => 'pages', 'titlePage' => __('Timeline')])

@section('content')
<div class="content">
    <div class="header text-center">
        <h3 class="title">Live Support</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-timeline card-plain">
                <div class="card-body">
                    <ul class="timeline">
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="badge badge-pill badge-danger">Cory Beevers</span>
                                </div>
                                <div class="timeline-body">
                                    <p>If I had a problem or wanted to request a new feature to be available on the tool I would type it here. Once a message has been sent, it will send us an email with the query for us to reply to.
                                    </p>
                                </div>
                                <h6>
                                    <i class="ti-time"></i> 11 hours ago via Twitter
                                </h6>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge warning">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="badge badge-pill badge-warning">Social Shadow</span>
                                </div>
                                <div class="timeline-body">
                                    <p>This would be us responding with our feed back or support on the topic in discussion. We can add in different solutions for the user to achieve what they want or even request to developers for specific new features to be included.</p>
                                </div>
                                <div class="timeline-footer">
                                    <div class="dropdown float-right">
                                        <button type="button" class="btn btn-round btn-warning dropdown-toggle float-right" data-toggle="dropdown">
                                            <i>respond</i>
                                        </button>
                                        <div class="dropdown-menu float-right">
                                            <a class="dropdown-item float-right" href="#">Reply</a>
                                            <a class="dropdown-item float-right" href="#">Like</a>
                                            <a class="dropdown-item float-right" href="#">Report</a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="badge badge-pill badge-danger">Cory Beevers</span>
                                </div>
                                <div class="timeline-body">
                                    <p>If I had a problem or wanted to request a new feature to be available on the tool I would type it here. Once a message has been sent, it will send us an email with the query for us to reply to.</p>
                                    <hr>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge warning">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="badge badge-pill badge-warning">Social Shadow</span>
                                </div>
                                <div class="timeline-body">
                                    <p>This would be us responding with our feed back or support on the topic in discussion. We can add in different solutions for the user to achieve what they want or even request to developers for specific new features to be included.</p>
                                </div>
                                <div class="timeline-footer">
                                    <div class="dropdown float-right">
                                        <button type="button" class="btn btn-round btn-warning dropdown-toggle float-right" data-toggle="dropdown">
                                            <i>respond</i>
                                        </button>
                                        <div class="dropdown-menu float-right">
                                            <a class="dropdown-item float-right" href="#">Reply</a>
                                            <a class="dropdown-item float-right" href="#">Like</a>
                                            <a class="dropdown-item float-right" href="#">Report</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
