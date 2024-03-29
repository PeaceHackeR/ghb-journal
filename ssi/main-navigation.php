<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">
            <!-- Contact Us -->
            <li>
                <a href="00_dashboard.php" >
                    <i class="icon-grid5"></i> <span> Dashboard</span>
                </a>
            </li>
            <!-- 01 Website Content -->
            <li>
                <a href="#">
                    <i class="icon-screen3"></i> <span> Website Content</span>
                </a>
                <ul>
                    <li>
                        <a href="01_highlight_list.php">Highlight</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                        <ul>
                            <li>
                                <a href="01_history_list.php">History</a>
                            </li>
                            <li>
                                <a href="01_providers_list.php">Providers</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- 03 Authors -->
            <li>
                <a href="03_authors_list.php">
                    <i class="icon-user"></i> <span> Authors</span>
                </a>
            </li>
            <!-- 02 Journals -->
            <li>
                <a href="#">
                    <i class="icon-reading"></i> <span> Journals</span>
                </a>
                <ul>
<!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                    <li>
                        <a href="02_journals_list.php">Post</a>
                    </li>
                </ul>
            </li>
            <!-- 03 Articles -->
            <li>
                <a href="#">
                    <i class="icon-quill4"></i> <span> Articles</span>
                </a>
                <ul>
<!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                    <li>
                        <a href="03_articles_list.php">Post</a>
                    </li>
                    <li>
                        <a href="03_category_list.php">Category Management</a>
                    </li>
                </ul>
            </li>
            <!-- 04 News -->
            <li>
                <a href="#">
                    <i class="icon-newspaper"></i> <span> News</span>
                </a>
                <ul>
<!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                    <li>
                        <a href="04_news_list.php">Post</a>
                    </li>
                    <li>
                        <a href="04_category_list.php">Category Management</a>
                    </li>
                </ul>
            </li>
            <!-- 05 Tag Management -->
            <li>
                <a href="#">
                    <i class="icon-price-tags"></i> <span> Tags</span>
                </a>
                <ul>
<!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                    <li>
                        <a href="05_tag_list.php">All</a>
                    </li>
                    <li>
                        <a href="#">Re-order Highlight Tags</a>
                        <ul>
                            <li>
                                <a href="05_tag-articles_reorder.php">Articles</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <!-- Contact Us -->
            <li>
                <a href="06_contact_list.php" >
                    <i class="icon-bubble-dots4"></i> <span> Contact Us<span class="label bg-success">12 NEW</span></span>
                </a>
            </li>
            <!-- Related Link -->
            <li>
                <a href="07_link_list.php" >
                    <i class="icon-link2"></i> <span> Related Link</span>
                </a>
            </li>
            <!-- Related Link -->
            <li>
                <a href="08_rate_list.php" >
                    <i class="icon-file-spreadsheet"></i> <span> Interest Page</span>
                </a>
            </li>
            <!-- System -->
            <li>
                <a href="#"><i class="icon-gear"></i> <span> System</span></a>
                <ul>
                    <li class="disabled">
                        <a href="#">File Management</a>
                    </li>
                    <li>
                        <a href="11_users_list.php">Users</a>
                    </li>
                    <li>
                        <a href="11_group_list.php">Groups</a>
                    </li>
                    <li>
                        <a href="#">Log</a>
                        <ul>
                            <li>
                                <a href="11_log-users_list.php">Users</a>
                            </li>
                            <li>
                                <a href="11_log-activities_list.php">Activities</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script>
    function getKeyX(str){
        var _str = String(str).split("_");
        return _str[0]+"_"+_str[1];
    }
    var _urlName = /[^\/]+\.php/ig.exec(location.href),
        _key = getKeyX(_urlName);
    document.querySelectorAll(".navigation-main a").forEach(function(el,i){
       if(getKeyX(el.getAttribute("href"))==_key){
           el.parentElement.className += "active";
           return false;
       }
    });
</script>