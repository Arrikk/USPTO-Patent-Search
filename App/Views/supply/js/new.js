let URLParams = new URLSearchParams(location.search)
productName = URLParams.get('product'),
productCode = URLParams.get('code'),
shippment = URLParams.get('sh'),
cor = URLParams.get('cr'),
address = URLParams.get('mt'),
date = URLParams.get('dt');


$('input[name="yj_code"]').val(productCode ?? '')
$('input[name="product_name"]').val(productName ?? '')
$('input[name="product_name_main"]').val(productName ?? '')
$('select[name="shippment_status"]').find(`option[value="${shippment}"]`).attr('selected', true)
$('select[name="correspondence_status"]').find(`option[value="${cor}"]`).attr('selected', true)
$('input[name="material_val"]').val(decodeURI(address ?? ''))
$('input[name="expected_time"]').val(date ?? '')

$('#supply-form').on('submit', function(e){
    e.preventDefault();
    let form = this
    let yj_code = $('input[name="yj_code"]').val()
    let product_name = $('input[name="product_name"]').val()
    let shippment_status = $('select[name="shippment_status"]').val()
    let correspondence_status = $('select[name="correspondence_status"]').val()
    let expected_time = $('input[name="expected_time"]').val()
    let btn = $('#register-btn')

    console.log(product_name);

    if(yj_code == '' || product_name == '' || shippment_status == '' || correspondence_status == ''){
        NioApp.Toast("Some input fields are required", 'warning')
    }else{
        
        btn.html(bz.loader).attr('disabled', 'disabled')
        $.ajax({
            url: '/api/supply/',
            method: 'POST',
            headers: bz.headers,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(e){
                console.log(e)
                btn.text('Register').attr('disabled', false)
                NioApp.Toast("You added a new supply information", 'success')
                $(form)[0].reset()
            },
            error: function(e){
                btn.text('Register').attr('disabled', false)
                NioApp.Toast(e.responseJSON.error, 'error')
            }
        })
    }
})

$('input[name="yj_code"]').on('change', function(){
    let pName = $('input[name="product_name_main"]')
    let pName2 = $('input[name="product_name"]')
    let code = $(this).val()
    axios.get('/api/products/'+code, {headers: bz.headers})
    .then(res => {
        pName.val(res.data.product_name ?? '')
        pName2.val(res.data.product_name ?? '')
    }).catch(err => {
        pName.val('')
        pName2.val('')
        console.log(err.response)
    })
})


$('input[type="file"]').on('change', function(e){
    let file = e.target.files[0]
    $('input[name="material_val"]').val(file.name)
})