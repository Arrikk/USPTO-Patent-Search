let link = "/api/companies";
let tb = "Company";
let type = "company";

const upload = (url, form, btn) => {
  $.ajax({
    url: url,
    method: "POST",
    headers: bz.headers,
    data: new FormData(form),
    processData: false,
    contentType: false,
    success: function (e) {
      Swal.fire("Imported", "CSV data imported", "success");
      btn
        .html('<em class="icon ni ni-upload-cloud"></em><span>Upload</span>')
        .attr("disabled", true);
      $(form)[0].reset();
      location.reload();
    },
    error: function (e) {
      Swal.fire("Failed", e.responseJSON.error, "error");
      btn
        .html('<em class="icon ni ni-upload-cloud"></em><span>Upload</span>')
        .attr("disabled", false);
    },
  });
};
if (location.pathname == "/companies") {
  $("#import-companies").on("change", function () {
    $(".upload-button").attr("disabled", false);
  });
  $("button.upload-button").on("click", function () {
    console.log("first");
    let form = document.getElementById("upload-form");
    let btn = $(this);

    btn.html(bz.loading).attr("disabled", true);

    upload("/api/company/import", form, btn);
  });
}

if (location.pathname == "/approved") {
  tb = "Approved";
  type = "approved";
  link = "/api/approved";

  $("#import-companies").on("change", function () {
    $(".upload-button").attr("disabled", false);
  });

  $("button.upload-button").on("click", function () {
    console.log("first");
    let form = document.getElementById("upload-form");
    let btn = $(this);

    btn.html(bz.loading).attr("disabled", true);
    upload("/api/approved/import", form, btn);
  });

  $(document).on("click", ".is-editable", function () {
    $(this).prop("contenteditable", true);
    $(this).addClass("needsUpdate");
  });

  $(document).keyup(".needsUpdate", function (e) {
    let textContent = e.target.innerText;
    let currentId = e.target.id;

    axios
      .post(
        "/api/approved/update",
        { id: currentId, name: textContent }
      )
      .then((res) => {
        console.log("Updated");
      });
  });
}

axios.get(link + "?bruiz=start").then((res) => {
  if (type == "company") {
    res.data.data.forEach(tableCompany);
  } else {
    res.data.data.forEach(tableApproved);
  }
  NioApp.DataTable(".datatable-init-ini", {
    responsive: {
      details: true,
    },
    ordering: false,
    columnDefs: [
        { className: 'text-wrap word-break', targets: [1, 3, 4], },
    ],
    pageLength: 50,
    lengthMenu: [
      [10, 15, 50, 100, -1],
      [10, 15, 50, 100, "All"],
    ],
    serverSide: true,
    deferLoading: res.data.total,
    ajax: {
      url: link,
      headers: bz.headers,
    },
    destroy: true,
    buttons: [
      {
        extend: "excel",
        exportOptions: {
          columns: type == "company" ? [0, 1, 2, 3, 4] : [0, 1, 2, 3],
          modifier: {
            search: "none",
          },
        },
      },
      {
        extend: "csv",
        charset: "UTF-8",
        bom: true,
        text: "CSV",
        exportOptions: {
          columns: type == "company" ? [0, 1, 2, 3, 4] : [0, 1, 2, 3],
          modifier: {
            search: "none",
          },
        },
      },
    ],
  });
});

function tableApproved(e, i) {
  $("tbody").append(`
         <tr>
               <td>${e.code}</td>
               <td class="is-editable text-wrap break-word" id="${e.id}">${e.name}</td>
               <td class="text-wrap break-word">${bz.dateF(e.createdAt)}</td>
               <td class="text-wrap break-word">${bz.dateF(e.updatedAt)}</td>
               <td><a class='btn btn-sm btn-outline-primary' href="/supply?company=${
                 e.code
               }">Supplies</a></td>
          </tr>
      `);
}
function tableCompany(e, i) {
  $("tbody").append(`
         <tr>
               <td>${e.approval_code}</td>
               <td class="text-wrap break-word">${e.company_name}</td>
               <td>${e.username}</td>
               <td class="text-wrap break-word">${bz.dateF(e.createdAt)}</td>
               <td class="text-wrap break-word">${bz.dateF(e.updatedAt)}</td>
               <td><a class="btn btn-sm btn-outline-primary" href="/managers/details?user=${
                 e.id
               }">View</a></td>
          </tr>
      `);
}
