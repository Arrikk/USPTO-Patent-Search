let link = "/api/products";
axios.get(link + "?bruiz=start").then((res) => {
  res.data.data.forEach(productsItem);
  NioApp.DataTable(".datatable-init-product", {
    responsive: {
      details: true,
    },
    ordering: true,
    columnDefs: [
      { orderable: true, targets: [0], },
      { className: 'text-wrap word-break', targets: [1, 2, 3, 4, 5], },
      { orderable: false, targets: "_all" },
    ],
    order: [[0, 'asc']],
    lengthMenu: [
      [10, 15, 50, 100, -1],
      [10, 15, 50, 100, "All"],
    ],
    pageLength: 50,
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
          columns: [0, 1, 2, 3, 4, 5],
        },
      },
      {
        extend: "csv",
        charset: "UTF-8",
        bom: true,
        text: "CSV",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5],
          modifier: {
            search: "none",
          },
        },
      },
    ],
  });
});

function productsItem(e, i) {
  $("tbody").append(`
    <tr>
          <td class="is-editable" id="${e.id}">${e.yj_code ?? "__"}</td>
          <td class="text-wrap word-break">${e.product_name ?? "__"}</td>
          <td class="text-wrap word-break">${e.standard_unit}</td>
          <td class="text-wrap word-break">${e.common_name_1}</td>
          <td class="text-wrap word-break">${e.manufacturing_and_marketing_approval_manufacturer}</td>
          <td class="text-wrap word-break">${bz.dateF(e.createdAt)}</td>
          <td><a class='btn btn-sm btn-outline-primary' href="/product-information/?product=${
            e.id
          }">Details</a></td>
     </tr>
 `);
}

$("#import-products").on("change", function () {
  $(".upload-button").attr("disabled", false);
});

$("button.upload-button").on("click", function () {
  let form = document.getElementById("upload-form");
  let btn = $(this);

  btn.html(bz.loading).attr("disabled", true);
  $.ajax({
    url: "/api/products/import",
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
      // location.reload();
    },
    error: function (e) {
      btn
        .html('<em class="icon ni ni-upload-cloud"></em><span>Upload</span>')
        .attr("disabled", false);
      let error = e.responseJSON.error;
      if (typeof error == "object") {
        error.forEach((e) => {
          NioApp.Toast(e, "error");
        });
      } else {
        Swal.fire("Failed", e.responseJSON.error, "error");
      }
    },
  });
});
