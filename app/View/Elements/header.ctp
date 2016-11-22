<!--start header -->
<header>
    <div class="border-left"></div>
    <div class="logo">
        <a href="trang-chu"><img src="<?php echo $base_url ?>img/logo.png" alt=""></a>
        <span class="border-bottom"></span>
    </div>
    <nav class="menu">
        <ul>
            <li><span class="border-bottom"></span><a href="trang-chu">TRANG CHỦ</a></li>
            <li><span class="border-bottom"></span><a href="trong-nuoc">TRONG NƯỚC</a>
                <!-- <ul class="dropdown">
                    <li><a href="category.html">subcategory</a></li>
                    <li><a href="category.html">another one</a></li>
                    <li class="last"><span class="border-bottom"></span><a href="category.html">third category</a></li>
                </ul> -->
            </li>
            <li><span class="border-bottom"></span><a href="doi-song">ĐỜI SỐNG</a></li>
            <li><span class="border-bottom"></span><a href="suc-khoe">SỨC KHOẺ</a></li>
            <li><span class="border-bottom"></span><a href="kinh-te">KINH TẾ</a></li>
            <li><span class="border-bottom"></span><a href="cong-nghe">CÔNG NGHỆ</a></li>
            <li><span class="border-bottom"></span><a href="giai-tri">GIẢI TRÍ</a></li>
            <li><span class="border-bottom"></span><a href="video">VIDEO</a></li>
            <li><span class="border-bottom"></span><a href="anh-dep">ẢNH ĐẸP</a></li>
        </ul>                                              
    </nav>   
    <select class="mobile-menu" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
        <option value="">Go To...</option> 
        <option value="trang-chu">TRANG CHỦ</option>
        <option value="trong-nuoc">TRONG NƯỚC</option>
        <option value="doi-song">ĐỜI SỐNG</option>
        <option value="suc-khoe">SỨC KHOẺ</option>
        <option value="cong-nghe">CÔNG NGHỆ</option>
        <option value="giai-tri">GIẢI TRÍ</option>
        <option value="video">VIDEO</option>
        <option value="anh-dep">ẢNH ĐẸP</option>
    </select>
    <div class="clear"></div>
</header>
<!-- end header