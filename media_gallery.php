<?php include "./include/header.php";
include "./ejnff/db.php";
?>
<style>
    body {
        background: linear-gradient(264deg, rgba(23, 23, 23, 1) 0%, rgba(33, 33, 33, 1) 49%, rgba(23, 23, 23, 1) 100%);
        font-family: 'Open Sans', sans-serif;
        margin: 0;
    }

    #container {
        margin: auto;
    }

    .header h1 {
        text-align: center;
        background: -webkit-linear-gradient(#e3ca66, #b48e47);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 4.5em;
        font-family: 'Parisienne', cursive;
        margin-bottom: 15px;
    }

    .header p {
        text-align: center;
        background: -webkit-linear-gradient(#e3ca66, #b48e47);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
        font-size: 20px;
    }

    .grid-item {
        /* display: inline-block;
        height: 259px;

        overflow: hidden;
        text-align: center;
        width: 400px; */

        display: inline-block;
    text-align: center;
    width: 230px;
    padding: 2px;
    }

    .grid-item img {
        width: 100%;
        height: auto;
        filter: url(filters.svg#grayscale);
        filter: gray;
        /* -webkit-filter: grayscale(1); */
        transition: 0.9s;
    }

    .grid-item img:hover {
        filter: none;
    }

    .isotope-pager .pager {
        display: inline-block;
    }

    .filters {
        width: 100%;
        text-align: center;
        padding-bottom: 35px;
        padding-top: 20px;

    }

    .filters ul {
        list-style: none;
        padding: 20px 10px;
        box-shadow: -1px 1px 11px rgba(0, 0, 0, .4);
        margin: 0 40px;
        border-radius: 30px;
        background-color: #232323;
    }

    .filters li {
        display: inline-block;
        padding: 10px 25px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
    }

    .filters li a {
        color: #b6b6b6;
        text-decoration: none;
    }

    .filters li a:hover {
        color: #fff;
    }

    .filters li:hover {
        /* box-shadow: -1px 1px 11px rgba(0,0,0,.4);
	border-radius: 15px; */
    }

    .filters li.active a {
        color: #e3ca66;
        border: 1px solid #e3ca66;
        border-radius: 15px;
        box-shadow: -1px 1px 11px rgba(0, 0, 0, .4);
        padding: 10px 25px;
    }

    .isotope-pager a {
        margin: 6px 1px;
        display: inline-block;
        width: 50px;
        /* height: 60px; */
        line-height: 31px;
        color: #b6b6b6;
        font-weight: 600;
        transition: 0.3s;
        /* position: relative; */
        /* padding-right: 26px; */
        box-shadow: -1px 1px 11px rgba(0, 0, 0, .1);
        border-radius: 25px;
        background-color: #232323;
        border: .5px solid #e3ca66;
        text-decoration: none;
    }

    .isotope-pager a:hover {
        color: #fff;
        border: .5px solid #ffeeac;
        box-shadow: -1px 1px 10px 3px rgba(0, 0, 0, .1);
    }

    .isotope-pager .active {
        color: #e3ca66 !important;
        box-shadow: -1px 1px 10px 5px rgba(0, 0, 0, .1);
        border-radius: 25px;
        background-color: #161616;
        border: 1px dotted #e3ca66;
    }

    .isotope-pager .prev {
        border-radius: 30px 0 0 30px;
    }

    .isotope-pager .next {
        border-radius: 0 30px 30px 0;
    }

    .isotope-pager a::before,
    .isotope-pager a:after {
        content: "";
        position: absolute;
        border-top: 30px solid transparent;
        border-bottom: 30px solid transparent;
    }

    .isotope-pager .num::before,
    .next::before {
        border-right: 20px solid #2c3e50;
        right: 100%;
    }

    .isotope-pager .num:after,
    .prev:after {
        border-right: 20px solid #f1f1f1;
        right: 0;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        /* Black see-through */
        color: #f1f1f1;
        width: 100%;
        transition: .5s ease;
        opacity: 0;
        color: white;
        font-size: 14px;
        font-weight: 800;
        padding: 20px;
        text-align: center;
    }

    .grid-item:hover .overlay {
        opacity: 1;
    }

    /*-- footer --*/
    .footer {
        padding: .1em 0;
        background: linear-gradient(180deg, rgba(227, 202, 102, 1) 0%, rgba(180, 142, 71, 1) 100%);
        text-align: center;
        margin-top: 20px;
    }

    .footer p {
        color: #FFF;
        letter-spacing: 1px;
    }

    .footer p a {
        color: #fff;
    }

    .footer p a:hover {
        color: #fff;
        text-decoration: none;
    }

    /*-- footer --*/


    figure {
    margin: 2em 0;
    text-align: center;
}


figure img{
    /* width: 25%;    
    height: 350px;     */
    margin-top: 5%;

}
</style>
 
<!--title-->
<div class="heading-block heading-5cdd2723f9933 tal h-h1 vc_custom_1557997482100" style="margin-top:100px; text-align:center;">
                                   
  <h1 class="h">Media <span> Gallery </span></h1>
                                </div>
<!--title-->

<div id="container" class="isotope">
        
   <?php
    $event1 = mysqli_query($conn, "SELECT * FROM news_media");
    while ($event11 = mysqli_fetch_assoc($event1)) {
    ?>
        <div class="grid-item" data-filter="event">
            <span class="popupimg" href="./ejnff/news_media/<?php echo $event11['news_media']; ?>">
                <img src="./ejnff/news_media/<?php echo $event11['news_media']; ?>">
            </span>
            <!--<div class="overlay"><?php// echo $event11['title']; ?></div>-->
        </div>
    <?php } ?>
        
</div>

<div class="isotope-pager" style="padding-top: 15px; text-align:center;">
</div>


<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js'></script>
<script src="./script.js"></script>
<script>
    $(document).ready(function() {

        var itemSelector = '.grid-item';
        var $container = $('#container').isotope({
            itemSelector: itemSelector,
            masonry: {
                columnWidth: itemSelector,
                isFitWidth: true
            }
        });
        //Ascending order
        var responsiveIsotope = [
            [480, 7],
            [720, 10]
        ];
        var itemsPerPageDefault = 12;
        var itemsPerPage = defineItemsPerPage();
        var currentNumberPages = 1;
        var currentPage = 1;
        var currentFilter = '*';
        var filterAtribute = 'data-filter';
        var pageAtribute = 'data-page';
        var pagerClass = 'isotope-pager';

        function changeFilter(selector) {
            $container.isotope({
                filter: selector
            });
        }
      

        function goToPage(n) {
            currentPage = n;
            var selector = itemSelector;
            selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';
            selector += '[' + pageAtribute + '="' + currentPage + '"]';
            changeFilter(selector);
        }

        function defineItemsPerPage() {
            var pages = itemsPerPageDefault;
            for (var i = 0; i < responsiveIsotope.length; i++) {
                if ($(window).width() <= responsiveIsotope[i][0]) {
                    pages = responsiveIsotope[i][1];
                    break;
                }
            }
            return pages;
        }

        function setPagination() {
            var SettingsPagesOnItems = function() {
                var itemsLength = $container.children(itemSelector).length;
                var pages = Math.ceil(itemsLength / itemsPerPage);
                var item = 1;
                var page = 1;
                var selector = itemSelector;
                selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';
                $container.children(selector).each(function() {
                    if (item > itemsPerPage) {
                        page++;
                        item = 1;
                    }
                    $(this).attr(pageAtribute, page);
                    item++;
                });
                currentNumberPages = page;
            }();
            var CreatePagers = function() {
                var $isotopePager = ($('.' + pagerClass).length == 0) ? $('<div class="' + pagerClass + '"></div>') : $('.' + pagerClass);
                $isotopePager.html('');
                for (var i = 0; i < currentNumberPages; i++) {
                    var $pager = $('<a href="javascript:void(0);" class="pager" ' + pageAtribute + '="' + (i + 1) + '"></a>');
                    $pager.html(i + 1);
                    $pager.click(function() {
                        var page = $(this).eq(0).attr(pageAtribute);
                        goToPage(page);
                    });
                    $pager.appendTo($isotopePager);
                }
                $container.after($isotopePager);
            }();
        }
        setPagination();
        goToPage(1);
        //Adicionando Event de Click para as categorias
        $('.filters a').click(function() {
            var filter = $(this).attr(filterAtribute);
            currentFilter = filter;

            setPagination();
            goToPage(1);
        });
        //Evento Responsivo
        $(window).resize(function() {
            itemsPerPage = defineItemsPerPage();
            setPagination();
        });
    });
    $(document).ready(function() {
        // filter items on button click
        $('.filter-button-group').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $('.grid').isotope({
                filter: filterValue
            });
            $('.filter-button-group li').removeClass('active');
            $(this).addClass('active');
        });
    })
    $(document).ready(function() {
        // filter items on button click
        $('.isotope-pager').on('click', 'a', function() {
            var filterValue = $(this).attr('data-page');
            $('.isotope-pager a').removeClass('active');
            $(this).addClass('active');
        });
    })
    $(document).ready(function() {
        $('.popupimg').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    });
</script>
<?php include "./include/footer.php"; ?>