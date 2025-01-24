<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html lang="en">

<head>
    <title>Navbar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/checkoutpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <nav class="navbar navbar-expand-sm   navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About12</a>
                </li>

            </ul>
            <div class="social-part">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <span
                                        class="sr-only">(current)</span></a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <span
                                        class="sr-only">(current)</span></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')
    <div class="footer">
    <footer>
        
        <p className="col-md-12 text-center ">
            
            
			Copyright @ 2024 
		</p>
   
     </footer>
    </div>

</body>
</htm/>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar-light .dmenu').hover(function() {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function() {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });
</script>
<script type="text/javascript">
    // $(function () {
    // 	var start_date = moment().subtract(1, 'M');
    // 	var end_date = moment();
    // 	$('#daterange span').html(start_date.format('YYYY-MM-DDThh:mm') + ' - ' + end_date.format('YYYY-MM-DDThh:mm'));
    //     $('#daterange').daterangepicker({
    //         startDate : start_date,
    //         endDate : end_date
    //     },(start_date,end_date)=>{ 
    //         $('#daterange span').html(start_date.format('YYYY-MM-DDThh:mm') + ' - ' + end_date.format('YYYY-MM-DDThh:mm'));
    //     });
    // });

    // var path = "{{ route('select.location') }}";

    // $('#search').typeahead({
    //     source: function (query, process) {
    //         return $.get(path, {
    //             query: query
    //         }, function (data) {
    //             return process(data);
    //         });
    //     }
    // });

    var path = "{{ route('select.location') }}";

    $('.itemName').select2({
        placeholder: 'Select an item',
        ajax: {
            url: path,
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        console.log(item);
                        return {
                            text: item.location_name,
                        }
                    })
                };
            },
            cache: true
        }
    });

    $(function() {
        $('#daterange').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            },
        });
    });

    $('#daterange').on('apply.daterangepicker', function(ev, picker) {
        var selectedDates = picker.startDate.format('M/DD hh:mm A') + ' - ' + picker.endDate.format('M/DD hh:mm A');
        $('#daterange span').text(selectedDates);
    });
    
    $(document).ready(function() {
       var categoryList = categoryFilter() ?? [];
       var formattedDate = null;
        getCarsList(categoryList,formattedDate);
    });

    function getCarsList(categoryList,formattedDate) {  

        $.ajax({
            method: 'GET',
            url: '{{ route('cars.list') }}',
            data: {
                categories: categoryList,
                // startDate: formattedDate.startDate,
                selectedDate: formattedDate,
            },
            success: function(response) {

                if (response.status) {
                    $("#carListing").html(response.html);
                } else {
                    console.error('Failed to load cars: ' + response.message);
                }
            },
        });
    }

    $(".select_category").change(function() {
         categoryFilter();
    });

    function categoryFilter() {
        var categoryList = [];
        $(".select_category").each(function() {
            if ($(this).is(":checked") == true) {
                categoryList.push($(this).val());
            }
        })
        //  console.log(categoryList);
          return categoryList;
    }

    function startEndDateDetails(start, end) {
        var  startEndDateDetails = {};
        var startDate = $('#daterange').data('daterangepicker').startDate;
        var endDate = $('#daterange').data('daterangepicker').endDate;
        var formattedStartDate = moment(startDate).format('YYYY-MM-DD');
        var formattedEndDate = moment(endDate).format('YYYY-MM-DD');
        startEndDateDetails.startDate = formattedStartDate;
        startEndDateDetails.endDate = formattedEndDate;

        return startEndDateDetails;
    }
    
    $(document).find('#filterSearchButton').click(function() {
        var categoryList = categoryFilter() ?? [];
        var formattedDate = startEndDateDetails() ?? [];
        getCarsList(categoryList,formattedDate);
        
    });
    
    $(document).find('#dateLocationFiltrButton').click(function(e) {
        e.preventDefault();
        var categoryList = categoryFilter() ?? [];
        var formattedDate = startEndDateDetails() ?? [];
        getCarsList(categoryList,formattedDate);
    });


    
</script>
