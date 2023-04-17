$("input.approval_code").on("change", function () {
  let value = $(this).val();
  axios
    .get("/api/approved/search?code=" + value, {
      headers: bz.headers,
      body: value,
    })
    .then((res) => {
      $("input.company_name").val(res.data.name);
    })
    .catch((err) => {
      console.log(err.response.data);
    });
});

$("#register-new").on("submit", function (e) {
  e.preventDefault();
  let form = $(this);
  let btn = $("#register-btn");
  let code = $("input.company_name").val();
  // let email = $("input.email").val();
  // let phone = $("input.phone").val();
  let password = $("input#password").val();
  let cPassword = $("#c-password").val();

  // if (code != "" || password != "" || cPassword != "") {
  //   if (password != cPassword) {
  //     NioApp.Toast("Password Needs to be revisited", "warning");
  //   } else {
  //       btn.html(bz.loading).attr('disabled', 'disabled')
  //       $.ajax({
  //           url: '/api/company/save',
  //           method: 'POST',
  //           headers: bz.headers,
  //           data: new FormData(this),
  //           processData: false,
  //           contentType: false,
  //           success: function(e){
  //               btn.text('Register').attr('disabled', false)
  //               NioApp.Toast("Registeration Successful", 'success')
  //               $(form)[0].reset()
  //           },
  //           error: function(e){
  //               btn.text('Register').attr('disabled', false)
  //               console.log(e)
  //               NioApp.Toast(e.responseJSON.error, 'error')
  //           }
  //       })
  //   }
  // }else{
  //     NioApp.Toast("Input Fields are required")
  // }
  if (code == "" || password == "" ) {
    NioApp.Toast("Input Fields are required");
  } else {
    if (password != cPassword) {
      NioApp.Toast("Password Needs to be revisited", "warning");
    } else {
      btn.html(bz.loading).attr("disabled", "disabled");
      $.ajax({
        url: "/api/company/save",
        method: "POST",
        headers: bz.headers,
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (e) {
          btn.text("Register").attr("disabled", false);
          NioApp.Toast("Registeration Successful", "success");
          $(form)[0].reset();
        },
        error: function (e) {
          btn.text("Register").attr("disabled", false);
          console.log(e);
          NioApp.Toast(e.responseJSON.error, "error");
        },
      });
    }
  }
});

$("#approve-new").on('submit', function (e) {
  e.preventDefault()
  let code = $('input.code').val()
  let name = $('input.name').val()
  let btn = $('button#approval_btn')

  if(code == "" || name == ""){
    NioApp.Toast("Complete the above form", 'warning');
  }else{
    btn.html(bz.loading).attr('disabled', true)
    axios.post('/api/approved/new', {code, name})
    .then(res => {
      console.log(res)
      NioApp.Toast("Approved", 'success')
      location.reload()
    }).catch(err => {
      NioApp.Toast(err.response.data.error, "error")
    })
  }
})
