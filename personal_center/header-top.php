<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>YSU</strong> <small>论坛个人中心</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 
          <!-- //显示登陆当前用户的昵称 -->
          <?php
            include "username.php"
          ?>
          <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="out.php"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li><a href="../index/" id="admin-fullscreen"> <span class="admin-fullText">返回主页</span></a></li>
    </ul>
  </div>
</header>