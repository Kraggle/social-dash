@extends('layouts.app', ['activePage' => 'regular-tables', 'menuParent' => 'examples', 'titlePage' => __('Regular Tables')])

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12 mb-5">
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title"> Simple Table</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="simple-table">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th class="text-center">
                      Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-center">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-center">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-center">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-center">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-center">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $78,615
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $98,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-5">
        <div class="card  card-plain">
          <div class="card-header">
            <h3 class="card-title"> Table on Plain Background</h3>
            <p class="category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="plain-table">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th class="text-center">
                      Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-center">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-center">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-center">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-center">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-center">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $78,615
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $98,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-5">
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title"> Regular Table with Colors</h3>
          </div>
          <div class="card-body table-full-width">
            <div class="table-responsive">
              <table class="table tablesorter " id="color-table">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th class="text-center">
                      Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-success">
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-center">
                      $36,738
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-center">
                      $23,789
                    </td>
                  </tr>
                  <tr class="table-info">
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-center">
                      $56,142
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-center">
                      $38,735
                    </td>
                  </tr>
                  <tr class="table-danger">
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-center">
                      $63,542
                    </td>
                  </tr>
                  <tr class="">
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $78,615
                    </td>
                  </tr>
                  <tr class="table-warning">
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $98,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      $("#simple-table").tablesorter();
      $("#color-table").tablesorter();
      $("#plain-table").tablesorter();
    });
  </script>
@endpush
