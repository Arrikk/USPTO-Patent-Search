let param = new URLSearchParams(location.search);
let user = param.get("user");
let userData = null;

if (user) {
  axios
    .get("/api/user?user=" + user)
    .then((res) => {
      setData(res.data);
      userData = res.data;
    })
    .catch((err) => {
      NioApp.Toast(err.response.data.error, "error");
    });
}

$("#delete-user").on("click", function () {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: `Yes, delete it!`,
  }).then(function (result) {
    if (result.value) {
      axios
        .get(`/api/manager/delete?id=${userData.id}`, {
          headers: bz.headers,
        })
        .then((res) => {
          Swal.fire("Deleted", "User Deleted", "success");
          window.location = '/managers'
        })
        .catch((err) => {
          // toastr.clear();
          Swal.fire("Error", err.response.data.error, "error");
        });
    }
  });
});

function setData(data) {
  $(".approval_code").val(data.approvalCode);
  $(".company_name").val(data.companyName);
  $(".username").val(data.username);
  $(".email").val(data.email).attr('disabled', true);
  $(".phone").val(data.phone).attr('disabled', true);
  if(data.isManager){
    $('input[value="pharmaceutical_company_manager"]').attr('checked', true)
  }
  if(data.isCompany){
    $('input[value="pharmaceutical_company"]').attr('checked', true)
  }
}



$('#update-user').on('click', function(){
    let btn = $(this)
    
    let loginId = $('.username')
    let password = $('#password')
    let cpassword = $('#c-password')
    let authority = $('.authority:checked')

    if(password.val() != ''){
        if(password.val() != cpassword.val()){
            NioApp.Toast("Password Mismatch", 'warning')
        }
    }

    let data = {
        username: loginId.val(),
        password: password.val(),
        authority: authority.val(),
        id: userData.id
    }

    axios.post('/api/account/update', data)
    .then(res => {
        NioApp.Toast("Action Completed", "success")
        password.val('')
        cpassword.val('')
    }).catch(err => {
        NioApp.Toast(err.response.data.error, "error")
    })

})
