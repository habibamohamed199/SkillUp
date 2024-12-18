<header>
    <div class="logo">SkillUp</div>
    <div class="search-container">
        <form class="search-form">
            <input type="text" class="search-input" placeholder="Search...">
            <button type="submit" class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <nav>
        <ul class="nav-list">
            <li>
                <div class="dropdown">
                    <button class="dropdown-btn">Categories</button>
                    <div class="dropdown-content">
                        @foreach($categories as $category)
                            <a href="#">{{$category}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
            <li><a class="link" href="#">All Courses</a></li>
            <li><a class="border-btn href=" #"> Sign Out</a> </li>
        </ul>
    </nav>

</header>
