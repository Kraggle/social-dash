@extends('layouts.app', ['activePage' => 'datatables', 'menuParent' => 'examples', 'titlePage' => __('DataTables.net')])

@section('content')
  <div class="content">
    <div class="col-md-8 mx-auto">
      <h2 class="text-center">DataTables.net</h2>
      <p class="text-center">A beautiful plugin, highly flexible tool build upon the foundations of progressive
        enhancement, that adds all of these advanced features to any HTML table. Handcrafted by our friends. Please check
        out the
        <a href="https://datatables.net/" target="_blank">full documentation.</a>
      </p>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th class="sorting_desc_disabled sorting_asc_disabled text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm btn-neutral like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm btn-neutral  edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm btn-neutral remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm btn-neutral like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm btn-neutral  edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm btn-neutral remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td>43</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>19</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td>66</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>New York</td>
                  <td>64</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td>59</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm btn-neutral like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm btn-neutral  edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm btn-neutral remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td>35</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>New York</td>
                  <td>40</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sidney</td>
                  <td>23</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm btn-neutral like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm btn-neutral  edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm btn-neutral remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td>42</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm btn-neutral like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm btn-neutral  edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm btn-neutral remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>San Francisco</td>
                  <td>48</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td>20</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Sidney</td>
                  <td>37</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>London</td>
                  <td>53</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>London</td>
                  <td>27</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>San Francisco</td>
                  <td>22</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Edinburgh</td>
                  <td>46</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Howard Hatfield</td>
                  <td>Office Manager</td>
                  <td>San Francisco</td>
                  <td>51</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>San Francisco</td>
                  <td>41</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>San Francisco</td>
                  <td>62</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Timothy Mooney</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>37</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>New York</td>
                  <td>65</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
                <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th class="disabled-sorting text-end">Actions</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
@endpush
