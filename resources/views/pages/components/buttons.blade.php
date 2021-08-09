@extends('layouts.app', ['activePage' => 'buttons', 'menuParent' => 'components', 'titlePage' => __('Buttons')])

@section('content')
  <div class="content">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Color</h4>
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
            <h4 class="card-title">Buttons with Label</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient">
              <i class="fal fa-chevron-left"></i> Left
            </button>
            <button class="btn btn-primary btn-gradient">
              Right
              <i class="fal fa-chevron-right"></i>
            </button>
            <button class="btn btn-info btn-gradient">
              <i class="fal fa-info-circle"></i> Info
            </button>
            <br>
            <button class="btn btn-success btn-gradient">
              <i class="fal fa-check"></i> Success
            </button>
            <button class="btn btn-warning btn-gradient">
              <i class="fal fa-alarm-clock"></i> Warning
            </button>
            <button class="btn btn-danger btn-gradient">
              <i class="fal fa-trash-alt"></i> Danger
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Size</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient btn-sm">Small</button>
            <button class="btn btn-primary btn-gradient">Regular</button>
            <button class="btn btn-primary btn-gradient btn-lg">Large</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Style</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-gradient">Default</button>
            <button class="btn btn-primary btn-gradient btn-round">round</button>
            <button class="btn btn-primary btn-gradient btn-round">
              <i class="fal fa-heart"></i> with icon
            </button>
            <button class="btn btn-primary btn-gradient btn-round btn-icon">
              <i class="fal fa-heart"></i>
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
            <h4 class="card-title">Pagination</h4>
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
                    <span aria-hidden="true"><i class="fal fa-chevron-double-left" aria-hidden="true"></i></span>
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
                    <span aria-hidden="true"><i class="fal fa-chevron-double-right" aria-hidden="true"></i></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Button Group</h4>
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
              <button type="button" class="btn btn-round btn-info btn-gradient">1</button>
              <button type="button" class="btn btn-round btn-info btn-gradient">2</button>
              <button type="button" class="btn btn-round btn-info btn-gradient">3</button>
              <button type="button" class="btn btn-round btn-info btn-gradient">4</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-round btn-info btn-gradient">5</button>
              <button type="button" class="btn btn-round btn-info btn-gradient">6</button>
              <button type="button" class="btn btn-round btn-info btn-gradient">7</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card-header">
            <h4 class="card-title">Social buttons</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <p class="category">Default</p>
                <button class="btn btn-twitter">
                  <i class="fab fa-twitter"></i> Connect with Twitter
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">Neutral</p>
                <button class="btn btn-icon btn-simple btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <p class="category">&nbsp;</p>
                <button class="btn btn-simple btn-twitter">
                  <i class="fab fa-twitter"></i> Connect with Twitter
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-facebook">
                  <i class="fab fa-facebook-square"></i> Share · 2.2k
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-facebook">
                  <i class="fab fa-facebook-f"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook-f"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-facebook">
                  <i class="fab fa-facebook-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-facebook">
                  <i class="fab fa-facebook-square"></i> Share · 2.2k
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-google">
                  <i class="fab fa-google-plus-g"></i> Share on Google+
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-google">
                  <i class="fab fa-google-plus-g"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-google">
                  <i class="fab fa-google-plus-g"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-google">
                  <i class="fab fa-google-plus-g"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-google">
                  <i class="fab fa-google-plus-g"></i> Share on Google+
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-linkedin">
                  <i class="fab fa-linkedin"></i> Connect with Linkedin
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-linkedin">
                  <i class="fab fa-linkedin"></i> Connect with Linkedin
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-pinterest">
                  <i class="fab fa-pinterest"></i> Pint it · 212
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-pinterest">
                  <i class="fab fa-pinterest"></i> Pint it · 212
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-youtube">
                  <i class="fab fa-youtube"></i> View on Youtube
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-youtube">
                  <i class="fab fa-youtube"></i> View on Youtube
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-tumblr">
                  <i class="fab fa-tumblr-square"></i> Repost
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-tumblr">
                  <i class="fab fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-tumblr">
                  <i class="fab fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-tumblr">
                  <i class="fab fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-tumblr">
                  <i class="fab fa-tumblr-square"></i> Repost
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-github">
                  <i class="fab fa-github"></i> Connect with Github
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-github">
                  <i class="fab fa-github"></i> Connect with Github
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-behance">
                  <i class="fab fa-behance-square"></i> Follow us
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-behance">
                  <i class="fab fa-behance-square"></i> Follow us
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-dribbble">
                  <i class="fab fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-dribbble">
                  <i class="fab fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-reddit">
                  <i class="fab fa-reddit"></i> Repost · 232
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-reddit">
                  <i class="fab fa-reddit"></i> Repost · 232
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
