<?php $BASEURL='assets/'; ?>
    <script src="<?php print $BASEURL; ?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php print $BASEURL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php print $BASEURL; ?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php print $BASEURL; ?>bower_components/raphael/raphael-min.js"></script>
    <script src="<?php print $BASEURL; ?>bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php print $BASEURL; ?>js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
<!-- Calendar Theme JavaScript -->
<script src="<?php print $BASEURL; ?>dist/js/sb-admin-2.js"></script>
<link rel='stylesheet' href='<?php print $BASEURL; ?>calendar/lib/cupertino/jquery-ui.min.css' />
<link href='<?php print $BASEURL; ?>calendar/fullcalendar.css' rel='stylesheet' />
<link href='<?php print $BASEURL; ?>calendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php print $BASEURL; ?>calendar/lib/moment.min.js'></script>
<script src='<?php print $BASEURL; ?>calendar/lib/jquery.min.js'></script>
<script src='<?php print $BASEURL; ?>calendar/fullcalendar.min.js'></script>
<script>

 $(document).ready(function() {

  $('#calendar').fullCalendar({
   theme: true,
   header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
   },
   defaultDate: '2015-02-12',
   editable: true,
   eventLimit: true, // allow "more" link when too many events
   events: [
    {
     title: 'All Day Event',
     start: '2015-02-01'
    },
],
});
});
</script>
<!-- Calendar Theme JavaScript -->

</body>

</html>
