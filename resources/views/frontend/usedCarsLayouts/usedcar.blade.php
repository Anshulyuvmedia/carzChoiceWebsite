@extends('frontend.layouts.website')
@section('content')
@section('title', 'Used Cars')

<!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
<section class="main-search parallex used-cars" style="height: 410px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="main-search-title text-center">
                    <h1>Find Used Cars?</h1>
                    <p>Buy, <strong>sell and check price</strong> of used cars</p>
                </div>
                <div class="search-section">
                    <div id="form-panel">
                        <ul class="list-unstyled search-options clearfix">

                            <li>
                                <input type="text" placeholder="Audi A4 For Sale....">
                            </li>

                            <li>
                                <div class="used-budget-box">
                                    <div id="minMaxContainer" class="form-control">
                                        <span class="leftfloat" id="budgetBtn">
                                            Choose Your Budget
                                        </span>
                                        <span id="upDownArrow" class="rightfloat fa fa-angle-down"></span>
                                        <div class="clear"></div>
                                    </div>
                                    <div id="budgetListContainer" class="budget-box__list-container hide">
                                        <div id="userBudgetInput"><input type="text" class="priceBox" id="minInput"
                                                placeholder="Min" maxlength="5"><input type="text" class="priceBox"
                                                id="maxInput" placeholder="Max" maxlength="5">
                                            <div
                                                class="cw-blackbg-tooltip cw-blackbg-tooltip-search-error text-center hide">
                                                Max budget should be greater than Min budget.
                                            </div>
                                        </div>
                                        <ul id="minPriceList" class="text-left ">
                                            <li data-min-price="Any">Any</li>
                                            <li data-min-price="1">1 Lakh</li>
                                            <li data-min-price="3">3 Lakh</li>
                                            <li data-min-price="4">4 Lakh</li>
                                            <li data-min-price="6">6 Lakh</li>
                                            <li data-min-price="8">8 Lakh</li>
                                            <li data-min-price="12">12 Lakh</li>
                                            <li data-min-price="20">20 Lakh</li>
                                        </ul>
                                        <ul id="maxPriceList" class="text-right ">
                                            <li data-max-price="1">1 Lakh</li>
                                            <li data-max-price="3">3 Lakh</li>
                                            <li data-max-price="4">4 Lakh</li>
                                            <li data-max-price="6">6 Lakh</li>
                                            <li data-max-price="8">8 Lakh</li>
                                            <li data-max-price="12">12 Lakh</li>
                                            <li data-max-price="20">20 Lakh</li>
                                            <li data-max-price="Any">Any</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">Search</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= select by city =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray used-cars">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>Used Cars By City</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/delhi.jpg?static1fix" class="card-img"
                            alt="Delhi">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Delhi</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/mumbai.jpg?static1fix" class="card-img"
                            alt="Mumbai">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Mumbai</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/bangalore.jpg?static1fix" class="card-img"
                            alt="Bengaluru">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Bengaluru</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/chennai.jpg?static1fix" class="card-img"
                            alt="Chennai">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Chennai</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/hyderabad.jpg?static1fix" class="card-img"
                            alt="Hyderabad">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Hyderabad</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/kolkata.jpg?static1fix" class="card-img"
                            alt="Kolkata">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Kolkata</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/chandigarh.jpg?static1fix" class="card-img"
                            alt="Chandigarh">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Chandigarh</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/pune.jpg?static1fix" class="card-img"
                            alt="Pune">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Pune</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="card text-bg-dark">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/ahmedabad.jpg?static1fix" class="card-img"
                            alt="Ahmedabad">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Ahmedabad</h5>

                        </div>
                    </div>
                </a>
            </div>
            


        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= select by city End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= select by city =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray used-cars">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>TOOLS YOU MIGHT NEED</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel-body recent-ads d-flex">
                    <!-- Ads -->
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="{{('assets\frontend-assets\images\moneybag-icon.png')}}" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Sell your car </a>
                                </h3>
                                <div class="recent-ads-list-location">
                                    13,000 cars get sold every month. Just 3 steps and your ad is live
                                </div>
                                <div>
                                    <a href="#">Know more</a>
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-body recent-ads d-flex">
                     <!-- Ads -->
                     <div class="recent-ads-list  ">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="assets\frontend-assets\images\calc-icon.png" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Check car value</a>
                                </h3>
                               
                                <div class="recent-ads-list-location">
                                    Find out the true market value of a used car
                                </div>
                                <div>
                                    <a href="#">Know more</a>
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>
                   
                   
                </div>
            </div>
            
            


        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= select by city End =-=-=-=-=-=-= -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const minMaxContainer = document.getElementById('minMaxContainer');
        const budgetListContainer = document.getElementById('budgetListContainer');
        const budgetBtn = document.getElementById("budgetBtn");
        const minPriceList = document.getElementById("minPriceList");
        const maxPriceList = document.getElementById("maxPriceList");
        const minInput = document.getElementById("minInput");
        const maxInput = document.getElementById("maxInput");
        const errorTooltip = document.querySelector(".cw-blackbg-tooltip-search-error");

        let minPrice = "Any";
        let maxPrice = "Any";

        function updateBudgetBtn() {
            let displayText = "Choose Your Budget";
            if (minPrice !== "Any" || maxPrice !== "Any") {
                displayText = `${minPrice} L - ${maxPrice} L`;
            }
            budgetBtn.textContent = displayText;
        }

        function selectMinPrice(event) {
            minPrice = event.target.getAttribute("data-min-price");
            minInput.value = ""; // Clear the manual input field
            minPriceList.classList.add("hide");
            maxPriceList.classList.remove("hide");
            updateBudgetBtn();
        }

        function selectMaxPrice(event) {
            maxPrice = event.target.getAttribute("data-max-price");
            maxInput.value = ""; // Clear the manual input field
            if (isValidBudgetRange(minPrice, maxPrice)) {
                updateBudgetBtn();
                errorTooltip.classList.add("hide");
            } else {
                errorTooltip.classList.remove("hide");
            }
        }

        function isValidBudgetRange(min, max) {
            if (min === "Any" || max === "Any") return true;
            return parseInt(min) <= parseInt(max);
        }

        function toggleMaxPriceList(show) {
            if (show) {
                maxPriceList.classList.remove("hide");
                maxPriceList.style.display = "block";
            } else {
                maxPriceList.classList.add("hide");
                maxPriceList.style.display = "none";
            }
        }

        // Add event listeners to the list items
        minPriceList.querySelectorAll("li").forEach(item => {
            item.addEventListener("click", selectMinPrice);
        });

        maxPriceList.querySelectorAll("li").forEach(item => {
            item.addEventListener("click", selectMaxPrice);
        });

        // Add event listeners to the input fields
        minInput.addEventListener("blur", function() {
            if (minInput.value) {
                minPrice = minInput.value;
                minPriceList.classList.add("hide");
                maxPriceList.classList.remove("hide");
                updateBudgetBtn();
            }
        });

        maxInput.addEventListener("blur", function() {
            if (maxInput.value) {
                maxPrice = maxInput.value;
                if (isValidBudgetRange(minPrice, maxPrice)) {
                    updateBudgetBtn();
                    errorTooltip.classList.add("hide");
                } else {
                    errorTooltip.classList.remove("hide");
                }
            }
        });

        // Toggle budget list container visibility
        minMaxContainer.addEventListener('click', function() {
            minMaxContainer.classList.toggle('open');
            budgetListContainer.classList.toggle('hide');
            // Hide max price list if container is opened again
            if (minMaxContainer.classList.contains('open')) {
                maxPriceList.classList.add('hide');
            }
        });
    });
</script>

@endsection
