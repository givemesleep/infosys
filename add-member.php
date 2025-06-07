<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Projects | Front - Admin &amp; Dashboard Template</title>

  <link rel="shortcut icon" href="./favicon.ico">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
  <link rel="stylesheet" href="./assets/vendor/quill/dist/quill.snow.css">
  <link rel="preload" href="./assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="./assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <?php 
    include_once 'view/layout_head.php';
    include_once 'view/layout_side.php';    
  ?>

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Information Management</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;"><b>Create New Member</b></a></li>
              </ol>
            </nav>

            <h1 class="page-header-title">Create New Member</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->


      <!-- Card -->
      <div class="card">
        <div class="card-header">
            <h5 class="card-header-title">Add New Member</h5>
        </div>
    
        <div class="card-body">
    
            <form action="" method="post">
                <div class="row g-3">
                    
                    <div class="col-md-3">
                        <label for="lname">Last Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name" required>                
                    </div>
                    <div class="col-md-3">
                        <label for="fname">First Name <span class="required">*</span></label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First Name" required>                
                    </div>
                    <div class="col-md-3">
                        <label for="mname">Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your Middle Name">                
                    </div>
                    <div class="col-md-3">
                        <label for="Alexis">Alexis <span class="required">*</span></label>
                        <input type="text" class="form-control" id="Alexis" name="Alexis" placeholder="Enter your Alexis" required>                
                    </div>


                    <div class="col-md-6">
                        <label for="Address">Address <span class="required">*</span></label>
                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter you Full Address" required>                
                    </div>
                    <div class="col-md-3">
                        <label for="bday">Birthdate <span class="required">*</span></label>
                        <input type="date" class="form-control" id="bday" name="bday" required>                
                    </div>
                    <div class="col-md-3">
                        <label for="gender">Gender <span class="required">*</span></label>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="Null">Select Gender</option>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <label for="contact">Contact Number <span class="required">*</span></label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your Contact Number" required>
                    </div>
                    <div class="col-md-3">
                        <label for="contact">Email </label>
                        <input type="text" class="form-control" id="contact" name="EmailAdd" placeholder="Enter your Email Address">
                    </div>
                    <div class="col-md-3">
                        <label for="chapter">Chapter <span class="required">*</span></label>
                        <select id="chapter" name="chapter" class="form-select" required>
                            <option value="Null">Select Chapter</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="Position">Position <span class="required">*</span></label>
                        <select id="Position" name="Position" class="form-select" required>
                            <option value="Null">Select Chapter</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="reset" class="btn btn-soft-secondary">Reset</button>  
                        <button type="submit" class="btn btn-soft-success" name="submit">Save</button>                     
                        <!-- <input type="submit" value="Save" class="btn btn-soft-success" name="submit"> -->
                    </div>

                </div>
            </form>
        
        </div>

        </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <?php 
        include_once 'view/layout_footers.php';
    ?>

    <!-- End Footer -->
  </main>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="./assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
  <script src="./assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/quill/dist/quill.min.js"></script>
  <script src="./assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="./assets/vendor/jszip/dist/jszip.min.js"></script>
  <script src="./assets/vendor/pdfmake/build/pdfmake.min.js"></script>
  <script src="./assets/vendor/pdfmake/build/vfs_fonts.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      });

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function() {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function() {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function() {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function() {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function() {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')


        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')


        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("createProjectStepFormProgress").style.display = 'none'
            document.getElementById("createProjectStepFormContent").style.display = 'none'
            document.getElementById("createProjectStepDetails").style.display = 'none'
            document.getElementById("createProjectStepTerms").style.display = 'none'
            document.getElementById("createProjectStepMembers").style.display = 'none'
            document.getElementById("createProjectStepSuccessMessage").style.display = 'block'
            const formContainer = document.getElementById('formContainer')
          }
        })
      }
    })()
  </script>

  <!-- Style Switcher JS -->
    <?php 
        include_once 'view/layout_scripts.php';
    ?>

</body>
</html>