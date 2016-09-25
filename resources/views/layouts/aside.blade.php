 <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php $name = Session::get('name'); echo $name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
 -->      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!-- <li class="header">Artists</li> -->
        <li class="treeview">
          
          <ul class="treeview">

              <br/><li><a href="/end"><i class="fa fa-circle-o"></i> Painters</a></li><br/>
            <li><a href="/endpoint"><i class="fa fa-circle-o"></i>Comedians </a></li><br/>
            <li><a href="/testcases"><i class="fa fa-circle-o"></i> Fashion Designers</a></li><br/>
             <li><a href="/alltestcases"><i class="fa fa-circle-o"></i> Architects</a></li><br>
             <li><a href="/alltestcases"><i class="fa fa-circle-o"></i> Interior Designers</a></li><br>
             <li><a href="/alltestcases"><i class="fa fa-circle-o"></i> Photographers</a></li><br>
             <li><a href="/alltestcases"><i class="fa fa-circle-o"></i> Musicians</a></li><br>
             <li><a href="/alltestcases"><i class="fa fa-circle-o"></i> Singers</a></li><br>
             <li><a href="/alltestcases"><i class="fa fa-circle-o"></i> Handicrafts</a></li><br>
          </ul>
        </li>
        
        
      </ul>