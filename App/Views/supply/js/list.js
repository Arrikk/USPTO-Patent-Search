let get = new URLSearchParams(location.search);
let companyId = get.get("company");

axios
  .get(`/api/supplies?bruiz=start${companyId ? `&company=${companyId}` : ``}`)
  .then((res) => {
    res.data.data.forEach(tabledataItem);
    $("h3.nk-block-title.page-title").text();
    NioApp.DataTable(".datatable-init-ini", {
      responsive: {
        details: true,
      },
      ordering: true,
      columnDefs: [
        { orderable: true, targets: [0], },
        {
            targets: [5],
            render: function( data, type, row, meta ) {
                if(data) console.log(arguments)
                return type === 'display' ?  ( data ? `<a href="${data}" target="_blank">○</a>` : '') : data;
            }
        },
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
        url: "/api/supplies" + location.search,
        headers: bz.headers,
      },
      destroy: true,
      // buttons: [
      //   "excel",
      //   {
      //     extend: "csv",
      //     charset: "UTF-8",
      //     bom: true,
      //     text: "Copy all data",
      //     exportOptions: {
      //       modifier: {
      //         search: "none",
      //       },
      //     },
      //   },
      // ],
    });
  });

function tabledataItem(e) {

  let shippment = $(e.shippment_status).find(':selected').val()
  let corr = $(e.correspondence_status).find(':selected').val()

  $("tbody").append(`
       <tr>
             <td class="lively">${e.yj_code}</td>
             <td>
                <a href="/supply/?product=${e.product_name}&code=${
                  e.yj_code
                }&sh=${shippment}&cr=${corr}&dt=${encodeURI(e.expected_time)}&mt=${encodeURI(e.material_address)}">${e.product_name}
                </a>
            </td>
             <td>${e.shippment_status}</td>
             <td>${e.correspondence_status}</td>
             <td>${e.expected_time}</td>
             <td>${e.material_address}</td>
             <td>${bz.dateF(e.createdAt)}</td>
             <td>${bz.dateF(e.updatedAt)}</td>
        </tr>
    `);
}

$(document).on("change", "select.change_status", function () {
  $(this).removeClass("status_changed").addClass("status_changed");
});

$("#update-selection").on("click", function () {
  let changed = $("table.datatable-init-ini").find("select.status_changed");
  let btn = $(this);
  if (changed.length > 0) {
    let data = [];
    changed.each((i, item) => {
      data.push({
        id: $(item).data("id"),
        name: $(item).attr("name"),
        value: $(item).val(),
      });
    });
    btn.data("originalHtml", btn.html());
    btn.html(bz.loading).prop("disabled", true);
    axios
      .post("/api/supply/update", { data }, { headers: bz.headers })
      .then((res) => {
        Swal.fire("Update", "Supply information changed", "success");
        console.log(res.data);
      })
      .catch((err) => {
        Swal.fire("Error", err.response.data.error, "error");
      })
      .then(()=>{
        btn.html(btn.data("originalHtml")).prop("disabled", false);
      });
  }
});

$(document).on("click", ".delete-supply", function () {
  let id = $(this).data("delete");
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: `Yes, delete it!`,
  }).then(function (result) {
    if (result.value) {
      axios
        .get(`/api/supply/delete?id=${id}`)
        .then((res) => {
          Swal.fire("Deleted", "Supply Deleted Deleted", "success");
          window.location.reload();
        })
        .catch((err) => {
          // toastr.clear();
          Swal.fire("Error", err.response.data.error, "error");
        });
    }
  });
});
