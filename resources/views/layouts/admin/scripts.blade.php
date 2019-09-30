<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/fullcalender.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('js/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('js/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/pace.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/gijgo.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script>
    $("#datetime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii'
    });
</script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>


<script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>




<script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
	</script>
	
	<script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
	</script>
	
	<script>
		// for the task index page
	$(document).ready(function(){
		// Add minus icon for collapse element which is open by default
		$(".collapse.show").each(function(){
			$(this).siblings(".card-header").find(".btn i").html("remove");
			$(this).prev(".card-header").addClass("highlight");
		});
		
		// Toggle plus minus icon on show hide of collapse element
		$(".collapse").on('show.bs.collapse', function(){
			$(this).parent().find(".card-header .btn i").html("remove");
		}).on('hide.bs.collapse', function(){
			$(this).parent().find(".card-header .btn i").html("add");
		});
		
		// Highlight open collapsed element 
		$(".card-header .btn").click(function(){
			$(".card-header").not($(this).parents()).removeClass("highlight");
			$(this).parents(".card-header").toggleClass("highlight");
		});
	});
</script>

<script>
 $('#input').datetimepicker({ footer: true, modal: true });
 </script>




