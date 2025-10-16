
$(document).ready(function () {

    var itemSelector_1 = '.gallery-item';

    var $container1 = $('.gallery-row');
    $container1.imagesLoaded(function () {
        $container1.isotope({
            itemSelector: itemSelector_1,
            masonry: {
                horizontalOrder: true
            }
        });
    });

    //Ascending order
    var responsiveIsotope = [
        [480, 4],
        [720, 6]
    ];

    var itemsPerPageDefault = 12;
    //var itemsPerPage = defineItemsPerPage();
    var itemsPerPage = 9;
    var currentNumberPages = 1;
    var currentPage = 1;
    var startPage = 1;
    var currentFilter = '*';
    var filterAtribute = 'data-filter';
    var pageAtribute = 'data-page';
    var pagerClass = 'isotope-pager';

    function changeFilter(selector) {
        $container1.isotope({
            filter: selector
        });
    }


    function goToPage(n) {
        currentPage = n;

        var selector = itemSelector_1;
        //selector += ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : '';
        selector += '[' + pageAtribute + '="' + currentPage + '"]';
        changeFilter(selector);
    }


    function setPagination() {

        var SettingsPagesOnItems = function () {

            var itemsLength = $container1.children(itemSelector_1).length;

            var pages = Math.ceil(itemsLength / itemsPerPage);
            var item = 1;
            var page = 1;
            var selector = itemSelector_1;
            selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';

            $container1.children(selector).each(function () {
                if (item > itemsPerPage) {
                    page++;
                    item = 1;
                }
                $(this).attr(pageAtribute, page);
                item++;
            });

            currentNumberPages = page;

        }();

        var CreatePagers = function () {

            var $isotopePager = ($('.' + pagerClass).length == 0) ? $('<div class="' + pagerClass + ' text-center"></div>') : $('.' + pagerClass);

            $isotopePager.html('');


            var $page_prev_btn = $('<a type="button" class="btn btn-primary previous_btn"><i class="fa fa-angle-left" aria-hidden="true"></i></a>');



            var $page_next_btn = $('<a type="button" class="btn btn-primary next_btn"><i class="fa fa-angle-right" aria-hidden="true"></i></a>');
            $page_prev_btn.appendTo($isotopePager);

            for (var i = 0; i < currentNumberPages; i++) {
                var $pager = $('<a href="javascript:void(0);" class="pager" ' + pageAtribute + '="' + (i + 1) + '"></a>');
                $pager.html(i + 1);

                $pager.click(function () {
                    var page = $(this).eq(0).attr(pageAtribute);
                    $('.isotope-pager a').removeClass("active");
                    $(this).addClass("active");
                    goToPage(page);
                });

                $pager.appendTo($isotopePager);
                $isotopePager.find('a.pager:first').addClass('active');
            }

            $page_next_btn.appendTo($isotopePager)
            $container1.after($isotopePager);

            $page_prev_btn.click(function () {
                if (currentPage > startPage) {
                    $('.previous_btn').removeAttr('disabled');
                    var page = currentPage - 1;
                    var page = currentPage - 1 < startPage
                        ? startPage
                        : currentPage - 1;
                    $('.isotope-pager a').removeClass("active");
                    $('.pager[data-page="' + page + '"]').addClass('active');
                    goToPage(page);

                }
                else {
                    $('.previous_btn').attr('disabled', 'disabled');
                }


            });
            $page_next_btn.click(function () {
                if (currentPage < currentNumberPages) {
                    $('.next_btn').removeAttr('disabled');
                    var page = currentPage + 1 > currentNumberPages
                        ? currentNumberPages
                        : currentPage + 1;
                    $('.isotope-pager a').removeClass("active");
                    $('.pager[data-page="' + page + '"]').addClass('active');
                    goToPage(page);
                }
                else {
                    $('.next_btn').attr('disabled', 'disabled');
                }
            });

        }();

    }

    setPagination();
    goToPage(1);

});