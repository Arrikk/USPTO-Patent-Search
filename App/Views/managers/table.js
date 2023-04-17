function tableItem(data) {
  $(".mgrs-table").append(`
        
    <tr class="tb-tnx-item">
    <td class="tb-tnx-info">
        <div class="tb-tnx-date">
            <span class="date">${data.username ?? '__'}</span>
            <span class="date">${data.classification ?? '__'}</span>
        </div>
    </td>
    <td class="tb-tnx-amount">
        <div class="tb-tnx-status">
            <a href="/managers/details?user=${data.id}" class="badge badge-dot bg-primary">details</a>
        </div>
    </td>
</tr>
    `);
}

axios
  .get("/api/account/reps")
  .then((res) => {
    $(".mgrs-table").html("");
    res.data.forEach(tableItem);
  })
  .catch((err) => {
    console.log(err.response.data);
  });
