@if (empty($active) || $active == 'true')
$('body').on('click', '#inactive', function () {
  var id = $(this).data("id");
  $.ajax({
    type: "get", url: "{{ URL::current() }}/inactive/"+id, processing: true, serverSide: true,
    success: function (data) {
    var oTable = $('#exilednoname_table').dataTable();
    oTable.fnDraw(false);
      
    },
    error: function (data) {
      toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
      toastr.error("{{ __('default.notification.error./') }}");
    }
  });
});
@endif
