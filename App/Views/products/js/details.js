link = "/api/products";
axios.get(link + "?bruiz=start").then((res) => {
  res.data.data.forEach(productsItem);
  NioApp.DataTable(".datatable-init-product", {
    responsive: {
      details: true,
    },
      ordering: true,
    columnDefs: [
      { orderable: true, targets: [1] },
      { orderable: false, targets: "_all" },
    ],
    order: [[1, 'asc']],
    lengthMenu: [[10, 15, 50, 100, -1], [10, 15, 50, 100, 'All']],
    pageLength: 50,
    serverSide: true,
    deferLoading: res.data.total,
    ajax: {
      url: link,
      headers: bz.headers,
    },
    destroy: true,
    buttons: [
      "excel",
      {
        extend: "csv",
        charset: "UTF-8",
        bom: true,
        text: "Copy all data",
        exportOptions: {
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
          <td class="lively">${i + 1}</td>
          <td class="is-editable" id="${e.id}">${e.yj_code ?? "__"}</td>
          <td>${e.product_name ?? "__"}</td>
          <td>${e.standard_unit}</td>
          <td>${e.common_name_1}</td>
          <td>${e.manufacturing_and_marketing_approval_manufacturer}</td>
          <td>${bz.dateF(e.createdAt)}</td>
          <td><a class='btn btn-sm btn-outline-primary' href="/product-information/?product=${
            e.id
          }">Details</a></td>
     </tr>
 `);
}
