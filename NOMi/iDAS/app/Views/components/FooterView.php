    </div>
    <!-- NOMi - Main Container - End -->
    <!-- Footer - Start -->
    <footer>
      <!-- NOMi - Bootstrap JavaScript File - Start -->
      <script src="<?php echo base_url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
      <!-- NOMi - Bootstrap JavaScript File - End -->

      <!-- NOMi - iMain JavaScript File - Start -->
      <script src="<?php echo base_url('/assets/js/iMain.js') ?>"></script>
      <!-- NOMi - iMain JavaScript File - End -->

<!--
<script>
  function sessionActivityWatcher()
  {
    var maxInactivityTime = 0.10; //In minutes.

    
    var isExpired = false;
    maxInactivityTime *= (60*1000); //1000 milliseconds = 1 second.

    var timeInterval = setInterval(sessionExpiredAlert, maxInactivityTime);

    function sessionExpiredAlert()
    {
      clearInterval(timeInterval);
      
      isExpired = true;
      var sessionTimeOutModal = new bootstrap.Modal(document.getElementById('sessionTimeOutModal'),
      {
        keyboard: false,
        focus:    true,
        backdrop: "static"
      });

      sessionTimeOutModal.show();
      console.log('updated');
    }
    //Reset time on any activity
    function resetActivityTime()
    {
      if (!isExpired)
      {
        clearInterval(timeInterval);
        timeInterval = setInterval(sessionExpiredAlert, maxInactivityTime);
        console.log('updated');
      } 
    }

    var activityEvents = ['mousedown', 'mousemove', 'keydown', 'scroll', 'touchstart']; //An array of DOM events.
    //register the activity function as the listener parameter.
    for (var i = 0; i < activityEvents.length; i++)
    {
      document.addEventListener(activityEvents[i], resetActivityTime, true);
    }
  }

  <?php //if (isLoggedIn()) { ?>
    sessionActivityWatcher();
    console.log('logged in');
  <?php //} ?>
</script> -->
    </footer>
    <!-- NOMi - Footer - End -->
  </body>
</html>