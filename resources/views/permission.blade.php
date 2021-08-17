<div class="row justify-content-center">
  <div class="card col-md-6">
    <div class="card-header">
      {{-- <h3 class="card-title">Error</h3> --}}
    </div>
    <div class="card-body mt-4">
      <div class="row justify-content-center">
        <div class="col-md-auto">
          <i class="fad fa-lock-alt text-warning" style="font-size:250px"></i>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-auto my-5 px-5">
          <p class="fw-bold text-uppercase text-center fz-xl">
            You don't seem to have the correct permissions to access to this page.
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-auto mb-5">
          <a href="{{ url()->previous() }}" class="btn btn-lg btn-danger btn-gradient rounded-pill">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
