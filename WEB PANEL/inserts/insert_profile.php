<div class="app-header-right">
    <div class="header-btn-lg pr-0">
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left"> 
                Logged in as: <b><?php echo $_SESSION['username'] . '#' . $_SESSION['discrim']; ?></b>
                </div>
                  <div class="widget-content-right  ml-3 header-user-info">
                    <div class="widget-subheading">
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                <img width="42" class="rounded-circle" src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']);echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>" alt="">
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <button type="button" tabindex="0" class="dropdown-item">Log Out</button>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>