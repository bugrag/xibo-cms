<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
    <head>
        <meta name="generator" content="HTML Tidy, see www.w3.org">
        <meta http-equiv="Content-Type" content=
        "text/html; charset=iso-8859-1">

        <title><?php echo PRODUCT_NAME; ?> Documentation</title>
        <link rel="stylesheet" type="text/css" href="../../css/doc.css">
        <meta http-equiv="Content-Type" content="text/html">
		<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
		<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />
        <link href="img/favicon.ico" rel="shortcut icon">
        <!-- Javascript Libraries -->
		<script type="text/javascript" src="lib/jquery.pack.js"></script>
		<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
		<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
    </head>

    <body>
        <h2>Schedule &amp; Edit Event</h2>

        <p>The &ldquo;Schedule an Event&rdquo; or &ldquo;Edit Scheduled Event&rdquo; form allows you to specify precise details
        about the playlist that you are scheduling. On this form you can alter the Start and End Time as well as the
        Campaign/Layout that is being scheduled and the Displays that it will be presented on.</p>

	<blockquote>
	  	<a name="Select_Displays" id="Select_Displays"></a><h3>Displays Selection</h3>
	  	<p>Selecting more than one display will create &ldquo;linked events&rdquo;. These
  		events can then be updated together or as a single unit.</p>
        
  		<a name="Delect_Displays" id="Delect_Displays"></a><h3>Delete Display's Schedule Event</h3>
  		<p>To remove the a particular Display from the assigned schedule event, just uncheck the diplay member.</p>      

  		<a name="Recurrence" id="Recurrence"></a><h3>Recurrence</h3>
  		<p>The <?php echo PRODUCT_NAME; ?> scheduler features the ability to create recurring events. To set recurrence for events, select the
  		required "Repeats" value from the list and the appropriate additional fields will be revealed.</p>
  		<p>A scheduled event can be repeated at defined interval (hourly, daily, weekly, monthly or yearly) until the specified date/time.</p>

		<p><img alt="Schedule Event" src="schedule_event.png"
		style="display: block; text-align: center; margin-left: auto; margin-right: auto"
		width="529" height="267"></p>

  		<a name="Priority_Schedule" id="Priority_Schedule"></a><h3>Priority Schedule</h3>
  		<p>Priority schedules are only available to users with Administrator privileges. Priority schedules allow you to add 
  		a layout to the schedule that overrides all the other ones that are scheduled. That could be useful for displaying 
  		temporary important notices, or overriding the schedule for a specific event without having to cancel the layouts 
  		that would normally be running at that time.</p>
  		<p>When adding a new schedule, or when editing an existing schedule, tick the "Priority" box to make the schedule 
  		override the others. You may schedule multiple priority layouts at once. They will be shown in a cycle in the same 
  		way as non-priority layouts would be.</p>
	</blockquote>

	<?php include('../../template/footer.php'); ?>
    </body>
</html>
