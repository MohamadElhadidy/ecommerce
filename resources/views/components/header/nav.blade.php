  <div class="header__bottom">
      <div class="container-fluid">
          <div
              class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
              <div class="header__menu">
                  <nav class="header__menu--navigation">
                      <ul class="d-flex">

                          @foreach ($categories as $category)
                              <li class="header__menu--items ">
                                  <a class="header__menu--link text-sm" href="/categories/{{$category->id}}">{{ $category->name }}
                                      @if ($category->sub_categories->count())
                                      <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                          width="12" height="7.41" viewBox="0 0 12 7.41">
                                          <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                      </svg>
                                        @endif
                                  </a>

                                  @if ($category->sub_categories->count())
                                      <ul class="header__sub--menu">
                                          @foreach ($category->sub_categories as $sub_category)
                                              <li class="header__sub--menu__items"><a
                                                      class="header__sub--menu__link" href="/categories/sub/{{$sub_category->id}}">
                                                      {{ $sub_category->name }} </a></li>
                                          @endforeach
                                      </ul>
                                  @endif
                              </li>
                          @endforeach
                      </ul>
                  </nav>
              </div>
              <p class="header__discount--text"><img class="header__discount--icon__img" src="assets/img/icon/lamp.png"
                      alt="lamp-img"> تخفيضات 50% </p>
          </div>
      </div>
  </div>
