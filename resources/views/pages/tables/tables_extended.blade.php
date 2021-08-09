@extends('layouts.app', ['activePage' => 'extended', 'menuParent' => 'tables', 'titlePage' => __('Extended Tables')])

@section('content')
  <div class="content">
    <div class="row">
      <ol class="breadcrumb bg-transparent ms-3">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Library</a>
        </li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="tools float-end">
              <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-bs-toggle="dropdown">
                  <i class="fal fa-cog"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <h4 class="card-title">Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Job Position
                    </th>
                    <th class="text-center">
                      Since
                    </th>
                    <th class="text-end">
                      Salary
                    </th>
                    <th class="text-end">
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>
                      Andrew Mike
                    </td>
                    <td>
                      Develop
                    </td>
                    <td class="text-center">
                      2013
                    </td>
                    <td class="text-end">
                      € 99,225
                    </td>
                    <td class="text-end">
                      <button type="button" rel="tooltip" class="btn btn-success btn-gradient btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Refresh">
                        <i class="fal fa-redo"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-gradient btn-link btn-sm " data-original-title="Tooltip on top" title="Delete">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/robi.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>
                      John Doe
                    </td>
                    <td>
                      Design
                    </td>
                    <td class="text-center">
                      2012
                    </td>
                    <td class="text-end">
                      € 89,241
                    </td>
                    <td class="text-end">
                      <button type="button" rel="tooltip" class="btn btn-success btn-gradient btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Refresh">
                        <i class="fal fa-redo"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-gradient btn-link btn-sm " data-original-title="Tooltip on top" title="Delete">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/lora.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>
                      Alex Mike
                    </td>
                    <td>
                      Design
                    </td>
                    <td class="text-center">
                      2010
                    </td>
                    <td class="text-end">
                      € 92,144
                    </td>
                    <td class="text-end">
                      <button type="button" rel="tooltip" class="btn btn-success btn-gradient btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Refresh">
                        <i class="fal fa-redo"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-gradient btn-link btn-sm " data-original-title="Tooltip on top" title="Delete">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/jana.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>
                      Mike Monday
                    </td>
                    <td>
                      Marketing
                    </td>
                    <td class="text-center">
                      2013
                    </td>
                    <td class="text-end">
                      € 49,990
                    </td>
                    <td class="text-end">
                      <button type="button" rel="tooltip" class="btn btn-success btn-gradient btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Tooltip on top" title="Refresh">
                        <i class="fal fa-redo"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-gradient btn-link btn-sm   btn-neutral  " data-original-title="Tooltip on top" title="Delete">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/robi.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>
                      Paul Dickens
                    </td>
                    <td>
                      Communication
                    </td>
                    <td class="text-center">
                      2015
                    </td>
                    <td class="text-end">
                      € 69,201
                    </td>
                    <td class="text-end">
                      <button type="button" rel="tooltip" class="btn btn-success btn-gradient btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Tooltip on top" title="Refresh">
                        <i class="fal fa-redo"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-gradient btn-link btn-sm   btn-neutral  " data-original-title="Tooltip on top" title="Delete">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/emilyz.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>
                      Manuel Rico
                    </td>
                    <td>
                      Manager
                    </td>
                    <td class="text-center">
                      2012
                    </td>
                    <td class="text-end">
                      € 99,201
                    </td>
                    <td class="text-end">
                      <button type="button" rel="tooltip" class="btn btn-success btn-gradient btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Tooltip on top" title="Refresh">
                        <i class="fal fa-redo"></i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger btn-gradient btn-link btn-sm   btn-neutral  " data-original-title="Tooltip on top" title="Delete">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="tools float-end">
              <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-bs-toggle="dropdown">
                  <i class="fal fa-cog"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <h4 class="card-title">Striped Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead class="text-primary">
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>
                      Product Name
                    </th>
                    <th>
                      Type
                    </th>
                    <th>
                      Milestone
                    </th>
                    <th class="text-center">
                      Qty
                    </th>
                    <th class="text-end">
                      Price
                    </th>
                    <th class="text-end">
                      Amount
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked="">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Moleskine Agenda
                    </td>
                    <td>
                      Office
                    </td>
                    <td>
                      <div class="progress-container">
                        <span class="progress-badge">v1.2.0</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="progress-value">25%</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      25
                    </td>
                    <td class="text-end">
                      € 49
                    </td>
                    <td class="text-end">
                      € 1,225
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Stabilo Pen
                    </td>
                    <td>
                      Office
                    </td>
                    <td>
                      <div class="progress-container">
                        <span class="progress-badge">v1.4.0</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <span class="progress-value">45%</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      30
                    </td>
                    <td class="text-end">
                      € 10
                    </td>
                    <td class="text-end">
                      € 300
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked="">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      A4 Paper Pack
                    </td>
                    <td>
                      Office
                    </td>
                    <td>
                      <div class="progress-container">
                        <span class="progress-badge">v2.0.0</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                            <span class="progress-value">10%</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      50
                    </td>
                    <td class="text-end">
                      € 10.99
                    </td>
                    <td class="text-end">
                      € 109
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Apple iPad
                    </td>
                    <td>
                      Meeting
                    </td>
                    <td>
                      <div class="progress-container">
                        <span class="progress-badge">v1.5.0</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="progress-value">80%</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      10
                    </td>
                    <td class="text-end">
                      € 499.00
                    </td>
                    <td class="text-end">
                      € 4,990
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked="">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      Apple iPhone
                    </td>
                    <td>
                      Communication
                    </td>
                    <td>
                      <div class="progress-container">
                        <span class="progress-badge">v1.0.0</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                            <span class="progress-value">30%</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      10
                    </td>
                    <td class="text-end">
                      € 599.00
                    </td>
                    <td class="text-end">
                      € 5,999
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5"></td>
                    <td class="td-total">Total</td>
                    <td class="td-price">€ 35,999</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="tools float-end">
              <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-bs-toggle="dropdown">
                  <i class="fal fa-cog"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <a class="dropdown-item text-danger" href="javascript:void(0)">Remove Data</a>
                </div>
              </div>
            </div>
            <h4 class="card-title">Shopping Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-shopping">
                <thead class="">
                  <tr>
                    <th class="text-center">
                    </th>
                    <th>
                      Product
                    </th>
                    <th>
                      Color
                    </th>
                    <th class="text-end">
                      Size
                    </th>
                    <th class="text-end">
                      Price
                    </th>
                    <th class="text-end">
                      Qty
                    </th>
                    <th class="text-end">
                      Amount
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="{{ asset('images') }}/jacket.png" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="javascript:void(0)">Suede Biker Jacket</a>
                      <br>
                      <small>by Cristianis</small>
                    </td>
                    <td>
                      Black
                    </td>
                    <td class="td-number">
                      XS
                    </td>
                    <td class="td-number">
                      <small>€</small>3490
                    </td>
                    <td class="td-number">
                      <div class="btn-group">
                        <button class="btn btn-info btn-gradient btn-simple btn-sm"> <i class="fal fa-trash-alt"></i>
                        </button>
                        <button class="btn btn-info btn-gradient btn-sm"> <i class="fal fa-plus"></i> </button>
                      </div>
                      1
                    </td>
                    <td class="td-number">
                      <small>€</small>3490
                    </td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" data-placement="top" title="" class="btn btn-primary btn-gradient btn-link" data-original-title="Remove item">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="{{ asset('images') }}/t-shirt.png" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="javascript:void(0)">Jersey T-Shirt</a>
                      <br>
                      <small>by Jerry</small>
                    </td>
                    <td>
                      Black
                    </td>
                    <td class="td-number">
                      M
                    </td>
                    <td class="td-number">
                      <small>€</small>235
                    </td>
                    <td class="td-number">
                      <div class="btn-group">
                        <button class="btn btn-info btn-gradient btn-simple btn-sm"> <i class="fal fa-trash-alt"></i>
                        </button>
                        <button class="btn btn-info btn-gradient btn-sm"> <i class="fal fa-plus"></i> </button>
                      </div>
                      2
                    </td>
                    <td class="td-number">
                      <small>€</small>470
                    </td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" data-placement="top" title="" class="btn btn-primary btn-gradient btn-link" data-original-title="Remove item">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="{{ asset('images') }}/gucci.png" alt="...">
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="javascript:void(0)">Slim-Fit Swim Short</a>
                      <br>
                      <small>by Panini</small>
                    </td>
                    <td>
                      Red
                    </td>
                    <td class="td-number">
                      L
                    </td>
                    <td class="td-number">
                      <small>€</small>140
                    </td>
                    <td class="td-number">
                      <div class="btn-group">
                        <button class="btn btn-info btn-gradient btn-simple btn-sm"> <i class="fal fa-trash-alt"></i>
                        </button>
                        <button class="btn btn-info btn-gradient btn-sm"> <i class="fal fa-plus"></i> </button>
                      </div>
                      1
                    </td>
                    <td class="td-number">
                      <small>€</small>140
                    </td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" data-placement="top" title="" class="btn btn-primary btn-gradient btn-link" data-original-title="Remove item">
                        <i class="fal fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5">
                    </td>
                    <td class="td-total">
                      Total
                    </td>
                    <td class="td-price">
                      <small>€</small>4100
                    </td>
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button type="button" rel="tooltip" class="btn btn-info btn-gradient btn-round float-end me-5" data-original-title="" title="">
                Complete Purchase
                <i class="fal fa-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
