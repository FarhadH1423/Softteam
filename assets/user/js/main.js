$(function ($) {
    "use strict";

    if ($("#datepicker").length > 0) {
        $("#datepicker").datepicker();
    }
    $(function () {

        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there

        // now grab every link from the navigation
        $('li.user-item a').each(function () {
            // and test its normalized href against the url pathname regexp
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).addClass('active');
            }
        });
    });
    if ($('#example').length > 0) {
        $('#example').DataTable();
    }

    // USER NOTIFICATION

    $(document).ready(function () {
        setInterval(function () {
            $.ajax({
                type: "GET",
                url: $("#notf-count").data('href'),
                success: function (data) {
                    $("#notf-count").html(data);
                }
            });
        }, 5000);
    });


    $('#notf').on('click', function () {
        $("#notf-count").html('0');
        $('#notf-show').load($("#notf-show").data('href'));
        $('.main-menu #main-menu .navbar-nav .nav-item.dropdown #notf-show').removeClass('hidden');
    });

    $('#notf').on('mouseover', function () {
        $("#notf-count").html('0');
        $('#notf-show').load($("#notf-show").data('href'));
        $('.main-menu #main-menu .navbar-nav .nav-item.dropdown #notf-show').removeClass('hidden');
    });

    $(document).on('click', '#notf-clear', function (event) {
        $('.main-menu #main-menu .navbar-nav .nav-item.dropdown #notf-show').addClass('hidden');
        $.get($('#notf-clear').data('href'));
    });

    // USER NOTIFICATION ENDS


});