    // Navbar toggle icon
    $(document).on('show.bs.collapse', '#navbarNavAltMarkup', function (e) {
        $('.animated-icon2').addClass('open');
        $(this).on('hide.bs.collapse', function () {
            $('.animated-icon2').removeClass('open');
        })
    });

    //Dropdown toggle icon
    $(document).on('show.bs.dropdown', '.has-dropdown', function (e) {
        $(this).find('.dropdown-icon').addClass('rotate');
        $(this).on('hide.bs.dropdown', function () {
            $('.dropdown-icon').removeClass('rotate');
        })
    });
