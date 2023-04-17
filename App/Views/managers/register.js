$("#register-form").on("submit", function (e) {
  e.preventDefault();
  let btn = $("#register");
  let form = $(this);

  let loginId = $("#loginId").val();
  let password = $("#password").val();
  let cpassword = $("#c-password").val();
  let authority = $(".authority:checked").val();
  // let email = $("#email").val();
  // let phone = $("#phone").val();

  console.log(authority);

  if (loginId == "" || cpassword == "" || password == "") {
    NioApp.Toast("All fields are required");
  } else if (cpassword != password) {
    NioApp.Toast("Password Mismatch");
  } else {
    btn
      .html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`
      )
      .attr("disabled", "disabled");

    let data = {
      login: loginId,
      authority,
      password,
      phone,
    };
    axios
      .post("/api/company/register", data)
      .then((res) => {
        btn.text("Register").attr("disabled", false);
        NioApp.Toast("Action Completed", "success");
        $(form)[0].reset();
      })
      .catch((err) => {
        btn.text("Register").attr("disabled", false);
        NioApp.Toast(err.response.data.error, "error");
      });
  }
});
