<!-- aside -->
  <div id="aside" class="app-aside fade nav-dropdown black">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a href="{{ url( 'dashboard' ) }}" class="navbar-brand">
        	<div data-ui-include="'images/logo.svg'"></div>
        	<img src="images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">aside</span>
        </a>
        <!-- / brand -->
      </div>
      <div data-flex class="hide-scroll">
          <nav class="scroll nav-stacked nav-stacked-rounded nav-color">
            <ul class="nav" data-ui-nav>
              @foreach( $menus as $namespace => $menu ) 
              <li>
                
                <a href="{{ @$menu[ 'url' ] != null ? $menu[ 'url' ] : "javascript:void(0)" }}" class="{{ $namespace }}-menu">

                  @if( count( @$menu[ 'sub' ] ) > 0 ) 
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  @endif

                  <span class="nav-icon text-white no-fade">
                      <i class="material-icons md-24">{{ $menu[ 'icon' ] }}</i>
                  </span>

                  <span class="nav-text">{{ @$menu[ 'text' ] }}</span>

                  @if( isset( $menu[ 'sub' ] ) && count( @$menu[ 'sub' ] ) > 0 )
                    
                    <ul class="nav-sub nav-mega nav-mega-3">
                    <!-- Looping Sub Menus -->
                    @foreach( $menu[ 'sub' ] as $subNamespace => $sub ) 
                      <li>
                        <a class="{{ $subNamespace }}-submenu" href="{{ @$sub[ 'url' ] ? $sub[ 'url' ] : 'javascript:void(0)' }}" >{{ $sub[ 'text' ] }}</a>
                      </li>
                    @endforeach
                    <!-- End Sub Menus -->
                    </ul>

                  @endif

                </a>
              </li>
              @endforeach
            </ul>
          </nav>
      </div>
      <div data-flex-no-shrink>
        <div class="nav-fold dropup">
          <a data-toggle="dropdown">
              <div class="pull-left">
                <div class="inline"><span class="avatar w-40 grey">JR</span></div>
                <img src="images/a0.jpg" alt="..." class="w-40 img-circle hide">
              </div>
              <div class="clear hidden-folded p-x">
                <span class="block _500 text-muted">Jean Reyes</span>
                <div class="progress-xxs m-y-sm lt progress">
                    <div class="progress-bar info" style="width: 15%;">
                    </div>
                </div>
              </div>
          </a>
          <div class="dropdown-menu w dropdown-menu-scale ">
            <a class="dropdown-item" href="profile.html">
              <span>Profile</span>
            </a>
            <a class="dropdown-item" href="setting.html">
              <span>Settings</span>
            </a>
            <a class="dropdown-item" href="app.inbox.html">
              <span>Inbox</span>
            </a>
            <a class="dropdown-item" href="app.message.html">
              <span>Message</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="docs.html">
              Need help?
            </a>
            <a class="dropdown-item" href="signin.html">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->