<!-- start header -->
        <header>
            <div class="border-left"></div>
            <div class="logo">
                <a href="index-2.html"><img src="<?php echo $base_url ?>img/logo.png" alt=""></a>
                <span class="border-bottom"></span>
            </div>
            <div class="search">
                <form action="#" method="post">
                    <input class="field" type="text" name="" value="Search rumors..." onFocus="if (this.value==this.defaultValue) this.value = ''" 
                    onblur="if (this.value=='') this.value = this.defaultValue" >
                    <input class="submit" type="submit" name="" value="" >
                </form>
            </div>
            <nav class="menu">
                <ul>
                    <li><span class="border-bottom"></span><a href="category.html">World</a></li>
                    <li><span class="border-bottom"></span><a href="category.html">Spotlight</a></li>
                    <li><span class="border-bottom"></span><a href="category.html">Sports</a>
                        <ul class="dropdown">
                            <li><a href="category.html">subcategory</a></li>
                            <li><a href="category.html">another one</a></li>
                            <li class="last"><span class="border-bottom"></span><a href="category.html">third category</a></li>
                        </ul>
                    </li>
                    <li><span class="border-bottom"></span><a href="category.html">business</a></li>
                    <li><span class="border-bottom"></span><a href="category.html">health</a></li>
                    <li><span class="border-bottom"></span><a href="category.html">Science</a></li>
                    <li><span class="border-bottom"></span><a href="features.html">Features</a>
                        <ul class="dropdown">
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="blog-single-with-rating.html">News with rating</a></li>
                            <li class="last"><span class="border-bottom"></span><a href="full-width.html">full width</a></li>
                        </ul>
                    </li>
                </ul>                                              
            </nav>   
            <select class="mobile-menu" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
                <option value="">Go To...</option> 
                <option value="index-2.html">Home</option>
                <option value="category.html">Category</option>
                <option value="blog-single.html">News single</option>
                <option value="features.html">Features</option>
                <option value="full-width.html">-Full width</option>
                <option value="blog-single-with-rating.html">-News single with rating box</option>
                <option value="contact.html">-Contact</option>
            </select>
            <div class="clear"></div>
        </header>
        <!-- end header -->