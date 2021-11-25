@extends('layouts.app', ['activePage' => 'buttons', 'menuParent' => 'components', 'titlePage' => __('Buttons')])

@section('content')
  <div class="content">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h3 class="card-title">Pick your Color</h3>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient">Default</button>
            <button class="btn btn-primary btn-gradient">Primary</button>
            <button class="btn btn-info btn-gradient">Info</button>
            <br>
            <button class="btn btn-success btn-gradient animation-on-hover" type="button" rel="tooltip" data-original-title="I'm special!" data-placement="bottom">Success</button>
            <button class="btn btn-warning btn-gradient">Warning</button>
            <button class="btn btn-danger btn-gradient">Danger</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h3 class="card-title">Buttons with Label</h3>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient">
              @icon('fal fa-chevron-left')
              Left
            </button>
            <button class="btn btn-primary btn-gradient">
              Right
              @icon('fal fa-chevron-right')
            </button>
            <button class="btn btn-info btn-gradient">
              @icon('fal fa-info-circle')
              Info
            </button>
            <br>
            <button class="btn btn-success btn-gradient">
              @icon('fal fa-check')
              Success
            </button>
            <button class="btn btn-warning btn-gradient">
              @icon('fal fa-alarm-clock')
              Warning
            </button>
            <button class="btn btn-danger btn-gradient">
              @icon('fal fa-trash-alt')
              Danger
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h3 class="card-title">Pick your Size</h3>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient btn-sm">Small</button>
            <button class="btn btn-primary btn-gradient">Regular</button>
            <button class="btn btn-primary btn-gradient btn-lg">Large</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h3 class="card-title">Pick your Style</h3>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient">Default</button>
            <button class="btn btn-primary btn-gradient rounded-pill">round</button>
            <button class="btn btn-primary btn-gradient rounded-pill">
              @icon('fal fa-heart')
              with icon
            </button>
            <button class="btn btn-primary btn-gradient rounded-pill btn-icon">
              @icon('fal fa-heart')
            </button>
            <button class="btn btn-primary btn-gradient btn-simple">
              simple
            </button>
            <button class="btn btn-primary btn-gradient btn-link">
              link
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h3 class="card-title">Pagination</h3>
          </div>
          <div class="card-body">
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-warning">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">5</a>
                </li>
              </ul>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Previous">
                    <span aria-hidden="true">@icon('fal fa-chevron-double-left')</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Next">
                    <span aria-hidden="true">@icon('fal fa-chevron-double-right')</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h3 class="card-title">Button Group</h3>
          </div>
          <div class="card-body">
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-gradient">Left</button>
              <button type="button" class="btn btn-info btn-gradient">Middle</button>
              <button type="button" class="btn btn-info btn-gradient">Right</button>
            </div>
            <br>
            <br>
            <div class="btn-group" data-toggle="buttons">
              <button type="button" class="btn rounded-pill btn-info btn-gradient">1</button>
              <button type="button" class="btn rounded-pill btn-info btn-gradient">2</button>
              <button type="button" class="btn rounded-pill btn-info btn-gradient">3</button>
              <button type="button" class="btn rounded-pill btn-info btn-gradient">4</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn rounded-pill btn-info btn-gradient">5</button>
              <button type="button" class="btn rounded-pill btn-info btn-gradient">6</button>
              <button type="button" class="btn rounded-pill btn-info btn-gradient">7</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card-header">
            <h3 class="card-title">Social buttons</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <p class="category">Default</p>
                <button class="btn btn-twitter">
                  @icon('fab fa-twitter')
                  Connect with Twitter
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-twitter">
                  @icon('fab fa-twitter')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon rounded-pill btn-twitter">
                  @icon('fab fa-twitter')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">Neutral</p>
                <button class="btn btn-icon btn-simple btn-twitter">
                  @icon('fab fa-twitter')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <p class="category">&nbsp;</p>
                <button class="btn btn-simple btn-twitter">
                  @icon('fab fa-twitter')
                  Connect with Twitter
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-facebook">
                  @icon('fab fa-facebook-square')
                  Share · 2.2k
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-facebook">
                  @icon('fab fa-facebook-f')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-facebook">
                  @icon('fab fa-facebook-f')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-facebook">
                  @icon('fab fa-facebook-square')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-facebook">
                  @icon('fab fa-facebook-square')
                  Share · 2.2k
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-google">
                  @icon('fab fa-google-plus-g')
                  Share on Google+
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-google">
                  @icon('fab fa-google-plus-g')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-google">
                  @icon('fab fa-google-plus-g')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-google">
                  @icon('fab fa-google-plus-g')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-google">
                  @icon('fab fa-google-plus-g')
                  Share on Google+
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-linkedin">
                  @icon('fab fa-linkedin')
                  Connect with Linkedin
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-linkedin">
                  @icon('fab fa-linkedin')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-linkedin">
                  @icon('fab fa-linkedin')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-linkedin">
                  @icon('fab fa-linkedin')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-linkedin">
                  @icon('fab fa-linkedin')
                  Connect with Linkedin
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-pinterest">
                  @icon('fab fa-pinterest')
                  Pint it · 212
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-pinterest">
                  @icon('fab fa-pinterest')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-pinterest">
                  @icon('fab fa-pinterest')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-pinterest">
                  @icon('fab fa-pinterest')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-pinterest">
                  @icon('fab fa-pinterest')
                  Pint it · 212
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-youtube">
                  @icon('fab fa-youtube')
                  View on Youtube
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-youtube">
                  @icon('fab fa-youtube')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-youtube">
                  @icon('fab fa-youtube')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-youtube">
                  @icon('fab fa-youtube')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-youtube">
                  @icon('fab fa-youtube')
                  View on Youtube
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-tumblr">
                  @icon('fab fa-tumblr-square')
                  Repost
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-tumblr">
                  @icon('fab fa-tumblr')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-tumblr">
                  @icon('fab fa-tumblr')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-tumblr">
                  @icon('fab fa-tumblr-square')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-tumblr">
                  @icon('fab fa-tumblr-square')
                  Repost
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-github">
                  @icon('fab fa-github')
                  Connect with Github
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-github">
                  @icon('fab fa-github')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-github">
                  @icon('fab fa-github')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-github">
                  @icon('fab fa-github')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-github">
                  @icon('fab fa-github')
                  Connect with Github
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-behance">
                  @icon('fab fa-behance-square')
                  Follow us
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-behance">
                  @icon('fab fa-behance')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-behance">
                  @icon('fab fa-behance')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-behance">
                  @icon('fab fa-behance')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-behance">
                  @icon('fab fa-behance-square')
                  Follow us
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-dribbble">
                  @icon('fab fa-dribbble')
                  Find us on Dribble
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-dribbble">
                  @icon('fab fa-dribbble')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-dribbble">
                  @icon('fab fa-dribbble')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-dribbble">
                  @icon('fab fa-dribbble')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-dribbble">
                  @icon('fab fa-dribbble')
                  Find us on Dribble
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-reddit">
                  @icon('fab fa-reddit')
                  Repost · 232
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-reddit">
                  @icon('fab fa-reddit')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon rounded-pill btn-reddit">
                  @icon('fab fa-reddit')
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-reddit">
                  @icon('fab fa-reddit')
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-reddit">
                  @icon('fab fa-reddit')
                  Repost · 232
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
