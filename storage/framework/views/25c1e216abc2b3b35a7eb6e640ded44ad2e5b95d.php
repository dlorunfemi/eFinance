<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(trans('panel.site_title')); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" />
    <?php echo $__env->yieldContent('styles'); ?>
    <style>
        body {
            font-family: "Muli", sans-serif !important;
        }
    </style>
</head>

<body class="c-app">

    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <a class="c-header-brand d-lg-none" href="#"><?php echo e(trans('panel.site_title')); ?></a>

            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <i class="fas fa-fw fa-bars"></i>
            </button>

            <ul class="row c-sidebar-nav pt-3" style="margin-top: -1px">
                <li class="col-md-3">
                    <select class="searchable-field form-control">
        
                    </select>
                </li>
            </ul>
        </header>


                    <?php if(session('message')): ?>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert"><?php echo e(session('message')); ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($errors->count() > 0): ?>
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php echo $__env->yieldContent('content'); ?>

            <form id="logoutform" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script>
        $(function() {
  let csvButtonTrans = '<?php echo e(trans('global.datatables.csv')); ?>'
  let excelButtonTrans = '<?php echo e(trans('global.datatables.excel')); ?>'
  let pdfButtonTrans = '<?php echo e(trans('global.datatables.pdf')); ?>'
  let printButtonTrans = '<?php echo e(trans('global.datatables.print')); ?>'
  let selectAllButtonTrans = '<?php echo e(trans('global.select_all')); ?>'
  let selectNoneButtonTrans = '<?php echo e(trans('global.deselect_all')); ?>'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['<?php echo e(app()->getLocale()); ?>']
    },
    columnDefs: [
    ]
    ,
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    <script>
        $(document).ready(function () {
    $(".notifications-menu").on('click', function () {
        if (!$(this).hasClass('open')) {
            $('.notifications-menu .label-warning').hide();
            $.get('/admin/user-alerts/read');
        }
    });
});

    </script>
    <script>
        $(document).ready(function() {
    $('.searchable-field').select2({
        minimumInputLength: 3,
        ajax: {
            url: '<?php echo e(route("admin.globalSearch")); ?>',
            dataType: 'json',
            type: 'GET',
            delay: 200,
            data: function (term) {
                return {
                    search: term
                };
            },
            results: function (data) {
                return {
                    data
                };
            }
        },
        escapeMarkup: function (markup) { return markup; },
        templateResult: formatItem,
        templateSelection: formatItemSelection,
        placeholder : '<?php echo e(trans('global.search')); ?>...',
        language: {
            inputTooShort: function(args) {
                var remainingChars = args.minimum - args.input.length;
                var translation = '<?php echo e(trans('global.search_input_too_short')); ?>';

                return translation.replace(':count', remainingChars);
            },
            errorLoading: function() {
                return '<?php echo e(trans('global.results_could_not_be_loaded')); ?>';
            },
            searching: function() {
                return '<?php echo e(trans('global.searching')); ?>';
            },
            noResults: function() {
                return '<?php echo e(trans('global.no_results')); ?>';
            },
        }

    });
    function formatItem (item) {
        if (item.loading) {
            return '<?php echo e(trans('global.searching')); ?>...';
        }
        var markup = "<div class='searchable-link' href='" + item.url + "'>";
        markup += "<div class='searchable-title'>" + item.model + "</div>";
        $.each(item.fields, function(key, field) {
            markup += "<div class='searchable-fields'>" + item.fields_formated[field] + " : " + item[field] + "</div>";
        });
        markup += "</div>";

        return markup;
    }

    function formatItemSelection (item) {
        if (!item.model) {
            return '<?php echo e(trans('global.search')); ?>...';
        }
        return item.model;
    }
    $(document).delegate('.searchable-link', 'click', function() {
        var url = $(this).attr('href');
        window.location = url;
    });
});

    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH /opt/lampp/htdocs/eFinance/resources/views/layouts/admin2.blade.php ENDPATH**/ ?>