<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images') }}/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('images') }}/favicon.png">
  <title>
    White Dashboard PRO by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css') }}/white-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('white') }}/demo/demo.css" rel="stylesheet" />
</head>

<body class="sidebar-mini rtl menu-on-right white-content">
  <div class="wrapper">
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="fal fa-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="fal fa-list-ul visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            ط م
          </a>
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            توقيت الإبداعية
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="{{ route('home') }}">
              <i class="fal fa-chart-pie-alt"></i>
              <p>لوحة القيادة</p>
            </a>
          </li>
          <li>
            <a data-bs-toggle="collapse" href="#pagesExamples">
              <i class="fal fa-image-polaroid"></i>
              <p>
                صفحات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.pricing') }}">
                    <span class="sidebar-mini-icon">ع</span>
                    <span class="sidebar-normal"> التسعير </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.rtl-support') }}">
                    <span class="sidebar-mini-icon">صو</span>
                    <span class="sidebar-normal"> دعم رتل </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.support') }}">
                    <span class="sidebar-mini-icon">تي</span>
                    <span class="sidebar-normal"> الجدول الزمني </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.lock') }}">
                    <span class="sidebar-mini-icon">هذاع</span>
                    <span class="sidebar-normal"> اقفل الشاشة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('profile.edit') }}">
                    <span class="sidebar-mini-icon">شع</span>
                    <span class="sidebar-normal"> ملف تعريفي للمستخدم </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" href="#componentsExamples">
              <i class="tim-icons icon-molecule-40"></i>
              <p>
                المكونات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a data-bs-toggle="collapse" aria-expanded="false" href="#multicollapse">
                    <span class="sidebar-mini-icon">ر</span>
                    <span class="sidebar-normal"> انهيار متعدد المستويات
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="multicollapse">
                    <ul class="nav">
                      <li>
                        <a>
                          <span class="sidebar-mini-icon">ش</span>
                          <span class="sidebar-normal"> مثال </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="{{ route('page.buttons') }}">
                    <span class="sidebar-mini-icon">ب</span>
                    <span class="sidebar-normal"> وصفت </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.grid') }}">
                    <span class="sidebar-mini-icon">زو</span>
                    <span class="sidebar-normal"> نظام الشبكة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.panels') }}">
                    <span class="sidebar-mini-icon">ع</span>
                    <span class="sidebar-normal"> لوحات </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.sweet-alert') }}">
                    <span class="sidebar-mini-icon">ومن</span>
                    <span class="sidebar-normal"> التنبيه الحلو </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.notifications') }}">
                    <span class="sidebar-mini-icon">ن</span>
                    <span class="sidebar-normal"> إخطارات </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.icons') }}">
                    <span class="sidebar-mini-icon">و</span>
                    <span class="sidebar-normal"> الرموز </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.typography') }}">
                    <span class="sidebar-mini-icon">ر</span>
                    <span class="sidebar-normal"> طباعة </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" href="#formsExamples">
              <i class="tim-icons icon-notes"></i>
              <p>
                إستمارات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="formsExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.regular_forms') }}">
                    <span class="sidebar-mini-icon">صو</span>
                    <span class="sidebar-normal"> أشكال منتظمة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.extended_forms') }}">
                    <span class="sidebar-mini-icon">هوو</span>
                    <span class="sidebar-normal"> أشكال موسعة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.validation_forms') }}">
                    <span class="sidebar-mini-icon">تو</span>
                    <span class="sidebar-normal"> نماذج التحقق </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.wizard_forms') }}">
                    <span class="sidebar-mini-icon">ث</span>
                    <span class="sidebar-normal"> ساحر </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" href="#tablesExamples">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>
                الجداول
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="tablesExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.regular_tables') }}">
                    <span class="sidebar-mini-icon">صر</span>
                    <span class="sidebar-normal"> الجداول العادية </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.extended_tables') }}">
                    <span class="sidebar-mini-icon">هور</span>
                    <span class="sidebar-normal"> الجداول الموسعة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.datatable_tables') }}">
                    <span class="sidebar-mini-icon">در</span>
                    <span class="sidebar-normal"> جداول البيانات صافي </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" href="#mapsExamples">
              <i class="tim-icons icon-pin"></i>
              <p>
                خرائط
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="mapsExamples">
              <ul class="nav">
                <li>
                  <a href="{{ route('page.google_maps') }}">
                    <span class="sidebar-mini-icon">زم</span>
                    <span class="sidebar-normal"> خرائط جوجل </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.fullscreen_maps') }}">
                    <span class="sidebar-mini-icon">ووم</span>
                    <span class="sidebar-normal"> خريطة كاملة الشاشة </span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('page.vector_maps') }}">
                    <span class="sidebar-mini-icon">تم</span>
                    <span class="sidebar-normal"> سهم التوجيه، الخريطة </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{{ route('page.widgets') }}">
              <i class="fal fa-tools"></i>
              <p>الحاجيات</p>
            </a>
          </li>
          <li>
            <a href="{{ route('page.charts') }}">
              <i class="fal fa-chart-bar"></i>
              <p>الرسوم البيانية</p>
            </a>
          </li>
          <li>
            <a href="{{ route('page.calendar') }}">
              <i class="fal fa-alarm-clock"></i>
              <p>التقويم</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize d-inline">
              <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
                <i class="fal fa-align-center visible-on-sidebar-regular"></i>
                <i class="fal fa-list-ul visible-on-sidebar-mini"></i>
              </button>
            </div>
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">RTL</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav  me-auto">
              <li class="search-bar nav-item">
                <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-bs-target="#searchModal">
                  <i class="tim-icons icon-zoom-split"></i>
                  <p class="d-lg-none">Search</p>
                </a>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ asset('images') }}/mike.jpg" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fal fa-trash-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-6 col-sm-6 text-center">
            <div class="card  card-tasks text-start">
              <div class="card-header ">
                <h6 class="title d-inline">تتبع</h6>
                <p class="card-category d-inline">اليوم</p>
                <div class="dropdown">
                  <a class="btn btn-link dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fal fa-cog"></i></a>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">عمل</a>
                    <a class="dropdown-item" href="#">عمل آخر</a>
                    <a class="dropdown-item" href="#">شيء آخر هنا</a>
                  </div>
                </div>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-end">
                          <p class="title">مركز معالجة موقع محور</p>
                          <p class="text-muted">نص آخر هناالوثائق</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="fal fa-tools"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-end">
                          <p class="title">لامتثال GDPR</p>
                          <p class="text-muted">الناتج المحلي الإجمالي هو نظام يتطلب من الشركات حماية البيانات الشخصية
                            والخصوصية لمواطني أوروبا بالنسبة للمعاملات التي تتم داخل الدول الأعضاء في الاتحاد الأوروبي.
                          </p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="fal fa-tools"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-end">
                          <p class="title">القضاياالقضايا</p>
                          <p class="text-muted">سيكونونقال 50٪ من جميع المستجيبين أنهم سيكونون أكثر عرضة للتسوق في شركة
                          </p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="fal fa-tools"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-end">
                          <p class="title">تصدير الملفات التي تمت معالجتها</p>
                          <p class="text-muted">كما يبين التقرير أن المستهلكين لن يغفروا شركة بسهولة بمجرد حدوث خرق يعرض
                            بياناتهم الشخصية.</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="fal fa-tools"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-end">
                          <p class="title">الوصول إلى عملية التصدير</p>
                          <p class="text-muted">سياسة السيء إنطلاق في قبل, مساعدة والمانيا أخذ قد. بل أما أمام ماشاء
                            الشتاء،, تكاليف الإقتصادي بـ حين. ٣٠ يتعلّق للإتحاد ولم, وتم هناك مدينة بتحدّي إذ, كان بل
                            عمل</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="fal fa-tools"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td class="text-end">
                          <p class="title">الافراج عن v2.0.0</p>
                          <p class="text-muted">عن رئيس طوكيو البولندي لمّ, مايو مرجع وباءت قبل هو, تسمّى الطريق
                            الإقتصادي ذات أن. لغات الإطلاق الفرنسية دار ان, بين بتخصيص الساحة اقتصادية أم. و الآخ</p>
                        </td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="مهمة تحرير">
                            <i class="fal fa-tools"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card card-contributions">
              <div class="card-body ">
                <h3 class="card-title">6,332</h3>
                <h3 class="card-category">مجموع المساهمات العامة </h3>
                <p class="card-description">بعد نجاح ناجح لمدة عامين ، سنقوم بتغيير طريقة عمل المساهمات.</p>
              </div>
              <hr>
              <div class="card-footer ">
                <div class="row">
                  <div class="col-lg-6 col-md-9 mx-auto">
                    <div class="card-stats justify-content-center">
                      <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="على" data-off-label="إيقاف" checked>
                      <span>جميع المساهمات العامة </span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-9 mx-auto">
                    <div class="card-stats justify-content-center">
                      <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="على" data-off-label="إيقاف">
                      <span>مساهمات الأسبوع الماضي </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="card card-timeline card-plain">
              <div class="card-body">
                <ul class="timeline timeline-simple">
                  <li class="timeline-end">
                    <div class="timeline-badge danger">
                      <i class="fal fa-shopping-bag"></i>
                    </div>
                    <div class="card-timeline text-end">
                      <div class="timeline-heading">
                        <span class="badge rounded-pill bg-danger">بعض العنوان </span>
                      </div>
                      <div class="card-body">
                        <p>ل Wifey قدم أفضل وجبة يوم الأب على الإطلاق. ممتن جدا سعيد جدا حتى المباركة. شكراً لك على صنع
                          عائلتي لقد استمتعنا بالموضوع "المستقبلي" !!! كانت ليلة ممتعة معًا ...</p>
                      </div>
                      <h6>
                        <i class="fal fa-clock"></i> قبل ساعتين عبر تويتر
                      </h6>
                    </div>
                  </li>
                  <li class="timeline-end">
                    <div class="timeline-badge success">
                      <i class="fal fa-gift-2"></i>
                    </div>
                    <div class="card-timeline text-end">
                      <div class="timeline-heading">
                        <span class="badge rounded-pill badge-success">واحدة أخرى </span>
                      </div>
                      <div class="card-body">
                        <p>أشكر الله على دعم زوجتي وأصدقائي الحقيقيين. أود أيضًا الإشارة إلى أنه أول ألبوم ينتقل إلى رقم
                          1 من البث المباشر !!! أنا أحبك إلين وأيضا قاعدة بلدي رقم واحد تصميم أي شيء أفعله من الأحذية
                          إلى الموسيقى إلى المنازل.</p>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-end">
                    <div class="timeline-badge info">
                      <i class="fal fa-planet-ringed"></i>
                    </div>
                    <div class="card-timeline text-end">
                      <div class="timeline-heading">
                        <span class="badge rounded-pill badge-info">عنوان آخر</span>
                      </div>
                      <div class="card-body">
                        <p>يطلق عليه أنا أفتقد كاني القديم هذا كل ما كان كاني وأنا أحبك مثل كانيي يحب كاني الشهير مشاهدة
                          فيجويروا والثاني عشر في وسط المدينة LA 11:10 PM</p>
                        <p>ماذا لو قدمت كاني أغنية عن كاني رويير لا تصنع سرير الدب القطبي ولكن الأريكة الدببة القطبية هي
                          قطعة الأثاث المفضلة لدينا التي نملكها. لم يكن أي مجموعة من على أهدافه كاني
                        </p>
                        <hr>
                      </div>
                      <div class="card-footer">
                        <div class="dropdown">
                          <button type="button" class="btn rounded-pill btn-info btn-gradient dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fal fa-list-ul"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">عمل</a>
                            <a class="dropdown-item" href="#">عمل آخر</a>
                            <a class="dropdown-item" href="#">شيء آخر هنا</a>
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
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing card-primary">
              <div class="card-body">
                <h3 class="card-title">طليعة</h3>
                <img class="card-img" src="{{ asset('images') }}/card-primary.png" alt="Card image">
                <ul class="list-group">
                  <li class="list-group-item">300 رسائل</li>
                  <li class="list-group-item">150 رسائل البريد الإلكتروني
                  </li>
                  <li class="list-group-item">24/7 الدعم
                  </li>
                </ul>
                <div class="card-prices">
                  <h3 class="text-on-front">
                    <span>$</span>95
                  </h3>
                  <h5 class="text-on-back">95</h5>
                  <p class="plan">خطة مهنية</p>
                </div>
              </div>
              <div class="card-footer text-center mb-3 mt-3">
                <button class="btn rounded-pill btn-just-icon btn-primary btn-gradient">البدء</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing card-primary">
              <div class="card-body">
                <h3 class="card-title">طليعة</h3>
                <img class="card-img" src="{{ asset('images') }}/card-primary.png" alt="Card image">
                <ul class="list-group">
                  <li class="list-group-item">300 رسائل</li>
                  <li class="list-group-item">150 رسائل البريد الإلكتروني
                  </li>
                  <li class="list-group-item">24/7 الدعم
                  </li>
                </ul>
                <div class="card-prices">
                  <h3 class="text-on-front">
                    <span>$</span>95
                  </h3>
                  <h5 class="text-on-back">95</h5>
                  <p class="plan">خطة مهنية</p>
                </div>
              </div>
              <div class="card-footer text-center mb-3 mt-3">
                <button class="btn rounded-pill btn-just-icon btn-primary btn-gradient">البدء</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-testimonial">
              <div class="card-header card-header-avatar">
                <a href="#pablo">
                  <img class="img img-raised" src="{{ asset('images') }}/james.jpg" alt="Card image">
                </a>
              </div>
              <div class="card-body ">
                <p class="card-description">
                  إن التشبيك في قمة الويب لا يشبه أي مؤتمر تقني أوروبي آخر.
                </p>
                <div class="icon icon-primary">
                  <i class="fa fa-quote-right"></i>
                </div>
              </div>
              <div class="card-footer ">
                <h3 class="card-title">روبرت بريسن</h3>
                <p class="category">@خطةطليعة</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            {{ now()->year }} made with <i class="fal fa-heart"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('white') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('white') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('white') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('white') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="{{ asset('white') }}/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('white') }}/js/plugins/sweetalert2.min.js"></script>
  <!--  Plugin for Sorting Tables -->
  <script src="{{ asset('white') }}/js/plugins/jquery.tablesorter.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('white') }}/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('white') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="{{ asset('white') }}/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('white') }}/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('white') }}/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('white') }}/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('white') }}/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for White Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('white') }}/js/white-dashboard-min.js?v=1.0.0"></script>
  <!-- White Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('white') }}/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            whiteDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            whiteDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js


    });
  </script>
</body>

</html>
