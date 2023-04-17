$("#update-login").on("click", function () {
  let login = $("#login-id").val();
  let btn = $(this);
  let id = $("#__login").val();

  btn.html(
    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`
  );
  axios
    .post(
      "/api/account/update",
      { username: login, id }
    )
    .then((res) => {
      console.log(res.data);
      btn.text("Update");
      NioApp.Toast("Login Updated", "success");
    })
    .catch((err) => {
      console.log(err.response.data);
      NioApp.Toast("Update Failed", "error");
      btn.text("Update");
    });
});

$("#update-password").on("click", function () {
  let oldPassword = $("#old-password");
  let newPassword = $("#new-password");
  let cPassword = $("#confirm-password");
  let btn = $(this);

  if (oldPassword.val() == "" || newPassword.val() == "") {
    NioApp.Toast("Input fields are required", "error");
  } else if (newPassword.val() !== cPassword.val()) {
    NioApp.Toast("New password and confirm password Mismatch", "error");
  } else {
    btn
      .html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`
      )
      .attr("disabled", "disabled");
    axios
      .post(
        "/api/password/update",
        {
          oldPassword: oldPassword.val(),
          newPassword: newPassword.val(),
        }
      )
      .then((res) => {
        NioApp.Toast(res.data.message, "success");
        btn.text("Update").attr("disabled", false);
        oldPassword.val("");
        cPassword.val("");
        newPassword.val("");
      })
      .catch((err) => {
        NioApp.Toast(err.response.data.error, "error");
        btn.text("Update").attr("disabled", false);
      });
  }
});
