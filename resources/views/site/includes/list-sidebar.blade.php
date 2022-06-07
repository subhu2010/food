<div id="mb-view">
    <div class="mb-content">
        <div class="mb-header d-lg-none">
            <h5>Refine match search</h5>
            <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeFiler()">&times;</a>
        </div>
        <div id="content-sidebar">
            <aside id="content-sidebar-search" class="product-search">
                <form>
                    <input class="form-control" type="text" placeholder="Search Product"></input>
                    <button class="btn icon-btn"><i class="las la-search"></i></button>
                </form>
            </aside>
            <aside id="product-category" class="product-category mt-4">
                <div class="product-category-header">
                    <h3>
                        <span><i class="las la-rocket"></i></span>
                        PRODUCT CATEGORIES
                    </h3>
                </div>
                <ul class="product-category-list mt-2">
                    <li class="category-list">
                        <a href="#">Breakfast</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Lunch</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Dinner</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Continental</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Day Snack</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Athletes</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Surprize Food</a>
                    </li>
                </ul>
            </aside>
            <aside id="product-category" class="product-category mt-4">
                <div class="product-category-header">
                    <h3>
                        <span><i class="las la-rocket"></i></span>
                        Select By cuisines
                    </h3>
                </div>
                <ul class="product-category-list mt-2">
                    <li class="category-list">
                        <a href="#">Asian</a>
                        <ul class="category-list-child">
                            <li class="category-list">
                                <a href="#">Apple dumpling</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Aloo paratha</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Breadfruit</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Egg bhurji</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Muesli</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category-list">
                        <a href="#">Burger</a>
                        <ul class="category-list-child">
                            <li class="category-list">
                                <a href="#">Cheesy</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Extra Component</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Veg</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category-list">
                        <a href="#">Pizza</a>
                        <ul class="category-list-child">
                            <li class="category-list">
                                <a href="#">Cheesy</a>
                            </li>
                            <li class="category-list">
                                <a href="#">Extra Component</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category-list">
                        <a href="#">Momo</a>
                    </li>
                    <li class="category-list">
                        <a href="#">Chowmine</a>
                    </li>
                    <div class="filter-wrapper" style="display: none;">
                        <li class="category-list">
                            <a href="#">Chinese</a>
                        </li>
                        <li class="category-list">
                            <a href="#">Indian</a>
                        </li>
                        <li class="category-list">
                            <a href="#">Continental</a>
                        </li>
                        <li class="category-list">
                            <a href="#">Thai</a>
                        </li>
                    </div>
                    <li class="category-list">
                        <a href="#">Other</a>
                    </li>
                    <li class="category-list filter-active">
                        <a href="#">View More</a>
                    </li>
                </ul>
            </aside>
            <aside id="price-range" class="product-category my-4 range-slider">
                <div class="product-category-header">
                    <h3>
                        <span><i class="las la-rocket"></i></span>
                        FILTER BY PRICE
                    </h3>
                </div>
                <div class="wrapper">
                    <fieldset class="filter-price">
                        <div class="price-field">
                            <div class="label">
                                <h6>min</h6>
                                <h6>max</h6>
                            </div>
                            <input type="range" min="100" max="500" value="135" id="lower" onChange="showRange(event)">
                            <input type="range" min="100" max="500" value="500" id="upper" onchange="showRange(event)">
                        </div>
                        <div class="price-wrap">
                            <div class="price-container">
                                <div class="price-wrap-1">
                                    <label for="one">Rs</label>
                                    <input id="one">
                                </div>
                                <div class="price-wrap-2">
                                    <label for="two">Rs</label>
                                    <input id="two">

                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <!-- <div class="row m-3">
                    <div class="col-sm-12">
                        <div id="slider-range" class="my-3"> </div>
                        <div class="price-label d-flex justify-content-center">
                            <span class="me-2">Price: </span>
                            <span id="slider-range-value1"></span>
                            <span class="mx-2"> - </span>
                            <span id="slider-range-value2"></span>
                        </div>
                        <button class="btn btn-live d-block mx-auto px-5 mt-3">Filter</button>
                    </div>
                </div> -->
            </aside>
        </div>
    </div>
</div>

