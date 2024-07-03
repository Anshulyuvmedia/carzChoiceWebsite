@extends('frontend.layouts.website')
@section('content')
@section('title', 'Add Ad Show')
<div class="page-header-area-2 gray">
    <style>
        #heading {
            text-transform: uppercase;
            color: #ff3232;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
            padding: 30px;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #ff3232;
            ;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #ff3232;
            ;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #ff3232;
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #ff3232;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #ff3232;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #ff3232
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #ff3232
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #ff3232
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Add Ad Show</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>User Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-area clearfix">
    <div class="container">
        <div class="row margin-top-40 grid-style-2 ">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-5 mt-0 mb-0">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2 id="heading">Add Your Post Here</h2>
                            <p>Fill all form field to go to next step</p>
                            <form action="{{ route('insertadpost') }}" method="POST" enctype="multipart/form-data"
                                class="stepperForm" id="msform">
                                @csrf
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Important Details</strong></li>
                                    <li id="personal"><strong>Car Details</strong></li>
                                    <li id="payment"><strong>Car Images</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
                                <fieldset id="step1">
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Important Details:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 1 - 4</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label>Brand Name <span class="color-red">*</span></label>
                                                <select class="form-control" id="dynamic_selectbrandname"
                                                    name="brandname" required>
                                                    <option value="">--select brand name--</option>
                                                    @foreach ($carlistdata as $carlist)
                                                        <option value="{{ $carlist->brandname }}">
                                                            {{ $carlist->brandname }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Car Name <span class="color-red">*</span></label>
                                                <select class="form-control" name="carname" id="carnamelabel" required>
                                                    <option value="">--select car name--</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Modal Name <span class="color-red">*</span></label>
                                                <select class="form-control" name="modalname" id="carmodal" required>
                                                    <option value="">--select modal name--</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mt-3">
                                                <label>District <span class="color-red">*</span></label>
                                                <select class="form-control" id="dynamic_selectdistrict" name="district"
                                                    required>
                                                    <option value="">--select district--</option>
                                                    @foreach ($statedata as $row)
                                                        <option value="{{ $row->District }}">{{ $row->District }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mt-3">
                                                <label class="fieldlabels">State</label>
                                                <input type="text" value="" id="stateid" name="state"
                                                    placeholder="state" required />
                                            </div>
                                            <div class="col-lg-4 mt-3">
                                                <label class="fieldlabels">Pincode</label>
                                                <input type="text" value="" id="pincodeid" name="pincode"
                                                    placeholder="pincode" required />
                                            </div>
                                        </div>
                                    </div> <input type="button" id="nextButton" name="next"
                                        class="next action-button" value="Next" onclick="validateStep1()" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Car Details:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 2 - 4</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Price</label>
                                                <input type="text" name="price" placeholder="selling price"
                                                    required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Kilometers Driven</label>
                                                <input type="text" name="kilometersdriven"
                                                    placeholder="kilometers driven" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Fuel Type</label>
                                                <input type="text" name="fueltype" placeholder="enter fuel type"
                                                    required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Registration year</label>
                                                <input type="text" name="registeryear"
                                                    placeholder="enter registration year" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Manufacturing year</label>
                                                <input type="text" name="manufactureyear"
                                                    placeholder="enter manufacturing year" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">No. of owners</label>
                                                <input type="text" name="ownernumbers"
                                                    placeholder="enter number of owners" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Transmission Type</label>
                                                <input type="text" name="transmissiontype"
                                                    placeholder="enter tranmission type" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Color</label>
                                                <input type="text" name="color" placeholder="enter color"
                                                    required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Insurance</label>
                                                <input type="text" name="insurance"
                                                    placeholder="enter insurance availibility" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Registration type</label>
                                                <input type="text" name="registertype"
                                                    placeholder="enter registration type" required />
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="fieldlabels">Last Updated</label>
                                                <input type="text" name="lastupdated"
                                                    placeholder="last updated on" required />
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button"
                                        value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Car Images:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 3 - 4</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-end">
                                                <button type="button" class="btn btn-theme btn-sm addRow"><i
                                                        class="fa fa-plus"></i>&nbsp;Add Row</button>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <table class="table table-bordered hover">
                                                <tr>
                                                    <th>Image Position</th>
                                                    <th>Upload Image</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tbody id="tablebody">
                                                    {{-- Table body here --}}
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <input type="submit" name="next" class="next action-button"
                                        value="Submit" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Finish:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 4 - 4</h2>
                                            </div>
                                        </div> <br><br>
                                        <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">You Have Successfully Signed Up
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for custom alert -->
    <div class="modal" id="validationModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ">Validation Error</h5>
                </div>
                <div class="modal-body">
                    <p>Please fill all required fields before proceeding.</p>
                </div>
                <div class="modal-footer p-3">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(event) {
            var current_fs = $(this).parent();
            var next_fs = $(this).parent().next();

            // Validate fields in the current fieldset
            var fields = current_fs.find('input, select').filter('[required]');
            var allValid = true;

            fields.each(function() {
                if (!$(this).val()) {
                    $(this).addClass('is-invalid');
                    allValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // If any required fields are empty, show the custom alert modal
            if (!allValid) {
                $('#validationModal').modal('show'); // Show the custom modal
                event.preventDefault(); // Prevent default action (moving to the next step)
                return;
            }

            // Add Class Active to the progress bar
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            // Show the next fieldset
            next_fs.show();

            // Hide the current fieldset with animation
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, fx) {
                    var opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });

            // Increment the progress bar
            setProgressBar(++current);
        });



        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })

    });
</script>
<script>
    $(document).on('click', '.addRow', function() {
        var tr = `
        <tr>
        <td>
            <select class="form-control "
                name="positions[]">
                <option value="">--select image position--</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </td>
        <td>
            <input type="file" name="images[]" placeholder="state" />
        </td>
        <td>
            <a href="#"><button class="btn btn-danger btn-sm deleteRow" id="sa-warning">delete</button></a>
        </td>
    </tr>
    `;
        $('#tablebody').append(tr);
    });
    $(document).on('click', '.deleteRow', function() {
        $(this).closest('tr').remove();
    });
</script>
<script>
    $(function() {
        $('#dynamic_selectbrandname').on('change', function() {
            var selectedbrandname = $(this).val();
            console.log(selectedbrandname);
            $.ajax({
                url: "/filterbrandname/" + selectedbrandname,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    var dropdown1 = $('#carnamelabel');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    data.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.carname + '">' +
                            item.carname +
                            '</option>'));
                    });
                }
            });
        });
    });

    $(function() {
        $('#carnamelabel').on('change', function() {
            var selectedcar = $(this).val();
            console.log(selectedcar);
            $.ajax({
                url: "/filtermodalname/" + selectedcar,
                type: "GET",
                success: function(response) {
                    console.log(response);
                    var dropdown1 = $('#carmodal');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    response.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.carmodalname +
                            '">' +
                            item.carmodalname +
                            '</option>'));
                    });
                }
            });
        });
    });
</script>
<script>
    //Dynamic State and Pincode Coming.............
    $(function() {
        $('#dynamic_selectdistrict').on('change', function() {
            var selecteddistrict = $(this).val();
            console.log(selecteddistrict);
            $.ajax({
                url: "/showstatepincode/" + selecteddistrict,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    $('#stateid').val(data.StateName);
                    $('#pincodeid').val(data.Pincode);
                }
            });
        });
    });
</script>
