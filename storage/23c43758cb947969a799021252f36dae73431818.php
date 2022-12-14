<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    
    <div style=" padding: 6px; margin-top: 8px; border-bottom: 1px solid #f1f1f1">
        Xin chào
    </div>
    <ul class="nav menu">
        <li class="<?php if($_REQUEST['url']=='dashboard'): ?>
        active
    <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'dashboard'); ?>">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Trang chủ quản trị
            </a>
        </li>
        <li class="<?php if($_REQUEST['url']=='category' || $_REQUEST['url']=='add-cate' || $_REQUEST['url']=='edit-cate'): ?>
            active
        <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'category?page=1'); ?>">
                <svg class="glyph stroked open folder">
                    <use xlink:href="#stroked-open-folder" />
                </svg>
                Quản lý danh mục
            </a>
        </li>
        <li class="<?php if($_REQUEST['url']=='product' || $_REQUEST['url']=='add-product' || 
        $_REQUEST['url']=='edit-product' || $_REQUEST['url']=='gallery' || $_REQUEST['url']=='add-gallery' 
        || $_REQUEST['url']=='edit-gallery'): ?>
            active
        <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'product?page=1'); ?>">
                <svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg>
                Quản lý sản phẩm
            </a>
        </li>
        <li class="<?php if($_REQUEST['url']=='user' || $_REQUEST['url']=='add-user' || $_REQUEST['url']=='edit-user'): ?>
            active
        <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'user'); ?>">
                <svg class="glyph stroked male user ">
                    <use xlink:href="#stroked-male-user" />
                </svg>
                Quản lý tài khoản
            </a>
        </li>
        
        
        
    </ul>
</div>

<?php /**PATH C:\xampp\htdocs\php2\app\views/layouts/slibar.blade.php ENDPATH**/ ?>