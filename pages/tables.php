<?php require_once'actions/recherchesDates.php'; ?>
  
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-center text-capitalize ps-3">Table des messages </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
            <div class="d-flex">
              <button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Rechercher
              </button>

            </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Les dates </h1>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
          <div class="mb-3">
            <label for="dateDebut" class="form-label">Date de début :</label>
            <input type="date" id="dateDebut" name="dateDebut" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="dateFin" class="form-label">Date de fin :</label>
            <input type="date" id="dateFin" name="dateFin" class="form-control" required>
          </div>
          
          <div class="modal-footer">
            <button type="submit" name="valider" class="btn btn-primary">Valider</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="example">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mobiles</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date d'envoi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Messages</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Etat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                            foreach ($results as $row) {
                        ?>
                        <tr data-date=<?= $row["dateEnvoi"] ?>>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><?= $row["id"] ?></h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $row["mobile"] ?></p>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?= $row["dateEnvoi"] ?></span>
                          </td>
                          <td class="align-middle text-center"> 
                            <?php
                              echo (mb_substr($row["message"], 0, 4, 'UTF-8').'...'); // Affiche "Bonjour, je suis"
                            ?>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row["id"]?>">
                              Lire ...
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?=$row["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Message du <?= $row["dateEnvoi"] ?> à <?= $row["mobile"] ?></h1>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                                  </div>
                                  <div class="modal-body">
                                  <?=$row["message"]?>"
                                  </div>
                                  <div class="modal-footer">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm
                            <?php
                                if( $row["etat"] == 1 ){
                                    echo 'bg-gradient-success';
                                }else{
                                    echo 'bg-gradient-danger';
                                }
                            ?>"><?php
                            if( $row["etat"] == 1 ){
                                echo 'Envoyé';
                            }else{
                                echo 'En attente';
                            }
                        ?></span>
                        
                          </td>
                        </tr>
                                
                        <?php
                            }
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.0/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.0/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.0/dist/extensions/export/bootstrap-table-export.min.js"></script>

<script>
  var $table = $('#table')
  var $remove = $('#remove')
  var selections = []

  function getIdSelections() {
    return $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id
    })
  }

  function responseHandler(res) {
    $.each(res.rows, function (i, row) {
      row.state = $.inArray(row.id, selections) !== -1
    })
    return res
  }

  function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })
    return html.join('')
  }

  function operateFormatter(value, row, index) {
    return [
      '<a class="like" href="javascript:void(0)" title="Like">',
      '<i class="fa fa-heart"></i>',
      '</a>  ',
      '<a class="remove" href="javascript:void(0)" title="Remove">',
      '<i class="fa fa-trash"></i>',
      '</a>'
    ].join('')
  }

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like action, row: ' + JSON.stringify(row))
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function totalTextFormatter(data) {
    return 'Total'
  }

  function totalNameFormatter(data) {
    return data.length
  }

  function totalPriceFormatter(data) {
    var field = this.field
    return '$' + data.map(function (row) {
      return +row[field].substring(1)
    }).reduce(function (sum, i) {
      return sum + i
    }, 0)
  }

  function initTable() {
    $table.bootstrapTable('destroy').bootstrapTable({
      height: 550,
      locale: $('#locale').val(),
      columns: [
        [
          {
            field: 'state',
            checkbox: true,
            rowspan: 2,
            align: 'center',
            valign: 'middle'
          },
          {
            title: 'Item ID',
            field: 'id',
            rowspan: 2,
            align: 'center',
            valign: 'middle',
            sortable: true,
            footerFormatter: totalTextFormatter
          },
          {
            title: 'Item Detail',
            colspan: 3,
            align: 'center'
          }
        ],
        [
          {
            field: 'name',
            title: 'Item Name',
            sortable: true,
            footerFormatter: totalNameFormatter,
            align: 'center'
          },
          {
            field: 'price',
            title: 'Item Price',
            sortable: true,
            align: 'center',
            footerFormatter: totalPriceFormatter
          },
          {
            field: 'operate',
            title: 'Item Operate',
            align: 'center',
            clickToSelect: false,
            events: window.operateEvents,
            formatter: operateFormatter
          }
        ]
      ]
    })
    $table.on('check.bs.table uncheck.bs.table ' +
      'check-all.bs.table uncheck-all.bs.table',
    function () {
      $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)

      // save your data, here just save the current page
      selections = getIdSelections()
      // push or splice the selections if you want to save all data selections
    })
    $table.on('all.bs.table', function (e, name, args) {
      console.log(name, args)
    })
    $remove.click(function () {
      var ids = getIdSelections()
      $table.bootstrapTable('remove', {
        field: 'id',
        values: ids
      })
      $remove.prop('disabled', true)
    })
  }

  $(function() {
    initTable()

    $('#locale').change(initTable)
  })
</script>