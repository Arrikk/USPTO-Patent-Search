</div>
</div>
<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="/Public/assets/js/bundle.js?ver=3.0.0"></script>
<script src="/Public/assets/js/scripts.js?ver=3.0.0"></script>
<script src="/Public/assets/js/charts/gd-default.js?ver=3.0.0"></script>
<script src="/Public/assets/js/charts/chart-ecommerce.js?ver=3.0.0"></script>
<script src="/Public/assets/js/charts/chart-analytics.js?ver=3.0.0"></script>
<script src="/Public/assets/js/libs/datatable-btns.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> -->

<script src="/Public/js/axios.min.js"></script>
<script>
    let container = $(".nk-tb-list.nk-tb-ulist");
    let innerContainer = container.find(".nk-tb-item:not(.nk-tb-head)");

    let limit = $("#limit-list").find("li");
    let order = $("#order-list").find("li").not(".order-title");
    let page = $("#select-page");


    let token = localStorage.getItem("token") ?
        localStorage.getItem("token") :
        "";

    axios.defaults.headers['authorization'] = `Bearer ${token}`

    window.bz = {
        defaults: {
            items: [],
            totalItems: 0,
            page: 1,
            loading: true,
            limit: 10,
            order: "DESC",
        },
        headers: {
            authorization: `Bearer ${token}`,
        },
        money: (money) => {
            return (+money).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        },
        sign: '$',
        currency: 'USD',
        dateF: (dte) => {
            let options = {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false,
            }
            let theDay = new Date(dte);
            return theDay.toLocaleDateString('ja-JP', options).replaceAll('/', '-')
        },
        loader: `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`
    }

    $(limit).click(function() {
        $(limit).removeClass("active");
        $(this).addClass("active");
        levi.defaults.items = []
        levi.defaults.limit = +$(this).text();
        init();
    });

    $(order).click(function() {
        $(order).removeClass("active");
        $(this).addClass("active");
        levi.defaults.order = $(this).text();
        init();
    });


    function setPageList(list = 1) {
        list = list < 1 ? 1 : list;
        $(page).html("");

        if (list > 1) {
            for (i = 0; i <= list - 1; i++) {
                $(page).append(`<option value=${i}">${i}</option>`);
            }
        }
        $("#total-desc-count").text(
            `${levi.defaults.totalItems} ${levi.defaults.totalItems > 1 ? levi.desc : levi.desc+'s'}`
        );
    }

    $('a.btn-trigger').hide()
    $('.language-item').on('click', function() {
        let lang = $(this).data('language')
        axios.post('/language/', {
            lang: lang
        }).then(res => {
            localStorage.setItem('language', lang)
            location.reload()
        }).catch(err => {
            location.reload()
        })
    })
    let lang = localStorage.getItem('language') ? localStorage.getItem('language') : false;
    if (lang) {
        let currentLangFlag = $(`a[data-language="${lang}"]`).find('img').attr('src')
        $('.currentLang').attr('src', currentLangFlag)
        // console.log(currentLang)
        axios.post('/language/', {
            lang: lang
        }).then(res => {}).catch(err => {})
    }
</script>
</body>

</html>
