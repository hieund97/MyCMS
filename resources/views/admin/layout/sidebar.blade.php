<style type="text/css">
  .pad {
    padding-left: 20px;
  }

  .disabled {
    pointer-events: none;
    opacity: 0.6;
  } 

  #style-1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
  }

  #style-1::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  #style-1::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color: #555;
  }
</style>
<div class="sidebar scrollbar" id="style-1" data-color="rose" data-background-color="black" style="overflow: scroll">
  <div class="logo">
    <a href="/admin" class="simple-text logo-normal">
      <img class="img-fluid" style="width: 200px;margin-left: 20px;" src="{{asset ('manage/img/admin-ajax-1.png')}}"
        alt="">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img
          src="{{auth()->user()->avatar&&auth()->user()->avatar!==''?auth()->user()->avatar:asset ('manage/img/default-avatar.png') }}" />
      </div>
      <div class="user-info">
        <a href="/admin/user/{{auth()->user()->id}}/edit" class="username">
          <span>
            {{auth()->user()->last_name}} {{auth()->user()->first_name}}
          </span>
        </a>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item {{Request::segment(2) === null ? 'active' : null}} ">
        <a class="nav-link" href="/admin">
          <i class="material-icons">dashboard</i>
          <p> Bảng tin </p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'user' ? 'active' : null}} ">
        <a class="nav-link {{Request::segment(2) === 'user' ? null : 'collapsed'}}" data-toggle="collapse"
          href="#pagesExamples" aria-expanded="{{Request::segment(2) === 'user' ? 'true' : 'false'}}">
          <i class="material-icons">person</i>
          <p> Thành viên
            <b class="caret"></b>
          </p>
        </a>
        <div class="{{Request::segment(2) === 'user' ? 'collapse show' : 'collapse'}}" id="pagesExamples">
          <ul class="nav">
            <li class="nav-item {{Request::segment(3) === 'create' ? 'active' : null}} pad">
              <a class="nav-link" href="/admin/user/create">
                <span class="sidebar-mini"> TTV </span>
                <span class="sidebar-normal"> Thêm thành viên </span>
              </a>
            </li>
            <li class="nav-item {{Request::segment(4) === 'edit' ? 'active' : null}} pad">
              <a class="nav-link " href="/admin/user/{{auth()->user()->id}}/edit">
                <span class="sidebar-mini"> TT </span>
                <span class="sidebar-normal"> Thông tin của tôi </span>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('admin/user')) ? 'active' : '' }} pad">
              <a class="nav-link" href="/admin/user">
                <span class="sidebar-mini"> DT </span>
                <span class="sidebar-normal"> Danh sách thành viên </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{Request::segment(2) === 'products'    ? 'active' : null}}">
        <a class="nav-link {{Request::segment(2) === 'products'  ? null : 'collapsed'}}" data-toggle="collapse"
          href="#componentsExamples" aria-expanded="{{Request::segment(2) === 'products' ? 'true' : 'false'}}">
          <i class="material-icons">card_travel</i>
          <p> Sản phẩm<b class="caret"></b></p>
        </a>
        <div class="{{Request::segment(2) === 'products' ? 'collapse show' : 'collapse'}}" id="componentsExamples">
          <ul class="nav">
            <li class="nav-item pad {{ (request()->is('admin/products/create')) ? 'active' : null }} ">
              <a class="nav-link" href="/admin/products/create">
                <span class="sidebar-mini"> TSP </span>
                <span class="sidebar-normal"> Thêm sản phẩm </span>
              </a>
            </li>
            <li class="nav-item pad {{ (request()->is('admin/products')) ? 'active' : null }}">
              <a class="nav-link" href="/admin/products">
                <span class="sidebar-mini"> DSP </span>
                <span class="sidebar-normal"> Danh sách sản phẩm </span>
              </a>
            </li>
            <li
              class="nav-item pad {{(request()->is('admin/products/value')) ||(request()->is('admin/attribute'))? 'active' : null}}">
              <a class="nav-link" href="/admin/products/value">
                <span class="sidebar-mini"> QTT </span>
                <span class="sidebar-normal">Quản lý thuộc tính </span>
              </a>
            </li>
            <li class="nav-item pad {{(request()->is('admin/products/brand'))? 'active' : null}}">
              <a class="nav-link" href="/admin/products/brand">
                <span class="sidebar-mini"> TH </span>
                <span class="sidebar-normal">Thương hiệu </span>
              </a>
            </li>
            <li class="nav-item pad {{(request()->is('admin/products/ticket-product'))? 'active' : null}}">
              <a class="nav-link" href="/admin/products/ticket-product">
                <span class="sidebar-mini"> PN </span>
                <span class="sidebar-normal">Phiếu nhập</span>
              </a>
            </li>
            <li class="nav-item pad {{(request()->is('admin/products/sale'))? 'active' : null}}">
              <a class="nav-link" href="/admin/products/sale">
                <span class="sidebar-mini"> KM </span>
                <span class="sidebar-normal">Khuyến mại</span>
              </a>
            </li>
            <li class="nav-item pad {{(request()->is('admin/products/product-back'))? 'active' : null}}">
              <a class="nav-link" href="/admin/products/product-back">
                <span class="sidebar-mini"> PB </span>
                <span class="sidebar-normal">Hàng trả về</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{Request::segment(2) === 'categories'? 'active' : null}}  {{Request::segment(2) === 'trending'? 'active' : null}}">
        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
          <i class="material-icons">dns</i>
          <p> Danh mục sản phẩm
            <b class="caret"></b>
          </p>
        </a>
        <div class=" {{Request::segment(2) === 'categories' ? 'collapse show' : 'collapse'}} {{Request::segment(2) === 'trending' ? 'collapse show' : 'collapse'}}" id="formsExamples">
          <ul class="nav">
            <li class="nav-item {{(request()->is('admin/categories/create'))? 'active' : null}} pad">
              <a class="nav-link" href="/admin/categories/create">
                <span class="sidebar-mini"> TDM </span>
                <span class="sidebar-normal">Thêm danh mục</span>
              </a>
            </li>
            <li class="nav-item {{(request()->is('admin/categories'))? 'active' : null}} pad">
              <a class="nav-link" href="/admin/categories">
                <span class="sidebar-mini"> DSD </span>
                <span class="sidebar-normal"> Danh sách danh mục </span>
              </a>
            </li>
            <li class="nav-item {{Request::segment(2) === 'trending'? 'active' : null}} pad">
              <a class="nav-link" href="/admin/trending">
                <span class="sidebar-mini"> TRE </span>
                <span class="sidebar-normal"> Trending </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{Request::segment(2) === 'revenue'? 'active' : null}}">
        <a class="nav-link" href="/admin/revenue">
          <i class="material-icons">timeline</i>
          <p> Doanh thu </p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'comment'? 'active' : null}} " >
        <a class="nav-link" href="/admin/comment">
          <i class="material-icons">reorder</i>
          <p> Bình luận </p>
        </a>
      </li>
      <li
        class="nav-item {{Request::segment(2) === 'blog-category'||Request::segment(2) === 'blog' ? 'active' : null}}">
        <a class="nav-link {{Request::segment(2) === 'blog-category'||Request::segment(2) === 'blog' ? null : 'collapsed'}}"
          data-toggle="collapse" href="#tablesExamples"
          aria-expanded="{{Request::segment(2) === 'blog-category'||Request::segment(2) === 'blog' ? 'true' : 'false'}}">
          <i class="material-icons">book</i>
          <p> Bài viết
            <b class="caret"></b>
          </p>
        </a>
        <div
          class="{{Request::segment(2) === 'blog-category'||Request::segment(2) === 'blog' ? 'collapse show' : 'collapse'}} "
          id="tablesExamples">
          <ul class="nav">
            <li class="nav-item {{Request::segment(3) === 'create' ? 'active' : null}} pad">
              <a class="nav-link" href="/admin/blog/create">
                <span class="sidebar-mini"> TB </span>
                <span class="sidebar-normal"> Thêm bài viết </span>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('admin/blog')) ? 'active' : '' }} pad">
              <a class="nav-link" href="/admin/blog">
                <span class="sidebar-mini"> DB </span>
                <span class="sidebar-normal"> Danh sách bài viết </span>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('admin/blog-category')) ? 'active' : '' }} pad">
              <a class="nav-link" href="/admin/blog-category">
                <span class="sidebar-mini"> CĐ </span>
                <span class="sidebar-normal"> Chủ đề </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{Request::segment(2) === 'order' ? 'active' : null}}">
        <a class="nav-link" href="/admin/order">
          <i class="material-icons">calendar_today</i>
          <p> Đơn hàng </p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'slider' ? 'active' : null}}">
        <a class="nav-link" href="/admin/slider">
          <i class="material-icons">perm_media</i>
          <p> Slider </p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'ship-method' ? 'active' : null}}">
        <a class="nav-link" href="/admin/ship-method">
          <i class="material-icons">motorcycle</i>
          <p> Đơn vị vận chuyển </p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'pay-method' ? 'active' : null}}">
        <a class="nav-link" href="/admin/pay-method">
          <i class="material-icons">payment</i>
          <p> Phương thức thanh toán </p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'contact'    ? 'active' : null}}">
        <a class="nav-link" href="/admin/contact">
          <i class="material-icons">perm_contact_calendar</i>
          <p>Khách hàng liên hệ</p>
        </a>
      </li>
      <li class="nav-item {{Request::segment(2) === 'subcribe'    ? 'active' : null}}">
        <a class="nav-link" href="/admin/subcribe">
          <i class="material-icons">aspect_ratio</i>
          <p> Subcribe</p>
        </a>
      </li>
    </ul>
  </div>
</div>