<div class="settings panel panel-default hidden-xs hidden-sm" id="settings">
    <button ct-toggle="toggle" data-toggle-class="active" data-toggle-target="#settings" class="btn btn-default">
        <i class="fa fa-spin fa-gear"></i>
    </button>
    <div class="panel-heading">
        Trình chọn giao diện
    </div>
    <div class="panel-body">
        <!-- start: FIXED HEADER -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Đầu trang cố định</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="fixed-header" />
            </span>
        </div>
        <!-- end: FIXED HEADER -->
        <!-- start: FIXED SIDEBAR -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Thanh bên cố định</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="fixed-sidebar" />
            </span>
        </div>
        <!-- end: FIXED SIDEBAR -->
        <!-- start: CLOSED SIDEBAR -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Thanh bên đóng</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="closed-sidebar" />
            </span>
        </div>
        <!-- end: CLOSED SIDEBAR -->
        <!-- start: FIXED FOOTER -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Chân trang cố định</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="fixed-footer" />
            </span>
        </div>
        <!-- end: FIXED FOOTER -->
        <!-- start: THEME SWITCHER -->
        <div class="colors-row setting-box">
            <div class="color-theme theme-1">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-1">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label>
                </div>
            </div>
            <!-- Các theme khác -->
        </div>
        <!-- end: THEME SWITCHER -->
    </div>
</div>
